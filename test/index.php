<?php
  $site_root = "../";
  $page_title = "Test";
  include 'koffice.inc';
  include 'header.inc';
?>


<?php

$version = "1.4";

require_once "./test.inc";

initFeatures();
parse("test.xml");

?>

<table width="100%" border="0">
  <tr>
    <td colspan="2">
      <h2>Foreword</h2>
      
      <p>KOffice 1.4 should tend as much as possible to the goals defined at the
      <a href="http://dot.kde.org/1061919133/">Kastle conference for a KOffice 2.0</a>.
      Of course, if possible, reaching those goals would mean that the next KOffice might have
      a release number 2.0.</p>
      
      <p>Due to the uneven manpower available to KOffice the following list can be considered
      neither as a minimum nor as exhaustive for KOffice 1.4.</p>
      
      <p>Please also look at <a href="http://www.koffice.org/developer/tasks">KOffice Task Lists</a>
      and at <a href="http://www.koffice.org/developer">other developer resources for KOffice</a>.</p>
    </td>
  </tr>


  <tr><td bgcolor="red"><div align="center">TODO</div></td><td bgcolor="#ffeeee">

<?php echo printHtml($version,'todo') ?>

  </td></tr>

  <tr><td bgcolor="yellow"><div align="center">In Progress</div></td><td bgcolor="#ffffee">

<?php echo printHtml($version,'inprogress') ?>

  </td></tr>

<tr><td bgcolor="green"><div align="center">Finished</div></td><td bgcolor="#eeffee">

<?php printHtml($version,'done') ?>

</td></tr>
</table>

<?php
  include ("footer.inc");
?>
