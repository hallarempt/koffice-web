<?php
  $page_title="Filters FAQ";
  $site_root = '../';
  include("koffice.inc");
  include("header.inc");
?>

<?php
$faq = new FAQ();
$faq->addQuestion("Do we really need filters", "<p>In my opinion we definitely need filters because an important factor influencing the success of an office suite is the ability to import and export documents. Of course this is not critical stuff like printing or a nice and straightforward use interface, but it's not just a &quot;nice-to-have&quot; feature, either.</p>
<p>Just imagine a user working in a heterogenous environment using KOffice among other office suites. Sometimes it is necessary to exchange documents as we all know. Now the adventure begins:</p>
<ul>
<li> Which format do I use (i.e. Which format is supported by both office suites)?</li>
<li>How much information is lost due to internal differences between the office suites (e.g. formatting, tables, pictures, columns,...)?</li>
<li>What about the character sets (i.e. the encoding of umlauts and so on)?</li>
<li>Can I use Unicode characters in the other office suite?</li>
</ul>
<p>Another problem is that some vendors of proprietary office suites provide inaccurate and/or incomplete documentation of the file formats (or no information at all). This is one of the obstacles we face because it's really time consuming to search for information in a binary file as you can imagine... (At this place I'd like to thank Espen Sand for his brillant KHexEditor <i>(should be on your hard disk already if you installed the <b>kdeutils</b> package).</i>
</p>");
$faq->addQuestion("Which filters are there?", "Please have a look at the <a href="status.phtml">status page</a> for all available filters. Please note that this page reflects the state of current development. This means that some filters might not be in the latest release.");
$faq->addQuestion("Which filters are most wanted?", "Please refer to our <a href="todo.phtml">pending and most wanted filters</a>.");
$faq->addQuestion("How to use a filter?", "
<p>The KOffice Library Developers have done a good job and you will not even notice when you use a filter to convert a file to the part's native format. OK, you can see it (debug output), but there is no difference for you at all. Just select <br />
<code><b><i>File -> Open...</i></b></code> for import or <br />
<code><b><i>File -> Save</i></b></code> or
<code><b><i>File -> Save As...</i></b></code>
for export <br />
and choose the filter which should be used. If you import files with a known mime type (that means, konqueror tells you the correct type of the file) you don't even have to select the appropriate filter. Select (or name, in case of saving) the file and off you go.");
$faq->addSection("Developing Filters for KOffice");
$faq->addQuestion("Prepare the Environment",
"<p>As the development version of KOffice needs KDE 3 it's necessary to install at least parts of <b>KDE 3</b>
(<b><i>Qt 3, kdesupport, arts, kdelibs, kdebase - in this order</i></b>) and - of course - <b><i>KOffice</i></b>.
I recommend looking for further information on <a href=\"http://www.koffice.org/install-source.phtml\" how to install</a>
it. To get some help from real KOffice experts please <a href=\"http://www.kde.org/contact.html\">join the KOffice or the KOffice-Devel
mailing lists</a> (koffice@kde.org and koffice-devel@kde.org). There is an archive of those lists and you can find them all at
<a href="http://lists.kde.org">http://lists.kde.org</a>.<br />
One final hint: Add <code><b><i>-debug</i></b></code> to your
<code><b><i>./configure </i></b></code> options for Qt and
<code><b><i>--enable-debug</i></b></code> to your
<code><b><i>./configure</i></b></code> options for the kdelibs and koffice packages.
The resulting
binaries are quite large and a little bit slower, but nonetheless this
is an enormous help if you are developing and debugging something.</p>
<p>Oh, and use <a href="ftp://ftp.gnu.org/pub/gnu/gdb/"><b>gdb-5.0</b></a>
or later, because gdb-4.x always crashed on KOffice stuff (at least for me).</p>
");
$faq->addQuestion("Behind the Scenes",
"<p>There are several ways for programming a filter depending on your
needs. However, unless you <i>really</i> need a non-standard filtering
method (e.g. because you'd like to import huge amounts of data and the
performance is bad, or if you want to import embedded files, too) we
recommend using the plain and easy standard method. All the following
descriptions are based on the assumption that
you use the standard filtering method. The gory details about the
optimized (read: hacky) methods of filtering are provided at the bottom
of this page (Note: I didn't add a link, because you at least have to
<i>scroll</i> the standard description.)</p>
<p>KOffice uses a quite straightforward approach to convert files to the
native format of the matching KOffice part. I'll try to explain this
via a simple example (from the user's point of view):</p>
<ol>
<li>The user activates <code><b><i>File -> Open...</i></b></code></li>
<li>The file dialog pops up</li>
<li>She/He selects a file type (also called mime type) (e.g. Rich Text Format)</li>
<li>Now the file dialog shows only the matching files</li>
<li>Depending on the filter, the user might see a preview of the
file contents (optional).</li>
<li>After selecting a file she/he presses <code><b><i>OK</i></b></code></li>
<li>The filter converts the file to the native format of the application.
Note that some filters pop up a configuration dialog at this stage
to query the user for e.g. a password or encoding hints.</li>
<li>The KOffice application opens the native file</li>
</ol>

<p>When saving documents the filtering works nearly identical. The whole
process of looking for available filters, choosing the best one, invoking
it,... is done by the KOffice Libraries so you don't have to worry about
that.</p>
<p>Filters are <i>shared libs</i> which are opened on demand (via
KLibLoader, which is a wrapper for dlopen) and closed after a few
minutes of inactivity (so that we don't waste too much memory).
All the filters have to inherit <code><b><i>KoFilter</i></b></code>
(koffice/lib/kofficecore/koFilter.h) and they have to override the
pure virtual method <code><b><i>convert(...)</i></b></code>. This
method is called by the filter manager and the filter should start
to convert the file (i.e. open the file, read it, convert the contents,
write it back to the disk).</p>
");
$faq->addQuestion("How to Develop a Filter?", "
      <p>Please download the <a href="template.tar.gz">filter template</a> first.
      Then follow this step-by-step guidelines to set up your own filter:</p>
      <ol>
        <li>Untar the template somewhere in the koffice/filters directory
            (For this example we assume koffice/filters/template).</li>
        <li>If your copy of KOffice is configured already you just have to
            call <code>create_makefile filters/template</code> from the
            toplevel koffice directory. This should create a Makefile from your
            Makefile.am in the template. If this fails due to a missing
            <code>create_makefile</code> script, please install the kdesdk package, it
            contains lots of useful stuff like that in the kdesdk/scripts directory.</li>
        <li>Believe it or not, but this is nearly all Makefile/build system hackery
            you have to do. <code>cd</code> back to the filters/template directory and
            call <code>make</code>. This should start compilation of that
            small, no-op template. If this step isn't successfull, please
            write a mail to
            <a href="mailto:koffice@mail.kde.org">&lt;koffice@mail.kde.org&gt;</a>.</li>
        <li>Please rename all <i>foo</i> names to match the name of your
            filter. If you write an export filter it's of course a good idea
            to change <i>import</i> to <i>export</i>, too. Due to renaming the
            files you have to fix the Makefile.am now. Don't forget to adapt
            the name of the #includes (header and .moc) in the source file.
            Make sure it still compiles before going on to the next step.</li>
        <li>Now that the files are renamed we have to change the content of
            them. We'll address one file after the other:
            <ul>
              <li> Makefile.am: If you changed the library's name make sure to
                   update all the lines in the Makefile.am, the X-KDE-Library
                   field in the .desktop file and the library-name argument
                   of K_EXPORT_COMPONENT_FACTORY in the .cpp file. Else the
                   filter manager won't be able to load your library. <br />
                   If you have to add more source files you only have to add
                   their names to the libfooimport_la_SOURCES line. <br />
                   Don't forget to adapt the service_DATA line if you change
                   the name of the .desktop file. Else <code>make install</code>
                   will fail.</li>
              <li> fooimport.h: Please add a license header of your choice (e.g.
                   GPL, LGPL, X License, BSD,...) and rename the class (and maybe
                   the #include guards __FOOIMPORT_H__).</li>
              <li> fooimport.cpp: Add a license header and change the classname
                   to reflect the changed header file. Don't forget to adapt the
                   name in the factory typedef.</li>
              <li> kword_foo_import.desktop: You'll have to adapt the Name field
                   (obvious) and  the X-KDE-Export/X-KDE-Import fields. These
                   fields state what mimetypes the filter exports and imports
                   (from the filter's point of view!). If you want to have more
                   than one mimetype in those lines you have to separate them by
                   a plain comma (no space!), like &quot;text/plain,text/english&quot;.
                   The X-KDE-Library field has to contain the library name. Don't
                   forget to update that when you change the name of the lib!</li>
              <li> status.html: This file contains status information about your
                   filter. Please check <a href="http://www.koffice.org/filters/status.phtml">
                   the koffice site</a> for examples.</li>
            </ul></li>
        <li>If KDE doesn't &quot;know&quot; your mimetype up to now, please add a
            x-*.desktop file (see kdelibs/mimetypes for inspiration :-). Make sure that
            it gets installed to the correct directory (most likely it will be <i>application</i>).
            If KDE knows your file type, you don't have to care about that.</li>
        <li>The framework should be working now and you can start implementing
            the real filter code. Looking at simple existing filters (like the ascii or the wml
            filter) might help to get started.</li>
        <li>To submit you new filter to the KDE CVS please remove generated
            files from the directory (*.o, *.lo, *.moc, the .deps and .libs directory, and
            so on) and create a tarball. If you have some
            webspace please upload it there and send a mail to the koffice-devel
            mailing list containing a short description and a link to the
           sources. If you can't put it somewhere please send it to
            <a href="mailto:trobin@kde.org">me</a> as email attachment
            (not to the list, please). I'll take care of uploading it then.</li>

$faq->addQuestion("Advanced Techniques", "
  <p>One of the major strengths of an Office Suite is the ability
         to &quot;embed&quot; documents into other documents (e.g. to
         embed a spreadsheet or a chart into a text document or a
         presentation). There are two fundamentally different ways to
         handle this topic:
      </p>

      <ol>
       <li>
        <p>The first method is to <i>link</i> the child documents.
           The way it usually is done is by transferring ownership, i.e.
           the child document is <i>owned</i> by the parent document.
           It's obvious that both concepts have advantages and
           disadvantages (e.g. by linking you save diskspace and keep
           your documents small, the tradeoff is that you have to take
           care when moving documents).
        </p></li>
       <li>
        <p>In KOffice we decided to transfer the ownership and save the
           child documents along with the main (=parent) document in one
           file. To achieve this you again have several possibilities,
           but they only differ in the implementation.
        </p></li>
      </ol>

      The main concept is always the same:
      You have to emulate a kind of file-system-in-a-file:<br />
      <ul>
       <li><b>Microsoft</b> uses the OLE concept to generate so called
           compound files. (OLE = object linking and embedding) These
           files are binary files with raw document streams and these
           streams can be accessed and processed with the LAOLA tools
           (Look at the links selection for that page) or look at the
           import filters for OLE files in koffice. That can be found in
           <a href="http://webcvs.kde.org/cgi-bin/cvsweb.cgi/koffice/filters/olefilters/lib">WebCVS (current)</a>
           or in your local copy at <i>koffice/filters/olefilters/lib/</i>.<br /><br /></li>

       <li><b>KOffice</b> recently switched from using the well known tar/gnuzip
           utilities to an OpenOffice compatible compound file format. It's basically
           a .zip file with some special files to allow things like mimetype detection
           and so on. If you invoke the <code>unzip<code> utility on such a file you'll
           find some .xml files, where maindoc.xml holds the parent document's XML file.
           <br />
           For further detail on the internals of the compound document format please read
           the specification either in
           <a href="http://webcvs.kde.org/cgi-bin/cvsweb.cgi/~checkout~/koffice/lib/store/SPEC?content-type=text/plain"><b>WebCVS (current)</b></a>
           or look it up in your local koffice copy in
           <b>koffice/lib/store/SPEC</b>. The external point-of-view specification can be found
           <a href="http://www.koffice.org/packaging/standard-package-v2.pdf">here</a>.</li>
       </ul>
      <p>
      What does all that mean for the filter programmer? In 99.9% of all
      cases you surely want to use the KOffice Storage Library
      (koffice/lib/store) which saves you from having to implement reading
      from or writing to a zip file. You can open files and operate
      directly on the internal streams.
      </p>
      <p>
      If your foreign file format supports embedded images you can keep inheriting
      KoFilter and just use the KoFilterChain to access different streams than just
      the &quot;root&quot; (=maindoc.xml) stream in the compound storage file. Be careful
      though, as the storage classes don't allow simultaneous access to more than one
      stream at a time. Therefore you might have to temporarly store images in memory and/or
      write them all at once after converting the main document.
      </p>
     <p>
      In case the foreign format you want to import supports embedded documents (i.e. non-trivial
      objects which would have to be passed through a different KOffice filter) you have to inherit your
      filter class from KoEmbeddingFilter. I said <i>import</i> on purpose, as we don't support
      exporting of embedded KOffice documents right now. If you need that feature for your filter
      please let us know and we will try to implement it in the library. The most important method
      is embedPart(). It follows the template method pattern and will call back your filter and
      ask it to save the source file. Then it will convert it and insert it to the right place of your
      storage file. The returned integer should be used to refer to the converted part from within
      your filter's output file. If you obey the rules stated in the API documentation of that class
      embedding is really straighforward. Unless you're trying to convert a seriously screwed format
      like OLE files you won't need start/endInternalEmbedding. As this code isn't used a lot in
      current KOffice filters I'd be curious about feedback about the API. Just tell us if it's hard
      to use or buggy, maybe we can clean it up a bit.
      </p>
      <p>
      One final advice if you'd like to see the available filters for all KOffice applications
      and their relations: enter koffice/lib/kofficecore/tests and <code>make check</code>.
      You should see a program called <code>filter_graph</code> which generates a input file for
      the <b>dot</b> tool (part of the <a href="http://www.research.att.com/sw/tools/graphviz/">graphviz</a>
      package). Invoke the test program and then call <code>make dot</code> and a file called
      <i>graph.png</i> will be created (take care, it's a bit wide ;-).
      </p>

$faq->addQuestion("Remaining Questions?", "
     <p>Feel free to ask <a href="mailto:trobin@kde.org">me</a> if there are
      any remaining questions. BTW: It's generally a good idea to ask on
      <a href="mailto:koffice@kde.org">koffice@kde.org</a> whether anyone
      works on a filter before starting to implement it :)</p>

$faq->addQuestion("File Formats - Doctype Definitions", "
      <p>This section contains some useful documentation (I'll add more stuff
      here, soon):</p>

      <ul>
       <li><b>KWord Doctype Definition</b><br />
           Download: &nbsp;&nbsp;
           <a href="http://webcvs.kde.org/cgi-bin/cvsweb.cgi/~checkout~/koffice/kword/dtd/kword.dtd?content-type=text/plain"><b>WebCVS (current)</b></a>&nbsp;&nbsp; or &nbsp;&nbsp;
           look in your local koffice copy in
           <b>koffice/kword/dtd/kword.dtd</b>
           <br /><br /></li>

       <li><b>KSpread Doctype Definition</b><br />
           Download: &nbsp;&nbsp;
           <a href="http://webcvs.kde.org/cgi-bin/cvsweb.cgi/~checkout~/koffice/kspread/dtd/kspread.dtd?content-type=text/plain"><b>WebCVS (current)</b></a>&nbsp;&nbsp; or &nbsp;&nbsp;
           look in your local koffice copy in
           <b>koffice/kspread/dtd/kspread.dtd</b>
           <br /><br /></li>

<!--       <li><b>Kontour Doctype Definition</b><br />
           Download: &nbsp;&nbsp;
           <a href="http://webcvs.kde.org/cgi-bin/cvsweb.cgi/~checkout~/koffice/kontour/kil.dtd?content-type=text/plain"><b>WebCVS (current)</b></a>&nbsp;&nbsp; or &nbsp;&nbsp;
           look in your local koffice copy in
           <b>koffice/kontour/kil.dtd</b>
           <br /><br /></li>
-->

       <li><b>Karbon Doctype Definition</b><br />
           Download: &nbsp;&nbsp;
           <a href="http://webcvs.kde.org/cgi-bin/cvsweb.cgi/~checkout~/koffice/karbon/karbon.dtd?content-type=text/plain"><b>WebCVS (current)</b></a>&nbsp;&nbsp; or &nbsp;&nbsp;
           look in your local koffice copy in
           <b>koffice/karbon/karbon.dtd</b>
           <br /><br /></li>

       <li><b>KPresenter Doctype Definition</b><br />
           Download: &nbsp;&nbsp;
           <a href="http://webcvs.kde.org/cgi-bin/cvsweb.cgi/~checkout~/koffice/kpresenter/dtd/kpresenter.dtd?content-type=text/plain"><b>WebCVS (current)</b></a>&nbsp;&nbsp; or &nbsp;&nbsp;
           look in your local koffice copy in
           <b>koffice/kpresenter/dtd/kpresenter.dtd</b>
           <br /><br /></li>

       <li><b>Krita Doctype Definition</b><br />
           Download: &nbsp;&nbsp;
           <a href="http://webcvs.kde.org/cgi-bin/cvsweb.cgi/~checkout~/koffice/kimageshop/dtd/krita.dtd?content-type=text/plain"><b>WebCVS (current)</b></a>&nbsp;&nbsp; or &nbsp;&nbsp;
           look in your local koffice copy in
           <b>koffice/kimageshop/dtd/krita.dtd</b>
           <br /><br /></li>
     </ul>

     Here is a little advice (from IBM) how to read doctype descritions. If you look at that page it shouldn't be a problem to understand how to read them.<br />
     &nbsp;&nbsp; <a href="http://www-106.ibm.com/developerworks/library/buildappl/writedtd.html"><b>Doctype Description</b></a>



$faq->addQuestion("Add Documentation", "




      <p>So if you have done your filter please add some information. <br />
      At least add a statusfile <code><b><i>status.html</i></b></code>. Inside
      of that file you should insert </p>
      <ul>
       <li>a <b>feature list</b>,</li>
       <li>a <b>history list</b>,</li>
       <li>a <b>todo list</b>,</li>
       <li>maybe some nice <b>links</b> to more information
          (fileformat description, ...),</li>
       <li>the <b>author(s)</b> of the filter with <b>email-addresses</b>,</li>
       <li><b>last page update</b>.</li>
      </ul>
      <p>Whenever you obtain <b>any information</b> about the filter
      <b>update</b> the <code><b><i>status.html</i></b></code> file.
      The status file may contain the result of a
      finished investigation (e.g. can code be reused from another open source
      project if yes how, if no why not) or even the experience of a not
      finished investigation, and of course the possibilities the filter
      currently provides.</p>

      There is a statusfile template where you can look at.
      Statusfile template is here:
      <a href="TEMPLATE_STATUS.html">temp</a>&nbsp;&nbsp;
      <p>If you have done your documentation and the tables are looking right mail it.</p>
      <p>If you are doing some update don't forget to update your documentation too!</p>

<?php include("footer.inc"); ?>
