<?php
// if (isset($_POST['signup'])) {
require 'database_con.php';

$username = $_POST['username'];
$email = $_POST['EmailId'];
$pwd = $_POST['password'];
$repwd = $_POST['repassword'];
$fName = $_POST['FirstName'];
$lName = $_POST['LastName']; 
$contactno = $_POST['contactno'];   

$fullname = $fName." ".$lName;

if ((!preg_match("/^[a-zA-Z0-9]*$/", $username)) && (!filter_var($email, FILTER_VALIDATE_EMAIL))){
    $error = "Email and username not correct";
    header("Location: /restofile/template/signup.html?msg=$error.&EmailId=".$email."&FirstName=".$fName."&LastName=".$lName."&username=".$username."&contactno=".$contactno);
}
else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $error = "invalid email";
    header("Location: /restofile/template/signup.html?msg=$error"."&FirstName=".$fName."&LastName=".$lName."&username=".$username."&contactno=".$contactno);
}
else if(strlen($contactno)<=10){
    // $error = "Enter mobile number with country code";
    $error = strlen($contactno);
    header("Location: /restofile/template/signup.html?msg=$error"."&EmailId=".$email."&FirstName=".$fName."&LastName=".$lName."&username=".$username."&contactno=".$contactno);
}
else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)){
    $error = 'special symbols and period(.) not allowed';
    header("Location: /restofile/template/signup.html?msg=$error"."&FirstName=".$fName."&LastName=".$lName."&EmailId=".$email."&contactno=".$contactno);
}
else if ($pwd !== $repwd){
    $error = "password did not match";
    header("Location: /restofile/template/signup.html?msg=$error"."&FirstName=".$fName."&LastName=".$lName."&username=".$username."&EmailId=".$email."&contactno=".$contactno);

}
else{
    $sql = "SELECT username,email FROM userinfo WHERE username=? OR email=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt,$sql)){
        // header("Location: /restofile/template/trail.html?error=databaseError1");
        $error = 'could not connect to database';
        header("Location: /restofile/template/signup.html?msg=$error"."&FirstName=".$fName."&LastName=".$lName."&username=".$username."&EmailId=".$email."&contactno=".$contactno);
        exit();
    }
    else{
        mysqli_stmt_bind_param($stmt, "ss", $username,$email);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        $resultCheck = mysqli_stmt_num_rows($stmt);
        if ($resultCheck>0){
            $error = "username or email already taken";
            header("Location: /restofile/template/signup.html?msg=$error"."&FirstName=".$fName."&LastName=".$lName."&username=".$username."&EmailId=".$email."&contactno=".$contactno);
        }
        else{
            $sql = "INSERT INTO userinfo (fullname,username,email,userpass,contactno) VALUES (?,?,?,?,?)";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt,$sql)){
                $error = "failed to update data";
                header("Location: /restofile/template/signup.html?msg=$error"."&FirstName=".$fName."&LastName=".$lName."&username=".$username."&EmailId=".$email."&contactno=".$contactno);
                // header("Location: /restofile/template/trail.html?error=databaseError2");
                exit();
            }
            else{
                $pwdhash = password_hash($pwd, PASSWORD_DEFAULT);
                mysqli_stmt_bind_param($stmt, "sssss", $fullname, $username, $email, $pwdhash,$contactno);
                mysqli_stmt_execute($stmt);
                session_start();
                header("Location: /restofile/template/signin.html");
                exit();
            }
        }
    }
}
if ($stmt !== null){
    mysqli_stmt_close($stmt);
}
mysqli_close($conn);
