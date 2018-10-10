<div id="registro"  class="seccion confoto">

<!-- cerro inner -->
<div class="inner" id="registroinner">

<h1>¿Quieres saber más sobre el proyecto?</h1>

<p>El proyecto Bit&amp;Nibs busca inversores y colaboradores que quieran protagonizar junto a nosotros la creación de una startup 100% basada en el poder de la blockchain y de los contratos inteligentes. ¡Seamos todos juntos la referencia del nuevo mundo que está por nacer!</p>


<form name="FORM" method="POST" action="">
<label>
<span>nombre :</span>
<input type="text" name="NOMBRE">
</label>

<label>
<span>e-mail :</span>
<input type="text" name="EMAIL">
</label>

<div id="separador" style="height:20px"></div>
<center><button type="submit" name="submit" class="boton icono enviar"></button></center>
</form>

<?php

if(isset($_POST['submit'])){
	require("registr.php");
}

?>


</div>
<!-- cerro inner -->


</div>

