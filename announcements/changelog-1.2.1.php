<?php
   $page_title ='KOffice 1.2 ChangeLog';
   $site_root = '../';
   include("koffice.inc");
   include("header.inc");
?>

<h4>
  General
</h4>
<ul>
  <li>
    Updated the KDE version detection so that KOffice compiles with KDE 3.0.5.
  </li>
  <li>
    Prevented embedded objects from being resized to a size of 0.
  </li>
</ul>

&nbsp;<p />
<h4>
  KWord
</h4>
<ul>
  <li>
    Improved startup speed.
  </li>
  <li>
    Added support for large font sizes (&gt; 163 pt).
  </li>
  <li>
    Corrected loading and saving the default color when the style has
    a non-default color.
  </li>
  <li>
    Crash fix
  </li>
</ul>

&nbsp;<p />
<h4>
  KPresenter
</h4>
<ul>
  <li>
    Improved startup speed.
  </li>
  <li>
    Added support for large font sizes (&gt; 163 pt).
  </li>
  <li>
    Improved the DCOP interface stability.
  </li>
</ul>

&nbsp;<p />
<h4>
  KSpread
</h4>
<ul>
  <li>
    Fixed crashes when long text overlaps several cells or with merged cells.
  </li>
  <li>
    Fixed the right-click popup menu in the column header when a row is
    selected (now the column below the right click is selected).
  </li>
  <li>
    Rendering improvements:
    <ul>
      <li>
        Fixed rendering of cell borders when scrolling up.
      </li>
      <li>
        Fixed excessive cell repainting, including when zooming to a lower
        resolution while at the end of a range.
      </li>
      <li>
        Fix painting of cell content in several cases (merging cells,
        return from edit mode, dragging cell content).
      </li>
      <li>
        Fixed the display of cells overlapping in the vertical direction.
      </li>
      <li>
        Reduced flicker of embedded objects.
      </li>
    </ul>
  </li>
  <li>
    Printing improvements:
    <ul>
      <li>
        Fixed the crash while printing with a print range of exactly one row or
        column.
      </li>
      <li>
        Fixed print header/footer macros.
      </li>
      <li>
        Fixed printing headers/footers with "&lt;sheet&gt;".
      </li>
      <li>
        Fixed printout of thick borders on page borders.
      </li>
      <li>
        Fixed the paper size for custom layouts in the paper layout dialog.
      </li>
    </ul>
  </li>
  <li>
    Small fix in the time display ("14:04 am" was displayed as "14: 4 am").
  </li>
  <li>
    Fixed scrolling to the end of a sheet when zoomed.
  </li>
  <li>
    Fixed an endless loop when selecting until out of range.
  </li>
  <li>
    Fixed autoscroll on selection with mouse when the mouse is stationary.
  </li>
  <li>
    Fixed applying changes for bold and italic attributes with the cell
    layout dialog.
  </li>
  <li>
    Fixed enabling/disabling the sort button when a single cell is selected.
  </li>
  <li>
    Fixed the precision when displaying numbers in scientific format.
  </li>
  <li>
    Fixed moving widgets in the validity dialog.
  </li>
  <li>
    Fixed inserting string arguments in the formula dialog.
  </li>
  <li>
    Fixed compilation errors when Qt is compiled without the SQL framework.
  </li>
  <li>
    Embedded objects must have a size greater than 0.
  </li>
  <li>
    Fixed an endless loop when calculating formulas.
  </li>
  <li>
    Clicking several times on <em>insert object</em> now only inserts the
    last clicked object.
  </li>
  <li>
    Fixed the width and height of columns and rows during copy and paste
    operations.
  </li>
</ul>

&nbsp;<p />
<h4>
  KChart
</h4>
<ul>
  <li>
    Fixed painting of the surrounding frame, including legends being partially
    hidden.
  </li>
  <li>
    Fixed X axis texts when several charts are embedded.
  </li>
  <li>
    Fixed improper recognition of X axis text and label when embedded in
    KSpread.
  </li>
</ul>

&nbsp;<p />
<h4>
  Kivio
</h4>
<ul>
  <li>
    Fixed installation of the <em>straight connector tool</em>.
  </li>
</ul>

&nbsp;<p />
<h4>
  Filters
</h4>
<ul>
  <li>
    Added support for a few more function in KSpread's MS Excel import filter.
  </li>
  <li>
    Fixed some problems with Swedish characters in KWord's MS Word
    import filter.
  </li>
  <li>
    Fixed Unicode handling in KWord's RTF import filter.
  </li>
  <li>
    Removed the requirement for <code>libfl</code> in KWord's LaTeX import
    filter.
  </li>
</ul>

&nbsp;<p />
<h4>
  Preview module for Konqueror
</h4>
<ul>
  <li>
    Eliminated the message box when loading fails.
  </li>
</ul>

<?php
  include("footer.inc");
?>
