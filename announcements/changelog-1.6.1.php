<?php
  $page_title ='KOffice 1.6.1 Changelog';
  $site_root = '../';
  include("koffice.inc");
  include("header.inc");
?>
<p>
  The following summarizes the major changes to the KOffice Suite since the
  release of KOffice 1.6 (latest stable version). This is mainly a bug fix release, but some <a href="#newfeatures">new feature</a> were added to krita and kexi.
</p>
<ul>
<li><a href="#koffice_libs">KOffice Libraries</a></li>
<li><a href="#kword">KWord</a></li>
<li><a href="#kspread">KSpread</a></li>
<li><a href="#kpresenter">KPresenter</a></li>
<li><a href="#kivio">Kivio</a></li>
<li><a href="#kexi">Kexi</a></li>
<li><a href="#krita">Krita</a></li>
<li><a href="#karbon">Karbon</a></li>
<li><a href="#kplato">KPlato</a></li>
<li><a href="#kchart">KChart</a></li>
<li><a href="#kformula">KFormula</a></li>
<li><a href="#filters">Filters</a></li>
</ul>

<h3 id="newfeatures">New Features</h3>
    <em>Kexi</em>
        <ul>
            <li>Support for declaring parameter queries in Design and SQL view; user is asked for entering value of a parameter in a dialog window before the query is executed.</li>
            <li>Support for Data-aware combo boxes in the Data Table View and Form View, i.e. lookup columns (<a href="http://kexi-project.org/screenshots.html#1.1.1" target="_blank">screenshots</a>. Table Designer provides a tool for defining the lookup columns, i.e. data source for combo boxes (<a href="http://kexi-project.org/wiki/wikiview/index.php?KexiDBLookupColumns#Introduction" target="_blank">details</a>).</li>
        </ul>
    <em>Krita</em>
        <ul>
            <li>Color levels filter</li>
        </ul>

<h3 id="koffice_libs">KOffice Libraries</h3>
<ul>
    <li>Fix compilation with kdelibs-3.3</li>
    <li>Added a slot and a signal to make it possible to set the background/foreground mode and be notified when the mode has changed.</li>
    <li>When a file has an unknown mimetype, don't error out, offer the user the filter chooser dialog instead (<a href="http://bugs.kde.org/135366">bug 135366</a>)</li>
</ul>

<h3 id="kword">KWord</h3>
<p>No changes in KWord</p>

<h3 id="koshell">KOffice Workspace (koshell)</h3>
<p>No changes in KOShell</p>

<h3 id="kspread">KSpread</h3>
<ul>
    <li>kspread crashed when indirect() function used (<a href="http://bugs.kde.org/136326">bug 136326</a>)</li>
    <li>crash due to changing values on a cell (<a href="http://bugs.kde.org/135628">bug 135628</a>)<li>
    <li>fix Bad newline character representation (<a href="http://bugs.kde.org/136181">bug 136181</a>)</li>
    <li>fix undo/redo apparently is not recalculating formulas (<a href="http://bugs.kde.org/128383">bug 128383</a>)</li>
    <li>fixed wrong handling of unary operator before a function(<a href="http://bugs.kde.org/135131">bug 135131</a>)</li>
    <li><em>OpenDocument</em>
    <ul>
        <li>KSpread does not support fixed sheet references yet, so eat the appropriate dollars on import.</li>
        <li>Fix loading of conditional formattings. Load them all.</li>
    </ul>
    </li>
</ul>

<h3 id="kpresenter">KPresenter</h3>

<ul>
    <li>border to the text box when open with OO allways save the stroke property (<a href="http://bugs.kde.org/136595">bug 136595</a>)</li>
    <li>fix time duration of the presentation option is not saved (<a href="http://bugs.kde.org/136364">bug 136364</a>)</li>
    <li>fix total number of pages variable doesn't work (<a href="http://bugs.kde.org/136363">bug 136363</a>)</li>
    <li>Fix compilation on Solaris (<a href="http://bugs.kde.org/135830">bug 135830</a>)</li>
    <li>Use xdg-utils (xdg-screensaver) when available, to enable/disable dpms+screensaver. As a benefit, kpresenter can now disable the gnome-screensaver or xscreensaver too, when not running in kde.</li>
    <li>fix security problem in opening ppt file (CVE-2006-6120)
</ul>

<h3 id="kivio">Kivio</h3>
<ul>
    <li>Fix compilation with kdelibs-3.3</li>
</ul>

<h3 id="kexi">Kexi</h3>
    <em>Main Window</em>
    <ul>
        <li>switch contents of custom property tabs after switching the current tab/window (needed for Table Designer's tab)</li>
        <li>added a warning message box with "Errors encountered during loading plugins" message, controled by dontShowWarningsRelatedToPluginsLoading configuration setting.</li>
        <li>groups and items for nonexisting plugins are not visible now</li>
        <li>accessibility: property editor can be focused using an accelerator key; Alt+2 now focuses main area and Alt+3 focuses Property Editor</li>
    </ul>
    <em>Query Designer</em>
    <ul>
        <li>propery initialize newly appended rows</li>
        <li>fixed setting up sorting in the design view</li>
        <li>fixed setting up string constants as criteria</li>
        <li>show more error messages on opening query in design view (e.g. for unsupported column expressions)</li>
        <li>fixed saving relationships: removed too strict checking for datatypes when crating relationships (signedness)</li>
        <li>refresh design view after a sequence of switches: text view -> data view -> design view</li>
        <li>column sorting is also supported for columns with cleared "visible" flag</li>
        <li>SQL view's section header now provides an accelerator</li>
        <li>fixed retrieving parameters of type Text</li>
    </ul>
    <em>Database Support Library (KexiDB)</em>
    <ul>
        <li>Parser: improved types evaluation for expressions</li>
        <li>kexi__objectdata.o_data field type changed from BLOB to LongText (backward compatible) to improve human-readability</li>
    </ul>
    <em>Forms</em>
    <ul>
        <li>fixed crash when an autofield's subwidget is painted but the parent is about to be deleted</li>
        <li>fixed handling Ctrl+Delete key for "Delete current row" action</li>
        <li>fixed crash when "Esc" key is pressed to "cancel row changes" and a combobox widget is focused</li>
        <li>fixed displaying Date/Time values</li>
        <li>fixed problem with setting "invalid" flag for fields with invalid data source</li>
        <li>database-aware combo box form widget works, improved data displaying, mouse and keyboard handling</li>136688
        <li>display proper record when a new row was saved and user moved to previous record</li>
        <li>fixed validating Big Integer numbers</li>
        <li>displaying dates (e.g. with dd.mm.yyyy format, <a href="http://bugs.kde.org/136688">bug #136688</a>)</li>
        <li>fixed displaying contents "Data Source" property for multiple selections; unnecessary updates removed (GUI is updated only after adding the last widget to the selection)</li>
        <li>fixed displaying properties</li>
        <li>removed crash on close and problems with displaying properties</li>
        <li>do not update the property editor for every form (only one is active anyway)</li>
    </ul>
    <em>Table Designer</em>
    <ul>
        <li>Byte datatype is always set to unsigned now</li>
        <li>"Double precision" datatype is now the default for the floating point type group instead of Float (so we get better precision by default)</li>
        <li>"combo" icon is displayed near the field name that have lookup column defined</li>
        <li>"Lookup column" property tab added to the property pane</li>
    </ul>
    <em>Data Table View</em>
    <ul>
        <li>fixed updating contents of the combobox's internal text editor after pressing F2 or Enter key</li>
        <li>fixed possible crash on application's close</li>
        <li>fixed copying/pasting values from the combo box (visible text is now copied/pasted)</li>
        <li>fixed copying time and date/time values to clipboard</li>
        <li>fixed pasting time, date and date/time values from clipboard</li>
        <li>visible values of types other than text or numbers are properly displayed (including images)</li>
        <li>fixed displaying visible values (usually a text) for lookup columns when there's a default value defined in the referenced table</li>
        <li>better displaying tooltips for columns with lookup data</li>
        <li>sorting columns with lookup data works</li>
        <li>display proper record when a new row was saved and user moved to previous record (thanks to Sander Koning)</li>
        <li>fixed validating Big Integer numbers</li>
        <li>fixed drawing selection highlighting for the horizontal header immediately after scrolling the table</li>
        <li>multivalidator accepts everything by default (this avoids blocking data entry e.g. for text fields that have no specific validator assigned)</li>
    </ul>
    <em>Examples</em>
    <ul>
    <li>Simple_Database.kexi example updated: combo boxes are now used; example data looks better</li>
    </ul>

<h3 id="krita">Krita</h3>

<ul>
    <li>fix errors with the selection bounds (<a href="http://bugs.kde.org/136685">bug #136685</a>)</li>
    <li>fix the layout of a preferences panel and of the blur filter</li>
    <li>re-instate Michael Thaler's superior scaling code for 8 bit cmyk, rgb and cmyk (because it's 8-bit channel dependent)</li>
    <li>remove superfluous "histogram" from labels (<a href="http://bugs.kde.org/136978">bug 136978</a>)</li>
    <li>fix cimg filter spello</li>
    <li>fix the size of the swappiness slider</li>
    <li>in YCbCrs colorspaces: disable profiles, as the only ycbcr profile we have seems to cause a lot more of trouble than it solves, and fix various problem of memory initialization as well (<a href="http://bugs.kde.org/136673">bug 136673</a>)</li>
    <li>fill tool does not fill entire selection if select-all has been used  (<a href="http://bugs.kde.org/135470">bug 135470</a>)</li>
    <li>implement convolution for 16 bit lab</li>
    <li>fix krita keeps producing windows when using Text tool with a tablet stylus (<a href="http://bugs.kde.org/136151">bug 136151</a>)</li>
    <li>fix colorspace independence advertisement in blur, color to alpha, minmax and unsharp mask</li>
    <li>repaint problem in adding semi-transparant text (<a href="http://bugs.kde.org/130607">bug 130607</a>)</li>
    <li>fix brush Shapes toolbar starts with wrong item (<a href="http://bugs.kde.org/130485">bug 130485</a>)</li>
    <li>fix crop tool so clicking outside the image area works (<a href="http://bugs.kde.org/130481">bug 130481</a>)</li>
    <li>emboss with variable depth now doesn't destray alpha data anymore</li>
    <li>optimization in the convolution painter</li>
    <li>fix the bluring with alphaness in a faster way but a little bit more hacky</li>
    <li>fix crash with color to alpha and watercolor (<a href="http://bugs.kde.org/136671">bug 136671</a>)</li>
    <li>don't crash when trying to access a non existent filter (<a href="http://bugs.kde.org/136461">bug 136461</a>)</li>
    <li>fix copy and paste within a group layer causes a crash (<a href="http://bugs.kde.org/133124">bug 133124</a>)</li>
    <li>fix crash when using color range on translated layer (<a href="http://bugs.kde.org/135148">bug 135148</a>)</li>
    <li>fix the fill tool going mad when use with the tablet (<a href="http://bugs.kde.org/133148">bug 133148</a>)</li>
    <li>import/export eps files using graphics magick</li>
    <li>add the forgra CMYK profile (public domain)</li>
    <li>fix of saving indexes pngs(<a href="http://bugs.kde.org/136122">bug 136122</a>)</li>
    <li>optimization in the raindrop filter</li>
    <li>fix doesn't allow to use the float predictor for int images (<a href="http://bugs.kde.org/135649">bug 135649</a>)</li>
    <li>allow reading and writing of float tiff</li>
    <li>disable bicubic and lanczos as they don't work (<a href="http://bugs.kde.org/135656">bug 135656</a>)</li>
    <li>optimization on gradient filling</li>
    <li>associate krita with jpeg, png,... for kdelibs 3.5.5</li>
    <li>optimize painting</li>
</ul>

<h3 id="karbon">Karbon</h3>
<ul>
    <li>fix reading and saving of circles from/to odg (<a href="http://bugs.kde.org/136497">bug 136497</a>)</li>
    <li>check if there are objects selected before attempting to change their fill or stroke</li>
    <li>keep foreground/background mode and colors between color docker and stroke/fill preview in sync</li>
    <li>do not call selectionChanged on all views when a command is executed, only do it within the active view (<a href="http://bugs.kde.org/134900">bug 134900</a>)</li>
    <li>apply the page format and orientation to the printer before printing (<a href="http://bugs.kde.org/135750">bug 135750</a>)</li>
    <li>fix crash after copying image (<a href="http://bugs.kde.org/135746">bug 135746</a>)</li>
</ul>

<h3 id="kplato">KPlato</h3>
<p>No changes in KPlato</p>

<h3 id="kchart">KChart</h3>
<ul>
    <li>Actually set and read the data area (first step towards a fix for <a href="http://bugs.kde.org/134194">bug 134194</a>)</li>
    <li>Fix misinterpretation of the checkbox "first row as label" (<a href="http://bugs.kde.org/128758">bug 128758</a>)</li>
    <li>Work around a bug in the KChartWizardLabelsLegendPage: The wizard does not have a checkbox [x] relative for the font sizes, so we now assume that font sizes are relative in all cases.(<a href="http://bugs.kde.org/124601">bug 124601</a>)</li>
    <li>Fix font issues in the axis labels</li>
    <li>ODF: Save axis titles. Text only, but styles will follow</li>
</ul>

<h3 id="kformula">KFormula</h3>
<ul>
    <li>be more permissive with table loading, since
text nodes may appear</li>
    <li>increase checking while loading MathML / OpenDocument files</li>
    <li>fix loading of old KFO documents embedded in all KWord format</li>
</ul>

<h3 id="kugar">Kugar</h3>

<p>No changes in Kugar</p>

<?php
  include("footer.inc");
?>
