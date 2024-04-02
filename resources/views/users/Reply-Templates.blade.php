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
                                <ul class="nav nav-fill nav-tabs" role="tablist"
                                    style="border: 1px solid #2E32381F;    border-bottom: 3px solid #dee2e6 !important;">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" id="fill-tab-0" data-bs-toggle="tab"
                                            href="#fill-tabpanel-0" role="tab" aria-controls="fill-tabpanel-0"
                                            aria-selected="true">Reservation</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="fill-tab-1" data-bs-toggle="tab" href="#fill-tabpanel-1"
                                            role="tab" aria-controls="fill-tabpanel-1" aria-selected="false">Udsolgt</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="fill-tab-2" data-bs-toggle="tab" href="#fill-tabpanel-2"
                                            role="tab" aria-controls="fill-tabpanel-2" aria-selected="false">Udsolgt
                                            (Offentlig)</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="fill-tab-3" data-bs-toggle="tab" href="#fill-tabpanel-3"
                                            role="tab" aria-controls="fill-tabpanel-3" aria-selected="false">Ikke Nok
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="fill-tab-4" data-bs-toggle="tab" href="#fill-tabpanel-4"
                                            role="tab" aria-controls="fill-tabpanel-4" aria-selected="false">Fejl i
                                            Messenger</a>
                                    </li>
                                </ul>
                                <div class="tab-content pt-5" id="tab-content">
                                    <div class="tab-pane active" id="fill-tabpanel-0" role="tabpanel"
                                        aria-labelledby="fill-tab-0">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="heading-bro">
                                                    <p style="color:#2CAAE1;">
                                                        <img src="website/user/../assets/images/questiom-mark.png">
                                                        Her designer du dine standard svar, som vil blive anvendt til
                                                        nye kampagner. Efter oprettelse af en ny kampagne, kan du
                                                        redigere svarene for den specifikke kampagne om nødvendigt..<i
                                                            class="fa fa-close"
                                                            style="color: #4DC9FF;,margin-left: 10px !important;"></i>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 mt-3">
                                                <div class="card h-100" style="border-radius: 16px !important;">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-md-6 col-6">
                                                                <p class="reply">
                                                                    Svar i kommentarer
                                                                </p>
                                                            </div>
                                                            <div class="col-md-6 text-end col-6">
                                                                <p style="color: #2CAAE1;">
                                                                    <img
                                                                        src="website/user/../assets/images/plus-blue.png">
                                                                    Tilføj Svar
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="reply-border">
                                                                    <input type="text" class="form-control Type"
                                                                        style="border:none;"
                                                                        placeholder="	|Skriv dit svar her...">
                                                                    <div class="d-flex justify-content-end">
                                                                        <a href="" class="btn btn-primary me-2" style="box-shadow: 5px 5px 30px 0px #D3DAE5;
																		color: #FF5C37;
																		">Annuller</a>
                                                                        <a href="#" class="btn btn-info">Gem</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row mt-3">
                                                            <div class="col-md-12">
                                                                <div class="reply-bro2">
                                                                    <p>
                                                                        Hi %customerName%, your order for %productName%
                                                                        has been successfully placed! Your order number
                                                                        is %orderNumber%. We will update you with the
                                                                        shipping details soon. Thank you for your
                                                                        purchase! 😊 
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row mt-3">
                                                            <div class="col-md-12">
                                                                <div class="reply-bro2">
                                                                    <p>
                                                                        Hi %customerName%, your order for %productName%
                                                                        has been successfully placed! Your order number
                                                                        is %orderNumber%. We will update you with the
                                                                        shipping details soon. Thank you for your
                                                                        purchase! 😊 
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row mt-3">
                                                            <div class="col-md-12">
                                                                <div class="reply-bro2">
                                                                    <p>
                                                                        Hi %customerName%, your order for %productName%
                                                                        has been successfully placed! Your order number
                                                                        is %orderNumber%. We will update you with the
                                                                        shipping details soon. Thank you for your
                                                                        purchase! 😊 
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mt-3">
                                                <div class="card h-100" style="border-radius: 16px !important;">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-md-8 col-7">
                                                                <p class="reply">
                                                                    Svar i messenger<span
                                                                        style="color: #2E32388F;">(privat)</span>
                                                                </p>
                                                            </div>
                                                            <div class="col-md-4 text-end col-5">
                                                                <p style="color: #2CAAE1;">
                                                                    <img
                                                                        src="website/user/../assets/images/plus-blue.png">
                                                                    Tilføj Svar
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12 mt-3">
                                                                <div class="rservation">
                                                                    <img
                                                                        src="website/user/../assets/images/reply-icon.png">
                                                                    <p style="color:#2E3238A3;text-align: center;"
                                                                        class="reply">
                                                                        Ingen kommentarer endnu
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="fill-tabpanel-1" role="tabpanel"
                                        aria-labelledby="fill-tab-1">

                                    </div>
                                    <div class="tab-pane" id="fill-tabpanel-2" role="tabpanel"
                                        aria-labelledby="fill-tab-2">

                                    </div>
                                    <div class="tab-pane" id="fill-tabpanel-3" role="tabpanel"
                                        aria-labelledby="fill-tab-3">

                                    </div>
                                    <div class="tab-pane" id="fill-tabpanel-4" role="tabpanel"
                                        aria-labelledby="fill-tab-4">

                                    </div>
                                    <div class="tab-pane" id="fill-tabpanel-5" role="tabpanel"
                                        aria-labelledby="fill-tab-5">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection