<?php
require_once '../Modelo/Reserva.php';

if(isset($_REQUEST['btn_Administracion'])){
   
    include '../Vista/Home_Administracion.php';

 }else if (isset($_REQUEST['btn_Inicio'])){

    include '../Vista/Home_principal.php';

  }else if (isset($_REQUEST['btn_aniadir_Admin'])){

    include '../Vista/From_nuevoAdmin.php';

  }else if (isset($_REQUEST['btn_eliminar_Admin'])) {

    include '../Vista/tabla_usuarios.php';

  }else if (isset($_REQUEST['btn_anadir_estancia'])) {

    include '../Vista/Form_nuevaEstancia.php';

  } else if (isset($_REQUEST['btn_pagina_Galeria'])) {
    
    include '../Vista/Galeria.php';
  
  }else if (isset($_REQUEST['btn_anadir_habitacion'])) {
    
    include '../Vista/Form_nuevaHabitacion.php';
  
  }else if (isset($_REQUEST['btn_anadir_sala'])) {
    
    include '../Vista/Form_nuevaSala.php';
  
  }else if (isset($_REQUEST['btn_ver_habitaciones'])) {
    
    include '../Vista/Todas_habitaciones.php';
  
  }else if (isset($_REQUEST['btn_ver_salas'])) {
    
    include '../Vista/Todas_salas.php';

  } else if (isset($_REQUEST['btn_pagina_FQ'])) {
    
    include '../Vista/Preguntas_frecuentes.php';
  
  } else if (isset($_REQUEST['bton_formulario_principal'])) {
    include '../Vista/habitaciones_reservar.php';

  }else if (isset($_REQUEST['btn_enviar_reservas'])) {
    include '../Controlador/controlador_carrito.php';
    
  } else{

    include '../Vista/Home_principal.php';
 }


 
 


?>