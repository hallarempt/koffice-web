<?php
  $page_title="Krita User Gallery";
  $site_root='../';
  include("koffice.inc");
  include("header.inc");
?>

<?php
// This array contains all the images and the info about them
// explanation here!

$CCAT25 = '<a href="http://creativecommons.org/licenses/by/2.5/">CC Attribution 2.5</a>';
$CCAT30 = '<a href="http://creativecommons.org/licenses/by/3.0/">Creative Commons Attribution-Share Alike 3.0</a>';
// For each new image, add to the top of the list something like:
// $images[] = array( "small" => "relative path to small image",
//                    "kra" => "relative path to the native .kra file",
//                    "license" => "the license",
//                    "date" => "the date, I guess Month, Year is enough? Or is Day'th Month, Year better?",
//                    "title" => "the title of the work",
//                    "author" => "the author of the work",
//                    "description" => "A short, one-line description of the image, if any",
//                    "width" => "width of the small image",
//                    "height" => "height of the small image");
$images[] = array( "small" => "pics/gallery/organicmachine_sm.png",
                   "kra" => "pics/gallery/organic_machine.kra",
                   "license" => $CCAT30,
                   "date" => "August 2008",
                   "title" => "Organic Machine",
                   "author" => "Elián Hanisch (m4v)",
                   "description" => "A lot of time put in this drawing, used no references. Krita 1.6.3 and Bamboo 
Fun tablet.)",
                   "width" => "270",
                   "height" => "214");
$images[] = array( "small" => "pics/gallery/estegosaurio_sm.png",
                   "kra" => "pics/gallery/estegosaurio.kra",
                   "license" => $CCAT30,
                   "date" => "August 2008",
                   "title" => "Estegosaurio",
                   "author" => "Elián Hanisch (m4v)",
                   "description" => "Trying out my new wacom tablet (17M krita file)",
                   "width" => "270",
                   "height" => "174");
$images[] = array( "small" => "pics/gallery/dinner_sm.png",
                   "kra" => "pics/gallery/dinner.kra",
                   "license" => $CCAT25,
                   "date" => "January 2007",
                   "title" => "Dinner for friends",
                   "author" => "Bastian Salmela (basse)",
                   "description" => "A picture for a christmas calendar. (13M Krita file)",
                   "width" => "270",
                   "height" => "191");


// A temporary value to test this with, a nice value might be 10 or so
$imagesPerPage = 10;
$currentPage = 0;
if (isset($_GET['page']) && is_numeric($_GET['page'])) {
    $possiblyPage = intval($_GET['page']);
    if ($possiblyPage >= 0 && $possiblyPage < count($images) / $imagesPerPage) {
        $currentPage = $possiblyPage;
    }
}

$gallery = new ImageGallery("Krita User Gallery");
// $gallery->startNewRow(); should not be used before first image as it prevents validation

$start = $imagesPerPage * $currentPage;
$end = min($start + $imagesPerPage, count($images));
$startNewRow = 0;
for ($i = $start; $i < $end; $i++) {
    $image = $images[$i];

    $gallery->addImage($image["small"], $image["kra"], $image["width"], $image["height"],
                       "[Screenshot]", "'" . $image["title"] . "'<br /> by " . $image["author"],
                       "<i>" . $image["description"] . "</i><br />" . "Image added " . $image["date"]
                       . " and is licensed under " . $image["license"]);

    if ($startNewRow == 1) {
        $gallery->startNewRow();
        $startNewRow = 0;
    } else {
        $startNewRow++;
    }
}

$gallery->show();

// Ideally, this text would go at the top, underneath the 'Krita User Gallery' text
?>
<p>
The Krita User Gallery offers users of Krita an opportunity to both show their work,
and demonstrate some of Krita's capabilities. <emph>How to participate?</emph> Mail a Krita document to
<a href="mailto:krita-gallery@kde.org">the maintainer(s) of this page</a>, along with a
suitable license that you license the native Krita file under, and some info about your work. Then you can hope that it will
be selected for publication here <tt>:)</tt>.
</p>
<p>
A suitable license is a license that is reasonably free enough so that we can safely publish the file along with a small screenshot,
and possibly let other people play with it. A nice license is the <a href="http://www.gnu.org/licenses/gpl.html">GNU General Public License</a>,
but some of the <a href="http://creativecommons.org/">Creative Commons</a> licenses will also suffice. Basically it would be very cool if people
not only could look in awe at your paintings, but could also experiment for themselves with them. Please make sure that if you use
external material (like photographs made by other people), that you have the proper license (and comply with it) so that you (and we) can redistribute the derivative
work under your chosen license. The document needs to be sent in Krita's native file format, and preferably contains the image as you made it, including
use of group and adjustment layers.
</p>
<p>
<?

print "Go to page ";
for ($i = 0; $i < count($images) / $imagesPerPage; $i++) {
    if ($i == $currentPage) {
        print "" . ($i + 1) . " ";
    } else {
        print '<a href="gallery.php?page=' . $i . '">' . ($i + 1) . '</a> ';
    }
}

?>
</p>
<?php
  include("footer.inc");
?>



