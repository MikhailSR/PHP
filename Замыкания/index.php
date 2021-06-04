<?php

// Замыкания - это функция которая возвращяет другую функцию (в return)
// ПРИМЕР:

function userConnect($db){

    return function ($user) use ($db) {
        echo $user . ' подключился к базе ' . $db . '<br>';
    };
}

$db = userConnect('new Base');

$db('Masha');
$db('Vasa');

// К контексте выполнения функции userConnect переменная $db замкнулась

