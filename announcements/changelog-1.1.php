<?php
  $page_title ='KOffice 1.1 Changelog';
  $site_root = '../';
  include("koffice.inc");
  include("header.inc");
?>

<p>
This page tries to present as much as possible of the problem
corrections and feature additions that occurred in KOffice between the 1.0
and 1.1 releases.
</p>
<p>
The list isn't exhaustive because there has been so much time since the last
release, that it is difficult to remember or find trace of everything...
</p>

<h2><a name="libs">Framework</a></h2>
<ul>
    <li>API cleanup and improvements (e.g. zoom support)</li>
    <li>New image management classes</li>
    <li>Print preview feature</li>
    <li>Extended filter architecture</li>
    <li>Common find/replace dialog boxes</li>
    <li>All applications use the Qt XML/DOM classes, the old KOML has been removed</li>
    <li>KDEPrint integration (needs kdelibs-2.2a1 or later)</li>
    <li>Magic filetype determination without need for extensions (needs kdelibs-2.2a1 or later)</li>
    <li>Many bugfixes (embedded objects...)</li>
    <li>Autosave feature (post-beta1)</li>
</ul>

<h2><a name="kword">KWord</a></h2>
<ul>
    <li>New overall design and new formatting engine (Qt RichText).</li>
 
    <li>Better zooming; adapts to the DPI settings (of the screen and of the printer.
     This means, if your X server is correctly configured, the page on screen has
    the same size as the real paper page.</li>
 
    <li>Much better performance with huge documents (the text is formatted
    as a background job, the repainting is done much better etc.).</li>
 
    <li>Files should be smaller than before (smarter way of saving
    the formatting information)</li>
 
    <li>Real document/view separation, working with different views on the same
    document is fully functional, cursors are in each view.</li>
 
    <li>Brand new formula widget (with doc/view design, zoom support etc.)</li>
    <li>Redesigned table support.</li>
    <li>Much improved find/replace functionality.</li>
    <li>Real bullets instead of using characters as bullets.</li>
    <li>Line-level breaking of paragraphs at end of frame/page.</li>
    <li>Right margin for a paragraph.</li>
    <li>Undo/redo fully working (all text operations, but also frame operations etc.)</li>
    <li>Embedding a kpresenter part into kword now works</li>
    <li>Copy/Paste and Drag-and-drop work as expected (instead of for full paragraphs only)</li>
    <li>Text-selections in KWord now behave the way you would expect</li>
    <li>Stability of KWord is greatly improved</li>
    <li>Copying frames has been implemented, fixing headers and footers.</li>
    <li>Implemented tabulators (left/right/center/decimal aligned).</li>
    <li>Implemented floating framesets, mainly for inline formulas and tables.</li>
    <li>KWord can now be embedded into another KOffice application.</li>
    <li>More precise coordinate system (especially for frames).</li>
    <li>Many improvements for tables (including splitting and merging cells).</li>
    <li>Highlight misspelled word during spell-checking, and spell-check all framesets.</li>
    <li>UI improvements including a complete redesign of the menus, undo/redo fixes, font-size fix, border-drawing improved, etc.</li>
    <li>Fixed crash when embedding into Konqueror.</li>
    <li>Many new variables available.</li>
    <li>Redesigned style editor (stylist), now all in one dialog.</li>
    <li>When changing a style, only the changes are applied to existing paragraphs (not the whole style).</li>
    <li>Fixed drawing and printing of embedded objects.</li>
    <li>Respect user's color scheme.</li>
    <li>Improved visual appearance (page shape, with shadow).</li>
</ul>

<h2><a name="kspread">KSpread</a></h2>
<ul>
    <li>Support for applying attribute changes to complete rows/columns.</li>
    <li>Improved undo/redo, grouping operations when applicable.</li>
    <li>Configuration dialog box added.</li>
    <li>New functions added.</li>
    <li>New dialog box, to define the lists used by the auto-fill feature.</li>
    <li>Many painting improvements.</li>
    <li>Copy and paste with insertion.</li>
    <li>Data validation.</li>
    <li>Rows and columns can be hidden.</li>
    <li>Pages can now be renamed (independently from their title text object).</li>
    <li>New templates added</li>
    <li>Fixed AutoForm loading bug</li>
    <li>Speedup for loading and saving and smaller file size</li>
</ul>

<h2><a name="kpresenter">KPresenter</a></h2>
<ul>
    <li>"Copy Page" feature.</li>
    <li>Much faster and flicker-free switching to full screen mode.</li>
    <li>Sidebar fixes.</li>
    <li>Fixed drawing of ellipses (rotation/gradient).</li>
    <li>Painting fixes.</li>
    <li>Dialogs improvements.</li>
    <li>Copy can now export plain text.</li>
    <li>Builtin visual support (based on the old kformula lib) removed, the kformula part can be used instead.</li>
    <li>Fixed drawing of embedded kspread document.</li>
</ul>

<h2><a name="kontour">Kontour</a></h2>
<ul>
    <li>Rulers became nicer.</li>
    <li>New canvas support.</li>
    <li>Multipages support.</li>
    <li>Dock panel from Kivio is used for layers dialog.</li>
    <li>Embedding koffice parts now works.</li>
    <li>Many fixes and small improvements.</li>
    <li>Helplines can be dragged.</li>
    <li>Mouse cursor flickering fixed.</li>
    <li>Fixes for readonly mode (e.g. embedded in Konqueror).</li>
    <li>UI improvements.</li>
</ul>

<h2><a name="krayon">Krayon</a></h2>
New application in KOffice-1.1.<br />
Krayon is a bitmap image drawing application.

<h2><a name="kformula">KFormula</a></h2>
Much improved mathematical formula support - complete redesign.

<h2><a name="kivio">Kivio</a></h2>
New application in KOffice-1.1.<br />
Kivio is a Flowcharting program.

<ul>
    <li>UI improvements.</li>
    <li>Connector bug fixed.</li>
</ul>


<h2><a name="kugar">Kugar</a></h2>
New application in KOffice-1.1.<br />
Kugar allows to create database report using XML templates.

<!-- 
<h2><a name="kchart">KChart</a></h2>
Some stuff

-->

<h2><a name="filter">Filters</a></h2>
<ul>
    <li>Many new filters: Applixware import, Abiword import/export, Docbook export, LaTeX export, etc.</li>
    <li>Improvements to the existing filters, especially the MSOffice import filters (such as Word and Excel).</li>
    <li>New filter: Quattro Pro import filter for KSpread.</li>
    <li>Improvements to the HTML and Abiword export filters.</li>
</ul>


<?php
  include("footer.inc");
?>




