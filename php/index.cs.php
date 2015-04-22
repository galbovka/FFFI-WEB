#!/packages/run/php/bin/php
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="pragma" content="no-cache" />
	<meta http-equiv="cache-control" content="no-cache" />
	<meta http-equiv="Content-Language" content="cs" />
	<meta name="author" content="Anna Galbova, FI MU; Jan Slama, FI MU" />
	<meta name="copyright" content="LEMMA" />
	<meta name="robots" content="all,follow" />
	<meta name="keywords" content="LEMMA PV113 Fakulta informatiky MU multimedia publishing filmová tvorba Softwarové elektronické publikace - seminá filmový festival" />
	<meta name="description" content="FF - LEMMA | Stránky Filmového festivalu Masarykovy univerzity Fakulty informatiky v&nbsp;Brně." />

  <title>15. Filmový festival - FI MU</title>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans&subset=latin%2Clatin-ext' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Oswald&subset=latin%2Clatin-ext' type='text/css'>
  
  <link rel="stylesheet" type="text/css" href="ff.css" />
  <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
  <script type="text/javascript" src="lightbox/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="lightbox/js/lightbox.js"></script>
<link rel="stylesheet" type="text/css" href="lightbox/css/lightbox.css" media="screen, projection, handheld, tv">
   <script src="script.js"></script>
  <!--[if IE]>
  <link rel="stylesheet" type="text/css" href="ie.css" />
  <![endif]-->
  
  <script type="text/javascript">
            (function() {
                var link_element = document.createElement("link"),
                    s = document.getElementsByTagName("script")[0];
                if (window.location.protocol !== "http:" && window.location.protocol !== "https:") {
                    link_element.href = "http:";
                }
                link_element.href += "//fonts.googleapis.com/css?family=Oswald:300,400,700";
                link_element.rel = "stylesheet";
                link_element.type = "text/css";
                s.parentNode.insertBefore(link_element, s);
            })();
  </script>
</head>

<body>
  <div id="soul">		<!-- začátek duše -->
  <div id="body">		<!-- začátek těla -->
  
  <div id="head">		<!-- začátek hlavičky -->
    <div class="header1">
      <table>
        <tr>
          <th class="left"><img src="grafika/stickers1.png"></th>
          <th class="center"><img src="grafika/strih_textura.png"></th>
          <th class="right"><img src="grafika/stickers2.png"></th>
        </tr>
      </table>
	<div class="responsive">
		<p>Fakulta Informatiky MU, Botanická 68a, Brno</p>
		<p>15. května 2015, začátek 19:30</p>
    </div>
	</div>
    <div class="header2">
      <a href="index.cs.php"><img src="grafika/15FFFI.jpg" align="center"></a>
    </div>
    
  <div class="languages">
    <a class="active" href="index.cs.php">CZ</a> / <a href="index.en.php">EN</a>
  </div> 
    
  <div class="menucontainer"> <!-- začátek menu -->
    <table class="menu_row">
      <tr>
        <th></th>
        <th class="menu">
          <div id='cssmenu'>
            <ul>
              <li><a href="index.cs.php"><span>Úvod</span></a></li>
              <li class='has-sub'><a href='#'><span>Festival</span></a>
            <ul>
              <li><a href="index.cs.php?page=o_festivalu.cs"><span>O festivalu</span></a>
              </li>
              <li><a href="index.cs.php?page=prihlaska.cs"><span>Přihláška</span></a>
              </li>
              <li><a href="index.cs.php?page=fotogalerie.cs"><span>Fotogalerie</span></a>
              </li>
              <li><a href="index.cs.php?page=o_nas.cs"><span>Napsali o nás</span></a>
              </li>
            </ul>
              </li>
              <li><a href="index.cs.php?page=partneri.cs"><span>Partneři</span></a></li>
              <li class='last'><a href="index.cs.php?page=kontakt.cs"><span>Kontakt</span></a></li>
            </ul>
          </div>
        </th>
        <th></th>
      </tr>
    </table>
  </div>            <!-- konec menu -->   
  </div>            <!-- konec hlavičky -->
  
	<?php
    	$dir = dirname(__FILE__)."/page/";
    	if (isset($_GET['page'])) {
    	  if (file_exists($dir.$_GET['page'].".php"))
    		    include($dir.$_GET['page'].".php");
  	   else 
            include $dir."404.php";
	  } else {                            
         	include ($dir."main.cs.php");
    	}
    ?>

  <div id="clear"></div>

<div class="paticka">		<!-- začátek patičky -->
    <br />
    <table>
      <tr>                     
        <th><a href="http://www.fi.muni.cz/" target="_blank"><img src="logo/fi.png" width="60px" height="60px"></a></th>
        <th>Technická stránka, grafická úprava: Anna Galbová, Jan Sláma
            <br />
            LEMMA - laboratoř elektronických multimediálních aplikací
            <br />
            <a href="https://www.facebook.com/festival.fi.muni.cz"><img src="grafika/fb.png" width="20px" height="20px"></a> &nbsp
            <a href="https://www.youtube.com/user/fffilemma"><img src="grafika/yt.png" width="30px" height="20px"></a>
        </th>
        <th><a href="http://www.fi.muni.cz/lemma/" target="_blank"><img src="logo/lemma.png"  width="60px" height="60px"></a></th>
      </tr>
    </table>
    <br />
  </div>				    <!-- konec patičky -->

  </div>				    <!-- konec těla -->
  </div>				    <!-- konec duše -->

</body>
</html>