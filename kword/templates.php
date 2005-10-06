<?php
  $page_title="KWord Templates";
  $site_root='../';
  include("koffice.inc"); 
  include("header.inc");
?> 
     
<h2>Get more KWord templates</h2> 
      <p>
      KWord ships with some templates but you can get some more.
      </p>
      <p>You can download a package which contains 7 KWord templates: InterofficeMemo.kwt, PayrollMasterRecordForm.kwt, Resume.kwt, SimpleLayout.kwt, Memo.kwt, Questionnaire.kwt and  ShortLetter.kwt.</p>

<p><strong>Download:</strong> <a href="../addons/templates.tar.gz">Download template archive (46KB)</a></p>

<p><strong>Installation:</strong></p>

<p>For a system wide installation (the templates will be available to all users on the system):</p>

<pre>tar xvzf templates.tar.gz
cp -a Additional $KDEDIR/share/apps/kword/templates
</pre>

<p>For a single user installation:</p>

<pre>tar xvzf templates.tar.gz
cp -a Additional `kde-config --localprefix`share/apps/kword/templates
</pre>

<h2>Share your own KWord templates</h2>
<p>You are encouraged to share your own templates and upload them on <a href="http://kde-files.org/index.php?xcontentmode=610">kde-files.org, in the KWord section</a>. Many thanks in advance!</p>

 <br />
 <hr width="30%" align="center" />
 <p>
 Last update: <?php echo date ("Y-m-d", filemtime(__FILE__)); ?>
 </p>
<?php include("footer.inc"); ?>

