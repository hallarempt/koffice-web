<?php
  $page_title ='KOffice 2.0 Alpha 6 Changelog';
  $site_root = '../';
  include("koffice.inc");
  include("header.inc");
?>
<p>
  The following summarizes the major changes to the KOffice Suite since the
  release of KOffice 2.0 Alpha 5. There are many changes and refactorings in
  the libraries that are not user-visible.
</p>
<ul>
<li><a href="#koffice_libs">KOffice Libraries</a></li>
<li><a href="#kexi">Kexi</a></li>
<li><a href="#krita">Krita</a></li>
<li><a href="#karbon">Karbon</a></li>
</ul>

<h3 id="koffice_libs">KOffice Libraries</h3>
<em>Flake</em>
<ul>
<li> implemented snap guides to the create path tool for precise drawing:
<ul>
    <li>snapping to path nodes
    <li>orthogonal snapping to path nodes
    <li>snapping to path directions from path end points (extension)
    <li>snapping to path intersections 
</ul>
<li> some other improvements to the create path tool
<ul>
    <li>RMB click finishes path without inserting new point
    <li>highlighting the start point on mouse hover to make it easier to close path
</ul>
</ul>


<h3 id="kexi">Kexi</h3>

<ul>
<li>Direct support for Sybase and MS SQL Server (<a 
href="http://kdedevelopers.org/node/3170">more info</a>).

</ul>

<h3 id="krita">Krita</h3>
<ul>
<li>more filters ported and some new filters added
<li>filter preview on canvas actually works
<li>added new color selector dockers
<li>improve painting performance
<li>add a tool to stroke a vector path using Krita brushes
<li>new implementation of the color mixing framework (not user-visible yet)
<li>fix saving 16 bit images as 8 bit jpegs       
<li>bmp export filter
<li>the eraser paintop now handles opacity much better
<li>fix loading .kra files, implement more of OpenRaster
<li>save filter configuration settings
<li>new tile backend (not enabled by default)
<li>fix the transform tool and image resize/scale
</ul>

<h3 id="karbon">Karbon</h3>
<ul>
<li>on canvas editing of the simple text shape complete with a blinking cursor
<li>converting simple text shape into path
<li>reworked style docker containing a color chooser, gradient chooser and 
pattern chooser for quick style changing
<li>vastly improved onscreen gradient editing complete with 
adding/removing/dragging gradient stops
<li>implemented zoom to selection and zoom to drawing
<li>shapes in the layer view are sorted by z-Index under their parent
</ul>

<?php
  include("footer.inc");
?>
