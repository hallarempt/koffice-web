<?php
include("handler.inc");
$handler = new Handler404();
$handler->add("/downloads", "/addons");
$handler->add("/contact.phtml", "/contact");
$handler->add("/kpresenter.html", "/kpresenter");
$handler->add("/developers.phtml", "/people.php");
$handler->add("/install-binaries.phtml", "/download");
$handler->add("/install-source.phtml", "/download/source.php");
$handler->add("/signatures.phtml", "/download/signatures.php");
$handler->add("/support.phtml", "/support");
$handler->add("/supporters.phtml", "/support/supporters.php");
$handler->add("/filters/status.php", "/developer/filters/status.php");
$handler->add("/kontour/index.php", "/karbon/index.php");
// The help link wants /documentation, www.koffice.org has not any
// so forward to /information
$handler->add("/documentation", "/information");
$handler->execute();
?>

