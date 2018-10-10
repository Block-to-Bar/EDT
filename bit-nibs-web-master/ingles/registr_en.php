<?php
	
	$nombre = $_POST['NAME'];
	$email = $_POST['EMAIL'];

	$reqlen = strlen($nombre)*strlen($email);

	if($reqlen==0){
		die("<br><center>Antes de enviar asegúrese de colocar información en ambos campos.</center>");
	} else {

		$link = mysqli_connect("176.32.230.45","cl58-bitnibs","n4fB!3z9d3qV49E9^m","cl58-bitnibs");

		if($link){
			mysqli_select_db("cl58-bitnibs",$link);
		}else{
			echo "<br><center>Hubo un problema.<br></center>";
		}

		mysqli_set_charset($link,"utf8");

		$sql = "INSERT INTO `Suscriptores_en`(`NAME`,`EMAIL`) VALUES(?,?)";

    	$stmt = mysqli_prepare($link, $sql);

    	mysqli_stmt_bind_param($stmt, "ss", $_POST['NAME'], $_POST['EMAIL']);

		if (mysqli_stmt_execute($stmt)) {
    		echo utf8_decode("<br><center> Grazie nel suo interese nel proyecto. Lo mantendremos bien informado de nuestras propuestas. </center>");
			} else {
    			echo "Error en escritura de BD: " . $sql . "<br>" . mysqli_error($link) . "<br> Por favor vuelva en otro momento para reintentar.";
		}

	mysqli_close($link);


	}
	
 //header("Location: #registro"); 

?>