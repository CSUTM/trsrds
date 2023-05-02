<x-layout>


    @include('partials.navbar');

    <!-- main landing  -->
    <div class="main-landing">


        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                @foreach ($carousels as $carousel)
                    <div class="carousel-item active">
                        <img src="{{ asset('/images/' . $carousel->image) }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h1>{{ $carousel->title }} </h1>
                            <p>{{ $carousel->description }}</p>
                        </div>
                    </div>
                @endforeach
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <!-- About us -->
    <div class="about-us container text-center my-5">
        <h1>ABOUT <span class="b-color">US</span></h1>
        <br>
        <div class="row">

            <div class="d-flex flex-column align-items-center col-lg-3 col-md-6">
                <div class="about-color-hover mb-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="120" height="120" fill="currentColor"
                        class="bi bi-gear mb-1" viewBox="0 0 16 16">
                        <path
                            d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z" />
                        <path
                            d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z" />
                    </svg>
                    <h6>SETTING</h6>
                </div>
                <p>Lorem ipsum dolor sit amet elit. <br> Quis corrupti aspernatur animi culpa!
                    <br> Alias
                    accusantium, doloribus, ad fugit <br> velit, voluptatibus deleniti
                </p>
            </div>

            <div class="d-flex flex-column align-items-center col-lg-3 col-md-6">
                <div class="about-color-hover mb-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="120" height="120" fill="currentColor"
                        class="bi bi-bank mb-1" viewBox="0 0 16 16">
                        <path
                            d="m8 0 6.61 3h.89a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H15v7a.5.5 0 0 1 .485.38l.5 2a.498.498 0 0 1-.485.62H.5a.498.498 0 0 1-.485-.62l.5-2A.501.501 0 0 1 1 13V6H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 3h.89L8 0ZM3.777 3h8.447L8 1 3.777 3ZM2 6v7h1V6H2Zm2 0v7h2.5V6H4Zm3.5 0v7h1V6h-1Zm2 0v7H12V6H9.5ZM13 6v7h1V6h-1Zm2-1V4H1v1h14Zm-.39 9H1.39l-.25 1h13.72l-.25-1Z" />
                    </svg>
                    <h6>MONEY BACK</h6>
                </div>
                <p>Lorem ipsum dolor sit amet elit. <br> Quis corrupti aspernatur animi culpa!
                    <br> Alias
                    accusantium, doloribus, ad fugit <br> velit, voluptatibus deleniti
                </p>
            </div>

            <div class="d-flex flex-column align-items-center col-lg-3 col-md-6">
                <div class="about-color-hover mb-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="120" height="120" fill="currentColor"
                        class="bi bi-globe mb-1" viewBox="0 0 16 16">
                        <path
                            d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm7.5-6.923c-.67.204-1.335.82-1.887 1.855A7.97 7.97 0 0 0 5.145 4H7.5V1.077zM4.09 4a9.267 9.267 0 0 1 .64-1.539 6.7 6.7 0 0 1 .597-.933A7.025 7.025 0 0 0 2.255 4H4.09zm-.582 3.5c.03-.877.138-1.718.312-2.5H1.674a6.958 6.958 0 0 0-.656 2.5h2.49zM4.847 5a12.5 12.5 0 0 0-.338 2.5H7.5V5H4.847zM8.5 5v2.5h2.99a12.495 12.495 0 0 0-.337-2.5H8.5zM4.51 8.5a12.5 12.5 0 0 0 .337 2.5H7.5V8.5H4.51zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5H8.5zM5.145 12c.138.386.295.744.468 1.068.552 1.035 1.218 1.65 1.887 1.855V12H5.145zm.182 2.472a6.696 6.696 0 0 1-.597-.933A9.268 9.268 0 0 1 4.09 12H2.255a7.024 7.024 0 0 0 3.072 2.472zM3.82 11a13.652 13.652 0 0 1-.312-2.5h-2.49c.062.89.291 1.733.656 2.5H3.82zm6.853 3.472A7.024 7.024 0 0 0 13.745 12H11.91a9.27 9.27 0 0 1-.64 1.539 6.688 6.688 0 0 1-.597.933zM8.5 12v2.923c.67-.204 1.335-.82 1.887-1.855.173-.324.33-.682.468-1.068H8.5zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.65 13.65 0 0 1-.312 2.5zm2.802-3.5a6.959 6.959 0 0 0-.656-2.5H12.18c.174.782.282 1.623.312 2.5h2.49zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7.024 7.024 0 0 0-3.072-2.472c.218.284.418.598.597.933zM10.855 4a7.966 7.966 0 0 0-.468-1.068C9.835 1.897 9.17 1.282 8.5 1.077V4h2.355z" />
                    </svg>
                    <h6>WORLDWIDE SHIPPING</h6>
                </div>
                <p>Lorem ipsum dolor sit amet elit. <br> Quis corrupti aspernatur animi culpa!
                    <br> Alias
                    accusantium, doloribus, ad fugit <br> velit, voluptatibus deleniti
                </p>
            </div>

            <div class="d-flex flex-column align-items-center col-lg-3 col-md-6">

                <div class="about-color-hover mb-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="120" height="120" fill="currentColor"
                        class="bi bi-compass mb-1" viewBox="0 0 16 16">
                        <path
                            d="M8 16.016a7.5 7.5 0 0 0 1.962-14.74A1 1 0 0 0 9 0H7a1 1 0 0 0-.962 1.276A7.5 7.5 0 0 0 8 16.016zm6.5-7.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z" />
                        <path d="m6.94 7.44 4.95-2.83-2.83 4.95-4.949 2.83 2.828-4.95z" />
                    </svg>
                    <h6>WORLDWIDE SHIPPING</h6>
                </div>
                <p>Lorem ipsum dolor sit amet elit. <br> Quis corrupti aspernatur animi culpa!
                    <br> Alias
                    accusantium, doloribus, ad fugit <br> velit, voluptatibus deleniti
                </p>
            </div>

        </div>
    </div>

    <!-- NEW COLLECTION -->
    <div class="new-collection p-5">

        <div class="container my-5 text-center">
            <h1><span class="b-color">NEW</span> COLLECTION</h1>

            <!-- <div class="d-flex justify-content-center my-5 gap-5"> -->
            <div class="row mt-5 gap-5 justify-content-center">

                @foreach ($products as $product)
                    <div class="my-card col-lg-3">
                        <img src="{{ asset('/images/' . $product->image) }}" alt="">

                        <div class="grey-bg-options">
                            <div class="boxes flex-center">

                                <a href="">
                                    <div class="box blue-box flex-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                            <path
                                                d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                                        </svg>
                                    </div>
                                </a>

                                <a href="">
                                    <div class="box blue-box flex-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            fill="currentColor" class="bi bi-shuffle" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M0 3.5A.5.5 0 0 1 .5 3H1c2.202 0 3.827 1.24 4.874 2.418.49.552.865 1.102 1.126 1.532.26-.43.636-.98 1.126-1.532C9.173 4.24 10.798 3 13 3v1c-1.798 0-3.173 1.01-4.126 2.082A9.624 9.624 0 0 0 7.556 8a9.624 9.624 0 0 0 1.317 1.918C9.828 10.99 11.204 12 13 12v1c-2.202 0-3.827-1.24-4.874-2.418A10.595 10.595 0 0 1 7 9.05c-.26.43-.636.98-1.126 1.532C4.827 11.76 3.202 13 1 13H.5a.5.5 0 0 1 0-1H1c1.798 0 3.173-1.01 4.126-2.082A9.624 9.624 0 0 0 6.444 8a9.624 9.624 0 0 0-1.317-1.918C4.172 5.01 2.796 4 1 4H.5a.5.5 0 0 1-.5-.5z" />
                                            <path
                                                d="M13 5.466V1.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384l-2.36 1.966a.25.25 0 0 1-.41-.192zm0 9v-3.932a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384l-2.36 1.966a.25.25 0 0 1-.41-.192z" />
                                        </svg>
                                    </div>
                                </a>

                                <a href="">
                                    <div class="box blue-box flex-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                            <path
                                                d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                            <path
                                                d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                        </svg>
                                    </div>
                                </a>

                            </div>


                            <a href="">
                                <div class="cart-box mb-5 d-flex align-items-center justify-content-center border">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                        fill="currentColor" class="bi bi-cart m-auto" viewBox="0 0 16 16">
                                        <path
                                            d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                    </svg>
                                    <p class="m-auto">ADD TO CART</p>
                                </div>
                            </a>

                        </div>
                        <div class="bottom-bar blue-bottom-bar">
                            <div class="bottom-bar-text">
                                <p>{{$product->name}} </p>
                            </div>
                            <div class="price blue-price">
                                <p>{{ $product->price }}$</p>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>
    </div>

    <!-- SAVE UPTO -->
    <div class="save-up-to d-flex flex-column align-items-center justify-content-center">
        <h1 class="">SALE UPTO 40% OFF</h1>

        <h3>Don't Forget to Buy</h3>
    </div>

    <!-- OUR carousels -->
    {{-- <div class="our-carousels p-5">

        <div class="container my-5 text-center">
            <h1><span class="b-color">OUR</span> PRODUCTS</h1>

            <div class="row mt-5 gap-5 justify-content-center">

                @foreach ($products as $product)
                    <div class="my-card col-lg-3">
                        <img src="{{ asset('/images/' . $product->image) }}" alt="">

                        <div class="grey-bg-options">
                            <div class="boxes flex-center">

                                <a href="">
                                    <div class="box blue-box flex-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                            <path
                                                d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                                        </svg>
                                    </div>
                                </a>

                                <a href="">
                                    <div class="box blue-box flex-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            fill="currentColor" class="bi bi-shuffle" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M0 3.5A.5.5 0 0 1 .5 3H1c2.202 0 3.827 1.24 4.874 2.418.49.552.865 1.102 1.126 1.532.26-.43.636-.98 1.126-1.532C9.173 4.24 10.798 3 13 3v1c-1.798 0-3.173 1.01-4.126 2.082A9.624 9.624 0 0 0 7.556 8a9.624 9.624 0 0 0 1.317 1.918C9.828 10.99 11.204 12 13 12v1c-2.202 0-3.827-1.24-4.874-2.418A10.595 10.595 0 0 1 7 9.05c-.26.43-.636.98-1.126 1.532C4.827 11.76 3.202 13 1 13H.5a.5.5 0 0 1 0-1H1c1.798 0 3.173-1.01 4.126-2.082A9.624 9.624 0 0 0 6.444 8a9.624 9.624 0 0 0-1.317-1.918C4.172 5.01 2.796 4 1 4H.5a.5.5 0 0 1-.5-.5z" />
                                            <path
                                                d="M13 5.466V1.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384l-2.36 1.966a.25.25 0 0 1-.41-.192zm0 9v-3.932a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384l-2.36 1.966a.25.25 0 0 1-.41-.192z" />
                                        </svg>
                                    </div>
                                </a>

                                <a href="">
                                    <div class="box blue-box flex-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                            <path
                                                d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                            <path
                                                d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                        </svg>
                                    </div>
                                </a>

                            </div>


                            <a href="">
                                <div class="cart-box mb-5 d-flex align-items-center justify-content-center border">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                        fill="currentColor" class="bi bi-cart m-auto" viewBox="0 0 16 16">
                                        <path
                                            d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                    </svg>
                                    <p class="m-auto">ADD TO CART</p>
                                </div>
                            </a>

                        </div>
                        <div class="bottom-bar blue-bottom-bar">
                            <div class="bottom-bar-text">
                                <p>{{$product->name}} </p>
                            </div>
                            <div class="price blue-price">
                                <p>{{ $product->price }}$</p>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>
    </div> --}}

    <!-- CUSTOMERS REVIEW -->
    <div class="customers">
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <div class="white-bg d-flex align-items-center justify-content-center">

                        <div class="carousel-caption d-none d-md-block">
                            <h1 class="text-center">CUSTOMER'S <span class="b-color">REVIEW</span></h1>
                            <div class="about-us-options">

                                <div class="row">
                                    <div class="option col-lg-4 text-center">
                                        <div class="big-circle"></div>
                                        <p>Lorem ipsum dolor sit amet elit. <br> Quis corrupti aspernatur animi culpa!
                                            <br> Alias
                                            accusantium, doloribus, ad fugit <br> velit, voluptatibus deleniti
                                        </p>
                                        <h4 class="b-color text-center">- JOHN -</h4>
                                        <div class="five-circles flex-center">
                                            <div class="circle"></div>
                                            <div class="circle"></div>
                                            <div class="circle"></div>
                                            <div class="circle"></div>
                                            <div class="empty-circle circle"></div>
                                        </div>
                                    </div>
                                    <div class="option col-lg-4 text-center">
                                        <div class="big-circle"></div>
                                        <p>Lorem ipsum dolor sit amet elit. <br> Quis corrupti aspernatur animi culpa!
                                            <br> Alias
                                            accusantium, doloribus, ad fugit <br> velit, voluptatibus deleniti
                                        </p>
                                        <h4 class="b-color text-center">- JOHN -</h4>
                                        <div class="five-circles flex-center">
                                            <div class="circle"></div>
                                            <div class="circle"></div>
                                            <div class="circle"></div>
                                            <div class="circle"></div>
                                            <div class="empty-circle circle"></div>
                                        </div>
                                    </div>
                                    <div class="option col-lg-4 text-center">
                                        <div class="big-circle"></div>
                                        <p>Lorem ipsum dolor sit amet elit. <br> Quis corrupti aspernatur animi culpa!
                                            <br> Alias
                                            accusantium, doloribus, ad fugit <br> velit, voluptatibus deleniti
                                        </p>
                                        <h4 class="b-color text-center">- JOHN -</h4>
                                        <div class="five-circles flex-center">
                                            <div class="circle"></div>
                                            <div class="circle"></div>
                                            <div class="circle"></div>
                                            <div class="circle"></div>
                                            <div class="empty-circle circle"></div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <div class="white-bg d-flex align-items-center justify-content-center">

                            <div class="carousel-caption d-none d-md-block">
                                <h1 class="text-center">CUSTOMER'S <span class="b-color">REVIEW</span></h1>
                                <div class="about-us-options">

                                    <div class="row">
                                        <div class="option col-lg-4 text-center">
                                            <div class="big-circle"></div>
                                            <p>Lorem ipsum dolor sit amet elit. <br> Quis corrupti aspernatur animi
                                                culpa!
                                                <br> Alias
                                                accusantium, doloribus, ad fugit <br> velit, voluptatibus deleniti
                                            </p>
                                            <h4 class="b-color text-center">- JOHN -</h4>
                                            <div class="five-circles flex-center">
                                                <div class="circle"></div>
                                                <div class="circle"></div>
                                                <div class="circle"></div>
                                                <div class="circle"></div>
                                                <div class="empty-circle circle"></div>
                                            </div>
                                        </div>
                                        <div class="option col-lg-4 text-center">
                                            <div class="big-circle"></div>
                                            <p>Lorem ipsum dolor sit amet elit. <br> Quis corrupti aspernatur animi
                                                culpa!
                                                <br> Alias
                                                accusantium, doloribus, ad fugit <br> velit, voluptatibus deleniti
                                            </p>
                                            <h4 class="b-color text-center">- JOHN -</h4>
                                            <div class="five-circles flex-center">
                                                <div class="circle"></div>
                                                <div class="circle"></div>
                                                <div class="circle"></div>
                                                <div class="circle"></div>
                                                <div class="empty-circle circle"></div>
                                            </div>
                                        </div>
                                        <div class="option col-lg-4 text-center">
                                            <div class="big-circle"></div>
                                            <p>Lorem ipsum dolor sit amet elit. <br> Quis corrupti aspernatur animi
                                                culpa!
                                                <br> Alias
                                                accusantium, doloribus, ad fugit <br> velit, voluptatibus deleniti
                                            </p>
                                            <h4 class="b-color text-center">- JOHN -</h4>
                                            <div class="five-circles flex-center">
                                                <div class="circle"></div>
                                                <div class="circle"></div>
                                                <div class="circle"></div>
                                                <div class="circle"></div>
                                                <div class="empty-circle circle"></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="10000">
                            <div class="white-bg d-flex align-items-center justify-content-center">

                                <div class="carousel-caption d-none d-md-block">
                                    <h1 class="text-center">CUSTOMER'S <span class="b-color">REVIEW</span></h1>
                                    <div class="about-us-options">

                                        <div class="row">
                                            <div class="option col-lg-4 text-center">
                                                <div class="big-circle"></div>
                                                <p>Lorem ipsum dolor sit amet elit. <br> Quis corrupti aspernatur animi
                                                    culpa!
                                                    <br> Alias
                                                    accusantium, doloribus, ad fugit <br> velit, voluptatibus deleniti
                                                </p>
                                                <h4 class="b-color text-center">- JOHN -</h4>
                                                <div class="five-circles flex-center">
                                                    <div class="circle"></div>
                                                    <div class="circle"></div>
                                                    <div class="circle"></div>
                                                    <div class="circle"></div>
                                                    <div class="empty-circle circle"></div>
                                                </div>
                                            </div>
                                            <div class="option col-lg-4 text-center">
                                                <div class="big-circle"></div>
                                                <p>Lorem ipsum dolor sit amet elit. <br> Quis corrupti aspernatur animi
                                                    culpa!
                                                    <br> Alias
                                                    accusantium, doloribus, ad fugit <br> velit, voluptatibus deleniti
                                                </p>
                                                <h4 class="b-color text-center">- JOHN -</h4>
                                                <div class="five-circles flex-center">
                                                    <div class="circle"></div>
                                                    <div class="circle"></div>
                                                    <div class="circle"></div>
                                                    <div class="circle"></div>
                                                    <div class="empty-circle circle"></div>
                                                </div>
                                            </div>
                                            <div class="option col-lg-4 text-center">
                                                <div class="big-circle"></div>
                                                <p>Lorem ipsum dolor sit amet elit. <br> Quis corrupti aspernatur animi
                                                    culpa!
                                                    <br> Alias
                                                    accusantium, doloribus, ad fugit <br> velit, voluptatibus deleniti
                                                </p>
                                                <h4 class="b-color text-center">- JOHN -</h4>
                                                <div class="five-circles flex-center">
                                                    <div class="circle"></div>
                                                    <div class="circle"></div>
                                                    <div class="circle"></div>
                                                    <div class="circle"></div>
                                                    <div class="empty-circle circle"></div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <!-- <div class="container my-5">
        <h1 class="text-center mb-5">CUSTOMER'S <span class="b-color">REVIEW</span></h1>
        <div class="about-us-options">

            <div class="row">
                <div class="option col-lg-4 text-center">
                    <div class="big-circle"></div>
                    <p>Lorem ipsum dolor sit amet elit. <br> Quis corrupti aspernatur animi culpa!
                        <br> Alias
                        accusantium, doloribus, ad fugit <br> velit, voluptatibus deleniti
                    </p>
                    <h4 class="b-color text-center">- JOHN -</h4>
                    <div class="five-circles flex-center">
                        <div class="circle"></div>
                        <div class="circle"></div>
                        <div class="circle"></div>
                        <div class="circle"></div>
                        <div class="empty-circle circle"></div>
                    </div>
                </div>
                <div class="option col-lg-4 text-center">
                    <div class="big-circle"></div>
                    <p>Lorem ipsum dolor sit amet elit. <br> Quis corrupti aspernatur animi culpa!
                        <br> Alias
                        accusantium, doloribus, ad fugit <br> velit, voluptatibus deleniti
                    </p>
                    <h4 class="b-color text-center">- JOHN -</h4>
                    <div class="five-circles flex-center">
                        <div class="circle"></div>
                        <div class="circle"></div>
                        <div class="circle"></div>
                        <div class="circle"></div>
                        <div class="empty-circle circle"></div>
                    </div>
                </div>
                <div class="option col-lg-4 text-center">
                    <div class="big-circle"></div>
                    <p>Lorem ipsum dolor sit amet elit. <br> Quis corrupti aspernatur animi culpa!
                        <br> Alias
                        accusantium, doloribus, ad fugit <br> velit, voluptatibus deleniti
                    </p>
                    <h4 class="b-color text-center">- JOHN -</h4>
                    <div class="five-circles flex-center">
                        <div class="circle"></div>
                        <div class="circle"></div>
                        <div class="circle"></div>
                        <div class="circle"></div>
                        <div class="empty-circle circle"></div>
                    </div>
                </div>

            </div>
        </div>-->

    </div>

    <!-- PLACE YOUR ORDER NOW -->
    <div class="place-order d-flex flex-column align-items-center justify-content-center">

        <h1>PLACE YOUR <span style="color: white;">ORDER</span> NOW</h1>

        <form class="d-flex flex-column align-items-center">
            <div class="form-group">
                <input name="email" type="email" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group">
                <input name="order" type="text" class="form-control form-control-order"
                    id="exampleInputPassword1" placeholder="Your Order Here">
            </div>
            <button type="submit" class="btn order-btn">ORDER NOW</button>
        </form>

    </div>

    <!-- IMPROVE YOUR DRESSING -->
    <div class="save-up-to improve d-flex flex-column align-items-center justify-content-center">
        <h1 class="">IMPROVE YOUR DRESSING</h1>

        <h3>REAL TIME FEEDBACK REAL TIME RESULTS</h3>
    </div>


    <div class="before-footer">

        <div class="container">


            <div class="row">

                <div class="left-content col-lg-6">
                    <div class="logo">
                        <h3 style="color: black;"><span>H</span>YAPE</h3>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur <br> adipisicing elit. Provident, numquam?</p>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. <br> Doloribus omnis sapiente,
                        asperiores
                        <br>
                        nesciunt a
                        maxime dolor molestiae iure <br> aliquam consequuntur, cumque quos <br> sint animi,
                        excepturi
                        tenetur
                        veniam dolorum
                        officia! Beatae?
                    </p>

                    <div class="social-icons d-flex">

                        <a href="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                fill="currentColor" class="bi bi-facebook me-3" viewBox="0 0 16 16">
                                <path
                                    d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                            </svg>
                        </a>
                        <a href="">

                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                fill="currentColor" class="bi bi-twitter me-3" viewBox="0 0 16 16">
                                <path
                                    d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                            </svg>
                        </a>
                        <a href="">

                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                fill="currentColor" class="bi bi-pinterest me-3" viewBox="0 0 16 16">
                                <path
                                    d="M8 0a8 8 0 0 0-2.915 15.452c-.07-.633-.134-1.606.027-2.297.146-.625.938-3.977.938-3.977s-.239-.479-.239-1.187c0-1.113.645-1.943 1.448-1.943.682 0 1.012.512 1.012 1.127 0 .686-.437 1.712-.663 2.663-.188.796.4 1.446 1.185 1.446 1.422 0 2.515-1.5 2.515-3.664 0-1.915-1.377-3.254-3.342-3.254-2.276 0-3.612 1.707-3.612 3.471 0 .688.265 1.425.595 1.826a.24.24 0 0 1 .056.23c-.061.252-.196.796-.222.907-.035.146-.116.177-.268.107-1-.465-1.624-1.926-1.624-3.1 0-2.523 1.834-4.84 5.286-4.84 2.775 0 4.932 1.977 4.932 4.62 0 2.757-1.739 4.976-4.151 4.976-.811 0-1.573-.421-1.834-.919l-.498 1.902c-.181.695-.669 1.566-.995 2.097A8 8 0 1 0 8 0z" />
                            </svg>
                        </a>
                        <a href="">

                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                fill="currentColor" class="bi bi-instagram me-3" viewBox="0 0 16 16">
                                <path
                                    d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                            </svg>
                        </a>

                    </div>
                </div>


                <div class="right-content col-lg-6 ">
                    <form method="POST" action="/email">
                        @csrf

                        <div class="name-email d-flex justify-content-between">

                            <div class="form-group">
                                <input name="email" type="email" class="form-control form-name "
                                    id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <input name="order" type="text"
                                    class="form-control form-control-order form-name" id="exampleInputPassword1"
                                    placeholder="Your Order Here">
                            </div>

                        </div>
                        <textarea name="message" placeholder="Your Message" class="your-message d-flex justify-content-start full"
                            id="exampleFormControlTextarea1" rows="10" cols="88"></textarea>

                        <button type="submit" class="btn btn-secondary  send-btn full my-3 ms-auto">SEND</button>

                    </form>
                </div>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>

    <script src="./script.js"></script>

    @include('partials.footer')

</x-layout>
