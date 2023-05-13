<?php
include_once "auth.php";

use ukf\classes\Auth;
use ukf\Functions;
$auth = new Auth("localhost", 3306, "root", "", "snapx");

if(isset($_POST['login'])) {
    $login = $auth->login($_POST['username'], $_POST['password']);
    if($login==2) {
        session_start();
        $_SESSION['login'] = true;
//        $_SESSION['id'] = $login;
        header('Location: admin.php');
    }
    else {
        if ($login!= -1){
            session_start();
            $_SESSION['login'] = true;
//            $_SESSION['id'] = $login;
            header('Location: user.php');
        }
        else{echo "<br><br><br><br><br><br><br><br>Incorrect login <br>";}

    }
} else {

    echo "<br><br><br><br><br><br><br><br>daco si posrala";
}
?>
    <!DOCTYPE html>
    <html lang="en">
    <?php
    include_once "functions.php";

    $obj = new Functions();

    ?>

    <?php include_once "parts/head.php" ?>

    <body >
    <!--style="background-image: url('assets/images/heading-bg.jpg')"-->
    <!-- ***** Header Area Start ***** -->
    <?php include_once "parts/header.php" ?>
    <!-- ***** Header Area End ***** -->

    <br><br><br><br>
    <section >

        <div class="contest-details">
            <div class="container col-lg-6">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="top-content">
                            <div class="row">
                                <div class="col-lg-4">
                                    <h3 class="">Login</h3>

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="main-content ">
                            <form class="col-lg-12" method = "POST">
                                <!-- Name input -->
                                <div class="form-outline mb-4 ">
                                    <label class="form-label" for="form4Example1">Name</label><br>
                                    <input  type="text" name="username" value="" placeholder="Username" />

                                </div>

                                <!-- Email input -->
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form4Example2">Password</label><br>
                                    <input type="password" name="password" value="" placeholder="Password"/>

                                </div>

                                <!-- Submit button -->
                                <button type="submit" name ="login" class="btn btn-primary btn-block mb-4">Login</button>
                                sign in
                            </form>



                        </div>
                    </div>

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
<?php





