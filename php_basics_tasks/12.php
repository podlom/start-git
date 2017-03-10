<?php

$day=8;	

switch ($day){
	
	case rand (1,5):
	echo 'Это рабочий день';
	break;
	
	case rand(6, 7):
	echo 'Это выходной день';
	break;
	
	
	case rand(8, 50):
	echo 'Это неизвестный день';
	break;
}


	


