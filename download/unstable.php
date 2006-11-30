<?php
  $page_title="Install KOffice unstable from svn";
  $site_root = '../';
  include("koffice.inc");
  include("header.inc");
?>

<p><b>Note</b>: <i>trunk</i> is now for the <i>Qt4/KDE4</i> port and does not compile right now. If you want to work on that, please send a mail to the koffice-devel mailing list.</p>

<p>KOffice unstable is the bugfix branch 1.6. You might want to get it in order to test it or to develop on it or to write docs. This is for advanced users.
</p>
<p>For KOffice <?php echo $currentversion; ?> from svn you additionally need:
<a href="ftp://ftp.gnu.org/pub/gnu/automake/">Automake 1.6.1</a> and
<a href="ftp://ftp.gnu.org/pub/gnu/autoconf/">Autoconf 2.53</a>.</p>
<p>You need qt >3.3.0 + headers (devel or dev packages if you use qt from your distribution), kdelibs >= 3.4.0 + headers (devel or dev packages if you use kdelibs from your distribution), arts >=1.4
</p>
<p><tt>svn</tt> is in the subversion package from your distribution.</p>
<p>Type <tt>configure --help</tt> if you want to use configure options.</p>
<p><b>Note</b>: after you finish <tt>./configure</tt>, look at the output and install all missing packages (+ devel or dev)  mentioned and re-run  <tt>./configure</tt>.</p>
<p>Please refer to <a href="http://mail.kde.org/pipermail/kexi/2005-October/000025.html">http://mail.kde.org/pipermail/kexi/2005-October/000025.html</a> to know more about setting some environment variable in order not to crush your existing KOffice installation and to <a href="http://developer.kde.org/documentation/other/developer-faq.html#q2.18.2">http://developer.kde.org/documentation/other/developer-faq.html#q2.18.2</a>.</p>

<pre>
    $ svn co svn://anonsvn.kde.org/home/kde/branches/koffice/1.6/koffice/
    $ cd koffice
    $ make -f Makefile.cvs
    $ ./configure 
    $ make
    $ su -c 'make install'
</pre>

<i>To maintain your copy up-to-date</i>, you will do:

<pre>
    $ cd koffice
    $ svn up
    $ make
    $ su -c 'make install'
</pre>

After that, if you get some error message in the make stage, rerun:
<pre>
    $ make -f Makefile.cvs
    $ ./configure 
    $ make
    $ su -c 'make install'
</pre>





<br />
<br />
<hr width="30%" align="center" />
<p>
Last update: <?php echo date ("Y-m-d", filemtime(__FILE__)); ?>
</p>
<?php include("footer.inc"); ?>
