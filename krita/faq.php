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
   photos, to catalog images, or to view images other software (such as Digikam) may be more suitable.  Ease of use and power as a
   painting application will always have a higher priority in Krita's ongoing development.");

$faq->addQuestion("How Does it Work?",
"This question is answered globally in <a href=\"/developer/krita/\">Developing Krita</a>. The most complete answer
can of course be found in the <a href=\"http://websvn.kde.org/trunk/koffice/krita\">Krita source.</a>  Krita
is still small enough at under a tenth of the code size of the Gimp that it is fairly easy to 'get into' the codebase, and start adding features. 
Almost all functionality, from color models to tools, from filters to file formats, from colour pickers screenshot grabbers 
is implemented as plugins on a small core. You could start you very own first Krita plugin today by simply following the 
lead of the example plugin");

$faq->addQuestion("What Does it Do?",
 "Or rather, what <i>should</i> it do, and what does it do already:</p>
<ul>
<li>brushes, drawing and layer editing tools (not complete)</li>
<li>Color management using Little CMS</li>
<li>RGB, RGBA and Grayscale color modes with adjustable color selectors. CMYK is implemented but buggy at the moment.</li>
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
<li>Scripting using kjsembed</lI>
</ul>
<p>
Other planned features:
</p>
<ul>
<li>HSV, Wet & Sticky and Wet Canvas color models</li>
<li>image manipulation filters for advanced import/export</li>
<li>wide range of region selection methods, including fuzzy selection and boundary detection</li>
<li>scripting with the Python language</li>
</ul>
<p>
KParts architecture and plugins allow:
</p>
<ul>
<li>plugins for effects and operation on images and selections</li>
<li>additional tools</li>
<li>additional filters</li>
<li>components loaded as needed</li>
</ul>
<p>&nbsp;");

$faq->addQuestion("This is the Kimp, right?",
"If I had a penny for every time the Kimp was mentioned, I'd be able to do full-time development
on Krita. No, this is not the Kimp. The Kimp was a hack, a clever hack, a KDE developer created
using Perl to give the Gimp a KDE interface. This is a completely new application that doesn't share
the same design goals as the Gimp does.");

$faq->addQuestion("So, why not? Why reinvent the wheel?",
"Because we don't want to do the same thing as the Gimp.");


$faq->addQuestion("When will it be released?",
"Well, Krita may be part of KOffice, it's not nearly usable enough to be released together with KOffice.
 We're working towards inclusion in KOffice 1.4, which will be released July 7, 2005.");
$faq->addQuestion("How Do I Get Involved?", "If you are a potential user, a professional or amateur artist or web designer,
there is currently nothing you can do for Krita &mdash; but keep an eye open for announcements.<br />
But If you are a software developer or documentation writer who wants to get involved please contact the Krita mailing list or
 me, <a href=\"mailto:boud@valdyas.org\">Boudewijn</a>.  Your help is always welcome.  All of the code is written in very
 clear C++ using Qt and Kde libraries, and there's not all that much of it, a mere 50.000 lines, a tenth of
 the size of the Gimp. It's not hard, really...<br />
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

