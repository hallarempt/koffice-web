<?php
  $page_title="Non-Trivial KOffice Tasks";
  $site_root='../../';
  include("koffice.inc");
  include("header.inc");
?>

<p>$Date$</p>

<ul>
    <li>Add "What's this" help in any dialog (Difficulty: **; Sharability: *)</li>
    <li>All KOffice to OpenOffice filters (and vice-versa) need developers to help. (Difficulty: ****; Sharability: ***)</li>
    <li>Write Doxygen class documentation, wherever it is missing, not complete
      <ins>or not in Doxygen syntax</ins>. (Difficulty: ***; Sharability: *)</li>
    <li>Write documentation to help newbie KOffice developers (Difficulty: ****; Sharability: ****)</li>
    <li>Find abuses of Qt in code, where the code will probably break when porting to Qt4 (Difficulty: *****; Sharability: *)</li>
    <li>
        Find abuses of kdelibs in code, where the code will probably break when porting to KDE4 (Difficulty: *****; Sharability: *)
    </li>
    <li>Change KWord's RTF import filter not to use "offsetof" out of C++ specification (Difficulty: ***; Sharability: *****)</li>
    <li>Find and document portability problems of KOffice code (Difficulty: *****; Sharability: *)</li>
    <li>Verify that dialogs (or other widgets) have non-null parents. (Difficulty: **; Sharability: *)</li>
    <li><del>Backport non-null parents of widgets to KOffice 1.3.x. (Difficulty: **; Sharability: *)</del></li>
    <li>
        Verify that private classes of public classes are usable (i.e. defined and not inline constructor of the public class)
        (Difficulty: **; Sharability: *)
    </li>
    <li>
        Add network transparency where missing (Difficulty: ***; Sharability: *)
    </li>
</ul>

<p>Please note: if not otherwise specified, the tasks are for KOffice CVS HEAD. (However some tasks could be backported to the last stable version of KOffice.)</p>

<?php
   include("footer.inc");
?>
