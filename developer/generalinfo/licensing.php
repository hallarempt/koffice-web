<?php
  $page_title="KOffice Licensing Information";
  $site_root='../../';
  include("koffice.inc");
  include("header.inc");
?>

   <h2>KOffice and Licensing</h2>
   
    <p>KOffice consists of a number of applications and libraries. The
    libraries that are common to the applications are licensed under the
    Lesser GNU Public License, version 2 or later. This means that it is
    possible to write, for instance, a Flake shape plugin under any license
    that is compatible with LGPLv2+ -- even proprietary plugins are allowable.</p>

    <p>The applications are generally speaking under GPL version 2 or later. This
    means that if you write a plugin that uses application specific libraries, 
    like a Krita tool or paintop plugin, you need to license that plugin under GPL
    version 2 or later, too. No proprietary plugins are allowed.</p>

    <p>Note that this is not legal advice: if you need legal advice, you should
    go to a proper legal advisor.</p>
<?php
   include("footer.inc");
?>
