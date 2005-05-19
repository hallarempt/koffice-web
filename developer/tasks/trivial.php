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
to be done completely in one go. (For a example a user could do a single file, 
a single directory... It is more important that some part is done at all.)</p>

<p>Note: if not otherwise specified, the tasks are for KOffice SVN trunk. (Some of the tasks could be done KDE-wide.)</p>

<ul>
    <li>Check spelling errors in comments (Difficulty: *; Sharability: *)</li>

    <li>Make existing class documentation Doxygen-compatible. Some classes have already some 
    documentation but unfortunately not in Doxygen syntax. So the tasks is to 
    change them to Doxygen syntax.
    <del>(Changing to the special Doxygen comments (/** and ///) is already enough.)</del>
    (Difficulty: *; Sharability: *)</li>
    
    <li>
    Check copyrights of source files and add missing copyrights (dates and/or developers) (Difficulty: *; Sharability: *)
    </li>
</ul>

<?php
   include("footer.inc");
?>
