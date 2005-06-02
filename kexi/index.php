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
  $appinfo->addAuthor("Peter Simonsson", "psn@linux.se");
  $appinfo->addAuthor("Joseph Wenninger", "jowenn@kde.org");
  $appinfo->addContributor("Jaros&#322;aw Staniek", "js @ iidea . pl");
  $appinfo->addContributor("Adam Pigg", "adam @ piggz . fsnet . co . uk");
  $appinfo->addContributor("C&eacute;dric Pasteur", "cedric . pasteur @ free . fr");
  $appinfo->addContributor("Martin Ellis", "martin .  ellis @ kdemail . net");
  $appinfo->addContributor("Sebastian Sauer", "mail @ dipe . org");
  $appinfo->addContributor("Christian Nitschkowski", "segfault_ii @ web . de");
  $appinfo->show();
?>

<h2>Description</h2>

<p>
Kexi is an integrated data management application. It can be used for creating database schemas, inserting data, performing queries, and processing data. Forms can be created to provide a custom interface to your data. All database objects - tables, queries and forms - are stored in the database, making it easy to share data and design.
</p>

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
Current Kexi version is 0.8 beta 1, released together with KOffice 1.4 Beta
1. See <a
href="http://www.kexi-project.org/wiki/wikiview/index.php?AnnouncementForKOffice1.4Beta1">the announcement</a>.
</p>

<p>
<b>Note:</b> There are also stand-alone Kexi releases. The most current is 0.9. 
See <a
href="http://www.kexi-project.org/wiki/wikiview/index.php?0.9Announcement">the announcement</a>.
</p>


<h2>Features</h2>

<h3>Basic Database Features</h3>
<ul>
 <li>Hiding of the database backend specifics from the user, but allowing advanced users full access at the same time</li>
 <li>Table structure altering (functional)</li>
 <li>Table creation (functional)</li>
 <li>Database query creation, without the need of knowing SQL (Structured Query Language)</li>
 <li>User-friendly data manipulation (even on complicated queries)</li>
</ul>


<h3>Data Processing and Access</h3>
<ul>
 <li>User-defined forms for data input and presentation (functional)</li>
 <li>Scripting support with Python and JavaScript/ECMA-Script language and/or Python (in progress)</li>
 <li>KWord mailmerge integration (planned)</li>
 <li>Easy data report generation (rewrite planned)</li>
</ul>


<h3>Database Backends</h3>
<p>
At the moment this documentation is written, drivers for the following database engines are developed as integrated (single user) backends:</p>
<ul>
 <li><a href="http://www.sqlite.org">SQLite</a> (version 2 and 3, file-based, complete)</li>
 <li><a href="http://www.postgresql.org">PostgreSQL (complete)</a></li>
 <li><a href="http://www.mysql.com">MySQL (complete)</a></li>
 <li><a href="http://firebird.sourceforge.net"> (planned)</a></li>
</ul>
<p>
It is planned to support also other database systems, especially for FireBird/Interbase and ODBC interface, for better corporate usage in the next versions. Typically, most up to date and best supported backends (from KexiDB point of view) are always: SQLite, PostgreSQL and MySQL.
</p>


<h2>More</h2>

<p>
Kexi Project Home (mainly for power users and developers): <a href="http://www.kexi-project.org/">http://www.kexi-project.org/</a>
</p>

<?php include("footer.inc"); ?>
