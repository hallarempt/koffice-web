<?php
  $page_title ='FAQ';
  $site_root= "../";
  include("koffice.inc");
  include("header.inc");
?>

<DIV
CLASS="ARTICLE"
><DIV
CLASS="TITLEPAGE"
><H1
CLASS="TITLE"
><A
NAME="AEN2"
></A
>KOffice FAQs</H1
><DIV
CLASS="AUTHORGROUP"
><A
NAME="AEN4"
></A
><H3
CLASS="AUTHOR"
><A
NAME="AEN5"
>Jost Schenck</A
></H3
></DIV
><SPAN
CLASS="RELEASEINFO"
>1.0.4<BR></SPAN
><DIV
><DIV
CLASS="ABSTRACT"
><A
NAME="AEN10"
></A
><P
></P
><P
><SPAN
CLASS="emphasis"
><I
CLASS="EMPHASIS"
>FAQ currently being updated, some information may still be old</I
></SPAN
></P
><P
>This FAQ tries to answer some frequently asked questions about <SPAN
CLASS="APPLICATION"
>KOffice</SPAN
>
 (plus some not so frequently asked ones you might find interesting anyway).
 Please: if you have a question, take a look into this FAQ first, before asking
 the developers. They're a handful of programmers who are not being paid for
 doing this, writing a complete office suite in their spare time - this time
 they don't want to spend answering certain questions for the 100th time. If
 you have a question that is not being covered by this FAQ, please don't hesitate
 to mail <TT
CLASS="EMAIL"
>&#60;<A
HREF="mailto:koffice at kde dot org"
>koffice at kde dot org</A
>&#62;</TT
> (please mention that you had a look into
 the FAQ). This FAQ is work in progress and currently poorly maintained by Jost Schenck
 <TT
CLASS="EMAIL"
>&#60;<A
HREF="mailto:jost at schenck dot de"
>jost at schenck dot de</A
>&#62;</TT
> who apologizes for any outdated information. Much text
 taken from <SPAN
CLASS="APPLICATION"
>KOffice</SPAN
> home page and mailing lists. Please contact me in case of
 criticism, additions, typos, errors, flames etc. I welcome any kind of feedback.</P
><P
></P
></DIV
></DIV
><HR></DIV
><DIV
CLASS="QANDASET"
><DL
><DT
>1. <A
HREF="index.php#IMPORTANTNOTE"
>Important Note - please read first!</A
></DT
><DD
><DL
><DT
>1.1. <A
HREF="index.php#AEN22"
> Disclaimer</A
></DT
></DL
></DD
><DT
>2. <A
HREF="index.php#GENERALQUESTIONS"
>General Questions</A
></DT
><DD
><DL
><DT
>2.1. <A
HREF="index.php#AEN30"
> What is <SPAN
CLASS="APPLICATION"
>KOffice</SPAN
>?</A
></DT
><DT
>2.2. <A
HREF="index.php#AEN41"
> Who are the developers and how do I contact them?</A
></DT
><DT
>2.3. <A
HREF="index.php#AEN197"
>What does The Kompany have to do with <SPAN
CLASS="APPLICATION"
>KOffice</SPAN
>? Is <SPAN
CLASS="APPLICATION"
>KOffice</SPAN
> becoming proprietary?</A
></DT
><DT
>2.4. <A
HREF="index.php#AEN211"
> What <SPAN
CLASS="APPLICATION"
>KOffice</SPAN
> applications do exist / are planned?</A
></DT
><DT
>2.5. <A
HREF="index.php#AEN235"
> I'd like to see XYZ application in <SPAN
CLASS="APPLICATION"
>KOffice</SPAN
>!</A
></DT
><DT
>2.6. <A
HREF="index.php#AEN249"
> What is the current state of <SPAN
CLASS="APPLICATION"
>KOffice</SPAN
>?</A
></DT
><DT
>2.7. <A
HREF="index.php#AEN256"
> Is <SPAN
CLASS="APPLICATION"
>KOffice</SPAN
> stable? </A
></DT
><DT
>2.8. <A
HREF="index.php#AEN264"
> Are you going to implement feature XYZ?</A
></DT
><DT
>2.9. <A
HREF="index.php#AEN272"
> What do I need for using <SPAN
CLASS="APPLICATION"
>KOffice</SPAN
>?</A
></DT
><DT
>2.10. <A
HREF="index.php#AEN285"
> Which license applies to <SPAN
CLASS="APPLICATION"
>KOffice</SPAN
>?</A
></DT
><DT
>2.11. <A
HREF="index.php#AEN292"
> How do I report bugs?</A
></DT
><DT
>2.12. <A
HREF="index.php#AEN309"
>Can I use KOffice on Windows?</A
></DT
></DL
></DD
><DT
>3. <A
HREF="index.php#HOWTOGETANDINSTALL"
>How to get and install <SPAN
CLASS="APPLICATION"
>KOffice</SPAN
></A
></DT
><DD
><DL
><DT
>3.1. <A
HREF="index.php#AEN319"
> How do I get and compile the <SPAN
CLASS="APPLICATION"
>KOffice</SPAN
> sources?</A
></DT
><DT
>3.2. <A
HREF="index.php#AEN326"
> I want to be on the bleeding edge. How can I get my sources up to date?</A
></DT
><DT
>3.3. <A
HREF="index.php#AEN335"
> How do I install <SPAN
CLASS="APPLICATION"
>KOffice</SPAN
> if I'm not root?</A
></DT
><DT
>3.4. <A
HREF="index.php#AEN345"
> Where can I find information on compiling Qt or the KDE libs?</A
></DT
><DT
>3.5. <A
HREF="index.php#AEN353"
> What binary distributions are there and where do I find them?</A
></DT
><DT
>3.6. <A
HREF="index.php#AEN359"
> How do I install binary RPMs?</A
></DT
><DT
>3.7. <A
HREF="index.php#AEN367"
> Is <SPAN
CLASS="APPLICATION"
>KOffice</SPAN
> available on CD?</A
></DT
></DL
></DD
><DT
>4. <A
HREF="index.php#PROBLEMSCOMP"
>Problems compiling <SPAN
CLASS="APPLICATION"
>KOffice</SPAN
> </A
></DT
><DD
><DL
><DT
>4.1. <A
HREF="index.php#AEN379"
> What should I do if problems occur?</A
></DT
><DT
>4.2. <A
HREF="index.php#AEN411"
> I do <B
CLASS="COMMAND"
>make -f Makefile.cvs</B
> and get <TT
CLASS="COMPUTEROUTPUT"
>aclocal not found</TT
>.</A
></DT
><DT
>4.3. <A
HREF="index.php#AEN419"
> The <TT
CLASS="FILENAME"
>configure</TT
>" script is missing!</A
></DT
><DT
>4.4. <A
HREF="index.php#AEN427"
> linking errors with type_info</A
></DT
><DT
>4.5. <A
HREF="index.php#AEN435"
> I get parse errors in <TT
CLASS="FILENAME"
>.../include/g++/stdexcept</TT
>".</A
></DT
></DL
></DD
><DT
>5. <A
HREF="index.php#GENERAL"
><SPAN
CLASS="APPLICATION"
>KOffice</SPAN
> in general</A
></DT
><DD
><DL
><DT
>5.1. <A
HREF="index.php#AEN444"
>Does <SPAN
CLASS="APPLICATION"
>KOffice</SPAN
> support scripting?</A
></DT
><DT
>5.2. <A
HREF="index.php#AEN462"
> How does <SPAN
CLASS="APPLICATION"
>KOffice</SPAN
> print?</A
></DT
><DT
>5.3. <A
HREF="index.php#AEN469"
> What data format does <SPAN
CLASS="APPLICATION"
>KOffice</SPAN
> read and write natively?</A
></DT
><DT
>5.4. <A
HREF="index.php#AEN481"
> Can I convert KOffice documents to and from other formats on the command line?</A
></DT
><DT
>5.5. <A
HREF="index.php#AEN488"
> Wow! My Framemaker writes XML, too! Does that mean I can easily read those documents with <SPAN
CLASS="APPLICATION"
>KWord</SPAN
>?</A
></DT
><DT
>5.6. <A
HREF="index.php#AEN495"
> Which international text codecs does <SPAN
CLASS="APPLICATION"
>KOffice</SPAN
> support?</A
></DT
><DT
>5.7. <A
HREF="index.php#AEN502"
>Does <SPAN
CLASS="APPLICATION"
>KOffice</SPAN
> support languages that write right to left or top to bottom?</A
></DT
></DL
></DD
><DT
>6. <A
HREF="index.php#COMMONPROBLEMS"
>Problems common to all <SPAN
CLASS="APPLICATION"
>KOffice</SPAN
> applications</A
></DT
><DD
><DL
><DT
>6.1. <A
HREF="index.php#AEN513"
>In printout, <SPAN
CLASS="APPLICATION"
>KOffice</SPAN
> replaces some of my fonts with different fonts!</A
></DT
></DL
></DD
><DT
>7. <A
HREF="index.php#KWORD"
>KWord</A
></DT
><DD
><DL
><DT
>7.1. <A
HREF="index.php#AEN533"
> What is <SPAN
CLASS="APPLICATION"
>KWord</SPAN
>?</A
></DT
><DT
>7.2. <A
HREF="index.php#AEN546"
> What is its current state?</A
></DT
><DT
>7.3. <A
HREF="index.php#AEN552"
> Can I write my letter / papers / master thesis with <SPAN
CLASS="APPLICATION"
>KWord</SPAN
>?</A
></DT
><DT
>7.4. <A
HREF="index.php#AEN559"
> Are there filters for MS-Word, StarWriter, RTF, ... ?</A
></DT
></DL
></DD
><DT
>8. <A
HREF="index.php#KSPREAD"
>KSpread</A
></DT
><DD
><DL
><DT
>8.1. <A
HREF="index.php#AEN568"
> What is <SPAN
CLASS="APPLICATION"
>KSpread</SPAN
>?</A
></DT
><DT
>8.2. <A
HREF="index.php#AEN575"
> What is its current state?</A
></DT
><DT
>8.3. <A
HREF="index.php#AEN581"
> Is it possible to implement new functions for <SPAN
CLASS="APPLICATION"
>KSpread</SPAN
>?</A
></DT
><DT
>8.4. <A
HREF="index.php#AEN588"
> Are there import filters for Excel, StarCalc, 1-2-3, ... ?</A
></DT
></DL
></DD
><DT
>9. <A
HREF="index.php#KPRESENTER"
>KPresenter</A
></DT
><DD
><DL
><DT
>9.1. <A
HREF="index.php#AEN597"
> What is <SPAN
CLASS="APPLICATION"
>KPresenter</SPAN
>?</A
></DT
><DT
>9.2. <A
HREF="index.php#AEN604"
> What is its current state?</A
></DT
><DT
>9.3. <A
HREF="index.php#AEN610"
> Are there import filters?</A
></DT
></DL
></DD
><DT
>10. <A
HREF="index.php#KONTOUR"
>Kontour</A
></DT
><DD
><DL
><DT
>10.1. <A
HREF="index.php#AEN621"
> What happened to <SPAN
CLASS="APPLICATION"
>Kontour</SPAN
>?</A
></DT
><DT
>10.2. <A
HREF="index.php#AEN628"
>But then what can I do with my old <SPAN
CLASS="APPLICATION"
>Kontour</SPAN
> files?</A
></DT
></DL
></DD
><DT
>11. <A
HREF="index.php#KARBON14"
>Karbon14</A
></DT
><DD
><DL
><DT
>11.1. <A
HREF="index.php#AEN640"
>What is <SPAN
CLASS="APPLICATION"
>Karbon14</SPAN
>?</A
></DT
></DL
></DD
><DT
>12. <A
HREF="index.php#KIVIO"
>Kivio</A
></DT
><DD
><DL
><DT
>12.1. <A
HREF="index.php#AEN652"
>What is <SPAN
CLASS="APPLICATION"
>Kivio</SPAN
>?</A
></DT
><DT
>12.2. <A
HREF="index.php#AEN658"
>Where can I find more information on <SPAN
CLASS="APPLICATION"
>Kivio</SPAN
>?</A
></DT
></DL
></DD
><DT
>13. <A
HREF="index.php#KUGAR"
>Kugar and Kudesigner</A
></DT
><DD
><DL
><DT
>13.1. <A
HREF="index.php#AEN668"
>What is <SPAN
CLASS="APPLICATION"
>Kugar</SPAN
>?</A
></DT
><DT
>13.2. <A
HREF="index.php#AEN675"
>What is <SPAN
CLASS="APPLICATION"
>Kudesigner</SPAN
>?</A
></DT
><DT
>13.3. <A
HREF="index.php#AEN682"
>Where can I find more information on <SPAN
CLASS="APPLICATION"
>Kugar</SPAN
> and <SPAN
CLASS="APPLICATION"
>Kudesigner</SPAN
>?</A
></DT
><DT
>13.4. <A
HREF="index.php#AEN695"
>Are <SPAN
CLASS="APPLICATION"
>Kugar</SPAN
> and <SPAN
CLASS="APPLICATION"
>Kudesigner</SPAN
> multi-platform?</A
></DT
></DL
></DD
><DT
>14. <A
HREF="index.php#KRITA"
>Krita</A
></DT
><DD
><DL
><DT
>14.1. <A
HREF="index.php#AEN710"
> What is <SPAN
CLASS="APPLICATION"
>Krita</SPAN
>?</A
></DT
></DL
></DD
><DT
>15. <A
HREF="index.php#OTHER"
>Other <SPAN
CLASS="APPLICATION"
>KOffice</SPAN
> programs</A
></DT
><DD
><DL
><DT
>15.1. <A
HREF="index.php#AEN724"
> What's <SPAN
CLASS="APPLICATION"
>KChart</SPAN
>/<SPAN
CLASS="APPLICATION"
>KDiagram</SPAN
> and what's the difference?</A
></DT
></DL
></DD
><DT
>16. <A
HREF="index.php#CONTRIB"
>Contributing to KOffice</A
></DT
><DD
><DL
><DT
>16.1. <A
HREF="index.php#AEN737"
> I like this project! How can I contribute?</A
></DT
><DT
>16.2. <A
HREF="index.php#AEN765"
> I
want to help with documentation. How do I start?</A
></DT
><DT
>16.3. <A
HREF="index.php#AEN779"
> I want to write filters. How do I start?</A
></DT
><DT
>16.4. <A
HREF="index.php#AEN786"
> I want to help with application XYZ. How do I start?</A
></DT
><DT
>16.5. <A
HREF="index.php#AEN793"
> I want to write a new KOffice application. How do I start?</A
></DT
></DL
></DD
><DT
>17. <A
HREF="index.php#KPARTS"
>KParts - the underlying component model</A
></DT
><DD
><DL
><DT
>17.1. <A
HREF="index.php#AEN805"
> What is this KParts you're always talking about?</A
></DT
><DT
>17.2. <A
HREF="index.php#AEN825"
> I want deeper knowledge about these technologies - where do I find it?</A
></DT
></DL
></DD
></DL
><DIV
CLASS="QANDADIV"
><H3
><A
NAME="IMPORTANTNOTE"
></A
>1. Important Note - please read first!</H3
><DIV
CLASS="QANDAENTRY"
><DIV
CLASS="QUESTION"
><P
><A
NAME="AEN22"
></A
><B
>1.1. </B
> Disclaimer</P
></DIV
><DIV
CLASS="ANSWER"
><P
><B
> </B
>I accept <SPAN
CLASS="emphasis"
><I
CLASS="EMPHASIS"
>no liability</I
></SPAN
> for the contents of this FAQ document.</P
></DIV
></DIV
></DIV
><DIV
CLASS="QANDADIV"
><H3
><A
NAME="GENERALQUESTIONS"
></A
>2. General Questions</H3
><DIV
CLASS="QANDAENTRY"
><DIV
CLASS="QUESTION"
><P
><A
NAME="AEN30"
></A
><B
>2.1. </B
> What is <SPAN
CLASS="APPLICATION"
>KOffice</SPAN
>?</P
></DIV
><DIV
CLASS="ANSWER"
><P
><B
> </B
><SPAN
CLASS="APPLICATION"
>KOffice</SPAN
> is an integrated office suite for the KDE (K Desktop Environment)
 consisting of several applications like a word processor and a spread sheet.
 Based on the KParts component model <SPAN
CLASS="APPLICATION"
>KOffice</SPAN
> offers a lot of interoperability
 between all its components. For example, you can embed every <SPAN
CLASS="APPLICATION"
>KOffice</SPAN
> component
 into another component (e.g. a <SPAN
CLASS="APPLICATION"
>KSpread</SPAN
> table into your <SPAN
CLASS="APPLICATION"
>KWord</SPAN
> document) and
 a plug-in mechanism makes it possible to easily extend functionality.</P
></DIV
></DIV
><DIV
CLASS="QANDAENTRY"
><DIV
CLASS="QUESTION"
><P
><A
NAME="AEN41"
></A
><B
>2.2. </B
> Who are the developers and how do I contact them?</P
></DIV
><DIV
CLASS="ANSWER"
><P
><B
> </B
>The following people currently maintain the <SPAN
CLASS="APPLICATION"
>KOffice</SPAN
> applications:</P
><P
></P
><UL
><LI
><P
><SPAN
CLASS="APPLICATION"
>KWord</SPAN
>: <A
HREF="mailto:zander at kde dot org"
TARGET="_top"
>Thomas Zander</A
>,
 <A
HREF="mailto:srhaque at iee dot org"
TARGET="_top"
>Shaheed Haque</A
>,
 <A
HREF="mailto:faure at kde dot org"
TARGET="_top"
>David Faure</A
>,
 <A
HREF="mailto:sven at kde dot org"
TARGET="_top"
>Sven L&uuml;ppken</A
></P
></LI
><LI
><P
><SPAN
CLASS="APPLICATION"
>KSpread</SPAN
>, <SPAN
CLASS="APPLICATION"
>KChart</SPAN
>: <A
HREF="mailto:lmontel at mandrakesoft dot com"
TARGET="_top"
>Laurent Montel</A
></P
></LI
><LI
><P
><SPAN
CLASS="APPLICATION"
>Kontour</SPAN
>: <A
HREF="mailto:rm at linux dot ru dot net"
TARGET="_top"
>Igor Janssen</A
></P
></LI
><LI
><P
><SPAN
CLASS="APPLICATION"
>KPresenter</SPAN
>: <A
HREF="mailto:lmontel at mandrakesoft dot com"
TARGET="_top"
>Laurent Montel</A
><A
HREF="mailto:trobin at kde dot org"
TARGET="_top"
>Werner Trobin</A
></P
></LI
><LI
><P
><SPAN
CLASS="APPLICATION"
>Krita</SPAN
>: <A
HREF="mailto:jcaliff at compuzone dot net"
TARGET="_top"
>John Califf</A
></P
></LI
><LI
><P
><SPAN
CLASS="APPLICATION"
>KOffice</SPAN
> Library: <A
HREF="mailto:faure at kde dot org"
TARGET="_top"
>David Faure</A
>,
 <A
HREF="mailto:trobin at kde dot org"
TARGET="_top"
>Werner Trobin</A
></P
></LI
><LI
><P
><SPAN
CLASS="APPLICATION"
>KFormula</SPAN
>: <A
HREF="mailto:rizzi at kde dot org"
TARGET="_top"
>Andrea Rizzi</A
>,
 <A
HREF="mailto:ulrich.kuettler at mailbox dot tu-dresden dot de"
TARGET="_top"
>Ulrich Kuettler</A
>
 </P
></LI
><LI
><P
>KOShell: <A
HREF="mailto:sven at kde dot org"
TARGET="_top"
>Sven L&uuml;ppken</A
></P
></LI
><LI
><P
><SPAN
CLASS="APPLICATION"
>Kugar</SPAN
>, <SPAN
CLASS="APPLICATION"
>Kudesigner</SPAN
>: <A
HREF="mailto:cloudtemple at mksat dot net"
TARGET="_top"
>Alexander Dymo</A
></P
></LI
><LI
><P
><SPAN
CLASS="APPLICATION"
>Karbon14</SPAN
>: <A
HREF="mailto:buis at kde dot org"
TARGET="_top"
>Rob Buis</A
>
and <A
HREF="mailto:kudling at kde dot org"
TARGET="_top"
>Lenny Kudling</A
></P
></LI
><LI
><P
>CVS Repository, Configure-Scripts and Makefiles:
 <A
HREF="mailto:coolo at kde dot org"
TARGET="_top"
>Stephan Kulow</A
></P
></LI
></UL
><P
>The following people have been programming <SPAN
CLASS="APPLICATION"
>KOffice</SPAN
> applications (let
 <A
HREF="mailto:jost at schenck dot de"
TARGET="_top"
>me</A
> know, if I forgot somebody):</P
><P
></P
><UL
><LI
><P
>Torben Weis (KParts, <SPAN
CLASS="APPLICATION"
>KSpread</SPAN
>, <SPAN
CLASS="APPLICATION"
>KWord</SPAN
>, <SPAN
CLASS="APPLICATION"
>KOffice</SPAN
> library)</P
></LI
><LI
><P
>Reginald Stadlbauer (KPresenter, <SPAN
CLASS="APPLICATION"
>KWord</SPAN
>, <SPAN
CLASS="APPLICATION"
>KOffice</SPAN
> library)</P
></LI
><LI
><P
>David Faure (KParts, <SPAN
CLASS="APPLICATION"
>KOffice</SPAN
> library)</P
></LI
><LI
><P
>Kalle Dalheimer (<SPAN
CLASS="APPLICATION"
>KChart</SPAN
>)</P
></LI
><LI
><P
>Lotzi Boloni (<SPAN
CLASS="APPLICATION"
>KChart</SPAN
>)</P
></LI
><LI
><P
>Stephan Kulow (configure scripts and makefiles)</P
></LI
><LI
><P
>Andrea Rizzi (<SPAN
CLASS="APPLICATION"
>KFormula</SPAN
>)</P
></LI
><LI
><P
>Kai-Uwe Sattler (<SPAN
CLASS="APPLICATION"
>Kontour</SPAN
>)</P
></LI
><LI
><P
>Simon Hausmann (KParts)</P
></LI
><LI
><P
>Laurent Montel (<SPAN
CLASS="APPLICATION"
>KSpread</SPAN
>, <SPAN
CLASS="APPLICATION"
>KPresenter</SPAN
>, <SPAN
CLASS="APPLICATION"
>KWord</SPAN
>)</P
></LI
><LI
><P
>Michael Koch (<SPAN
CLASS="APPLICATION"
>Krita</SPAN
>)</P
></LI
><LI
><P
>Matthias Elter (<SPAN
CLASS="APPLICATION"
>Krita</SPAN
>)</P
></LI
><LI
><P
>Andrew Richards (<SPAN
CLASS="APPLICATION"
>Krita</SPAN
>)</P
></LI
><LI
><P
>Carsten Pfeiffer (<SPAN
CLASS="APPLICATION"
>Krita</SPAN
>)</P
></LI
><LI
><P
>Thomas Zander (<SPAN
CLASS="APPLICATION"
>KWord</SPAN
>)</P
></LI
><LI
><P
>Percy Leonhardt (MS Excel(tm) import filter for <SPAN
CLASS="APPLICATION"
>KSpread</SPAN
>)</P
></LI
><LI
><P
>John Califf (<SPAN
CLASS="APPLICATION"
>Krita</SPAN
>, <SPAN
CLASS="APPLICATION"
>KWord</SPAN
> GUI enhancements)</P
></LI
><LI
><P
>Igor Janssen (<SPAN
CLASS="APPLICATION"
>Kontour</SPAN
>)</P
></LI
><LI
><P
>Toshitaka Fujioka (<SPAN
CLASS="APPLICATION"
>KPresenter</SPAN
>)</P
></LI
><LI
><P
>Thorsten Rahn and his artists team (Graphics)</P
></LI
><LI
><P
>Sven L&uuml;ppken (<SPAN
CLASS="APPLICATION"
>KWord</SPAN
>, <SPAN
CLASS="APPLICATION"
>KOShell</SPAN
>)</P
></LI
><LI
><P
>Clarence Dang (MSWrite filters)</P
></LI
><LI
><P
>Alexander Dymo (<SPAN
CLASS="APPLICATION"
>Kugar</SPAN
>, <SPAN
CLASS="APPLICATION"
>Kudesigner</SPAN
>)</P
></LI
><LI
><P
>Rob Buis (<SPAN
CLASS="APPLICATION"
>Karbon14</SPAN
>)</P
></LI
><LI
><P
>Lenny Kudling (<SPAN
CLASS="APPLICATION"
>Karbon14</SPAN
>)</P
></LI
></UL
><P
>The Kompany (<A
HREF="http://www.thekompany.com"
TARGET="_top"
>http://www.thekompany.com</A
>) is actively
supporting <SPAN
CLASS="APPLICATION"
>KOffice</SPAN
>. Their powerful <SPAN
CLASS="APPLICATION"
>Kivio</SPAN
> flowcharter is now part of the official
<SPAN
CLASS="APPLICATION"
>KOffice</SPAN
> distribution.</P
><P
>If you want to contact the developers with questions or comments regarding <SPAN
CLASS="APPLICATION"
>KOffice</SPAN
> in general,
 you can do that by writing to <TT
CLASS="EMAIL"
>&#60;<A
HREF="mailto:koffice at kde dot org"
>koffice at kde dot org</A
>&#62;</TT
>. The developer mailing list is
 <TT
CLASS="EMAIL"
>&#60;<A
HREF="mailto:koffice-devel at kde dot org"
>koffice-devel at kde dot org</A
>&#62;</TT
>. Please note that most of the developers are also
 listening on the general mailing list -- so there is no need for you to contact the
 developer's list when you encounter problems and think that only a developer can help you.
 <TT
CLASS="EMAIL"
>&#60;<A
HREF="mailto:koffice-devel at kde dot org"
>koffice-devel at kde dot org</A
>&#62;</TT
> is therefore right now restricted to subscribed people.</P
><P
>The mailinglists are archived at <A
HREF="http://lists.kde.org"
TARGET="_top"
>http://lists.kde.org</A
>.</P
><P
>Finally, <SPAN
CLASS="APPLICATION"
>KOffice</SPAN
> is based on the work of many other people.
 Without the work of the KDE team and TrollTech, <SPAN
CLASS="APPLICATION"
>KOffice</SPAN
> wouldn't
 exist today.</P
></DIV
></DIV
><DIV
CLASS="QANDAENTRY"
><DIV
CLASS="QUESTION"
><P
><A
NAME="AEN197"
></A
><B
>2.3. </B
>What does The Kompany have to do with <SPAN
CLASS="APPLICATION"
>KOffice</SPAN
>? Is <SPAN
CLASS="APPLICATION"
>KOffice</SPAN
> becoming proprietary?</P
></DIV
><DIV
CLASS="ANSWER"
><P
><B
> </B
><A
HREF="http://www.thekompany.com"
TARGET="_top"
>The Kompany</A
> is a company that develops
linux software.  They actively contribute to <SPAN
CLASS="APPLICATION"
>KOffice</SPAN
> e.g. by making their applications
Kivio and <SPAN
CLASS="APPLICATION"
>Kugar</SPAN
> parts of the <SPAN
CLASS="APPLICATION"
>KOffice</SPAN
> suite.  All the programs that have been or will be
incorporated into the official <SPAN
CLASS="APPLICATION"
>KOffice</SPAN
> suite are under free licenses (such as GPL or
Artistic) and the incorporated software by The Kompany is no exception.  The <SPAN
CLASS="APPLICATION"
>KOffice</SPAN
>
team is very grateful for the contributions The Kompany is putting into <SPAN
CLASS="APPLICATION"
>KOffice</SPAN
>.</P
></DIV
></DIV
><DIV
CLASS="QANDAENTRY"
><DIV
CLASS="QUESTION"
><P
><A
NAME="AEN211"
></A
><B
>2.4. </B
> What <SPAN
CLASS="APPLICATION"
>KOffice</SPAN
> applications do exist / are planned?</P
></DIV
><DIV
CLASS="ANSWER"
><P
><B
> </B
><SPAN
CLASS="APPLICATION"
>KOffice</SPAN
> currently includes:</P
><P
></P
><UL
><LI
><P
>KSpread - a spread sheet</P
></LI
><LI
><P
>KWord - a word processor</P
></LI
><LI
><P
>KPresenter - a presentation program</P
></LI
><LI
><P
>Kivio - a flowcharter</P
></LI
><LI
><P
>Karbon14 - a vector drawing program</P
></LI
><LI
><P
>Krita - an image manipulation program</P
></LI
><LI
><P
>KFormula - a formel editor</P
></LI
><LI
><P
>KChart - a tool for drawing charts and diagrams</P
></LI
></UL
></DIV
></DIV
><DIV
CLASS="QANDAENTRY"
><DIV
CLASS="QUESTION"
><P
><A
NAME="AEN235"
></A
><B
>2.5. </B
> I'd like to see XYZ application in <SPAN
CLASS="APPLICATION"
>KOffice</SPAN
>!</P
></DIV
><DIV
CLASS="ANSWER"
><P
><B
> </B
><SPAN
CLASS="APPLICATION"
>KOffice</SPAN
> still lacks some applications that a complete office suite should offer. Some of them
 have been started or are being thought about (like a database or a project planning tool).
 But it doesn't make sense for all applications to use the <SPAN
CLASS="APPLICATION"
>KOffice</SPAN
> libraries,
 so they aren't "<SPAN
CLASS="APPLICATION"
>KOffice</SPAN
> applications". So if you're missing a
 certain application, you should take a look at the list of KDE applications you can
 find at <A
HREF="http://apps.kde.com/"
TARGET="_top"
>http://apps.kde.com/</A
>.
 There's e.g. <SPAN
CLASS="APPLICATION"
>KOrganizer</SPAN
>, a very sophisticated Organizer/Schedule program
 or <SPAN
CLASS="APPLICATION"
>Quanta+</SPAN
>, a powerful HTML editor.
 If you think that a certain kind of application should be integrated into <SPAN
CLASS="APPLICATION"
>KOffice</SPAN
>, contact
 <TT
CLASS="EMAIL"
>&#60;<A
HREF="mailto:koffice at kde dot org"
>koffice at kde dot org</A
>&#62;</TT
>. </P
></DIV
></DIV
><DIV
CLASS="QANDAENTRY"
><DIV
CLASS="QUESTION"
><P
><A
NAME="AEN249"
></A
><B
>2.6. </B
> What is the current state of <SPAN
CLASS="APPLICATION"
>KOffice</SPAN
>?</P
></DIV
><DIV
CLASS="ANSWER"
><P
><B
> </B
><SPAN
CLASS="APPLICATION"
>KOffice</SPAN
> has been released as 1.2. KOffice is released seperately
from the rest of KDE, so KOffice releases are not in sync with those of KDE.</P
></DIV
></DIV
><DIV
CLASS="QANDAENTRY"
><DIV
CLASS="QUESTION"
><P
><A
NAME="AEN256"
></A
><B
>2.7. </B
> Is <SPAN
CLASS="APPLICATION"
>KOffice</SPAN
> stable? </P
></DIV
><DIV
CLASS="ANSWER"
><P
><B
> </B
>The release versions of <SPAN
CLASS="APPLICATION"
>KOffice</SPAN
> are supposed to be quite stable. While we try to offer
 as good a product as possible, <SPAN
CLASS="APPLICATION"
>KOffice</SPAN
> is still a young project and will certainly
 mature in the next releases, when some parts are planned to be rewritten or replaced.</P
></DIV
></DIV
><DIV
CLASS="QANDAENTRY"
><DIV
CLASS="QUESTION"
><P
><A
NAME="AEN264"
></A
><B
>2.8. </B
> Are you going to implement feature XYZ?</P
></DIV
><DIV
CLASS="ANSWER"
><P
><B
> </B
>First of all: certainly many features should be implemented in the future. However,
 <SPAN
CLASS="APPLICATION"
>KOffice</SPAN
> is mainly based on the work of volunteers and thus it often lacks the manpower
 it needs to address many issues. If you are a developer and you lack a feature,
 consider helping us and talk to us on the mailing lists. Many features can be implemented
 independently of the <SPAN
CLASS="APPLICATION"
>KOffice</SPAN
> main code base by implementing so-called plugins or
 data tools. <SPAN
CLASS="APPLICATION"
>KOffice</SPAN
> developers are always willing to help you if you want to get
 your hands dirty!</P
></DIV
></DIV
><DIV
CLASS="QANDAENTRY"
><DIV
CLASS="QUESTION"
><P
><A
NAME="AEN272"
></A
><B
>2.9. </B
> What do I need for using <SPAN
CLASS="APPLICATION"
>KOffice</SPAN
>?</P
></DIV
><DIV
CLASS="ANSWER"
><P
><B
> </B
>You should use the latest Qt library, i.e. 3.0.5 (see <A
HREF="ftp://ftp.trolltech.com/qt/source/"
TARGET="_top"
>ftp://ftp.trolltech.com/qt/source/</A
>) and the latest <A
HREF="http://www.kde.org"
TARGET="_top"
>KDE
 libraries</A
> (eg. 3.0.3 for <SPAN
CLASS="APPLICATION"
>KOffice</SPAN
> 1.2; the next <SPAN
CLASS="APPLICATION"
>KOffice</SPAN
> release will require
 KDE 3.1 and Qt 3.1). If you are compiling a development version from CVS, this information
 is not up-to-date anymore; consult the <A
HREF="http://lists.kde.org"
TARGET="_top"
>mailing list 
 archives</A
> of the koffice-devel list for information on the needed libraries or ask
 on the <A
HREF="mailto:koffice at kde dot org"
TARGET="_top"
>koffice</A
> or 
 <A
HREF="mailto:koffice-devel at kde dot org"
TARGET="_top"
>koffice-devel</A
> lists if you run into trouble.</P
></DIV
></DIV
><DIV
CLASS="QANDAENTRY"
><DIV
CLASS="QUESTION"
><P
><A
NAME="AEN285"
></A
><B
>2.10. </B
> Which license applies to <SPAN
CLASS="APPLICATION"
>KOffice</SPAN
>?</P
></DIV
><DIV
CLASS="ANSWER"
><P
><B
> </B
><SPAN
CLASS="APPLICATION"
>KOffice</SPAN
> is an open-source project and completely free. Regarding the license, it
 was first put under GPL. Some programs have been moved to the AL
 (Artistic License), maybe others will follow. This license is less restrictive
 than the GPL, thus allowing linking certain (free but non-GPL) libs into
 it without raising legal issues for distributors etc.
 However, it's just as free as the GPL, in fact it is even more free.</P
></DIV
></DIV
><DIV
CLASS="QANDAENTRY"
><DIV
CLASS="QUESTION"
><P
><A
NAME="AEN292"
></A
><B
>2.11. </B
> How do I report bugs?</P
></DIV
><DIV
CLASS="ANSWER"
><P
><B
> </B
>Please report bugs to
<A
HREF="http://bugs.kde.org"
TARGET="_top"
>http://bugs.kde.org</A
>.</P
><P
>Please note, that bug reports like "It doesn't work" or "<SPAN
CLASS="APPLICATION"
>KOffice</SPAN
> sucks" will neither
 help nor get you nice responses. A good bug report includes (if possible) things like:
<P
></P
><OL
TYPE="1"
><LI
><P
>a description how to reproduce the bug.</P
></LI
><LI
><P
>maybe a backtrace.</P
></LI
><LI
><P
>if possible: information about library versions etc., if they seem to correlate to the problem.</P
></LI
><LI
><P
>best of all: a patch!</P
></LI
></OL
></P
></DIV
></DIV
><DIV
CLASS="QANDAENTRY"
><DIV
CLASS="QUESTION"
><P
><A
NAME="AEN309"
></A
><B
>2.12. </B
>Can I use KOffice on Windows?</P
></DIV
><DIV
CLASS="ANSWER"
><P
><B
> </B
>At the moment this isn't possible. But there is work going on in that direction,
as part of the <A
HREF="http://kde-cygwin.sourceforge.net/"
TARGET="_top"
>KDE Cygwin project</A
>,
which is a port of Qt and KDE to Windows using Cygwin, the POSIX emulation 
layer for Windows, and the Cygwin XFree86 server.</P
><P
>At the time of writing this, KOffice hasn't been ported yet.</P
></DIV
></DIV
></DIV
><DIV
CLASS="QANDADIV"
><H3
><A
NAME="HOWTOGETANDINSTALL"
></A
>3. How to get and install <SPAN
CLASS="APPLICATION"
>KOffice</SPAN
></H3
><DIV
CLASS="QANDAENTRY"
><DIV
CLASS="QUESTION"
><P
><A
NAME="AEN319"
></A
><B
>3.1. </B
> How do I get and compile the <SPAN
CLASS="APPLICATION"
>KOffice</SPAN
> sources?</P
></DIV
><DIV
CLASS="ANSWER"
><P
><B
> </B
>Please have a look at <A
HREF="http://koffice.kde.org/install-source.phtml"
TARGET="_top"
>http://koffice.kde.org/install-source.phtml</A
> </P
></DIV
></DIV
><DIV
CLASS="QANDAENTRY"
><DIV
CLASS="QUESTION"
><P
><A
NAME="AEN326"
></A
><B
>3.2. </B
> I want to be on the bleeding edge. How can I get my sources up to date?</P
></DIV
><DIV
CLASS="ANSWER"
><P
><B
> </B
>The easiest way to keep your <SPAN
CLASS="APPLICATION"
>KOffice</SPAN
> sources up to date is using <SPAN
CLASS="APPLICATION"
>cvsup</SPAN
>.
 See
<A
HREF="http://www.kde.org/cvsup.html"
TARGET="_top"
>http://www.kde.org/cvsup.html</A
> for
 details on how to set it up. You'll need to checkout the module
 <TT
CLASS="FILENAME"
>koffice</TT
>. Please keep in mind that the versions in the development
 branch are not supposed to work stable.</P
></DIV
></DIV
><DIV
CLASS="QANDAENTRY"
><DIV
CLASS="QUESTION"
><P
><A
NAME="AEN335"
></A
><B
>3.3. </B
> How do I install <SPAN
CLASS="APPLICATION"
>KOffice</SPAN
> if I'm not root?</P
></DIV
><DIV
CLASS="ANSWER"
><P
><B
> </B
>You've got to pass some directory where you've got write access (e.g. in your home directory)
 as prefix to configure. So you should type something like: <B
CLASS="COMMAND"
>./configure --prefix=<TT
CLASS="REPLACEABLE"
><I
>/home/jdoe/foo/bar</I
></TT
></B
>
 plus of course other options you might want to pass to configure. Then of course you
 don't have to do <B
CLASS="COMMAND"
>su -c "make install"</B
>, but just <B
CLASS="COMMAND"
>make install</B
>.</P
></DIV
></DIV
><DIV
CLASS="QANDAENTRY"
><DIV
CLASS="QUESTION"
><P
><A
NAME="AEN345"
></A
><B
>3.4. </B
> Where can I find information on compiling Qt or the KDE libs?</P
></DIV
><DIV
CLASS="ANSWER"
><P
><B
> </B
>For Qt, have a look at the file <TT
CLASS="FILENAME"
>INSTALL</TT
> in your Qt root directory.</P
><P
>See
<A
HREF="http://www.kde.org/documentation/faq/index.html"
TARGET="_top"
>http://www.kde.org/documentation/faq/index.html</A
>
 for details on KDE.</P
></DIV
></DIV
><DIV
CLASS="QANDAENTRY"
><DIV
CLASS="QUESTION"
><P
><A
NAME="AEN353"
></A
><B
>3.5. </B
> What binary distributions are there and where do I find them?</P
></DIV
><DIV
CLASS="ANSWER"
><P
><B
> </B
>You can find up-to-date information on available binaries <A
HREF="http://www.koffice.org/install-binaries.phtml"
TARGET="_top"
>here</A
>.</P
></DIV
></DIV
><DIV
CLASS="QANDAENTRY"
><DIV
CLASS="QUESTION"
><P
><A
NAME="AEN359"
></A
><B
>3.6. </B
> How do I install binary RPMs?</P
></DIV
><DIV
CLASS="ANSWER"
><P
><B
> </B
>Type the following as root: <B
CLASS="COMMAND"
>rpm -U <TT
CLASS="REPLACEABLE"
><I
>koffice.rpm</I
></TT
></B
>. Please replace <TT
CLASS="REPLACEABLE"
><I
>koffice.rpm</I
></TT
>
 with the full path to and the name of your binary rpm.</P
></DIV
></DIV
><DIV
CLASS="QANDAENTRY"
><DIV
CLASS="QUESTION"
><P
><A
NAME="AEN367"
></A
><B
>3.7. </B
> Is <SPAN
CLASS="APPLICATION"
>KOffice</SPAN
> available on CD?</P
></DIV
><DIV
CLASS="ANSWER"
><P
><B
> </B
>Most linux distributions by now ship <SPAN
CLASS="APPLICATION"
>KOffice</SPAN
>. So if you have an up-to-date
 linux distribution, you probably are lucky.  I don't know of any other operating
 system vendors who ship <SPAN
CLASS="APPLICATION"
>KOffice</SPAN
> and I don't know about any separate CDs.
 The <SPAN
CLASS="APPLICATION"
>KOffice</SPAN
> project itself does not sell any CD-ROMs.</P
></DIV
></DIV
></DIV
><DIV
CLASS="QANDADIV"
><H3
><A
NAME="PROBLEMSCOMP"
></A
>4. Problems compiling <SPAN
CLASS="APPLICATION"
>KOffice</SPAN
> </H3
><DIV
CLASS="QANDAENTRY"
><DIV
CLASS="QUESTION"
><P
><A
NAME="AEN379"
></A
><B
>4.1. </B
> What should I do if problems occur?</P
></DIV
><DIV
CLASS="ANSWER"
><P
><B
> </B
>If problems occur during compiling, please:
<P
></P
><UL
><LI
><P
>check the problems mentioned in this section</P
></LI
><LI
><P
>check whether you are using a recent kdelibs package (KDE v3.0.x).</P
></LI
><LI
><P
>check whether you are using the <SPAN
CLASS="emphasis"
><I
CLASS="EMPHASIS"
>correct versions</I
></SPAN
> of all required packages:
 you need Qt v3.0.x.
In case this FAQ is outdated, better check
<A
HREF="http://koffice.kde.org/install-source.phtml"
TARGET="_top"
>http://koffice.kde.org/install-source.phtml</A
> for  requirements,
too.</P
></LI
><LI
><P
>check if you compiled all libs with
one compiler.</P
></LI
><LI
><P
>check if you're compiling
with a recent gcc</P
></LI
><LI
><P
>if it
compiled for you before, but now, after some updates, doesn't anymore:
remove all <TT
CLASS="FILENAME"
>.deps</TT
>-directories in your koffice source
tree and try again (<B
CLASS="COMMAND"
>make  maintainer-clean</B
> is the
safest, I think).</P
></LI
><LI
><P
>After you've checked
all this and the problems still persist, contact
<TT
CLASS="EMAIL"
>&#60;<A
HREF="mailto:koffice at kde dot org"
>koffice at kde dot org</A
>&#62;</TT
>. Include information  about your system as
well as the remark that you've read the FAQ and it didn't  help. If
configure failed, include your <SPAN
CLASS="emphasis"
><I
CLASS="EMPHASIS"
>config.log</I
></SPAN
>.</P
></LI
></UL
></P
><P
> Please
<SPAN
CLASS="emphasis"
><I
CLASS="EMPHASIS"
>don't</I
></SPAN
> contact the mailing list in case of:
<P
></P
><UL
><LI
><P
>"internal compiler errors". This most likely
isn't a <SPAN
CLASS="APPLICATION"
>KOffice</SPAN
> problem.</P
></LI
></UL
></P
></DIV
></DIV
><DIV
CLASS="QANDAENTRY"
><DIV
CLASS="QUESTION"
><P
><A
NAME="AEN411"
></A
><B
>4.2. </B
> I do <B
CLASS="COMMAND"
>make -f Makefile.cvs</B
> and get <TT
CLASS="COMPUTEROUTPUT"
>aclocal not found</TT
>.</P
></DIV
><DIV
CLASS="ANSWER"
><P
><B
> </B
>(This only applies to the snapshots)
You haven't installed automake. Install automake (and make sure it's a recent version).
 For the snapshots, this problem is hopefully going to be solved so that there's no
 <TT
CLASS="FILENAME"
>Makefile.cvs</TT
> in the snapshots anymore.</P
></DIV
></DIV
><DIV
CLASS="QANDAENTRY"
><DIV
CLASS="QUESTION"
><P
><A
NAME="AEN419"
></A
><B
>4.3. </B
> The <TT
CLASS="FILENAME"
>configure</TT
>" script is missing!</P
></DIV
><DIV
CLASS="ANSWER"
><P
><B
> </B
>(This only applies to the snapshots)
Please start with <B
CLASS="COMMAND"
>make -f Makefile.cvs</B
>. You should find <TT
CLASS="FILENAME"
>configure</TT
> now.</P
></DIV
></DIV
><DIV
CLASS="QANDAENTRY"
><DIV
CLASS="QUESTION"
><P
><A
NAME="AEN427"
></A
><B
>4.4. </B
> linking errors with type_info</P
></DIV
><DIV
CLASS="ANSWER"
><P
><B
> </B
>You get lots of messages like this:
<TABLE
BORDER="0"
BGCOLOR="#E0E0E0"
WIDTH="100%"
><TR
><TD
><PRE
CLASS="SCREEN"
>/tmp/cca021561.o(.rodata+0x0): undefined reference to QWidget type_info
node'
/tmp/cca021561.o: In function yWidget type_info function':
/tmp/cca021561.o(.gnu.linkonce.t.__tf8MyWidget+0x11):
 undefined reference
to QWidget type_info function'
collect2: ld returned
 1 exit status</PRE
></TD
></TR
></TABLE
>

(That means linking errors with type_info) </P
><P
>You may be mixing compilers! You have to compile Qt, KDE
 and <SPAN
CLASS="APPLICATION"
>KOffice</SPAN
> with one compiler.</P
></DIV
></DIV
><DIV
CLASS="QANDAENTRY"
><DIV
CLASS="QUESTION"
><P
><A
NAME="AEN435"
></A
><B
>4.5. </B
> I get parse errors in <TT
CLASS="FILENAME"
>.../include/g++/stdexcept</TT
>".</P
></DIV
><DIV
CLASS="ANSWER"
><P
><B
> </B
>Mark Tranchant says this might be due to binutils 2.8.* rather than 2.9.*.
 So, upgrading your binutils might solve this problem. Please give me feedback
 on this, since I didn't have this problem.</P
></DIV
></DIV
></DIV
><DIV
CLASS="QANDADIV"
><H3
><A
NAME="GENERAL"
></A
>5. <SPAN
CLASS="APPLICATION"
>KOffice</SPAN
> in general</H3
><DIV
CLASS="QANDAENTRY"
><DIV
CLASS="QUESTION"
><P
><A
NAME="AEN444"
></A
><B
>5.1. </B
>Does <SPAN
CLASS="APPLICATION"
>KOffice</SPAN
> support scripting?</P
></DIV
><DIV
CLASS="ANSWER"
><P
><B
> </B
>Yes, <SPAN
CLASS="APPLICATION"
>KOffice</SPAN
> supports scripting. <SPAN
CLASS="APPLICATION"
>KSpread</SPAN
> has its own formula language used to extend
 its capabilities, called KoScript. And above that you can script <SPAN
CLASS="APPLICATION"
>KOffice</SPAN
> applications
 using the scripting language of your choice thanks to the application's DCOP
 interfaces (provided that DCOP-bindings exist for your language). For example
 <SPAN
CLASS="APPLICATION"
>KSpread</SPAN
> offers interfaces to its documents, views, tables, cells etc. Using a languages
 DCOP bindings you can remote control a <SPAN
CLASS="APPLICATION"
>KOffice</SPAN
> application via this interface.
 You can find several DCOP bindings in the kdebindings module, be it perl, python or even
 java. Furthermore, using the
 <SPAN
CLASS="APPLICATION"
>dcop</SPAN
> command line utility from kdelibs, you can
 control applications from your shell, so you can basically even script <SPAN
CLASS="APPLICATION"
>KOffice</SPAN
> using
 sh/csh or whatever shell you prefer. Of course you can also access these interfaces
 using a C++ library or its C wrapper.</P
><P
>Note that not all <SPAN
CLASS="APPLICATION"
>KOffice</SPAN
> applications have complete interfaces yet; <SPAN
CLASS="APPLICATION"
>KSpread</SPAN
> is probably
the best example for a scriptable application at the moment.</P
><P
>The flowcharting program <SPAN
CLASS="APPLICATION"
>Kivio</SPAN
> implements its own scripting via Python.</P
></DIV
></DIV
><DIV
CLASS="QANDAENTRY"
><DIV
CLASS="QUESTION"
><P
><A
NAME="AEN462"
></A
><B
>5.2. </B
> How does <SPAN
CLASS="APPLICATION"
>KOffice</SPAN
> print?</P
></DIV
><DIV
CLASS="ANSWER"
><P
><B
> </B
><SPAN
CLASS="APPLICATION"
>KOffice</SPAN
> uses the QPrinter/KPrinter classes and thus generates Postscript code. So you'll
 be able to print using a Postscript printer or - if you're using ghostscript or a similar
 program - any other printer supported by this program.</P
></DIV
></DIV
><DIV
CLASS="QANDAENTRY"
><DIV
CLASS="QUESTION"
><P
><A
NAME="AEN469"
></A
><B
>5.3. </B
> What data format does <SPAN
CLASS="APPLICATION"
>KOffice</SPAN
> read and write natively?</P
></DIV
><DIV
CLASS="ANSWER"
><P
><B
> </B
>Most <SPAN
CLASS="APPLICATION"
>KOffice</SPAN
> applications store their document data as XML code (eXtensible
 Markup Language). These files are stored in a more or less human readable
 form with "tags" similar to the ones you know from HTML. Like with HTML, this
 also guarantees compatibility when the file format is going to be extended in
 the future: like an HTML browser, <SPAN
CLASS="APPLICATION"
>KOffice</SPAN
> applications skip the tags that are
 unknown to them, so you're going to be able to read files created with a newer
 version of <SPAN
CLASS="APPLICATION"
>KWord</SPAN
> with an older version (of course without the information
 provided by the new tags). XML is stored in simple text files and can easily
 be parsed - so it's possible to write filters e.g. in Perl.</P
><P
> As XML alone has some disadvantages when it comes to including binaries, embedded
 documents etc. the <SPAN
CLASS="APPLICATION"
>KOffice</SPAN
> file format is actually not just XML anymore, but a
 ZIP file which contains the main document as well as embedded documents,
 pictures etc.</P
><P
> So the native format is XML, within a ZIP packaging, much like OpenOffice.
 If you want to save uncompressed XML files, for instance to use KOffice in
 conjunction with CVS, you can select the "Uncompressed XML files" format when
 saving. This saves everything in a directory - which means you need one
 directory per document. To reopen the document, select maindoc.xml in the
 file dialog.</P
></DIV
></DIV
><DIV
CLASS="QANDAENTRY"
><DIV
CLASS="QUESTION"
><P
><A
NAME="AEN481"
></A
><B
>5.4. </B
> Can I convert KOffice documents to and from other formats on the command line?</P
></DIV
><DIV
CLASS="ANSWER"
><P
><B
> </B
>Yes, the program for this is called <B
CLASS="COMMAND"
>koconverter</B
>.
See <B
CLASS="COMMAND"
>koconverter --help</B
> for more information.</P
></DIV
></DIV
><DIV
CLASS="QANDAENTRY"
><DIV
CLASS="QUESTION"
><P
><A
NAME="AEN488"
></A
><B
>5.5. </B
> Wow! My Framemaker writes XML, too! Does that mean I can easily read those documents with <SPAN
CLASS="APPLICATION"
>KWord</SPAN
>?</P
></DIV
><DIV
CLASS="ANSWER"
><P
><B
> </B
>No, unfortunately not; you still need a filter. Think of XML as a very base,
 general markup language which allows you to "create your own markup language".
 So it's more precise to say, the <SPAN
CLASS="APPLICATION"
>KOffice</SPAN
> applications use a file format
 thats based on XML. The XML code Framemaker can write to is a different file
 format based on XML. Nevertheless, the usage of XML is going to make it easier
 to develop import filters.</P
></DIV
></DIV
><DIV
CLASS="QANDAENTRY"
><DIV
CLASS="QUESTION"
><P
><A
NAME="AEN495"
></A
><B
>5.6. </B
> Which international text codecs does <SPAN
CLASS="APPLICATION"
>KOffice</SPAN
> support?</P
></DIV
><DIV
CLASS="ANSWER"
><P
><B
> </B
><SPAN
CLASS="APPLICATION"
>KOffice</SPAN
> uses UNICODE everywhere. This makes it suitable for all international
 fonts you could think of. See next question for right to left and top to bottom
 languages, however.</P
></DIV
></DIV
><DIV
CLASS="QANDAENTRY"
><DIV
CLASS="QUESTION"
><P
><A
NAME="AEN502"
></A
><B
>5.7. </B
>Does <SPAN
CLASS="APPLICATION"
>KOffice</SPAN
> support languages that write right to left or top to bottom?</P
></DIV
><DIV
CLASS="ANSWER"
><P
><B
> </B
><SPAN
CLASS="APPLICATION"
>KOffice</SPAN
> fully supports languages written from right to left (BiDi) thanks to the
 support for this in Qt 3.</P
><P
>Support for vertically written languages is not likely to come soon. Contributions are
 of course always welcome, but this is unfortunately not an easy task.</P
></DIV
></DIV
></DIV
><DIV
CLASS="QANDADIV"
><H3
><A
NAME="COMMONPROBLEMS"
></A
>6. Problems common to all <SPAN
CLASS="APPLICATION"
>KOffice</SPAN
> applications</H3
><DIV
CLASS="QANDAENTRY"
><DIV
CLASS="QUESTION"
><P
><A
NAME="AEN513"
></A
><B
>6.1. </B
>In printout, <SPAN
CLASS="APPLICATION"
>KOffice</SPAN
> replaces some of my fonts with different fonts!</P
></DIV
><DIV
CLASS="ANSWER"
><P
><B
> </B
>[Thanks to Donovan Rebbechi] To make fonts printable to KOffice, the fonts in question need
 to be added to the ghostscript fontmap file, so ghostscript can "see" the fonts. This applies
 to TrueType as well as Type1 fonts. As KOffice doesn't necessarily use the correct ghostscript font
 names, it (respectively Qt) tries to guess them and sometimes fails on this task. This problem
 can be avoided by mapping the font names used by Qt to the correct X11 font names.
 See the following example how this can be done:</P
><P
><DIV
CLASS="EXAMPLE"
><A
NAME="AEN519"
></A
><P
><B
>Example 1. mapping of font names in the ghostscript fontmap</B
></P
><TABLE
BORDER="0"
BGCOLOR="#E0E0E0"
WIDTH="100%"
><TR
><TD
><PRE
CLASS="SCREEN"
>/ArialBlack-Roman	/Arial_Black	;
/Arnoldboecklin-Roman	/ArnoldBoecklin-ExtraBold	;</PRE
></TD
></TR
></TABLE
></DIV
></P
><P
> This problem will have to be solved within Qt; until then you'll have to modify your fontmap.
 If you want to do this yourself, the following information might help you:</P
><P
>Donovan Rebbechi has written a <A
HREF="http://koffice.kde.org/tools/kwdfont"
TARGET="_top"
>perl script</A
> to make this task easier.
 You need have the  appropriate fonts in your ghostscriupt fontmap,
 (see Donovan's <A
HREF="http://pegasus.rutgers.edu/~elflord/font_howto/"
TARGET="_top"
>Font HOWTO</A
> for
 instructions) then insert the aliases generated by the script. The output
 of the script might occasionally require a little hand tweaking, but at
 least the script does most of the work. Note that the aliases must
 precede the fonts. </P
><P
>Donovan has also provided <A
HREF="http://koffice.kde.org/tools/Fontmap.ms"
TARGET="_top"
>fontmap entries</A
> for the widely used Microsoft Web Fonts.
 Just append them to your font map and fix the paths.</P
><P
>For more information, please see the <A
HREF="http://pegasus.rutgers.edu/~elflord/font_howto/"
TARGET="_top"
>Font HOWTO</A
>.</P
></DIV
></DIV
></DIV
><DIV
CLASS="QANDADIV"
><H3
><A
NAME="KWORD"
></A
>7. KWord</H3
><DIV
CLASS="QANDAENTRY"
><DIV
CLASS="QUESTION"
><P
><A
NAME="AEN533"
></A
><B
>7.1. </B
> What is <SPAN
CLASS="APPLICATION"
>KWord</SPAN
>?</P
></DIV
><DIV
CLASS="ANSWER"
><P
><B
> </B
>KWord is the word processor of the <SPAN
CLASS="APPLICATION"
>KOffice</SPAN
>. </P
><P
>KWord's philosophy is simple and very similar to that of Framemaker: everything's
 a frame. Unlike in M&dollar;-Word or StarWriter there isn't one text stream
 which is formatted according to the page format; in <SPAN
CLASS="APPLICATION"
>KWord</SPAN
> text is always in
 a frameset consisting of several frames. Frames can be positioned anywhere on the
 page and they can be connected, so that text that doesn't fit into the first frame
 is continued in the connected frame. This may sound familiar to you if you've
 worked with DTP programs like Framemaker, QuarkXPress, Pagemaker etc. Indeed, for
 doing simple DTP the frame concept of <SPAN
CLASS="APPLICATION"
>KWord</SPAN
> is well suited.</P
><P
>This doesn't make the creation of a simple letter less easy than with other
 word processors: if you create a new document with <SPAN
CLASS="APPLICATION"
>KWord</SPAN
> you can start typing
 right away, not noticing any difference, as <SPAN
CLASS="APPLICATION"
>KWord</SPAN
> by default creates a frame
 for you that fits on the page and automatically creates and connects more frames
 on more pages if you're text is longer etc. So you won't ever notice the difference,
 except if you want to take advantage of all the flexibility frames can offer
 you.</P
></DIV
></DIV
><DIV
CLASS="QANDAENTRY"
><DIV
CLASS="QUESTION"
><P
><A
NAME="AEN546"
></A
><B
>7.2. </B
> What is its current state?</P
></DIV
><DIV
CLASS="ANSWER"
><P
><B
> </B
>KWord is part of the stable releases of <SPAN
CLASS="APPLICATION"
>KOffice</SPAN
>.</P
></DIV
></DIV
><DIV
CLASS="QANDAENTRY"
><DIV
CLASS="QUESTION"
><P
><A
NAME="AEN552"
></A
><B
>7.3. </B
> Can I write my letter / papers / master thesis with <SPAN
CLASS="APPLICATION"
>KWord</SPAN
>?</P
></DIV
><DIV
CLASS="ANSWER"
><P
><B
> </B
>Some of the testing documents are very large, so it should be possible to write even
 larger documents using <SPAN
CLASS="APPLICATION"
>KWord</SPAN
>.</P
></DIV
></DIV
><DIV
CLASS="QANDAENTRY"
><DIV
CLASS="QUESTION"
><P
><A
NAME="AEN559"
></A
><B
>7.4. </B
> Are there filters for MS-Word, StarWriter, RTF, ... ?</P
></DIV
><DIV
CLASS="ANSWER"
><P
><B
> </B
>There is a filter manager for <SPAN
CLASS="APPLICATION"
>KOffice</SPAN
> that allows the development of filters
 for different formats. However, many of these file formats aren't documented
 or are poorly documented, making filter development not an easy task. E.g.
 the MS-Word format partially contains binary object code, making it very difficult
 to parse. If MS-Office should offer XML as a file format in its next versions,
 this will be much easier.</P
><P
>Filters for WinWord, Applixword, DocBook, LaTex, Abiword, ASCII, HTML and RTF are being
 worked on; however, they differ in functionality and maturity. For proprietary binary
 formats like WinWord an export filter is not likely to be ever written.</P
></DIV
></DIV
></DIV
><DIV
CLASS="QANDADIV"
><H3
><A
NAME="KSPREAD"
></A
>8. KSpread</H3
><DIV
CLASS="QANDAENTRY"
><DIV
CLASS="QUESTION"
><P
><A
NAME="AEN568"
></A
><B
>8.1. </B
> What is <SPAN
CLASS="APPLICATION"
>KSpread</SPAN
>?</P
></DIV
><DIV
CLASS="ANSWER"
><P
><B
> </B
>KSpread is the spread sheet application of the <SPAN
CLASS="APPLICATION"
>KOffice</SPAN
>. </P
></DIV
></DIV
><DIV
CLASS="QANDAENTRY"
><DIV
CLASS="QUESTION"
><P
><A
NAME="AEN575"
></A
><B
>8.2. </B
> What is its current state?</P
></DIV
><DIV
CLASS="ANSWER"
><P
><B
> </B
>KSpread is part of the stable releases of <SPAN
CLASS="APPLICATION"
>KOffice</SPAN
>.</P
></DIV
></DIV
><DIV
CLASS="QANDAENTRY"
><DIV
CLASS="QUESTION"
><P
><A
NAME="AEN581"
></A
><B
>8.3. </B
> Is it possible to implement new functions for <SPAN
CLASS="APPLICATION"
>KSpread</SPAN
>?</P
></DIV
><DIV
CLASS="ANSWER"
><P
><B
> </B
>Yes. Using <SPAN
CLASS="APPLICATION"
>KSpread</SPAN
>'s formula language KoScript you can easily add new functionality to
KSpread.</P
></DIV
></DIV
><DIV
CLASS="QANDAENTRY"
><DIV
CLASS="QUESTION"
><P
><A
NAME="AEN588"
></A
><B
>8.4. </B
> Are there import filters for Excel, StarCalc, 1-2-3, ... ?</P
></DIV
><DIV
CLASS="ANSWER"
><P
><B
> </B
>There is a filter manager for <SPAN
CLASS="APPLICATION"
>KOffice</SPAN
> that allows the development of filters
 for different formats. However, many of these file formats aren't documented
 or are poorly documented, making filter development not an easy task. </P
><P
>KSpread has a simple file filter for comma-separated tables, filters for ApplixSpread,
 QPro and Excel 97 are also in the works. However, for proprietary binary formats like
 Excel a corresponding export filter is not likely ever to be written.</P
></DIV
></DIV
></DIV
><DIV
CLASS="QANDADIV"
><H3
><A
NAME="KPRESENTER"
></A
>9. KPresenter</H3
><DIV
CLASS="QANDAENTRY"
><DIV
CLASS="QUESTION"
><P
><A
NAME="AEN597"
></A
><B
>9.1. </B
> What is <SPAN
CLASS="APPLICATION"
>KPresenter</SPAN
>?</P
></DIV
><DIV
CLASS="ANSWER"
><P
><B
> </B
>KPresenter is the presentation application of the <SPAN
CLASS="APPLICATION"
>KOffice</SPAN
>, similar to MS
 Powerpoint in the windows world. You can use it for doing screen presentations
 or transparencies.</P
></DIV
></DIV
><DIV
CLASS="QANDAENTRY"
><DIV
CLASS="QUESTION"
><P
><A
NAME="AEN604"
></A
><B
>9.2. </B
> What is its current state?</P
></DIV
><DIV
CLASS="ANSWER"
><P
><B
> </B
>KPresenter is part of the stable releases of <SPAN
CLASS="APPLICATION"
>KOffice</SPAN
>.</P
></DIV
></DIV
><DIV
CLASS="QANDAENTRY"
><DIV
CLASS="QUESTION"
><P
><A
NAME="AEN610"
></A
><B
>9.3. </B
> Are there import filters?</P
></DIV
><DIV
CLASS="ANSWER"
><P
><B
> </B
>There is a filter manager for <SPAN
CLASS="APPLICATION"
>KOffice</SPAN
> that allows the development of filters
 for different formats. However, many of these file formats aren't documented
 or are poorly documented, making filter development not an easy task. </P
><P
>Currently, there aren't any filters for <SPAN
CLASS="APPLICATION"
>KPresenter</SPAN
>; there's a start for a PowerPoint import
 filter in the <SPAN
CLASS="APPLICATION"
>KOffice</SPAN
> source tree, but this is not yet functional. You might help! :)
 There's the very nice possibility of creating HTML pages with PNGs of your presentation.</P
></DIV
></DIV
></DIV
><DIV
CLASS="QANDADIV"
><H3
><A
NAME="KONTOUR"
></A
>10. Kontour</H3
><DIV
CLASS="QANDAENTRY"
><DIV
CLASS="QUESTION"
><P
><A
NAME="AEN621"
></A
><B
>10.1. </B
> What happened to <SPAN
CLASS="APPLICATION"
>Kontour</SPAN
>?</P
></DIV
><DIV
CLASS="ANSWER"
><P
><B
> </B
>Kontour (formerly known as KIllustrator which had to be changed due to legal reasons) 
used to be a vector drawing program similar to Corel Draw or Adobe
Illustrator. This program is not being actively maintained anymore. The <SPAN
CLASS="APPLICATION"
>Karbon14</SPAN
> 
vector drawing application has taken its place.</P
></DIV
></DIV
><DIV
CLASS="QANDAENTRY"
><DIV
CLASS="QUESTION"
><P
><A
NAME="AEN628"
></A
><B
>10.2. </B
>But then what can I do with my old <SPAN
CLASS="APPLICATION"
>Kontour</SPAN
> files?</P
></DIV
><DIV
CLASS="ANSWER"
><P
><B
> </B
>There is a filter in the works which will allow to open old <SPAN
CLASS="APPLICATION"
>Kontour</SPAN
> files in
<SPAN
CLASS="APPLICATION"
>Karbon14</SPAN
>, so you can then save them in the new <SPAN
CLASS="APPLICATION"
>Karbon14</SPAN
> format. This filter is
not yet complete but you can already find a version in 
<TT
CLASS="FILENAME"
>koffice/filters/karbon/kontour</TT
>.</P
></DIV
></DIV
></DIV
><DIV
CLASS="QANDADIV"
><H3
><A
NAME="KARBON14"
></A
>11. Karbon14</H3
><DIV
CLASS="QANDAENTRY"
><DIV
CLASS="QUESTION"
><P
><A
NAME="AEN640"
></A
><B
>11.1. </B
>What is <SPAN
CLASS="APPLICATION"
>Karbon14</SPAN
>?</P
></DIV
><DIV
CLASS="ANSWER"
><P
><B
> </B
><SPAN
CLASS="APPLICATION"
>Karbon14</SPAN
> is a vector graphics application, similar to Corel Draw or Adobe Illustrator. 
In the <SPAN
CLASS="APPLICATION"
>KOffice</SPAN
> suite, <SPAN
CLASS="APPLICATION"
>Karbon14</SPAN
> has taken the place of the now unmaintained <SPAN
CLASS="APPLICATION"
>Kontour</SPAN
>
application.</P
></DIV
></DIV
></DIV
><DIV
CLASS="QANDADIV"
><H3
><A
NAME="KIVIO"
></A
>12. Kivio</H3
><DIV
CLASS="QANDAENTRY"
><DIV
CLASS="QUESTION"
><P
><A
NAME="AEN652"
></A
><B
>12.1. </B
>What is <SPAN
CLASS="APPLICATION"
>Kivio</SPAN
>?</P
></DIV
><DIV
CLASS="ANSWER"
><P
><B
> </B
>Kivio is a flowcharting application, similar to the well known Visio.
However, flowcharting is not the only thing you can do with it. Using different stencil
sets you can use it for many different kinds of diagrams.</P
></DIV
></DIV
><DIV
CLASS="QANDAENTRY"
><DIV
CLASS="QUESTION"
><P
><A
NAME="AEN658"
></A
><B
>12.2. </B
>Where can I find more information on <SPAN
CLASS="APPLICATION"
>Kivio</SPAN
>?</P
></DIV
><DIV
CLASS="ANSWER"
><P
><B
> </B
>Kivio is contributed and maintained by <A
HREF="http://www.thekompany.com"
TARGET="_top"
>The
Kompany</A
>. They have a homepage for it at <A
HREF="http://www.thekompany.com/projects/kivio"
TARGET="_top"
>http://www.thekompany.com/projects/kivio</A
>.</P
></DIV
></DIV
></DIV
><DIV
CLASS="QANDADIV"
><H3
><A
NAME="KUGAR"
></A
>13. Kugar and Kudesigner</H3
><DIV
CLASS="QANDAENTRY"
><DIV
CLASS="QUESTION"
><P
><A
NAME="AEN668"
></A
><B
>13.1. </B
>What is <SPAN
CLASS="APPLICATION"
>Kugar</SPAN
>?</P
></DIV
><DIV
CLASS="ANSWER"
><P
><B
> </B
><SPAN
CLASS="APPLICATION"
>Kugar</SPAN
> is a template-based business-quality xml report generation tool.</P
></DIV
></DIV
><DIV
CLASS="QANDAENTRY"
><DIV
CLASS="QUESTION"
><P
><A
NAME="AEN675"
></A
><B
>13.2. </B
>What is <SPAN
CLASS="APPLICATION"
>Kudesigner</SPAN
>?</P
></DIV
><DIV
CLASS="ANSWER"
><P
><B
> </B
><SPAN
CLASS="APPLICATION"
>Kudesigner</SPAN
> is a WYSIWYG GUI report template designer for the Kugar report 
engine.</P
></DIV
></DIV
><DIV
CLASS="QANDAENTRY"
><DIV
CLASS="QUESTION"
><P
><A
NAME="AEN682"
></A
><B
>13.3. </B
>Where can I find more information on <SPAN
CLASS="APPLICATION"
>Kugar</SPAN
> and <SPAN
CLASS="APPLICATION"
>Kudesigner</SPAN
>?</P
></DIV
><DIV
CLASS="ANSWER"
><P
><B
> </B
><SPAN
CLASS="APPLICATION"
>Kugar</SPAN
> and <SPAN
CLASS="APPLICATION"
>Kudesigner</SPAN
> are maintained by Alexander Dymo 
&lt;<A
HREF="mailto:cloudtemple at mksat dot net"
TARGET="_top"
>cloudtemple at mksat dot net</A
>&gt;.
The <SPAN
CLASS="APPLICATION"
>Kugar</SPAN
> homepage is <A
HREF="http://www.thekompany.com/projects/kugar"
TARGET="_top"
>http://www.thekompany.com/projects/kugar</A
>, also a 
maintainer's homepage is <A
HREF="http://www.cloudtemple.mksat.net"
TARGET="_top"
>http://www.cloudtemple.mksat.net</A
>.</P
></DIV
></DIV
><DIV
CLASS="QANDAENTRY"
><DIV
CLASS="QUESTION"
><P
><A
NAME="AEN695"
></A
><B
>13.4. </B
>Are <SPAN
CLASS="APPLICATION"
>Kugar</SPAN
> and <SPAN
CLASS="APPLICATION"
>Kudesigner</SPAN
> multi-platform?</P
></DIV
><DIV
CLASS="ANSWER"
><P
><B
> </B
>The <SPAN
CLASS="APPLICATION"
>Kugar</SPAN
> report engine is written in pure Qt, so it can be used on Mac and 
Windows platforms, too. <SPAN
CLASS="APPLICATION"
>Kudesigner</SPAN
> is a KDE application, so like the rest of KDE it can be used
on Unix/X11 platforms only.</P
><P
>However, there is a Qt version of <SPAN
CLASS="APPLICATION"
>Kugar</SPAN
> report designer. Its sources can be
downloaded from <A
HREF="http://www.cloudtemple.mksat.net"
TARGET="_top"
>http://www.cloudtemple.mksat.net</A
> 
and compiled on the Mac and Windows platforms. Note that the Qt-edition of the report designer 
is somewhat outdated, so please first contact the maintainer 
(Alexander Dymo &lt;<A
HREF="mailto:cloudtemple at mksat dot net"
TARGET="_top"
>cloudtemple at mksat dot net</A
>&gt;)
before using it.</P
></DIV
></DIV
></DIV
><DIV
CLASS="QANDADIV"
><H3
><A
NAME="KRITA"
></A
>14. Krita</H3
><DIV
CLASS="QANDAENTRY"
><DIV
CLASS="QUESTION"
><P
><A
NAME="AEN710"
></A
><B
>14.1. </B
> What is <SPAN
CLASS="APPLICATION"
>Krita</SPAN
>?</P
></DIV
><DIV
CLASS="ANSWER"
><P
><B
> </B
>Krita is an image processor for <SPAN
CLASS="APPLICATION"
>KOffice</SPAN
>, which should be suitable for
 all your image creation and editing needs.</P
><P
><SPAN
CLASS="emphasis"
><I
CLASS="EMPHASIS"
>Please note that <SPAN
CLASS="APPLICATION"
>Krita</SPAN
> is not yet part of <SPAN
CLASS="APPLICATION"
>KOffice</SPAN
> stable releases.</I
></SPAN
></P
></DIV
></DIV
></DIV
><DIV
CLASS="QANDADIV"
><H3
><A
NAME="OTHER"
></A
>15. Other <SPAN
CLASS="APPLICATION"
>KOffice</SPAN
> programs</H3
><DIV
CLASS="QANDAENTRY"
><DIV
CLASS="QUESTION"
><P
><A
NAME="AEN724"
></A
><B
>15.1. </B
> What's <SPAN
CLASS="APPLICATION"
>KChart</SPAN
>/<SPAN
CLASS="APPLICATION"
>KDiagram</SPAN
> and what's the difference?</P
></DIV
><DIV
CLASS="ANSWER"
><P
><B
> </B
>Both <SPAN
CLASS="APPLICATION"
>KChart</SPAN
> and <SPAN
CLASS="APPLICATION"
>KDiagram</SPAN
> were <SPAN
CLASS="APPLICATION"
>KOffice</SPAN
> parts for generating diagrams from data,
 e.g. pie and bar charts. They have been merged, and only <SPAN
CLASS="APPLICATION"
>KChart</SPAN
> exists now.</P
></DIV
></DIV
></DIV
><DIV
CLASS="QANDADIV"
><H3
><A
NAME="CONTRIB"
></A
>16. Contributing to KOffice</H3
><DIV
CLASS="QANDAENTRY"
><DIV
CLASS="QUESTION"
><P
><A
NAME="AEN737"
></A
><B
>16.1. </B
> I like this project! How can I contribute?</P
></DIV
><DIV
CLASS="ANSWER"
><P
><B
> </B
>Great. There are many fields, where help is needed (in fact, all fields).
 You might:</P
><P
></P
><UL
><LI
><P
>help programming. This means development work on the main applications, new
 applications, filters (desperately needed!), plugins and datatools, more
 functions for <SPAN
CLASS="APPLICATION"
>KSpread</SPAN
> ...</P
></LI
><LI
><P
><A
HREF="http://koffice.kde.org/getinvolved/doc-help.html"
TARGET="_top"
>write documentation</A
></P
></LI
><LI
><P
>translate <SPAN
CLASS="APPLICATION"
>KOffice</SPAN
></P
></LI
><LI
><P
>draw graphics</P
></LI
><LI
><P
>help maintaining the web page</P
></LI
><LI
><P
>fix small bugs if you find them and send a patch to <TT
CLASS="EMAIL"
>&#60;<A
HREF="mailto:koffice at kde dot org"
>koffice at kde dot org</A
>&#62;</TT
>.</P
></LI
><LI
><P
><A
HREF="http://koffice.kde.org/support"
TARGET="_top"
>donate</A
> money or hardware :-) Yes, this is needed in free software
development, too :)</P
></LI
></UL
><P
>If you want to help the <SPAN
CLASS="APPLICATION"
>KOffice</SPAN
> developers (or even become one) please
<A
HREF="http://koffice.kde.org/contact.phtml#lists"
TARGET="_top"
>subscribe</A
> to our
mailing lists so you know what's needed and we avoid duplicating work.
Please don't be angry if you don't get instant replies - everybody has a lot to do.</P
></DIV
></DIV
><DIV
CLASS="QANDAENTRY"
><DIV
CLASS="QUESTION"
><P
><A
NAME="AEN765"
></A
><B
>16.2. </B
> I
want to help with documentation. How do I start?</P
></DIV
><DIV
CLASS="ANSWER"
><P
><B
> </B
> Have a look at the <TT
CLASS="FILENAME"
>doc</TT
>-directory and its
subdirs in the <SPAN
CLASS="APPLICATION"
>KOffice</SPAN
> sources. In
<TT
CLASS="FILENAME"
>README.documentation</TT
> you can see an (incomplete) list
of tasks and who they're assigned to. Pick what you like best and contact
the person in charge or put yourself in charge if nobody has started yet.
As I can't assure <TT
CLASS="FILENAME"
>README.documentation</TT
> will always be
up-to-date, you may first want to send a mail to all mentioned authors,
saying hello and such. They can help you to get a start and can answer
questions.</P
><P
>Our documentation markup language of choice is DocBook. You might want to
subscribe to <TT
CLASS="EMAIL"
>&#60;<A
HREF="mailto:kde-docbook at kde dot org"
>kde-docbook at kde dot org</A
>&#62;</TT
>, where DocBook-related questions can be
asked. Please visit <A
HREF="http://i18n.kde.org"
TARGET="_top"
>http://i18n.kde.org</A
>
for more information and a DocBook crash course.</P
><P
>If you don't know DocBook and don't want to learn it, you can still work on
documentation by writing plain text. Send it to me (Jost Schenck)
<TT
CLASS="EMAIL"
>&#60;<A
HREF="mailto:jost at schenck dot de"
>jost at schenck dot de</A
>&#62;</TT
>. Either I'll convert it and check it in or I'll
send it to the person that's in charge of this right now. Note that it's easier for
us if you send us plain text rather than HTML.</P
></DIV
></DIV
><DIV
CLASS="QANDAENTRY"
><DIV
CLASS="QUESTION"
><P
><A
NAME="AEN779"
></A
><B
>16.3. </B
> I want to write filters. How do I start?</P
></DIV
><DIV
CLASS="ANSWER"
><P
><B
> </B
>Werner Trobin <TT
CLASS="EMAIL"
>&#60;<A
HREF="mailto:trobin at kde dot org"
>trobin at kde dot org</A
>&#62;</TT
> is the one you need to talk
 to. Werner has uploaded <A
HREF="http://koffice.kde.org/filters/index.php"
TARGET="_top"
>useful information on filters</A
>
 to the KOffice web page.</P
></DIV
></DIV
><DIV
CLASS="QANDAENTRY"
><DIV
CLASS="QUESTION"
><P
><A
NAME="AEN786"
></A
><B
>16.4. </B
> I want to help with application XYZ. How do I start?</P
></DIV
><DIV
CLASS="ANSWER"
><P
><B
> </B
>Just write to <TT
CLASS="EMAIL"
>&#60;<A
HREF="mailto:koffice at kde dot org"
>koffice at kde dot org</A
>&#62;</TT
> or subscribe and write to
<TT
CLASS="EMAIL"
>&#60;<A
HREF="mailto:koffice-devel at kde dot org"
>koffice-devel at kde dot org</A
>&#62;</TT
> (koffice-devel is only open for postings
by subscribed people) and tell us what you want to work on.</P
></DIV
></DIV
><DIV
CLASS="QANDAENTRY"
><DIV
CLASS="QUESTION"
><P
><A
NAME="AEN793"
></A
><B
>16.5. </B
> I want to write a new KOffice application. How do I start?</P
></DIV
><DIV
CLASS="ANSWER"
><P
><B
> </B
>In the CVS module <TT
CLASS="FILENAME"
>koffice</TT
> you'll find an
example program. This program is probably a good start for your own KOffice compliant
application. Additionally, you might want to use <SPAN
CLASS="APPLICATION"
>kdoc</SPAN
> on
the headers in <TT
CLASS="FILENAME"
>koffice/lib/*</TT
> to get library documentation.
You'll find <SPAN
CLASS="APPLICATION"
>kdoc</SPAN
> in the CVS module <TT
CLASS="FILENAME"
>kdoc</TT
>.</P
></DIV
></DIV
></DIV
><DIV
CLASS="QANDADIV"
><H3
><A
NAME="KPARTS"
></A
>17. KParts - the underlying component model</H3
><DIV
CLASS="QANDAENTRY"
><DIV
CLASS="QUESTION"
><P
><A
NAME="AEN805"
></A
><B
>17.1. </B
> What is this KParts you're always talking about?</P
></DIV
><DIV
CLASS="ANSWER"
><P
><B
> </B
>Long ago the <SPAN
CLASS="APPLICATION"
>KOffice</SPAN
> was based on the KOM/OP component model, which itself was based
 on the CORBA standard for communication between distributed objects.
 The new component model is named KParts (formerly known as canossa) and it's based
 on shared libs. The new IIPC/RPC mechanism is called <SPAN
CLASS="APPLICATION"
>dcop</SPAN
>.</P
><P
>In the "silent" world of a normal unix desktop, an application can be
 more or less integrated into the desktop environment, but normally it will
 run absolutely isolated from other applications. All these applications try
 on their own to be powerful and easy to use. Now, one application offers certain
 features to the user and a different application may offer some similar features,
 although for a different task. The programmers of both applications have to implement
 things somebody else already has implemented. They might implement it in a
 slightly different way, so the user is confused when switching applications.
 Bugs are fixed in just one of the applications. Several programmers spend working time
 on reinventing the wheel instead of concentrating on other things.</P
><P
>In the world of components this is different. Applications are not isolated
 anymore but are in contact with eachother. An application doesn't just offer
 its services to the user - it can also offer it to other applications. A word
 processor and an HTML editor might both need a spell checker; instead of implementing
 it again, both programs ask a third application for its spell checking services.
 An application that's specialized on spell checking. As the number of useful
 components grows, every application starts working in a large bazaar where
 every service can be offered by a specialist. This way components
<P
></P
><UL
><LI
><P
>reduce development time (because large parts of applications can just
 be plugged in rather than reinventing the wheel)</P
></LI
><LI
><P
>reduce maintenance difficulties (every wheel that's reinvented needs bugfixing
 time of its own)</P
></LI
><LI
><P
>make programs much more powerful (because features can be plugged in that
 would otherwise be too difficult to implement for just one programmer)</P
></LI
><LI
><P
>make programs more flexible (they can adjust themselves according to the
 components that exist on the system they run on)</P
></LI
><LI
><P
>realize compound documents and similar things.</P
></LI
></UL
> </P
></DIV
></DIV
><DIV
CLASS="QANDAENTRY"
><DIV
CLASS="QUESTION"
><P
><A
NAME="AEN825"
></A
><B
>17.2. </B
> I want deeper knowledge about these technologies - where do I find it?</P
></DIV
><DIV
CLASS="ANSWER"
><P
><B
> </B
>There already was some documentation on the CORBA based component model; I don't
 know how much there is for KParts. Anyway, as KParts is <SPAN
CLASS="emphasis"
><I
CLASS="EMPHASIS"
>much</I
></SPAN
>
 easier to program than the old CORBA stuff was, it won't be difficult for you
 to get into it. A good start is the example program you'll find in the <TT
CLASS="FILENAME"
>koffice</TT
>
 module. Just modify it to fit your needs. Regarding dcop, take a look
 at the HOWTO file in <TT
CLASS="FILENAME"
>kdelibs/dcop</TT
>.</P
><P
>New documentation on KDE development will normally somewhen appear on
<A
HREF="http://developer.kde.org"
TARGET="_top"
>http://developer.kde.org</A
>.</P
></DIV
></DIV
></DIV
></DIV
></DIV>

<?php
 include("footer.inc");
?>
