<?php
  $page_title="Krita Developer Information";
  $site_root='../../';
  include("koffice.inc");
  include("header.inc");
?>

   <h2>Developing Krita</h2>

   <p><i>Boudewijn Rempt<i></p>

    <p>Krita has been designed as a full-featured bitmap paint application. That means that
      is not based on the QPainter/QPaintdevice combo (as KPaint is), but that it seeks to
      provide its own low-level 2d canvas library. This naturally makes for some complexity,
      and this document attempts to provide an overview of the Krita architecture for would-be
      hackers. (Who would be <i>very, very</i> welcome.)</p>

   <p>This document contains my understanding of Krita, as I came to grasp it after a long series of email
      exchanges with Krita's architect, Patrick Julien in October 2003 on the
      <a href="http://lists.kde.org/?l=kde-kimageshop&r=1&b=200310&w=2">Krita mailing list</a>. Corrections
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
        large images. It supports alpha transparancy, multiple color models (RGB, CMYK)
        and compositing. This part of Krita could potentially be decoupled from the application
        and form the basis of a 2d graphics library like <a href="http://www.imagemagick.org/">ImageMagick</a>
        or <a href="http://www.artofcode.com/libart.html">LibArt</a>. Potentially, because the API
        <a href="http://webcvs.kde.org/cgi-bin/cvsweb.cgi/koffice/krita/core/kis_painter.h">KisPainter</a> and
        <a href="http://webcvs.kde.org/cgi-bin/cvsweb.cgi/koffice/krita/core/kis_paint_device.h">KisPaintDevice</a>
        provide is used throughout the application.</p>

    <p>Paint actions are generally implemented in KisPainter, but as soon as color compositing
       is necessary, the action is deferred to the correct color strategy, for instance
       <a href="http://webcvs.kde.org/cgi-bin/cvsweb.cgi/koffice/krita/core/kis_strategy_colorspace_rgb.h">KisStrategyColorSpaceRGB</a>.
       In a sense, KisPainter is a facade for the color strategies.</p>

    <p>Image data is stored in layers: <a href="http://webcvs.kde.org/cgi-bin/cvsweb.cgi/koffice/krita/core/kis_layer.h">KisLayer</a>,
       a subclass of KisPaintDevice. In order to show the image on screen, all layers are composited using the
       <a href="http://webcvs.kde.org/cgi-bin/cvsweb.cgi/koffice/krita/core/visitors/kis_merge.h">KisMerge</a> visitor onto
       one KisPaintDevice, which is then rendered to a <a href="http://doc.trolltech.com/3.2/qimage.html">QImage</a>
       in the <tt>render</tt> method of the relevant color strategy.</p>

    <p>Krita's core is <a href="http://webcvs.kde.org/cgi-bin/cvsweb.cgi/koffice/krita/core/tiles">tile</a>-based,
      as with all good paint applications. Tiles contain the actual
       <a href="http://webcvs.kde.org/cgi-bin/cvsweb.cgi/koffice/krita/core/tiles/kispixeldata.h">pixel data</a>, that
       is the chunk of memory where three, four of five bytes in a row represent the red, green, blue, alpha or cyan, magenta,
       yellow, black and alpha components that form one pixel. Whenever a pixel in a 64x64 pixel tile changes, the
       tile is saved to make it possible to undo the change. This is encapsualted in the <tt>beginTransaction</tt>
       and <tt>endTransaction</tt> methods of KisPainter.</p>

    <h3>Images and documents</h3>

    <p>The document model of Krita is contained in
      <a href="http://webcvs.kde.org/cgi-bin/cvsweb.cgi/koffice/krita/core/kis_doc.h">KisDoc</a>.
      A document contains one or more images and each image can contain one or more layers.</p>


    <h3>User interface</h3>

    <p>Krita is a Koffice application and therefore uses the standard Koffice GUI wrapper that
      creates a multiple document/view shell with toolbars, menubars and all that sort of thing.
      The basis is in
      <a href="http://webcvs.kde.org/cgi-bin/cvsweb.cgi/koffice/krita/core/kis_view.h">KisView</a>;
      this class constructs all the user interface features like the brush selector or the color
      selectors. Code for dialogs and widgets is kept in the
      <a href="http://webcvs.kde.org/cgi-bin/cvsweb.cgi/koffice/krita/ui">ui directory</a>. However, it
      must be admitted that Krita's UI is mess currently; most of the dialogs don't work, and what there
      is looks not too polished. This is a prime area for an ambitious hacker to put in some good
      work...</p>


    <h3>Tools</h3>

    <p>This is a severely underdesigned part of Krita. A tool, like a brush, a lasso, a convolver or
      an painter's knife, is based on
      <a href="http://webcvs.kde.org/cgi-bin/cvsweb.cgi/koffice/krita/tools/kis_tool_paint.h">KisToolPaint</a> or
      <a href="http://webcvs.kde.org/cgi-bin/cvsweb.cgi/koffice/krita/tools/kis_tool_non_paint.h">KisToolNonPaint</a>,
      both ultimately based on
      <a href="http://webcvs.kde.org/cgi-bin/cvsweb.cgi/koffice/krita/core/kis_tool.h">KisToolInterface</a>,
      and should provide:</p>

      <ul>
        <li>An icon to show up in the tool palette</i>
        <li>A dialog to configure properties</li>
        <li>Code in KisPainter that implements the tool's action if it is a painting tool,
           or other code somewhere else if it is a non-painting tool, like a selection.</li>
        <li>Code to give immediate visual feedback on-screen, like the marching ants
          rectangle for a rectangular select.</li>
      </ul>

    <p>Tool code is in <a href="http://webcvs.kde.org/cgi-bin/cvsweb.cgi/koffice/krita/tools">tools</a>.
        Ideally, tools would be parts or some description, enabling run-time loading and adding,
        instead of compile time adding, which is what happens in
        <a href="http://webcvs.kde.org/cgi-bin/cvsweb.cgi/koffice/krita/core.kis_tool_factory.h">KisToolFactory</a>.
    </p>

    <p>Tools can make use of <a href="http://webcvs.kde.org/cgi-bin/cvsweb.cgi/koffice/krita/core/kis_resource.h">KisResource</a>s.
      Resources are, for instance,
      <a href="http://webcvs.kde.org/cgi-bin/cvsweb.cgi/koffice/krita/core/kis_pattern.h">patterns</a>,
      <a href="http://webcvs.kde.org/cgi-bin/cvsweb.cgi/koffice/krita/core/kis_brush.h">brushes</a> (based on Gimp's brushes) or
      <a href="http://webcvs.kde.org/cgi-bin/cvsweb.cgi/koffice/krita/core/kis_gradient.h">gradients</a>. Note that this
      is an architectural change that wasn't completed at the time of writing: only brushes and patterns have been ported
      to the KisResource. Gradients should still be done. Krita can now also use Gimp's pipe brushes. 
      </p>

    <p>There is no support for fancy procedural brushes yet. (But look at the KisImagePipeBrush class for an
	example of how it could be done.)</p>

    <p>There is nothing close to filters or plugins: don't be fooled by the
      <a href="http://webcvs.kde.org/cgi-bin/cvsweb.cgi/koffice/krita/plugins">plugins</a> modules; it's dead,
      and has been dead for a long time. One day plugins will be resurrected, possibly on the same
      day that kde-wide scripting for applications is implemented. (Internal to applications, not
      dcop-calls from the shell.)</p>

    <h3>Design documents</h3>

    <p>The most relevant design document can be found in Krita's CVS, and is called
      <a href"http://webcvs.kde.org/cgi-bin/cvsweb.cgi/koffice/krita/DESIGN">DESIGN</a>. Earlier design
      documents, with a mostly historical interest are <a href="./overall_design.txt">Overall Design</a>
      and <a href="gui_design.txt">Gui Design</a>.</p>

    <h3>Envoi</h3>

    <p>Krita has the potential to become a very nice, possibly even a great, paint application. Keeping in mind that
      <a href="http://www.gimp.org">the Gimp</a> has the image-messing niche pretty much sewn up, and that
      a bitmap paint app is not a vector mangle app, the direction for Krita seems clear: a <i>creative</i> paint application,
      easy to use, exciting to work with.</p>


<?php
   include("footer.inc");
?>
