<!DOCTYPE html>
<html lang="en">
<?php
include_once "crud.php";
use ukf\crud\Crud;
$crud = new Crud();
if (isset($_POST['catAsubmit'])) {
    $insert = $crud->insertCat($_POST['title'], $_POST['url']);
    if ($insert) {
        header('Location: admin.php');
    } else {
        print_r("Error");
    }
}

if (isset($_POST['catEsubmit'])) {
    $update = $crud->updateCat($_POST['etitle'], $_POST['eurl'], $_POST['eicon']);
    if ($update) {
        header('Location: admin.php');
    } else {
        print_r("Error");
    }
}

if (isset($_POST['conAsubmit'])) {
    $update = $crud->insertCon($_POST['contest'], $_POST['award'], $_POST['object']);
    if ($update) {
        header('Location: admin.php');
    } else {
        print_r("Error");
    }
}

if (isset($_POST['conEsubmit'])) {
    $update = $crud->updateCon($_POST['econtest'], $_POST['wn'], $_POST['ws'],$_POST['wimg']);
    if ($update) {
        header('Location: admin.php');
    } else {
        print_r("Error");
    }
}
?>

<?php include_once "parts/head.php" ?>

<body>

<!-- ***** Header Area Start ***** -->
<?php //include_once "parts/header.php" ?>
<!-- ***** Header Area End ***** -->


<div class="page-heading">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 header-text">
                <h2>Hello admin!</h2>
                <p>When you need Free CSS Templates, you just remember our website TemplateMo. We provide you best quality website templates at absolutely free of charge. No hidden cost involved.</p>
            </div>
        </div>
    </div>
</div>



<section>

    <div class="contest-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="top-content">
                        <div class="row">
                            <div class="col-lg-4">
                                <h3 class="">Category</h3>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="main-content " class="col-lg-6">

                        <form method="post">
                            <!-- Title input -->
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form4Example1">Title</label>
                                <input type="text" name="title" class="form-control" />

                            </div>

                            <!-- Intro img input -->
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form4Example1">URL</label>
                                <input type="text" name="url" class="form-control" />

                            </div>

                            <!-- Submit button -->
                            <button type="submit"  name = "catAsubmit"class="btn btn-primary btn-block mb-4">Send</button>
                        </form>


                            <ul class="list-group" >
                                <li class="list-group-item">Cras justo odio</li>
                                <li class="list-group-item">Dapibus ac facilisis in</li>
                                <li class="list-group-item">Morbi leo risus</li>
                                <li class="list-group-item">Porta ac consectetur ac</li>
                                <li class="list-group-item">Vestibulum at eros</li>
                            </ul>




                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="main-content " class="col-lg-6">

                        <form method="post">
                            <!-- Title input -->
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form4Example1">Title</label>
                                <input type="text" name="etitle" class="form-control" />

                            </div>

                            <!-- Intro img input -->
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form4Example1">URL</label>
                                <input type="text" name="eurl" class="form-control" />

                            </div>

                            <!-- Icon input -->
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form4Example1">URL</label>
                                <input type="text" name="eicon" class="form-control" />

                            </div>

                            <!-- Submit button -->
                            <button type="submit"  name = "catEsubmit"class="btn btn-primary btn-block mb-4">Send</button>
                        </form>


                        <ul class="list-group" >
                            <li class="list-group-item">Cras justo odio
                                <button class="btn btn-primary " style="width: 100px">delete</button>
                            </li>

                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item">Morbi leo risus</li>
                            <li class="list-group-item">Porta ac consectetur ac</li>
                            <li class="list-group-item">Vestibulum at eros</li>
                        </ul>




                    </div>
                </div>
            </div>
        </div>
    </div>


</section>
<section>

    <div class="contest-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="top-content">
                        <div class="row">
                            <div class="col-lg-4">
                                <h3 class="">Contest</h3>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="main-content " class="col-lg-6">

                        <form method="post">
                            <!-- Title input -->
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form4Example1">Title</label>
                                <input type="text" name="contest" class="form-control" />

                            </div>

                            <!-- Award input -->
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form4Example1">Award</label>
                                <input type="number" name="award" class="form-control" />

                            </div>

                            <!-- Object input -->
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form4Example1">Object</label>
                                <input type="text" name="object" class="form-control" />

                            </div>

                            <!-- Submit button -->
                            <button type="submit"  name = "conAsubmit"class="btn btn-primary btn-block mb-4">Send</button>
                        </form>


                        <ul class="list-group" >
                            <li class="list-group-item">Cras justo odio</li>
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item">Morbi leo risus</li>
                            <li class="list-group-item">Porta ac consectetur ac</li>
                            <li class="list-group-item">Vestibulum at eros</li>
                        </ul>




                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="main-content " class="col-lg-6">

                        <form method="post">
                            <!-- Title input -->
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form4Example1">Title</label>
                                <input type="text" name="econtest" class="form-control" />

                            </div>

                            <!-- Winner name input -->
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form4Example1">Winner name</label>
                                <input type="text" name="wn" class="form-control" />

                            </div>

                            <!-- Winner surname input -->
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form4Example1">Winner surname</label>
                                <input type="text" name="ws" class="form-control" />

                            </div>

                            <!-- Img input -->
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form4Example1">Winning image id</label>
                                <input type="text" name="wimg" class="form-control" />

                            </div>

                            <!-- Submit button -->
                            <button type="submit"  name = "conEsubmit"class="btn btn-primary btn-block mb-4">Send</button>
                        </form>


                        <ul class="list-group" >
                            <li class="list-group-item">Cras justo odio
                                <button class="btn btn-primary " style="width: 100px">delete</button>
                            </li>

                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item">Morbi leo risus</li>
                            <li class="list-group-item">Porta ac consectetur ac</li>
                            <li class="list-group-item">Vestibulum at eros</li>
                        </ul>




                    </div>
                </div>
            </div>
        </div>
    </div>


</section>
<section>

    <div class="contest-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="top-content">
                        <div class="row">
                            <div class="col-lg-4">
                                <h3 class="">Category</h3>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="main-content " class="col-lg-6">

                        <form method="post">
                            <!-- Title input -->
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form4Example1">Title</label>
                                <input type="text" name="title" class="form-control" />

                            </div>

                            <!-- Intro img input -->
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form4Example1">URL</label>
                                <input type="text" name="url" class="form-control" />

                            </div>

                            <!-- Submit button -->
                            <button type="submit"  name = "catAsubmit"class="btn btn-primary btn-block mb-4">Send</button>
                        </form>


                        <ul class="list-group" >
                            <li class="list-group-item">Cras justo odio</li>
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item">Morbi leo risus</li>
                            <li class="list-group-item">Porta ac consectetur ac</li>
                            <li class="list-group-item">Vestibulum at eros</li>
                        </ul>




                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="main-content " class="col-lg-6">

                        <form method="post">
                            <!-- Title input -->
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form4Example1">Title</label>
                                <input type="text" name="etitle" class="form-control" />

                            </div>

                            <!-- Intro img input -->
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form4Example1">URL</label>
                                <input type="text" name="eurl" class="form-control" />

                            </div>

                            <!-- Icon input -->
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form4Example1">URL</label>
                                <input type="text" name="eicon" class="form-control" />

                            </div>

                            <!-- Submit button -->
                            <button type="submit"  name = "catEsubmit"class="btn btn-primary btn-block mb-4">Send</button>
                        </form>


                        <ul class="list-group" >
                            <li class="list-group-item">Cras justo odio
                                <button class="btn btn-primary " style="width: 100px">delete</button>
                            </li>

                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item">Morbi leo risus</li>
                            <li class="list-group-item">Porta ac consectetur ac</li>
                            <li class="list-group-item">Vestibulum at eros</li>
                        </ul>




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
