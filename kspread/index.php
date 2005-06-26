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
  $appinfo->addAuthor("Torben Weis", "&#119;e&#105;&#115;&#64;&#107;de.org");
  $appinfo->addContributor("Laurent Montel", "mont&#0101;&#00108;&#x40;&#107;&#0100;e.org");
  $appinfo->addContributor("Phillipp Mueller", "phillipp.m&#117;&#101;&#00108;&#0108;er&#64;gm&#00120;.de");
  $appinfo->addContributor("Ariya Hidayat", "ar&#00105;y&#x61;&#x40;&#107;&#x64;&#x65;&#46;o&#0114;g");
  $appinfo->addContributor("Norbet Andres", "&#00110;a&#00110;dre&#x73;&#0064;web&#x2e;d&#101;"); 
  $appinfo->addContributor("Luk&aacute;&scaron; Tinkl", "l&#117;&#x6b;a&#x73;&#x40;kd&#101;.&#111;&#x72;&#103;"); 
  $appinfo->addContributor("Meni Livne", "&#108;&#x69;v&#x6e;e&#00064;k&#0100;e&#46;org"); 
  $appinfo->addContributor("Raphael Langerhorst", "raphael.&#108;a&#x6e;&#103;&#x65;r&#x68;&#00111;&#x72;st&#x40;&#107;&#x64;&#x65;m&#x61;&#x69;&#108;&#x2e;ne&#116;"); 
  $appinfo->addContributor("Tomas Mecir", "&#109;ec&#x69;r&#116;&#64;g&#109;&#x61;il&#00046;com"); 
  $appinfo->addContributor("Inge Wallin", "&#105;ng&#00101;&#64;&#x6c;&#121;sa&#x74;or&#x2e;l&#105;u&#x2e;s&#x65;"); 
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




