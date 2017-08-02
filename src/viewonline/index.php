<?php

// set the content type to css
  header("Content-type: text/css; charset: UTF-8");

// assign referer value
  $ref = $_SERVER['HTTP_REFERER'];

// if referer is present, generate css
  if( $ref ) {
    echo '.online { background:green !important }';
  }

?>
