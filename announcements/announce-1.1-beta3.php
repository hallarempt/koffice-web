<?php
  $page_title ='KOffice 1.1 Beta3 announcement';
  $site_root = '../';
  include("header.inc");
  include("koffice.inc");
?>
    <p>DATELINE JUNE 25, 2001</p>

    <p>FOR IMMEDIATE RELEASE</p>

    <h3 align="center">KOffice Suite Beta Released for Linux/Unix</h3>

    <p><strong>KDE, the Leading Linux Desktop, Ships Third Beta of KOffice
    Suite</strong></p>

    <p>June 25, 2001 (The INTERNET). The <a href="http://www.kde.org/">KDE
    Project</a> today announced the release of <a
    href="http://www.koffice.org/">KOffice</a> 1.1beta3. KOffice is an
    integrated office suite for KDE which utilizes open standards for component
    communication and component embedding. The primary goals of this release,
    which follows one month after the release of KOffice 1.1beta2, are to
    provide a preview of KOffice&nbsp;1.1 and to involve users and developers
    who wish to request/implement missing features or identify problems. Code
    development is currently focused on stabilizing KOffice 1.1, <a
    href="http://developer.kde.org/development-versions/koffice-1.1-release-plan.html">
    scheduled</a> for final release late next quarter.</p>

    <p>Though this release is a beta, it constitutes the most stable and
    feature-complete release of KOffice to date. The KOffice team encourages
    all users of earlier KOffice releases to upgrade to KOffice 1.1beta3. In
    particular, this release is substantially more stable and feature-complete
    than KOffice 1.0, which was released together with KDE 2.0 in October 2000.
    Changes to individual KOffice components since the last beta release are <a
    href="#changelog">enumerated below</a>. In addition, a <a
    href="http://www.koffice.org/announcements/changelog-1.1.php">list of
    changes</a> since the KOffice 1.0 release, and a <a
    href="http://www.koffice.org/faq/">FAQ about KOffice</a>, are available at
    the KOffice <a href="http://www.koffice.org/">website</a>.</p>

    <p>The most significant improvements since the last beta release occurred
    in <a href="http://www.koffice.org/kword/">KWord</a>, particularly in the
    implementation of new features in respect of inline pictures, tables,
    frames, line spacing, auto-correction and page breaks, as well as a host of
    usability improvements, such as automatic switching between modes, improved
    menus and more pop-up menus. For a further list of improvements to KOffice
    since the last release, please refer to the <a
    href="#changelog">incremental changelog</a> below.</p>

    <p>This release includes the following components: KWord (a frame-based,
    full-featured word processor); <a
    href="http://www.koffice.org/kpresenter/">KPresenter</a> (a presentation
    application); <a href="http://www.koffice.org/kspread/">KSpread</a> (a
    spreadsheet application); <a
    href="http://www.koffice.org/kontour">KIllustrator</a> (a vector-drawing
    application); <a href="http://www.koffice.org/krayon/">Krayon</a> (a bitmap
    image editor f/k/a KImageShop); <a
    href="http://www.thekompany.com/projects/kivio/">Kivio</a> (a flowchart
    application); <a href="http://www.koffice.org/kchart/">KChart</a> (a chart
    drawing application); <a
    href="http://www.koffice.org/kformula/">KFormula</a> (a formula editor); <a
    href="http://www.thekompany.com/projects/kugar/">Kugar</a> (a tool for
    generating business quality reports); and <a
    href="http://www.koffice.org/filters/">filters</a> (for importing/exporting
    documents).</p>

    <p>KOffice and all its components are available for free under Open Source
    licenses from the KDE <a
    href="http://ftp.kde.org/unstable/koffice-1.1-beta3/">server</a> and its <a
    href="http://www.kde.org/mirrors.html">mirrors</a>. As a result of the
    dedicated efforts of hundreds of translators, KOffice 1.1beta3 is available
    in <a href="http://i18n.kde.org/teams/distributed.html">27</a>
    languages.</p>

    <p><a id="changelog" name="changelog"></a></p>

    <h4>Incremental Changelog</h4>
    <br />
    <br />
     

    <p>The following are the major improvements, enhancements and fixes since
    the KOffice-1.1beta2 release last month:</p>

    <ul>
      <li><em>All suite applications</em></li>

      <li style="list-style: none">
        <ul>
          <li>added many page formats;</li>

          <li>extended general DCOP facilities (for scripting suite
          applications);</li>

          <li>switched to <a
          href="http://apps.kde.com/nfinfo.php?id=497">KGhostview</a> for print
          previews (requires kdelibs-2.2.x);</li>

          <li>added a warning if a file is saved in a non-native file
          format;</li>

          <li>improved language and grammar (no more typos);</li>

          <li>fixed auto-addition of file extensions; and</li>

          <li>fixed crash on loading remote documents.</li>
        </ul>
      </li>

      <li><em>KWord</em></li>

      <li style="list-style: none">
        <ul>
          <li>added a new preview mode (multiple pages per row);</li>

          <li>improved drawing of inline elements (variables, images, frames)
          when selected;</li>

          <li>added ability to toggle objects between inline and
          non-inline;</li>

          <li>improved read-only mode (when KWord is embedded in <a
          href="http://konqueror.kde.org/">Konqueror</a> text can now be
          selected and copied);</li>

          <li>implemented Insert Frame and Insert Page Break (also as part of
          styles);</li>

          <li>implemented "1.5" and "double" line-spacing (also as part of
          styles);</li>

          <li>added an Apply button to the stylist;</li>

          <li>implement arbitrary zoom values;</li>

          <li>added auto-correction, typographical quotes;</li>

          <li>added a "View Formatting Characters" feature for displaying the
          format codes in the document;</li>

          <li>implemented insertion of (configurable) predefined
          expressions;</li>

          <li>implemented auto-switching between text editing and frame
          editing;</li>

          <li>added ability to set all frame types as "copy";</li>

          <li>added the Flesch reading ease score as well as the enhanced
          layout to the statistics dialog;</li>

          <li>added support for importing WMF clip-art;</li>

          <li>increased spell-checking options (requires kdelibs &gt;=
          2.2-alpha2);</li>

          <li>implemented auto-adjusting frame size;</li>

          <li>added undo-redo availability to many actions;</li>

          <li>added new bullets-numbering dialog (visible in the stylist and
          the paragraph editor);</li>

          <li>enhanced context-menus (RMB popup);</li>

          <li>added changing the case (capitals) of a text selection;</li>

          <li>improved usability with better mouse selection and some new key
          bindings;</li>

          <li>achieved major speedups for large documents (improvements in
          paragraph formatting, loading and painting fixes);</li>

          <li>added a submenu for custom variables;</li>

          <li>fixed recalculation of "page number" variable in header and
          footer;</li>

          <li>fixed painting and run-around-frame (e.g., in multi-columns
          mode);</li>

          <li>fixed the creation and removal of pages;</li>

          <li>fixed crash when embedding into Konqueror;</li>

          <li>fixed Table Of Contents creation and updates;</li>

          <li>fixed placement and drawing of tables; and</li>

          <li>fixed many other things, this list is far from complete.</li>
        </ul>
      </li>

      <li><em>KPresenter</em></li>

      <li style="list-style: none">
        <ul>
          <li>decreased size of saved documents;</li>

          <li>added mouse wheel navigation between pages during
          presentations;</li>

          <li>added the ability to move objects with the arrow keys;</li>

          <li>improved many UI elements (enabling/disabling of actions);</li>

          <li>improved the appearance (same page drawing as in KWord); and</li>

          <li>added a new configuration dialog.</li>
        </ul>
      </li>

      <li><em>KSpread</em></li>

      <li style="list-style: none">
        <ul>
          <li>added CSV Import-Filter dialog; and</li>

          <li>fixed drawing when embedded (no active cell).</li>
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
     

    <p><a id="Source_Code" name="Source_Code"></a><em>Source Packages</em>. The
    source packages for KOffice 1.1beta3 are available for free download at <a
    href="http://ftp.kde.org/unstable/koffice-1.1-beta3/src/">http://ftp.kde.org/unstable/koffice-1.1-beta3/src/</a>
    or in the equivalent directory at one of the many KDE ftp server <a
    href="http://www.kde.org/mirrors.html">mirrors</a>.</p>

    <p><a id="Source_Code-Library_Requirements"
    name="Source_Code-Library_Requirements"></a><em>Library Requirements.</em>
    KOffice 1.1beta3 requires qt-x11-2.2.4 or greater, which is available from
    <a href="http://www.trolltech.com/">Trolltech</a> at <a
    href="ftp://ftp.trolltech.com/qt/source/">ftp://ftp.trolltech.com/qt/source/</a>
    under the name <a
    href="ftp://ftp.trolltech.com/qt/source/qt-x11-2.2.4.tar.gz">qt-x11-2.2.4.tar.gz</a>,
    although <a
    href="ftp://ftp.trolltech.com/pub/qt/source/qt-x11-2.3.1.tar.gz">qt-x11-2.3.1</a>
    is recommended, as well as kdesupport-2.1.x and kdelibs-2.1.2
    (kdelibs-2.1.1 will work but will cause some crashes and anti-aliased font
    problems), which are available from the KDE ftp servers at <a
    href="http://ftp.kde.org/stable/2.1.1/distribution/">http://ftp.kde.org/stable/2.1.1/distribution/</a>
    and <a
    href="http://ftp.kde.org/stable/2.1.2/distribution/">http://ftp.kde.org/stable/2.1.2/distribution/</a>
    (<em>see also</em> the <a
    href="http://www.kde.org/announcements/announce-2.1.1.html">KDE 2.1.1 press
    release</a> and the <a
    href="http://www.kde.org/announcements/announce-2.1.2.html">KDE 2.1.2 press
    release</a> for more information). However, KDE 2.2alpha2, available at <a
    href="http://www.kde.org/unstable/2.2alpha2/">http://www.kde.org/unstable/2.2alpha2/</a>,
    is recommended, as it provides a few additional features, such as improved
    printing support (kdeprint), a scanner plugin, and an improved file
    selector. KOffice 1.1beta3 will not work with versions of Qt older than
    2.2.4 or versions of kdelibs older than 2.1.x.</p>

    <p><em>Compiler Requirements</em>. Please note that some components of
    KOffice 1.1beta3 (the Quattro Pro&reg; import filter and the new <a
    href="http://www.koffice.org/kchart/">KChart</a>) will not compile with
    older versions of <a href="http://gcc.gnu.org/">gcc/egcs</a>, such as
    egcs-1.1.2 or gcc-2.7.2. At a minimum gcc-2.95-* is required.</p>

    <p><em>Further Instructions</em>. A patch which fixes crashes in
    KIllustrator, particularly when embedded in <a
    href="http://www.koffice.org/kword/">KWord</a>, is available separately <a
    href="ftp://ftp.kde.org/pub/kde/unstable/koffice-1.1-beta3/src/killustrator-1.1-beta3-fix.patch">
    here</a>. If you compile from source please apply the patch as described in
    the <a
    href="ftp://ftp.kde.org/pub/kde/unstable/koffice-1.1-beta3/src/README">README</a>.
    For further instructions on compiling and installing KOffice, please
    consult the <a
    href="http://www.koffice.org/download/source.php">installation
    instructions</a>.</p>

    <h4>Installing Binary Packages</h4>
    <br />
    <br />
     

    <p><em>Binary Packages</em>. Some distributors choose to provide binary
    packages of KOffice for certain versions of their distribution. Some of
    these binary packages for KOffice 1.1beta3 will be available for free
    download under <a
    href="http://ftp.kde.org/unstable/koffice-1.1-beta3/">http://ftp.kde.org/unstable/koffice-1.1-beta3/</a>
    or under the equivalent directory at one of the many KDE ftp server <a
    href="http://www.kde.org/mirrors.html">mirrors</a>. Please note that the
    KDE team is not responsible for these packages as they are provided by
    third parties -- typically, but not always, the distributor of the relevant
    distribution (if you cannot find a binary package for your distribution,
    please read the <a href="http://dot.kde.org/986933826/">KDE Binary Package
    Policy</a>).</p>

    <p><em>Library Requirements</em>. The library requirements for a particular
    binary package varies with the system on which the package was compiled.
    Please bear in mind that some binary packages may require a newer version
    of Qt and/or KDE than was distributed with the distribution version for
    which the binary package is listed below. For general library requirements
    for KOffice, please see the text at <a
    href="#Source_Code-Library_Requirements">Source Code - Library
    Requirements</a>.</p>

    <p><em>Package Locations</em>. At the time of this release, pre-compiled
    packages are available for:</p>

    <ul>
      <li><a href="http://www.debian.org/">Debian GNU/Linux</a> (package
      "koffice"):</li>

      <li style="list-style: none">
        <ul>
          <li><a href="ftp://ftp.debian.org/">ftp.debian.org</a>: sid
          (devel)</li>

          <li><a href="ftp://kde.debian.net/">kde.debian.net</a>: potato
          (2.2)</li>
        </ul>
      </li>

      <li>
        <a href="http://www.linux-mandrake.com/en/">Linux Mandrake</a> (<a
        href="http://ftp.kde.org/unstable/koffice-1.1-beta3/Mandrake/README">README</a>
        - requires kdelibs-2.1.2): 

        <ul>
          <li>8.0: <a
          href="http://ftp.kde.org/unstable/koffice-1.1-beta3/Mandrake/8.0/i586/">
          i586</a> and <a
          href="http://ftp.kde.org/unstable/koffice-1.1-beta3/Mandrake/8.0/ppc/">
          PPC</a></li>
        </ul>
      </li>

      <li>
        <a href="http://www.suse.com/">SuSE Linux</a> (<a
        href="http://ftp.kde.org/unstable/koffice-1.1-beta3/SuSE/README.SuSE">README.SuSE</a>
        - requires Qt-2.3.x): 

        <ul>
          <li>7.2: <a
          href="http://ftp.kde.org/unstable/koffice-1.1-beta3/SuSE/i386/7.2/">i386</a>
          and <a
          href="http://ftp.kde.org/unstable/koffice-1.1-beta3/SuSE/ia64/7.2/">IA64</a>;
          please see the <a
          href="http://ftp.kde.org/unstable/koffice-1.1-beta3/SuSE/NOARCH/">noarch</a>
          directory for common files</li>

          <li>7.1: <a
          href="http://ftp.kde.org/unstable/koffice-1.1-beta3/SuSE/i386/7.1/">i386</a>,
          <a
          href="http://ftp.kde.org/unstable/koffice-1.1-beta3/SuSE/ppc/7.1/">PPC</a>,
          <a
          href="http://ftp.kde.org/unstable/koffice-1.1-beta3/SuSE/sparc/7.1/">Sparc</a>
          and <a
          href="http://ftp.kde.org/unstable/koffice-1.1-beta3/SuSE/axp/7.1/">AXP</a>;
          please see the <a
          href="http://ftp.kde.org/unstable/koffice-1.1-beta3/SuSE/NOARCH/">noarch</a>
          directory for common files</li>

          <li>7.0: <a
          href="http://ftp.kde.org/unstable/koffice-1.1-beta3/SuSE/i386/7.0/">i386</a>,
          <a
          href="http://ftp.kde.org/unstable/koffice-1.1-beta3/SuSE/ppc/7.0/">PPC</a>
          and <a
          href="http://ftp.kde.org/unstable/koffice-1.1-beta3/SuSE/s390/7.0/">S390</a>;
          please see the <a
          href="http://ftp.kde.org/unstable/koffice-1.1-beta3/SuSE/NOARCH/">noarch</a>
          directory for common files</li>

          <li>6.4: <a
          href="http://ftp.kde.org/unstable/koffice-1.1-beta3/SuSE/i386/6.4/">i386</a>;
          please see the <a
          href="http://ftp.kde.org/unstable/koffice-1.1-beta3/SuSE/NOARCH/">noarch</a>
          directory for common files</li>
        </ul>
      </li>

      <li>Tru64 Systems: <a
      href="http://ftp.kde.org/unstable/koffice-1.1-beta3/Tru64/">4.0e,f,g, or
      5.x</a> (<a
      href="http://ftp.kde.org/unstable/koffice-1.1-beta3/Tru64/README.Tru64">README</a>)</li>
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
    KChart, KFormula, KIllustrator, KOffice, KPresenter, Krayon, KSpread and
    KWord are trademarks of KDE e.V. Kivio and Kugar are trademarks of
    thekompany.com. 
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

