<?php
  $page_title="Sending Patches";
  $site_root='../../';
  include("koffice.inc");
  include("header.inc");
?>

<p>Draft $Date$</p>

<h2>Abstract</h2>

<p>This tutorial is about how to send modifications of code by the way of patches.</p>

<h2>Notation</h2>

<p>The word <em>developer</em> is used here for someone having a KDE CVS account.</p>

<h2>Preliminaries</h2>

<p>We suppose that you have modified some code in KOffice (or elsewhere in KDE) and that
you are ready to share it.</p>

<p>First a few important points:
  <ul>
    <li>You must allow that the modification will have the license of the file where the
    modification is/was made.</li>
    <li>Please make sure that the code compiles correctly on a fairly recent version of the software.</li>
  </ul>
</p>

<h2>What Is A Patch?</h2>

<p>Now you have the modification as a source file. Sending the source file will not be helpful,
as probably someone else has done other modifications to the original file in the meantime. So your
modified file could not replace it.</p>

<p>That is why patches exist. Patches list the modifications, the line numbers and a few other useful information
to be able to put that patch back into code (This is called "patching" or also "applying a patch.")</p>

<p>The main tool for creating patches is a tool called <tt>diff</tt>, which makes the difference
between two files. This tool has a mode called "unified diff", which KDE uses. Unified diffs have
not just the difference between the file but also the "neighbourhood" around the differences.
That allows to patch even if the line numbers are not the same anymore.</p>

<h2>Creating A Simple File Patch</h2>

<p>The most simple patch is created between the modified file (here called <tt>source.cpp</tt>)
and the non-modified version of the file (here called <tt>source.cpp.orig</tt>.)</p>

<p><tt>diff -u -p source.cpp.orig source.cpp</tt></p>

<p>That lists the difference between the two files in the unified diff format (and with function name information if possible.) However it only displays
it to screen, which is of course not the goal. So you need to redirect the output.</p>

<p><tt>diff -u -p source.cpp.orig source.cpp > ~/patch.diff</tt></p>

<p>~/patch.diff is here an example and you can create the file where you prefer with the name that you prefer.
(You will soon find out that it is probably not a good idea to create it where the source is.)</p>

<p>Now you have the patch in a file (in the example in the file ~/patch.diff.)
That is important when you will have to send the patch.</p>

<h2>The More Common Case</h2>

<p>But normally, you do not just change one file and you do not keep the original version around to
be able to make the difference later. But here too, there is a solution.</p>

<p>The program cvs, which is used on the command line interact with the CVS, has a diff function too:
<tt>cvs diff</tt>.</p>

<p>You can run it like this and it will give you the difference of the current directory and all
sub-directories below it. Of course, here too, you want to redirect the output.</p>

<p><tt>cvs diff -u -p > ~/patch.diff</tt></p>

<p>There are useful variants too (shown here without redirection)
  <ul>
    <li>For just one file: <tt>cvs diff -u -p source.cpp</tt></li>
    <li>For the current directory only: <tt>cvs diff -l -u -p</tt></li>
  </ul>
</p>

<p>Please note: even if cvs can make the difference of a directory (<tt>cvs diff -u -p mydirectory</tt>), it is not
recommended to do it for a patch that should be applied again. (The problem is that the person that will apply
the patch will have to be more careful about how he applies it.)</p>

<h2>Non-Text Files</h2>

<p>TODO (In short: non-text files are not covered by diff or by cvs diff, so they need to be attached separately to the email.)</p>

<h2>New Files</h2>

<p>TODO (In short: cvs diff cannot take care of new file if you do not have a write access on the CVS.
So those files need to be attached separately to the email.)</p>

<h2>How To Share the Patch?</h2>

<p>TODO (In short: patch bigger than a few 10KB sould not be send to the mailing list. If there is a bug registered at KDE Bugs,
they should be attached there. If not, you should make them public on a Web server where you have access. If you have not,
ask in the mailing list who would be interested by such a patch and send it to people that answer that they want your patch.)</p>

<h2>Preparing The Email</h2>

<p>Now you have a patch redirected into a file (for this example called patch.diff), you are ready to send it by email.
But the first question: where?</p>

<p>The best destination for patches is the <a href="http://www.kde.org/mailinglists">corresponding developer mailing list</a>
(so for KOffice, the koffice-devel mailing list.)</p>

<p>Please note that for KOffice, you can send patches to the <a href="mailto:koffice@kde.org">koffice mailing list</a> too.
In case of doubt, you can send any patch for KDE to the <a href="mailto:kde-devel@kde.org">kde-devel mailing list</a>.
(However with an increased risk that you would miss the right developer.)
Of course, if you know exactly which developer will process the patch and that you know or that you suppose that he currently
has time, then you can send it to him directly.</p>

<p>Now that you have entered an email address, a good practice is to attach the patch to your file before writing
anything else in the email. So you will not forget to attach it.</p>

<p>A little note here: yes, in KOffice (and in KDE too and unlike Linux for example), we prefer to have the patches
sent as attachements.</p>

<p>Now you are ready to write the rest of the email. Please think of a title that matches your patch. (Think of having to
find it again in the archives in a few months.) A good habit is to precede the title by <q>[PATCH]</q>.
So for example a title could be <q>[PATCH] Fix backup files</q>.</p>

<p>As for the body of the email, please tell to which file or directory your patch applies. For example for a file:
<q>The attached patch applies to the file koffice/kword/kwdoc.cc</q> or for a directory:
<q>The attached patch applies to the directory koffice/kword</q>. This help the developers to have an overview of
which code has been modified.</p>

<p>Then tell what your patch does. If it fixes a bug, then please give the bug number too. If the bug was not
registered in <a href="http://bugs.kde.org">KDE Bugs</a>, then please describe instead the bug that is fixed.</p>

<p>Tell also what could be useful to the developers, for examples:
if you could not test completely the patch (and why) or if you need help to finish fixing the code.</p>

<p>Now check the email again to see if you have not forgotten anything (especially to attach the patch) and you
can send the email.</p>

<h2>And Now?</h2>

<p>Now you have to wait that a developer reacts on your patch. (If you are not subscribed to the mailing lists where
you have sent the patch, then monitor <a href="http://lists.kde.org">the mailing list archives</a> for such a message.)</p>

<p>The reaction is normally one of the following:
  <ul>
    <li>No developer answers. (That is unfortunately happening from time to time.)</li>
    <li>The developer does not want your patch, as he is working on the same code.</li>
    <li>The developer does not like your patch.</li>
    <li>The developer finds that you should change a few things.</li>
    <li>The developer finds the patch good and tells that he will work on it.</li>
    <li>The developer accepts your patch as it is.</li>
  </ul>
<p>

<p>The first case is when nobody has answered. That perhaps means that you
have chosen the wrong mailing list. Perhaps you have not explained correctly
what the patch fixes or you have given a title that is not precise enough.
If this happens, the developer might have overseen the patch. Perhaps the
developer that should have answered has not any time currently. (That too
happens unfortunately.) The best is to try to work a little more on the patch,
make a better description and try again a second time, perhaps to another
mailing list.</p>

<p>If the developer tells that your patch conflicts with changes that he is currently doing, you could probably
not do much against it. May be you can discuss with him how you can effectively work with him on this piece of
code.</p>

<p>If your patch was not accepted, you could work further on it. May be you could discuss the problem on the mailing list.</p>

<p>If a developer wants a few changes, then work on the code to make the changes according to the critic. If you
need help becuase you do not understand how to do the needed change, then asking it on the mailing list.</p>

<p>If your patch was accepted, congratulation!</p>


<h2>Patches for KDE Bugs</h2>

<p>Another way of sharing your patch is to attach it to a bug report on <a href="http://bugs.kde.org">KDE Bugs</a>. Most of
what was written in this tutorial applies here too, in an adapted form of course. Please note that you cannot attach a patch
directly when reporting a new bug. However when the new bug is created, you can then attach files, therefore also patches.</p>
<!-- TODO: a little more text would be perhaps better. -->

<!-- TODO: URLs of example patch emails -->

<?php
   include("footer.inc");
?>
