<?php
  $page_title="Kugar";
  $site_root='../';
  include("koffice.inc");
  include("header.inc");
?>

<?php
  include("kugar.inc");
  $appinfo->showIconAndCopyright();
?>

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

