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
<li>Fixed saving of the window size when closing
<li>Cache the configuration object around kofficerc,
  to improve startup performance
</ul>

<h4>KoText library features (shared between KWord and KPresenter):</h4>
<ul>
<li>Improve hierarchical numbering  - doesn't require using a suffix of '.' anymore,
  and doesn't copy over the prefix and suffix from parent levels anymore (#40911).
<li>PgUp/PgDown works better than before when "move the caret" is enabled (#45246)
<li>Fixed painting of non-breakable-spaces (could show up as a visible square)
<li>Implemented painting of non-breakable-spaces when "draw formatting characters" is on
<li>Fixed crash (e.g. happening with 'section title' variable, #61735)
<li>Fixed pasting of plain text (so that it creates new pages if necessary, #58651)
<li>Fixed insert dialog for date and time variables
<li>Added more default formats for date variables
</ul>

<h3><a name="kword">KWord</a></h3>
<ul>
<li>Fixed handling of part frames (clicking didn't select it anymore, #63041)
<li>Fixed cursor shape when pressing Ctrl.
<li>Unbreak text view mode (cursor disappeared, #57554)
</ul>

<h3><a name="kpresenter">KPresenter</a></h3>
<ul>
<li>Fixed cursor not blinking in some cases
<li>Fixed "blinking cursor erases formatting characters" bug
<li>"Adjust object to contents" works as intended now
<li>Purpose of the 'Notebar' is unknown (#63037)
<li>kpresenter crashed when I tried to insert the variable
  "section title" (#61735)
<li>large footer from kpresenter 1.2.1 will crash kpresenter
  (#61449)
<li>embedded spreadsheet (table button) appears at wrong size
  (#58498)
<li>embedded kspread object displayed with wrong size (#33233)
<li>KPresenter hangs when inserted text wraps to newline
  (#56946)
<li>layer lowering is incorrect (#53277)
<li>resize handles deceptive when zoomed out (#61602)
<li>fixed painting garbage at a side of the screen in the presentation mode (on
  weird DPIs)
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
<li>Fixed layout problem at start up when using a template
<li>Fixed deletion of connected connectors
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

</ul>


<?php
  include("footer.inc");
?>
