<?php 

$tipo = $_POST['tipo'];

if($tipo == 'contacto'){
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $telefono = $_POST['telefono'];
        $mensaje = $_POST['mensaje'];

        $subject    = "Mensaje enviado desde el sitio del Instituto - ".$nombre. "";
                
        $message   = 'Nombre: '.$nombre.' / ';
        $message  .= 'Email: '.$email.' / ';
        $message  .= 'Telefono: '.$telefono. ' / ';
        $message  .= 'Mensaje: '.$mensaje;

        $result = mail('cristian.torrico@hotmail.com.ar', $subject, $message);
        if($result) {
            echo'OK';
        }else{
            echo "error";
        }
        
}


	

?>