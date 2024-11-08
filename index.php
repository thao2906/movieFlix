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

        <?php include "./inc/header.php";?>

     
        <main>

            <!-- banner-area -->
            <section class="banner-area banner-bg" data-background="img/banner/banner_bg01.jpg">
                <div class="container custom-container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-8">
                            <div class="banner-content">
                                <h6 class="sub-title wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1.8s">Movflx</h6>
                                <h2 class="title wow fadeInUp" data-wow-delay=".4s" data-wow-duration="1.8s">Unlimited <span>Movie</span>, TVs Shows, & More.</h2>
                                <div class="banner-meta wow fadeInUp" data-wow-delay=".6s" data-wow-duration="1.8s">
                                    <ul>
                                        <li class="quality">
                                            <span>Pg 18</span>
                                            <span>hd</span>
                                        </li>
                                        <li class="category">
                                            <a href="#">Romance,</a>
                                            <a href="#">Drama</a>
                                        </li>
                                        <li class="release-time">
                                            <span><i class="far fa-calendar-alt"></i> 2021</span>
                                            <span><i class="far fa-clock"></i> 128 min</span>
                                        </li>
                                    </ul>
                                </div>
                                <a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="banner-btn btn popup-video wow fadeInUp" data-wow-delay=".8s" data-wow-duration="1.8s"><i class="fas fa-play"></i> Watch Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- banner-area-end -->
              <!-- up-coming-movie-area -->
              <section class="ucm-area ucm-bg2" data-background="img/bg/ucm_bg02.jpg">
                <div class="container">
                    <div class="row align-items-end mb-55">
                        <div class="col-lg-6">
                            <div class="section-title title-style-three text-center text-lg-left">
                                <span class="sub-title">ONLINE STREAMING</span>
                                <h2 class="title">New Release Movies</h2>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="ucm-nav-wrap">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" id="tvShow-tab" data-toggle="tab" href="#tvShow" role="tab" aria-controls="tvShow" aria-selected="true">TV Shows</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="movies-tab" data-toggle="tab" href="#movies" role="tab" aria-controls="movies" aria-selected="false">Movies</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="anime-tab" data-toggle="tab" href="#anime" role="tab" aria-controls="anime" aria-selected="false">Anime</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="tvShow" role="tabpanel" aria-labelledby="tvShow-tab">
                            <div class="ucm-active-two owl-carousel">
                                <div class="movie-item movie-item-two mb-30">
                                    <div class="movie-poster">
                                        <a href="movie-details.html"><img src="img/poster/s_ucm_poster01.jpg" alt=""></a>
                                    </div>
                                    <div class="movie-content">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <h5 class="title"><a href="movie-details.html">Message in a Bottle</a></h5>
                                        <span class="rel">Adventure</span>
                                        <div class="movie-content-bottom">
                                            <ul>
                                                <li class="tag">
                                                    <a href="#">HD</a>
                                                    <a href="#">English</a>
                                                </li>
                                                <li>
                                                    <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="movie-item movie-item-two mb-30">
                                    <div class="movie-poster">
                                        <a href="movie-details.html"><img src="img/poster/s_ucm_poster02.jpg" alt=""></a>
                                    </div>
                                    <div class="movie-content">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <h5 class="title"><a href="movie-details.html">The Parkar Legend</a></h5>
                                        <span class="rel">Adventure</span>
                                        <div class="movie-content-bottom">
                                            <ul>
                                                <li class="tag">
                                                    <a href="#">HD</a>
                                                    <a href="#">English</a>
                                                </li>
                                                <li>
                                                    <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="movie-item movie-item-two mb-30">
                                    <div class="movie-poster">
                                        <a href="movie-details.html"><img src="img/poster/s_ucm_poster03.jpg" alt=""></a>
                                    </div>
                                    <div class="movie-content">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <h5 class="title"><a href="movie-details.html">The Tonoy 88 Bottle</a></h5>
                                        <span class="rel">Adventure</span>
                                        <div class="movie-content-bottom">
                                            <ul>
                                                <li class="tag">
                                                    <a href="#">HD</a>
                                                    <a href="#">English</a>
                                                </li>
                                                <li>
                                                    <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="movie-item movie-item-two mb-30">
                                    <div class="movie-poster">
                                        <a href="movie-details.html"><img src="img/poster/s_ucm_poster04.jpg" alt=""></a>
                                    </div>
                                    <div class="movie-content">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <h5 class="title"><a href="movie-details.html">The Ackle Bottle</a></h5>
                                        <span class="rel">Adventure</span>
                                        <div class="movie-content-bottom">
                                            <ul>
                                                <li class="tag">
                                                    <a href="#">HD</a>
                                                    <a href="#">English</a>
                                                </li>
                                                <li>
                                                    <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="movie-item movie-item-two mb-30">
                                    <div class="movie-poster">
                                        <a href="movie-details.html"><img src="img/poster/s_ucm_poster05.jpg" alt=""></a>
                                    </div>
                                    <div class="movie-content">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <h5 class="title"><a href="movie-details.html">Message in a Bottle</a></h5>
                                        <span class="rel">Adventure</span>
                                        <div class="movie-content-bottom">
                                            <ul>
                                                <li class="tag">
                                                    <a href="#">HD</a>
                                                    <a href="#">English</a>
                                                </li>
                                                <li>
                                                    <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="movie-item movie-item-two mb-30">
                                    <div class="movie-poster">
                                        <a href="movie-details.html"><img src="img/poster/s_ucm_poster06.jpg" alt=""></a>
                                    </div>
                                    <div class="movie-content">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <h5 class="title"><a href="movie-details.html">The Dog Woof</a></h5>
                                        <span class="rel">Adventure</span>
                                        <div class="movie-content-bottom">
                                            <ul>
                                                <li class="tag">
                                                    <a href="#">HD</a>
                                                    <a href="#">English</a>
                                                </li>
                                                <li>
                                                    <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="movies" role="tabpanel" aria-labelledby="movies-tab">
                            <div class="ucm-active-two owl-carousel">
                                <div class="movie-item movie-item-two mb-30">
                                    <div class="movie-poster">
                                        <a href="movie-details.html"><img src="img/poster/s_ucm_poster06.jpg" alt=""></a>
                                    </div>
                                    <div class="movie-content">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <h5 class="title"><a href="movie-details.html">Message in a Bottle</a></h5>
                                        <span class="rel">Adventure</span>
                                        <div class="movie-content-bottom">
                                            <ul>
                                                <li class="tag">
                                                    <a href="#">HD</a>
                                                    <a href="#">English</a>
                                                </li>
                                                <li>
                                                    <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="movie-item movie-item-two mb-30">
                                    <div class="movie-poster">
                                        <a href="movie-details.html"><img src="img/poster/s_ucm_poster07.jpg" alt=""></a>
                                    </div>
                                    <div class="movie-content">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <h5 class="title"><a href="movie-details.html">The Parkar Legend</a></h5>
                                        <span class="rel">Adventure</span>
                                        <div class="movie-content-bottom">
                                            <ul>
                                                <li class="tag">
                                                    <a href="#">HD</a>
                                                    <a href="#">English</a>
                                                </li>
                                                <li>
                                                    <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="movie-item movie-item-two mb-30">
                                    <div class="movie-poster">
                                        <a href="movie-details.html"><img src="img/poster/s_ucm_poster08.jpg" alt=""></a>
                                    </div>
                                    <div class="movie-content">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <h5 class="title"><a href="movie-details.html">The Tonoy 88 Bottle</a></h5>
                                        <span class="rel">Adventure</span>
                                        <div class="movie-content-bottom">
                                            <ul>
                                                <li class="tag">
                                                    <a href="#">HD</a>
                                                    <a href="#">English</a>
                                                </li>
                                                <li>
                                                    <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="movie-item movie-item-two mb-30">
                                    <div class="movie-poster">
                                        <a href="movie-details.html"><img src="img/poster/s_ucm_poster09.jpg" alt=""></a>
                                    </div>
                                    <div class="movie-content">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <h5 class="title"><a href="movie-details.html">The Ackle Bottle</a></h5>
                                        <span class="rel">Adventure</span>
                                        <div class="movie-content-bottom">
                                            <ul>
                                                <li class="tag">
                                                    <a href="#">HD</a>
                                                    <a href="#">English</a>
                                                </li>
                                                <li>
                                                    <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="movie-item movie-item-two mb-30">
                                    <div class="movie-poster">
                                        <a href="movie-details.html"><img src="img/poster/s_ucm_poster02.jpg" alt=""></a>
                                    </div>
                                    <div class="movie-content">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <h5 class="title"><a href="movie-details.html">Message in a Bottle</a></h5>
                                        <span class="rel">Adventure</span>
                                        <div class="movie-content-bottom">
                                            <ul>
                                                <li class="tag">
                                                    <a href="#">HD</a>
                                                    <a href="#">English</a>
                                                </li>
                                                <li>
                                                    <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="movie-item movie-item-two mb-30">
                                    <div class="movie-poster">
                                        <a href="movie-details.html"><img src="img/poster/s_ucm_poster01.jpg" alt=""></a>
                                    </div>
                                    <div class="movie-content">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <h5 class="title"><a href="movie-details.html">The Dog Woof</a></h5>
                                        <span class="rel">Adventure</span>
                                        <div class="movie-content-bottom">
                                            <ul>
                                                <li class="tag">
                                                    <a href="#">HD</a>
                                                    <a href="#">English</a>
                                                </li>
                                                <li>
                                                    <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="anime" role="tabpanel" aria-labelledby="anime-tab">
                            <div class="ucm-active-two owl-carousel">
                                <div class="movie-item movie-item-two mb-30">
                                    <div class="movie-poster">
                                        <a href="movie-details.html"><img src="img/poster/s_ucm_poster01.jpg" alt=""></a>
                                    </div>
                                    <div class="movie-content">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <h5 class="title"><a href="movie-details.html">Message in a Bottle</a></h5>
                                        <span class="rel">Adventure</span>
                                        <div class="movie-content-bottom">
                                            <ul>
                                                <li class="tag">
                                                    <a href="#">HD</a>
                                                    <a href="#">English</a>
                                                </li>
                                                <li>
                                                    <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="movie-item movie-item-two mb-30">
                                    <div class="movie-poster">
                                        <a href="movie-details.html"><img src="img/poster/s_ucm_poster02.jpg" alt=""></a>
                                    </div>
                                    <div class="movie-content">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <h5 class="title"><a href="movie-details.html">The Parkar Legend</a></h5>
                                        <span class="rel">Adventure</span>
                                        <div class="movie-content-bottom">
                                            <ul>
                                                <li class="tag">
                                                    <a href="#">HD</a>
                                                    <a href="#">English</a>
                                                </li>
                                                <li>
                                                    <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="movie-item movie-item-two mb-30">
                                    <div class="movie-poster">
                                        <a href="movie-details.html"><img src="img/poster/s_ucm_poster03.jpg" alt=""></a>
                                    </div>
                                    <div class="movie-content">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <h5 class="title"><a href="movie-details.html">The Tonoy 88 Bottle</a></h5>
                                        <span class="rel">Adventure</span>
                                        <div class="movie-content-bottom">
                                            <ul>
                                                <li class="tag">
                                                    <a href="#">HD</a>
                                                    <a href="#">English</a>
                                                </li>
                                                <li>
                                                    <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="movie-item movie-item-two mb-30">
                                    <div class="movie-poster">
                                        <a href="movie-details.html"><img src="img/poster/s_ucm_poster04.jpg" alt=""></a>
                                    </div>
                                    <div class="movie-content">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <h5 class="title"><a href="movie-details.html">The Ackle Bottle</a></h5>
                                        <span class="rel">Adventure</span>
                                        <div class="movie-content-bottom">
                                            <ul>
                                                <li class="tag">
                                                    <a href="#">HD</a>
                                                    <a href="#">English</a>
                                                </li>
                                                <li>
                                                    <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="movie-item movie-item-two mb-30">
                                    <div class="movie-poster">
                                        <a href="movie-details.html"><img src="img/poster/s_ucm_poster05.jpg" alt=""></a>
                                    </div>
                                    <div class="movie-content">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <h5 class="title"><a href="movie-details.html">Message in a Bottle</a></h5>
                                        <span class="rel">Adventure</span>
                                        <div class="movie-content-bottom">
                                            <ul>
                                                <li class="tag">
                                                    <a href="#">HD</a>
                                                    <a href="#">English</a>
                                                </li>
                                                <li>
                                                    <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="movie-item movie-item-two mb-30">
                                    <div class="movie-poster">
                                        <a href="movie-details.html"><img src="img/poster/s_ucm_poster06.jpg" alt=""></a>
                                    </div>
                                    <div class="movie-content">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <h5 class="title"><a href="movie-details.html">The Dog Woof</a></h5>
                                        <span class="rel">Adventure</span>
                                        <div class="movie-content-bottom">
                                            <ul>
                                                <li class="tag">
                                                    <a href="#">HD</a>
                                                    <a href="#">English</a>
                                                </li>
                                                <li>
                                                    <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
              <!-- new-coming-movie-area -->
            <section class="ucm-area ucm-bg2" data-background="img/bg/ucm_bg02.jpg">
                <div class="container">
                    <div class="row align-items-end mb-55">
                        <div class="col-lg-6">
                            <div class="section-title title-style-three text-center text-lg-left">
                                <span class="sub-title">ONLINE STREAMING</span>
                                <h2 class="title">New Release Movies</h2>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="ucm-nav-wrap">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" id="tvShow-tab" data-toggle="tab" href="#tvShow" role="tab" aria-controls="tvShow" aria-selected="true">TV Shows</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="movies-tab" data-toggle="tab" href="#movies" role="tab" aria-controls="movies" aria-selected="false">Movies</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="anime-tab" data-toggle="tab" href="#anime" role="tab" aria-controls="anime" aria-selected="false">Anime</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="tvShow" role="tabpanel" aria-labelledby="tvShow-tab">
                            <div class="ucm-active-two owl-carousel">
                                <div class="movie-item movie-item-two mb-30">
                                    <div class="movie-poster">
                                        <a href="movie-details.html"><img src="img/poster/s_ucm_poster01.jpg" alt=""></a>
                                    </div>
                                    <div class="movie-content">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <h5 class="title"><a href="movie-details.html">Message in a Bottle</a></h5>
                                        <span class="rel">Adventure</span>
                                        <div class="movie-content-bottom">
                                            <ul>
                                                <li class="tag">
                                                    <a href="#">HD</a>
                                                    <a href="#">English</a>
                                                </li>
                                                <li>
                                                    <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="movie-item movie-item-two mb-30">
                                    <div class="movie-poster">
                                        <a href="movie-details.html"><img src="img/poster/s_ucm_poster02.jpg" alt=""></a>
                                    </div>
                                    <div class="movie-content">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <h5 class="title"><a href="movie-details.html">The Parkar Legend</a></h5>
                                        <span class="rel">Adventure</span>
                                        <div class="movie-content-bottom">
                                            <ul>
                                                <li class="tag">
                                                    <a href="#">HD</a>
                                                    <a href="#">English</a>
                                                </li>
                                                <li>
                                                    <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="movie-item movie-item-two mb-30">
                                    <div class="movie-poster">
                                        <a href="movie-details.html"><img src="img/poster/s_ucm_poster03.jpg" alt=""></a>
                                    </div>
                                    <div class="movie-content">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <h5 class="title"><a href="movie-details.html">The Tonoy 88 Bottle</a></h5>
                                        <span class="rel">Adventure</span>
                                        <div class="movie-content-bottom">
                                            <ul>
                                                <li class="tag">
                                                    <a href="#">HD</a>
                                                    <a href="#">English</a>
                                                </li>
                                                <li>
                                                    <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="movie-item movie-item-two mb-30">
                                    <div class="movie-poster">
                                        <a href="movie-details.html"><img src="img/poster/s_ucm_poster04.jpg" alt=""></a>
                                    </div>
                                    <div class="movie-content">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <h5 class="title"><a href="movie-details.html">The Ackle Bottle</a></h5>
                                        <span class="rel">Adventure</span>
                                        <div class="movie-content-bottom">
                                            <ul>
                                                <li class="tag">
                                                    <a href="#">HD</a>
                                                    <a href="#">English</a>
                                                </li>
                                                <li>
                                                    <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="movie-item movie-item-two mb-30">
                                    <div class="movie-poster">
                                        <a href="movie-details.html"><img src="img/poster/s_ucm_poster05.jpg" alt=""></a>
                                    </div>
                                    <div class="movie-content">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <h5 class="title"><a href="movie-details.html">Message in a Bottle</a></h5>
                                        <span class="rel">Adventure</span>
                                        <div class="movie-content-bottom">
                                            <ul>
                                                <li class="tag">
                                                    <a href="#">HD</a>
                                                    <a href="#">English</a>
                                                </li>
                                                <li>
                                                    <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="movie-item movie-item-two mb-30">
                                    <div class="movie-poster">
                                        <a href="movie-details.html"><img src="img/poster/s_ucm_poster06.jpg" alt=""></a>
                                    </div>
                                    <div class="movie-content">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <h5 class="title"><a href="movie-details.html">The Dog Woof</a></h5>
                                        <span class="rel">Adventure</span>
                                        <div class="movie-content-bottom">
                                            <ul>
                                                <li class="tag">
                                                    <a href="#">HD</a>
                                                    <a href="#">English</a>
                                                </li>
                                                <li>
                                                    <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="movies" role="tabpanel" aria-labelledby="movies-tab">
                            <div class="ucm-active-two owl-carousel">
                                <div class="movie-item movie-item-two mb-30">
                                    <div class="movie-poster">
                                        <a href="movie-details.html"><img src="img/poster/s_ucm_poster06.jpg" alt=""></a>
                                    </div>
                                    <div class="movie-content">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <h5 class="title"><a href="movie-details.html">Message in a Bottle</a></h5>
                                        <span class="rel">Adventure</span>
                                        <div class="movie-content-bottom">
                                            <ul>
                                                <li class="tag">
                                                    <a href="#">HD</a>
                                                    <a href="#">English</a>
                                                </li>
                                                <li>
                                                    <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="movie-item movie-item-two mb-30">
                                    <div class="movie-poster">
                                        <a href="movie-details.html"><img src="img/poster/s_ucm_poster07.jpg" alt=""></a>
                                    </div>
                                    <div class="movie-content">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <h5 class="title"><a href="movie-details.html">The Parkar Legend</a></h5>
                                        <span class="rel">Adventure</span>
                                        <div class="movie-content-bottom">
                                            <ul>
                                                <li class="tag">
                                                    <a href="#">HD</a>
                                                    <a href="#">English</a>
                                                </li>
                                                <li>
                                                    <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="movie-item movie-item-two mb-30">
                                    <div class="movie-poster">
                                        <a href="movie-details.html"><img src="img/poster/s_ucm_poster08.jpg" alt=""></a>
                                    </div>
                                    <div class="movie-content">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <h5 class="title"><a href="movie-details.html">The Tonoy 88 Bottle</a></h5>
                                        <span class="rel">Adventure</span>
                                        <div class="movie-content-bottom">
                                            <ul>
                                                <li class="tag">
                                                    <a href="#">HD</a>
                                                    <a href="#">English</a>
                                                </li>
                                                <li>
                                                    <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="movie-item movie-item-two mb-30">
                                    <div class="movie-poster">
                                        <a href="movie-details.html"><img src="img/poster/s_ucm_poster09.jpg" alt=""></a>
                                    </div>
                                    <div class="movie-content">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <h5 class="title"><a href="movie-details.html">The Ackle Bottle</a></h5>
                                        <span class="rel">Adventure</span>
                                        <div class="movie-content-bottom">
                                            <ul>
                                                <li class="tag">
                                                    <a href="#">HD</a>
                                                    <a href="#">English</a>
                                                </li>
                                                <li>
                                                    <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="movie-item movie-item-two mb-30">
                                    <div class="movie-poster">
                                        <a href="movie-details.html"><img src="img/poster/s_ucm_poster02.jpg" alt=""></a>
                                    </div>
                                    <div class="movie-content">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <h5 class="title"><a href="movie-details.html">Message in a Bottle</a></h5>
                                        <span class="rel">Adventure</span>
                                        <div class="movie-content-bottom">
                                            <ul>
                                                <li class="tag">
                                                    <a href="#">HD</a>
                                                    <a href="#">English</a>
                                                </li>
                                                <li>
                                                    <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="movie-item movie-item-two mb-30">
                                    <div class="movie-poster">
                                        <a href="movie-details.html"><img src="img/poster/s_ucm_poster01.jpg" alt=""></a>
                                    </div>
                                    <div class="movie-content">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <h5 class="title"><a href="movie-details.html">The Dog Woof</a></h5>
                                        <span class="rel">Adventure</span>
                                        <div class="movie-content-bottom">
                                            <ul>
                                                <li class="tag">
                                                    <a href="#">HD</a>
                                                    <a href="#">English</a>
                                                </li>
                                                <li>
                                                    <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="anime" role="tabpanel" aria-labelledby="anime-tab">
                            <div class="ucm-active-two owl-carousel">
                                <div class="movie-item movie-item-two mb-30">
                                    <div class="movie-poster">
                                        <a href="movie-details.html"><img src="img/poster/s_ucm_poster01.jpg" alt=""></a>
                                    </div>
                                    <div class="movie-content">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <h5 class="title"><a href="movie-details.html">Message in a Bottle</a></h5>
                                        <span class="rel">Adventure</span>
                                        <div class="movie-content-bottom">
                                            <ul>
                                                <li class="tag">
                                                    <a href="#">HD</a>
                                                    <a href="#">English</a>
                                                </li>
                                                <li>
                                                    <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="movie-item movie-item-two mb-30">
                                    <div class="movie-poster">
                                        <a href="movie-details.html"><img src="img/poster/s_ucm_poster02.jpg" alt=""></a>
                                    </div>
                                    <div class="movie-content">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <h5 class="title"><a href="movie-details.html">The Parkar Legend</a></h5>
                                        <span class="rel">Adventure</span>
                                        <div class="movie-content-bottom">
                                            <ul>
                                                <li class="tag">
                                                    <a href="#">HD</a>
                                                    <a href="#">English</a>
                                                </li>
                                                <li>
                                                    <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="movie-item movie-item-two mb-30">
                                    <div class="movie-poster">
                                        <a href="movie-details.html"><img src="img/poster/s_ucm_poster03.jpg" alt=""></a>
                                    </div>
                                    <div class="movie-content">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <h5 class="title"><a href="movie-details.html">The Tonoy 88 Bottle</a></h5>
                                        <span class="rel">Adventure</span>
                                        <div class="movie-content-bottom">
                                            <ul>
                                                <li class="tag">
                                                    <a href="#">HD</a>
                                                    <a href="#">English</a>
                                                </li>
                                                <li>
                                                    <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="movie-item movie-item-two mb-30">
                                    <div class="movie-poster">
                                        <a href="movie-details.html"><img src="img/poster/s_ucm_poster04.jpg" alt=""></a>
                                    </div>
                                    <div class="movie-content">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <h5 class="title"><a href="movie-details.html">The Ackle Bottle</a></h5>
                                        <span class="rel">Adventure</span>
                                        <div class="movie-content-bottom">
                                            <ul>
                                                <li class="tag">
                                                    <a href="#">HD</a>
                                                    <a href="#">English</a>
                                                </li>
                                                <li>
                                                    <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="movie-item movie-item-two mb-30">
                                    <div class="movie-poster">
                                        <a href="movie-details.html"><img src="img/poster/s_ucm_poster05.jpg" alt=""></a>
                                    </div>
                                    <div class="movie-content">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <h5 class="title"><a href="movie-details.html">Message in a Bottle</a></h5>
                                        <span class="rel">Adventure</span>
                                        <div class="movie-content-bottom">
                                            <ul>
                                                <li class="tag">
                                                    <a href="#">HD</a>
                                                    <a href="#">English</a>
                                                </li>
                                                <li>
                                                    <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="movie-item movie-item-two mb-30">
                                    <div class="movie-poster">
                                        <a href="movie-details.html"><img src="img/poster/s_ucm_poster06.jpg" alt=""></a>
                                    </div>
                                    <div class="movie-content">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <h5 class="title"><a href="movie-details.html">The Dog Woof</a></h5>
                                        <span class="rel">Adventure</span>
                                        <div class="movie-content-bottom">
                                            <ul>
                                                <li class="tag">
                                                    <a href="#">HD</a>
                                                    <a href="#">English</a>
                                                </li>
                                                <li>
                                                    <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- gallery-area -->
            <div class="gallery-area position-relative">
                <div class="gallery-bg"></div>
                <div class="container-fluid p-0 fix">
                    <div class="row gallery-active">
                        <div class="col-12">
                            <div class="gallery-item">
                                <img src="img/images/gallery_01.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="gallery-item">
                                <img src="img/images/gallery_02.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="gallery-item">
                                <img src="img/images/gallery_03.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="gallery-item">
                                <img src="img/images/gallery_04.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-nav"></div>
            </div>
            <!-- gallery-area-end -->

            <!-- up-coming-movie-area -->
            <section class="ucm-area ucm-bg" data-background="img/bg/ucm_bg.jpg">
                <div class="ucm-bg-shape" data-background="img/bg/ucm_bg_shape.png"></div>
                <div class="container">
                    <div class="row align-items-end mb-55">
                        <div class="col-lg-6">
                            <div class="section-title text-center text-lg-left">
                                <span class="sub-title">ONLINE STREAMING</span>
                                <h2 class="title">Upcoming Movies</h2>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="ucm-nav-wrap">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" id="tvShow-tab" data-toggle="tab" href="#tvShow" role="tab" aria-controls="tvShow" aria-selected="true">TV Shows</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="movies-tab" data-toggle="tab" href="#movies" role="tab" aria-controls="movies" aria-selected="false">Movies</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="anime-tab" data-toggle="tab" href="#anime" role="tab" aria-controls="anime" aria-selected="false">Anime</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="tvShow" role="tabpanel" aria-labelledby="tvShow-tab">
                            <div class="ucm-active owl-carousel">
                                <div class="movie-item mb-50">
                                    <div class="movie-poster">
                                        <a href="movie-details.html"><img src="img/poster/xuan-hoa-yem.jpg" alt=""></a>
                                    </div>
                                    <div class="movie-content">
                                        <div class="top">
                                            <h5 class="title"><a href="movie-details.html">Xuân Hoa Yếm</a></h5>
                                            <span class="date">2024</span>
                                        </div>
                                        <div class="bottom">
                                            <ul>
                                                <li><span class="quality">hd</span></li>
                                                <li>
                                                    <span class="duration"><i class="far fa-clock"></i> 45 min</span>
                                                    <span class="rating"><i class="fas fa-thumbs-up"></i> 4.0</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="movie-item mb-50">
                                    <div class="movie-poster">
                                        <a href="movie-details.html"><img src="img/poster/chu-cho-biet-tuot.jpg" alt=""></a>
                                    </div>
                                    <div class="movie-content">
                                        <div class="top">
                                            <h5 class="title"><a href="movie-details.html">Chú Chó Biết Tuốt</a></h5>
                                            <span class="date">2024</span>
                                        </div>
                                        <div class="bottom">
                                            <ul>
                                                <li><span class="quality">4k</span></li>
                                                <li>
                                                    <span class="duration"><i class="far fa-clock"></i> 60 min</span>
                                                    <span class="rating"><i class="fas fa-thumbs-up"></i> 4.1</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="movie-item mb-50">
                                    <div class="movie-poster">
                                        <a href="movie-details.html"><img src="img/poster/dai-mong-quy-ly.jpg" alt=""></a>
                                    </div>
                                    <div class="movie-content">
                                        <div class="top">
                                            <h5 class="title"><a href="movie-details.html">Đại Mộng Quy Ly</a></h5>
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
                                <div class="movie-item mb-50">
                                    <div class="movie-poster">
                                        <a href="movie-details.html"><img src="img/poster/loi-noi-doi-cua-em-cung-de-nghe.jpg" alt=""></a>
                                    </div>
                                    <div class="movie-content">
                                        <div class="top">
                                            <h5 class="title"><a href="movie-details.html">Lời Nói Dối Của Em Cũng Dễ Nghe</a></h5>
                                            <span class="date">2021</span>
                                        </div>
                                        <div class="bottom">
                                            <ul>
                                                <li><span class="quality">8k</span></li>
                                                <li>
                                                    <span class="duration"><i class="far fa-clock"></i> 128 min</span>
                                                    <span class="rating"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="movie-item mb-50">
                                    <div class="movie-poster">
                                        <a href="movie-details.html"><img src="img/poster/ucm_poster05.jpg" alt=""></a>
                                    </div>
                                    <div class="movie-content">
                                        <div class="top">
                                            <h5 class="title"><a href="movie-details.html">The Cooking</a></h5>
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
                        <div class="tab-pane fade" id="movies" role="tabpanel" aria-labelledby="movies-tab">
                            <div class="ucm-active owl-carousel">
                                <div class="movie-item mb-50">
                                    <div class="movie-poster">
                                        <a href="movie-details.html"><img src="img/poster/ucm_poster05.jpg" alt=""></a>
                                    </div>
                                    <div class="movie-content">
                                        <div class="top">
                                            <h5 class="title"><a href="movie-details.html">The Cooking</a></h5>
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
                                <div class="movie-item mb-50">
                                    <div class="movie-poster">
                                        <a href="movie-details.html"><img src="img/poster/ucm_poster06.jpg" alt=""></a>
                                    </div>
                                    <div class="movie-content">
                                        <div class="top">
                                            <h5 class="title"><a href="movie-details.html">The Hikers</a></h5>
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
                                <div class="movie-item mb-50">
                                    <div class="movie-poster">
                                        <a href="movie-details.html"><img src="img/poster/ucm_poster07.jpg" alt=""></a>
                                    </div>
                                    <div class="movie-content">
                                        <div class="top">
                                            <h5 class="title"><a href="movie-details.html">Life Quotes</a></h5>
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
                                <div class="movie-item mb-50">
                                    <div class="movie-poster">
                                        <a href="movie-details.html"><img src="img/poster/ucm_poster08.jpg" alt=""></a>
                                    </div>
                                    <div class="movie-content">
                                        <div class="top">
                                            <h5 class="title"><a href="movie-details.html">The Beachball</a></h5>
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
                                <div class="movie-item mb-50">
                                    <div class="movie-poster">
                                        <a href="movie-details.html"><img src="img/poster/ucm_poster03.jpg" alt=""></a>
                                    </div>
                                    <div class="movie-content">
                                        <div class="top">
                                            <h5 class="title"><a href="movie-details.html">The Dog Woof</a></h5>
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
                        <div class="tab-pane fade" id="anime" role="tabpanel" aria-labelledby="anime-tab">
                            <div class="ucm-active owl-carousel">
                                <div class="movie-item mb-50">
                                    <div class="movie-poster">
                                        <a href="movie-details.html"><img src="img/poster/ucm_poster01.jpg" alt=""></a>
                                    </div>
                                    <div class="movie-content">
                                        <div class="top">
                                            <h5 class="title"><a href="movie-details.html">Women's Day</a></h5>
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
                                <div class="movie-item mb-50">
                                    <div class="movie-poster">
                                        <a href="movie-details.html"><img src="img/poster/ucm_poster02.jpg" alt=""></a>
                                    </div>
                                    <div class="movie-content">
                                        <div class="top">
                                            <h5 class="title"><a href="movie-details.html">The Perfect Match</a></h5>
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
                                <div class="movie-item mb-50">
                                    <div class="movie-poster">
                                        <a href="movie-details.html"><img src="img/poster/ucm_poster03.jpg" alt=""></a>
                                    </div>
                                    <div class="movie-content">
                                        <div class="top">
                                            <h5 class="title"><a href="movie-details.html">The Dog Woof</a></h5>
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
                                <div class="movie-item mb-50">
                                    <div class="movie-poster">
                                        <a href="movie-details.html"><img src="img/poster/ucm_poster04.jpg" alt=""></a>
                                    </div>
                                    <div class="movie-content">
                                        <div class="top">
                                            <h5 class="title"><a href="movie-details.html">The Easy Reach</a></h5>
                                            <span class="date">2021</span>
                                        </div>
                                        <div class="bottom">
                                            <ul>
                                                <li><span class="quality">8k</span></li>
                                                <li>
                                                    <span class="duration"><i class="far fa-clock"></i> 128 min</span>
                                                    <span class="rating"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="movie-item mb-50">
                                    <div class="movie-poster">
                                        <a href="movie-details.html"><img src="img/poster/ucm_poster05.jpg" alt=""></a>
                                    </div>
                                    <div class="movie-content">
                                        <div class="top">
                                            <h5 class="title"><a href="movie-details.html">The Cooking</a></h5>
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
                </div>
            </section>
            <!-- up-coming-movie-area-end -->

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


        <!-- footer-area -->
        <footer>
            <div class="footer-top-wrap">
                <div class="container">
                    <div class="footer-menu-wrap">
                        <div class="row align-items-center">
                            <div class="col-lg-3">
                                <div class="footer-logo">
                                    <a href="index.html"><img src="img/logo/logo.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <div class="footer-menu">
                                    <nav>
                                        <ul class="navigation">
                                            <li><a href="index.html">Home</a></li>
                                            <li><a href="index.html">Movie</a></li>
                                            <li><a href="index.html">Tv Show</a></li>
                                            <li><a href="index.html">Pages</a></li>
                                            <!-- <li><a href="pricing.html">Pricing</a></li> -->
                                        </ul>
                                        <div class="footer-search">
                                            <form action="#">
                                                <input type="text" placeholder="Find Favorite Movie">
                                                <button><i class="fas fa-search"></i></button>
                                            </form>
                                        </div>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer-quick-link-wrap">
                        <div class="row align-items-center">
                            <div class="col-md-7">
                                <div class="quick-link-list">
                                    <ul>
                                        <li><a href="#">FAQ</a></li>
                                        <li><a href="#">Help Center</a></li>
                                        <li><a href="#">Terms of Use</a></li>
                                        <li><a href="#">Privacy</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="footer-social">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="copyright-text">
                                <p>Copyright &copy; 2021. All Rights Reserved By <a href="index.html">FiveFlix</a></p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="payment-method-img text-center text-md-right">
                                <img src="img/images/card_img.png" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer-area-end -->





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
