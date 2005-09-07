<?php
  $page_title="Download KOffice Binaries";
  $site_root = '../';
  include("koffice.inc");
  include("header.inc");
?>

     <h2>Information</h2>
     <p>KOffice is currently available as version <?php echo $currentversion ?> designed to run with KDE 3.3 or later. KOffice is released separately from the rest of
     KDE, so KOffice releases are not in sync with those of KDE. If you wish to use a newer development version, then you will need to
     <a href="source.php">compile from source</a>.</p>

     <h2>Download</h2>
     <p>Qt 3.3.x, arts, and kdelibs packages are all pre-requisites of KOffice. kdebase is strongly recommended too.</p>

     <h3>Download sources: KOffice <?php echo $currentversion; ?></h3>

     <a name="source_code"></a><strong>Source Code</strong>:

     The complete source code for KOffice <?php echo $currentversion ?> is available for free download
     via one of the KDE <a href="http://download.kde.org/stable/koffice-<?php echo $currentversion ?>/src/">http</a>
     or <a href="http://www.kde.org/mirrors/ftp.php">ftp</a> mirrors.

     <h3>Download Binaries: KOffice <?php echo $currentversion; ?></h3>

    <p align="justify">
      Please note that the KDE Project makes these packages available from the
      KDE web site as a convenience to KDE users.  The KDE Project is not
      responsible for these packages as they are provided by third
      parties - typically, but not always, the distributor of the relevant
      distribution - using tools, compilers, library versions and quality
      assurance procedures over which KDE exercises no control. If you
      cannot find a binary package for your OS, or you are displeased with
      the quality of binary packages available for your system, please read
      the <a href="http://www.kde.org/download/packagepolicy.php">KDE Binary Package Policy</a>
      and/or contact your OS vendor.
    </p>

      <p>Contributed binaries (if any) of KOffice <?php echo $currentversion; ?> can be found
      <a href="http://download.kde.org/stable/koffice-1.4/">here (koffice-1.4)</a> and
      <a href="http://download.kde.org/stable/koffice-<?php echo $currentversion; ?>/">here (koffice-<?php echo $currentversion; ?>)</a>.</p>

      <p><a href="http://www.archlinux.org">archlinux</a> users can update koffice by typing <code>pacman -S koffice</code>.</p>
      <p>PCLinuxOS users can get <a href="http://distro.ibiblio.org/pub/linux/distributions/texstar/pclinuxos/apt/pclinuxos/2004/RPMS.texstar/koffice-1.4.1-1tex.i586.rpm">koffice-1.4.1-1tex.i586.rpm</a></p>

     <h2>Installing Binaries</h2>
      <br />
      <b>RPMs:</b>
      <br />
      Type the following as root:<br />
      <tt>rpm -Uvh koffice.rpm</tt>
      <p>
      Please replace "<tt>koffice.rpm</tt>" with the full path to and the
      name of your binary rpm.
      </p>
      <br />

      <b>tar.gz:</b>
      <p>
      Just do the following:<br />
      <tt>
      cd /<br />
      su<br />
      tar xzvf package.bin.tar.gz
      </tt>
      </p>
      <p>You should add the /opt/kde3 path as KDEDIR in /etc/profile.
      </p>

      <!--<b>Debian packages:</b>
      <p>See an excellent FAQ on KDE3 and KOffice for Debian
         <a href='http://davidpashley.com/debian-kde/faq.html'>here</a> for download and installation
      instructions.
      The download location for Debian-KOffice packages is
        <code>http://people.debian.org/~bab/kde3 the koffice.deb</code><br>
      Please follow the instructions mentioned on the FAQ for changing your <code>/etc/apt/sources.list</code>
      file after which you should just be able to use <code>apt-get install</code> to get KOffice.
      </p>-->
      
      <h2>MacOS X packages</h2>
      <p>Available from the Fink project at 
      <a href="http://fink.sourceforge.net/pdb/search.php?s=koffice">fink.sf.net</a>.</p>

      <h2>See also</h2>
      <ul><li><a href="http://www.kexi-project.org/wiki/wikiview/index.php?Download">Standalone Kexi releases</a> (binaries and source code), including versions for MS Windows.</li>
      </ul>

<?php include("footer.inc"); ?>
