<?php
  $page_title="DCOP Resources";
  $site_root='../../';
  include("koffice.inc");
  include("header.inc");
?>

   <ul>
     <li><a href="http://developer.kde.org/documentation/tutorials/index.html">General information on developer.kde.org about DCOP</a></li>
     <li><a href="http://developer.kde.org/documentation/library/kdeqt/dcop.html">More technical details about DCOP</a></li>
   </ul>

   <h4>A simple example of using DCOP with kword</h4>

   Set this to the PID of a running kword, or use e.g. appid=`dcopstart kword foo.kwd`<br/>
   <pre>appid=kword-14966</pre>

   Get main text frameset<br/>
   <pre>fs=$(dcopobject "`dcop $appid Document-0 textFrameSet 0`")</pre>

   Start editing it<br/>
   <pre>edit=$(dcopobject "`dcop $appid $fs startEditing`")</pre>

   Now you can insert text<br/>
   <pre>dcop $appid $edit insertText 'Hello world!'</pre>

   Use this to create new paragraphs 
   (only available from KOffice version 1.3.2 upwards)<br/>
   <pre>dcop $appid $edit newParagraph</pre>

   See "dcop kword-$pid $edit" for more (e.g. setBold true, moving the cursor, etc.)

<?php
   include("footer.inc");
?>
