<?php
  $page_title="KOffice Web Site Languages";
  $site_root='../../';
  include("koffice.inc");
  include("header.inc");
?>

<p>Draft $Date$</p>

   <h2>Overview</h2>
   
<p>The Web site uses PHP on top of XHTML. For a beginner, just copy 1:1 the PHP
header and footer. You will see a few variables that you might change,
especially in the header. The real PHP code itself is hidden in the includes.
(Later you can still learn PHP if you want to make more of it.)</p>

<p>We are using XHTML 1.0, not HTML 4
so be careful that you use only lower case tags (for example
&lt;p&gt; ), that you close all tags that you have open
(for example &lt;p&gt;Text&lt;/p&gt; )
and to close empty tags (like &lt;br /&gt; and &lt;hr /&gt;
, the space before the / is
important for HTML-compatibility.) Otherwise XHTML is like HTML.
(The <a href="http://www.w3.org/TR/xhtml1/">XHTML 1.0 specification</a>
is based on HTML 4.)</p>
<!-- TODO: URL of HTML 4.01 -->

<!-- TODO 
(An useful program is xmllint . It will test your document about XML
compatibility. Another interesting tool is http://validator.w3.org . All KDE
pages should validate. (You cannot validate the source with PHP code. You can
only validate the result on the Web site, where the PHP code has been
replaced by XHTML tags.))</p>
-->

<p>The PHP code included assume that the XHTML is in UTF-8 (well for English, it
does not make any difference.)</p>

<p>FAQs are handled by a PHP object. So there are a little special.</p>

<?php
   include("footer.inc");
?>
