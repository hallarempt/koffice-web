<?php
  $page_title ='KOffice 2.0 Alpha 7 Changelog';
  $site_root = '../';
  include("koffice.inc");
  include("header.inc");
?>
<p>
  The following summarizes the major changes to the KOffice Suite since the
  release of KOffice 2.0 Alpha 6. There are many changes and refactorings in
  the libraries that are not user-visible.
</p>
<ul>
<li><a href="#koffice_libs">KOffice Libraries</a></li>
<li><a href="#kword">KWord</a></li>
<li><a href="#kpresenter">KPresenter</a></li>
<li><a href="#kexi">Kexi</a></li>
<li><a href="#krita">Krita</a></li>
<li><a href="#karbon">Karbon</a></li>
</ul>

<h3 id="koffice_libs">KOffice Libraries</h3>
<em>Flake</em>
<ul>
<li> Add support for an 3D input device called the "space navigator" and allow various new
    interaction methods specifically for it.</li>
<li>
<li>Document panning and zooming with the space navigator</li>
<li>Shape moving, rotating and resizing with the space navigator</li>
<li>Shape shadow config docker</li>
<li>Major KoPathPoint refactoring to make it more maintainable</li>
<li>Major work on path segments</li>
</ul>
<em>Other</em>
<ul>
<li>Improved painting of snap guides</li>
<li>Added bounding box snapping strategy</li>
<li>fixed some style loading/saving</li>
<li>added find in multiple text shapes</li>
<li>added copy and paste for text</li>
</ul>

<h3 id="kword">KWord</h3>
<ul>
    <li>Major work has gone into the getting ODF support better, this is done by creating test-documents
        and automatically checking if it is loaded correctly. This is commonly called unit-testting, or
        automated regression testing.  In this release the following tests were added;
        <ul>
            <li>TextContents/Lists/numberedList</li>
            <li>TextContents/Lists/embeddedBulletedList</li>
            <li>TextContents/Lists/bulletedList</li>
            <li>TextContents/Paragraph/attributedText</li>
            <li>TextContents/TextFormatting/fontSize</li>
            <li>TextContents/TextFormatting/fontColors</li>
            <li>TextContents/TextFormatting/boldAndItalic</li>
            <li>FormattingProperties/ParagraphFormattingProperties/paragraphBackgroundColor</li>
            <li>FormattingProperties/ParagraphFormattingProperties/automaticTextIndent</li>
            <li>FormattingProperties/ParagraphFormattingProperties/textAlign</li>
            <li>FormattingProperties/TextFormattingProperties/underlineStyle</li>
            <li>FormattingProperties/TextFormattingProperties/fontSize</li>
            <li>FormattingProperties/TextFormattingProperties/fontVariant</li>
            <li>FormattingProperties/TextFormattingProperties/fontName</li>
            <li>FormattingProperties/TextFormattingProperties/fontWeight</li>
            <li>FormattingProperties/TextFormattingProperties/fontStyle</li>
            <li>FormattingProperties/TextFormattingProperties/color</li>
            <li>FormattingProperties/TextFormattingProperties/underlineColor</li>
            <li>FormattingProperties/TextFormattingProperties/textBackgroundColor</li>
            <li>FormattingProperties/TextFormattingProperties/fontFamily</li>
            <li>FormattingProperties/TextFormattingProperties/underlineType</li>
            <li>FormattingProperties/TextFormattingProperties/fontPitch</li>
            <li>FormattingProperties/TextFormattingProperties/textTransformations</li>
        </ul></li>
</ul>

<h3 id="kpresenter">KPresenter</h3>
<ul>
<li>Load and save of page effects</li>
<li>Added a preview for page effects</li>
<li>Added most page effects</li>
<li>Implemented background loading/saving</li>
<li>Make it possible to change the master page</li>
</ul>


<h3 id="kexi">Kexi</h3>
<ul>
<li>Kexi reports module is improved;
<ul>
    <li>The reports module includes a chart component based on KDChart</li>
    <li>When printed, charts are vector based, not bitmap.</li>
    <li>Scripting is based on Kross now so can use any kross language</li>
    <li>Scripting for all object types is implemented so you can write things like:</li>
<code>
    function detail_onrender()
    {
        var cht = report.objectByName("Chart2");
        cht.setDataSource("select day, min(rainfall), avg(rainfall), max(rainfall)
        from tblrainfall group by day order by day asc");
        cht.setLegendVisible(false);

        var img = report.objectByName("Image1");
        img.setResizeMode("Stretch");
        img.loadFromFile(math.value("Path"));
    }
</code></ul></li>
<li>The PQXX database Driver has fixed boolean handling</li>
</ul>

<h3 id="krita">Krita</h3>
<ul>
<li>Implemented a new plugin type: pixel generators</li>
<li>Fix image recomposition</li>
<li>Support for the space navigator</li>
<li>Fix layer handling in the layer box: show the root layer</li>
<li>Support for OpenCTL based linear colorspaces</li>
<li>Support for canvas decoration plugins</li>
<li>New algorithm for the paint mixer</li>
<li>New plugin type: painting assistants</li>
<li>Reactivate the layer move tool</li>
<li>Fix tablet handling in nvidia twinview setups</li>
</ul>

<h3 id="karbon">Karbon</h3>
<ul>
<li>Ported the round corners plugin</li>
<li>Major gradient tool improvements;
    <ul><li>color stop selection</li>
    <li>changing color of single color stop</li>
    <li>snap gradient handles to bounding box</li></ul></li>
</ul>

<?php
  include("footer.inc");
?>
