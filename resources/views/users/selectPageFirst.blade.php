@extends('users.layouts.main')
@section('contant')

<div class="content-wrapper">

    <!-- Content area -->
    <div class="content">
        <div class="container mobile_section">
            <div class="row">
                <div class="col-md-6 col-5">
                    <div class="row">
                        <div class="col-md-3 col-3">
                            <div class="d-md-none">
                                <button style="padding-left: 0px !important;"
                                    class="navbar-toggler sidebar-mobile-main-toggle" type="button">
                                    <i class="fas fa-sliders-h" style="    color: black;"></i>
                                </button>
                            </div>
                        </div>
                        <div class="col-md-2 col-9">
                            <h1 class="Calendar" style="font-size: 19px; margin-top: -5px;">Kalender</h1>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-2"></div>
                <div class="col-md-4 col-4">
                    <div class="row">
                        <div class="col-md-6 col-6">
                            <div class="comment_section">
                                <i class="fas fa-comment"></i>
                            </div>
                        </div>
                        <div class="col-md-6 col-6">
                            <div class="comment_section">
                                <i class="fas fa-plus"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card calender-card">
                                <div class="card-body">
                                    <div id='calendar'>Please select the pgae from menu first</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /support tickets -->
                </div>
            </div>
        </div>
    </div>

    @endsection
