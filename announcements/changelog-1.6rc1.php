<?php
  $page_title ='KOffice 1.6-rc1 Changelog';
  $site_root = '../';
  include("koffice.inc");
  include("header.inc");
?>
<p>
  The following summarizes the major changes to the KOffice Suite since the
  release of KOffice 1.6.0 RC 1 (latest unstable version).
</p>
<ul>
<li><a href="#kspread">KSpread</a></li>
<li><a href="#krita">Krita</a></li>
<li><a href="#kformula">KFormula</a></li>
</ul>

<h3 id="kspread">KSpread</h3>
<em>Bugfixes</em>
<ul>
    <li> Formula engine / functions:
    <ul>
        <li> Fix references to sheets with names beginning with a number (bug:124549)
        <li> fixes for various database functions
    </ul>

<li> UI:
    <ul>
        <li> Don't jump to chosen cell (range) on entering the formula (bug:134276)
    </ul>
</ul>

<h3 id="krita">Krita</h3>
<em>Bugfixes</em>
<ul>
    <li> Fix some specific rendering artefacts
    <li> Fix some non-artefact rendering errors
    <li> Fix changing the adjustment of brightness-contrast adjustment layers
    <li>UI:
    <ul>
        <li>simplify acquiring screen shots (Bug:134527)
        <li>Remember opacity setting in Drop Shadow (Bug:134563)
        <li>Fix so that the rightly marked filters got displayed in the filters gallery dialog
        <li>new icons set for the too
    </ul>
    <li>Selections:
    <ul>
        <li> Fix problems with selection extent with some selection tools
        <li> Krita crashes in select contiguous area (Bug:134497)
        <li> Remove the configwidget for selection brush and selection eraser tools
        <li> Display the mask layer's selection when the mask has one
    </ul>
    <li>Drawing:
    <ul>
        <li> Grey8 colorspace also works antialiased when opacity<100% on adjustment 
    layers
        <li> Add alpha darken to all colorspaces that still didn't have it (fixes 
    painting indirectly on them)
        <li> Honor the selection with paint indirectly
    </ul>
    <li>Adjustement layers:
    <ul>
        <li> Fix crash on loading adjustment layers
        <li> Some changes in selection actions concerning adjustment layers
        <li> Fix loading of brightness-contrast adjustment layers
        <li> Fix execution of adjustment layer changes undo information in general
        <li> Remove lots of non-working filters as adjustment layer
    </ul>
    <li>Tools:
    <ul>
        <li>Better interraction with the perspective transform tool
        <li>bezier tools don't work in openGL mode (Bug: 134477)
        <li>optimization of the duplicate tool, and fix healing and perspective
        <li>fix the tool crop behaviour
    </ul>
</ul>

<h3 id="kformula">KFormula</h3>
<em>Bugfixes</em>
<ul>
    <li>UI:
        <ul>
            <li>Fix character insertion that requires new token elements</li>
            <li>Reenable cut, copy and paste</li>
        </ul>
    <li>MathML / OpenDocument:
        <ul>
            <li>Insert &lt;mrow&gt; element after &lt;semantics&gt; element, since it does not infer mrows. Fixes bug 134044</li>
        </ul>
</ul>

<?php
  include("footer.inc");
?>
