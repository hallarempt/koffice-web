<?php
  $page_title="PalmDoc Filter";
  $location = '../../../';
  include("koffice.inc");
  include("header.inc");
?>

<p>KWord is able to read and write PalmDoc files, even with compression. The PalmDoc
format doesn't specify text formatting, so all character formatting (bold, italics, etc) is lost when exporting to
this format.</p>
<h3 class="title">Note</h3><p>In order to read PalmDoc files on your handheld, you will need a reader.  Three common readers are the
<a href="http://gutenpalm.sourceforge.net" target="_top">Weasel Reader</a>, <a href="http://www.aportis.com" target="_top">AportisDoc</a>,
or <a href="http://www.isilo.com" target="_top">iSilo</a>.</p>

<?php
   include("footer.inc");
?>





