<?php
  $page_title="First Steps With A KDE CVS Account";
  $site_root='../../';
  include("koffice.inc");
  include("header.inc");
?>

<p>$Date$</p>

<h2>Abstract</h2>

<p>This tutorial is about what to do when you are a fresh owner of a new
CVS account for KDE.</p>

<h2>Notations</h2>
<ul>
  <li><em>CVS</em> is used to describe a CVS server, mostly KDE's or
    the KDE's anonymous CVS servers.</li>
  <li>The low case word <em>cvs</em> is used to
    describe the program named cvs, which the user can use to access CVS.</li>
</ul>

<h2>Preliminary</h2>

<p>This tutorial assumes that you have applied for a KDE CVS account like
described <a href="applycvsaccount.php">here</a> and that you have received
a positive answer with the data of your new account.</p>

<h2>Changing The Root Of Your Local CVS Copy</h2>

<p>So now you have a KDE CVS account. Please note that the answer email
will perhaps have an explanation about how to use.
(The explanation is also the file kde-common/cvs_instructions.txt .) <!-- TODO: URL -->
It should be similar to this tutorial.
Nevertheless please read this email in case something important was added,
beyond the scope of this tutorial.</p>

<p>So you need to work with KDE's CVS server now, not anymore with the anonymous
CVS server that you have used until now.</p>

<p>So you new CVS root will be something like (assuming <em>surname</em> is your account name):<br />
<tt>:pserver:surname@cvs.kde.org:/home/kde</tt><br />
See the answer email to get your real CVS root name.</p>

<p>Note: to avoid any misunderstanding, the CVS root has <em>nothing</em>
to do with your system's user named root.</p>

<p>Your old CVS root is for example:<br />
<tt>:pserver:anonymous@kdecvs.student.utwente.nl:/home/kdecvs/kde</tt></p>

<p>So the change of CVS root has to be done with (in one line):<br />
<tt>find . -name Root | xargs perl -p -i -e
's,:pserver:anonymous\@kdecvs.student.utwente.nl:/home/kdecvs/kde,:pserver:surname\@cvs.kde.org:/home/kde,'
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
to change your password (or at least to get it disabled temporarily.)</p>

<p>If you are being part of another project using CVS (be it by as
anonymous or as named account), you do not need to worry. The cvs program can
handle it automatically (that is why the CVS root is written in your local
copy) and can even have passwords for each CVS server
(again in the file ~/.cvspass .)</p>

<h2>Default Editor</h2>

<p>This section is only useful if you plan to use the cvs program. If you always
plan to use Cervisia or another GUI front-end, <a href="#committing">you can skip this section</a>.</p>

<p>When committing, cvs wants some text for commenting the commit. You can either
specify it directly with the -m parameter or by a file with the -F . If you do
neither of both, cvs will run an editor to ask for a comment.</p>

<p>This editor is taken from the environment variables: first $CVSEDITOR,
then $EDITOR if $CVSEDITOR was not found. If $EDITOR was not found either,
cvs uses a default editor (normally vi.)</p>

<p>So may be you should check your $CVSEDITOR and $EDITOR environment variables:<br />
<tt>echo $CVSEDITOR</tt><br />
<tt>echo $EDITOR</tt></p>

<p>Check that their settings suit you for your work with cvs. (Remember $CVSEDITOR is used first, then $EDITOR.)
If they do not suit you, check your file <tt>~/.bashrc</tt> and add something like:<br />
<tt>export CVSEDITOR=mcedit</tt><br />
Here it sets mcedit, replace it with your favourite editor. Of course you can set $EDITOR instead if you want
to change the default editor for you.</p>

<p>Be careful that if you do not set a command line editor but one that needs X-Window, you will need to run cvs
always in a X-Window terminal. It might suit you, it might not. Your choice!</p>

<!-- TODO: .cvsrc .cvsignore -->

<h2><a id="committing" name="committing" >Committing</a></h2>

<p>Now a few words about how to commit.</p>

<p>First be sure that the code that you want to commit is right. You might perhaps
send the patch to the relevant mailing list (koffice-devel for KOffice matters) or
to the relevant developer if you know who he is.</p>

<p>Also when committing, please give a useful message with the commit. Do not think of
now but try to think what you would want to find in, say, two years.
(One day, you will probably find out that short commit entries like "Fix" or "Here too" is going to
drive you crazy when you have to debug a problem.)</p>

<p>Good code is not always only about questions like if the code compiles. The code
must also fit in what is planned. For example if a new code fixes just one little bug
but the maintainer of the code is currently doing a re-write, he will perhaps not be
pleased that something has been committed, because he will have to fix all conflicts
between the newly committed code and his new code.</p>

<p>So the best is to communicate (if possible early) to avoid any surprise. A surprised
developer is highly at risk of giving a rude answer or at least not a pleasant answer.
This is avoidable by communication. Of course, a developer might ask to leave the code
alone. Please respect that! Of course, (It does not mean that you should not argue.)</p>

<?php
   include("footer.inc");
?>
