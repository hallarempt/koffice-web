<?php
  $page_title ='KOffice 1.1 Beta2 Announcement';
  $site_root = '../';
  include("koffice.inc");
  include("header.inc");
?>
    <p>DATELINE MAY 21, 2001</p>

    <p>FOR IMMEDIATE RELEASE</p>

    <h3 align="center">KOffice Suite Beta Released for Linux</h3>

    <p><strong>KDE, the Leading Linux Desktop, Ships Beta of KOffice
    Suite</strong></p>

    <p>May 21, 2001 (The INTERNET). The <a href="http://www.kde.org/">KDE
    Project</a> today announced the release of <a
    href="http://www.koffice.org/">KOffice</a> 1.1beta2. KOffice is an
    integrated office suite for KDE which utilizes open standards for component
    communication and component embedding. The primary goals of this release,
    which comes 4 weeks after the release of KOffice 1.1beta1, are to provide a
    preview of KOffice&nbsp;1.1 and to involve users who wish to request
    missing features or report problems. Code development is currently focused
    on stabilizing KOffice 1.1, <a
    href="http://developer.kde.org/development-versions/koffice-1.1-release-plan.html">
    scheduled</a> for final release this summer.</p>

    <p>This release includes the following components: <a
    href="#kword">KWord</a> (a frame-based, full-featured word processor); <a
    href="#kpresenter">KPresenter</a> (a presentation application); <a
    href="#kspread">KSpread</a> (a spreadsheet application); <a
    href="#killustrator">KIllustrator</a> (a vector-drawing application); <a
    href="#krayon">Krayon</a> (a bitmap image editor); <a
    href="#kivio">Kivio</a> (a flowchart application); <a
    href="#kchart">KChart</a> (a chart drawing application); <a
    href="#kformula">KFormula</a> (a formula editor); <a
    href="#kugar">Kugar</a> (a tool for generating business quality reports);
    and <a href="#filters">filters</a> (for importing/exporting documents).</p>

    <p>While the entire release is designated as a beta release, individual
    components are all at various stages of development, which is indicated
    next to each component's description below. Changes to individual KOffice
    components are also enumerated below. In addition, a <a
    href="http://www.koffice.org/announcements/changelog-1.1.php">list of
    changes</a> and a <a href="http://www.koffice.org/faq/">FAQ about
    KOffice</a> are available at the KOffice <a
    href="http://www.koffice.org/">website</a>.</p>

    <p>KOffice and all its components are available for free under Open Source
    licenses from the KDE <a
    href="http://ftp.kde.org/unstable/koffice-1.1-beta2/">server</a> and its <a
    href="http://www.kde.org/mirrors.html">mirrors</a>. As a result of the
    dedicated efforts of hundreds of translators, KOffice 1.1beta2 is available
    in <a href="http://i18n.kde.org/teams/distributed.html">26
    <!--Well, there are
    actually 26, but not exactly the ones listed there--></a> languages.</p>

    <h4>KOffice Components</h4>
    <br />
    <br />
     

    <p>KOffice is an integrated office suite consisting of numerous components
    which can interact, share data and embed each other using KDE's open KParts
    and DCOP technologies. A new overall feature in 1.1beta2 is the autosave
    feature, which allows users to have an automatic backup copy regularly
    updated, in case of an unlikely crash. The 1.1beta2 release includes the
    following components:</p>

    <ol>
      <!-- KWORD -->

      <li>
        <a id="kword" name="kword"></a><a
        href="http://www.koffice.org/kword/"><em>KWord</em></a>
        (<em>alpha</em>). KWord is a frame-based word-processing and desktop
        publishing application. KWord's features include: 

        <ul>
          <li>paragraph settings (alignment, spacings, indentations, numbering,
          etc.);</li>

          <li>a stylist to edit, add, remove and update paragraph styles
          (including a number of provided ones);</li>

          <li>frame orientation;</li>

          <li>multiple columns per page;</li>

          <li>tables;</li>

          <li>image and other document embedding;</li>

          <li>in-place formula editing;</li>

          <li>headers and footers;</li>
          <!-- Not in beta2 <LI>footnotes and endnotes;</LI> -->

          <li>chapter numbering;</li>

          <li>document statistics;</li>

          <li>auto-generation of table of contents;</li>

          <li>variables;</li>
          <!-- Not in beta2 <LI>mail merge;</LI>-->

          <li><!-- Not in beta2 autocorrection and-->spell checking; and</li>

          <li>templates.</li>
        </ul>
        <br />
        Since KOffice-1.0, KWord has been completely redesigned, and is based
        on a new formatting engine (Qt RichText).<br />
        Changes since the last release (beta1) include: 

        <ul>
          <li>Copying frames has been implemented, fixing headers and
          footers.</li>

          <li>Implemented tabulators (left/right/center/decimal aligned).</li>

          <li>Implemented floating framesets, mainly for inline formulas and
          tables.</li>

          <li>KWord can now be embedded into another KOffice application.</li>

          <li>More precise coordinate system (especially for frames).</li>

          <li>Many improvements for tables (including splitting and merging
          cells).</li>

          <li>Highlight mispelled word during spell-checking, and spell-check
          all framesets.</li>

          <li>UI improvements including a complete redesign of the menus,
          undo/redo fixes, font-size fix, border-drawing improved, etc.</li>

          <li>Fixed crash when embedding into Konqueror.</li>

          <li>Many new variables available.</li>

          <li>Redesigned style editor (stylist), now all in one dialog.</li>

          <li>When changing a style, only the changes are applied to existing
          paragraphs (not the whole style).</li>

          <li>Fixed drawing and printing of embedded objects.</li>

          <li>Respect user's color scheme.</li>

          <li>Improved visual appearance (page shape, with shadow).</li>
        </ul>
      </li>
      <!-- KPRESENTER -->

      <li style="list-style: none"><br />
      </li>

      <li>
        <a id="kpresenter" name="kpresenter"></a><a
        href="http://www.koffice.org/kpresenter/"><em>KPresenter</em></a>
        (<em>beta</em>). KPresenter is a presentation application which
        features: 

        <ul>
          <li>inserting all kinds of graphic objects;</li>

          <li>inserting and editing rich text (with lists, indentations,
          spacings, colors, fonts, ...);</li>

          <li>inserting autoforms;</li>

          <li>inserting pictures and clipart;</li>

          <li>embedding other KOffice parts;</li>

          <li>setting many object properties (background, many types of
          gradients, pen, shadow, rotation, object specific settings,
          ....;</li>

          <li>working with objects (resizing, moving, lowering, raising,
          ...);</li>

          <li>grouping/ungrouping objects;</li>

          <li>headers/footers;</li>

          <li>advanced undo/redo;</li>

          <li>setting background (color, gradients, pictures, cliparts,
          etc.);</li>

          <li>assigning effects for animating objects and defining effects for
          changing slides;</li>

          <li>playing screen presentations with effects;</li>

          <li>print as PostScript;</li>

          <li>creating HTML slideshows with a few mouse clicks;</li>

          <li>using and creating templates;</li>

          <li>using XML as document format; and</li>

          <li>a Presentations Structure Viewer.</li>
        </ul>
        <br />
        Changes since the last release include: 

        <ul>
          <li>Pages can now be renamed (independently from their title text
          object)</li>

          <li>New templates added</li>

          <li>Fixed AutoForm loading bug</li>

          <li>Speedup for loading and saving + smaller file size</li>
        </ul>
      </li>
      <!-- KSPREAD -->

      <li style="list-style: none"><br />
      </li>

      <li>
        <a id="kspread" name="kspread"></a><a
        href="http://www.koffice.org/kspread/"><em>KSpread</em></a>
        (<em>beta</em>). KSpread is a full featured spreadsheet program. It can
        work as a traditional table-oriented sheet but also supports complex
        mathematical formulas and statistics. In addition, KSpread supports
        displaying data graphically, scripting using a restricted (for security
        purposes) language and templates.<br />
        <br />
        Changes since the last release include: 

        <ul>
          <li>Copy can now export plain text.</li>

          <li>Builtin visual support (based on the old kformula lib) removed,
          the kformula part can be used instead.</li>

          <li>Fixed drawing of embedded kspread document.</li>
        </ul>
      </li>
      <!-- KILLUSTRATOR -->

      <li style="list-style: none"><br />
      &nbsp;</li>

      <li>
        <a id="killustrator" name="killustrator"></a><a
        href="http://www.koffice.org/kontour"><em>KIllustrator</em></a>
        (<em>alpha</em>). KIllustrator is the vector drawing program for
        KOffice. The aim of the KIllustrator project is the development of a
        freely available vector-based drawing application similiar to <a
        href="http://www3.corel.com/cgi-bin/gx.cgi/AppLogic+FTContentServer?pagename=Corel/Product/Details&amp;id=CC1IOY1YKCC">
        Corel Draw</a> or <a
        href="http://www.adobe.com/products/illustrator/main.html">Adobe
        Illustrator</a>.<br />
        <br />
        Changes since the last release include improved speed and usability. 

        <ul>
          <li>Helplines can be dragged.</li>

          <li>Mouse cursor flickering fixed.</li>

          <li>Fixes for readonly mode (e.g. embedded in konqueror).</li>

          <li>UI improvements.</li>
        </ul>
      </li>
      <!-- KRAYON -->

      <li style="list-style: none"><br />
      &nbsp;</li>

      <li><a id="krayon" name="krayon"></a><a
      href="http://www.koffice.org/krayon/"><em>Krayon</em></a>
      (<em>beta</em>). Krayon (f/k/a KImageShop) is an effort to make a
      professional level bitmap image painting and editing component of the
      KOffice project.<br />
      <br />
      Krayon is being released with KOffice for the first time.<br />
      </li>
      <!-- KIVIO -->

      <li style="list-style: none"><br />
      &nbsp;</li>

      <li>
        <a id="kivio" name="kivio"></a><a
        href="http://www.thekompany.com/projects/kivio/"><em>Kivio</em></a>
        (<em>stable</em>). Kivio is a flowcharting program which offers more
        than basic flowcharting abilities. Objects are scriptable, and a
        backend plugin system will offer the ability to make objects do just
        about anything. Feed it a directory of C++ header files, or even Java
        files, and let it generate a graphical class map for you. Give it a
        network and let it explore and map out the network for you. All this is
        possible through the scripting/plugin architecture Kivio will possess.
        The scripting language chosen is <a
        href="http://www.python.org/">Python</a>, though knowledge of Python or
        programming is not required to use Kivio. Kivio's features include: 

        <ul>
          <li>Multiple paper size support. All standard paper sizes are
          supported (letter, A4, etc...), and you have the ability to create
          your own.</li>

          <li>Dynamically loadable stencils. Stencils support various
          attributes such as border width, foreground color and fill style
          (gradient, solid, pattern, pixmap, arrow heads and text).</li>

          <li>Multiple pages per document to allow you to organize your
          document according to your own needs.</li>

          <li>Grouping. Select any stencils you want, and group them into a
          single element for easier manipulation.</li>

          <li>Full clipboard support (cut/copy/paste/duplicate).</li>

          <li>Clipboard history. Paste previously copied stencils!</li>

          <li>Layer support. Stencils can be layed out on different layers for
          easier organization. Stencils also default to specific layers. For
          example, if you are laying out a floorplan, furniture goes on one
          layer, while walls and structural shapes go on another, and wiring on
          yet another.</li>

          <li>KParts support, which allows placing a Kivio document in a <a
          href="#kword">KWord</a> document or inserting a <a
          href="#kspread">KSpread</a> spreadsheet into Kivio for
          diagramming.</li>

          <li>Customizable helper lines for easy alignment.</li>

          <li>Subselections. Some stencils are made up of numerous small
          shapes; with subselections you can change it.</li>

          <li>Python scripting. Scripting allows not only the programming of
          the stencils, but also Kivio. Scripting can be used to add new
          interface elements or visualization tools.</li>

          <li>C++ Plugin interface.</li>

          <li>Customizable user interface. If you do not like the layout of the
          screen by default, drag the various elements around until you are
          satisfied. Some elements even allow you to change their colors for a
          more pleasing look.</li>

          <li>Dynamically resizing grid. As you zoom in further and further on
          a document, the grid will constantly refine itself to allow you to
          place your stencils with more precision.</li>

          <li>Stencil builder. The stencil builder permits you to create your
          own stencils without doing any programming.</li>
        </ul>
        <br />
        Changes since the last release include: 

        <ul>
          <li>UI improvements.</li>

          <li>Connector bug fixed.</li>
        </ul>
      </li>
      <!-- KCHART -->

      <li style="list-style: none"><br />
      </li>

      <li>
        <a id="kchart" name="kchart"></a><a
        href="http://www.koffice.org/kchart/"><em>KChart</em></a>
        (<em>alpha</em>). KChart is an embeddable chart drawing application.
        Features include: 

        <ul>
          <li>Simple wizard-based chart creation.</li>

          <li>Support for bar charts, line charts, pie charts, hi-lo charts and
          area charts</li>

          <li>Seamless integration into <a href="#kspread">KSpread</a>.</li>
        </ul>
      </li>
      <!-- KFORMULA -->

      <li style="list-style: none"><br />
      &nbsp;</li>

      <li>
        <a id="kformula" name="kformula"></a><a
        href="http://www.koffice.org/kformula/"><em>KFormula</em></a>
        (<em>beta</em>). KFormula is a formula editor which provides
        easy-to-use input facilities. Some of its most exciting features are: 

        <ul>
          <li>Easy Greek letter insertion.</li>

          <li>Intelligent cursor movement.</li>

          <li>Advanced syntax highlighting.</li>

          <li>Multi-level undo support.</li>

          <li>LaTeX export (copy and paste into a text editor).</li>
        </ul>
        <br />
        <!-- VERIFY: change list ?-->
        Since KOffice-1.0, KFormula has been completely redesigned and much
        improved.<br />
      </li>
      <!-- KUGAR -->

      <li style="list-style: none"><br />
      </li>

      <li>
        <a id="kugar" name="kugar"></a><a
        href="http://www.thekompany.com/projects/kugar/"><em>Kugar</em></a>
        (<em>stable</em>). Kugar is a tool for generating business quality
        reports. Besides the standalone report viewer, Kugar is available as a
        KPart report viewer. This means that any KDE application can embed the
        report viewing functionality and that reports can be viewed using the
        Konqueror browser. Kugar works by merging application generated data
        with a template to produce the final report. Both the data and the
        template are specified using XML. This approach means that applications
        only need worry about generating the data itself. A template can be
        referenced via a URL which allows businesses to create a centrally
        managed template library. Kugar templates include the following
        features: 

        <ul>
          <li>Report headers and footers.</li>

          <li>Page headers and footers including page numbers and current date
          and time.</li>

          <li>Calculations of counts, sums, averages, variance and standard
          deviation.</li>

          <li>Number formatting based on value.</li>

          <li>Currency and date formatting.</li>

          <li>Full control of fonts, colors, text alignment and wrapping.</li>

          <li>Line drawing in multiple styles.</li>
        </ul>
        <br />
        Kugar is being released with KOffice for the first time.<br />
      </li>
      <!-- FILTERS -->

      <li style="list-style: none"><br />
      </li>

      <li>
        <a id="filters" name="filters"></a><a
        href="http://www.koffice.org/filters/"><em>Filters</em></a>. Various
        import/export filters are available in most of the KOffice applications
        to support document exchange with users of other office suits. For more
        information on KOffice filter status, including import filters for MS
        WinWord 97 and MS Excel 97, please visit the <a
        href="http://www.koffice.org/filters/">KOffice filters status
        page</a>.<br />
        <br />
        Changes since the last release include: 

        <ul>
          <li>New filter: Quattro Pro import filter for KSpread</li>

          <li>Improvements to the MS WinWord and MS Excel import filters (less
          crashes, more features)</li>

          <li>Improvements to the HTML and Abiword export filters</li>
        </ul>
      </li>
    </ol>
    <br />
    <br />
     

    <h4>Downloading and Compiling KOffice</h4>
    <br />
    <br />
     

    <p>The source packages for KOffice 1.1beta2 are available for free download
    at <a
    href="http://ftp.kde.org/unstable/koffice-1.1-beta2/src/">http://ftp.kde.org/unstable/koffice-1.1-beta2/src/</a>
    or in the equivalent directory at one of the many KDE ftp server <a
    href="http://www.kde.org/mirrors.html">mirrors</a>. KOffice 1.1beta2
    requires qt-x11-2.2.4 or greater, which is available from <a
    href="http://www.trolltech.com/">Trolltech</a> at <a
    href="ftp://ftp.trolltech.com/qt/source/">ftp://ftp.trolltech.com/qt/source/</a>
    under the name <a
    href="ftp://ftp.trolltech.com/qt/source/qt-x11-2.2.4.tar.gz">qt-x11-2.2.4.tar.gz</a>,
    although <a
    href="ftp://ftp.trolltech.com/pub/qt/source/qt-x11-2.3.0.tar.gz">qt-x11-2.3.0</a>
    is recommended, as well as kdesupport-2.1.x, kdelibs 2.1.2 (kdelibs 2.1.x
    will work but will cause some crashes and anti-aliased font problems),
    which are available from the KDE ftp servers at <a
    href="http://ftp.kde.org/stable/2.1.1/distribution/">http://ftp.kde.org/stable/2.1.1/distribution/</a>
    and <a
    href="http://ftp.kde.org/stable/2.1.2/distribution/">http://ftp.kde.org/stable/2.1.2/distribution/</a>
    (<em>see also</em> the <a
    href="http://www.kde.org/announcements/announce-2.1.1.html">KDE 2.1.1 press
    release</a> and the <a
    href="http://www.kde.org/announcements/announce-2.1.2.html">KDE 2.1.2 press
    release</a> for more information). KOffice 1.1beta2 will not work with
    versions of Qt older than 2.2.4 or versions of kdelibs older than
    2.1.x.</p>

    <p>For further instructions on compiling and installing KOffice, please
    consult the <a
    href="http://www.koffice.org/download/source.php">installation
    instructions</a>.</p>

    <h4>Installing Binary Packages</h4>
    <br />
    <br />
     

    <p>Some distributors choose to provide binary packages of KOffice for
    certain versions of their distribution. Some of these binary packages for
    KOffice 1.1beta2 will be available for free download under <a
    href="http://ftp.kde.org/unstable/koffice-1.1-beta2/">http://ftp.kde.org/unstable/koffice-1.1-beta2/</a>
    or under the equivalent directory at one of the many KDE ftp server <a
    href="http://www.kde.org/mirrors.html">mirrors</a>. Please note that the
    KDE team is not responsible for these packages as they are provided by
    third parties -- typically, but not always, the distributor of the relevant
    distribution (if you cannot find a binary package for your distribution,
    please read the <a href="http://dot.kde.org/986933826/">KDE Binary Package
    Policy</a>).</p>

    <p>KOffice 1.1beta2 requires qt-2.2.4 or greater, which is available from
    <a href="http://www.trolltech.com/">Trolltech</a> at <a
    href="ftp://ftp.trolltech.com/qt/source/">ftp://ftp.trolltech.com/qt/source/</a>
    under the name <a
    href="ftp://ftp.trolltech.com/qt/source/qt-x11-2.2.4.tar.gz">qt-x11-2.2.4.tar.gz</a>,
    although <a
    href="ftp://ftp.trolltech.com/pub/qt/source/qt-x11-2.3.0.tar.gz">qt-2.3.0</a>
    is recommended, as well as kdesupport-2.1.x, kdelibs 2.1.2 (kdelibs 2.1.x
    will work but will cause some crashes and anti-aliased font problems) and
    kdebase-2.1.x, which are available from the KDE ftp servers at <a
    href="http://ftp.kde.org/stable/2.1.1/distribution/">http://ftp.kde.org/stable/2.1.1/distribution/</a>
    and <a
    href="http://ftp.kde.org/stable/2.1.2/distribution/">http://ftp.kde.org/stable/2.1.2/distribution/</a>
    (<em>see also</em> the <a
    href="http://www.kde.org/announcements/announce-2.1.1.html">KDE 2.1.1 press
    release</a> and the <a
    href="http://www.kde.org/announcements/announce-2.1.2.html">KDE 2.1.2 press
    release</a> for more information). KOffice 1.1beta2 will not work with
    versions of Qt older than 2.2.4 or versions of kdelibs older than
    2.1.x.</p>

    <p>At the time of this release, pre-compiled packages are available
    for:</p>

    <ul>
      <li>
        <a href="http://www.debian.org/">Debian GNU/Linux</a>: 

        <ul>
          <li><a href="ftp://ftp.debian.org/">ftp.debian.org</a>: sid
          (devel)</li>

          <li><a href="ftp://kde.debian.net/">kde.debian.net</a>: potato
          (2.2)</li>
        </ul>
      </li>

      <li>
        <a href="http://www.linux-mandrake.com/">Linux Mandrake</a>: 

        <ul>
          <li>8.0: <a
          href="http://ftp.kde.org/unstable/koffice-1.1-beta2/Mandrake/8.0/kdelibs-2.1.1/">
          i386</a></li>
        </ul>
      </li>

      <li>
        <a href="http://www.redhat.com/">RedHat</a>: 

        <ul>
          <li>7.1: <a
          href="http://ftp.kde.org/unstable/koffice-1.1-beta2/RedHat/7.1/i386/">
          i386</a>, <a
          href="http://ftp.kde.org/unstable/koffice-1.1-beta2/RedHat/7.1/alpha/">
          alpha</a> and <a
          href="http://ftp.kde.org/unstable/koffice-1.1-beta2/RedHat/7.1/ia64/">
          ia64</a> ; please see the <a
          href="http://ftp.kde.org/unstable/koffice-1.1-beta2/RedHat/7.1/noarch/">
          noarch</a> directory for translations</li>
        </ul>
      </li>

      <li>
        <a href="http://www.suse.com/">SuSE Linux</a> (<a
        href="http://ftp.kde.org/unstable/koffice-1.1-beta2/SuSE/README.SuSE">README</a>):
        

        <ul>
          <li>7.1: <a
          href="http://ftp.kde.org/unstable/koffice-1.1-beta2/SuSE/i386/7.1/">i386</a>,
          <a
          href="http://ftp.kde.org/unstable/koffice-1.1-beta2/SuSE/ppc/7.1/">PPC</a>
          and <a
          href="http://ftp.kde.org/unstable/koffice-1.1-beta2/SuSE/sparc/7.1/">Sparc</a>;
          please see the <a
          href="http://ftp.kde.org/unstable/koffice-1.1-beta2/SuSE/i18n/">i18n</a>
          directory for translations</li>

          <li>7.0: <a
          href="http://ftp.kde.org/unstable/koffice-1.1-beta2/SuSE/i386/7.0/">i386</a>,
          <a
          href="http://ftp.kde.org/unstable/koffice-1.1-beta2/SuSE/ppc/7.0/">PPC</a>
          and <a
          href="http://ftp.kde.org/unstable/koffice-1.1-beta2/SuSE/s390/7.0/">S390</a>;
          please see the <a
          href="http://ftp.kde.org/unstable/koffice-1.1-beta2/SuSE/i18n/">i18n</a>
          directory for translations</li>

          <li>6.4: <a
          href="http://ftp.kde.org/unstable/koffice-1.1-beta2/SuSE/i386/6.4/">i386</a>;
          please see the <a
          href="http://ftp.kde.org/unstable/koffice-1.1-beta2/SuSE/i18n/">i18n</a>
          directory for translations</li>
          <!--<LI>6.3:  <A HREF="http://ftp.kde.org/unstable/koffice-1.1-beta2/SuSE/i386/6.3/">i386</A>; please see the <A HREF="http://ftp.kde.org/unstable/koffice-1.1-beta2/SuSE/i18n/">i18n</A> directory for common files</LI>-->
        </ul>
      </li>

      <li>Tru64 Systems: <a
      href="http://ftp.kde.org/unstable/koffice-1.1-beta2/Tru64/">4.0e,f,g, or
      5.x</a> (<a
      href="http://ftp.kde.org/unstable/koffice-1.1-beta2/Tru64/README.Tru64">README</a>)</li>
    </ul>
    <br />
    <br />
     Please check the servers periodically for pre-compiled packages for other
    distributions. More binary packages will become available over the coming
    days and weeks. <br />
    <br />
     

    <h4>About KOffice/KDE</h4>
    <br />
    <br />
     

    <p>KOffice is part of the KDE project. KDE is an independent, collaborative
    project by hundreds of developers worldwide to create a sophisticated,
    customizable and stable desktop environment employing a component-based,
    network-transparent architecture. KDE is working proof of the power of the
    Open Source "Bazaar-style" software development model to create first-rate
    technologies on par with and superior to even the most complex commercial
    software.</p>

    <p>For more information about KDE, please visit KDE's <a
    href="http://www.kde.org/whatiskde/">web site</a>. For more information
    about KOffice, please visit KOffice's <a
    href="http://www.koffice.org/info/">web site</a> where you can find, among
    other things, information on <a
    href="http://www.koffice.org/getinvolved/">contributing to KOffice</a>.</p>

    <h4>Corporate KOffice Sponsors</h4>
    <br />
    <br />
     

    <p>Besides the valuable and excellent efforts by the <a
    href="http://www.koffice.org/people.php">KOffice developers</a> themselves,
    significant support for KOffice development has been provided by <a
    href="http://www.thekompany.com/">theKompany.com</a>, which has contributed
    <a href="#Kivio">Kivo</a> and <a href="#Kugar">Kugar</a> to KOffice, and <a
    href="http://www.mandrakesoft.com/">MandrakeSoft</a>, which sponsors
    KOffice developers <a href="http://perso.mandrakesoft.com/~david/">David
    Faure</a> and Laurent Montel. Thanks!</p>
    <hr noshade="noshade" size="1" width="90%" align="center" />
    <font size="2"><em>Trademarks Notices.</em> KDE, K Desktop Environment,
    KChart, KFormula, KIllustrator, KOffice, KPresenter, Krayon, KSpread and
    KWord are trademarks of KDE e.V. Kivio, Kugar and Rekall are trademarks of
    thekompany.com. Adobe Illustrator is a registered trademark of Adobe
    Systems Incorporated. Corel Draw is a registered trademark of Corel
    Corporation or Corel Corporation Limited. MS WinWord 97 and MS Excel are
    registered trademarks of Microsoft Corporation. Linux is a registered
    trademark of Linus Torvalds. Unix is a registered trademark of The Open
    Group. Trolltech and Qt are trademarks of Trolltech AS. All other
    trademarks and copyrights referred to in this announcement are the property
    of their respective owners.<br />
    </font>
    <hr noshade="noshade" size="1" width="90%" align="center" />

    <table border="0" cellpadding="8" cellspacing="0">
      <tr>
        <th colspan="2" align="left">Press Contacts:</th>
      </tr>

      <tr valign="top">
        <td align="right" nowrap="nowrap">United&nbsp;States:</td>

        <td nowrap="nowrap">Kurt Granroth<br />
        granroth@kde.org<br />
        (1) 480 732 1752<br />
        <!-- On holidays&nbsp;<BR>
        Andreas Pour<BR>
        pour@kde.org<BR>
        (1) 917 312 3122-->
        </td>
      </tr>

      <tr valign="top">
        <td align="right" nowrap="nowrap">Europe (French and English):</td>

        <td nowrap="nowrap">David Faure<br />
        faure@kde.org<br />
        (44) 1225 837409</td>
      </tr>

      <tr valign="top">
        <td align="right" nowrap="nowrap">Europe (English and German):</td>

        <td nowrap="nowrap">Martin Konold<br />
        konold@kde.org<br />
        (49) 179 2252249</td>
      </tr>
    </table>
    <?php
      include("footer.inc");
    ?>

