@extends('website.layouts.main')
@section('contant')
<style>
.accordion-button::after {
    background-image: url(website/assets/images/arrow2.png) !important;
}

.accordion-button::after {
    width: 2.25rem !important;
    height: 2.25rem !important;
}

.accordion-button {
    font-size: 18px !important;
}
</style>


<section class="case_section main_con" style="margin-top: 150px;">
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
                        <h1 class="text-center text-light case-heading">Hjælpecenter</h1>
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




<section class="mt-5 pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form>
                            <div class="row">
                                <div class="col-md-1 text-end pt-2 col-1">
                                    <i class="fas fa-search" style="color: #2E3238;"></i>
                                </div>
                                <div class="col-md-10 col-10">
                                    <input type="text" class="form-control main_form" placeholder="Search" name="">
                                </div>
                                <div class="col-md-1 col-1">

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item" style="border-radius: 10px;">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseOne" aria-expanded="fase"
                                aria-controls="flush-collapseOne">
                                Oprettelse af Konto
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">For at oprette en konto hos Jataksalg skal du blot klikke på
                                'Login'-knappen øverst til højre på vores hjemmeside. Herefter vil du få mulighed for at
                                forbinde direkte med din Facebook eller Instagram konto. Følg de enkle trin for at
                                autorisere Jataksalg til at interagere med dine sociale medier, så du hurtigt kan komme
                                i gang med at bruge alle vores live salgsfunktioner.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item mt-4" style="border-radius:10px;">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                aria-controls="flush-collapseTwo">
                                Start af Live Salg
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">For at oprette en konto hos Jataksalg skal du blot klikke på
                                'Login'-knappen øverst til højre på vores hjemmeside. Herefter vil du få mulighed for at
                                forbinde direkte med din Facebook eller Instagram konto. Følg de enkle trin for at
                                autorisere Jataksalg til at interagere med dine sociale medier, så du hurtigt kan komme
                                i gang med at bruge alle vores live salgsfunktioner..</div>
                        </div>
                    </div>
                    <div class="accordion-item mt-4" style="border-radius:10px;">
                        <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseThree" aria-expanded="false"
                                aria-controls="flush-collapseThree">
                                Brug af Planlægningskalender
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">For at oprette en konto hos Jataksalg skal du blot klikke på
                                'Login'-knappen øverst til højre på vores hjemmeside. Herefter vil du få mulighed for at
                                forbinde direkte med din Facebook eller Instagram konto. Følg de enkle trin for at
                                autorisere Jataksalg til at interagere med dine sociale medier, så du hurtigt kan komme
                                i gang med at bruge alle vores live salgsfunktioner.</div>
                        </div>
                    </div>
                    <div class="accordion-item mt-4" style="border-radius:10px;">
                        <h2 class="accordion-header" id="flush-headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseFour" aria-expanded="false"
                                aria-controls="flush-collapseFour">
                                Integration med Sociale Medier
                            </button>
                        </h2>
                        <div id="flush-collapseFour" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">For at oprette en konto hos Jataksalg skal du blot klikke på
                                'Login'-knappen øverst til højre på vores hjemmeside. Herefter vil du få mulighed for at
                                forbinde direkte med din Facebook eller Instagram konto. Følg de enkle trin for at
                                autorisere Jataksalg til at interagere med dine sociale medier, så du hurtigt kan komme
                                i gang med at bruge alle vores live salgsfunktioner.</div>
                        </div>
                    </div>
                    <div class="accordion-item mt-4" style="border-radius:10px;">
                        <h2 class="accordion-header" id="flush-headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseFive" aria-expanded="false"
                                aria-controls="flush-collapseFive">
                                Kundeservice via Live Chat
                            </button>
                        </h2>
                        <div id="flush-collapseFive" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">For at oprette en konto hos Jataksalg skal du blot klikke på
                                'Login'-knappen øverst til højre på vores hjemmeside. Herefter vil du få mulighed for at
                                forbinde direkte med din Facebook eller Instagram konto. Følg de enkle trin for at
                                autorisere Jataksalg til at interagere med dine sociale medier, så du hurtigt kan komme
                                i gang med at bruge alle vores live salgsfunktioner.</div>
                        </div>
                    </div>
                    <div class="accordion-item mt-4" style="border-radius:10px;">
                        <h2 class="accordion-header" id="flush-headingSix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseSix" aria-expanded="false"
                                aria-controls="flush-collapseSix">
                                Analyse og Rapportering
                            </button>
                        </h2>
                        <div id="flush-collapseSix" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">For at oprette en konto hos Jataksalg skal du blot klikke på
                                'Login'-knappen øverst til højre på vores hjemmeside. Herefter vil du få mulighed for at
                                forbinde direkte med din Facebook eller Instagram konto. Følg de enkle trin for at
                                autorisere Jataksalg til at interagere med dine sociale medier, så du hurtigt kan komme
                                i gang med at bruge alle vores live salgsfunktioner.</div>
                        </div>
                    </div>
                    <div class="accordion-item mt-4" style="border-radius:10px;">
                        <h2 class="accordion-header" id="flush-headingSeven">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseSeven" aria-expanded="false"
                                aria-controls="flush-collapseSeven">
                                Produktkatalog Management
                            </button>
                        </h2>
                        <div id="flush-collapseSeven" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">For at oprette en konto hos Jataksalg skal du blot klikke på
                                'Login'-knappen øverst til højre på vores hjemmeside. Herefter vil du få mulighed for at
                                forbinde direkte med din Facebook eller Instagram konto. Følg de enkle trin for at
                                autorisere Jataksalg til at interagere med dine sociale medier, så du hurtigt kan komme
                                i gang med at bruge alle vores live salgsfunktioner.</div>
                        </div>
                    </div>
                    <div class="accordion-item mt-4" style="border-radius:10px;">
                        <h2 class="accordion-header" id="flush-headingEight">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseEight" aria-expanded="false"
                                aria-controls="flush-collapseEight">
                                Betalings- og Forsendelsesopsætning
                            </button>
                        </h2>
                        <div id="flush-collapseEight" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingEight" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">For at oprette en konto hos Jataksalg skal du blot klikke på
                                'Login'-knappen øverst til højre på vores hjemmeside. Herefter vil du få mulighed for at
                                forbinde direkte med din Facebook eller Instagram konto. Følg de enkle trin for at
                                autorisere Jataksalg til at interagere med dine sociale medier, så du hurtigt kan komme
                                i gang med at bruge alle vores live salgsfunktioner.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
@endsection