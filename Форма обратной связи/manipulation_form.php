<?php
session_start();
if($_GET == 1){
    echo "Ваше сообщение отправлено на email: " . $_SESSION["to"];
}

