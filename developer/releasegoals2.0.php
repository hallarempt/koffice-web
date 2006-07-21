<?php
  $page_title="Release Goals for KOffice 2.0";
  $site_root='../';
  include("koffice.inc");
  include("header.inc");
?>

<p>This is a list of release critical goals that we have set for ourselves.
Until the goals are met we do not release KOffice 2.0</p>

<p>We would very much like to release shortly after KDE4 so it is important to keep focus on the goals. KDE4 might be released as early as Q1 2007 so we don't have much time.</p>

<p>General (all apps):<ol>
 <li> Where applicable make user interfaces look and work the same.</li>
 <li> Use flake in every place possible</li>
 <li> Use pigment (color management) in every place possible</li>
</ol></p>

<p>Kross: <ol>
 <li> Performance (this includes a larger refactoring needed)</li>
 <li> More compatibility with Korundum</li>
</ol></p>

<p>KFormula:<ol>
 <li> Provide as a flake-shape</li>
 <li> Ensure that every reasonable ODF and MathML file is loadable</li>
 <li> Usability review and fixing</li>
</ol></p>

<p>KChart:<ol>
 <li> Provide as a flake-shape</li>
 <li> Ensure that every reasonable ODF file is loadable</li>
</ol></p>

<p>KWord:<ol>
 <li> More advanced page usage (pagespreads, numbering can start from !=1)</li>
 <li> New text engine to print to fix wysiwyg</li>
 <li> Fix embedding by using flake</li>
 <li> Much cleaned up GUI by redoing several ugly features</li>
 <li> Tables (initially by using qtextdocument later perhaps by using a kspread table flake-shape)</li>
 <li> Ensure that every reasonable ODF file is loadable</li>
</ol></p>

<p>KSpread:<ol>
 <li> Provide region of sheet as a flake-shape</li>
 <li> Fix loading of big docs</li>
 <li> OpenFormula support if the standard is ready</li>
 <li> Ensure that every reasonable ODF file is loadable</li>
</ol></p>

<p>KPresenter:<ol>
 <li> Big refactor and cleaning of code into using flake</li>
 <li> Video and sound</li>
 <li> Ensure that every reasonable ODF file is loadable</li>
</ol></p>

<p>Kivio:<ol>
 <li> Big refactor to use flake</li>
 <li> Implement OpenDoc support</li>
 <li> Make sure old documents can be imported (export will be close to impossible)</li>
</ol></p>

<p>Karbon:<ol>
 <li> Big refactor to use flake</li>
 <li> Ensure that every reasonable ODF file is loadable</li>
<?php
 # Try to load and save svg files perfectly (without animation, interactivity and scripting)
?>
</ol></p>

<p>Krita:<ol>
 <li> Testing, bug and usabillity review+fixing</li>
 <li> Provide a flake shape (a layer)</li>
 <li> Painterly infrastructure (programmable brush etc)</li>
 <li> OpenRaster if the standard is ready</li>
 <li> Implement printing with colormanagement and resolution</li>
</ol></p>

<p>Kexi:<ol>
 <li> Better integration into the rest of KOffice (flake shapes?)</li>
 <li> Offer ways for other apps to tap directly into the DB (without scripting)</li>
</ol></p>


<?php
   include("footer.inc");
?>
