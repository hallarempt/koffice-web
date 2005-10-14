<?php
  $page_title="klik://koffice -- How to Test and How to Use it.";
  $site_root='../../';
  include("koffice.inc"); 
  include("header.inc");
?> 

<p><font color="#ff0000"><tt>DISCLAIMER: klik IS EXPERIMENTAL SOFTWARE. BUGS IN THIS PACKAGE ARE MORE LIKELY THE klik DEVELOPER's FAULT THAN KOFFICE's.</tt></font></p>

<div id="quicklinks">
[
  <a href="backgroundinfo.php">klik Background Info</a> |
  <!--<a href="">klik development news</a> |-->
  <a href="quickhelp.php">Quick Help</a> |
  <a href="languages.php">Language Settings</a> |
  <a href="screenshots.php">Screenshots</a> |
  <!--<a href="">klik+koffice tips and tricks</a> |-->
 <a href="maintainers.php">klik maintainership</a>
]
</div>

  <h3>Fully Functional Demo in One File Without Installation</h3>
  <h2>klik-ified KOffice-1.4.2 Release, with OpenDocument &amp; Multilanguage Support</h2>


<p>The KOffice Development Team is proud to announce the first fully functional  <a href="klik://koffice">klik://koffice</a>  testdrive bundle.</p>

<a href="http://klik.atekon.de/">klik</a> is an innovative approach to
make testing of new applications extremly simple and convenient to
users, while at the same time staying away from any interference and
potential conflict with the system's software management system
(.deb/dpkg/apt or RPM). <h2>Quick Guide to klik:</h2>

<p><i>System requirements: </i></p>

<ul>
<li>Linux with KDE 3.3.0 installation or newer is fine. Minimum
requirements are: KDE system libraries (kdelibs) 3.3.0 or newer and
Trolltech's Qt toolkit (qt3) 3.3.0 or newer.</li>
<li>A Kernel that supports "loop mounting" of file system images and
zisofs support. (Most distro's recent default Kernels support that --
we noticed that Gentoo and Mandrake/Mandriva users may have had to
install a new kernel or addtional modules, though.) </li>
</ul>

<p>Some other klik software bundles may require <i>cramfs</i> support in the Kernel; but this is not the case for  <a href="klik://koffice">klik://koffice</a> (which uses <i>zisofs</i>, like most file systems on a CD).</p>

<p>You then only need to install the "klik client" (less than 20 kByte download, done in less than 20 seconds):</p>

<ol>
 <li>Use <tt>[alt]+[f2]</tt> to start <i>"Run command...."</i></li>
 <li>Type <tt>wget klik.atekon.de/client/install -O - | sh</tt></li>
 <li>Hit "<i>Enter</i>", and follow instructions</li>
</ol>

<p>Now just click on this link: <a href="klik://koffice">klik://koffice</a>. This will download and startup KOffice-1.4.2 (ca. 68 MByte) for you.</p>

<p>You may be interested to also run this demo in a language other than
English (or whatever is used on your system). A list of current
translations is documented in the file <i>"3.README.language-switch.odt"</i> (part of the klik bundle). How to do so is explained on the <a href="languages.php">Languages page</a>.</p>


<h2>Bugs and Hints</h2>

<p>This klik-ified KOffice bundle is still a highly experimental
package. It is meant to be used for easy testing of KDE's latest and
greatest KOffice release, version 1.4.2. Please give us feedback. We
need it to make KOffice better, as well as to the way we make the klik
package of KOffice work for you. </p>

<p>You may find bugs. No, you surely will find bugs and encounter
crashes. Some of these bugs may be our fault, the klik developers'.
Some of them may be caused by incompatible libraries of this package
with what it finds on your system (see the included document <em>"1.README.system-requirements.odt"</em> for the exact requirements to run this klik bundle).</p>

<p>If you report bugs to us (<a href="mailto:klik-users@kde.org">klik-users@kde.org</a>), we can fix them in the future. If you report a bug, please be as specific as possible.</p>

<p>This package show-cases the klik technology as well as what new features KOffice-1.4.2 brings to its users.</p>

<p>This package will not write into your standard $KDEHOME directory, but will use its own one, <i>$HOME/.kofficeklik</i>,
to minimize adversive effects onto your settings. On the other hand, it
will not be able to re-use settings which you had previously made.</p>

<p>If you indeed <i>want</i> to use your standard KDE settings, delete or rename the directory <i>.kofficeklik</i> (underneath your <i>$HOME</i> directory) and create a symbolic link to your standard <i>$KDEHOME</i>:</p>

<pre>           cd $HOME
           rm -rf .kdeklik 
           ln -s $(kde-config --localprefix) .kdeklik
</pre>

<p>Last, this package will create additional K-Menu entries in addition
to the ones from applications from your base system. This could cause
double entries at various places. (We may remove this feature in a
future version -- we are not yet sure which alternative is more useful
for testing).</p>


<h2>Start Single Applications from Bundle</h2>
By default, KOffice will start in "Workspace Mode". Workspace Mode
gives you access to all components of this Office Suite at once.
You can also start each individual application of this suite on its
own, in "Single Application Mode". For the sake of this klik-able and
self-contained demo file, at this time this is only possible with a
commandline like this:
<pre>	~/.zAppRun koffice.cmg <name-of-program>
	${HOME}/.zAppRun koffice.cmg karbon
	/home/kurt/.zAppRun koffice.cmg kword
</name-of-program></pre>

<p>("~" is a shortcut for your home directory, ${HOME} also leads to
your home dir, .zAppRun is the wrapper script needed to run this klik
demo bundle), where <name-of-program> is one of the list below:</name-of-program></p>

<pre>	help-app       # displays this help
	help-all       # displays all help screens

	koshell        # Office Suite, Workspace Mode
	kword          # Word Processor, frame based
	kpresenter     # Presentation
	kspread        # Spreadsheet
	krita          # Imaging and Painting
	kthesaurus     # Finding alternative words
	kivio          # Flow Chart Design
	karbon         # Vector Graphic
	kchart         # Chart Drawing
	kexi           # Database Application
	kformdesigner  # Form Design
	kformula       # Mathematical Formulas
	kudesigner     # Report Designer
	kugar          # Report Viewer
</pre>

<p>You can contact us here:</p>

<ul>
  <li>in IRC, channel <a href="irc://www.freenode.net/klik">#klik</a>, hosted by FreeNode.net</li>

  <li>on the <a href="mailto:klik-users@kde.org">klik-users@kde.org</a> mailing list 
   (subscribe at <a href="https://mail.kde.org/mailman/listinfo/klik/">https://mail.kde.org/mailman/listinfo/klik/</a>)</li>

  <li>or via the feedback form on the klik server website 
   (<a href="http://klik.atekon.de/comments.php">http://klik.atekon.de/comments.php</a> -- scroll to bottom) </li>
</ul>

<p>Have fun with  testing out KOffice-1.4.2 with the help of klik !</p>

<p><b>klik Developers:</b></p>
<p>
&nbsp;&nbsp;&nbsp; - Simon Peter ("probono" in IRC, channel #klik)<br>
&nbsp;&nbsp;&nbsp; - Niall Walsh ("bfree" in IRC, channel #klik)<br>
&nbsp;&nbsp;&nbsp; - Kurt Pfeifle ("pipitas" in IRC, channels #klik / #nx)<br>
</p>

<p><b>KOffice developers:</b></p>
<p>
&nbsp;&nbsp;&nbsp; - Boudewijn Rempt ("boud" in IRC, channel #koffice), KOffice Release Manager<br>
&nbsp;&nbsp;&nbsp; - David Faure ("dfaure" in IRC, channel #koffice), KOffice Lead Developer<br>
&nbsp;&nbsp;&nbsp; - Inge Wallin ("ingwa" in IRC, channel #koffice), Public Relations Manager<br>
&nbsp;&nbsp;&nbsp; - Anne-Marie Mahfouf ("annma" in IRC, channel #koffice), KOffice Webmaster<br>

<br />
 <br />
 <hr width="30%" align="center" />
 <p>
 Last update: <?php echo date ("Y-m-d", filemtime(__FILE__)); ?>
 </p>
<?php include("footer.inc"); ?>

