<?php
  $page_title="Kivio Stencil Format";
  $site_root='../';
  include("koffice.inc");
  include("header.inc");
?>

<h1>Kivio Stencil Format Guide v1.0</h1>
<p>by Ian Reinhart Geiser &lt;<a href="mailto:geiseri@KDE.org">geiseri@KDE.org</a>&gt;</p>
<!-- Format Description: -->
<h2>1. Top level Keywords</h2>
<h3>1.1. KivioSMLStencilSpawnerInfo</h3>
<h4>1.1.1. Attributes</h4>
<ul>
  <li>creator - string</li>
</ul>
<h4>1.1.2. Properties</h4>
<ul>
  <li>Author - string (data)</li>
  <li>Title - string (data)</li>
  <li>Id - string (data)</li>
  <li>Description - string (data)</li>
  <li>Version - string (data)</li>
  <li>Web - string (data)</li>
  <li>AutoUpdate - string (data)</li>
</ul>
<h3>1.2. KivioShape</h3>
<h4>1.2.1. Attributes</h4>
<ul>
<li>fgColor - Qt named color</li>
<li>lineWidth - float</li>
<li>type</li>
</ul>
<h4>1.2.2. Properties</h4>
<ul>
<li>defined by shape type</li>
</ul>
<h3>1.3. Dimensions</h3>
<h4>1.3.1. Attributes</h4>
<ul>
<li>w - float</li>
<li>h - float</li>
<li>aspectRatio</li>
</ul>
<h3>1.4. KivioConnectorTarget</h3>
<h4>1.4.1. Attributes</h4>
<ul>
<li>x - float</li>
<li>y - float</li>
</ul>
<h2>2. KivioShapes</h2>
<h3>2.1. Types</h3>
<h4>2.1.1. Arc</h4>
<em>not implemented yet</em>
<h4>2.1.2. Pie</h4>
<em>not implemented yet</em>
<h4>2.1.3. LineArray</h4>
<h5>2.1.3.1. Attributes</h5>
<ul>
<li>name - string</li>
</ul>
<h5>2.1.3.2. Properties</h5>
<ul>
<li>KivioLineStyle - single</li>
<li>KivioPoint - multiple</li>
</ul>
<h4>2.1.4. Polyline</h4>
<h5>2.1.4.1. Attributes</h5>
<ul>
<li>name - string</li>
</ul>
<h5>2.1.4.2. Properties</h5>
<ul>
<li>KivioLineStyle - single</li>
<li>KivioPoint - multiple</li>
</ul>
<h4>2.1.5. Polygon</h4>
<h5>2.1.5.1. Attributes</h5>
<ul>
<li>name - string</li>
</ul>
<h5>2.1.5.2. Properties</h5>
<ul>
<li>KivioLineStyle - single</li>
<li>KivioPoint - multiple</li>
</ul>
<h4>2.1.6. Bezier</h4>
<h5>2.1.6.1. Attributes</h5>
<ul>
<li>name - string</li>
</ul>
<h5>2.1.6.2. Properties</h5>
<ul>
<li>KivioLineStyle - single</li>
<li>KivioPoint - multiple of 4 point sets of type bezier</li>
</ul>
<h4>2.1.7. Rectangle</h4>
<h5>2.1.7.1. Attributes</h5>
<ul>
<li>name - string</li>
<li>x - float</li>
<li>y - float</li>
<li>w - float</li>
<li>h - float</li>
</ul>
<h5>2.1.7.2. Properties</h5>
<ul>
<li>KivioLineStyle - single</li>
<li>KivioFillStyle - single</li>
</ul>
<h4>2.1.8. RoundRectangle</h4>
<h5>2.1.8.1. Attributes</h5>
<ul>
<li>name - string</li>
<li>x - float</li>
<li>y - float</li>
<li>w - float</li>
<li>h - float</li>
<li>r1 - float</li>
<li>r2 - float</li>
</ul>
<h5>2.1.8.2. Properties</h5>
<ul>
<li>KivioLineStyle - single</li>
<li>KivioFillStyle - single</li>
</ul>
<h4>2.1.9. Ellipse</h4>
<h5>2.1.9.1. Attributes</h5>
<ul>
<li>name - string</li>
<li>x - float</li>
<li>y - float</li>
<li>w - float</li>
<li>h - float</li>
</ul>
<h5>2.1.9.2. Properties</h5>
<ul>
<li>KivioLineStyle - single</li>
<li>KivioFillStyle - single</li>
</ul>
<h4>2.1.10. OpenPath</h4>
<h5>2.1.10.1. Attributes</h5>
<ul>
<li>name - string</li>
</ul>
<h5>2.1.10.2. Properties</h5>
<ul>
<li>KivioLineStyle - single</li>
</ul>
<h4>2.1.11. ClosedPath</h4>
<h5>2.1.11.1. Attributes</h5>
<ul>
<li>name - string</li>
</ul>
<h5>2.1.11.2. Properties</h5>
<ul>
<li>KivioLineStyle - single</li>
<li>KivioFillStyle - single</li>
<li>KivioPoint - multiple</li>
</ul>
<h4>2.1.12. TextBox</h4>
<h5>2.1.12.1. Attributes</h5>
<ul>
<li>name - string</li>
<li>color - Qt named color</li>
<li>x - float</li>
<li>y - float</li>
<li>h - float</li>
<li>w - float</li>
</ul>
<h5>2.1.12.2. Properties</h5>
<ul>
<li>KivioLineStyle - single</li>
<li>KivioFillStyle - single</li>
<li>KivioTextStyle - single</li>
<li>KivioText - single</li>
</ul>

<h2>3. Shape Properties</h2>
<h3>3.1. KivioPoint</h3>
<h4>3.1.1. Attributes</h4>
<ul>
<li>x - float</li>
<li>y - float</li>
<li>type - invalid, normal, bezier, arc, last</li>
</ul>
<h3>3.2. KivioLineStyle</h3>
<h4>3.2.1. Attributes</h4>
<ul>
<li>color - Qt named color</li>
<li>width - float</li>
<li>capstyle - int
<ul>
<li>FlatCap 0</li>
<li>SquareCap 10</li>
<li>RoundCap 20</li>
</ul>
</li>
<li>joinstyle - int
<ul>
<li>MiterJoin 0</li>
<li>BevelJoin 40</li>
<li>RoundJoin 80</li>
</ul>
</li>
<li>pattern - int
<ul>
<li>NoPen 0</li>
<li>SolidLine 1</li>
<li>DashLine 2</li>
<li>DotLine 3</li>
<li>DashDotLine 4</li>
<li>DashDotDotLine 5</li>
</ul>
</li>
</ul>
<h3>3.3. KivioFillStyle</h3>
<h4>3.3.1. Attributes</h4>
<ul>
<li>color - Qt named color</li>
<li>colorStyle - int
<ul>
<li>None 0</li>
<li>Solid 1</li>
<!-- Not implemented in Kivio 1.3
<li>Gradient 2</li>
<li>Pixmap 3</li>
-->
</ul>
</li>
<!-- Not implemented in Kivio 1.3
<li>gradientColor - Qt named color (only needed if colorStyle = Gradient)</li>
<li>gradientType - int (only needed if colorStyle = Gradient)
<ul>
<li>Vertical 0</li>
<li>Horizontal 1</li>
<li>Diagonal 2</li>
<li>CrossDiagonal 3</li>
<li>Pyramid 4</li>
<li>Rectangle 5</li>
<li>PipeCross 6</li>
<li>Elliptic 7</li>
</ul>
</li>
<li>pixmap - path to the pixmap to use with colorStyle = Pixmap</li>
-->
</ul>
<h3>3.4. KivioText</h3>
<h4>3.4.1. Attributes</h4>
<ul>
<li>text  - string</li>
<li>isHtml - int
<ul>
<li>text 0</li>
<li>html 1</li>
</ul>
</li>
<li>hTextAlign - int
<ul>
<li>AlignAuto 0</li>
<li>AlignLeft 1</li>
<li>AlignRight 2</li>
<li>AlignHCenter 4</li>
<li>AlignJustify 8</li>
</ul>
</li>
<li>vTextAlign - int
<ul>
<li>AlignTop 10</li>
<li>AlignBottom 20</li>
<li>AlignVCenter 40</li>
</ul>
</li>
</ul>
<h4>3.4.2. Properties</h4>
<ul>
<li>TextFont</li>
</ul>
<h3>3.5. TextFont</h3>
<h4>3.5.1. Attributes</h4>
<ul>
<li>family - string</li>
<li>size - int</li>
<li>bold - int
<ul>
<li>normal 0</li>
<li>bold 1</li>
</ul>
</li>
<li>italic - int
<ul>
<li>normal 0</li>
<li>italic 1</li>
</ul>
</li>
<li>underline - int
<ul>
<li>normal 0</li>
<li>underline 1</li>
</ul>
</li>
<li>strikeOut - int
<ul>
<li>normal 0</li>
<li>strike out 1</li>
</ul>
</li>
<li>fixedPitch - int
<ul>
<li>normal 0</li>
<li>fixed 1</li>
</ul>
</li>
<li>color - Qt named color</li>
</ul>
<!-- Stencil Construction: -->
<h2>4. icon.xpm - Single Per Stencil Pack</h2>
<p>
This is simply a 16x16 pixel xpm that will present the icon of the stencil pack to the user.
</p>
<h2>5. desc - Single Per Stencil Pack</h2>
<p>
The description is the top level file that will provide the description of the stencil pack to the user in kivio.
</p>
<h3>5.1. Top Level Keywords</h3>
<h4>5.1.1. KivioStencilSpawnerSet</h4>
<h5>5.1.1.1. Properties</h5>
<ul>
<li>Title</li>
<li>Id</li>
</ul>
<h4>5.1.2. Title</h4>
<h5>5.1.2.1. Attributes</h5>
<ul>
<li>data - string</li>
</ul>
<h4>5.1.3. Id</h4>
<h5>5.1.3.1. Attributes</h5>
<ul>
<li>data - string</li>
</ul>
<h3>5.2. Example Desc File</h3>
<code>
&lt;?xml version="1.0"?&gt;
&lt;KivioStencilSpawnerSet&gt;
  &lt;Title data="Basic Circut Shapes"/&gt;
  &lt;Id data="Ian Reinhart Geiser"/&gt;
&lt;/KivioStencilSpawnerSet&gt;
</code>
<h2>6. *.sml Files - Multiple Per Stencil Pack</h2>
<p>
For more information on the tags of the SML format please refer to sections 1-3.
</p>
<h3>6.1. Example SML File</h3>
<code>
<pre>
&lt;?xml version="1.0"?&gt;
&lt;KivioShapeStencil creator="kate"&gt;
                &lt;KivioSMLStencilSpawnerInfo&gt;
                        &lt;Author data="Ian Reinhart Geiser"/&gt;
                        &lt;Title data="Not"/&gt;
                        &lt;Id data="Not"/&gt;
                        &lt;Description data="Logical Not Gate"/&gt;
                        &lt;Version data="0.1"/&gt;
                        &lt;Web data="www.kde.org"/&gt;
                        &lt;Email data="geiseri@kde.org"/&gt;
                        &lt;Copyright data="Copyright (C) 2002 Ian Reinhart Geiser"/&gt;
                        &lt;AutoUpdate data="off"/&gt;
                &lt;/KivioSMLStencilSpawnerInfo&gt;
        &lt;KivioConnectorTarget  x="5" y="10"/&gt;
        &lt;KivioConnectorTarget  x="5" y="0"/&gt;
        &lt;KivioConnectorTarget  x="0" y="5"/&gt;
        &lt;KivioConnectorTarget  x="10" y="5"/&gt;
        &lt;Dimensions w="10" h="10" defaultAspect="1"/&gt;
        &lt;KivioShape type="Ellipse" name="Connector" x="0" w="10" y="0" h="10"/&gt;
&lt;/KivioShapeStencil&gt;
</pre>
</code>
<h2>7. *.xpm - One Per Stencil</h2>
<p>
This is simply a 22x22 pixel xpm that will present the icon of the stencil to the user in the tray.
</p>

<?php include("footer.inc"); ?>
