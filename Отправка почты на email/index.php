<?php
$message = "Простое сообщение"; // содержаниие сообщения
$to = "gosha@gmail.com"; // кому
$from = "gosha@mail.ru"; // от кого
$subject = "Тема сообщения";
$subject = "=?utf-8?B?" . base64_encode($subject) . "?=";
$headers = "From: $from\r\nReply to: $from\r\nContent-type: text/plain charset=utf-8\r\n"; // заголовок
mail($to, $subject, $message, $headers); // отправить сообщение на почту (нужен хостинг)