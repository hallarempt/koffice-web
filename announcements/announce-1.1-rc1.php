<?php
  $page_title ='KOffice 1.1 RC 1 announcement';
  $site_root = '../';
  include("header.inc");
  include("koffice.inc");
?>
    <p>DATELINE JULY 30, 2001</p>

    <p>FOR IMMEDIATE RELEASE</p>

    <h3 align="center">KOffice Suite Release Candidate Available for
    Linux/Unix</h3>

    <p><strong>KDE, the Leading Linux Desktop, Ships First Release Candidate of
    KOffice Suite</strong></p>

    <p>July 30, 2001 (The INTERNET). The <a href="http://www.kde.org/">KDE
    Project</a> today announced the release of <a
    href="http://www.koffice.org/">KOffice</a> 1.1 Release Candidate 1 (RC1).
    KOffice is an integrated office suite for KDE which utilizes open standards
    for component communication and component embedding. The primary goals of
    this release are to provide a preview of KOffice&nbsp;1.1 and to involve
    users and developers who wish to request/implement missing features or
    identify problems. Code development is currently focused on stabilizing
    KOffice 1.1, <a
    href="http://developer.kde.org/development-versions/koffice-1.1-release-plan.html">
    scheduled</a> for final release in mid-August, 2001.</p>

    <p>Although a release candidate, KOffice 1.1RC1 constitutes the most stable
    and feature-complete release of KOffice to date. The KOffice team
    encourages all users of earlier KOffice releases to upgrade to KOffice
    1.1RC1. In particular, this release is substantially more stable and
    feature-complete than KOffice 1.0, which was released together with KDE 2.0
    in October 2000. Changes to individual KOffice components since the last
    beta release are <a href="#changelog">enumerated below</a>. In addition <a
    href="http://www.koffice.org/releases/1.1rc1-release.php">Release
    Notes</a>, a <a
    href="http://www.koffice.org/announcements/changelog-1.1.php">list of
    changes</a> since the KOffice 1.0 release, and a <a
    href="http://www.koffice.org/faq/">KOffice FAQ</a>, are available at the <a
    href="http://www.koffice.org/">KOffice website</a>.</p>

    <p>This release includes the following components: <a
    href="http://www.koffice.org/kword/">KWord</a> (a frame-based,
    full-featured word processor); <a
    href="http://www.koffice.org/kpresenter/">KPresenter</a> (a presentation
    application); <a href="http://www.koffice.org/kspread/">KSpread</a> (a
    spreadsheet application); <a
    href="http://www.koffice.org/kontour/">Kontour</a> (a vector-drawing
    application f/k/a KIllustrator); <a
    href="http://www.thekompany.com/projects/kivio/">Kivio</a> (a flowchart
    application); <a href="http://www.koffice.org/kchart/">KChart</a> (a chart
    drawing application); <a
    href="http://www.koffice.org/kformula/">KFormula</a> (a formula editor); <a
    href="http://www.thekompany.com/projects/kugar/">Kugar</a> (a tool for
    generating business quality reports); and <a
    href="http://www.koffice.org/filters/">filters</a> (for importing documents
    created by, or exporting documents for use with, other office suites or
    office programs).</p>

    <p>The most significant improvements since KOffice 1.1beta3, the last
    KOffice beta release which was announced last month, occurred in KWord.
    These improvements include: support for Asian languages with <a
    href="http://www.xfree86.org/current/XOpenIM.3.html">XIM</a>; drop'n'paste
    of images; and copy/paste of tables. KWord also benefited from numerous
    bug-fixes, particularly in the auto-sizing and auto-scrolling features. For
    a further list of improvements to KOffice since the last beta release,
    please refer to the <a href="#changelog">incremental changelog</a>
    below.</p>

    <p>KOffice and all its components are available for free under Open Source
    licenses from the KDE <a
    href="http://ftp.kde.org/unstable/koffice-1.1-rc1/">server</a> and its <a
    href="http://www.kde.org/mirrors.html">mirrors</a>. As a result of the
    dedicated efforts of hundreds of translators, KOffice 1.1RC1 is available
    in 27 languages.</p>

    <p><a id="changelog" name="changelog"></a></p>

    <h4>Incremental Changelog</h4>
    <br />
    <br />
     

    <p>The following are the major improvements, enhancements and fixes since
    the KOffice-1.1beta3 release last month:</p>

    <ul>
      <li><em><strong>All suite applications (KOffice libs)</strong></em></li>

      <li style="list-style: none">
        <ul>
          <li><em>New Features and Improvements</em>:</li>

          <li style="list-style: none">
            <ul>
              <li>added a submenu for selecting a type of embedded document to
              insert;</li>

              <li>improved useability of template creation dialog;</li>

              <li>improved template names to permit special characters, like
              '(';</li>

              <li>improved the select-color actions with color palette;</li>

              <li>improved the WMF-loader to parse the DPI of WMF files;
              and</li>

              <li>replaced the filters' embedded dialog into the file chooser
              with normal dialogs; and</li>
            </ul>
          </li>

          <li><em>Bug Fixes</em>:</li>

          <li style="list-style: none">
            <ul>
              <li>fixed the automatic naming of DCOP interfaces;</li>

              <li>fixed the recent files list (some ways of opening documents
              didn't add to that list);</li>

              <li>fixed the autosave feature to only save if the document was
              changed since the last autosave;</li>

              <li>fixed "Configure keys" to list all the available actions;
              and</li>

              <li>fixed problems with embedded documents and zooming.</li>
            </ul>
          </li>
        </ul>
      </li>

      <li><em><strong>KWord</strong></em></li>

      <li style="list-style: none">
        <ul>
          <li><em>New Features</em>:</li>

          <li style="list-style: none">
            <ul>
              <li>added XIM support (for Asian languages);</li>

              <li>added save/restore UI settings (formatting characters, frame
              borders, zoom);</li>

              <li>added "keep aspect ratio" option when inserting/resizing
              images;</li>

              <li>added support for dropping and pasting images;</li>

              <li>added frame dialog for headers and footers;</li>

              <li>enabled changing the charset for selected characters (helps
              non-AA displays and when printing);</li>

              <li>enabled disabling the grid by pressing shift while
              moving/resizing a frame; and</li>

              <li>implemented copy/paste of tables;</li>
            </ul>
          </li>

          <li><em>Improvements</em>:</li>

          <li style="list-style: none">
            <ul>
              <li>improved paragraph borders to span the entire frame/page
              width;</li>

              <li>improved auto-resizing when inserting very large images;</li>

              <li>improved auto-scrolling (also applies when moving a frame,
              etc.);</li>

              <li>improved cell auto-sizing in tables;</li>

              <li>improved preview in style dialog;</li>

              <li>improved calculation of floating tables size and
              placement;</li>

              <li>optimized speed when typing;</li>

              <li>made the "insert special character" dialog non-modal;</li>

              <li>increased the number of settings saved to/loaded from the
              KPresenter configuration file;</li>

              <li>revised class design for future code sharing with other
              KOffice applications; and</li>

              <li>made coordinates relative to page corner in frame dialog;
              and</li>
            </ul>
          </li>

          <li><em>Bug fixes</em>:</li>

          <li style="list-style: none">
            <ul>
              <li>fixed text-flow bugs;</li>

              <li>fixed frame selection in case of overlapping frames;</li>

              <li>fixed many undo/redo bugs (especially for tables) and
              grouping of commands;</li>

              <li>fixed inline items in headers/footers/copied frames;</li>

              <li>fixed copying frames (with inline frames);</li>

              <li>fixed table of content (regeneration and page numbers);</li>

              <li>fixed typographical quotes (never triggered in beta3);</li>

              <li>fixed undo/redo when applying a new format to a variable, and
              when pasting text with inline items;</li>

              <li>fixed loading of multi-columns documents, and loading of
              cliparts;</li>

              <li>fixed saving of copied frames; and</li>

              <li>fixed KPart objects, zooming, and preview mode.</li>
            </ul>
          </li>
        </ul>
      </li>

      <li><em><strong>KPresenter</strong></em></li>

      <li style="list-style: none">
        <ul>
          <li>increased the number of settings saved to/loaded from the
          KPresenter configuration file;</li>

          <li>reduced size of file saved;</li>

          <li>switched to menu XML for all actions;</li>

          <li>fixed web presentation (author, email information); and</li>

          <li>fixed icon names.</li>
        </ul>
      </li>

      <li><em><strong>KSpread</strong></em></li>

      <li style="list-style: none">
        <ul>
          <li>fixed autofill bugs;</li>

          <li>fixed crash when displaying an area (table name was not
          translated);</li>

          <li>fixed GUI problems with the dialogbox;</li>

          <li>closed some memory leaks (formula dialogbox and consolidate
          dialogbox were not deleted);</li>

          <li>fixed "list sort" to not delete predefined lists (month,
          day);</li>

          <li>fixed tags in header/footer (<tt>&lt;name&gt; &lt;file&gt;
          &lt;author&gt;</tt>); and</li>

          <li>fixed print setup.</li>
        </ul>
      </li>

      <li><em><strong>Kontour</strong></em></li>

      <li style="list-style: none">
        <ul>
          <li>renamed application from KIllustrator to Kontour;</li>

          <li>added ability to delete objects with the backspace key;</li>

          <li>added ability to use the delete key in a text object;</li>

          <li>switched to KPrinter for printing (provides users with much
          greater control over layout/formatting of printed pages);</li>

          <li>fixed helpline (the helpline is not moved and the cursor is not
          changed when the helplines are hidden);</li>

          <li>fixed XIM positioning;</li>

          <li>fixed undo/redo/cut actions;</li>

          <li>fixed undo/redo change fill parameters;</li>

          <li>fixed GUI to ensure tool is always checked;</li>

          <li>fixed layerPanel (enable/disable button and other fixes);
          and</li>

          <li>fixed crash when deleting a table.</li>
        </ul>
      </li>
    </ul>
    <br />
    <br />
     

    <p>For a list of major changes since the KOffice 1.0 release last October,
    please visit the <a
    href="http://www.koffice.org/announcements/changelog-1.1.php">KOffice
    website</a>.</p>

    <h4>Downloading and Compiling KOffice</h4>
    <br />
    <br />
     

    <p><a id="Source_Code" name="Source_Code"></a><em><strong>Source
    Packages</strong></em>. The source packages for KOffice 1.1RC1 are
    available for free download at <a
    href="http://ftp.kde.org/unstable/koffice-1.1-rc1/src/">http://ftp.kde.org/unstable/koffice-1.1-rc1/src/</a>
    or in the equivalent directory at one of the many KDE ftp server <a
    href="http://www.kde.org/mirrors.html">mirrors</a>.</p>

    <p><a id="Source_Code-Library_Requirements"
    name="Source_Code-Library_Requirements"></a><em><strong>Library
    Requirements</strong></em>. KOffice requires recent versions of Qt and
    kdelibs, and even more recent versions are recommended.</p>

    <ul>
      <li><em>Required</em>: KOffice 1.1rc1 requires <a
      href="ftp://ftp.trolltech.com/qt/source/qt-x11-2.2.4.tar.gz">qt-x11-2.2.4</a>
      or greater, kdesupport-2.1.x or greater, and kdelibs-2.1.2 or greater.
      The KDE packages are available from the KDE ftp servers at <a
      href="http://ftp.kde.org/stable/2.1.1/distribution/">http://ftp.kde.org/stable/2.1.1/distribution/</a>
      and <a
      href="http://ftp.kde.org/stable/2.1.2/distribution/">http://ftp.kde.org/stable/2.1.2/distribution/</a>.
      Please note, however, that kdelibs-2.1.1 will cause some crashes and
      anti-aliased font problems. Moreover, both kdelibs-2.1.1 and
      kdelibs-2.1.2 will not properly accept .doc documents in the file
      selection dialog (see the <a
      href="http://www.koffice.org/releases/1.1rc1-release.php">release
      notes</a> for a workaround).<br />
      &nbsp;<br />
      For more information on these kdelibs releases, please see the <a
      href="http://www.kde.org/announcements/announce-2.1.1.html">KDE 2.1.1
      press release</a> and the <a
      href="http://www.kde.org/announcements/announce-2.1.2.html">KDE 2.1.2
      press release</a>.</li>

      <li style="list-style: none"><br />
      &nbsp;<br />
      </li>

      <li><em>Recommended</em>: The KOffice team recommends the use of <a
      href="ftp://ftp.trolltech.com/pub/qt/source/qt-x11-2.3.1.tar.gz">qt-x11-2.3.1</a>
      and kdelibs-2.2beta. Kdelibs-2.2beta (and the pending kdelibs-2.2RC1)
      provide a few additional features, such as improved printing support
      (kdeprint), a scanner plugin, and proper recognition of .doc files in the
      file selector dialog. KDE 2.2beta1 is available from <a
      href="http://www.kde.org/unstable/2.2beta1/">http://www.kde.org/unstable/2.2beta1/</a>
      and KDE 2.2RC1 should be available shortly from <a
      href="http://www.kde.org/unstable/2.2rc1/">http://www.kde.org/unstable/2.2rc1/</a>.
      Please note that the kdesupport package has been discontinued for KDE
      2.2.x due to the fact that most distributions already provide the
      libraries and programs which were included in that package. If you still
      require this package, you may use one of the <a
      href="http://ftp.sourceforge.net/pub/mirrors/kde/snapshots/current/">snapshots</a>.<br />

      &nbsp;<br />
      For more information on the kdelibs-2.2beta1 release, please see the <a
      href="http://www.kde.org/announcements/announce-2.2-beta1.html">release
      announcement</a>.</li>
    </ul>
    KOffice 1.1rc1 will not work with versions of Qt older than 2.2.4 or
    versions of kdelibs older than 2.1.1. <br />
    <br />
     

    <p><em><strong>Compiler Requirements</strong></em>. Please note that some
    components of KOffice 1.1RC1 (such as the Quattro Pro<sup>&reg;</sup>
    import filter and the new <a
    href="http://www.koffice.org/kchart/">KChart</a>) will not compile with
    older versions of <a href="http://gcc.gnu.org/">gcc/egcs</a>, such as
    egcs-1.1.2 or gcc-2.7.2. At a minimum gcc-2.95-* is required.</p>

    <p><em><strong>Further Instructions</strong></em>. For further instructions
    on compiling and installing KOffice, please consult the <a
    href="http://www.koffice.org/download/source.php">installation
    instructions</a>.</p>

    <h4>Installing Binary Packages</h4>
    <br />
    <br />
     

    <p><em><strong>Binary Packages</strong></em>. Some distributors choose to
    provide binary packages of KOffice for certain versions of their
    distribution. Some of these binary packages for KOffice 1.1RC1 will be
    available for free download under <a
    href="http://ftp.kde.org/unstable/koffice-1.1-rc1/">http://ftp.kde.org/unstable/koffice-1.1-rc1/</a>
    or under the equivalent directory at one of the many KDE ftp server <a
    href="http://www.kde.org/mirrors.html">mirrors</a>. Please note that the
    KDE team is not responsible for these packages as they are provided by
    third parties -- typically, but not always, the distributor of the relevant
    distribution (if you cannot find a binary package for your distribution,
    please read the <a href="http://dot.kde.org/986933826/">KDE Binary Package
    Policy</a>).</p>

    <p><em><strong>Library Requirements</strong></em>. The library requirements
    for a particular binary package varies with the system on which the package
    was compiled. Please bear in mind that some binary packages may require a
    newer version of Qt and/or KDE than was distributed with the distribution
    version for which the binary package is listed below. For general library
    requirements for KOffice, please see the text at <a
    href="#Source_Code-Library_Requirements">Source Code - Library
    Requirements</a>.</p>

    <p><em><strong>Package Locations</strong></em>. At the time of this
    release, pre-compiled packages are available for:</p>

    <ul>
      <!-- DEBIAN STATUS UNKNOWN
      <LI><A HREF="http://www.debian.org/">Debian GNU/Linux</A> (package "koffice"):</LI>
      <UL>
      <LI><A HREF="ftp://ftp.debian.org/">ftp.debian.org</A>:  sid (devel)</LI>
      <LI><A HREF="ftp://kde.debian.net/">kde.debian.net</A>:  potato (2.2)</LI>
      </UL>
      -->

      <li>
        <a href="http://www.linux-mandrake.com/en/">Linux Mandrake</a> (<a
        href="http://ftp.kde.org/unstable/koffice-1.1-rc1/Mandrake/README">README</a>):
        

        <ul>
          <li>Cooker: <a
          href="http://ftp.kde.org/unstable/koffice-1.1-rc1/Mandrake/cooker/i586/">
          i586</a> and <a
          href="http://ftp.kde.org/unstable/koffice-1.1-rc1/Mandrake/cooker/ia64/">
          ia64</a></li>

          <li>8.0: for kdelibs 2.1.2, <a
          href="http://ftp.kde.org/unstable/koffice-1.1-rc1/Mandrake/8.0/i586/kde-2.1.2/">
          i586</a> and <a
          href="http://ftp.kde.org/unstable/koffice-1.1-rc1/Mandrake/8.0/ppc/">PPC</a>;
          for kdelibs 2.2beta1, <a
          href="http://ftp.kde.org/unstable/koffice-1.1-rc1/Mandrake/8.0/i586/kde-2.2beta1/">
          i586</a></li>
        </ul>
      </li>

      <li>
        <a href="http://www.suse.com/">SuSE Linux</a> (<a
        href="http://ftp.kde.org/unstable/koffice-1.1-rc1/SuSE/README">README</a>
        - requires Qt-2.3.x): 

        <ul>
          <li>kdelibs 2.2beta1</li>

          <li style="list-style: none">
            <ul>
              <li>7.2: <a
              href="http://ftp.kde.org/unstable/koffice-1.1-rc1/SuSE/KDE-2.2/i386/7.2/">
              i386</a>; please see the <a
              href="http://ftp.kde.org/unstable/koffice-1.1-rc1/SuSE/KDE-2.2/noarch/">
              noarch</a> directory for common files</li>

              <li>7.1: <a
              href="http://ftp.kde.org/unstable/koffice-1.1-rc1/SuSE/KDE-2.2/i386/7.1/">
              i386</a>, <a
              href="http://ftp.kde.org/unstable/koffice-1.1-rc1/SuSE/KDE-2.2/ppc/7.1/">
              PPC</a> and <a
              href="http://ftp.kde.org/unstable/koffice-1.1-rc1/SuSE/KDE-2.2/axp/7.1/">
              Sparc</a>; please see the <a
              href="http://ftp.kde.org/unstable/koffice-1.1-rc1/SuSE/KDE-2.2/noarch/">
              noarch</a> directory for common files</li>

              <li>7.0: <a
              href="http://ftp.kde.org/unstable/koffice-1.1-rc1/SuSE/KDE-2.2/i386/7.0/">
              i386</a>, <a
              href="http://ftp.kde.org/unstable/koffice-1.1-rc1/SuSE/KDE-2.2/ppc/7.0/">
              PPC</a> and <a
              href="http://ftp.kde.org/unstable/koffice-1.1-rc1/SuSE/KDE-2.2/s390/7.0/">
              S390</a>; please see the <a
              href="http://ftp.kde.org/unstable/koffice-1.1-rc1/SuSE/KDE-2.2/noarch/">
              noarch</a> directory for common files</li>

              <li>6.4: <a
              href="http://ftp.kde.org/unstable/koffice-1.1-rc1/SuSE/KDE-2.2/i386/6.4/">
              i386</a>; please see the <a
              href="http://ftp.kde.org/unstable/koffice-1.1-rc1/SuSE/KDE-2.2/noarch/">
              noarch</a> directory for common files</li>
            </ul>
          </li>

          <li>kdelibs 2.1.2 and kdesupport 2.1.1</li>

          <li style="list-style: none">
            <ul>
              <li>7.2: <a
              href="http://ftp.kde.org/unstable/koffice-1.1-rc1/SuSE/i386/7.2/">
              i386</a> and <a
              href="http://ftp.kde.org/unstable/koffice-1.1-rc1/SuSE/ia64/7.2/">
              IA64</a>; please see the <a
              href="http://ftp.kde.org/unstable/koffice-1.1-rc1/SuSE/noarch/">noarch</a>
              directory for common files</li>

              <li>7.1: <a
              href="http://ftp.kde.org/unstable/koffice-1.1-rc1/SuSE/i386/7.1/">
              i386</a>, <a
              href="http://ftp.kde.org/unstable/koffice-1.1-rc1/SuSE/ppc/7.1/">PPC</a>,
              <a
              href="http://ftp.kde.org/unstable/koffice-1.1-rc1/SuSE/axp/7.1/">Alpha</a>
              and <a
              href="http://ftp.kde.org/unstable/koffice-1.1-rc1/SuSE/sparc/7.1/">
              Sparc</a>; please see the <a
              href="http://ftp.kde.org/unstable/koffice-1.1-rc1/SuSE/noarch/">noarch</a>
              directory for common files</li>

              <li>7.0: <a
              href="http://ftp.kde.org/unstable/koffice-1.1-rc1/SuSE/i386/7.0/">
              i386</a>, <a
              href="http://ftp.kde.org/unstable/koffice-1.1-rc1/SuSE/ppc/7.0/">PPC</a>
              and <a
              href="http://ftp.kde.org/unstable/koffice-1.1-rc1/SuSE/s390/7.0/">
              S390</a>; please see the <a
              href="http://ftp.kde.org/unstable/koffice-1.1-rc1/SuSE/noarch/">noarch</a>
              directory for common files</li>

              <li>6.4: <a
              href="http://ftp.kde.org/unstable/koffice-1.1-rc1/SuSE/i386/6.4/">
              i386</a>; please see the <a
              href="http://ftp.kde.org/unstable/koffice-1.1-rc1/SuSE/noarch/">noarch</a>
              directory for common files</li>
            </ul>
          </li>
        </ul>
        <!-- Tru64 not ready yet
        <LI>Tru64 Systems:  <A HREF="http://ftp.kde.org/unstable/koffice-1.1-rc1/Tru64/">4.0e,f,g, or 5.x</A> (<A HREF="http://ftp.kde.org/unstable/koffice-1.1-rc1/Tru64/README.Tru64">README</A>)</LI>
        -->
      </li>
    </ul>
    <br />
    <br />
     Please check the servers periodically for pre-compiled packages for other
    distributions. More binary packages may become available over the coming
    days and weeks; in particular, <a href="http://www.redhat.com/">RedHat</a>
    packages are expected tomorrow and <a
    href="http://www.debian.org/">Debian</a> packages are expected late this or
    early next week. <br />
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
    href="http://www.mandrakesoft.com/">MandrakeSoft</a> (which sponsors
    KOffice developers <a href="http://perso.mandrakesoft.com/~david/">David
    Faure</a> and Laurent Montel), <a
    href="http://www.thekompany.com/">theKompany.com</a> (which contributed
    Kivio and Kugar to KOffice), and <a
    href="http://www.klaralvdalens-datakonsult.se/">Klar&auml;lvdalens
    Datakonsult AB</a> (which contributed the new KChart to KOffice).
    Thanks!</p>
    <hr noshade="noshade" size="1" width="90%" align="center" />
    <font size="2"><em>Trademarks Notices.</em> KDE, K Desktop Environment,
    KChart, KFormula, Kontour, KOffice, KPresenter, KSpread and KWord are
    trademarks of KDE e.V. Kivio and Kugar are trademarks of thekompany.com. 
    <!--Adobe Illustrator is a registered trademark of Adobe Systems
    Incorporated.-->
    Quattro Pro is a registered trademark of Corel Corporation or Corel
    Corporation Limited. 
    <!--MS WinWord 97 and MS Excel are registered trademarks of Microsoft
    Corporation.-->
    Linux is a registered trademark of Linus Torvalds. Unix is a registered
    trademark of The Open Group. Trolltech and Qt are trademarks of Trolltech
    AS. All other trademarks and copyrights referred to in this announcement
    are the property of their respective owners.<br />
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
        &nbsp;<br />
        Andreas Pour<br />
        pour@kde.org<br />
        (1) 917 312 3122</td>
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

