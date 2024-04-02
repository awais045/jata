@extends('en.users.layouts.main')
@section('contant')
<style>
.form-control:focus {
    color: #495057;
    background-color: #fff;
    border-color: #80bdff;
    outline: 0;
    box-shadow: none !important;
}

::placeholder {
    color: black !important;
}

.bottom-row {
    padding-top: 90px !important;
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

    .calender_first {
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
                            <h1 class="Calendar" style="font-size: 24px; margin-top: -5px;">Page Settings </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row live">
            <div class="col-xl-12">
                <div class="row">
                    <div class="col-md-8">
                        <h2 class="p-3 Calendar calender_mobile">Page Settings</h2>
                    </div>
                    <div class="col-md-4 calender_first1">
                        <div class="row ">
                            <div class="col-md-5">
                                <a href="" class="btn btn-primary mt-3 w-100"></i>Cancel</a>
                            </div>
                            <div class="col-md-7">
                                <a href="" class="btn btn-info mt-3 w-100">Customize</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mt-3">
                <div class="card h-100" style="border-radius: 23.99px;margin-bottom: 0px !important;">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <p class="sale">
                                    After Sale
                                </p>
                            </div>
                        </div>
                        <div class="row" style="border-bottom: 1px solid #2E32381F;">
                            <div class="col-md-8 col-8">
                                <p class="allow">
                                    Allow “Delete Product” from cart
                                </p>
                            </div>
                            <div class="col-md-4 col-4 text-end">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                                    <label class="form-check-label" for="flexSwitchCheckChecked"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3" style="border-bottom: 1px solid #2E32381F;">
                            <div class="col-md-9 col-9">
                                <p>
                                    Delete reservation if comment is deleted
                                </p>
                            </div>
                            <div class="col-md-3 col-3 text-end">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                                    <label class="form-check-label" for="flexSwitchCheckChecked"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3" style="border-bottom: 1px solid #2E32381F;">
                            <div class="col-md-9 col-9">
                                <p class="allow">
                                    Send confirmation message on payment
                                </p>
                            </div>
                            <div class="col-md-3 col-3 text-end">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                                    <label class="form-check-label" for="flexSwitchCheckChecked"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <div class="card" style="background: #EEF9FFE5;border: none;border-radius: 10px;">
                                    <div class="card-body" style="padding:10px;">
                                        <label class="ps-2" style="color: #2E32388F;font-size: 12px !important;
										">Input title</label>
                                        <input style="border:none;background: #EEF9FFE5; height:20!important;"
                                            type="number" class="form-control" placeholder="10045" name="quantity">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mt-3">
                <div class="card h-100" style="border-radius: 23.99px;margin-bottom: 0px !important;">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <p class="sale">
                                    Contact Information
                                </p>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-md-12">
                                <div class="card" style="background: #EEF9FFE5;border: none;border-radius: 10px;">
                                    <div class="card-body" style="padding:10px;padding-bottom: 0px !important;">
                                        <label class="ps-2" style="color: #2E32388F;font-size: 12px !important;
										">Full Name</label>
                                        <p class="ms-2 mb-2">
                                            Mike Woods
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-md-12">
                                <div class="card" style="background: #EEF9FFE5;border: none;border-radius: 10px;">
                                    <div class="card-body" style="padding:10px;padding-bottom: 0px !important;">
                                        <label class="ps-2" style="color: #2E32388F;font-size: 12px !important;
										">Phone Number</label>
                                        <p class="ms-2 mb-2">
                                            03474570876
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-md-12">
                                <div class="card" style="background: #EEF9FFE5;border: none;border-radius: 10px;">
                                    <div class="card-body" style="padding:10px;padding-bottom: 0px !important;">
                                        <label class="ps-2" style="color: #2E32388F;font-size: 12px !important;
										">Email</label>
                                        <p class="ms-2 mb-2">
                                            mikewoods@mail.com
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mt-3">
                <div class="card h-100" style="border-radius: 23.99px;margin-bottom: 0px !important;">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <p class="sale">
                                    Language
                                </p>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <div class="card" style="background: #EEF9FFE5;border: none;border-radius: 10px;">
                                    <div class="card-body" style="padding:10px;">
                                        <label class="ps-2"
                                            style="color: #2E32388F;font-size: 12px !important;">Language</label>
                                        <select class="form-select" aria-label="Default select example" style="border: none;
										background: #eef9ff;box-shadow: none;">
                                            <option selected>English</option>
                                            <option value="1"> Mandarin</option>
                                            <option value="2"> Hindi </option>
                                            <option value="3"> Spanish</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card" style="background: #EEF9FFE5;border: none;border-radius: 10px;">
                                        <div class="card-body" style="padding:10px;">
                                            <label class="ps-2" style="color: #2E32388F;font-size: 12px !important;
										">Currency</label>
                                            <input style="border:none;background: #EEF9FFE5; height:20!important;"
                                                type="number" class="form-control"
                                                placeholder="Great Britain Pound (GBP)" name="text">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mt-3">
                <div class="card h-100" style="border-radius: 23.99px;margin-bottom: 0px !important;">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <p class="sale">
                                    Campaign Defaults
                                </p>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <div class="card" style="background: #EEF9FFE5;border: none;border-radius: 10px;">
                                    <div class="card-body" style="padding:10px;">
                                        <label class="ps-2" style="color: #2E32388F;font-size: 12px !important;
									">Input title</label>
                                        <p class="ms-2 mb-2">
                                            Some text goes here
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <div class="card" style="background: #EEF9FFE5;border: none;border-radius: 10px;">
                                    <div class="card-body" style="padding:10px;">
                                        <label class="ps-2" style="color: #2E32388F;font-size: 12px !important;
									">Input title</label>
                                        <p class="ms-2 mb-2">
                                            Some text goes here
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row calender_first">
                <div class="col-md-4">
                    <div class="row ">
                        <div class="col-md-5 col-6">
                            <a href="" class="btn btn-primary mt-3 w-100"></i>Cancel</a>
                        </div>
                        <div class="col-md-7 col-6">
                            <a href="" class="btn btn-info mt-3 w-100">Customize</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection