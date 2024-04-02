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
                            <img src="{{url('user/image/admin_logo.png')}}" style="width:70%">
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
                        <a href="{{url('calender')}}" class="nav-link">
                            <img src="{{url('user/image/side_logo.png')}}">
                            <span>
                                Kalender
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('post-templates')}}" class="nav-link">
                            <img src="{{url('user/image/side_logo1.png')}}">
                            <span>
                                Skabeloner til Indlæg
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('campaigns')}}" class="nav-link">
                            <img src="{{url('user/image/side_logo.png')}}">
                            <span>
                                Kampagner
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('product-catalog')}}" class="nav-link">
                            <img src="{{url('user/image/side_logo2.png')}}">
                            <span>
                                Produktkatalog
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="order" class="nav-link">
                            <img src="{{url('user/image/side_logo3.png')}}">
                            <span>
                                Ordrer
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="Reply-Templates" class="nav-link">
                            <img src="{{url('user/image/side_logo4.png')}}">
                            <span>
                                Skabeloner til
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="page-setting" class="nav-link">
                            <img src="{{url('user/image/side_logo5.png')}}">
                            <span>
                                Sideindstillinger
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="Account-Settings" class="nav-link">
                            <img src="{{url('user/image/side_logo6.png')}}">
                            <span>
                                Konto
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="Video-Guides" class="nav-link"
                            style="border-top: 1px solid #FFFFFF1F;margin-top:10px;">
                            <div class="pt-3">
                                <img src="{{url('user/image/side_logo7.png')}}">
                                <span>
                                    Video Guides
                                </span>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="help-center" class="nav-link">
                            <img src="{{url('user/image/side_logo8.png')}}">
                            <span>
                                Hjælpecenter
                            </span>
                            <div style="margin-left:25px;"><img src="website/user/../assets/images/arrow3.PNG"></div>
                        </a>
                    </li>
                </ul>
                <div class="row bottom- srow">
                    <div class="col-md-3 col-3">
                        <img src="{{url('user/image/side_logo9.png')}}" style="width: 95%;margin-left: 5px;">
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
                                <img src="{{url('user/assets/images/3dot.png')}}" alt="image"
                                    style="width: 11px;margin-top: 10px;">
                            </button>
                            <ul class="dropdown-menu profile-dropdown-menu" style="border-radius: 16px;
						border: none;padding: 4px;">
                                <li class="mt-1"><a class="dropdown-item" href="#">
                                        <span class="dropdown-icon">
                                            <i class="fas fa-user-alt"></i>
                                        </span>
                                        My Acoount</a>
                                </li>
                                <li class="mt-2">

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                                <button class="dropdown-item" h type="submit" style="color: red;"><span
                                                    ><i class="fa fa-sign-out"></i></span> Logout</button>
                                            </form>
                                            <a href="#"  style="color: red;" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><span
                                                ><i class="fa fa-sign-out"></i></span> Logout</a>
                                        </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




