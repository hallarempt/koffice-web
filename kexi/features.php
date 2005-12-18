<?php
  $page_title="Kexi Features";
  $site_root='../';
  include("koffice.inc"); 
  include("header.inc");
?>

<p>
<b>Standard Database Features</b><br/>
</p>
<ul>
 <li>Hiding of the database backend specifics from the user, but allowing advanced users full access at the same time</li>
 <li>Table structure altering (functional)</li>
 <li>Table creation (functional)</li>
 <li>Database query creation, without the need of knowing SQL (Structured Query Language)</li>
 <li>User-friendly data manipulation (even on complicated queries)</li>
</ul>

<p>
<b>Data Processing and Access</b><br/>
</p>
<ul>
 <li>User-defined forms for data input and presentation (functional)</li>
 <li>Data migration from MySQL, PostgreSQL. Migration from MS Access databases is available as an <a href="http://www.kexi-project.org/wiki/wikiview/index.php?MDBDriver#2._Download">additional plugin</a>. (functional)</li>
 <li>Scripting support with Python and JavaScript/ECMA-Script language and/or Python (in progress)</li>
 <li>KWord mailmerge integration (planned)</li>
 <li>Easy data report generation (rewrite planned)</li>
</ul>

<p>
<b>Supported Database Backends</b>
</p>
<p>
At the moment this documentation is written, drivers for the following database engines are developed as integrated (single user) backends:</p>
<ul>
 <li><a href="http://www.sqlite.org">SQLite</a> (version 2 and 3, file-based, complete)</li>
 <li><a href="http://www.postgresql.org">PostgreSQL (complete)</a></li>
 <li><a href="http://www.mysql.com">MySQL (complete)</a></li>
 <li><a href="http://firebird.sourceforge.net">Firebird (planned)</a></li>
</ul>
<p>
It is planned to support also other database systems, especially for FireBird/Interbase and ODBC interface, for better corporate usage in the next versions. Typically, most up to date and best supported backends (from KexiDB point of view) are always: SQLite, PostgreSQL and MySQL.
</p>

<br />
<hr width="30%" align="center" />
<p>
Last update: <?php echo date ("Y-m-d", filemtime(__FILE__)); ?>
</p>


<?php include("footer.inc"); ?>

