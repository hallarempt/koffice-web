<?php
  include("../variables.inc");
  $url = "http://" . $HTTP_HOST . "/releases/" . $currentversion . "-release.phtml";
  header("Location: $url");
?>
