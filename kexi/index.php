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
  $appinfo->setCopyright("2002-2004", "the Kexi Team");
  $appinfo->addAuthor("Lucijan Busch", "lucijan@kde.org");
  $appinfo->addContributor("Lucijan Busch", "lucijan@kde.org");
  $appinfo->addContributor("Peter Simonsson", "psn@linux.se");
  $appinfo->addContributor("Joseph Wenninger", "jowenn@kde.org");
  $appinfo->addContributor("Jaros&#322;aw Staniek", "js @ iidea . pl");
  $appinfo->show();
?>

<h2>Description</h2>

<p>
<b>
Note: Kexi isn't part of this version nor will it be in the final KOffice 1.3.
It is slated for a stand-alone release later this year and will re-integrated
into KOffice in the next major version.
</b>
</p>

<!-- p>
<b>Note: 
Currently, the main change in Kexi project is a migration to renewed db api
(including db abstraction), kexidb module koffice/kexi/kexidb/ in kde.org
cvs, that can be hopfully considered as superset of QSql. Until other Kexi parts that
depend on old kexiDB could be ported, Kexi sources can be broken. 
<a href="http://lists.kde.org/?l=kde-cvs&m=106441791719847&w=2">More information</a>
</b>
</p -->

<p>
Kexi is an integrated environment for managing data. It helps in creating database schema, inserting, querying and processing data. 

<p>
The idea of this development effort came because of noticeable lack of application like MS Access, FoxPro, Oracle Forms or File Maker that is powerful enough, inexpensive, open standards driven and highly portable between many OSes and hardware platforms.
</p>

<p>As Kexi is a real member of the KDE and KOffice projects, it integrates fluently into both.
<!-- The report generation for instance is done by reusing the well known and well-tried Kugar
report generator component of the KOffice suite, instead of reinventing the wheel over
and over again.--> 
</p>

<p>
Kexi Project, started in 2002, is developed by <a href="http://www.kexi-project.org/people.html">Kexi Team</a> - an international group of independent developers, since february 2003 with additional assistance and support from the <a href="http://www.openoffice.com.pl">OpenOffice Polska</a> company.
</p>

<p>
The major communication channel in Kexi development is <a href="irc://irc.freenode.net/#kexi">the Kexi IRC channel</a>.

<P>
<!-- p>Another example for the integration into the whole KOffice suite is that Kexi can be used as a
data provider for mailmerge in KWord.</p -->

<h2>Current version</h2>

Current Kexi version is 0.1 beta 2. See <a href="http://www.kexi-project.org/announce-0.1-beta2.html">the announcement</a>.

<h2>Features</h2>


<h3>Basic Database Features</h3>
<ul>
 <li>Hiding of the database backend specifics from the user, but allowing advanced users full access at the same time</li>
 <li>Table structure altering (in progress)</li>
 <li>Table creation (in progress)</li>
 <li>Database query creation, without the need of knowing SQL (Structured Query Language)</li>
 <li>User-friendly data manipulation (even on complicated queries)</li>
</ul>


<h3>Data Processing and Access</h3>
<ul>
 <li>Easy data report generation using <a href="http://www.thekompany.com/projects/kugar/">Kugar</a> (not ready)</li>
 <li>Userdefined forms for data input and presentation (not ready)</li>
 <li>Scripting support (not ready) <!-- with a JavaScript/ECMA-Script like language
 (<a href="http://www.trolltech.com/products/qsa/index.html">QSA</a>)</li>
 <li>KWord mailmerge integration</li -->
</ul>


<h3>Database Backends</h3>
<p>
At the moment this documentation is written, drivers for the following database engines are developed as integrated (single user) backends:
<ul>
 <li><a href="http://www.sqlite.org">SQLite</a> (file-based)</li>
 <li><a href="http://www.postgresql.org">PostgreSQL</a></li>
 <li><a href="http://www.mysql.com">MySQL</a></li>
 <li><a href="http://firebird.sourceforge.net">FireBird/Interbase</a></li>
</ul>
It is planned to support also other database systems, especially ODBC interface, for better corporate usage in the next versions. Typically, most up to date and best supported backends (from KexiDB point of view) are: SQLite and PostgreSQL.</p>
</p>

<p>
<b>Note: It is highly recommended to use SQLite based projects for beta testing, since
 other drivers are implemented only partly or can be obsolete for current KexiDB API.</b></p>


<h2>More</h2>

<p>
Kexi Project Home (mainly for power users and developers): <a href="http://www.kexi-project.org/">http://www.kexi-project.org/</a>
</p>

<?php include("footer.inc"); ?>
