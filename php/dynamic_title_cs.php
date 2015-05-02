<?php 
$page = $_SERVER['REQUEST_URI'];
if(isset($page)) {

switch($page) {
case "/2015/index.cs.php?page=o_festivalu.cs":
$title = "15. Filmový festival - FI MU | O Festivalu";
break;
case "/2015/index.cs.php?page=prihlaska.cs":
$title = "15. Filmový festival - FI MU | Přihláška";
break;
case "/2015/index.cs.php?page=prihlaska":
$title = "15. Filmový festival - FI MU | Přihláška";
break;
case "/2015/index.cs.php?page=fotogalerie.cs":
$title = "15. Filmový festival - FI MU | O Fotogalerie";
break;
case "/2015/index.cs.php?page=o_nas.cs":
$title = "15. Filmový festival - FI MU | O nás";
break;
case "/2015/index.cs.php?page=partneri.cs":
$title = "15. Filmový festival - FI MU | Partneři";
break;
case "/2015/index.cs.php?page=kontakt.cs":
$title = "15. Filmový festival - FI MU | Kontakt";
break;
case "/2015/index.cs.php?page=festival14.cs":
$title = "15. Filmový festival - FI MU | Fotogalerie - Festival 2014";
break;
case "/2015/index.cs.php?page=posledni.cs":
$title = "15. Filmový festival - FI MU | Fotogalerie - ...ale už poslední";
break;
case "/2015/index.cs.php?page=trailer.cs":
$title = "15. Filmový festival - FI MU | Fotogalerie - Natáčení traileru";
break;
case "/2015/index.cs.php?page=volba.cs":
$title = "15. Filmový festival - FI MU | Fotogalerie - Špatná volba";
break;
case "/2015/index.cs.php?page=pravidla.cs":
$title = "15. Filmový festival - FI MU | Pravidla";
break;
case "/2015/index.cs.php?page=pravidla":
$title = "15. Filmový festival - FI MU | Pravidla";
break;

}
if($page == '' || $page == '/2015/index.cs.php') {
$title = "15. Filmový festival - FI MU | Úvod";
} 
}
if(isset($title)) {
	echo $title;
	}
else {
	echo "15. Filmový festival - FI MU";
	}

?>