<?php
$this->setName ("KOffice Homepage");

$section =& $this->appendSection("Inform");
$section->appendLink("Home","");
$section->appendLink("KDE Home","http://www.kde.org/",false);
$section->appendLink("News","news.php");
$section->appendLink("Information", "info");
$section->appendLink("FAQ", "faq");
//$section->appendDir("Download", "download");
$section->appendLink("Add-ons for KOffice", "addons");
$section->appendLink("People", "people.php");
$section->appendLink("Mailing Lists", "contact");
$section->appendDir("Support KOffice", "support");

$section =& $this->appendSection("Latest Releases");
$section->appendLink("KOffice $currentversion", "releases/$currentversion-release.php");
$section->appendLink("KOffice $develversion", "releases/$develversion-release.php");
$section->appendLink("Release Notes", "releases");

$section =& $this->appendSection("KOffice Applications");
$section->appendDir("KWord", "kword");
$section->appendDir("KSpread", "kspread");
$section->appendDir("KPresenter", "kpresenter");
$section->appendDir("Kivio", "kivio");
$section->appendDir("Karbon14", "karbon");
$section->appendDir("Krita", "krita");
$section->appendDir("Kugar", "kugar");
$section->appendDir("KPlato", "kplato");
$section->appendDir("Kexi", "kexi");
$section->appendDir("KChart", "kchart");
$section->appendDir("KFormula", "kformula");
$section->appendDir("Import/Export Filters", "filters");

$section =& $this->appendSection("Download");
$section->appendDir("Download", "download");

$section =& $this->appendSection("Develop");
$section->appendDir("Developer Resources", "developer");
?>
