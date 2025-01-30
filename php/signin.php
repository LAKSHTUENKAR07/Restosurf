<?php
// if (isset($_POST['submit'])) {
require "database_con.php";
ob_start();
$email = $_POST['Email'];
$password = $_POST['password'];
$passwordHash = password_hash($password, PASSWORD_DEFAULT);

$sql = "SELECT * FROM userinfo WHERE email=?";
$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt,$sql)){
    $error = "Error occured at database";
    header("Location: /restofile/template/signin.html?msg=$error");
    exit();
}
else{
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    if ($row = mysqli_fetch_assoc($result)) {
        $pwdcheck = password_verify($password, $row['userpass']);
        if ($pwdcheck == false){
            $error = "Incorrect password";
            header("Location: /restofile/template/signin.html?msg=$error");
            exit();
        }


        else if ($pwdcheck == true){
            session_start();
            $_SESSION['userID'] = $row['userID'];
            $_SESSION['fullname'] = $row['fullname'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['reservations'] = $row['reservations'];
            $_SESSION['contact'] = $row['contactno'];
            $_SESSION['address'] = $row['addressofuser'];
            $_SESSION['description'] = $row['userdesc'];
        
            $string = $row['fullname'];
            $parts = explode(" ", $string);
            $_SESSION['FirstName'] = $parts[0];
            $_SESSION['LastName'] = $parts[1];

            $error = 'Welcome '.$_SESSION["fullname"].' We are glad to help you';
            header("Location: /restofile/template/index.php?msg=$error");
            exit();
        }
        else {
            $error= "email and password do not match";
            header("Location: /restofile/template/signin.html?msg=$error"."&EmailId=".$email);
            exit();
        }
    }
    else {
        $error = "Please sign Up";
        header("Location: /restofile/template/signin.html?msg=$error");
        exit();
    }
}