@extends('users.layouts.main')
@section('contant')
    <style>
        .bottom-row {
            padding-top: 500px !important;
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
                padding-top: 0px !important;
            }

            .Calendar {
                font-size: 17px !important;
            }
        }

        @media (min-width: 1024px) and (max-width: 3000px) {
            .comment_section {
                display: none !important;
            }
        }
    </style>

    <script src="{{ url('assets/vendor/libs/sortablejs/sortable.js') }}" />
    <script>
        const cardEl = document.getElementById('sortable-cards');
        Sortable.create(cardEl);
    </script>

    <div class="content-wrapper">
        <!-- Content area -->
        <form action="{{ url('product-catalog') }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
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
                                <h1 class="Calendar" style="font-size: 32px; margin-top: -5px;">Tilføj Produktinformation
                                </h1>
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

                        <div class="col-md-6 mt-3">
                            <div class="card" style="border-radius: 23.99px;margin-bottom: 0px !important;">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12 col-12">
                                            <h4 class="font-size" style="font-size: 18px !Important;">
                                                Produktinformation
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card" style="background: #EEF9FFE5;border: none;">
                                                <div class="card-body" style="padding:10px;">
                                                    <label class="ps-2"
                                                        style="color: #2E32388F;font-size: 12px !important;
												">Produktnavn</label>
                                                    <input style="border:none;background: #EEF9FFE5;" type="text"
                                                        value="{{ $product->name }}" class="form-control"
                                                        placeholder="Skriv her..." name="name">

                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="card" style="background: #EEF9FFE5;border: none;">
                                                        <div class="card-body" style="padding:10px;">
                                                            <label class="ps-2"
                                                                style="color: #2E32388F;font-size: 12px !important;
														">Pris</label>
                                                            <input style="border:none;background: #EEF9FFE5;" type="number"
                                                                class="form-control" placeholder="Vælg" name="price"
                                                                value="{{ $product->price }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="card" style="background: #EEF9FFE5;border: none;">
                                                        <div class="card-body" style="padding:10px;">
                                                            <label class="ps-2"
                                                                style="color: #2E32388F;font-size: 12px !important;
														">Før-Pris</label>
                                                            <input style="border:none;background: #EEF9FFE5;" type="number"
                                                                class="form-control" placeholder="Vælg" name="pre_price"
                                                                value="{{ $product->pre_price }}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="card" style="background: #EEF9FFE5;border: none;">
                                                        <div class="card-body" style="padding:10px;">
                                                            <label class="ps-2"
                                                                style="color: #2E32388F;font-size: 12px !important;
														">Lager</label>
                                                            <input style="border:none;background: #EEF9FFE5;" type="number"
                                                                class="form-control" placeholder="Vælg"
                                                                name="inventory"value="{{ $product->inventory }}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="card" style="background: #EEF9FFE5;border: none;">
                                                        <div class="card-body" style="padding:10px;">
                                                            <label class="ps-2"
                                                                style="color: #2E32388F;font-size: 12px !important;
														">Beskrivelse</label>
                                                            <input style="border:none;background: #EEF9FFE5;" type="text"
                                                                class="form-control" placeholder="Skriv her..."
                                                                name="product_information"
                                                                value="{{ $product->product_information }}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="card" style="background: #EEF9FFE5;border: none;">
                                                        <div class="card-body" style="padding:10px;">
                                                            <label class="ps-2"
                                                                style="color: #2E32388F;font-size: 12px !important;
														">SKU</label>
                                                            <input style="border:none;background: #EEF9FFE5;"
                                                                type="text" class="form-control"
                                                                placeholder="Skriv her..." value="{{ $product->sku }}"
                                                                name="sku">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="card" style="background: #EEF9FFE5;border: none;">
                                                        <div class="card-body" style="padding:10px;">
                                                            <label class="ps-2"
                                                                style="color: #2E32388F;font-size: 12px !important;
														">Produktvægt</label>
                                                            <input style="border:none;background: #EEF9FFE5;"
                                                                type="number" class="form-control"
                                                                placeholder="Vælg"name="product_weight"
                                                                value="{{ $product->product_weight }}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="card" style="background: #EEF9FFE5;border: none;">
                                                        <div class="card-body" style="padding:10px;">
                                                            <label class="ps-2"
                                                                style="color: #2E32388F;font-size: 12px !important;
														">URL</label>
                                                            <input style="border:none;background: #EEF9FFE5;"
                                                                type="url" class="form-control"
                                                                placeholder="Skriv her..." value="{{ $product->url }}"
                                                                name="url">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>



                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card mt-2" style="border-radius: 23.99px;margin-bottom: 0px !important;">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12 col-12">
                                            <h4 style="font-size: 18px !Important;">
                                                Varianter
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <ul id="tagList">
                                                @php
                                                    $tag_array = '';
                                                @endphp
                                                @if (isset($product->tags) && json_decode($product->tags)[0])
                                                    @php
                                                        $tagee = explode(',', json_decode($product->tags)[0]);
                                                    @endphp
                                                    @foreach ($tagee as $index => $tg)
                                                        {{ $tg }} <button
                                                            class="removeTag btn btn-danger"><i class="fas fa-trash" style="color: black;"></i></button><br>

                                                        @php
                                                            // $tage_array .= $tg . ',';
                                                            $tag_array .= $tg;
                                                            if ($index !== count($tagee) - 1) {
                                                                $tag_array .= ',';
                                                            }
                                                        @endphp
                                                    @endforeach
                                                @endif
                                            </ul>
                                        </div>
                                    </div>
                                    <input type="hidden" id="tagsArray"
                                                                                name="tags[]"
                                                                                value="{{ $tag_array }}">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card" style="background: #EEF9FFE5;border: none;">
                                                <div class="card-body" style="padding:10px;">
                                                    <label class="ps-2"
                                                        style="color: #2E32388F;font-size: 12px !important;
												">Variant</label>
                                                    <input style="border:none;background: #EEF9FFE5;" type="text"
                                                        class="form-control" placeholder="Skriv her..."  id="tagInput">
                                                        <button type="button" class="btn btn-info"
                                                                                id="addTag">Add
                                                                                Tag</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-7">
                                        </div>
                                        <div class="col-md-5 col-12">

                                            <button type="sumit" class="btn btn-info w-100">Opret Produkt</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mt-3">
                            <div class="row">
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
                            <div class="card" style="border-radius: 23.99px;margin-bottom: 0px !important;">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12 col-12">
                                            <h4 style="font-size: 18px !Important;">
                                                Produktbillede
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="row" id="sortable-cards">
                                        <div class="col-lg-12">
                                            <input type="file" id="image"
                                                                                    name="image" accept="image/*"
                                                                                    onchange="previewImage(event)">
                                            </div>
                                        <div class="col-lg-12 col-12">
                                            <p style="font-size: 14px !Important;">Tilføj Kampagnefiler</p>
                                            <div
                                                class="card drag-item cursor-move mb-lg-0 mb-4"style="background: #EEF9FFE5;height: auto;border: 1px dashed #2CAAE1 !important;border-radius:12px;">
                                                <div class="card-body text-center">
                                                    <h2>
                                                        <i class="bx bx-cart text-success display-6"></i>
                                                    </h2>
                                                    <div class="pt-5 ">

                                                        <img id="preview" src="{{str_replace('public/public','public/storage',asset($product->image))}}"
                                                                                    alt="Preview"
                                                                                    style="max-height: 1000px;width:500px;">
                                                        <h4 style="font-size: 16px;margin-top:10px">Upload Billede</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-5">
                                        <div class="col-md-10 col-10">
                                            <p class="ps-2" style="font-size: 14px !Important;">
                                                Brug "byd" for at indlede køb
                                            </p>
                                        </div>
                                        <div class="col-md-2 col-2 text-end">
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
                                            <div class="card" style="background: #EEF9FFE5;border: none;">
                                                <div class="card-body" style="padding:10px;">
                                                    <label class="ps-2"
                                                        style="color: #2E32388F;font-size: 12px !important;
												">Tilføj
                                                        Søgeord</label>
                                                    <input style="border:none;background: #EEF9FFE5;" type="text"
                                                        class="form-control" placeholder="Skriv her..." name="">
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
        </div>
        </form>
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
                        ' <button class="removeTag btn btn-danger"><i class="fas fa-trash" style="color: black;"></i></button></li>');
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
