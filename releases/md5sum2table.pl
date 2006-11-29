#! /usr/bin/env perl
# run it with perl md5sum2table.pl < MD5SUM > md5-koffice-1.5-rc1.inc
#adjust these two variables to the current version
$VERSION="1.6.1";
$STATUS="stable";

# team names (from kde-i18n/teamnames)
use constant LANGUAGES =>
{
    "af" => "Afrikaans",
    "ar" => "Arabic",
    "az" => "Azerbaijani",
    "be" => "Belarusian",
    "bg" => "Bulgarian",
    "bn" => "Bengali",
    "bo" => "Tibetan",
    "br" => "Breton",
    "bs" => "Bosnian",
    "ca" => "Catalan",
    "cs" => "Czech",
    "cy" => "Welsh",
    "da" => "Danish",
    "de" => "German",
    "el" => "Greek",
    "en_GB" => "British English",
    "eo" => "Esperanto",
    "es" => "Spanish",
    "et" => "Estonian",
    "eu" => "Basque",
    "fa" => "Farsi",
    "fi" => "Finnish",
    "fo" => "Faroese",
    "fr" => "French",
    "fy" => "Frisian",
    "ga" => "Irish Gaelic",
    "gl" => "Galician",
    "he" => "Hebrew",
    "hi" => "Hindi",
    "hr" => "Croatian",
    "hsb" => "Upper Sorbian",
    "hu" => "Hungarian",
    "id" => "Indonesian",
    "is" => "Icelandic",
    "it" => "Italian",
    "ja" => "Japanese",
    "ko" => "Korean",
    "ku" => "Kurdish",
    "lo" => "Lao",
    "lt" => "Lithuanian",
    "lv" => "Latvian",
    "mi" => "Maori",
    "mk" => "Macedonian",
    "mn" => "Mongolian",
    "ms" => "Malay",
    "mt" => "Maltese",
    "nl" => "Dutch",
    "nb" => "Norwegian Bokm&aring;l",
    "nso" => "Northern Sotho",
    "nn" => "Norwegian Nynorsk",
    "oc" => "Occitan",
    "pl" => "Polish",
    "pt" => "Portuguese",
    "pt_BR" => "Brazilian Portuguese",
    "ro" => "Romanian",
    "ru" => "Russian",
    "se" => "Northern Sami",
    "sk" => "Slovak",
    "sl" => "Slovenian",
    "sq" => "Albanian",
    "sr" => "Serbian",
    "sr\@Latn" => "Serbian Latin",
    "ss" => "Swati",
    "sv" => "Swedish",
    "ta" => "Tamil",
    "tg" => "Tajik",
    "th" => "Thai",
    "tr" => "Turkish",
    "uk" => "Ukrainian",
    "ven" => "Venda",
    "vi" => "Vietnamese",
    "wa" => "Walloon",
    "xh" => "Xhosa",
    "zh_CN" => "Chinese Simplified",
    "zh_TW" => "Chinese Traditional",
    "zu" => "Zulu"
};

warn("Assuming KOffice version $VERSION");

# print header
print '<table border="0" cellpadding="4" cellspacing="0">'."\n";
print '<tr>';
print '<th align="left">Description</th>';
print '<th align="left">Location</th>';
print '<th align="left">MD5&nbsp;Sum</th>';
print '</tr>'."\n";

while ( <STDIN> )
{
    /^([0-9a-z]+) +(.+)/ ;
    $package = $2;
    $md5sum = $1;

    if ( $package =~ /^koffice-l10n/ )
    {
        $package =~ /koffice-l10n-([0-9a-zA-Z_\@]+)-/ ;
        if ( $1 cmp "" )
        {
            $description = LANGUAGES->{$1};
            if ( ! $description cmp "" )
            {
                warn "Unknown language: $1";
            }
        }
        else
        {
            $description = "All languages";
        }
    }
    else
    {
        $description = "General";
    }

    if ( $package =~ /xdelta$/ )
    {
        $description = $description . ' *';
    }
    
    print '<tr>';
    print "<td>$description</td>\n";
    print '<td><a href="http://download.kde.org/' . $STATUS . '/koffice-' . $VERSION . '/src/' . $package . '">'."\n";
    print $package . '</a></td>'."\n";
    print '<td><tt>' . $md5sum . '</tt></td></tr>'."\n";
}
print '</table>'."\n";
print "<p>*: XDelta patches</p>\n";

