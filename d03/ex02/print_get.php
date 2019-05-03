<?php
$var = $_GET;
foreach ($var as $key => $valid){
  echo $key;
  echo " : ";
  echo "$valid\n";
}
?>
