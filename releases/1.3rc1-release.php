<?php
  $page_title='KOffice 1.3 RC1 Release Notes';
  $site_root='../';
  include("koffice.inc");
  include("header.inc");
?>
      
      <p>The KOffice team is proud to announce the first release candidate version of KOffice 1.3.</p> 
      <p>This release fixes a couple of critical bugs since the last beta version, notably it works
      around the infamous filedialog crash upon saving a document.
      </p>

      <p>Note: Kexi isn't part of this version nor will it be in the final
      KOffice 1.3. It is slated for a stand-alone release later this year and
      will re-integrated into KOffice in the next major version.
      </p>


      <h2>Changelog</h2>
      <ul>
      <li><a href="/announcements/changelog-1.3rc1.phtml">Changelog</a></li>
      </ul>     

      <h2>Download</h2>
      <p>Both source code and binary packages are available.</p>
      <ul>
      <li><a href="/install-source.phtml">Source code</a></li>
      <li><a href="/install-binaries.phtml">Binary packages</a></li>
      </ul>
      </p>
      
      <h2>MD5 sums</h2>
      <p>
       The MD5 sums for the tarballs are:
<?php
include "md5-koffice-1.2.94.inc"
?>
      </p>
      <p>
       Also provided: <a href="md5-pgp-koffice-1.2.94.txt">a PGP-signed version of the MD5 sums</a>.
      </p>

<?php include("footer.inc"); ?>
