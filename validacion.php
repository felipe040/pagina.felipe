<?php

include("mi_bd.php");
 	
if (isset($_POST['register'])){
  if (strlen ($_POST['name']) >= 1 && strlen ($_POST['password']) >= 1 ) {
    $name = trim($_POST['name']);
     $email = trim($_POST['password']);
     
     $fechareg = date ("d/m/y");
     $consulta = "INSERT INTO datos( nombre, contraseña, fecha_reg) VALUES ('$name','$password','$fechareg')";
     $resultado = mysqli_query($conex,$consulta);
     if ($resultado) {
      	?>
      	<h3 class="ok" >¡te has registrado </h3>
       <?php
      }else{
	      ?>
	      <h3 class="bad">¡no te has inscrito!</h3>
       <?php
      } 

  } else{
       ?>
       <h3 class="bad" >¡no has acompletado los campos !</h3>
      <?php
  }
}
?>