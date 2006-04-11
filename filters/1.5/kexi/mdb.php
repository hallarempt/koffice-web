<?php
  $page_title="Microsoft Access (MDB) Filter";
  $location = '../../../';
  include("koffice.inc");
  include("header.inc");
?>

  <h2>Overview</h2>

  <p>Support for importing Microsoft Access databases is available for
  Kexi.</p>

  <p>It is distributed as <em>separate plugin</em> for Kexi.  For more
  information, see the Download section below</p>

  <p>The filter can be used to import Access databases into a Kexi
  database only: it cannot be used to edit the database, nor to export
  to an Access database.  However, it should also be able to import
  databases created by other applications that use the JET database
  engine.</p>

  <h2>Download</h2>

  <p>The MDB filter is currently distributed as separate
  plugin for Kexi, but may be packaged for your distribution.</p>

  <p>The source code for the beta version of the MDB filter is
  available from <a
  href="ftp://ftp.kde.org/pub/kde/stable/apps/KDE3.x/database/keximdb-1.0.tar.gz"
  >here</a>.</p>

  <h2>Status</h2>

  <p>The filter has successfully been used to import the famous
  'Northwind' database, which can be downloaded (as an executable
  'exe' installer) from the Microsoft web-site <a
  href="http://www.microsoft.com/downloads/details.aspx?FamilyID=C6661372-8DBE-422B-8676-C632D66C529C&amp;displaylang=EN"
  >here</a> (please check the license before installing).  Other
  Access template databases are available from the Microsoft Office
  Online <a
  href="http://office.microsoft.com/en-us/templates/CT011359381033.aspx">Access
  Templates</a> pages.</p>

  <a href="../../images/kexi/northwind.png"><img src="../../images/kexi/northwind_sm.png" alt="" /></a>

  <h3>Supported features</h3>
  <p>Importing the following field types has been tested, and generally works well:</p>
  <ul>
    <li>Text fields</li>
    <li>Memo fields</li>
    <li>Date fields</li>
    <li>Numeric values</li>
  </ul>

  <h3>Unsupported features</h3>
  <p>Currently, only tables are imported.  No attempt is made to
  import the following:</p>
  <ul>
    <li>Queries</li>
    <li>Forms</li>
    <li>Scripts</li>
    <li>Reports</li>
    <li>etc.</li>
  </ul>

  <p>The following are untested:</p>
  <ul>
    <li>Importing binary objects</li>
  </ul>

<?php
   include("footer.inc");
?>
