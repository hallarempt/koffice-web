#! /usr/bin/env perl

#adjust these two variables to the current version
$VERSION="1.3.2";
$STATUS="stable";

print '<table border="0" cellpadding="4" cellspacing="0">'."\n";
print '<tr valign="top"><th align="left">Location</th><th align="left">MD5&nbsp;Sum</th></tr>'."\n";

while ( <STDIN> )
{
    /^([0-9a-z]+) +(.+)/ ;
    print '<tr valign="top"><td><a href="http://download.kde.org/' . $STATUS . '/koffice-' . $VERSION . '/src/' . $2 . '">'."\n";
    print $2 . '</a></td>'."\n";
    print '<td><tt>' . $1 . '</tt></td></tr>'."\n";
}
print '</table>'."\n";

