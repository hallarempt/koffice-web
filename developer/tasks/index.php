<?php
  $page_title="KOffice Tasks";
  $site_root='../../';
  include("koffice.inc");
  include("header.inc");
?>

<p>$Date$</p>

<h2>Foreword</h2>

<p>KOffice needs volunteers for many tasks.</p>

<p>The difficulty of the tasks is marked with stars (*=easy, *****=expert),
also marked with stars is how easy the tasks could be shared between developers (*=easily shared; *****=very difficult to share).</p>

<p>Mostly the tasks that can be split between a few persons do not need 
to be done completely in one go. (For a example a user can do a single file, 
a single directory... It is more important that some part is done at all.)</p>

<p>(Some of the tasks could be done KDE-wide.)</p>

<h2>Task Lists</h2>

<ul>
    <li><a href="trivial.php">Rather trivial tasks</a>.</li>
    
    <li><a href="nontrivial.php">Non-trivial tasks</a>.</li>

    <li><a href="/developer/website/tasks.php">Tasks for koffice.org</a>.</li>
</ul>

<h2>KOffice part of KDE Bugs</h2>
 
<ul>
    <li>Find similar bug entries and add a comment like "see also bug #99999" in 
    such bugs. (This is especially between KPresenter, KWord and KOffice.) (Difficulty: *; Sharability: *)</li>
    
    <li>Read the <a href="http://lists.kde.org/?l=koffice-devel&m=107835129123866&w=2">KWord vs Framemaker review</a>
    and create new bug or wish reports for missing and not reported features. (Difficulty: *; Sharability: *)</li>
</ul>
    

<h2>More?</h2>

<p>If you do not like any of the tasks on the task lists, it is not a problem. There are plenty more to do.</p>

<p>For example, there is plenty of code marked with ###, TODO or FIXME. You can find such code with the following command line command (in one line):<br />
<code>find . -name "*.c*" -o -name "*.h" -print0 | xargs -0 grep -E "(###|TODO|FIXME|todo)"</code></p>

<p>Also there are the files named TODO that contain problems to fix.</p>

<p>Finally you might ask
<a href="http://www.kde.org/mailinglists/index.php#koffice-devel">the KOffice Development mailing list</a>. We have surely a task for
you.</p>

<?php
   include("footer.inc");
?>
