<?php
  $page_title ='KOffice 1.2-RC1 Changelog';
  $site_root = '../';
  include("koffice.inc");
  include("header.inc");
?>

<p>
  The following summarizes the major changes to the KOffice Suite since the
  release of KOffice 1.2-beta2 two months ago.
</p>

<h3><a name="koffice_libs">KOffice Libraries</a></h3>
<ul>
<li>All KOffice applications now offer a readonly GUI when embedded (e.g. into Konqueror)</li>
<li>Installing KOffice into a different prefix than KDE should now work automatically</li>
<li>More DCOP calls</li>
<li>Cliparts are now previewed at their original size</li>
</ul>

<h3><a name="kword">KWord</a></h3>
<em>Layout/painting fixes:</em>
<ul>
<li>Fixed WYSIWYG algorithm, no more negative spaces at some zoom levels.</li>
<li>Transparency painting fixes: transparent frames, including text frames.
Note that transparent images do not print properly with the current Qt, Qt 3.1 will fix it.</li>
<li>Footnote layout fix, when multiple footnotes are on the same page and the last one won't fit.</li>
<li>Improved algorithm for the way the text flows between frames of the same frameset.</li>
<li>Zigzag lines for background checked words.</li>
<li>Fixed paragraph height increasing when inserting a footnote.</li>
<li>Fixed the white lines during the painting of inline frames.</li>
<li>Fixed footer layout in some first/even/odd footer settings.</li>
<li>Fixed baseline alignment for variables.</li>
<li>Delete overflowing frame (in auto-resize mode) when removing all text from it.</li>
<li>Compress repaint events coming from the background spell-checking.</li>
</ul>

<em>Bugfixes:</em>
<ul>
<li>Several fixes for the readonly case.</li>
<li>Unified picture handling (images and cliparts).</li>
<li>Improvements to frame dialog when opened for multiple frames, many crashes fixed.</li>
<li>Fixed frame-creation rectangle remaining visible in margin after right click.</li>
<li>Many fixes for the background spellchecking.</li>
<li>Many fixes for "Insert File" (pictures, embedded objects, inline frames,...).</li>
<li>Ability to use the text view mode for any text frameset.</li>
<li>Embedded document must be selected before clicking on them starts editing them.</li>
<li>More KOffice-1.1 compatibility on saving (when explicitely requested).</li>
<li>Save correct variable value even when variable codes are displayed.</li>
<li>When making an inline frame non-inline, ensure it appears on top (bigger z-order).</li>
<li>'Copy' exports paragraph numbers with the text.</li>
<li>Keep key shortcuts when rebuilding dynamic menus (e.g. style lists).</li>
<li>Fixed 'raise frame' and 'lower frame' (handle equality case).</li>
<li>Several GUI fixes.</li>
<li>No header/footer available in DTP mode.</li>
<li>No page layout, frame resizing etc. in the text view mode.</li>
<li>More robustness in DCOP calls (to prevent crashes).</li>
<li>Faster pasting of text.</li>
<li>Fix use keyboard when frameset is set to protect content.</li>
<li>Fix reload PgUp and PgDn config.</li>
<li>Fixed disappearing frame after undo-ing deletion of inline frame.</li>
<li>Inserting a non-inline table makes the text flow around it by default.</li>
<li>Picture preview has now scroll bars for big pictures.</li>
<li>Fix save picture dialog (We can only save in the format of the internal data.)</li>
</ul>

<em>KoText library fixes</em>:
<ul>
<li>Fixed preview in paragraph dialog (was truncated).</li>
<li>Fixed font size applied by "Find/Replace with formatting" and "Autocorrection with formatting".</li>
<li>Fixed background color not applied by "Find/Replace with formatting".</li>
<li>Fixed crash when we remove "autocorrect word formatted".</li>
<li>Fixed mem leak in autocorrect dialogbox (autocorrect list was not deleted).</li>
<li>Fixed non/working undo/redo when changing paragraph settings for a whole text frameset.</li>
<li>Fixed calculation of centering (visible on very short paragraphs).</li>
<li>The height of the cursor now depends on the character on the left of the cursor
instead of being as high as the biggest char in the paragraph).</li>
</ul>

<em>Crashes:</em>
<ul>
<li>Do not crash when pasting an embedded object (not implemented though).</li>
<li>Fixed crash when removing a footnote variable.</li>
<li>Fixed crash when we close kword and "special char dialogbox" is not closed.</li>
<li>Fixed several problems with footnote layout.</li>
<li>Fixed crash when we delete style that is also used as a 'following style'.</li>
<li>Fixed crash with bookmarks.</li>
<li>Fixed several memory leaks.</li>
<li>Fixed crash when we canceled create time/date variable.</li>
</ul>

<h3><a name="kpresenter">KPresenter</a></h3>
<em>Bugfixes:</em>
<ul>
<li>Fix resize text object.</li>
<li>Fix webpresentation =&gt; display real variable value.</li>
<li>Fix autocorrection (crash/change language etc...).</li>
<li>Fix update sidebar.</li>
<li>Fix key stroke handling when text object has protect content enabled.</li>
<li>Fix group object : allow to change text object attribute, fix load close object etc...</li>
<li>Width and height spin boxes in the style dialog are now coupled when
  keep aspect ratio is in effect.</li>
<li>Fix unselect object: use right button + shift.</li>
<li>Fixed rounded rectangle + gradient.</li>
<li>Fixed saving shadowed objects (when only their color differed from
  the defaults).</li>
<li>Restored a lot of backwards compatibility (formatting, bullets, numbers,
  whitespace handling etc.)</li>
<li>Speedup in displaying of the pixmap objects.</li>
<li>Fixed the drawing of the background (no gradient when background is
  an image or a clipart).</li>
<li>Unified picture handling (images and cliparts).</li>
<li>Fix save picture dialog (We can only save in the format of the internal data.)</li>
</ul>

<em>Crashes:</em>
<ul>
<li>Fixed crash when we close KPresenter and "special char dialogbox" is not closed.</li>
<li>Fixed several memory leaks.</li>
<li>Fixed crash when we cancel insert time/date variable.</li>
<li>Fixed crash when we duplicate page and there was an embedded document.</li>
<li>Fixed crash when we split view and we try to open menu when factory() is null.</li>
<li>Fixed crash when we didn't select a slide and try to launch presentation.</li>
</ul>

<h3><a name="kspread">KSpread</a></h3>
<em>Bugfixes:</em>
<ul>
<li>Fix cancel 'add embedded document'.</li>
<li>Fix mem leak.</li>
<li>Fix copy/paste attribute.</li>
<li>Fix offset of rotated text in one case (top/middle).</li>
</ul>

<h3><a name="kugar">Kugar</a></h3>
<em>Changes:</em>
<ul>
<li>New docs for kugar and kudesigner included.</li>
<li>MIME type for *.kut files added.</li>
<li>kudesigner is now able to open *.kut files from cmd line.</li>
<li>Edit toolbar is added to kudesigner (edit and delete report objects).</li>
<li>LastPage and FirstPage tool buttons are now shown in kugar shell.</li>
<li>Shared library for kugar is now compiled and installed.</li>
<li>Sample data files are installed together with sample templates.</li>
</ul>

<em>Bugfixes:</em>
<ul>
<li>Fixed elements arrangement in kudesigner when adding or removing sections.</li>
<li>Fixed property saving for report objects in kudesigner.</li>
<li>Fixed DTD for report templates.</li>
<li>Fixed incorrect names for line's properties in kudesigner.</li>
<li>Templates are saved in utf8 in kudesigner.</li>
<li>Templates saved by kudesigner now comply with DTD.</li>
<li>Line element is displayed as line in kudesigner.</li>
<li>File-menu Save is now working</li>
</ul>

<em>Crashes:</em>
<ul>
<li>Fixed crash when we open reports with kugar shell from current dir.</li>
</ul>

<h3><a name="filters">Filters</a></h3>
<em>New Filter:</em>
<ul>
<li>WordPerfect export for KWord.</li>
</ul>

<em>KWord's RTF import filter:</em>
<ul>
<li>Add support for more underline types (double, thick, dot, dash-dot,
dash-dot-dot).</li>
<li>Add support for soft hyphens.</li>
<li>Fix inserting Unicode characters.</li>
<li>Support of hyperlinks.</li>
<li>Fixing image support.</li>
<li>Add field support.</li>
</ul>


<?php
  include("footer.inc");
?>
