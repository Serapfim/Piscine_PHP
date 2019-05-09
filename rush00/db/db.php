<?php
$dns = "mysql:host=$host;dbname=$db;charset=$charset";
try{
  $server = new PDO ( $user, $password);
} catch (PDOException $e) {
    die('Подключение не удалось: ' . $e->getMessage());
}
?>
