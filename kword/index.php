<?php
  $page_title="KWord";
  $site_root='../';
  include("koffice.inc");
  include("header.inc");
?>

<?php
  $appinfo = new AppInfo("KWord");
  $appinfo->setIcon( "pics/hi48-app-kword.png", "48", "48");
  $appinfo->setVersion($kwordversion);
  $appinfo->setLicense("lgpl");
  $appinfo->setCopyright("1998", "the KWord Team");
  $appinfo->addAuthor("Reginald Stadlbauer", "reggie@kde.org");
  $appinfo->addAuthor("Torben Weis", "weis@kde.org");
  $appinfo->addContributor("David Faure", "faure@kde.org");
  $appinfo->addContributor("Thomas Zander", "zander@kde.org");
  $appinfo->addContributor("Shaheed Haque", "srhaque@ieee.org");
  $appinfo->addContributor("Laurent Montel", "montel@kde.org");
  $appinfo->addContributor("Sven L&uuml;ppken", "sven@kde.org");
  $appinfo->show();
?>

<h2>Description</h2>
      <p>KWord is a frame-based word-processing and desktop publishing application. KWord is capable of creating demanding and professional looking documents. Whether you are a corporate or home user, production artist or student, KWord will prove a valuable and easy to use tool for all your word processing and layout needs.</p>

      <p>KWord is a wordprocessor based on frames. This can be used to place components in precise locations, as with many professional DTP applications. KWord can also handle huge amounts of texts and allows you to do professional markup with ease.</p>

     <p>KWord's features include:</p>

     <ul>
     <li>paragraph style sheets (borders, alignment, spacing, indentation, bullet points, tab stops, page breaks, and font type, style, color and size), together with a stylist to edit, add, remove and update styles (a number of predefined styles are provided);</li>
     <li>a frame orientation, suitable for simple desktop publishing (DTP); </li>
     <li>numerous preset as well as custom page sizes;</li>
     <li>multiple columns per page;</li>
     <li>headers and footers (including different first page headers/footers);</li>
     <li>variables, such as page number, company name, user name, document summary, date and time or a custom variable;</li>
     <li>tables;</li>
     <li>embedding of text frames, images and clip-art (.wmf and .svg files);</li>
     <li>chapter numbering;</li>
     <li>auto-generation of table of contents;</li>
     <li>auto-correction and spell checking</li>
     <li>templates</li>
     </ul>

     <p>If you are having trouble getting the Euro character working, take a look at
       <a href="euro.php">this page</a>.
     </p>

<?php include("footer.inc"); ?>

