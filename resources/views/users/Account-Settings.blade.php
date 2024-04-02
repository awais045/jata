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

::placeholder {
    color: black !important;
}

.your-bor {
    padding: 12px;
    border-radius: 12px;
    border: 1px solid #2E32381F;
    background: linear-gradient(0deg, rgba(46, 50, 56, 0.12), rgba(46, 50, 56, 0.12)),
        linear-gradient(0deg, #F5F5F5, #F5F5F5);
    margin: 10px;

}

.price-card {
    background: #2CAAE11C;

}

.form-control:focus {
    box-shadow: none !important;
}

.accordion-button::after {
    background-image: url(website/user/../assets/images/arrow2.png) !important;
}

.accordion-item {
    border-top: 1px solid rgba(0, 0, 0, .125) !important;
    padding: 20px;
    border-radius: 16px !important;
}

.accordion-button:not(.collapsed) {
    background-color: white;
    color: #2E3238;
    box-shadow: none !important;
    border-bottom: 1px solid #2E32381F !important;
}

.accordion-button {
    font-size: 16px;
    color: #2E3238;
    font-weight: 500;
    line-height: 24px;
    letter-spacing: -0.02em;
    s
}

.accordion-button:focus {
    z-index: 3;
    border-color: #86b7fe;
    outline: 0;
    box-shadow: none !important;
}

.page-item.active .page-link {
    border-radius: 99px;
    z-index: 1;
    color: #2e3238cc;
    background-color: #F5F5F5;
    border-color: #F5F5F5;
}

.page-link {
    color: #2E3238CC;
    border: none !important;
    padding-left: 15px !important;
    padding-right: 15px !important;
}

.table td,
.table th {
    vertical-align: top;
    border-top: 1px solid #dee2e6;
}

.heading {
    font-size: 9px !important;
    text-align: center;
}

.heading1 {
    font-size: 9px !important;
    text-align: center;
    color: #2E323852 !important;
}

.t-heading {
    font-size: 12 !important;
    text-align: center;
    color: #2E323852 !important;
    background: #F5F5F5 !important;
}

.table>:not(caption)>*>* {
    padding: 0.5rem 8.5px;
    background-color: var(--bs-table-bg);
    border-bottom-width: 1px;
    box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);
}

.bottom-row {
    padding-top: 120px !important;
}

@media (min-width: 320px) and (max-width: 450px) {
    .live {
        display: none;
    }

    .btn-info {
        width: 100%;
        padding-left: 10px !important;
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
                            <h1 class="Calendar" style="font-size: 24px; margin-top: -5px;"> Kontoindstillinger</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row live">
            <div class="col-xl-12">
                <div class="row">
                    <div class="col-md-8">
                        <h2 class="p-3 Calendar calender_mobile">Kontoindstillinger</h2>
                    </div>
                    <div class="col-md-4 calender_first1">
                        <div class="row ">
                            <div class="col-md-5">
                                <a href="" class="btn btn-primary mt-3 w-100"></i>Annuller</a>
                            </div>
                            <div class="col-md-7">
                                <a href="" class="btn btn-info mt-3 w-100">Gem ændringer</a>
                            </div>
                        </div>
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
                                            aria-selected="true">Faktureringsinformation</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="fill-tab-1" data-bs-toggle="tab" href="#fill-tabpanel-1"
                                            role="tab" aria-controls="fill-tabpanel-1"
                                            aria-selected="false">Abonnement</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="fill-tab-2" data-bs-toggle="tab" href="#fill-tabpanel-2"
                                            role="tab" aria-controls="fill-tabpanel-2" aria-selected="false">Dine sider
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="fill-tab-3" data-bs-toggle="tab" href="#fill-tabpanel-3"
                                            role="tab" aria-controls="fill-tabpanel-3" aria-selected="false"> Login
                                            indstillinger</a>
                                    </li>
                                </ul>
                                <div class="tab-content pt-5" id="tab-content">
                                    <div class="tab-pane active" id="fill-tabpanel-0" role="tabpanel"
                                        aria-labelledby="fill-tab-0">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="card" style="border-radius: 16px !important;">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <p class="reply">
                                                                    Generelle Detaljer
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="card"
                                                                    style="background: #EEF9FFE5;border: none;border-radius: 10px;">
                                                                    <div class="card-body"
                                                                        style="padding-bottom: 0px !important;padding-top: 13px;">
                                                                        <label class="lable-heading"> Firmanavn</label>
                                                                        <p class="dark">
                                                                            Softrobo Systems
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="card"
                                                                    style="background: #EEF9FFE5;border: none;border-radius: 10px;">
                                                                    <div class="card-body"
                                                                        style="padding-bottom: 0px !important;padding-top: 13px;">
                                                                        <label class="lable-heading">Cvr Nummner</label>
                                                                        <p class="dark">
                                                                            3474570876
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
                                            <div class="col-md-12">
                                                <div class="card" style="border-radius: 16px !important;">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <p class="reply">
                                                                    Faktureringsadresse
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="row">
                                                                    <div class="col-md-6 col-12">
                                                                        <div class="card details-card">
                                                                            <div class="card-body"
                                                                                style="padding-bottom: 0px !important;padding-top: 13px;">
                                                                                <label
                                                                                    class="lable-heading">Adresse</label>
                                                                                <p class="dark">
                                                                                    Lahore Pakistan
                                                                                </p>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6 col-12">
                                                                        <div class="card details-card">
                                                                            <div class="card-body"
                                                                                style="padding-bottom: 0px !important;padding-top: 13px;">
                                                                                <label class="lable-heading">By</label>
                                                                                <p class="dark">
                                                                                    Lahore
                                                                                </p>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="row">
                                                                    <div class="col-md-6 col-12">
                                                                        <div class="card details-card">
                                                                            <div class="card-body"
                                                                                style="padding-bottom: 0px !important;padding-top: 13px;">
                                                                                <label
                                                                                    class="lable-heading">Postnummer</label>
                                                                                <p class="dark">
                                                                                    230001
                                                                                </p>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6 col-12">
                                                                        <div class="card details-card">
                                                                            <div class="card-body"
                                                                                style="padding-bottom: 0px !important;padding-top: 13px;">
                                                                                <label
                                                                                    class="lable-heading">Land</label>
                                                                                <p class="dark">
                                                                                    <img src="website/user/../assets/images/pakistan.png"
                                                                                        style="width:20px;">
                                                                                    Pakistan
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
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="card" style="border-radius: 16px !important;">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <p class="reply">
                                                                    Kontaktoplysninger
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="card"
                                                                    style="background: #EEF9FFE5;border: none;border-radius: 10px;">
                                                                    <div class="card-body"
                                                                        style="padding-bottom: 0px !important;padding-top: 13px;">
                                                                        <label
                                                                            class="lable-heading">Telefonnummer</label>
                                                                        <p class="dark">
                                                                            03474570876
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="card"
                                                                    style="background: #EEF9FFE5;border: none;border-radius: 10px;">
                                                                    <div class="card-body"
                                                                        style="padding-bottom: 0px !important;padding-top: 13px;">
                                                                        <label class="lable-heading">Email</label>
                                                                        <p class="dark">
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
                                    </div>
                                    <div class="tab-pane" id="fill-tabpanel-1" role="tabpanel"
                                        aria-labelledby="fill-tab-1">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="card h-100"
                                                    style="background: #EEF9FFE5;border: none;border-radius: 10px;">
                                                    <div class="card-body"
                                                        style="padding-bottom: 0px !important;padding-top: 13px;">
                                                        <div class="row">
                                                            <div class="col-md-6 col-6 mt-3">
                                                                <h5>
                                                                    Live-salg
                                                                </h5>
                                                                <p>
                                                                    36 dage tilbage
                                                                </p>
                                                            </div>
                                                            <div class="col-md-6 text-end col-6">
                                                                <h3 class="thirty-five">
                                                                    269 kr
                                                                </h3>
                                                            </div>
                                                            <div class="col-md-12 mb-3">
                                                                <a href="" class="btn btn-primary">Annuller
                                                                    Abonnement</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mt-3">
                                                <div class="card h-100" style="background: linear-gradient(147.7deg, #4DC9FF 1.24%, #2BA5FD 98.26%);
												border: none;border-radius: 10px;">
                                                    <div class="card-body"
                                                        style="padding-bottom: 0px !important;padding-top: 13px;">
                                                        <div class="row">
                                                            <div class="col-md-8 col-8">
                                                                <h5 class="text-light">
                                                                    PRO
                                                                </h5>
                                                                <p class="text-light">
                                                                    Planen der giver dig adgang til alle funktioner
                                                                </p>
                                                            </div>
                                                            <div class="col-md-4 col-4 text-end">
                                                                <h3 class="text-light">
                                                                    399 kr
                                                                </h3>
                                                            </div>
                                                            <div class="col-md-4 mb-3">
                                                                <a href="" class="btn btn-primary">Opgrader</a>
                                                            </div>
                                                            <div class="col-md-8  mt-3">
                                                                <a href="" class="text-light">Lær mere om PRO planen</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-4">
                                                <div class="col-md-12">
                                                    <div class="card" style="border-radius: 16px !important;">
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <p class="reply">
                                                                        Aktiver Automatisk Fornyelse
                                                                    </p>
                                                                </div>
                                                                <div class="col-md-6 text-end">
                                                                    <div class="form-check form-switch">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="flexSwitchCheckChecked" checked>
                                                                        <label class="form-check-label"
                                                                            for="flexSwitchCheckChecked"></label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="row">
                                                                    <p>
                                                                        Denne indstilling; hvis markeret, vil forny dit
                                                                        produktive abonnement, hvis den nuværende plan
                                                                        udløber.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-4">
                                                <div class="col-md-12">
                                                    <div class="card" style="border-radius: 16px !important;">
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <p class="reply">
                                                                        Aktiver Automatisk Fornyelse
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <img src="../assets/images/cerited.png"
                                                                        class="w-100">
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <img src="../assets/images/debit.png" class="w-100">
                                                                </div>
                                                                <div class="col-md-4 ">
                                                                    <div class="card drag-item cursor-move mb-lg-0 "
                                                                        style="border: 1px dashed #2CAAE1 !important;border-radius:12px;">
                                                                        <div class="card-body text-center">
                                                                            <h2>
                                                                                <i
                                                                                    class="bx bx-cart text-success display-6"></i>
                                                                            </h2>
                                                                            <div class="">
                                                                                <img src="../assets/images/drag-icon-removebg-preview.png"
                                                                                    style="width:50px;">
                                                                                <p>Tilføj Nyt Kort</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-4">
                                                <div class="col-md-12">
                                                    <div class="card" style="border-radius: 16px !important;">
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <p class="reply">
                                                                        Billing History
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12  table-responsive">
                                                                <table class="table"
                                                                    style="border: 1px solid #2E32381F;border-radius: 16px;">
                                                                    <thead>
                                                                        <tr>
                                                                            <th scope="col"
                                                                                class="t-heading text-start ps-5">Date
                                                                            </th>
                                                                            <th scope="col"
                                                                                class=" t-heading text-start ps-5">
                                                                                Details</th>
                                                                            <th scope="col" class="t-heading text-start"
                                                                                style="">Amount</th>
                                                                            <th scope="col" class="t-heading text-start"
                                                                                style="">Download</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td class="heading pt-3"
                                                                                style="padding-right: 160px;">1978/10/21
                                                                                | 04:10:00</td>
                                                                            <td class="heading pt-3 "
                                                                                style="padding-right: 130px;">Live Sales
                                                                                plan, monthly</td>
                                                                            <td class="heading pt-3"
                                                                                style="padding-right: 160px;">€35</td>
                                                                            <td class="heading pt-3"><img
                                                                                    src="../assets/images/round-arrow.png"
                                                                                    style="width:30px;"></td>


                                                                        </tr>
                                                                        <tr>
                                                                            <td class="heading pt-3"
                                                                                style="padding-right: 160px;">1978/10/21
                                                                                | 04:10:00</td>
                                                                            <td class="heading pt-3 "
                                                                                style="padding-right: 130px;">Live Sales
                                                                                plan, monthly</td>
                                                                            <td class="heading pt-3"
                                                                                style="padding-right: 160px;">€35</td>
                                                                            <td class="heading pt-3"><img
                                                                                    src="../assets/images/round-arrow.png"
                                                                                    style="width:30px;">
                                                                            </td>
                                                                        </tr>
                                                                        <tr style="background: linear-gradient(0deg, rgba(46, 50, 56, 0.12), rgba(46, 50, 56, 0.12)),
																	linear-gradient(0deg, #F5F5F5, #F5F5F5);">
                                                                            <td class="heading pt-3"
                                                                                style="padding-right: 160px;">1978/10/21
                                                                                | 04:10:00</td>
                                                                            <td class="heading pt-3 "
                                                                                style="padding-right: 130px;">Live Sales
                                                                                plan, monthly</td>
                                                                            <td class="heading pt-3"
                                                                                style="padding-right: 160px;">€35</td>
                                                                            <td class="heading pt-3"><img
                                                                                    src="../assets/images/round-arrow.png"
                                                                                    style="width:30px;"></td>


                                                                        </tr>
                                                                        <tr>
                                                                            <td class="heading pt-3"
                                                                                style="padding-right: 160px;">1978/10/21
                                                                                | 04:10:00</td>
                                                                            <td class="heading pt-3 "
                                                                                style="padding-right: 130px;">Live Sales
                                                                                plan, monthly</td>
                                                                            <td class="heading pt-3"
                                                                                style="padding-right: 160px;">€35</td>
                                                                            <td class="heading pt-3"><img
                                                                                    src="../assets/images/round-arrow.png"
                                                                                    style="width:30px;"></td>


                                                                        </tr>
                                                                        <tr>
                                                                            <td class="heading pt-3"
                                                                                style="padding-right: 160px;">1978/10/21
                                                                                | 04:10:00</td>
                                                                            <td class="heading pt-3 "
                                                                                style="padding-right: 130px;">Live Sales
                                                                                plan, monthly</td>
                                                                            <td class="heading pt-3"
                                                                                style="padding-right: 160px;">€35</td>
                                                                            <td class="heading pt-3"><img
                                                                                    src="../assets/images/round-arrow.png"
                                                                                    style="width:30px;"></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <div class="row mt-4">
                                                                    <div class="col-md-6">
                                                                        <nav aria-label="...">
                                                                            <ul class="pagination">
                                                                                <li class="page-item disabled">
                                                                                    <a class="page-link" href="#"
                                                                                        tabindex="-1"
                                                                                        aria-disabled="true"><i
                                                                                            class='fas fa-angle-left'
                                                                                            style="color: #2E32383D;"></i></a>
                                                                                </li>
                                                                                <li class="page-item active"><a
                                                                                        class="page-link" href="#">1</a>
                                                                                </li>
                                                                                <li class="page-item "
                                                                                    aria-current="page">
                                                                                    <a class="page-link" href="#">2</a>
                                                                                </li>
                                                                                <li class="page-item"><a
                                                                                        class="page-link" href="#">3</a>
                                                                                </li>
                                                                                <li class="page-item"><a
                                                                                        class="page-link"
                                                                                        href="#">...</a></li>
                                                                                <li class="page-item"><a
                                                                                        class="page-link"
                                                                                        href="#">23</a></li>
                                                                                <li class="page-item"><a
                                                                                        class="page-link" href="#">2</a>
                                                                                </li>
                                                                                <li class="page-item">
                                                                                    <a class="page-link" href="#"><i
                                                                                            class='fas fa-angle-right'></i>
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </nav>
                                                                    </div>
                                                                    <div class="col-md-6 text-end">
                                                                        <p class="showing">
                                                                            Showing 1 to 3 of 3 entries
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
                                    <div class="tab-pane" id="fill-tabpanel-2" role="tabpanel"
                                        aria-labelledby="fill-tab-2">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h5 class="ms-2">
                                                    Not Attached
                                                </h5>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="your-bor">
                                                        <div class="row">
                                                            <div class="col-md-9">
                                                                <p class="mt-3">The Wahityaat Society,
                                                                    thewahiyaatsociety</p>
                                                            </div>

                                                            <div class="col-md-1 mt-1 col-6">
                                                                <a href="" class="btn btn-primary ">Edit</a>
                                                            </div>
                                                            <div class="col-md-2 text-center mt-1 col-6">
                                                                <a href="" class="btn btn-info ">Add</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="your-bor">
                                                        <div class="row">
                                                            <div class="col-md-9">
                                                                <p class="mt-3">The Wahityaat Society,
                                                                    thewahiyaatsociety </p>
                                                            </div>

                                                            <div class="col-md-1 mt-1 col-6">
                                                                <a href="" class="btn btn-primary">Edit</a>
                                                            </div>
                                                            <div class="col-md-2 text-center mt-1 col-6">
                                                                <a href="" class="btn btn-info">Add</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="your-bor">
                                                        <div class="row">
                                                            <div class="col-md-9">
                                                                <p class="mt-3">The Wahityaat Society,
                                                                    thewahiyaatsociety</p>
                                                            </div>

                                                            <div class="col-md-1 mt-1 col-6">
                                                                <a href="" class="btn btn-primary">Edit</a>
                                                            </div>
                                                            <div class="col-md-2 text-center mt-1 col-6">
                                                                <a href="" class="btn btn-info">Add</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="fill-tabpanel-3" role="tabpanel"
                                        aria-labelledby="fill-tab-3">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="card" style="border-radius: 16px !important;">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <p class="reply">
                                                                    Opret Email Login
                                                                </p>
                                                                <p class="">
                                                                    Tilføj din email og adgangskode til din konto. Du
                                                                    kan bruge dette til at logge ind på JatakSalgs
                                                                    enheder, hvor du ikke er logget ind med Facebook.
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="card details-card">
                                                                    <div class="card-body"
                                                                        style="padding:10px;padding-bottom: 2px !important;">
                                                                        <label class="lable-heading ms-2"
                                                                            style="padding-bottom:0px !important;">Email
                                                                            Adresse</label>
                                                                        <input
                                                                            style="border:none;background: #EEF9FFE5;"
                                                                            type="text" class="form-control"
                                                                            placeholder="email@mail.com" name="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="card details-card">
                                                                    <div class="card-body"
                                                                        style="padding:10px;padding-bottom: 2px !important;">
                                                                        <label class="lable-heading ms-2"
                                                                            style="padding-bottom:0px !important;">Password</label>
                                                                        <input
                                                                            style="border:none;background: #EEF9FFE5;"
                                                                            type="text" class="form-control"
                                                                            placeholder="********" name="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="card" style="border-radius: 16px !important;">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <p class="reply">
                                                                    Har du en invitation?
                                                                </p>
                                                                <p class="">
                                                                    Hvis du har en invitationsnøgle, så indtast den
                                                                    nedenfor for at få adgang
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="card details-card">
                                                                    <div class="card-body"
                                                                        style="padding:10px;padding-bottom: 2px !important;">
                                                                        <div class="row">
                                                                            <div class="col-md-6 col-6">
                                                                                <label class="lable-heading ms-2 "
                                                                                    style="padding-bottom:0px !important;margin-top: 10px !important;">Invitationsnøgle</label>
                                                                            </div>
                                                                            <div class="col-md-6 text-end col-6 mt-1">
                                                                                <a href="" class="btn btn-info"
                                                                                    style=" color: white; margin-bottom:7px;">Brug
                                                                                    Token</a>
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