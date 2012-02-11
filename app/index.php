<?php
require_once("../lib/global.php");


$smarty = Util::getSmarty();

if (isset($_GET["page"])) {
    if ($smarty->templateExists($_GET["page"] . ".tpl")) {
        $smarty->display($_GET["page"] . ".tpl");
    } else {
        header('HTTP/1.x 404 Not Found');
        echo "<h1>Page Not Found</h1>";
    }
} else {
    $smarty->display(Util::getDefaultTpl());
}
