<?php
  $page_title='KPlato';
  $site_root='../';
  include("koffice.inc");
  include("header.inc");
?>
<?php
  include("kplato.inc");
  $appinfo->showIconAndCopyright();
?>

      <p>
         KPlato is a project management application, allowing for the
         planning and scheduling of projects.  It is in the very early
         stages of development.
      </p>

<center>
  <?php
    $gallery = new ImageGallery("KPlato- Screenshot");
    $gallery->addImage("pics/plain_2005_09_330.png",
                       "pics/plain_2005_09.png",
                       330, 247,
                       "[Screenshot]", "",
                       "KPlato with the plain template");
    $gallery->show();
  ?>
</center>

      <p><b>Mailing List:</b><br />
         The KPlato mailing list is at <a href="&#109;&#97;i&#108;&#x74;o&#x3a;&#0107;p&#0108;ato&#x40;kd&#x65;.&#x6f;r&#0103;">&#x6b;&#x70;l&#x61;t&#111;&#64;k&#00100;e&#x2e;&#0111;rg</a><br />
         Subscription information can be found <a href="http://mail.kde.org/mailman/listinfo/kplato">here</a>.<br />
         Online archives at: <a href="http://lists.kde.org/?l=kplato&amp;r=1&amp;w=2">lists.kde.org</a>
      </p>

 <br />
 <hr width="30%" align="center" />
 <p>
 Last update: <?php echo date ("Y-m-d", filemtime(__FILE__)); ?>
 </p>
<?php include("footer.inc"); ?>
