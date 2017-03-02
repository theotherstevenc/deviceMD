<?php
header("Content-type: text/css; charset: UTF-8");

echo " /* dec 2014 -- email user agent detector: a dynamic stylesheet for emails. developed by steven.c */ ";

$user_agent =    $_SERVER['HTTP_USER_AGENT']; //assign user agent (aka device) to variable
$client     =    $_SERVER['HTTP_REFERER'];    //assign location reference to determine client if possible

// create function
function getOS() {

  global $user_agent; //set as global to allow access outside of the function
  $os_platform =   "UnknownOS"; //set intial value for basic default (not used)
  $os_array    =   [
  // use lowercase i to match uppercase and lowercase
  // delimiter of choice is the forward slash
  '/windows nt 6.2/i'     =>  'Windows 8',
  '/windows nt 6.1/i'     =>  'Windows 7',
  '/windows nt 6.0/i'     =>  'Windows Vista',
  '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
  '/windows nt 5.1/i'     =>  'Windows XP',
  '/windows xp/i'         =>  'Windows XP',
  '/windows nt 5.0/i'     =>  'Windows 2000',
  '/windows me/i'         =>  'Windows ME',
  '/win98/i'              =>  'Windows 98',
  '/win95/i'              =>  'Windows 95',
  '/win16/i'              =>  'Windows 3.11',
  '/macintosh|mac os x/i' =>  'Mac OS X',
  '/mac_powerpc/i'        =>  'Mac OS 9',
  '/linux/i'              =>  'Linux',
  '/ubuntu/i'             =>  'Ubuntu',
  '/iphone/i'             =>  'iPhone',
  '/ipod/i'               =>  'iPod',
  '/ipad/i'               =>  'iPad',
  '/android/i'            =>  'Android',
  '/blackberry/i'         =>  'BlackBerry',
  '/webos/i'              =>  'Mobile'
  ];

  foreach ($os_array as $regex => $value) { //loop through the array, assign the KEY value to $regex, and assign the VALUE to $value
    if (preg_match($regex, $user_agent)) { //look for $regex (KEY in the array) in the $useragent
      $os_platform    =   $value; //if there is a match, assign the array VALUE to $os_platform
    }
  }

  return $os_platform; //assign value to the function - should be a VALUE from the array
}

$user_os = getOS(); //assign the i

if ($user_os == "iPhone") {
echo
"
.ios { display: block !important;}
.default { display: none !important;}
"
; }

//=====================================================================================================================================

elseif ($user_os == "iPad") {
echo
"
.ios { display: block !important;}
.default { display: none !important;}
"
; }

//=====================================================================================================================================

elseif ($user_os == "iPod") {
echo
"
.ios { display: block !important;}
.default { display: none !important;}
"
; }

//=====================================================================================================================================

elseif($user_os == "Android"){
echo
"
.droid { display: block !important;}
.default { display: none !important;}
"
; }

//=====================================================================================================================================

else {
echo
"
.default { display: block !important; }
"
; }

?>
