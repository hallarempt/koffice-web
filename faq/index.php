<?php
  $page_title = "KOffice FAQ";
  $site_root= "../";
  include("koffice.inc");
  include("header.inc");
?>

<p>
 This FAQ tries to answer some frequently asked questions about &KOffice;
 (plus some not so frequently asked ones you might find interesting anyway).
 Please: if you have a question, take a look into this FAQ first, before asking
 the developers. They're a handful of programmers who are not being paid for
 doing this, writing a complete office suite in their spare time - this time
 they don't want to spend answering certain questions for the 100th time. If
 you have a question that is not being covered by this FAQ, please don't hesitate
 to <a href="mailto:koffice@kde.org">mail us.</a>
</p>

<p><em>Disclaimer:</em> We offer <em>no liability</em> for the contents of this FAQ document.</p>

<p>Currently this FAQ is worked on. So for now, this is a short version of the FAQ. More entries in the next days. Sorry!</p>

<?php
$faq = new FAQ();


$faq->addSection("General Questions");

$faq->addQuestion("What is KOffice?",
"<p>KOffice is an integrated office suite for the <a href=\"http://www.kde.org\">KDE (K Desktop Environment)</a>
consisting of several applications like a word processor and a spread sheet.
Based on the KParts component model KOffice offers a lot of interoperability
between all its components. For example, you can embed every KOffice component
into another component (for example a KSpread; table into your KWord document) and
a plug-in mechanism makes it possible to easily extend functionality.</p>"
);

$faq->addQuestion("Who are the developers and how do I contact them?",
"<p>The developers are listed on <a href=\"http://www.koffice.org/people.php\">the people page.</a>
If you want to contact the developers, the best is to try to contact the developer first by
<a href=\"mailto:koffice@kde.org\"emailing to the koffice mailing list</a>. In case of bugs or wishes,
please report them by using <a href=\"http://bugs.kde.org\">KDE Bugs</a>.</p>"
);

$faq->addQuestion("Which mailing lists are used for KOffice?",
"<p>KOffice has two own mailing lists:</p>
<ul>
<li><a href=\"mailto:koffice@kde,org\">koffice mailing list</a></li>
<li><a href=\"mailto:koffice-devel@kde,org\">koffice-devel mailing list</a></li>
</ul>
<p>The koffice mailing list is mainly for the users of KOffice, the koffice-devel is mainly for the developers.
Please note that the write access of the koffice-devel mailing list is restricted.</p>
<p>As KOffice is part of KDE is uses some of KDE's mailing lists, for example for the translaltors.</p>
<p>Information on the mailing lists can be obtained <a href=\"http://www.koffice.org/mailinglists\">here</a>.
The archives of mailing lists is <a href=\"http://lists.kde.org\">here.</a></p>"
);

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
</ul>
<p>Following applications are planned for future versions:</p>
<ul>
<li>Krita - an image manipulation program</li>
<li>Kexi</li>
<li>Kugar</li>
<li>KPlato</li>
</ul>"
);

$faq->addQuestion("I would like to see application XYZ in KOffice?",
"<p>KOffice may lack some applications that people normally consider to be
Office application. Some of these applications are in other parts of KDE,
like for example PIM (Personal Information Management). Some of other
are only planned for future KOffice releases.</p>"
);

// FAQ: What is the current state of &KOffice;?
/*
<qandaentry><question><para> What is the current state of &KOffice;?</para></question><answer>
<para>
&KOffice; has been released as 1.2. KOffice is released seperately
from the rest of KDE, so KOffice releases are not in sync with those of KDE.
</para>
</answer></qandaentry>
*/

// FAQ: Is &KOffice; stable?
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
"<p>First of all: certainly many features should be implemented in the future. However,
KOffice is mainly based on the work of volunteers and thus it often lacks the manpower
it needs to address many issues. If you are a developer and you lack a feature,
consider helping us and talk to us on the mailing lists. Many features can be implemented
independently of the KOffice main code base by implementing so-called plugins or
data tools. KOffice developers are always willing to help you if you want to get
your hands dirty!</p>"
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

$faq->addQuestion("How do I report bugs?",
"<p>Like for any KDE application, please report bugs to <a href=\"http://bugs.kde.org\">KDE Bugs.</a></p>
<p>Please avoid bug reports with meaningless contents like: \"It does not work!\", \"KOffice is bad\",
\"XYZ is much better than your KOffice\".</p>
<p>A good bug report should first have a <em>title.</em> Try to give in a few keywords an overview of the problem.
That makes it easier for the developers to find your bug again.</p>
<p>Then please we need a <em>good description</em>
of the bug. How can the bug be reproduced? Does it always happen? Does something very similar work without any problem?</p>
<p>Then we need to about the <em>software</em> of your system. If you have only installed the packages of your
distribution, then this point is not really important. But if you are using special software, like a non-gcc compiler,
or some very new developement library, then please tell us in your bug report.</p>
<p>If the bug is a message box that should not happen, then please tell us the <em>exact error message</em>.</p>
<p>If the bug is triggered by the loading of a <em>file</em>, then please add the file to the bug report or
even better a short example file that triggers the bug. (Please be careful that sending a file to KDE Bugs makes it
public, so be careful not to send us files not meant for the public.</p>
<p>Of course, if you are able to make a <em>patch</em> to fix the bug, it would be the optimum.</p>"
);

$faq->addQuestion("How do I report wishes?",
"<p>You report wishes as you would do for bugs. Here too it is important to describe correctly the wish to
avoid misunderstandings. If your wish comes from another application, please do not assume that the developers
know that application. And please only <em>one</em> wish per report. However you can make as many reports as
you want. One wish per report helps the developers to manage easilier the bugs and wishes.</p>"
);

$faq->addQuestion("Can I use KOffice on Windows?",
"<p>There is on-going work of <a url=\"http://kde-cygwin.sourceforge.net\">KDE Cygwin project</a> to port
KDE to MS Windows. It is also planned to port KOffice. Just keep in mind that this port is not done
by the KOffice developers themselves, so please report bugs to the project.</p>"
);


$faq->addSection("How to get and install KOffice");

// CHECK
$faq->addQuestion("How do I get and compile the KOffice sources?",
"<p>Please have a look at <a url=\"http://koffice.kde.org/install-source.phtml\">
http://koffice.kde.org/install-source.phtml</a></p>"
);

// CHECK: URLs for anoncvs and cvs up
$faq->addQuestion("I want to be on the bleeding edge. How can I get my sources up to date?",
"<p>You need to checkout the module koffice of KDE's CVS either by anonymous CVS or by CVS UP.</p>
<p>Please keep in mind that the versions in the development branch are not supposed to work stable!</p>"
);


$faq->addQuestion("How do I install &KOffice; if I'm not root?",
"You've got to pass some directory where you've got write access (e.g. in your home directory)
 as prefix to configure. So you should type something like: <code>./configure --prefix=/home/jdoe/foo/bar</code>
 plus of course other options you might want to pass to configure. Then of course you
 don't have to do <code>su -c "make install"</code>, but just <code>make install</code>.</p>"
);

// FAQ:  Where can I find information on compiling Qt or the KDE libs?
// CHECK: linked Qt document is wrong!
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
"<p>You can find up-to-date information on available binaries <a url=\"http://www.koffice.org/install-binaries.phtml\">here</a>.</p>
<p>Please notice that KOffice only makes the source, binary distributions are made by third persons, even if they
are distributed by KDE or by KOffice.</p>"
);

$faq->addQuestion("How do I install binary RPMs?",
"<p>Type the following as root: <code>rpm -U koffice.rpm</code>. Please replace koffice.rpm
 with the full path to and the name of your binary rpm.</p>"
);

$faq->addQuestion("Is KOffice available on CD?",
"<p>Most linux distributions by now ship KOffice. So if you have an up-to-date
 linux distribution, you probably are lucky.  I don't know of any other operating
 system vendors who ship KOffice and I don't know about any separate CDs.
 The KOffice project itself does not sell any CD-ROMs.</p>"
);

$faq->show();
?>

<?php
 include("footer.inc");
?>
