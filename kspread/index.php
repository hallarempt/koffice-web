<?php
  $page_title='KSpread';
  $site_root="../";
  include("koffice.inc");
  include("header.inc");
?>

      <table>
      <tr>
      <td><img src="pics/hi48-app-kspread.png"></td>
      <td>
    	<b>Version <?php echo $kspreadversion; ?><br />
      	&copy; 1998-<?php echo $currentyear; ?> by the KSpread Team <br /> 
      	E-Mail: <a href="mailto:montel@kde.org">montel@kde.org</a><br /> 
      	KSpread is under the GNU GPL.</b>
      </td>
      </tr>
      </table>
     
      <p>
	<b>Original Authors:</b><br />
	Torben Weis
        &lt;<a href="mailto:weis@kde.org">weis@kde.org</a>&gt;
      </p>

      <p>
      <b>Current Contributors:</b><br />
	Laurent Montel &lt;<a href="mailto:montel@kde.org">montel@kde.org</a>&gt;
	Philipp Mueller &lt;<a href="mailto:philipp.mueller@gmx.de">philipp.mueller@gmx.de</a>&gt;
	Ariya Hidayat &lt;<a href="mailto:ariya@kde.org">ariya@kde.org</a>&gt;
	Norbert Andres &lt;<a href="mailto:nandres@web.de">nandres@web.de</a>&gt;
      </p>


     <p>KSpread is a scriptable spreadsheet program which provides both table-oriented sheets and support 
     for complex mathematical formulas and statistics. KSpread's features include:</p>

<ul>
<li>multiple tables/sheets per document;</li>
<li>templates; </li>
<li>multiple chart formats for displaying data graphically;</li> 
<li>headers and footers; </li>
<li>over 100 formulas, including standard deviation, variance, present value of annuities and much more; </li>
<li>sorting; </li>
<li>scripting; </li>
<li>lists; </li>
<li>cell data validity checking with configurable warnings/actions;</li> 
<li>comments; </li>
<li>series (days of week, months of year, numbers, etc.);</li> 
<li>conditional coloring of cells; </li>
<li>hyperlinks; </li>
<li>row and column customization (size, show/hide, font type, style and size, etc.);</li> 
<li>cell customization (data/number format, precision, border, alignment, rotation, background color and pattern, 
font type, style and size, etc.). </li>
</ul>
      
<?php include("footer.inc"); ?>




