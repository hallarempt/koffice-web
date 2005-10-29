<?php
  $page_title="Junior Jobs 2005";
  $site_root='../';
  include("koffice.inc");
  include("header.inc");
?>

    <p>December 2005 targets</p>

<p>
<table cellspacing="0" cellpadding="3" border="1">
  <tr>
    <th>Task Description</th>
    <th>Contact</th>
    <th>Date Target</th>
    <th>Name of Applicant</th>
  </tr>
  <tr>
    <td><a href="http://bugs.kde.org/show_bug.cgi?id=112933">http://bugs.kde.org/show_bug.cgi?id=112933</a></td>
    <td><a href="&#x6d;ail&#116;&#0111;&#58;&#122;and&#x65;&#114;&#x40;k&#100;&#x65;.or&#x67;">Thomas Zander</a></td>
    <td>10th December 2005</td>
    <td><a href="mailto:maju7@o2.pl">maju</a></td>
  </tr>
  <tr>
    <td><b>Karbon</b>: <a href="http://bugs.kde.org/show_bug.cgi?id=109189">http://bugs.kde.org/show_bug.cgi?id=109189</a></tt></td>
    <td><a href="mailto:buis@kde.org">Rob Buis</a></td>
    <td>10th December 2005</td>
    <td>-</td>
  </tr>
  <tr>
    <td><b>Karbon</b>:  adding tootips <a href="http://bugs.kde.org/show_bug.cgi?id=112680">http://bugs.kde.org/show_bug.cgi?id=112680</a></tt></td>
    <td><a href="mailto:buis@kde.org">Rob Buis</a></td>
    <td>10th December 2005</td>
    <td>-</td>
  </tr>
  <tr>
    <td><b>Karbon</b>:  fix units <a href="http://bugs.kde.org/show_bug.cgi?id=115010">http://bugs.kde.org/show_bug.cgi?id=115010</a></tt></td>
    <td><a href="mailto:tbscope@gmail.com">Tim Beaulen</a></td>
    <td>10th December 2005</td>
    <td>-</td>
  </tr>
  <tr>
    <td><b>Karbon</b>:  Usability: The tools should be grouped <a href="http://bugs.kde.org/show_bug.cgi?id=112691">http://bugs.kde.org/show_bug.cgi?id=112691</a></tt></td>
    <td><a href="mailto:buis@kde.org">Rob Buis</a></td>
    <td>10th December 2005</td>
    <td>-</td>
  </tr>
  <tr>
    <td><b>Karbon</b>:  Usability: The color and opacity bars in the color chooser palette are backwards. <a href="http://bugs.kde.org/show_bug.cgi?id=115213">http://bugs.kde.org/show_bug.cgi?id=115213</a></tt></td>
    <td><a href="mailto:tbscope@gmail.com">Tim Beaulen</a></td>
    <td>10th December 2005</td>
    <td>-</td>
  </tr>
  <tr>
    <td><b>KChart</b>: Add QWhatsThis help to the chart configuration dialog.</td>
    <td><a href="mailto:raphael.langerhorst@kdemail.net">Raphael Langerhorst</a> or
	<a href="mailto:inge@lysator.liu.se">Inge Wallin</a></td>
    <td>10th December 2005</td>
    <td>-</td>
  </tr>
  <tr>
    <td><b>KChart</b>: Usability: Chart creation wizard should allow you to switch from row-ordered data to column-ordered data. <a href="http://bugs.kde.org/show_bug.cgi?id=114995">http://bugs.kde.org/show_bug.cgi?id=114995</a></td>
    <td><a href="mailto:inge@lysator.liu.se">Inge Wallin</a></td>
    <td>10th December 2005</td>
    <td>-</td>
  </tr>
  <tr>
    <td><b>Kexi</b>: Fix all "unused parameter" warnings, by commenting out parameter names in function definitions; for example, change <tt>void MyClass::method( int unusedArg ) {//...}</tt><br /> to<br /> <tt>void MyClass::method( int unusedArg ) {Q_UNUSED( unusedArg ); //...}</tt></td>
    <td><a href="mailto:js@iidea.pl">Jarosław Staniek</a></td>
    <td>10th December 2005</td>
    <td>Fatih Asici</td>
  </tr>
  <tr>
    <td>Add <b>Kpresenter</b> QWhatsThis help in Configure KPresenter dialog</td>
    <td><a href="mailto:annemarie.mahfouf@free.fr">Anne-Marie Mahfouf</a></td>
    <td>10th December 2005</td>
    <td>-</td>
  </tr>
  <tr>
    <td><b>KPresenter</b>:  Usability: Most basic resizing operation for pictures are not possible. <a href="http://bugs.kde.org/show_bug.cgi?id=112310">http://bugs.kde.org/show_bug.cgi?id=112310</a></tt></td>
    <td><a href="mailto:montel@kde.org">Laurent Montel</a></td>
    <td>10th December 2005</td>
    <td>-</td>
  </tr>
  <tr>
    <td><b>KPresenter</b>:  Usability: Make "Keep Ratio" for pictures easiert to reach. <a href="http://bugs.kde.org/show_bug.cgi?id=112306">http://bugs.kde.org/show_bug.cgi?id=112306</a></tt></td>
    <td><a href="mailto:montel@kde.org">Laurent Montel</a></td>
    <td>10th December 2005</td>
    <td>Giovanni Venturi</td>
  </tr>
  <tr>
    <td><b>KSpread</b>: Add QWhatsThis help to the cell format configuration dialog.</td>
    <td><a href="mailto:raphael.langerhorst@kdemail.net">Raphael Langerhorst</a></td>
    <td>10th December 2005</td>
    <td>-</td>
  </tr>
</table>

<p>If you want to take a JJ, please email your name to <a href="mailto:annemarie.mahfouf@free.fr">Anne-Marie</a> so the task can be assigned to you.<br />
When you complete the task, please either attach the patch to the bug report or send a patch to your JJ contact name or send it to the KOffice mailing list.</p>

<br />
 <br />
 <hr width="30%" align="center" />
 <p>
 Last update: <?php echo date ("Y-m-d", filemtime(__FILE__)); ?>
 </p>
<?php
  include("footer.inc");
?>
