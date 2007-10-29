<?php
  $page_title="Junior Jobs";
  $site_root='../';
  include("koffice.inc");
  include("header.inc");
?>

<div id="quicklinks">[
	<a href="doc-writers.php">Doc Junior Jobs</a> |
    <a href="jj-solved.php">Junior Jobs Done</a>
	]
</div>


<h3>Accepting Junior Jobs (JJs)</h3>
<p>If you wish to put your name forward for a JJ, please contact the person responsible for maintaining the application to which the JJ refers. They will then add your name to the list, and you will be expected to work on the task given. However, due to the nature of JJs, do not feel rushed to complete the task, and do not be afraid to ask for help at any point. Members of the KOffice development team are always more than glad to help, and are available on IRC, located at irc.freenode.org:6667 on channel #koffice.</p>

<p>When developing, you should use <b>KOffice svn trunk code</b> as that is where the code for the next release, version 2.0, is located. You can find some information on how to build it on the <a href="../download/unstable.php">Install KOffice Unstable from Subversion</a> page.</p>

<p>Upon completion of a task, the contact should be notified as soon as possible, and the code should either be commited to SVN or alternatively sent to your contact or the KOffice mailing list for review.</p>

<h4>Current Junior Jobs</h4>

<table cellspacing="0" cellpadding="3" border="1">
  <tr>
    <th>Application</th>
	<th>Task</th>
    <th>Contact</th>
    <th>Name of Applicant</th>
  </tr>
  <tr>
	<td>Krita</td>
    <td>Port PDF filter to Poppler 0.6.0</td>
    <td><a href="mailto:cyb@lepi.org">Cyrille Berger</a></td>
    <td>-</td>
  </tr>
  <tr>
    <td>KPresenter</td>
    <td>Create themes</td>
    <td><a href="mailto:zachmann@kde.org">Thorsten Zachmann</a></td>
    <td>-</td>
  </tr>
  <tr>
    <td>KPresenter</td>
    <td>Page effects, including transitions and new ways of making objects appear</td>
    <td><a href="mailto:zachmann@kde.org">Thorsten Zachmann</a></td>
    <td>-</td>
  </tr>
</table>

 <hr width="30%" align="center" />
 <p>
 Last update: <?php echo date ("Y-m-d", filemtime(__FILE__)); ?>
 </p>
<?php
  include("footer.inc");
?>
