<?php
  $page_title="KWord Features";
  $site_root='../';
  include("koffice.inc"); 
  include("header.inc");
?> 
      
      <p>
      Next to the extensive documentation KWord is shipped with this page
      provides a short overview of the most important features included in KWord.
      </p>
      
      <p>
      KWord is a wordprocessor, and this means that all the things you would 
      a wordprocessor to do are included.  Features like writing text, deleting 
      text, cut'n'copy'n'paste, assigning document formats and attributes to 
      text, setting text alignment, and naturally you can print documents on 
      any printer, Postscript printer or to PDF and fax.
      </p>
      
      <p>
      <b>Frame Orientation:</b><br />

      KWord is not page oriented like most wordprocessors are - KWord uses
      frames instead.  This means that any story is displayed in a set of
      frames where the normal pages based setup is emulated by showing one
      frame per page.  The user can create various stories and use the frames
      to position and flow the text accross columns and pages.<br />
      This system is easy, yet powerfull enough to range from simple letters to
      layouts like you see in a newspaper.
      </p>
      
      <p>
      For displaying your text you can either choose to create all frames 
      manually or set a default (comparable to a master page) in which your
      text will flow through the pages.
      You can for example tell KWord to create a new page with the same frames
      as the last page if the text does not fit. Or perhaps you like the 
      auto-resize option, which scales a frame to fit exactly around text.
      You, the author, will have complete control of every position of any frame
      for your whole document, and also the positioning of your text on new pages,
      so your document creates itself as more text is entered.
      </p>
      
      <p>
      The full control of positioning and sizing of text frames extends to 
      graphics-frames and any other frame, allowing basic DTP in KWord.
      KWord allows not just one frame set, which contains a text-document, but
      as many as you want, allowing you to create newspaper like layouts with
      ease. And as the frame sets are named, you can keep an overview of your
      work by looking at the document-structure browser of your KWord document. 
      </p>
      
      <p>
      But you cannot only insert text frames. You can also insert pictures,
      embedded objects (formulas, diagrams, KSpread tables,
      etc.) as frames. 
      </p>
      
      <p>
      Because it often happens that frames are overlapping, KWord offers some
      options here too. You can specify for each text frame if the text
      should run around overlapping frames. So you can easily let the text run
      around pictures.
      </p>
      
      <p>
      <b>Templates:</b><br />
      When you start KWord and you want to create a new document you have to
      choose a template. Here are two groups of templates: <i>Page layout</i> and
      <i>Text oriented</i>. If you choose a Page layout template all frames are free
      placeable and are not positioned by looking at the page size.  The Text 
      oriented templates always contain a frame set which is fixed to the size of 
      the page. This means frames of this frameset are positioned automatically from
      values like border sizes and the size of a header etc.
      Telling KWord to use 2 (or more) columns for a document simply means creating
      another frame per page in this basic frame set.
      In Text oriented documents all
      other frames of other frame sets are still freely placeable. So only the first
      frameset of text oriented documents acts like the pages in common
      wordprocessors.
      </p>
      
      <p>
      <b>Numbering:</b><br />
      In KWord you can do all crazy types of numberings. This means you can do
      chapter numbering (with multiple depths) and lists. You can use lower
      roman numbers, upper roman numbers, arabic numbers, lower alphabetical
      letters, upper alphabetical letters and different bullets for the
      numbering. Also you can specify the start offset.
      </p>
      
      <p>
      <b>Paragraph Settings, Indents and Tabulators:</b><br />
      For paragraphs you can set line spacing, spacing before and after the
      paragraph, configurable borders and tabulators. The tabulators are not
      full working yet, but left aligned, centered and right aligned tabs are
      already useable. Also you can set indents for the first line and the
      other lines of the paragraph.
      </p>
      
      <p>
      <b>Paragraph Layouts (Styles):</b><br />
      Each paragraph has a paragraph layout (style) which contains all settings
      about numbering, line spacing, paragraph spacing, tabulators, borders,
      indents, default font and alignment. You can create styles in the KWord
      stylist. Then you can apply such styles to paragraphs and specify quite
      exactly which settings should be updated/applied and which should be
      ignored. There are also defined some default styles for lists, headers
      and so on and you can of course add new ones. Using these styles you can
      e.g. easily make headers of different depths.
      </p>
      
      <p>
      <b>Headers and Footers:</b><br />
      You can switch on/off <i>headers</i> and <i>footers</i> in documents. You
      can define for headers and footers if they should be the same for the
      whole document, if they should be different for the first page or if they
      should be different for even and odd pages. To edit a header or footer
      you don't need to switch to another mode (like in most wordprocessors) -
      you only need to click into the frame of the header/footer and all pages
      are automatically updated.  Another advantage of the frame orientation
      :-) Headers and footers resize themselves if you add or remove text.
      </p>
      
      <p>
      <b>Ruler:</b><br />
      As you can see in the screenshots KWord has rulers. But they are also
      quite interactive. So you can change the page borders, indents and
      tabulators with some clicks and mouse movements in the rulers very fast.
      A double click on a ruler opens the page format dialogbox, btw.
      </p>
      
      <p>
      <b>Find and Replace:</b><br />
      Finding text and replacing it is also quite powerful in KWord. As search
      entry you can not only specify the text which should be searched. You can
      also say which format (font, size, color, etc.) the text should have.
      This means you can say which format types should be ignored which are
      required. E.g. you can look for the text "Something" in Times, Bold and
      everything else (size, color, etc.) doesn't matter.
      </p>
      
      <p>
      Search entries can be regular expressions and can have wildcards. Also it
      can be specified if KWord should search case sensitive or not and if only
      whole words should be looked up or not.
      </p>
      
      <p>
      For the replace entry you can also specify formats and which formats
      should be ignored (default should be used there).
      </p>
      
      <p>
      <b>Tables:</b><br />
      Totally configurable tables are realized in KWord using frames. This
      means every table cell is a frameset. Rows and columns can of course be
      resized and tables can be moved. Also text can flow around tables,
      because tables are just frames too. Cell get autoresized if the text of a
      cell doesn't fit into the cell anymore. Tables can of course flow over
      multiple pages.
      </p>

      <p>
      <b>Footnotes:</b><br />
      KWord allows to insert footnotes
      into the text. The footnote text appears in a frame at the bottom of the page,
      and the footnote number can be either automatically incremented or set manually.
      Of course KWord can handle endnotes too.
      </p>

      <p>
      <b>Autocorrection:</b><br />
      With KWord's autocorrection you can tell KWord that the first letter of
      the first word of a sentence should always be written in uppercase, when
      entering two uppercase letters to convert the second to a lower case, to
      replace normal quotes by (configurable) typographical ones and so on.
      Also there is the possibility to define more flexible rules, like a (c)
      should be replaced by a &copy; or -&gt; should be replaced by an arrow in
      font symbol and so on.
      </p>

      <p><b>Undo</b>
       KWord has multi-level undo, also known as unlimited undo levels. And just 
       about every action can be reverted with undo.
      </p>

      <p><b>Copy paste</b>
       You can copy and paste about every object there is in KWord, 
       including whole frames with their text
      </p>

      <p><b>Inline objects</b>
       Every frame can also be anchored to the text, so when you enter more text the inline
       move down with the text, allowing you to simply place a formula or a spreadsheet 
       right into your text. <br /> 
       These objects are frames, but behave as any other text when they are inline, so things
       like alignment is done just like any other text.<br />
       What about inlining one page, or one paragraph of another KWord document, for example 
       an older document which you are referring to, a simple action in KWord!
      </p>

      <p><b>Spell checking</b>
       You can spell check one word by right-clicking on that word,
       basic spell checking is naturally available in all languages (supported by ispell/aspell).
      </p>


<?php include("footer.inc"); ?>

