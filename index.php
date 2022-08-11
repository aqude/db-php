<?php

$server = "localhost";
$username = "root";
$password = "root";

$connect = new mysqli($server, $username, $password, "testdb2");
if ($connect -> connect_error) {
    die("Connection failed " . $connect -> connect_error);
} else {
    echo "Connection good" . "\n";
}
// Создание дб
//$sql = "CREATE DATABASE testdb2";
//if($connect ->
// query($sql)){
//    echo "База данных успешно создана";
//} else{
//    echo "Ошибка: " . $connect->error;
//}
// Создание табл
//$arrSql = [
//    "CREATE TABLE Users (id INTEGER AUTO_INCREMENT PRIMARY KEY, name VARCHAR(30), age INTEGER);",
////    "CREATE TABLE Password (id INTEGER AUTO_INCREMENT PRIMARY KEY, name VARCHAR(30), age INTEGER);","CREATE TABLE Users (id INTEGER AUTO_INCREMENT PRIMARY KEY, name VARCHAR(30), age INTEGER);","CREATE TABLE Users (id INTEGER AUTO_INCREMENT PRIMARY KEY, name VARCHAR(30), age INTEGER);"
//
//];
//
//foreach ($arrSql as $sql) {
//    if($connect->query($sql)){
//        echo "good\n";
//    } else{
//        die("Connection failed " . $connect -> error);
//    }
//}
//$connect->close();

//$sql = "INSERT INTO Users (name, age) VALUES
//            ('Sam', 41),
//            ('Bob', 29),
//            ('Alice', 332)";

//if ($connect -> query($sql)) {
//    echo "Добавили" . "\n";
//} else {
//    die("Connection failed " . $connect -> error);
//}
$connect->close();