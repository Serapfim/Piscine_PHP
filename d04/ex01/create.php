<?php
session_start();

function valid_dat(){
  if (isset($_GET['login']) && $_GET['login'] != NULL &&
      isset($_GET['passwd']) && $_GET['passwd'] != NULL &&
      ($_GET['submit'] && $_GET['submit'] === "OK")) {
        $tab['login'] = $_POST['login'];
        $tab['passwd'] = hash(sha512, $_POST['passwd']);
      }
      else{
        echo "ERROE\n";
        exit();
      }
      return($tab);
}


?>
