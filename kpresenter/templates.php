<?php
  $page_title="KPresenter Templates";
  $site_root='../';
  include("koffice.inc"); 
  include("header.inc");
?> 
<div id="quicklinks">
[
  <a href="#get">Get new templates</a> |
  <a href="#share">Share your templates</a>
]
</div>

<h2><a name="get">Get more KPresenter templates</a></h2> 
      <p>
      KPresenter ships with some templates but you can get some more.
      </p>
      <p>You can download starting new projects on the <a href="http://kde-files.org/index.php?xcontentmode=612">kde-files.org KPresenter webpage</a>.<br />
      Click on each of these <tt>.kpr</tt> file to start KPresenter with it. </p>

<p>Here is a <a href="../addons/templates_kpresenter.tar.gz">tarball of these 2 templates</a> that you can install and then they will be used in the Open New Document dialog in KPresenter.</p>

<p><strong>Installation:</strong></p>

<p>For a system wide installation (the templates will be available to all users on the system):</p>

<pre>
tar zxvf templates_kpresenter.tar.gz
mkdir -p `kde-config --prefix`/share/apps/kpresenter/templates (might be as root)
cp -a templates/* `kde-config --prefix`/share/apps/kpresenter/templates/ (might be as root)
</pre>

<p>For a single user installation:</p>

<pre>
tar zxvf templates_kpresenter.tar.gz
mkdir -p `kde-config --localprefix`share/apps/kpresenter/templates
cp -a templates/* `kde-config --localprefix`share/apps/kpresenter/templates/
</pre>

<h2><a name="share">Share your own KPresenter templates</a></h2>
<p>You are encouraged to share your own templates and upload them on <a href="http://kde-files.org/index.php?xcontentmode=612">kde-files.org, in the KPresenter section</a>. Many thanks in advance!</p>
<p>Create your own templates in KPresenter using the <tt>File</tt> -&gt; <tt>Template manager</tt> menu. Read more information in the online handbook, in the <a href="http://docs.kde.org/development/en/koffice/kpresenter/creating-templates.html">Creating KPresenter Templates</a> section.</p>

<br />
 <br />
 <hr width="30%" align="center" />
 <p>
 Last update: <?php echo date ("Y-m-d", filemtime(__FILE__)); ?>
 </p>
<?php include("footer.inc"); ?>

