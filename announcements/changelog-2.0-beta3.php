<?php
  $page_title ='KOffice 2.0 Alpha 9 Changelog';
  $site_root = '../';
  include("koffice.inc");
  include("header.inc");
?>
<p>
  The following summarizes the major changes to the KOffice Suite since the
  release of KOffice 2.0 Beta 2.
</p>
<ul>
<li><a href="#koffice_general">General</li>
<li><a href="#koffice_libs">KOffice Libraries</a></li>
<li><a href="#kword">KWord</a></li>
<li><a href="#kspread">KSpread</a></li>
<li><a href="#kpresenter">KPresenter</a></li>
<li><a href="#kexi">Kexi</a></li>
<li><a href="#kplato">KPlato</a></li>
<li><a href="#krita">Krita</a></li>
<li><a href="#karbon">Karbon</a></li>
<li><a href="#plugins">Plugins</a></li>
</ul>

<h3 id="koffice_general">General</h3>
<ul>
  <li>Fix many issues related to non translatable strings.</li>
  <li>Improve layout of many dockers.</li>
</ul>

<h3 id="koffice_libs">KOffice Libraries</h3>
<ul>
  <li>Fix duplication of tool options dockers when working in split view mode (<a href="http://bugs.kde.org/173881">173881</a>).</li>
  <li>Fix changing split view orientation (<a href="http://bugs.kde.org/173882">173882</a>).</li>
  <li>Fix resource chooser tooltip (<a href="http://bugs.kde.org/167247">167247</a>).</li>
  <li>Make editing tools respect layer locking/visibility.</li>
  <li><em>KoPageApp</em>
    <ul>
      <li>Make it possible to save the page/slide name used during loading.</li>
      <li>Set the background of the master page to white when creating it.</li>
      <li>Fix loading and saving of the epilogue.</li>
      <li>Allow to choose between the background of the master or the background of the page.</li>
      <li>Allow to show or hide the shapes of the master page.</li>
      <li>Fon't delete master page if it is still used in a page.</li>
    </ul>
  </li>
  <li><em>Flake</em>
    <ul>
      <li>Make sure no other command is using the borders, background and shadows when deleting them.</li>
      <li>Fix combine command.</li>
      <li>For patterns, use repeat as default value. That fixes the loading of documents from OpenOffice with repeaded patterns.</li>
      <li>Keep the shape order on copy/paste.</li>
      <li>Fix copy and paste of shapes with a pattern backgound.</li>
      <li>Make it possible to use image using a kio slave.</li>
      <li>Fix copy and paste of pages with background images.</li>
    </ul>
  </li>
  <li><em>Pigment</em>
    <ul>
      <li>Use the default profile when creating color conversion transformation for transformation that doesn't specify a profile.</li>
    </ul>
  </li>
</ul>

<h3 id="kword">KWord</h3>
<ul>
  <li>Fix: "Format -> Page Layout..." (<a href="http://bugs.kde.org/173630">173630</a>).</li>
  <li>Fix "del" shortcuts.</li>
  <li>BUG: 173622</li> <!-- TODO -->
  <li>Fix loading of pictures in the old file format (.kwd).</li>
  <li>Default font color is black.</li>
  <li>Fixe pageSpreads not being at the correct offset in document.</li>
</ul>

<h3 id="kspread">KSpread</h3>
<ul>
  <li>Add support for != operator as an alternative for &lgt;&rgt; (<a href="http://bugs.kde.org/140603">140603</a>).</li> <!-- TODO find the HTML entity for > -->
  <li>Group all actions use to create a calendar in one (<a href="http://bugs.kde.org/125306">125306</a>).</li>
  <li>BUG: 174081</li> <!-- TODO -->
  <li>BUG: 173287</li>
  <li>Fix the autocomplete popup of the formula editor to behave sanely with the single-click-to-activate.</li>
  <li>Show the hint label in formula editor.</li>
  <li>Fix crash when moving the mouse while editing a formula.</li>
  <li>Fix synchronization between the inline textfield and the docker.</li>
  <li>Fix crash when exiting kspread.</li>
  <li>Fix links in the formula help browser.</li>
  <li>Fix for a crash occuring when using the table shape (<a href="http://bugs.kde.org/173499">173499</a>).</li>
  <li>Fix computing with integer values that don't fit into a 32-bit number.</li>
  <li>BUG: 173293</li> <!-- TODO -->
  <li><em>OpenFormula support</em>
    <ul>
      <li>Fixed the Kurtosis function.</li>
      <li>Functions AREAS and ISREF now properly handle array refs.</li>
      <li>COUNT, SUM, SUMSQ, DEVSQ and PRODUCT will now ignore cells containing error values.</li>
      <li>Function ISREF now properly passes error values through.</li>
      <li>Function COUNTIF now requires the first parameter to be a reference.</li>
    </ul>
  <li><em>Excel import filter</em>
    <ul>
      <li>Slightly more sane border widths when importing from xls, and interpret hair-lines as narrow solid line (<a href="http://bugs.kde.org/130922">130922</a>).</li>
      <li>Fix the way continuation records are handled when the boundary is inside a string (<a href="http://bugs.kde.org/143976">143976</a> and <a href="http://bugs.kde.org/157507">157507</a>).
    </ul>
  </li>
</ul>

<h3 id="kpresenter">KPresenter</h3>
<ul>
  <li>Use "slide" instead of "page".</li>
  <li>Move click action docker to the animation tool.</li>
  <li>Save the selected slide show.</li>
  <li>Fix crash when deleting end of slide show page.</li>
  <li>Fix loading and saving of custom slide shows.</li>
  <li>Fix crash if we start presentation from a slide that is not currently in the presentation slides and the presenter view is enabled.</li>
  <li>Fixes the painting of the background after setting an image.</li>
  <li>Prevent the selection of the background of the page.</li>
  <li>Fix setting the background image.</li>: [Bug ] 
  <li>Fix crash if you try to add shapes in notes view (<a href="http://bugs.kde.org/173922">173922</a>).</li>
  <li>Fix presenter view doesn't handle repeated slides in custom slide shows (<a href="http://bugs.kde.org/173754">173754</a>).</li>
  <li>Fix: deletion of slides in custom slide show which was deleting only half of them (<a href="http://bugs.kde.org/173755">173755</a>).</li>
  <li>Use the styles of text shapes when creating the layout shape.</li>
  <li>Apply the style when it is converted to a text shape.</li>
  <li>Fix loading of embedded layouts.</li>
  <li>Fix page navigation of presenter view to work when a slide appears multiple time in the presentation.</li>
  <li>Add an empty 16:10 template.</li>
  <li>Fix copy and paste of groups.</li>
  <li>Fix start presentation from first page (<a href="http://bugs.kde.org/173354">173354</a>).</li>
  <li>Make it possible to use the right mouse button to go back in the presentation.</li>
  <li><em>KPR import filter</em>
    <ul>
      <li>Fix conversion of rotated shapes.</li>
      <li>Don't save a background when the master background should be used.</li>
      <li>Save the style of the master page.</li>
      <li>Save the background color when none is given as white.</li>
      <li>Fix loading of objects which belong to the master page.</li>
      <li>Fix conversion of horizontal and vertical lines.</li>
    </ul>
  </li>
</ul>

<h3 id="kchar">KChart</h3>
<ul>
  <li>Fix a bug when loading empty cells.</li>
  <li>Fix a spelling error (devisor -> divisor).</li>
  <li>
</ul>

<h3 id="kplato">KPlato</h3>
<ul>
  <li>Polish item selection and focus indication.</li>
  <li>Fix calendar list for estimates.</li>
  <li>Fix bug in calendar list.</li>
  <li>Fix export of Gantt chart.</li>
  <li>Make dependency editor a little bit easier to use.</li>
  <li>Enable item selections by up/down keys in treeviews.</li>
  <li>Disable the calendar edit dialog now that we can do everything from the view.</li>
  <li>Don't change timezone if it has not changed.</li>
  <li>Calendar view: Implement extended selection for keyboard, and make it possible to edit multiple days at a time.</li>
  <li>Add a progress bar when scheduling.</li>
  <li>Use the new value on next schedule when standard worktime is changed.</li>
  <li>Restore edit project and edit standard worktime to the menu.</li>
  <li>Fix drag/drop of resources.</li>
  <li>Fix drag/drop of calendarview items.</li>
  <li>Calculate totals dependent on what is *show* in view.</li>
  <li>Fix saving and loading of settings.</li>
  <li>Fix a crash in appointments handling.</li>
  <li>Fix loading external appointments.</li>
  <li>Add display of external appointments in ressource assignement view.</li>
  <li>Rearrange dependency list editor widgets.</li>
  <li>Fix painting summary tasks.</li>
  <li>Fix display of positive float in gantt chart.</li>
  <li>Show dependency in red color if in critical path.</li>
  <li>Fix loading and saving of settings of the Gantt display.</li>
  <li>Add completion, dependencies, critical and critical path.</li>
  <li>EV plotting: Add labels and ajust colors so it's easier to see.</li>
</ul>

<h3 id="krita">Krita</h3>
<ul>
  <li>Fix color space conversion for images containing shapes layer.</li>
  <li>Fix undoing crop (<a href="http://bugs.kde.org/174803">174803</a>).</li>
  <li>Fix crash when flatering an image containing a shape layer (<a href="http://bugs.kde.org/174717">174717</a>).</li>
  <li>Don't crash when cropping a very very big image into a very very small area (<a href="http://bugs.kde.org/174718">174718</a>).</li>
  <li>Fixed update of shape selection.</li>
  <li>Use the option widget for the filter painting operation.</li>
  <li>Don't crash when adding a filter mask.</li>
  <li>Fix the on convas preview of filters.</li>
  <li>Fix crash in the brightness/contrast filter (<a href="http://bugs.kde.org/173584">173584</a>).</li>
  <li>Fix crash when pasting and when there is no layer in the layer stack (<a href="http://bugs.kde.org/141536">141536</a>).</li>
  <li>Correctly update the canvas when inserting an image and when removing the last layer of a group layer.</li>
  <li>Prevent tools menu from jumping moving when spliting view.</li>
  <li>Make a newly created layer the active layer (<a href="http://bugs.kde.org/173772">173772</a>).</li>
  <li>Fix crash on selection path.</li>
  <li>BUG:149041</li> <!-- TODO -->
  <li>Fix the crash on painting just after changing the colorspace of an image (<a href="http://bugs.kde.org/173565">173565</a>)</li>
  <li>Fix compilation of the GraphicsMagick filter with recent version of GraphicsMagick (<a href="http://bugs.kde.org/161770">161770</a>)</li>
  <li>Fix display of histogram</li>
  <li>Fix the histogram view dialog to allow to select between linear and logarithmic display.</li>
  <li>Fix painting operations.</li>
  <li>Fix loading of certain images whose profiles isn't usuable in Krita.</li>
  <li>Use marching ants by default.</li>
  <li>Creates XMP schema that aren't known by Krita but found in a file.</li>
  <li>Fix rotating by less than a degree.</li>
  <li>BUG: 154780</li> <!-- TODO -->
  <li>Fix tools to respect wether a layer is visible or hidden, locked or unlocked</li>
  <li>Fix progress report when applying a filter.</li>
  <li>Fix crash in the curve option.</li>
  <li>Move the indirect/direct paintop option to the paintop (instead of the tool).</li>
  <li>Fix deselection.</li>
  <li>Fix crash when painting with smoothing on.</li>
</ul>

<h3 id="karbon">Karbon</h3>
<ul>
  <li>Trigger gradient update when chaning gradient target.</li>
  <li>Fix enabling path menu items when selected path shapes are children of a group shape.</li>
  <li>Fix crash when trying to simplify callipgraphy path with too few points.</li>
  <li>Fix crash when drawing in split views (<a href="http://bugs.kde.org/173807">173807</a>).</li>
  <li>Fix autosaving of changed but not yet saved templates.</li>
  <li>Make it possible to apply the stroke/fill of the first selected shape to all other selected shapes.</li>
  <li>In an SVG document, import a toplevel group as a layer.</li>
  <li>Fix duplicate.</li>
  <li>Fix crash when saving picture shape.</li>
  <li>
</ul>

<h3 id="plugins">Plug-ins</h3>
<ul>
  <li>Only save rounded corners if there are some of them.</li>
  <li>Make the shape collection docker resize a bit nicer.</li>
  <li>In the text shape, fix middle click on windows (<a href="http://bugs.kde.org/172352">172352</a>).</li>
  <li>Keep layer docker in sync with document.</li>
  <li><em>Default tool</em>
    <ul>
      <li>Make the object respond directly to spinbox changes.</li>
      <li>Fix several crashes and unwanted behaviour when moving objects with keys.</li>
      <li>Make it possible to align to the page again when only one shape is selected.</li>
    </ul>
  </li>
  <li><em>Music shape</em>
    <ul>
      <li>Better default size for the music shape.</li>
      <li>have more than one bar after creation.</li>
      <li>Make the entry music tool the default one, and use a better icon.</li>
      <li>Fix the stem of chords to always reaches at least to the center of the staff.</li>
    </ul>
  </li>
</ul>



<?php
  include("footer.inc");
?>
