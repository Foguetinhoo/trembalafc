<?php

$_REQUEST_URI = filter_input(INPUT_SERVER, 'REQUEST_URI');

$INIT =  strpos($_REQUEST_URI, '?');
if ($INIT) : 
    $_REQUEST_URI =  substr($_REQUEST_URI, 0, $INIT);

endif;
$_REQUEST_URI_Pasta =  substr($_REQUEST_URI, 1);

$url =  explode('/', $_REQUEST_URI_Pasta);
// $url2 = explode('/', $_REQUEST_URI_Pasta);
// // print_r($url);f
$url[0] = ($url[0] != '' ? $url[0] : 'home');
if (file_exists("_site/$url[0].php")) :
 require("_site/$url[0].php");
 elseif (file_exists("_adm/$url[0].php")) :
    require("_adm/$url[0].php");
// // //     //     if(isset($url[1]) && file_exists("_site/$url[15]/$url[1].php")):
// // //     //         require("_site/$url[15]/$url[1].php");
// // //     //     else : 
// // //     //         require(`View/4154.php`);    
// // //     //     endif;
else: require("Resources/erro/404.php");
endif;

