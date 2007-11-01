<?php
  $page_title="Install KOffice unstable from svn";
  $site_root = '../';
  include("koffice.inc");
  include("header.inc");
?>

    <p><b>Note</b>: <i>trunk</i> is for KDE4 and therefore requires the latest working development copy of KDE4. For information on how to set up a KDE4 development environment, see the KDE TechBase <a href=http://techbase.kde.org/Getting_Started/Build/KDE4">Building KDE4</a> page.</p>

<p>KOffice unstable is in the <i>trunk</i> branch. You might want to get it in order to test it, develop or to write docs. This is for advanced users.
</p>
<p>Also, note that some distributions such as Ubuntu come with unstable KOffice packages in the repositories, which is useful if you only wish to test or write documentation. Please see your distribution's documentation for more details.</p>
    
    <p>Providing you have set up your environment as outlined in <a href="http://techbase.kde.org/Getting_Started/Build/KDE4">Getting Started/Build KDE4</a>, you should be able to build KOffice trunk using the following commands:</p>
<pre>
    $ svn co svn://anonsvn.kde.org/home/kde/trunk/koffice
    $ cd koffice
    $ cmakekde
</pre>

<i>To keep your local copy up-to-date</i>, you must perform:

<pre>
    $ cd koffice
    $ svn up
    $ cmakekde
</pre>

<br />
<br />
<hr width="30%" align="center" />
<p>
Last update: <?php echo date ("Y-m-d", filemtime(__FILE__)); ?>
</p>
<?php include("footer.inc"); ?>
