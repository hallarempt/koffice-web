<?php
  $page_title="Non-Trivial KOffice Tasks";
  $site_root='../../';
  include("koffice.inc");
  include("header.inc");
?>

<p>$Date$</p>

<!-- ### TODO: find a better word than "sharability" -->

<p>Following are some tasks that are of any difficulty. The difficulty is marked with stars (*=easy, *****=expert),
also marked with stars is how easy the tasks could be shared between developers (*=easily shared; *****=very difficult to share).</p>

<ul>
    <li>Add "What's this" help in any dialog (Difficulty: **; Sharability: *)</li>
    <li>All KOffice to OpenOffice filters (and vice-versa) need developers to help. (Difficulty: ****; Sharability: ***)</li>
    <li>Write Doxygen class documentation, wherever it is missing or not complete. (Difficulty: ***; Sharability: *)</li>
    <li>Write documentation to help newbie KOffice developers (Difficulty: ****; Sharability: ****)</li>
    <li>Find abuses of Qt in code, where the code will probably break when porting to Qt4 (Difficulty: *****; Sharability: *)</li>
    <li>Change KWord's RTF import filter not to use "offsetof" out of C++ specification (Difficulty: ***; Sharability: *****)</li>
    <li>Find and document portability problems of KOffice code (Difficulty: *****; Sharability: *)</li>
    <li><ins>Verify that dialogs (or other widgets) have non-null parents. (Difficulty: **; Sharability: *)</ins></li>
    <li><ins>Backport non-null parents of widgets to KOffice 1.3.x. (Difficulty: **; Sharability: *)</ins></li>
</ul>

<p>Please note: if not otherwise specified, the tasks are for KOffice CVS HEAD only.</p>

<h2>Bugs</h2>

<p>There are plenty of <a href="http://bugs.kde.org">bugs and wishes in KDE Bugs</a> that need to be fixed, respectively 
want to be implemented</p>

<p>Here some bugs (just a very little excerpt of all KOffice bugs):</p>

<ul>
    <li>
        <del><a href="http://bugs.kde.org/show_bug.cgi?id=54810">Bug #54810</a>:
        KOffice (here KWord) does not save a document when there is no place left on the file system
        and does not inform the user either. (Difficulty: ***; Sharability: *****)</del>
    </li>
    <li><ins>
        <a href="http://bugs.kde.org/show_bug.cgi?id=55660">Bug #55660</a>:
        "Warning if referenced cells are removed (delete row/column)" (Difficulty: ****; Sharability: *****)
    </ins></li>
    <li><ins>
        <a href="http://bugs.kde.org/show_bug.cgi?id=75532">Bug #75532</a>:
        "KWord does not pause for user input during spell checking." (Difficulty: ***; Sharability: *****)
    </ins></li>
    <li><ins>
        <a href="http://bugs.kde.org/show_bug.cgi?id=41752">Bug #41752</a>:
        "Handling of tables is extremely inconvenient" (Difficulty: ****; Sharability: ****)
    </ins></li>
</ul>

<h2>More?</h2>

<p>If you do not like any of the tasks on the task lists, it is not a problem. There are plenty more to do.</p>

<p>For example, there is plenty of code marked with ###, TODO or FIXME. You can find such code with the following command line command (in one line):<br />
<code>find . -name "*.c*" -o -name "*.h" -print0 | xargs -0 grep -E "(###|TODO|FIXME)"</code></p>

<p>Also there are the files named TODO that contain problems to fix.</p>

<p>Finally you might ask
<a href="http://www.kde.org/mailinglists/index.php#koffice-devel">the KOffice Development mailing list</a>. We have surely a task for
you.</p>

<?php
   include("footer.inc");
?>
