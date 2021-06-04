<?php
// КУКИ - набор переменных, которые хранятся в браузере пользователя. Пример: Пользователь ввел пароль и логин, потом перешел на другую страницу, потом вернулся на нашу страницу и чтобы снова не просить его авторизоваться, можно добавить его логин и пароль в куки, а потом просто проверять есть ли его логин и пароль в куки, если есть, то ему не нудно снова авторизовываться
// также куки - переменные которые хранятся в браузере на тот срок, который мы сами можем указать. Также в куки можно хранить персональные настройки пользователя

//// 1 параметр - название куки. 2 параметр - значение куки (может быть любым типом данных). 3 параметр - время по истечению которого это куки удалится
//setcookie("num", 10, time() + 7); // принимает 2 обязательных параметра, а также третий не обязательный
//$_COOKIE["num"]; // в этом глобальный массив записалась наша куки которую мы выше сделали. Будет хранится сдесь пока не истечет время хранения куки которое мы указали 3 параметром выше
//if (isset($_COOKIE["num"])){
//    echo "Кука установлена";
//}else{
//    echo "Кука не установлена";
//}


// СЕССИИ
// Куки может посмотреть пользователь, хранятся в браузере. СЕСИИ - хранятся на сервере. Сессии не долгосрочны, хранятся 15 мин. Предпочтительно использовать сессии, т.к. они хранятся на сервере, что надежнее
session_start(); // запускаю сессию
if (isset($_SESSION["num"])){
    echo "Сессиия установлена";
}else{
    echo "Сессиия не установлена";
}
session_destroy(); // удаляю сессию
