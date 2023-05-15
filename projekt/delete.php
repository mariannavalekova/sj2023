<?php
include_once "crud.php";

use ukf\crud\Crud;

$delobj = new Crud();
session_start();
$ebnema = $_SESSION['login'];
if (isset($_GET['pid'])) {
    $delete = $delobj->deletePic($_GET['pid']);
    if ($delete) {
        if ($ebnema == 2) header('Location: admin.php?status=1');
        else header('Location: user.php?status=1');
    } else {
        echo "Error";
    }
} else {
    header('Location: user.php');
}


if (isset($_GET['conid'])) {
    $delete = $delobj->deleteCon($_GET['conid']);
    if ($delete) {
        if ($ebnema == 2) header('Location: admin.php?status=1');
        else header('Location: user.php?status=1');
    } else {
        echo "Error";
    }
} else {
    header('Location: login.php');
}

if (isset($_GET['catid'])) {
    $delete = $delobj->deleteCat($_GET['catid']);
    if ($delete) {
        if ($ebnema == 2) header('Location: admin.php?status=1');
        else header('Location: user.php?status=1');
    } else {
        echo "Error";
    }
} else {
    header('Location: login.php');
}