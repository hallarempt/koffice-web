<?php
  $page_title="KOffice Add-ons";
  $site_root='../';
  include("koffice.inc");
  include("header.inc");
?>

<p>This sections currently contains various addons for KOffice which are not included in the main distribution.</p>

<h2><a name="templates">Templates</a></h2>

<p><strong>Download:</strong> <a href="templates.tar.gz">Download template archive (46KB)</a></p>

<p><strong>Installation:</strong></p>

<p>For a system wide installation (the templates will be available to all users on the system):</p>

<pre>tar xvzf templates.tar.gz
cp -a Additional $KDEDIR/share/apps/kword/templates
</pre>

<p>For a single user installation:</p>

<pre>tar xvzf templates.tar.gz
cp -a Additional `kde-config --localprefix`share/apps/kword/templates
</pre>

<p>In subsequent versions of KOffice we are going to provide more templates with the main program, and provide an easier method for installation of additional templates.</p>

<h2><a name="thesauri">Thesauri</a></h2>

<p>KOffice only includes an English language thesaurus
by default. Thesaurus files for other languages can be
downloaded at the following sites:</p>

<ul>
	<li>German thesaurus at <a href="http://thesaurus.kdenews.org/">thesaurus.kdenews.org</a></li>
</ul>

<p><strong>Installation:</strong></p>

<p>Unpack the file and copy it to <tt>$KDEDIR/share/apps/thesaurus/</tt> (you can use any other directory, but this is where the English thesaurus called <tt>thesaurus.txt</tt> is). You can use the <em>Change language</em> button in KThesaurus to select the thesaurus file.</p>

<?php
  include("footer.inc");
?>
