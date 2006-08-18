<?php
  // TODO: &#'ify all the email addresses
  $appinfo = new AppInfo("Krita");
  $appinfo->setIcon( "pics/hi48-app-krita.png", "48", "48");
  $appinfo->setVersion($kritaversion);
  $appinfo->setLicense("gpl");
  $appinfo->setCopyright("2000", "the Krita Team");
  $appinfo->addAuthor("Michael Koch", "&#107;&#0111;c&#104;&#x40;&#107;d&#00101;.&#x6f;r&#x67;");
  $appinfo->addAuthor("Matthias Elter", "me&#64;&#x6b;de&#46;or&#103;");
  $appinfo->addAuthor("Andrew Richards", "ph&#121;&#00115;a&#106;r&#00064;&#112;h&#121;&#x73;.can&#116;&#101;r&#98;&#00117;r&#121;&#0046;&#00097;c&#00046;&#x6e;&#x7a;");
  $appinfo->addAuthor("Carsten Pfeiffer", "&#x70;&#x66;e&#x69;&#102;&#102;&#x65;&#x72;&#x40;&#x6b;de&#x2e;&#x6f;r&#103;", "Former maintainer");
  $appinfo->addAuthor(" Toshitaka Fujioka", "&#0102;&#117;&#106;&#x69;o&#x6b;a&#0064;&#x6b;de&#x2e;&#x6f;rg");
  $appinfo->addAuthor("John Califf", "&#0106;c&#097;&#108;&#0105;&#x66;f&#x40;&#x63;o&#109;p&#117;zone.&#x6e;&#101;t", "Former maintainer");
  $appinfo->addAuthor("Patrick Julien", "freak&#x40;&#099;&#x6f;d&#101;&#x70;im&#112;&#x73;.o&#x72;&#x67;", "Krita architecture, former maintainer");
  $appinfo->addMaintainer("Boudewijn Rempt", "&#98;ou&#100;&#064;&#118;ald&#121;a&#00115;.o&#0114;g");
  $appinfo->addAuthor("Sven Langkamp", "lo&#00110;&#x67;&#x61;&#x6d;&#0112;&#x40;r&#x65;al&#108;&#x79;g&#x6f;&#x6f;d&#0046;d&#101;");
  $appinfo->addAuthor("Cyrille Berger", "cyb&#64;le&#112;i&#0046;or&#103;");
  $appinfo->addAuthor("Adrian Page", "Adrian.&#x50;age&#0064;&#0116;es&#99;&#111;.net");
  $appinfo->addAuthor("Bart Coppens", "&#107;&#x64;&#101;&#64;b&#097;&#x72;&#116;co&#x70;&#x70;en&#115;.b&#x65;");
  $appinfo->addAuthor("Michael Thaler", "michael.thal&#x65;&#0114;&#x40;ph&#00121;&#00115;&#x69;k&#46;tu&#045;&#x6d;&#117;&#101;&#x6e;&#99;h&#0101;n&#46;&#00100;&#x65;");
  $appinfo->addAuthor("Casper Boemann", "");
  $appinfo->addAuthor("Sander Koning", "sanderkoning@kde.nl");
  $appinfo->addAuthor("Roger Larsson", "roger.larsson@norran.net");
  $appinfo->addAuthor("Melchior Franz",  "mfranz@kde.org");
  $appinfo->addAuthor("Laurent Montel", "lmontel@mandrakesoft.com");
  $appinfo->addAuthor("Emanuele Tamponi", "emanuele@valinor.it");
  $appinfo->addContributor("Daniel Molkentin", "d&#x61;&#x6e;&#105;&#00109;&#00111;&#0064;kde.or&#x67;", "Bug fixing");
  $appinfo->addContributor("Dirk Sch&ouml;nberger", "", "Keyboard shortcuts, code cleanups");
  $appinfo->addContributor("Thomas Zander", "&#x7a;&#x61;n&#x64;&#101;r&#00064;&#107;&#x64;&#101;&#46;or&#00103;", "Usability consulting, toolbox fixing");
  $appinfo->addContributor("Clarence Dang", "dang at kde dot org", "Shape outline painting");
  $appinfo->addContributor("Alan Horkan", "", "Keyboard shortcuts");
  $appinfo->addContributor("Danny Allen", "", "Tool icons");
  $appinfo->addContributor("Lee Olson", "", "Application icon");
?>