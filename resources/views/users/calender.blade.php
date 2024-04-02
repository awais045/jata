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
<style>
.fc-icon-chevron-left:after {
    content: none !Important;
}

.fc-icon-chevron-right:after {
    content: none !Important;
}

.main_heading_dashbord {
    margin-bottom: 0px !important;
    font-weight: 800;
    letter-spacing: 1px;
}

.dashboard_card a {
    color: black !important;
}

.dashboard_card {
    box-shadow: 0px 0px 20px 0px lightgray;
    border: none !important;
    border-radius: 10px;
    background: linear-gradient(90.8deg, #FFFFFF 0%, #E3E7ED 87.06%);
    padding: 0px !important;
}

.page-header-light {
    background-color: transparent !important;
    border-bottom: 3px solid #2d2f39 !important;
    color: white !important;
    display: none;
}

.one {
    font-size: 24px;
    font-weight: 600;
    line-height: 30px;
    letter-spacing: -0.02em;
    color: #2E3238;
    text-align: left;
}

.total {
    font-size: 16px;
    font-weight: 400;
    line-height: 24px;
    letter-spacing: -0.02em;
    text-align: left;
    color: #2E3238B8;
}

.calender-card {
    background-color: white;
    border-radius: 20px;
}

.navigator {
    display: none;
}

.event-column,
.hour-column {
    position: relative;
}

.hour-column {
    width: 10%;
    float: left;
}

.event-column {
    width: 90%;
    float: right;
    height: 1566px;
    position: relative;
}

.headings {
    width: 100%;
    border-bottom: 1px solid rgba(218, 218, 218, 0.5);
}

.heading {
    display: inline-block;
    padding: 15px 0;

}

.empty.heading {
    text-align: center;
}

.empty.heading span {
    display: none;
    text-align: center;
    transition: color 400ms ease;
}

.empty.heading a {
    text-align: center;
    text-decoration: none;
}

.empty.heading a:hover span {
    color: #000;
}

.weekdays {
    width: 100%;
    display: inline-block;
    float: right;
}

.weekdays .heading {
    width: 14.28571428571429%;
    float: left;
    text-align: center;
}

.week-view {
    height: 1500px;
    position: relative;
}

.week-grid {
    position: absolute;
    top: 51px;
    left: 0;
    display: block;
    width: 100%;
    height: 100%;
}

.hours-grid {
    width: 100%;
    float: right;
    border: 1px solid rgba(218, 218, 218, 1);
    height: 1500px;
    top: 0;
    border-top: 0;
    z-index: 1;
}

.grid {
    height: 60px;
    border-bottom: 1px solid rgba(218, 218, 218, 0.5);
}

.grid:last-child {
    border-bottom: 0;
}

.week-body {
    width: 100%;
    height: 100%;
    background: #fff
}

.hours {
    /*   width: 10%;
  float: left; */
    height: 100%;
    backround: #fff;
}

.events {
    width: 100%;
    float: right;
    height: 1500px;
    border-left: 1px solid rgba(218, 218, 218, 1);
    position: relative;
}

.hour-column {
    z-index: 2000;
    background: #fff;
}

.hour-column .headings {
    height: 51px;
    text-align: center;
}

.hr {
    text-align: right;
    line-height: 60px;
    text-align: center;
    text-transform: uppercase;
    font-size: 12px;
    color: #000;
    opacity: 0.5;
    max-height: 60px;
    border-bottom: 1px solid rgba(218, 218, 218, 1);
}

.event-outer {
    width: 100%;
    position: relative;
    height: 100%;
}

.event-cont {
    position: relative;
    height: 100%;
    width: 14.28571428571429%;
    float: left;
    border-right: 1px solid rgba(218, 218, 218, 1);
}

.event-cont:last-child {
    border-right: 0;
}

.event {
    width: 100%;
    padding: 5px 10px;
    min-height: 30px;
    position: absolute;
    white-space: nowrap;
    overflow: hidden;
    cursor: pointer;
}

.event p {
    font-size: 14px;
    transition: all 0.4s ease;
    text-overflow: ellipsis;
    z-index: 20;
    position: relative;
    white-space: nowrap;
    overflow: hidden;
}

.event span ar {
    position: absolute;
    top: 0;
    left: 0;
    width: 6px;
    height: 100%;
    display: block;
    transition: all 0.4s ease;
    z-index: 0;
}

.event:hover span.bar {
    width: 100%;
}

.event:hover p {
    color: #fff;
}

.navigator a {
    display: inline-block;
    padding: 15px;
    border-radius: 3px;
    background: rgba(218, 218, 218, 0.3);
    transition: color 400ms ease;
    color: rgba(0, 0, 0, 0.5);
}

.navigator a:hover {
    text-decoration: none;
    color: #000;
}

@media screen and (max-width: 650px) {
    /*   .events {
        overflow-x: scroll;
  }
  .event-outer {
    width: 800px !important;
  } */

    /*   .event-cont, .weekdays .heading {
    width: 50%;
  } */

    /*   .non-visible {
    display: none;
  } */

    .hour-column {
        position: absolute;
        width: 60px;
    }

    .event-column {
        width: 800px;
        float: left;
        /*     margin-left: 60px; */
    }

    .navigator {
        display: block;
        padding: 10px 0;
    }

    .go-right {
        text-align: right;
    }
}

.container-fluid {
    padding: 0;
}

.bottom-row {
    padding-top: 450px !important;
}

@media (min-width: 320px) and (max-width: 450px) {
    .bottom-row {
        padding-top: 0px !important;
    }

    .calender_mobile {
        display: none !important;
    }

    .calender_first {
        display: none !important;
    }

    a:not([href]):not([tabindex]) {
        color: inherit;
        text-decoration: none;
        font-size: 10px;
    }

    .fc-toolbar>*>:first-child {
        margin-left: 0;
        font-size: 10px;
    }

    .fc-today-button {
        display: none !important;
    }

    .fc-direction-ltr .fc-toolbar>*> :not(:first-child) {
        margin-left: 0.75em;
        font-size: 10px;
    }
}

.comment_section {
    background: #34affe;
    text-align: center;
    height: 30px;
    border-radius: 100px;
}

.comment_section i {
    margin-top: 7px;
    color: white;
}

@media (min-width: 1024px) and (max-width: 3000px) {
    .mobile_section {
        display: none !important;
    }
}
</style>
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
                                    <a href="" class="btn btn-primary mt-3 w-100"><img src="user/image/side_logo10.png"
                                            style="width: 23px;"> Live salg</a>
                                </div>
                                <div class="col-md-4">
                                    <a href="" class="btn btn-primary mt-3 w-100"><img
                                            src="website/user/../assets/user/images/tag1.PNG"></i>Kommentar salg</a>
                                </div>
                                <div class="col-md-4">
                                    <a href="" class="btn btn-info mt-3 w-100"> <img src="user/image/side_logo11.png"
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
                                                    <h3 class="number_heading">155</h3>
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
                                                    <h3 class="number_heading">255</h3>
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
