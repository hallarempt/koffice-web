<?php
  $page_title="Microsoft Word Filter";
  $location = '../../../';
  include("koffice.inc");
  include("header.inc");
?>

<p>KWord can read all text from Microsoft Word files.  Basic text formatting
(bold, italics, etc) are preserved.  Numbered headings, lists, built-in colors, tables, and internationalization support
are nearly complete.</p>

<p>Many other features (headers, footers, embedded objects, etc) are not supported.</p>

<p>KWord can not write Microsoft Word 97/2000 files. It is recommended to save
in RTF (Rich Text Format) instead.</p>

<?php
   include("footer.inc");
?>





