<?php
  $page_title="XPDF Integer Overflow 2";
  $site_root='../';
  include("koffice.inc");
  include("header.inc");
?>

<p>$Date$</p>

<p>KOffice 1.3 (including betas) to 1.3.5 have an integer overflow vulnerability in KWord's PDF import filter.</p>

<h2>How to fix source code?</h2>
    
    <p>
        <a href="../releases/security/xpdf_security_integer_overflow_2.diff">
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

<h2>See Also</h2>

<ul>
  <li><a href="2004_xpdf_integer_overflow.php">The first xpdf integer overflow vulnerability</a></li>
</ul>

    
<?php
   include("footer.inc");
?>
