<?php
  $page_title="'Cheatcodes' for this KOffice klik Bundle ";
  $site_root='../../';
  include("koffice.inc"); 
  include("header.inc");
?> 

<p>Here are a few tips and tricks (Knoppix users would call them "cheatcodes")
that let you run run this klik bundle in various modes. (By default, when you
click on it, it starts KOshell; you may prefer to run KWord or KPresenter as
standalone applications. Here is how...)</p>

<pre style="border: 1pt dashed #bbbbbb; margin-left: 2em; margin-right: 2em; padding: 1em; background: #ededed;"> 
   # General syntax to run this package from the commandline (with "cheatcodes"):

   [ENV_VAR1] [ENV_VAR2] ... ~/.zAppRun koffice.cmg [application] [arg2] [arg3] ...
</pre>

<p><i>If</i> arguments are given, then the first one *must* be the name of the 
KOffice application to start up. The most simple case however is to give no
argument at all (default when you just click onto the koffice.cmg file):</p>

<pre style="border: 1pt dashed #bbbbbb; margin-left: 2em; margin-right: 2em; padding: 1em; background: #ededed;"> 
   # Start KOShell:

   ~/.zAppRun koffice.cmg
</pre>

<p>This starts the default application contained inside the bundle, KOShell.
KOShell represents the integrated KOffice Application Environment that embeds
all individuall KOffice component applications. KOShell lets you open and
work with any number of documents and the respective applications.</p>

<p>To start one of the KOffice programs in single application mode, simply add its
name to the above command line:</p>

<pre style="border: 1pt dashed #bbbbbb; margin-left: 2em; margin-right: 2em; padding: 1em; background: #ededed;"> 
   # Start KWord  in single application mode:

   ~/.zAppRun koffice.cmg kword
</pre>

<p>This starts KWord in single application mode. KWord is the word processor of
KOffice. KWord is frame-based, similar to FrameMaker.</p>

<pre style="border: 1pt dashed #bbbbbb; margin-left: 2em; margin-right: 2em; padding: 1em; background: #ededed;"> 
   # Start KWord with a demo file (part of the klik bundle) loaded:

   ~/.zAppRun koffice.cmg kword demo
</pre>

<p>This starts KWord in single application mode, with a demofile pre-loaded.</p>

<pre style="border: 1pt dashed #bbbbbb; margin-left: 2em; margin-right: 2em; padding: 1em; background: #ededed;"> 
   # Start KWord with a specific file loaded:

   ~/.zAppRun koffice.cmg kword $HOME/Docments/my_cv.odt
</pre>

<p>This starts KWord with file specified by user pre-loaded (in this case an 
OpenDocument formatted done).</p>

<pre style="border: 1pt dashed #bbbbbb; margin-left: 2em; margin-right: 2em; padding: 1em; background: #ededed;"> 
   # Start KWord with two specific files loaded:
   # - one file from inside the bundle (relative path); a .txt file,
   # - the other file from the hosting system (absolute path given), a HTML file:

   ~/.zAppRun koffice.cmg kword $HOME/Docments/koffice-klik.html ../readmes/5.txt
</pre>

<p>This starts KWord with two the files pre-loaded which specified by the user.
The first one is a HTML file (using an absolute path for the file name); the second
one is an ASCII text file (using a relative path, starting inside the "usr/"
directory) from inside the .cmg image.</p>

<pre style="border: 1pt dashed #bbbbbb; margin-left: 2em; margin-right: 2em; padding: 1em; background: #ededed;"> 
   # Given a wrong first argument, a menu is displayed of possible applications to run:

   ~/.zAppRun koffice.cmg foobar
</pre>

<p>Since "foobar" is no valid application name, this pops up a menu for the user to 
select an application from. The menu also contains options to display some help 
screens.</p>


<pre style="border: 1pt dashed #bbbbbb; margin-left: 2em; margin-right: 2em; padding: 1em; background: #ededed;"> 
   # Start KPresenter in single application mode:

   ~/.zAppRun koffice.cmg kpresenter
</pre>

<p>This starts KPresenter in single application mode. KPresenter is the presentation 
program of KOffice. </p>

<pre style="border: 1pt dashed #bbbbbb; margin-left: 2em; margin-right: 2em; padding: 1em; background: #ededed;"> 
   # Start KPresenter with file:

   ~/.zAppRun koffice.cmg kpresenter $HOME/kde-presentation.kpr
</pre>

<p>This starts KPresenter in single application mode, with a file preloaded..

<p>A complete list of application names is below.</p>

<pre style="border: 1pt dashed #bbbbbb; margin-left: 2em; margin-right: 2em; padding: 1em; background: #ededed;"> 
   # A list of all single KOffice applications contained in this bundle:

	koshell     	# Office Suite, Workspace Mode
	kword       	# Word Processor, frame based
	kpresenter  	# Presentation
	kspread	    	# Spreadsheet
	krita         	# Imaging and Painting
	kthesaurus  	# Finding alternative words
	kivio       	# Flow Chart Design
	karbon      	# Vector Graphic
	kchart      	# Chart Drawing
	kexi        	# Database Application
	kformdesigner 	# Form Design
	kformula     	# Mathematical Formulas
	kudesigner   	# Report Designer
	kugar        	# Report Viewer
</pre>


<p>By default, the applications will start in the local language that is configured
for your KDE environment. If no special setting is found, the language defaults 
to English. It also uses English if it can not find the files for the language 
that is specified. </p>

<p>To make a program use a different language, set the environment variable
KDE_LANG to the code of your locale. Setting this variable by prepending it
directly on the commandline makes it valid for the following command only:</p>

<pre style="border: 1pt dashed #bbbbbb; margin-left: 2em; margin-right: 2em; padding: 1em; background: #ededed;"> 
   # start KSpread in German, loading a file:

   KDE_LANG=de ~/.zAppRun koffice.cmg kspread /home/kurt/budget.ksp
</pre>

<p>This starts up KSpread, the spreadsheet application in German.</p>

<p>A list of currently available translations is below.</p>

<pre style="border: 1pt dashed #bbbbbb; margin-left: 2em; margin-right: 2em; padding: 1em; background: #ededed;"> 
   # A list of languages contained in this bundle:

     bg	   <=>  Bulgarian                         se    <=>  Swedish                  
     eu	   <=>  Basque                            ds    <=>  German                   
     pt_BR <=>  Brazilian Portuguese              nb    <=>  Norwegian Bokmal         
     ca	   <=>  Catala                            ta    <=>  Tamil                    
     fi	   <=>  Finnish                           el    <=>  Greek                    
     ru	   <=>  Russian                           nl    <=>  Dutch                    
     cs	   <=>  Czech                             tg    <=>  Tajik                    
     fr	   <=>  French                            en_GB <=>  British                  
     sl	   <=>  Slovenian                         nn    <=>  NorwegianNynorsk         
     cy	   <=>  Welsh                             zh_CN <=>  Chinese Simplified...... 
     hu	   <=>  Hungarian                         es    <=>  Spanish                  
     sr	   <=>  Serbian                           pl    <=>  Polish                   
     da	   <=>  Danish                            et    <=>  Estonian                 
     it	   <=>  Italian                           pt    <=>  Portuguese               
</pre>



<pre style="border: 1pt dashed #bbbbbb; margin-left: 2em; margin-right: 2em; padding: 1em; background: #ededed;">
   # A summary of interesting environment variables useful for the KOffice klik package:

   KLIK_KOFFICE_STARTUP=verbose     # display all help screens during startup and shutdown
   KLIK_DEBUG=yes                   # "set -x" for the wrapper
   KLIK_WRAPPER=wrapper3.sh         # uses alternative "wrapper3.sh" script from bundle
   KLIK_WRAPPER=/home/kurt/wrap.sh  # uses wrapper from outside the bundle (needs absolute path)
   KLIK_SHOW_MOUNTPOINT=yes         # show the current mountpoint of the bundle, give hints
   KLIK_SHOW_README=yes             # display a few README files
   KDE_LANG=ru                      # use specified language (Russian)

   # note, that the KLIK_* variables are experimental for this package, they do not work for
   # other klik packages and may be unsupported in future versions.
</pre>




<pre style="border: 1pt dashed #bbbbbb; margin-left: 2em; margin-right: 2em; padding: 1em; background: #ededed;">

# a summary of additional commandline parameters to show kdialog help screens:

   show-quickhelp
	Display all help options (this list)
   show-allhelp
	Display all help screens, one after the other
   show-requirements
	Display system requirements to run this bundle
   show-applications
	Display list of all application names inside this bundle and how to start them
   show-languages
	Display list of languages/localizations for this bundle and how to access them
   show-bugs
	Display notes about bugs for this bundle
   show-popups
	Display ways to suppress the popup of all README files when running this bundle
   show-contact
	Display contact info for the developers of this bundle
</pre>

 Last update: <?php echo date ("Y-m-d", filemtime(__FILE__)); ?>
 </p>
<?php include("footer.inc"); ?>
