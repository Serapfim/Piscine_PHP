<?php
require_once "pass.php";

function Connect() {
  $dns = "mysql:host=HOST;DB"
  $sql = new PDO($dns, $USER, $PASS);
}
?>
