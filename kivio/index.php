<?php
  $page_title="Kivio";
  $site_root='../';
  include("koffice.inc");
  include("header.inc");
?>

<?php
  include("kivio.inc");
  $appinfo->showIconAndCopyright();
?>

<h2>Description</h2>

<p>
Kivio is a flowcharting and diagramming application for the KOffice application
suite, and has an userinterface that is similar to Visio&reg;.
It is fully integrated into KOffice and can for example be embedded into KWord.
</p>

<p>
  <b>Features:</b></p>
  <ul>
    <li>Scriptable stencils using Python.</li>
    <li>Support for Dia stencils.</li>
    <li>Plugin framework for adding more functionality.</li>
  </ul>

<?php include("footer.inc"); ?>
