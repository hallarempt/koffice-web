<?php
  $page_title="KOffice Bugs In KDE Bugs";
  $site_root='../../';
  include("koffice.inc");
  include("header.inc");
?>

<p>$Date$</p>

<h2>Bugs</h2>

<p>There are plenty of <a href="http://bugs.kde.org">bugs and wishes in KDE Bugs</a> that need to be fixed, respectively wait to be implemented</p>

<p>Here some bugs (just a very little excerpt of all KOffice bugs):</p>

<ul>
    <li>
        <a href="http://bugs.kde.org/show_bug.cgi?id=55660">Bug #55660</a>:
        "Warning if referenced cells are removed (delete row/column)" (Difficulty: ****; Sharability: *****)
    </li>
    <li>
        <a href="http://bugs.kde.org/show_bug.cgi?id=41752">Bug #41752</a>:
        "Handling of tables is extremely inconvenient" (Difficulty: ****; Sharability: ****)
    </li>
</ul>

<h2>"Junior Jobs" Bugs</h2>

<p>There are a part of the bugs in KDE Bugs that are called Junior Jobs. They can be recognized by the "JJ:"
(two upper case J letters and a colon) in the bug title. Those bugs are marked so that new developers can
easily recognize bugs easier to fix or wishes esiaer to implement than the average.</p>

<!-- TODO: a list of current JJ bugs in KOffice -->

<p>
<a href="http://bugs.kde.org/buglist.cgi?short_desc_type=allwordssubstr&amp;short_desc=JJ%3A&amp;bug_status=UNCONFIRMED&amp;bug_status=NEW&amp;bug_status=ASSIGNED&amp;bug_status=REOPENED">
Click here to query for the Junior Jobs for KDE.</a></p>

<h2>Managing Tasks In KDE Bugs</h2>
 
<ul>
    <li>Find similar bug entries and add a comment like "see also bug #99999" in 
    such bugs. (This is especially between KPresenter, KWord and KOffice.) (Difficulty: *; Sharability: *)</li>
    
    <li>Read the <a href="http://lists.kde.org/?l=koffice-devel&amp;m=107835129123866&amp;w=2">KWord vs Framemaker review</a>
    and create new bug or wish reports for missing and not reported features. (Difficulty: *; Sharability: *)</li>
</ul>
    
<?php
   include("footer.inc");
?>
