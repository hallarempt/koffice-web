<?php
  $page_title="Krita FAQ";
  $site_root='../';
  include("koffice.inc");
  include("header.inc");
?>

<?php
$faq = new FAQ();
$faq->addQuestion("I'm using Fedora/Suse/Mandriva and Krita is broken! What now?",
    "There are known issues with these distributions that the Krita development team cannot do much
    about right now. Please consult <a href="http://wiki.koffice.org/index.php?title=Krita/Known_problem_with_packages"></a> for fixes.");
$faq->addQuestion("Why is Krita part of KOffice?", "Krita started out as KImageShop inside KOffice because the KOffice libraries give us things for free we would have to
    code ourselves otherwise, like filter handling, rich text tool and so on. Look at KOffice this way: text, numbers and images, both sides of your brain, creative
    and analytic!");
$faq->addQuestion("But it's such a burden! I have to install not just all of KDE, but also all of KOffice. Just to get Krita!", "Well, first of all: strictly speaking
    you need just the kde and koffice libraries, but that's not the point. Would you rather have all that functionality duplicated in Krita (and every other application
    on your system?) Code reuse is good, library sharing is better. It all saves us time to spend on cool features.");
$faq->addQuestion("Still, nobody <i>needs</i> a full-featured paint app in an office suite, do they?", "Think illustrations! An effective booklet or presentation or report needs an effective image to bring home the bacon. Use Krita and Karbon and wow your audience!");
$faq->addQuestion("Why does Krita tell me my image has the sRGB (LCMS internal) profile? I
didn't know it had a profile!", "Krita cannot work without color profiles, so on loading
an RGB image without a profile, Krita assign it a default profile. sRGB is what most
monitors and printers assume when confronted with an image without a profile. This internal
profile will not be saved together with the image.");
$faq->addQuestion("I want pure red -- 255,0,0 but Krita's color selector keeps giving me
something else", "Krita's color selectors will not give you colours outside the gamut that's
allowed by the icc profile associated with your image and your screen. If you want the widest
possible gamut, use sRGB (lcms internal) both for your image and your display. That is the
Krita equivalent of 'do not use color correction'.");
$faq->addQuestion("I've got an image with an embedded profile, but Krita says it's plain sRGB?", "Krita has converted your image from the the embedded profile to sRGB because the embedded profile does not provide two-way transformation. That means that it can be used to convert from the profile to the display profile, but not from the display profile to the embedded profile. Since Krita needs to go both ways -- when you paint, the colors you paint with are converted to the image profile, Krita needed to convert your image.");
$faq->addQuestion("What an ugly name! It doesn't mean anything either, does it?",
"Krita is Swedish for chalk or crayon. That 'rita' is also Swedish for to draw and that 
the name Krita could be read a k-rita was unintentional. It is also possible that
the then-maintainer of Krita choose 'krita' in the Sanskrit meaning of the word,
namely perfect, as in 'krita yuga' -- perfect age. Anyway, since John Califf has disappeared
we can never be sure. 
However, preceding maintainers were fairly sure that we wouldn't get hit by lawyers again
by using <i>this</i> name. Me, I would have preferred Kandinsky, but there's already
an art app (for the Atari ST) with that name. I won't do another renaming: three
names is enough for any application.");

$faq->addQuestion("What is Krita?",
"Krita, formerly known as KImageShop and ------, is the painting program and image editor for the KOffice Suite.
 It is intended to be suitable for all your image creation and editing needs, such as creating original art,
 making images for websites,
 touching up scanned photographs or anything else you might need to do with bitmapped images.");
 
$faq->addQuestion("Yet another Paint Program?",
"Why, yes. Why not? As a KOffice application, Krita should integrate with KDE more tightly than the Gimp
 could ever hope to do. By following the KDE User Interface Design guidelines, users won't have to switch
 between user interface paradigms. And, last but not least, different projects can work towards different
 design goals. Krita could become the free paint application, a Deep Paint or Corel Painter (but
 better!) that is still missing.");

$faq->addQuestion("What are Krita's Development Goals ?",
 "Krita is primarily a painting program, although it has image processing capabilities.
  This means that Krita is intended for creative people who desire to paint and draw with computer software as they do with
   real-world tools in an art studio.  If you are looking for a tool primarily to apply effects to existing images or
   photos, to catalog images, or to view images other software (such as Digikam) may be more suitable.  Ease of use and power as a
   painting application will always have a higher priority in Krita's ongoing development.");

$faq->addQuestion("How Does it Work?",
"This question is answered globally in <a href=\"/developer/krita/\">Developing Krita</a>. The most complete answer
can of course be found in the <a href=\"http://websvn.kde.org/trunk/koffice/krita\">Krita source.</a>  Krita
is still small enough that it is fairly easy to 'get into' the codebase, and start adding features.
Almost all functionality, from color models to tools, from filters to file formats, from colour pickers screenshot grabbers 
is implemented as plugins on a small core. You could start you very own first Krita plugin today by simply following the 
lead of the example plugin");

$faq->addQuestion("This is the Kimp, right?",
"If I had a penny for every time the Kimp was mentioned, I'd be able to do full-time development
on Krita. No, this is not the Kimp. The Kimp was a hack, a clever hack, a KDE developer created
using Perl to give the Gimp a KDE interface. This is a completely new application that doesn't share
the same design goals as the Gimp does.");

$faq->addQuestion("So, why not? Why reinvent the wheel?",
"Because we don't want to do the same thing as the Gimp. The Gimp is outstanding at what it does, and
there's indeed no reason to reinvent the wheel.");

$faq->addQuestion("When will it be released?",
"The first official, public release of Krita is part of KOffice 1.4, has been released June 20, 2005.
The next release will contain the first painterly features.");

$faq->addQuestion("Would you like bug reports?",
"Definitely. Even wishlist reports. Please take care to include backtraces if you've got a crash,
and if there's an image that breaks Krita for you, try to attach the image to the report. If it's
too big, mail <a href=\"mailto:boud@valdyas.org\">me</a>, and we'll find a formula. About wishlist items:
it may be a good idea to read our <a href=\"http://websvn.kde.org/trunk/koffice/krita/TODO\">TODO</a>, which
is already quite extensive and probably contains your wish already.");

$faq->addQuestion("Can I get in on this thing?",
"Indubitably. The best thing you can do is use and enjoy Krita!  Learn to use Krita and
teach others. Create tutorials and sample files, create artwork to show
 ff what Krita can do and spread the good word. And if you want to be more directly involved, well,
I didn't know any C++ when I started hacking on Krita and I managed. You can do that, too!
And if you don't feel like hacking C++ -- well, there's the manual that needs someone attending to it,
a set of tutorials would be nice, I'm everlastingly needing more artwork for interface elements, and finally,
I really appreciate reports from people using it, telling me about their workflow and what hampers or
helps them.");


$faq->show();
?>
<?php include("footer.inc"); ?>

