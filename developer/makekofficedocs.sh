#!/bin/bash

DIR="
example
filters
interfaces
karbon
kchart
kdgantt
kexi
kformula
kivio
koshell
kplato
kpresenter
krita
kspread
kugar
kword
lib
"

SOURCEDIR=/home/howells/cvs/koffice
DESTDIR=/home/howells/public_html/apidocs
TARDIR=/home/howells/public_html

cd $SOURCEDIR && cvs up

for dir in $DIR
do
  echo "switching to $SOURCEDIR/$dir"
  cd $SOURCEDIR/$dir
  DOXYFILE="$SOURCEDIR/$dir/Doxyfile"
  echo "copying Doxyfile.temp to $DOXYFILE"
  cp $SOURCEDIR/Doxyfile.temp $DOXYFILE
  echo "PROJECT_NAME           = \"$dir\"" >> $DOXYFILE
  echo "INPUT                  = \"$SOURCEDIR/$dir\"" >> $DOXYFILE
  echo "OUTPUT_DIRECTORY       = \"$DESTDIR/$dir\"" >> $DOXYFILE
  doxygen $DOXYFILE
done

INDEX=$DESTDIR/index.html

echo "<html>" > $INDEX
echo "<head><title>KOffice API Documentation</title></head>" >> $INDEX
echo "<body>" >> $INDEX
echo "<h1>KOffice API Documenation</h1>" >> $INDEX
echo "<p>Select a component to view the documentation for that component</p>" >> $INDEX
echo "<ul>" >> $INDEX
for dir in $DIR
do
  echo "<li><a href=\"$dir/html\">$dir</a></li>" >> $INDEX
done
echo "</ul>" >> $INDEX
echo "</body>" >> $INDEX
echo "</html>" >> $INDEX

cd $TARDIR && tar cvjf kofficeapidocs.tar.bz2 apidocs
