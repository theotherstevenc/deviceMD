<?php
header("Content-type: text/css; charset: UTF-8");

echo " /* jun 2017 -- ios version detector: a dynamic stylesheet for emails. developed by steven.c */ ";

$user_agent =    $_SERVER['HTTP_USER_AGENT']; //assign user agent (aka device) to variable
$client     =    $_SERVER['HTTP_REFERER'];    //assign location reference to determine client if possible

// create function
function getOS() {

  global $user_agent; //set as global to allow access outside of the function
  $os_platform =   "UnknownOS"; //set intial value for basic default (not used)
  $os_array    =   [
  // use lowercase i to match uppercase and lowercase
  // delimiter of choice is the forward slash
  '/iphone os 8_0/i'     =>  'iPhone_8_0',
  '/iphone os 8_0_1/i'   =>  'iPhone_8_0_1',
  '/iphone os 8_0_2/i'   =>  'iPhone_8_0_2',

  '/iphone os 8_1/i'     =>  'iPhone_8_1',
  '/iphone os 8_1_1/i'   =>  'iPhone_8_1_1',
  '/iphone os 8_1_2/i'   =>  'iPhone_8_1_2',
  '/iphone os 8_1_3/i'   =>  'iPhone_8_1_3',

  '/iphone os 8_2/i'     =>  'iPhone_8_2',

  '/iphone os 8_3/i'     =>  'iPhone_8_3',

  '/iphone os 8_4/i'     =>  'iPhone_8_4',
  '/iphone os 8_4_1/i'   =>  'iPhone_8_4_1',

  '/iphone os 9_0/i'     =>  'iPhone_9_0',
  '/iphone os 9_0_1/i'   =>  'iPhone_9_0_1',
  '/iphone os 9_0_2/i'   =>  'iPhone_9_0_2',

  '/iphone os 9_1/i'     =>  'iPhone_9_1',

  '/iphone os 9_2/i'     =>  'iPhone_9_2',
  '/iphone os 9_2_1/i'   =>  'iPhone_9_2_1',

  '/iphone os 9_3/i'     =>  'iPhone_9_3',
  '/iphone os 9_3_1/i'   =>  'iPhone_9_3_1',
  '/iphone os 9_3_2/i'   =>  'iPhone_9_3_2',
  '/iphone os 9_3_3/i'   =>  'iPhone_9_3_3',
  '/iphone os 9_3_4/i'   =>  'iPhone_9_3_4',
  '/iphone os 9_3_5/i'   =>  'iPhone_9_3_5',

  '/iphone os 10_0/i'     =>  'iPhone_10_0',
  '/iphone os 10_0_1/i'   =>  'iPhone_10_0_1',
  '/iphone os 10_0_2/i'   =>  'iPhone_10_0_2',
  '/iphone os 10_0_3/i'   =>  'iPhone_10_0_3',

  '/iphone os 10_1/i'     =>  'iPhone_10_1',
  '/iphone os 10_1_1/i'   =>  'iPhone_10_1_1',

  '/iphone os 10_2/i'     =>  'iPhone_10_2',
  '/iphone os 10_2_1/i'   =>  'iPhone_10_2_1',

  '/iphone os 10_3/i'     =>  'iPhone_10_3',
  '/iphone os 10_3_1/i'   =>  'iPhone_10_3_1',
  '/iphone os 10_3_2/i'   =>  'iPhone_10_3_2',
  '/iphone os 10_3_3/i'   =>  'iPhone_10_3_3',
  ];

  foreach ($os_array as $regex => $value) { //loop through the array, assign the KEY value to $regex, and assign the VALUE to $value
    if (preg_match($regex, $user_agent)) { //look for $regex (KEY in the array) in the $useragent
      $os_platform    =   $value; //if there is a match, assign the array VALUE to $os_platform
    }
  }

  return $os_platform; //assign value to the function - should be a VALUE from the array
}

$user_os = getOS(); //assign the result of the function to $user_os


switch ($user_os) {
  case "iPhone_8_0":
  echo ".iPhone_8_0 {display:block !important;}";
  break;

  case "iPhone_8_0_1":
  echo ".iPhone_8_0_1 {display:block !important;}";
  break;

  case "iPhone_8_0_2":
  echo ".iPhone_8_0_2 {display:block !important;}";
  break;

// ******************
  case "iPhone_8_1":
  echo ".iPhone_8_1 {display:block !important;}";
  break;

  case "iPhone_8_1_1":
  echo ".iPhone_8_1_1 {display:block !important;}";
  break;

  case "iPhone_8_1_2":
  echo ".iPhone_8_1_2 {display:block !important;}";
  break;

  case "iPhone_8_1_3":
  echo ".iPhone_8_1_3 {display:block !important;}";
  break;

// ******************
  echo ".iPhone_8_2 {display:block !important;}";
  break;

// ******************
  echo ".iPhone_8_3 {display:block !important;}";
  break;

// ******************
  echo ".iPhone_8_4 {display:block !important;}";
  break;

  echo ".iPhone_8_4_1 {display:block !important;}";
  break;

// ******************

  case "iPhone_9_0":
  echo ".iPhone_9_0 {display:block !important;}";
  break;

  case "iPhone_9_0_1":
  echo ".iPhone_9_0_1 {display:block !important;}";
  break;

  case "iPhone_9_0_2":
  echo ".iPhone_9_0_2 {display:block !important;}";
  break;

// ******************

  case "iPhone_9_1":
  echo ".iPhone_9_1 {display:block !important;}";
  break;

// ******************

  case "iPhone_9_2":
  echo ".iPhone_9_2 {display:block !important;}";
  break;

  case "iPhone_9_2_1":
  echo ".iPhone_9_2_1 {display:block !important;}";
  break;

  case "iPhone_9_3":
  echo ".iPhone_9_3 {display:block !important;}";
  break;

  case "iPhone_9_3_1":
  echo ".iPhone_9_3_1 {display:block !important;}";
  break;

  case "iPhone_9_3_2":
  echo ".iPhone_9_3_2 {display:block !important;}";
  break;

  case "iPhone_9_3_3":
  echo ".iPhone_9_3_3 {display:block !important;}";
  break;

  case "iPhone_9_3_4":
  echo ".iPhone_9_3_4 {display:block !important;}";
  break;

  case "iPhone_9_3_5":
  echo ".iPhone_9_3_5 {display:block !important;}";
  break;

// ******************

  case "iPhone_10_0":
  echo ".iPhone_10_0 {display:block !important;}";
  break;

  case "iPhone_10_0_1":
  echo ".iPhone_10_0_1 {display:block !important;}";
  break;

  case "iPhone_10_0_2":
  echo ".iPhone_10_0_2 {display:block !important;}";
  break;

  case "iPhone_10_0_3":
  echo ".iPhone_10_0_3 {display:block !important;}";
  break;

// ******************

  case "iPhone_10_1":
  echo ".iPhone_10_1 {display:block !important;}";
  break;

  case "iPhone_10_1_1":
  echo ".iPhone_10_1_1 {display:block !important;}";
  break;

// ******************

  case "iPhone_10_2":
  echo ".iPhone_10_2 {display:block !important;}";
  break;

  case "iPhone_10_2_1":
  echo ".iPhone_10_2_1 {display:block !important;}";
  break;

// ******************

  case "iPhone_10_3":
  echo ".iPhone_10_3 {display:block !important;}";
  break;

  case "iPhone_10_3_1":
  echo ".iPhone_10_3_1 {display:block !important;}";
  break;

  case "iPhone_10_3_2":
  echo ".iPhone_10_3_2 {display:block !important;}";
  break;

  case "iPhone_10_3_3":
  echo ".iPhone_10_3_3 {display:block !important;}";
  break;

}




















?>
