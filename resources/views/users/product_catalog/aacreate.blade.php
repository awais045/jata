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
                                <h1 class="Calendar" style="font-size: 24px; margin-top: -5px;">Opret Produkt</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="row live">
                        <div class="col-md-8">
                            <h2 class="p-3 Calendar">Opret Produkt</h2>
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
                                    <form action="{{ url('product-catalog') }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="tab-content pt-5" id="tab-content">
                                            <div class="tab-pane active" id="fill-tabpanel-0" role="tabpanel"
                                                aria-labelledby="fill-tab-0">

                                                <div class="row">
                                                    <div class="col-md-6 mt-3">
                                                        <div class="card h-100" style="border-radius: 16px !important;">
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    {{-- <div class="col-md-6 text-end col-6">
                                                                <p style="color: #2CAAE1;">
                                                                    <img src="{{url('website/assets/images/plus-blue.png')}}">
                                                                    Tilføj Svar
                                                                </p>
                                                            </div> --}}
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="reply-border">
                                                                            <label for="">Product Title</label>
                                                                            <input type="text" class="form-control Ty pe"
                                                                                name="name" value="{{ $product->name }}"
                                                                                placeholder="Product Title...">
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-12">
                                                                        <div class="reply-border">
                                                                            <label for="">Product
                                                                                Information</label>
                                                                            <input type="text" class="form-control Ty pe"
                                                                                name="product_information"
                                                                                value="{{ $product->product_information }}"
                                                                                placeholder="Product Information...">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                    </div>
                                                                    {{-- <div class="col-md-12"> --}}
                                                                    <div class="col-md-4">
                                                                        <div class="reply-border">
                                                                            <label for="">Price</label>
                                                                            <input type="number" class="form-control Ty pe"
                                                                                name="price" value="{{ $product->price }}"
                                                                                placeholder="Price...">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="reply-border">
                                                                            <label for="">Pre Price</label>
                                                                            <input type="number" class="form-control Ty pe"
                                                                                name="pre_price"
                                                                                value="{{ $product->pre_price }}"
                                                                                placeholder="Pre Price...">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="reply-border">
                                                                            <label for="">Inventory</label>
                                                                            <input type="number" class="form-control Ty pe"
                                                                                name="inventory"value="{{ $product->inventory }}"
                                                                                placeholder="Inventory...">
                                                                        </div>
                                                                    </div>


                                                                    <div class="col-md-12">
                                                                        <div class="reply-border">
                                                                            <label for="">SKU</label>
                                                                            <input type="text" class="form-control Ty pe"
                                                                                value="{{ $product->sku }}" name="sku"
                                                                                placeholder="SKU...">
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-21">
                                                                        <div class="reply-border">
                                                                            <label for="">URL</label>
                                                                            <input type="url" class="form-control Ty pe"
                                                                                value="{{ $product->url }}" name="url"
                                                                                placeholder="URL...">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="reply-border">
                                                                            <label for="">Procut Weight</label>
                                                                            <input type="number"
                                                                                class="form-control Ty pe"
                                                                                name="product_weight"
                                                                                value="{{ $product->product_weight }}"
                                                                                placeholder="Product Weight...">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="reply-border">
                                                                            <label for="">Add Tag</label>
                                                                            <input type="text" id="tagInput"
                                                                                placeholder="Enter tag">
                                                                            <button type="button" class="btn btn-info"
                                                                                id="addTag">Add
                                                                                Tag</button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="reply-border">
                                                                            <ul id="tagList">
                                                                                @php
                                                                                    $tag_array = '';
                                                                                @endphp
                                                                                @if (isset($product->tags) && json_decode($product->tags)[0])
                                                                                    @php
                                                                                        $tagee = explode(
                                                                                            ',',
                                                                                            json_decode(
                                                                                                $product->tags,
                                                                                            )[0],
                                                                                        );
                                                                                    @endphp
                                                                                    @foreach ($tagee as $index => $tg)
                                                                                        {{ $tg }} <button
                                                                                            class="removeTag btn btn-danger">Remove</button><br>

                                                                                        @php
                                                                                            // $tage_array .= $tg . ',';
                                                                                            $tag_array .= $tg;
                                                                                            if ( $index !== count($tagee) - 1 ) {
                                                                                                $tag_array .= ',';
                                                                                            }
                                                                                        @endphp
                                                                                    @endforeach
                                                                                @endif
                                                                            </ul>
                                                                            <input type="hidden" id="tagsArray"
                                                                                name="tags[]"
                                                                                value="{{ $tag_array }}">

                                                                        </div>
                                                                    </div>

                                                                    {{-- </div> --}}

                                                                </div>


                                                                <div class="row">
                                                                    <div class="d-flex justify-content-end">
                                                                        {{-- <a href="" class="btn btn-primary me-2"
                                                                            style="box-shadow: 5px 5px 30px 0px #D3DAE5;
                                                                color: #FF5C37;
                                                                ">Annuller</a> --}}
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
                                                                <div class="row">
                                                                    <div class="col-md-6 col-6">

                                                                        <div class="col-md-12">
                                                                            <div class="reply-border">
                                                                                <input type="file" id="image"
                                                                                    name="image" accept="image/*"
                                                                                    onchange="previewImage(event)">

                                                                                {{-- <button type="submit">Upload Image</button> --}}
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-12 reply-border">
                                                                            <div class="reply-border">
                                                                                <img id="preview" src="{{asset($product->image)}}"
                                                                                    alt="Preview"
                                                                                    style="display: none; max-width: 200px; max-height: 200px;">

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
