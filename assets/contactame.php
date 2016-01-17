// Get values from form
$nombre=$_POST['nombre'];
$ciudad=$_POST['ciudad'];
$telefono=$_POST['telefono'];
$email=$_POST['email'];
 
$to = &quot;regina.casanova.90@gmail.com&quot;;
$subject = &quot;Contacto de Pagina Web&quot;;
$message = &quot; Nombre: &quot; . $nombre . &quot;\r\n Ciudad: &quot; . $ciudad . &quot;\r\n Telefono: &quot; . $telefono . &quot;\r\n Email: &quot; . $email;
 
 
$from = &quot;Página web&quot;;
$headers = &quot;From:&quot; . $from . &quot;\r\n&quot;;
$headers .= &quot;Content-type: text/plain; charset=UTF-8&quot; . &quot;\r\n&quot;; 
 
if(@mail($to,$subject,$message,$headers))
{
  print &quot;&lt;script&gt;document.location.href='http://demo.ftutorials.com/html5-contact-form/success.html';&lt;/script&gt;&quot;;

}else{
  echo &quot;Error! Please try again.&quot;;
}