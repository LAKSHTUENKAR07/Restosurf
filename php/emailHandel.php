<?php
if (isset($_POST['helpline'])){

    $to = "list.append17@gmail.com";
    $subject = "Email from client for HELP";
    
    // Collecting the data from the email
    $name = $_POST['name'];
    $email = $_POST['email'];
    $issue = $_POST['issue'];
    
    // Composing the email message
    $message = "Name: $name\nEmail: $email\nissue: $issue";
    
    // Sending the email
    mail($to, $subject, $message);
    
    // Confirmation message
    $error = "We will contact you soon.";
    header("Location: /restofile/template/index.php?msg=$error");
    exit();
}
else if (isset($_POST['feedback'])){
    
    $to = "list.append17@gmail.com";
    $subject = "Email from client for HELP";
    
    // Collecting the data from the email
    $name = $_POST['name'];
    $email = $_POST['email'];
    $feedback = $_POST['feedback'];
    
    // Composing the email message
    $message = "Name: $name\nEmail: $email\nissue: $feedback";
    
    // Sending the email
    mail($to, $subject, $message);
    
    // Confirmation message
    $error = "Thank you for your feedback";
    header("Location: /restofile/template/index.php?msg=$error");
    exit();
}
else{
    $error = "something went wrong";
    header("Location: /restofile/template/index.php?msg=$error");
    exit();
}