@extends('users.layouts.main')
<script async defer crossorigin="anonymous"
    src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v20.0&appId=2171768989881974" nonce="t7v3giee">
</script>

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

                                    @if (session('error'))
                                        <div class="alert alert-danger">
                                            {{ session('error') }}
                                        </div>
                                    @endif
                                    @if (session('success'))
                                        <div class="alert alert-success">
                                            {{ session('success') }}
                                        </div>
                                    @endif


                                    {{-- <a href=""
                                        class="btn btn-default btn-lg fb-login-button">Connect with Facebook <i
                                            class="fas fa-facebook-f"></i></a> --}}

                                            <a href="{{ url('login/facebook') }}" style="text-align: center;"
                                                class="inline-flex items-center px-2 float-left py-2 bg -gray-800 border bg-grey rounded-md font-semibold text-xs uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 h-10 px-2 py-2 mt-2 font-semibold text-xs float-left transition-colors duration-150 rounded-lg uppercase focus:shadow-outline0 bg-gray-800 hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900">
                                                Connect With Facebook<img src="website/assets/images/face.png" style="width:30px;">
                                            </a>



                                </div>
                            </div>
                        </div>
                        <!-- /support tickets -->
                    </div>
                </div>
            </div>
        </div>
    @endsection
