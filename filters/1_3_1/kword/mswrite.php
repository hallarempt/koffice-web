<?php
  $page_title="Microsoft Write Filter";
  $location = '../../../';
  include("koffice.inc");
  include("header.inc");
?>

<p>Imports almost everything except OLE from MS Write (3.0 &amp; 3.1) documents:</p>
<ul>
    <li>Character formatting (fonts, bold, italic, underline, superscript, subscript, &quot;(page)&quot; numbering)</li>
    <li>Optional/Soft Hyphenation</li>
    <li>Paragraph formatting (alignment, linespacing, indentation, tabulation)</li>
    <li>Paragraphs with multiple newlines</li>
    <li>Pagebreaking (at the start or end of the line and on the next line)</li>
    <li>Images (Standard WMFs, monochrome BMPs, position from left margin)</li>
    <li>Character Set Conversion</li>

    <li>Headers &amp; Footers (including whether or not they are printed on first page)</li>
    <li>Page formatting (margins, positioning of headers &amp; footers, page numbers starting from any number)</li>
</ul>

<p>Exports text, images and a useful amount of formatting to MS Write 3.0 documents:</p>
<ul>
     <li>This import/export filter pair is almost &quot;symmetric&quot; i.e. export (import (f)) = f</li>
     <li>It can export everything that the import filter can import except Page Layout</li>
     <li>Images of various types (e.g. BMP, JPEG, WMF, PNG) are supported</li>
     <li>Tables are simply dumped out as paragraphs</li>
     <li>Basic list support</li>
</ul>

<?php
   include("footer.inc");
?>





