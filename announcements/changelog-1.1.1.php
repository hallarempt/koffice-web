<?php
  $page_title ='KOffice 1.1.1 Changelog';
  $site_root = '../';
  include("koffice.inc");
  include("header.inc");
?>

<p>
This page tries to present as much as possible of the problem
corrections and feature additions that occurred in KOffice between the 1.1
and 1.1.1 releases.
</p>

<h2><a name="libs">Framework</a></h2>
<ul>
    <li>Startup notification activated for all KOffice applications</li>
    <li>Applications are ready for a future renaming of their native mimetype name (more IANA compliant)</li>
    <li>Fixed loading of embedded kontour documents</li>
    <li>Refuse to load embedded documents with remote URL (e.g. http) for security reasons</li>
    <li>"Skip" button in Find/Replace dialog works as intended with the Backwards option</li>
</ul>

<h2><a name="koshell">KOffice Workspace</a></h2>
<ul>
    <li>Fixed multiple confirmation requests when closing with an unsaved document</li>
</ul>

<h2><a name="kword">KWord</a></h2>
<ul>
    <li>Famous bug "all letters squashed together when printing" fixed</li>
    <li>Undo/redo fixes for frame creation</li>
    <li>Fixed printing from preview mode</li>
    <li>Fixed slowness related to clipboard (e.g. when pasting text)</li>
    <li>Fixed crash on Ctrl+K at end of paragraph</li>
    <li>Fixed crash when hiding headers or footers (which contains a variable)</li>
    <li>Transform into normal frame when copying header or footer</li>
    <li>Fixed charset conversion issue for "personal expressions"</li>
    <li>Save all frames, even for the main frameset, so that borders etc. are kept</li>
    <li>Allow to insert GIF images</li>
    <li>Fixed applying a format change (e.g. new font family) to a selection</li>
    <li>Insert Frame Break at cursor position</li>
    <li>Make the document readonly during a search/replace or a spellcheck</li>
    <li>Fixed crash when undoing a format change, due to cursor positionned too far right</li>
</ul>

<h2><a name="kspread">KSpread</a></h2>
<ul>
    <li>Search/replace is now useful (highlights the current matching cell)</li>
    <li>Search/replace looks for cells in proper order (top-left to bottom-right)</li>
    <li>Corruption when saving dates fixed</li>
</ul>

<!--<h2><a name="kpresenter">KPresenter</a></h2>

<h2><a name="kontour">Kontour</a></h2>

<h2><a name="krayon">Krayon</a></h2>

<h2><a name="kformula">KFormula</a></h2>

<h2><a name="kivio">Kivio</a></h2>

<h2><a name="kugar">Kugar</a></h2>
-->

<h2><a name="kchart">KChart</a></h2>
<ul> 
     <li>KChart can load and save data again</li> 
     <li>New type of chart: Polar (use wizard to enable this)</li> 
      <li>Various fixes and UI improvements</li> 
</ul> 
 The following features have been reactivated: 
<ul> 
     <li>setting a background color</li> 
     <li>changing the grid color</li> 
     <li>hiding and showing the grid</li> 
     <li>hiding and showing the legend</li> 
     <li>modifying the title of the legend</li> 
     <li>modifying the x-axis labels</li> 
     <li>adding one or two header and/or a footer text<br /> 
         with user defined fonts and color settings</li> 
</ul> 

<h2><a name="filter">Filters</a></h2>
<ul>
    <li>Translations were not used by many filters (for dialogs and error messages)</li>
</ul>


<?php
  include("footer.inc");
?>
