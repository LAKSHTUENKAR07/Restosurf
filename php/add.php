<?php

session_start();
if ($_SESSION['username']){
    require 'database_con.php';
    $userId = $_SESSION['userID'];
    $username = $_SESSION['username'];
    $fullName = $_SESSION['fullname']; 
    $restoName=$_POST['restoname'];
    $lowestprice = $_POST['lowestprice'];
    $highestprice = $_POST['highestprice'];
    $restolocation = $_POST['location'];
    $contactno = $_POST['contactno']; 
    $typeofresto = $_POST['typeof'];
    $openTime = $_POST['opentime'];
    $closeTime = $_POST['closetime'];
    $imageurl = $_POST['imageurl'];

    if(strlen($contactno)<=10){
        // $error = "Enter mobile number with country code";
        $error = strlen($contactno);
        header("Location: /restofile/template/add.html?msg=$error"."&contactno=".$contactno."&restoname=".$restoName."&location=".$restolocation."&price=".$price);
        exit();
    }
    else if(strlen($restolocation)<5){
        $error = "enter valid location";
        header("Location: /restofile/template/add.html?msg=$error"."&contactno=".$contactno."&restoname=".$restoName."&location=".$restolocation."&price=".$price);
        exit();
    }
    else if (strlen($restoName)<2){
        $error = "enter valid Restaurant Name";
        header("Location: /restofile/template/add.html?msg=$error"."&contactno=".$contactno."&restoname=".$restoName."&location=".$restolocation."&price=".$price);
        exit();
    }
    else{
        $sql = "SELECT restoName,restolocation FROM restaurantinfo WHERE restoName=? && restolocation=?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt,$sql)){
            $error = 'could not connect to database';
            header("Location: /restofile/template/add.html?msg=$error"."&contactno=".$contactno."&restoname=".$restoName."&location=".$restolocation."&price=".$price);
            exit();
        }
        else{
            mysqli_stmt_bind_param($stmt, "ss", $restoName,$restolocation);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if ($resultCheck>0){
                $error = "This restaurant is already avaiable on website";
                header("Location: /restofile/template/add.html?msg=$error"."&contactno=".$contactno."&restoname=".$restoName."&location=".$restolocation."&price=".$price);
            }
            else{
                $sql = "INSERT INTO restaurantinfo (userID,username,restoName,OpenTime,closeTime,contact,lowestprice,highestprice,restolocation,typeofresto,fullname,imageurl) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt,$sql)){
                    $error = "failed to update data";
                    $error = "enter valid location";
                    header("Location: /restofile/template/add.html?msg=$error"."&contactno=".$contactno."&restoname=".$restoName."&restolocation=".$restolocation."&price=".$price);
                    exit();
                }
                else{
                    mysqli_stmt_bind_param($stmt, "ssssssssssss",$userId,$username,$restoName,$openTime,$closeTime,$contactno,$lowestprice,$highestprice,$restolocation,$typeofresto,$fullName,$imageurl);
                    mysqli_stmt_execute($stmt);
                    $success = "updated new entry succesfully!!";
                    header("Location: /restofile/template/index.php?msg=$success");
                    $_SESSION['restoname'] = $restoName;
                    exit();
                }
            }
        }
    }
    if ($stmt !== null){
        mysqli_stmt_close($stmt);
    }
    mysqli_close($conn);
}
else{
    $error = "login/signup to add restaurant details";
    header("Location: /restofile/template/signin.html?msg=$error");
}

?>