@extends('users.layouts.main')
@section('contant')

<head>
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.10/index.global.min.js'></script>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // var calendarEl = document.getElementById('calendar');
        // var calendar = new FullCalendar.Calendar(calendarEl, {
        //     initialView: 'dayGridMonth'
        // });
        // calendar.render();


        var calendarEl = document.getElementById('calendar');
            var events = @json($events);
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                events: events.map(function(event) {
                    return {
                        title: event.name,
                        start: event.campaign_time
                    };
                })
            });

            calendar.render();
        });
    </script>
</head>

<link href="{{asset('website/assets/css/calendar.css')}}" rel="stylesheet" type="text/css">

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
                    <div class="row calender_first">
                        <div class="col-md-4">
                            <h2 class="p-3 Calendar calender_mobile">Kalender</h2>
                        </div>
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-4">
                                    <a href="{{url('campaigns/post-live-video')}}" class="btn btn-primary mt-3 w-100"><img src="user/image/side_logo10.png"
                                            style="width: 23px;"> Live salg</a>
                                </div>
                                {{-- <div class="col-md-4">
                                    <a href="{{url('campaigns/create')}}" class="btn btn-primary mt-3 w-100"><img
                                            src="website/user/../assets/user/images/tag1.PNG"></i>Kommentar salg</a>
                                </div> --}}
                                <div class="col-md-4">
                                    <a href="{{url('campaigns/create')}}" class="btn btn-info mt-3 w-100"> <img src="user/image/side_logo11.png"
                                            style="width: 20px;"> Nyt medie indhold</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-md-10">
                            <div class="row">
                                <div class="col-md-4 col-12">
                                    <div class="card number_Card">
                                        <div class="card-body" style="padding: 11px;">
                                            <div class="row">
                                                <div class="col-md-4 col-4">
                                                    <img src="user/image/sale.png" class="w-100">
                                                </div>
                                                <div class="col-md-8 col-8">
                                                    <h3 class="number_heading">{{$liveCounts}}</h3>
                                                    <p class="number_paragraph">Total Live Salg</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 col-12">
                                    <div class="card number_Card">
                                        <div class="card-body" style="padding: 11px;">
                                            <div class="row">
                                                <div class="col-md-4 col-4">
                                                    <img src="user/image/logo_side12.png" class="w-100">
                                                </div>
                                                <div class="col-md-8 col-8">
                                                    <h3 class="number_heading">75</h3>
                                                    <p class="number_paragraph">Total Kommentar Salg</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 col-12">
                                    <div class="card number_Card">
                                        <div class="card-body" style="padding: 11px;">
                                            <div class="row">
                                                <div class="col-md-4 col-4">
                                                    <img src="user/image/logo_side13.png" class="w-100">
                                                </div>
                                                <div class="col-md-8 col-8">
                                                    <h3 class="number_heading">{{$liveCountsMedia}}</h3>
                                                    <p class="number_paragraph">Total Media Post</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card calender-card">
                                <div class="card-body">
                                    <div id='calendar'></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /support tickets -->
                </div>
            </div>
        </div>
    </div>
    <!-- /content area -->
    <script>
    function deleteit() {
        return (confirm("The record will be deleted permanently. Do you really want to continue?"));
    }

    function editit() {
        return (confirm("Do you want to edit?"));
    }
    </script>
    <script src="//cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
    <script>
    CKEDITOR.replace('dcp');
    </script>
    @endsection
