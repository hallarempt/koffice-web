<?php echo("&lt;?xml version=\"1.0\" encoding=\"UTF-8\"?&gt;"); ?>
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>I18N Test</title>
 </head>
 <body>
  <?php $lang=$HTTP_GET_VARS["lang"]; ?>
  <p>Language: <?php echo $lang; ?><br /></p>
  <?php
    setlocale(LC_ALL, $lang);
    bindtextdomain("index", ".");
    textdomain("index");
  ?>
  <p>Color: <?php echo _("Color"); ?></p>
  <p>Man: <?php echo _("Man"); ?></p>
  <p>Woman: <?php echo _("Woman"); ?></p>
  <p>Computer: <?php echo _("Computer"); ?></p>
 </body>  
</html>
