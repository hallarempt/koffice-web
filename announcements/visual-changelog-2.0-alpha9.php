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

<?php
$kexiGallery = new ImageGallery("Kexi");
$kexiGallery->addImage("pics/2008_07_16_kexi_to_kspread_sm.png", "pics/2008_07_16_kexi_to_kspread.png", "200","125", "[Screenshot]", 0, "The report plugins of kexi can export to a spread sheet file that is then loaded in KSpread");
$kexiGallery->addImage("pics/2008_07_16_kexi_to_html_sm.png", "pics/2008_07_16_kexi_to_html.png", "200", "125", "[Screenshot]", 0, "The report plugins of kexi can export to HTML.");
$kexiGallery->show()

$kritaGallery = new ImageGallery("Krita");
$kritaGallery->addImage("pics/2008_07_16_krita_shapelayer_with_filter_layer_sm.png", "pics/2008_07_16_krita_shapelayer_with_filter_layer.png", "200", "119", "[Screenshot]", 0, "In Krita, it is possible to have a filter layer on top of a vector layer, this give access to a wide range of effects on vectors.");
$kritaGallery->addImage("pics/2008_07_16_krita_sumi-e_sm.png", "pics/2008_07_16_krita_sumi-e.png", "200", "121", "[Screenshot]", 0, "The new sumi-e painting operation.");

?>

