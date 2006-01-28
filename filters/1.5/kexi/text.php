<?php
  $page_title="Text Filter (including CSV support)";
  $location = '../../../';
  include("koffice.inc");
  include("header.inc");
?>

  <h2>Overview</h2>

  <p>Kexi is capable of importing data from a
  variety of text file formats.</p>

  <p>Text files containing comma-delimited fields (known as <em>Comma
  Separated Values</em>, or CSV files) may be imported into a new
  table.  Most spreadsheet and database applications can import and
  export in this format, making this an appropriate format to migrate
  textual data between different applications.</p>

  <p>Kexi also supports other field delimiters, such as tabs, and may
  be configured for more unusual text file formats.</p>


<?php
   include("footer.inc");
?>





