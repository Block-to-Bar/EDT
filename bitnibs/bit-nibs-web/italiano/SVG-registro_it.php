<div id="registro"  class="seccion confoto">

<!-- cerro inner -->
<div class="inner" id="registroinner">

<h1>aderice il nostro progetto</h1>

<p>Il progetto Bit&amp;Nibs cerca investitori e colaboratori il quali vogliano protagonizare insieme a noi la creazione di una startup 100% basata su il potere de la blockchain y di i contrati inteligentes. ¡Saremo tutti il riferimento al nuovo mondo che sta nascendo!</p>


<form name="FORM" method="POST" action="">
<label>
<span>nome :</span>
<input type="text" name="NOMBRE">
</label>

<label>
<span>e-mail :</span>
<input type="text" name="EMAIL">
</label>

<div id="separador" style="height:20px"></div>
<center><button type="submit" name="submit" class="boton icono enviar_it"></button></center>
</form>

<?php

if(isset($_POST['submit'])){
	require("registr_it.php");
}

?>


</div>
<!-- cerro inner -->


</div>

