<?php
  $page_title="KWord";
  $site_root='../';
  include("koffice.inc");
  include("header.inc");
?>

<?php
  include("kword.inc");
  $appinfo->showIconAndCopyright();
?>

      <p>KWord is a frame-based word-processing and desktop publishing application. KWord is capable of creating demanding and professional looking documents. Whether you are a corporate or home user, production artist or student, KWord will prove a valuable and easy to use tool for all your word processing and layout needs.</p>

      <center>
      <?php
        $gallery = new ImageGallery("KWord - Screenshot");
        $gallery->addImage("pics/bidi_2006_10_330.png",
                           "pics/bidi_2006_10.png",
                           330, 250,  "[Screenshot]", "", "KWord");
        $gallery->show();
        ?>
       </center>

      <p>KWord is a wordprocessor based on frames. This can be used to place components in precise locations, as with many professional DTP applications. KWord can also handle huge amounts of texts and allows you to do professional markup with ease.</p>

     <p>KWord's features include:</p>

     <ul>
     <li>support for the standard OASIS OpenDocument file format</li>
     <li>paragraph style sheets (borders, alignment, spacing, indentation, bullet points, tab stops, page breaks, and font type, style, color and size), together with a stylist to edit, add, remove and update styles (a number of predefined styles are provided);</li>
     <li>a frame orientation, suitable for simple desktop publishing (DTP); </li>
     <li>numerous preset as well as custom page sizes;</li>
     <li>multiple columns per page;</li>
     <li>headers and footers (including different first page headers/footers);</li>
     <li>variables, such as page number, company name, user name, document summary, date and time or a custom variable;</li>
     <li>tables;</li>
     <li>embedding of text frames, images and clip-art (.wmf and .svg files);</li>
     <li>chapter numbering;</li>
     <li>auto-generation of table of contents;</li>
     <li>auto-correction and spell checking;</li>
     <li>templates</li>
     </ul>

     <p>If you are having trouble getting the Euro character working, take a look at
       <a href="euro.php">this page</a>.
     </p>

<?php include("footer.inc"); ?>

