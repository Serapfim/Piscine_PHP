<?php
function ft_split($str){
  $array = array(explode(' ', $str));

  for ($j = 0; $j < count($array) - 1; $j++){
    for ($i = 0; $i < count($array) - $j - 1; $i++){
      if ($array[$i] < $array[$i + 1]){
        $tmp_var = $array[$i + 1];
        $array[$i + 1] = $array[$i];
        $array[$i] = $tmp_var;
      }
    }
  }
  var_dump($array);
}
?>
