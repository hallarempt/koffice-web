<?php
  $page_title="Updating filters status";
  $site_root='../../';
  include("koffice.inc");
  include("header.inc");
?>

<h2>Overview</h2>

<p>This page describes how to update the <a
   href="/filters/">filter status</a> information on the web site
   to reflect changes in the KOffice filters.</p>

<p>The filter status information is documented for <em>each
   version</em> of KOffice in <a href="/filters/1.4">tabular
   form</a>.  Optionally, each filter may also have a separate page
   that provides more information about the filter such as supported
   features, or workarounds for missing features.  These notes are
   linked to from the filters status table for that version.</p>

<p>The filter status table is constructed from an XML file.  The XML
   file that describes the filter status for the next release of
   KOffice is located in the Subversion repository at
   <code>trunk/koffice/filters/filterstatus.xml</code> and can be
   viewed <a
   href="http://websvn.kde.org/trunk/koffice/filters/filterstatus.xml?view=markup"
   >here</a>.</p>

<p>Since the website maintains filter status pages for recent versions
    of KOffice, it's necessary to keep a separate version of the file
    for each KOffice branch.  Thus if a filter is improved during the
    life of a branch, its web page can be updated from the copy of
    <code>filterstatus.xml</code> in that branch.</p>

<h2>Required software</h2>

<p>The <code>xsltproc</code> program is needed to update the filter
   status table.</p>

<h2>From XML description to HTML</h2>
<p>To update the filter status table on the website, you'll need a
    checkout of:</p>
<ul>
  <li>the <code>filters</code> directory on the website</li>
  <li>the <code>filters</code> directory for the relevant KOffice
  branch (a non-recursive checkout will do, only
  <code>filterstatus.xml</code> is needed)</li>
</ul>

<p>For example, suppose the filters information for KOffice 1.4 needs
    to be updated, the procedure is as follows.</p>

<p>If you don't already
    have a checkout of the KOffice www tree (see <a
    href="debug.php">here</a> for more information), then checkout the
    filters directory:</p>
<pre>
$ svn co https://svn.kde.org/home/kde/trunk/www/areas/koffice/filters \
    filters-www
</pre>

<p>And a copy of the <code>filterstatus.xml</code> file for the
    relevant branch:</p>
<pre>
$ svn co -N https://svn.kde.org/home/kde/branches/koffice/1.4/koffice/filters \
    filters-1.4
</pre>

<p>Now change into the <code>filters</code> directory in the website
    checkout:</p>
<pre>
$ cd filters-www
</pre>

<p>A new version of the filter status page can be built using
  <code>xsltproc</code> and a stylesheet in the website source to
  parse the <code>filterstatus.xml</code> file from the KOffice
  branch.</p>

<pre>
xsltproc scripts/FilterStatusStablePhp.xslt \
  ../filters-1.4/filterstatus.xml > 1.4/index.php
</pre>


<?php include("footer.inc"); ?>
