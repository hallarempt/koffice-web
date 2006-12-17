<?php
  $page_title="Krita Developer Information";
  $site_root='../../';
  include("koffice.inc");
  include("header.inc");
?>

   <h2>Developing Krita</h2>

   <p><i>Boudewijn Rempt</i></p>

	<h3>Contents</h3>
	<ul>
		<li><a href="painters.php">Paint devices and Painters</a></li>
		<li><a href="../apidocs/krita/html/index.html">Class documentation (doxygen)</a></li>
	</ul>

   <h3>Overview of the Krita Architecture</h3>

    <p>Krita has been designed as a full-featured bitmap paint application. That means that
      is not based on the QPainter/QPaintdevice combo (as KPaint is), but that it seeks to
      provide its own low-level 2d canvas library. This naturally makes for some complexity,
      and this document attempts to provide an overview of the Krita architecture for would-be
      hackers. (Who would be <i>very, very</i> welcome.)</p>

   <p>This document contains my understanding of Krita, as I came to grasp it after a long series of email
      exchanges with Krita's architect, Patrick Julien in October 2003 on the
      <a href="http://lists.kde.org/?l=kde-kimageshop&amp;r=1&amp;b=200310&amp;w=2">Krita mailing list</a>. Corrections
      are welcome.</p>

    <p>When reading the Krita source, a copy of the GOF book,
      <a href="http://www.aw-bc.com/catalog/academic/product/0,4096,0201633612,00.html">Design Patterns</a> is very useful.
      You will find many patterns used in Krita &mdash; strategy, flyweight, facade, factory. Many of the classes
      are even named after the pattern they use.</p>

    <p>Krita has been through at least three architectural phases, and traces from earlier phases can still be found
      everywhere in the code. Don't let references to KisKrayon or KisPixelPacket confuse you; those are obsolete.
      There is little doubt that these redesigns were necessary as new generations of developers discovered problems
      with earlier code, but the
      <a href="http://www.joelonsoftware.com/articles/fog0000000069.html">effect</a>
       has been that Krita still isn't anywhere near usefulness, even after
      four years. Let's change that by cheerfully building on what we have now, and never, ever breaking
      a feature again!</p>

    <h3>The Core</h3>

    <p>The Krita core is a 2d canvas, comparable to <a href="http://doc.trolltech.com/3.2/qpainter.html">QPainter</a>/
    <a href="http://doc.trolltech.com/3.2/qpaintdevice.html">QPaintDevice</a>, but designed for
        large images. It supports alpha transparency, multiple color models (RGB, CMYK)
        and compositing. This part of Krita could potentially be decoupled from the application
        and form the basis of a 2d graphics library like <a href="http://www.imagemagick.org/">ImageMagick</a>
        or <a href="http://www.artofcode.com/libart.html">LibArt</a>. Potentially, because the API
        <a href="http://websvn.kde.org/*checkout*/branches/koffice/1.6/koffice/krita/core/kis_painter.h">KisPainter</a> and
        <a href="http://websvn.kde.org/*checkout*/branches/koffice/1.6/koffice/krita/core/kis_paint_device.h">KisPaintDevice</a>
        provide is used throughout the application.</p>

    <p>Paint actions are generally implemented in KisPainter, but as soon as color compositing
       is necessary, the action is deferred to the correct color strategy (which have <a href="http://websvn.kde.org/*checkout*/branches/koffice/1.6/koffice/krita/kritacolor/kis_colorspace.h">KisColorSpace</a> as a base), for instance
       <a href="http://websvn.kde.org/*checkout*/branches/koffice/1.6/koffice/krita/colorspaces/rgb_u8/kis_rgb_colorspace.h">KisRgbColorSpace</a>.
       In a sense, KisPainter is a facade for the color strategies.</p>

    <p>Image data is stored in paint devices:
    <a href="http://websvn.kde.org/*checkout*/branches/koffice/1.6/koffice/krita/core/kis_paint_device.h">KisPaintDevice</a>. To display this image data, a KisPaintDevice can be used to create a <a href="http://websvn.kde.org/*checkout*/branches/koffice/1.6/koffice/krita/core/kis_paint_layer.h">KisPaintLayer</a>, a subclass of <a href="http://websvn.kde.org/*checkout*/branches/koffice/1.6/koffice/krita/core/kis_layer.h">KisLayer</a>.
    In order to show the image on screen, all layers are composited using the <a href="http://websvn.kde.org/*checkout*/branches/koffice/1.6/koffice/krita/core/kis_merge_visitor.h">KisMergeVisitor</a>, which visits the different kinds of KisLayer (which are grouped in a tree-like structure with the <a href="http://websvn.kde.org/*checkout*/branches/koffice/1.6/koffice/krita/core/kis_group_layer.h">KisGroupLayer</a> class). The composited result is put in a KisPaintDevice, which is then rendered to a <a href="http://doc.trolltech.com/3.2/qimage.html">QImage</a>
       in the <tt>convertToQImage</tt> method of the relevant color strategy.</p>

    <p>Krita's core is <a href="http://websvn.kde.org/branches/koffice/1.6/koffice/krita/core/tiles/">tile</a>-based,
      as with all good paint applications. Tiles contain the actual pixel data, that
       is the chunk of memory where three, four of five bytes in a row represent the red, green, blue, alpha or cyan, magenta,
       yellow, black and alpha components that form one pixel. Whenever a pixel in a 64x64 pixel tile changes, the
       tile is saved to make it possible to undo the change. This is encapsulated in the <tt>beginTransaction</tt>
       and <tt>endTransaction</tt> methods of KisPainter.</p>

      <p>See <a href="painters.php">Paint devices and Painters</a> for more information on
	working with raster images and Krita.</p>

    <h3>Images and documents</h3>

    <p>The document model of Krita is contained in
      <a href="http://websvn.kde.org/*checkout*/branches/koffice/1.6/koffice/krita/ui/kis_doc.h">KisDoc</a>.
      A document contains one or more images and each image can contain one or more layers.</p>


    <h3>User interface</h3>

    <p>Krita is a KOffice application and therefore uses the standard KOffice GUI wrapper that
      creates a multiple document/view shell with toolbars, menubars and all that sort of thing.
      The basis is in
      <a href="http://websvn.kde.org/*checkout*/branches/koffice/1.6/koffice/krita/ui/kis_view.h">KisView</a>;
      this class constructs all the user interface features like the brush selector or the color
      selectors. Code for dialogs and widgets is kept in the
      <a href="http://websvn.kde.org/branches/koffice/1.6/koffice/krita/ui">ui directory</a>. However, it
      must be admitted that Krita's UI is mess currently; some of the dialogs don't work, and what there
      is looks not too polished. This is a prime area for an ambitious hacker to put in some good
      work...</p>


    <h3>Tools</h3>

    <p>This is a severely underdesigned part of Krita. A tool, like a brush, a lasso, a convolver or
      an painter's knife, is based on
      <a href="http://websvn.kde.org/*checkout*/branches/koffice/1.6/koffice/krita/ui/kis_tool_paint.h">KisToolPaint</a> or
      <a href="http://websvn.kde.org/*checkout*/branches/koffice/1.6/koffice/krita/ui/kis_tool_non_paint.h">KisToolNonPaint</a>,
      both ultimately based on
      <a href="http://websvn.kde.org/*checkout*/branches/koffice/1.6/koffice/krita/ui/kis_tool.h">KisTool</a>,
      and should provide:</p>

      <ul>
        <li>An icon to show up in the tool palette</li>
        <li>A dialog to configure properties</li>
        <li>Code in KisPainter that implements the tool's action if it is a painting tool,
           or other code somewhere else if it is a non-painting tool, like a selection.</li>
        <li>Code to give immediate visual feedback on-screen, like the marching ants
          rectangle for a rectangular select.</li>
      </ul>

    <p>Tool code is in <a href="http://websvn.kde.org/branches/koffice/1.6/koffice/krita/plugins/tools">tools</a>.
        Tools, like lot of other parts of Krita, are actually loaded as plugins. This makes it easy to develop new tools outside of the Krita tree.
    </p>

    <p>Tools can make use of <a href="http://websvn.kde.org/*checkout*/branches/koffice/1.6/koffice/krita/core/kis_resource.h">KisResource</a>s.
      Resources are, for instance,
      <a href="http://websvn.kde.org/*checkout*/branches/koffice/1.6/koffice/krita/core/kis_pattern.h">patterns</a>,
      <a href="http://websvn.kde.org/*checkout*/branches/koffice/1.6/koffice/krita/core/kis_brush.h">brushes</a> (based on Gimp's brushes) or
      <a href="http://websvn.kde.org/*checkout*/branches/koffice/1.6/koffice/krita/core/kis_gradient.h">gradients</a>. Krita can also use Gimp's pipe brushes.
      </p>

    <p>There is no support for fancy procedural brushes yet. (But look at the KisImagePipeBrush class for an
	example of how it could be done.)</p>

    <p>Krita is has a very modular approach, using the <tt>Plugin</tt> concept of <tt>KParts</tt>. Most tools, paint operations, filters, colorspaces</a>, and parts of the UI are implemented as plugins. Most of them can be found in the <a href="http://websvn.kde.org/branches/koffice/1.6/koffice/krita/plugins/">plugins directory</a> (the colorspaces are in <a href="http://websvn.kde.org/branches/koffice/1.6/koffice/krita/colorspaces/">colorspaces</a>) </p>

    <h3>Design documents</h3>

    <p>The most relevant design documents can be found in Krita's SVN, and is in
      <a href="http://websvn.kde.org/branches/koffice/1.6/koffice/krita/doc/">doc</a> (although some documents are very specific or outdated). Earlier design
      documents, with a mostly historical interest are <a href="overall_design.txt">Overall Design</a>
      and <a href="gui_design.txt">Gui Design</a>.</p>


    <h3>Envoi</h3>

    <p>Krita has the potential to become a very nice, possibly even a great, paint application. Keeping in mind that
      <a href="http://www.gimp.org">the Gimp</a> has the image-messing niche pretty much sewn up, and that
      a bitmap paint app is not a vector mangle app, the direction for Krita seems clear: a <i>creative</i> paint application,
      easy to use, exciting to work with.</p>


<?php
   include("footer.inc");
?>
