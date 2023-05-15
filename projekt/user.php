<!DOCTYPE html>
<html lang="en">
<?php
include_once "crud.php";

use ukf\crud\Crud;

$crud = new Crud();
//$userId = 1;
if (isset($_POST['submitpic'])) {
    $insert = $crud->insertPic($_POST['adress'], $_POST['contestid'], $_POST['userid']);
    if ($insert) {
        header('Location: user.php');
    } else {
        echo "Error";
    }
}
session_start();
$ebnema = $_SESSION['login']
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
                <h2>Hello user!</h2>
                <p>When you need Free CSS Templates, you just remember our website TemplateMo. We provide you best
                    quality website templates at absolutely free of charge. No hidden cost involved.</p>
            </div>
        </div>
    </div>
</div>
<?php //echo $_SESSION['login']?>


<a href="logout.php">Logout</a>

<section>

    <div class="contest-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="top-content">
                        <div class="row">
                            <div class="col-lg-4">
                                <h3 class="">Picture edit</h3>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="main-content ">
                        <h4 class="text-center">Add picture</h4>
                        <form method="post">
                            <!-- Name input -->
                            <div class="form-outline mb-4">
                                <input type="text" name="adress" class="form-control"/>
                                <label class="form-label" for="form4Example1">Adress</label>
                            </div>

                            <div class="form-outline mb-4">
                                <input type="number" name="contestid" class="form-control"/>
                                <label class="form-label" for="form4Example2">Contest id</label>
                            </div>

                            <div class="form-outline mb-4">
                                <input type="number" name="userid" class="form-control"/>
                                <label class="form-label" for="form4Example2">User id</label>
                            </div>

                            <!-- Submit button -->
                            <button type="submit" name="submitpic" class="btn btn-primary btn-block mb-4">Add</button>
                        </form>


                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="main-content ">
                        <h4 class="text-center">My pictures</h4>
                        <?php $crud->showPics($ebnema); ?>


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

