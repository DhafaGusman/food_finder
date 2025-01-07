<!-- @format -->

@extends('layout.layout_home')

@section('description', 'Find delicious meals near you fast. Explore local restaurants and get the best menu recommendations for any occasion.')
@section('title', 'Home | Food Finder')
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style_home.css') }}">
@endpush

@section('content')
<!-- kontennya lah misalkan -->
<div class="splash">
    <div class="splash-logo">
        <img
            src="assets/img/logo/logo-food_finder-white.png"
            alt="Logo food finder"
            class="logo"
        />
        <span class="logo">food finder</span>
    </div>
</div>

<!-- navigation bar -->
<nav class="navbar">
    <div class="navbar-body">
        <div class="navbar-left">
            <a href="index.html" class="navbar-logo">
                <img
                    src="assets/img/logo/logo-food_finder.png"
                    alt="logo food finder"
                />
            </a>
            <div class="navbar-line-break"></div>
            <ul class="navbar-list-left">
                <li class="navbar-item">
                    <a href="#" class="navbar-link active">Home</a>
                </li>
                <li class="navbar-item">
                    <a href="#" class="navbar-link">Discover</a>
                </li>
            </ul>
        </div>
        <div class="navbar-right">
            <div class="hamburger" onclick="toggleCanvas()" id="hamburgerIcon">
                <i data-feather="menu"></i>
            </div>

            <ul class="navbar-list-right">
                <li class="navbar-item dropdown">
                    <a
                        href="#"
                        class="dropdown-btn text-bold"
                        id="dropdownLocation"
                        >Location
                        <i data-feather="chevron-down" class="icon-dropdown"></i
                    ></a>
                    <div class="dropdown-menu">
                        <a
                            href="#"
                            class="dropdown-item"
                            id="useCurrentLocation"
                            >Use your current location
                            <i
                                data-feather="crosshair"
                                class="dropdown-item-icon"
                            ></i
                        ></a>
                        <a href="#" class="dropdown-item" id="insertLocation"
                            >Insert location</a
                        >
                    </div>
                </li>
                <li id="loginButton">
                    <a href="{{ route('login') }}" class="button button-primary"
                        >Log in/Sign In</a
                    >
                </li>
                <li
                    id="profileMenu"
                    class="navbar-item dropdown"
                    style="display: none"
                >
                    <a href="#" class="dropdown-btn text-bold">
                        <img
                            src="assets/img/icon/user.jpg"
                            alt="Profile"
                            class="profile-img"
                        />
                        <i
                            data-feather="chevron-down"
                            class="icon-dropdown"
                        ></i>
                    </a>
                    <div class="dropdown-menu">
                        <a href="#" class="dropdown-item">Profile</a>
                        <a href="#" class="dropdown-item">Logout</a>
                    </div>
                </li>
            </ul>

            <!-- Off-canvas menu container -->
            <div class="offcanvas-menu" id="offCanvasMenu">
                <ul>
                    <li>
                        <a
                            href="#"
                            class="dropdown-btn text-bold"
                            id="dropdownLocation"
                            >Location
                            <i
                                data-feather="chevron-down"
                                class="icon-dropdown"
                            ></i
                        ></a>
                    </li>
                    <li>
                        <a
                            href="page/auth/login.html"
                            class="button button-primary"
                            >Log in/Sign In</a
                        >
                    </li>
                    <li>
                        <a href="#" class="dropdown-btn text-bold">
                            Profile
                            <i
                                data-feather="chevron-down"
                                class="icon-dropdown"
                            ></i>
                        </a>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">Profile</a>
                            <a href="#" class="dropdown-item">Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<!-- main-content -->
<main class="main">
    <!-- section header -->
    <header class="header">
        <div class="header-col-left">
            <!-- section title web -->
            <section class="header-title">
                <h1 class="title-header">
                    <span id="titleHeader1"></span>
                    <span class="caret"></span>
                    <br />
                    <span class="title-brand-1">Food</span>
                    <span class="title-brand-2">Finder</span>
                </h1>
                <form class="form-search" role="search">
                    <div class="input-container">
                        <i data-feather="map-pin" class="form-icon"></i>
                        <input
                            type="text"
                            class="form-control-lg"
                            id="formSearch"
                            placeholder=""
                        />
                    </div>
                    <button
                        class="button-circle-lg button-primary"
                        type="submit"
                    >
                        <i
                            data-feather="search"
                            class="icon-button-circle-lg"
                        ></i>
                    </button>
                </form>
            </section>

            <div class="object-center">
                <button
                    class="button-circle-lg button-outline-primary"
                    id="scrollDownButton"
                >
                    <i
                        data-feather="arrow-down"
                        class="icon-button-circle-lg"
                    ></i>
                </button>
            </div>
        </div>
        <div class="header-col-right">
            <!-- slider -->
            <div class="slider-container">
                <div class="swiper-wrapper">
                    <div
                        class="swiper-slide"
                        style="
                            background-image: url('assets/img/slider/slider-1.jpg');
                        "
                    >
                        <div class="slider-content">
                            <h1 class="slider-title">
                                The food you love,<br />right where you are
                            </h1>
                            <p class="slider-description">
                                Locate your favorite dishes<br />in the nearest
                                place.
                            </p>
                            <a href="#" class="button button-primary"
                                >Discover more</a
                            >
                        </div>
                    </div>
                    <div
                        class="swiper-slide"
                        style="
                            background-image: url('assets/img/slider/slider-2.jpg');
                        "
                    >
                        <div class="slider-content">
                            <h1 class="slider-title">
                                Sip on refreshing beverages<br />around you
                            </h1>
                            <p class="slider-description">
                                Search for your favorite drinks<br />close to
                                home.
                            </p>
                            <a href="#" class="button button-primary"
                                >Discover more</a
                            >
                        </div>
                    </div>
                    <div
                        class="swiper-slide"
                        style="
                            background-image: url('assets/img/slider/slider-3.jpg');
                        "
                    >
                        <div class="slider-content">
                            <h1 class="slider-title">
                                Enjoy your food at a quiet,<br />hidden nook
                            </h1>
                            <p class="slider-description">
                                Discover delicious dishes<br />at a hidden
                                diner.
                            </p>
                            <a href="#" class="button button-primary"
                                >Discover more</a
                            >
                        </div>
                    </div>
                </div>
                <button class="button-circle-slider slider-btn-prev">
                    <i data-feather="arrow-left"></i>
                </button>
                <button class="button-circle-slider slider-btn-next">
                    <i data-feather="arrow-right"></i>
                </button>
            </div>
        </div>
    </header>

    <!-- categories section -->
    <section id="categoriesSection" class="categories-section">
        <h2>Choose from Various Categories</h2>
        <div class="categories">
            <!-- category 1 -->
            <a href="#" class="card-category-link">
                <div class="card-category">
                    <div class="card-category-body">
                        <img
                            src="assets/img/icon/icons8-near-me.png"
                            alt="category 1"
                            class="card-img-category"
                        />
                    </div>
                </div>
                <h3 class="card-category-text">Near me</h3>
            </a>
            <!-- category 2 -->
            <a href="#" class="card-category-link">
                <div class="card-category">
                    <div class="card-category-body">
                        <img
                            src="assets/img/icon/icons8-best-seller.png"
                            alt="category 2"
                            class="card-img-category"
                        />
                    </div>
                </div>
                <h3 class="card-category-text">Best seller</h3>
            </a>
            <!-- category 3 -->
            <a href="#" class="card-category-link">
                <div class="card-category">
                    <div class="card-category-body">
                        <img
                            src="assets/img/icon/icons8-discount.png"
                            alt="category 3"
                            class="card-img-category"
                        />
                    </div>
                </div>
                <h3 class="card-category-text">Discount</h3>
            </a>
            <!-- category 4 -->
            <a href="#" class="card-category-link">
                <div class="card-category">
                    <div class="card-category-body">
                        <img
                            src="assets/img/icon/icons8-meal.png"
                            alt="category 4"
                            class="card-img-category"
                        />
                    </div>
                </div>
                <h3 class="card-category-text">Main course</h3>
            </a>
            <!-- category 5 -->
            <a href="#" class="card-category-link">
                <div class="card-category">
                    <div class="card-category-body">
                        <img
                            src="assets/img/icon/icons8-dessert.png"
                            alt="category 5"
                            class="card-img-category"
                        />
                    </div>
                </div>
                <h3 class="card-category-text">Desserts</h3>
            </a>
            <!-- category 6 -->
            <a href="#" class="card-category-link">
                <div class="card-category">
                    <div class="card-category-body">
                        <img
                            src="assets/img/icon/icons8-iced-coffee.png"
                            alt="category 6"
                            class="card-img-category"
                        />
                    </div>
                </div>
                <h3 class="card-category-text">Beverages</h3>
            </a>
            <!-- category 7 -->
            <a href="#" class="card-category-link">
                <div class="card-category">
                    <div class="card-category-body">
                        <img
                            src="assets/img/icon/icons8-healthy-food.png"
                            alt="category 7"
                            class="card-img-category"
                        />
                    </div>
                </div>
                <h3 class="card-category-text">Healthy food</h3>
            </a>
        </div>
    </section>

    <!-- discover section -->
    <section id="discoverSection" class="discover-section">
        <div class="discover-row">
            <div class="discover-col-1">
                <h2 class="discover-title">Wanna Eat Something?</h2>
                <p class="discover-description">
                    Browse our editor's choice dish for handpicked
                    recommendations, curated just for you.
                </p>
            </div>
            <div class="discover-col-2">
                <a href="#" class="button button-primary">Discover more</a>
            </div>
        </div>

        <!-- restaurants section -->
        <div id="restaurantList"></div>
    </section>
</main>

<!-- footer -->
<footer class="footer">
    <div class="row-footer">
        <div class="footer-left">
            <a href="index.html" class="footer-imgs">
                <img
                    src="assets/img/logo/logo-food_finder.png"
                    alt="Logo Food Finder"
                    class="img-footer"
                />
                <p class="logo-text">food finder</p>
            </a>
            <p class="copyright">&copy; 2024 Kelompok Semoga Lulus</p>
        </div>
        <div class="footer-right">
            <h3>Related Links</h3>
            <div class="footer-links">
                <a href="#" class="footer-link">About Us</a>
                <a href="#" class="footer-link"
                    >Become a Partner of Food Finder</a
                >
                <a href="#" class="footer-link">Privacy Policy</a>
                <a href="#" class="footer-link">Contact Us</a>
            </div>
        </div>
    </div>
</footer>

<!-- floating action button -->
<button
    class="button-circle-lg button-primary floating-action-button"
    id="scrollTopButton"
    onclick="scrollToTop()"
>
    <i data-feather="arrow-up" class="icon-button-circle-lg"></i>
</button>
@endsection

@push('script')
    <script src="{{ asset('js/script_home.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
@endpush
