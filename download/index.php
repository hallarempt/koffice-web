<?php
  $page_title="Download KOffice";
  $site_root = '../';
  include("koffice.inc");
  include("header.inc");
?>

<h2>Information</h2>
<p>KOffice is currently available as version <?php echo $currentversion ?> designed to run with KDE 3.3 or later. KOffice is released separately from the rest of
KDE, so KOffice releases are not in sync with those of KDE. If you wish to use a newer development version, then you will need to
<a href="source.php">compile from source</a>.</p>

<h2>Download</h2>
<p>Qt >= 3.3.x, arts >= 1.3, and kdelibs >= 3.3.0 packages are all pre-requisites of KOffice. kdebase is strongly recommended too.</p>

<a name="source_code"></a>
<h3>Download Source Code: KOffice <?php echo $currentversion; ?></h3>

<p>For more information read the <a href="source.php">Download KOffice Source Code</a> page.</p>

<a name="binaries"></a>
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
<a href="http://download.kde.org/stable/koffice-1.6.0/">here (koffice-1.6)</a> and
<a href="http://download.kde.org/stable/koffice-1.5.0/">here (koffice-1.5.0)</a>.</p>

<p><a href="http://www.archlinux.org">Archlinux</a> users can update koffice by typing <code>pacman -S koffice</code>.</p>

<p>KOffice is also available on dedicated <a href="kofficelivecd.php">KOffice 1.6.0 Live-CD</a>.</p>

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
    <code>http://people.debian.org/~bab/kde3 the koffice.deb</code><br />
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
