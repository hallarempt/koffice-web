<?php
  $page_title='Kexi Screenshots';
  $site_root='../';
  include("koffice.inc");
  include("header.inc");
?>
<?php
$gallery = new ImageGallery("Kexi Screenshots");
$gallery->addImage("pics/t_relations.png", "pics/relations.png", "250", "197", "[Screenshot]", 0 , "Defining database relations");
$gallery->startNewRow();
$gallery->addImage("pics/t_alter.png", "pics/alter.png", "250", "175", "[Screenshot]", 0 , "Change table structure");
$gallery->addImage("pics/t_manipulation.png", "pics/manipulation.png", "251", "188", "[Screenshot]", 0 , "Data manipulation with completion");
$gallery->startNewRow();
$gallery->addImage("pics/t_query-design.png", "pics/query-design.png", "250", "197", "[Screenshot]", 0 , "Create queries with drag and drop");
$gallery->addImage("pics/t_query-sql.png", "pics/query-sql.png", "250", "197", "[Screenshot]", 0 , "SQL statements can still be used");
$gallery->startNewRow();
$gallery->addImage("pics/t_form-scripting.png", "pics/form-scripting.png", "251", "188", "[Screenshot]", 0 , "Create forms and add functionality by scripting");
$gallery->addImage("pics/t_reports.png", "pics/reports.png", "250", "175", "[Screenshot]", 0 , "");
$gallery->show();
?>

<?php include("footer.inc"); ?>

