<?php
  $page_title="HowTo write KOffice Documentation";
  $site_root='../';
  include("koffice.inc");
  include("header.inc");
?>

<h2>Here you find Information on how to write KOffice documentation</h2>

<p><a href="mailto:raphael.langerhorst@kdemail.net">Raphael Langerhorst</a>
coordinates KOffice documentation work, please contact him for any
questions or feedback.</p>

<h3>KOffice Documentation Cookbook</h3>

<p>A cookbook for writing KOffice documentation including long term plans
is currently being prepared and will be available here when it is ready,
contact Raphael if you want a preliminary version.</p>

<h3>Tips and Tricks</h3>

<p>Here are some tips about your editor:

<ul>
    <li>set your editor to wrap lines at 80 characters</li>
    <li>open and save as utf8 in your editor</li>
    <li>choose the docbook syntax highlighting</li>
</p>

<p>Screenshots: theme, style and color can be set in KControl.
Please use KDE defaults as much as possible for consistent screenshots.</p>

<h3>Information on KDE Documentation</h3>

<p>You can find a lot of information on how to write KDE documentation at
<a href="http://i18n.kde.org/sitedoc.html">http://i18n.kde.org/sitedoc.html</a>
<br />All KDE documentation guidelines found there also apply for
KOffice documentation unless stated otherwise here or in the KOffice
Documentation Cookbook (soon to be available).</p>

<br />
 <br />
 <hr width="30%" align="center" />
 <p>
 Last update: <?php echo date ("Y-m-d", filemtime(__FILE__)); ?>
 </p>
<?php
  include("footer.inc");
?>
