<?php
  $page_title="Switch Language for KOffice";
  $site_root='../../';
  include("koffice.inc"); 
  include("header.inc");
?>

<p>KOffice, the KDE Office Suite, is available in 27 different
localizations (other than English). To run the KOffice Workspace it
suffices to just click on the file from Konqueror. To run on of the
individual application contained in this suite via this klik demo
bundle, you unfortunately need to type a command. Use it like this one:</p>
<pre>	KDE_LANG=&lt;language-pre&gt; ~/.zAppRun koffice.cmg [application-name]
</pre>

<p>("~" is a shortcut for your home directory.)</p>

<p><b>Example:</b> to run the KWord Word Processor in standalone mode in Spanish, use this command:</p>

<pre>	KDE_LANG=es ~/.zAppRun koffice.cmg kword
</pre>

<p>Here is the list of currently available localisations:</p>


<pre>     bg	   &lt;=&gt;  Bulgarian                         se    &lt;=&gt;  Swedish                  
     eu	   &lt;=&gt;  Basque                            ds    &lt;=&gt;  German                   
     pt_BR &lt;=&gt;  Brazilian Portuguese              nb    &lt;=&gt;  Norwegian Bokmal         
     ca	   &lt;=&gt;  Catala                            ta    &lt;=&gt;  Tamil                    
     fi	   &lt;=&gt;  Finnish                           el    &lt;=&gt;  Greek                    
     ru	   &lt;=&gt;  Russian                           nl    &lt;=&gt;  Dutch                    
     cs	   &lt;=&gt;  Czech                             tg    &lt;=&gt;  Tajik                    
     fr	   &lt;=&gt;  French                            en_GB &lt;=&gt;  British                  
     sl	   &lt;=&gt;  Slovenian                         nn    &lt;=&gt;  NorwegianNynorsk         
     cy	   &lt;=&gt;  Welsh                             zh_CN &lt;=&gt;  Chinese Simplified...... 
     hu	   &lt;=&gt;  Hungarian                         es    &lt;=&gt;  Spanish                  
     sr	   &lt;=&gt;  Serbian                           pl    &lt;=&gt;  Polish                   
     da	   &lt;=&gt;  Danish                            et    &lt;=&gt;  Estonian                 
     it	   &lt;=&gt;  Italian                           pt    &lt;=&gt;  Portuguese               
</pre>

<p>To run this demo bundle of KOffice in your local (or any other)
language, prepend the startup commandline with the environment variable
KDE_LANG. An example -- to run the KOffice Word Processor in Dutch:</p>

<pre>	KDE_LANG=nl ~/.zAppRun koffice.cmg kword
</pre>

<p>To see all 30 available languages, run this command:</p>

<pre>	~/.zAppRun koffice.cmg show-languages
</pre>

<p>To display all help screens for this klik bundle, run this command:</p>

<pre>	~/.zAppRun koffice.cmg show-allhelp 

</pre>

<br />
 <br />
 <hr width="30%" align="center" />
 <p>
 Last update: <?php echo date ("Y-m-d", filemtime(__FILE__)); ?>
 </p>
<?php include("footer.inc"); ?>

<p>If you want to help translate KOffice or any other KDE program into your language, look at this website for more information:</p>

	<li><a href="http://l10n.kde.org/">http://l10n.kde.org/</a></li>

<p>You can also drill down into the KDE translation statistics database by following the links provided on this page:</p>

	<li><a href="http://l10n.kde.org/stats/gui/stable/koffice/index.php">http://l10n.kde.org/stats/gui/stable/koffice/index.php</a></li>
<p></p>

