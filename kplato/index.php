<?php
  $page_title='KPlato';
  $site_root='../';
  include("koffice.inc");
  include("header.inc");
?>
<?php
  include("kplato.inc");
  $appinfo->showIconAndCopyright();
?>

      <p>
         KPlato is a project management application.
         In this first public release we focus on planning and scheduling of projects.
      </p>

<center>
  <?php
    $gallery = new ImageGallery("KPlato- Screenshot");
    $gallery->addImage("pics/gantt_small_2006_01_330.png",
                       "pics/gantt_small_2006_01.png",
                       330, 247,
                       "[Screenshot]", "",
                       "KPlato Gantt view");
    $gallery->show();
  ?>
</center>
    <p><b>Features includes:</b></p>
    <ul>
        <li>Gantt chart with task list and resource allocations per task.</li>
        <li>Resource view with task allocations per resource.</li>
        <li>Accounts view showing planned cost with configurable cut-off date
and periodicity.</li>
        <li>Tasks are organized in a work breakdown structure (WBS).</li>
        <li>Resources are organized in a resource breakdown structure (RBS).</li>
        <li>Accounts are organized in a cost breakdown structure (CBS).</li>
        <li>Gantt chart can optionally show:
        <ul>
            <li>Task links (dependencies).</li>
            <li>Task name.</li>
            <li>Allocated resources.</li>
            <li>Float (slack).</li>
            <li>Critical path.</li>
            <li>Critical tasks.</li>
            <li>Progress (% completion).</li>
        </ul>
        </li>
        <li>Summarytasks, Tasks, and milestones are supported.</li>
        <li>Dialogs to create and edit the project, the different types of tasks,
            calendars, resources, accounts and progress.</li>
        <li>Task links can be of types: Finish to Start, Finish toFinish or
Start to Start. All types can have a time lag defined.</li>
        <li>Different scheduling constraints are supported:
        <ul>
            <li>As soon as possible (early start).</li>
            <li>As late as possible (late start).</li>
            <li>Must start on target time.</li>
            <li>Must finish on target time.</li>
            <li>Start not earlier than target time.</li>
            <li>Finish not later than target time.</li>
            <li>Fixed interval. (Target start time and target finish time.)</li>
        </ul></li>
    </ul>
    <p><b>Important features not included:</b></p>
    <ul>
        <li>Resource leveling. Resources are just allocated to 
            the requested task even when allready booked to other task(s). 
            The resulting conflict must be resolved manually by adding task 
            links or constraints to avoid parallel scheduling of the tasks.</li>
        <li>Network view.</li>
        <li>In general: Project execution and follow up.</li>
    </ul>

      <p><b>Mailing List:</b><br />
         Up until half of 2008 KPlato had its own mailinglist. Archives are still available at:
        <a href="http://lists.kde.org/?l=kplato&amp;r=1&amp;w=2">lists.kde.org</a>.</br>
        KPlato questions and discussions are now happening on the
         <a href="/contact/">koffice mailinglist</a>.
      </p>

 <br />
 <hr width="30%" align="center" />
 <p>
 Last update: <?php echo date ("Y-m-d", filemtime(__FILE__)); ?>
 </p>
<?php include("footer.inc"); ?>
