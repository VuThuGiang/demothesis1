<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TripBoss</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/owl.carousel.min.css">
    <link rel="stylesheet" href="./css/owl.theme.default.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
</head>

<body>
<?php require("/laragon/www/dulich/header.php"); ?>

    <!----Into------>
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('./img/profile/anhSAPA.jpg'); width: 100%; height: 500px; background-position: center bottom; background-size: cover;" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">
                    <h1 class="mb1-3 bread">Places to Travel</h1>
                </div>
            </div>
        </div>
    </section>

    <!------------best des------------------------------>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center pb-4">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <h2 class="mb-4">Best Place Destination</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 ftco-animate">
                    <div class="project-destination">
                        <a href="#" class="img" style="background-image: url(./img/profile/anhHanoi.jpg);">
                            <div class="text">
                                <h3>Danag</h3>
                                <span>4 Tours</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 ftco-animate">
                    <div class="project-destination">
                        <a href="#" class="img" style="background-image: url(./img/profile/anh8.jpg);">
                            <div class="text">
                                <h3>Hanoi</h3>
                                <span>2 Tours</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 ftco-animate">
                    <div class="project-destination">
                        <a href="#" class="img" style="background-image: url(./img/profile/anhSAPA.jpg);">
                            <div class="text">
                                <h3>Hagiang</h3>
                                <span>5 Tours</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 ftco-animate">
                    <div class="project-destination">
                        <a href="#" class="img" style="background-image: url(./img/profile/halongbay.jpg);">
                            <div class="text">
                                <h3>Sapa</h3>
                                <span>3 Tours</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!---header Choose--------------------------->

    <section class="ftco-section ftco-no-pb ftco-no-pt">
        <div class="container">
            <div class="row">
                <div class="col-md-12" style="margin-block-start: 85px;">
                    <div class="search-wrap-1 ftco-animate p-4">
                        <form action="#" class="search-property-1">
                            <div class="row">
                                <div class="col-lg align-items-end">
                                    <div class="form-group">
                                        <label for="#">Destination</label>
                                        <div class="form-field" style="width: 200px;">

                                            <input type="text" class="form-control" placeholder="Search place">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg align-items-end">
                                    <div class="form-group">
                                        <label for="#">Check-in date</label>
                                        <div class="form-field" style="width: 200px;">

                                            <input type="date" class="form-control checkin_date">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg align-items-end">
                                    <div class="form-group">
                                        <label for="#">Check-out date</label>
                                        <div class="form-field" style="width: 200px;">

                                            <input type="date" class="form-control checkout_date">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg align-items-end">
                                    <div class="form-group">
                                        <label for="#">Price Limit</label>
                                        <div class="form-field">
                                            <div class="select-wrap" style="width: 200px;">

                                                <select name="" id="" class="form-control">
                                                    <option value="">$5,000</option>
                                                    <option value="">$10,000</option>
                                                    <option value="">$50,000</option>
                                                    <option value="">$100,000</option>
                                                    <option value="">$200,000</option>
                                                    <option value="">$300,000</option>
                                                    <option value="">$400,000</option>
                                                    <option value="">$500,000</option>
                                                    <option value="">$600,000</option>
                                                    <option value="">$700,000</option>
                                                    <option value="">$800,000</option>
                                                    <option value="">$900,000</option>
                                                    <option value="">$1,000,000</option>
                                                    <option value="">$2,000,000</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg align-self-end">
                                    <div class="form-group">
                                        <div class="form-field" style="width: 100px;">
                                            <input type="submit" value="Search" class="form-control btn btn-primary">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-----------tour ------------------------->
    <section class="ftco-section ftco-no-pt">
        <div class="container">
            <div class="row justify-content-center pb-4">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <h2 class="mb-4 mt-5">Tour Destination</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 ftco-animate">
                    <div class="project-wrap">
                        <a href="#" class="img" style="background-image: url(./img/profile/anhDN.jpg);"></a>
                        <div class="text p-4">
                            <span class="price">$300/person</span>
                            <span class="days">8 Days Tour</span>
                            <h3><a href="#">Bali, Indonesia</a></h3>
                            <p class="location"><i class="bi bi-geo"></i></span> Bali, Indonesia</p>
                            <ul>
                                <li><i class="fas fa-shower" style="color: #92af70;"></i>2</li>
                                <li><i class="fas fa-bed" style="color: #92af70;"></i></span>3</li>
                                <li><i class="fas fa-mountain" style="color: #92af70;"></i>Near Mountain</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 ftco-animate">
                    <div class="project-wrap">
                        <a href="#" class="img" style="background-image: url(./img/profile/anhDN.jpg);"></a>
                        <div class="text p-4">
                            <span class="price">$300/person</span>
                            <span class="days">10 Days Tour</span>
                            <h3><a href="#">Bali, Indonesia</a></h3>
                            <p class="location"><i class="bi bi-geo"></i></span> Bali, Indonesia</p>
                            <ul>
                                <li><i class="fas fa-shower" style="color: #92af70;"></i>2</li>
                                <li><i class="fas fa-bed" style="color: #92af70;"></i></span>3</li>
                                <li><i class="fas fa-mountain" style="color: #92af70;"></i>Near Mountain</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate">
                    <div class="project-wrap">
                        <a href="#" class="img" style="background-image: url(./img/profile/anhDN.jpg);"></a>
                        <div class="text p-4">
                            <span class="price">$300/person</span>
                            <span class="days">8 Days Tour</span>
                            <h3><a href="#">Bali, Indonesia</a></h3>
                            <p class="location"><i class="bi bi-geo"></i></span> Bali, Indonesia</p>
                            <ul>
                                <li><i class="fas fa-shower" style="color: #92af70;"></i>2</li>
                                <li><i class="fas fa-bed" style="color: #92af70;"></i></span>3</li>
                                <li><i class="fas fa-mountain" style="color: #92af70;"></i>Near Mountain</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate">
                    <div class="project-wrap">
                        <a href="#" class="img" style="background-image: url(./img/profile/anhDN.jpg);"></a>
                        <div class="text p-4">
                            <span class="price">$300/person</span>
                            <span class="days">7 Days Tour</span>
                            <h3><a href="#">Bali, Indonesia</a></h3>
                            <p class="location"><i class="bi bi-geo"></i></span> Bali, Indonesia</p>
                            <ul>
                                <li><i class="fas fa-shower" style="color: #92af70;"></i>2</li>
                                <li><i class="fas fa-bed" style="color: #92af70;"></i></span>3</li>
                                <li><i class="fas fa-mountain" style="color: #92af70;"></i>Near Mountain</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate">
                    <div class="project-wrap">
                        <a href="#" class="img" style="background-image: url(./img/profile/anhDN.jpg);"></a>
                        <div class="text p-4">
                            <span class="price">$300/person</span>
                            <span class="days">8 Days Tour</span>
                            <h3><a href="#">Bali, Indonesia</a></h3>
                            <p class="location"><i class="bi bi-geo"></i></span> Bali, Indonesia</p>
                            <ul>
                                <li><i class="fas fa-shower" style="color: #92af70;"></i>2</li>
                                <li><i class="fas fa-bed" style="color: #92af70;"></i></span>3</li>
                                <li><i class="fas fa-mountain" style="color: #92af70;"></i>Near Mountain</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate">
                    <div class="project-wrap">
                        <a href="#" class="img" style="background-image: url(./img/profile/anhDN.jpg);"></a>
                        <div class="text p-4">
                            <span class="price">$300/person</span>
                            <span class="days">8 Days Tour</span>
                            <h3><a href="#">Bali, Indonesia</a></h3>
                            <p class="location"><i class="bi bi-geo"></i></span> Bali, Indonesia</p>
                            <ul>
                                <li><i class="fas fa-shower" style="color: #92af70;"></i>2</li>
                                <li><i class="fas fa-bed" style="color: #92af70;"></i></span>3</li>
                                <li><i class="fas fa-mountain" style="color: #92af70;"></i>Near Mountain</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate">
                    <div class="project-wrap">
                        <a href="#" class="img" style="background-image: url(./img/profile/anhDN.jpg);"></a>
                        <div class="text p-4">
                            <span class="price">$300/person</span>
                            <span class="days">10 Days Tour</span>
                            <h3><a href="#">Bali, Indonesia</a></h3>
                            <p class="location"><i class="bi bi-geo"></i> Bali, Indonesia</p>
                            <ul>
                                <li><i class="fas fa-shower" style="color: #92af70;"></i>2</li>
                                <li><i class="fas fa-bed" style="color: #92af70;"></i></span>3</li>
                                <li><i class="fas fa-mountain" style="color: #92af70;"></i>Near Mountain</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate">
                    <div class="project-wrap">
                        <a href="#" class="img" style="background-image: url(./img/profile/anhDN.jpg);"></a>
                        <div class="text p-4">
                            <span class="price">$300/person</span>
                            <span class="days">7 Days Tour</span>
                            <h3><a href="#">Bali, Indonesia</a></h3>
                            <p class="location"><i class="bi bi-geo"></i></span> Bali, Indonesia</p>
                            <ul>
                                <li><i class="fas fa-shower" style="color: #92af70;"></i>2</li>
                                <li><i class="fas fa-bed" style="color: #92af70;"></i></span>3</li>
                                <li><i class="fas fa-mountain" style="color: #92af70;"></i>Near Mountain</li>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate">
                    <div class="project-wrap">
                        <a href="#" class="img" style="background-image: url(./img/profile/anhDN.jpg);"></a>
                        <div class="text p-4">
                            <span class="price">$300/person</span>
                            <span class="days">8 Days Tour</span>
                            <h3><a href="#">Bali, Indonesia</a></h3>
                            <p class="location"><i class="bi bi-geo"></i></span> Bali, Indonesia</p>
                            <ul>
                                <li><i class="fas fa-shower" style="color: #92af70;"></i>2</li>
                                <li><i class="fas fa-bed" style="color: #92af70;"></i></span>3</li>
                                <li><i class="fas fa-mountain" style="color: #92af70;"></i>Near Mountain</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate">
                    <div class="project-wrap">
                        <a href="#" class="img" style="background-image: url(./img/profile/anhDN.jpg);"></a>
                        <div class="text p-4">
                            <span class="price">$300/person</span>
                            <span class="days">8 Days Tour</span>
                            <h3><a href="#">Bali, Indonesia</a></h3>
                            <p class="location"><i class="bi bi-geo"></i></span> Bali, Indonesia</p>
                            <ul>
                                <li><i class="fas fa-shower" style="color: #92af70;"></i>2</li>
                                <li><i class="fas fa-bed" style="color: #92af70;"></i></span>3</li>
                                <li><i class="fas fa-mountain" style="color: #92af70;"></i>Near Mountain</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col text-center">
                        <div class="block-27">
                            <ul>
                                <li><a href="#">&lt;</a></li>
                                <li class="active"><span>1</span></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">&gt;</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-------------feedback------------>

    <section class="ftco-section testimony-section bg-bottom" style="background-image: url('./img/profile/bg-1.jpg'); background-size: 100% 200%; background-position: center bottom; min-height: 500px;">

        <div class="container">
            <div class="row justify-content-center pb-4">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <h2 class="mb-4">Tourist Feedback</h2>
                </div>
            </div>
            <div class="row ftco-animate">
                <div class="col-md-12 mt-4">
                    <!-- Swiper -->
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <!-- Swiper Slide for each testimonial -->
                            <div class="swiper-slide">
                                <div class="testimony-wrap py-4">
                                    <div class="text">
                                        <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                            Vokalia and Consonantia, there live the blind texts.</p>
                                        <div class="d-flex align-items-center">
                                            <!-- <div class="user-img" style="background-image: url(./img/profile/anh1.jpg);"></div> -->
                                            <img src="./img/profile/anh1.jpg" class="user-img">
                                            <div class="pl-4" style="margin-left: 20px;">
                                                <p class="name">Roger Scott</p>
                                                <span class="position">doctor</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Repeat for each testimonial -->
                            <div class="swiper-slide">
                                <div class="testimony-wrap py-4">
                                    <div class="text">
                                        <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                            Vokalia and Consonantia, there live the blind texts.</p>
                                        <div class="d-flex align-items-center">
                                            <!-- <div class="user-img" style="background-image: url(./img/profile/anh2.png);"></div> -->
                                            <img src="./img/profile/anh1.jpg" class="user-img">
                                            <div class="pl-4" style="margin-left: 20px;">
                                                <p class="name">Roger Scott</p>
                                                <span class="position">doctor</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimony-wrap py-4">
                                    <div class="text">
                                        <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                            Vokalia and Consonantia, there live the blind texts.</p>
                                        <div class="d-flex align-items-center">
                                            <!-- <div class="user-img" style="background-image: url(./img/profile/anh3.png);"></div> -->
                                            <img src="./img/profile/anh1.jpg" class="user-img">
                                            <div class="pl-4" style="margin-left: 20px;">
                                                <p class="name">Roger Scott</p>
                                                <span class="position">doctor</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimony-wrap py-4">
                                    <div class="text">
                                        <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                            Vokalia and Consonantia, there live the blind texts.</p>
                                        <div class="d-flex align-items-center">
                                            <!-- <div class="user-img" style="background-image: url(./img/profile/anh3.png);"></div> -->
                                            <img src="./img/profile/anh1.jpg" class="user-img">
                                            <div class="pl-4" style="margin-left: 20px;">
                                                <p class="name">Roger Scott</p>
                                                <span class="position">doctor</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimony-wrap py-4">
                                    <div class="text">
                                        <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                            Vokalia and Consonantia, there live the blind texts.</p>
                                        <div class="d-flex align-items-center">
                                            <!-- <div class="user-img" style="background-image: url(./img/profile/anh3.png);"></div> -->
                                            <img src="./img/profile/anh1.jpg" class="user-img">
                                            <div class="pl-4" style="margin-left: 20px;">
                                                <p class="name">Roger Scott</p>
                                                <span class="position">Marketing Manager</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <div class="swiper-pagination" style="color: #92af70;"></div>

        </div>
    </section>

    <!----------------footer--------->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Company</h4>
                    <a href="" class="btn btn-link" style="color: #a8d179;"> About us</a>
                    <a href="" class="btn btn-link" style="color: #a8d179;"> Contact us</a>
                    <a href="" class="btn btn-link" style="color: #a8d179;"> Privacy Police</a>
                    <a href="" class="btn btn-link" style="color: #a8d179;"> Help</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Contact</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>234 Street, Ha Dong</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+84 23456789</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>infor@gmail.com</p>
                    <!---social icon-->
                    <div class="d-flex pt-2">
                        <a href="" class="btn btn-outline-light btn-social">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="" class="btn btn-outline-light btn-social">
                            <i class="fab fa-youtube"></i>
                        </a>
                        <a href="" class="btn btn-outline-light btn-social">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Gallery</h4>
                    <div class="row g-2 pt-2">
                        <div class="col-4">
                            <img src="./img/profile/anhHUE.jpg" alt="" class="img-fluid bg-light p-1" style="margin-block-start: 10px;">
                        </div>
                        <div class="col-4">
                            <img src="./img/profile/anhHUE.jpg" alt="" class="img-fluid bg-light p-1" style="margin-block-start: 10px;">
                        </div>
                        <div class="col-4">
                            <img src="./img/profile/anhHUE.jpg" alt="" class="img-fluid bg-light p-1" style="margin-block-start: 10px;">
                        </div>
                        <div class="col-4">
                            <img src="./img/profile/anhHUE.jpg" alt="" class="img-fluid bg-light p-1" style="margin-block-start: 10px;">
                        </div>
                        <div class="col-4">
                            <img src="./img/profile/anhHUE.jpg" alt="" class="img-fluid bg-light p-1" style="margin-block-start: 10px;">
                        </div>
                        <div class="col-4">
                            <img src="./img/profile/anhHUE.jpg" alt="" class="img-fluid bg-light p-1" style="margin-block-start: 10px;">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Newsletter</h4>
                    <p>Phải công nhận bài của HH và Vũ bùng nổ quá. Từ trang phục âm thanh ánh sáng hiệu ứng sân khấu
                        giọng hát khác nhau nhưng hoà quyện vào nhau. Nổi bật ghê</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input type="text" class="form-control border-primary w-100 py-3 ps-4 pe-5" placeholder="Your email">
                        <button class="btn btn-secondary py-2 position-absolute top-0 end-0 mt-1 me-1" style="color: #a8d179;" type="button">SignUp</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="./js/jquery.min.js"></script>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./js/owl.carousel.min.js"></script>
    <script src="./js/main.js"></script>






</body>


</html>