<?php
  $page_title="Non-Trivial KOffice Tasks";
  $site_root='../../';
  include("koffice.inc");
  include("header.inc");
?>

<p>$Date$</p>

<!-- ### TODO: find a better word than "sharability" -->

<p>Following are some tasks that are of any difficulty. The difficulty is marked with stars (*=easy, *****=expert),
also marked with stars are how easy the tasks could be shared between developers (*=easily shared; *****=very difficult to share).</p>

<ul>
    <li>Add "What's this" help in any dialog (Difficulty: **; Sharability: *)</li>
    <li>All KOffice to OpenOffice filters (and vice-versa) need developers to help. (Difficulty: ****; Sharability: ***)</li>
    <li>Write Doxygen class documentation, wherever it is missing or not complete. (Difficulty: ***; Sharability: *)</li>
    <li>Write documentation to help newbie KOffice developers (Difficulty: ****; Sharability: ****)</li>
    <li>Find abuses of Qt in code, where the code will probably break when using Qt4 (Difficulty: *****; Sharability: *)</li>
    <li>Change KWord's RTF import filter not to use "offsetof" out of C++ specification (Difficulty: ***; Sharability: *****)</li>
</ul>

<p>Please note: if not otherwise specified, the tasks are only for KOffice CVS HEAD.</p>


<h2>More?</h2>

<p>If you do not like any of the tasks on the task lists, it is not a problem. There are plenty more to do.</p>

<p>First there are all the <a href="http://bugs.kde.org">bugs waiting in KDE Bugs</a>.</p>

<p>Also there are plenty of code marked with ###, TODO or FIXME. You can find such code with the following command line command:<br />
<code>find . -name "*.c*" -print0 | xargs -0 grep -E "(###|TODO|FIXME)"</code></p>

<p>Finally you might ask
<a href="http://www.kde.org/mailinglists/index.php#koffice-devel">the KOffice Development mailing list</a>. We have surely a task for
you.</p>

<?php
   include("footer.inc");
?>
