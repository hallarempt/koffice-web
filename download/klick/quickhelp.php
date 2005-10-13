<?php
  $page_title="Quick Help";
  $site_root='../';
  include("koffice.inc"); 
  include("header.inc");
?> 

<p>You can display various help screens for this klik bundle of KOffice
by appending a special commandline parameter to the startup command.</p>

<p>Examples:</p>

<pre>   ~/.zAppRun koffice.cmg show-allhelp
   ~/.zAppRun koffice.cmg show-applications
</pre>

<p>These are all available special parameters:</p>

<dl>
<dt><b>show-quickhelp</b></dt>
	<dd>List one short help screen</dd>

<dt><b>show-allhelp</b></dt>
	<dd>Display all help screens, one after the other</dd>

<dt><b>show-requirements</b></dt>
	<dd>Display system requirements to run this bundle</dd>

<dt><b>show-applications</b></dt>
	<dd>Display list of all application names inside this bundle and how to start them</dd>

<dt><b>show-languages</b></dt>
	<dd>Display list of languages/localizations for this bundle and how to access them</dd>

<dt><b>show-bugs</b></dt>
	<dd>Display notes about bugs for this bundle</dd>

<dt><b>show-contact</b></dt>
	<dd>Display contact info for the developers of this bundle</dd>

</dl>

<br />
 <br />
 <hr width="30%" align="center" />
 <p>
 Last update: <?php echo date ("Y-m-d", filemtime(__FILE__)); ?>
 </p>
<?php include("footer.inc"); ?>