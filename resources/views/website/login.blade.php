@extends('website.layouts.main')
<section>
    <footer class="footerbg">
        <div class="container">
            <div class="row  pb-5 mb-5 footerrow">
                <div class="col-md-5 mt-5 pt-5">
                    <div class="text-center">
                        <img src="website/assets/images/login_logo.png" class="w-50">
                    </div>
                    <div class="row pt-5 text-center">
                        {{-- <div class="col-md-6 mt-3 col-6">
                            <div class="bro">
    <a href="{{ route('auth.facebook') }}"  class="inline-flex items-center px-2 float-left py-2 bg -gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 h-10 px-2 py-2 mt-2 font-semibold text-xs text-white float-left transition-colors duration-150 rounded-lg uppercase focus:shadow-outline0 bg-gray-800 hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900">
        <img src="website/assets/images/face.png" style="width:30px;">
        </a>
                            </div>
                        </div> --}}
                        {{-- <div class="col-md-6 mt-3 col-6">
                            <div class="bro">
                                <img src="website/assets/images/insta.png" style="width:30px;">
                            </div>
                        </div> --}}
                    </div>
                    @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ url('login') }}" method="post"  class="mt-5 pt-3">
                    @csrf                        <input type="email" name="email" placeholder="Din Email" class="form-control w-100" required>
                        <div class="custom-password-input">
                            <input type="password" name="password" placeholder="***|" class="form-control w-100"
                                id="password-input" required>
                            <i class="fa fa-eye-slash" style="font-size:26px;color:#FFFFFF;" id="password-icon"></i>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="checkbok">
                                    <label class="form-check-label" for="exampleCheck1">Husk mig</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <p class="forgot">
                                    Glemt Password
                                </p>
                            </div>
                        </div>
                    <div class="row mt-5">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-warning w-100 text-center">Log in</button>
                            <p class="Already pt-3">
                                Har du ikke en konto?<a href="register"><span class="Sign"> Tilmeld dig</span></a>
                            </p>
                        </div>
                    </div>
                </form>

                </div>
                <div class="col-md-1"></div>
                <div class="col-lg-4" style="margin-top:200px">
                    <div class="row">
                        <div class="col-md-2 col-1">
                            <img src="website/assets/images/login_star.png" class="banner_star1_image"
                                style="    margin-bottom: -53px;margin-left: -14px;">
                        </div>
                        <div class="col-md-10 col-11"></div>
                    </div>
                    <div class="card Forog_card_first"
                        style="background: linear-gradient(147.7deg, #4DC9FF 1.24%, #2BA5FD 98.26%);">
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-9 mt-5 pt-5 position-relative">
                                <img src="website/assets/images/iphone18.png" class="w-100 Shopping_image">
                                <div class="position-absolute top-502 start-502 translate-middle">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-7">
                                <div class="card shopping_card" style="background: #2E323891;">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-3 mt-2 col-3">
                                                <img class="w-100" src="website/assets/images/pe6.png">
                                            </div>
                                            <div class="col-md-9 col-9" style="padding-left:0px">
                                                <p class="lisa_para mt-1">Lisa Jensen</p>
                                                <p class="number_pra">Ja tak 111 M</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-7">
                                <div class="card shopping_card1">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-3 mt-2 col-3">
                                                <img class="w-100" src="website/assets/images/pe7.png">
                                            </div>
                                            <div class="col-md-9 col-9" style="padding-left: 0px ;">
                                                <p class="lisa_para mt-1">Pia Skovgaard</p>
                                                <p class="number_pra">Ja tak 350 L</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="row">
                            <div class="col-md-3">
                                <div class="heart_card">
                                    <img src="website/assets/images/heart1.png" class="w-100">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 col-1">
                            <img src="website/assets/images/star.png" class="banner_star1_image">
                        </div>
                        <div class="col-md-10 col-11"></div>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
        <div class="">
            <div class="container main_cont">
                <div class="row">
                    <div class="col-md-5 mt-3">
                        <a href=""><img src="website/assets/images/logo1.PNG"></a>
                    </div>
                    <div class="col-md-7 mt-3">
                        <div class="row">
                            <div class="col-md-12">
                                <ul class="main_ul">
                                    <li><a href="index">HJEM</a></li>
                                    <li><a href="client-case">KUNDECASES</a></li>
                                    <li><a>INSPIRATION</a></li>
                                    <li><a href="pricing">PRISER</a></li>
                                    <li><a>INFO</a></li>
                                    <li><a href="contact">KONTAKT</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer1 p-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-1 col-4 pt-3 insta order-lg-2">
                        <img src="website/assets/images/Instagram.png">
                    </div>
                    <div class="col-lg-1 col-4 pt-3 linked order-lg-3">
                        <img src="website/assets/images/Linkedin.png">
                    </div>
                    <div class="col-lg-1 col-4 pt-3 order-lg-4">
                        <img src="website/assets/images/Slack.png">
                    </div>
                    <div class="col-lg-9 order-lg-1">
                        <p class="Copyright">
                            Copyright © 2022 Softrobo Systems. All Rights Reserved.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script type="">
        $(document).ready(function(){
			$('.customer-logos').slick({
				slidesToShow: 4,
				slidesToScroll: 1,
				autoplay: false,
				autoplaySpeed: 1500,
				arrows: true,
				dots: false,
				pauseOnHover: false,
				prevArrow: '<i class="slick-prev fas fa-angle-left"></i>',
				nextArrow: '<i class="slick-next fas fa-angle-right"></i>',
				responsive: [{
					breakpoint: 768,
					settings: {
						slidesToShow: 3
					}
				}, {
					breakpoint: 520,
					settings: {
						slidesToShow: 2
					}
				}]
			});
		});
	</script>
    <script>
    const passwordInput = document.getElementById('password-input');
    const passwordIcon = document.getElementById('password-icon');

    passwordIcon.addEventListener('click', function() {
        const type = passwordInput.type === 'password' ? 'text' : 'password';
        passwordInput.type = type;
    });
    </script>
    </body>

    </html>
