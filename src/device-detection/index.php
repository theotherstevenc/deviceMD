<?php
header("Content-type: text/css; charset: UTF-8");

$user_agent = $_SERVER['HTTP_USER_AGENT']; // assign user agent string to variable

//************************************************************************************************************
function getOS() {

  global $user_agent; //set as global to allow access outside of the function

  $os_array = [
    // use lowercase i to match uppercase and lowercase
    // delimiter of choice is the forward slash
    // the key is the expression we are looking for in the user agent agent string
    // assign it a value for easy reference
    // key        =>   value
    '/iPhone/i'   =>  'iPhone',
    '/Android/i'  =>  'Android',
  ];

  foreach ($os_array as $regex => $value) { // loop through the array, assign the KEY value to $regex, and assign the VALUE to $value
    if (preg_match($regex, $user_agent)) { // look for $regex (KEY in the array) in the $user_agent
      $os_platform = $value; // if there is a match, assign the array VALUE to $os_platform
    }
  }

  return $os_platform; // assign value to the function - should be a VALUE from the array
}

$user_os = getOS(); // assign the result of the function to $user_os

//************************************************************************************************************
// create function to return qualifier
function getQA() {

  global $user_agent;
  $os_array    =   [
    '/like Mac OS X/i' =>  'iOS',
    '/Linux/i'         =>  'Linux',
  ];

  foreach ($os_array as $regex => $value) {
    if (preg_match($regex, $user_agent)) {
      $qa_platform = $value;
    }
  }

  return $qa_platform;
}

$user_qa = getQA();

//************************************************************************************************************
// create function to return qualifier
function getVersion() {

  global $user_agent;
  $version_array = [
    '/iphone os 10_3_1/i'   =>  'iPhone_10_3_1',
    '/iphone os 10_3_2/i'   =>  'iPhone_10_3_2',
    '/iphone os 10_3_3/i'   =>  'iPhone_10_3_3',
    '/Android 4.4.2/i'      =>  'Android_4_2_2',
    '/Android 7.0/i'        =>  'Android_7_0',
  ];

  foreach ($version_array as $regex => $value) {
    if (preg_match($regex, $user_agent)) {
      $version_platform = $value;
    }
  }

  return $version_platform;
}

$user_version = getVersion();

//=====================================================================================================================================
// generate css
// case statements can also be used
if ($user_qa == "iOS" && $user_os == "iPhone") {

  if ($user_version == "iPhone_10_3_3") {
    echo
      "
        .ios1033 { display: block !important;}
        .default { display: none !important;}
      "
  ; }

  elseif ($user_version == "iPhone_10_3_2") {
    echo
      "
        .ios1032 { display: block !important;}
        .default { display: none !important;}
      "
  ; }

  elseif ($user_version == "iPhone_10_3_1") {
    echo
      "
        .ios1031 { display: block !important;}
        .default { display: none !important;}
      "
  ; }

  else {
    echo
      "
        .ios { display: block !important;}
        .default { display: none !important;}
      "
  ; }

}

if ($user_qa == "Linux" && $user_os == "Android") {

  if($user_version == "Android_7_0"){
    echo
      "
        .droid7 { display: block !important;}
        .default { display: none !important;}
      "
  ; }
  elseif($user_version == "Android_4_2_2"){
    echo
      "
        .droid422 { display: block !important;}
        .default { display: none !important;}
      "
  ; }
  else {
    echo
      "
        .droid { display: block !important;}
        .default { display: none !important;}
      "
  ; }
}
//=====================================================================================================================================


?>
