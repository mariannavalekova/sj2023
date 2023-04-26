<?php
include_once "functions.php";
use ukf\Navigation;
$navobj = new Navigation();
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
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <?php $navobj->printNav($nav); ?>
                    </ul>
                    <div class="border-button">
                        <a id="modal_trigger" href="#modal" class="sign-in-up"><i class="fa fa-user"></i> Sign In/Up</a>
                    </div>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
    <?php print_r($nav);?>
</header>
