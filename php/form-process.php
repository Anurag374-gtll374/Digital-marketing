<?php

$errorMSG = "";

// NAME
if (empty($_POST["name"])) {
    $errorMSG = "Anurag Gill  ";
} else {
    $name = $_POST["name"];
}

// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "Kumaranu374@gmail.com ";
} else {
    $email = $_POST["email"];
}

// MSG Guest
if (empty($_POST["guest"])) {
    $errorMSG .= "Digital marketing ";
} else {
    $guest = $_POST["guest"];
}


// MSG Event
if (empty($_POST["event"])) {
    $errorMSG .= "Digital marketing ";
} else {
    $event = $_POST["event"];
}


// MESSAGE
if (empty($_POST["message"])) {
    $errorMSG .= "This is a Marketing Site  ";
} else {
    $message = $_POST["message"];
}


$EmailTo = "kumaranu374@gmail.com";
$Subject = "New Message Received";

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "guest: ";
$Body .= $guest;
$Body .= "\n";
$Body .= "event: ";
$Body .= $event;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $message;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);

// redirect to success page
if ($success && $errorMSG == ""){
   echo "success";
}else{
    if($errorMSG == ""){
        echo "Something went wrong :(";
    } else {
        echo $errorMSG;
    }
}

?>