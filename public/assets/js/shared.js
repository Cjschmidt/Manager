
/**
 * Allows for async communication.
 *
 * @version 1.0
 * @date 2014-10-20
 */
var arrCall = [];
function call(key, type, dataType, url, data, successHandler, failureHandler, validationHandler, errorHandler, options) {
    //data['locale'] = getLocale();

    arrCall[key] = $.ajax($.extend({
        type: type,
        dataType: dataType,
        url: url,
        data: data,
        statusCode: {
            500: function (data) {
                if (errorHandler) {
                    errorHandler(data);
                }
                else {
                    warning("Internal server error!");
                }
            },
            422: function (data) {
                if (validationHandler) {
                    validationHandler(data.responseJSON);
                }
            },
            404: function (data) {
                warning("Content not found!");
            },
            401: function (data) {
                window.location = '/';
            },
            201: function (data) {
                callHandler(dataType, data, successHandler, failureHandler);
            },
            200: function (data) {
                callHandler(dataType, data, successHandler, failureHandler);
            }
        }
    }, options));
}
function callHandler(dataType, data, successHandler, failureHandler) {
    if (dataType == 'json') {
        if (data.messages) {
            if (data.success) {
                for (var i in data.data) {
                    notifyInfo(data.data[i]);
                }
            }
            else {
                for (var i in data.data) {
                    notifyDanger(data.data[i]);
                }
            }
        }

        // If we're calling our own API we always get a success boolean back.
        if (typeof data.success === 'boolean') {
            if (data.success) {
                if (successHandler) {
                    successHandler(data);
                }
            }
            else if (failureHandler) {
                failureHandler(data);
            }
        }
        // Else we're calling another server.
        else {
            if (successHandler) {
                successHandler(data);
            }
        }
    }
    else if (dataType == 'html') {
        if (successHandler) {
            successHandler(data);
        }
    }
    else if (dataType == 'script') {
        if (successHandler) {
            successHandler(data);
        }
    } else if (dataType === false) {
        if (successHandler) {
            successHandler(data);
        }
    }
}


/**
 * Allows for easy notification building.
 *
 * @version 1.0
 * @date 2014-10-20
 */
function buildnotification(text, cssclass, important)
{
    var div = $('<div class="alert"></div>');

    if(cssclass)
    {
        div.addClass(cssclass);
    }
    else
    {
        div.addClass('information');
    }
    if(important)
    {
        div.addClass('important');
    }
    else
    {
        setTimeout(function () {
            div.slideDown(100);
        }, 10);
        setTimeout(function () {
            div.slideUp(200);

            div.fadeOut(1000);
        }, 4000);
    }
    div.append(text);

    $('#alerts').append(div);

}