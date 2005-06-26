<?php
  $page_title="KPresenter";
  $site_root='../';
  include("koffice.inc");
  include("header.inc");
?>

<?php
  $appinfo = new AppInfo("KPresenter");
  $appinfo->setIcon( "pics/hi48-app-kpresenter.png", "48", "48");
  $appinfo->setVersion($kpresenterversion);
  $appinfo->setLicense("lgpl");
  $appinfo->setCopyright("1998", "the KPresenter Team");
  $appinfo->addAuthor("Reginald Stadlbauer", "r&#101;g&#0103;&#x69;e&#x40;kde.o&#00114;&#x67;");
  $appinfo->addContributor("David Faure", "fa&#117;&#00114;e&#64;kd&#0101;.&#x6f;rg");
  $appinfo->addContributor("Laurent Montel", "&#109;&#00111;ntel&#x40;&#107;&#00100;&#00101;.or&#x67;");
  $appinfo->addContributor("Wernet Trobin", "&#116;robi&#x6e;&#064;&#107;&#x64;&#0101;.o&#114;g");
  $appinfo->addContributor("Toshitaka Fujioka", "fuj&#105;ok&#0097;&#0064;kde.or&#103;");
  $appinfo->addContributor("Luk&aacute;&scaron; Tinkl", "l&#x75;&#107;a&#00115;&#064;kd&#101;&#x2e;org");
  $appinfo->addContributor("Thorsten Zachmann", "t.zac&#104;m&#097;n&#110;&#x40;&#x7a;a&#103;&#x67;e.de");
  $appinfo->addContributor("Ariya Hidayat", "a&#114;iya&#64;kd&#101;.&#111;&#x72;&#x67;");
  $appinfo->addContributor("Percy Leonhardt", "p&#x65;r&#x63;&#121;&#64;er&#105;&#x73;23.de");
  $appinfo->show();
?>


<h2>Description</h2>
    <p>KPresenter is a presentation application. Its features include:</p>

    <ul>
    <li>inserting and editing rich text (with bullet points, indentation, spacing, colors, fonts, etc.);</li>
    <li>embedding images and clip-art (.wmf files);</li>
    <li>inserting auto-forms; </li>
    <li>setting many object properties (background, many types of gradients, pen, shadow, rotation, object specific settings, etc.);</li>
    <li>working with objects (resizing, moving, lowering, raising, etc.);</li>
    <li>grouping/ungrouping objects; </li>
    <li>headers/footers; </li>
    <li>advanced undo/redo; </li>
    <li>setting background (color, gradients, pictures, clip-arts, etc.); </li>
    <li>assigning effects for animating objects and defining effects for changing slides;</li>
    <li>playing screen presentations with effects; </li>
    <li>print as PostScript; </li>
    <li>creating HTML slideshows with a few mouse clicks;</li>
    <li>templates (pre- and user-defined); </li>
    <li>using XML as the document format;</li>
    <li>a Presentations Structure Viewer</li>
    </ul>

    <p>You can find some of the presentations that KPresenter has been used for: <a href="http://www.kde.org/kdeslides/">http://www.kde.org/kdeslides/</a>.</p>

<?php
  include("footer.inc");
?>
