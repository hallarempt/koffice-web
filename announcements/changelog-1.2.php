<?php
   $page_title ='KOffice 1.2 ChangeLog';
   $site_root = '../';
   include("koffice.inc");
   include("header.inc");
?>
<!--                               BEGIN CHANGES                             -->
<h4>
  KOffice 1.2 ChangeLog
</h4>
<p align="justify">
  KOffice 1.2 is a stable release which offers a number of important feature
  additions and improvements compared to KOffice 1.1:
</p>
<!--                                 GENERAL                                 -->
<p align="justify">
  <u>General</u>.</p>
  <ol type="disc">
    <li>
      <div align="justify">
        <em>WYSIWYG</em>.
        KWord, KPresenter and the formula objects have received an
        overhaul in the presentation:  text layout and painting have
        been redesigned around the popular and intuitive WYSIWYG (What
        You See Is What You Get) design concept.
      </div>
    </li>
    <li>
      <div align="justify">
        <em>SVG Support</em>.  KOffice components can now handle many
        SVG images (animation is not yet supported).
      </div>
    </li>
    <li>
      <div align="justify">
        <em>DCOP (Remote Control)</em>.
        All KOffice components have a greatly enhanced DCOP scriptability.
        For example, DCOP can be used to insert or reformat text in KWord
        and KPresenter.
      </div>
    </li>
    <li>
      <div align="justify">
        <em><a href="http://konqueror.kde.org/">Konqueror</a> Embedding</em>.
        All KOffice components feature a new read-only Konqueror plugin for
        previewing KOffice documents.  In addition, KDE's file manager
        (Konqueror) can now display thumbnail previews of KOffice documents.
      </div>
    </li>
    <li>
      <div align="justify">
        <em>Spell checking</em>.
        KPresenter and KSpread now have a spell checker.
      </div>
    </li>
    <li>
      <div align="justify">
        <em>Thesaurus</em>.
        KThesaurus is a new KOffice component.  It is an English thesaurus
        which can also be used on a stand-alone basis as a frontend to a local
        installation of WordNet.
      </div>
    </li>
    <li>
      <div align="justify">
        <em>Word Completion</em>.
        KWord and KPresenter offer a word completion feature.  By using
        a key shortcut, these office applications will try to complete
        the word using a word-list, consisting of the words in the current
        document or compiled from another document.
      </div>
    </li>
    <li>
      <div align="justify">
        <em>File Format</em>.  KOffice has switched to zip (instead of
        tar and gzip) for archiving / compressing its native file
        format and to using "relative paths" for objects included in
        the archive (such as images or embedded components).  This provides
        greatly improved document compatability with other Open Source
        office suites, while enhancing performance.  For backwards
        compatability, KOffice 1.2 will support saving in the KOffice
        1.1 format, and KOffice 1.1 users can download a utility to convert
        from the KOffice 1.2 to the KOffice 1.1 format.
      </div>
    </li>
    <li>
      <div align="justify">
        <em>BiDi</em>.  KWord and KPresenter now feature full support for
        reading and writing bi-directional text, such as Arabic and Hebrew
        (<a href="http://www.koffice.org/kword/pics/kword-bidi.png">screenshot</a>,
        <a href="http://www.koffice.org/kword/pics/kword-arabic.png">screenshot</a>).
      </div>
    </li>
    <li>
      <div align="justify">
        <em>Auto-hide Cursor</em>.  Both KWord and KPresenter now hide
        the cursor when the mouse has been idle for some time.
      </div>
    </li>
    <li>
      <div align="justify">
        <em>Image support</em>. EPS support has been improved, including new support for MS-DOS EPS files.
        Memory usage by the X-Server has been reduced for images and EPS.
      </div>
    </li>
  </ol>

<!--                                 TEXT WIDGET                             -->
  <div align="justify">
  <u>Text Widget (Word Processor and Presentation Program)</u>.
    Both <a href="#kword_changelog">KWord</a> and
    <a href="#kpresenter_changelog">KPresenter</a> share the same text widget.
    This, the following improvements apply to both of those components:
  </div>
  <ol type="disc">
    <li>
      <div align="justify">
        <em>Formatted text searching</em>.
        The find / replace function now has support for searching
        for formatting text and replace matches with formatted text
        (bold, Times font, etc.).
      </div>
    </li>
    <li>
      <div align="justify">
        <em>Auto-correction</em>.
        A new "apply auto-correction" feature for applying the auto-correction
        settings (spelling, symbols, etc.) to the entire document, rather than
        just when data is being entered.
        Auto-correction rules can also be changed (e.g., to use a different
        spoken language).
      </div>
    </li>
    <li>
      <div align="justify">
        <em>Formatting / styles</em>.
        The current selection's text and paragraph formatting can now be
        directly saved as a style.
      </div>
    </li>
    <li>
      <div align="justify">
        <em>Frame locking</em>.
        Frame contents, sizes and positions can be "locked" to prevent
        inadvertent changes.
      </div>
    </li>
    <li>
      <div align="justify">
        <em>Style import</em>.
        Frame, table and text / paragraph styles can be imported from other
        documents.
      </div>
    </li>
  </ol>

<!--                                  KWORD                                  -->
<p align="justify">
  <a name="kword_changelog"><u>KWord (Word Processor)</u>.</a></p>
  <ol type="disc">
    <li>
      <div align="justify">
        <em>Footnotes</em>.
        KWord now has footnotes!  Configurable footnote (line) separators are included.
      </div>
    </li>
    <li>
      <div align="justify">
        <em>Mail merge</em>.
       KWord can create multiple documents from a single template, where only
       some fields change. The data can come from an SQL database, or can be
       stored in the document itself.
      </div>
    </li>
    <li>
      <div align="justify">
        <em>Tables</em>.
      </div>
      <ul type="circle">
        <li>
          <div align="justify">
            <em>Borders</em>.
              Table borders have been properly implemented.
          </div>
        </li>
        <li>
          <div align="justify">
            <em>Sizing</em>.
              The sizing of variable width table cells has been greatly
              improved.
          </div>
        </li>
        <li>
          <div align="justify">
            <em>Styles / templates</em>.
            Tables also now support customized styles and templates.
            Table styles are based on a combination of frame and paragraph
            styles.  Table templates are based on a combination of table styles
            (for example, a different style can be applied to the table
            header row, or columns can have alternating colors.)
          </div>
        </li>
      </ul>
    </li>
    <li>
      <div align="justify">
        <em>Frames</em>.
      </div>
      <ul type="circle">
        <li>
          <div align="justify">
            <em>In-lining</em>.
            You can now choose where to inline a new frame.
          </div>
        </li>
        <li>
          <div align="justify">
            <em>Layering</em>.
            Frames now have a "z-order", so they can be lowered and raised.
          </div>
        </li>
        <li>
          <div align="justify">
            <em>Styles</em>.
            Frames now have their own styles (borders, margins, background
            color, etc.).  A new style can be created based on the
            formatting of the selected frame.
          </div>
        </li>
        <li>
          <div align="justify">
            <em>Text flow</em>.
            Text can be set to flow to the left, right or largest side of
	    a frame. Revised algorithm for the way the text flows between frames of the same frame set.
          </div>
        </li>
        <li>
          <div align="justify">
            <em>Spacing</em>.
	    Frames can have margins (inside) and a "text runaround distance" (outside).
          </div>
        </li>
      </ul>
    </li>
    <li>
      <div align="justify">
        <em>Text</em>.
        KWord now supports double underline, text shadow, soft hyphens,
        non-breaking spaces and a text background color.  In addition,
        comments can be added to text.
        KWord also supports hyperlinks (an Internet, email or file link).
      </div>
    </li>
    <li>
      <div align="justify">
        <em>New filters</em>.
        KWord has a number of new filters for enhanced compatibility with
        other office suites:
      </div>
      <ul type="circle">
        <li>
          <div align="justify">
            <em>WordPerfect, PalmDoc, XSLT, WML and XSLT</em>.
            KWord provides several new export / import filters:
            WordPerfect (limited support);
            PalmDoc (substantial support);
            Unicode text (substantial support);
            WML (limited support); and
            <a href="http://www.w3.org/Style/XSL/">XSLT</a> (limited support
            for mapping to other XML-based office formats).
          </div>
        </li>
        <li>
          <div align="justify">
            <em>MSWrite, RTF and AmiPro</em>.
            KWord provides several new import filters:
            MSWrite (limited support);
            RTF (substantial support); and
            Lotus AmiPro (limited support).
          </div>
        </li>
      </ul>
    </li>
    <li>
      <div align="justify">
        <em>Improved filters</em>.
        KWord has a number of improved filters for enhanced compatibility with
        other office suites (for more detail on changes, please see the
        <a href="#filters">Filters</a> section):
      </div>
      <ul type="circle">
        <li>
          <div align="justify">
            <em>AbiWord, RTF, LaTeX, text and HTML import / export</em>.
            AbiWord and plain text export / import have been greatly enhanced,
            including, in the case of AbiWord, new image support.
            HTML import has been completely rewritten, and currently
            has limited functionality; HTML export has been greatly
            enhanced, including new image support.
          </div>
        </li>
        <li>
          <div align="justify">
            <em>SGML DocBook, LaTeX and RTF export</em>.
            SGML DocBook, LaTeX and RTF export have been enhanced, including,
            in the case of SGML DocBook, new image support.
          </div>
        </li>
      </ul>
    </li>
    <li>
      <div align="justify">
        <em>Headers / Footers</em>.
        Improved header and footer grouping allows different formats for both
        the first and other pages as well as for the even and odd pages.
      </div>
    </li>
    <li>
      <div align="justify">
        <em>Insertion</em>.
        Other KWord documents can be loaded into the current document.
      </div>
    </li>
    <li>
      <div align="justify">
        <em>Images</em>.
      </div>
      <ul type="circle">
        <li>
          <div align="justify">
            <em>Saving</em>.
            Images can be saved directly to disk.
          </div>
        </li>
        <li>
          <div align="justify">
            <em>Image frames</em>.
              You can replace the image in a frame (rather
              than having to create a new frame to replace an image).
          </div>
        </li>
        <li>
          <div align="justify">
            <em>KWord 1.0</em>.
	    KOffice 1.0 images can be loaded again; and embedded documents
            are handled better.
          </div>
        </li>
      </ul>
    </li>
    <li>
      <div align="justify">
        <em>Tabs</em>.
        The handling of tabs in the ruler has been improved.
        In addition, default tab widths are adjustable.
      </div>
    </li>
    <li>
      <div align="justify">
        <em>Usability improvements</em>.
      </div>
      <ul type="circle">
        <li>
          <div align="justify">
            <em>Shortcuts</em>.
            You can now assign a style to a key shortcut.  New shortcuts
            have been added for non-breakable spaces and soft hyphens.
            The <code>PageUp</code> / <code>PageDown</code> keys now default to
            moving only the scrollbars, not the cursor.
          </div>
        </li>
        <li>
          <div align="justify">
            <em>Resuming editing</em>.
            The cursor position is now restored when a document is loaded.
          </div>
        </li>
        <li>
          <div align="justify">
            <em>Paragraphs</em>.
            Paragraphs can be selected by clicking on the left of the
            text frame, or with triple-click.
          </div>
        </li>
      </ul>
    </li>
  </ol>

<!--                                KPRESENTER                               -->
<p align="justify">
  <a name="kpresenter_changelog"><u>KPresenter (Presentation Tool)</u>.</a></p>
  <ol type="disc">
    <li>
      <div align="justify">
        <em>Sound</em>.
        KPresenter has become a multimedia application with the addition
        of sound support.
      </div>
    </li>
    <li>
      <div align="justify">
        <em>Snap-to-grid</em>.
        The popular "Snap to Grid" feature is now implemented.
        In addition, holding the <code>Shift</code> key while creating a
        line object snaps to the vertical or horizontal planes.`
      </div>
    </li>
    <li>
      <div align="justify">
        <em>New tools</em>.
        A set of new tools for creating professional presentations:  freehand,
        polyline, quadric bezier curve, cubic bezier curve and
        convex / concave polygon.
      </div>
    </li>
    <li>
      <div align="justify">
        <em>Image configuration</em>.
        A new "Configure Image" dialog supports a
        number of operations on images, such as flip / mirror, color depth,
        RGB to BGR conversion and brightness control.
      </div>
    </li>
    <li>
      <div align="justify">
        <em>Page views</em>.
        A new thumbnail view of each page in the presentation is now displayed
        in the sidebar.
      </div>
    </li>
    <li>
      <div align="justify">
        <em>Note bar</em>.
        A new note bar allows you to add comments to each page of a
        presentation.
      </div>
    </li>
    <li>
      <div align="justify">
        <em>Zooming</em>.
        KPresenter now has zooming support.  Besides the standard
        percentage zoom, you can zoom to a region selected with the mouse.
      </div>
    </li>
    <li>
      <div align="justify">
        <em>Layout</em>.
        Improved page layout, so changes in one page no longer cause other
        pages to misalign.  The position and size of an object can now be
        set to fit on the page.  A grid system has been implemented.
      </div>
    </li>
    <li>
      <div align="justify">
        <em>Transition effects</em>.
        New transition effects include Blinds, Box In / Out, Checkboard,
        Cover, Uncover, Dissolve, Random and more.
      </div>
    </li>
    <li>
      <div align="justify">
        <em>Styles</em>.
        KPresenter now supports styles for text and paragraph
        formatting.
      </div>
    </li>
    <li>
      <div align="justify">
        <em>Miscellaneous</em>.
      </div>
      <ul type="circle">
        <li>
          <div align="justify">
            <em>Status bar</em>.
            KPresenter now has a useful status bar.
          </div>
        </li>
        <li>
          <div align="justify">
            <em>Undo / redo</em>.
            The undo / redo functionality was extended to include page
            insertion, deletion, pasting and duplication.
          </div>
        </li>
        <li>
          <div align="justify">
            <em>Search / replace</em>.
            The search and replace functions work over all pages.
          </div>
        </li>
        <li>
          <div align="justify">
            <em>Guide lines / points</em>.
            KPresenter has new "guide lines" and "guide points" for helping
            with object layout on the page.
          </div>
        </li>
        <li>
          <div align="justify">
            <em>Slide-show duration</em>.
            It can report the duration of a slide-show presentation.
          </div>
        </li>
        <li>
          <div align="justify">
            <em>Image saving</em>.
            Images (including the background images) can be saved directly
            to disk.
          </div>
        </li>
        <li>
          <div align="justify">
            <em>Object alignment</em>.
            Objects can be aligned vertically.
          </div>
        </li>
        <li>
          <div align="justify">
            <em>Object ratios</em>.
            Objects can have a new "keep ratio" property.
          </div>
        </li>
        <li>
          <div align="justify">
            <em>Polygons</em>.
            Polyline objects can be flipped.
          </div>
        </li>
      </ul>
    </li>
  </ol>
<!--                                 KSPREAD                                 -->
<p align="justify">
  <a name="kspread_changelog"><u>KSpread (Spreadsheet Application)</u>.</a></p>
  <ol type="disc">
    <li>
      <div align="justify">
        <em>Data import / database connectivity</em>.
        Data can now be loaded directly from an SQL database or read from a
        text file.
      </div>
    </li>
    <li>
      <div align="justify">
        <em>Printing</em>.
      </div>
      <ul type="circle">
        <li>
          <div align="justify">
            <em>Ranges</em>.
              Ranges can be defined for printing.
          </div>
        </li>
        <li>
          <div align="justify">
            <em>Legends</em>.
              Selected rows and/or columns can be repeated after page breaks
              (for headings and descriptions).
          </div>
        </li>
        <li>
          <div align="justify">
            <em>Layout</em>.
              The page layout can be set separately for each sheet in
              the workbook.
          </div>
        </li>
      </ul>
    </li>
    <li>
      <div align="justify">
        <em>Named areas</em>.
        The range for a named area can now be changed, effectively converting
        such names into variables (cells which reference the named areas will
        reference the new range rather than the range defined when the named
        area was added to the cell).
      </div>
    </li>
    <li>
      <div align="justify">
        <em>Templates</em>.
        KSpread now supports templates.
      </div>
    </li>
    <li>
      <div align="justify">
        <em>Columns / rows</em>.
        KSpread can now handle over 32,000 rows and over 32,000 columns.
      </div>
    </li>
    <li>
      <div align="justify">
        <em>Filters</em>.
        KSpread has a new dBASE import filter.
      </div>
    </li>
    <li>
      <div align="justify">
        <em>Functions</em>.
      </div>
      <ul type="circle">
        <li>
          <div align="justify">
            <em>Function names</em>.
              Function names are now case-insensitive.
          </div>
        </li>
        <li>
          <div align="justify">
            <em>Formula editor</em>.
              The formula editor has a new "Related Function" feature.
          </div>
        </li>
        <li>
          <div align="justify">
            <em>New functions</em>.
              Seventy-five new built-in functions have been added:
              integer / boolean / text conversion functions, 7 new math
              functions, 5 new text functions, 4 new date / time functions, 4
              new financial functions (including a <code>EURO</code> function
              for converting between the Euro (&euro;) and other currencies),
              and 20 new statistical functions.  "Goal Seek" has also been
              added.
          </div>
        </li>
        <li>
          <div align="justify">
            <em>Excel compatibility</em>.
              More functions are fully compatible with the Excel equivalents.
          </div>
        </li>
      </ul>
    </li>
    <li>
      <div align="justify">
        <em>Sorting</em>.
        Up to three rows or columns can be sorted together.
        The sorted results can be stored somewhere else to keep the original
        data intact.  The layout / formatting of the data can optionally be
        applied to the new location, and a row header outside the sort range
        may also be copied to the new location.
      </div>
    </li>
    <li>
      <div align="justify">
        <em>Views</em>.
        A spreadsheet can now have Multiple views, with each view able to
        select or modify different portions of the same sheet independently.
      </div>
    </li>
    <li>
      <div align="justify">
        <em>Formula indicators</em>.
        A new "formula indicator" indicates when a cell contains a formula
        (a small blue rectangle is placed in a corner of the cell).`
      </div>
    </li>
    <li>
      <div align="justify">
        <em>Headers / footers</em>.
        Headers and footers can be defined separately for each sheet in the
        workbook.
        In addition, a <code>&lt;pages&gt;</code> code can be inserted in
        the header or footer for printing the page number.
      </div>
    </li>
    <li>
      <div align="justify">
        <em>Formatted data</em>.
        Formatted data can be pasted from the clipboard.
      </div>
    </li>
    <li>
      <div align="justify">
        <em>Zooming</em>.
        KSpread supports different levels of zooming.
      </div>
    </li>
  </ol>

<!--                                  KUGAR                                  -->
<p align="justify">
  <a name="kugar_changelog"><u>Kugar (Report Generator)</u>.</a></p>
  <ol type="disc">
    <li>
      <div align="justify">
        <em>GUI Report Template Designer</em>.
        Kugar has a new flexible, WYSIWYG report template designer.
        <ul type="circle">
          <li>
            <div align="justify">
              <em>Template management</em>.
              Ability to create, load and save report templates for the
              report engine.
            </div>
          </li>
          <li>
            <div align="justify">
              <em>Report bands</em>.
              Automated creation of report bands, such as headers, footers
              and details.
            </div>
          </li>
          <li>
            <div align="justify">
              <em>Report items and property editor</em>.
              Easy placing, moving and resizing of report items (such as
              labels, fields and lines) in templates using the item's
              "property editor".
            </div>
          </li>
          <li>
            <div align="justify">
              <em>Internationalization</em>.
              Full Unicode and bidi support in the designer and templates.
            </div>
          </li>
        </ul>
      </div>
    </li>

    <li>
      <div align="justify">
        <em>Documentation</em>.
        <ul type="circle">
          <li>
            <div align="justify">
              <em>Tutorial</em>.
              A brief guide to business reporting with Kugar.
            </div>
          </li>
          <li>
            <div align="justify">
              <em>Designer user's guide</em>.
            </div>
          </li>
          <li>
            <div align="justify">
              <em>Programmer's guide</em>.
              A complete reference for programmers with detailed examples,
              especially regarding the use of Kugar's report viewer as
              a <a href="http://www.trolltech.com/">Qt Designer</a> plugin.
            </div>
          </li>
          <li>
            <div align="justify">
              <em>Kugar data formats</em>.
              The
              <a href="http://www.w3.org/TR/REC-html40/sgml/dtd.html">DTD</a>
              (Document Type Definition) for Kugar's report
              data and template file format descriptions, including ranges
              of possible attribute values and other detailed explanations.
            </div>
          </li>
        </ul>
      </div>
    </li>

    <li>
      <div align="justify">
        <em>Kugar Report Engine</em>.
        <ul type="circle">
          <li>
            <div align="justify">
              <em>Multiple detail levels</em>.
              Kugar supports reports with complicated structures, such as
              master-detail reports.
            </div>
          </li>
          <li>
            <div align="justify">
              <em>Detail header and footer bands</em>.
            </div>
          </li>
          <li>
            <div align="justify">
              <em>Date formats</em>.
              Added <code>DDMMYY_PERIOD</code> (<em>e.g.</em>,
              <code>25.02.02</code>) and <code>DDMMYYYY_PERIOD</code>
              (<em>e.g.</em>, <code> 25.02.2002</code>) date type output
              formats for Fields, Specials and CalculatedFields. The numbers
              11 and 12 can be used in report templates.
            </div>
          </li>
        </ul>
      </div>
    </li>

    <li>
      <div align="justify">
        <em>Miscellaneous</em>.
        <ul type="circle">
          <li>
            <div align="justify">
              <em>Shared library and headers</em>.
              The Kugar report engine is compiled as a shared library
              (<code>libkugar.so</code>) to facilitate further development.
            </div>
          </li>
          <li>
            <div align="justify">
              <em>Samples</em>.
              Sample data files, sample templates and samples for the new
              "multiple details" feature are now included.
            </div>
          </li>
        </ul>
      </div>
    </li>
  </ol>

<!--                                 FILTERS                                 -->
<p align="justify">
  <a name="filters"><u>Filters</u>.</a></p>
  <ol type="disc">
    <li>
      <div align="justify">
        <em>AbiWord</em>.
        New import functionality includes: styles
        (including character-based ones); images; hyperlinks;
        conversion of AbiWord fields to KWord variables (where possible) or
        regular text; forced page and line breaks; page format and margins;
        tabulators; and ignored word lists.
        <br />
        New export functionality includes: styles; inlined images
        (non-PNG images are first converted to PNG); hyperlinks;
        conversion of KWord variables to AbiWord fields (where possible);
        forced page and line breaks; page format and margins; tabulators;
        and ignored word lists.  In addition, the output has been cleaned
        of much redundant information.
      </div>
    </li>
    <li>
      <div align="justify">
        <em>HTML</em>.
        The import filter has been completely rewritten and is now based on
        KHTML, the KDE HTML parsing and rendering engine.  It currently
        supports only basic HTML, not including CSS.
        <br />
        New export functionality includes:  inlined images (saved in a
        separate directory); tables; hyperlinks; lists (including multiple
        levels); page format and margins (enhanced mode only); and
        user-definable encoding.  The conversion modes have been renamed
        ("document structure" to "light", "direct" to "basic" and
        "style" to "enhanced").
      </div>
    </li>
    <li>
      <div align="justify">
        <em>LaTeX</em>.
        New export functionality includes: Unicode support with omega;
        variables; tables (including borders); and proper indentation.
        Many bugs have been fixed.
      </div>
    </li>
    <li>
      <div align="justify">
        <em>Plain text</em>.
        The plain text filters (import / export) have a new dialog.
        New import functionality includes: user-definable encoding;
        and (optional) smart input filtering (for identifying paragraphs).
        New export functionality includes:  user-definable encoding;
        user-definable end-of-line sequences (<code>LF</code>, <code>CR</code>
        or <code>CR</code>/<code>LF</code>).
      </div>
    </li>
    <li>
      <div align="justify">
        <em>RTF</em>.
        New export functionality includes: Unicode support; and support for
        date, time and page variables (other variables are converted to text).
      </div>
    </li>
    <li>
      <div align="justify">
        <em>SGML DocBook</em>.
        New export functionality includes: tables; images (saved in a
        seperate directory); lists (one level only); and hyperlinks.
      </div>
    </li>
  </ol>

<!--                                KARBON 14                                -->
<!-- SKIP THIS RELEASE
<p align="justify">
<h3><a name="karbon14_changelog">Karbon 14</a></h3>
  Karbon14 is a new vector drawing application, which is being released
  in a <em>beta</em> state in this
  release.  Its current features include: basic path based shapes;
  basic affine transformations; anti-aliased rendering with transparency;
  Illustrator file import; Encapsulated PostScript (EPS) import
  and export; and SVG export.
</p>
-->
<!--                             END CHANGES                                 -->
<?php
  include("footer.inc");
?>
