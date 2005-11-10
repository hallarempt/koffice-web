<?php
  $page_title="HowTo write KOffice Documentation";
  $site_root='../';
  include("koffice.inc");
  include("header.inc");
?>

<p>Here are some tips about your editor.

<ul>
    <li>set your editor to wrap lines at 80 characters</li>
    <li>open and save as utf8 in your editor</li>
    <li>choose the docbook syntax highlighting</li>
</p>

<p>Screenshots: theme, style and color in KControl</p>

<br />
 <br />
 <hr width="30%" align="center" />
 <p>
 Last update: <?php echo date ("Y-m-d", filemtime(__FILE__)); ?>
 </p>
<?php
  include("footer.inc");
?>
