<?php
  $page_title="Missing Filters";
  $site_root = '../';
  include("koffice.inc");
  include("header.inc");
?>
      <p>At the moment I think the "most wanted" filter would be a MS Word
      .DOC export filter for KWord. Obviously there is more need for KWord and KSpread
      filters than for KPresenter filters.</p>

      <p>A list of possible filters:</p>
      <p>
      <ul>
       <li><b><i>KWord:</i></b>
       <p>
       <ul>
        <li>MIF <b><i>(Adobe)</i></b></li>
        <li>StarWriter <b><i>(SUN)</i></b></li>
        <li>Word'95 <b><i>(MS)</i></b></li>
        <li>.....</li>
       </ul>
       </p>
       <p>
       <li><b><i>KSpread:</i></b>
       <ul>
        <li>StarCalc <b><i>(SUN)</i></b></li>
        <li>xspread</li>
        <li>Excel'95 <b><i>(MS)</i></b></li>
        <li>Lotus 123</li>
        <li>.....</li>
       </ul>
       </p>
       <p>
       <li><b><i>KPresenter:</i></b>
       <ul>
        <li>PowerPoint 97 <b><i>(MS)</i></b></li>
        <li>StarImpress <b><i>(SUN)</i></b></li>
        <li>Presentations <b><i>(Corel)</i></b></li>
        <li>PowerPoint'95 <b><i>(MS)</i></b></li>
        <li>.....</li>
       </ul>
       </p>
       <p>
       <li><b><i>Kivio:</i></b>
       <ul>
        <li>Dia <b><i>(Gnome)</i></b></li>
        <li>Visio <b><i>(MS)</i></b></li>
        <li>.....</li>
       </ul>
       </p>
      </ul>
      </p>

      <h2>MIF Info:</h2>
      <p>The MIF format is a predecessor to XML, used only by Adobe Framemaker.
      It is a tag based, ASCII only file. Since FrameMaker can use pictures it can
      also embed pictures
      into the file, using an ASCII encoding. It is still very much in use and it
      has a new file-format in the new
      FrameMaker 6 that is (according to Adobe) not downwards compatible
      (FrameMaker 5.5 can not load FrameMaker 6.0 MIFs)</p>
      <p>It would be excellent to have this as an import/export filter for KWord.</p>

      <p><font size=-2>All names are trademarks or registered trademarks of their respective owners.</font></p>


<?php
  include("footer.inc");
?>
