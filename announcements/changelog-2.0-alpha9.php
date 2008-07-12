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
  <li>Add a paragraph tool for visual editing of the layout of a paragraph.</li>
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
  <li>Fix tablet support for NVidia-twinview setups</li>
  <li>Fix crash when doing select-all</li>
  <li>Fix crash when choosing more complex paintop brush engines</li>
  <li>Port bumpmap filter</li>
  <li>Re-enable adjustment layers</li>
  <li>Don't hide the krita tools in the toolbox if a shape layer is selected but 
  disable them</li>
  <li>Fix memory leak on removing layers</li>
  <li>Fix order of tools in toolbox</li>
  <li>Improve the scale image dialog (still needed: keep aspect ratio)</li>
  <li>Use XML for illuminant profiles instead of binary blobs, leading to improved stability</li>
  <li>Fix crash in the unsharp mask filter</li>
  <li>Fix first stroke of painting mapped to the bottom right (when using a tablet)</li>
  <li>Fix blur filter</li>
  <li>Optimize convolution</li>
  <li>Fix crash when duplicating layers</li>
  <li>Fix the middle button switching fg/bg colors</li>
  <li>Remove non-OpenCTL based 16 and 32 bits float colorspaces</li>
</ul>

<h3 id="karbon">Karbon</h3>
<ul>
    <li>Status bar style (fill, stroke) preview.</li>
</ul>

<?php
  include("footer.inc");
?>
