<?php
include("handler.inc");
$handler = new Handler404();
$handler->add("/downloads", "/addons");
$handler->add("/contact.phtml", "/contact");
$handler->add("/kpresenter.html", "/kpresenter");
$handler->add("/developers.php", "/people.php");
$handler->add("/install-binaries.php", "/download");
$handler->add("/install-source.php", "/download/source.php");
$handler->add("/signatures.php", "/download/signatures.php");
$handler->add("/support.php", "/support");
$handler->add("/supporters.php", "/support/supporters.php");
$handler->execute();
?>

