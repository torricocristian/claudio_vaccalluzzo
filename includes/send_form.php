<?php 

$tipo = $_POST['tipo'];

if($tipo == 'contacto'){
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $telefono = $_POST['telefono'];
        $mensaje = $_POST['mensaje'];

        require_once '../mailer/class.phpmailer.php';

        $mail = new PHPMailer(true);	

        $subject    = "Mensaje enviado desde el sitio del Instituto - ".$nombre. "";
                
        $message   = "Nombre: ".$nombre."<br/>";
        $message  .= "Email: ".$email."<br/>";
        $message  .= "Teléfono: ".$telefono."<br/>";
        $message  .= "Mensaje: ".$mensaje."<br/>";

        
        try {
            $mail->IsSMTP(); 
            $mail->isHTML(true);
            $mail->CharSet = "UTF-8";  

            $mail->AddAddress('cristian.torrico@hotmail.com.ar');

            // $mail->SMTPDebug  = 1;
            $mail->AddReplyTo($email,$nombre);
            $mail->SetFrom($email,$nombre);
            $mail->Subject    = $subject;
            $mail->Body 	  = $message;
            $mail->AltBody    = $message;
                
            if($mail->Send()) {
                echo'OK';
            }else{
                echo "error";
            }
        }
        catch(phpmailerException $ex) {
            echo $ex->errorMessage();
        }	
}


	

?>