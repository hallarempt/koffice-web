<?php
  $page_title="KChart";
  $site_root='../';
  include("koffice.inc");
  include("header.inc");
?>

<?php
   include("kchart.inc");
   $appinfo->showIconAndCopyright();
?>
      <p>KChart is the KOffice chart drawing application.  Use it to embed charts
      into your KOffice documents, e.g. a report written with KWord or a slideshow made with KPresenter.</p>

        <center>
        <?php
            $gallery = new ImageGallery("KChart - Screenshot");
            $gallery->addImage("pics/kchart_2005_09_330.png",
                            "pics/kchart_2005_09.png",
                            330, 257,
                            "[Screenshot]", "",
                            "KChart showing the bar char template");
            $gallery->show();
        ?>
        </center>

      <p><b>Easy to Use:</b><br /></p>
      <ul>
        <li>default values for all parameters</li>
        <!-- <li>automatic ordinate axis computation based on highest/lowest data value</li> -->
        <li>default sizes (fonts, line widths...) relative to the window size</li>
      </ul>


      <p><b>Highly Configurable:</b></p>
      <ul>
        <li>All of the parameters may be changed after configuring/drawing the chart.</li>
        <!-- <li>Size values (axis/grid line width, font sizes, bar width, dataset gap,
          pie chart radius ... ) may be specified in either absolute pixels or
          relative to the window size.  This makes your chart layout-independent
          since such values are being recalculated automatically when the window
          dimensions have changed.</li> -->
      </ul>
      
      <p><b>Flexible Layout:</b></p>
      <ul>
        <li>Legends may be centered at a chart edge or in a corner with the chart
          making way in vertical and/or in horizontal direction thus offering
          16 legend/chart relationships to choose from</li>
        <li>Header and footer texts have special font type/size and color settings</li>
      </ul>

      <p><b>Axes and Data:</b></p>
      <ul>
        <li>Automatical ordinate axis computation based on highest/lowest data value</li>
        <li>Abscissa labels may be taken either from data cells containing the
          respective strings or from user-defined headings</li>
        <!-- <li>Up to 8 axes: 2 left, 2 right, 2 top, 2 bottom</li> -->
        <!-- <li>A chart may have 2 different ordinates: e.g. left axis for series 1,2,3
          right axis for data series 4</li> -->
        <li>Each axis may draw (sub-)grid lines using their own color, line width,
          style</li>
      </ul>

<!--
      <p><b>Chart Combinations:</b></p>
      <ul>
        <li>sharing the same abscissa axis or using different ones (e.g Top and
          Bottom axis)</li>
        <li>sharing the same ordinate or using different ones (e.g Left and Right
          axis)</li>
        <li>Axes may use the same line color / line width as the bars (or the lines,
          resp.) which they belong to.</li>
      </ul>
-->

      <p><b>Chart Types:</b></p>
      <ul>
        <li>Bar:    normal | stacked | percent, 2D | 3D-Look</li>
        <li>Line:   normal | stacked | percent, line markers<!-- 2D | 3D-Look,
                  show marker: circle | square | diamond --></li>
        <li>Area:   normal | stacked | percent</li>
        <li>HiLo:   normal | open-close</li>
        <li>Box &amp; Whiskers</li>
        <li>Pie:    normal | exploded<!-- | some exploded -->, 2D | 3D</li>
        <li>Ring<!-- :   normal | exploded | some exploded,
                  fixed thickness | relative thickness --></li>
        <li>Polar:  normal | stacked | percent</li>
      </ul>

 <br />
 <hr width="30%" align="center" />
 <p>
 Last update: <?php echo date ("Y-m-d", filemtime(__FILE__)); ?>
 </p>
<?php include("footer.inc"); ?>
