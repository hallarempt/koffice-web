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
<b>Kexi is considered as a long awaited Open Source competitor for Microsoft Access, Filemaker and Oracle Forms.</b> Its development is motivated by the lack of Rapid Application Development (RAD) tools for database systems that are sufficiently powerful, inexpensive, open standards driven and portable across many operating systems and hardware platforms. 
</p>

<p>
Kexi is an integrated data management application. It can be used for creating databases, inserting data, performing queries, and processing data. Forms can be created to provide a custom interface to your data. All database objects - tables, queries and forms - are stored in the database, making it easy to share data and design.
</p>

      <center>
      <?php
        $gallery = new ImageGallery("Kexi - Screenshot");
        $gallery->addImage("pics/t_image_box2.png",
                           "pics/image_box2.png",
                           250, 152,  "[Screenshot]", "", "Kexi form");
        $gallery->show();
        ?>
       </center>

<p>
As a real member of the KDE and KOffice projects, Kexi integrates fluently into both. It is designed to be fully usable also without KDE on Linux/Unix and MS Windows platforms (Mac OS X version planned).
</p>

<p>
<div style="padding:1em;background-color:#fffff0;border: 1px solid #ffcccc;text-align:center;">
For more information visit dedicated Kexi Project Home Page<br>containing resources for users and developers:<br><br><b><a href="http://www.kexi-project.org/">www.kexi-project.org</a></b>
</div>
</p>

<br />
<br />
<p>
Last update: <?php echo date ("Y-m-d", filemtime(__FILE__)); ?>
</p>

<?php include("footer.inc"); ?>
