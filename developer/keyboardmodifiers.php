<?php
  $page_title="KOffice Modifier keys";
  $site_root='../';
  include("koffice.inc");
  include("header.inc");
?>
    <p>Normal mouse actions can change behavior if during the action a modifier key is
    pressed.  In order to make interaction behavior of all KOffice applications consistent
    here is a table of what the modifier keys do.<br>
    There are 4 different actions you can do with the mouse that are important here.
    Dragging objects, scaling objects, inserting objects and simply clicking to interact
    with objects.  Note that 'objects' are layers or selections in krita, and frames in
    kword and kpresenter.  Kivio and Karbon use object naturally.<br>
    Note also that keys can be combined. Pressing alt+shift combines both options.</p>

    <p><b>Dragging:</b><br>
    <table>
     <tr><td valign="top">Shift</td><td>disabled snap to grid and disables snap to
        guides</td></tr>
     <tr><td valign="top">Alt</td><td>keeps X or Y position unchanged</td></tr>
     <tr><td valign="top">Control</td><td>keeps X or Y position unchanged
        <a href="#note1">[1]</a></td></tr>
    </table>

    <p><b>Scaling:</b><br>
    <table><tr>
     <td>
     <tr><td valign="top">Shift</td><td>disabled snap to grid and disables snap to
        guides</td></tr>
     <tr><td valign="top">Alt</td><td>Scales keeps aspect ratio</td></tr>
     <tr><td valign="top">Control</td><td>scales all objects from center of all selected
        objects</td></tr>
    </table>

    <p><b>Insert:</b><br>
    <table>
     <tr><td valign="top">Shift</td><td>disabled snap to grid and disables snap to
        guides</td></tr>
     <tr><td valign="top">Alt</td><td>temporarily switches to 'move'
        <a href="#note2">[2]</a></td></tr>
     <tr><td valign="top">Control</td><td>temporarily switches the scaling-center to
        the center of object instead of top-left</td></tr>
    </table>

    <p><b>Click:</b><br>
    <table>
     <tr><td valign="top">Shift</td><td> selects 'underlying' object deselecting the
        previous selected objects and making sure only one is selected
        <a href="#note3">[3]</a></td></tr>
     <tr><td valign="top">Alt</td><td> does nothing</td></tr>
     <tr><td valign="top">Control</td><td> allows multi select</td></tr>
    </table>

    <p>Notes:</p>
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
