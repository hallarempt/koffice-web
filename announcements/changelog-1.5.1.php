<?php
  $page_title ='KOffice 1.5.1 Changelog';
  $site_root = '../';
  include("koffice.inc");
  include("header.inc");
?>
<p>
  The following summarizes the major changes to the KOffice Suite since the
  release of KOffice 1.5.1 (latest stable version).
</p>
<ul>
<li><a href="#koffice_libs">KOffice Libraries</a></li>
<li><a href="#kword">KWord</a></li>
<li><a href="#kspread">KSpread</a></li>
<li><a href="#kpresenter">KPresenter</a></li>
<li><a href="#kivio">Kivio</a></li>
<li><a href="#kexi">Kexi</a></li>
<li><a href="#krita">Krita</a></li>
<li><a href="#karbon">Karbon</a></li>
<li><a href="#kplato">KPlato</a></li>
<li><a href="#kchart">KChart</a></li>
<li><a href="#kformula">KFormula</a></li>
<li><a href="#filters">Filters</a></li>
</ul>


<h3 id="koffice_libs">KOffice Libraries</h3>
<ul>
    <li>Fix for "points are saved with comma instead of dot in e.g. french locale".
    <li>Fix handling of guides</li>
    <li>Render paragraph borders so that they span between
        the margins of the paragraph, rather than spanning
        the entire frame.</li>
    <li>Fix by Benjamin K.Stuhl for "replace dialog searches are not remembered". Thanks!
(<a href="http://bugs.kde.org/125444">bug #125444</a>)</li>
    <li>Fix behavior of tabs in center-aligned or right-aligned paragraphs, as noticed by Thorsten.</li> 
    <li>Copy and use the unit the user chose</li>
    <li>Many fixes for coding errors spotted by Christoph Bartoschek. Thanks!</li>
    <li>Don't hide the font preview</li>
</ul>

<h3 id="kword">KWord</h3>
<ul>
    <li>Fix layouting of documents with footnotes</li>
    <li>Fix <a href="http://bugs.kde.org/126635">bug #126635</a></li>
    <li>Fix wrong page breaks being inserted during copy/paste</li>
    <li>Load default settings for DTP style documents too, preventing a crash</li>
    <li>Fix <a href="http://bugs.kde.org/126235">bug #126235</a>: use unit from config, not the hardcoded one</li>
    <li>Apply patch by Benjamin K.Stuhl to fix
<a href="http://bugs.kde.org/84562">bug #84562</a> JJ: wrong direction typographical quotes. Thanks!</li>
    <li>Fix input of Japanese text with skim</li>
</ul>

<h3 id="koshell">KOffice Workspace (koshell)</h3>
<ul>
</ul>

<h3 id="kspread">KSpread</h3>
<ul>
    <li>Fix <a href="http://bugs.kde.org/126350">bug #126350</a> -- date loss when saving OpenDocument</li>
    <li>Speed up loading documents when debug is compiled in</li>
    <li>Initilize the scrollbars on sheet changes correctly</li>
    <li>Fix loading/saving of cursor positions</li>
    <li>Painting engine Fix painting of cell grid.
                On scrolling the grid was sometimes not painted for one row.
                It is necessary to dilate all (!) regions by one column/row -
                particularly the rect of visible cells, which is used on
                scrolling.</li>
    <li>painting engine Border painting
                No need to check wether the adjacent cell is also marked
                dirty. For cells not at the sheet border we take always the
                pen which is more 'worth'. This avoids a linear search in the
                paint dirty list. And speeds up the painting.</li>
    <li>Fix '<a href="http://bugs.kde.org/125828">bug #125828</a>: Integer-valued cells unaffected by "Increase/decrease the 
        decimal precision shown onscreen"'</li>
    <li>Fix strange selection behaviour while using the autosum function</li>
    <li>Fix mutli sheel selections for formulas. (<a href="http://bugs.kde.org/125941">bug #125941</a>)</li>
    <li>Fix OpenDocument loading/saving of number formattings, precisions, large numbers</li>
    <li>Fix loading of header row</li>
    <li>Fix some problems with importing Excel files</li>
    <li> Fix the default width/height in the 'Resize Column/Row' dialogs.
<a href="http://bugs.kde.org/125751">bug #125751</a>)</li>


</ul>

<h3 id="kpresenter">KPresenter</h3>

<ul>
    <li> Fix <a href="http://bugs.kde.org/125424">bug #125424</a>: When setting slide background to "Use slide master
  background", preview is not shown correctly.</li>
  <li>Fix <a href="http://bugs.kde.org/125418">bug #125418</a>: Resizing textarea resizes wrong textarea.</li>
</ul>

<h3 id="kivio">Kivio</h3>

<h3 id="kexi">Kexi</h3>
    <li>fixed entering floating-point values for locales where ',',
  not '.' is the fractional point</li>
    <li>fixed converting floating-point values to SQL-compatible strings when
  the number was provided as string QVariant</li>
    <li>In the query designer show error message when switching to other view failed (i18n-safe)
and just show empty editor when opening a design in text view and there
  is no sql statement found in the backend</li>
    <li>Fix saving design changes while in data view</li>
    <li>fixed crash when double (or single, depending on the settings) clicking 
  on the empty area of the Project Browser</li>
<ul>
    <li>Fix building SQL INSERT statements for "prepared statement"
    <li>Report error when closing SQLite3 database</li> 
    <li>Work around crash bug</li>
</ul>

<h3 id="krita">Krita</h3>

<ul>
    <li>Preserve transparency when scaling</li>
    <li>Fix transforming (rotating, scaling, shearing) of images beyon 2700 pixels. Note:
        images with dimensions larger than 8 million pixels still get distorted</li>
    <li>Fix duplicate tool</li>
    <li>Fix compilation on Solaris</li>
    <li>Fix crash when resizing an empty layer</li>
    <li>Disable bmp export filter: ImageMagick can only save bmp's with transparency,
        which only ImageMagick can read</li>
    <li>Make MirrorX, MirrorY, scale layer and rotate layer undoable</li>
    <li>Fix crash when painting on a group or object layer</li>
</ul>

<h3 id="karbon">Karbon</h3>
<ul>
    <li>fixed bug where deleted objects are saved to odt</li>
    <li>some i18n translation context additions</li>
    <li>made polyline tool a bit more predictable</li>
    <li>some improvements to the node editing tool (some glitches are still there)</li>
</ul>

<h3 id="kplato">KPlato</h3>

<h3 id="kchart">KChart</h3>

<h3 id="kformula">KFormula</h3>
<ul>
    <li>Added 16bit support for keys of symbol characters.</li>
    <li>Added not equal (neq) symbol.  (<a href="http://bugs.kde.org/123962">bug #123962</a>)</li>

</ul>

<h3 id="kugar">Kugar</h3>

<h3 id="filters">Filters</h3>

<em>KWord:</em>
<ul>
 <li>Improved WordPerfect import filter, thanks to Fridrich Strba</li>
 <li>Fix OpenOffice import filter to parse the line-height correctly</li>
</ul>

<em>KSpread:</em>
<ul>
    <li>Lots of improvements to the Excel filter</li>
</ul>

<?php
  include("footer.inc");
?>
