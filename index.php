<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Movfix - Online Movies & TV Shows Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/animate.min.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/fontawesome-all.min.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/flaticon.css">
        <link rel="stylesheet" href="css/odometer.css">
        <link rel="stylesheet" href="css/aos.css">
        <link rel="stylesheet" href="css/slick.css">
        <link rel="stylesheet" href="css/default.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
    </head>
    <body>
        <?php include "./inc/header.php";
            include "./inc/slider.php";
            include "./inc/new_up.php";
            include "./inc/gallery.php";



        //   include "./inc/footer.php";
        
        ?>

        <!-- preloader -->
        <div id="preloader">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <img src="img/preloader.svg" alt="">
                </div>
            </div>
        </div>
        <!-- preloader-end -->

		<!-- Scroll-top -->
        <button class="scroll-top scroll-to-target" data-target="html">
            <i class="fas fa-angle-up"></i>
        </button>
        <!-- Scroll-top-end-->

        <!-- main-area -->
        <main>



            <!-- top-rated-movie -->
            <section class="top-rated-movie tr-movie-bg" data-background="img/bg/tr_movies_bg.jpg">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="section-title text-center mb-50">
                                <span class="sub-title">ONLINE STREAMING</span>
                                <h2 class="title">Top Rated Movies</h2>
                            </div>
                        </div>
                    </div>
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="tr-movie-menu-active text-center">
                            <button class="active" data-filter="*">TV Shows</button>
                            <button class="" data-filter=".cat-one">Movies</button>
                            <button class="" data-filter=".cat-two">Documentary</button>
                            <button class="" data-filter=".cat-three">Sports</button>
                        </div>
                    </div>
                </div>
                    <div class="row tr-movie-active">
                        <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-two">
                            <div class="movie-item mb-60">
                                <div class="movie-poster">
                                    <a href="movie-details.html"><img src="img/poster/tai-thuong-me-tinh-x350.webp" alt=""></a>
                                </div>
                                <div class="movie-content">
                                    <div class="top">
                                        <h5 class="title"><a href="movie-details.html">Tái Thượng Mê Tình</a></h5>
                                        <span class="date">2021</span>
                                    </div>
                                    <div class="bottom">
                                        <ul>
                                            <li><span class="quality">hd</span></li>
                                            <li>
                                                <span class="duration"><i class="far fa-clock"></i> 128 min</span>
                                                <span class="rating"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-one cat-three">
                            <div class="movie-item mb-60">
                                <div class="movie-poster">
                                    <a href="movie-details.html"><img src="img/poster/anh-trai-vuot-moi-tam-tai-x500.webp" alt=""></a>
                                </div>
                                <div class="movie-content">
                                    <div class="top">
                                        <h5 class="title"><a href="movie-details.html">Anh Trai Vượt Mọi Tam Tai</a></h5>
                                        <span class="date">2021</span>
                                    </div>
                                    <div class="bottom">
                                        <ul>
                                            <li><span class="quality">4k</span></li>
                                            <li>
                                                <span class="duration"><i class="far fa-clock"></i> 128 min</span>
                                                <span class="rating"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-two">
                            <div class="movie-item mb-60">
                                <div class="movie-poster">
                                    <a href="movie-details.html"><img src="img/poster/xac-song-daryl-dixon-phan-2-x350.webp" alt=""></a>
                                </div>
                                <div class="movie-content">
                                    <div class="top">
                                        <h5 class="title"><a href="movie-details.html">Xác Sống</a></h5>
                                        <span class="date">2021</span>
                                    </div>
                                    <div class="bottom">
                                        <ul>
                                            <li><span class="quality">hd</span></li>
                                            <li>
                                                <span class="duration"><i class="far fa-clock"></i> 128 min</span>
                                                <span class="rating"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-one cat-three">
                            <div class="movie-item mb-60">
                                <div class="movie-poster">
                                    <a href="movie-details.html"><img src="img/poster/doan-vien-x350.webp" alt=""></a>
                                </div>
                                <div class="movie-content">
                                    <div class="top">
                                        <h5 class="title"><a href="movie-details.html">Đoàn Viên</a></h5>
                                        <span class="date">2021</span>
                                    </div>
                                    <div class="bottom">
                                        <ul>
                                            <li><span class="quality">8K</span></li>
                                            <li>
                                                <span class="duration"><i class="far fa-clock"></i> 128 min</span>
                                                <span class="rating"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-two">
                            <div class="movie-item mb-60">
                                <div class="movie-poster">
                                    <a href="movie-details.html"><img src="img/poster/tham-tinh-an-x350.webp" alt=""></a>
                                </div>
                                <div class="movie-content">
                                    <div class="top">
                                        <h5 class="title"><a href="movie-details.html">Thám Tình An</a></h5>
                                        <span class="date">2021</span>
                                    </div>
                                    <div class="bottom">
                                        <ul>
                                            <li><span class="quality">3D</span></li>
                                            <li>
                                                <span class="duration"><i class="far fa-clock"></i> 128 min</span>
                                                <span class="rating"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-one cat-three">
                            <div class="movie-item mb-60">
                                <div class="movie-poster">
                                    <a href="movie-details.html"><img src="img/poster/cau-chuyen-cua-hoa-hong-x500.webp" alt=""></a>
                                </div>
                                <div class="movie-content">
                                    <div class="top">
                                        <h5 class="title"><a href="movie-details.html">Câu Chuyện Của Hoa Hồng</a></h5>
                                        <span class="date">2021</span>
                                    </div>
                                    <div class="bottom">
                                        <ul>
                                            <li><span class="quality">hd</span></li>
                                            <li>
                                                <span class="duration"><i class="far fa-clock"></i> 128 min</span>
                                                <span class="rating"><i class="fas fa-thumbs-up"></i> 3.9</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-two">
                            <div class="movie-item mb-60">
                                <div class="movie-poster">
                                    <a href="movie-details.html"><img src="img/poster/tran-chien-song-con-x500.webp" alt=""></a>
                                </div>
                                <div class="movie-content">
                                    <div class="top">
                                        <h5 class="title"><a href="movie-details.html">Trận Chiến Sống Còn</a></h5>
                                        <span class="date">2021</span>
                                    </div>
                                    <div class="bottom">
                                        <ul>
                                            <li><span class="quality">4K</span></li>
                                            <li>
                                                <span class="duration"><i class="far fa-clock"></i> 128 min</span>
                                                <span class="rating"><i class="fas fa-thumbs-up"></i> 3.9</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-one cat-three">
                            <div class="movie-item mb-60">
                                <div class="movie-poster">
                                    <a href="movie-details.html"><img src="img/poster/nghi-pham-can-ke-x350.webp" alt=""></a>
                                </div>
                                <div class="movie-content">
                                    <div class="top">
                                        <h5 class="title"><a href="movie-details.html">Nghi Phạm Cận Kề</a></h5>
                                        <span class="date">2021</span>
                                    </div>
                                    <div class="bottom">
                                        <ul>
                                            <li><span class="quality">4K</span></li>
                                            <li>
                                                <span class="duration"><i class="far fa-clock"></i> 128 min</span>
                                                <span class="rating"><i class="fas fa-thumbs-up"></i> 3.9</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- top-rated-movie-end -->
             
            <!-- tv-series-area -->
            <section class="tv-series-area tv-series-bg" data-background="img/bg/tv_series_bg.jpg">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="section-title text-center mb-50">
                                <span class="sub-title">Best TV Series</span>
                                <h2 class="title">World Best TV Series</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="movie-item mb-50">
                                <div class="movie-poster">
                                    <a href="movie-details.html"><img src="img/images/thien-su-toi-loi.jpg" alt=""></a>
                                </div>
                                <div class="movie-content">
                                    <div class="top">
                                        <h5 class="title"><a href="movie-details.html">Thiên Sứ Tội Lỗi</a></h5>
                                        <span class="date">2021</span>
                                    </div>
                                    <div class="bottom">
                                        <ul>
                                            <li><span class="quality">hd</span></li>
                                            <li>
                                                <span class="duration"><i class="far fa-clock"></i> 128 min</span>
                                                <span class="rating"><i class="fas fa-thumbs-up"></i> 4.4</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="movie-item mb-50">
                                <div class="movie-poster">
                                    <a href="movie-details.html"><img src="img/images/hanh-phuc-bi-danh-cap.jpg" alt=""></a>
                                </div>
                                <div class="movie-content">
                                    <div class="top">
                                        <h5 class="title"><a href="movie-details.html">Hạnh Phúc Bị Đánh Cắp</a></h5>
                                        <span class="date">2021</span>
                                    </div>
                                    <div class="bottom">
                                        <ul>
                                            <li><span class="quality">4k</span></li>
                                            <li>
                                                <span class="duration"><i class="far fa-clock"></i> 128 min</span>
                                                <span class="rating"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="movie-item mb-50">
                                <div class="movie-poster">
                                    <a href="movie-details.html"><img src="img/images/nu-hoang.jpg" alt=""></a>
                                </div>
                                <div class="movie-content">
                                    <div class="top">
                                        <h5 class="title"><a href="movie-details.html">Nữ Hoàng Ayodhaya</a></h5>
                                        <span class="date">2021</span>
                                    </div>
                                    <div class="bottom">
                                        <ul>
                                            <li><span class="quality">hd</span></li>
                                            <li>
                                                <span class="duration"><i class="far fa-clock"></i> 128 min</span>
                                                <span class="rating"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="movie-item mb-50">
                                <div class="movie-poster">
                                    <a href="movie-details.html"><img src="img/images/Yêu_không_kiểm_soát.jpg" alt=""></a>
                                </div>
                                <div class="movie-content">
                                    <div class="top">
                                        <h5 class="title"><a href="movie-details.html">Yêu Không Kiểm Soát</a></h5>
                                        <span class="date">2021</span>
                                    </div>
                                    <div class="bottom">
                                        <ul>
                                            <li><span class="quality">hd</span></li>
                                            <li>
                                                <span class="duration"><i class="far fa-clock"></i> 128 min</span>
                                                <span class="rating"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- tv-series-area-end -->

            <!-- newsletter-area -->
            <section class="newsletter-area newsletter-bg" data-background="img/bg/newsletter_bg.jpg">
                <div class="container">
                    <div class="newsletter-inner-wrap">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="newsletter-content">
                                    <h4>Trial Start First 30 Days.</h4>
                                    <p>Enter your email to create or restart your membership.</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <form action="#" class="newsletter-form">
                                    <input type="email" required placeholder="Enter your email">
                                    <button class="btn">get started</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- newsletter-area-end -->

        </main>
        <!-- main-area-end -->

		<!-- JS here -->
        <script src="js/vendor/jquery-3.6.0.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/isotope.pkgd.min.js"></script>
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.odometer.min.js"></script>
        <script src="js/jquery.appear.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/ajax-form.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/aos.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
