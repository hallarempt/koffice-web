<?php
  $page_title ='KOffice 1.2-beta2 Changelog';
  $site_root = '../';
  include("koffice.inc");
  include("header.inc");
?>

<p>
  The following summarizes the major changes to the KOffice Suite since the
  release of KOffice 1.2beta two months ago.
</p>



<h3><a name="text_widget_changelog">Text Widget</a></h3>
<p>
  Both <a href="#kword_changelog">KWord</a> and
  <a href="#kpresenter_changelog">KPresenter</a> share the same text widget.
  Thus, the following improvements apply to both of those components:
</p>

<em>
  Text:
</em>
<ul>
  <li>
      A new "apply auto-correction" feature applies the auto-correction
      settings (spelling, symbols, etc.) to the entire document, rather than
      just when data is being entered.
  </li>
  <li>
      The auto-correction rules can be changed (e.g., to use a different
      spoken language).
  </li>
  <li>
      The find / replace function now has support for searching
      for formatted text and replacing matches with formatted text (bold,
      Times font, etc.) (the formatting applies to the entire string in the 
      find text and in the replace text).
  </li>
</ul>

<em>
  Formatting:
</em>
<ul>
  <li>
      The current selection's text and paragraph formatting can now be
      directly saved as a style.
  </li>
  <li>
      Some new font formats are available, and the underline and strikeout
      formats have improved.
  </li>
  <li>
      The types of formatting characters (spaces, tabs, carriage returns,
      etc.) which are visible can be customized.
  </li>
</ul>



<h3><a name="kword_changelog">KWord</a></h3>
<p>
  Besides the improvements noted above for the
  <a href="#text_widget_changelog">Text Widget</a>, the major
  improvements and changes to KWord are as follows:
</p>

<em>
  General:
</em>
<ul>
  <li>
      KWord now has footnotes!  Configurable numbering and main frame / footnote
      separator are included.
  </li>
  <li>
      The text widget, which KWord and KPresenter share, offers KWord users
      a number of <a href="#text_widget_changelog">new features and
      improvements</a>.
  </li>
  <li>
      The KWord filters have also <a href="#filters_changelog">substantially
      progressed</a> since the last release.
  </li>
  <li>
      The cursor position is now restored when a document is loaded.
  </li>
  <li>
      Paragraphs can be selected by clicking on the left of the text frame.
  </li>
  <li>
      Default tab widths are adjustable.
  </li>
  <li>
      Improved header and footer grouping allows different formats for both
      the first and other pages as well as for the even and odd pages.
  </li>
  <li>
      The table of contents looks more professional.
  </li>
  <li>
      KWord variables (page number, date, author, etc.) can now display the type
      of variable instead of the value, on screen.
  </li>
</ul>

<em>
  Frames:
</em>
<ul>
  <li>
      Frames can have margins and a "runaround" gap.
  </li>
  <li>
      Text can be set to flow to the left, right or largest side of a frame.
  </li>
  <li>
      Frames and paragraphs can have a double-line border.
  </li>
  <li>
      Frames now have their own styles (borders, margins, background color,
      etc.).  A style can be created based on the formatting of the
      selected frame.
  </li>
  <li>
      Frame contents can be "locked" so that the data is not inadvertently
      altered.  The insertion cursor can also be optionally disabled in
      locked frames.
  </li>
  <li>
      Frame sizes and positions can similarly be protected.
  </li>
  <li>
      Frame, table and text / paragraph styles can be imported from other
      documents.
  </li>
</ul>

<em>
  Tables:
</em>
<ul>
  <li>
      Tables also have their own styles, based on a combination of frame
      and paragraph styles.
  </li>
  <li>
      In addition, KWord now supports table templates.  Table templates are
      based on a combination of table styles (for example, a different
      style can be applied to the table header row, or columns can have
      alternating colors.)
  </li>
  <li>
      The table column resizing dialog has been improved.
  </li>
</ul>

<em>
  Document / Picture handling:
</em>
<ul>
  <li>
      A new type of view mode is available: the "text" mode, a relatively lightly
      formatted presentation.
  </li>
  <li>
      Other KWord documents can be loaded into the current document.
  </li>
  <li>
      Pictures can be saved directly to disk.
  </li>
  <li>
      Transparent regions in images no longer obscure the view underneath
      (for this release the lower object is still obscured in printout).
  </li>
  <li>
      KOffice-1.0 images can again be loaded, displayed and saved.
  </li>
  <li>
      Embedded documents are handled better.
  </li>
</ul>



<h3><a name="kspread_changelog">KSpread</a></h3>
<p>
  The major improvements and changes to KSpread are as follows:
</p>

<em>
  General:
</em>
<ul>
  <li>
      KSpread now has templates!
  </li>
  <li>
      Headers and footers can be defined separately for each sheet in the
      workbook.
  </li>
  <li>
      A new "formula indicator" indicates when a cell contains a formula
      (a small blue rectangle is placed in a corner of the cell).
  </li>
  <li>
      The range for a named area can now be changed, effectively converting
      such names into variables (cells which reference the named areas will
      reference the new range rather than the range defined when the named
      area was added to the cell).
  </li>
  <li>
      A spreadsheet can now have Multiple views, with each view able to
      select or modify different portions of the same sheet independently.
  </li>
  <li>
      Preliminary zooming support.
  </li>
  <li>
      The table DCOP interface has undergone incompatible changes (many
      operations being moved to the "View" class).
  </li>
</ul>

<em>
  Document / Data handling:
</em>
<ul>
  <li>
      Data can now be loaded directly from an SQL database.
  </li>
  <li>
      Data can be read from a text file.
  </li>
  <li>
      Formatted data can be pasted from the clipboard. 
  </li>
  <li>
      Text can be applied to a column.
  </li>
</ul>

<em>
  Printing:
</em>
<ul>
  <li>
      The grid as well as the comment and formula indicators can be
      optionally printed.
  </li>
  <li>
      Ranges can be defined for printing.
  </li>
  <li>
      Selected rows and/or columns can be repeated after page breaks
      (for headings and descriptions).
  </li>
  <li>
      A <code>&lt;pages&gt;</code> code can be inserted in the header or footer
      for printing the page number.
  </li>
  <li>
      The page layout can be set separately for each sheet in the workbook.
  </li>
  <li>
      Changes to the page layout can be reversed (with <code>Ctrl-z</code> or
      <code>Edit</code> / <code>Undo</code>).
  </li>
</ul>

<em>
  Functions:
</em>
<ul>
  <li>
      Many new functions are available (<code>ISBLANK</code>,
      <code>CHAR</code>, <code>CODE</code>, <code>VALUE</code>,
      <code>DOLLAR</code>, <code>CONCATENATE</code>, <code>FIXED</code>,
      <code>T</code>, <code>TEXT</code>, <code>SUBSTITUTE</code>,
      <code>SEARCH</code>, <code>INFO</code>, <code>FILENAME</code>,
      <code>TYPE</code>, <code>COUNTBLANK</code>, <code>N</code>,
      <code>AVEDEV</code>, <code>ARABIC</code>, <code>AVERAGEA</code>,
      <code>ROT</code>, <code>FIB</code>, <code>BASE</code>,
      <code>FACTDOUBLE</code>, <code>SQRTPI</code>, <code>QUOTIENT</code>,
      <code>MULTINOMIAL</code> and <code>COUNTIF</code>).
  </li>
  <li>
      "Goal Seek" has been implemented.
  </li>
  <li>
      Additional options are available for data consolidation (<code>Sum</code>,
      <code>Average</code>, <code>Count</code>, <code>Min</code>,
      <code>Max</code>, <code>Product</code>, <code>Standard Deviation</code>
      and <code>Variance</code>).
  </li>
  <li>
      More functions are compatible with the Excel&reg; equivalents
      (<code>FIND</code>, <code> REPLACE</code>, <code>LEFT</code>,
      <code>RIGHT</code>, <code>MID</code> and <code>REPT</code>).
  </li>
  <li>
      The EURO() function now supports Greek.
  </li>
  <li>
      Engineering is the latest function category.
  </li>
</ul>

<em>
  Series / Sorting:
</em>
<ul>
  <li>
      Series can now be decreasing and can also consist of real numbers.
  </li>
  <li>
      The auto-continuation support has been expanded to each direction
      in the sheet (up, down, left and right) and to a greater universe
      of series (even ambiguous series such as <code>1, 3, 4, 6, . . .</code>).
  </li>
<!--
</ul>

<em>
  Sorting:
</em>
<ul>
-->
  <li>
      Up to three rows or columns can be sorted together.
  </li>
  <li>
      The sorted results can be stored somewhere else to keep the original
      data intact.  The layout / formatting of the data can optionally be
      applied to the new location, and a row header outside the sort range
      may also be copied to the new location.
  </li>
  <li>
      The sort function recognizes more data types (such as days of the week).
  </li>
</ul>

<em>
  UI / Organization:
</em>
<ul>
  <li>
      "Copy" now makes both KSpread and (converted) text data available
      to the clipboard.  The "Copy as Text" menu entry has been removed.
  </li>
  <li>
      New shortcuts apply to cell formatting.
  </li>
</ul>



<h3><a name="kpresenter_changelog">KPresenter</a></h3>
<p>
  The major improvements and changes to KPresenter are as follows:
</p>
<em>
  General:
</em>
<ul>
  <li>
      The text widget, which KWord and KPresenter share, offers KWord users
      a number of <a href="#text_widget_changelog">new features and
      improvements</a>.
  </li>
  <li>
      The popular "Snap to Grid" feature is now implemented.
  </li>
  <li>
      A new transition effect (Strips) is available.
  </li>
  <li>
      Grid line colors can be adjusted.
  </li>
  <li>
      Images (including the background images) can be saved directly to disk.
  </li>
</ul>

<em>
  Objects:
</em>
<ul>
  <li>
      Polyline objects can be flipped.
  </li>
  <li>
      Text objects can have margins.
  </li>
  <li>
      Holding the <code>Shift</code> key while creating a line object
      snaps to the vertical or horizontal planes.
  </li>
  <li>
      Objects can be aligned vertically.
  </li>
  <li>
      Objects have a new "keep ratio" property.
  </li>
  <li>
      Object property dialogs have a new tab for properties particular to
      the selected object.
  </li>
  <li>
      Line objects (freehand, polyline, quadric bezier curve and cubic
      bezier curve) can be closed automatically.
  </li>
  <li>
      Object duplication is simplified with a new dialog.
  </li>
  <li>
      Additional line endpoints are available (line arrow, dimension
      line, etc.).
  </li>
  <li>
      The rotate and freehand tools have a more suitable cursor.
  </li>
  <li>
      Polygons which are not fully closed are handled better.
  </li>
  <li>
      Variable loading and saving is functional.
  </li>
  <li>
      The Properties dialog can now be used with multiple objects.
  </li>
</ul>

<em>
  UI / Organization:
</em>
<ul>
  <li>
      The default-settings for rectangles, pies and polygons have been
      reorganized under the <code>Settings</code> /
      <code>Configure KPresenter</code> menu entry.
  </li>
  <li>
      Actions for lines, shapes and arrangement of objects have been
      reorganized into a new, context-dependent drop-down menu.
  </li>
  <li>
      The settings-toolbar, and corresponding menu-entries, have been removed.
  </li>
</ul>


<h3><a name="kugar_changelog">Kugar</a></h3>
<p>
  The major improvements and changes to Kugar are as follows:
</p>

<em>
  New:
</em>
<ul>
  <li>GUI Report Designer is added (kudesigner).<br/>
    Qt-only version of kudesigner can be found on
    <a href="http://www.cloudtemple.mksat.net">maintainer's web site</a></li>
</ul>

<em>
  Changes:
</em>
<ul>
 <li>Users can add as many detail bands to the report as needed,
    this can be useful if we print report with data, arranged according
    the master-detail relationship.<br/>
    For example, now Kugar's
    Detail Level="0" -&gt; Detail Level="1" -&gt; Detail Level="2"
    corresponds to many commercial report engines'
    Master -&gt; Detail -&gt; Subdetail</li>

 <li>Any detail of any level can now have detail header and detail footer.</li>

 <li>Added DDMMYY_PERIOD (e.g. 25.02.02) and DDMMYYYY_PERIOD (e.g. 25.02.2002)
    date type output formats for Fields, Specials and CalculatedFields.
    They have numbers 11 and 12 to use in a report template.</li>
</ul>

<h3><a name="koffice_changelog">KOffice Libraries</a></h3>
<p>
  The following enhancements to the KOffice libraries apply to all of the
  KOffice components:
</p>
<ul>
  <li>
      Improved DCOP functionality for improved scripting, including a new
      quick print command.
  </li>
  <li>
      Improved the template chooser (it now remembers the last selected
      template).
  </li>
  <li>
      Improved image handling.
  </li>
  <li>
      Corrected saving GUI-related user settings (toolbars, icon sizes, etc.).
  </li>
  <li>
      Corrected the autosave feature.
  </li>
</ul>



<h3><a name="#filters_changelog">Filters</a></h3>
<p>
  The KWord filters have received the greatest attention this round:
</p>
<ul>
  <li>
      The AbiWord Filter for KWord can import the AbiWord ignored
      word list (for spelling checking) and the default tabulator
      spacing.
  </li>
  <li>
      The AbiWord export filter for KWord can export the KWord
      ignored word list (for spelling checking) and the page number
      and number-of-pages codes / variables.
      The export of hyperlinks has been corrected.
  </li>
  <li>
      The HTML export filter for KWord now saves images in a
      sub-directory and no longer places empty paragraphs before
      or after images.
  </li>
  <li>
      The docbook export filter for KWord now exports hyperlinks properly.
  </li>
  <li>
      The RTF export filter for KWord can export the date, time and
      page number codes / variables and the text equivalent of other
      codes / variables.  Non Latin1 characters are now exported
      correctly.
  </li>
  <li>
      The LaTeX export filter for KWord now exports tables (including
      borders) and proper indentation.
  </li>
  <li>
      The MSWrite import filter for KWord has a new dialog, to allow the user
      to select an Encoding for windows character set conversion and also any
      special import options.
      Pagebreaking should finally work, as well as import of Soft Hyphenation
      and Multiple Newlines in a pargraph.
      Documents with Font Table information terminated by a null entry do not 
      cause the filter to abort anymore, so document import works more reliably.
</ul>

<?php
  include("footer.inc");
?>
