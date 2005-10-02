<?php
  $page_title="Kexi";
  $site_root='../';
  include("koffice.inc");
  include("header.inc");
?>

<?php
  include("kexi.inc");
  $appinfo->showIconAndCopyright();
?>

<p>
Kexi is an integrated data management application. It can be used for creating database schemas, inserting data, performing queries, and processing data. Forms can be created to provide a custom interface to your data. All database objects - tables, queries and forms - are stored in the database, making it easy to share data and design.
</p>

<center>
  <?php
    $gallery = new ImageGallery("Karbon - Screenshot");
    $gallery->addImage("pics/sampleDatabase_2005_09_330.png",
                       "pics/sampleDatabase_2005_09.png",
                       330, 237,
                       "[Screenshot]", "",
                       "Kexi with the example Database");
    $gallery->show();
  ?>
</center>

<p>
As a real member of the KDE and KOffice projects, Kexi integrates fluently into both. It is designed to be fully usable also without KDE on Linux/Unix and MS Windows platforms (Mac OS X version planned).
</p>

<p>
Kexi is considered as a long awaited Open Source competitor for MS Access, Filemaker and Oracle Forms. Its development is motivated by the lack of Rapid Application Development (RAD) tools for database systems that are sufficiently powerful, inexpensive, open standards driven and portable across many operating systems and hardware platforms. 
</p>

<h2>The Project</h2>

<p>
Kexi Project, started in 2002, is developed by <a href="http://www.kexi-project.org/people.html">Kexi Team</a> - an international group of independent developers, since February 2003 with assistance and support from the <a href="http://www.openoffice.com.pl">OpenOffice Polska</a> company.
</p>

<p>
The major communication channel in Kexi development is <a href="irc://irc.freenode.net/#kexi">the Kexi IRC channel</a> and <a href="http://www.kexi-project.org/wiki/wikiview/">Kexi Development Wiki</a> web site.
</p>


<h2>Current version</h2>
<p>
There are two kinds of Kexi release. 
</p>

<h3>Released with KOffice</h3>
<p>
Current Kexi version released together with KOffice 1.4 is <b>0.8</b>. See <a
href="http://www.kexi-project.org/wiki/wikiview/index.php?AnnouncementForKOffice1.4">the announcement</a>.
</p>

<h3>Standalone Kexi release</h3>
<p>
The most current Kexi released without KOffice is <b>0.9</b>. 
See <a
href="http://www.kexi-project.org/wiki/wikiview/index.php?0.9Announcement">the announcement</a>.
</p>
<p>Note: Standalone Kexi releases usually provide more features than Kexi included in the newest KOffice release. This is possible because there are shoter release cycles within Kexi project comparing to release cycles of entire KOffice project.
</p>



<h2>More</h2>

<p>
Kexi Project Home (mainly for power users and developers): <a href="http://www.kexi-project.org/">http://www.kexi-project.org/</a>
</p>

 <br />
 <hr width="30%" align="center" />
 <p>
 Last update: <?php echo date ("Y-m-d", filemtime(__FILE__)); ?>
 </p>
<?php include("footer.inc"); ?>
