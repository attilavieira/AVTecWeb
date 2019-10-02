<?php
	// var_dump ($_GET);
	$formulario = $_GET;
	
	echo '<link rel="stylesheet" type="text/css" href="estilos.css" /> <dl>';
	foreach($formulario as $key=>$value) {
    		echo "<li> $key: $value </li>";
		if ($key == "filhos") echo'-----------------'; 
	
		
	}
	echo "</dl>";



?>