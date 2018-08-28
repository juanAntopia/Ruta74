<?php
//revisa que los campos del formulario no estén vacíos
if(empty($_POST['nombre']) ||
   empty($_POST['correo']) ||
   empty($_POST['mensaje']) || 
   !filter_var($_POST['correo'], FILTER_VALIDATE_EMAIL))
   {
        printf(" <script type='text/javascript'>alert('Todos los campos son obligatorios.');</script> ");
        return false;
   }


   //campos del formualario
   $nombre = $_POST['nombre'];
   $correo = $_POST['correo'];
   $mensaje = $_POST['mensaje'];

   //encabezados para el uso de html en 
   $headers = 'MIME-Version: 1.0' . "\r\n";
   $headers.= "Content-type: text/html; charset=UTF-8\r\n";
?>