@extends('users.layouts.main')
@section('contant')
<style>
.bottom-row {
    padding-top: 177px !important;
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

@media (min-width: 320px) and (max-width: 450px) {
    .bottom-row {
        padding-top: 0px !important;
    }

    .calender_mobile {
        display: none !important;
    }

    .calender_first1 {
        display: none;
    }
}
video {
    height: 300px; /* Set the desired height here */
    width: auto; /* Let the width adjust automatically */
}
@media (min-width: 1024px) and (max-width: 3000px) {
    .mobile_section {
        display: none !important;
    }

    .calender_first {
        display: none;
    }
}
</style>
@section('contant')
<div class="content-wrapper">
    <div class="container mobile_section  mt-3">
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
                        <h1 class="Calendar" style="font-size: 24px; margin-top: -5px;">Skabeloner</h1>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-2"></div>
            <div class="col-md-4 col-4">
                <div class="row">
                    <div class="col-md-6 col-6">

                    </div>
                    <div class="col-md-6 col-6 text-end">
                        <div class="comment_section">
                            <i class="fas fa-comment"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="row">
            <div class="col-xl-12">
                <div class="row">
                    <div class="col-md-8">
                        <h2 class="p-3 Calendar calender_mobile">Skabeloner</h2>
                    </div>
                    <div class="col-md-4 calender_first1">
                        <div class="row ">
                            <div class="col-md-5">
                                <a href="" class="btn btn-primary mt-3 w-100"></i>Annuller</a>
                            </div>
                            <div class="col-md-7">
                                <a href="" class="btn btn-info mt-3 w-100">Tilpas</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-12">
                <ul class="nav nav-fill nav-tabs" role="tablist">
                    {{-- <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="fill-tab-0" data-bs-toggle="tab" href="#fill-tabpanel-0"
                            role="tab" aria-controls="fill-tabpanel-0" aria-selected="true"> Instagram </a>
                    </li> --}}
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="fill-tab-1" data-bs-toggle="tab" href="#fill-tabpanel-1" role="tab"
                            aria-controls="fill-tabpanel-1" aria-selected="false"> Facebook Feed</a>
                    </li>
                </ul>
                <div class="tab-content pt-5" id="tab-content">

                    <div class="tab-pane active" id="fill-tabpanel-1" role="tabpanel" aria-labelledby="fill-tab-1">
                        <div class="row">

                            @foreach ($posts as $post)
                            <div class="col-md-4 mt-3" style="padding-left: 0px !important;">
                                <div class="card h-100" style="border-radius: 23.99px;margin-bottom: 0px !important;">
                                    <div class="card-body" style="padding:0px !important">
                                            {{-- <div class="col-md-2 col-2">
                                                <img src="../assets/images/man.png" style="width: 36px !important;">
                                            </div> --}}
                                            {{-- <div class="col-md-8 col-8">
                                                <span>{{$post->created_at}} </span>
                                            </div> --}}

                                        <div style="height: 100%;background-size: cover;background-position: center;background-repeat: no-repeat;width: 100%;">
                                            {{-- background-image: url(website/user/../assets/images/para.png);     --}}
                                            @if ($post->extension =='mp4')
                                            <video controls>
                                                <source src="{{'uploads/'.$post->image}}" type="video/mp4">
                                                <!-- Add additional source elements for different video formats -->
                                                Your browser does not support the video tag.
                                            </video>
                                            @else
                                                <img src="{{$post->image}}" class="w-100">
                                            @endif
                                        </div>


                                        <div class="row p-3"
                                            style="border-top: 2px solid #E3E4ED;border-bottom: 2px solid #E3E4ED;margin-left: 0px;">

                                            <div class="col-md-12 col-4">
                                                <p>{{$post->details}} </p>
                                            </div>
                                            <div class="col-md-12">
                                                <a href="https://www.facebook.com/photo?fbid={{$post->graph_node_id}}" target="_blank"> <i class="fab fa-facebook-f"></i></a>
                                            </div>

                                        </div>

                                        <div class="row p-3 bootom_row">
                                            <div class="col-md-2 col-2" style="padding-right: 0px !IMPORTANT;">
                                                <img src="website/user/../assets/images/man.png" class="w-100">
                                            </div>
                                            <div class="col-md-10 col-10" style="padding-right: 0px !IMPORTANT;">
                                                <p>{{$post->created_at}}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach


                        </div>
                    </div>
                </div>
            </div>
            <div class="row calender_first">
                <div class="col-md-4">
                    <div class="row ">
                        <div class="col-md-5 col-6">
                            <a href="" class="btn btn-primary mt-3 w-100"></i>Cancel</a>
                        </div>
                        <div class="col-md-7 col-6">
                            <a href="" class="btn btn-info mt-3 w-100">Customize</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection
