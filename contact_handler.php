<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = 'support@desyss.com';
    $email_subject = " Nuevo Contacto";
    $email_body = "Nombre: $name .\n".
                    "Correo Electronico: $visitor_email .\n".
                        "Mensaje $message .\n";

    $to = "sam.lab.pti@gmail.com";
    $headers = "De: $email_from \r\n";
    $headers .= "Responder a: $visitor_email \r\n";
    mail($to,$email_subject,$email_body,$headers);
    header("Location: contact.html");

?>
