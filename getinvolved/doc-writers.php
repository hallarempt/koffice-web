<?php
  $page_title="KOffice Documentation jobs";
  $site_root='../';
  include("koffice.inc");
  include("header.inc");
?>

<div id="quicklinks">[
	<a href="junior-jobs.php">Development Junior Jobs</a> 
	]
</div>

<p><b>Current state of the KOffice documentation</b></p>

<p>The table below shows the status of the KOffice documentation as of September
2006. Some applications have had updates for KOffice 1.6, but most applications
have remained at version 1.5 and will have to be updated for KOffice 2.0 from
there.</p>
<p>There are a number of open tasks, if you want to help us creating the user
manuals for our next major release, please contact the KOffice documentation
coordinator, <a href="mailto:sanderkoning@kde.nl">Sander Koning</a>, or the
handbook maintainer - see the table below.</p>
<p>You can find some information on how to write KOffice documentation <a
href="howto-write-doc.php">here</a>, do not hesitate to contact us if you have
any questions.</p>

<table cellspacing="0" cellpadding="3" border="1">
  <tr>
    <th>Application</th>
    <th>Handbook maintainer</th>
    <th>Status</th>
  </tr>
  <tr>
    <td>KOffice (general)</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>KOffice Workspace</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>KWord</td>
    <td><em>open</em></td>
    <td>Complete for 1.4/1.5</td>
  </tr>
  <tr>
    <td>KSpread</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>KPresenter</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>Kexi</td>
    <td>Jaroslaw Staniek (js AT iidea pl)</td>
    <td>Feature-complete for 1.6, screenshots missing because of UI redesign in
	2.0.</td>
  </tr>
  <tr>
    <td>Kivio</td>
    <td>Ben Lamb (ben AT zurgy org)</td>
    <td>Complete for 1.5</td>
  </tr>
  <tr>
    <td>Karbon14</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>Krita</td>
    <td>Sander Koning (sanderkoning AT kde nl)</td>
    <td>Complete for 1.6.
	More how-to chapters and tutorials should be added.</td>
  </tr>
  <tr>
    <td>KPlato</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>KChart</td>
    <td></td>
    <td>Complete for 1.5</td>
  </tr>
  <tr>
    <td>KFormula</td>
    <td>Alfredo Beaumont Sainz (alfredo beaumont AT gmail com)</td>
    <td>Complete for 1.6</td>
  </tr>
  <tr>
    <td>Kugar</td>
    <td></td>
    <td></td>
  </tr>
</table>

<p>Some (older) Junior Jobs are listed in the table below.</p>

<table cellspacing="0" cellpadding="3" border="1">
  <tr>
    <th>Task Description</th>
    <th>Contact</th>
    <th>Date Target</th>
    <th>Name of Applicant</th>
  </tr>
  <tr>
    <td>Update application startup instructions in all handbooks with
        respect to the new KOffice startup dialog. Especially screenshots!</td>
    <td><a href="mailto:raphael.langerhorst@kdemail.net">Raphael Langerhorst</a></td>
    <td>15th January 2006</td>
    <td>-</td>
  </tr>
</table>

<p>If you want to take a JJ, please email your name to the contact and CC to <a href="mailto:annemarie.mahfouf@free.fr">Anne-Marie</a> so the task can be assigned to you.<br />
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
