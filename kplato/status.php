<?php
  $title='KPlato Status';
  $site_root='../';
  include("koffice.inc");
  include("header.inc");
?>

    <p>First a screenshot: <a href="basic-diag.png">Current</a></p>

    <p>A list of TODO items we have decided will have to be present at least before an 1.0 release.
    <ul>
     <li> Requirments specification (DONE)</li>
     <li> Data structuring and class creation (DONE)</li>
     <li> Loading/saving the data structure. (Framework present, file gets created/loaded, but is quite empty)</li>
     <li> Basic GUI (DONE)</li>
     <li> Implementing basic view (DONE)</li>
     <li> Implementing basic task/subtask etc. creation/deletion via the GUI</li>
     <li> Implementing Gantt view (Calculation is DONE, but not debugged, view is TODO)</li>
     <li> Implementing task editor-dialog</li>
     <li> Implementing project editor-dialog</li>
     <li> Implementing project editor-dialog</li>
     <li> Implementing milestone editor-dialog</li>
     <li> Implementing zooming support for the views</li>
     <li> Merge <a href="http://www.taskjuggler.org/">taskjuggler</a> and KPlato</li>
     <li> etc.</li>
    </ul>
    </p>

    <p>
    As we have chosen to use the KOffice framework there are a number of things that are amazingly easy to do;</p>
    <ul>
    <li>Printing is automatically done if zooming is allowed (we can do without zooming, but that makes the output look ugly)</li>
    <li>We can place any other KOffice document inside our view, and visa-versa. A Gantt in a KWord doc, a spreadsheet in a milestone...</li>
    <li>Saving documents is done via QDomElements and the rest is allready in place.</li>
    <li>Internationalisation is done automatically since it's a KDE project</li>
    </ul>
    
<?php include("footer.inc"); ?>
