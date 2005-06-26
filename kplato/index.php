<?php
  $page_title='KPlato';
  $site_root='../';
  include("koffice.inc");
  include("header.inc");
?>
<?php
  $appinfo = new AppInfo("KPlato");
  //$appinfo->setIcon( "pics/hi48-app-kword.png", "48", "48");
  //$appinfo->setVersion($kplatoversion);
  $appinfo->setLicense("lgpl");
  $appinfo->setCopyright("2001", "the KPlato Team");
  $appinfo->addAuthor("Thomas Zander", "z&#x61;n&#x64;e&#00114;&#x40;&#107;&#x64;e&#x2e;&#x6f;&#0114;&#103;");
  $appinfo->addAuthor("Jim Sabatke", "jsa&#x62;atk&#x65;&#x40;&#00101;&#120;&#101;&#099;&#112;c&#046;&#99;o&#109;");
  $appinfo->addAuthor("Bo Thorsen", "bo&#64;&#0116;&#0104;&#00111;&#114;se&#110;-&#99;&#111;&#00110;s&#117;lti&#110;&#103;&#x2e;dk");
  $appinfo->show();
?>

<h2>Description</h2>

      <p><b>Description:</b><br />
         KPlato is a project management application, allowing for the
         planning and scheduling of projects.  It is in the very early
         stages of development.
      </p>

      <p><b>Mailing List:</b><br />
         The KPlato mailing list is at <a href="&#109;&#97;i&#108;&#x74;o&#x3a;&#0107;p&#0108;ato&#x40;kd&#x65;.&#x6f;r&#0103;">&#x6b;&#x70;l&#x61;t&#111;&#64;k&#00100;e&#x2e;&#0111;rg</a><br />
         Subscription information can be found <a href="http://mail.kde.org/mailman/listinfo/kplato">here</a>.<br />
         Online archives at: <a href="http://lists.kde.org/?l=kplato&amp;r=1&amp;w=2">lists.kde.org</a>
      </p>

<?php include("footer.inc"); ?>
