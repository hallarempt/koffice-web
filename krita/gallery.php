<?php
  $page_title="Krita User Gallery";
  $site_root='../';
  include("koffice.inc");
  include("header.inc");
?>

<?php
// This array contains all the images and the info about them
// explanation here!
// Add link to the license?
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
$images[] = array( "small" => "videos/krita_perspectivecloning_sm.png",
                   "kra" => "videos/krita_perspectivecloning.kra",
                   "license" => "GPLv2",
                   "date" => "October 2006",
                   "title" => "Some Test",
                   "author" => "Alice Nonymous",
                   "description" => "Reflections on the cuteness of kittens by way of picturing them",
                   "width" => "272",
                   "height" => "205");
$images[] = array( "small" => "pics/krita_1.6rc1_sm.png",
                   "kra" => "pics/krita_1.6rc1.kra",
                   "license" => "Creative Commons Attribution-NonCommercial-ShareAlike 2.0",
                   "date" => "October 2006",
                   "title" => "Krita 1.6 Rocks",
                   "author" => "Somebody Nice",
                   "description" => "",
                   "width" => "264",
                   "height" => "176");
$images[] = array( "small" => "pics/krita1.5rc1_sm.png",
                   "kra" => "pics/krita1.5rc1.kra",
                   "license" => "GPLv2+",
                   "date" => "October 2006",
                   "title" => "Release Candidate 1.5",
                   "author" => "Hmmmm, who could it be",
                   "description" => "This is some text, describing the description of the described image.",
                   "width" => "303",
                   "height" => "200");
$images[] = array( "small" => "videos/krita_rc1_sm.png",
                   "kra" => "videos/krita_rc1.kra",
                   "license" => "GPLv2",
                   "date" => "October 2006",
                   "title" => "General Preview",
                   "author" => "This might be a really really long name, really!",
                   "description" => "This too, might be not too short, but certainly not too long. That would be not as nice",
                   "width" => "273",
                   "height" => "183");
$images[] = array( "small" => "videos/krita_perspectivetransformtool_sm.png",
                   "kra" => "videos/krita_perspectivetransformtool.kra",
                   "license" => "GPLv2",
                   "date" => "October 2006",
                   "title" => "Short, Very Short, or Long, Very Long! Like the Very Long rows of cute kittens that one can make with lots of cute kittens.",
                   "author" => "A Krita Developer",
                   "description" => "Ⓤⓝⓘⓒⓞⓓⓔ☺",
                   "width" => "272",
                   "height" => "204");

// A temporary value to test this with, a nice value might be 10 or so
$imagesPerPage = 4; //10;
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
                       "<i>" . $image["description"] . "</i><br />" . "Added " . $image["date"]
                       . ", licensed as " . $image["license"]);

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
<a href="mailto:the @koffice.org address will come here">the maintainer(s) of this page</a>, along with a
suitable license that you license the native Krita file under, and some info about your work. Then you can hope that it will
be selected for publication here <tt>:)</tt>.
</p>
<p>
A suitable license is a license that is reasonably free enough so that we can safely publish the file along with a small screenshot,
and possibly let other people play with it. A nice license is the <a href="http://www.gnu.org/licenses/gpl.html">GNU General Public License</a>,
but most of the <a href="http://creativecommons.org/">Creative Commons</a> licenses will also suffice. Please make sure that if you use
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



