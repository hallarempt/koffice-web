<?php
  $page_title="KOffice Web Site Debugging";
  $site_root='../../';
  include("koffice.inc");
  include("header.inc");
?>
    <p>Draft $Date$</p>
    
    <h2>Debugging</h2>
   
    <p>Unfortunately there is no easy way to fully debug a page meant
    for the KOffice web site. You can only do as much as possible before
    committing, then commit and check the result up to two hours later.</p>
    
    <h2>Forcing HTML</h2>
    
    <p>For most of the PHP files, Konqueror do not recognize them as
    HTML files and therefore refuse to display them. The little trick is
    to add <tt>&lt;html&gt;</tt> on the first line
    and <tt>&lt;/html&gt; on the last line of the document.</p>
    
    <p>Of course be careful <em>not to commit</em> these 2 debug lines.</p>

    <p>(To be continued...)</p>

<?php
   include("footer.inc");
?>
