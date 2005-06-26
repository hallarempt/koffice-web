<?php
  $page_title="Kugar";
  $site_root='../';
  include("koffice.inc");
  include("header.inc");
?>

<?php
  $appinfo = new AppInfo("Kugar");
  $appinfo->setIcon( "pics/cr48-app-kugar.png", "48", "48");
  $appinfo->setVersion($kugarversion);
  $appinfo->setLicense("gpl");
  $appinfo->setCopyright("2002", "the Kugar Team");
  $appinfo->addAuthor("Keith Davis", "i&#x6e;f&#111;&#x40;m&#00117;&#00116;&#x69;&#110;y&#98;ay&#115;oft&#x77;a&#114;e&#46;&#00099;o&#109;");
  $appinfo->addContributor("Alexander Dymo", "&#099;&#0108;&#x6f;u&#100;&#116;em&#x70;le&#x40;&#x6d;ks&#97;t.net");
  $appinfo->addContributor("Joseph Wenninger", "&#106;ow&#101;&#110;n&#0064;kd&#101;&#x2e;&#x6f;&#114;g");
  $appinfo->addContributor("Per Winkvist", "per.w&#105;&#x6e;kv&#00105;st&#064;&#0099;e&#x6c;lnet&#x77;&#x6f;r&#x6b;&#046;&#x63;&#x6f;m");
  $appinfo->show();
?>

<h2>Description</h2>

<p>
Kugar is a KDE tool for generating business quality reports which can be
viewed and printed. It includes a standalone report viewer and a KPart
report viewer. The latter means that any KDE application can embed the
report viewing functionality and that reports can be viewed using the
Konqueror browser. 
</p>
<p>
Kugar works by merging application generated data with a template to produce
the final report. Both the data and the template are specified using XML.
This approach means that applications only need worry about generating the
data itself. A template can be referenced via a URL which allows businesses
to create a centrally managed template library. 
</p>
<p>
Features include:</p>

<ul>
<li>Kugar report designer.</li>
<li>Report printing in Postscript.</li>
<li>Database/datasource neutral, data is supplied to the report engine in XML.</li>
<li>Support for direct database access.</li>
<li>Open report definition files, report layout is stored in XML.</li>
<li>Full control of fonts, colors, text alignment and wrapping.</li>
<li>Report Header/Footer.</li>
<li>Page Header/Footer.</li>
<li>Detail Section.</li>
<li>Detail Header/Footer.</li>
<li>Unlimited number of detail levels.</li>
<li>Grand totals: count, sum, average, variance and standard deviation.</li>
<li>Additional formatting (negative numbers, currency, commas for numbers and
  dates).</li>
</ul>

<?php include("footer.inc"); ?>

