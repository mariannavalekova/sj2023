<!DOCTYPE html>
<html lang="en">
<?php
include_once "functions.php";
use ukf\Functions;
$obj = new Functions();
$c = $obj->getOwlCar();

?>
<?php include_once "parts/head.php" ?>

<body>
<!-- ***** Header Area Start ***** -->
    <?php include_once "parts/header.php" ?>
<!-- ***** Header Area End ***** -->


<!-- ***** Main Banner Area Start ***** -->

<div class="main-banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="header-text">
                    <h2>Enter a world of <em>Photos</em> &amp; Amazing <em>Awards</em></h2>
                    <p>SnapX Photography is a professional website template with 5 different HTML pages for maximum
                        customizations. It is free for commercial usage. This Bootstrap v5.1.3 CSS layout is provided by
                        TemplateMo Free CSS Templates.</p>
                    <div class="buttons">
                        <div class="big-border-button">
                            <a href="contests.php">Explore SnapX Contest</a>
                        </div>
                        <div class="icon-button">
                            <a href="https://youtube.com/templatemo" target="_blank"><i class="fa fa-play"></i> Watch
                                Our Video Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** Main Banner Area End ***** -->

<section class="featured-items" id="featured-items">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="owl-features owl-carousel" style="position: relative; z-index: 5;">
                    <?php echo $obj->printOwlC();?>
                </div>
            </div>
        </div>
    </div>
    <!--<?php var_dump($c);?>-->
</section>

<section class="popular-categories">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-heading">
                    <h6>Our Categories</h6>
                    <h4>Check Out <em>Popular</em> Contest <em>Categories</em></h4>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="main-button">
                    <a href="categories.php">Discover All Categories</a>
                </div>
            </div>
            <?php echo $obj->printCategory();?>
        </div>
    </div>
</section>

<section class="closed-contests">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading text-center">
                    <h6>Closed Photography Contests</h6>
                    <h4><em>Previous Contests</em> With Handpicked <em>Winners</em></h4>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="owl-features owl-carousel" style="position: relative; z-index: 5;">
                    <div class="item">
                        <div class="closed-item">
                            <div class="thumb">
                                <img src="assets/images/closed-01.jpg" alt="">
                                <span class="winner"><em>Winner:</em> Anthony Soft</span>
                                <span class="price"><em>Award :</em> $1,600</span>
                            </div>
                            <div class="down-content">
                                <div class="row">
                                    <div class="col-7">
                                        <h4>88 Participants <br><span>Number Of Artists</span></h4>
                                    </div>
                                    <div class="col-5">
                                        <h4 class="pics">320 Pictures <br><span>Submited Pics</span></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="closed-item">
                            <div class="thumb">
                                <img src="assets/images/closed-02.jpg" alt="">
                                <span class="winner"><em>Winner:</em> Anthony Soft</span>
                                <span class="price"><em>Award :</em> $4,200</span>
                            </div>
                            <div class="down-content">
                                <div class="row">
                                    <div class="col-7">
                                        <h4>96 Participants <br><span>Number Of Artists</span></h4>
                                    </div>
                                    <div class="col-5">
                                        <h4 class="pics">410 Pictures <br><span>Submited Pics</span></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="closed-item">
                            <div class="thumb">
                                <img src="assets/images/closed-03.jpg" alt="">
                                <span class="winner"><em>Winner:</em> Anthony Soft</span>
                                <span class="price"><em>Award :</em> $3,200</span>
                            </div>
                            <div class="down-content">
                                <div class="row">
                                    <div class="col-7">
                                        <h4>74 Participants <br><span>Number Of Artists</span></h4>
                                    </div>
                                    <div class="col-5">
                                        <h4 class="pics">284 Pictures <br><span>Submited Pics</span></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="border-button text-center">
                    <a href="contests.php">Browse Open Contests</a>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include_once "parts/footer.php"?>


<!-- Scripts -->
<!-- Bootstrap core JavaScript -->
<?php include_once "parts/scripts.php"?>

</body>
</html>