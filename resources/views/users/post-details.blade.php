@extends('users.layouts.main')
@section('contant')
<style>
.bottom-row {
    padding-top: 100px !important;
}

@media (min-width: 320px) and (max-width: 450px) {
    .bottom-row {
        padding-top: 0px !important;
    }
}
</style>
<script src="assets/vendor/libs/sortablejs/sortable.js" />
<script>
const cardEl = document.getElementById('sortable-cards');
Sortable.create(cardEl);
</script>

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
                                    <i class="fas fa-sliders-h" style=" color: black;"></i>
                                </button>
                            </div>
                        </div>
                        <div class="col-md-12 col-9">
                            <h1 class="Calendar" style="font-size: 24px;margin-top: -5px;">Skabeloner</h1>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-2"></div>
                <div class="col-md-4 col-4">
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-12">
                <ul class="nav nav-fill nav-tabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="fill-tab-0" data-bs-toggle="tab" href="#fill-tabpanel-0"
                            role="tab" aria-controls="fill-tabpanel-0" aria-selected="true"> Instagram </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="fill-tab-1" data-bs-toggle="tab" href="#fill-tabpanel-1" role="tab"
                            aria-controls="fill-tabpanel-1" aria-selected="false"> Facebook </a>
                    </li>
                </ul>
                <div class="tab-content pt-5" id="tab-content">
                    <div class="tab-pane active" id="fill-tabpanel-0" role="tabpanel" aria-labelledby="fill-tab-0">

                        <div class="row">
                            <div class="col-md-3 mt-2" style="padding-left: 0px !important;">
                                <div class="card h-100" style="border-radius: 23.99px;margin-bottom: 0px !important;">
                                    <div class="card-body" style="padding:0px !important">
                                        <div class="row p-3">
                                            <div class="col-md-2">
                                                <img src="../assets/images/man.png" style="width: 36px !important;">
                                            </div>
                                            <div class="col-md-6">
                                                <span>Lorem Ipsum</span>
                                            </div>
                                            <div class="col-md-4">
                                                <ul class="main_ul">
                                                    <li><i class="fab fa-facebook-f"></i></li>
                                                    <li><i class="fab fa-facebook-f"></i></li>
                                                    <li><i class="fab fa-facebook-f"></i></li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div
                                            style="background-image: url(../assets/images/para.png);    height: 300px;background-size: cover;background-position: center;background-repeat: no-repeat;width: 100%;">
                                        </div>

                                        <div class="row p-3">
                                            <div class="col-md-4">
                                                <ul class="main_ul" style="justify-content: left;">
                                                    <li><i class="fab fa-facebook-f"></i></li>
                                                    <li><i class="fab fa-facebook-f"></i></li>
                                                    <li><i class="fab fa-facebook-f"></i></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-8 text-end">
                                                <i class="fab fa-facebook-f"></i>
                                            </div>
                                        </div>

                                        <div class="row p-3">
                                            <div class="col-md-12">
                                                <h4>Templates 1</h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                    eiusmod</p>
                                            </div>
                                        </div>

                                        <div class="row p-3 bootom_row">
                                            <div class="col-md-2 col-2" style="padding-right: 0px !IMPORTANT;">
                                                <img src="../assets/images/man.png" class="w-100">
                                            </div>
                                            <div class="col-md-6 col-6" style="padding-right: 0px !IMPORTANT;">
                                                <p>24/07/2024</p>
                                            </div>
                                            <div class="col-md-3 col-3">
                                                <a class="btn btn-info"><i
                                                        class="fas fa-external-link-square-alt text-light"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mt-2" style="padding-left: 0px !important;">
                                <div class="card h-100" style="border-radius: 23.99px;margin-bottom: 0px !important;">
                                    <div class="card-body" style="padding:0px !important">
                                        <div class="row p-3">
                                            <div class="col-md-2">
                                                <img src="../assets/images/man.png" style="width: 36px !important;">
                                            </div>
                                            <div class="col-md-6">
                                                <p>Lorem Ipsum</p>
                                            </div>
                                            <div class="col-md-4">
                                                <ul class="main_ul">
                                                    <li><i class="fab fa-facebook-f"></i></li>
                                                    <li><i class="fab fa-facebook-f"></i></li>
                                                    <li><i class="fab fa-facebook-f"></i></li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div
                                            style="background-image: url(../assets/images/para.png);    height: 300px;background-size: cover;background-position: center;background-repeat: no-repeat;width: 100%;">
                                        </div>

                                        <div class="row p-3">
                                            <div class="col-md-4">
                                                <ul class="main_ul" style="justify-content: left;">
                                                    <li><i class="fab fa-facebook-f"></i></li>
                                                    <li><i class="fab fa-facebook-f"></i></li>
                                                    <li><i class="fab fa-facebook-f"></i></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-8 text-end">
                                                <i class="fab fa-facebook-f"></i>
                                            </div>
                                        </div>

                                        <div class="row p-3">
                                            <div class="col-md-12">
                                                <h4>Templates 1</h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                    eiusmod</p>
                                            </div>
                                        </div>

                                        <div class="row p-3 bootom_row mt-3">
                                            <div class="col-md-2">
                                                <img src="../assets/images/man.png" style="width:37px !important">
                                            </div>
                                            <div class="col-md-7">
                                                <p>24/07/2024</p>
                                            </div>
                                            <div class="col-md-3 text-end">
                                                <a class="btn btn-info w-100"><i
                                                        class="fas fa-external-link-square-alt text-light"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 mt-2" style="padding-left: 0px !important;">
                                <div class="card h-100" style="border-radius: 23.99px;margin-bottom: 0px !important;">
                                    <div class="card-body" style="padding:0px !important">
                                        <div class="row p-3">
                                            <div class="col-md-2">
                                                <img src="../assets/images/man.png" style="width: 36px !important;">
                                            </div>
                                            <div class="col-md-6">
                                                <span>Lorem Ipsum</span>
                                            </div>
                                            <div class="col-md-4">
                                                <ul class="main_ul">
                                                    <li><i class="fab fa-facebook-f"></i></li>
                                                    <li><i class="fab fa-facebook-f"></i></li>
                                                    <li><i class="fab fa-facebook-f"></i></li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div
                                            style="background-image: url(../assets/images/para.png);    height: 300px;background-size: cover;background-position: center;background-repeat: no-repeat;width: 100%;">
                                        </div>

                                        <div class="row p-3">
                                            <div class="col-md-4">
                                                <ul class="main_ul" style="justify-content: left;">
                                                    <li><i class="fab fa-facebook-f"></i></li>
                                                    <li><i class="fab fa-facebook-f"></i></li>
                                                    <li><i class="fab fa-facebook-f"></i></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-8 text-end">
                                                <i class="fab fa-facebook-f"></i>
                                            </div>
                                        </div>

                                        <div class="row p-3">
                                            <div class="col-md-12">
                                                <h4>Templates 1</h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                    eiusmod</p>
                                            </div>
                                        </div>

                                        <div class="row p-3 bootom_row">
                                            <div class="col-md-2 col-2" style="padding-right: 0px !IMPORTANT;">
                                                <img src="../assets/images/man.png" class="w-100">
                                            </div>
                                            <div class="col-md-6 col-6" style="padding-right: 0px !IMPORTANT;">
                                                <p>24/07/2024</p>
                                            </div>
                                            <div class="col-md-3 col-3">
                                                <a class="btn btn-info"><i
                                                        class="fas fa-external-link-square-alt text-light"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="fill-tabpanel-1" role="tabpanel" aria-labelledby="fill-tab-1">
                        <div class="row">
                            <div class="col-md-4 mt-3">
                                <div class="card " style="border-radius: 23.99px;margin-bottom: 0px !important;">
                                    <div class="card-body" style="padding:0px !important">
                                        <div class="row p-3">
                                            <div class="col-md-2 col-2">
                                                <img src="../assets/images/man.png" style="width: 36px !important;">
                                            </div>
                                            <div class="col-md-8 col-8">
                                                <h5>Lorem Ipsum</h5>
                                                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, </span>
                                            </div>
                                            <div class="col-md-2 col-2">
                                                <ul class="main_ul">
                                                    <li><i class="fab fa-facebook-f"></i></li>
                                                    <li><i class="fab fa-facebook-f"></i></li>
                                                    <li><i class="fab fa-facebook-f"></i></li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div
                                            style="background-image: url(../assets/images/para.png);    height: 300px;background-size: cover;background-position: center;background-repeat: no-repeat;width: 100%;">
                                        </div>

                                        <div class="row p-3">
                                            <div class="col-md-2 col-2">
                                                <ul class="main_ul" style="justify-content: left;">
                                                    <li><i class="fab fa-facebook-f"></i></li>
                                                    <li><i class="fab fa-facebook-f"></i></li>
                                                    <li><i class="fab fa-facebook-f"></i></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4 col-3">
                                                <p>lorem</p>
                                            </div>

                                            <div class="col-md-3 col-3">
                                                <p>lorem</p>
                                            </div>
                                            <div class="col-md-3 col-3">
                                                <p>lorem</p>
                                            </div>
                                        </div>

                                        <div class="row p-3"
                                            style="border-top: 2px solid #E3E4ED;border-bottom: 2px solid #E3E4ED;margin-left: 0px; width:100%;">
                                            <div class="col-md-4 col-4">
                                                <p>Heading</p>
                                            </div>
                                            <div class="col-md-4 col-4">
                                                <p>Heading</p>
                                            </div>
                                            <div class="col-md-4 col-4">
                                                <p>Heading</p>
                                            </div>

                                        </div>

                                        <div class="row p-3 bootom_row">
                                            <div class="col-md-2 col-2" style="padding-right: 0px !IMPORTANT;">
                                                <img src="../assets/images/man.png" class="w-100">
                                            </div>
                                            <div class="col-md-10 col-10" style="padding-right: 0px !IMPORTANT;">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                    eiusmod
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 mt-3">
                                <div class="card h-100" style="border-radius: 23.99px;margin-bottom: 0px !important;">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12 col-12">
                                                <h4>
                                                    Tilpas Skabelon
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="card details-card">
                                                    <div class="card-body" style="padding:10px;">
                                                        <label class="lable-heading">Overskrift</label>
                                                        <input style="border:none;background: #EEF9FFE5;" type="text"
                                                            class="form-control" placeholder="Skriv her..." name="">
                                                    </div>
                                                </div>
                                                <div class="card details-card">
                                                    <div class="card-body" style="padding:8px 12px 8px 12px;">
                                                        <label class="lable-heading">Beskrivelse</label>
                                                        <textarea
                                                            style="border:none;background: #EEF9FFE5;margin-bottom: 50px;"
                                                            type="text" class="form-control" placeholder="Skriv her..."
                                                            name=""></textarea>
                                                    </div>
                                                </div>
                                                <div class="card details-card">
                                                    <div class="card-body" style="padding:10px;">
                                                        <label class="lable-heading">Linkbeskrivelse</label>
                                                        <input style="border:none;background: #EEF9FFE5;" type="text"
                                                            class="form-control" placeholder="Skriv her..." name="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" id="sortable-cards">
                                            <div class="col-lg-12 col-12">
                                                <div class="card drag-item cursor-move mb-lg-0 mb-4"
                                                    style="background: #EEF9FFE5;height: 300px;border: 1px dashed #2CAAE1 !important;border-radius:12px;">
                                                    <div class="card-body text-center">
                                                        <h2>
                                                            <i class="bx bx-cart text-success display-6"></i>
                                                        </h2>
                                                        <div class="pt-5 mt-4">
                                                            <img src="../assets/images/drag-icon-removebg-preview.png">
                                                            <h4>Upload Billede</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-md-2 col-3">
                                                <a href=""><i class="material-icons"
                                                        style="position: absolute; padding-left: 58px;color:white;">delete</i></a>
                                                <img src="../assets/images/man.png" class="w-100">
                                            </div>
                                            <div class="col-md-2 col-3">
                                                <a href=""><i class="material-icons"
                                                        style="position: absolute; padding-left: 58px;color:white;">delete</i></a>
                                                <img src="../assets/images/man.png" class="w-100">
                                            </div>
                                        </div>
                                        <div class="row" style="text-end">
                                            <div class="col-md-8 mt-3"></div>
                                            <div class="col-md-2 col-6">
                                                <a href="" class="btn btn-primary" style="box-shadow: 5px 5px 30px 0px #D3DAE5;
												color: red;
												">Annuller</a>
                                            </div>
                                            <div class="col-md-2 col-6">
                                                <a href="Create-Campaign.php" class="btn btn-info">Gem</a>
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
</div>
@endsection