<?php
include("koffice.inc");

$this->setName ("KOffice Homepage");

$section =& $this->appendSection("Inform");
$section->appendLink("Home","");
$section->appendLink("KDE Home","http://www.kde.org/",false);
$section->appendLink("News","news.php");
$section->appendDir("Information", "info");
$section->appendDir("FAQ", "faq");
//$section->appendDir("Download", "download");
$section->appendDir("Add-ons for KOffice", "addons");
$section->appendLink("People", "people.php");
$section->appendDir("Mailing Lists", "contact");
$section->appendDir("Support KOffice", "support");

$section =& $this->appendSection("Latest Releases");
$section->appendLink("KOffice $currentversion", "releases/$currentversion-release.php");
$section->appendLink("KOffice 2.0-alpha-9", "releases/2.0alpha9-release.php");
$section->appendDir("Security", "security");

$section =& $this->appendSection("KOffice Applications");
$section->appendDir("KOffice Workspace", "koshell");
$section->appendDir("KWord", "kword");
$section->appendDir("KSpread", "kspread");
$section->appendDir("KPresenter", "kpresenter");
$section->appendDir("Kexi", "kexi");
$section->appendDir("Kivio", "kivio");
$section->appendDir("Karbon14", "karbon");
$section->appendDir("Krita", "krita");
$section->appendDir("KPlato", "kplato");
$section->appendDir("KChart", "kchart");
$section->appendDir("KFormula", "kformula");
$section->appendDir("Kugar", "kugar");


$section =& $this->appendSection("Documentation");
$section->appendLink("KOffice $currentversion", "http://docs.kde.org/stable/en/koffice/", false);
$section->appendDir("Supported File Formats", "filters");

$section =& $this->appendSection("Competitions");
$section->appendDir("Recent Competitions", "competition");
$section->appendLink("KOffice2 Design", "competition/guiKOffice2.php");

$section =& $this->appendSection("Download");
$section->appendDir("Download", "download");

$section =& $this->appendSection("Development");
$section->appendDir("Developer Resources", "developer");
$section->appendDir("Get Involved", "getinvolved");
$section->appendDir("KOffice Sprints", "sprints/index.php");
?>
