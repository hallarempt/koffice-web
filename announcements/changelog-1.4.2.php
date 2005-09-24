<?php
  $page_title ='KOffice 1.4.2 Changelog';
  $site_root = '../';
  include("koffice.inc");
  include("header.inc");
?>

<p>
  The following summarizes the major changes and bugfixes to the
  KOffice Suite since the release of KOffice 1.4.1.
</p>

<h3><a name="koffice_libs">KOffice Libraries</a></h3>

<p>KOffice UI:</p>
<ul>
  <li>The new/open/recent documents dialog doesn't open non-local files if dimissed with the OK button
  (<a href="http://bugs.kde.org/show_bug.cgi?id=109000">#109000</a>)</li>
  <li>"KoUnitDoubleSpinBox has a design flaw" 
  (<a href="http://bugs.kde.org/show_bug.cgi?id=106011">#106011</a>)</li>
</ul>

<!--
<h3>KOffice Workspace</h3>
<ul>
  <li></li>
</ul>
-->

<h3><a name="kword">KWord</a></h3>
<ul>
  <li>KWord ignores lists indent after importing an Open Document file
  (<a href="http://bugs.kde.org/show_bug.cgi?id=109223">#109223</a>)</li>
</ul>


<h3><a name="kspread">KSpread</a></h3>
<ul>
  <li>Fix: "Scrolling left/right is very slow"
  (<a href="http://bugs.kde.org/show_bug.cgi?id=110551">#110551</a>)</li>
</ul>

<h3><a name="kpresenter">KPresenter</a></h3>
<ul>
  <li>Fix: "Usability: Make use of "End"-key in a textframe"
  (<a href="http://bugs.kde.org/show_bug.cgi?id=112303">#112303</a>)</li>
</ul>

<!--
<h4><a name="kpresenteroasis">KPresenter OASIS OpenDocument fixes for polyline, polygon and regular-polygon</a></h4>
<ul>
</ul>
-->

<h3><a name="kivio">Kivio</a></h3>
<ul>
  <li>Fix: "Text formatting dialog box looses format"
  (<a href="http://bugs.kde.org/show_bug.cgi?id=110983">#110983</a>)</li>
  <li>Fix: "Font combo gets focus after paste"
  (<a href="http://bugs.kde.org/show_bug.cgi?id=109194">#109194</a>)</li>
</ul>


<h3><a name="krita">Krita</a></h3>
<ul>
  <li>Fix: "Crashes after drawing box, making selection then filling
  selection with gradient." 
  (<a href="http://bugs.kde.org/show_bug.cgi?id=109913">#109913</a>)
  This also fixes bugs: 
  <a href="http://bugs.kde.org/show_bug.cgi?id=111484">#111484</a>,
  <a href="http://bugs.kde.org/show_bug.cgi?id=111629">#111629</a>,
  <a href="http://bugs.kde.org/show_bug.cgi?id=112029">#112029</a>. </li>
  <li>Fix: "cancel in 'new image' dialog should quit krita."
  (<a href="http://bugs.kde.org/show_bug.cgi?id=110187">#110187</a>)</li>
  <li>Fix: "Crashes on opening certain small images."
  (<a href="http://bugs.kde.org/show_bug.cgi?id=107939">#107939</a>)</li>
  <li>Fix: loading and saving of grayscale images</li>
  <li>Fix: "canvas does not get focus on click (spinboxes in
  dockers keep hogging the focus)" 
  (<a href="http://bugs.kde.org/show_bug.cgi?id=110293">#110293</a>)</li>
</ul>


<h3><a name="karbon">Karbon</a></h3>

<em>Bugfixes</em
<ul>
  <li>Fix for karbon crashing on clicking the pattern button in the toolbox</li>
  <li>Make sure, items representing an object without a proper parent are removed as well</li>
  <li>Do not trigger text tracing/repaining if we are only initializing the options dialog</li>
  <li>Only repaint inside objects bounding boxes</li>
  <li>Only show tool dialog when an object is selected</li>
  <li>Always repaint bounding rect of edited text when changed</li>
  <li>When inserting a new object in front of another, set the new objects parent and invalidate the groups bounding box</li>
  <li>When grouping objects, remove all objects from their corresponding parent</li>
  <li>Enabling the group/ungroup menu item when selecting objects from layer list view</li>
  <li>The polyline tool was broken. When you clicked to place a point (after the first one), the point was always placed with x=0</li>
  <li>Fix: a drawing bug when selecting objects</li>
  <li>Object/layer listview is now better synced to the documents object hierarchy when deleting or grouping/ungrouping objects</li>
  <li>Visiblity and locking states are now set correctly from the layer listview</li>
  <li>"Crash when changing the color of more than one element"
  (<a href="http://bugs.kde.org/show_bug.cgi?id=111147">#111147</a>)</li>
  <li>"Export only exports the first layer"
  (<a href="http://bugs.kde.org/show_bug.cgi?id=111144">#111144</a>)</li>
  <li>"Karbon crashes when using text-tool"
  (<a href="http://bugs.kde.org/show_bug.cgi?id=51663">#51663</a>)</li>
</ul>

<em>GUI improvements</em>
<ul>
  <li>Made transform docker do something usable.</li>
  <li>Improved shadow tool and fixed saving shadows as seperate objects for now 
  (<a href="http://bugs.kde.org/show_bug.cgi?id=92987">#92987</a>, 
   <a href="http://bugs.kde.org/show_bug.cgi?id=92982">#92982</a>)</li>
  <li>Create text with horizontal path when just clicking with texttool</li>
  <li>Always initialize with selected object when showing the tool dialog</li>
  <li>Made texttool selection changing (triggers views selection changed signal)</li>
  <li>Set all shadow options properly in tool dialog</li>
  <li>Cancel tool when pressing cancel button</li>
  <li>Improved selection tool which now has the following abilities:<br>
  <ul>
  <li>left mouse click to select single object</li>
    <li>ctrl + left mouse click to add to current selection</li>
    <li>ctrl + right mouse click to remove from current selection</li>
    <li>ctrl + left mouse drag to add objects within selection rect to current selection</li>
    <li>ctrl + right mouse drag to remove objects within selection rect from current selection</li>
    <li>pressing shift while scaling makes scaling keeping the aspect ratio (adjusted to shape tool behaviour)</li>
  </ul>
  <li>Enabled multi-selection within the layer listview</li>
  <li>Object/layer listview items get automatically selected when selecting their corresponding object with the selection tool</li>
  <li>When embedded zoom the drawing so that it's completely visible</li>
  <li>Make this statusbar text label stretchable, so the rest of the labels won't jump around</li>
</ul>

<em>File handling</em>
<ul>
  <li>Fixed loading and saving of text basepath and font properties</li>
  <li>Text object names are not loaded
  (<a href="http://bugs.kde.org/show_bug.cgi?id=111269">#111269</a>)</li>
  <li>Text stroke isn't loaded
  (<a href="http://bugs.kde.org/show_bug.cgi?id=111268">#111268</a>)</li>
  <li>Layer deletion doesn't get saved
  (<a href="http://bugs.kde.org/show_bug.cgi?id=111148">#111148</a>)</li>
</ul>

<em>SVG Import and Export</em>
<ul>
  <li>Filter SVG: Added reading of group names</li>
  <li>Filter SVG: Fix percentage loading error</li>
  <li>Filter SVG: Don't lock up on svg document loading</li>
  <li>SVG import fails to recognise the svg use tag
  (<a href="http://bugs.kde.org/show_bug.cgi?id=108245">#108245</a>)</li>
  <li>Karbon SVG export minor improvements 
  (<a href="http://bugs.kde.org/show_bug.cgi?id=108243">#108243</a>)</li>
  <li>Pretty print SVG export please, indentation using spaces
  (<a href="http://bugs.kde.org/show_bug.cgi?id=108126">#108126</a>)</li>
</ul>

<em>Usability improvements</em>
<ul>
  <li>Layers open themself -> only open layer list items when inserting them into list 
  (<a href="http://bugs.kde.org/show_bug.cgi?id=111206">#111206</a>)</li>
  <li>Copy/Paste over layers is not consistent
  (<a href="http://bugs.kde.org/show_bug.cgi?id=111203">#111203</a>)</li>
  <li>Current layer looses selection 
  (<a href="http://bugs.kde.org/show_bug.cgi?id=111201">#111201</a>)</li>
  <li>Layer handling</li>
  <ul>
    <li>always select layer list item corresponding to active layer</li>
    <li>delete layer list items when undoing VLayerCommand</li>
    <li>do not allow to delete last layer
    (see also <a href="http://bugs.kde.org/show_bug.cgi?id=111210">#111210</a>)</li>
  </ul>
<li>When dragging a path to place text along, pressing shift makes the path "jump" in 45 degree steps</li>
</ul>

<h3><a name="kexi">Kexi</a></h3>
<ul>
  <li>Fix: "Kexi cannot be launched from kmenu sometimes"
  (<a href="http://bugs.kde.org/show_bug.cgi?id=109025">#109025</a>)</li>
</ul>

<!--
<h3><a name="kugar">Kugar</a></h3>
<ul>

</ul>
-->

<!--
<h3><a name="kformula">KFormula</a></h3>
<ul>
</ul>
-->

<?php
  include("footer.inc");
?>
