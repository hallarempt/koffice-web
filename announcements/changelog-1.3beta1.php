<?php
  $page_title ='KOffice 1.3-beta1 Changelog';
  $site_root = '../';
  include("koffice.inc");
  include("header.inc");
?>

<p>
  The following summarizes the major changes to the KOffice Suite since the
  release of KOffice 1.2 (latest stable version).
</p>

<h3><a name="koffice_libs">KOffice Libraries</a></h3>
<ul>
<li>New command line option: --print. Prints the document(s) passed on the command
    line, without showing a window. Useful for scripts and servicemenus.</li>
</ul>

<h4>KoText library features (shared between KWord and KPresenter):</h4>
<em>Formatting:</em>
<ul>
<li>text formats now include language information (new)</li>
<li>new line spacing types: at least / exactly / multiple of (new)</li>
<li>new font attributes: small caps, uppercase, lowercase (new)</li>
<li>new underline and strikethru type: word by word</li>
</ul>

<em>Variables:</em>
<ul>
<li>created/modified/printed document date (bug #24242)</li>
<li>added time/date variable offset (new)</li>
<li>added new variables: Next page number, Previous page number (new)</li>
</ul>


<h3><a name="kword">KWord</a></h3>
<em>New features:</em>
<ul>
<li>Language added as a new character property</li>
<li>Possibility to copy/remove links</li>
<li>Added support for converting table to text</li>
<li>Horizontal line</li>
<li>Sorting of text</li>
<li>Improved statistics dialogbox : count number of lines</li>
<li>Hyphenation support. Configurable as a character property
    (to disable hyphenation on specific words)</li>
</ul>

<em>Bugfixes:</em>
<ul>
<li>Paragraph numbering: simple lists are not restarted by simple text in between</li>
</ul>

<!--
<em>Crashes:</em>
<ul>
</ul>
-->

<h3><a name="kpresenter">KPresenter</a></h3>
<em>Visual stuff:</em>
<ul>
<li>objects use "forbidden" cursor when they're protected (new)</li>
<li>display an "End of presentation"-slide at end of presentation; configurable
    (new)</li>
<li>transition effect dialog with preview (new)</li>
</ul>

<em>Text boxes:</em>
<ul>
<li>can spellcheck in selection only (new)</li>
<li>shadow is a text property now (bugfix)</li>
<li>link manipulation (add/copy/remove) (new)</li>
<li>access to spellcheck result via context menu</li>
</ul>

<em>Images:</em>
<ul>
<li>properly draw images with alpha channels (bugfix)</li>
<li>better loading of background pictures; especially for remote files (new)</li>
</ul>

<em>Configurability:</em>
<ul>
<li>whether and where to create backup files (new)</li>
<li>path to pictures (new)</li>
<li>personal dictionary (new)</li>
<li>list of ignored words when spellchecking (new)</li>
<li>go with a per-slide default when inserting a new one (wish #22629)</li>
<li>printing of slide notes (wish #56120)</li>
</ul>

<em>Misc:</em>
<ul>
<li>web presentation: better HTML generation, usability improvement of the wizard (new)</li>
<li>copy/paste image/embedded objects between different instances (bugfix)</li>
<li>comment text can be copied now (bugfix)</li>
<li>undo/redo shows history of commands (new)</li>
</ul>


<h3><a name="kspread">KSpread</a></h3>
<ul>
<li>real more than one currency support</li>
<li>new date and time formats</li>
<li>enhanced the "Text to Columns", "Insert from file"
  and "Insert from clipboard" dialog to support "ignore double delimiters"</li>
<li>"Insert from file" now also adjusts the column width depending on imported
  cell content</li>
<li>enhanced the CSV import dlg
  <ul>
    <li>to support "ignore double delimiters"</li>
    <li>to adjust cell width to imported cell content</li>
    <li>you can specify the column and row range for import</li>
  </ul>
</li>
<li>enhanced the CSV export dialog so that you can choose
 <ul>
   <li>table to export</li>
   <li>delimiters between tables</li>
   <li>delimiter between cells</li>
   <li>character for quotes</li>
   <li>export selection only</li>
 </ul>
</li>
<li>Goal Seek message fixes + you can select the cells with the mouse now</li>
<li>enhanced Gnumeric import filter to support
  <ul>
    <li>background (color + patterns), borders (colors + style)</li>
    <li>font formating, text alignment</li>
    <li>format parsing (date, time, numbers,...), cell height, width</li>
    <li>print range, page setup, hidden columns/row, comments</li>
  </ul>
</li>
<li>new OpenCalc export and import filter</li>
<li>Added subtotal dialog and formula</li>
<li>Paper layout can now be applied to all sheets</li>
<li>now you can define the default cell style</li>
<li>Autoscroll while selecting now also available for columns and row headers</li>
<li>When cell is too short, then the content is now available in the tooltip</li>
<li>Drag 'n' Drop of selections</li>
<li>Protection of sheets or of the document structure (with or without password)</li>
<li>Protection tab in layout dialog: you unprotect certain cells, hide their
  contents, hide the formulas, or select them for not being printed</li>
<li>FindNext, FindPrevious cell enhancement for find</li>
<li>Fill: Fill area from right to left, left to right, bottom to top, top to bottom</li>
<li>Full zoom support</li>
<li>Printing:
  <ul>
    <li>High resolution printing (600dpi)</li>
    <li>Improved WYSIWYG</li>
    <li>Zoom support on printout</li>
  </ul>
</li>
<li>New direction mode when pressing Enter: you can jump now to the first cell of the next row</li>
<li>hierachical style support
  <ul>
    <li>builtin styles</li>
    <li>creation of custom styles</li>
    <li>creation of custom styles using a cell as template</li>
  </ul>
</li>
<li>insert special characters</li>
<li>smaller, more efficient file format</li>
<li>many performance enhancements</li>
<li>more powerful conditional cell attributes (you can assign a whole style if condition matches)</li>
<li>conditions can be used for text and numbers now (was numbers only before)</li>
</ul>

<em>New functions:</em><br />

<p><em>Date/Time (16):</em>
  EDATE, EOMONTH, DAYS360, WEEKDAY, TIMEVALUE, DATEVALUE, YEAR,
  MONTH, DAY, HOUR, MINUTE, SECOND, DAYNAME, MONTHNAME, EASTERSUNDAY,
  ISOWEEKNUM
</p>

<p><em>Math (16):</em>
  SUBTOTAL, POWER, TRUNC, CEILING, PRODUCT (now Excel compatible),
  KPRODUCT, RANDEXP, RANDBINOM, RANDNEGBINOM, RANDBERNOULLI,
  RANDPOISSON, MROUND, COUNTA, MINA, MAXA, SUMA
</p>

<p><em>Statistical (24):</em>
  VARP, STDEV, VAR, STDEVP, GEOMEAN, HARMEAN,
  KURT, LOGINV, DEVSQ, STANDARDIZE, HYPGEOMDIST,
  NEGBINOMDIST, KURTP, CORREL, COVAR, SMALL, LARGE
  STDEVA, STDEVPA, VARA, VARPA, SKEW, SKEWP, MODE
</p>

<p><em>Financial (19):</em>
  PPMT, DDB, DURATION, PMT, NPER,
  ISPMT, IPMT, TBILLEQ, TBILLPRICE, TBILLYIELD,
  ACCRINT, ACCRINTM, COUPNUM, DOLLARDE, DOLLARFR,
  DISC, EFFECT, INTRATE, RECEIVED
</p>

<p><em>Database (12):</em>
  DAVERAGE, DCOUNT, DCOUNTA, DGET, DMAX, DMIN,
  DPRODUCT, DSTDEV, DSTDEVP, DSUM, DVAR, DVARP
</p>

<p><em>Reference & Lookup (8):</em>
  ADDRESS, AREAS, CHOOSE, COLUMN, COLUMNS, 
  INDIRECT, ROW, ROWS
</p>

<p><em>Engineering (2):</em>
DELTA, GESTEP
</p>

<p><em>Logical (2):</em>
FALSE, TRUE
</p>

<p><em>Information (2):</em>
ISNONTEXT, ISNUMBER
</p>

<em>Obsolete formulas:</em>
<ul>
<li>stddev (was stddevp in fact)</li>
<li>day (is dayname now)</li>
<li>month (is monthname now)</li>
</ul>

<p><em>Obsolete but still usable formulas (do not show up in dialog):</em>
variance, pow, isnottext, isnum, effective</p>


<h3><a name="kugar">Kugar</a></h3>
<ul>
  <li>Redesign for the KOffice architecture</li>
  <li>Create reports with data and template stored in one file</li>
  <li>Print reports from command line</li>
  <li>Support for fields list in detail sections</li>
  <li>DCOP interface</li>
  <li>Integration with Kexi</li>
</ul>

<h3><a name="kugar_designer">Kugar Designer</a></h3>
<ul>
  <li>Redesign for the KOffice architecture</li>
  <li>New user-friendly interface</li>
  <li>Flexible property editing for report elements and multiple selections of elements</li>
  <li>Flexible placing and resizing report elements</li>
  <li>Cut, copy and paste for report items</li>
  <li>Undo/redo operations</li>
  <li>Manual z-ordering for report items</li>
  <li>DCOP interface</li>
</ul>


<h3><a name="kivio">Kivio</a></h3>
<ul>
<li>GUI cleanup</li>
<li>Better KOffice integration</li>
<li>Lots of bugfixes</li>
</ul>


<h3><a name="kexi">Kexi</a></h3>
<ul>
  <li>Hiding of database backend specifics from the user, 
      but allowing advanced users full access at the same time</li>
  <li>Table structure altering</li>
  <li>Table creation</li>
  <li>Easy database query creation, without the need of knowing SQL (Structured Query Language)</li>
  <li>User-friendly data manipulation (even on complicated queries)</li>
  <li>Easy data report generation using Kugar</li>
  <li>User-defined forms for data input and presentation</li>
  <li>Scripting support with a JavaScript/ECMA-Script like language (QSA)</li>
  <li>MySql backend</li>
  <li>CQL++ backend and embedding</li>
</ul>


<h3><a name="kformula">KFormula</a></h3>
<ul>
  <li>Support for multi-line formulae including element alignment</li>
  <li>Changeable char attributes</li>
  <li>New over- and underlines</li>
</ul>

<h3><a name="karbon">Karbon</a></h3>
<ul>
<li>improvements on layer/document tree</li>
<li>added document preview</li>
<li>changes to move karbon file format towards svg/OO Draw formats</li>
<li>extended star tool with 6 new types</li>
<li>extended ellipses with 3 new types</li>
<li>extended spirals so it can have rectangular structure</li>
<li>added aligning options</li>
<li>made plugin structure</li>
<li>added new zoom tool and zoom options</li>
<li>added menu option to import drawings into current document</li>
<li>improved cut/copy/paste</li>
<li>added option to perform transformations on cloned shapes
    while leaving original intact</li>
</ul>


<h3><a name="filters">Filters</a></h3>
<em>KWord:</em>
<ul>
<li>new RTF export filter for KWord (replacing the old one; new: styles, picture...)</li>
<li>better RTF import filter (better support for old RTF files)</li>
<li>new OpenOffice.org Writer import filter</li>
</ul>

<em>KPresenter:</em>
<ul>
<li>new OpenOffice.org Impress import filter</li>
<li>new Magicpoint import filter</li>
</ul>

<em>KSpread:</em>
<ul>
<li>new OpenOffice.org Calc import and export filters</li>
</ul>

<em>Karbon:</em>
<ul>
<li>OpenOffice.org Draw import filter with limited functionality</li>
<li>Improvements on SVG import/export</li>
<li>Improvements on Kontour import filter</li>
</ul>


<?php
  include("footer.inc");
?>
