<?php
  $page_title="XPDF Integer Overflow";
  $site_root='../';
  include("koffice.inc");
  include("header.inc");
?>

<p>$Date$</p>

<p>KOffice 1.3 (including betas) to 1.3.4 have an integer overflow vulnerability in KWord's PDF import filter.</p>

<h2>References</h2>

<ul>
  <li>
    <a href="http://kde.org/info/security/advisory-20041021-1.txt">
    the corresponding security advisiory for KDE.
    </a>
  </li>
</ul>

<h2>How to fix source code?</h2>

<h3>KOffice 1.3 (including betas) to 1.3.3</h3>
    <p>
        <a href="../releases/security/xpdf_security_integer_overflow.diff">
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


<h3>KOffice 1.3.4</h3>
    <p>KOffice 1.3.4 has an integer overflow vulnerability fix in KWord's PDF import filter
    which is weak against compiler optimization.</p>
    
    <p>
        <a href="../releases/security/koffice_1_3_4_xpdf_security_integer_overflow.diff">
            A patch for the source package is available.
        </a>
    </p>

    <p>The patch applies to the directory koffice/filters/kword/pdf/xpdf/xpdf .</p>

    <p>
        To patch, do: (please adjust paths) <br />
        <code>
            cd koffice/filters/kword/pdf/xpdf/xpdf<br />
            patch -p0 &lt; koffice_1_3_4_xpdf_security_integer_overflow.diff
        </code>
    </p>
  

<h2>See Also</h2>

<ul>
  <li><a href="2004_xpdf_integer_overflow_2.php">The second xpdf integer overflow vulnerability</a></li>
</ul>

<?php
   include("footer.inc");
?>
