<?php
  $page_title ='KOffice 2.0 Alpha 8 Changelog';
  $site_root = '../';
  include("koffice.inc");
  include("header.inc");
?>
<p>
  The following summarizes the major changes to the KOffice Suite since the
  release of KOffice 2.0 Alpha 7. There are many changes and refactorings in
  the libraries that are not user-visible.
</p>
<ul>
<li><a href="#koffice_libs">KOffice Libraries</a></li>
<li><a href="#kword">KWord</a></li>
<li><a href="#kpresenter">KPresenter</a></li>
<li><a href="#kexi">Kexi</a></li>
<li><a href="#krita">Krita</a></li>
<li><a href="#karbon">Karbon</a></li>
</ul>

<h3 id="koffice_libs">KOffice Libraries</h3>
<ul>
  <li>fixed some style loading/saving</li>
  <li>added find in multiple text shapes</li>
  <li>added copy and paste for text</li>
  <li><ul>Flake:
        <li>Shape shadow config docker</li>
        <li>Major work on path segments</li>
        <li>Major KoPathPoint refactoring</li>
        <li>Support for custom input devices (i.e. the space navigator)</li>
        <li>Document panning and zooming with the space navigator</li>
        <li>Shape moving, rotating and resizing with the space navigator</li>
        <li>Improved painting of snap guides</li>
        <li>Added bounding box snapping strategy</li>
      </ul>
  </li>
</ul>

<h3 id="kword">KWord</h3>
<ul>
    <li>Work continue on the improvement on ODF support and automated testing.</li>
</ul>

<h3 id="kpresenter">KPresenter</h3>
<ul>
  <li>Load and save of page effects</li>
  <li>Added a preview for page effects</li>
  <li>Added most page effects</li>
  <li>Implemented background loading/saving</li>
  <li>Make it possible to change the master page</li>
</ul>


<h3 id="kexi">Kexi</h3>
<ul>
  <li>Kexi report plugins:
    <ul>
      <li>A chart component based on KDChart</li>
      <li>When printed, charts are vector based, not bitmap.</li>
      <li>Scripting is based on Kross now so can use any kross language</li>
      <li>Scripting for all object types is implemented so you can write things like:
<code>
function detail_onrender()
{
var cht = report.objectByName("Chart2");
cht.setDataSource("select day, min(rainfall), avg(rainfall), max(rainfall)
from tblrainfall group by day order by day asc");
cht.setLegendVisible(false);

var img = report.objectByName("Image1");
img.setResizeMode("Stretch");
img.loadFromFile(math.value("Path"));
}
</endcode></li>

    </ul>
  </li>
</ul>

<h3 id="krita">Krita</h3>
<ul>
  <li>Implemented a new plugin type: pixel generators</li>
  <li>Fix image recomposition</li>
  <li>Support for the 3d space navigator</li>
  <li>Fix layer handling in the layer box: show the root layer</li>
  <li>Support for OpenCTL based linear colorspaces</li>
  <li>Support for canvas decoration plugins</li>
  <li>New algorithm for the paint mixer</li>
  <li>New plugin type: painting assistants</li>
  <li>Reactivate the layer move tool</li>
  <li>Fix tablet handling in nvidia twinview setups</li>
</ul>

<h3 id="karbon">Karbon</h3>
<ul>
  <li>Ported the round corners plugin
  <li>Major gradient tool improvements (color stop selection, changing color of single color stop, snap gradient handles to bounding box)
</ul>

<?php
  include("footer.inc");
?>
