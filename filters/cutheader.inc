<?php
  include("/home/groups/k/ko/koffice/htdocs/templates/variables.inc");
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php echo $title;?></title>
<link rel="stylesheet" href="/koffice.css" type="text/css" />
<script language="javascript" type="text/javascript">
  <!--
  function language_select(x) {
    if(x == "") {
      document.forms[1].reset();
      return;
    } else {
      top.location.href = x;
      document.forms[1].reset();
    }
  }
  // -->
</script>
</head>

<body bgcolor="#ffffff">

<!-- BEGIN BORDER TOP TABLE -->
<table cellspacing="0" cellpadding="0" border="0" width="700" bgcolor="#000080">
<tr valign="top"><td>
<table width="100%" cellpadding="0" cellspacing="2" border="0">
<tr valign="top" bgcolor="#ffffff"><td>

<!-- BEGIN top table -->
<table cellspacing="0" cellpadding="0" border="0" width="100%">
<!-- "Menubar" -->
<tr valign="top"><td>
  <table cellspacing="0" cellpadding="0" border="0" width="100%">
  <tr class="menurow"><td class="menucell">
  &nbsp;<a href="/" class="menulink">koffice.org</a>&nbsp;|&nbsp;
  <a href="/faq/" class="menulink">FAQ</a>&nbsp;|&nbsp;
  <a href="/install-source.phtml" class="menulink">Download</a>&nbsp;|&nbsp;
  <a href="/releases/" class="menulink">Release Notes</a>&nbsp;|&nbsp;
  <!--  <a href="/screenshots/index.html" class="menulink">Screenshots</a>&nbsp;|&nbsp;-->
  <a href="http://www.kde.org" class="menulink">kde.org</a>
  </td>
  <td align="right" class="menucell">
  <a href="/contact.phtml" class="menulink">Contact Us</a>
  </td></tr>
  </table>
</td></tr>

<!-- Images -->
<tr valign="top"><td>
  <table cellspacing="0" cellpadding="0" border="0" width="100%">
  <tr><td width="100%">
    <img src="/pics/full_logo.jpg" height="60" width="700" alt="KOffice Project" border="0" />
  </td></tr>
  </table>
</td></tr>

<!-- Current location -->
<tr valign="top"><td class="locationcell">
<?php echo $location; ?>
</td></tr>
</table>

<!-- END BORDER -->
</td></tr>
</table>
</td></tr>
</table>

<!-- START MAIN BOTTOM table -->
<table cellspacing="2" cellpadding="3" width="700" border="0">
<tr valign="top">

<!-- Links Table -->
<td>
  <table cellspacing="0" cellpadding="0" border="0" width="170">
  <tr><td>

  <!-- Search -->
  <table class="search" cellspacing="0" cellpadding="0" border="0" width="100%">
  <tr><td>
    <table cellspacing="0" cellpadding="3" border="0">
    <tr><td>
    <form class="search" action="http://www.kde.com/websites/search.php" method="get">
      <b>Search</b><br />
      <input style="font-size:10px;" type="text" size="14" name="q" value="" />
      <input type="hidden" name="id" value="www.kde.org" />
      <input type="hidden" name="ssites[]" value="www.kde.org" />
      <input type="hidden" name="noseccookielogon" value="true" />
      <input style="color:#ffffff;font-size:10px;" type="submit" value="go" /><br />
      <input type="checkbox" name="all" value="t" />All Sites
    </form>
    </td></tr>
    </table>
  </td></tr>
  </table>
  <!-- End Search -->

  <!-- Main Links -->
  <table bgcolor="#000080" cellspacing="0" cellpadding="0" border="0" width="100%">
  <tr><td>
    <table cellspacing="1" cellpadding="3" border="0" width="100%">
    <tr bgcolor="#c5cae2"><td nowrap="nowrap">

<?php
/*  if (file_exists("links.inc"))
   {
    include("links.inc");
   }
   else
   {
   include($DOCUMENT_ROOT . "/links.inc");
   }
 */
    if (isset($links_file))
   {
     include "$links_file";
      } else {
         include "links.inc";
   }

?>

    </td></tr>
    </table>
  </td></tr>
  </table>

  </td></tr>
  </table>

</td>

<!-- Main Body Cell -->
<td>









