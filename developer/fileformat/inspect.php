<?php
  $page_title="How to inspect an OASIS OpenDocument file";
  $site_root='../../';
  include("koffice.inc");
  include("header.inc");
?>

  <p>An OASIS OpenDocument file is a ZIP containing XML files. In some cases however, the XML is hard to read because all on one line.
  OpenOffice.org has no newlines at all in the XML, but even KOffice can't use newlines in text content since whitespace is interpreted
  litterally there.</p>

  <h2>Download the oasis_unpack script</h2>
  <p>
    This script takes care of everything for you, assuming that you have <code>xmllint</code> and <code>unzip</code> installed:
      <a href="oasis_unpack">oasis_unpack</a>.
  </p>

  <p>Usage: <code>oasis_unpack myfile.odt</code>
  </p>

<?php
   include("footer.inc");
?>
