<?php
try{
    $pdoConnect = new PDO("mysql:host=localhost;dbname=classroommanagement", "root", "");
    $pdoConnect ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo $e->getMessage();
    exit();
}
?>