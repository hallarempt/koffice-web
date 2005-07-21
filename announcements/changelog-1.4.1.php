<?php
  $page_title ='KOffice 1.4.1 Changelog';
  $site_root = '../';
  include("koffice.inc");
  include("header.inc");
?>

<p>
  The following summarizes the major changes and bugfixes to the KOffice Suite since the
  release of KOffice 1.4.
</p>

<h3><a name="koffice_libs">KOffice Libraries</a></h3>
<p>KOfficeCore:</p>
<ul>
<li>OASIS loading/saving fix for embedded objects</li>
<li>Fix crash when pressing Quit in the initial startup dialog (<a href="http://bugs.kde.org/show_bug.cgi?id=107911">107911</a>)</li>
<li>Fix the handling of Automatically select filename extension when directory was selected</li>
</ul>

<p>KOffice UI:</p>
<ul>
<li>Fix typing a URL in startup dialog and clicking OK; the URL wasn't loaded
(<a href="http://bugs.kde.org/show_bug.cgi?id=109000">109000</a>)</li>
<li>Fix "Always start X with this template" behaving as if it was checked when it wasn't
(<a href="http://bugs.kde.org/show_bug.cgi?id=108843">108843</a>)</li>
</ul>

<h3>KOffice Workspace:</h3>
<ul>
<li>Has an icon, finally :)</li>
</ul>

<h3><a name="kword">KWord</a></h3>
<ul>
<li>Fix crash when updating a TOC with a table inside it
(<a href="http://bugs.kde.org/show_bug.cgi?id=107961">107961</a>)</li>
</ul>

<h4><a name="kwordoasis">KWord OASIS OpenDocument support</h4>
<ul>
<li>Fixed loading of headers and footers
(<a href="http://bugs.kde.org/show_bug.cgi?id=107424">107424</a>)</li>
<li>Implemented saving of headers and footers</li>
<li>Implemented saving and loading columns (count and spacing)</li>
<li>Fix for text:h without outline-level</li>
<li>Simplified the XML by removing spurious &lt;span&gt; tags due to misspelled words</li>
<li>Save office:font-face-decls tag so that OOo loads the fonts</li>
<li>Fixed loading of font sizes specified as a percentage</li>
<li>Implemented loading of list indentation (space-before)
(<a href="http://bugs.kde.org/show_bug.cgi?id=109223">109223</a>)</li>
<li>Improved OOo compatibility when saving page breaks</li>
<li>Save first page number the right way so that OOo can load it</li>
</ul>


<h3><a name="kpresenter">KPresenter</a></h3>
<ul>
<li>Fix painting shadows of all 2D shapes</li>
<li>Fixed "copy-page has a little offset for embedded objects"
(<a href="http://bugs.kde.org/show_bug.cgi?id=105878">105878</a>)</li>
</ul>

<h4><a name="kwordoasis">KPresenter OASIS OpenDocument fixes for polyline, polygon and regular-polygon</h4>
<ul>
<li>Use the viewBox in saving and loading of draw:points</li>
<li>be more precise when saving draw:points</li>
<li>use the attributes for regular polygons as defined in the standard</li>
<li>save the object name in the tag as attribute</li>
<li>load lines part of a group, as part of the group</li>
</ul>

<h3><a name="kspread">KSpread</a></h3>
<ul>
<li>Fix crash related to obscured cells in rendering code
(<a href="http://bugs.kde.org/show_bug.cgi?id=108659">108659</a>)</li>
</ul>

<!--
<h3><a name="kugar">Kugar</a></h3>
<ul>

</ul>
-->

<h3><a name="krita">Krita</a></h3>
<ul>
<li>Fix bug <a href="http://bugs.kde.org/show_bug.cgi?id=108398">108398</a>
(Guides don't do anything useful & don't get painted often enough)</li>
<li>Move the layers palette to the control box docker, so there's one docker less on screen</li>
<li>Add shortcut keys for many more actions (Thanks to Alan)</li>
<li>Various performance optimizations</li>
<li>On selecting the crop tool when there is a selections present, crop</li>
<li>Crop layer on double click</li>
<li>Fix bug 108704: Crash when copying with ctrl+c</li>
<li>Fix bug 108397: crashing on (external) clipboard change</li>
<li>Fix Bug 107994: Moving a detached docker resizes it to a minimum</li>
<li>Fix Bug 107938: Select all and cut/copy makes Krita hang</li>
<li>Improved .psd loading (subbug of: Bug 107122: Layers box behaves strangely)</li>
</ul>

<h3><a name="kexi">Kexi</a></h3>
<ul>
<li>Fix compilation using gcc</li>
<li>Fix crash on startup when Kexi is started from K Menu (#109025)</li>
<li>Form widgets: shadow in label widgets is properly set for altered indenting, 
margins and alignment</li>
</ul>

<!--
<h3><a name="kformula">KFormula</a></h3>
<ul>
</ul>


<h3><a name="karbon">Karbon</a></h3>
<ul>
</ul>
-->

<?php
  include("footer.inc");
?>
