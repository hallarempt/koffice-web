<?php
  $page_title ='KOffice 1.5-beta1 Changelog';
  $site_root = '../';
  include("koffice.inc");
  include("header.inc");
?>

<p>
  The following summarizes the major changes to the KOffice Suite since the
  release of KOffice 1.4.2 (latest stable version).
</p>

<h3><a name="koffice_libs">KOffice Libraries</a></h3>
<ul>
</ul>

<h3><a name="koshell">KOffice Workspace (koshell)</a></h3>
<ul>
</ul>

<h3><a name="kword">KWord</a></h3>
<em>Features:</em>
<ul>
</ul>

<em>Changes:</em>
<ul>
</ul>

<em>Bugfixes:</em>
<ul>
</ul>

<em>Crashes:</em>
<ul>
</ul>

<h3><a name="kspread">KSpread</a></h3>
<ul>
</ul>

<em>Features:</em>
<ul>
</ul>

<em>New functions:</em><br />


<h3><a name="kpresenter">KPresenter</a></h3>
<em>Features:</em>
<ul>
</ul>

<em>Changes:</em>
<ul>
</ul>


<h3><a name="kivio">Kivio</a></h3>
<ul>
</ul>


<h3><a name="kexi">Kexi</a></h3>

<em>Overview</em>
<ul>
</ul>

<em>Data Processing and Access</em>
<ul>
</ul>

<em>Database Storage</em>
<ul>
</ul>


<h3><a name="krita">Krita</a></h3>
<em>Features:</em>
<ul>
 <li>Support for a number of colorspaces (of which many are color-managed):
  <ul>
   <li>cmyk8
   <li>cmyk16
   <li>rgb16
   <li>gray16
   <li>rgb-half
   <li>rgb-float16
   <li>rgb-float32
   <li>lab16
   <li>lms16
  </ul>
 </li>
 <li>use KOffice documents as layers</li>
 <li>adjustment layers</li>
 <li>fix drag & drop of images into Krita</li>
 <li>histogram docker</li>
 <li>group layers in folders</li>
 <li>much, much nicer layerbox with previews and tooltips</li>
 <li>complete tablet configuration page in settings</li>
 <li>scripting using Kross with Python and Ruby</li>
 <li>dedicated png, tiff and jpeg filters that load much more files correctly</li>
 <li>load LAB photoshop images</li>
 <li>filters gallery</li>
 <li>nice curve widget for chaning brightness/contrast</li>
 <li>plugin architecture that enables colorspaces, tools, paint operations,
   filters and much else to be implemented as plugins</li>
 <li><em>New filters:</em>
  <ul>
   <li>sobel</li>
   <li>smalltiles</li>
   <li>roundcorner</li>
   <li>dropshadow</li>
   <li>wavelet-image enhancements</li>
   <li>bumpmap</li>
  </ul>
 </li>
 <li>image separations plugin that allows separation to 16 bit grayscale images</li>
 <li>OpenGL mode for speedups</li>
 <li>load and save palettes, patterns and brushes.</li>
 <li>Krita now compiles on NetBSD</li>
 <li>When "Select Similar Colors" a transparant area, add only transparant areas instead of the entire image to the selection.</li>
 <li>Fix loading and saving of grayscale images</li>
 <li>Fix ImageMagick 16/8 bit image confusion when loading and saving.</li>
 <li>Warn when applying a filter that will convert the layer data</li>
 <li>create and save new brushes</li>
 <li>show image in center of window</li>
</ul>

<em>Bugfixes:</em>
<ul>
 <li>117570   Allow image positioning anywhere on the working area</li>
 <li>108205   Implement paste as new</li>
 <li>108399   Allow Esc button to cancel a running operation</li>
 <li>108428   Usability: no brush preview at the pointer</li>
 <li>103603   Starting Krita with templates is broken.</li>
 <li>104192   Converting images or layers to another color model is broken</li>
 <li>105073   wish: colour panel should not always pick black, if user ...</li>
 <li>105274   wish: change behaviour of crop tool, to crop selection</li>
 <li>105276   wish: put Tools toolbar to the side and activate descript...</li>
 <li>105921   Toolbars cannot be redocked properly at top after being d...</li>
 <li>106284   crash upon loading any image file</li>
 <li>106731   Gimp pipe brushes randomness is not properly supported by...</li>
 <li>106891   Compile error in kis_painter.cc on Solaris 9/SPARC</li>
 <li>106919   Colour Manager sets colours wrong</li>
 <li>107066   Pen has soft edges</li>
 <li>107122   Layers box behaves strangely</li>
 <li>107127   Property boxes disappear on image load</li>
 <li>107128   Krita asks to save even if image is unchanged</li>
 <li>107131   Make the zoom tool a drop-down widget</li>
 <li>107132   Drop "tool" from the tooltips</li>
 <li>107348   Layerbox behaves badly when there are many layers</li>
 <li>107938   Select all and cut/copy makes Krita hang</li>
 <li>107939   Krita crashes on opening attached image</li>
 <li>107994   Moving a detached docker resizes it to a minimum</li>
 <li>108081   Kivio style dockers don't work</li>
 <li>108397   crashing on (external) clipboard change</li>
 <li>108398   rulers don't get repainted on creation.</li>
 <li>108704   Krita crashed by copying a part of an image via the short...</li>
 <li>109611   Krita now requires lcms 1.13</li>
 <li>109913   Crashes after drawing box, making selection then filling ...</li>
 <li>109968   dcop rotate should provide image rotate</li>
 <li>109969   mousewheel speed to slow</li>
 <li>109971   Crash trying to DND while krita is working</li>
 <li>110187   cancel in 'new image' dialog should quit krita</li>
 <li>110293   side panel "spinbox" focus prevents keyboard shortcuts fr...</li>
 <li>110296   Cancelling a transform destroys image</li>
 <li>110303   Toolbox does not work with 2 instances of krita</li>
 <li>110311   crash after selecting different templates</li>
 <li>110906   select similar colors tool does not work on transparent c...</li>
 <li>110907   Fill when there is a selection ignores underlying image</li>
 <li>111484   Krita : silent crash</li>
 <li>111629   Crash when Edit->Clear selected</li>
 <li>112029   Krita crashes when dragging selection tool beyond canvas</li>
 <li>112723   jpeg meta info comment lost on editing in krita</li>
 <li>112727   If present, change the 'Orientation' meta data on rotatio...</li>
 <li>112776   program crash on click at filter name "Mean Removal"</li>
 <li>112787   Add a Fill action</li>
 <li>112855   krita crashes when moving a selection</li>
 <li>113335   bug: when i use krita as an ambeded bitmap editor more th...</li>
 <li>113521   Rotate image skews layers that have an offset</li>
 <li>113680   Closing one Krita-instance closes all of them</li>
 <li>114233   I can no way get an empty Krita workshop</li>
 <li>114981   missing shortcut for Change Image Size</li>
 <li>115437   crash at undo afer color-adjustment and save</li>
 <li>115840   krita crashes while doing copy/paste</li>
 <li>115873   color picker probs with selecting in a specific layer</li>
 <li>115876   Crashes when double clicking in crop selection</li>
 <li>118902   krita needs a right click menu</li>
 <li>119610   Crash when substract selection</li>
 <li>119930   Statusbar pops up for View > Show Rulers</li>
</ul>

<em>Caveats in the beta:</em>
<ul>
 <li>transforms/layer merge/flatting is broken</li>
 <li>saving adjustment layers does not work</li>
 <li>saving multi-layer images to .psd or .xcf will flatten your image (which doesn't work)</li>
</ul>

<h3><a name="karbon">Karbon</a></h3>

<h3><a name="kplato">KPlato</a></h3>
<em>Features:</em>
<ul>
 <li>Resource management</li>
 <li>Hierarchical calendars</li>
 <li>Tasks with dependencies and subtasks.</li>
 <li><em>Various charts for visualization, like:</em>
  <ul>
   <li>Gantt</li>
   <li>Pert</li>
  </ul>
 </li>
 <li>Reports generation</li>
 <li><em>Project scheduling</em>
  <ul>
   <li>Pessimistic,</li>
   <li>Expected,</li>
   <li>Optimistic.</li>
  </ul>
 </li>
 <li>Work breakdown structure (WBS).</li>
 <li>Critical path and resources.</li>
</ul>


<h3><a name="kchart">KChart</a></h3>
<em>Features:</em>
<ul>
 <li>OpenDocument is now the default file format (not working in the beta)</li>
 <li>new chart type: combined bars and lines (not working in the beta)</li>
 <li>support for first row or column as labels</li>
 <li>support for changing area when charting data from KSpread</li>
</ul>
<em>Bugfixes:</em>
<ul>
 <li>All the graphics related bugs in bugs.kde.org have been fixed</li>
</ul>

<h3><a name="kformula">KFormula</a></h3>


<h3><a name="filters">Filters</a></h3>
<em>KWord:</em>
<ul>
</ul>

<em>KPresenter:</em>
<ul>
</ul>

<em>KSpread:</em>
<ul>
</ul>


<?php
  include("footer.inc");
?>
