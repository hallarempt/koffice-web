<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:output method="xml" indent="yes" media-type="application/xml" omit-xml-declaration="yes" encoding="UTF-8"/>
<xsl:template match="/">
<xsl:processing-instruction name="php">
  $site_root="../../";
  include("./kofficeversion.inc"); // Defines also $page_title
  include("koffice.inc");
  include("header.inc");
</xsl:processing-instruction>

<div>

<xsl:comment>Do not modify! This file was generated <!-- Don't panic! This is the source--></xsl:comment>

 <h2>Which filters are there?</h2>
 <p>Many KOffice applications support the filter architecture
 (i.e.: they are able to use filters for file conversion.) The filters are not perfect
 and some not even done. The status of the current filters is listed below, sorted per
 application.</p>
 <p>Note: this document is about <strong><xsl:processing-instruction name="php">print $kofficeversiondescription;</xsl:processing-instruction></strong>.</p>

<hr/>
<xsl:for-each select="/filters/version/application">
<xsl:variable name="applicationname" select="@id"/>
<xsl:if test="@released!='no'">
<h3><xsl:value-of select="title" /></h3>

<table border="5" cellspacing="0" cellpadding="5"> <!-- bordercolor="#800000" -->

 <tr bgcolor="#FFEEAA">
 <th width="30%" align="left" valign="top"><strong>From/To</strong></th>
 <th width="50%" align="left" valign="top"><strong>Notes</strong></th>
 <th width="10%" align="left" valign="top"><strong>Import</strong></th>
 <th width="10%" align="left" valign="top"><strong>Export</strong></th>
 </tr>

 <xsl:for-each select="filter">
 <xsl:sort select="title" lang="en" data-type="text" />
 <tr>
 <td width="30%" align="left" valign="top">
   <xsl:choose>
    <xsl:when test="$applicationname='kword'">
     <a href="{substring-before(@id,'_')}/{substring-after(@id,'_')}.php">
     <xsl:value-of select="title"/>
     </a>
   </xsl:when>
   <xsl:otherwise>
    <xsl:value-of select="title"/>
   </xsl:otherwise>
  </xsl:choose> 
 </td>
 <td width="50%" align="left" valign="top">
    <xsl:if test="boolean(note)">
        <xsl:value-of select="note"/>
    </xsl:if>
    <xsl:if test="boolean(contact)">
        <xsl:if test="boolean(note)"><br/></xsl:if><!-- We just have had a note, so we need a forced line break -->
            Contact<xsl:if test="count(contact)>1">s</xsl:if>: <!-- This comment is just a hack to avoid a new line -->
        <xsl:for-each select="contact">
            <a href="{@href}"><xsl:value-of select="."/></a>
            <xsl:if test="position()&lt;count(../contact)">,
            </xsl:if><!-- Put this on a new line to have a line per contact -->
        </xsl:for-each>
    </xsl:if>
    <!-- We have not written anything, so write a non-breaking space -->
    <xsl:if test="not(boolean(note) or boolean(contact))">&#160;</xsl:if>
 </td>
 <xsl:variable name="import" select="stat/@import" /><xsl:variable name="export" select="stat/@export" />
 <td width="10%" align="center" valign="top">
   <xsl:value-of select="/filters/status[@id=$import]/@symbol"/>
 </td>
 <td width="10%" align="center" valign="top">
   <xsl:value-of select="/filters/status[@id=$export]/@symbol"/>
 </td>
 </tr>
 </xsl:for-each>

</table>
</xsl:if>
</xsl:for-each>
<hr/>

<h2>Key</h2>
<table>
<xsl:for-each select="/filters/status">
 <tr>
   <td valign="top"><strong><xsl:value-of select="@symbol"/></strong></td>
   <td valign="top"> -- </td>
   <td valign="top"><xsl:value-of select="description"/></td>
 </tr>
</xsl:for-each>
</table>

<h2>Joining the developers</h2>
<p>There are many filters that we would like and many filters that need improvement, although sadly we do not have enough developers working on KOffice.</p>
<p>Would <em>you</em> like to <a href="mailto:koffice@kde.org">join the development team</a> and help us?</p>
<p>Please <a href="mailto:koffice@kde.org">contact us</a> if you are interested in helping.</p>

</div>

<xsl:processing-instruction name="php">
  include("footer.inc");
</xsl:processing-instruction>

</xsl:template>
</xsl:stylesheet>
