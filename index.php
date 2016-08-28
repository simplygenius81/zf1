<?php
require 'core/main.php';
$location=BaseUrl;
$file_name="";
$file=$location.$file_name;
$url_trail=$_SERVER['REQUEST_URI'];
$file_data = fopen($file,"r")or die("Unable to open file!");
$file_string=null;
while(!feof($file_data)) {
  $file_string=$file_string.fgetc($file_data);
}

$url=str_replace('/index.php/',$location.'',$_SERVER['PHP_SELF']);
$style="body{background:red!important;}";
$arp = array(
array('<body','<style>'.$style.'</style><body'),
array('href="/CSS','href="'.$location.'CSS'),
array('assets/',$location.'assets/'),
array('url(/images/branding','url('.$location.'images/branding'),
);
fstr($arp);
echo '<pre>';
print_r($arp);
echo '</pre>';
echo $url.'<br/>';
$param_array=array_values(array_filter(explode('/',$url_trail)));
var_dump($param_array);
fclose($file_data);
