<?php
   // script para crear una conexion con la BD
   
   //parametros requeridos para la conexion la BD

   // parametros BD local
   DEFINE(`USER`, `root`); //crea la contaste USER con valor `root`
   DEFINE(`PW`,  ``);
   DEFINE(`HOST`,  `localhost`);
   DEFINE(`BD`,  `Empresa`);

   // parametros BD remota (infinityfree)

   // conexion con la BD 
   $conexion =mysqli_connect(HOST, USER, PW, BD);

   // Establecer conjunto de caracteres para el hosting
   mysqli_set_charser(sconexion, "utf8mb4");

   //verificar la conexion con la BD
   if(!$conexion)
   {
      die("la conexion con a BD fallo: " + mysql_error($conexion))
      exit();
   }
   else
   {
      die("conexion a la BD exitosa!");
   }
?>