#!/usr/bin/env python

import sys
import fileinput
import string

VERSION="1.2.91"
STATUS="unstable"

def makeTable(_file):
    print '<table border="0" cellpadding="4" cellspacing="0">'
    print '<tr valign="top"><th align="left">Location</th><th align="left">MD5&nbsp;Sum</th></tr>'
    for line in fileinput.input(_file):
        columns = string.split(string.strip(line))
        print '<tr valign="top"><td><a href="http://download.kde.org/' + STATUS + '/koffice-' + VERSION + '/src/' + columns[1] + '">'
        print columns[1] + '</a></td>'
        print '<td><tt>' + columns[0] + '</tt></td></tr>'
    print '</table>'

def usage():
    print """md5sum2table.py -- parses the file given as argument
and outputs the text formatted as an HTML table on stdout."""
    

if __name__ == '__main__':
    if (len(sys.argv)==1):
        usage()
    else:
        makeTable(sys.argv[1:])
