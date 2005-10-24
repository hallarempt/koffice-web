<?php
  $page_title="Install KOffice unstable from svn";
  $site_root = '../';
  include("koffice.inc");
  include("header.inc");
?>
<p>KOffice unstable is the next coming KOffice 1.5 version. You might want to get it in order to test it or to develop on it or to write docs. This is for advanced users and can crash or have many bugs.
</p>

<pre>
    $ svn co svn://anonsvn.kde.org/home/kde/trunk/koffice
    $ cd koffice
    $ make -f Makefile.cvs
    $ ./configure --prefix=$KDEDIR
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