<?php
   // script para crear una conexion con la BD
   
   //parametros requeridos para la conexion la BD

   // parametros DB local
   DEFINE('USER', 'root'); //crea la contaste USER con valor `root`
   DEFINE('PW',  '');
   DEFINE('HOST', 'localhost');
   DEFINE('BD',  'Empresa');

   // parametros BD remota (infinityfree)
   /*DEFINE('USER', 'if0_38542091'); //crea la contaste USER con valor `root`
   DEFINE('PW',  'daniel17082008');
   DEFINE('HOST', 'sql100.infinityfree.com');
   DEFINE('BD',  'if0_38542091_XXX');*/

   // conexion con la BD 
   $conexion = mysqli_connect(HOST, USER, PW, BD);

   // Establecer conjunto de caracteres para el hosting
   mysqli_set_charset($conexion, "utf8mb4");

   //verificar la conexion con la BD
   if(!$conexion)
   {
      die("la conexion con la BD fallo: " + mysqli_error($conexion));
      exit();
   }
   /*else
   {
      die("conexion a la BD exitosa!");
   }*/
?>