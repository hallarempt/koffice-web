<?php
  $page_title="HowTo write KOffice Documentation";
  $site_root='../';
  include("koffice.inc");
  include("header.inc");
?>

<h3>KOffice Documentation Guidelines</h3>

There are many things that are common to all KOffice handbooks. A KOffice
handbook should:

<ul>
    <li>introduce the user to the workflow of each component</li>
    <li>fully describe the functionality, including examples and short tutorials</li>
    <li>use screenshots wherever appropriate - visually appealing documentation is better than just text</li>
    <li>contain a command reference that explains all menu items (including context menus)</li>
</ul>

<h3>Tips and Tricks</h3>

<p>Here are some tips about your <b>editor</b>:
</p>
<ul>
    <li>set your editor to wrap lines at 80 characters</li>
    <li>open and save as utf8 in your editor</li>
    <li>choose the docbook syntax highlighting</li>
    <li>do not indent your docbook files</li>
</ul>

<p><b>Screenshots</b>: theme, style and color can be set in KControl. Theme and
style are <tt>Plastik</tt> and color is KDE default.<br />
Please use those KDE defaults as much as possible for consistent screenshots
along with standard fonts.</p>

<h3>Information on KDE Documentation</h3>

<p>You can find a lot of information on how to write KDE documentation at
<a href="http://i18n.kde.org/docs/">http://i18n.kde.org/docs/</a>
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
