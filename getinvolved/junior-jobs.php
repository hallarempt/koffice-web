<?php
  $page_title="Devel Junior Jobs 2005";
  $site_root='../';
  include("koffice.inc");
  include("header.inc");
?>

<div id="quicklinks">[
	<a href="doc-writers.php">Doc Junior Jobs</a> |
    <a href="jj-solved.php">Junior Jobs Done</a>
	]
</div>

    <p>December 2005 targets</p>
<p>It is prefered to use <b>KOffice svn trunk code</b> to work on JJ, which is the next coming 1.5 release. You can find some information on how to build it on the <a href="../download/unstable.php">Install KOffice unstable from svn page</a>.</p>
<p>
<p>If you need help, you can join members of the KOffice team on IRC, server <tt>irc.freenode.org</tt>, port 6667, channel <tt>#koffice</tt>.</p>

<table cellspacing="0" cellpadding="3" border="1">
  <tr>
    <th>Task Description</th>
    <th>Contact</th>
    <th>Date Target</th>
    <th>Name of Applicant</th>
  </tr>
  <tr>
    <td><b>KOffice lib/kopalette</b>: see last comment of the bug and implement it <a href="http://bugs.kde.org/show_bug.cgi?id=118346">http://bugs.kde.org/show_bug.cgi?id=118346</a></tt></td>
    <td><a href="mailto:zander () kde ! org">Thomas Zander</a></td>
    <td>30th January 2006</td>
    <td>-</td>
  </tr>
  <tr>
    <td><b>Karbon</b>: <a href="http://bugs.kde.org/show_bug.cgi?id=109189">http://bugs.kde.org/show_bug.cgi?id=109189</a></tt></td>
    <td><a href="mailto:buis () kde ! org">Rob Buis</a></td>
    <td>30th January 2006</td>
    <td>-</td>
  </tr>
  <tr>
    <td><b>Karbon</b>:  adding tootips <a href="http://bugs.kde.org/show_bug.cgi?id=112680">http://bugs.kde.org/show_bug.cgi?id=112680</a></tt></td>
    <td><a href="mailto:buis () kde ! org">Rob Buis</a></td>
    <td>30th January 2006</td>
    <td>-</td>
  </tr>
  <tr>
    <td><b>Karbon</b>:  fix units <a href="http://bugs.kde.org/show_bug.cgi?id=115010">http://bugs.kde.org/show_bug.cgi?id=115010</a></tt></td>
    <td><a href="mailto:tbscope () gmail ! com">Tim Beaulen</a></td>
    <td>30th January 2006</td>
    <td>-</td>
  </tr>
  <tr>
    <td><b>Karbon</b>:  Usability: The color and opacity bars in the color chooser palette are backwards. <a href="http://bugs.kde.org/show_bug.cgi?id=115213">http://bugs.kde.org/show_bug.cgi?id=115213</a></tt></td>
    <td><a href="mailto:tbscope () gmail ! com">Tim Beaulen</a></td>
    <td>30th January 2006</td>
    <td>-</td>
  </tr>
  <tr>
    <td><b>KChart</b>: Code structure: put the wizard and config dialog in a "dialogs" subdirectory. <a href="http://bugs.kde.org/show_bug.cgi?id=117960">http://bugs.kde.org/show_bug.cgi?id=117960</a></td>
    <td><a href="mailto:inge () lysator ! liu ! se">Inge Wallin</a></td>
    <td>30th January 2006</td>
    <td>-</td>
  </tr>
  <tr>
    <td><b>KPresenter</b>:  Usability: Most basic resizing operation for pictures are not possible. <a href="http://bugs.kde.org/show_bug.cgi?id=112310">http://bugs.kde.org/show_bug.cgi?id=112310</a></td>
    <td><a href="mailto:montel () kde ! org">Laurent Montel</a></td>
    <td>30th January 2006</td>
    <td>-</td>
  </tr>
  <tr>
    <td><b>KSpread</b>: change all "document" reference to "workbook" in GUI, tooltips, qwhatsthis and doc. <a href="http://bugs.kde.org/show_bug.cgi?id=116450">http://bugs.kde.org/show_bug.cgi?id=116450</a></td>
    <td><a href="mailto:robertknight () gmail ! com">Robert Knight</a></td>
    <td>on hold</td>
    <td>Henry Kay</td>
  </tr>
  <tr>
    <td><b>KSpread</b>: Add QWhatsThis help to the cell format configuration dialog.</td>
    <td><a href="mailto:raphael.langerhorst () kdemail ! net">Raphael Langerhorst</a></td>
    <td>in good progress - 30th January 2006</td>
    <td>Anne-Marie Mahfouf</td>
  </tr>
  <tr>
    <td><b>KWord</b>: Configurable default text color. <a href="http://bugs.kde.org/show_bug.cgi?id=44080">http://bugs.kde.org/show_bug.cgi?id=44080</a></td>
    <td><a href="mailto:faure () kde ! org">David Faure</a></td>
    <td>30th January 2006</td>
    <td>-</td>
  </tr>
</table>

<p>If you want to take a JJ, please email your name to the contact and CC to <a href="mailto:annemarie.mahfouf () free ! fr">Anne-Marie</a> so the task can be assigned to you.<br />
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
