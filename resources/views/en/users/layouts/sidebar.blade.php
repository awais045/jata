<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Page content -->
<div class="page-content">
    <!-- Main sidebar -->
    <div class="sidebar sidebar-dark sidebar-main sidebar-expand-md" style="background: #2E3238;
	border-radius: 0px 35px 35px 0px;">

        <!-- Sidebar mobile toggler -->
        <div class="sidebar-mobile-toggler text-center">
            <a href="#" class="sidebar-mobile-main-toggle">
                <i class="fas fa-arrow-left"></i>
            </a>
            <a href="#" class="sidebar-mobile-expand">
                <i class="icon-screen-full"></i>
                <i class="icon-screen-normal"></i>
            </a>
        </div>
        <!-- /sidebar mobile toggler -->

        <!-- Sidebar content -->
        <div class="sidebar-content">
            <!-- User menu -->
            <div class="sidebar-user">
                <div class="card-body">
                    <div class="media">
                        <div class="media-body text-center">
                            <img src="website/user/../assets/images/logo1.PNG">
                        </div>
                    </div>
                </div>
            </div>
            <!-- /user menu -->


            <!-- Main navigation -->
            <div class="card card-sidebar-mobile">
                <ul class="nav nav-sidebar" data-nav-type="accordion">
                    <!-- Main -->
                    <li class="nav-item">
                        <a href="encalender" class="nav-link">
                            <img src="website/user/../assets/images/calender1.PNG">
                            <span>
                                Calendar
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="enpost-templates" class="nav-link">
                            <img src="website/user/../assets/images/post.PNG">
                            <span>
                                Post Templates
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="encampaigns" class="nav-link">
                            <img src="website/user/../assets/images/arrow4.PNG">
                            <span>
                                Campaigns
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="enproduct-catalog" class="nav-link">
                            <img src="website/user/../assets/images/product-catalog.png">
                            <span>
                                Product Catalog
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="enorder" class="nav-link">
                            <img src="website/user/../assets/images/order.PNG">
                            <span>
                                Orders
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="enReply-Templates" class="nav-link">
                            <img src="website/user/../assets/images/replay.PNG">
                            <span>
                                Reply Templates
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="enpage-setting" class="nav-link">
                            <img src="website/user/../assets/images/setting.PNG">
                            <span>
                                Page Settings
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="enAccount-Settings" class="nav-link">
                            <img src="website/user/../assets/images/account.PNG">
                            <span>
                                Account
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="enVideo-Guides" class="nav-link"
                            style="border-top: 1px solid #FFFFFF1F;margin-top:10px;">
                            <div class="pt-3">
                                <img src="website/user/../assets/images/video.PNG">
                                <span>
                                    Video Guides
                                </span>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="enhelp-center" class="nav-link">
                            <img src="website/user/../assets/images/help.PNG">
                            <span>
                                Help Center
                            </span>
                            <div style="margin-left:25px;"><img src="website/user/../assets/images/arrow3.PNG"></div>
                        </a>
                    </li>
                </ul>
                <div class="row bottom-row">
                    <div class="col-md-3 col-3">
                        <img src="website/user/../assets/images/ss.PNG">
                    </div>
                    <div class="col-md-7 col-7">
                        <p class="soft">
                            {{ Auth::user()->name  }}
                        </p>
                        <p class="john">
                            {{ Auth::user()->email  }}
                        </p>
                    </div>
                    <div class="col-md-2 col-2">
                        <div class="header-btn-box profile-btn-box">
                            <button class="profile-btn" data-bs-toggle="dropdown" aria-expanded="false"
                                style=" border: none;background: #2e3238;">
                                <img src="website/user/../assets/images/3dot.png" alt="image" style="width:15px;">
                            </button>
                            <ul class="dropdown-menu profile-dropdown-menu" style="border-radius: 16px;
						border: none;padding: 4px;">
                                <li class="mt-1"><a class="dropdown-item" href="#">
                                        <span class="dropdown-icon">
                                            <i class="fas fa-user-alt"></i>
                                        </span>
                                        My Acoount</a>
                                </li>
                                <li class="mt-2"><a class="dropdown-item" href="" style="color: red;"><span
                                            class="dropdown-icon"><i class="fa fa-sign-out"></i></span> Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
