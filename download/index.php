<?php
  $page_title="Download KOffice Binaries";
  $site_root = '../';
  include("koffice.inc");
  include("header.inc");
?>

      <h2>Information</h2>
      <p>KOffice is currently available as version 1.2.1 designed to run with KDE 3.0 or later. KOffice is released seperately from the rest of
       KDE, so KOffice releases are not in sync with those of KDE. If you wish to use a newer development version, then you will need to
	  <a href="source.php">compile from source</a>.</p>
      <h2>Download</h2>
     <p>Qt 3.0.x, arts, and kdelibs packages are all pre-requisites of KOffice. kdebase is strongly recommended too.</p>
     <p>Download locations can be found on the announcements page, and by clicking <a href="/announcements/announce-1.2.1.phtml#package_locations">here</a></p>

      <h1>Download Binaries: KOffice 1.3 Beta 4</h1>
      Contributed binaries of the fourth beta version of KOffice 1.3 can be found at
      <a href="http://download.kde.org/unstable/koffice-1.2.93/contrib">http://download.kde.org/unstable/koffice-1.2.93/contrib</a>.
      Please note these builds are not supported by the KOffice team which provides source packages only.

      <h1>Installing Binaries</h1>
      <br>
      <b>RPMs:</b>
      <br>
      Type the following as root:
      <blockquote><code>
      rpm -Uvh koffice.rpm</code>
      </blockquote>
      <p>
      Please replace "<code>koffice.rpm</code>" with the full path to and the
      name of your binary rpm.
      </p>
      <br />

      <b>tar.gz:</b>
      <p>
      Just do the following:
      <blockquote><code>
      cd /<br>
      su<br>
      tar xzvf package.bin.tar.gz
      </code></blockquote>
      </p>
      <p>You should add the /opt/kde3 path as KDEDIR in /etc/profile.
      </p>
      <br />

      <!--<b>Debian packages:</b>
      <p>
      <p>See an excellent FAQ on KDE3 and KOffice for Debian
         <a href='http://davidpashley.com/debian-kde/faq.html'>here</a> for download and installation
      instructions.
      The download location for Debian-KOffice packages is
        <code>http://people.debian.org/~bab/kde3 the koffice.deb</code><br>
      Please follow the instructions mentioned on the FAQ for changing your <code>/etc/apt/sources.list</code>
      file after which you should just be able to use <code>apt-get install</code> to get KOffice.
      </p>-->

<?php include("footer.inc"); ?>
