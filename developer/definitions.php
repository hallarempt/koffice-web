<?php
  $page_title="KOffice Definition";
  $site_root='../';
  include("koffice.inc");
  include("header.inc");
?>
   <p>This section details KOffice wide definitions that the KOffice team researched and follows, or intends to follow for upcoming KOffice releases.</p>

   <h2>Modifier Keys</h2>
    <p><b>Dragging:</b><br>
    <table>
     <tr><td>Shift</td><td>disabled snap to grid and disables snap to guides</td></tr>
     <tr><td>Alt</td><td>keeps X or Y position unchanged</td></tr>
     <tr><td>Control</td><td>keeps X or Y position unchanged <a href="#note1">[1]</a></td></tr>
    </table>

    <p><b>Scaling:</b><br>
    <table><tr>
     <td>
     <tr><td>Shift</td><td>disabled snap to grid and disables snap to guides</td></tr>
     <tr><td>Alt</td><td>Scales keeps aspect ratio</td></tr>
     <tr><td>Control</td><td>scales all objects from center of all selected objects</td></tr>
    </table>

    <p><b>Insert:</b><br>
    <table>
     <tr><td>Shift</td><td>disabled snap to grid and disables snap to guides</td></tr>
     <tr><td>Alt</td><td>temporarily switches to 'move' <a href="#note2">[2]</a></td></tr>
     <tr><td>Control</td><td>temporarily switches the scaling-center to the center
        of object instead of top-left</td></tr>
    </table>

    <p><b>Click:</b><br>
    <table>
     <tr><td>Shift</td><td> selects 'underlying' object deselecting the previous selected
        objects and making sure only one is selected <a href="#note3">[3]</a></td></tr>
     <tr><td>Alt</td><td> does nothing</td></tr>
     <tr><td>Control</td><td> allows multi select</td></tr>
    </table>

    <p><a name="note1">1</a>) Dragging alt and control do the same thing; the reasoning
        for this is as follows; the feature fits with 'keep aspect ratio' and thus should
        be available under Alt to make it consistent with scaling. There, however, are
        some problems in using Alt if the user uses KWin and the default settings. Hence
        we make this feature available under Control as well.</p>
    <p><a name="note2">2</a>) How this works is that on insert the default action starts
        a scale and all options work as scaling.  Pressing the Alt key stops any scaling
        on furter mouse moves and starts dragging the insert-object instead.</p>
    <p><a name="note3">3</a>) This feature is needed for allowing selecting of stacked
        objects.  Further research is pending for a solution that may be more elegant</p>

    <p><a href="http://lists.kde.org/?t=113335187100002&r=1&w=2">Discussion</a> archive</p>

<?php
   include("footer.inc");
?>
