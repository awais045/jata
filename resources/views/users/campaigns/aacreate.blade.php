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
                                <h1 class="Calendar" style="font-size: 24px; margin-top: -5px;">Kampagner</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="row live">
                        <div class="col-md-8">
                            <h2 class="p-3 Calendar">Kampagner</h2>
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
                                    <form action="{{ url('campaigns') }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="user_id" id="user_id" value="{{\Auth::user()->id}} ">
                                        <div class="tab-content pt-5" id="tab-content">
                                            <div class="tab-pane active" id="fill-tabpanel-0" role="tabpanel"
                                                aria-labelledby="fill-tab-0">

                                                <div class="row">
                                                    <div class="col-md-12 mt-3">
                                                        <div class="card h-100" style="border-radius: 16px !important;">
                                                            <div class="card-body">
                                                                <div class="row">

                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="reply-border">
                                                                            <label for="">Navn</label>
                                                                            <input type="text" class="form-control Ty pe"
                                                                                name="name" value="{{ $campaign->name }}"
                                                                                placeholder="Name...">
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-12">
                                                                        <div class="reply-border">
                                                                            <label for="">Kampagne Navn	</label>
                                                                            <input type="text" class="form-control Ty pe"
                                                                                name="campaign_name"
                                                                                value="{{ $campaign->campaign_name }}"
                                                                                placeholder="Campaign Name...">
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-12">
                                                                        <div class="reply-border">
                                                                            <label for="">Kampagnetidspunkt</label>
                                                                            <input type="datetime-local" class="form-control Ty pe"
                                                                                name="campaign_time" value="{{ $campaign->campaign_time }}"
                                                                                placeholder="Kampagnetidspunkt...">
                                                                        </div>
                                                                    </div>


                                                                    <div class="col-md-12">
                                                                        <div class="reply-border">
                                                                            <label for="">Kampagnetype</label>
                                                                            <input type="text" class="form-control Ty pe"
                                                                                value="{{ $campaign->campaign_type }}" name="campaign_type"
                                                                                placeholder="Kampagnetype...">
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-21">
                                                                        <div class="reply-border">
                                                                            <label for="">Social Type</label>
                                                                            <select name="social_type" id="social_type" class="form-control">
                                                                                <option value="image">Image</option>
                                                                                <option value="video">Video</option>
                                                                                <option value="live">Live</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="reply-border">
                                                                            <label for="">Fil</label>
                                                                            <input type="text"
                                                                                class="form-control Ty pe"
                                                                                name="fil"
                                                                                value="{{ $campaign->fil }}"
                                                                                placeholder="Fil...">
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-12">
                                                                        <div class="reply-border">
                                                                            <label for="">Campaign</label>
                                                                            <input type="text" class="form-control Ty pe"
                                                                                name="campaign" value="{{ $campaign->campaign }}"
                                                                                placeholder="campaign...">
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                                <div class="row">
                                                                    <div class="d-flex justify-content-end">
                                                                        <button type="sumit" class="btn btn-info">Save</button>
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

        function updateTagsArray() {
            var tags = [];
            $('#tagList li').each(function() {
                tags.push($(this).text().trim());
            });
            $('#tagsArray').val(tags.join(','));
        }
    </script>
