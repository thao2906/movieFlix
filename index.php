<?php
    require_once("inc/db_connection.php");
    $db = new database;
    $db -> connect();
    if(isset($_GET['controller'])){
        $controller = $_GET['controller'];
    }
    else {
        $controller = "";
    }
?>

        <?php
        include "./inc/header.php";
        include "./inc/slider.php";
        include "./inc/newmovie.php";
        include "./inc/gallery.php";
        include "./inc/upmovie.php";
        include "./inc/toprated.php";

      
        ?>
     
        <main>


             
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

        <?php include "./inc/footer.php"; ?>

	
   