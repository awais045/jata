@extends('en.users.layouts.main')
@section('contant')
<style>
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

@media (min-width: 320px) and (max-width: 450px) {
    .bottom-row {
        padding-top: 10px !important;
    }

    .live {
        display: none !important;
    }
}

@media (min-width: 1024px) and (max-width: 3000px) {
    .mobile_section {
        display: none !important;
    }
}
</style>

<div class="content-wrapper">
    <div class="content">
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
                            <h1 class="Calendar" style="font-size: 24px; margin-top: -5px;">Video Guides</h1>
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
        <div class="row live">
            <div class="col-xl-12">
                <div class="row">
                    <div class="col-md-8">
                        <h2 class="p-3 Calendar">Video Guides</h2>
                    </div>
                    <div class="col-md-4">

                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-12">
                <ul class="nav nav-fill nav-tabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="fill-tab-0" data-bs-toggle="tab" href="#fill-tabpanel-0"
                            role="tab" aria-controls="fill-tabpanel-0" aria-selected="true"> Featured Video Guides </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="fill-tab-1" data-bs-toggle="tab" href="#fill-tabpanel-1" role="tab"
                            aria-controls="fill-tabpanel-1" aria-selected="false"> Getting Started </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="fill-tab-2" data-bs-toggle="tab" href="#fill-tabpanel-2" role="tab"
                            aria-controls="fill-tabpanel-2" aria-selected="false"> Advanced Features, </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="fill-tab-3" data-bs-toggle="tab" href="#fill-tabpanel-3" role="tab"
                            aria-controls="fill-tabpanel-3" aria-selected="false"> Troubleshooting </a>
                    </li>
                </ul>
                <div class="tab-content pt-2" id="tab-content">
                    <div class="tab-pane active" id="fill-tabpanel-0" role="tabpanel" aria-labelledby="fill-tab-0">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="card" style="border-radius: 16px;">
                                    <div class="card-body">
                                        <iframe width="100%" src="https://www.youtube.com/embed/tgbNymZ7vqY">
                                        </iframe>
                                        <p class="video-heading">
                                            Video Guide Name
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card" style="border-radius: 16px;">
                                    <div class="card-body">
                                        <iframe width="100%" src="https://www.youtube.com/embed/tgbNymZ7vqY">
                                        </iframe>
                                        <p class="video-heading">
                                            Video Guide Name
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card" style="border-radius: 16px;">
                                    <div class="card-body">
                                        <iframe width="100%" src="https://www.youtube.com/embed/tgbNymZ7vqY">
                                        </iframe>
                                        <p class="video-heading">
                                            Video Guide Name
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card" style="border-radius: 16px;">
                                    <div class="card-body">
                                        <iframe width="100%" src="https://www.youtube.com/embed/tgbNymZ7vqY">
                                        </iframe>
                                        <p class="video-heading">
                                            Video Guide Name
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-3">
                                <div class="card" style="border-radius: 16px;">
                                    <div class="card-body">
                                        <iframe width="100%" src="https://www.youtube.com/embed/tgbNymZ7vqY">
                                        </iframe>
                                        <p class="video-heading">
                                            Video Guide Name
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card" style="border-radius: 16px;">
                                    <div class="card-body">
                                        <iframe width="100%" src="https://www.youtube.com/embed/tgbNymZ7vqY">
                                        </iframe>
                                        <p class="video-heading">
                                            Video Guide Name
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card" style="border-radius: 16px;">
                                    <div class="card-body">
                                        <iframe width="100%" src="https://www.youtube.com/embed/tgbNymZ7vqY">
                                        </iframe>
                                        <p class="video-heading">
                                            Video Guide Name
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card" style="border-radius: 16px;">
                                    <div class="card-body">
                                        <iframe width="100%" src="https://www.youtube.com/embed/tgbNymZ7vqY">
                                        </iframe>
                                        <p class="video-heading">
                                            Video Guide Name
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="fill-tabpanel-1" role="tabpanel" aria-labelledby="fill-tab-1">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="card" style="border-radius: 16px;">
                                    <div class="card-body">
                                        <iframe width="100%" src="https://www.youtube.com/embed/tgbNymZ7vqY">
                                        </iframe>
                                        <p class="video-heading">
                                            Video Guide Name
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card" style="border-radius: 16px;">
                                    <div class="card-body">
                                        <iframe width="100%" src="https://www.youtube.com/embed/tgbNymZ7vqY">
                                        </iframe>
                                        <p class="video-heading">
                                            Video Guide Name
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card" style="border-radius: 16px;">
                                    <div class="card-body">
                                        <iframe width="100%" src="https://www.youtube.com/embed/tgbNymZ7vqY">
                                        </iframe>
                                        <p class="video-heading">
                                            Video Guide Name
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card" style="border-radius: 16px;">
                                    <div class="card-body">
                                        <iframe width="100%" src="https://www.youtube.com/embed/tgbNymZ7vqY">
                                        </iframe>
                                        <p class="video-heading">
                                            Video Guide Name
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-3">
                                <div class="card" style="border-radius: 16px;">
                                    <div class="card-body">
                                        <iframe width="100%" src="https://www.youtube.com/embed/tgbNymZ7vqY">
                                        </iframe>
                                        <p class="video-heading">
                                            Video Guide Name
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card" style="border-radius: 16px;">
                                    <div class="card-body">
                                        <iframe width="100%" src="https://www.youtube.com/embed/tgbNymZ7vqY">
                                        </iframe>
                                        <p class="video-heading">
                                            Video Guide Name
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card" style="border-radius: 16px;">
                                    <div class="card-body">
                                        <iframe width="100%" src="https://www.youtube.com/embed/tgbNymZ7vqY">
                                        </iframe>
                                        <p class="video-heading">
                                            Video Guide Name
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card" style="border-radius: 16px;">
                                    <div class="card-body">
                                        <iframe width="100%" src="https://www.youtube.com/embed/tgbNymZ7vqY">
                                        </iframe>
                                        <p class="video-heading">
                                            Video Guide Name
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="fill-tabpanel-2" role="tabpanel" aria-labelledby="fill-tab-2">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="card" style="border-radius: 16px;">
                                    <div class="card-body">
                                        <iframe width="100%" src="https://www.youtube.com/embed/tgbNymZ7vqY">
                                        </iframe>
                                        <p class="video-heading">
                                            Video Guide Name
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card" style="border-radius: 16px;">
                                    <div class="card-body">
                                        <iframe width="100%" src="https://www.youtube.com/embed/tgbNymZ7vqY">
                                        </iframe>
                                        <p class="video-heading">
                                            Video Guide Name
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card" style="border-radius: 16px;">
                                    <div class="card-body">
                                        <iframe width="100%" src="https://www.youtube.com/embed/tgbNymZ7vqY">
                                        </iframe>
                                        <p class="video-heading">
                                            Video Guide Name
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card" style="border-radius: 16px;">
                                    <div class="card-body">
                                        <iframe width="100%" src="https://www.youtube.com/embed/tgbNymZ7vqY">
                                        </iframe>
                                        <p class="video-heading">
                                            Video Guide Name
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-3">
                                <div class="card" style="border-radius: 16px;">
                                    <div class="card-body">
                                        <iframe width="100%" src="https://www.youtube.com/embed/tgbNymZ7vqY">
                                        </iframe>
                                        <p class="video-heading">
                                            Video Guide Name
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card" style="border-radius: 16px;">
                                    <div class="card-body">
                                        <iframe width="100%" src="https://www.youtube.com/embed/tgbNymZ7vqY">
                                        </iframe>
                                        <p class="video-heading">
                                            Video Guide Name
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card" style="border-radius: 16px;">
                                    <div class="card-body">
                                        <iframe width="100%" src="https://www.youtube.com/embed/tgbNymZ7vqY">
                                        </iframe>
                                        <p class="video-heading">
                                            Video Guide Name
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card" style="border-radius: 16px;">
                                    <div class="card-body">
                                        <iframe width="100%" src="https://www.youtube.com/embed/tgbNymZ7vqY">
                                        </iframe>
                                        <p class="video-heading">
                                            Video Guide Name
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="fill-tabpanel-3" role="tabpanel" aria-labelledby="fill-tab-3">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="card" style="border-radius: 16px;">
                                    <div class="card-body">
                                        <iframe width="100%" src="https://www.youtube.com/embed/tgbNymZ7vqY">
                                        </iframe>
                                        <p class="video-heading">
                                            Video Guide Name
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card" style="border-radius: 16px;">
                                    <div class="card-body">
                                        <iframe width="100%" src="https://www.youtube.com/embed/tgbNymZ7vqY">
                                        </iframe>
                                        <p class="video-heading">
                                            Video Guide Name
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card" style="border-radius: 16px;">
                                    <div class="card-body">
                                        <iframe width="100%" src="https://www.youtube.com/embed/tgbNymZ7vqY">
                                        </iframe>
                                        <p class="video-heading">
                                            Video Guide Name
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card" style="border-radius: 16px;">
                                    <div class="card-body">
                                        <iframe width="100%" src="https://www.youtube.com/embed/tgbNymZ7vqY">
                                        </iframe>
                                        <p class="video-heading">
                                            Video Guide Name
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-3">
                                <div class="card" style="border-radius: 16px;">
                                    <div class="card-body">
                                        <iframe width="100%" src="https://www.youtube.com/embed/tgbNymZ7vqY">
                                        </iframe>
                                        <p class="video-heading">
                                            Video Guide Name
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card" style="border-radius: 16px;">
                                    <div class="card-body">
                                        <iframe width="100%" src="https://www.youtube.com/embed/tgbNymZ7vqY">
                                        </iframe>
                                        <p class="video-heading">
                                            Video Guide Name
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card" style="border-radius: 16px;">
                                    <div class="card-body">
                                        <iframe width="100%" src="https://www.youtube.com/embed/tgbNymZ7vqY">
                                        </iframe>
                                        <p class="video-heading">
                                            Video Guide Name
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card" style="border-radius: 16px;">
                                    <div class="card-body">
                                        <iframe width="100%" src="https://www.youtube.com/embed/tgbNymZ7vqY">
                                        </iframe>
                                        <p class="video-heading">
                                            Video Guide Name
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection