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
  $appinfo->addAuthor("Reginald Stadlbauer", "reggie@kde.org");
  $appinfo->addContributor("David Faure", "faure@kde.org");
  $appinfo->addContributor("Laurent Montel", "lmontel@mandrakesoft.com");
  $appinfo->addContributor("Wernet Trobin", "trobin@kde.org");
  $appinfo->addContributor("Toshitaka Fujioka", "fujioka@kde.org");
  $appinfo->addContributor("Luk&aacute;&scaron; Tinkl", "lukas@kde.org");
  $appinfo->addContributor("Thorsten Zachmann", "t.zachmann@zagge.de");
  $appinfo->addContributor("Ariya Hidayat", "ariya@kde.org");
  $appinfo->addContributor("Percy Leonhardt", "percy@eris23.de");
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

    <p>You can find some of the presentations that KPresenter has been used for: <a href="http://www.kde.org/kdeslides/index.html">http://www.kde.org/kdeslides/index.html</a>.</p>

<?php
  include("footer.inc");
?>
