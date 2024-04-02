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
p{
   font-size: 14px !important;
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
                                                <label style="color: #2E32388F;font-size: 12px !important;
												">Kampagnenavn</label>
                                                <input style="border:none;background: #EEF9FFE5;" type="text"
                                                    class="form-control" placeholder="Skriv her..." name="">
                                            </div>
                                        </div>

                                        <div class="card" style="background: #EEF9FFE5;border: none;">
                                            <div class="card-body" style="padding:10px;">
                                                <label style="color: #2E32388F;font-size: 12px !important;
												">Købsord</label>
                                                <input style="border:none;background: #EEF9FFE5;" type="text"
                                                    class="form-control" placeholder="Skriv her..." name="">
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
                                            JatakSalg vil søge efter 'likes' i kommentarerne. Dette gør det muligt for
                                            brugere at signalere interesse for et produkt med et enkelt 'like'. Bemærk,
                                            at 'likes' ikke kan anvendes som søgeord for produkter eller til at angive
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
                                            Hvis du allerede har oprettet et opslag, kan du forbinde det til kampagnen.
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1 col-2">
                                        <img src="website/user/../assets/images/face.png" class="w-100">
                                    </div>
                                    <div class="col-md-7 col-6">
                                        <p>
                                            Facebook-opslag
                                        </p>
                                    </div>
                                    <div class="col-md-4 text-end col-4">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked"
                                                checked>
                                            <label class="form-check-label" for="flexSwitchCheckChecked"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="border-top: 1px solid #2E32381F">
                                    <div class="col-md-1 col-2 pt-3">
                                        <img src="website/user/../assets/images/insta.png" class="w-100">
                                    </div>
                                    <div class="col-md-7 col-6 pt-3">
                                        <p>
                                            Instagram-opslag
                                        </p>
                                    </div>
                                    <div class="col-md-4 text-end col-4 pt-3">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked"
                                                checked>
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
                                    <div class="col-md-1 col-2 pt-3">
                                        <img src="website/user/../assets/images/insta.png" class="w-100">
                                    </div>
                                    <div class="col-md-7 col-6 pt-3">
                                        <p>
                                            Instagram Post Kampagne
                                        </p>
                                    </div>
                                    <div class="col-md-4 text-end col-4 pt-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckChecked" checked>
                                            <label class="form-check-label" for="flexCheckChecked">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p>
                                                Denne funktion vil gøre Instagram Live videoer shopbare hvis gemt som
                                                opslag. Hvis aktiveret, vil Instagram opslag blive monitoreret for
                                                kommentarer, der udløser produkt søge termer i denne kampagne. Bemærk at
                                                kun ét Instagram opslag kan være aktivt ad gangen. Aktivering af denne
                                                kampagne vil deaktivere andre aktive kampagner.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-1 col-2 pt-4">
                                            <i class='far fa-comment-dots' style="color: #2CAAE1; font-size: 30px;"></i>
                                        </div>
                                        <div class="col-md-6 text-start col-6 pt-4">
                                            <p>
                                                Beskedindbakke kampagne
                                            </p>
                                        </div>
                                        <div class="col-md-5 col-4 pt-4 text-end">
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
                                            <p>
                                                Hvis du vælger denne mulighed, vil alle beskeder i din indbakke blive
                                                matchet imod denne kampagne. Vælg kun hvis du ønsker at sælge på
                                                messenger ved hjælp af denne kampagne.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card" style="background: #EEF9FFE5;border: none;">
                                                <div class="card-body" style="padding:10px;">
                                                    <label style="color: #2E32388F;font-size: 12px !important;
													">Kampagnetid</label>
                                                    <input style="border:none;background: #EEF9FFE5;" type="date" name
                                                        class="form-control" name="date">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-1 col-1 text-end">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckChecked" checked>
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
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckChecked" checked>
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
                                                        <img src="website/user/../assets/images/drag-icon-removebg-preview.png">
                                                        <h4>Upload Fil</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row pt-3" style="text-end">
                                        <div class="col-md-6 col-12"></div>
                                        <div class="col-md-3 col-6">
                                            <a href="" class="btn btn-primary w-100" style="box-shadow: 5px 5px 30px 0px #D3DAE5;
											color: red;
											">Annuller</a>
                                        </div>
                                        <div class="col-md-3 col-6">
                                            <a href="Create-Campaign" class="btn btn-info w-100">Gem</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mt-3">
                        <div class="card " style="border-radius: 23.99px;margin-bottom: 0px !important;">
                            <div class="card-body" style="padding:0px !important">
                                <div class="row p-3">
                                    <div class="col-md-2 col-2">
                                        <img src="website/user/../assets/images/man.png" style="width: 36px !important;">
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
                                    style="background-image: url(website/user/../assets/images/para.png);    height: 300px;background-size: cover;background-position: center;background-repeat: no-repeat;width: 100%;">
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
                                        <img src="website/user/../assets/images/man.png" class="w-100">
                                    </div>
                                    <div class="col-md-10 col-10" style="padding-right: 0px !IMPORTANT;">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        </p>
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