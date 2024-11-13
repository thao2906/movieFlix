<!-- new-coming-movie-area -->
<section class="ucm-area ucm-bg2" data-background="img/bg/ucm_bg02.jpg">
    <div class="container">
        <div class="row align-items-end mb-55">
            <div class="col-lg-6">
                <div class="section-title title-style-three text-center text-lg-left">
                    <span class="sub-title">ONLINE STREAMING</span>
                    <h2 class="title">Phim Mới Cập Nhật</h2>
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
                    <?php
                    $tblTable = "movies";
                    $data = $db->showlist($tblTable); // Fetch data from the database

                    foreach ($data as $dt) {
                    ?>
                    <div class="movie-item movie-item-two mb-30">
                        <div class="movie-poster">
                            <a href="movie-details.php"><img src="<?php echo $dt['img_url']; ?>" alt="<?php echo $dt['title']; ?>"></a>
                        </div>
                        <div class="movie-content">
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h5 class="title">
                                <a href="movie-details.php"><?php echo $dt["title"]; ?></a>
                            </h5>
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
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>
