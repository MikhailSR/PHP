<?php
// желательно всегда все получаемые данных с формы обрабатывать с помощью htmlspecialchars()
session_start();

if(isset($_POST["send"])){
    // получаю данные из глобальных массивов
    $from = htmlspecialchars($_POST["from"]);
    $to = htmlspecialchars($_POST["to"]);
    $subject = htmlspecialchars($_POST["subject"]);
    $message = htmlspecialchars($_POST["message"]);

    // устанавливаю сессию, чтобы если пользователь перезагрузил сайт, все введенные данные остались
    $_SESSION["from"] = $from;
    $_SESSION["to"] = $to;
    $_SESSION["subject"] = $subject;
    $_SESSION["message"] = $message;

    // проверяю все ли поля заполнены
    $error_from = "";
    $error_message = "";
    $error_subject = "";
    $error_to = "";
    $error = false; // переменная которая будет флагом, если она равна false - ошибок нет, если она равна true - ошибки присутствуют
    if ($from == "" || !preg_match("/@/", $from)){
        $error_from = "Введите коректный email";
        $error = true;
    }
    if ($to == "" || !preg_match("/@/", $to)){
        $error_to = "Введите коректный email получателя";
        $error = true;
    }
    if(strlen($subject) == 0){
        $error_subject = "Введите тему сообщениия";
        $error = true;
    }
    if(strlen($message) == 0){
        $error_subject = "Введите сообщениие";
        $error = true;
    }
    if (!$error){
        $subject = "=?utf-8?B?.".base64_encode($subject)."=?";
        $headers = "From: $from\r\nReply-to: $from\r\nContent Type: text/plain; charset=utf-8\r\n";
        mail($subject, $to, $from, $message, $headers);
        header("Location: manipulation_form.php?send=1"); // send - это дополнительная проверка того, что мы точно отправили емейл и будем проверят на странице manupulation_form. Если сенд равен 1 то выводить что сообщение отправлено...
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Обратная связь</title>
</head>
<body>
    <h1>Форма обратной связи</h1>
    <form name="feedback" method="post">
        <label>От кого: </label><br>
        <label>
            <input type="text" name="from" value="<?php echo $_SESSION["from"]; ?>">
            <span style="color: #ff0000"><?php echo $error_from;?></span>
        </label> <br>
        <label>Кому: </label><br>
        <label>
            <input type="text" name="to" value="<?php echo $_SESSION["to"]; ?>">
            <span style="color: #ff0000"><?php echo $error_to;?></span>
        </label><br>
        <label>Тема: </label><br>
        <label>
            <input type="text" name="subject" value="<?php echo $_SESSION["subject"]; ?>">
            <span style="color: #ff0000"><?php echo $error_subject;?></span>
        </label><br>
        <label>Сообщение: </label><br>
        <label>
            <textarea name="message" cols="30" rows="5"><?php echo $_SESSION["message"]; ?></textarea>
            <span style="color: #ff0000"><?php echo $error_message;?></span>
        </label><br>
        <input type="submit" name="send" value="Отправить">
    </form>
</body>
</html>