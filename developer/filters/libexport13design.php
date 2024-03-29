<?php
    $page_title="Writing Export Filter for KWord using libexport";
    $site_root = '../../';
    include("koffice.inc");
    include("header.inc");
?>

<p style="text-align: center">
<a href="mailto:ariya@kde.org">Ariya Hidayat</a><br />
<a href="mailto:goutte@kde.org">Nicolas Goutte</a></p>

<p style="text-align: center">Last revision: $Date$ </p>

<h2>Introduction</h2>

<p>KWord's Export Filter Library (in short: Libexport) is a library to help
developers writing an export filter for KWord. Basically, an export filter will
read a KWord document and convert it to some other format. Since
such filters will likely have quite an amount of common code,
especially in parsing the KWord document, a base class for doing this
should be useful.</p>

<p>KWord libexport is written and maintained by
<a href="mailto:goutte@kde.org">Nicolas Goutte</a>.
It is part of KWord filters and can be found in
<tt>koffice/filters/kword/libexport</tt>.</p>

<p>This document describes libexport as it was created for KOffice 1.2 and
improved for KOffice 1.3.</p>

<h2>Basics of KWord libexport</h2>

<p>An export filter consists of two parts, a &quot;Leader&quot;
to parse KWord document and a &quot;Worker&quot; to create output
document. The Worker itself will be &quot;directed&quot; by the
Leader. Libexport has already provided a Leader, namely
<tt>KWEFKWordLeader</tt> so you won't need to write your own.
while a Worker is unique to your filter.</p>

<p>The worker is a sort of black box for the output file, the
leader a sort of black box for the (KWord) input file. In
particular, the worker does not care about the input file.</p>

<p>To implement your own Worker, derive the Worker from
<tt>KWEFBaseWorker</tt> and implement several virtual methods
whose name started with &quot;do&quot;. Eventually, these methods
will be called by the Leader. Each method should return
<tt>true</tt> if everything is OK (i.e.parsing should
continue) and return <tt>false</tt> when error happens (and then
abort).</p>

<p>Here is a short explanation of some basic methods:</p>

<dl>
<dt>doOpenFile(const QString&amp; filenameOut, const QString&amp;
to)</dt>
<dd>opens output file <tt>filenameOut</tt></dd>

<dt>doCloseFile()</dt>
<dd>closes output file</dd>

<dt>doAbortFile()</dt>
<dd>closes file upon error</dd>

<dt>doOpenDocument()</dt>
<dd>opens the document (like <tt>&lt;html&gt;</tt> in HTML)</dd>

<dt>doCloseDocument()</dt>
<dd>closes the document (like <tt>&lt;/html&gt;</tt> in
HTML)</dd>

<dt>doFullParagraph(const QString&amp; paraText, const LayoutData&amp; layout,
const ValueListFormatData&amp; paraFormatDataList);</dt>
<dd>processes a paragraph, <tt>paraText</tt> is the text
for the paragraph (it's plain text), <tt>layout</tt> holds
information in KWord's LAYOUT, <tt>paraFormatDataList</tt>
is a list of formatting sequences.
</dd>
</dl>

<p>Using the Worker/Leader is not difficult. First,
create your Worker. Next, create an instance of KWEFLeader and
passing the Worker in the constructor. Now you can call
<tt>KWEFKWordLeader::filter(filenameIn,filenameOut,from,to,param)
</tt> to start conversion. The Leader will parse KWord
document specified by <tt>filenameIn</tt> and call virtual
methods of its worker which actually handle the process of
creating output file <tt>filenameOut</tt>. Effectively, this
converts a KWord document into your filter format.</p>

<p>Note that sequence of the &quot;do...&quot; calls might be
somehow not appropriate for the output file format. The only
workaround is to store the information and write it later to the
file.</p>


<h2>Example</h2>

<p>Very often the code speaks better. So here is a simple
example on how to use KWord libexport. In this example, we
would like to print out plain text version of a KWord
document.</p>

<p>The first step is to create the class TextWorker:</p>

<pre style="background-color: #eeeeee; margin: 2%; padding: 3pt"><code>
class TextWorker : public KWEFBaseWorker
{
public:
   TextWorker(void){}
   virtual ~TextWorker(void){}
   virtual bool doOpenFile (const QString&amp; , const QString&amp; );
   virtual bool doCloseFile();
   virtual bool doOpenDocument();
   virtual bool doCloseDocument();
   virtual bool doFullParagraph(const QString&amp; paraText, const LayoutData&amp; layout,
      const ValueListFormatData&amp; paraFormatDataList);
};
</code></pre>

<p>And here is the implementation:</p>

<pre style="background-color: #eeeeee; margin: 2%; padding: 3pt"><code>
bool TextWorker::doOpenFile(const QString&amp; , const QString&amp; )
{
  return true;
}

bool TextWorker::doCloseFile()
{
  return true;
}

bool TextWorker::doOpenDocument()
{
  return true;
}

bool TextWorker::doCloseDocument()
{
  return true;
}

bool TextWorker::doFullParagraph(const QString&amp; paraText,
    const LayoutData&amp; layout, const ValueListFormatData&amp; paraFormatDataList)
{
  kdDebug() &lt;&lt; paraText &lt;&lt; endl;
  return true;
}
</code></pre>

<p>As you might see, we are not interested in other than
<tt>doFullParagraph</tt> so the other methods will simply return
<tt>true</tt>.</p>

<p>To invoke the Leader/Worker:</p>

<pre style="background-color: #eeeeee; margin: 2%; padding: 3pt"><code>
TextWorker* worker=new TextWorker();
KWEFKWordLeader* leader=new KWEFKWordLeader(worker);
leader->filter(filenameIn,filenameOut,from,to,param);
</code></pre>

<p>That's all !</p>

<p>Up to this point, it is suggested that you also examine
some other Workers found in several KWord export filters.
The following filters in KOffice 1.3 are using libexport:</p>

<ul>
<li>ASCII/Plain Text</li>
<li>AbiWord</li>
<li>AmiPro</li>
<li>DocBook</li>
<li>HTML</li>
<li>MS Write</li>
<li>PalmDoc</li>
<li>RTF</li>
<li>WordPerfect</li>
<li>WML</li>
</ul>

<p>The ASCII filter is the easiest to understand. You might want
take a look at PalmDoc filter, which is very similar to ASCII
filter.</p>

<p>In case you still have problems, feel free to send questions to
<a href="mailto:goutte@kde.org">Nicolas Goutte</a>.</p>

<h2>History</h2>

<p>The original goal of libexport was to allow changes in KWord's
file format without the need to change much each export filter.
A second goal was introduced by Eva Brucherseifer, who had the idea of making
filters as modular as possible (<a
href="http://marc.theaimsgroup.com/?l=koffice-devel&amp;m=100016171520493&amp;w=2"
>see her email</a>). Parts of Eva's ideas have been put into
libexport. Leader and Worker in KWord libexport are
associated with Director and Builder in Eva's proposal
respectively.</p>

<?php
    include("footer.inc");
?>
