<?php
  $page_title ='KOffice 1.3.1 Changelog';
  $site_root = '../';
  include("koffice.inc");
  include("header.inc");
?>

<p>
  The following summarizes the major changes and bugfixes to the KOffice Suite since the
  release of KOffice 1.3.
</p>

<h3><a name="koffice_libs">KOffice Libraries</a></h3>
KOfficeCore:
<ul>
<li>Changed .desktop file setup so that changes to the K menu structure,
  to file-program associations, or other distribution customizations cannot
  prevent KOffice applications from starting.
<li>Fixed parsing of number+unit, due to change in Qt 3.3. Fixes problems
  when opening OOWriter documents in particular.
<li>Don't show the filter dialog when generating thumbnails
<li>Improved error handling to catch "partition full" problems.
</ul>

KOfficeUI:
<ul>
<li>Fix overwriting of templates (#73537)
<li>Fix loading icons when creating templates
<li>Allow template icons up to 64x64 instead of 60x60 and scale better if too big
</ul>

<h4>KoText library features (shared between KWord and KPresenter):</h4>
<ul>
<li>Date variables for printing-date, last-modified, and creation-date were
  not loaded correctly.
<li>Background spellchecking works again
<li>Fixed crash during background spellchecking (refcounting of formats)
<li>Fixed race condition during background spellchecking (leading to misplaced red underlines)
<li>Repaint paragraph after bg spell checking, in all cases (errors or not),
  otherwise newly-added-to-the-dictionary words were still red-underlined (#56506).
<li>Fixed hyphenation checkbox not correctly set in font dialog
<li>Fixed wrong hyphenation in many cases, due to wrong word sent to hyphenation engine
<li>Font dialog usability: turn radiobuttons superscript/subscript into
  checkboxes to make it possible to deactivate both.
<li>Usability in style dialog: when creating a new style, select it as the
  'next style' for itself (#45868).
<li>Allow decimal values in "multiple" (proportional) linespacing.
<li>Fixed wrong left margin on multiline paragraphs with a counter.
</ul>

<h3><a name="kword">KWord</a></h3>
<ul>
<li>Fixed "add bookmark" for the case where there's no selection
<li>Keep bookmark valid after deleting its paragraph
<li>Usability improvements in "select bookmark" dialog
<li>Fixed drawing of borders for copied frames (e.g. header/footers)
<li>Fixed "text doesn't immediately run around copied frame on new page" (#73819)
<li>Fixed crash when activating text view mode and there's no text frameset (#64952)
<li>Allow to save custom shortcuts for 'insert variable' actions
<li>Fixed crash when undoing a paste action
<li>Fixed crash related to tables and deleting frames
<li>Fixed crash when pasting plain text over a selection (#78561)
<li>Fixed wrong conversion of values in config dialog when switching units (#65972)
</ul>


<h3><a name="kpresenter">KPresenter</a></h3>
<ul>
<li>Fixed possible crash in presentation mode if not all slides are shown
<li>Fixed wrong clipping of fullscreen presentation (#73943)
<li>Fixed show the duration for the correct page if not all slides are shown
<li>Fixed crash in infinite loop presentation mode when first slide is not shown
<li>Fixed speed of automatic presentation (it was reversed) (#69260)
<li>Fixed wrong positioning of text when using "Vertical Alignment" (#72224)
<li>Fixed redrawing of lines in drawing mode in case of a repaint event
<li>Save HTML Slideshow export settings does not add extension to filenames (#76287)
<li>If a page is shown more than once during a presentation, add the time for
  the duration instead of showing only the last duration.
</ul>


<h3><a name="kspread">KSpread</a></h3>
<ul>
<li>undo not working after deleting multiple cells (#77844)
<li>fixed crash when opening a file over the network (#45822)
</ul>

<!--
<h3><a name="kugar">Kugar</a></h3>
<ul>

</ul>
-->

<h3><a name="kivio">Kivio</a></h3>
<ul>
<li>Add missing code to make the 'Crop picture to edges' option
  in the page export dialog work.
<li>Fixed painting bug when moving stencils containing text.
<li>Add boundaries to the zoom to prevent lockups and crashes.
</ul>

<!--
<h3><a name="kformula">KFormula</a></h3>
<ul>
</ul>


<h3><a name="karbon">Karbon</a></h3>
<ul>
</ul>
-->

<h3><a name="filters">Filters</a></h3>

<em>KWord's RTF import filter:</em>
<ul>
<li>make it compile on gcc 3.4
<li>import dotted underline correctly (instead of double underline)
<li>fallback to previously used encoding if the asked encoding is not known
<li>fix linespacing
</ul>

<em>KWord's RTF export filter:</em>
<ul>
<li>fix some paragraph formattings (margins, linespacing)
<li>escape correctly the document information
</ul>

<em>KWord's OOWriter import filter:</em>
<ul>
<li>added support for paragraph bullets/counters, footnotes/endnotes, links, table of contents and bookmarks
<li>fixed shadow color and headers/footers
</ul>

<em>KWord's OOWriter export filter:</em>
<ul>
<li>added support for tables and many field variables
<li>fixes for underlining and linespacing
</ul>

<em>KWord's HTML export filter:</em>
<ul>
<li>fix some paragraph formattings in the enhanced mode (margins, linespacing)
<li>fix background colour in enhanced mode
<li>fixed pictures
</ul>


<h3>Previous changelogs</h3>
<a href="changelog-1.3.php">1.3</a> |
<a href="changelog-1.3rc1.php">1.3rc1</a> |
<a href="changelog-1.3beta4.php">1.3beta4</a> |
<a href="changelog-1.3beta3.php">1.3beta3</a> |
<a href="changelog-1.3beta2.php">1.3beta2</a> |
<a href="changelog-1.3beta1.php">1.3beta1</a>

<?php
  include("footer.inc");
?>
