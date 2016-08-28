<?php
require 'config.php';
$location="http://www.redtube.com/";
$file_name="";
$file=$location.$file_name;
$url_trail=str_replace('/index.php/','',$_SERVER['PHP_SELF']);
$file_data = fopen($file,"r")or die("Unable to open file!");
//echo fread($file_data,filesize($file));
//echo fgets($file_data);
$file_string=null;
while(!feof($file_data)) {
  $file_string=$file_string.fgetc($file_data);
}
$file_string=str_replace('href="/CSS','href="'.$location.'CSS',$file_string);
$file_string=str_replace('assets/',$location.'assets/',$file_string);
$file_string=str_replace('url(/images/branding','url('.$location.'images/branding',$file_string);
$url_trail=str_replace('/index.php/',$location.'',$_SERVER['PHP_SELF']);
echo $url_trail;
//echo $file_string;

fclose($file_data);

