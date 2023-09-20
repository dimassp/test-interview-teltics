<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.cdnfonts.com/css/hk-groteks" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/myownstyle/css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>

    <title>
        Homepage
    </title>
</head>

<body>
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner" style="">
            <div class="carousel-item active c-item position-relative">
                <img src="{{ asset('assets/images/v502_724.png') }}" class="bottom-cover d-block w-100 c-img"
                    alt="Slide 1">
                <div class="carousel-caption position-absolute top-0 d-flex align-items-center">
                    <div class="">
                        <div>
                            <h2>28 MILLION <br> COMMUNITY</h2>
                        </div>
                        <div class="d-flex justify-content-start">
                            <button class="very-small lets-work-button">LET'S WORK WITH US</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item c-item position-relative">
                <img src="{{ asset('assets/images/v502_724.png') }}" class="bottom-cover d-block w-100 c-img"
                    alt="Slide 1">
                <div class="carousel-caption position-absolute top-0 d-flex align-items-center">
                    <div class="">
                        <div>
                            <h2>28 MILLION <br> COMMUNITY</h2>
                        </div>
                        <div class="d-flex justify-content-start">
                            <button class="very-small lets-work-button">LET'S WORK WITH US</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item c-item position-relative">
                <img src="{{ asset('assets/images/v502_724.png') }}" class="bottom-cover d-block w-100 c-img"
                    alt="Slide 1">
                <div class="carousel-caption position-absolute top-0 d-flex align-items-center">
                    <div class="">
                        <div>
                            <h2>28 MILLION <br> COMMUNITY</h2>
                        </div>
                        <div class="d-flex justify-content-start">
                            <button class="very-small lets-work-button">LET'S WORK WITH US</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <main>
        <div class="container" id="container-description">
            <p id="desc">
                Bali United is an Indonesian professional club based in Gianyar, Bali. Bali United began operations in
                2014 and continues
                to be of the highest tier in Indonesian football competition, League 1. The club as a vision to grow the
                football industry
                in Indonesia through creating an an ecosystem consisting of 4Cs namely club, Community, Corporation and
                Country.
                <span class="red-bolder">Staying true to the vision</span>, the football club launched a sports agency
                under the name United Creative, to
                always bring the <span class="red-bolder">GAME ON</span> beyond its own club.
            </p>
            <span>Warm Regards,</span>
            <div>
                <img id="signature" src="{{ asset('assets/images/signature.png') }}" alt="signature">
            </div>
        </div>
        <div class="container" id="container-products">
            <div class="d-flex justify-content-between">
                <div class="subtitle-container">
                    <h2 class="subtitle">Products</h2>
                    <span class="red">What we can do for you</span>
                </div>
                <div>
                    <button class="red-bold small default-btn viewall-btn">VIEW ALL</button>
                </div>
            </div>
            <div>
                @php
                    $isNewRow = true;
                    $isEndRow = false;
                    $i = 1;
                    $isOpenTagCreated = false;
                    $background_color_class = ['red-1', 'red-2', 'red-3', 'very-light-orange', 'orange', 'dark-blue', 'light-blue', 'brown'];
                @endphp
                @foreach ($products as $product)
                    @php
                        $random_background_color = array_rand($background_color_class, 1);
                    @endphp
                    @if ($isNewRow)
                        @php
                            $isNewRow = false;
                        @endphp
                        <div class="d-flex flex-row">
                            <div
                                class="col-4 m-1 product-card {{ $background_color_class[$random_background_color] }} position-relative d-flex justify-content-start ">
                                <div
                                    class="top-0 left-0 p-2 reguler product-card  position-absolute letter-space-normal fw-bolder d-flex align-items-end">
                                    <span
                                        class="product-text-color above">{{ strtoupper($product->product_name) }}</span>
                                </div>
                                <div class="d-flex justify-content-center align-items-center w-100">
                                    <img class="d-block w-100 c-img object-fit-contain"
                                        src="{{ asset($product->product_logo) }}" alt=""
                                        style="height: 100px; width: 100px;">
                                </div>
                            </div>
                    @else
                        @if ($i%3 != 0)
                        <div class="col-4 m-1 product-card {{$background_color_class[$random_background_color]}} position-relative d-flex justify-content-start ">
                            <div class="top-0 left-0 p-2 reguler product-card position-absolute letter-space-normal fw-bolder d-flex align-items-end">
                                <span class="product-text-color above">{{strtoupper($product->product_name)}}</span>
                            </div>
                            <div class="d-flex justify-content-center align-items-center w-100">
                                <img class="d-block w-100 c-img object-fit-contain" src="{{asset($product->product_logo)}}" alt="" style="height: 100px; width: 100px;">
                            </div>
                        </div>
                        @else
                                <div class="col-4 m-1 product-card {{$background_color_class[$random_background_color]}} position-relative d-flex justify-content-start ">
                                    <div class="top-0 left-0 p-2 reguler product-card position-absolute letter-space-normal fw-bolder d-flex align-items-end">
                                        <span class="product-text-color above">{{strtoupper($product->product_name)}}</span>
                                    </div>
                                    <div class="d-flex justify-content-center align-items-center w-100">
                                        <img class="d-block w-100 c-img object-fit-contain" src="{{asset($product->product_logo)}}" alt="" style="height: 100px; width: 100px;">
                                    </div>
                                </div>
                            </div>
                            @php
                                $isNewRow=true;
                            @endphp
                        @endif
                    @endif
                @endforeach
                @php
                    echo 'Hello world from raw PHP';
                @endphp
                {{-- @php($i=1) --}}
                {{-- @if (count($products) % 3 != 0)
                    </div>
                @endif --}}
            </div>
        </div>
        <div class="container" id="double-dash">

        </div>
        <div class="slider-container">
            <b>
                <h3>WHAT MAKE US DIFFERENT</h3>
            </b>
        </div>
        <div id="differentiation-carousel" class="carousel slide position-relative" data-bs-ride="carousel">
            <div class="carousel-indicators d-flex position-absolute bottom-0 m-0 p-0" style="height: 15px;">
                <button type="button" data-bs-target="#differentiation-carousel" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#differentiation-carousel" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#differentiation-carousel" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>

            <div class="carousel-inner">
                <div class="carousel-item active c-item ">
                    <div class="d-flex flex-row h-100">
                        <div class="col-5 position-relative">
                            <img class="bottom-cover" src="{{ asset('assets/images/v502_1483.png') }}"
                                alt="">
                            <div
                                class="position-absolute top-0 start-0 carousel-caption w-100 d-flex align-items-center justify-content-end p-3">
                                <div class="text-white">
                                    <h2>10.000</h2>
                                    <i>
                                        <h4 class="fw-bold text-white">COMMUNITY LEADER</h4>
                                    </i>
                                </div>
                            </div>
                        </div>
                        <div class="col p-5 position-relative">
                            <div
                                class="position-absolute top-0 start-0 carousel-caption w-70 d-flex align-items-center justify-content-end p-5">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum a metus viverra
                                    magna pulvinar
                                    pellentesque quis a leo. Nulla facilisi. Pellentesque habitant morbi tristique
                                    senectus et netus et malesuada
                                    fames ac turpis egestas. Quisque ac convallis tortor.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item c-item ">
                    <div class="d-flex flex-row h-100">
                        <div class="col-5 position-relative">
                            <img class="bottom-cover" src="{{ asset('assets/images/v502_1483.png') }}"
                                alt="">
                            <div
                                class="position-absolute top-0 start-0 carousel-caption w-100 d-flex align-items-center justify-content-end p-3">
                                <div class="text-white">
                                    <h2>10.000</h2>
                                    <i>
                                        <h4 class="fw-bold text-white">COMMUNITY LEADER</h4>
                                    </i>
                                </div>
                            </div>
                        </div>
                        <div class="col p-5 position-relative">
                            <div
                                class="position-absolute top-0 start-0 carousel-caption w-70 d-flex align-items-center justify-content-end p-5">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum a metus viverra
                                    magna pulvinar
                                    pellentesque quis a leo. Nulla facilisi. Pellentesque habitant morbi tristique
                                    senectus et netus et malesuada
                                    fames ac turpis egestas. Quisque ac convallis tortor.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item c-item ">
                    <div class="d-flex flex-row h-100">
                        <div class="col-5 position-relative">
                            <img class="bottom-cover" src="{{ asset('assets/images/v502_1483.png') }}"
                                alt="">
                            <div
                                class="position-absolute top-0 start-0 carousel-caption w-100 d-flex align-items-center justify-content-end p-3">
                                <div class="text-white">
                                    <h2>10.000</h2>
                                    <i>
                                        <h4 class="fw-bold text-white">COMMUNITY LEADER</h4>
                                    </i>
                                </div>
                            </div>
                        </div>
                        <div class="col p-5 position-relative">
                            <div
                                class="position-absolute top-0 start-0 carousel-caption w-70 d-flex align-items-center justify-content-end p-5">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum a metus viverra
                                    magna pulvinar
                                    pellentesque quis a leo. Nulla facilisi. Pellentesque habitant morbi tristique
                                    senectus et netus et malesuada
                                    fames ac turpis egestas. Quisque ac convallis tortor.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#differentiation-carousel"
                data-bs-slide="prev">
                <h3><span class="bi bi-arrow-left-circle" aria-hidden="true"></span></h3>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#differentiation-carousel"
                data-bs-slide="next">
                <h3><span class="bi bi-arrow-right-circle" aria-hidden="true"></span></h3>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="differentiation-content-container">
        </div>
        <div class="container" id="container-services">
            <div class="d-flex justify-content-between">
                <div class="subtitle-container">
                    <h2 class="subtitle">Services</h2>
                    <span class="red">What we can do for you</span>
                </div>
                <div>
                    <button class="red-bold small default-btn viewall-btn">VIEW ALL</button>
                </div>
            </div>
            <div>
            </div>
        </div>
        <div class="container" id="double-dash">
        </div>
        <div class="slider-container">
            <b>
                <h3>OUR WORKS</h3>
            </b>
        </div>
        <div class="container">
            Portfolio
        </div>
        <div class="container" id="container-clients">
            <div class="d-flex justify-content-between">
                <div class="subtitle-container">
                    <h2 class="subtitle">Clients</h2>
                    <span class="red">Our happy client</span>
                </div>
                <div>
                    <button class="red-bold small default-btn viewall-btn">VIEW ALL</button>
                </div>
            </div>
            <div>
                Hello world
            </div>
        </div>
        <div class="container subtitle" id="container-start-project">
            <div class="start-project-element">
                <i>LET'S CREATE</i>
                <i><span>CREATIVE PROJECT</span></i>
            </div>
            <div class="start-project-element">
                <button class="red-bold default-btn small start-project-btn">START PROJECT WITH US</button>
            </div>
        </div>
    </main>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col text-white font-italic footer-element">
                    <img class="medium-logo" src="{{ asset('assets/images/white logo united creative.png') }}"
                        alt="United Creative White Logo" id="white-logo-united-creative">
                    <b><span class="small text-white d-block pb-3">UNITED CREATIVE HEAD OFFICE</span></b>
                    <span class="text-white small">Wisma Bali United, Jalan Panjang No. 29,<br> Kedoya Selatan, Jakarta
                        Barat<br>(021) 12345678</span>
                </div>
                {{-- <div class="col text-white p-5 border border-success"> --}}
                <div class="col text-white pt-4 pb-4">
                    <div class="row">
                        <div class="col-7 small font-weight-light footer-sub-element"><a href="#">Product</a>
                        </div>
                        <div class="col small footer-sub-element"><a href="#">About Us</a></div>
                        <div class="w-100"></div>
                        <div class="col-7 small footer-sub-element"><a href="#">Services</a></div>
                        <div class="col small footer-sub-element"><a href="#">Contact Us</a></div>
                        <div class="w-100"></div>
                        <div class="col-7 small footer-sub-element"><a href="#">Works</a></div>
                        <div class="col small footer-sub-element"><a href="#">Career</a></div>
                        <div class="w-100"></div>
                        <div class="col-7 small footer-sub-element">Client</div>
                        <div class="col small footer-sub-element"></div>
                    </div>
                </div>
                <div class="col text-white pt-4 pb-4">
                    <div class="d-flex justify-content-end">
                        <div class="small font-weight-light footer-sub-element">
                            <img class="small-logo"
                                src="{{ asset('assets/images/instagram black white bg.png') }}"alt="">
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <div class="small footer-sub-element">
                            COPYRIGHT &copy; 2021
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
