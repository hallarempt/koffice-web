<?php
  $page_title="Rather Trivial KOffice Tasks";
  $site_root='../../';
  include("koffice.inc");
  include("header.inc");
?>

<p>$Date$</p>

<p>KOffice needs volunteers for many tasks, including the following tasks
that are more suitable for developer without much experience.</p>

<p>Mostly the tasks can be split between a few persons and not everything need 
to be done completely anyway. (For a example a user can do a single file, 
a single directory... It is more important that some part is done at all.)</p>

<p>Note: if not otherwise specified, the tasks are for KOffice CVS HEAD. (Some of the tasks could be done KDE-wide.)</p>

<ul>
    <li>Take the KOffice documentation and check that what is told there is what 
    KOffice 1.3 really does. Anything not correctly documented (for example 
    because it has changed)
    <a href="mailto:lauri@kde.org">should be reported to Lauri Watts</a>.
    Please note that documentation fixes for KOffice 1.3.x are done on
    KOffice CVS HEAD, so either work with this documentation directly or verify
    after you have found a problem. (Difficulty: *; Sharability: *)
    </li>
    
    <li>Check spelling errors in comments (Difficulty: *; Sharability: *)</li>

    <li>Make existing class documentation Doxygen-compatible. Some classes have already some 
    documentation but unfortunately not in Doxygen syntax. So the tasks is to 
    change them to Doxygen syntax. (Changing to the special Doxygen commens (/** 
    and ///) is already enough.) (Difficulty: *; Sharability: *)</li>
</ul>

<?php
   include("footer.inc");
?>
