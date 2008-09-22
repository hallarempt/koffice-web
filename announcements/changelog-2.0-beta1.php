<?php
  $page_title ='KOffice 2.0 Beta 1 Changelog';
  $site_root = '../';
  include("koffice.inc");
  include("header.inc");
?>
<p>
  The following summarizes the major changes to the KOffice Suite since the
  release of KOffice 2.0 Alpha 10. There are many changes and refactorings in
  the libraries that are not user-visible.
</p>
<ul>
<li><a href="#koffice_libs">KOffice Libraries</a>.</li>
<li><a href="#kword">KWord</a>.</li>
<!-- <li><a href="#kpresenter">KPresenter</a>.</li> -->
<li><a href="#kplato">KPlato</a>.</li>
<li><a href="#krita">Krita</a>.</li>
<li><a href="#karbon">Karbon</a>.</li>
</ul>

<h3 id="koffice_libs">KOffice Libraries</h3>
<ul>
  <li><em>Flake</em>
    <ul>
      <li>Some small ui changes in the path tool</li>
    </ul>
  </li>
</ul>

<h3 id="kword">KWord</h3>
<ul>
  <li>Design modifications for improved support for text lists</il>
  <li>Added support for numbered-paragraph</il>
  <li>Added support for list headers</il>
  <li>Added support for unnumbered list items</il>
  <li>Added support for loading multiple paragraphs as part of a single list item</il>
</ul>

<!-- <h3 id="kpresenter">KPresenter</h3> -->
<!-- <ul> -->
<!-- </ul> -->

<h3 id="kplato">KPlato</h3>
<ul>
  <li>Add printing to most views.</li>
  <li>Add charting of earned values, both for the whole project and for selected tasks.</li>
</ul>

<h3 id="krita">Krita</h3>
<ul>
  <li>Port to Eigen 2: fix a few memory leaks, and speeds up perspective transformations</li>
  <li>Optimizations in Bezier curves</li>
  <li>Start implementing brush engine presets: combinations of settings for a particular brush engine that can be saved, loaded and shared.</li>
  <li>Port the level filter from 1.6</li>
  <li>Fix applying filters</li>
  <li>Add statusbar tool help</li>
  <li>Enable the perspective grid</li>
  <li>Fix the path painting tool</li>
  <li>Fix on-canvas preview of filters</li>
  <li>Fix YCbCr colorspace</li>
  <li>Port the alpha darken composite op from 1.6</li>
  <li>Fix crash loading some .gih image hose brush files: this improves our compatibility with gimp brush files a lot (Note: painting with image hose brushes is broken at the moment)</li>
</ul>

<h3 id="karbon">Karbon</h3>
<ul>
  <li>status text for tools</li>
  <li>fixes in the pattern tool visualization</li>
</ul>

<?php
  include("footer.inc");
?>
