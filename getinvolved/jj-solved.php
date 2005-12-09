<?php
  $page_title="Junior Jobs Done";
  $site_root='../';
  include("koffice.inc");
  include("header.inc");
?>

<div id="quicklinks">[
	<a href="doc-writers.php">Doc Junior Jobs</a> | 
    <a href="junior-jobs.php">Devel Junior Jobs</a>
	]
</div>

<p>
<table cellspacing="0" cellpadding="3" border="1">
  <tr>
    <th>Task Description</th>
    <th>Contact</th>
    <th>Solved Date</th>
    <th>Name of Applicant</th>
  </tr>
  <tr>
    <td><a href="http://bugs.kde.org/show_bug.cgi?id=112933">http://bugs.kde.org/show_bug.cgi?id=112933</a></td>
    <td><a href="&#x6d;ail&#116;&#0111;&#58;&#122;and&#x65;&#114;&#x40;k&#100;&#x65;.or&#x67;">Thomas Zander</a></td>
    <td><b>DONE</b></td>
    <td><a href="mailto:maju7 () o2 ! pl">maju</a></td>
  </tr>

  <tr>
    <td><b>KChart</b>: Add QWhatsThis help to the chart configuration dialog.</td>
    <td><a href="mailto:raphael.langerhorst () kdemail.net">Raphael Langerhorst</a> or
	<a href="mailto:inge () lysator ! liu ! se">Inge Wallin</a></td>
    <td>8 December 2005</td>
    <td>Anne-Marie Mahfouf</td>
  </tr>
  <tr>
    <td><b>KChart</b>: Usability: Chart creation wizard should allow you to switch from row-ordered data to column-ordered data. <a href="http://bugs.kde.org/show_bug.cgi?id=114995">http://bugs.kde.org/show_bug.cgi?id=114995</a></td>
    <td><a href="mailto:inge () lysator ! liu ! se">Inge Wallin</a></td>
    <td><b>DONE</b></td>
    <td>Alexander Rieder</td>
  </tr>
  <tr>
    <td><b>Kexi</b>: Fix all "unused parameter" warnings, by commenting out parameter names in function definitions; for example, change <tt>void MyClass::method( int unusedArg ) {//...}</tt><br /> to<br /> <tt>void MyClass::method( int unusedArg ) {Q_UNUSED( unusedArg ); //...}</tt></td>
    <td><a href="mailto:js () iidea ! pl">Jarosław Staniek</a></td>
    <td><b>DONE</b></td>
    <td>Kouzinopoulos Haris</td>
  </tr>
  <tr>
    <td>Add <b>Kpresenter</b> QWhatsThis help in Configure KPresenter dialog</td>
    <td><a href="mailto:annemarie.mahfouf () free ! fr">Anne-Marie Mahfouf</a></td>
    <td><b>DONE</b></td>
    <td>Anne-Marie Mahfouf</td>
  </tr>
  <tr>
    <td><b>KPresenter</b>:  Usability: Make "Keep Ratio" for pictures easiert to reach. <a href="http://bugs.kde.org/show_bug.cgi?id=112306">http://bugs.kde.org/show_bug.cgi?id=112306</a></td>
    <td><a href="mailto:montel () kde ! org">Laurent Montel</a></td>
    <td>6 December 2005</td>
    <td>Thomas Zander</td>
  </tr>
  <tr>
    <td><b>KSpread</b>: Add QWhatsThis help to the Configure dialog and update doc section at the same time. <a href="http://bugs.kde.org/show_bug.cgi?id=115926">http://bugs.kde.org/show_bug.cgi?id=115926</a></td>
    <td><a href="mailto:raphael.langerhorst () kdemail ! net">Raphael Langerhorst</a></td>
    <td>16 November 2005</td>
    <td>Anne-Marie Mahfouf</td>
  </tr>
  <tr>
    <td><b>KWord</b>: Action for "double linespacing", to assign a shortcut to it. <a href="http://bugs.kde.org/show_bug.cgi?id=26451">http://bugs.kde.org/show_bug.cgi?id=26451</a></td>
    <td><a href="mailto:zander () kde ! org">Thomas Zander</a></td>
    <td><b>DONE</b></td>
    <td>Matthias Granberry</td>
  </tr>
</table>

<br />
 <br />
 <hr width="30%" align="center" />
 <p>
 Last update: <?php echo date ("Y-m-d", filemtime(__FILE__)); ?>
 </p>
<?php
  include("footer.inc");
?>
