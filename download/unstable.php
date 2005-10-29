<?php
  $page_title="Install KOffice unstable from svn";
  $site_root = '../';
  include("koffice.inc");
  include("header.inc");
?>
<p>KOffice unstable is the next coming KOffice 1.5 version. You might want to get it in order to test it or to develop on it or to write docs. This is for advanced users.
</p>
<p>You need qt >3.3.0 + headers (devel or dev packages if you use qt from your distribution), kdelibs >= 3.4.0 + headers (devel or dev packages if you use kdelibs from your distribution), arts >=1.4
</p>
<p><tt>svn</tt> is in the subversion package from your distribution.</p>
<p>Type <tt>configure --help</tt> if you want to use configure options.</p>
<p>After you finish <tt>./configure</tt>, look at the output and install all missing packages (+ devel or dev)  mentioned and re-run  <tt>./configure</tt>.</p>

<pre>
    $ svn co svn://anonsvn.kde.org/home/kde/trunk/koffice
    $ cd koffice
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