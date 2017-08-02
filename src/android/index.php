<?php

// set the content type to css
  header("Content-type: text/css; charset: UTF-8");

// identify the user agent string
 $ua = $_SERVER['HTTP_USER_AGENT'];

// match values
 $device = strpos($ua,"Android");

// generate css

  if( $device ){
    echo '.android { background:green !important }';
  }

?>
