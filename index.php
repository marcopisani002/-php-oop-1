<?php

require_once "./classes/movie.php";


$myFirstMovie = new Movie("La Vita è Bella","vita",125,"Roberto Benigni");

$mySecondMovie = new Movie("E' Stata La Mano Di Dio","mano",130,"Paolo Sorrentino");



var_dump($myFirstMovie);


$myFirstMovie -> setDuration(140);

var_dump($myFirstMovie);

var_dump($mySecondMovie);



echo  " <br>  ". "Nome completo  film 1" . " <br>  ". $myFirstMovie -> getFullName();

echo  " <br>  ". "Nome completo  film 2" . " <br>  ". $mySecondMovie -> getFullName();

?>