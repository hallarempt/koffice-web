<?php
  $page_title ='KOffice 1.3-beta3 Changelog';
  $site_root = '../';
  include("koffice.inc");
  include("header.inc");
?>

<p>
  The following summarizes the major changes to the KOffice Suite since the
  release of KOffice 1.3 beta2 one month ago.
</p>

<h3><a name="koffice_libs">KOffice Libraries</a></h3>
<ul>
<li>Support for EPS images: works again for gs interpreters without the png16m device</li>
</ul>

<h4>KoText library features (shared between KWord and KPresenter):</h4>
<ul>
<li>Paragraph borders now support variable width (e.g. being inside
DTP frames of different widths).</li>
</ul>

<h3><a name="kword">KWord</a></h3>
<ul>
<li>Right-click on a selected frame shouldn't unselect it</li>
<li>Esc to deselect all frames</li>
<li>Fixed line-height bug due to hyphenation</li>
<li>Make the text view mode work again</li>
</ul>

<h3><a name="kpresenter">KPresenter</a></h3>
<ul>
<li>KPR 'forgets' solid line attribute of text frames (#61343)</li>
<li>fix pasting text objects screwing UTF-8 text</li>
<li>snap to Grid function aligns relatively, not absolutely (#56181)</li>
<li>when cutting&amp;pasting a vertically centred text frame,
  the vertical position changes (#61330)</li>
<li>grid, snap to grid are on now by default, with a finer step of 5mm
  (#60011 and #60013)</li>
</ul>


<h3><a name="kspread">KSpread</a></h3>
<ul>
<li>KSpread fails to redraw during and after 'Print Preview' (#60147)</li>
<li>KSpread crash when changing paper orientation (#60279)</li>
</ul>

<h3><a name="kugar">Kugar</a></h3>
<ul>
  <li>Kugar and Kugar Designer are now pure KOffice applications.
  Partification was made and KOffice zipped xml format is used</li>
  <li>Undo/Redo functionality in Kugar Designer</li>
  <li>Direct database support in Kugar</li>
</ul>

<!--
<h3><a name="kivio">Kivio</a></h3>
<ul>

</ul>
-->

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


<!--
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

<em>Karbon:</em>
<ul>

</ul>
-->


<?php
  include("footer.inc");
?>
