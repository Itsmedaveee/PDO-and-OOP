<?php 



function view($name,$data = []){

	extract($data);

	$parts = explode('.', $name);
	

	return require __DIR__ .    "/../app/views/{$parts[0]}/{$parts[1]}.view.php";    
}


function redirect($path){

	header("Location:{$path}");
}
