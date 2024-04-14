@extends('users.layouts.main')
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

        p {
            font-size: 14px !important;
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
                                <h1 class="Calendar" style="font-size: 32px; margin-top: -5px;">Opret Kampagne</h1>

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
                    <form action="{{ url('campaigns') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="user_id" id="user_id" value="{{ \Auth::user()->id }} ">
                        <div class="row">

                            <div class="col-md-8 mt-3">
                                <div class="card" style="border-radius: 23.99px;margin-bottom: 0px !important;">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12 col-12">
                                                <h4 style="font-size:18px">
                                                    Kampagnedetaljer
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="card" style="background: #EEF9FFE5;border: none;">
                                                    <div class="card-body" style="padding:10px;">
                                                        <label
                                                            style="color: #2E32388F;font-size: 12px !important;">Kampagnenavn</label>
                                                        <input type="text" style="border:none;background: #EEF9FFE5;"
                                                            class="form-control Ty pe" name="campaign_name" id="inputField"
                                                            value="{{ $campaign->campaign_name }}"
                                                            placeholder="Skriv her...">
                                                    </div>
                                                </div>

                                                <div class="card" style="background: #EEF9FFE5;border: none;">
                                                    <div class="card-body" style="padding:10px;">
                                                        <label
                                                            style="color: #2E32388F;font-size: 12px !important;">Købsord</label>
                                                        <input type="text" class="form-control Ty pe"
                                                            style="border:none;background: #EEF9FFE5;" name="name"
                                                            value="{{ $campaign->name }}" placeholder="Skriv her..."
                                                            disabled>
                                                    </div>
                                                </div>
                                                <div class="card" style="background: #EEF9FFE5;border: none;">
                                                    <div class="card-body" style="padding:10px;">
                                                        <label
                                                            style="color: #2E32388F;font-size: 12px !important;">Kampagnetid</label>
                                                        <input type="date" class="form-control Ty pe"
                                                            style="border:none;background: #EEF9FFE5;" name="name"
                                                            value="{{ $campaign->campaign_time }}"
                                                            placeholder="campaign time..." disabled>
                                                    </div>
                                                </div>
                                                @if (isset($campaign->stream_url))
                                                    <div class="card" style="background: #EEF9FFE5;border: none;">
                                                        <div class="card-body" style="padding:10px;">
                                                            <label
                                                                style="color: #2E32388F;font-size: 12px !important;">Stream
                                                                URL</label>
                                                            <textarea type="text" class="form-control Ty pe"
                                                                style="border:none;background: #EEF9FFE5;min-height: 74px !important;" name="stream_url"
                                                                value="{{ $campaign->stream_url }}" placeholder="Stream URL" cols="50" rows="10" disabled>{{ $campaign->stream_url }}</textarea>
                                                        </div>
                                                    </div>
                                                    <div class="card" style="background: #EEF9FFE5;border: none;">
                                                        <div class="card-body" style="padding:10px;">
                                                            <label
                                                                style="color: #2E32388F;font-size: 12px !important;">Stream
                                                                ID</label>
                                                              <input type="text" class="form-control Ty pe"
                                                            style="border:none;background: #EEF9FFE5;" name="name"
                                                            value="{{ $campaign->streamID }}"
                                                            placeholder="campaign time..." disabled>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-6">
<button onclick="runArtisanCommand()"  type="button" class="btn btn-info w-100">Go Live</button>
<div id="output"></div>
                                                    </div>
                                                @endif

                                            </div>
                                        </div>
                                    </div>
                                </div><br>

                                <div class="card" style="border-radius: 23.99px;margin-bottom: 0px !important;">
                                    <div class="card-body">
                                                <h4>
                                                    Post Details
                                                </h4>
                                                    @include('users.posts.post_comments')
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-4 mt-3">
                                <div class="card h-100" style="border-radius: 16px !important;">
                                    <div class="card-body row">

                                        <div class="post-container">
                                            <div class="post-header">
                                                <img src="{{ url('user/image/icons8-facebook-50.png') }}"
                                                    alt="{{ $campaign->facebookPost['from_name'] }}"
                                                    class="profile-picture">
                                                <h3>{{ $campaign->facebookPost['from_name'] }} -
                                                    {{ \Carbon\Carbon::parse($campaign->facebookPost['created_time'])->diffForHumans() }}
                                                </h3>
                                            </div>
                                            <div class="col-md-6 pull-right">
                                                <a href="{{ $campaign->facebookPost['post_url'] }}" target="_blank"> <i
                                                        class="fab fa-eye"></i>View Post Details</a>
                                            </div>

                                            <div class="post-content">
                                                <p id="description_title">{{ $campaign->facebookPost['details'] }}</p>
                                            </div>
                                            <div class="post-media">
                                                <div class="previewHere">
                                                    <img src="{{ $campaign->facebookPost['live_image_url'] }}"
                                                        class="w-100 post-media">
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    @include('users.posts.assignProducts')


                                </div>
                            </div>



                        </div>
                    </form>
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
            document.getElementById('description_title').innerText = inputValue;
        });

        $('#file-input').change(function() {
            var file = this.files[0];
            var fileType = file.type.split('/')[0];
            var validTypes = ['image', 'video'];

            if (validTypes.indexOf(fileType) !== -1) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    if (fileType === 'image') {
                        $('.preview').html('<img style="width: 85%;" src="' + e.target.result +
                            '" class="preview-image" alt="Preview">');
                    } else if (fileType === 'video') {
                        $('.preview').html('<video controls class="preview-video"><source src="' + e
                            .target.result + '" type="' + file.type + '"></video>');
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

    function previewImage(event) {
        var reader = new FileReader();
        reader.onload = function() {
            var output = document.getElementById('preview');
            output.src = reader.result;
            output.style.display = 'block';
        };
        reader.readAsDataURL(event.target.files[0]);
    }
    $(document).ready(function() {
        // Your jQuery code here
        $('#addTag').click(function() {
            var tag = $('#tagInput').val().trim();
            if (tag !== '') {
                $('#tagList').append('<li>' + tag +
                    ' <button class="removeTag btn btn-danger">Remove</button></li>');
                $('#tagInput').val('');
                updateTagsArray();
            }
        });
        $(document).on('click', '.removeTag', function() {
            $(this).closest('li').remove();
            updateTagsArray();

        });
    });
    function runArtisanCommand() {
        fetch('{{url("run_cmd",$campaign->id)}}')
            .then(response => response.text())
            .then(data => {
                document.getElementById('output').innerText = data;
            })
            .catch(error => {
                console.error('Error:', error);
            });
    }
    function updateTagsArray() {
        var tags = [];
        $('#tagList li').each(function() {
            tags.push($(this).text().trim());
        });
        $('#tagsArray').val(tags.join(','));
    }
</script>
