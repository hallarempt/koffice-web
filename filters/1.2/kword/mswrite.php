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

    <li>Headers & Footers (including whether or not they are printed on first page)</li>
    <li>Page formatting (margins, positioning of headers & footers, page numbers starting from any number)</li>
</ul>

<p>KWord is not able to save the document to Microsoft Write format.</p>

<?php
   include("footer.inc");
?>





