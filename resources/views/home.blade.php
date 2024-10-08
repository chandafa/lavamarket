<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>HOME | LavaMarket</title>

    <!-- Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
        rel="stylesheet">

    <!-- Icons -->
    <link href="{{ asset('css/nucleo-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">

    <!-- Jquery UI -->
    <link type="text/css" href="{{ asset('css/jquery-ui.css') }}" rel="stylesheet">

    <!-- Argon CSS -->
    <link type="text/css" href="{{ asset('css/argon-design-system.min.css') }}" rel="stylesheet">

    <!-- Main CSS-->
    <link type="text/css" href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- Optional Plugins-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

    {{-- <script src="https://cdn.tailwindcss.com"></script>

    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script> --}}

    <style>
        #skeleton .single-product {
            height: 452px;
            /* Sesuaikan dengan tinggi card asli */
        }

        #skeleton .product-img {
            height: 356px;
            /* Sesuaikan dengan tinggi gambar card asli */
        }
    </style>
</head>

<body>
    {{-- Header --}}
    <header class="header clearfix">
        <div class="top-bar d-none d-sm-block">
            <div class="container">
                <div class="row">
                    <div class="col-6 text-left">
                        <!-- Tampilkan hanya pada ukuran layar desktop -->
                        <ul class="top-links contact-info d-none d-lg-block">
                            <li><i class="fa fa-envelope-o"></i> <a href="#">contact@example.com</a></li>
                            <li><i class="fa fa-whatsapp"></i> +1 5589 55488 55</li>
                        </ul>

                        <!-- Tampilkan hanya pada ukuran layar tablet -->
                        <ul class="top-links contact-info d-block d-lg-none">
                            <li><i class="fa fa-envelope-o"></i> <a href="#">contact@example.com</a></li>
                        </ul>
                    </div>

                    <div class="col-6 text-right">
                        <ul class="top-links account-links">
                            @if (Auth::check())
                                <!-- Jika pengguna sudah login -->
                                <li><i class="fa fa-user-circle-o"></i>
                                    <a href="{{ url('/user/dashboard') }}">My Account</a>
                                </li>
                            @else
                                <!-- Jika pengguna belum login -->
                                <li><i class="fa fa-user-circle-o"></i>
                                    <a href="{{ url('/login') }}">Login</a>
                                </li>
                            @endif
                        </ul>
                    </div>

                </div>
            </div>
        </div>
        <div class="header-main border-top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-12 col-sm-6">
                        <a class="navbar-brand mr-lg-5" href="{{ url('/home') }}">
                            <i class="fa fa-shopping-bag fa-3x"></i> <span class="logo">LavaMarket</span>
                        </a>
                    </div>
                    <div class="col-lg-7 col-12 col-sm-6">
                        <form action="#" class="search">
                            <div class="input-group w-100">
                                <input type="text" class="form-control" placeholder="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-2 col-12 col-sm-6">
                        <div class="right-icons pull-right d-none d-lg-block">
                            <div class="single-icon wishlist">
                                <a href="#"><i class="fa fa-heart-o fa-2x"></i></a>
                                <span class="badge badge-default">5</span>
                            </div>
                            <div class="single-icon shopping-cart">
                                <a href="#"><i class="fa fa-shopping-cart fa-2x"></i></a>
                                <span class="badge badge-default">4</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-main navbar-expand-lg navbar-light border-top border-bottom">
            <div class="container">

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav"
                    aria-controls="main_nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="main_nav">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"
                                aria-expanded="true">Pages</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="products.html">Products</a>
                                <a class="dropdown-item" href="product-detail.html">Product Detail</a>
                                <a class="dropdown-item" href="cart.html">Cart</a>
                                <a class="dropdown-item" href="checkout.html">Checkout</a>
                            </div>
                        </li>
                    </ul>
                </div> <!-- collapse .// -->
            </div> <!-- container .// -->
        </nav>
    </header>
    {{-- SLIDER --}}
    <section class="slider-section pt-4 pb-4">
        <div class="container">
            <div class="slider-inner">
                <div class="row">
                    <div class="col-md-3 ">
                        <nav class="nav-category">
                            <h2>Categories</h2>
                            <ul class="menu-category">
                                <li><a href="#">Fashions</a></li>
                                <li><a href="#">Electronics</a></li>
                                <li><a href="#">Home and Kitchen</a></li>
                                <li><a href="#">Baby and Toys</a></li>
                                <li><a href="#">Sports</a></li>
                                <li><a href="#">Digital Goods</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-md-9">
                        <div id="carouselExampleIndicators" class="carousel slide carousel-fade "
                            data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner shadow-sm rounded">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="{{ asset('img/slides/slide1.jpg') }}"
                                        alt="First slide">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Mountains, Nature Collection</h5>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="{{ asset('img/slides/slide2.jpg') }}"
                                        alt="Second slide">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Freedom, Sea Collection</h5>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="{{ asset('img/slides/slide3.jpg') }}"
                                        alt="Third slide">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Living the Dream, Lost Island</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Slider -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Services --}}
    <section class="pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 ">
                    <div class="media">
                        <div class="iconbox iconmedium rounded-circle text-info mr-4">
                            <i class="fa fa-truck"></i>
                        </div>
                        <div class="media-body">
                            <h5>Fast Shipping</h5>
                            <p class="text-muted">
                                All you have to do is to bring your passion. We take care of the rest.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="media">
                        <div class="iconbox iconmedium rounded-circle text-purple mr-4">
                            <i class="fa fa-credit-card-alt"></i>
                        </div>
                        <div class="media-body">
                            <h5>Online Payment</h5>
                            <p class="text-muted">
                                All you have to do is to bring your passion. We take care of the rest.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="media">
                        <div class="iconbox iconmedium rounded-circle text-warning mr-4">
                            <i class="fa fa-refresh"></i>
                        </div>
                        <div class="media-body">
                            <h5>Free Return</h5>
                            <p class="text-muted">
                                All you have to do is to bring your passion. We take care of the rest.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Produk --}}
    <section class="products-grids trending pb-4">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>Trending Items</h2>
                    </div>
                </div>
            </div>

            <!-- Skeleton Loader -->
            <div id="skeleton" class="row mt-4">
                @for ($i = 0; $i < 4; $i++)
                    <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                        <div class="single-product">
                            <div class="product-img bg-secondary rounded"></div>
                            <div class="product-content mt-4">
                                <h3 class="bg-secondary rounded" style="height: 20px;"></h3>
                                <div class="product-price bg-secondary rounded mt-2"
                                    style="height: 15px; width: 50%;"></div>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>

            <!-- Product List (Initially Hidden) -->
            <div id="product-list" class="row mt-4 d-none">
                @foreach ($products as $product)
                    <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                        <div class="single-product">
                            <div class="product-img">
                                <a href="product-detail.html">
                                    <img src="{{ asset('storage/' . $product->gambarProduk) }}" class="img-fluid" />
                                </a>
                            </div>
                            <div class="product-content">
                                <h3><a class="title-produk" href="product-detail.html">{{ $product->namaProduk }}</a>
                                </h3>
                                <div class="product-price">
                                    <span>{{ $product->hargaProduk }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Mobile Apps --}}
    <section class="mobile-apps pt-5 pb-3 border-top">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3>Download apps</h3>
                    <p>Get an amazing app to make Your life easy</p>
                </div>
                <div class="col-md-6 text-md-right">
                    <a href="#"><img src="{{ asset('img/appstore.png') }}" height="40"></a>
                    <a href="#"><img src="{{ asset('img/appstore.png') }}" height="40"></a>
                </div>
            </div> <!-- row.// -->
        </div><!-- container // -->
    </section>
    {{-- Footer --}}
    <footer class="footer bg-primary">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-6 col-12">
                        <!-- Single Widget -->
                        <div class="single-footer about">
                            <div class="logo-footer">
                                <i class="fa fa-shopping-bag fa-3x"></i> <span class="logo">LavaMarket</span>
                            </div>
                            <p class="text">Praesent dapibus, neque id cursus ucibus, tortor neque egestas augue,
                                magna
                                eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor,
                                facilisis luctus, metus.</p>
                            <p class="call">Got Question? Call us 24/7<span><a href="tel:123456789">+0123 456
                                        789</a></span></p>
                        </div>
                        <!-- End Single Widget -->
                    </div>
                    <div class="col-lg-2 col-md-6 col-12">
                        <!-- Single Widget -->
                        <div class="single-footer links">
                            <h4>Information</h4>
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Faq</a></li>
                                <li><a href="#">Terms &amp; Conditions</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Help</a></li>
                            </ul>
                        </div>
                        <!-- End Single Widget -->
                    </div>
                    <div class="col-lg-2 col-md-6 col-12">
                        <!-- Single Widget -->
                        <div class="single-footer links">
                            <h4>Services</h4>
                            <ul>
                                <li><a href="#">Payment Methods</a></li>
                                <li><a href="#">Money-back</a></li>
                                <li><a href="#">Returns</a></li>
                                <li><a href="#">Shipping</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul>
                        </div>
                        <!-- End Single Widget -->
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <!-- Single Widget -->
                        <div class="single-footer social">
                            <h4>Get In Touch</h4>
                            <!-- Single Widget -->
                            <div class="contact">
                                <ul>
                                    <li>NO. 342 - London Oxford Street.</li>
                                    <li>012 United Kingdom.</li>
                                    <li>info@LavaMarket.com</li>
                                    <li>+032 3456 7890</li>
                                </ul>
                            </div>
                            <!-- End Single Widget -->
                            <ul>
                                <li><a href="#"><i class="ti-facebook"></i></a></li>
                                <li><a href="#"><i class="ti-twitter"></i></a></li>
                                <li><a href="#"><i class="ti-flickr"></i></a></li>
                                <li><a href="#"><i class="ti-instagram"></i></a></li>
                            </ul>
                        </div>
                        <!-- End Single Widget -->
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="copyright-inner border-top">
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="left">
                                <p>Copyright © 2024 <a href="http://indokoding.net" target="_blank">IndoKoding.net</a>
                                    -
                                    All Rights Reserved.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="right pull-right">
                                <ul class="payment-cards">
                                    <li><i class="fa fa-cc-paypal"></i></li>
                                    <li><i class="fa fa-cc-amex"></i></li>
                                    <li><i class="fa fa-cc-mastercard"></i></li>
                                    <li><i class="fa fa-cc-stripe"></i></li>
                                    <li><i class="fa fa-cc-visa"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Waktu delay untuk skeleton loading, misal 2 detik
            setTimeout(function() {
                // Sembunyikan skeleton dan tampilkan produk
                document.getElementById("skeleton").classList.add("d-none");
                document.getElementById("product-list").classList.remove("d-none");
            }, 2000); // 2000ms = 2 detik
        });
    </script>

    <!-- Core -->
    <script src="{{ asset('js/core/jquery.min.js') }}"></script>
    <script src="{{ asset('js/core/popper.min.js') }}"></script>
    <script src="{{ asset('js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/core/jquery-ui.min.js') }}"></script>

    <!-- Optional plugins -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <!-- Argon JS -->
    <script src="{{ asset('js/argon-design-system.js') }}"></script>

    <!-- Main JS-->
    <script src="{{ asset('js/main.js') }}"></script>



</body>

</html>
