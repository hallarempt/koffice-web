<?php
  $page_title ='KOffice 1.3 Beta 4 Changelog';
  $site_root = '../';
  include("koffice.inc");
  include("header.inc");
?>

<p>
  The following summarizes the major changes to the KOffice Suite since the
  release of KOffice 1.3 beta3 one month ago.
</p>

<h3><a name="koffice_libs">KOffice Libraries</a></h3>
<ul>
<li>Fixed saving of the window size when closing</li>
<li>Cache the configuration object around kofficerc,
  to improve startup performance</li>
</ul>

<h4>KoText library features (shared between KWord and KPresenter):</h4>
<ul>
<li>Improve hierarchical numbering  - doesn't require using a suffix of '.' anymore,
  and doesn't copy over the prefix and suffix from parent levels anymore (#40911).</li>
<li>PgUp/PgDown works better than before when "move the caret" is enabled (#45246)</li>
<li>Fixed painting of non-breakable-spaces (could show up as a visible square)</li>
<li>Implemented painting of non-breakable-spaces when "draw formatting characters" is on</li>
<li>Fixed crash (e.g. happening with 'section title' variable, #61735)</li>
<li>Fixed pasting of plain text (so that it creates new pages if necessary, #58651)</li>
<li>Fixed insert dialog for date and time variables</li>
<li>Added more default formats for date variables</li>
</ul>

<h3><a name="kword">KWord</a></h3>
<ul>
<li>Fixed handling of part frames (clicking didn't select it anymore, #63041)</li>
<li>Fixed cursor shape when pressing Ctrl.</li>
<li>Unbreak text view mode (cursor disappeared, #57554)</li>
</ul>

<h3><a name="kpresenter">KPresenter</a></h3>
<ul>
<li>Fixed cursor not blinking in some cases</li>
<li>Fixed "blinking cursor erases formatting characters" bug</li>
<li>"Adjust object to contents" works as intended now</li>
<li>Purpose of the 'Notebar' is unknown (#63037)</li>
<li>kpresenter crashed when I tried to insert the variable
  "section title" (#61735)</li>
<li>large footer from kpresenter 1.2.1 will crash kpresenter
  (#61449)</li>
<li>embedded spreadsheet (table button) appears at wrong size
  (#58498)</li>
<li>embedded kspread object displayed with wrong size (#33233)</li>
<li>KPresenter hangs when inserted text wraps to newline
  (#56946)</li>
<li>layer lowering is incorrect (#53277)</li>
<li>resize handles deceptive when zoomed out (#61602)</li>
<li>fixed painting garbage at a side of the screen in the presentation mode (on
  weird DPIs)</li>
</ul>


<h3><a name="kspread">KSpread</a></h3>
<ul>
<li>KSpread is slow during text to column conversion (#59999)</li>
<li>fix problem cycling absolute cell reference with F4 key (#46959)</li>
<li>the calculator plugin saves its configuration now (#49954)</li>
</ul>

<!--
<h3><a name="kugar">Kugar</a></h3>
<ul>

</ul>
-->

<h3><a name="kivio">Kivio</a></h3>
<ul>
<li>Fixed layout problem at start up when using a template</li>
<li>Fixed deletion of connected connectors</li>
</ul>

<!--
<h3><a name="kformula">KFormula</a></h3>
<ul>

</ul>
-->

<!--
<h3><a name="karbon">Karbon</a></h3>
<ul>

</ul>
-->


<h3><a name="filters">Filters</a></h3>
<em>KWord's MSWord import filter (requiring wv2-0.1.9):</em>
<ul>
<li>Support for Word 6 and Word 7 (aka Word 95) files added</li>
<li>Fixed the list handling for weird corner cases</li>
<li>wv2 isn't so noisy anymore, when compiled with --disable-debug. Packagers 
are highly encouraged to use that flag.</li>
</ul>

<em>KWord RTF export filter:</em>
<ul>
<li>new table support</li>
<li>better conformity to RTF specification</li>
<li>better export for other RTF readers</li>
<li>better document information</li>
</ul>

<em>KWord's RTF import filter:</em>
<ul>
<li>import non-7-bit-clean files</li>
<li>fix underline import</li>
<li>better date/time field support</li>
<li>better picture support (all forms except "picture in shapes".)</li>
</ul>

KWord's OOWriter export filter:
<ul>
<li>support for multiples spaces and tabulators</li>
</ul>

<!--
<em>KPresenter:</em>
<ul>

</ul>

<em>KSpread:</em>
<ul>

</ul>

<em>Karbon:</em>
<ul>
-->

<?php
  include("footer.inc");
?>
