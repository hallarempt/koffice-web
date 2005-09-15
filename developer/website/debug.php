<?php
  $page_title="KOffice Web Site Debugging";
  $site_root='../../';
  include("koffice.inc");
  include("header.inc");
?>
    <p>Draft $Date$</p>
    
<h2>Debugging: Quick start</h2>
   
<p>Unfortunately there is no quick way to fully debug a page meant
for the KOffice web site. You can do as much as possible before
committing, then commit and check the result when the website
updates.  If you need to make significant changes to the website, see
the <a href="#development">Development</a> section</p>
    
<p>For most of the PHP files, Konqueror do not recognize them as
HTML files and therefore refuse to display them. The little trick is
to add <tt>&lt;html&gt;</tt> on the first line
and <tt>&lt;/html&gt;</tt> on the last line of the document.</p>
    
<p>Of course be careful <em>not to commit</em> these 2 debug lines.</p>

<h2><a name="development">Development</a></h2>
<h3>Aim</h3>
<p>This section describes how to set up a local copy of the KOffice
web site for development on your computer.  <b>It assumes that you have
<em>root</em> access to your machine</b>, and that you are running a
distribution that provides 
<a href="http://httpd.apache.org/docs/2.0/">Apache 2</a> and 
<a href="http://www.php.net/">PHP4</a> packages.  The instructions
have been tested on <a href="http://www.kubuntu.org/">Kubuntu</a>.</p>

<p>It also assumes that you are able to download about 40Mb of website
sources using Subversion.</p>

<p>The KOffice site (and KDE sites generally) need PHP to be
configured in a certain way, for example to be able to find the
appropriate include files.  They also work best when a KDE site is
installed at the top level of your webserver.  These instructions
ensure that you install the KOffice site in a way that is most likely
to work, and without breaking any existing sites you currently have on
your computer.</p>
    
<h3>Step 1: Prepare website sources</h3>

<p>These instructions assume that you will work with the KOffice
website sources under <code>/opt</code>.  It should be simple to
use a different directory, but using <code>/opt</code> means you
get to copy and paste from the instructions below.</p>

<p>Firstly, ensure the user you are running as has write access to
<code>/opt</code>.  This simplest way to do this is to make your
user the owner of that directory as <em>root:</em></p>

<pre>
$ su
Password:
# chown user.user /opt 
# exit
$
</pre>
<p>(where <code>user</code> is the name of the user you normally run 
as.)</p>

<p>Now checkout the website sources from the Subversion
repository:</p>
<pre>
cd /opt
svn co svn://anonsvn.kde.org/home/kde/trunk/www/areas/koffice koffice-www
</pre>
<p>or, if you already have a Subversion account that has write access
to the KOffice website:</p>
<pre>
cd /opt
svn co https://svn.kde.org/home/kde/trunk/www/areas/koffice koffice-www
</pre>
 
<h3>Step 2: Set up a hostname for the site</h3>

<p>As <em>root</em>, open the file <code>/etc/hosts</code>.
Find the line that begins <code>127.0.0.1</code>, and add
<code>test.koffice.org</code> to the end of the line.
It should look similar to the following:</p>

<pre>
127.0.0.1 localhost systemname test.koffice.org
</pre>

<p>(where <code>systemname</code> is the current name of your
machine)</p>

<h3>Step 3: Install and configure a web server</h3>
<p>At this point, you should install Apache&nbsp;2 and PHP4, and ensure
that Apache&nbsp;2 can execute PHP scripts.</p>

<p>You may need to use the following command to make Apache load the
PHP module:</p>
<pre>
# a2enmod php4
</pre>

<p>Now (as root) create a file called
<code>/etc/apache2/sites-available/koffice</code> with the following
contents:</p>

<pre>
NameVirtualHost test.koffice.org
&lt;VirtualHost 127.0.0.1&gt;
    DocumentRoot /opt/koffice-www
    ErrorDocument 404 /opt/koffice-www/404.php
    ServerName test.koffice.org
    ErrorLog /opt/koffice-www/logs/kde-error_log
    CustomLog /opt/koffice-www/logs/kde-access_log common

    DirectoryIndex index.html index.php
    &lt;Location /&gt;
        Deny from all
        Allow from 127.0.0.0/255.0.0.0 ::1/128
    &lt;/Location&gt;

    php_value short_open_tag Off
    php_value register_globals No
    php_value safe_mode On
    php_value include_path ".:/opt/koffice-www/media/includes"
&lt;/VirtualHost&gt;
</pre>

<p>Enable the website using:</p>
<pre>
# a2ensite koffice
</pre>

<p>You should now restart your webserver. On Debian based systems this
is done as root by:</p>

<pre>
# /etc/init.d/apache2 restart
</pre>

<h3>Step 4:Modify the checkout for your system</h3>

<p>In the <code>/opt/koffice-www</code> folder, there's a file called
<code>.htaccess</code>.  This file needs to be modified to suit your
system.</p>

<p>Change the line that says:</p>

<pre>
php_value include_path .:/home/groups/k/ko/koffice/htdocs/media/includes
</pre>

to read:
<pre>
php_value include_path .:/opt/koffice-www/media/includes
</pre>

<b>It's important that you don't commit this change!</b>

<h3>Step 5: Test your installation</h3>
<p>You should now be able to visit
<a href="http://test.koffice.org">http://test.koffice.org</a> and see
your local copy of the KOffice website.</p>

<?php
   include("footer.inc");
?>
