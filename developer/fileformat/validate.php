<?php
  $page_title="How to validate an OASIS file";
  $site_root='../../';
  include("koffice.inc");
  include("header.inc");
?>

  <h1>How to validate an OASIS file against the RelaxNG schema</h1>
  <p>It is important to check that all files produced by KOffice when choosing the OASIS file format,
  conform to the OASIS RelaxNG schema. Developers will try to ensure that, but it can also be helpful
  to check yourself, in order to help them fix such problems before they create interoperability trouble.</p>

  <h2>Download the RelaxNG schemas</h2>
  <p>
    Your first mission is to download the latest RelaxNG schema of the OASIS open office specification
    from <a href="http://www.oasis-open.org/committees/documents.php?wg_abbrev=office">www.oasis-open.org</a>.
    It's a bit difficult to find documents in there since proposals are mixed with
    "committee drafts", make sure to increase the "10" on top.
  </p><p>
    Anyway the latest versions are currently:
     <a href="http://www.oasis-open.org/committees/download.php/6034/office-strict-schema-1.0-cd-1.rng">office-strict-schema-1.0-cd-1.rng</a> and
     <a href="http://www.oasis-open.org/committees/download.php/6033/office-schema-1.0-cd-1.rng">office-schema-1.0-cd-1.rng</a>
  </p><p>
    Of course you probably want the human-readable version of it as well, with the comments:
    <a href="http://www.oasis-open.org/committees/download.php/6032/office-spec-1.0-cd-1.sxw">office-spec-1.0-cd-1.sxw</a>
  </p>

  <h2>Download jing</h2>
  <p>Jing is a java tool for checking XML files against a RelaxNG schema.
  You can get it from <a href="http://www.thaiopensource.com/relaxng/jing.html">http://www.thaiopensource.com/relaxng/jing.html</a>.
  For instance I got <a href="http://www.thaiopensource.com/download/jing-20030619.zip">jing-20030619.zip</a>
  </p>

  <h2>Download JRE 1.4</h2>
  <p>Unless you're using the gcj-compiled version of jing, you need a Java Runtime Environment.
  Jing recommends using JRE 1.4, which can be downloaded
  from <a href="http://java.sun.com/j2se/1.4/download.html">from java.sun.com</a>
  </p>

  <h2>Write shellscripts</h2>
  <p>
    Create a script (e.g. I named it oasislint), which does something like
    <code><pre>
    #!/bin/sh
    /usr/java/j2re1.4.2_04/bin/java -jar $HOME/src/jing/bin/jing.jar -i /k/oo/office-schema-1.0-cd-1.rng $*
    </pre></code>
    You will need to adjust the paths of course.
    Create a similar script named oasislint-strict which uses "office-strict-schema" instead.
  </p>
  <p>
   Finally, it would be helpful to have a script that automatically checks the XML files
   inside a ZIP package (since KOffice documents are ZIP packages), so that you don't have
   to unzip it by hand.
   Here is one, which I called oasisfilecheck. Note that it requires to be given the full path to the koffice file, as argument:
   <code><pre>
   #!/bin/sh
   tmpdir=/tmp/oasistmp
   rm -rf $tmpdir ; mkdir $tmpdir && cd $tmpdir || exit 1
   unzip -o $1 || exit 1
   for f in content.xml styles.xml meta.xml; do
     echo "Checking $f..." ; oasislint $f && echo "Checking $f strict..." && oasislint-strict $f
   done
   </pre></code>
  </p>

<?php
   include("footer.inc");
?>
