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

<em>New features:</em>
<ul>
 <li>The status bar now shows the page number, overwrite mode, zoom, unit etc.</li>
 <li>Ability to show the object grid and to switch the grid on/off</li>
 <li>Make it possible to stop moving and resizing frames with the Escape key.</li>
 <li><em>Accessibility improvements</em>
  <ul>
   <li>"Menu" key shows RMB pop-up in document structure</li>
   <li>Ctrl+Menu activates frame/border menu.</li>
   <li>Go to Document Structure (Alt+1) and Go to Document (Alt+2) shortcuts.</li>
   <li>Inserting frames can now also be done by pressing Return</li>
   <li>A "Select Frame" shortcut can now be configured</li>
   <li>Single, 1.5, and double line spacing shortcuts can now be configured</li>
   <li>Text-to-speech integration
  </ul>
 </li>
 <li>Overwrite mode (activated with the "Insert" key)</li>
 <li>Center page in window</li>
</ul>

<em>Changes:</em>
<ul>
 <li>Much improved documentation</li>
 <li>Many improvements of the document structure area, including pop-up menus, better refreshing...</li>
 <li>Resizing table rows and columns with the mouse is disabled for this release, for the benefit of easier cell selection</li>
</ul>

<em>Bugfixes:</em>
<ul>
 <li><em>OASIS OpenDocument support</em>
  <ul>
   <li>Fixed loading of headers and footers (#107424)
   <li>Implemented saving of headers and footers
   <li>Fix for text:h without outline-level
   <li>Simplified the XML by removing spurious <span> tags due to misspelled words
   <li>Save office:font-face-decls tag so that OOo loads the fonts
   <li>Fixed loading of font sizes specified as a percentage
   <li>Implemented loading of list indentation (space-before) (#109223)
   <li>Improved OOo compatibility when saving page breaks
   <li>Save first page number the right way so that OOo can load it
   <li>Save bookmarks
   <li>Load and save frame styles, and table styles.
  </ul>
 </li>
 <li>Many fixes to the text view mode</li>
 <li>Fixed updating of "statistics" variable (e.g. word count) when loading/saving.</li>
 <li>The Zoom levels "Fit to Width" and "Fit To Page" now keep up when resizing the window</li>
 <li>Fixed background spell-checking issues</li>
 <li>Text layouting: fix for formatting of multi-frame paragraphs (#65059)</li>
</ul>

<em>Caveats:</em>
<ul>
 <li>Some table bugs still remain. </li>
</ul>

<h3><a name="kspread">KSpread</a></h3>
<em>New features:</em>
<ul>
 <li>OpenDocument is now the default file format</li>
 <li>support for non-contiguous selections</li>
 <li>a new faster and better formula engine</li>
 <li>a much improved Microsoft Excel import filter.</li>
</ul>

<em>New features:</em>
<ul>
</ul>

<em>New functions:</em><br />


<h3><a name="kpresenter">KPresenter</a></h3>
<em>New features:</em>
<ul>
 <li>very much improved OpenDocument support</li>
 <li>print multiple pages per page (in printing dialog options)</li>
 <li>objects of master slide are now behind the objects of the slide</li>
 <li>reworked property editor</li>
 <li>improved guide lines</li>
 <li>added auto guide lines</li>
 <li>snapping to grid/guides during insert, improved snapping code</li>
 <li>improved many dialogs</li>
 <li>use default key modifier</li>
 <li>added autoscroll</li>
 <li>added object pop-up to outline</li>
</ul>

<em>Bugfixes:</em>
<ul>
 <li>too many bug fixes to list</li>
</ul>

<em>Changes:</em>
<ul>
</ul>


<h3><a name="kivio">Kivio</a></h3>
<em>New features:</em>
<ul>
 <li>Automatic guidelines)</li>
 <li>New dockers, shared with Krita and Karbon (now called palettes)</li>
 <li>New object list that can be used to mark objects on the page</li>
 <li>New stencils for ER diagrams</li>
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
<em>New features:</em>
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
 <li>nice curve widget for changing brightness/contrast</li>
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
 <li>When "Select Similar Colors" a transparent area, add only transparent areas instead of the entire image to the selection.</li>
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
 <li>112723   JPEG meta info comment lost on editing in krita</li>
 <li>112727   If present, change the 'Orientation' meta data on rotation</li>
 <li>112776   program crash on click at filter name "Mean Removal"</li>
 <li>112787   Add a Fill action</li>
 <li>112855   krita crashes when moving a selection</li>
 <li>113335   bug: when i use krita as an embedded bitmap editor more ...</li>
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
<ul>
 <li>improved OASIS file format support</li>
 <li>new color selectors</li>
 <li>improved selection handling</li>
 <li>improved stability and rendering</li>
 <li>improved SVG compatibility</li>
 <li>better toolbox</li>
</ul>

<h3><a name="kplato">KPlato</a></h3>
<em>New features:</em>
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
 <li>New PowerPoint import filter</li>
</ul>

<em>KSpread:</em>
<ul>
 <li>a much improved Microsoft Excel import filter.</li>
</ul>


<?php
  include("footer.inc");
?>
