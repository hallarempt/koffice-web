<?php
  $page_title="KPresenter";
  $site_root='../';
  include("koffice.inc");
  include("header.inc");
?>

<?php
  include("kpresenter.inc");
  $appinfo->showIconAndCopyright();
?>

    <p>KPresenter is a presentation application. With KPresenter, you can prepare a set of slides for use in an
    on-screen slideshow or for printing. Your slides can include text and graphics in a variety of formats, and of course, you can embed all sorts of objects.</p>
        
    <center>
    <?php
    $gallery = new ImageGallery("KPresenter- Screenshot");
    $gallery->addImage("pics/kpresenter_sm.png", "pics/kpresenter.png", 330, 223,  "[Screenshot]", "", "KPresenter");
    $gallery->show();
    ?>
    </center>


    <p>Its features include:</p>

    <ul>
    <li>support for the standard OASIS OpenDocument file format</li>
    <li>inserting and editing rich text (with bullet points, indentation, spacing, colors, fonts, etc.);</li>
    <li>embedding images and clip-art (.wmf files);</li>
    <li>inserting auto-forms; </li>
    <li>setting many object properties (background, many types of gradients, pen, shadow, rotation, object specific settings, etc.);</li>
    <li>working with objects (resizing, moving, lowering, raising, etc.);</li>
    <li>grouping/ungrouping objects; </li>
    <li>headers/footers; </li>
    <li>advanced undo/redo; </li>
    <li>setting background (color, gradients, pictures, clip-arts, etc.); </li>
    <li>assigning effects for animating objects and defining effects for changing slides;</li>
    <li>playing screen presentations with effects; </li>
    <li>print as PostScript; </li>
    <li>creating HTML slideshows with a few mouse clicks;</li>
    <li>templates (pre- and user-defined); </li>
    <li>using XML as the document format;</li>
    <li>a Presentations Structure Viewer</li>
    </ul>

    <p>You can find some of the presentations that KPresenter has been used for: <a href="http://www.kde.org/kdeslides/">http://www.kde.org/kdeslides/</a>.</p>

 <br />
 <hr width="30%" align="center" />
 <p>
 Last update: <?php echo date ("Y-m-d", filemtime(__FILE__)); ?>
 </p>
<?php
  include("footer.inc");
?>
