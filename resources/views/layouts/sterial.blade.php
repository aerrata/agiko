<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="favicon.png">

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap5" />

    <link rel="stylesheet" href="{{ asset('sterial/fonts/icomoon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('sterial/fonts/flaticon/font/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('sterial/css/tiny-slider.css') }}">
    <link rel="stylesheet" href="{{ asset('sterial/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('sterial/css/flatpickr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('sterial/css/glightbox.min.css') }}">

    <title>@yield('title')</title>

    @stack('style')

    @vite(['resources/sterial/sass/app.scss'])
</head>

<body>

    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close">
                <span class="icofont-close js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>

    <nav class="site-nav mt-3">
        <div class="container">

            <div class="site-navigation">
                <div class="row">
                    <div class="col-6 col-lg-3">
                        {{-- <a href="/" class="logo m-0 float-start">AGIKO<span class="text-primary">.</span></a> --}}
                        <a href="/" class="logo m-0 float-start">
                            <img src="{{ asset('images/agiko-logo.png') }}" alt="" style="width:60px;">
                        </a>
                    </div>
                    <div class="col-lg-6 d-none d-lg-inline-block text-center nav-center-wrap">
                        <ul class="js-clone-nav  text-center site-menu p-0 m-0">
                            <li class="fw-semibold @if(request()->is('/')) active @endif"><a href="/">Home</a></li>
                            {{-- <li class="fw-semibold @if(request()->is('about')) active @endif"><a href="{{ route('about') }}">About us</a></li> --}}
                            {{-- <li class="has-children">
                                <a href="#">Dropdown</a>
                                <ul class="dropdown">
                                    <li><a href="#">Menu One</a></li>
                                    <li class="has-children">
                                        <a href="#">Menu Two</a>
                                        <ul class="dropdown">
                                            <li><a href="#">Sub Menu One</a></li>
                                            <li><a href="#">Sub Menu Two</a></li>
                                            <li><a href="#">Sub Menu Three</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Menu Three</a></li>
                                </ul>
                            </li> --}}
                            <li class="fw-semibold @if(request()->is('blog')) active @endif"><a href="{{ route('blog') }}">Blog</a></li>

                        </ul>
                    </div>
                    <div class="col-6 col-lg-3 text-lg-end">
                        <!-- <ul class="js-clone-nav d-none d-lg-inline-block text-end site-menu ">
                            <li class="cta-button"><a href="contact.html">Contact Us</a></li>
                        </ul> -->

                        <a href="#"
                            class="burger ms-auto float-end site-menu-toggle js-menu-toggle d-inline-block d-lg-none light"
                            data-toggle="collapse" data-target="#main-navbar">
                            <span></span>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </nav>

    @yield('content')

    <div class="site-footer">
        <div class="container">

            <div class="row">
                <div class="col-lg-7">
                    <div class="widget">
                        {{-- <h3>About AGIKO<span class="text-primary">.</span> </h3> --}}
                        <img src="{{ asset('images/agiko-logo.png') }}" alt="" style="width:60px;">
                        <p class="mt-2">Connect and stay in touch with other alumni through our alumni group page. Share updates, network, and access exclusive resources. Attend events and stay informed about your alma mater. Join now and be a part of our alumni community.</p>
                    </div>
                    <div class="widget">
                        <h3>Connect</h3>
                        <ul class="list-unstyled social">
                            <li><a href="#"><span class="icon-instagram"></span></a></li>
                            <li><a href="#"><span class="icon-twitter"></span></a></li>
                            <li><a href="#"><span class="icon-facebook"></span></a></li>
                            <li><a href="#"><span class="icon-linkedin"></span></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-2 ml-auto">
                    <div class="widget">
                        <h3>Links</h3>
                        <ul class="list-unstyled float-left links">
                            <li><a href="{{ route('about') }}">About us</a></li>
                            <!-- <li><a href="#">Services</a></li> -->
                            <li><a href="{{ route('blog') }}">Blog</a></li>
                            <!-- <li><a href="#">Careers</a></li> -->
                            <!-- <li><a href="#">Contact</a></li> -->
                        </ul>
                    </div>
                </div>

                {{-- <div class="col-lg-3">
                    <div class="widget">
                        <h3>Contact</h3>
                        <address>43 Raymouth Rd. Baltemoer, London 3910</address>
                        <ul class="list-unstyled links mb-4">
                            <li><a href="tel://11234567890">+1(123)-456-7890</a></li>
                            <li><a href="tel://11234567890">+1(123)-456-7890</a></li>
                            <li><a href="mailto:info@mydomain.com">info@mydomain.com</a></li>
                        </ul>
                    </div>
                </div> --}}

            </div>

            <div class="row mt-5">
                <div class="col-12 text-center">
                    <p class="mb-0">Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                        </script>. All Rights Reserved. &mdash; AGIKO
                    </p>
                </div>
            </div>
        </div>


        <div id="overlayer"></div>
        <div class="loader">
            <div class="spinner-border text-primary" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>

    <script src="{{ asset('/sterial/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/sterial/js/tiny-slider.js') }}"></script>
    <script src="{{ asset('/sterial/js/aos.js') }}"></script>
    <script src="{{ asset('/sterial/js/navbar.js') }}"></script>
    <script src="{{ asset('/sterial/js/counter.js') }}"></script>
    <script src="{{ asset('/sterial/js/rellax.js') }}"></script>
    <script src="{{ asset('/sterial/js/flatpickr.js') }}"></script>
    <script src="{{ asset('/sterial/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('/sterial/js/custom.js') }}"></script>
</body>

</html>