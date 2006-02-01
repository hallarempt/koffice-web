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
         KPlato is a project management application 
         In this first public release we focus on planning and scheduling of projects.
      </p>

<center>
  <?php
    $gallery = new ImageGallery("KPlato- Screenshot");
    $gallery->addImage("pics/plain_2005_09_330.png",
                       "pics/plain_2005_09.png",
                       330, 247,
                       "[Screenshot]", "",
                       "KPlato with the plain template");
    $gallery->show();
  ?>
</center>
    <p><b>Features includes:</b></p>
    <ul>
        <li>Gantt chart with task list and resource allocations per task.</li>
        <li>Resource view with task allocations per resource.</li>
        <li>Accouts view showing planned cost with configurable cut-off date and periodicity.
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
        <li>Summarytasks, Tasks, and milestones are supported.
        <li>Dialogs to create and edit the project, the different types of tasks,
            calendars, resources, accounts and progress.
        <li>Task links can be of types: Finish to Start, Finish toFinish or Start to Start. All types can have a time lag defined.
        <li>Different scheduling constraints are supported:
        <ul>
            <li>As soon as possible (early start).
            <li>As late as possible (late start).
            <li>Must start on target time.
            <li>Must finish on target time.
            <li>Start not earlier than target time.
            <li>Finish not later than target time.
            <li>Fixed interval. (Target start time and target finish time.)
        <ul>
    <ul>
    <p><b>Important features not included:</b></p>
    <ul>
        <li>Resource leveling. Resources are just allocated to 
            the requested task even when allready booked to other task(s). 
            The resulting conflict must be resolved manually by adding task 
            links or constraints to avoid parallell scheduling of the tasks.</li>
        <li>Network view.</li>
        <li>In general: Project execution and follow up.</li>
    <ul>

      <p><b>Mailing List:</b><br />
         The KPlato mailing list is at <a href="&#109;&#97;i&#108;&#x74;o&#x3a;&#0107;p&#0108;ato () kd&#x65; ! &#x6f;r&#0103;">&#x6b;&#x70;l&#x61;t&#111;&#64;k&#00100;e&#x2e;&#0111;rg</a><br />
         Subscription information can be found <a href="http://mail.kde.org/mailman/listinfo/kplato">here</a>.<br />
         Online archives at: <a href="http://lists.kde.org/?l=kplato&amp;r=1&amp;w=2">lists.kde.org</a>
      </p>

 <br />
 <hr width="30%" align="center" />
 <p>
 Last update: <?php echo date ("Y-m-d", filemtime(__FILE__)); ?>
 </p>
<?php include("footer.inc"); ?>
