@extends('en.users.layouts.main')
@section('contant')
<style>
.bottom-row {
    padding-top: 990px !important;
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

@media (min-width: 320px) and (max-width: 450px) {
    .bottom-row {
        padding-top: 10px !important;
    }
}

@media (min-width: 1024px) and (max-width: 3000px) {
    .comment_section {
        display: none !important;
    }
}
</style>
<script src="assets/vendor/libs/sortablejs/sortable.js" />
<script>
const cardEl = document.getElementById('sortable-cards');
Sortable.create(cardEl);
</script>

<div class="content-wrapper">
    <!-- Page header -->
    <div class="page-header page-header-light" style="display: none;">
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <a href="dashboard.php" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                <span class="breadcrumb-item active">Dashboard</span>
            </div>
            <div class="header-elements d-none">
                <div class="d-flex justify-content-center">

                </div>
            </div>
        </div>
    </div>
    <!-- /page header -->


    <!-- Content area -->
    <div class="content">
        <div class="container mobile_section">
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
                            <h1 class="Calendar" style="font-size: 24px; margin-top: -5px;">Create Campaign</h1>
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
        <div class="row">
            <div class="col-md-12">
                <div class="row">

                    <div class="col-md-8 mt-3">
                        <div class="card" style="border-radius: 23.99px;margin-bottom: 0px !important;">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12 col-12">
                                        <h4>
                                            Campaign Details
                                        </h4>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card" style="background: #EEF9FFE5;border: none;">
                                            <div class="card-body" style="padding:10px;">
                                                <label style="color: #2E32388F;font-size: 12px !important;
												">Campaign Name</label>
                                                <input style="border:none;background: #EEF9FFE5;" type="text"
                                                    class="form-control" placeholder="Type Here..." name="">
                                            </div>
                                        </div>

                                        <div class="card" style="background: #EEF9FFE5;border: none;">
                                            <div class="card-body" style="padding:10px;">
                                                <label style="color: #2E32388F;font-size: 12px !important;
												">Purchase Word</label>
                                                <input style="border:none;background: #EEF9FFE5;" type="text"
                                                    class="form-control" placeholder="Type Here..." name="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h5>"Like" reservations</h5>
                                            </div>
                                            <div class="col-md-6 text-end">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckChecked" checked>
                                                    <label class="form-check-label" for="flexCheckChecked">
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="ELISA">
                                            ELISA will look for quantity in the comment. Users can thus order multiple
                                            items at a time. This means that numbers cannot be used as product search
                                            words or as product sizes.
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </div><br>
                        <div class="card" style="border-radius: 23.99px;margin-bottom: 0px !important;">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12 col-12">
                                        <h4>
                                            Connect Existing Post
                                        </h4>
                                        <p>
                                            If you aready created a post, you can connect it to the campaign.
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1 col-2">
                                        <img src="website/user/../assets/images/face.png" class="w-100">
                                    </div>
                                    <div class="col-md-7 col-6">
                                        <p>
                                            Facebook Post
                                        </p>
                                    </div>
                                    <div class="col-md-4 text-end col-4">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked"
                                                checked>
                                            <label class="form-check-label" for="flexSwitchCheckChecked"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="border-top: 1px solid #2E32381F">
                                    <div class="col-md-1 col-2 pt-3">
                                        <img src="website/user/../assets/images/insta.png" class="w-100">
                                    </div>
                                    <div class="col-md-7 col-6 pt-3">
                                        <p>
                                            Instagram Post
                                        </p>
                                    </div>
                                    <div class="col-md-4 text-end col-4 pt-3">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked"
                                                checked>
                                            <label class="form-check-label" for="flexSwitchCheckChecked"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><br>
                        <div class="card" style="border-radius: 23.99px;margin-bottom: 0px !important;">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12 col-12">
                                        <h4>
                                            Advanced
                                        </h4>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1 col-2 pt-3">
                                        <img src="website/user/../assets/images/insta.png" class="w-100">
                                    </div>
                                    <div class="col-md-7 col-6 pt-3">
                                        <p>
                                            Instagram Post
                                        </p>
                                    </div>
                                    <div class="col-md-4 text-end col-4 pt-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckChecked" checked>
                                            <label class="form-check-label" for="flexCheckChecked">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p>
                                                This feature will allow IG Live videos to be shoppable if saved as post.
                                                If activated, all Instagram posts will be monitored for comments﻿﻿ that
                                                trigger product search terms in this campaign. Note that only one
                                                Instagram post campaign can be active at one time. Activating this
                                                campaign will deactivate other active campaign.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-1 col-2 pt-4">
                                            <i class='far fa-comment-dots' style="color: #2CAAE1; font-size: 30px;"></i>
                                        </div>
                                        <div class="col-md-6 text-start col-6 pt-4">
                                            <p>
                                                Message inbox campaign
                                            </p>
                                        </div>
                                        <div class="col-md-5 col-4 pt-4 text-end">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckChecked" checked>
                                                <label class="form-check-label" for="flexCheckChecked">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p>
                                                If you select this option, then all messages in your inbox will be
                                                matched against this campaign. Only choose if you want to sell on
                                                messenger using this ELISA campaign.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card" style="background: #EEF9FFE5;border: none;">
                                                <div class="card-body" style="padding:10px;">
                                                    <label style="color: #2E32388F;font-size: 12px !important;
													">Campaign Time</label>
                                                    <input style="border:none;background: #EEF9FFE5;" type="date" name
                                                        class="form-control" name="date">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-1 col-1 text-end">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckChecked" checked>
                                                <label class="form-check-label" for="flexCheckChecked">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-3">
                                            <p>
                                                Video
                                            </p>
                                        </div>
                                        <div class="col-md-1 col-1 text-end">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckChecked" checked>
                                                <label class="form-check-label" for="flexCheckChecked">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-4">
                                            <p>
                                                Image
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row" id="sortable-cards">
                                        <div class="col-lg-12 col-12">
                                            <h5 class="pt-2">
                                                Add Campaign Files
                                            </h5>
                                            <div class="card drag-item cursor-move mb-lg-0 mb-4"
                                                style="background: #EEF9FFE5;height: 300px;border: 1px dashed #2CAAE1 !important;border-radius:12px;">
                                                <div class="card-body text-center">
                                                    <h2>
                                                        <i class="bx bx-cart text-success display-6"></i>
                                                    </h2>
                                                    <div class="pt-5 mt-4">
                                                        <img
                                                            src="website/user/../assets/images/drag-icon-removebg-preview.png">
                                                        <h4>Upload Photo</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row pt-3" style="text-end">
                                        <div class="col-md-8 col-12"></div>
                                        <div class="col-md-2 col-6">
                                            <a href="" class="btn btn-primary" style="box-shadow: 5px 5px 30px 0px #D3DAE5;
											color: red;
											">Cancel</a>
                                        </div>
                                        <div class="col-md-2 col-6">
                                            <a href="Create-Campaign.php" class="btn btn-info">Save</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mt-3">
                        <div class="card " style="border-radius: 23.99px;margin-bottom: 0px !important;">
                            <div class="card-body" style="padding:0px !important">
                                <div class="row p-3">
                                    <div class="col-md-2 col-2">
                                        <img src="website/user/../assets/images/man.png"
                                            style="width: 36px !important;">
                                    </div>
                                    <div class="col-md-8 col-8">
                                        <h5>Lorem Ipsum</h5>
                                        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, </span>
                                    </div>
                                    <div class="col-md-2 col-2">
                                        <ul class="main_ul">
                                            <li><i class="fab fa-facebook-f"></i></li>
                                            <li><i class="fab fa-facebook-f"></i></li>
                                            <li><i class="fab fa-facebook-f"></i></li>
                                        </ul>
                                    </div>
                                </div>

                                <div
                                    style="background-image: url(website/user/../assets/images/para.png);    height: 300px;background-size: cover;background-position: center;background-repeat: no-repeat;width: 100%;">
                                </div>

                                <div class="row p-3">
                                    <div class="col-md-2 col-2">
                                        <ul class="main_ul" style="justify-content: left;">
                                            <li><i class="fab fa-facebook-f"></i></li>
                                            <li><i class="fab fa-facebook-f"></i></li>
                                            <li><i class="fab fa-facebook-f"></i></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4 col-3">
                                        <p>lorem</p>
                                    </div>

                                    <div class="col-md-3 col-3">
                                        <p>lorem</p>
                                    </div>
                                    <div class="col-md-3 col-3">
                                        <p>lorem</p>
                                    </div>
                                </div>

                                <div class="row p-3"
                                    style="border-top: 2px solid #E3E4ED;border-bottom: 2px solid #E3E4ED;margin-left: 0px; width:100%;">
                                    <div class="col-md-4 col-4">
                                        <p>Heading</p>
                                    </div>
                                    <div class="col-md-4 col-4">
                                        <p>Heading</p>
                                    </div>
                                    <div class="col-md-4 col-4">
                                        <p>Heading</p>
                                    </div>

                                </div>

                                <div class="row p-3 bootom_row">
                                    <div class="col-md-2 col-2" style="padding-right: 0px !IMPORTANT;">
                                        <img src="website/user/../assets/images/man.png" class="w-100">
                                    </div>
                                    <div class="col-md-10 col-10" style="padding-right: 0px !IMPORTANT;">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
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
</div>
@endsection