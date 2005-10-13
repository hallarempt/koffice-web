<?php
  $page_title="klik Team is Looking For Maintainers";
  $site_root='../';
  include("koffice.inc"); 
  include("header.inc");
?> 

<p>We are sure you'll like this demo package of KOffice. This one was manually created, from the <a href="http://kdesvn-build.kde.org/">self-compiled</a> <a href="http://websvn.kde.org/tags/koffice/1.4.2/">KOffice source code</a>.</p>

You'll probably want to try more "klik" links with cool KDE applications, such as <a href="klik://kdeedu-latest">klik://kdeedu</a> (an bundle of <a href="http://edu.kde.org/">educational and school curriculum software</a>), <a href="klik://scribus-latest">klik://scribus-latest</a> (a <a href="http://www.scribus.net/">desktop publishing</a> program), <a href="klik://wesnoth-latest">klik://wesnoth-latest</a> (an <a href="http://www.wesnoth.org/">adventure game</a>), <a href="klik://ktorrent">klik://ktorrent</a> (a <a href="http://ktorrent.pwsp.net/">file sharing</a> client), <a href="klik://amarok">klik://amarok</a> (a <a href="http://amarok.kde.org/">music player</a>) or <a href="klik://k3b">klik://k3b</a> (a <a href="http://k3b.plainblack.com/">CD burning</a> software).	

<p>klik's <a href="http://klik.atekon.de/">online software "store"</a>
(which has no price tags!) currently offers more than 4000 software
bundles packed into one compressed file system image. Most of these
klik packages, however, are automatically created. They are converted
into klik-ified .cmg from Debian packages (a few ones are made from
RPMs, some from .tar.gz tarballs). This automatism works well and makes
approx. 70% of all applications work out of the box.</p>

<p>Most of the 30% cases which are failing can be fixed by changing 1-3
lines of Shell code. You do not need to be a programmer to help with
this!</p>

<p>However, we, the few klik developers can not look after every single
one of the failing packages. We want to extend klik's reach to more
distributions as our priority.</p>

<p>We need help. We want *you*! We want you to help us with making
these packages work that currently fail. We'll teach you what you need
to know. Pre-requisites are: know a bit of Shell scripting, and give a
little of your time in exchange for the fun klik gives you.</p>

<p>You can contact us here:</p>
<ul>
  <li>in IRC, channel <a href="irc://www.freenode.net/klik">#klik</a>, hosted by FreeNode.net</li>

  <li>on the <a href="mailto:klik-users@kde.org">klik-users@kde.org</a> mailing list 
   (subscribe at <a href="https://mail.kde.org/mailman/listinfo/klik/">https://mail.kde.org/mailman/listinfo/klik/</a>)</li>

  <li>or via the feedback form on the klik server website 
   (<a href="http://klik.atekon.de/comments.php">http://klik.atekon.de/comments.php</a> -- scroll to bottom) </li>
</ul>

<p>Have fun with  testing out KOffice-1.4.2 with the help of klik !</p>

<br />
 <br />
 <hr width="30%" align="center" />
 <p>
 Last update: <?php echo date ("Y-m-d", filemtime(__FILE__)); ?>
 </p>
<?php include("footer.inc"); ?>