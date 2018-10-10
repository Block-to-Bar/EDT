<?php
$conn = mysqli_connect("localhost", "cl11-admin-gvj", "3qXPXc9{k!TGidB^pTA", "cl11-admin-gvj");


if (!$conn) {
    die("Error en conexión con la BD: " . mysqli_connect_error());
}

mysqli_set_charset($conn,"utf8");

$sql = "INSERT INTO `candidatos_diseno`(`primer_nombre`, `segundo_nombre`, `primer_apellido`, `segundo_apellido`, `sexo`, `lugar_nacimiento`, `fecha_nacimiento`, `edad`, `cedula`, `estado_civil`, `email`, `direccion`, `secundaria`, `secundaria_ano`, `secundaria_mencion`, `universidad`, `universidad_ano`, `universidad_carrera`, `curso1`, `curso1_ano`, `curso1_duracion`, `curso1_descripcion`, `curso2`, `curso2_ano`, `curso2_duracion`, `curso2_descripcion`, `curso3`, `curso3_ano`, `cuso3_duracion`, `curso3_descripcion`, `curso4`, `curso4_ano`, `curso4_duracion`, `curso4_descripcion`, `curso5`, `curso5_ano`, `curso5_duracion`, `curso5_descripcion`, `empleo1`, `empleo1_fecha_ing`, `empleo1_fecha_ret`, `empleo1_supervisor`, `empleo1_telefono`, `empleo1_motivo_ret`, `empleo2`, `empleo2_fecha_ing`, `empleo2_fecha_ret`, `empleo2_supervisor`, `empleo2_telefono`, `empleo2_motivo_ret`, `empleo3`, `empleo3_fecha_ing`, `empleo3_fecha_ret`, `empleo3_supervisor`, `empleo3_telefono`, `empleo3_motivo_ret`, `idioma_materno`, `idioma2`, `idioma2_leido`, `idioma2_hablado`, `idioma2_oido`, `idioma2_escrito`, `idioma3`, `idioma3_leido`, `idioma3_hablado`, `idioma3_oido`, `idioma3_escrito`, `idioma4`, `idioma4_leido`, `idioma4_hablado`, `idioma4_oido`, `idioma4_escrito`, `programas`, `aptitudes`) 
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = mysqli_prepare($conn, $sql);

mysqli_stmt_bind_param($stmt, "ssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss", 
$_POST['nombre1'], $_POST['nombre2'], $_POST['apellido1'], $_POST['apellido2'], $_POST['sex'], $_POST['bornplace'], $_POST['borndate'], $_POST['age'], $_POST['ID'], $_POST['EC'], $_POST['email'], $_POST['address'], $_POST['secundaria'], $_POST['yearL'], $_POST['secundaria_mencion'], $_POST['universidad'], $_POST['yearU'], $_POST['carrera'], $_POST['curso1'], $_POST['yearC1'], $_POST['last1'], $_POST['description1'], $_POST['curso2'], $_POST['yearC2'], $_POST['last2'], $_POST['description2'], $_POST['curso3'], $_POST['yearC3'], $_POST['last3'], $_POST['description3'], $_POST['curso4'], $_POST['yearC4'], $_POST['last4'], $_POST['description4'], $_POST['curso5'], $_POST['yearC5'], $_POST['last5'], $_POST['description5'], $_POST['job1'], $_POST['fechain1'], $_POST['fechaout1'], $_POST['boss1'], $_POST['phone1'], $_POST['motivoR1'], $_POST['job2'], $_POST['fechain2'], $_POST['fechaout2'], $_POST['boss2'], $_POST['phone2'], $_POST['motivoR2'], $_POST['job3'], $_POST['fechain3'], $_POST['fechaout3'], $_POST['boss3'], $_POST['phone3'], $_POST['motivoR3'], $_POST['langM'], $_POST['lang2'], $_POST['leido2'], $_POST['hablado2'], $_POST['oido2'], $_POST['escrito2'], $_POST['lang3'], $_POST['leido3'], $_POST['hablado3'], $_POST['oido3'], $_POST['escrito3'], $_POST['lang4'], $_POST['leido4'], $_POST['hablado4'], $_POST['oido4'], $_POST['escrito4'], $_POST['programas'], $_POST['aptitudes']);


if (mysqli_stmt_execute($stmt)) {
    echo utf8_decode("Nuevo registro añadido exitosamente");
} else {
    echo "Error en escritura de BD: " . $sql . "<br>" . mysqli_error($conn) . "<br> Favor contactar al personal de Bit & Nibs";
}

mysqli_close($conn);
?>
<br>
<br>
<a href="/">Volver al inicio</a>