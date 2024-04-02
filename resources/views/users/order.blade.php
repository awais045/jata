@extends('users.layouts.main')
@section('contant')
<style>
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
    font-size: 14px !important;
    text-align: center;
}

.heading1 {
    font-size: 14px !important;
    text-align: center;
    color: #2E323852 !important;
}

.t-heading {
    font-size: 12px !important;
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
    padding-top: 310px !important;
}

.comment_section {
    text-align: center;
}

.comment_section i {
    padding-top: 5px;
    margin-top: 1px;
    color: black;
    background: white !important;
    border-radius: 100px;
    width: 30px;
    height: 29px;
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
<script src="assets/vendor/libs/sortablejs/sortable.js" />
<script>
const cardEl = document.getElementById('sortable-cards');
Sortable.create(cardEl);
</script>

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
                        <div class="col-md-12 col-9">
                            <h1 class="Calendar" style="font-size: 24px; margin-top: -5px;">Ordrer</h1>
                        </div>
                        <div class="col-md-3 col-1">
                            <div class="comment_section">
                                <i class="fas fa-ellipsis-v"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row live">
            <div class="col-xl-12">
                <div class="row">
                    <div class="col-md-5">
                        <h2 class="p-3 Calendar">Ordrer</h2>
                    </div>
                    <div class="col-md-7">
                        <div class="row">
                            <div class="col-md-3 col-3">

                            </div>
                            <div class="col-md-2 ">
                                <a href="" class="btn btn-primary mt-3 w-100 p-3"><img
                                        src="website/user/../assets/images/calender-icon3.png" style="width: 20px;"></a>
                            </div>
                            <div class="col-md-4 ">
                                <a href="" class="btn btn-primary mt-3 w-100 p-3"><img
                                        src="website/user/../assets/images/download8.png"></i>Download</a>
                            </div>
                            <div class="col-md-3">
                                <a href="" class="btn btn-primary mt-3 w-100 p-3"><span>More</span><i
                                        class="fa fa-ellipsis-v ps-3"></i></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 mt-3">
                <div class="card" style="border-radius: 23.99px;margin-bottom: 0px !important;">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8 col-8">
                                <div class=" text-end pt-2 d-flex">
                                    <i class="fas fa-search" style="color: #2E3238;margin-top: 15px;"></i>
                                    <input type="text" class="form-control main_form" placeholder="Search" name=""
                                        style="    border: none;
									width: 160px;
									border-bottom: 1px solid #2E3238;
									border-radius: 0px !important;">
                                </div>
                            </div>
                            <div class="col-md-4 col-4">
                                <div class="d-flex justify-content-end">
                                    <div class="pt-3">
                                        <img src="website/user/../assets/images/filter.png" style="width:20px;">
                                    </div>
                                    <div class="">
                                        <p class="pt-3">Filters</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12 col-lg-12 col-xl-12 table-responsive">
                                <table class="table " style="border: 1px solid #2E32381F;border-radius: 16px;">
                                    <thead>
                                        <tr>
                                            <th scope="col" class=" t-heading" style="font-size: 20px !important;">
                                                <div class="form-check ps-5">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                    </label>
                                                </div>
                                            </th>
                                            <th scope="col" class=" t-heading">Ordrenummer</th>
                                            <th scope="col" class=" t-heading ps-5"
                                                style="padding-right:100px !important;">Kunde</th>
                                            <th scope="col" class=" t-heading" style="padding-right:100px !important;">
                                                Kurvdato</th>
                                            <th scope="col" class=" t-heading" style="padding-right:100px !important;">
                                                Kurvtotal</th>
                                            <th scope="col" class=" t-heading "
                                                style="padding-right: 114px !important;">Betalt</th>
                                            <th scope="co" class=" t-heading">...</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">
                                                <div class="form-check ps-5 pt-1">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                    </label>
                                                </div>
                                            </th>
                                            <td class="heading pt-3">124</td>
                                            <td class="heading pt-3 ps-5 pe-5" style="padding-right: 100px !important;">
                                                John Doe</td>
                                            <td class="heading pt-3" style="padding-right:100px !important;">11/10/2022
                                            </td>
                                            <td class="heading pt-3" style="padding-right:100px !important;"> $412.50
                                            </td>
                                            <td class="heading  pt-3" style="padding-right:90px !important;"> $412.50
                                            </td>
                                            <td class="heading pt-3"><img
                                                    src="website/user/../assets/images/round-arrow.png"
                                                    style="width:30px;">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="">
                                                <div class="form-check ps-5 pt-2">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                    </label>
                                                </div>
                                            </th>
                                            <td class="heading pt-3">124</td>
                                            <td class="heading pt-3 ps-5 pe-5" style="padding-right: 100px !important;">
                                                John Doe</td>
                                            <td class="heading pt-3" style="padding-right:100px !important;">11/10/2022
                                            </td>
                                            <td class="heading pt-3" style="padding-right:100px !important;"> $412.50
                                            </td>
                                            <td class="heading pt-3" style="padding-right:90px !important;">
                                                $412.50
                                            </td>
                                            <td class="heading pt-3"><img
                                                    src="website/user/../assets/images/round-arrow.png"
                                                    style="width:30px;">
                                        </tr>
                                        <tr style="background: linear-gradient(0deg, rgba(46, 50, 56, 0.12), rgba(46, 50, 56, 0.12)),
											linear-gradient(0deg, #F5F5F5, #F5F5F5);">
                                            <th scope="row" class="">
                                                <div class="form-check ps-5 pt-2">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                    </label>
                                                </div>
                                            </th>
                                            <td class="heading pt-3">124</td>
                                            <td class="heading pt-3 ps-5 pe-5" style="padding-right: 100px !important;">
                                                John Doe</td>
                                            <td class="heading pt-3" style="padding-right:100px !important;">11/10/2022
                                            </td>
                                            <td class="heading pt-3" style="padding-right:100px !important;"> $412.50
                                            </td>
                                            <td class="heading pt-3" style="padding-right:90px !important;"> $412.50
                                            </td>
                                            <td class="heading pt-3"><img
                                                    src="website/user/../assets/images/round-arrow.png"
                                                    style="width:30px;"></td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="">
                                                <div class="form-check ps-5 pt-2">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                    </label>
                                                </div>
                                            </th>
                                            <td class="heading pt-3">124</td>
                                            <td class="heading pt-3 ps-5 pe-5" style="padding-right: 100px !important;">
                                                John Doe</td>
                                            <td class="heading pt-3" style="padding-right:100px !important;">11/10/2022
                                            </td>
                                            <td class="heading pt-3" style="padding-right:100px !important;"> $412.50
                                            </td>
                                            <td class="heading pt-3" style="padding-right:90px !important;"> $412.50
                                            </td>
                                            <td class="heading pt-3"><img
                                                    src="website/user/../assets/images/round-arrow.png"
                                                    style="width:30px;"></td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="">
                                                <div class="form-check ps-5 pt-2">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                    </label>
                                                </div>
                                            </th>
                                            <td class="heading pt-3">124</td>
                                            <td class="heading pt-3 ps-5 pe-5" style="padding-right: 100px !important;">
                                                John Doe</td>
                                            <td class="heading pt-3" style="padding-right:100px !important;">11/10/2022
                                            </td>
                                            <td class="heading pt-3" style="padding-right:100px !important;"> $412.50
                                            </td>
                                            <td class="heading pt-3" style="padding-right:90px !important;"> $412.50
                                            </td>

                                            <td class="heading pt-3"><img
                                                    src="website/user/../assets/images/round-arrow.png"
                                                    style="width:30px;"></td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="">
                                                <div class="form-check ps-5 pt-2">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                    </label>
                                                </div>
                                            </th>
                                            <td class="heading pt-3">124</td>
                                            <td class="heading pt-3 ps-5 pe-5" style="padding-right: 100px !important;">
                                                John Doe</td>
                                            <td class="heading pt-3" style="padding-right:100px !important;">11/10/2022
                                            </td>
                                            <td class="heading pt-3" style="padding-right:100px !important;"> $412.50
                                            </td>
                                            <td class="heading pt-3" style="padding-right:90px !important;"> $412.50
                                            </td>
                                            <td class="heading pt-3"><img
                                                    src="website/user/../assets/images/round-arrow.png"
                                                    style="width:30px;"></td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="">
                                                <div class="form-check ps-5 pt-2">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                    </label>
                                                </div>
                                            </th>
                                            <td class="heading pt-3">124</td>
                                            <td class="heading pt-3 ps-5 pe-5" style="padding-right: 100px !important;">
                                                John Doe</td>
                                            <td class="heading pt-3" style="padding-right:100px !important;">11/10/2022
                                            </td>
                                            <td class="heading pt-3" style="padding-right:100px !important;"> $412.50
                                            </td>
                                            <td class="heading pt-3" style="padding-right:90px !important;"> $412.50
                                            </td>

                                            <td class="heading pt-3"><img
                                                    src="website/user/../assets/images/round-arrow.png"
                                                    style="width:30px;"></td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="">
                                                <div class="form-check ps-5 pt-2">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                    </label>
                                                </div>
                                            </th>
                                            <td class="heading pt-3">124</td>
                                            <td class="heading pt-3 ps-5 pe-5" style="padding-right: 100px !important;">
                                                John Doe</td>
                                            <td class="heading pt-3" style="padding-right:100px !important;">11/10/2022
                                            </td>
                                            <td class="heading pt-3" style="padding-right:100px !important;"> $412.50
                                            </td>
                                            <td class="heading pt-3" style="padding-right:90px !important;"> $412.50
                                            </td>

                                            <td class="heading pt-3"><img
                                                    src="website/user/../assets/images/round-arrow.png"
                                                    style="width:30px;"></td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="">
                                                <div class="form-check ps-5 pt-2">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                    </label>
                                                </div>
                                            </th>
                                            <td class="heading pt-3">124</td>
                                            <td class="heading pt-3 ps-5 pe-5" style="padding-right: 100px !important;">
                                                John Doe</td>
                                            <td class="heading pt-3" style="padding-right:100px !important;">11/10/2022
                                            </td>
                                            <td class="heading pt-3" style="padding-right:100px !important;"> $412.50
                                            </td>
                                            <td class="heading pt-3" style="padding-right:90px !important;"> $412.50
                                            </td>
                                            <td class="heading pt-3"><img
                                                    src="website/user/../assets/images/round-arrow.png"
                                                    style="width:30px;"></td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="">
                                                <div class="form-check ps-5 pt-2">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                    </label>
                                                </div>
                                            </th>
                                            <td class="heading pt-3">124</td>
                                            <td class="heading pt-3 ps-5 pe-5" style="padding-right: 100px !important;">
                                                John Doe</td>
                                            <td class="heading pt-3" style="padding-right:100px !important;">11/10/2022
                                            </td>
                                            <td class="heading pt-3" style="padding-right:100px !important;"> $412.50
                                            </td>
                                            <td class="heading pt-3" style="padding-right:90px !important;"> $412.50
                                            </td>

                                            <td class="heading pt-3"><img
                                                    src="website/user/../assets/images/round-arrow.png"
                                                    style="width:30px;"></td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="">
                                                <div class="form-check ps-5 pt-2">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                    </label>
                                                </div>
                                            </th>
                                            <td class="heading pt-3">124</td>
                                            <td class="heading pt-3 ps-5 pe-5" style="padding-right: 100px !important;">
                                                John Doe</td>
                                            <td class="heading pt-3" style="padding-right:100px !important;">11/10/2022
                                            </td>
                                            <td class="heading pt-3" style="padding-right:100px !important;"> $412.50
                                            </td>
                                            <td class="heading pt-3" style="padding-right:90px !important;"> $412.50
                                            </td>
                                            <td class="heading pt-3"><img
                                                    src="website/user/../assets/images/round-arrow.png"
                                                    style="width:30px;"></td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="">
                                                <div class="form-check ps-5 pt-2">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                    </label>
                                                </div>
                                            </th>
                                            <td class="heading pt-3">124</td>
                                            <td class="heading pt-3 ps-5 pe-5" style="padding-right: 100px !important;">
                                                John Doe</td>
                                            <td class="heading pt-3" style="padding-right:100px !important;">11/10/2022
                                            </td>
                                            <td class="heading pt-3" style="padding-right:100px !important;"> $412.50
                                            </td>
                                            <td class="heading pt-3" style="padding-right:90px !important;"> $412.50
                                            </td>

                                            <td class="heading pt-3"><img
                                                    src="website/user/../assets/images/round-arrow.png"
                                                    style="width:30px;"></td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="">
                                                <div class="form-check ps-5 pt-2">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                    </label>
                                                </div>
                                            </th>
                                            <td class="heading pt-3">124</td>
                                            <td class="heading pt-3 ps-5 pe-5" style="padding-right: 100px !important;">
                                                John Doe</td>
                                            <td class="heading pt-3" style="padding-right:100px !important;">11/10/2022
                                            </td>
                                            <td class="heading pt-3" style="padding-right:100px !important;"> $412.50
                                            </td>
                                            <td class="heading pt-3" style="padding-right:90px !important;"> $412.50
                                            </td>

                                            <td class="heading pt-3"><img
                                                    src="website/user/../assets/images/round-arrow.png"
                                                    style="width:30px;">
                                        </tr>
                                        <tr>
                                            <th scope="row" class="">
                                                <div class="form-check ps-5 pt-2">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                    </label>
                                                </div>
                                            </th>
                                            <td class="heading pt-3">124</td>
                                            <td class="heading pt-3 ps-5 pe-5" style="padding-right: 100px !important;">
                                                John Doe</td>
                                            <td class="heading pt-3" style="padding-right:100px !important;">11/10/2022
                                            </td>
                                            <td class="heading pt-3" style="padding-right:100px !important;"> $412.50
                                            </td>
                                            <td class="heading pt-3" style="padding-right:90px !important;"> $412.50
                                            </td>

                                            <td class="heading pt-3"><img
                                                    src="website/user/../assets/images/round-arrow.png"
                                                    style="width:30px;"></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="row mt-4">
                                    <div class="col-md-6">
                                        <nav aria-label="...">
                                            <ul class="pagination">
                                                <li class="page-item disabled">
                                                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true"><i
                                                            class='fas fa-angle-left' style="color: #2E32383D;"></i></a>
                                                </li>
                                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item " aria-current="page">
                                                    <a class="page-link" href="#">2</a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                <li class="page-item"><a class="page-link" href="#">...</a></li>
                                                <li class="page-item"><a class="page-link" href="#">23</a></li>
                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#"><i class='fas fa-angle-right'></i>
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
</div>
@endsection