<?php

// set the content type to css
  header("Content-type: text/css; charset: UTF-8");

// identify the user agent string
 $ua = $_SERVER['HTTP_USER_AGENT'];

// match values
 $var_iphone = strpos($ua,"iPhone");
 $var_1033   = strpos($ua,"10_3_3");
 $var_iOS    = strpos($ua,"like Mac OS X");

// generate css
 if( $var_iphone && $var_iOS ){

  if( $var_1033 ){
    echo '.ios10_3_3 { background:green !important }';
  }

 }

?>
