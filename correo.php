<?php
if (isset($_POST['enviar'])){
if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['destalles'])) {
$nombre = $_POST['name'];
$email = $_POST['email'];
$detalles = $_POST['detalles'];
$header = "from: noreply@example.com" . "\r\n";
$header.= "Reply-to: josrael19@gmail.com" . "\r\n";
$header.= "X-Mailer: PHP/". phpversion();
$mail = @mail($email,$detalles,$name,$header);

if ($mail){
	echo "Mail enviado!";

}
}
}
