<?php
header("Content-type: text/css; charset: UTF-8");

echo " /* apr 2017 -- email user agent detector: a dynamic stylesheet for emails. developed by steven.c */ ";

$client = $_SERVER['HTTP_REFERER'];    //assign location reference to determine client if possible
if ($client) {
  $onlineVersion = true;
}

if ($onlineVersion) {
echo '.onlineVersionTestContent:after { content: " yes. a HTTP_REFERER client has been recorded, and will generate css to override forms. HTTP_REFERER: '. $client .' "} ' ;
echo '.ext { background:green !important; }' ;
echo '#withform{display:block !important;}#noform{display:none !important;}';
} else {
echo '.onlineVersionTestContent:after { content: " no HTTP_REFERER client recorded, so it will not generate overriding code to show forms - but external css content:after is supported"} ' ;
echo '.ext { background:green !important; }' ;
}

?>
