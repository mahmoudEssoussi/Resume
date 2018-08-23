
<?php
if(isset($_POST['send'])){


$errorMSG = NULL;

// NAME
if (empty($_POST["name"])) {
    $errorMSG = "Error: Name is required!";
} else {
    $name = $_POST["name"];
}

// EMAIL
if (empty($_POST["email"])) {
    $errorMSG = "Error: Email is required!";
} else {
    $email = $_POST["email"];
}
//inquiry

// MESSAGE
if (empty($_POST["message"])) {
    $errorMSG = "Error: Message is required!";
} else {
    $message = $_POST["message"];
}


$EmailTo = "mahmoudamineessoussi@gmail.com";

$Subject = "New Message Received";

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";

$Body .= "Message: ";
$Body .= $message;
$Body .= "\n";

// send email

if( $errorMSG == NULL ){
    mail($EmailTo, $Subject, $Body, "From:".$email);
  
    echo "<script>alert('Thank You! We will reply to you soon!');</script>";
}else{
    echo "<script>alert(' ". $errorMSG ." ');</script>";
}


}
?>