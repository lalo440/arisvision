<?php

    $to = "lalolegendario666@gmail.com, eduardo.hernandez.isc@outlook.es, lic.miriamhdz@hotmail.com, lic.dianahdzm@gmail.com ";
    $from = $_REQUEST['email'];
    $name = $_REQUEST['name'];
    

    $cmessage = $_REQUEST['message'];

    $headers = "From: $from";
	$headers = "From: " . $from . "\r\n";
	$headers .= "Reply-To: ". $from . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $subject = "Hola somos Óptica Arisvision.";

    $logo = 'img/logo.png';
    $link = 'https://arisvision.000webhostapp.com/';

	$body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Express Mail</title></head><body>";
	$body .= "<table style='width: 100%;'>";
	$body .= "<thead style='text-align: center;'><tr><td style='border:none;' colspan='2'>";
	$body .= "<a href='{$link}'><img src='{$logo}' alt=''></a><br><br>";
	$body .= "</td></tr></thead><tbody><tr>";
	$body .= "<td style='border:none;'><strong>}Nombre:</strong> {$name}</td>";
	$body .= "<td style='border:none;'><strong>Correo electronico:</strong> {$from}</td>";
	$body .= "</tr>";
	
	$body .= "<tr><td></td></tr>";
	$body .= "<tr><td colspan='2' style='border:none;'>{$cmessage}</td></tr>";
	$body .= "</tbody></table>";
	$body .= "</body></html>";

    $send = mail($to, $subject, $body, $headers);

?>