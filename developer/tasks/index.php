<?php
  $page_title="KOffice Tasks";
  $site_root='../../';
  include("koffice.inc");
  include("header.inc");
?>

<p>$Date$</p>

<p>(<a href="nontrivial.php">Other tasks here!</a>)</p>

<p>KOffice needs volunteers for many tasks, including the following tasks
that are more suitable for developer without much experience.</p>

<p>Mostly the tasks can be split between a few persons and not everything need 
to be done completely anyway. (For a example a user can do a single file, 
a single directory... It is more important that some part is done at all.)</p>

<p>(Some of the tasks could be done KDE-wide.)</p>

<h2>KOffice 1.3.x</h2>

<ul>
    <li>Take the KOffice documentation and check that what is told there is what 
    KOffice 1.3 really does. Anything not correctly documented (for example 
    because it has changed)
    <a href="mailto:lauri@kde.org">should be reported to Lauri Watts</a>.
    <ins>Please note that documentation fixes for KOffice 1.3.x are done on
    KOffice CVS HEAD, so either work with this documentation directly or verify
    after you have found a problem.</ins>
    </li>
</ul>

<h2>KOffice CVS HEAD</h2>

<ul>
    <li>Check spelling errors in comments</li>

    <li>Make existing class documentation Doxygen-compatible. Some classes have already some 
    documentation but unfortunately not in Doxygen syntax. So the tasks is to 
    change them to Doxygen syntax. (Changing to the special Doxygen commens (/** 
    and ///) is already enough.)</li>
</ul>

<h2>KOffice part of KDE Bugs</h2>
 
<ul>
    <li>Find similar bug entries and add a comment like "see also bug #99999" in 
    such bugs. (This is especially between KPresenter, KWord and KOffice.)</li>
    
    <li><del>For KWord, make a list of bugs where a KWord file is attached (the 
    attachement number of that file should be in the list too.) (This is for the 
    new KWord 1.3 import filter. It does not matter if the bugs are opened, 
    resolved, closed or whatever.)</del></li>
    
    <li><ins>Read the <a href="http://lists.kde.org/?l=koffice-devel&m=107835129123866&w=2">KWord vs Framemaker review</a>
    and create new bug or wish reports for missing and not reported features.</ins></li>
</ul>
    
<h2>Other Tasks</h2>

<p><a href="nontrivial.php">Of course KOffice is also still searching developers wanting to do more 
difficult tasks</a></p>

<p>There is also a <a href="/developer/website/tasks.php">Web Task List</a> for task to do for the 
<a href="/">koffice.org site</a>.</p>

<?php
   include("footer.inc");
?>
