<?php
    $page_title="KOffice Export/Import Filters";
    $site_root = '../';
    include("koffice.inc");
    include("header.inc");
?>

    <p>Welcome to the KOffice Filter Information Page.</p>

    <h2>About Filters</h2>
    
    <p>Filters are used to convert documents from one <em>file format</em> into
       another.  In KOffice, they serve two purposes:</p>
    <ul>
      <li>to convert KOffice documents into formats that can be read by other 
          computer programs;</li>
      <li>to convert documents created in other programs into KOffice
          documents.</li>
    </ul>

    <p>For example, if you have documents that were created in a different office
       package, filters may be allow you to load those documents into a KOffice
       application.  It is not normally necessary to worry about filters, because
       they are used automatically when opening or saving a document
       in different formats.</p>

    <p>Various filters are available for most of the KOffice applications.
       For more information on which file formats KOffice supports, see the 
       filter status for recent versions of KOffice below.</p>
   
    <h2>Current (stable) versions</h2>
    
    <p>This information pertains to the currently released stable
    version of KOffice.</p>

     <ul>
      <li><a href="1.5/">Filter status of KOffice 1.5</a></li>
     </ul>

    <h2>Old versions</h2>
    
     <ul>
      <li><a href="1.4/">Filter status of KOffice 1.4</a></li>
      <li><a href="1_3_1/">Filter status of KOffice 1.3.1</a></li>
      <li><a href="1.2/">Filter status of KOffice 1.3</a></li>
     </ul>
    
    <h2>Developer Information</h2>
    <p>We're always looking for developers to help improve the KOffice
       filters.  There is <a href="../developer/filters">more information</a>
       for interested developers.</p>
   
<?php
    include("footer.inc");
?>
