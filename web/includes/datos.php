<?php
	/*codigo para combox de los clientes y los prestamos*/
	///realizamos la conexion:
  $con= mysql_connect("mysql.hostinger.co","u573470265_andre","andrey15") or die ("Problemas en la conexion...");
  ///selecionamos la base de tados:
  mysql_select_db("u573470265_andre") or die ("Problema en la selecion de la base de datos");
  
  $resultado = mysql_query("SELECT * FROM prestamos WHERE cedula=".$_GET['id']."");
  echo "<select name='prestamo'>";
    while ($fila = mysql_fetch_array($resultado)) {
          echo "<option value='".$fila['codigo']."'>".$fila['codigo']."
                  </option>";
    }
  echo "</select>";
?>