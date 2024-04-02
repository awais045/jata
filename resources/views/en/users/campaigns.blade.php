@extends('en.users.layouts.main')
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
    font-size: 12 !important;
    text-align: center;
    color: #2E323852 !important;
    background: #F5F5F5 !important;
}

.table>:not(caption)>*>* {
    padding: 0.5rem 7.7px;
    background-color: var(--bs-table-bg);
    border-bottom-width: 1px;
    box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);
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

.bottom-row {
    padding-top: 640px !important;
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
    <div class="container mobile_section mt-3">
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
                        <h1 class="Calendar" style="font-size: 24px; margin-top: -5px;">Campaign</h1>
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
    <div class="content">
        <div class="col-xl-12">
            <div class="row live">
                <div class="col-md-5">
                    <h2 class="p-3 Calendar">Campaigns</h2>
                </div>
                <div class="col-md-7">
                    <div class="row live">
                        <div class="col-md-4">
                            <a href="" class="btn btn-primary mt-3 w-100"><i class="fa fa-video"
                                    style="color:black;"></i> Live Sale</a>
                        </div>
                        <div class="col-md-4">
                            <a href="" class="btn btn-primary mt-3 w-100"><img src="../assets/images/tag1.PNG"></i> Deal
                                Sale</a>
                        </div>
                        <div class="col-md-4">
                            <a href="" class="btn btn-info mt-3 w-100"> <i class="fa text-light">&#xf03e;</i> New Media
                                Post</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 mt-2">
            <div class="card" style="border-radius: 23.99px;margin-bottom: 0px !important;">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8 col-8">
                            <div class=" text-end pt-2 d-flex">
                                <i class="fas fa-search" style="color: #2E3238;margin-top: 15px;"></i>
                                <input type="text" class="form-control main_form" placeholder="Search" name="" style="    border: none;
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
                                        <th scope="col" class=" t-heading">#</th>
                                        <th scope="col" class=" t-heading">Name</th>
                                        <th scope="col" class=" t-heading">Purchase Words</th>
                                        <th scope="col" class=" t-heading">Campaign Time</th>
                                        <th scope="col" class=" t-heading">Campaign Type</th>
                                        <th scope="col" class=" t-heading">Social Type</th>
                                        <th scope="col" class=" t-heading">File</th>
                                        <th scope="col" class=" t-heading">Compaign</th>
                                        <th scope="col" class=" t-heading">Replies</th>
                                        <th scope="co" class=" t-heading">...</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row" class="pt-3">1</th>
                                        <td class="heading pt-3">Jane Doe</td>
                                        <td class="heading pt-3">Sint Occaecat Nihil</td>
                                        <td class="heading pt-3">@1978/10/21 | 04:10:00</td>
                                        <td class="heading "><a class="btn btn-info text-light rounded-pill">Live</a>
                                        </td>
                                        <td class="heading1 pt-3">None</td>
                                        <td class="heading1 pt-3">None</td>
                                        <td class="heading pt-3"><img
                                                src="website/user/../assets/images/calender-icon1.png"
                                                style="width: 20px;"></td>
                                        <td class="heading pt-3"><a href="add-product-info.php"><i class="fa fa-edit"
                                                    style="color:#2E32387A;"></i></a></td>
                                        <td class="heading pt-3"><i class="fa fa-trash-o" style="color: #2E32387A;"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="">2</th>
                                        <td class="heading pt-3">Jane Doe</td>
                                        <td class="heading pt-3">Sint Occaecat Nihil</td>
                                        <td class="heading pt-3">@1978/10/21 | 04:10:00</td>
                                        <td class="heading pt-3"><a class="btn btn-info text-light rounded-pill"
                                                style="background: linear-gradient(147.7deg, #FFC24D 1.24%, #F8931D 98.26%);">Live</a>
                                        </td>
                                        <td class="heading pt-3">Image</td>
                                        <td class="heading pt-3">Preview File</td>
                                        <td class="heading pt-3"><img
                                                src="website/user/../assets/images/calender-icon1.png"
                                                style="width: 20px;"></td>
                                        <td class="heading pt-3"><a href="add-product-info.php"><i class="fa fa-edit"
                                                    style="color:#2E32387A;"></i></a></td>
                                        <td class="heading pt-3"><i class="fa fa-trash-o" style="color: #2E32387A;
										"></i></td>
                                    </tr>
                                    <tr style="background: linear-gradient(0deg, rgba(46, 50, 56, 0.12), rgba(46, 50, 56, 0.12)),
									linear-gradient(0deg, #F5F5F5, #F5F5F5);
									">
                                        <th scope="row" class="">3</th>
                                        <td class="heading pt-3">Jane Doe</td>
                                        <td class="heading pt-3">Sint Occaecat Nihil</td>
                                        <td class="heading pt-3">@1978/10/21 | 04:10:00</td>
                                        <td class="heading pt-3 "><a
                                                class="btn btn-info text-light rounded-pill">Live</a></td>
                                        <td class="heading pt-3">Image</td>
                                        <td class="heading pt-3">Preview File</td>
                                        <td class="heading pt-3"><img
                                                src="website/user/../assets/images/calender-icon1.png"
                                                style="width: 20px;"></td>
                                        <td class="heading pt-3"><a href="add-product-info.php"><i class="fa fa-edit"
                                                    style="color:#2E32387A;"></i></a></td>
                                        <td class="heading pt-3"><i class="fa fa-trash-o" style="color:red;
									"></i></td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="">4</th>
                                        <td class="heading pt-3">Jane Doe</td>
                                        <td class="heading pt-3">Sint Occaecat Nihil</td>
                                        <td class="heading pt-3">@1978/10/21 | 04:10:00</td>
                                        <td class="heading pt-3"><a
                                                class="btn btn-info text-light rounded-pill">Live</a></td>
                                        <td class="heading1 pt-3">None</td>
                                        <td class="heading1 pt-3">None</td>
                                        <td class="heading pt-3"><img
                                                src="website/user/../assets/images/calender-icon1.png"
                                                style="width: 20px;"></td>
                                        <td class="heading pt-3"><a href="add-product-info.php"><i class="fa fa-edit"
                                                    style="color:#2E32387A;"></i></a></td>
                                        <td class="heading pt-3"><i class="fa fa-trash-o" style="color: #2E32387A;
									"></i></td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="">5</th>
                                        <td class="heading pt-3">Jane Doe</td>
                                        <td class="heading pt-3">Sint Occaecat Nihil</td>
                                        <td class="heading pt-3">@1978/10/21 | 04:10:00</td>
                                        <td class="heading pt-3"><a class="btn btn-info text-light rounded-pill"
                                                style="background: linear-gradient(147.7deg, #FFC24D 1.24%, #F8931D 98.26%);">Live</a>
                                        </td>
                                        <td class="heading pt-3">Image</td>
                                        <td class="heading pt-3">Preview File</td>
                                        <td class="heading pt-3"><img
                                                src="website/user/../assets/images/calender-icon1.png"
                                                style="width: 20px;"></td>
                                        <td class="heading pt-3"><a href="add-product-info.php"><i class="fa fa-edit"
                                                    style="color:#2E32387A;"></i></a></td>
                                        <td class="heading pt-3"><i class="fa fa-trash-o" style="color: #2E32387A;
									"></i></td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="">6</th>
                                        <td class="heading pt-3">Jane Doe</td>
                                        <td class="heading pt-3">Sint Occaecat Nihil</td>
                                        <td class="heading pt-3">@1978/10/21 | 04:10:00</td>
                                        <td class="heading pt-3"><a
                                                class="btn btn-info text-light rounded-pill">Live</a></td>
                                        <td class="heading pt-3">Image</td>
                                        <td class="heading pt-3">Preview File</td>
                                        <td class="heading pt-3"><img
                                                src="website/user/../assets/images/calender-icon1.png"
                                                style="width: 20px;"></td>
                                        <td class="heading pt-3"><a href="add-product-info.php"><i class="fa fa-edit"
                                                    style="color:#2E32387A;"></i></a></td>
                                        <td class="heading pt-3"><i class="fa fa-trash-o" style="color: #2E32387A;
									"></i></td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="">7</th>
                                        <td class="heading pt-3">Jane Doe</td>
                                        <td class="heading pt-3">Sint Occaecat Nihil</td>
                                        <td class="heading pt-3">@1978/10/21 | 04:10:00</td>
                                        <td class="heading pt-3"><a
                                                class="btn btn-info text-light rounded-pill">Live</a></td>
                                        <td class="heading1 pt-3">None</td>
                                        <td class="heading1 pt-3">None</td>
                                        <td class="heading pt-3"><img
                                                src="website/user/../assets/images/calender-icon1.png"
                                                style="width: 20px;"></td>
                                        <td class="heading pt-3"><a href="add-product-info.php"><i class="fa fa-edit"
                                                    style="color:#2E32387A;"></i></a></td>
                                        <td class="heading pt-3"><i class="fa fa-trash-o" style="color: #2E32387A;
									"></i></td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="">8</th>
                                        <td class="heading pt-3">Jane Doe</td>
                                        <td class="heading pt-3">Sint Occaecat Nihil</td>
                                        <td class="heading pt-3">@1978/10/21 | 04:10:00</td>
                                        <td class="heading pt-3"><a class="btn btn-info text-light rounded-pill"
                                                style="background: linear-gradient(147.7deg, #FFC24D 1.24%, #F8931D 98.26%);">Live</a>
                                        </td>
                                        <td class="heading1 pt-3">None</td>
                                        <td class="heading pt-3">Preview File</td>
                                        <td class="heading pt-3"><img
                                                src="website/user/../assets/images/calender-icon1.png"
                                                style="width: 20px;"></td>
                                        <td class="heading pt-3"><a href="add-product-info.php"><i class="fa fa-edit"
                                                    style="color:#2E32387A;"></i></a></td>
                                        <td class="heading pt-3"><i class="fa fa-trash-o" style="color: #2E32387A;
									"></i></td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="">9</th>
                                        <td class="heading pt-3">Jane Doe</td>
                                        <td class="heading pt-3">Sint Occaecat Nihil</td>
                                        <td class="heading pt-3">@1978/10/21 | 04:10:00</td>
                                        <td class="heading pt-3"><a
                                                class="btn btn-info text-light rounded-pill">Live</a></td>
                                        <td class="heading pt-3">Image</td>
                                        <td class="heading pt-3">Preview File</td>
                                        <td class="heading pt-3"><img
                                                src="website/user/../assets/images/calender-icon1.png"
                                                style="width: 20px;"></td>
                                        <td class="heading pt-3"><a href="add-product-info.php"><i class="fa fa-edit"
                                                    style="color:#2E32387A;"></i></a></td>
                                        <td class="heading pt-3"><i class="fa fa-trash-o" style="color: #2E32387A;
									"></i></td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="">10</th>
                                        <td class="heading pt-3">Jane Doe</td>
                                        <td class="heading pt-3">Sint Occaecat Nihil</td>
                                        <td class="heading pt-3">@1978/10/21 | 04:10:00</td>
                                        <td class="heading pt-3"><a
                                                class="btn btn-info text-light rounded-pill">Live</a></td>
                                        <td class="heading pt-3">Image</td>
                                        <td class="heading1 pt-3">None</td>
                                        <td class="heading pt-3"><img
                                                src="website/user/../assets/images/calender-icon1.png"
                                                style="width: 20px;"></td>
                                        <td class="heading pt-3"><a href="add-product-info.php"><i class="fa fa-edit"
                                                    style="color:#2E32387A;"></i></a></td>
                                        <td class="heading pt-3"><i class="fa fa-trash-o" style="color: #2E32387A;
									"></i></td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="">11</th>
                                        <td class="heading pt-3">Jane Doe</td>
                                        <td class="heading pt-3">Sint Occaecat Nihil</td>
                                        <td class="heading pt-3">@1978/10/21 | 04:10:00</td>
                                        <td class="heading pt-3"><a class="btn btn-info text-light rounded-pill"
                                                style="background: linear-gradient(147.7deg, #FFC24D 1.24%, #F8931D 98.26%);">Live</a>
                                        </td>
                                        <td class="heading1 pt-3">Image</td>
                                        <td class="heading pt-3">Preview File</td>
                                        <td class="heading pt-3"><img
                                                src="website/user/../assets/images/calender-icon1.png"
                                                style="width: 20px;"></td>
                                        <td class="heading pt-3"><a href="add-product-info.php"><i class="fa fa-edit"
                                                    style="color:#2E32387A;"></i></a></td>
                                        <td class="heading pt-3"><i class="fa fa-trash-o" style="color: #2E32387A;
									"></i></td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="">12</th>
                                        <td class="heading pt-3">Jane Doe</td>
                                        <td class="heading pt-3">Sint Occaecat Nihil</td>
                                        <td class="heading pt-3">@1978/10/21 | 04:10:00</td>
                                        <td class="heading pt-3"><a class="btn btn-info text-light rounded-pill"
                                                style="background: linear-gradient(147.7deg, #FFC24D 1.24%, #F8931D 98.26%);">Live</a>
                                        </td>
                                        <td class="heading1 pt-3">Image</td>
                                        <td class="heading pt-3">Preview File</td>
                                        <td class="heading pt-3"><img
                                                src="website/user/../assets/images/calender-icon1.png"
                                                style="width: 20px;"></td>
                                        <td class="heading pt-3"><a href="add-product-info.php"><i class="fa fa-edit"
                                                    style="color:#2E32387A;"></i></a></td>
                                        <td class="heading pt-3"><i class="fa fa-trash-o" style="color: #2E32387A;
									"></i></td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="">13</th>
                                        <td class="heading pt-3">Jane Doe</td>
                                        <td class="heading pt-3">Sint Occaecat Nihil</td>
                                        <td class="heading pt-3">@1978/10/21 | 04:10:00</td>
                                        <td class="heading pt-3"><a class="btn btn-info text-light rounded-pill"
                                                style="background: linear-gradient(147.7deg, #FFC24D 1.24%, #F8931D 98.26%);">Live</a>
                                        </td>
                                        <td class="heading pt-3">Image</td>
                                        <td class="heading pt-3">Preview File</td>
                                        <td class="heading pt-3"><img
                                                src="website/user/../assets/images/calender-icon1.png"
                                                style="width: 20px;"></td>
                                        <td class="heading pt-3"><a href="add-product-info.php"><i class="fa fa-edit"
                                                    style="color:#2E32387A;"></i></a></td>
                                        <td class="heading pt-3"><i class="fa fa-trash-o" style="color: #2E32387A;
									"></i></td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="">14</th>
                                        <td class="heading pt-3">Jane Doe</td>
                                        <td class="heading pt-3">Sint Occaecat Nihil</td>
                                        <td class="heading pt-3">@1978/10/21 | 04:10:00</td>
                                        <td class="heading pt-3"><a
                                                class="btn btn-info text-light rounded-pill">Live</a></td>
                                        <td class="heading pt-3">Image</td>
                                        <td class="heading pt-3">Preview File</td>
                                        <td class="heading pt-3"><img
                                                src="website/user/../assets/images/calender-icon1.png"
                                                style="width: 20px;"></td>
                                        <td class="heading pt-3"><a href="add-product-info.php"><i class="fa fa-edit"
                                                    style="color:#2E32387A;"></i></a></td>
                                        <td class="heading pt-3"><i class="fa fa-trash-o" style="color: #2E32387A;
									"></i></td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="row mt-4">
                                <div class="col-md-6 mt-3">
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
                                <div class="col-md-6 text-end mt-3">
                                    <p class="showing">
                                        Showing 1 to 6 of 50 entries
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection