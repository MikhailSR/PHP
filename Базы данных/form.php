<?php
//// базы данных


//// подключение БД ОБЪЕКТНО-ОРИЕНТИРОВАНЫЙ ПОДХОД
//$dbHost = "localhost";
//$dbUser = "root";
//$dbPassword = "root";
//$dbName = "test_database";
//
//$connection = new mysqli($dbHost, $dbUser, $dbPassword, $dbName);
//
//if ($connection->connect_error) die ("Connection failed: " . $connection->connect_error);
//else echo "Connection successfully <br>";
////mysqli_close($connection);     // закрываю соединений с базой данных


//// подключение БД ПРОЦЕДУРНЫЙ ПОДХОД
//$dbHost = "localhost";
//$dbUser = "root";
//$dbPassword = "root";
//$dbName = "test_database";
//
//$connection = mysqli_connect($dbHost, $dbUser, $dbPassword, $dbName);
//
//if (!$connection) die ("Connection failed: " . mysqli_connect_error());
//else echo "Connection successfully";


//// подключение БД МЕТОД PDO
//$dbHost = "localhost";
//$dbUser = "root";
//$dbPassword = "root";
//$dbName = "test_database";
//
//try {
//    $connection = new PDO("mysql:host=$dbHost; dbname=newDB", $dbUser, $dbPassword);
//    echo "Connection successfully";
//}
//catch (PDOException $e){
//    echo "Connection failed: " . $e->getMessage();
//}


//// СОЗДАНИЕ БАЗЫ ДАННЫХ
//$sql = "CREATE DATABASE testDB";
//if (mysqli_query($connection, $sql)){
//    echo "Database created successfully";
//} else echo "Error: " . mysqli_error($connection) . '<br>';
//
//mysqli_close($connection);     // закрываю соединений с базой данных


//// СОЗДАНИЕ ТАБЛИЦИ (можно создать в myAdmin. Это будет пример создания в коде php)
//$sql = "CREATE TABLE users(
//        name VARCHAR (30) NOT NULL,
//        login VARCHAR (30) NOT NULL PRIMARY KEY,
//        password VARCHAR (30) NOT NULL)";
//
//if ($connection->query($sql) === True){
//    echo "Table 'users' creat successfully";
//} else echo "Error" . $connection->error;
//
//
//
//    //mysqli_close($connection);     // закрываю соединений с базой данных ДОБАВЛЕНИЕ ДАННЫХ В ТАБЛИЦУ - ОБЪЕКТНО-ОРИЕНТИРОВАННЫЙ ПОДХОД
//    $sql = "INSERT INTO users (name, login, password)
//            VALUES('Ivan', 'Anyfriev', '54321')";
//
//    if ($connection->query($sql) === True){
//        echo "Record created";}
//    mysqli_close($connection);


//    //ВЫБОРКА ДАННЫХ.SELECT
//    $sql = "SELECT * FROM users";
//    $result = $connection->query($sql);
//
//    if ($result->num_rows > 0){
//        while ($row = $result->fetch_assoc()){
//            echo "<br> id: " . $row["user-id"] . "<br> name: " . $row["name"] . "<br> surname: " . $row ["surname"];
//        }
//    }
//    $connection->close();


//// ДОСТАТЬ РЕЗУЛЬТАТ В НОРМАЛЬНОМ ВИДЕ (в массиве) в БД
////Делаем запрос к БД, результат запроса пишем в $result:
//$sql = "SELECT * FROM users";
//$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
//
////Преобразуем то, что отдала нам база в нормальный массив PHP $data:
//for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);


//         // ОБНОВЛЕНИЕ ДАННЫХ - UPDATE
//      $sql = "UPDATE users SET name='Cola' WHERE name='Alex'"; // в таблицк users заменяю колонку name в которой имя Alex на имя Cola
//      $connection->query($sql);
//
//
//       //ОБНОВЛЕНИЕ ДАННЫХ  - REPLACE INTO
//       $sql = "REPLACE INTO users VALUES (1, 'Alexandr', 'al2002', '6478d')";
//       $connection->query($sql);


//    // УДАЛЕНИЕ ДАННЫХ - DELETE (удаляет конкретные записи)
//    $sql = "DELETE FROM users WHERE id=2";
//    //$connection->query($sql);
//    if ($connection->query($sql) === TRUE) {
//        echo "Record deleted successfully";
//    }else{
//        echo "Error deleting record: " . $conn  ection->error;}
//    mysqli_close($connection);
//

//    // УДАЛЕНИЕ ДАННЫХ - TRUNCATE TABLE (удаляет все данные из таблици)
//    $sql = "TRUNCATE TABLE users";
//    //$connection->query($sql);
//    if ($connection->query($sql) === TRUE) {
//        echo "Record deleted successfully";
//    }else{
//        echo "Error deleting record: " . $conn  ection->error;}
//    mysqli_close($connection);
// А еще отличие TRUNCATE от DELETE, что он обнуляет автоинкремент. то есть, следующая добавляемая запись будет с id = 1. а в случае с DELETE, при удалении всех записей, новая запись будет с продолжением счета id.










