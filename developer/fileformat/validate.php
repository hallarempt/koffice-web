<?php
  $page_title="How to validate an OASIS OpenDocument file";
  $site_root='../../';
  include("koffice.inc");
  include("header.inc");
?>

  <p>It is important to check that all files produced by KOffice when choosing the OASIS OpenDocument file format,
  conform to the OASIS OpenDocument RelaxNG schema. Developers will try to ensure that, but it can also be helpful
  to check yourself, in order to help them fix such problems before they create interoperability trouble.</p>

  <h2>Download the RelaxNG schemas</h2>
  <p>
    Your first mission is to download the latest RelaxNG schema of the OASIS OpenDocument specification
    from <a href="http://www.oasis-open.org/committees/tc_home.php?wg_abbrev=office">www.oasis-open.org</a>.
    Make sure you take the three RNG schemas, and the human-readable version of the specification as well, with the comments
    (either the .sxw or the .pdf)
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
  </p>
    <pre><code>
    #!/bin/sh
    /usr/java/j2re1.4.2_04/bin/java -jar $HOME/src/jing/bin/jing.jar -i /k/oo/office-schema-1.0-cd-1.rng $*
    </code></pre>
  <p>
    You will need to adjust the paths of course.
    Create a similar script named oasislint-strict which uses "office-strict-schema" instead.
  </p>
  <p>
   Finally, it would be helpful to have a script that automatically checks the XML files
   inside a ZIP package (since KOffice documents are ZIP packages), so that you don't have
   to unzip it by hand.
   Here is one, which I called oasisfilecheck:
  </p>
   <pre><code>
   #!/bin/sh
   input="$1"
   echo "$input" | grep -v '^/' &gt;/dev/null 2&gt;&amp;1 &amp;&amp; input="$PWD/$input"
   tmpdir=/tmp/oasistmp
   rm -rf $tmpdir ; mkdir $tmpdir &amp;&amp; cd $tmpdir || exit 1
   unzip -o $input || exit 1
   for f in content.xml styles.xml meta.xml settings.xml; do
     echo "Checking $f..." ; oasislint $f &amp;&amp; echo "Checking $f strict..." &amp;&amp; oasislint-strict $f
   done
   </code></pre>

<?php
   include("footer.inc");
?>
