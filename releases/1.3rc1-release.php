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
      <li><a href="/announcements/changelog-1.3rc1.php">Changelog</a></li>
      </ul>     

<div style="border:thick solid red">

    <h2>Security Errata</h2>
    
    <p>KOffice 1.3 RC 1 has an integer overflow vulnerability in KWord's PDF import filter.</p>

    <p>
        <a href="security/xpdf-CESA-2004-007-xpdf2-newer.diff">
            A patch for the source package is available.
        </a>
        (MD5 sum: <tt>cd0c18c4dace10e5dbc156fb29cfd581</tt> )
    </p>

    <p>The patch applies to the directory koffice/filters/kword/pdf/xpdf .</p>

    <p>
        To patch, do: (please adjust paths) <br />
        <code>
            cd koffice/filters/kword/pdf/xpdf<br />
            patch -p0 &lt; xpdf-CESA-2004-007-xpdf2-newer.diff
        </code>
    </p>
    
    <p>For background information about the vulnerability,
        <a href="http://kde.org/info/security/advisory-20041021-1.txt">
            please see the corresponding security advisiory for KDE.
        </a>
    </p>
    
</div>
      
      <h2>Download</h2>
      <p>Both source code and binary packages are available.</p>
      <ul>
      <li><a href="/download/source.php">Source code</a></li>
      <li><a href="/download">Binary packages</a></li>
      </ul>
      
      <h2>MD5 sums</h2>
      <p>
       The MD5 sums for the tarballs are:</p>
<?php
include "md5-koffice-1.2.94.inc"
?>
      <p>
       Also provided: <a href="md5-pgp-koffice-1.2.94.txt">a PGP-signed version of the MD5 sums</a>.
      </p>

<?php include("footer.inc"); ?>
