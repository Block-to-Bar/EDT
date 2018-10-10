<div id="registro"  class="seccion confoto">

<!-- cerro inner -->
<div class="inner" id="registroinner">

<h1>Join the project</h1>

<p>Bit&amp;Nibs is looking for investors and collaborators who want 
to become members of our project. If you want to create a startup 
completely based on the power of the blockchain and smart contract, 
please join us!</p>


<form name="FORM" method="POST" action="">
<label>
<span>name :</span>
<input type="text" name="NAME">
</label>

<label>
<span>e-mail :</span>
<input type="text" name="EMAIL">
</label>

<div id="separador" style="height:20px"></div>
<center><button type="submit" name="submit" class="boton icono enviar_en"></button></center>
</form>

<?php

if(isset($_POST['submit'])){
	require("registr_en.php");
}

?>


</div>
<!-- cerro inner -->


</div>

