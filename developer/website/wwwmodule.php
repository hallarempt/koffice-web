<?php
  $page_title="KOffice Web Site Languages";
  $site_root='../../';
  include("koffice.inc");
  include("header.inc");
?>

<p>Draft $Date$</p>
<!-- TODO: make something correct out of the text -->
<h2>Generalities</h2>

<p>The www module is protected against writing, even for KDE CVS account holders.
Of course, you can ask for having that write protection removed site by site,
for example for KOffice.</p>

<p>The <a href="http://www.koffice.org">site itself</a> is updated
regularly, normally every half an hour, from www/areas/koffice.
So when you commit into www, it can take a certain delay before
the commit really appears on the web site.</p>

<h2>Applying For Removing The Write Protection</h2>

<p>So if you think about maintaining (or helping to maintain)
a part of <a href="/">www.koffice.org<a> or if you plan
to commit from time to time in the <a href="/">KOffice web site</a>, you have to ask the
<a href="mailto:sysadmin@office.kde.org">Sysadmins</a>.</p>
<!-- TODO: can be asked when asking a KDE CVS account -->

<p>Tell on which part of KOffice.org you would like to work and
that you would like to have write permission on www/areas/koffice .
Do not forget to give your account name.</p>

<h2>How Is Site Built</h2>
<!-- TODO: this is provisory -->

<p>The application directories (like for example
www/areas/koffice/krita) are more oriented to the users.</p>

<p>The developers' pages are at www/areas/koffice/developer. Here too
there may be application dependant information, like for example
www/areas/koffice/developer/krita, in this case for more 
developer-oriented information.</p>

<?php
   include("footer.inc");
?>
