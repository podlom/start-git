<?php

$age=rand(18,90);	
echo 'My age is: ' . $age . '<br>';

if ($age>=18 && $age<=59) {
	
	echo 'Вам еще работать и работать <br>';
	
} elseif ($age>=60) {
	
	echo 'Вам пора на пенсию <br>';		
	
}

	


