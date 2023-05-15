<?php
include_once "functions.php";
use ukf\Functions;
$navobj = new Functions();
$nav = $navobj->getNavData();
?>

<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <!--<a href="index.html.php" class="logo">-->
                    <a href="<?php echo $nav["home"]["path"]; ?>" class="logo">
                        <img src="assets/images/logo.png" alt="SnapX Photography Template">
                    </a>

                    <ul class="nav">
                        <?php $navobj->printNav($nav); ?>
                    </ul>

                </nav>
            </div>
        </div>
    </div>
   <!-- <?php print_r($nav);?>-->
</header>
