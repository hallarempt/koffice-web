<?php
  $page_title ='KOffice 2.0 Alpha 9 Changelog';
  $site_root = '../';
  include("koffice.inc");
  include("header.inc");
?>
<p>
  The following summarizes the major changes to the KOffice Suite since the
  release of KOffice 2.0 Alpha 8. There are many changes and refactorings in
  the libraries that are not user-visible.
</p>
<ul>
<li><a href="#koffice_libs">KOffice Libraries</a></li>
<li><a href="#kword">KWord</a></li>
<li><a href="#kspread">KSpread</a></li>
<li><a href="#kpresenter">KPresenter</a></li>
<li><a href="#kexi">Kexi</a></li>
<li><a href="#kplato">KPlato</a></li>
<li><a href="#krita">Krita</a></li>
<li><a href="#karbon">Karbon</a></li>
</ul>

<h3 id="koffice_libs">KOffice Libraries</h3>
<ul>
  <li>make use of guide lines</li>
  <li><em>KoText</em>
    <ul>
      <li>Add a paragraph tool for visual editing of the layout of a paragraph.</li>
      <li>Add drop caps support</li>
    </ul>
  </li>
  <li><em>Flake</em>
    <ul>
      <li>Replace QBrush as shape background by KoGradientBackground, KoPatternBackground and KoColorBackground.</li>
      <li>Implement ODF pattern background attributes in KoPatternBackground.</li>
      <li>Dragging guidelines from rulers onto canvas.</li>
      <li>Guideline editing from the default tool.</li>
      <li>Guideline snapping.</li>
    </ul>
  </li>
</ul>

<h3 id="kword">KWord</h3>
<ul>
  <li>Beginning Table of Content support.</li>
  <li>Footnote/Endnote support.</li>
  <li>Improved ODF Saving.</li>
</ul>

<h3 id="kspread">KSpread</h3>
<ul>
  <li>Resurrected printing.</li>
  <li>Support printing of page ranges.</li>
  <li>Support printing of selected cells.</li>
  <li>Support zoomed printing.</li>
  <li>Support centering the table horizontally and/or vertically on the printed page.</li>
  <li>Resurrected spell checking.</li>
  <li>Support function modules (all functions moved into plugins).</li>
</ul>

<h3 id="kpresenter">KPresenter</h3>
<ul>
  <li>Fix loading of the ellipse/circle.</li>
  <li>Added group/ungroup functionality to the default tool.</li>
  <li>Presenter View.</li>
  <li>Make it possible to load/save sound event actions.</li>
</ul>

<h3 id="kchar">KChart</h3>
<ul>
  <li>Loading of embedded charts.</li>
</ul>

<h3 id="kexi">Kexi</h3>
  <ul>
    <li><em>Kexi reports module</em>
      <ul>
        <li>kspread/ods export for reports.</li>
        <li>HTML export for reports.</li>
      </ul>
    </li>
  </li>
</ul>

<h3 id="kplato">KPlato</h3>
<ul>
  <li>Re-enable configurable task defaults.
  <li>Improvements to work&vacation editor and dialogs.
  <li>Add estimate type Length which takes into account non-working days when scheduling tasks.
</ul>

<h3 id="krita">Krita</h3>
<ul>
  <li>Fix vector layers.</li>
  <li>Fix adjustment layers.</li>
  <li>Add timer to filter node and layer dialogs to improve responsiveness.</li>
  <li>Fix right-click when selecting a contiguous area opening the context (<a href="http://bugs.kde.org/164685">bug #164685</a>).</li>
  <li>Fix crash using the "select similar color" tool (<a href="http://bugs.kde.org/164610">bug #164610</a>).</li>
  <li>Fix cannot open png files with accented character in path (<a href="http://bugs.kde.org/163745">bug #163745</a>).</li>
  <li>Fix grid doesn't cover all the canva if krita's window is not maximized (<a href="http://bugs.kde.org/164617">bug #164617</a>).</li>
  <li>Fix excessive CPU usage when the grid is enabled (<a href="http://bugs.kde.org/164616">bug #164616</a>).</li>
  <li>Fix deleting layers doesn't delete their content (<a href="http://bugs.kde.org/164619">bug #164619</a>).</li>
  <li>Save masks information in native file format (but not yet the mask data).</li>
  <li>Start implementation of paintop preset.</li>
  <li>Sumi-e paintop.</li>
</ul>

<h3 id="karbon">Karbon</h3>
<ul>
    <li>Status bar style (fill, stroke) preview.</li>
</ul>

<?php
  include("footer.inc");
?>
