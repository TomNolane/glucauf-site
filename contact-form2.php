<?php
if((isset($_POST['name'])&&$_POST['name']!="")&&(isset($_POST['phone'])&&$_POST['phone']!="")&&(isset($_POST['email'])&&$_POST['email']!="")){ 
    $to = 'info@glucauf.ru'; 
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
?>