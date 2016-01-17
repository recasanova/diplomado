<?php

// Get values from form
$nombre=$_POST['nombre'];
$ciudad=$_POST['ciudad'];
$telefono=$_POST['telefono'];
$email=$_POST['email'];

$to = "regina.casanova.90@gmail.com";
$subject = "Contact Form de la Página Web";
$message = " Nombre: " . $nombre . "\r\n Ciudad: " . $ciudad . "\r\n Telefono: " . $telefono . "\r\n Email: " . $email;


$from = "Pagina Web Regina Casanova";
$headers = "From:" . $from . "\r\n";
$headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n"; 

if(@mail($to,$subject,$message,$headers))
{
  print "<script>document.location.href='http://demo.ftutorials.com/jquery-form-validation/success.html';</script>";
  // Created by Future Tutorials
}else{
  echo "Error! Pofavor, intentalo de nuevo.";
}



?>