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
                                <h1 class="Calendar" style="font-size: 24px; margin-top: -5px;">Kampagner Assignemnt</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="row live">
                        <div class="col-md-8">
                            <h2 class="p-3 Calendar">Kampagner Assignemnt</h2>
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
                                    <form action="{{ url('assign/'.$campaign_id) }}" method="post"
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

                                                                    <div class="col-md-4">
                                                                        <div class="reply-border">
                                                                            <label for="">Navn</label>
                                                                            <input type="text" class="form-control Ty pe"
                                                                                name="name" value="{{ $campaign->name }}" disabled
                                                                                placeholder="Name...">
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-4">
                                                                        <div class="reply-border">
                                                                            <label for="">Kampagne Navn	</label>
                                                                            <input type="text" class="form-control Ty pe"
                                                                                name="campaign_name"
                                                                                value="{{ $campaign->campaign_name }}" disabled
                                                                                placeholder="Campaign Name...">
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-4">
                                                                        <div class="reply-border">
                                                                            <label for="">Kampagnetidspunkt</label>
                                                                            <input type="text" class="form-control Ty pe" disabled
                                                                                name="campaign_time" value="{{ $campaign->campaign_time }}"
                                                                                placeholder="Kampagnetidspunkt...">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">


                                                           <div class="row mt-3">
                                                            <div class="col-md-12 col-lg-12 col-xl-12 table-responsive">
                                                                                                        <table class="table table-success" style="border: 1px solid #2E32381F;border-radius: 16px;">
                                                                    <thead>
                                                                        <tr>
                                                                           <th scope="col" class=" t-heading">Select</th>
                                                                            <th scope="col" class=" t-heading">Produktnavn</th>
                                                                            <th scope="col" class=" t-heading ">Pris</th>
                                                                            <th scope="col" class=" t-heading">Søgeord</th>
                                                                            <th scope="col" class=" t-heading">Lager</th>

                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        @foreach ($products as $product)

                                                                        <tr>
                                                                            <th scope="row">
                                                                                <div class="form-check main_form">
                                                                                    <input class="form-check-input" type="checkbox"  name="products[]" value="{{$product->id}}" {{ in_array($product->id, $assignedProductIds) ? 'checked' : '' }}>
                                                                                    <label class="form-check-label" for="defaultCheck1">
                                                                                    </label>
                                                                                </div>
                                                                            </th>
                                                                            <td class="heading ">{{$product->name}}</td>
                                                                            <td class="heading " >
                                                                                $412.50</td>
                                                                            <td class="heading ">{{$product->product_information}}</td>
                                                                            <td class="heading ">{{$product->price}}</td>


                                                                        </tr>
                                                                        @endforeach

                                                                    </tbody>
                                                                </table>
                                                                                       </div></div>

                                                                    </div>

{{--
                                                                    <div class="col-md-12">
                                                                        <div class="reply-border">
                                                                            <label for="">Products</label>

                                                                            <select id="products" name="products[]" multiple class="form -control" required height='250'>
                                                                                @foreach ($products as $product)
                                                                                    <option value="{{$product->id}}">{{$product->name}}</option>
                                                                                @endforeach
                                                                            </select>

                                                                        </div>
                                                                    </div> --}}




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

        });
    </script>
