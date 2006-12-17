<?php
  $page_title="KOffice News";
  $site_root="./";
  include("koffice.inc");
  include("header.inc");
?>

    <p>
        The KOffice News also exists as
        <a href="news_rss2.php" type="application/rss+xml">RSS Version 2.0 news feed</a>!
        <a href="http://feedvalidator.org/check?url=http:%2F%2Fkde.org%2Fareas%2Fkoffice%2Fnews_rss2.php">
            <img src="pics/valid-rss.png" alt="[Valid RSS]" title="Validate the RSS feed" width="88" height="31" />
        </a>
    </p>

<hr/>

<?php
        kde_general_news("./news.rdf", 25, false);
?>

<?php include("footer.inc"); ?>

