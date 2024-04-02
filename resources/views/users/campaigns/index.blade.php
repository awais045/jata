@extends('users.layouts.main')
@section('contant')
    <style>
        .form-control:focus {
            box-shadow: none !important;
        }

        .accordion-button::after {
            background-image: url(../assets/images/arrow2.png) !important;
        }

        .accordion-item {
            border-top: 1px solid rgba(0, 0, 0, .125) !important;
            padding: 20px;
            border-radius: 16px !important;
        }

        .accordion-button:not(.collapsed) {
            background-color: white;
            color: #2E3238;
            box-shadow: none !important;
            border-bottom: 1px solid #2E32381F !important;
        }

        .accordion-button {
            font-size: 16px;
            color: #2E3238;
            font-weight: 500;
            line-height: 24px;
            letter-spacing: -0.02em;
        }

        .accordion-button:focus {
            z-index: 3;
            border-color: #86b7fe;
            outline: 0;
            box-shadow: none !important;
        }

        .page-item.active .page-link {
            border-radius: 99px;
            z-index: 1;
            color: #2e3238cc;
            background-color: #F5F5F5;
            border-color: #F5F5F5;
        }

        .page-link {
            color: #2E3238CC;
            border: none !important;
            padding-left: 15px !important;
            padding-right: 15px !important;
        }

        .table td,
        .table th {
            vertical-align: top;
            border-top: 1px solid #dee2e6;
        }

        .heading {
            font-size: 14px !important;
            text-align: center;
        }

        .heading1 {
            font-size: 14px !important;
            text-align: center;
            color: #2E323852 !important;
        }

        .t-heading {
            font-size: 12 !important;
            text-align: center;
            color: #2E323852 !important;
            background: #F5F5F5 !important;
        }

        .table>:not(caption)>*>* {
            padding: 0.5rem 7.7px;
            background-color: var(--bs-table-bg);
            border-bottom-width: 1px;
            box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);
        }

        .comment_section {
            text-align: center;
        }

        .comment_section i {
            padding-top: 5px;
            margin-top: 1px;
            color: white;
            background: #34affe !important;
            border-radius: 100px;
            width: 30px;
            height: 29px;
        }

        .bottom-row {
            padding-top: 640px !important;
        }

        @media (min-width: 320px) and (max-width: 450px) {
            .live {
                display: none;
            }
        }

        @media (min-width: 1024px) and (max-width: 3000px) {
            .mobile_section {
                display: none;
            }
        }
    </style>
    <script src="assets/vendor/libs/sortablejs/sortable.js" />
    <script>
        const cardEl = document.getElementById('sortable-cards');
        Sortable.create(cardEl);
    </script>
    <div class="content-wrapper">
        <div class="container mobile_section mt-3">
            <div class="row">
                <div class="col-md-6 col-12">
                    <div class="row">
                        <div class="col-md-3 col-1">
                            <div class="d-md-none">
                                <button style="padding-left: 0px !important;"
                                    class="navbar-toggler sidebar-mobile-main-toggle" type="button">
                                    <i class="fas fa-sliders-h" style="color: black;"></i>
                                </button>
                            </div>
                        </div>
                        <div class="col-md-12 col-9">
                            <h1 class="Calendar" style="font-size: 24px; margin-top: -5px;">Kampagner</h1>
                        </div>
                        <div class="col-md-3 col-1">
                            <div class="comment_section">
                                <i class="fas fa-comment"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="contendt">
            <div class="col-xl-12">
                <div class="row live">
                    <div class="col-md-4">
                        <h2 class="p-3 Calendar">Kampagner</h2>
                    </div>
                    <div class="col-md-8">
                        <div class="row live">
                            <div class="col-md-4">
                                <a href="" class="btn btn-primary mt-3 w-100"><i class="fa fa-video"
                                        style="color:black;"></i>Live salg</a>
                            </div>
                            <div class="col-md-4">
                                <a href="" class="btn btn-primary mt-3 w-100"><img
                                        src="website/user/../assets/images/tag1.PNG"></i>Kommentar salg</a>
                            </div>
                            <div class="col-md-4">
                                <a href="{{url('campaigns/create')}}" class="btn btn-info mt-3 w-100"> <i class="fa text-light">&#xf03e;</i>Nyt
                                    medie
                                    indhold</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 mt-1">
                <div class="card" style="border-radius: 23.99px;margin-bottom: 0px !important;">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8 col-8">
                                <div class=" text-end pt-2 d-flex">
                                    <i class="fas fa-search" style="color: #2E3238;margin-top: 15px;"></i>
                                    <input type="text" class="form-control main_form" placeholder="Søg..." name=""
                                        style="    border: none;
								width: 160px;
								border-bottom: 1px solid #2E3238;
								border-radius: 0px !important;">
                                </div>
                            </div>
                            <div class="col-md-4 col-4">
                                <div class="d-flex justify-content-end">
                                    <div class="pt-3">
                                        <img src="website/user/../assets/images/filter.png" style="width:20px;">
                                    </div>
                                    <div class="">
                                        <p class="pt-3">Filters</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12 col-lg-12 col-xl-12 table-responsive">
                                <table class="table " style="border: 1px solid #2E32381F;border-radius: 16px;">
                                    <thead>
                                        <tr>
                                            <th scope="col" class=" t-heading">#</th>
                                            <th scope="col" class=" t-heading">Navn</th>
                                            <th scope="col" class=" t-heading">Kampagne navn</th>
                                            <th scope="col" class=" t-heading">Kampagnetidspunkt</th>
                                            <th scope="col" class=" t-heading"> Kampagnetype</th>
                                            <th scope="col" class=" t-heading">Social Type</th>
                                            <th scope="col" class=" t-heading">Fil</th>
                                            <th scope="col" class=" t-heading">Kampagne</th>
                                            <th scope="col" class=" t-heading">Product Assignment</th>
                                            <th scope="col" class=" t-heading">Svar</th>
                                            <th scope="co" class=" t-heading">...</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($campaigns as $campaign)
                                            <tr>
                                                <th scope="row" class="pt-3">{{$campaign->id}}</th>
                                                <td class="heading pt-3">{{$campaign->name}}</td>
                                                <td class="heading pt-3">{{$campaign->campaign_name}}</td>
                                                <td class="heading pt-3">{{$campaign->campaign_time}}</td>
                                                <td class="heading "><a
                                                       href="{{url('campaigns/upload_media/' . $campaign->id)}}" class="btn btn-info text-light rounded-pill">{{$campaign->campaign_type}}</a>
                                                </td>
                                                <td class="heading1 pt-3">{{$campaign->social_type}}</td>
                                                <td class="heading1 pt-3">{{$campaign->social_type}}</td>
                                                <td class="heading pt-3"><img src="user/image/print.png"
                                                        style="width: 20px;">
                                                </td>
                                                <td>
                                                    <a
                                                        href="{{ url('campaigns/assign/' . $campaign->id ) }}">
                                                        <i class="fa fa-edit" style="color:#2E32387A;"></i>

                                                    </a>

                                                </td>
                                                <td class="heading pt-3"> <a
                                                        href="{{ url('campaigns/' . $campaign->id . '/edit') }}">
                                                        <i class="fa fa-edit" style="color:#2E32387A;"></i>
                                                </td>
                                                <td class="heading pt-3">
                                                    <form action="{{ route('campaigns.destroy', $campaign->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm"> <i class="fa fa-trash-o"
                                                                ></i> </button>
                                                    </form></i>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="row mt-4">
                                    <div class="col-md-6 mt-3">
                                        <nav aria-label="...">
                                            <ul class="pagination">

                                            </ul>
                                        </nav>
                                    </div>
                                    <div class="col-md-6 text-end mt-3">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
