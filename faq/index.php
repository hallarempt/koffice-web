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

$faq->addQuestions("Which mailing lists are used for KOffice?",
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

$faq->addQuestions("Which KOffice application do exist?",
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

$faq->addQuestions("I would like to see application XYZ in KOffice?",
"<p>KOffice may lack some applications that people normally consider to be
Office application. Some of these applications are in other parts of KDE,
like for example PIM (Personal Information Management). Some of other
are only planned for future KOffice releases."
);

// FAQ: What is the current state of &KOffice;?
// FAQ: Is &KOffice; stable?

$faq->show();
?>

<?php
 include("footer.inc");
?>
