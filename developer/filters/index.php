<?php
    $page_title="KOffice Filter Development";
    $site_root = '../../';
    include("koffice.inc");
    include("header.inc");
?>

<p>Welcome to the KOffice Filter development page.</p>
<p>Various filters are available for most of the KOffice applications.</p>
   
<h2>Status</h2>
<ul>
  <li><a href="status.php">Status matrix (development)</a> - status of filters in <code>trunk</code>.</li>
  <li><a href="../filters">Users status information</a> - status of filters in recent releases.</li>
</ul>

<h2>Information for Developers</h2>

<p>For basic file format information (especially for XML-based file formats)
see the <a href="/developer/fileformat/">file format section</a>.</p>

<ul>
        <li><a href="../fileformat">Information about OASIS OpenDocument</a></li>
        <li><a href="useful.php">Information about other file formats</a></li>
        <li><a href="libexport13design.php">Design of KWord's Libexport Library in KOffice 1.3</a></li>
</ul>


<h2>Old information</h2>
    <ul>
        <li><a href="oldfaq.php">Old Filter FAQ (also known as "How to write a filter?")</a></li>

<!--        <li><a href="todo.php">Missing Filters</a></li> -->

    </ul>

       
<?php
    include("footer.inc");
?>





