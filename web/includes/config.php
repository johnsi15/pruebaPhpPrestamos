<?php
   class conexion{
   	  public function conectar(){
   	  	 ///realizamos la conexion:
	      $con= mysql_connect("mysql.hostinger.co","u573470265_andre","andrey15") or die ("Problemas en la conexion...");
		  ///selecionamos la base de tados:
		  mysql_select_db("u573470265_andre") or die ("Problema en la selecion de la base de datos");
		  
		  return $con;
   	  }
   }
?>