<?php
  $page_title='KSpread';
  $site_root="../";
  include("koffice.inc");
  include("header.inc");
?>


<?php
  $appinfo = new AppInfo("KSpread");
  $appinfo->setIcon( "pics/hi48-app-kspread.png", "48", "48");
  $appinfo->setVersion($kspreadversion);
  $appinfo->setLicense("lgpl");
  $appinfo->setCopyright("1998", "the KSpread Team");
  $appinfo->addAuthor("Torben Weis", "weis@kde.org");
  $appinfo->addContributor("Laurent Montel", "montel@kde.org");
  $appinfo->addContributor("Phillipp Mueller", "phillipp.mueller@gmx.de");
  $appinfo->addContributor("Ariya Hidayat", "ariya@kde.org");
  $appinfo->addContributor("Norbet Andres", "nandres@web.de"); 
  $appinfo->addContributor("Luk&aacute;&scaron; Tinkl", "lukas@kde.org"); 
  $appinfo->addContributor("Meni Livne", "livne@kde.org"); 
  $appinfo->addContributor("Raphael Langerhorst", "raphael.langerhorst@kdemail.net"); 
  $appinfo->addContributor("Tomas Mecir", "mecirt@gmail.com"); 
  $appinfo->addContributor("Inge Wallin", "inge@lysator.liu.se"); 
  $appinfo->show();
?>

<h2>Description</h2>
     <p>KSpread is a scriptable spreadsheet program which provides both table-oriented sheets and support 
     for complex mathematical formulas and statistics. KSpread's features include:</p>

<ul>
<li>multiple tables/sheets per document;</li>
<li>templates; </li>
<li>multiple chart formats for displaying data graphically;</li> 
<li>headers and footers; </li>
<li>over 100 formulas, including standard deviation, variance, present value of annuities and much more; </li>
<li>sorting; </li>
<li>scripting; </li>
<li>lists; </li>
<li>cell data validity checking with configurable warnings/actions;</li> 
<li>comments; </li>
<li>series (days of week, months of year, numbers, etc.);</li> 
<li>conditional coloring of cells; </li>
<li>hyperlinks; </li>
<li>row and column customization (size, show/hide, font type, style and size, etc.);</li> 
<li>cell customization (data/number format, precision, border, alignment, rotation, background color and pattern, 
font type, style and size, etc.). </li>
</ul>
      
<?php include("footer.inc"); ?>




