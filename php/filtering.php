
<?php

require 'database_con.php';

if (isset($_POST['filterAll'])){
    $sql = "SELECT * FROM restaurantinfo";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        $error = "Error occured at database";
        header("Location: /restofile/template/index.php?msg=$error");
        exit();
    } else {
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        $resultCheck = mysqli_stmt_num_rows($stmt);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
    }
}
else if (isset($_POST['filterAs'])){
    $filterAsValue = $_POST['filterAs'];
    $sql = "SELECT * FROM restaurantinfo WHERE typeofresto=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        $error = "Error occured at database";
        header("Location: /restofile/template/index.php?msg=$error");
        exit();
    } else {
        mysqli_stmt_bind_param($stmt, "s", $filterAsValue);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        $resultCheck = mysqli_stmt_num_rows($stmt);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
    }
} 
else {
    $sql = "SELECT * FROM restaurantinfo";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        $error = "Error occured at database";
        header("Location: /restofile/template/index.php?msg=$error");
        exit();
    } else {
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        $resultCheck = mysqli_stmt_num_rows($stmt);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
    }
}


