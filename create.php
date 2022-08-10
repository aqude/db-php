<?php
if (isset($_POST["username"]) && isset($_POST["age"])) {

    $conn = new mysqli("localhost", "root", "root", "testdb2");
    if($conn->connect_error) die("Ошибка: " . $conn->connect_error);
    $name = $conn->real_escape_string($_POST["username"]);
    $age = $conn->real_escape_string($_POST["age"]);
    $sql = "INSERT INTO Users (name, age) VALUES ('$name', $age)";

    if($conn->query($sql)){
        echo "Данные успешно добавлены";
    } else{
        echo "Ошибка sql: " . $conn->error;
    }
    $conn->close();
}
