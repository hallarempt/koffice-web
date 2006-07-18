  <?php
  $page_title="KOffice Features and Tasks";
  $site_root='../../';
  include("koffice.inc");
  include("header.inc");
?>

<p>This page describes the current state of KOffice.  KOffice contains
a number of programs that can work on their own.  However, we expect a
certain base functionality of a program that is part of the KOffice
suite.  Currently, not all programs implement all the desired
functionality.  Developers: Look out for missing features in this
table.</p>

<p>We also try to share as much code as possible between the
programs.  See the table below for an indication of the state of
that. </p>

<h2>Feature Table</h2>

<p>The following table describes which programs have implemented which
features.  It can serve as a starting point for people looking for
tasks to do.  Especially look out for red and yellow squares, which
indicate that something is missing.  Maybe <b>you</b> could do something
about that?</p>

<table cellspacing="0" cellpadding="3" border="1">
  <tr>
    <th colspan="2">Legend</th>
  </tr>
  <tr>
    <th bgcolor="#00FF00">Yes</th>
    <td>Feature is Implemented</td>
  </tr>
  <tr>
    <th bgcolor="#FFFF00"></th>
    <td>Feature is Partly Implemented (> 50%)</td>
  </tr>
  <tr>
    <th bgcolor="#FF0000">No</th>
    <td>Feature is Not Implemented</td>
  </tr>
  <tr>
    <th bgcolor="#808080">N/A</th>
    <td>Not Applicable - Feature is not implemented, but not needed</td>
  </tr>
  <tr>
    <th></th>
    <td>Incomplete data - Find out if applicable or not</td>
  </tr>
</table>

<br/>

<table cellspacing="0" cellpadding="3" border="1">
  <tr>
    <th rowspan="2"></th>
    <th colspan="4">Productivity Applications</th>
    <th colspan="3">Creativity Applications</th>
    <th colspan="1">Project Planning</th>
    <th colspan="3">Helper Applications</th>
  </tr>
  <tr>
    <th>KWord</th>
    <th>KSpread</th>
    <th>KPresenter</th>
    <th>Kexi</th>

    <th>Kivio</th>
    <th>Karbon</th>
    <th>Krita</th>

    <th>KPlato</th>

    <th>Kugar</th>
    <th>KChart</th>
    <th>KFormula</th>
  </tr>
  <tr>
    <th>Standard KOffice startup dialog</th>
    <td bgcolor="#00FF00">Yes</td>
    <td bgcolor="#00FF00">Yes</td>
    <td bgcolor="#00FF00">Yes</td>
    <td bgcolor="#00FF00">Yes</td>

    <td bgcolor="#00FF00">Yes</td>
    <td bgcolor="#00FF00">Yes</td>
    <td bgcolor="#00FF00">Yes</td>

    <td bgcolor="#00FF00">Yes</td>

    <td bgcolor="#FF0000">No</td>
    <td bgcolor="#00FF00">Yes</td>
    <td bgcolor="#FF0000">No</td>
  </tr>
  <tr>
    <th>Embedding of other parts</th>
    <td bgcolor="#00FF00">Yes</td>
    <td bgcolor="#00FF00">Yes</td>
    <td bgcolor="#00FF00">Yes</td>
    <td bgcolor="#FF0000">No</td>

    <td bgcolor="#FF0000">No</td>
    <td bgcolor="#FF0000">No</td>
    <td bgcolor="#FFFF00">Yes</td>
    
    <td bgcolor="#808080">N/A</td>

    <td></td>
    <td bgcolor="#00FF00">Yes</td>
    <td bgcolor="#808080">N/A</td>
  </tr>
  <tr>
    <th>Save / Load in OpenDoc format</th>
    <td bgcolor="#00FF00">Yes</td>
    <td bgcolor="#00FF00">Yes</td>
    <td bgcolor="#00FF00">Yes</td>
    <td bgcolor="#FFFF00"></td>

    <td bgcolor="#FF0000">No</td>
    <td bgcolor="#FF0000">No</td>
    <td bgcolor="#808080">N/A</td>

    <td bgcolor="#808080">N/A</td>

    <td bgcolor="#808080">N/A</td>
    <td bgcolor="#FFFF00"></td>
    <td bgcolor="#FF0000">No</td>
  </tr>
  <tr>
    <th>SVG export</th>
    <td bgcolor="#808080">N/A</td>
    <td bgcolor="#808080">N/A</td>
    <td bgcolor="#808080">N/A</td>
    <td bgcolor="#808080">N/A</td>

    <td bgcolor="#FF0000">No</td>
    <td bgcolor="#00FF00">Yes</td>
    <td></td>

    <td bgcolor="#FF0000">No</td>

    <td></td>
    <td bgcolor="#00FF00">Yes</td>
    <td bgcolor="#00FF00">Yes</td>
  </tr>
  <tr>
    <th>PNG export</th>
    <td bgcolor="#808080">N/A</td>
    <td bgcolor="#808080">N/A</td>
    <td bgcolor="#808080">N/A</td>
    <td bgcolor="#808080">N/A</td>

    <td bgcolor="#00FF00">Yes</td>
    <td bgcolor="#00FF00">Yes</td>
    <td bgcolor="#00FF00">Yes</td>

    <td bgcolor="#FF0000">No</td>

    <td></td>
    <td bgcolor="#00FF00">Yes</td>
    <td bgcolor="#00FF00">Yes</td>
  </tr>
</table>

<p>
</p>

<h2>Code Sharing</h2>

<p>The following table shows which features can be shared among the
different programs.  Red squares indicate work to be done.  When we
say "shared", we mean that the feature is implemented somewhere in the
KOffice libraries.</p>

<table cellspacing="0" cellpadding="3" border="1">
  <tr>
    <th rowspan="2"></th>
    <th colspan="4">Productivity Applications</th>
    <th colspan="3">Creativity Applications</th>
    <th colspan="1">Project Planning</th>
    <th colspan="3">Helper Applications</th>
  </tr>
  <tr>
    <th>KWord</th>
    <th>KSpread</th>
    <th>KPresenter</th>
    <th>Kexi</th>

    <th>Kivio</th>
    <th>Karbon</th>
    <th>Krita</th>

    <th>KPlato</th>

    <th>Kugar</th>
    <th>KChart</th>
    <th>KFormula</th>
  </tr>
  <tr>
    <th>Text Formatting Using KoText</th>
    <td bgcolor="#00FF00">Shared</td>
    <td bgcolor="#FF0000">Own</td>
    <td bgcolor="#00FF00">Shared</td>
    <td bgcolor="#FF0000">To be shared</td>

    <td bgcolor="#FF0000">Own</td>
    <td bgcolor="#808080">N/A</td>
    <td bgcolor="#FF0000">Own</td>

    <td bgcolor="#808080">N/A</td>

    <td bgcolor="#808080">N/A</td>
    <td bgcolor="#808080">N/A</td>
    <td bgcolor="#808080">N/A</td>
  </tr>
  <tr>
    <th>Dockers</th>
    <td bgcolor="#808080">N/A</td>
    <td bgcolor="#808080">N/A</td>
    <td bgcolor="#808080">N/A</td>
    <td bgcolor="#00FF00">Own</td>

    <td bgcolor="#00FF00">Shared</td>
    <td bgcolor="#FFFF00">To be shared</td>
    <td bgcolor="#00FF00">Shared</td>

    <td bgcolor="#808080">N/A</td>

    <td bgcolor="#808080">N/A</td>
    <td bgcolor="#808080">N/A</td>
    <td bgcolor="#808080">N/A</td>
  </tr>
  <tr>
    <th>Gradient handling</th>
    <td bgcolor="#808080">N/A</td>
    <td bgcolor="#808080">N/A</td>
    <td bgcolor="#808080">N/A</td>
    <td bgcolor="#FF0000">To be shared</td>

    <td bgcolor="#808080">N/A</td>
    <td bgcolor="#00FF00">Shared</td>
    <td bgcolor="#00FF00">Shared</td>

    <td bgcolor="#808080">N/A</td>

    <td bgcolor="#808080">N/A</td>
    <td bgcolor="#808080">N/A</td>
    <td bgcolor="#808080">N/A</td>
  </tr>
  <tr>
    <th>CSV Import Dialog</th>
    <td bgcolor="#808080">N/A</td>
    <td bgcolor="#00FF00">Shared</td>
    <td bgcolor="#808080">N/A</td>
    <td bgcolor="#FF0000">To be shared</td>

    <td bgcolor="#808080">N/A</td>
    <td bgcolor="#808080">N/A</td>
    <td bgcolor="#808080">N/A</td>

    <td bgcolor="#808080">N/A</td>

    <td bgcolor="#808080">N/A</td>
    <td bgcolor="#00FF00">Shared</td>
    <td bgcolor="#808080">N/A</td>
  </tr>
  <tr>
    <th>Page Setup Dialog</th>
    <td bgcolor="#00FF00">Shared</td>
    <td bgcolor="#00FF00">Shared</td>
    <td bgcolor="#00FF00">Shared</td>
    <td bgcolor="#00FF00">Shared</td>

    <td bgcolor="#00FF00">Shared</td>
    <td bgcolor="#00FF00">Shared</td>
    <td bgcolor="#FFFFFF"></td>

    <td bgcolor="#FFFFFF"></td>

    <td bgcolor="#FFFFFF"></td>
    <td bgcolor="#FF0000">Own</td>
    <td bgcolor="#FFFFFF"></td>
  </tr>

  <tr>
    <th>Bird's eyeview panel</th>
    <td bgcolor="#FFFFFF"></td>
    <td bgcolor="#FFFFFF"></td>
    <td bgcolor="#FFFFFF"></td>
    <td bgcolor="#00FF00">Own</td>

    <td bgcolor="#FF0000">Own</td>
    <td bgcolor="#FFFF00">To be shared</td>
    <td bgcolor="#FF0000">Own</td>

    <td bgcolor="#FFFFFF"></td>

    <td bgcolor="#FFFFFF"></td>
    <td bgcolor="#808080">N/A</td>
    <td bgcolor="#FFFFFF"></td>
  </tr>

  <tr>
    <th>Toolbox</th>
    <td bgcolor="#FFFFFF"></td>
    <td bgcolor="#FFFFFF"></td>
    <td bgcolor="#FFFFFF"></td>
    <td bgcolor="#808080">N/A</td>

    <td bgcolor="#808080">N/A</td>
    <td bgcolor="#FF0000">Own</td>
    <td bgcolor="#00FF00">Shared</td>

    <td bgcolor="#FFFFFF"></td>

    <td bgcolor="#FFFFFF"></td>
    <td bgcolor="#808080">N/A</td>
    <td bgcolor="#FFFFFF"></td>
  </tr>

  <tr>
    <th>Rulers</th>
    <td bgcolor="#00FF00">Shared</td>
    <td bgcolor="#FFFFFF"></td>
    <td bgcolor="#00FF00">Shared</td>
    <td bgcolor="#FF0000">To be shared</td>

    <td bgcolor="#00FF00">Shared</td>
    <td bgcolor="#FFFF00">To be shared</td>
    <td bgcolor="#FFFF00">To be shared</td>

    <td bgcolor="#FFFFFF"></td>

    <td bgcolor="#808080">N/A</td>
    <td bgcolor="#808080">N/A</td>
    <td bgcolor="#808080">N/A</td>
  </tr>

  <tr>
    <th>Guide Lines</th>
    <td bgcolor="#FF0000">Own</td>
    <td bgcolor="#FFFFFF"></td>
    <td bgcolor="#00FF00">Shared</td>
    <td bgcolor="#FF0000">To be shared</td>

    <td bgcolor="#FFFFFF"></td>
    <td bgcolor="#FF0000">Own</td>
    <td bgcolor="#FFFF00">To be shared</td>

    <td bgcolor="#FFFFFF"></td>

    <td bgcolor="#808080">N/A</td>
    <td bgcolor="#808080">N/A</td>
    <td bgcolor="#808080">N/A</td>
  </tr>

  <tr>
    <th>Autoscroll</th>
    <td bgcolor="#FF0000">Own</td>
    <td bgcolor="#00FF00">Shared</td>
    <td bgcolor="#00FF00">Shared</td>
    <td bgcolor="#808080">N/A</td>

    <td bgcolor="#FF0000">NYI</td>
    <td bgcolor="#FF0000">NYI</td>
    <td bgcolor="#00FF00">Shared</td>

    <td bgcolor="#FF0000">NYI</td>

    <td bgcolor="#FF0000">NYI</td>
    <td bgcolor="#FF0000">NYI</td>
    <td bgcolor="#FF0000">NYI</td>
  </tr>

<!--
  <tr>
    <th colspan="12"></th>
  </tr>
  <tr>
    <th>Template of a row in this table</th>
    <td bgcolor="#FFFFFF"></td>
    <td bgcolor="#FFFFFF"></td>
    <td bgcolor="#FFFFFF"></td>

    <td bgcolor="#FFFFFF"></td>
    <td bgcolor="#FFFFFF"></td>
    <td bgcolor="#FFFFFF"></td>

    <td bgcolor="#FFFFFF"></td>

    <td bgcolor="#FFFFFF"></td>

    <td bgcolor="#FFFFFF"></td>
    <td bgcolor="#FFFFFF"></td>
    <td bgcolor="#FFFFFF"></td>
  </tr>
-->
</table>


<br />
<hr width="30%" align="center" />
<p>Author: Inge Wallin<br />
Last update: <?php echo date ("Y-m-d", filemtime(__FILE__)); ?>
</p>

