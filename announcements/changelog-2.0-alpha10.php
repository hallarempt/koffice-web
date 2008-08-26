<?php
  $page_title ='KOffice 2.0 Alpha 10 Changelog';
  $site_root = '../';
  include("koffice.inc");
  include("header.inc");
?>
<p>
  The following summarizes the major changes to the KOffice Suite since the
  release of KOffice 2.0 Alpha 9. There are many changes and refactorings in
  the libraries that are not user-visible.
</p>
<ul>
<li><a href="#koffice_libs">KOffice Libraries</a>.</li>
<li><a href="#kword">KWord</a>.</li>
<li><a href="#kpresenter">KPresenter</a>.</li>
<li><a href="#krita">Krita</a>.</li>
<li><a href="#karbon">Karbon</a>.</li>
</ul>

<h3 id="koffice_libs">KOffice Libraries</h3>
<ul>
  <li><em>Flake</em>
    <ul>
      <li>Guide line tool for guide line editing.</li>
      <li>Support for changing single path point to line or curve point.</li>
      <li>Use bounding box corners as default snap points for shapes.</li>
      <li>Improved guide line snapping.</li>
      <li>Support for selecting single shapes in shape groups.</li>
      <li>Style docker to change foreground and background of shapes is available in all applications.</li>
    </ul>
  </li>
</ul>

<h3 id="kword">KWord</h3>
<ul>
  <li>Support for loading opendocument page styles.</li>
  <li>The text tool shows the styles in a tree view with an 'apply' button at the bottom, as that works better for a docker.</li>
  <li>Many fixes in page handling.</li>
  <li>Loading and saving of ODF list styles has been improved.</li>
</ul>

<h3 id="kpresenter">KPresenter</h3>
<ul>
  <li>Added guide lines to kpresenter.</li>
  <li>Added end of slide show slide.</li>
</ul>

<h3 id="krita">Krita</h3>
<ul>
  <li>Sumi-e paintop, which is a very configurable bristle-simulating brush engine.</li>
  <li>Restore feather selection.</li>
  <li>Port the raw filter to use libkdcraw.</li>
  <li>Bug fixes:
    <ul>
      <li>Fix scaling when there is no selection.</li>
      <li>Redraw canvas after resizing/rescaling an image.</li>
      <li>Fix removing of nodes (layers and masks).</li>
      <li>Fixed selection deselect, reselect, grow, shrink and border.</li>
      <li>Fix undo for shape selection.</li>
      <li>Fix IPTC mapping for CountryCode.</li>
      <li>Fix marshaling of values between krita and exiv2.</li>
      <li>Finally enable the cubism filter.</li>
      <li>Fix tablet handling by a workaround.</li>
      <li>Fix convolution-based filters.</li>
      <li>Fix applying filters on non-square selections.</li>
      <li>Fix copy and paste for shape layers.</li>
      <li>Fix the blur filter.</li>
      <li>Eliminate sundry memory leaks.</li>
      <li>Fix clear and delete actions.</li>
      <li>All tools have icons again.</li>
      <li>You can now also type characters in the text shape that are otherwise taken by krita for shortcuts.</li>
      <li>Crash when importing certain tiff files (<a href="http://bugs.kde.org/168548">168548</a>).</li>
    </ul>
  </li>
</ul>

<h3 id="karbon">Karbon</h3>
<ul>
  <li>Ported pattern tool to work with KoPatternbackground.</li>
  <li>Brought back page layout editing.</li>
  <li>Made layer view sorting more robust.</li>
  <li>Made style docker a plugin for other apps to use.</li>
  <li>Filters:
    <ul>
      <li>Text support for wmf import filter.</li>
      <li>Change eps/ps import filter to use pstoedit to convert to svg.</li>
    </ul>
  </li>
</ul>

<?php
  include("footer.inc");
?>
