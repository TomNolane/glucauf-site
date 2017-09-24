<?php

if((isset($_POST['name'])&&$_POST['name']!="")&&(isset($_POST['phone'])&&$_POST['phone']!="")&&(isset($_POST['email'])&&$_POST['email']!="")){ //Проверка отправилось ли наше поля name и не пустые ли они
    $to = 'info@glucauf.ru'; //Почта получателя, через запятую можно указать сколько угодно адресов
    $subject = 'Письмо с сайта ООО "ГЛЮКАУФ"'; //Загаловок сообщения
    $message = '
            <html>
                <head>
                    <title>'.$subject.'</title>
                </head>
                <body>
                    <p>Имя: '.htmlentities(trim($_POST['name'])).'</p>
                    <p>Телефон: '.htmlentities(trim($_POST['phone'])).'</p>  
                    <p>Email: '.htmlentities(trim($_POST['email'])).'</p>  
                    <br>
                    <p>Текст обращения: '.htmlentities(trim($_POST['message'])).'</p>     
                </body>
            </html>'; //Текст нащего сообщения можно использовать HTML теги
    $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
    $headers .= "From: Отправитель <".htmlentities(trim($_POST['email'])).">\r\n"; //Наименование и почта отправителя
    mail($to, $subject, $message, $headers); //Отправка письма с помощью функции mail
}

?>