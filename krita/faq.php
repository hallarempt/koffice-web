<?php
  $page_title="Krita FAQ";
  $site_root='../';
  include("koffice.inc");
  include("header.inc");
?>

<?php
$faq = new FAQ();
$faq->addQuestion("What is Krita?", "Krita, formerly known as KImageShop and Krayon, is the painting program and image editor for the KOffice Suite. It's intended to be suitable for all your image creation and editing needs, such as making web images, touching up scanned photographs, creating original art, or anything else you might need to do with bitmapped images.");
$faq->addQuestion("Yet another Paint Program?", "Currently a few high-end painting applications, some free and some proprietary, are available for unix and Linux with similar functions to what is planned for Krita. What makes Krita different, and special, is ease of use compared with other high-end painting apps and full integration with KOffice and KDE generally.  Ease of use is important to amateur users but even more important to professional artists who must spend many hours a day using such apps to work with images. You will never have to read a 300 page book, purchase expensive addons, attend training workshops or use scripting languages designed for programmers to access Krita's powerful features.  While such complexity can be added if you so choose, the intention is to provide a very powerful and easy to use suite of tools in the basic application.");
$faq->addQuestion("What are Krita's Development Goals ?", "Krita is primarily a painting program, although it has image processing capabilities and more can be added with plugins.  This means that Krita is intended for creative people who desire to paint and draw with computer software as they do with real-world tools in an art studio.  If you are looking for a tool primarily to apply effects to existing images or photos, to catalogue images, or to view images other software may be more suitable.  Ease of use and power as a painting application will always have a higher priority in Krita's ongoing development. For a while Krita may have fewer special filters and special effects than some competing apps.  These can be added later, and are already well compensated for by your ability to use Krita to more quickly create and edit images in an intuitive way, saving your data with full layer and channel information intact, and importing/exporting common image formats used in computer art.");
$faq->addQuestion("How Does it Work?", "The core of Krita manages the image drawing and display engine, and defines the basic document structure and toolset. Normally image data is edited and saved in 32 bit mode within Krita, using layers and channels to store image data structured with Krita's native XML-based format. Because Krita uses object oriented programming, it can easily be extended to 64 bit and allow alternate ways of accessing the data such as different color modes. Krita uses the KOffice library for consistency with other KOffice parts and common functionality, including standard XML file format encoding and decoding and embedding.<br />
Using native and foreign plugins, and parts which can reuse other KDE components, additional tools and utilities can be added as needed. This means that Krita is light-weight and fast, loading additional filters and tools when you need them. The use of components also allow Krita extensions to be more easily be written by programmers everywhere, without affecting the core application. Advanced gradient editors and other utilities can be implemented as parts and plugins in the future, for example.  Scripting using Python (a higher level, object-oriented programming language) is also planned to allow customization and even more features without having to recompile and install the application from source.<br />
Krita uses XML as its native file format. This allows import filters for almost every type of image file format imaginable to be created more easily than for binary-only or closed file formats. It also allows other programs to more easily import Krita files. Import/Export of the common image formats is already realized using Qt libraries. Qt is the gui toolkit that all of KDE is built on. These formats include jpg, png, gif (import only), xpm, tiff and bmp. More exotic and specialized import/export filters will be added later as needed.");
$faq->addQuestion("What Does it Do?", "The following make up Krita's core application and toolset. Many of these features are already quite usable and others are incomplete so far. All of these features must be complete and well tested for the first official release.
<ul>
<li>brushes, drawing and layer editing tools (partly complete)</li>
<li>RGB, RGBA and Grayscale color modes with adjustable color selectors (complete)</li>
<li>Import/Export of png, jpg, xpm, tiff and bmp images, including color-indexed images. Import of gif images. (complete)</li>
<li>an XML file format which saves and loads layer and channel information and full 32 bit image data (complete)</li>
<li>color editing and selection tools (partly complete)</li>
<li>dithering, transparency, blending and color reductions (partly complete)</li>
<li>multiple views of the same image (complete)</li>
<li>multiple images in the same view (complete)</li>
<li>gradients and patterns (under development)</li>
<li>cut,copy and paste between images and layers using rectangular area and other basic selection methods (incomplete)</li>
<li>masking of selected regions during painting operations (under development)</li>
<li>user-definable brushes (partly complete)</li>
<li>adjustable zoom levels (mostly complete)</li>
<li>scaling of images, selections and layers (incomplete)
<li>graphical access to layer and channel information (partly complete)</li>
<li>import/export of xcf (Gimp) image files (incomplete)</li>
<li>embedding in other KOffice apps (needs testing)</li>
<li>user-oriented documentation of all the above basic functionality (incomplete)</li>
</ul>
Other planned features: The following features are not essential for an official release but will be added over subsequent releases.
<ul><li>HSV and CMYK color models</li>
<li>a wider range of painting and drawing tools</li>
<li>image manipulation filters for advanced import/export</li>
<li>image effect plugins shared with other KDE applications</li>
<li>wide range of region selection methods, including fuzzy selection and boundary detection</li>
<li>direct, real-time import of 3D image data, scientific and medical image data, and data from consumer devices such as digital cameras and scanners using scanlines and other import methods</li>
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
$faq->addQuestion("How Do I Get Involved?", "If you are a potential user, a professional or amateur artist or web designer, the easiest way to get involved is simply to download and test Krita.  Your feedback and bug reports will be very useful in helping to define the direction Krita's development takes to better meet your needs. Because Krita is still in the fairly early stages of develoment, you can have a greater role in making sure that Krita evolves into the kind of application you want and need.<br />
If you are a software developer or documentation writer who wants to get involved please contact the Krita mailing list or the current maintainer.  Your help is always welcome.  Almost all of the code is written in C++ using Qt and Kde libraries.  Documentation is initially written in English in DocBoox XML format and then translated into dozens of national languages. The final output is in HTML in each language for which translations are made.<br />
If you represent a company or organization which wants its specific software and/or hardware products to smoothly interface with Krita, please contact the current maintainers or the Krita mailing list. We will be happy to work with you.  Source code is open and freely available to help you better write your own plugins and interfaces, and your questions will be answered in the mailing list.  Dozens or even hundreds of KDE developers not directly working on Krita to pitch in from time to time to look into specific technical issues and answer questions.");
$faq->show();
?>
<?php include("footer.inc"); ?>

