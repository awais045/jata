@extends('users.layouts.main')
@section('contant')
    <style>
        .form-control:focus {
            color: #495057;
            background-color: #fff;
            border-color: #80bdff;
            outline: 0;
            box-shadow: none !important;
        }

        .bottom-row {
            padding-top: 270px !important;
        }

        @media (min-width: 320px) and (max-width: 450px) {
            .bottom-row {
                padding-top: 0px !important;
            }
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
        body {
        font-family: Arial, sans-serif;
        background-color: #f0f2f5;
        margin: 0;
        padding: 20px;
    }

    .post-container {
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        padding: 20px;
        margin-bottom: 20px;
    }

    .profile-picture {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        margin-right: 10px;
    }

    .post-header {
        display: flex;
        align-items: center;
        margin-bottom: 10px;
    }

    .post-header h3 {
        font-size: 16px;
        margin: 0;
    }

    .post-content {
        margin-bottom: 10px;
    }

    .post-media {
        max-width: 100%;
        border-radius: 8px;
    }
    </style>
    <div class="content-wrapper">
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
                            <div class="col-md-12 col-10">
                                <h1 class="Calendar" style="font-size: 24px; margin-top: -5px;">Media Upload</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="row live">
                        <div class="col-md-8">
                            <h2 class="p-3 Calendar">Media Upload</h2>
                        </div>
                        <div class="col-md-4">
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
            <div class=row>
                <div class="col-md-12">
                    <div class="card" style="border-radius: 23.99px;margin-bottom: 0px !important;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form action="{{ url('campaigns/upload_media/'.$campaign_id) }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="user_id" id="user_id" value="{{\Auth::user()->id}} ">
                                        <div class="tab-content pt-5" id="tab-content">
                                            <div class="tab-pane active" id="fill-tabpanel-0" role="tabpanel"
                                                aria-labelledby="fill-tab-0">

                                                <div class="row">
                                                    <div class="col-md-6 mt-3">
                                                        <div class="card h-100" style="border-radius: 16px !important;">
                                                            <div class="card-body">
                                                                <div class="row">
                                                                </div>
                                                                <div class="row">

                                                                    <div class="col-md-12">
                                                                        <div class="reply-border">
                                                                            <label for="">Navn</label>
                                                                            <input type="text" class="form-control Ty pe"
                                                                                value="{{ $campaign->name }}" disabled
                                                                                placeholder="Name...">
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-12">
                                                                        <div class="reply-border">
                                                                            <label for="">Add Image to You Campaign	</label>
                                                                            <input type="file" class="form-control Ty pe"
                                                                                name="file" id="file-input"
                                                                                value="{{ $campaign->files }}"
                                                                                placeholder="Campaign Name..." accept="image/*,video/*">

                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-12">
                                                                        <div class="reply-border">
                                                                            <label for="">Description</label>
                                                                            <input type="text" class="form-control Ty pe" id="inputField"
                                                                                name="details" value=""
                                                                                placeholder="details...">
                                                                        </div>
                                                                    </div>



                                                                </div>
                                                                <div class="row">
                                                                    <div class="d-flex justify-content-end">
                                                                        <button type="sumit"
                                                                            class="btn btn-info">Save</button>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="col-md-6 mt-3">
                                                        <div class="card h-100" style="border-radius: 16px !important;">
                                                            <div class="card-body">

                                                                <div class="post-container">
                                                                    <div class="post-header">
                                                                        <img src="{{url('user/image/icons8-facebook-50.png')}}" alt="Profile Picture" class="profile-picture">
                                                                        <h3>Test Username FB</h3>
                                                                    </div>
                                                                    <div class="post-content">
                                                                        <p id="description_title"></p>
                                                                    </div>
                                                                    <div class="post-media">
                                                                        <div class="preview"></div>

                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            document.getElementById('inputField').addEventListener('input', function() {
                var inputValue = this.value;
                document.getElementById('description_title').innerText =  inputValue;
            });

            $('#file-input').change(function() {
                var file = this.files[0];
                var fileType = file.type.split('/')[0];
                var validTypes = ['image', 'video'];

                if (validTypes.indexOf(fileType) !== -1) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        if (fileType === 'image') {
                            $('.preview').html('<img style="width: 85%;" src="' + e.target.result + '" class="preview-image" alt="Preview">');
                        } else if (fileType === 'video') {
                            $('.preview').html('<video controls class="preview-video"><source src="' + e.target.result + '" type="' + file.type + '"></video>');
                        }
                    };

                    reader.readAsDataURL(file);
                } else {
                    alert('Please select a valid image or video file.');
                    $(this).val('');
                    $('.preview').html('');
                }
            });
        });
    </script>

