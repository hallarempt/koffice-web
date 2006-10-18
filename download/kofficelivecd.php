<?php
  $page_title="Download KOffice Live CD";
  $site_root = '../';
  include("koffice.inc");
  include("header.inc");
?>

<h2><a name="requirements">Download the KOffice 1.6.0 Live CD</a></h2>
<p>Click <a href="koffice16live.iso">here</a> to download a KOffice Live CD (570Mo) and test the latest version without installing anything on your computer.</p>

<h2>How to use it ?</h2>
<p>You can either burn it on a CD or use a Virtual Machine to test it and spare a CD.</p>
<h3>General instruction</h3>
<p>At the boot prompt select "Start or install Kubuntu", it won't offer you to install kubuntu at all, but I didn't find how to change that text to "Start and test KOffice 1.6".</p>
<h3>Virtual machine</h3>
If you want to test KOffice without rebooting and burning it on a CD, you can use VMPlayer or QEmu:
<ul>
<li><em>With vmplayer</em> you can download the config file for vmplayer <a href="KOffice16LiveCD.vmx">here</a>, and the vmplayer for your operating system at <a href="http://www.vmware.com/">VMWare's website</a> then use the command line: <tt>vmplayer&nbsp;KOffice16LiveCD.vmx</tt></li>
<li><em>With qemu</em> (which you can get from <a href="http://fabrice.bellard.free.fr/qemu/">QEmu's website</a>) boot the ISO image from the command line: <tt>qemu&nbsp;-cdrom&nbsp;koffice16live.iso&nbsp;-boot&nbsp;d</tt></li>
</ul>

<br />
 <br />
 <hr width="30%" align="center" />
 <p>
 Last update: <?php echo date ("Y-m-d", filemtime(__FILE__)); ?>
 </p>
<?php include("footer.inc"); ?>
