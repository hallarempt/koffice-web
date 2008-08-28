<?php
  $page_title ='KOffice 2.0 Alpha 9 Visual Changelog';
  $site_root = '../';
  include("koffice.inc");
  include("header.inc");
  ?>

<p>
The following screenshots allow to visualize some of the major changes that have
happen since the release ofKOffice 2.0 Alpha 8.
</p>

<ul>
<li><a href="#koffice_libs">KOffice Libraries</a></li>
<li><a href="#kword">KWord</a></li>
<!-- <li><a href="#kspread">KSpread</a></li> -->
<li><a href="#kpresenter">KPresenter</a></li>
<!-- <li><a href="#kexi">Kexi</a></li> -->
<!-- <li><a href="#kplato">KPlato</a></li> -->
<li><a href="#krita">Krita</a></li>
<li><a href="#karbon">Karbon</a></li>
</ul>

<h3 id="koffice_libs">KOffice Libraries</h3>
<?php

$generalGallery = new ImageGallery("KOffice Libraries");
$generalGallery->addImage("pics/2008_08_26_shape_styles_docker_sm.png", "pics/2008_08_26_shape_styles_docker.png", "200","157", "[Screenshot]", 0, "The shape styles docker is available in all applications.");
$generalGallery->show();
?>

<h3 id="kword">KWord</h3>
<?
$kwordGallery = new ImageGallery("KWord");
$kwordGallery->addImage("pics/2008_08_26_styles_treeview_sm.png", "pics/2008_08_26_styles_treeview.png", "200", "108", "[Screenshot]", 0, "Text styles docker.");
$kwordGallery->show();
?>

<h3 id="kpresenter">KPresenter</h3>
<?
$kpresenterGallery = new ImageGallery("KPresenter");
$kpresenterGallery->addImage("pics/2008_08_26_presenter_view_main_sm.png", "pics/2008_08_26_presenter_view_main.png", "200", "150", "[Screenshot]", 0, "Presenter view with notes.");
$kpresenterGallery->addImage("pics/2008_08_26_presenter_view_slides_sm.png", "pics/2008_08_26_presenter_view_slides.png", "200", "150", "[Screenshot]", 0, "Presenter view with list of slides.");


$kpresenterGallery->show();
?>


<h3 id="krita">Krita</h3>
<?
$kritaGallery = new ImageGallery("Krita");
$kritaGallery->addImage("pics/2008_08_26_sumi-e_coolness_sm.jpg", "pics/2008_08_26_sumi-e_coolness.jpg", "200", "150", "[Screenshot]", 0, "Sumi-e coolness.");
$kritaGallery->show();

?>

<h3 id="karbon">Karbon</h3>
<?
$karbonGallery = new ImageGallery("Karbon");
$karbonGallery->addImage("pics/2008_08_26_karbon_page_layout_sm.png", "pics/2008_08_26_karbon_page_layout.png", "200", "121", "[Screenshot]", 0, "Page layout dialog.");
$karbonGallery->show();
?>
