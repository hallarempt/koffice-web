<?php
  $page_title='KOffice 1.3.3 Release Notes';
  $site_root='../';
  include("koffice.inc");
  include("header.inc");
?>

      <p>The KOffice team is proud to announce the third bugfix version in KOffice 1.3 series.</p>

      <h2>Changelog</h2>
      <ul>
        <li><a href="../announcements/changelog-1.3.3.php">Changes done after 1.3.2 (1.3.2 to 1.3.3)</a></li>
        <li><a href="../announcements/changelog-1.3.2.php">Changes done after 1.3.1 (1.3.1 to 1.3.2)</a></li>
        <li><a href="../announcements/changelog-1.3.1.php">Changes done after 1.3 (1.3 to 1.3.1)</a></li>
        <li><a href="../announcements/changelog-1.3.php">Complete 1.3 changelog</a></li>
      </ul>

<div style="border:thick solid red">

    <h2>Security Errata</h2>
    
    <p>KOffice 1.3.3 has an integer overflow vulnerability in KWord's PDF import filter.</p>

    <p>
        <a href="security/xpdf_security_integer_overflow.diff">
            A patch for the source package is available.
        </a> (Patch updated the 2004-10-30 16:15 UTC)<br />
        (MD5 sum:
	  <tt>b681bc6746c31f3410f20315b0075b25</tt>
	  xpdf_security_integer_overflow.diff
        )
    </p>

    <p>The patch applies to the directory koffice/filters/kword/pdf/xpdf/xpdf .</p>

    <p>
        To patch, do: (please adjust paths) <br />
        <code>
            cd koffice/filters/kword/pdf/xpdf/xpdf<br />
            patch -p0 &lt; xpdf_security_integer_overflow.diff
        </code>
    </p>

    <p>For background information about the vulnerability,
        <a href="http://kde.org/info/security/advisory-20041021-1.txt">
            please see the corresponding security advisiory for KDE.
        </a>
    </p>
    
    <h2>Second Security Errata</h2>
    
    <p>KOffice 1.3.3 has an integer overflow vulnerability in KWord's PDF import filter.</p>

    <p>
        <a href="security/xpdf_security_integer_overflow_2.diff">
            A patch for the source package is available.
        </a>
        (MD5 sum:
	  <tt>477e4cee8159f2f23bcfff1a9c07755b</tt>
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
      <li><a href="../download/source.php">Source code</a></li>
      <li><a href="../download/">Binary packages</a></li>
      </ul>

      <h2>MD5 sums</h2>
      <p>
       The MD5 sums for the tarballs are:
      </p>
<?php
  include "md5-koffice-1.3.3.inc"
?>

      <p>
       Also provided: <a href="md5-pgp-koffice-1.3.3.txt">a PGP-signed version of the MD5 sums</a>.
      </p>
      
      <p><em>Note:</em> the PGP key for signing is the same as for KOffice 1.3.2,
        <a href="../download/signatures.php#goutte">please see the signing key overview.</a>
      </p>

<?php include("footer.inc"); ?>
