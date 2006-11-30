<?php
  $page_title ='KOffice 1.6.1 Changelog';
  $site_root = '../';
  include("koffice.inc");
  include("header.inc");
?>
<p>
  The following summarizes the major changes to the KOffice suite since the
  release of KOffice 1.6 (latest stable version). This is mainly a bug fix 
  release, but some <a href="#newfeatures">new feature</a> were added to krita
   and kexi.
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
<!-- <li><a href="#filters">Filters</a></li> -->
</ul>

<h3 id="security">Security Fixes</h3>
    <em>KPresenter Import Filter for PowerPoint</em>
        <ul>
	<li>There is a security issue in the import filter for MS
    Powerpoint, that is fixed with this release.  Every KOffice user
    should upgrade to 1.6.1 for this reason alone. </li>
        </ul>

<h3 id="newfeatures">New Features</h3>
    <em>Kexi</em>
        <ul>
            <li>Support for declaring parameter queries in Design and SQL view; user is asked for entering value of a parameter in a dialog window before the query is executed.</li>
            <li>Support for Data-aware combo boxes in the Data Table View and Form View, i.e. lookup columns (<a href="http://kexi-project.org/screenshots.html#1.1.1" target="_blank">screenshots</a>). Table Designer provides a tool for defining the lookup columns, i.e. data source for combo boxes (<a href="http://kexi-project.org/wiki/wikiview/index.php?KexiDBLookupColumns#Introduction" target="_blank">details</a>).</li>
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
    <li>Kspread crashed when indirect() function used (<a href="http://bugs.kde.org/136326">bug 136326</a>)</li>
    <li>Crash due to changing values on a cell (<a href="http://bugs.kde.org/135628">bug 135628</a>)<li>
    <li>Fix bad newline character representation (<a
href="http://bugs.kde.org/136181">bug 136181</a>)</li>
    <li>Fix undo/redo apparently is not recalculating formulas (<a href="http://bugs.kde.org/128383">bug 128383</a>)</li>
    <li>Fix wrong handling of unary operator before a function (<a href="http://bugs.kde.org/135131">bug 135131</a>)</li>
    <li><em>OpenDocument</em>
    <ul>
        <li>KSpread does not support fixed sheet references yet, so eat the appropriate dollars on import.</li>
        <li>Fix loading of conditional formattings. Load them all.</li>
    </ul>
    </li>
</ul>

<h3 id="kpresenter">KPresenter</h3>

<ul>
    <li>Border to the text box when open with OO always save the stroke property (<a href="http://bugs.kde.org/136595">bug 136595</a>)</li>
    <li>Fix time duration of the presentation option is not saved (<a href="http://bugs.kde.org/136364">bug 136364</a>)</li>
    <li>Fix total number of pages variable doesn't work (<a href="http://bugs.kde.org/136363">bug 136363</a>)</li>
    <li>Fix compilation on Solaris (<a href="http://bugs.kde.org/135830">bug 135830</a>)</li>
    <li>Use xdg-utils (xdg-screensaver) when available, to enable/disable dpms+screensaver. As a benefit, kpresenter can now disable the gnome-screensaver or xscreensaver too, when not running in kde.</li>
    <li>Fix security problem in opening ppt file (CVE-2006-6120)
</ul>

<h3 id="kivio">Kivio</h3>
<ul>
    <li>Fix compilation with kdelibs-3.3</li>
</ul>

<h3 id="kexi">Kexi</h3>
    <em>Main Window</em>
    <ul>
        <li>Switch contents of custom property tabs after switching the current tab/window (needed for Table Designer's tab)</li>
        <li>Added a warning message box with &quot;Errors encountered during loading plugins&quot; message, controlled by dontShowWarningsRelatedToPluginsLoading configuration setting</li>
        <li>Groups and items for nonexisting plugins are not visible now</li>
        <li>Accessibility: property editor can be focused using an accelerator key; Alt+2 now focuses main area and Alt+3 focuses Property Editor</li>
    </ul>
    <em>Query Designer</em>
    <ul>
        <li>Propery initialize newly appended rows</li>
        <li>Fix setting up sorting in the design view</li>
        <li>Fix setting up string constants as criteria</li>
        <li>Show more error messages on opening query in design view (e.g. for unsupported column expressions)</li>
        <li>Fix saving relationships: removed too strict checking for datatypes when creating relationships (signedness)</li>
        <li>Refresh design view after a sequence of switches: text view -> data view -> design view</li>
        <li>Column sorting is also supported for columns with cleared &quot;visible&quot; flag</li>
        <li>SQL view's section header now provides an accelerator</li>
        <li>Fix retrieving parameters of type Text</li>
    </ul>
    <em>Database Support Library (KexiDB)</em>
    <ul>
        <li>Parser: improved types evaluation for expressions</li>
        <li>kexi__objectdata.o_data field type changed from BLOB to LongText (backward compatible) to improve human-readability</li>
    </ul>
    <em>Forms</em>
    <ul>
        <li>Fix crash when an autofield's subwidget is painted but the parent is about to be deleted</li>
        <li>Fix handling of Ctrl+Delete shortcut for &quot;Delete current row&quot; action</li>
        <li>Fix crash when &quot;Esc&quot; key is pressed to &quot;cancel row changes&quot; and a combobox widget is focused</li>
        <li>Fix displaying Date/Time values</li>
        <li>Fix problem with setting &quot;invalid&quot; flag for fields with invalid data source</li>
        <li>Database-aware combo box form widget works, improved data displaying, mouse and keyboard handling (<a href="http://bugs.kde.org/136688">bug 136688</a>)</li>
        <li>Display proper record when a new row was saved and user moved to previous record</li>
        <li>Fix validating Big Integer numbers</li>
        <li>Displaying dates (e.g. with dd.mm.yyyy format, <a href="http://bugs.kde.org/136688">bug 136688</a>)</li>
        <li>Fix displaying contents &quot;Data Source&quot; property for multiple selections; unnecessary updates removed (GUI is updated only after adding the last widget to the selection)</li>
        <li>Fix displaying properties</li>
        <li>Remove crash on close and problems with displaying properties</li>
        <li>Do not update the property editor for every form (only one is active anyway)</li>
    </ul>
    <em>Table Designer</em>
    <ul>
        <li>Byte datatype is always set to unsigned now</li>
        <li>&quot;Double precision&quot; datatype is now the default for the floating point type group instead of Float (so we get better precision by default)</li>
        <li>&quot;combo&quot; icon is displayed near the field name that have lookup column defined</li>
        <li>&quot;Lookup column&quot; property tab added to the property pane</li>
    </ul>
    <em>Data Table View</em>
    <ul>
        <li>Fix updating contents of the combobox's internal text editor after pressing F2 or Enter key</li>
        <li>Fix possible crash on application's close</li>
        <li>Fix copying/pasting values from the combo box (visible text is now copied/pasted)</li>
        <li>Fix copying time and date/time values to clipboard</li>
        <li>Fix pasting time, date and date/time values from clipboard</li>
        <li>Visible values of types other than text or numbers are properly displayed (including images)</li>
        <li>Fix displaying visible values (usually a text) for lookup columns when there's a default value defined in the referenced table</li>
        <li>Better displaying tooltips for columns with lookup data</li>
        <li>Sorting columns with lookup data works</li>
        <li>Display proper record when a new row was saved and user moved to previous record (thanks to Sander Koning)</li>
        <li>Fix validating Big Integer numbers</li>
        <li>Fix drawing selection highlighting for the horizontal header immediately after scrolling the table</li>
        <li>Multivalidator accepts everything by default (this avoids blocking data entry e.g. for text fields that have no specific validator assigned)</li>
    </ul>
    <em>Examples</em>
    <ul>
    <li>Simple_Database.kexi example updated: combo boxes are now used; example data looks better</li>
    </ul>

<h3 id="krita">Krita</h3>

<ul>
    <li>Fix errors with the selection bounds (<a href="http://bugs.kde.org/136685">bug 136685</a>)</li>
    <li>Fix the layout of a preferences panel and of the blur filter</li>
    <li>Re-instate Michael Thaler's superior scaling code for 8 bit cmyk, rgb and cmyk (because it's 8-bit channel dependent)</li>
    <li>Remove superfluous &quot;histogram&quot; from labels (<a href="http://bugs.kde.org/136978">bug 136978</a>)</li>
    <li>Fix cimg filter spello</li>
    <li>Fix the size of the swappiness slider</li>
    <li>In YCbCrs colorspaces: disable profiles, as the only ycbcr profile we have seems to cause a lot more of trouble than it solves, and fix various problem of memory initialization as well (<a href="http://bugs.kde.org/136673">bug 136673</a>)</li>
    <li>Fill tool does not fill entire selection if select-all has been used  (<a href="http://bugs.kde.org/135470">bug 135470</a>)</li>
    <li>Implement convolution for 16 bit lab</li>
    <li>fix krita keeps producing windows when using Text tool with a tablet stylus (<a href="http://bugs.kde.org/136151">bug 136151</a>)</li>
    <li>Fix colorspace independence advertisement in blur, color to alpha, minmax and unsharp mask</li>
    <li>Repaint problem in adding semi-transparant text (<a href="http://bugs.kde.org/130607">bug 130607</a>)</li>
    <li>Fix brush Shapes toolbar starts with wrong item (<a href="http://bugs.kde.org/130485">bug 130485</a>)</li>
    <li>Fix crop tool so clicking outside the image area works (<a href="http://bugs.kde.org/130481">bug 130481</a>)</li>
    <li>Emboss with variable depth now doesn't destroy alpha data anymore</li>
    <li>Optimization in the convolution painter</li>
    <li>Fix the bluring with alphaness in a faster way but a little bit more hacky</li>
    <li>Fix crash with color to alpha and watercolor (<a href="http://bugs.kde.org/136671">bug 136671</a>)</li>
    <li>Don't crash when trying to access a non existent filter (<a href="http://bugs.kde.org/136461">bug 136461</a>)</li>
    <li>Fix copy and paste within a group layer causes a crash (<a href="http://bugs.kde.org/133124">bug 133124</a>)</li>
    <li>Fix crash when using color range on translated layer (<a href="http://bugs.kde.org/135148">bug 135148</a>)</li>
    <li>Fix the fill tool going mad when use with the tablet (<a href="http://bugs.kde.org/133148">bug 133148</a>)</li>
    <li>Import/export eps files using graphics magick</li>
    <li>Add the forgra CMYK profile (public domain)</li>
    <li>Fix of saving indexed pngs (<a href="http://bugs.kde.org/136122">bug 136122</a>)</li>
    <li>Optimization in the raindrop filter</li>
    <li>Fix doesn't allow to use the float predictor for int images (<a href="http://bugs.kde.org/135649">bug 135649</a>)</li>
    <li>Allow reading and writing of float tiff</li>
    <li>Disable bicubic and lanczos as they don't work (<a href="http://bugs.kde.org/135656">bug 135656</a>)</li>
    <li>Optimization on gradient filling</li>
    <li>Associate krita with jpeg, png,... for kdelibs 3.5.5</li>
    <li>Optimize painting</li>
</ul>

<h3 id="karbon">Karbon</h3>
<ul>
    <li>Fix reading and saving of circles from/to odg (<a href="http://bugs.kde.org/136497">bug 136497</a>)</li>
    <li>Check if there are objects selected before attempting to change their fill or stroke</li>
    <li>Keep foreground/background mode and colors between color docker and stroke/fill preview in sync</li>
    <li>Do not call selectionChanged on all views when a command is executed, only do it within the active view (<a href="http://bugs.kde.org/134900">bug 134900</a>)</li>
    <li>Apply the page format and orientation to the printer before printing (<a href="http://bugs.kde.org/135750">bug 135750</a>)</li>
    <li>Fix crash after copying image (<a href="http://bugs.kde.org/135746">bug 135746</a>)</li>
</ul>

<h3 id="kplato">KPlato</h3>
<p>No changes in KPlato</p>

<h3 id="kchart">KChart</h3>
<ul>
    <li>Actually set and read the data area (first step towards a fix for <a href="http://bugs.kde.org/134194">bug 134194</a>)</li>
    <li>Fix misinterpretation of the checkbox "first row as label" (<a href="http://bugs.kde.org/128758">bug 128758</a>)</li>
    <li>Work around a bug in the KChartWizardLabelsLegendPage: The wizard does not have a checkbox [x] relative for the font sizes, so we now assume that font sizes are relative in all cases (<a href="http://bugs.kde.org/124601">bug 124601</a>)</li>
    <li>Fix font issues in the axis labels</li>
    <li>ODF: Save axis titles. Text only, but styles will follow</li>
</ul>

<h3 id="kformula">KFormula</h3>
<ul>
    <li>Be more permissive with table loading, since
text nodes may appear</li>
    <li>Increase checking while loading MathML / OpenDocument files</li>
    <li>Fix loading of old KFO documents embedded in all KWord format</li>
</ul>

<h3 id="kugar">Kugar</h3>

<p>No changes in Kugar</p>

<?php
  include("footer.inc");
?>
