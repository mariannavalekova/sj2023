<!DOCTYPE html>
<html lang="en">
<?php
include_once "functions.php";

use ukf\Functions;

$obj = new Functions();

?>

<?php include_once "parts/head.php" ?>

<body>

<!-- ***** Header Area Start ***** -->
<?php include_once "parts/header.php" ?>
<!-- ***** Header Area End ***** -->

<div class="page-heading">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 header-text">
                <h2>Discover what's currently going on at <em>SnapX</em></h2>
                <p>When you need Free CSS Templates, you just remember our website TemplateMo. We provide you best
                    quality website templates at absolutely free of charge. No hidden cost involved.</p>
            </div>
        </div>
    </div>
</div>


<section class="contest-win">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading text-center">
                    <h6>Recently Added Contests by Users</h6>
                    <h4>Current <em>Contests</em> to Enter Now &amp; <em>Win</em></h4>
                </div>
            </div>

            <?php echo $obj->printContests(); ?>

        </div>
    </div>
</section>
<section class="photos-videos">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading text-center">
                    <h6>Photos &amp; Videos At SnapX</h6>
                    <h4>Our Featured <em>Photos &amp; Videos</em> At SnapX</h4>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="item">
                    <div class="thumb">
                        <img src="assets/images/photo-video-01.jpg" alt="">
                        <div class="top-content">
                            <h4>A Walk In Nature</h4>
                            <h6><i class="fa fa-eye"></i> 840 | <i class="fa fa-heart"></i> 160</h6>
                        </div>
                    </div>
                    <div class="down-content">
                        <div class="row">
                            <div class="col-7">
                                <h2>Ranked: 1st</h2>
                            </div>
                            <div class="col-5">
                                <h6>Category: Photos</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="item">
                    <div class="thumb">
                        <img src="assets/images/photo-video-02.jpg" alt="">
                        <div class="play-button">
                            <a href="http://youtube.com" target="_blank"><i class="fa fa-play"></i></a>
                        </div>
                        <div class="top-content">
                            <h4>Blue Mountain Hill</h4>
                            <h6><i class="fa fa-eye"></i> 1722 | <i class="fa fa-heart"></i> 320</h6>
                        </div>
                    </div>
                    <div class="down-content">
                        <div class="row">
                            <div class="col-7">
                                <h2>Ranked: 2nd</h2>
                            </div>
                            <div class="col-5">
                                <h6>Category: Videos</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="item">
                    <div class="thumb">
                        <img src="assets/images/photo-video-03.jpg" alt="">
                        <div class="top-content">
                            <h4>Underwater Turtle</h4>
                            <h6><i class="fa fa-eye"></i> 1436 | <i class="fa fa-heart"></i> 256</h6>
                        </div>
                    </div>
                    <div class="down-content">
                        <div class="row">
                            <div class="col-7">
                                <h2>Ranked: 3rd</h2>
                            </div>
                            <div class="col-5">
                                <h6>Category: Photos</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="item">
                    <div class="thumb">
                        <img src="assets/images/photo-video-04.jpg" alt="">
                        <div class="play-button">
                            <a href="http://youtube.com" target="_blank"><i class="fa fa-play"></i></a>
                        </div>
                        <div class="top-content">
                            <h4>Greeny Place</h4>
                            <h6><i class="fa fa-eye"></i> 1596 | <i class="fa fa-heart"></i> 512</h6>
                        </div>
                    </div>
                    <div class="down-content">
                        <div class="row">
                            <div class="col-7">
                                <h2>Ranked: 4th</h2>
                            </div>
                            <div class="col-5">
                                <h6>Category: Videos</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="item">
                    <div class="thumb">
                        <img src="assets/images/photo-video-05.jpg" alt="">
                        <div class="top-content">
                            <h4>Rocky Mountain</h4>
                            <h6><i class="fa fa-eye"></i> 1596 | <i class="fa fa-heart"></i> 768</h6>
                        </div>
                    </div>
                    <div class="down-content">
                        <div class="row">
                            <div class="col-7">
                                <h2>Ranked: 5th</h2>
                            </div>
                            <div class="col-5">
                                <h6>Category: Random</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include_once "parts/footer.php" ?>

<!-- Scripts -->
<!-- Bootstrap core JavaScript -->
<?php include_once "parts/scripts.php" ?>

</body>
</html>