@extends('website.layouts.main')
@section('contant')
<section class="case_section main_con" style="margin-top: 150px;">
    <div class="banner_lines">
        <img src="website/assets/images/line13.png" class="banner_lines_image">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="row">
                    <div class="col-md-2 col-1">
                        <img src="website/assets/images/star_4.png" class="banner_star1_image"
                            style="    margin-bottom: -53px;margin-left: -14px;">
                    </div>
                    <div class="col-md-10 col-11"></div>
                </div>
                <div class="card p-3 case_card">
                    <div class="card-body">
                        <h1 class="text-center text-light case-heading">Kunde Cases Oversigt</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-11 col-11"></div>
                    <div class="col-md-1 col-1">
                        <img src="website/assets/images/star_4.png" class="banner_star1_image"
                            style="margin-top: -22px;margin-left: 36px;">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="clinet_section mb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mt-5">
                <div class="card client-card h-100">
                    <div class="card-body">
                        <img src="website/assets/images/c1.png" class="w-100">

                        <div class="mt-4">
                            <h3 class="card-headingh3">Sport 24</h3>
                            <p class="mt-3 card-headingp">Ved at integrere vores platform med deres salgsstrategi,
                                tilbyder Sport 24 kunderne en interaktiv og engagerende shoppingoplevelse. Med live
                                demonstrationer og instant respons på kundekommentarer har Sport 24 set en markant
                                stigning i engagement og salg</p>
                            <div class="mt-3">
                                <a href="#" class="btn btn-primary live-btn-client">Få mere at vide</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mt-5">
                <div class="card client-card h-100">
                    <div class="card-body">
                        <img src="website/assets/images/c2.png" class="w-100">

                        <div class="mt-4">
                            <h3 class="card-headingh3">Frølund</h3>
                            <p class="mt-3 card-headingp">Gennem personlige live shopping-events præsenterer Frølund de
                                nyeste trends og giver kunderne en unik mulighed for at købe tøj direkte fra catwalken.
                                Jataksalgs responsivitet og brugervenlighed har gjort det nemt for Frølund at bygge
                                stærke kunderelationer og øge salget.</p>

                            <a href="#" class="btn btn-primary mt-3 live-btn-client">Få mere at vide</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection