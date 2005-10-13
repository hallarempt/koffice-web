<?php
  $page_title="Background info to klik";
  $site_root='../';
  include("koffice.inc"); 
  include("header.inc");
?> 

<p>By default, this startup will be in the form of the "KOffice
Workspace". The KOffice Workspace is an integrated office suite
environment. From this environment you may start a Word Processor (<a href="http://www.koffice.org/kword/">kword</a>), a Spreadsheet Application (<a href="http://www.koffice.org/kspread/">kspread</a>), a Presentation Program (<a href="http://www.koffice.org/kpresenter/">kpresenter</a>) and many more utilities. For more details about how to start these applications individually, or in other languages, see <a href="http://64.4.61.250/cgi-bin/getmsg/%5BFIXME%20link%5D">this section</a>.</p>

<p>From now on (after the one-time completion of the klik client
installation), you can also "install" other klik-ified software by just
typing <i>"klik://name-of-app"</i> into the Konqueror address bar.</p>

<p>You may find 68 MByte for the KDE Office Suite a lot. But consider
this: if it were not for the builtin compression, the file would weigh
in with even 138 MByte; the bundle includes user interface support for <i>28 different languages</i>
(25 MByte); plus, it includes about 45 MByte worth of documentation
(some if it also translated); finally, it also ships with 6 MByte of
demo files. </p>

<p>Here are the main <b>beneficial features</b> of klik-installed software:</p>

<ul>
 <li>klik software bundles do not interfere with your system base installation. </li>
 <li>klik software bundles follow the paradigm <i>"1 application = 1 file"</i>.</li>
 <li>klik software bundles are only a copy of one file with <i>.cmg</i> suffix in userspace.</li>
 <li>klik software bundles can easily be moved to other locations; they run fine even from USB sticks.</li>
 <li>klik software bundles are easily removed by deleting the <i>.cmg</i> file (and the system untouched).</li>
 <li>klik software bundles are a compressed, self-contained file system image (similar to a Knoppix CD).</li>
 <li>klik software bundles are run by mounting the <i>.cmg</i>-suffixed file and executing a wrapper script.</li>
 <li>klik software bundles need root only to create the mountpoints in <i>/etc/fstab</i>.</li>
</ul>

<p>You can run klik software bundles (after klik client installation,
see above) by simply clicking on them, or by using the commandline
starter <i>".zAppRun"</i> (located in your home directory after a klik client installation). More details about the .zAppRun commandline starter <a href="http://64.4.61.250/cgi-bin/getmsg/%5BFIXME%20link%5D">here</a>.</p>

<p>Here are the main <b>limitations</b> of klik-installed software:</p>

<ul>
 <li>klik bundles are (for now) limited to a number of 7 which may be concurrently executed.</li>
 <li>klik bundles sometimes may not cleanly terminate and therefor block their mountpoints (see here for help).</li>
 <li>klik bundles may not run on *every single* system out there.</li>
 <li>klik bundles do not show their own icons.</li>
 <li>klik bundles do not show the version of the software that is contained.</li>
</ul>

<p>klik is a project under heavy development (and many of the above
listed limitations will be overcome) -- but klik is already now of
outstanding usefullness to allow you quick testing of new software. It
enables you to do a "safe" and thorough evaluation, before deciding to
undergo a system upgrade that may not be easily reverted once it is
done.... </p>

<p>Therefor KOffice Team is looking forward to offer development snapshots of the upcoming 1.5.0 release under the link <a href="not-yet-klikable://koffice-latest">klik://koffice-latest</a> (link is not yet working) so that our <a href="http://bugs.kde.org/">beta-testers</a>, <a href="http://l10n.kde.org/">translators</a>, <a href="http://docs.kde.org/">documentation writers</a>, <a href="http://kde-artists.org/">art designers</a> and <a href="http://www.openusability.org/">usability advisors</a> have access to "bleeding edge" executable code the easist way possible.</p>


<p>klik follows the principle <i>"1 application == 1 file"</i>. This
makes it extremely easy to "install" any klik-ified KDE application as
well as getting rid of it again without endangering your base system in
any way. See <a href="http://64.4.61.250/cgi-bin/getmsg/%5BFIXME%20link%5D">futher below</a> for more info about klik.</p>

<p>You can find a more detailed introduction into klik on this <a href="http://dot.kde.org/1126867980/">Dot article</a>. Also, <a href="http://www.kdedevelopers.org/blog/418">Kurt Pfeifle's blog</a> from time to time covers new aspects of klik development.</p>


<p>Here is some additional background info about the <a href="http://64.4.61.250/cgi-bin/getmsg/%5BFIXME%20link%5D">installation of the klik client</a> (required to run klik-ified software).</p>


<p>The <a href="http://64.4.61.250/cgi-bin/getmsg/%5BFIXME%20link%5D">above outlined</a>
klik installation downloads a shell script (less than 20 kByte) and
executes it (usually needs less then 20 seconds to complete). It
requires to add mount points in <i>/etc/fstab</i> -- so this is the
only point where you currently need root privileges for klik. All
future klik activities will then take place in user space.</p>

<p>During the klik client installation you may have been asked: <i>"Please run $HOME/klik-cmg-install-root as root."</i> This is required once only (upon klik client installation), to create <i>7 additional mount points</i> in /etc/fstab:</p>

<pre>  /tmp/app/1/image /tmp/app/1 cramfs,iso9660 user,noauto,ro,loop,exec 0 0
  [....]
  /tmp/app/7/image /tmp/app/7 cramfs,iso9660 user,noauto,ro,loop,exec 0 0
</pre>

<p>With these entries in fstab, klik may in future loopmount <i>cramfs</i> and <i>iso9660</i>
file system images without requiring root privileges. You only need to
klik on .cmg files in order to startup the application contained therein</p>.

<br />
 <br />
 <hr width="30%" align="center" />
 <p>
 Last update: <?php echo date ("Y-m-d", filemtime(__FILE__)); ?>
 </p>
<?php include("footer.inc"); ?>