<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jata slag</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arimo&family=Questrial&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Arimo&family=League+Spartan:wght@600;700&family=Poppins:wght@500&family=Raleway:wght@500;700&display=swap"
        rel="stylesheet">
    <!-- Stylesheets -->
    <link href="{{ URL::asset('website/assets/css/font-awesome-all.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('website/assets/css/flaticon.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('website/assets/css/owl.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('website/assets/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('website/assets/css/jquery.fancybox.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('website/assets/css/animate.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('website/assets/css/jquery-ui.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('website/assets/css/nice-select.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('website/assets/css/color/theme-color.css') }}" id="jssDefault" rel="stylesheet">
    <link href="{{ URL::asset('website/assets/css/switcher-style.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('website/assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('website/assets/css/responsive.css') }}" rel="stylesheet">

</head>
<style>
p {
    font-family: 'Poppins', sans-serif !important;
}

.accordion-body {
    font-family: 'Poppins', sans-serif !important;
}

.accordion-button {
    font-family: 'Poppins', sans-serif !important;
}
</style>

<body>

    <section class="header">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <a href="en-index"><img src="{{('website/assets/images/logo_main.png')}}" class="w-100"></a>
                </div>
                <div class="col-md-7">
                    <ul class="header_ul">
                        <li><a href="en-index">HOME</a></li>
                        <li><a href="en-client-case">KUNDECASES</a></li>
                        <li>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown_button dropdown-toggle" type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    FUNKTIONER
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="en-comment-sales">Kommentarsalg</a></li>
                                    <li><a class="dropdown-item" href="en-live-sales">Live-salg</a></li>
                                    <li><a class="dropdown-item" href="en-calender-dashboard">Planlægnings kalender</a>
                                    </li>
                                    <li><a class="dropdown-item" href="en-Inspiration-Ideas">Inspiration & Ideer</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="en-pricing">PRISER</a></li>
                        <li>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown_button dropdown-toggle" type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    INFO
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="en-about">Om os</a></li>
                                    <li><a class="dropdown-item" href="en-function">Funktioner</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="en-contact">KONTAKT</a></li>
                    </ul>
                </div>

                <div class="col-md-3">
                    <div class="row">
                        <div class="col-md-6">
                            <a href="en-login" class="btn w-100 p_btn_head">LOGIN</a>
                        </div>
                        <div class="col-md-6">
                            <a href="#" class="btn world_button "><img src="website/assets/images/mater.PNG"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mobile_header">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-4">
                    <a href="index.php"><img src="webiste/assets/images/logo_main.png" class="w-100"></a>
                </div>
                <div class="col-md-6 col-5"></div>
                <div class="col-md-3 col-3 text-end">
                    <a href="#" id="myButton" class="btn world_button"><img src="webiste/assets/images/toogle.PNG"></a>
                </div>
            </div>

            <div class="row " id="myDiv" style="display:none">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <ul class="header_ul_mobile text-center">
                                <li><a href="index">HOME</a></li>
                                <li><a href="client-case">KUNDECASES</a></li>
                                <li>
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown_button dropdown-toggle" type="button"
                                            id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                            FUNKTIONER
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                            <li><a class="dropdown-item" href="comment-sales">Kommentarsalg</a></li>
                                            <li><a class="dropdown-item" href="live-sales">Live-salg</a></li>
                                            <li><a class="dropdown-item" href="calender-dashboard">Planlægnings
                                                    kalender</a></li>
                                            <li><a class="dropdown-item" href="Inspiration-Ideas">Inspiration &
                                                    Ideer</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="pricing">PRISER</a></li>
                                <li>
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown_button dropdown-toggle" type="button"
                                            id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                            INFO
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                            <li><a class="dropdown-item" href="about">Om os</a></li>
                                            <li><a class="dropdown-item" href="function">Funktioner</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="contact">KONTAKT</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script>
    document.getElementById('myButton').addEventListener('click', function() {
        var div = document.getElementById('myDiv');
        if (div.style.display === 'none') {
            div.style.display = 'block';
        } else {
            div.style.display = 'none';
        }
    });
    $(document).ready(function() {
        $('.customer-logos').slick({
            slidesToShow: 6,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 1500,
            arrows: false,
            dots: false,
            pauseOnHover: false,
            responsive: [{
                breakpoint: 768,
                settings: {
                    slidesToShow: 4
                }
            }, {
                breakpoint: 520,
                settings: {
                    slidesToShow: 3
                }
            }]
        });
    });
    </script>