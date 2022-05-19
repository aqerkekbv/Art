<?php
if (isset($_COOKIE['lang'])) {
   switch($_COOKIE['lang']) :
   default: include('ru.php'); break;
   case 'ru': include('ru.php'); break;
   case 'en': include('en.php'); break;
endswitch;
}
else{
   include('ru.php');
}

?>