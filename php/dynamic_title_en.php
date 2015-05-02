<?php 
$page = $_SERVER['REQUEST_URI'];
if(isset($page)) {

switch($page) {
case "/2015/index.en.php?page=o_festivalu.en":
$title = "15th Film festival - FI MU | About festival";
break;
case "/2015/index.en.php?page=prihlaska.en":
$title = "15th Film festival - FI MU | Registration of student films";
break;
case "/2015/index.en.php?page=prihlaska":
$title = "15th Film festival - FI MU | Registration of student films";
break;
case "/2015/index.en.php?page=fotogalerie.en":
$title = "15th Film festival - FI MU | Photo gallery";
break;
case "/2015/index.en.php?page=o_nas.en":
$title = "15th Film festival - FI MU | Fesitval in media";
break;
case "/2015/index.en.php?page=partneri.en":
$title = "15th Film festival - FI MU | Partners";
break;
case "/2015/index.en.php?page=kontakt.en":
$title = "15th Film festival - FI MU | Contact";
break;
case "/2015/index.en.php?page=festival14.en":
$title = "15th Film festival - FI MU | Photo gallery - Festival 2014";
break;
case "/2015/index.en.php?page=posledni.en":
$title = "15th Film festival - FI MU | Photo gallery - ...ale už poslední";
break;
case "/2015/index.en.php?page=trailer.en":
$title = "15th Film festival - FI MU | Photo gallery - Natáčení traileru";
break;
case "/2015/index.en.php?page=volba.en":
$title = "15th Film festival - FI MU | Photo gallery - Špatná volba";
break;
case "/2015/index.en.php?page=pravidla.en":
$title = "15th Film festival - FI MU | Legal assesments";
break;
case "/2015/index.en.php?page=pravidla":
$title = "15th Film festival - FI MU | Legal assesments";
break;

}
if($page == '' || $page == '/2015/index.en.php') {
$title = "15th Film festival - FI MU | Introduction";
} 
}
if(isset($title)) {
	echo $title;
	}
else {
	echo "15th Film festival - FI MU";
	}

?>