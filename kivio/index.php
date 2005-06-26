<?php
  $page_title="Kivio";
  $site_root='../';
  include("koffice.inc");
  include("header.inc");
?>

<?php
  $appinfo = new AppInfo("Kivio");
  $appinfo->setIcon( "pics/hi48-app-kivio.png", "48", "48");
  $appinfo->setVersion($kivioversion);
  $appinfo->setLicense("gpl");
  $appinfo->setCopyright("1998", "the Kivio Team");
  $appinfo->addAuthor("Dave Marotti", "&#108;nd&#115;ha&#114;&#x6b;&#x40;&#00118;er&#x74;ica&#0108;addict&#00105;o&#0110;&#x2e;n&#0101;&#x74;");
  $appinfo->addContributor("Peter Simonsson", "p&#115;&#110;&#x40;li&#x6e;ux&#x2e;&#115;&#x65;");
  $appinfo->addContributor("Ian Reinhart Geiser", "ge&#105;&#00115;&#101;&#114;i&#64;kd&#101;&#046;or&#103;");
  $appinfo->addContributor("Laurent Montel", "&#109;o&#x6e;tel&#064;k&#x64;&#101;.&#111;rg");
  $appinfo->addContributor("Frauke Oster", "&#x6f;s&#x74;er&#64;kde.o&#114;g");
  $appinfo->show();
?>

<h2>Description</h2>

<p>
Kivio is a flowcharting and diagramming application for the KOffice application
suite, and has an userinterface that is similar to Visio&reg;.
It is fully integrated into KOffice and can for example be embedded into KWord.
</p>

<p>
  <b>Features:</b></p>
  <ul>
    <li>Scriptable stencils using Python.</li>
    <li>Support for Dia stencils.</li>
    <li>Plugin framework for adding more functionality.</li>
  </ul>

<p>
If you want to keep up with the development check out
<a href="http://www.kdedevelopers.org/blog/4">Peter Simonsson's weblog</a>
</p>

<?php include("footer.inc"); ?>
