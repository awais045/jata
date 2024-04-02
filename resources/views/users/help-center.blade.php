@extends('users.layouts.main')
@section('contant')
<style>
.form-control:focus {
    box-shadow: none !important;
}

.accordion-button::after {
    background-image: url(../assets/images/arrow2.png) !important;
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
    border-radius: 999px;
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

.bottom-row {
    padding-top: 400px !important;
}

@media (min-width: 320px) and (max-width: 450px) {
    .bottom-row {
        padding-top: 0px !important;
    }

    .pagination {
        padding-left: 0px !important;
    }
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

    .live {
        display: none !important;
    }
}

@media (min-width: 1024px) and (max-width: 3000px) {
    .mobile_section {
        display: none !important;
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
                            <h1 class="Calendar" style="font-size: 24px; margin-top: -5px;">Hjælpecenter</h1>
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
        <div class="row live">
            <div class="col-xl-12">
                <div class="row">
                    <div class="col-md-8">
                        <h2 class="p-3 Calendar">Hjælpecenter</h2>
                    </div>
                    <div class="col-md-4">
                        <!-- <div class="row">
							<div class="col-md-5">
								<a href="" class="btn btn-primary mt-3 w-100"></i>Cancel</a>
							</div>
							<div class="col-md-7">
								<a href="" class="btn btn-info mt-3 w-100">Customize</a>
							</div>
						</div> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 mt-3">
                <div class="card" style="border-radius: 23.99px;margin-bottom: 0px !important;">
                    <div class="card-body">
                        <div class="row">
                            <div class=" text-end pt-2 d-flex">
                                <i class="fas fa-search" style="color: #2E3238;margin-top: 15px;"></i>
                                <input type="text" class="form-control main_form" placeholder="Search" name="" style="    border: none;
								width: 160px;
								border-bottom: 1px solid #2E3238;
								border-radius: 0px !important;">
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-md-12">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                            aria-expanded="fase" aria-controls="flush-collapseOne">
                                            Lorem ipsum dolor sit amet consectetur. Nisi sit leo vulputate?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">Lorem ipsum dolor sit amet consectetur. Eu habitant
                                            posuere placerat amet in purus et. Cras est facilisi ipsum sed morbi sit.
                                            Cursus mauris ut elementum sed at ornare felis. Duis ut id dui tortor tellus
                                            id suspendisse etiam. Vitae habitasse mauris vestibulum elit blandit.
                                            Tellus nisl ante iaculis et pellentesque in aliquet. Lacus nec proin congue
                                            nulla quis malesuada non lorem amet. Tempor cursus diam neque in in pharetra
                                            nulla scelerisque varius. Bibendum pretium vitae aliquam integer sociis
                                            libero dignissim tristique vitae. Nibh tincidunt etiam pharetra lorem nibh
                                            venenatis .
                                            Amet urna donec et nibh nunc vitae. Vitae faucibus tellus amet tortor.
                                            Consequat venenatis hendrerit venenatis neque egestas. Egestas aliquet.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item mt-4">
                                    <h2 class="accordion-header" id="flush-headingTwo">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                            aria-expanded="false" aria-controls="flush-collapseTwo">
                                            Lorem ipsum dolor sit amet consectetur. Nisi sit leo vulputate?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">Lorem ipsum dolor sit amet consectetur. Eu habitant
                                            posuere placerat amet in purus et. Cras est facilisi ipsum sed morbi sit.
                                            Cursus mauris ut elementum sed at ornare felis. Duis ut id dui tortor tellus
                                            id suspendisse etiam. Vitae habitasse mauris vestibulum elit blandit.
                                            Tellus nisl ante iaculis et pellentesque in aliquet. Lacus nec proin congue
                                            nulla quis malesuada non lorem amet. Tempor cursus diam neque in in pharetra
                                            nulla scelerisque varius. Bibendum pretium vitae aliquam integer sociis
                                            libero dignissim tristique vitae. Nibh tincidunt etiam pharetra lorem nibh
                                            venenatis .
                                            Amet urna donec et nibh nunc vitae. Vitae faucibus tellus amet tortor.
                                            Consequat venenatis hendrerit venenatis neque egestas. Egestas aliquet.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item mt-4">
                                    <h2 class="accordion-header" id="flush-headingThree">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                                            aria-expanded="false" aria-controls="flush-collapseThree">
                                            Lorem ipsum dolor sit amet consectetur. Nisi sit leo vulputate?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">Lorem ipsum dolor sit amet consectetur. Eu habitant
                                            posuere placerat amet in purus et. Cras est facilisi ipsum sed morbi sit.
                                            Cursus mauris ut elementum sed at ornare felis. Duis ut id dui tortor tellus
                                            id suspendisse etiam. Vitae habitasse mauris vestibulum elit blandit.
                                            Tellus nisl ante iaculis et pellentesque in aliquet. Lacus nec proin congue
                                            nulla quis malesuada non lorem amet. Tempor cursus diam neque in in pharetra
                                            nulla scelerisque varius. Bibendum pretium vitae aliquam integer sociis
                                            libero dignissim tristique vitae. Nibh tincidunt etiam pharetra lorem nibh
                                            venenatis .
                                            Amet urna donec et nibh nunc vitae. Vitae faucibus tellus amet tortor.
                                            Consequat venenatis hendrerit venenatis neque egestas. Egestas aliquet</div>
                                    </div>
                                </div>
                                <div class="accordion-item mt-4">
                                    <h2 class="accordion-header" id="flush-headingFour">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseFour"
                                            aria-expanded="false" aria-controls="flush-collapseFour">
                                            Lorem ipsum dolor sit amet consectetur. Nisi sit leo vulputate?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseFour" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">Lorem ipsum dolor sit amet consectetur. Eu habitant
                                            posuere placerat amet in purus et. Cras est facilisi ipsum sed morbi sit.
                                            Cursus mauris ut elementum sed at ornare felis. Duis ut id dui tortor tellus
                                            id suspendisse etiam. Vitae habitasse mauris vestibulum elit blandit.
                                            Tellus nisl ante iaculis et pellentesque in aliquet. Lacus nec proin congue
                                            nulla quis malesuada non lorem amet. Tempor cursus diam neque in in pharetra
                                            nulla scelerisque varius. Bibendum pretium vitae aliquam integer sociis
                                            libero dignissim tristique vitae. Nibh tincidunt etiam pharetra lorem nibh
                                            venenatis .
                                            Amet urna donec et nibh nunc vitae. Vitae faucibus tellus amet tortor.
                                            Consequat venenatis hendrerit venenatis neque egestas. Egestas aliquet</div>
                                    </div>
                                </div>
                                <div class="accordion-item mt-4">
                                    <h2 class="accordion-header" id="flush-headingFive">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseFive"
                                            aria-expanded="false" aria-controls="flush-collapseFive">
                                            Lorem ipsum dolor sit amet consectetur. Nisi sit leo vulputate?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseFive" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">Lorem ipsum dolor sit amet consectetur. Eu habitant
                                            posuere placerat amet in purus et. Cras est facilisi ipsum sed morbi sit.
                                            Cursus mauris ut elementum sed at ornare felis. Duis ut id dui tortor tellus
                                            id suspendisse etiam. Vitae habitasse mauris vestibulum elit blandit.
                                            Tellus nisl ante iaculis et pellentesque in aliquet. Lacus nec proin congue
                                            nulla quis malesuada non lorem amet. Tempor cursus diam neque in in pharetra
                                            nulla scelerisque varius. Bibendum pretium vitae aliquam integer sociis
                                            libero dignissim tristique vitae. Nibh tincidunt etiam pharetra lorem nibh
                                            venenatis .
                                            Amet urna donec et nibh nunc vitae. Vitae faucibus tellus amet tortor.
                                            Consequat venenatis hendrerit venenatis neque egestas. Egestas aliquet</div>
                                    </div>
                                </div>
                                <div class="accordion-item mt-4">
                                    <h2 class="accordion-header" id="flush-headingSix">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseSix"
                                            aria-expanded="false" aria-controls="flush-collapseSix">
                                            Lorem ipsum dolor sit amet consectetur. Nisi sit leo vulputate?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseSix" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">Lorem ipsum dolor sit amet consectetur. Eu habitant
                                            posuere placerat amet in purus et. Cras est facilisi ipsum sed morbi sit.
                                            Cursus mauris ut elementum sed at ornare felis. Duis ut id dui tortor tellus
                                            id suspendisse etiam. Vitae habitasse mauris vestibulum elit blandit.
                                            Tellus nisl ante iaculis et pellentesque in aliquet. Lacus nec proin congue
                                            nulla quis malesuada non lorem amet. Tempor cursus diam neque in in pharetra
                                            nulla scelerisque varius. Bibendum pretium vitae aliquam integer sociis
                                            libero dignissim tristique vitae. Nibh tincidunt etiam pharetra lorem nibh
                                            venenatis .
                                            Amet urna donec et nibh nunc vitae. Vitae faucibus tellus amet tortor.
                                            Consequat venenatis hendrerit venenatis neque egestas. Egestas aliquet</div>
                                    </div>
                                </div>
                                <div class="accordion-item mt-4">
                                    <h2 class="accordion-header" id="flush-headingSeven">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven"
                                            aria-expanded="false" aria-controls="flush-collapseSeven">
                                            Lorem ipsum dolor sit amet consectetur. Nisi sit leo vulputate?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseSeven" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">Lorem ipsum dolor sit amet consectetur. Eu habitant
                                            posuere placerat amet in purus et. Cras est facilisi ipsum sed morbi sit.
                                            Cursus mauris ut elementum sed at ornare felis. Duis ut id dui tortor tellus
                                            id suspendisse etiam. Vitae habitasse mauris vestibulum elit blandit.
                                            Tellus nisl ante iaculis et pellentesque in aliquet. Lacus nec proin congue
                                            nulla quis malesuada non lorem amet. Tempor cursus diam neque in in pharetra
                                            nulla scelerisque varius. Bibendum pretium vitae aliquam integer sociis
                                            libero dignissim tristique vitae. Nibh tincidunt etiam pharetra lorem nibh
                                            venenatis .
                                            Amet urna donec et nibh nunc vitae. Vitae faucibus tellus amet tortor.
                                            Consequat venenatis hendrerit venenatis neque egestas. Egestas aliquet</div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                            <div class="col-md-6 text-end" style="color: #2E323852;">
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
    @endsection