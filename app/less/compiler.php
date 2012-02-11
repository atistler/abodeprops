<?php
require_once("../../lib/lessphp/lessc.inc.php");

if ( file_exists($_GET["file"]) ) {
    /*
    $expire=60*60*24*360;
    header("Content-Type: text/css");
    header('Pragma: public');
    header('Cache-Control: maxage='.$expire);
    header('Expires: ' . gmdate('D, d M Y H:i:s', time()+$expire) . ' GMT');
    header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT');
    */
    try {
        $less = new lessc($_GET["file"]);
        echo $less->parse();
    } catch (Exception $e) {
        error_log($e);
    }
} else {
    header('HTTP/1.x 404 Not Found');
}
