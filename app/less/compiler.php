<?php
require_once("../../lib/lessphp/lessc.inc.php");

if ( file_exists($_GET["file"]) ) {
    header("Content-Type: text/css");
    try {
        $less = new lessc($_GET["file"]);
        echo $less->parse();
    } catch (Exception $e) {
        error_log($e);
    }
} else {
    header('HTTP/1.x 404 Not Found');
}
