<?php
  $page_title="Kexi";
  $site_root='../';
  include("koffice.inc");
  include("header.inc");
?>

<?php
  $appinfo = new AppInfo("Kexi");
  $appinfo->setIcon( "pics/cr48-app-kexi.png", "48", "48");
  $appinfo->setVersion($kexiversion);
  $appinfo->setLicense("lgpl");
  $appinfo->setCopyright("2002", "the Kexi Team");
  $appinfo->addAuthor("Lucijan Busch", "lucijan@kde.org");
  $appinfo->addContributor("Lucijan Busch", "lucijan@kde.org");
  $appinfo->addContributor("Peter Simonsson", "psn@linux.se");
  $appinfo->addContributor("Joseph Wenninger", "jowenn@kde.org");
  $appinfo->addContributor("Jaros&#322;aw Staniek", "(nospam) js (at) iidea (dot) pl");
  $appinfo->show();
?>

<h2>Description</h2>

<p>
<b>
Note: Kexi isn't part of this version nor will it be in the final KOffice 1.3.
It is slated for a stand-alone release later this year and will re-integrated
into KOffice in the next major version.
</b>

<p>
<b>Note: 
Currently, the main change in Kexi project is a migration to renewed db api
(including db abstraction), kexidb module koffice/kexi/kexidb/ in kde.org
cvs, that can be hopfully considered as superset of QSql. Until other Kexi parts that
depend on old kexiDB could be ported, Kexi sources can be broken. 
<a href="http://lists.kde.org/?l=kde-cvs&m=106441791719847&w=2">More information</a>
</b>

<p>
Kexi is an integrated environment for managing data. It helps creating
database schemas, inserting, querying and processing data.

<P>
At the moment this documentation is written, drivers for SQLite, MySQL, PostgreSQL,
FireBird/Interbase database engines are developed.
as integrated single user backends. It is planned to support other database
systems too for better corporate usage in the next versions.</p>


<p>As Kexi is a real member of the KDE and KOffice projects, it integrates fluently into both.
The report generation for instance is done by reusing the well known and well-tried Kugar
report generator component of the KOffice suite, instead of reinventing the wheel over
and over again.</p>

<p>Another example for the integration into the whole KOffice suite is that Kexi can be used as a
data provider for mailmerge in KWord.

<br><br>
<p>
<h2>Features</h2>
<br>

Basic Database Features:
<ul>

 <li>Hiding of database backend specifics from the user, but allowing advanced users full access at the same time</li>
 <li>Table structure altering</li>
 <li>Table creation</li>
 <li>Easy database query creation, without the need of knowing SQL (Structured Query Language)</li>
 <li>User-friendly data manipulation (even on complicated queries)</li>
</ul>
Data Processing and Access:
<ul>
 <li>Easy data report generation using <a href="http://www.thekompany.com/projects/kugar/">Kugar</a></li>
 <li>Userdefined forms for data input and presentation</li>
 <li>Scripting support with a JavaScript/ECMA-Script like language
 (<a href="http://www.trolltech.com/products/qsa/index.html">QSA</a>)</li>
 <li>KWord mailmerge integration</li>
</ul>
Database Backends:
<ul>
 <li><a href="http://www.sqlite.org">SQLite</a></li>
 <li><a href="http://www.mysql.com">MySQL</a></li>
 <li><a href="http://www.postgresql.org">PostgreSQL</a></li>
 <li><a href="http://firebird.sourceforge.net">FireBird/Interbase</a></li>
</ul>
<P>
<b>Note: It is highly recommended to use MySQL for beta testing since
 other drivers are implemented only partly.</b>

<br><br>
<p>

<h2>More</h2>

<p>
Kexi Project Home (mainly for developers): <a href="http://www.kexi-project.org/">http://www.kexi-project.org/</a>

<?php include("footer.inc"); ?>
