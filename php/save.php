<?php
// if (isset($_POST['register'])){
include('database_con.php');
// include('add.php');
if (session_start()) {
    $userId = $_SESSION['userID'];
    $username = $_SESSION['username'];
    $restoName = $_GET['register'];

    $sql = "UPDATE userinfo SET reservations = ? WHERE username = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        $error = "failed to update data";
        header("Location: /restofile/template/index.php?msg=$error");
        exit();
    } else {
        mysqli_stmt_bind_param($stmt, "ss", $restoName,$username);
        mysqli_stmt_execute($stmt);
        $_SESSION['reservations'] = $restoName;
        $success = "Registered succesfully!!";
        header("Location: /restofile/template/index.php?msg=$success");
        exit();
    }

if ($stmt !== null) {
    mysqli_stmt_close($stmt);
}
mysqli_close($conn);
}
else{
    $error =  'please sign in to register';
    header("Location: /restofile/template/index.php?msg=$error");
    exit();
}
