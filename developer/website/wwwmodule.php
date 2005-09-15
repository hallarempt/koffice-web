<?php
  $page_title="KOffice Web Site Languages";
  $site_root='../../';
  include("koffice.inc");
  include("header.inc");
?>

<p>Draft $Date$</p>
<!-- TODO: make something correct out of the text -->
<h2>Generalities</h2>

<p>The www module is protected against writing, even for KDE SVN account holders.
Of course, you can ask for having that write protection removed site by site,
for example for KOffice.</p>

<p>The <a href="http://www.koffice.org">site itself</a> is updated
from www/areas/koffice. The update happens regularly, normally every
ten minutes.  So when you commit into www, it can take a certain delay
before the commit really appears on the web site.  If the main site
has not updated, then it may have updated 
<a href="http://www.kde/org/areas/koffice">here</a>.</p>

<h2>Applying For Removing The Write Protection</h2>

<p>So if you think about maintaining (or helping to maintain)
a part of <a href="/">www.koffice.org</a> or if you plan
to commit from time to time in the <a href="/">KOffice web site</a>, you have to ask the
<a href="ma&#105;&#108;&#x74;o&#58;s&#x79;&#x73;a&#0100;mi&#x6e;&#x40;of&#00102;ic&#101;.kd&#101;&#46;org">Sysadmins</a>.</p>

<p>Tell them which part of KOffice.org you would like to work and
that you would like to have write permission on www/areas/koffice .
Do not forget to give your account name.</p>

<p>If you have not an account for KDE SVN yet, 
<a href="http://developer.kde.org/documentation/other/developer-faq.html#q1.8">see how to apply for one</a>.
You can ask for removing the write protection for you in the same message
than for applying for a SVN account.
</p>

<h2>How Is Site Built</h2>
<!-- TODO: this is provisory -->

<p>The application directories (like for example
www/areas/koffice/krita) are more oriented to the users.</p>

<p>The developers' pages are at www/areas/koffice/developer. Here too
there may be application dependant information, like for example
www/areas/koffice/developer/krita, in this case for more 
developer-oriented information.</p>

<h2>Technical Problems</h2>

<p>In case of technical problems with the KOffice Web Site or with updating
to it, please contact Thomas Zander.</p>

<?php
   include("footer.inc");
?>
