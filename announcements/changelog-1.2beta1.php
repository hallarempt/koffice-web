<?php
  $page_title ='KOffice 1.2-beta1 Changelog';
  $site_root = '../';
  include("koffice.inc");
  include("header.inc");
?>

<p>
This page tries to present as much as possible of the problem
corrections and feature additions that occurred in KOffice between the 1.1.1
and 1.2-beta1 releases.
</p>
<h3>KOffice</h3>
<p>
The native KOffice file format now uses zip instead of tar.gz, for performance
reasons, and for compatibility with the other opensource office suites.
</p>
<p>
KOffice-1.2 will offer a "Save as KOffice-1.1" format when saving a file, to be
used when sending a document to a KOffice-1.1 user (this release does not
have this feature functioning properly except for simple documents).

Alternatively, a KOffice-1.1 user receiving a KOffice-1.2 document (in the zip format),
can use a <a href="http://www.koffice.org/scripts/fix_storage.pl">special
Perl script</a> to convert the document back to a .tar.gz.
Note that this script requires "unzip" to be installed.
</p>
<p>
DCOP scriptability has been much extended in all KOffice applications.
</p>
<h3>KWord</h3>
<ul>
<li>
Text layout and painting redesigned around WYSIWYG concept.
</li>
<li>
KWord is also BiDi-enabled.
</li>
<li>
Soft hyphens (inserted with <code>Ctrl -</code>)
</li>
<li>
Non-breakable-spaces (inserted with <code>Ctrl [space]</code> or via a menu
item)
</li>
<li>
Support for hyperlinks (internet link/ address mail / file link)
</li>
<li>
Support for text background color (marker).
</li>
<li>
Improved handling of tabulators in ruler.
</li>
<li>
Auto-hide mouse cursor while typing.
</li>
<li>
"Change picture" feature.
</li>
<li>
SVG support (for cliparts).
</li>
<li>
Module for WMF previews in Konqueror.
</li>
<li>
Rewrite of tables where positioning is much more fool-proof and table-borders actually work.
</li>
<li>
More intelligent table-cell-scaling for cells with mixed text lengths
</li>
<li>
Text shadow feature.
</li>
<li>
Double-underline feature.
</li>
<li>
Ability to choose where to inline a frame.
</li>
<li>
Setting tabs via the rulers is more intuitive.
</li>
<li>
Add dcop interface : insert text, change text format, etc...
</li>
<li>
Frame z-order ("Raise frame", "Lower frame")
</li>
<li>
Preliminary support for background spell checking
</li>
<li>
Support for manual completion (use <code>ctrl E</code>)
</li>
<li>
Support for comments
</li>
<li>
Ability to associate key shortcuts to styles
</li>
<li>
"Section Title" variable
</li>
<li>
Triple click selects a paragraph.
</li>
<li>
New "PageUp/PageDown moves the caret" option, which defaults to false.
 The new behaviour for PageUp/PageDown is to move the scrollbars, not the caret.
</li>
</ul>
<h3>KPresenter</h3>
<ul>
<li>
Ported to the WYSIWYG text engine, shared with KWord
</li>
<li>
New effect : kpresenter can play sounds
</li>
<li>
Thumbnail mode for the sidebar
</li>
<li>
Auto-hide mouse cursor while typing.
</li>
<li>
Add notebar
</li>
<li>
Made the statusbar useful
</li>
<li>
New tools : freehand, polyline, quadric bezier curve, cubic bezier curve, convex/concave polygon
</li>
<li>
Add zoom support
</li>
<li>
Improve undo/redo (now we can undo/redo "insert new page"/"delete page"/"paste page"/"Duplicate page")
</li>
<li>
Now kpresenter has real page
</li>
<li>
Limit position/size object to page
</li>
<li>
Spell checking/search/find works on all page
</li>
<li>
Add "Show Presentation Duration"
</li>
<li>
Add dcop interface : now we can insert text, change text format, etc...
</li>
<li>
Add support for style
</li>
<li>
Add support for background spell checking
</li>
<li>
Add support for manual completion (use <code>ctrl E</code>)
</li>
<li>
Add Help line
</li>
<li>
New transition effect: Blinds, Box In/Out, Checkboard, Cover, Uncover, Dissolve, Random,...
</li>
<li>
Add grid support
</li>
<li>
Add Help Point
</li>
<li>
Add support to change zoom with mouse (zoom selected area)
</li>
<li>
Add Configure Picture Dialog
</li>
</ul>
<h3>KSpread</h3>
<ul>
<li>
Many bug fixes :-)
</li>
<li>
Perfomance enhancements
</li>
<li>
Support up to 2<sup>15</sup> (32,768) columns and rows (formerly it
was 676 columns and 10000 rows)
</li>
<li>
Support for spell-check
</li>
<li>
Many new built-in functions (see detailed list below)
</li>
<li>
Function name is now case-insensitive
</li>
<li>
"Related Function" in formula editor
</li>
<li>
Formulas: &lt;&gt; added, as a synonym of !=
</li>
<li>
Improved DCOP scripting
</li>
<li>
New functions added:
    <ul>
     <li>
      Conversion:<br /><code>INT2BOOL</code>, <code>CHARTOASCII</code>,
      <code>ASCIITOCHAR</code>, <code>BOOL2STRING</code>,
      <code>NUM2STRING</code> and <code>BOOL2INT</code>.
     </li>
     <li>
      Math:<br /><code>DIV</code>, <code>LCD</code>, <code>PRODUCT</code>,
      <code>LCM</code>, <code>TOGGLE</code>, <code>TRIM</code> and
      <code>ABS</code>.
     </li>
     <li>
      Text:<br /><code>COMPARE</code>, <code>CLEAN</code>, <code>SLEEK</code>,
      <code>PROPER</code> and <code>REPLACE</code>.
     </li>
     <li>
      Date/time:<br /><code>DAYS</code>, <code>WEEKS</code>,
      <code>MONTHS</code> and <code>YEARS</code>.
     </li>
     <li>
      Financial:<br /><code>DB</code>, <code>SLN</code>, <code>SYD</code>
      and <code>EURO</code>.
     </li>
     <li>
      Logical:<br /><code>XOR</code>.
     </li>
     <li>
      Statistical:<br /><code>CHIDIST</code>, <code>FDIST</code>,
      <code>TDIST</code>, <code>CONFIDENCE</code>, <code>BETADIST</code>,
      <code>GAMMADIST</code>, <code>PHI</code>, <code>GAUSS</code>,
      <code>MEDIAN</code>, <code>POISSON</code>, <code>GAMMALN</code>,
      <code>NORMINV</code>, <code>NORMSINV</code>, <code>WEIBULL</code>,
      <code>EXPONDIST</code>, <code>NORMDIST</code>, <code>NORMSDIST</code>,
      <code>FISHER</code>, <code>FISHERINV</code> and <code>LOGNORMDIST</code>.
     </li>
    </ul>
</li>
</ul>
<h3>Karbon</h3>
<p>
Karbon is a new vector drawing application, in ALPHA state in this release.
It currently features:
</p>
<ul>
<li>
basic path based shapes + basic affine transformations
</li>
<li>
load/save
</li>
<li>
illustrator-import
</li>
<li>
eps-import/export
</li>
<li>
svg export
</li>
<li>
antialiased rendering with transperancy.
</li>
</ul>
<h3>KThesaurus</h3>
<p>
KThesarus is a new KOffice component. It is a thesaurus which can also be
used as a frontend to a local installation of WordNet.
</p>
<h3>Filters</h3>
<ul>
<li>
Plain text import:
 <ul>
  <li>
  new dialog
  </li>
  <li>
  user can choose encoding
  </li>
  <li>
  user can choose if the filter should import the text as it is or if the 
  filter should try to be smart.
  </li>
 </ul>
</li>
<li>
Plain text export:
  <ul>
  <li>
  new dialog
  </li>
  <li>
  user can choose encoding
  </li>
  <li>
  user can choose end of lines (LF, CR or CR/LF)
  </li>
  </ul>
</li>
<li>
SGML export:
  <ul>
  <li>
  tables
  </li>
  <li>
  images (saved in a seperate directory)
  </li>
  <li>
  lists (one depth only)
  </li>
  </ul>
</li>
<li>
HTML export:
  <ul>
  <li>
  the former mode "document structure" is now called "light" and now exports 
  also simple formatting.
  </li>
  <li>
  the former mode "direct" is now called "basic".
  </li>
  <li>
  the former mode "style" is now called "enhanced" and writes files with less 
  redundant information.
  </li>
  <li>
  user can choose encoding.
  </li>
  <li>
  inlined images
  </li>
  <li>
  inlined cliparts (preliminary) 
  </li>
  <li>
  tables
  </li>
  <li>
  hyperlinks
  </li>
  <li>
  lists (now also of more than one depth)
  </li>
  <li>
  forced line breaks
  </li>
  <li>
  paper format and margins (enhanced mode only)
  </li>
  </ul>
</li>
<li>
AbiWord import:
  <ul>
  <li>
  styles (including character-based ones.)
  </li>
  <li>
  images
  </li>
  <li>
  hyperlinks
  </li>
  <li>
  AbiWord's field are transformed to variables (if possible)
  </li>
  <li>
  Not transformed fields are imported as red text.
  </li>
  <li>
  forced line breaks
  </li>
  <li>
  forced page breaks
  </li>
  <li>
  paper format and margins
  </li>
  <li>
  tabulators
  </li>
  </ul>
</li>
<li>
AbiWord export:
  <ul>
  <li>
  styles
  </li>
  <li>
  inlined PNG Images (other inlined images are converted to PNG)
  </li>
  <li>
  writes files with less redundant information.
  </li>
  <li>
  hyperlinks
  </li>
  <li>
  KWord's variables are transformed to fields (if possible)
  </li>
  <li>
  forced line breaks
  </li>
  <li>
  forced page breaks
  </li>
  <li>
  paper format and margins
  </li>
  <li>
  tabulators
  </li>
  </ul>
</li>
<li>
HTML import:
  <ul>
  <li>
  based on KHTML now, handles HTML better.
  </li>
  <li>
  support basic formatting only. No CSS. Tables support disabled.
  </li>
  </ul>
</li>
<li>
Latex export:
  <ul>
  <li>
  much bugfixing
  </li>
  <li>
  support of unicode with omega
  </li>
  <li>
  variables
  </li>
  </ul>
</li>
<li>
A new XSLT filter framework for converting between XML-based office formats.
</li>
</ul>

<?php
  include("footer.inc");
?>
