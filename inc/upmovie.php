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

                            <?php
                                                $tblTable = "danhmuc";
                                                $data = $db->showlist($tblTable);
                                                foreach ($data as $dt) {
                                                  ?>
                                                     <div class="movie-item mb-50">
                                    <div class="movie-poster">
                                        <a href="movie-details.html"><img src=<?php echo $row_upmovie["img_phim"] ?>></a>
                                    </div>
                                    <div class="movie-content">
                                        <div class="top">
                                            <h5 class="title"><a href="movie-details.html"><?php echo $row_upmovie["title_phim"] ?> </a></h5>
                                            <span class="date">2024</span>
                                        </div>
                                        <div class="bottom">
                                            <ul>
                                                <li><span class="quality">HD</span></li>
                                                <li>
                                                    <span class="duration"><i class="far fa-clock"></i> 45 min</span>
                                                    <span class="rating"><i class="fas fa-thumbs-up"></i> 4.0</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                           <?php
      }
      ?>
                           
                    
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- up-coming-movie-area-end -->