<?php

$username = $_POST['username'];
$email = $_POST['email'];

$username = htmlspecialchars($username);
$email = htmlspecialchars($email);

$username = urldecode($username);
$email = urldecode($email);

$username = trim($username);
$email = trim($email);

//echo $username;
//echo "<br>";
//echo $email;

if (mail("nasticbazlic@gmail.com", "Заявка с сайта", "ФИО:".$username.". E-mail: ".$email ,"From: eagleserega@gmail.com  \r\n"))
{     echo "сообщение успешно отправлено";
} else {
    echo "при отправке сообщения возникли ошибки";
}?>
