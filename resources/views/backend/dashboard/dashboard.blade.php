@extends('layouts.backend')
@section('body-class', 'dashboard')
@section('main')

    <div class="row dashboard-container">
        <div class="col-md-12 overview-container">
            <div class="row">
                <div class="overview col-lg-3 col-xs-4">
                    <div class="wrap">
                        <div class="icon">
                            <div class="icon-border">
                                <i class="icon-user-tie"></i>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="overview col-lg-3 col-xs-4">
                    <div class="wrap">
                        <div class="icon">
                            <div class="icon-border">

                                <i class="icon-users"></i>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="overview col-lg-3 col-xs-4">
                    <div class="wrap">
                        <div class="icon">
                            <div class="icon-border">

                                <i class="icon-user"></i>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection