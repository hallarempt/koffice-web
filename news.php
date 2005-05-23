<?php
  $page_title="KOffice News";
  $site_root="./";
  include("koffice.inc");
  include("header.inc");
?>

    <p>
        The KOffice News also exists as
        <a href="news_rss2.php" type="application/rss+xml">RSS Version 2.0 news feed</a>!
        <a href="http://feedvalidator.org/check?url=http://kde.org/areas/koffice/news_rss2.php">
            <img src="pics/valid-rss.png" alt="[Valid RSS]" title="Validate the RSS feed" width="88" height="31" />
        </a>
    </p>

<hr/>

<?php
        kde_general_news("./news.rdf", 25, false);
?>

<?php include("footer.inc"); ?>

