<?php
  $page_title="Download KOffice Source Code";
  $site_root = '../';
  include("koffice.inc");
  include("header.inc");
?>

<div id="quicklinks">
[
  <a href="#requirements">Requirements</a> |
  <!--<a href="">klik development news</a> |-->
  <a href="#stable">KOffice stable from tarballs</a> |
  <a href="unstable.php">KOffice unstable from svn</a> 
]
</div>

<h2><a name="requirements">Requirements</a></h2>
<p>To compile KOffice you need:</p>
<ul>
<li>a C++ compiler which supports exceptions (preferably
<a href="http://gcc.gnu.org">a recent version of GCC</a>).
(see <a href="http://gcc.gnu.org">http://gcc.gnu.org</a>
for info about getting and installing it.)
</li>
</ul>

<h2>Information</h2>
<p>KOffice stable is currently available as version <?php echo $currentversion; ?>, designed to run with KDE 3.3 and later.<br />
You must choose now to run the stable KOffice <?php echo $currentversion; ?> or a development version. In case of the
development version this can mean that it is not usable for end use.
If you want the development version (where you need at least KDE 3.3) you can choose between a daily snapshot, or obtain source
regularly via SVN.</p>
<p>Note that we have  3th version, thats the really unstable one for the upcoming 2.0, but that one is most likely not one you want.</p>

<h2>Download</h2>

<p>The complete source code for KOffice <?php echo $currentversion ?>
is available for free download via one of
the <a href="http://download.kde.org/stable/koffice-1.6.0/src/">KDE
HTTP or FTP mirrors</a>.  It's recommended that you download from
a <a href="http://www.kde.org/mirrors.html">mirror</a> located in
your country.</p>


<p>The <b>daily snapshots</b>
are <a href="ftp://ftp.kde.org/pub/kde/snapshots/">here</a>.  These
can be updated using the anonymous Subversion mirror.</p>

<p>The development version via <b>anonymous Subversion</b>
(recommended) needs extra instructions, check the
<a href="http://developer.kde.org/source/anonsvn.html">anonsvn instructions</a>.</p>

<p>Use anonsvn if you plan to update often, since you will save a
significant amount of time. If you use anonsvn, you need to
run <tt>make -f Makefile.cvs</tt> before running <tt>./configure</tt>
in the instructions below, or follow the instructions on the anonsvn
page.<br />  In any case, you need the branches/koffice/1.6 dir! Make
sure you choose that one.</p>

<h2>Instructions</h2>

<p>For the stable KOffice <?php echo $currentversion; ?> you need Qt 3.3.x, arts >= 1.3, and kdelibs >= 3.3.0 (kdebase >= 3.3.0 is recommended too).</p>
<p>For the development version of KOffice you need Qt 3.3.x, arts >= 1.3, and kdelibs >= 3.3.0.</p>

<p>Qt can be <a href="ftp://ftp.trolltech.com/qt/source/">download directly from Trolltech</a>
and the KDE development snapshots <a href="ftp://ftp.kde.org/pub/kde/snapshots/">can be downloaded from a KDE server</a>.</p>

<p>This is the minimum to run KOffice. If you want, there are other packages which
contain a lot of different applications, from networking, graphics, multimedia to games. See the appropriate
websites below "KDE Family" <a href="http://www.kde.org/">on the main KDE page</a>.</p>

<p>See also the instructions for <a href="http://www.kexi-project.org/compiling.html">compiling kexi</a></p>


<h2>Installing Qt and the base KDE packages</h2>
<p>
Qt snapshot :<br /><br />
<tt>tar xvzf qt-x11-&lt;version&gt;.tar.gz</tt>
<br /><tt>cd qt-&lt;version&gt;</tt>
<br /><tt>export QTDIR=$PWD</tt>
<br /><tt>./configure -system-zlib -qt-gif -system-libpng -system-libjpeg -plugin-imgfmt-mng -thread -no-stl -no-xinerama -no-g++-exceptions</tt>
<br /><tt>make</tt>
</p>
<p>
And then for each KDE package:<br />
<em>Make sure you have done the QTDIR export in the Qt dir as pointed out above, this is still used!</em><br /><br />
<tt>bunzip2 &lt;package&gt;.tar.bz2</tt> or <tt>svn checkout</tt>
<br /><tt>tar xvf &lt;package&gt;.tar</tt>
<br /><tt>cd &lt;package&gt;</tt>
<br /><tt>./configure</tt>
<br /><tt>make all</tt>
<br /><tt>su -c "make install"</tt>
</p>
  <!-- =========== KEEP IN SYNC WITH ../install-source.html UP TO HERE =========== -->
      <p>
      Note: KDE/KOffice packages must be compiled in the correct order.
      Compile and install arts first and then kdelibs. After this,
      other packages may be compiled in any order.</p>
      <p>Additionally, all packages mentioned here have to be compiled with the
      <i>same</i> compiler!</p>

      <p>
      If anything goes wrong during compilation, you might want to check if a solution
      is listed on <a href="http://developer.kde.org/build/compilationfaq.html">the compilation FAQ</a>,
      although it's a bit outdated.
      </p>

      <h2 id="stable">Install KOffice stable</h2>

      <p>
      <tt>bunzip2 koffice-XXXXXX.tar.bz2</tt><br />
      <tt>tar xvf koffice-XXXXXX.tar</tt><br />
      <tt>cd koffice</tt><br />
      <tt>./configure &lt;options, see below&gt;</tt><br />
      <tt>make all</tt><br />
      <tt>su -c "make install"</tt>
      </p>

      <h3>Configure options:</h3>

      <p>If you plan to work on KOffice, and if you have quite some
      disk space available, use <tt>./configure -enable-debug=full</tt>. This adds -g3 to the
      compilation flags, and enables full debug info in backtraces and in gdb.</p>

      <p>Choosing a prefix, i.e. where to install KOffice:
      you have two choices. Either you just compiled KDE (in particular kdelibs) into its own prefix,
      then you should use the same prefix for koffice, or you want to install KOffice into its
      own prefix. If you do that, you'll have to make sure to tell KDE about where you installed
      KOffice. See the note below. You'll also have to make sure you don't have another version
      of KOffice installed in the KDE prefix ; they would conflict. It's ok to have two versions
      of KOffice installed, but then none should be in the "kde prefix". The other solution
      is to have two versions of KDE installed, with a version of KOffice in each one.</p>

      <p>
      Note: if you used <tt>./configure --prefix</tt> to install KOffice in a different
      location than the rest of KDE, you'll need to add this to /etc/kderc :<br /><br />
      <tt>[Directories]</tt><br />
      <tt>prefixes=/the/prefix/I/used/for/koffice</tt><br />
      <br />
      Another solution is to export KDEDIRS=/the/prefix/I/used/for/koffice:/the/normal/kdedir
      </p>

      <p>Once you told KDE about where KOffice is, you need to run <tt>kbuildsycoca</tt>,
      which updates the system configuration cache in KDE, or to restart KDE.</p>

      <p>
      You should now be able to start each individual application, such as <i>kspread</i>,
      <i>kchart</i>, <i>kpresenter</i>, <i>karbon</i>, <i>kexi</i>,
      <i>kformula</i>, <i>kword</i>, <i>kivio</i> and <i>kugar</i>, or run the integrated
      <i>koshell</i> for easy access to all of the applications.
      </p>

<br />
 <br />
 <hr width="30%" align="center" />
 <p>
 Last update: <?php echo date ("Y-m-d", filemtime(__FILE__)); ?>
 </p>
<?php include("footer.inc"); ?>
