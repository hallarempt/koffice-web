<?php
  $page_title="KOffice Web Site Screenshots";
  $site_root='../../';
  include("koffice.inc");
  include("header.inc");
?>
<p>This page describes how to prepare screenshots for the KOffice website.</p>

<h2>Preparation</h2>

<p>To keep a professional and consistent look, it would be better for
the screenshots to be in Plastik style, Plastik window decorations and KDE
default colours.</p>

<p>To set this up, from "System Settings" (which you can find in your
K-menu) and click "Theme Manager", choose "Plastik", and click "Apply".
This should set your window decorations, widget style, and colour scheme to
the KDE defaults.</p>

<p>For more information, see the <a
href="http://i18n.kde.org/doc/screenshots.php">KDE Screenshot
guidelines.</a></p>

<h2>Image sizes</h2>

<p>Remember that people viewing your screenshots may not have large screens,
and will be viewing them in a browser which will take up some screen space for
itself, so try not to make the high resolution images too large.  KDE
applications should work in 800x600, but it can be difficult to make
attractive screenshots at that resolution.</p>

<table>
  <tbody>
    <tr>
      <th>Location</th>
      <th>Width</th>
      <th>Suggested Height</th>
    </tr>
    <tr>
      <td>Application page</td>
      <td>330</td>
      <td>250</td>
    </tr>
    <tr>
      <td>Gallery thumbnails</td>
      <td>270</td>
      <td>200</td>
    </tr>
    <tr>
      <td>Gallery screenshots (suggested)</td>
      <td>800-900</td>
      <td>~640</td>

    </tr>
  </tbody>
</table>

<h2>Filename conventions</h2>
<p>Please name your screenshots as follows:</p>
<p>High resolution (unscaled) screenshots should have a filename of the
form:</p>
<blockquote><i>feature</i>[<i>num</i>]<i>_year_month.png</i></blockquote>
<p>where</p>
<ul>
<li><i>feature</i> is the name of (or an abbreviation for) the feature that the
screenshot demonstrates (e.g. 'bidi' for bidirectional text)</li>
<li><i>num</i> is optional.  Use it if you create more than one screenshot
for a given feature within a given month</li>
<li><i>year</i> is the current year</li>
<li><i>month</i> is the current month</li>
</ul>


<p>Lower resolution (scaled down) screenshots should have a filename of the
form:</p>
<blockquote><i>feature</i>[<i>num</i>]<i>_year_month_width.png</i></blockquote>
<p>where <i>width</i> is the width of the image, and the other fields are the
same as listed above.</p>

<?php
   include("footer.inc");
?>
