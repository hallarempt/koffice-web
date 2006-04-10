<?php
  $page_title ='KOffice 1.5-rc1 Changelog';
  $site_root = '../';
  include("koffice.inc");
  include("header.inc");
?>
<p>
  The following summarizes the major changes to the KOffice suite since the
  release Of KOffice 1.5 beta2.
</p>
<ul>
<li><a href="#kspread">KSpread</a></li>
<li><a href="#kpresenter">KPresenter</a></li>
<li><a href="#kexi">Kexi</a></li>
<li><a href="#krita">Krita</a></li>
<li><a href="#karbon">Karbon</a></li>
<li><a href="#kplato">KPlato</a></li>
<li><a href="#kchart">KChart</a></li>
<!--<li><a href="#kugar">Kugar</a></li>-->
<li><a href="#kformula">KFormula</a></li>
<li><a href="#kross">Kross</a></li>
</ul>



<h3 id="kspread">KSpread</h3>

<ul>
<li>KSpread can't input content in another sheet with keyboard</li>
<li>Paste global mouse selection on middle mouse click instead of global clipboard content.</li>
<li>Use nicer f(x) icon for the function button supplied by Aurelien Gateau.</li>
<li>Fix CSV export of times and dates.</li>
<li>Don't localize the name of the default cell style.</li>
<li>Localize the decimal separator in formulas on loading OpenDocument files</li>
<li>Fix value calculation in some functions, like PRODUCT or GCD.</li>
<li>OpenDocument Loading speedup and reduction of memory usage.</li>
<li>Fix loading of merged cells in OpenDocument files.</li>
<li>Reduce memory consumption of the style engine.</li>
<li>Try parsing values as numbers first, rather than as boolean.</li>
<li>Speedup in the painting engine.</li>
<li>Protected objects can't be resized anymore.</li>
<li>Start the choice using the arrow keys at the selection marker.</li>
<li>Scrolling in choose mode works again.</li>
<li>Dependency recalculation speedup.</li>
<li>Set cell text correctly when auto-filling times and dates.</li>
<li>Application loading speedup: Delay creation of KSpell config until spellchecking facilities are actually used.</li>
<li>Make the autofill behavior more consistent with Gnumeric / OpenOffice / Excel when a single cell is selected.
<ul>
    <li>If the cell contains a number, the number is just duplicated to fill the selection.</li>
    <li>If the cell contains a date it produces a series of 1-day increments.</li>
    <li>If the cellcontains a time it produces a series of 1-hour increments.</li>
</ul></li>
<li>Fix Insert Series dialog not updating the display text in the affected cells.</li>
<li>Fix preferences dialog so that current date/time are used to demonstrate locale after clicking on 'Update To Locale' button.</li>
</ul>

<h3 id="kpresenter">KPresenter</h3>
<ul>

<li>Fix: Bug 122623: Vertically aligned texts in presentation are displaced first.</li>

<li>updated the icons so that they look more like crystal</li>

<li>Fix loading when the view is shown before the doc is fully loaded BUG:122641</li>

<li>Fix: Make it possible to resize objects around the center. BUG: 112310</li>

<li>Fix problems with embedding</li>

<li>Fix saving of stripe slide transition when saving to oasis. As they are not supported in OpenDocument I use koffice:additional-transition-style for saving them. In transition-style we use something similar so that OO can open it.</li> 

<li>Fix a bug when there was an object on the masterpage at the position of the header or footer and the footer was not shown.</li>

<li>Fix saving of styles for text objects on the master page</li>

<li>Fix loading of draw:frame when there where additional images</li>

</ul>



<h3 id="kexi">Kexi</h3>

<ul>
<li>use local sockets by default for local server connections, if possible</li>
<li>added simple encryption for stored passwords</li>
<li>allow to save empty password in .kexis and .kexic files</li>
<li>ask for password (without storing it) for connection data without stored
password</li>
</ul>


<h3 id="krita">Krita</h3>
<ul>
<li> Fix update problems associated with adjustment layers</li>
<li> Faster selection rendering</li>
<li> Fix selection/invert</li>
<li> Use squeezed combobox/label for profiles</li>
<li> Fix Text tool</li>
<li> Fix saving of per-channel and brightness/contrast adjustment layers</li>
<li> Improve performance of filling rectangles</li>
<li> Improve scaling and rotation quality (BUG: 123160)</li>
<li> Fix radius-based colorpicking</li>
<li> Embedding KWord now works</li>
<li> Make convolve, darken, intensity8 and invert colorspace-independent and
optimized</li>
<li> Show filter name in reapply last filter</li>
<li> Fix composition with 8 it cmyk</li>
<li> Make it possible to change the colorspace of an image without converting
all layers</li>
<li> Many crash fixes and stability improvements</li>
<li> Fix polyline tools not getting reset between invocations</li>
<li> Make the rulers use sane step sizes for the number shown</li>
<li> Don't show exposure slider if the image is not HDR</li>
<li> Enable the screenshot plugin again</li>
<li> Fix separate image</li>
<li> Many fixes to tiff filter: add support for YCbCr colorspaces in tiff</li>
<li> Fix loading of images with utf8 characters in the name (BUG:123495)</li>
<li> Fix crash when creating very small images</li>
<li> Fix memory leaks in painting with filters.</li>
<li> Disable the Cubism filter</li>
<li> Fix painting in Lab mode</li>
</ul>

<h3 id="karbon">Karbon</h3>
<ul>
 <li>Fix sorting of layer list view</li>
 <li>Several OASIS improvements</li>
 <li>Fix drawing and orientation of vertical ruler</li>
</ul>

<h3 id="kplato">KPlato</h3>
<ul>
<li>Add menu option to show/hide task-/resource allocation views.</li>
<li>Bug 121828: Save/load resource cost and units.</li>
</ul>

<h3 id="kchart">KChart</h3>
<ul>
 <li>Can read and save charts on OpenDocument</li>
</ul>

<h3 id="kformula">KFormula</h3>

<p>Excellent news: KFormula got a new maintainer: Alfredo Beaumont.</p>

<ul>
 <li>Fix a rendering rect check that caused special symbols not to be shown
properly when kformula was embedded inside another app. Bugs: 47660, 70773.</li>

 <li>BaKoMa TeX fonts are packaged and installed with KFormula. This should resolve 
the formula font rendering problems if users select TeX fonts. (this was probably 
the most important problem in kformula) Bugs 50939, 106909, 112994.</li>

<li>Cursor changes: make it more thick, blinking and only shown when focus is in
formula. This improves accessibility.</li>
</ul>


<h3 id="kross">Kross</h3>

<ul>
<li>Fix crash cause of unhandled exception</li>
<li>Fix untranslatable error messages</li>
<li>Fix layout when using ugly style</li>
<li>Ruby: fix c++ shouldn't propagate inside c</li>
<li>Python: fix wrong error-message</li>
</ul>
<?php
  include("footer.inc");
?>
