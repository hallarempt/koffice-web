<?php
  $page_title="Download KOffice Source Code";
  $site_root = '../';
  include("koffice.inc");
  include("header.inc");
?>

      <h2>Links For Special Distributions</h2>
      <ul>
      <li><a href="http://lists.kde.org?l=koffice-devel&m=106571934702580&w=2">
        KOffice CVS Head with Gideon on Debian</a></li>
      </ul>

      <h2>Requirements</h2>
      <p>To compile KOffice you need:
<ul>
<li>For KOffice 1.2.1: <a href="ftp://ftp.gnu.org/pub/gnu/automake/">Automake 1.5 or 1.6</a> and
    <a href="ftp://ftp.gnu.org/pub/gnu/autoconf/">Autoconf 2.52</a>.</li>
<!--<li>For KOffice 1.2 betas and the CVS versions: <a href="ftp://ftp.gnu.org/pub/gnu/automake/">Automake 1.5 or 1.6</a> and
    <a href="ftp://ftp.gnu.org/pub/gnu/autoconf/">Autoconf 2.52</a>.</li>-->
<li>a C++ compiler which supports exceptions (preferably 
<a href="http://gcc.gnu.org">a recent version of GCC</a>).
(see <a href="http://gcc.gnu.org">http://gcc.gnu.org</a>
for info about getting and installing it.)
</li>
</ul>

<h2>Information</h2>
<p>KOffice stable is currently available as version 1.2.1, designed to run with KDE 3.x.<br>
You must choose now to run the stable KOffice 1.2.1 or a development version. In case of the 
development version this can mean that it is not usable for end use.
If you want the development version you can choose between a daily snapshot, or obtain source 
regularly via CVS or CVSUP.</p>

<h2>Download</h2>
<p><b>KOffice 1.2.1 stable</B> is available 
<a href="http://download.kde.org/stable/koffice-1.2.1/src/">here</a>

<p><b>The latest development release is KOffice 1.3 Beta 4</b>. Get it from
<a href="http://download.kde.org/unstable/koffice-1.2.93/src/">here</a>.

<p>The <b>daily snapshots</b> are <a href="ftp://ftp.kde.org/pub/kde/snapshots/">here</a>.
<p>The development version via <b>anonymous CVS</B> (recommended) needs extra instructions, check the
<a href="http://developer.kde.org/source/anoncvs.html">anoncvs instructions</a>.
<p>The development version via <b>CVSup</B> needs instructions which are <a href="http://developer.kde.org/source/cvsup.html">here</a>.
<p>Use cvsup or anoncvs if you plan to update often, since you will save a significant amount 
of time. If you use cvsup or anoncvs, you need to run <tt>make -f Makefile.cvs</tt> before 
running <tt>./configure</tt> in the instructions below, or follow the instructions on the 
cvsup or anoncvs page. <br>
In any case, you need the HEAD branch! (which is the default).

<h2>Instructions</h2>
<p>It's recommended that you download from a <a href="http://www.kde.org/mirrors.html">FTP mirror</a> located in your country.</p>
<p>For KOffice 1.2.1 stable you need QT 3.0.x, arts, and kdelibs (kdebase recommended too).
<!--<p>For the development version of KOffice you need QT 3.0.x, arts, and kdelibs from CVS (in that order).-->

<p>QT can be found <a href="ftp://ftp.trolltech.com/qt/source/">here</a>
and the KDE development snapshots from <a href="ftp://ftp.kde.org/pub/kde/snapshots/">here</a>.</p>

<p>This is the minimum to run KOffice. If you want, there are other packages which 
contain a lot of different applications, from networking, graphics, multimedia to games. See the appropriate
websites below "Family" in the left border.</p>


<h2>Installing Qt and the base KDE packages</h2>
<p>
Qt snapshot :
<blockquote><tt>tar xvzf qt-x11-&lt;version&gt;.tar.gz</tt>
<br /><tt>cd qt-&lt;version&gt;</tt>
<br /><tt>export QTDIR=$PWD</tt>
<br /><tt>./configure -system-zlib -qt-gif -system-libpng -system-libjpeg -plugin-imgfmt-mng -thread -no-stl -no-xinerama -no-g++-exceptions</tt>
<br /><tt>make</tt></blockquote>
</p>
<p>
And then for each KDE package:
<blockquote>
<tt>Make sure you have done the QTDIR export in the QT dir as pointed out above, this is still used!
<tt>bunzip &lt;package&gt;.tar.bz2 or cvs checkout</tt>
<br /><tt>tar xvf &lt;package&gt;.tar</tt>
<br /><tt>cd &lt;package&gt;</tt>
<br /><tt>./configure</tt>
<br /><tt>make all</tt>
<br /><tt>su -c "make install"</tt>
</blockquote>
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
      is listed on <A HREF="http://developer.kde.org/build/compilationfaq.html">the compilation FAQ</A>,
      although it's a bit outdated.
      </p>

      <h2>Download and Install KOffice</h2>

      <blockquote>
      <tt>bunzip koffice-XXXXXX.tar.bz2</tt><br />
      <tt>tar xvf koffice-XXXXXX.tar</tt><br />
      <tt>cd koffice</tt><br />
      <tt>./configure &lt;options, see below&gt;</tt><br />
      <tt>make all</tt><br />
      <tt>su -c "make install"</tt>
      </blockquote>
      </p>

      <h3>Configure options:</h3>

      <p>If you plan to work on KOffice, and if you have quite some
      disk space available, use ./configure -enable-debug=full. This adds -g3 to the
      compilation flags, and enables full debug info in backtraces and in gdb.</p>

      <p>Choosing a prefix, i.e. where to install KOffice:
      you have two choices. Either you just compiled KDE (in particular kdelibs) into its own prefix,
      then you should use the same prefix for koffice, or you want to install KOffice into its
      own prefix. If you do that, you'll have to make sure to tell KDE about where you installed
      KOffice. See the note below. You'll also have to make sure you don't have another version
      of KOffice installed in the KDE prefix ; they would conflict. It's ok to have two versions
      of KOffice installed, but then none should be in the "kde prefix". The other solution
      is to have two versions of KDE installed, with a version of KOffice in each one.

      <p>
      Note: if you used <code>./configure --prefix</code> to install KOffice in a different
      location than the rest of KDE, you'll need to add this to /etc/kderc :
      <blockquote>
      <tt>[Directories]</tt><br/>
      <tt>prefixes=/the/prefix/I/used/for/koffice</tt><br/>
      </blockquote>
      <br/>
      Another solution is to export KDEDIRS=/the/prefix/I/used/for/koffice:/the/normal/kdedir
      </p>

      <p>Once you told KDE about where KOffice is, you need to run <b>kbuildsycoca</b>,
      which updates the system configuration cache in KDE, or to restart KDE.</b>

      <p>
      You should now be able to start each individual application, such as <i>kspread</i>,
      <i>kchart</i>, <i>kpresenter</i>, <i>karbon</i>, <i>kexi</i>, 
      <i>kformula</i>, <i>kword</i>, <i>kivio</i> and <i>kugar</i>, or run the integrated
      <i>koshell</i> for easy access to all of the applications.
      </p>

<?php include("footer.inc"); ?>
