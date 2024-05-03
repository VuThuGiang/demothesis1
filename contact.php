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
                    <h1 class="mb1-3 bread">Contact with us</h1>
                </div>
            </div>
        </div>
    </section>

    <!-----------infor us------------->
    <section class="ftco-section ftco-no-pb contact-section">
      <div class="container">
        <div class="row d-flex contact-info">
          <div class="col-md-3 d-flex">
          	<div class="align-self-stretch box p-4 text-center">
          		<div class="icon d-flex align-items-center justify-content-center">
                  <i class="bi bi-geo-alt" style="color: aliceblue; font-size:30px"></i>
          		</div>
          		<h3 class="mb-2">Address</h3>
	            <p>123 Ha Dong, Ha Noi</p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="align-self-stretch box p-4 text-center">
          		<div class="icon d-flex align-items-center justify-content-center">
          		<i class="bi bi-headset" style="color: aliceblue; font-size:30px"></i>
          		</div>
          		<h3 class="mb-2">Contact Number</h3>
	            <p><a href="tel://1234567920">+84 123456789</a></p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="align-self-stretch box p-4 text-center">
          		<div class="icon d-flex align-items-center justify-content-center">
                  <i class="bi bi-envelope" style="color: aliceblue; font-size:30px"></i>
          		</div>
          		<h3 class="mb-2">Email Address</h3>
	            <p><a href="mailto:info@yoursite.com">info@gmail.com</a></p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="align-self-stretch box p-4 text-center">
          		<div class="icon d-flex align-items-center justify-content-center">
                  <i class="bi bi-link-45deg" style="color: aliceblue; font-size:30px"></i>
          		</div>
          		<h3 class="mb-2">Website</h3>
	            <p><a href="#">triptravel.com</a></p>
	          </div>
          </div>
        </div>
      </div>
    </section>
    <!------------in4 cuss---------------------->
    <section class="ftco-section contact-section">
      <div class="container">
        <div class="row block-9">
          <div class="col-md-6 order-md-last d-flex">
            <form action="#" class="bg-light p-5 contact-form">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Name">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Subject">
              </div>
              <div class="form-group">
                <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          
          </div>

          <div class="col-md-6 d-flex">
          	<div id="map" class="bg-white"></div>
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