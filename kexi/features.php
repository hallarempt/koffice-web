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
 <li>Table structure altering</li>
 <li>Table creation</li>
 <li>Database query creation, without the need of knowing SQL (Structured Query Language)</li>
 <li>User-friendly data manipulation (even on complicated queries)</li>
</ul>

<p>
<b>Data Processing and Access</b><br/>
</p>
<ul>
 <li>User-defined forms for data input and presentation</li>
 <li>Data migration from MySQL, PostgreSQL.</li>
 <li>Migration from Microsoft Access databases is available as
 an <a href="../filters/1.6/kexi/mdb.php">additional plugin</a>.</li>
 <li>Scripting support with Python and JavaScript/ECMA-Script language
 and/or Python</li>
 <li>KWord mailmerge integration (planned)</li>
 <li>Easy data report generation (rewrite planned)</li>
</ul>

<p>
<b>Supported Database Backends</b>
</p>
<p>
  Kexi projects are usually stored in a file.  This is convenient for
  databases that are only used by a single person.
</p>
<p>
  However, for some projects, users may prefer to store their data on
  a remote database server.  This allows several users to use the same
  database.  Currently, changes to the database structure should only
  be made by one user: concurrent modifications to the database
  structure are not supported.
</p>

<p>Kexi supports the following database systems:</p>
<ul>
 <li><a href="http://www.sqlite.org">SQLite</a> (version 2 and 3, file-based)</li>
 <li><a href="http://www.postgresql.org">PostgreSQL</a> (server-based)</li>
 <li><a href="http://www.mysql.com">MySQL</a> (server-based)</li>
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

