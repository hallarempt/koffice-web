<?php
  $page_title="First Steps With A KDE CVS Account";
  $site_root='../../';
  include("koffice.inc");
  include("header.inc");
?>

<h2>Foreword</h2>

<p>This tutorial is about what to do when you are a fresh owner of a new
CVS account for KDE.</p>

<p>This tutorial assumes that you have applied for a KDE CVS account like
descibed <a href="applycvsaccount">here</a> and that you have received
a positive answer with the data of your new account.</p>

<p>Notations: <em>CVS</em> is used to describe a CVS server, mostly KDE's or
the KDE's anonymous CVS servers. The low case word <em>cvs</em> is used to
describe the program that the user can use to access CVS.</p>

<h2>Changing The Root Of Your Local CVS Copy</h2>

<p>So now you have a KDE CVS account. Please note that the answer email
will perhaps have an explanation about how to use. It should be similar to this tutorial.
Nevertheless please read this email in case something important was added,
beyond the scope of this tutorial.</p>

<p>So you need to work with KDE's CVS server now, not anymore with the anonymous
CVS server that you have used until now.</p>

<p>So you new CVS root will be something like:<br />
<tt>:pserver:xxxxxx@xxxxxx.kde.org:/xxxxxx/xxxxxx</tt><br />
See the answer email to get your real CVS root name.</p>

<p>Note: to avoid any misunderstanding, the CVS root has <em>nothing</em>
to do with your system's user named root.</p>

<p>Your old CVS root is for example:<br />
<tt>:pserver:anonymous@kdecvs.student.utwente.nl:/home/kdecvs/kde</tt></p>

<p>So the change of CVS root has to be done with (in one line):<br />
<tt>find . -name Root | xargs perl -pe -i
's,:pserver:anonymous\@kdecvs.student.utwente.nl:/home/kdecvs/kde,:pserver:xxxxxx\@xxxxxx.kde.org:/xxxxxx/xxxxxx,'
</tt></p>

<h2>First Test</h2>

<p>The following steps are described using the command line tool cvs. Personally,
I find it better to start with it, as you know immediately where the problems
are. Of course, after you have made your first test, you may use what you want,
for example Cervisia.</p>

<p>Then you should be ready to start. Change to a directory of your local copy of
KDE and type:
<tt>cvs login</tt>
The login will ask you for a password. Type it in. (Of course, the original
unencoded one.)</p>

<p>Now you can use the CVS commands on KDE's main CVS.
Make a few <tt>cvs update</tt> to test. (Start first with a small directory to test
first.)</p>

<h2>CVS Account Password</h2>

<p>You can logout with <tt>cvs logout</tt> if you want, but it is not needed. The
password is automatically transmitted to the CVS server by each use of the
cvs program. If you have log out, you need to log in again to use the CVS
server.</p>

<p><em>Please note:</em> the password is stored in the file ~/.cvspass . So check that
this file cannot be read by third persons. In case that someone has gained
access to your password (or if you have a doubt) please email
<a href="mailto:sysadmin@office.kde.org">KDE's Sysadmins</a>
to change your password (or at least to get it disabled temporarly.)</p>

<p>If you are being part of another project using CVS (be it by as
anonymous or as named account), you do not need to worry. The cvs program can
handle it automatically (that is why the CVS root is written in your local
copy) and can even have passwords for each CVS server
(again in the file ~/.cvspass .)</p>

(To be continued.)

<?php
   include("footer.inc");
?>
