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
                                                            style="color: #2E32388F;font-size: 12px !important;
												">Kampagnenavn</label>

                                                        <input type="text" style="border:none;background: #EEF9FFE5;"
                                                            class="form-control Ty pe" name="campaign_name" id="inputField"
                                                            value="{{ $campaign->campaign_name }}"
                                                            placeholder="Skriv her...">
                                                    </div>
                                                </div>

                                                <div class="card" style="background: #EEF9FFE5;border: none;">
                                                    <div class="card-body" style="padding:10px;">
                                                        <label
                                                            style="color: #2E32388F;font-size: 12px !important;
												">Købsord</label>
                                                        <input type="text" class="form-control Ty pe"
                                                            style="border:none;background: #EEF9FFE5;" name="name"
                                                            value="{{ $campaign->name }}" placeholder="Skriv her...">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <h5 style="font-size:12px;color:#2E3238">Like reservationer</h5>
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
                                                    JatakSalg vil søge efter 'likes' i kommentarerne. Dette gør det muligt
                                                    for
                                                    brugere at signalere interesse for et produkt med et enkelt 'like'.
                                                    Bemærk,
                                                    at 'likes' ikke kan anvendes som søgeord for produkter eller til at
                                                    angive
                                                    produktstørrelser.
                                                </p>
                                            </div>

                                        </div>
                                    </div>
                                </div><br>
                                <div class="card" style="border-radius: 23.99px;margin-bottom: 0px !important;">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12 col-12">
                                                <h4 style="font-size:18px">
                                                    Forbind Eksisterende Opslag
                                                </h4>
                                                <p style="font-size: 14px !important;">
                                                    Hvis du allerede har oprettet et opslag, kan du forbinde det til
                                                    kampagnen.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-1 col-2">
                                                <img src="{{ url('website/assets/images/face.png') }}" class="w-100">
                                            </div>
                                            <div class="col-md-7 col-6">
                                                <p>
                                                    Facebook-opslag
                                                </p>
                                            </div>
                                            <div class="col-md-4 text-end col-4">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="flexSwitchCheckChecked" checked>
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
                                                    Avanceret
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="row">

                                            <div class="row">
                                                <div class="col-md-1 col-2 pt-4">
                                                    <i class='far fa-comment-dots'
                                                        style="color: #2CAAE1; font-size: 30px;"></i>
                                                </div>
                                                <div class="col-md-6 text-start col-6 pt-4">
                                                    <p>
                                                        Beskedindbakke kampagne
                                                    </p>
                                                </div>
                                                <div class="col-md-5 col-4 pt-4 text-end">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="1"
                                                            name="fil" id="message_inbox_check"
                                                            {{ !empty($campaign->fil) ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="message_inbox_check">
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <p>
                                                        Hvis du vælger denne mulighed, vil alle beskeder i din indbakke
                                                        blive
                                                        matchet imod denne kampagne. Vælg kun hvis du ønsker at sælge på
                                                        messenger ved hjælp af denne kampagne.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="card" style="background: #EEF9FFE5;border: none;">
                                                        <div class="card-body" style="padding:10px;">
                                                            <label
                                                                style="color: #2E32388F;font-size: 12px !important;
													">Kampagnetid</label>
                                                            <input style="border:none;background: #EEF9FFE5;"
                                                                type="date" class="form-control Ty pe"
                                                                name="campaign_time"
                                                                value="{{ $campaign->campaign_time }}"
                                                                placeholder="Kampagnetidspunkt...">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-1 col-1 text-end">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            name="social_type" value="video" id="flexCheckChecked"
                                                            {{ $campaign->social_type === 'video' ? 'checked' : '' }}>
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
                                                        <input class="form-check-input" type="checkbox"
                                                            name="social_type" value="image" id="flexCheckChecked1"
                                                            {{ $campaign->social_type === 'image' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="flexCheckChecked">
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-4">
                                                    <p>
                                                        Billede
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row" id="sortable-cards">
                                                <div class="col-lg-12 col-12">
                                                    <h5 class="pt-2">
                                                        Tilføj Kampagnefiler
                                                    </h5>
                                                    <div class="card drag-item cursor-move mb-lg-0 mb-4"
                                                        style="background: #EEF9FFE5;height: 300px;border: 1px dashed #2CAAE1 !important;border-radius:12px;">
                                                        <div class="card-body text-center">
                                                            <h2>
                                                                <i class="bx bx-cart text-success display-6"></i>
                                                            </h2>
                                                            <div class="pt-5 mt-4">
                                                                <input type="file" class="form-control Ty pe"
                                                                    name="file" id="file-input"
                                                                    value="{{ $campaign->files }}"
                                                                    placeholder="Campaign Name..."
                                                                    accept="image/*,video/*">

                                                                <img
                                                                    src="{{ url('website/assets/images/drag-icon-removebg-preview.png') }}">
                                                                <h4>Upload Fil</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row pt-3" style="text-end">
                                                <div class="col-md-6 col-12"></div>
                                                <div class="col-md-3 col-6">
                                                    <a href="" class="btn btn-primary w-100"
                                                        style="box-shadow: 5px 5px 30px 0px #D3DAE5;
											color: red;
											">Annuller</a>
                                                </div>
                                                <div class="col-md-3 col-6">
                                                    <button type="sumit" class="btn btn-info w-100">Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-4 mt-3">
                                <div class="card h-100" style="border-radius: 16px !important;">
                                    <div class="card-body">

                                        <div class="post-container">
                                            <div class="post-header">
                                                <img src="{{ url('user/image/icons8-facebook-50.png') }}"
                                                    alt="Profile Picture" class="profile-picture">
                                                <h3>Test Username FB</h3>
                                            </div>
                                            <div class="post-content">
                                                <p id="description_title">{{ $campaign->campaign_name }}</p>
                                            </div>
                                            <div class="post-media">
                                                <div class="preview">
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

    function updateTagsArray() {
        var tags = [];
        $('#tagList li').each(function() {
            tags.push($(this).text().trim());
        });
        $('#tagsArray').val(tags.join(','));
    }
</script>
