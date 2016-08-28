<?php
require 'config.php';

function fstr($data_array){
  global $file_string;
  foreach($data_array as $data){

    //$file_string=$file_string.$data[0];//str_replace($data[0],$data[1],$file_string);
    $file_string=str_replace($data[0],$data[1],$file_string);
  }
  echo $file_string;
  //echo 'fstr';
}


 ?>
