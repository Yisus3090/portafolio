<?php

$errorMSG = "";

// NAME
if (empty($_POST["name"])) {
    $errorMSG = "Su nombre es requerido ";
} else {
    $name = $_POST["name"];
}

// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "Correo requerido ";
} else {
    $email = $_POST["email"];
}

// Subject Number
if (empty($_POST["sub"])) {
    $errorMSG .= "Sujeto es requerido ";
} else {
    $tel = $_POST["sub"];
}

// Tel Number
if (empty($_POST["tel"])) {
    $errorMSG .= "Telefono requerido ";
} else {
    $tel = $_POST["tel"];
}

// MESSAGE
if (empty($_POST["message"])) {
    $errorMSG .= "Su mensaje es requerido ";
} else {
    $message = $_POST["message"];
}


$EmailTo = "jdavid.jarabm@gmail.com";
$Subject = "Nuevo Mensaje Recibido";

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Tel: ";
$Body .= $tel;
$Body .= "\n";
$Body .= "Subject: ";
$Body .= $sub;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $message;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);

// redirect to success page
if ($success && $errorMSG == ""){
   echo "Enviado con éxito";
}else{
    if($errorMSG == "Algo salió mal :C"){
        echo "Something went wrong :(";
    } else {
        echo $errorMSG;
    }
}

?>