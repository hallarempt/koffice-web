<?php
  $page_title='KOffice 1.3 RC2 "XMAS Version" Release Notes';
  $site_root='../';
  include("koffice.inc");
  include("header.inc");
?>

      <p>The KOffice team is proud to announce the second release candidate version of KOffice 1.3.</p>
      <p>This release fixes a couple of critical bugs since the first release candidate.
      </p>

      <p>Note: Kexi isn't part of this version nor will it be in the final
      KOffice 1.3. It is slated for a stand-alone release next year and
      will re-integrated into KOffice in the next major version.
      </p>


      <h2>Changelog</h2>
      <ul>
      <li><a href="/announcements/changelog-1.3.php">Changelog</a></li>
      </ul>

<div style="border:thick solid red">

    <h2>Security Errata</h2>
    
    <p>KOffice 1.3 RC 2 has an integer overflow vulnerability in KWord's PDF import filter.</p>

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
    
    <h2>Second Security Errata</h2>
    
    <p>KOffice 1.3 RC2 has an integer overflow vulnerability in KWord's PDF import filter.</p>

    <p>
        <a href="security/xpdf_security_integer_overflow_2.diff">
            A patch for the source package is available.
        </a>
        (MD5 sum:
	  <tt>6b44591b63957a58fb26c6eae1b59b19</tt>
	  xpdf_security_integer_overflow_2.diff
        )
    </p>

    <p>The patch applies to the directory koffice/filters/kword/pdf/xpdf/xpdf .</p>

    <p>
        To patch, do: (please adjust paths) <br />
        <code>
            cd koffice/filters/kword/pdf/xpdf/xpdf<br />
            patch -p0 &lt; xpdf_security_integer_overflow_2.diff
        </code>
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
include "md5-koffice-1.2.95.inc"
?>
      <p>
       Also provided: <a href="md5-pgp-koffice-1.2.95.txt">a PGP-signed version of the MD5 sums</a>.
      </p>

<?php include("footer.inc"); ?>
