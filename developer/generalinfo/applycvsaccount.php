<?php
  $page_title="Applying For a KDE CVS Account";
  $site_root='../../';
  include("koffice.inc");
  include("header.inc");
?>

<p>$Date$</p>

<h2>Abstract</h2>

<p>This tutorial is about how to apply for a CVS account for KDE/KOffice.</p>

<h2>Notations</h2>

<ul>
  <li>The word <em>CVS</em> applies to all CVS servers.</li>
  <li>The phrase <em>KDE CVS</em> refers only to KDE's CVS server.</li>
  <li>The phrase <em>anonymous CVS</em> means KDE's anonymous CVS mirrors.</li>
</ul>

<h2>What is KDE CVS?</h2>

<p>To have write access to KDE CVS, you have to use the main CVS server of KDE.
(Anonymous CVS uses mirrors of this server. CVS does not allow you to read from one <!-- TODO: URL of doc about anonymous CVS -->
server and write to another.)</p>

<p>To be able to use the main KDE CVS server, you need an account there. An account
is made up of a username (normally your surname), a password and an email address.
The username is for getting in, the password for authenticating and the email
address for knowing who to contact if another developer wants to contact the account holder.</p>

<p>Note: you can see the accounts in 
<a href="http://webcvs.kde.org/cgi-bin/cvsweb.cgi/kde-common/">kde-common/accounts</a>. That is the list of all accounts.
Yes, <b>the account list is public</b>, for example on <a href="http://webcvs.kde.org">WebCVS</a>.</p>

<p>To access the main KDE CVS, you have two possibilities:</p>
  <ul>
    <li>the normal CVS pserver mode</li>
    <li>the CVS pserver mode tunneled in SSH.</li>
  </ul>
<p>
  (&quot;pserver&quot; is the name of the way in which CVS communicates to a CVS server over a network.)
</p>

<p>A normal user does not have many reasons to use SSH with CVS, as he has not
much to hide: email notifications of all commits are sent to the public kde-cvs mailing list and
anything you can download using <tt>cvs update</tt> can be downloaded by anyone else
(after all, KDE is opensource).</p>

<p>The password you'll need to create depends on the above:</p>
  <ul>
    <li>a normal CVS password</li>
    <li>a SSH password.</li>
  </ul>

<p>(As I have only read two short articles about how to use CVS over SSH, I will
not comment further on this.)</p>


<p>A KDE CVS account allows you to write to nearly anywhere in the KDE CVS. However, there are exceptions:</p>
  <ul>
    <li>the KDE CVS internals</li>
    <li>the admin directory</li>
    <li>the www module (exceptions can be made for this.)</li>
  </ul>

<h2>Who Can Apply For a KDE CVS Account?</h2>

<!--
TODO: CVS commit policy
-->

<p>Normally, any developer that has done some work on KOffice (or elsewhere in KDE) can apply for a KDE CVS account.</p>

<p>For KOffice, the amount of work required is either a filter (even if it's only half working) or a few patches.</p>

<p>Also please apply for an account only if you think that you will work on KOffice or KDE for a somewhat longer time.
If you know that you will only work for a couple of weeks and then never again, please consider not
applying for a KDE CVS account but still, do continue to send patches.</p>

<p>The limitations are not there to exclude anyone - they are there to ensure that the maintenance of accounts remains reasonable.</p>

<p>Of course, to be clear: <em>the <a href="mailto:sysadmin@office.kde.org">KDE's sysadmins</a>
  have the last word about whether or not to create a KDE CVS account for somebody.</em></p>

<h2>Getting the Encoded Password</h2>

<p>This tutorial assumes that you want access via the normal CVS pserver way (without SSH.)</p>

<p>First you have to choose a password - if possible, one that you
do not use on your computer. In any case, please use <b>common precautions</b> about
passwords: not any entry of a dictionary, not any common name, not any name of your
relatives, not any birthday...
(As the CVS account has nothing to do with any account on your computer, you
are free to use whatever password you want.)</p>

<p>Now that you have your password, you need to encode it, as CVS does not
transmit it in clear text.  (Note: the encryption used by CVS is the same type
of encryption used by many Linux distributions on their <code>/etc/shadow</code> file.)</p>

<p>One way to do this would be using PHP:

<code>echo "&lt;?php echo crypt('&lt;your password&gt;') . \"\n\"; ?&gt;" | php -a</code>
Where &lt;your password&gt; has to be replaced with your password.</p>

<p>Another way (in case you don't have PHP) would be using Perl
<code>perl -e "print crypt('&lt;your password&gt;','&lt;xy&gt;'),\"\n\";"</code>
Where &lt;your password&gt; has to be replaced with your password and &lt;xy&gt; with two
random characters.  (Hint: $ must be "escaped" with a backslash. For instance: If your password is "xyz$123" you have to replace 
&lt;your password&gt; with "xyz\$123". )
</p>

<p>Save the encoded password so that you can use it later in the email.</p>

<h2>Preparing The Email</h2>

<p>Now that you have a password, you need a username for your KDE CVS account.
Normally your surname is used, let us call it <tt>surname</tt> for this example.</p>

<p>You can propose something else if you want. But be careful that one day, you
could ask for a KDE email address and this would be the base for your address.
For example: <tt>surname@kde.org</tt>. KDE email addresses are not granted so
easily anymore, as too many people have ranted with a KDE address and other
people thought that it was the official position of the KDE Team.
In the meantime, <a href="http://www.kdemail.net">KDE Mail</a> was created for if you need a permanent address.</p>

<p>So now you have a username and a password. Now the email address. You have to
use your own (be it a normal address or a KDE Mail address). Of course, do not forget that this <b>email address becomes public</b>
(at least by <a href="http://webcvs.kde.org">WebCVS</a>) so you will unfortunately get spam.</p>

<p>Now you are ready to send your email to ask for a KDE CVS account.</p>
<p>So put in your email:</p>
  <ul>
    <li>your full name (it might already be in the email header).</li>
    <li>your email address</li>
    <li>the account name</li>
    <li>the encoded password</li>
    <li>a concise justification for needing a CVS account</li>
  </ul>

<p>Now please check again that you have done it all right. (The people who
will receive your email get hundreds of emails per day, so help them by doing
it correctly if possible). 
Then send your email to <a href="mailto:sysadmin@office.kde.org">KDE's sysadmins</a>.</p>

<h2>And Now?</h2>

<p>After having sent the email, you have to wait for the answer
(typically the next weekday, European day time (UTC+1 in winter,
UTC+2 in summer).</p>

<p>You can get one of three answers:</p>
  <ul>
    <li>yes</li>
    <li>no</li>
    <li>maybe</li>
  </ul>

<p>Let's start with the worst: no. I suppose that the reason would be that you
are not known enough or similar. When you are more known and have helped more,
you will certainly be able to get an account.</p>

<p>Maybe: well, probably like "no" more or less, except if the problem is of a
technical sort.</p>

<p>Yes: you have an account. Welcome! Now you need to adapt your local copy to the new
server. See the <a href="firststepsaccount.php">next tutorial</a> for your
first steps with your new account.</p>

<?php
   include("footer.inc");
?>
