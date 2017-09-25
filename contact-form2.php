<?php
$res;
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	if(empty($_POST['g-recaptcha-response']))
	{
		exit('Emty captcha');
	}
	
	$url = 'https://www.google.com/recaptcha/api/siteverify';
	
	$secret = '********'; //secret from g-recaptcha
	$recaptcha = $_POST['g-recaptcha-response'];
	$ip = $_SERVER['REMOTE_ADDR'];
	
	$url_data = $url.'?secret='.$secret.'&response='.$recaptcha.'&remoteip='.$ip;
	
	$curl = curl_init();
	curl_setopt($curl,CURLOPT_URL,$url_data);
	curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);
	curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,FALSE);
	$res = curl_exec($curl);
	curl_close($curl);
	
	$res = json_decode($res); 

	if($res->success)
	{
		
		if((isset($_POST['name'])&&$_POST['name']!="")&&(isset($_POST['phone'])&&$_POST['phone']!="")&&(isset($_POST['email'])&&$_POST['email']!="")){ 
			$to = 'web@ozongspo.com'; 
			$subject = 'Письмо с сайта ООО "ГЛЮКАУФ"';  
			$message = '
					<html>
						<head>
							<title>'.$subject.'</title>
						</head>
						<body>
							<p>Имя: '.htmlentities(trim($_POST['name'])).'</p>
							<p>Телефон: '.htmlentities(trim($_POST['phone'])).'</p>  
							<p>Email: '.htmlentities(trim($_POST['email'])).'</p>
							<p>Текст обращения: '.htmlentities(trim($_POST['message'])).'</p>     
						</body>
					</html>';
			$headers  = "Content-type: text/html; charset=utf-8 \r\n";
			$headers .= "From: Отправитель <".htmlentities(trim($_POST['email'])).">\r\n";
			mail($to, $subject, $message, $headers);
		} 
	}	
}

?>