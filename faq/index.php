<?php
  $page_title = "KOffice FAQ";
  $site_root= "../";
  include("koffice.inc");
  include("header.inc");
?>

<p>
 This FAQ tries to answer some frequently asked questions about KOffice
 (plus some not so frequently asked ones you might find interesting anyway).
 Please: if you have a question, take a look into this FAQ first, before asking
 the developers. They're a handful of programmers who are not being paid for
 doing this, writing a complete office suite in their spare time - this time
 they don't want to spend answering certain questions for the 100th time. If
 you have a question that is not being covered by this FAQ, please don't hesitate
 to <a href="mailto:koffice@kde.org">mail us.</a>
</p>

<p><em>Disclaimer:</em> We offer <em>no liability</em> for the contents of this FAQ document.</p>

<?php
$faq = new FAQ();


$faq->addSection("General Questions");

$faq->addQuestion("What is KOffice?",
"<p>KOffice is an integrated office suite for the <a href=\"http://www.kde.org\">KDE (K Desktop Environment)</a>
consisting of several applications like a word processor and a spread sheet.
Based on the KParts component model KOffice offers a lot of interoperability
between all its components. For example, you can embed every KOffice component
into another component (for example a KSpread table into your KWord document.)</p>"
);

$faq->addQuestion("Who are the developers and how do I contact them?",
"<p>The developers are listed in <a href=\"http://www.koffice.org/people.php\">the people page.</a>
If you want to contact the developers, the best is first to
<a href=\"mailto:koffice@kde.org\">email to the koffice mailing list</a>. In case of bugs or wishes,
please report them by using <a href=\"http://bugs.kde.org\">KDE Bugs</a>.</p>"
);

// CHECK: Krita's ML email address
$faq->addQuestion("Which mailing lists are used for KOffice?",
"<p>KOffice has two own mailing lists:</p>
<ul>
<li><a href=\"mailto:koffice@kde,org\">koffice mailing list</a></li>
<li><a href=\"mailto:koffice-devel@kde,org\">koffice-devel mailing list</a></li>
</ul>
<p>The koffice mailing list is mainly for the users of KOffice, the koffice-devel is mainly for the developers.
Please note that the write access of the koffice-devel mailing list is restricted.</p>
<p>As KOffice is part of KDE is uses some of KDE's mailing lists, for example for the translaltors.</p>
<p>Information on the mailing lists can be obtained <a href=\"http://www.kde.org/mailinglists\">here</a>.
The archives of mailing lists is <a href=\"http://lists.kde.org\">here.</a></p>
<p>Please note that for historical reasons,
<a href=\"mailto:kimageshop@kde.org\">Krita has its own mailing list</a>.</p>"
);

// CHECK: Kexi, Kugar, KPlato
$faq->addQuestion("Which KOffice application do exist?",
"<p>Following applications exist and are part of KOffice 1.3:</p>
<ul>
<li>KWord - a word processor</li>
<li>KSpread - a spread sheet</li>
<li>KPresenter - a presentation program</li>
<li>Kivio - a flowcharter</li>
<li>Karbon14 - a vector drawing program</li>
<li>KFormula - a formel editor</li>
<li>KChart - a tool for drawing charts and diagrams</li>
<li>Kugar - a database report creator</li>
</ul>
<p>Following applications are planned for future versions:</p>
<ul>
<li>Krita - an image manipulation program</li>
<li>Kexi - a database management tool</li>
</ul>"
);

// CHECK: entry sounds badly (especially PIM)
$faq->addQuestion("I would like to see application XYZ in KOffice?",
"<p>KOffice may lack some applications that people normally consider to be an
Office application. Some of these applications are in other parts of KDE,
like for example the email tool KMail is in KDE-PIM (Personal Information Management). Some other
applications are only planned for future KOffice releases.</p>"
);

// CHECK: is 1.3 out?
$faq->addQuestion("What is the current state of KOffice?",
"<p>At the time of thiw writing, KOffice 1.3 will be soon released. KOffice is released seperately
from the rest of KDE, so KOffice releases are not in sync with those of KDE.</p>"
);

// FAQ: Is KOffice stable?
/*
<qandaentry><question><para> Is &KOffice; stable? </para></question><answer>
<para>
The release versions of &KOffice; are supposed to be quite stable. While we try to offer
 as good a product as possible, &KOffice; is still a young project and will certainly
 mature in the next releases, when some parts are planned to be rewritten or replaced.
</para>
</answer></qandaentry>
*/

// CHECK!
$faq->addQuestion("Are you going to implement feature XYZ?",
"<p>First of all: certainly many features should be implemented. However,
KOffice is mainly based on the work of volunteers and thus it often lacks the needed manpower
to address many issues. If you are a developer and you lack a feature,
consider helping us and talk to us on the mailing lists.
KOffice developers are always willing to help you if you want to get your hands dirty!</p>"
);

// FAQ: What do I need for using &KOffice;?
/*
<qandaentry><question><para> What do I need for using &KOffice;?</para></question><answer>
<para>
You should use the latest Qt library, i.e. 3.0.5 (see <ulink url="ftp://ftp.trolltech.com/qt/source/">
ftp://ftp.trolltech.com/qt/source/</ulink>) and the latest <ulink url="http://www.kde.org">KDE
 libraries</ulink> (eg. 3.0.3 for &KOffice; 1.2; the next &KOffice; release will require
 KDE 3.1 and Qt 3.1). If you are compiling a development version from CVS, this information
 is not up-to-date anymore; consult the <ulink url="http://lists.kde.org">mailing list
 archives</ulink> of the koffice-devel list for information on the needed libraries or ask
 on the <ulink url="mailto:koffice at kde dot org">koffice</ulink> or
 <ulink url="mailto:koffice-devel at kde dot org">koffice-devel</ulink> lists if you run into trouble.</para>
</answer></qandaentry>
*/

$faq->addQuestion("Which license applies to KOffice?",
"<p>KOffice is an open-source project and completely free. All licences are GPL-compatible, mostly
GPL or LGPL version 2. Apart exceptions, libraries and filters are mostly LGPL, while applications are mostly GPL.</p>"
);

// CHECK: <blockquote>
$faq->addQuestion("How do I report bugs?",
"<p>Like for any KDE application, please report bugs to <a href=\"http://bugs.kde.org\">KDE Bugs.</a></p>
<p>Please avoid bug reports with meaningless contents like: \"It does not work!\", \"KOffice is bad\",
\"XYZ is much better than your KOffice!\"</p>
<p>A good bug report should first have a <em>title.</em> Try to give in a few keywords an overview of the problem!
That makes it easier for the developers to find your bug again.</p>
<p>Then, please, we need a <em>good description</em>
of the bug. How can the bug be reproduced? Does it always happen? Does something very similar work without any problem?</p>
<p>Then we need to know about the <em>software</em> of your system. If you have only installed the packages of your
distribution, then this point is not really important. But if you are using special software, like a non-gcc compiler,
or some very new developement library, then please tell us in your bug report.</p>
<p>If the bug is a message box that should not happen, then please tell us the <em>exact error message</em>.</p>
<p>If the bug is triggered by the loading of a <em>file</em>, then please add the file to the bug report or,
even better, a short example file that triggers the bug.</p>
<blockquote>Please be careful that sending a file to KDE Bugs makes it <em>public</em>,
so be careful not to send us files not meant for the public. Especially be careful that the
file does not contain for example addresses and phone numbers of third persons.</blockquote>
<p>Of course, if you are able to make a <em>patch</em> to fix the bug, it would be the optimum.</p>
<p>And finally, please, send only one bug per report!</p>"
);

$faq->addQuestion("How do I report wishes?",
"<p>You report wishes as you would do for bugs. Here too it is important to describe correctly the wish to
avoid misunderstandings. If your wish comes from another application, please do not assume that the developers
know that application! Only <em>one</em> wish per report, please! However you can create as many reports as
you want or need. One wish per report helps the developers to manage the bugs and wishes.</p>"
);

$faq->addQuestion("Can I use KOffice on Windows?",
"<p>There is on-going work of <a href=\"http://kde-cygwin.sourceforge.net\">KDE Cygwin project</a> to port
KDE to MS Windows. It is also planned to port KOffice. Just keep in mind that this port is not done
by the KOffice developers themselves, so please report bugs to the KDE Cygwin project!</p>"
);


$faq->addSection("How to get and install KOffice?");

$faq->addQuestion("How do I get and compile the KOffice sources?",
"<p>Please have a look at <a href=\"http://www.koffice.org/download/source.php\">
this page.</a></p>"
);

$faq->addQuestion("I want to be on the bleeding edge. How can I get my sources up to date?",
"<p>You need to checkout the module koffice of KDE's CVS either
by <a href=\"http://developer.kde.org/source/anoncvs.html\">anonymous CVS</a>
or by <a href=\"http://developer.kde.org/source/cvsup.html\">CVSup</a>.</p>
<p>Please keep in mind that the developement versions are not supposed to work stable!</p>"
);


$faq->addQuestion("How do I install KOffice if I am not root?",
"You have got to pass some directory where you have got write access (for example in your home directory)
 as prefix to configure. So you should type something like: <code>./configure --prefix=/home/jdoe/foo/bar</code>
 plus of course other options you might want to pass to configure. Then of course you
 don't have to do <code>su -c \"make install\"</code>, but just <code>make install</code>.</p>"
);

// FAQ:  Where can I find information on compiling Qt or the KDE libs?
// CHECK: linked Qt document is wrong, as it is not the needed param for KDE.
/*
<qandaentry><question><para> Where can I find information on compiling Qt or the KDE libs?</para></question><answer>
<para>
For Qt, have a look at the file <filename>INSTALL</filename> in your Qt root directory.</para>
<para>
See
<ulink url="http://www.kde.org/documentation/faq/index.html">http://www.kde.org/documentation/faq/index.html</ulink>
 for details on KDE.</para>
</answer></qandaentry>
*/

$faq->addQuestion("What binary distributions are there and where do I find them?",
"<p>You can find up-to-date information on available binaries and how to install them
<a href=\"http://www.koffice.org/download\">here</a>.</p>
<p>Please notice that KOffice only makes the source, binary distributions are made by third persons, even if they
are distributed by KDE servers.</p>"
);

$faq->addQuestion("Is KOffice available on CD?",
"<p>Most Linux distributions ship KOffice. So if you have an up-to-date
 Linux distribution, you probably are lucky.  I do not know of any other operating
 system vendors who ship KOffice and I do not know about any separate CDs.
 The KOffice project itself does not sell any CD-ROMs.</p>"
);


$faq->addSection("Problems compiling KOffice");

// CHECK
$faq->addQuestion("What should I do if problems occur?",
"<p>If problems occur during compiling, please:</p>
<ul>
<li>check the problems mentioned in this <a href=\"http://koffice.kde.org/install-source.phtml\">file</a></li>
<li>check whether you are using a recent kdelibs package (last stable KDE or current unstable KDE.)</li>
<li>check whether you are using the <em>correct versions</em> of all required packages:</li>
<li>check if you are really compiling with the compiler with which the C++ libraries of your system were compiled
(be it by you or by your distributor.)</li>
<!-- CHECK
<li>if it compiled for you before, but now, after some updates, it does not anymore:
remove all <filename>.deps</filename>-directories in your koffice source
tree and try again (<command>make  maintainer-clean</command> is the
safest, I think).</li>
-->
</ul>
<p>After you have checked all this but the problems still persist, contact the
<a href=\"mailto:koffice@kde.org\">koffice mailing list.</a>
 Please include information  about your system and the tail of the output of <code>make</code>.</p>
<p>Please <em>do not</em> contact the mailing list in case of errors like \"internal compiler errors\"!
This is most likely not a KOffice problem (but a compiler problem, a motherboard problem or a cooling problem.)</p>"
);

$faq->addQuestion("Error: \"aclocal not found\"",
"<p>I have done <code>make -f Makefile.cvs</code> and got \"aclocal not found\".</p>
<p>You have probably not installed automake. Install automake (and make sure that its version is recent enough.)</p>"
);

$faq->addQuestion("The file configure is missing!",
"<p>Please start with <code>make -f Makefile.cvs</code>. It will then create the file configure.</p>"
);

$faq->addQuestion("I have configured with --enable-final but I can only get a compile error",
"<p>As the developer cannot really use --enable-final, it gets easily broken.
So please try to compile without --enable-final before reporting the problem
to the <a href=\"mailto:koffice@kde.org\">koffice mailing list</a>!</p>"
);

$faq->addSection("KOffice in general");

$faq->addQuestion("Does KOffice support scripting?",
"<p>Yes, KOffice supports scripting. You can script KOffice applications
 using the scripting language of your choice thanks to the application's DCOP
 interfaces (provided that DCOP-bindings exist for your language). Using a language's
 DCOP bindings you can remote control a KOffice application via this interface.
 You can find several DCOP bindings in the kdebindings module, be it Perl, Python or even
 Java. Furthermore, using the <code>dcop</code> command line utility from kdelibs, you can
 control applications from your shell, so you can basically even script KOffice using
 bash or whatever shell you prefer. Of course you can also access these interfaces
 using a C++ library or its C wrapper.</p>"
);

$faq->addQuestion("Does KOffice support macros?",
"<p>No, we do not support macros in documents to avoid Trojan horses done with such macros.
The only feature similar to macros is the DCOP scripting, which has the advantage not to limit
you to one language.</p>"
);

$faq->addQuestion("How does KOffice print?",
"<p>KOffice prints with KDE's printing system. So you can choose between a few printing systems
like for example CUPS or lpr. KOffice applications print by using Qt's PostScript printing. This
can unfortunately lead to limitations (like for EPS files.)</p>"
);

//CHECK
$faq->addQuestion("What data format does KOffice read and write natively?",
"<p>KOffice documents are zipped files. Inside these files KOffice's data is
stored in XML files. Pictures however are directly stored as binary.</p>
<p>Up to KOffice 1.3, the XML tags used by KOffice's applications are private to
KOffice. From KOffice 1.4, we paln to switch to OpenOffice.org compatible file
formats.</p>"
);
/*
</answer></qandaentry><qandaentry><question><para> What data format does &KOffice; read and write natively?</para></question><answer>
<para>
Most &KOffice; applications store their document data as XML code (eXtensible
 Markup Language). These files are stored in a more or less human readable
 form with "tags" similar to the ones you know from HTML. Like with HTML, this
 also guarantees compatibility when the file format is going to be extended in
 the future: like an HTML browser, &KOffice; applications skip the tags that are
 unknown to them, so you're going to be able to read files created with a newer
 version of &KWord; with an older version (of course without the information
 provided by the new tags). XML is stored in simple text files and can easily
 be parsed - so it's possible to write filters e.g. in Perl.</para>
<para>
 As XML alone has some disadvantages when it comes to including binaries, embedded
 documents etc. the &KOffice; file format is actually not just XML anymore, but a
 ZIP file which contains the main document as well as embedded documents,
 pictures etc.</para>
<para>
 So the native format is XML, within a ZIP packaging, much like OpenOffice.
 If you want to save uncompressed XML files, for instance to use KOffice in
 conjunction with CVS, you can select the "Uncompressed XML files" format when
 saving. This saves everything in a directory - which means you need one
 directory per document. To reopen the document, select maindoc.xml in the
 file dialog.
</para>
*/

// CHECK: add InfoZIP's URL for unzip?
$faq->addQuestion("I am stuck without KOffice. How can I get at least the text out of the KOffice files?",
"<p>As KOffice files are zipped, you need to unzip them with any program that can handle ZIP files.</p>"
);

$faq->addQuestion("Can I convert KOffice documents to and from other formats on the command line?",
"<p>Yes, the program for this is called <code>koconverter</code>. See <code>koconverter --help</code> for more information.</p>"
);

$faq->addQuestion("Wow! The application XYZ writes XML, too! Does that mean I can easily read those documents with KOffice?",
"<p>No, unfortunately not; you still need a filter. Think of XML as a very base,
general markup language which allows you to \"create your own markup language\".
So it's more precise to say, the KOffice applications use a file format
thats based on XML. For the other application, it will be another file format based on
XML.</p>"
);

$faq->addQuestion("Which international text encodings does KOffice support?",
"<p>KOffice uses Unicode everywhere. However this unfortunately do not mean that every language will display well.</p>"
);

$faq->addQuestion("Does KOffice support languages that write right to left?",
"<p>KOffice supports languages written from right to left. Left-to-right text mixed in right-to-left text works too.
However we have not any developer that can write such languages, so any help is welcome.</p>"
);

$faq->addQuestion("Does KOffice support languages that write top to bottom?",
"<p>No, sorry! Anybody would could help us to write the code for that would be welcomed!</p>"
);

$faq->addQuestion("Does KOffice support Indic scripts?",
"<p>No, sorry, not yet! Especially KWord and KPresenter do not use Qt directly for drawing text
and therefore the support for Indic script that is in Qt 3.2 has no effect in KOffice 1.2 or 1.3.
Of course, help would be welcomed in this case too.</p>"
);


$faq->addSection("Problems common to all KOffice applications");

$faq->addQuestion("In printout, KOffice replaces some of my fonts with different fonts!",
"<p>[Thanks to Donovan Rebbechi] To make fonts printable to KOffice, the fonts in question need
 to be added to the ghostscript fontmap file, so ghostscript can find the fonts. This applies
 to TrueType as well as Type1 fonts. As KOffice doesn't necessarily use the correct ghostscript font
 names, it (respectively Qt) tries to guess them and sometimes fails on this task. This problem
 can be avoided by mapping the font names used by Qt to the correct X11 font names.
 See the following example how this can be done:</p>
<p>mapping of font names in the ghostscript fontmap:<br /><br />
<code>
/ArialBlack-Roman	/Arial_Black	;<br />
/Arnoldboecklin-Roman	/ArnoldBoecklin-ExtraBold	;<br />
<code>
</p>
<p> This problem will have to be solved within Qt; until then you will have to modify your fontmap.
 If you want to do this yourself, the following information might help you:</p>
<p>Donovan Rebbechi has written a <a href=\"http://koffice.kde.org/tools/kwdfont\">perl script</a> to make this task easier.
 You need have the  appropriate fonts in your ghostscriupt fontmap,
 (see Donovan's <a href=\"http://pegasus.rutgers.edu/~elflord/font_howto/\">Font HOWTO</a> for
 instructions) then insert the aliases generated by the script. The output
 of the script might occasionally require a little hand tweaking, but at
 least the script does most of the work. Note that the aliases must
 precede the fonts. </p>
<para>Donovan has also provided <a href=\"http://koffice.kde.org/tools/Fontmap.ms\">fontmap entries</a> for the widely used Microsoft Web Fonts.
 Just append them to your font map and fix the paths.</p>
<p>For more information, please see the <a href=\"http://pegasus.rutgers.edu/~elflord/font_howto/\">Font HOWTO</a>.</p>"
);

$faq->addQuestion("Why are bitmap fonts not supported?",
"<p>Bitmap fonts offer too few data to be printed correctly or to allow
WYSIWYG (\"What You See Is What You Get\".)</p>"
);


$faq->addSection("KWord");

//CHECK
$faq->addQuestion("What is KWord?",
"<p>KWord is the word processor of KOffice. KWord is part of the stable releases of KOffice.</p>
<p>Internally, KWord works with frames and offers two modes: text-oriented and page-oriented.</p>
<p>In the page-oriented mode, KWord handles like a DTP program. You can create frames,
position them where you want, connect them together and so on.</p>
<p>In the text-oriented mode, KWord handles like a normal word processor. No need to worry about
having to create any frame before typing your text!</p>"
);
/*
<qandaentry><question><para> What is &KWord;?</para></question><answer>
<para>
KWord is the word processor of the &KOffice;. </para>
<para>
KWord's philosophy is simple and very similar to that of Framemaker: everything's
 a frame. Unlike in MS-Word or StarWriter there isn't one text stream
 which is formatted according to the page format; in &KWord; text is always in
 a frameset consisting of several frames. Frames can be positioned anywhere on the
 page and they can be connected, so that text that doesn't fit into the first frame
 is continued in the connected frame. This may sound familiar to you if you've
 worked with DTP programs like Framemaker, QuarkXPress, Pagemaker etc. Indeed, for
 doing simple DTP the frame concept of &KWord; is well suited.</para>
<para>
This doesn't make the creation of a simple letter less easy than with other
 word processors: if you create a new document with &KWord; you can start typing
 right away, not noticing any difference, as &KWord; by default creates a frame
 for you that fits on the page and automatically creates and connects more frames
 on more pages if you're text is longer etc. So you won't ever notice the difference,
 except if you want to take advantage of all the flexibility frames can offer
 you.</para>
*/

$faq->addQuestion("Can I write my letter / papers / master thesis with KWord?",
"<p>Yes, some people have made very large documents with KWord. Just be careful that KWord has a known
problem with multi-page tables, which will probably not fixed before the release of KOffice 1.3.</p>"
);

$faq->addQuestion("Are there filters for OpenOffice Writer, MS-Word, StarWriter, RTF... ?",
"<p>Yes, there are filters for KWord. <a href=\"http://www.koffice.org/filters/1.2/index.php\">See this page for documentation.</a></p>
<p>Some filters are not always working well, as implementing a filter depends on the available documentation
of the file format.</p>
<p>Please note that in KOffice 1.3, it is recommended to save as RTF (Rich Text Format) to exchange with other word
processors!</p>"
);

$faq->addSection("KSpread");

$faq->addQuestion("What is KSpread?",
"<p>KSpread is the spread sheet application of the KOffice. KSpread is part of the stable releases of KOffice.</p>"
);

// FAQ
// CHECK
/*
</answer></qandaentry><qandaentry><question><para> Is it possible to implement new functions for &KSpread;?</para></question><answer>
<para>
Yes. Using &KSpread;'s formula language KoScript you can easily add new functionality to
KSpread.</para>

*/

$faq->addQuestion("Are there import filters for OpenOffice Calc, MS Excel, StarCalc... ?",
"<p>Yes, there are filters for KSpread. <a href=\"http://www.koffice.org/filters/1.2/index.php\">See this page for documentation.</a></p>
<p>Some filters are not always working good, as implementing a filter depends on the available documentation of the file format.</p>"
);


$faq->addSection("KPresenter");

//CHECK
$faq->addQuestion("What is KPresenter?",
"<p>KPresenter is the presentation application of the KOffice. KPresenter is part of the stable releases of KOffice.</p>
<p>You can use it for doing screen presentations or transparencies.</p>"
);
/*
<qandaentry><question><para> What is &KPresenter;?</para></question><answer>
<para>
KPresenter is the presentation application of the &KOffice;, similar to MS
 Powerpoint in the windows world. You can use it for doing screen presentations
 or transparencies.</para>
*/

$faq->addQuestion("Are there import filters for OpenOffice Impress...?",
"<p>Yes, there are filters for KPresenter. <a href=\"http://www.koffice.org/filters/1.2/index.php\">See this page for documentation.</a></p>
<p>Some filters are not always working good, as implementing a filter depends on the available documentation of the file format.</p>"
);


$faq->addSection("Karbon14");

//CHECK
$faq->addQuestion("What is Karbon14?",
"<p>Karbon14 is a vector graphics application. Karbon14 is part of the stable releases of KOffice."
);
/*
<answer><para>
&Karbon14; is a vector graphics application, similar to Corel Draw or Adobe Illustrator.
In the &KOffice; suite, &Karbon14; has taken the place of the now unmaintained &Kontour;
application.
</para></answer></qandaentry>
</qandadiv>
*/

$faq->addQuestion("But was the vector graphic application not Kontour?",
"Kontour used to be a vector drawing program. This program was not being actively maintained anymore
and was finally removed from KOffice in the year 2003. Karbon14 has taken its place.</p>"
);

$faq->addQuestion("Are there filters?",
"<p>Yes, there are filters. <a href=\"http://www.koffice.org/filters/1.2/index.php\">See this page for documentation.</a></p>
<p>Some filters are not always working good, as implementing a filter depends on the available documentation of the file format.</p>"
);

$faq->addQuestion("But then what can I do with my old Kontour files?",
"<p>Karbon14 has an import filter for Kontour files. However Karbon14 has no filter to save in the
former Kontour file format.</p>"
);

//CHECK
/*
<qandadiv id="kivio"><title>Kivio</title>
<qandaentry><question><para>What is &Kivio;?</para></question>
<answer><para>Kivio is a flowcharting application, similar to the well known Visio.
However, flowcharting is not the only thing you can do with it. Using different stencil
sets you can use it for many different kinds of diagrams.</para></answer></qandaentry>
<qandaentry><question><para>Where can I find more information on &Kivio;?</para></question>
<answer><para>Kivio is contributed and maintained by <ulink url="http://www.thekompany.com">The
Kompany</ulink>. They have a homepage for it at <ulink url="http://www.thekompany.com/projects/kivio">
http://www.thekompany.com/projects/kivio</ulink>.</para></answer></qandaentry>
</qandadiv>
*/

//CHECK
/*
<qandadiv id="kugar"><title>Kugar and Kudesigner</title>
<qandaentry><question><para>What is &Kugar;?</para></question>
<answer><para>&Kugar; is a template-based business-quality xml report generation tool.</para></answer></qandaentry>
<qandaentry><question><para>What is &Kudesigner;?</para></question>
<answer><para>&Kudesigner; is a WYSIWYG GUI report template designer for the Kugar report
engine.</para></answer></qandaentry>
<qandaentry><question><para>Where can I find more information on &Kugar; and &Kudesigner;?</para></question>
<answer><para>&Kugar; and &Kudesigner; are maintained by Alexander Dymo
&lt;<ulink url="mailto:cloudtemple at mksat dot net">cloudtemple at mksat dot net</ulink>&gt;.
The &Kugar; homepage is <ulink url="http://www.thekompany.com/projects/kugar">http://www.thekompany.com/projects/kugar</ulink>, also a
maintainer's homepage is <ulink url="http://www.cloudtemple.mksat.net">http://www.cloudtemple.mksat.net</ulink>.</para></answer></qandaentry>
<qandaentry><question><para>Are &Kugar; and &Kudesigner; multi-platform?</para></question>
<answer><para>
The &Kugar; report engine is written in pure Qt, so it can be used on Mac and
Windows platforms, too. &Kudesigner; is a KDE application, so like the rest of KDE it can be used
on Unix/X11 platforms only.</para><para>
However, there is a Qt version of &Kugar; report designer. Its sources can be
downloaded from <ulink url="http://www.cloudtemple.mksat.net">http://www.cloudtemple.mksat.net</ulink>
and compiled on the Mac and Windows platforms. Note that the Qt-edition of the report designer
is somewhat outdated, so please first contact the maintainer
(Alexander Dymo &lt;<ulink url="mailto:cloudtemple at mksat dot net">cloudtemple at mksat dot net</ulink>&gt;)
before using it.
</para></answer></qandaentry>
</qandadiv>
*/

// CHECK
/*
<qandadiv id="other"><title>Other &KOffice; programs</title>
<qandaentry><question><para> What's &KChart;/&KDiagram; and what's the difference?</para></question>
<answer>
<para>
Both &KChart; and &KDiagram; were &KOffice; parts for generating diagrams from data,
 e.g. pie and bar charts. They have been merged, and only &KChart; exists now.</para>
</answer></qandaentry>
</qandadiv>
*/

// CHECK: KFormula?

$faq->addSection("Krita");

$faq->addQuestion("What is Krita?",
"<p>Krita is an image processor for KOffice, which should be suitable for all your image creation and editing needs.</p>
<p><em>Please note that Krita is not part of KOffice stable releases yet.</em></p>"
);

$faq->addSection("Contributing to KOffice");

//CHECK
$faq->addQuestion("I like this project! How can I contribute?",
"<p>Welcome! Please send an email to the <a href=\"mailto:koffice@kde.org\">koffice mailing list<a>
and tell where you would want to help!</p>"
);
/*
<qandaentry><question><para> I like this project! How can I contribute?</para></question>
<answer>
<para>
Great. There are many fields, where help is needed (in fact, all fields).
 You might:</para>

<itemizedlist>
<listitem><para>help programming. This means development work on the main applications, new
 applications, filters (desperately needed!), plugins and datatools, more
 functions for &KSpread; ...</para></listitem>
<listitem><para><ulink url="http://koffice.kde.org/getinvolved/doc-help.html">write documentation</ulink></para></listitem>
<listitem><para>translate &KOffice;</para></listitem>
<listitem><para>draw graphics</para></listitem>
<listitem><para>help maintaining the web page</para></listitem>
<listitem><para>fix small bugs if you find them and send a patch to <email>koffice at kde dot org</email>.</para></listitem>
<listitem><para><ulink url="http://koffice.kde.org/support">
donate</ulink> money or hardware :-) Yes, this is needed in free software
development, too :)
</para></listitem> </itemizedlist>

<para>If you want to help the &KOffice; developers (or even become one) please
<ulink url="http://koffice.kde.org/contact.phtml#lists">subscribe</ulink> to our
mailing lists so you know what's needed and we avoid duplicating work.
Please don't be angry if you don't get instant replies - everybody has a lot to do.
</para> </answer> </qandaentry>

<qandaentry><question><para> I
want to help with documentation. How do I start?</para></question> <answer>
<para> Have a look at the <filename>doc</filename>-directory and its
subdirs in the &KOffice; sources. In
<filename>README.documentation</filename> you can see an (incomplete) list
of tasks and who they're assigned to. Pick what you like best and contact
the person in charge or put yourself in charge if nobody has started yet.
As I can't assure <filename>README.documentation</filename> will always be
up-to-date, you may first want to send a mail to all mentioned authors,
saying hello and such. They can help you to get a start and can answer
questions.</para> <para>
Our documentation markup language of choice is DocBook. You might want to
subscribe to <email>kde-docbook at kde dot org</email>, where DocBook-related questions can be
asked. Please visit <ulink url="http://i18n.kde.org">http://i18n.kde.org</ulink>
for more information and a DocBook crash course.</para>
<para>
If you don't know DocBook and don't want to learn it, you can still work on
documentation by writing plain text. Send it to me (Jost Schenck)
<email>jost at schenck dot de</email>. Either I'll convert it and check it in or I'll
send it to the person that's in charge of this right now. Note that it's easier for
us if you send us plain text rather than HTML.
</para>
</answer>
</qandaentry>
<qandaentry><question><para> I want to write filters. How do I start?</para></question>
<answer>
<para>
Werner Trobin <email>trobin at kde dot org</email> is the one you need to talk
 to. Werner has uploaded <ulink url="http://koffice.kde.org/filters/index.phtml">useful information on filters</ulink>
 to the KOffice web page.
</para>
</answer>
</qandaentry>
<qandaentry><question><para> I want to help with application XYZ. How do I start?</para></question>
<answer>
<para>
Just write to <email>koffice at kde dot org</email> or subscribe and write to
<email>koffice-devel at kde dot org</email> (koffice-devel is only open for postings
by subscribed people) and tell us what you want to work on.
</para>
</answer>
</qandaentry>
<qandaentry><question><para> I want to write a new KOffice application. How do I start?</para></question>
<answer>
<para>
In the CVS module <filename>koffice</filename> you'll find an
example program. This program is probably a good start for your own KOffice compliant
application. Additionally, you might want to use <application>kdoc</application> on
the headers in <filename>koffice/lib/*</filename> to get library documentation.
You'll find <application>kdoc</application> in the CVS module <filename>kdoc</filename>.
</para>
</answer>
</qandaentry>
*/

// CHECK
/*
<qandaentry><question><para> I want to do graphics. How do I start?</para></question>
<answer>
<para>
Please subscribe to kde-artists at kde dot org.
</para>
</answer>
</qandaentry>
*/

//CHECK
/*
qandaentry><question><para> I want to donate money or hardware!</para></question>
<answer>
<para>
</para>
</answer>
</qandaentry>
*/

//CHECK
/*
<qandadiv id="kparts"><title>KParts - the underlying component model</title>
<qandaentry><question><para> What is this KParts you're always talking about?</para></question>
<answer>
<para>
Long ago the &KOffice; was based on the KOM/OP component model, which itself was based
 on the CORBA standard for communication between distributed objects.
 The new component model is named KParts (formerly known as canossa) and it's based
 on shared libs. The new IIPC/RPC mechanism is called <application>dcop</application>.</para>
<para>
In the "silent" world of a normal unix desktop, an application can be
 more or less integrated into the desktop environment, but normally it will
 run absolutely isolated from other applications. All these applications try
 on their own to be powerful and easy to use. Now, one application offers certain
 features to the user and a different application may offer some similar features,
 although for a different task. The programmers of both applications have to implement
 things somebody else already has implemented. They might implement it in a
 slightly different way, so the user is confused when switching applications.
 Bugs are fixed in just one of the applications. Several programmers spend working time
 on reinventing the wheel instead of concentrating on other things.</para>
<para>
In the world of components this is different. Applications are not isolated
 anymore but are in contact with eachother. An application doesn't just offer
 its services to the user - it can also offer it to other applications. A word
 processor and an HTML editor might both need a spell checker; instead of implementing
 it again, both programs ask a third application for its spell checking services.
 An application that's specialized on spell checking. As the number of useful
 components grows, every application starts working in a large bazaar where
 every service can be offered by a specialist. This way components
<itemizedlist>
<listitem><para>reduce development time (because large parts of applications can just
 be plugged in rather than reinventing the wheel)</para></listitem>
<listitem><para>reduce maintenance difficulties (every wheel that's reinvented needs bugfixing
 time of its own)</para></listitem>
<listitem><para>make programs much more powerful (because features can be plugged in that
 would otherwise be too difficult to implement for just one programmer)</para></listitem>
<listitem><para>make programs more flexible (they can adjust themselves according to the
 components that exist on the system they run on)</para></listitem>
<listitem><para>realize compound documents and similar things.</para></listitem>
</itemizedlist> </para>

</answer></qandaentry>
<qandaentry><question><para> I want deeper knowledge about these technologies - where do I find it?</para></question>
<answer>
<para>
There already was some documentation on the CORBA based component model; I don't
 know how much there is for KParts. Anyway, as KParts is <emphasis>much</emphasis>
 easier to program than the old CORBA stuff was, it won't be difficult for you
 to get into it. A good start is the example program you'll find in the <filename>koffice</filename>
 module. Just modify it to fit your needs. Regarding dcop, take a look
 at the HOWTO file in <filename>kdelibs/dcop</filename>.</para>
<para>
New documentation on KDE development will normally somewhen appear on
<ulink url="http://developer.kde.org">http://developer.kde.org</ulink>.</para>
</answer>
</qandaentry>
</qandadiv>
*/

$faq->show();
?>

<?php
 include("footer.inc");
?>
