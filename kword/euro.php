<?php
  $page_title="KWord Euro Sign";
  $site_root='../';
  include("koffice.inc");
  include("header.inc");
?>

      <p>
      This is an attempt at providing clues about how to type and render
      the Euro sign. In fact the information provided here isn't specific to
      KWord, the same applies to any X application.
      </p>

      <p>
      The Euro problem is a three-fold problem: key combination, character conversion, and rendering.
      </p>

      <h2>Assigning a key combination to the Euro sign:</h2>
      <p>
      You obviously need to map one of your keys - or a combination of keys -
      to the EuroSign symbol. A commonly chosen key combination is AltGr + E.
      The instructions below explain how to map that key combination, but you can
      choose any other one you like, for instance if you don't have an AltGr key :)
      </p>
      <p>
      Under X (the graphical system you're using), this means the Mode_switch modifier
      (to be mapped to AltGr) with the E key (keycode 26), to be mapped to the EuroSign symbol.
      </p>
      <p>
      In fact it might be good to start by checking if you don't already have a
      key assigned to the euro sign. Type <code>xmodmap -pke | grep EuroSign</code> to find out.
      </p>
      <p>
      If nothing appeared, we are going to map it to AltGr+E.<br />
      First check you have AltGr bound to the Mode_switch modifier:<br />
      <code>xmodmap</code> should show a line with <code>mod3        Mode_switch</code>.
      If it doesn't have anything for mod3, type <code>xmodmap -e 'add mod3  = Mode_switch'</code>.
      If it shows something else for mod3, you might have to type <code>xmodmap -e 'clear mod3'</code> first.
      </p>
      <p>
      Then check what the E key can generate:<br />
      <code>xmodmap -pke | grep -w 26</code> will probably show <code>keycode  26 = e E</code>.
      If that's the case, simply ask for EuroSign as the 3rd symbol on this key, by
      typing <code>xmodmap -e 'keycode 26 = e E EuroSign'</code>
      </p>
      <p>
      This should be all you need to bind AltGr+E to the EuroSign symbol.
      All the xmodmap commands we have typed here are only for the current X session,
      so if anything goes wrong you can restart X and find the original keys again.
      To make those changes permanent, put the xmodmap lines (what was between the single quotes)
      in your ~/.Xmodmap file. Mine reads:
      <blockquote><pre>keycode 26 = e E EuroSign</pre></blockquote>
      </p>
      <p>
      It seems that kxkb (the "International Keyboard" KDE application that docks into the
      panel) overrides the xmodmap changes. So the best is to simply disable kxkb (there is
      a checkbox in its control module). Or run <code>xmodmap ~/.Xmodmap</code> from a
      terminal before use, but every keymap-switching in kxkb will lose this.
      </p>
      <p>
      If everything fails and you don't manage to make AltGr+E work, you can always
      use the "Character picker" applet in kicker (the panel), or application-specific
      "Insert special character" dialogs.
      </p>

      <h2>Character conversion:</h2>
      <p>
      Another thing to do is to select a locale (usually language and country) which
      provides a character the Euro symbol. Check your /usr/locale or /usr/share/locale
      directory, where all the locales are. In my case I selected fr_FR@euro. The first
      bit is the language (in this case French), the second bit is the country (in this
      case FR for France), and the '@euro' is a variant of that locale, that provides the
      euro symbol. If you can't find any relevant locales, make sure you installed the
      appropriate package (under Mandrake and probably RedHat, it's <code>locales-fr</code>
      for instance).
      <br/>
      To select a locale, add <blockquote><code>export LC_ALL="fr_FR@euro"</code></blockquote>
      to ~/.bashrc (assuming you are using bash). Somehow KDE should export LC_ALL itself,
      this is the same problem as the non-latin1 users, and still under debate...
      If you see "Qt: Locales not supported on X server" after setting LC_ALL, it means
      that your X server doesn't support this locale. You may have to restart X, or
      choose another value for LC_ALL.
      <br/>
      Another way is to use the iso8859-15 charset, which is probably a better longterm
      solution. However, this might reduce the number of available fonts, on a standard linux
      system. In that case, prefer the @euro solution, if you have such a locale,
      since it allows to keep the latin1 (iso8859-1) charset. If you have unicode fonts,
      then select iso8859-15.
      <br/>
      Jarno Elonen pointed me to the fact that both (@euro and the locale name) can be combined.
      For instance he sets:
      <code>
        LANG=fi_FI@euro.ISO8859-15<br/>
        LC_ALL=fi_FI@euro<br/>
      </code>
      I must admit I don't know yet how this really works, and what should really be set.
      Any additional input appreciated.
      </p>

      <h2>Rendering the Euro sign:</h2>
      <p>
      To actually see a Euro sign, you need a font that contains it.
      If you got font anti-aliasing to work, you are lucky. The Arial font and
      many other fonts will provide the Euro sign for you. The presence of Xft
      makes font handling much easier, and solves many problems. Xft (v1) is being
      used by Qt 3 when available, and the RENDER extension (of XFree86) is available
      as well.  To set up Xft and fonts in general, see
      <a href="http://trolls.troll.no/lars/fonts/qt-fonts-HOWTO.html">this howto</a>.
      <br/>
      If you don't have anti-aliasing, you need to use a font that provides this symbol.
      According to my experiences, a nice font to use is "clearlyu". Another that
      provides it is the "fixed" font, but not always (the symbol only appears after
      zooming, or after reloading the document...). Very strange.
      </p>
      <p>
      To test the rendering of the Euro symbol without the need for the previous
      two steps, KWord provides a test document under koffice/kword/demos called
      eurosign.kwd, where you can see if the rendering bit works.
      </p>
      <p>
      Any input in this domain will be very appreciated. I know the keyboard issue
      quite well (having written X11-keyboard-related code in the past), but not much
      about the locale and font issues. If you know a simpler way to do all this, please
      drop me an e-mail :)
      </p>

<?php
 include("footer.inc");
?>

