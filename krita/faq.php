<?php
  $page_title="Krita FAQ";
  $site_root='../';
  include("koffice.inc");
  include("header.inc");
?>

<?php
$faq = new FAQ();

$faq->addQuestion("What is Krita?",
"Krita, formerly known as KImageShop and ------, is the painting program and image editor for the KOffice Suite.
 It is intended to be suitable for all your image creation and editing needs, such as creating original art,
 making images for websites,
 touching up scanned photographs or anything else you might need to do with bitmapped images.");

$faq->addQuestion("Yet another Paint Program?",
"Why, yes. Why not? As a KOffice application, Krita should integrate with KDE more tightly than the Gimp
 could ever hope to do. By following the KDE User Interface Design guidelines, users won't have to switch
 between user interface paradigms. And, last but not least, different projects can work towards different
 design goals. The Gimp isn't designed for the creation of original art; it is an image manipulation application,
 not a paint application. Krita could become that free paint application that is still missing.");

$faq->addQuestion("What are Krita's Development Goals ?",
 "Krita is primarily a painting program, although it has image processing capabilities.
  This means that Krita is intended for creative people who desire to paint and draw with computer software as they do with
   real-world tools in an art studio.  If you are looking for a tool primarily to apply effects to existing images or
   photos, to catalogue images, or to view images other software may be more suitable.  Ease of use and power as a
   painting application will always have a higher priority in Krita's ongoing development.");

$faq->addQuestion("How Does it Work?",
"This question is answered globabally in <a href=\"/developer/krita/\">Developing Krita</a>. The most complete answer
can of course be found in the <a href=\"http://webcvs.kde.org/cgi-bin/cvsweb.cgi/koffice/krita\">Krita source.</a>  Krita
is still small enough that it is fairly easy to 'get into' the codebase, and start adding features. It's not yet
ready for a plugin-framework or an extensible toolset.");

$faq->addQuestion("What Does it Do?",
 "Or rather, what <i>should</i> it do, and what does it do already:
<ul>
<li>brushes, drawing and layer editing tools (not complete)</li>
<li>RGB, RGBA and CMYK color modes with adjustable color selectors (complete) Grayscale needs to be done.</li>
<li>Import/Export of png, jpg, xpm, tiff and bmp images, including color-indexed images. Import of gif images. (complete)</li>
<li>an XML file format which saves and loads layer and channel information and full 32 bit image data (complete)</li>
<li>color editing and selection tools (partly complete)</li>
<li>dithering, transparency, blending and color reductions (partly complete)</li>
<li>multiple views of the same image (complete)</li>
<li>multiple images in the same view (complete)</li>
<li>gradients and patterns (under development)</li>
<li>cut,copy and paste between images and layers using rectangular area and other basic selection methods (incomplete)</li>
<li>masking of selected regions during painting operations (under development)</li>
<li>user-definable brushes (under development)</li>
<li>adjustable zoom levels (mostly complete)</li>
<li>scaling of images, selections and layers (incomplete)</li>
<li>graphical access to layer and channel information (partly complete)</li>
<li>import/export of xcf (Gimp) image files (complete, in as far as ImageMagick supports this)</li>
<li>embedding in other KOffice apps (needs testing)</li>
<li>user-oriented documentation of all the above basic functionality (incomplete)</li>
</ul>
Other planned features:
<ul>
<li>HSV and Grayscale color models</li>
<li>All painting and drawing tools</li>
<li>image manipulation filters for advanced import/export</li>
<li>image effect plugins shared with other KDE applications</li>
<li>wide range of region selection methods, including fuzzy selection and boundary detection</li>
<li>direct, real-time import of 3D image data, scientific and medical image data, and data from consumer
devices such as digital cameras and scanners using scanlines and other import methods</li>
<li>scripting with the Python language</li>
<li>dockable toolbars</li>
</ul>
KParts architecture and plugins allow:
<ul>
<li>plugins for effects and operation on images and selections</li>
<li>additional tools</li>
<li>additional filters</li>
<li>components loaded as needed</li>
</ul>
");
$faq->addQuestion("When will it be released?",
"Well, Krita may be part of KOffice, it's not nearly usable enough to be released together with KOffice. I'd
love to be able to say that Krita will be done in time for Koffice 1.4, but that would be promising
something I cannot promise. If people pitch in and start working on features, we might have a
promising alpha by that time.");
$faq->addQuestion("How Do I Get Involved?", "If you are a potential user, a professional or amateur artist or web designer,
there is currently nothing you can do for Krita &mdash; but keep an eye open for announcements.<br />
But If you are a software developer or documentation writer who wants to get involved please contact the Krita mailing list or
 one of the contributors, Patrick or me, Boudewijn.  Your help is always welcome.  All of the code is written in very
 clear C++ using Qt and Kde libraries. It's not hard, really...<br />
   Documentation is initially written in English in DocBoox XML format and then translated into dozens of national languages.
    The final output is in HTML in each language for which translations are made.<br />
If you represent a company or organization which wants its specific software and/or hardware products to smoothly interface
with Krita, please contact the current maintainers or the Krita mailing list. We will be happy to work with you.
 Source code is open and freely available to help you better write your own plugins and interfaces, and your
 questions will be answered in the mailing list.  Dozens or even hundreds of KDE developers not directly working
 on Krita to pitch in from time to time to look into specific technical issues and answer questions.");
$faq->show();
?>
<?php include("footer.inc"); ?>

