<?php
header('Content-Type: text/html; charset=utf-8');
/* Задаем переменные */
$name = htmlspecialchars($_POST["name"]);
$email = htmlspecialchars($_POST["email"]);
$message = htmlspecialchars($_POST["message"]);
$bezspama = htmlspecialchars($_POST["bezspama"]);

/* Ваш адрес и тема сообщения */
$address = "faustrad9@gmail.com";
$sub = "Kreative Pixel";

/* Формат письма */
$mes = "Сообщение с сайта ХХХ.\n
Имя отправителя: $name 
Электронный адрес отправителя: $email
Текст сообщения:
$message";


if (empty($bezspama)) /* Оценка поля bezspama - должно быть пустым*/
{
/* Отправляем сообщение, используя mail() функцию */
$from  = "From: $name <$email> \r\n Reply-To: $email \r\n";
if (mail($address, $sub, $mes, $from)) {
    header('Refresh: 5; URL=https://faustrad9.wixsite.com/maxverst');
    echo '
    
    Письмо отправлено, через 5 секунд вы вернетесь на страницу https://faustrad9.wixsite.com/maxverst';}
else {
    header('Refresh: 5; URL=https://faustrad9.wixsite.com/maxverst');
    echo '
    
    Письмо не отправлено, через 5 секунд вы вернетесь на страницу https://faustrad9.wixsite.com/maxverst';}
}
exit; /* Выход без сообщения, если поле bezspama заполнено спам ботами */
?>