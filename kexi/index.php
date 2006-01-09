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
        $gallery = new ImageGallery("Kexi - Screenshot");
        $gallery->addImage("pics/t_relations2.png",
                           "pics/relations2.png",
                           268, 200,  "[Screenshot]", "", "Kexi with database query view");
        $gallery->show();
        ?>
       </center>

<p>
As a real member of the KDE and KOffice projects, Kexi integrates fluently into both. It is designed to be fully usable also without KDE on Linux/Unix and MS Windows platforms (Mac OS X version planned).
</p>

<p>
Kexi is considered as a long awaited Open Source competitor for MS Access, Filemaker and Oracle Forms. Its development is motivated by the lack of Rapid Application Development (RAD) tools for database systems that are sufficiently powerful, inexpensive, open standards driven and portable across many operating systems and hardware platforms. 
</p>
<p>
For more information visit dedicated Kexi Project Home Page containing resources for users and developers: <a href="http://www.kexi-project.org/">www.kexi-project.org</a>.
</p>

<br />
<hr width="30%" align="center" />
<p>
Last update: <?php echo date ("Y-m-d", filemtime(__FILE__)); ?>
</p>

<?php include("footer.inc"); ?>
