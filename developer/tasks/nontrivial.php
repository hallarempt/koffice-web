<?php
  $page_title="Non-Trivial KOffice Tasks";
  $site_root='../../';
  include("koffice.inc");
  include("header.inc");
?>

<p>$Date$</p>

<!-- ### TODO: find a better word than "sharability" -->

<p>Following are some tasks that are of any difficulty. The difficulty is marked with stars (*=easy, *****=expert),
also marked with stars are how easy the tasks could be shared between developers (*=easily shared; *****=very difficult to share)</p>

<ul>
    <li>Add "What's this" help in any dialog (Difficulty: **; Sharability: *)</li>
    <li>All KOffice to OpenOffice filters (and vice-versa) need developers to help. (Difficulty: ****; Sharabilty: ***)</li>
    <li>Write Doxygen class documentation, whatever it is missing or not complete. (Difficulty: ***; Sharabilty: *)</li>
    <li>Write documentation to help newbie KOffice developers (Difficulty: ****; Sharabilty: ****)</li>
</ul>

<h2>More?</h2>

<p>If you do not like any of the tasks on the task lists, you may ask
<a href="http://www.kde.org/mailinglists/index.php">the KOffice Development mailing list</a>. We have surely a task for
you.</p>

<?php
   include("footer.inc");
?>
