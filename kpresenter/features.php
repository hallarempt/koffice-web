<?php
  $page_title="KPresenter Features";
  $site_root='../';
  include("koffice.inc");
  include("header.inc");
?>

    <p>This page contains a short description of the features
    which are currently implemented in KPresenter. There are many other features in addition to these.</p>
    <b>File:</b> <br />


    <ul>
      <li>New document (using templates</li>

      <li>Open document</li>

      <li>Save document</li>

      <li>Print document</li>

      <li>Exit</li>
    </ul>
    <br />
     <b>Edit:</b> <br />


    <ul>
      <li>Undo</li>

      <li>Redo</li>

      <li>Delete objects (also embedded parts)</li>

      <li>Cut objects</li>

      <li>Copy objects</li>

      <li>Paste objects</li>

      <li>Select all objects</li>

      <li>Delete pages</li>

      <li>Find</li>

      <li>Find/Replace</li>
    </ul>
    <br />
     <b>View:</b> <br />


    <ul>
      <li>New View</li>
    </ul>

    <p><b>Insert:</b><br />
    </p>

    <ul>
      <li>New page (with template)</li>

      <li>Pictures and clipart in following formats: GIF, JPEG, BMP, XPM, XBM,
      PNM, PNG, EPS and WMF.</li>

      <li>Autoforms in different styles (pen, brush)</li>

      <li>An image from scanner</li>
    </ul>
    <br />
     <b>Tools:</b> <br />


    <ul>
      <li>Selection Tools</li>

      <li>Insert lines in different styles (pen, brush,
      begin/end-style)</li>

      <li>Insert Rectangles (with normal and rounded corners)</li>

      <li>Insert circles and ellipses</li>

      <li>Insert pies, arcs and chords</li>

      <li>Insert rich textobjects</li>

      <li>Embed other KParts (embedded documents of other KOffice
      applications)</li>
    </ul>
    <br />
     <b>Text:</b> <br />


    <ul>
      <li>Fontdialog for textobjects</li>

      <li>Change text color</li>

      <li>Change text alignment</li>

      <li>Change text type (normal text, unordered list)</li>

      <li>Change depth for hierarchical lists</li>

      <li>Change linespacing and distances before and after
      paragraphs</li>
    </ul>
    <br />
     <b>Extras:</b> <br />


    <ul>
      <li>Change the properties of selected lines, rectangles,
      circles, ellipses, arrows or as default</li>

      <li>Configure pie, arc and chord</li>

      <li>Lower selected objects</li>

      <li>Raise selected objects</li>

      <li>Rotate objects</li>

      <li>Shadow objects</li>

      <li>Align objects (left, horizontal center, right, top,
      vertical center bottom)</li>

      <li>Set and change the background color (plain or gradiend),
      background picture (GIF, JPEG, BMP, XPM, XBM, PNM and PNG) or
      background clipart (WMF) for a certain or for all pages</li>

      <li>Set and change page layout (size, format and
      borders)</li>

      <li>Create an HTML Slideshow from the current
      presentation</li>
    </ul>
    <br />
     <b>Screen Presentations:</b> <br />


    <ul>
      <li>Configure pages</li>

      <li>Open presentation structure viewer</li>

      <li>Assign effects</li>

      <li>Start screenpresentation</li>

      <li>Stop screenpresentation</li>

      <li>Previous</li>

      <li>Next</li>

      <li>First</li>

      <li>Last</li>

      <li>Choose pen for freehand drawing in screen
      presentations</li>
    </ul>
    <br />
     <b>Help:</b> <br />


    <ul>
      <li>Show the copyright dialog</li>

      <li>Show information about KOffice</li>

      <li>Show information about KDE</li>
    </ul>
    <br />


    <p><b>Rich textobject:</b><br />
     To create nice looking texts of course there exists a
    textobject which allows you to write and edit texts with
    several fonts and colors. It also offers an automatic line
    break, different alignments, (hierarchical) lists, different
    linespaces, different distances before and after paragraphs,
    etc.</p>

    <p><b>Fast navigation:</b><br />
     The sidebar that optionally appears on the left allows to
    quickly navigate through the presentation, change the order of
    the pages, deselect some pages, etc.</p>

    <p><b>Resizing and moving:</b><br />
     Of course you can resize every object. In this case pictures
    are scaled automatically, and text objects do an automatic
    linebreak. The other objects just change their size. You can
    also move one or more objects together.</p>

    <p><b>Double click:</b><br />
     If you double click on an object:</p>

    <ul>
      <li>Textobjects switch to edit-mode until you click out of
      it</li>

      <li>Other objects switch to editmode too (if they have
      one)</li>
    </ul>
    <br />
    <br />


    <p><b>Right click:</b><br />
     All objects open a popup-menu for cut, copy, paste, delete,
    effects, properties.</p>

    <p><b>Drag'n'Drop:</b><br />
     It's possible to drop text (ascii/plain), pixmaps (image/*)
    and urls into a KPresenter page. Text is inserted as a text in
    a textobject, pixmaps are inserted as pixmap objects and urls
    are opened when possible (if the url is a pixmap it's inserted
    as a pixmapobject, else it's opened in a textobject).</p>

<?php
  include("footer.inc");
?>


