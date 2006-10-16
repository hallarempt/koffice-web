<?php
  $page_title ='KOffice 1.6 Pressemitteilung';
  $site_root = '../';
  include("koffice.inc");
  include("header.inc");
?>

<p align="justify">
  DATUM 16. Oktober 2006
</p>

<p>ZUR SOFORTIGEN VERÖFFENTLICHUNG</>
<!-- <p>ACHTUNG: NICHT ZUR VERÖFFENTLICHUNG BESTIMMT!<p  -->

<?php include("languages-1.6.inc"); ?>
<h2>
  Das KDE Projekt veröffentlicht neue Version des freien, integrierten Pakets von Büroanwendungen
</h2>
<p align="justify">
  <p align="justify">Das Internet, 16. Oktober 2006.
  Das <a href="http://www.kde.org/">KDE Projekt</a> gab heute die sofortige Verfügbarkeit von <a href="http://www.koffice.org/">KOffice</a> Version 1.6, der <a href="http://developer.kde.org/development-versions/koffice-1.6-release-plan.html">lange erwarteten</a> Version mit zahlreichen und grundlegenden Neuerungen, bekannt.</p>

<h2>Bemerkenswerte Neuerungen und Änderungen</h2>
<p align="justify">
  Ein Großteil der Anstrengungen des KOffice-Entwicklerteams konzentriert sich derzeit auf die zukünftige Version 2.0, welche auf KDE 4 und Qt 4 basieren wird. Diese Version bringt hauptsächlich Änderungen und Neuerungen bei den sich am schnellsten entwickelnden Komponenten - Krita und Kexi - mit sich. Natürlich werden aber auch die anderen Komponenten des Programmpakets weiterentwickelt, in einigen Fällen mit erstaunlichen Ergebnissen. Nachfolgend finden sich die Höhepunkte dieser Version:
</p>

<h3>Krita wird für Bildbearbeitung auf professioneller Ebene benutzbar</h3>
<p align="justify">
  Mit dieser Version wird <a href="http://www.koffice.org/krita/">Krita</a> für Bildbearbeitung auf professioneller Ebene benutzbar. Das Programm und dessen Entwicklerteam gewannen den "Preis für das beste Programm" auf der diesjährigen KDE-Konferenz in Dublin. Mit Funktionen wie magnetischer Auswahl, Effekt-Ebenen, Unabhängigkeit von Farbmodellen und vollständiger Steuerbarkeit durch Skripte hat sich Krita zu einem der besten freien Bildbearbeitungsprogramme, die derzeit erhältlich sind, entwickelt. Für nähere Informationen werfen Sie bitte einen Blick auf die Liste der nennenswerten Neuerungen unten, oder die vollständige <a href="http://www.koffice.org/announcements/changelog-1.6.php">Liste der Änderungen</a>.
</p>
<h3>Kexi mit zahlreichen, neuen Funktionen</h3>
<p align="justify">
    Kexi, die "Datenbankanwendung für Jedermann", direkter Kontrahent von MS Access, ist das zweite Programm aus dem KOffice-Paket, von dem gesagt wird, es sei das Beste seiner Art. Seit Version 1.0 (KOffice 1.5) hat Kexi über 270 Neuerungen erfahren. Mit dieser Version bekommt Kexi Funktionen wie die Fähigkeit <a href="http://www.kdedevelopers.org/node/2163">Bilder zu verarbeiten</a>, <a href="http://www.kexi.pl/media/en/compact_db/">Datenbanken zu komprimieren</a>, automatische Dateityp-Erkennung und vollständige Steuerbarkeit durch Skripte mittels Kross. Innerhalb des Programms finden sich noch zahlreiche weitere Änderungen und Neuerungen, die einerseits neue Funktionen bieten, andererseits das Programm benutzerfreundlicher machen.
</p>

<h3>KFormula unterstützt OpenDocument und MathML</h3>
<p align="justify">
  Der Formeleditor von KOffice unterstützt jetzt OpenDocument und MathML und verwendet diese als Standard-Dateiformat. Mit einer Punktzahl von 70 % im <a href="http://www.w3.org/Math/testsuite">W3C MathML Test</a> überholt KFormula damit OpenOffice.org Formula (das entsprechende Programm des OpenOffice.org-Büropakets), welches nur 22 % erreichte. Das KOffice-Team sieht in dieser Tatsache ein gutes Beispiel dafür, wie sich die gut strukturierte Code-Basis von Koffice bezahlt macht, um Unterstützung für existierende Standards bieten zu können.
</p>

<h3>Steuerbarkeit durch Skripte für KSpread, Krita and Kexi</h3>
<p align="justify">
    KOffice 1.6 hebt die Steuerbarkeit von Programmen durch Skripte auf eine neue Ebene. Die Steuerbarkeit der Programme durch Skripte wird durch die sogenannte "Skript-Brücke" <a href="http://dot.kde.org/1152490640/">Kross</a> implementiert, welche es möglich macht, Skripte für KOffice in Python und Ruby zu schreiben. Unterstützung für Skripte in Javascript und Java ist geplant. Mit dieser Version macht KOffice es möglich, Skripte unabhängig von der Benutzeroberfläche zu machen, um zum Beispiel Datenblätter in einer Tabellenkalkulation automatisch zu verändern, was eine Vielzahl von <a href="http://www.robweir.com/blog/2006/09/odf-twenty-patterns-of-use.html">neuen Anwendungsmöglichkeiten</a> eröffnet.
</p>

<h2>
  Nennenswerte Neuerungen und Änderungen
</h2>
<p align="justify">
  Nennenswerte Änderungen von KOffice Version 1.6 gegenüber Version 1.5 sind:
</p>
    <strong>KSpread</strong>:
    <ul type="disc">
      <li>
        <div align="justify">
        Ist jetzt mittels Kross durch Skripte steuerbar.
        </div>
      </li>
    </ul>
  <p />
    <strong>Kexi (Datenbankanwendung)</strong>:
    <ul type="disc">
      <li>
        <div align="justify">
        Verbesserungen in der Programmbibliothek für Datenbankverbindungen.
        </div>
      </li>
      <li>
        <div align="justify">
      Verbesserungen des Tabellen-Designers: "Bild"-Datentyp, Rückgängig- und Wiederherstellen-Funktion, Unterstützung für Standardwerte, sowie Kurzhilfe.
        </div>
      </li>
      <!-- li>
        <div align="justify">
        Data aware combo boxes (drop down lists)
        </div>
      </li -->
      <li>
        <div align="justify">
       Verbesserungen des Abfragen-Designers: Einstellbare Sortier-Reihenfolge in beiden Ansichten (Visuell und SQL).
        </div>
      </li>
      <li>
        <div align="justify">
        "Bilder-Fenster" in der Formular- und Tabellenansicht, sowie grundlegende Verbesserungen im "Auto-Feld-Fenster".
         </div>
        </div>
      </li>
      <!-- li>
        <div align="justify">
        Support for macros
        </div -->
      </li>
    </ul>
  <p />
    <strong>Krita (Pixel-basiertes Bildbearbeitsungsprogramm)</strong>:
    <ul type="disc">
      <li>
        <div align="justify">
        Krita enthält jetzt eine Perspektivenfunktion, die unter anderem Perspektiventransformation, Perspektivengitter und das Klonen von Perspektiven unterstützt.
        </div>
      </li>
      <li>
        <div align="justify">
        Unterstützung für Ebenenmasken wurde hinzugefügt.
        </div>
      </li>
      <li>
        <div align="justify">
        Folgende, neue Filter wurden hinzugefügt: "zufälliges Geräusch", "zufällige Auswahl", "Linsenkorrektur", sowie weitere Filter aus Krita-Erweiterungen ...
        </div>
      </li>
      <li>
        <div align="justify">
        Krita verfügt jetzt über ein magntetisches Auswahlwerkzeug für Bildteile.
        </div>
      </li>

      <li>
        <div align="justify">
        Krita kann jetzt PDF-Dateien öffnen und in Bitmap-Dateien umwandeln.
        </div>
      </li>
      <li>
        <div align="justify">
        Eine neue Funktion die es ermöglicht Bezierkurven zu zeichnen wurde implementiert.
        </div>
      </li>
    </ul>
  <p />
    <strong>KPlato (Projektmanagement-Software)</strong>:
    <ul type="disc">
      <li>
        <div align="justify">
        PERT-Berechnung für geschätzte Werte basierend auf optimistischen, anzunehmenden und pessimistischen Variablen wurde hinzugefügt.
        </div>
      </li>
      <li>
        <div align="justify">
        Die "Risk"-Einstellungen hängen nun von der verwendeten Distribution ab.
        </div>
      </li>
    </ul>
  <p />
    <strong>KFormula (Mathematischer Formeleditor)</strong>
    <ul type="disc">
      <li>
        <div align="justify">
        OpenDocument und MathML werden unterstützt, wobei OpenDocument das Standard-Dateiformat ist.
        </div>
      </li>
      <li>
        <div align="justify">
        Die Liste der unterstützten Elemente: mi, mn, mtext, ms, mstyle, msqrt, mroot, mfrac, mrow (eventuell funktionieren auch noch weitere)
        </div>
      </li>
      <li>
        <div align="justify">
        Liste der unterstützen Stilangaben: mathcolor, mathbackground, mathsize, mathvariant
        </div>
      </li>
    </ul>
  <p />
    <strong>Kugar (Berichterstellung-Software)</strong>:
    <ul type="disc">
      <li>
        <div align="justify">
        Die in Kugar verfügbaren Vorlagen sind jetzt im Start-Fenster sichtbar.
        </div>
      </li>
    </ul>
  <p />
<p align="justify">
  Eine detailliertere 
  <a href="http://www.koffice.org/announcements/changelog-1.6.php">Liste der Änderungen</a> findet sich auf der KOffice-<a href="http://www.koffice.org/">Internetpräsenz</a>.
</p>

<h2>Über KOffice</h2>
  <p align="justify">
    KOffice ist ein integriertes Paket von Büroprogrammen für KDE, welches freie und offene Standards für seine Dateiformate, Kommunikation der einzelnen Komponenten miteinander und Komponentenintegraton verwendet.
  </p>
  <p align="justify">
    Diese Version beinhaltet folgende Programme:
</p>
<ul>
  <li>eine Rahmen-basierte Textverarbeitung
    (<a href="http://www.koffice.org/kword/">KWord</a>)
  </li>
  <li>eine Tabellenkalkulation
    (<a href="http://www.koffice.org/kspread/">KSpread</a>)
  </li>
  <li>ein Programm für Folien-Präsentationen
    (<a href="http://www.koffice.org/kpresenter/">KPresenter</a>)
  </li>
  <li>ein Programm für Flussdiagramme und Diagrammbearbeitung
    (<a href="http://www.thekompany.com/projects/kivio/">Kivio</a>)
  </li>
  <li>eine integrierte Datenbankanwendung
    (<a href="http://www.koffice.org/kexi/">Kexi</a>)
  </li>
  <li>eine neue Projektmanagement-Software
    (<a href="http://www.koffice.org/kplato/">KPlato</a>)
  </li>
  <li>ein Pixel-basiertes Bildbearbeitungs- und Zeichen-Programm
    (<a href="http://www.koffice.org/krita/">Krita</a>)
  </li>
  <li>sowie ein Vektorgrafik-Programm
    (<a href="http://www.koffice.org/karbon/">Karbon14</a>)
  </li>
</ul>
<p>
  Zusätzlich dazu enthält KOffice noch folgende, einbindbare Objekte:
</p>
<ul>
  <li>für den Büroalltag geeignete Berichterstellungs-Software
    (<a href="http://www.thekompany.com/projects/kugar/">Kugar</a>)
  </li>
  <li>komplette Tabellen-Engine
    (<a href="http://www.koffice.org/kchart/">KChart</a>)
  </li>
  <li>Verarbeitung mathematischer Formeln
    (<a href="http://www.koffice.org/kformula/">KFormula</a>)
  </li>
</ul>
<p>
  Weiterhin noch einen eingebauten Thesaurus (KThesaurus) und Unterstützung für zahlreiche, verschiedene <a href="http://www.koffice.org/filters/1.6/">Dateiformate</a>.
</p>
<p align="justify">
  KOffice und alle zum Programmpaket gehörigen Komponenten (inklusive KDE) sind <em><strong>gratis</strong></em> unter Open-Source-Lizenzen von den KDE <a href="http://download.kde.org/unstable/koffice-1.6/">HTTP- und FTP-Spiegelservern</a> beziehbar.
</p>
<hr />

<h3>
  Firmen die KOffice unterstützen
</h3>
<p align="justify">
  Neben der ausgezeichneten, freiwilligen Arbeit der
  <a href="http://www.koffice.org/people.php">KOffice-Entwickler</a>
  selbst, haben folgende Firmen einen nennenswerten Beitrag zur KOffice-Entwicklung geliefert:
  <a href="http://www.mandriva.com/">Mandriva</a> (bietet Unterstützung für KOffice-Entwickler Laurent Montel),
  <a href="http://www.trolltech.com/">Trolltech</a> (bietet Unterstützung für KOffice-Entwickler David Faure),
  <a href="http://www.thekompany.com/">theKompany.com</a> (steuerten Kivio und Kugar zu KOffice bei),
  <a href="http://www.klaralvdalens-datakonsult.se/">Klar&auml;lvdalens
  Datakonsult AB</a> (steuerten KChart zu KOffice bei),
  <a href="http://www.openoffice.com.pl/en/">OpenOffice Polska</a> (Arbeitgeber von Kexi-Entwickler Jaros&#322;aw Staniek und Sponsor des <a href="http://wiki.kde.org/tiki-index.php?page=KDElibs+for+win32">"KDElibs für Win32"</a>-Projekts, welches es möglich machte KOffice-Programme auf MS Windows zu portieren) und
  <a href="http://code.google.com">Google</a> (unterstützen Alfredo Beaumont bei seiner Arbeit an OpenDocument- und MathML-Unterstützung in KFormula und Emmanuele Tamponi bei seiner Arbeit an einem "Kurven-Programm" für Krita durch das "Summer of Code"-Programm).
  Zusätzlich haben noch etliche, <a href="http://www.kde.org/donations.html">private Sponsoren</a> (<a href="http://www.kde.org/support/">KOffice durch eine Spende unterstützen</a>),
  ihren Beitrag zu KDE und KOffice geleistet. Danke vielmals!
</p>

<p align="justify">
  <font size="2">
  <em>Pressemitteilung</em> verfasst von Inge Wallin, übersetzt ins Deutsche von Patrick Trettenbrein.
  </font>
</p>
<p align="justify">
  <font size="2">
  <em>Markenrechtshinweise</em>

  KDE<sup>&#174;</sup> und das K Desktop Environment<sup>&#174;</sup> sind eingetragene Warenzeichen des KDE e.V.

  Linux ist ein eingetragenes Warenzeichen von Linus Torvalds.

  Trolltech und Qt sind eingetragene Warenzeichen von Trolltech AS.

  UNIX ist ein eingetragenes Warenzeichnen von The Open Group in den Vereinigten Staaten und anderen Ländern.

  Alle anderen in dieser Pressemitteilungen genannten Warenzeichen sind Eigentum der jeweiligen Besitzer.
  </font>
</p>
<hr />


<h2>Pressekontaktdaten</h2>
<table cellpadding="10"><tr valign="top">
<td>

<b>Afrika</b><br />
Uwe Thiem<br />
P.P.Box 30955<br />
Windhoek<br />
Namibia<br />
Phone: +264 - 61 - 24 92 49<br />
<a href="&#109;a&#105;l&#116;o:&#105;&#110;fo-&#0097;&#0102;r&#105;&#99;a&#x40;k&#100;e.&#111;&#x72;g">info-africa kde.org</a><br />
</td>

<td>
<b>Asien und Indien</b><br />
     Pradeepto Bhattacharya<br/>
     A-4 Sonal Coop. Hsg. Society<br/>
     Plot-4, Sector-3,<br/>
     New Panvel,<br/>
     Maharashtra.<br/>
     India 410206<br/>
     Phone : +91-9821033168<br/>
<a href="ma&#0105;&#108;to&#00058;inf&#00111;-&#97;&#115;&#x69;a&#x40;kde.or&#x67;">info-asia kde.org</a>
</td>
</tr>
<tr valign="top">

<td>
<b>Europa</b><br />
Inge Wallin<br />
Adamstorpsvägen 3<br />
SE-590 71 Ljungsbro<br />
Sweden<br />
Phone: +46-13-290853<br />
Fax: +46-13-214700<br />
<a href="m&#x61;il&#0116;o&#x3a;i&#x6e;fo-&#00101;&#00117;rope&#64;k&#x64;&#x65;&#00046;o&#x72;&#00103;">info-europe kde.org</a>
</td>

<td>
<b>Nordamerika</b><br />
George Staikos <br />
889 Bay St. #205 <br />
Toronto, ON, M5S 3K5 <br />
Canada<br />
Phone: (416)-925-4030 <br />
<a href="&#109;ai&#x6c;&#x74;&#x6f;&#0058;i&#x6e;&#0102;o&#0045;no&#0114;t&#104;&#0097;m&#x65;&#x72;i&#x63;&#x61;&#x40;k&#x64;e&#46;&#0111;&#x72;&#x67;">info-northamerica kde.org</a><br />
</td>

</tr>

<tr>
<td>
<b>Ozeanien</b><br />
Hamish Rodda<br />
11 Eucalyptus Road<br />
Eltham VIC 3095<br />
Australia<br />
Phone: (+61)402 346684<br />
<a href="&#109;&#x61;&#x69;&#x6c;&#x74;o:&#105;&#x6e;fo&#45;&#x6f;c&#101;&#x61;&#110;ia&#064;kde&#00046;org">info-oceania kde.org</a><br />
</td>

<td>
<b>Südamerika</b><br />
Helio Chissini de Castro<br />
R. Jos&eacute; de Alencar 120, apto 1906<br />
Curitiba, PR 80050-240<br />
Brazil<br />
Phone: +55(41)262-0782 / +55(41)360-2670<br />
<a href="ma&#105;&#x6c;&#116;&#x6f;&#x3a;&#0105;&#110;&#102;&#x6f;-&#00115;&#111;ut&#104;&#97;&#x6d;e&#0114;&#x69;ca&#0064;&#107;d&#x65;.&#111;r&#x67;">info-southamerica kde.org</a><br />
</td>

</tr></table>

<?php
  include("footer.inc");
?>
