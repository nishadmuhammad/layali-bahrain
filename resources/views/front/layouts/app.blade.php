<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- SEO META TAGS -->
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta property="og:url" content="{{Request::url()}}"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="@yield('title')"/>
    <meta property="og:description" content="@yield('description')"/>
    <meta property="og:image" content="@yield('ogImage')"/>
    <!-- SEO META TAGS -->

    <!-- ICONS ---->
    <link rel="icon" href="{{asset('assets/img/favicon.png')}}" type="image/png" sizes="32X32">
    <!-- ICONS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/js/all.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}"/>
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script> -->
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="{{asset('assets/js/owl.carousel.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/script.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <!--    slider-price-->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <!--- Reacptcha -->
    <script src="https://www.google.com/recaptcha/api.js?render={{env('GOOGLE_RECAPTCHA_KEY')}}"></script>
    <script>var recptchaKey = "{{env('GOOGLE_RECAPTCHA_KEY')}}"</script>
    <style>
        .grecaptcha-badge {
            visibility: hidden;
        }
    </style>
    <!-- Recapthca -->
</head>
<body>

<div id="mySidenav" class="sidenav" style="width: 0;">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    <div class="row">
        <div class="col-sm-12">
            <ul class="list-inline">
                <li class=""><a href="{{route('home')}}">Home</a></li>
                <li class=""><a href="{{route('about')}}">About Us </a></li>
                <li class=""><a href="{{route('services')}}">Services</a></li>
                <li class=""><a href="{{route('portfolio')}}">Portfolio</a></li>
                <li class=""><a href="{{route('blog')}}">Blog</a></li>
                <li class=""><a href="{{route('contact')}}">Contact Us</a></li>
            </ul>
        </div>
    </div>
    <div class="get-in-touch">
        <h3>Get in Touch</h3>
        <ul class="contact-list list-inline">
            <li class="list-inline-item email">
                <span>Email Us</span>
                <a href="">info@mapletechspace.com</a>
            </li>
            <li class="list-inline-item call">
                <span>Reach Out</span>
                <a href="">info@+1 (647) 614-4136</a>
            </li>
            <li class="list-inline-item place">
                <span>Canada</span>
                <a href="">7250 Lancaster Avenue, Mississauga ON L4T2L6.</a>
            </li>
            <li class="list-inline-item place">
                <span>India</span>
                <a href="">14/554, Taxi Stand Shopping Complex, Chakkarakkal, Kannur, Kerala, 670613.</a>
            </li>
        </ul>
        <ul class="list-inline social-media-footer">
            <li class="list-inline-item">
                <a href=""><img src="assets/img/twitter.svg" alt=""></a>
            </li>
            <li class="list-inline-item">
                <a href="https://www.facebook.com/mapletechspace/" target="_blank"><img src="assets/img/fb.svg" alt=""></a>
            </li>
            <li class="list-inline-item">
                <a href="https://www.instagram.com/mapletechspace/" target="_blank"><img src="assets/img/instagram.svg" alt=""></a>
            </li>
            <li class="list-inline-item">
                <a href="https://www.linkedin.com/company/56469535/" target="_blank"><img src="assets/img/linkedin.svg" alt=""></a>
            </li>
        </ul>
    </div>

</div>
<a href="javascript:void(0)" class="toggle-link toggle-icon"><img src="{{asset('assets/img/toggle.png')}}" alt=""></a>
<a href="" class="call-button"><img src="assets/img/call-black.svg" alt=""><span>+1 (647) 614-4136</span></a>
<nav class="navbar @yield('navClass') navbar-expand-lg fixed-top navbar-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('home')}}"><img src="@yield('logo')" class="img-fluid"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto">
                <li class="active nav-item">
                    <a class="nav-link" href="{{route('home')}}">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('about')}}">about us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('services')}}">services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('portfolio')}}">portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('blog')}}">careers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('blog')}}">blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('contact')}}">contact</a>
                </li>
                <!--<li class="nav-item  d-none d-sm-block">
                    <a class="nav-link toggle-icon" href="javascript:void(0)"><img
                            src="{{asset('assets/img/toggle.png')}}"
                            alt="icon"></a>
                </li>-->
            </ul>
        </div>
    </div>
</nav>


<div class="social-media">
    <div class="social-media-inner">
        <a href="{{route('home')}}"><img src="{{asset('assets/img/logo.png')}}" alt="logo" class="img-fluid side-logo"></a>
        <ul>
            <li><a href="https://www.facebook.com/mapletechspace/" target="_blank"><img src="{{asset('assets/img/facebook.png')}}" alt=""></a></li>
            <li><a href=""><img src="{{asset('assets/img/twitter.png')}}" alt=""></a></li>
            <li><a href="https://www.instagram.com/mapletechspace/" target="_blank"><img src="{{asset('assets/img/instagram.png')}}" alt=""></a></li>
            <li><a href="https://www.linkedin.com/company/56469535/" target="_blank"><img src="{{asset('assets/img/linkedin.png')}}" alt=""></a></li>
            <li><a href="" class="email-id"><img src="{{asset('assets/img/email-id.png')}}" alt=""></a></li>
        </ul>
    </div>
</div>
@yield('content')
<footer>
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <a href="" class="footer-logo">
                        <img src="{{asset('assets/img/footer-logo.svg')}}" alt="" class="img-fluid">
                    </a>
                </div>
                <div class="col-sm-3">
                    <div class="quick-links">
                        <ul>
                            <li><a href="{{route('about')}}">About</a></li>
                            <li><a href="{{route('portfolio')}}">Portfolio</a></li>
                            <li><a href="{{route('services')}}">Services</a></li>
                            <li><a href="">Careers</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="quick-links">
                        <ul>
                            <li><a href="{{route('blog')}}">Blog</a></li>
                            <li><a href="{{route('contact')}}">Contact</a></li>
                            <li><a href="{{route('portfolio')}}">Latest Projects</a></li>
                            <li><a href="{{route('blog')}}">Tech Updates</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <h4>Subscribe to our blog</h4>
                    <div class="subscribe-form">
                        <form action="">
                            <input type="text" class="form-control" id="usr" name="type"
                                   placeholder="Enter your email id">
                            <button type="submit"></button>
                        </form>
                    </div>
                    <ul class="list-inline social-media-footer">
                        <li class="list-inline-item">
                            <a href="" target="_blank"><img src="{{asset('assets/img/twitter.svg')}}" alt=""></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://www.facebook.com/mapletechspace/" target="_blank"><img src="{{asset('assets/img/fb.svg')}}" alt=""></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://www.instagram.com/mapletechspace/" target="_blank"><img src="{{asset('assets/img/instagram.svg')}}" alt=""></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://www.linkedin.com/company/56469535/" target="_blank"><img src="{{asset('assets/img/linkedin.svg')}}" alt=""></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <span>© Copyright <a href="">Maple Tech Space.</a> All rights reserved</span>
    </div>
</footer>
<script src="{{asset('assets/js/php-email-form.js')}}"></script>
<script>
    $(document).ready(function () {
        AOS.init({
            duration: 1000,
        });
        var btn = $('.toggle-link');

        $(window).scroll(function () {
            if ($(window).scrollTop() > 300) {
                btn.addClass('show');
            } else {
                btn.removeClass('show');
            }
        });
        $(".toggle-icon").click(function () {
            $(".sidenav").toggleClass("main-nav");
        });
        $(".closebtn").click(function () {
            $(".sidenav").toggleClass("main-nav");
        });

        var owl = $('.services');
        owl.owlCarousel({
            loop: true,
            margin: 20,
            nav: false,
            dots: true,
            autoplay: true,
            autoplayTimeout: 4000,
            autoplayHoverPause: true,
            autoplaySpeed: 2000,
            responsive: {
                0: {
                    items: 1.3,
                    margin: 10
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 3
                }
            }
        })

        var owl = $('.portfolio-banner');
        owl.owlCarousel({
            loop: true,
            margin: 0,
            nav: false,
            dots: true,
            autoplay: true,
            autoplayTimeout: 4000,
            autoplayHoverPause: true,
            autoplaySpeed: 2000,
            responsive: {
                0: {
                    items: 1,
                    center: true
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        })
        var owl = $('.clients');
        owl.owlCarousel({
            loop: true,
            margin: 0,
            nav: false,
            dots: true,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            autoplaySpeed: 3000,
            responsive: {
                0: {
                    items: 2,
                    margin: 0
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 5
                }
            }
        })
        $('.portfolio-slider').on('initialized.owl.carousel changed.owl.carousel', function (e) {
            if (!e.namespace) {
                return;
            }
            var carousel = e.relatedTarget;
            $('.slider-counter').text(carousel.relative(carousel.current()) + 1 + '/' + carousel.items().length);
        })
        var owl = $('.portfolio-slider');
        owl.owlCarousel({
            loop: true,
            margin: 20,
            nav: true,
            dots: false,
            autoplay: true,
            autoplayTimeout: 5000,
            autoplayHoverPause: true,
            autoplaySpeed: 2000,
            responsive: {
                0: {
                    items: 1,
                    margin: 0,
                    center: true
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 2
                }
            }
        })

        $('.testimonial-slider').on('initialized.owl.carousel changed.owl.carousel', function (e) {
            if (!e.namespace) {
                return;
            }
            var carousel = e.relatedTarget;
            $('.slider-counter1').text(carousel.relative(carousel.current()) + 1 + '/' + carousel.items().length);
        })
        var owl = $('.testimonial-slider');
        owl.owlCarousel({
            loop: true,
            margin: 20,
            nav: true,
            dots: false,
            autoplay: true,
            autoplayTimeout: 5000,
            autoplayHoverPause: true,
            autoplaySpeed: 2000,
            responsive: {
                0: {
                    items: 1,
                    margin: 10,
                    center: true
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 2
                }
            }
        })
        var owl = $('.news-articles');
        owl.owlCarousel({
            loop: true,
            margin: 20,
            nav: true,
            dots: false,
            autoplay: true,
            autoplayTimeout: 3500,
            autoplayHoverPause: true,
            autoplaySpeed: 3500,
            responsive: {
                0: {
                    items: 1,
                    margin: 0,
                    center: true
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 2.8
                }
            }
        })


    })
</script>

</body>
</html>
