<?php
include_once "crud.php";

use ukf\crud\Crud;

$delobj = new Crud();

if(isset($_GET['id'])) {
    $delete = $delobj->deletePic($_GET['id']);
    if($delete) {
        header('Location: user.php?status=1');
    } else {
        echo "Error";
    }
} else {
    header('Location: user.php');
}