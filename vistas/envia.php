<?php
    //Incluimos la clase de PHPMailer
    include('../phpmailer/phpmailer/class.phpmailer.php');
    // require_once('phpmailer/class.smtp.php');
    $correo = new PHPMailer(); //Creamos una instancia en lugar usar mail()

    // Datos que llegan del Formulario
    // $destino = "bufetesc@hotmail.com";
    // Datos que llegan del Formulario
    $destino = "ballina.santiago.com";
    $name = $_POST['nombre'];
    $tel = $_POST['telefono'];
    $email = $_POST['correo'];
    $comentario = $_POST['comentario'];

    // Codificación UTF8. Obligado utilizarlo en aplicaciones en Español
    $correo->CharSet = 'UTF-8';

    // Timeout para el servidor de correos. Por defecto es valor es '10'
    // $correo->Timeout=30;

    //Usamos el SetFrom para decirle al script quien envia el correo
    $correo->SetFrom($email, $name);

    //Usamos el AddReplyTo para decirle al script a quien tiene que responder el correo
    //$correo->AddReplyTo($email);

    //Usamos el AddAddress para agregar un destinatario
    $correo->AddAddress($destino, "Robot");



    //Ponemos el asunto del mensaje
    $correo->Subject = "Contacto nuevo mensaje";

    /*
     * Si deseamos enviar un correo con formato HTML utilizaremos MsgHTML:
     * $correo->MsgHTML("<strong>Mi Mensaje en HTML</strong>");
     * Si deseamos enviarlo en texto plano, haremos lo siguiente:
     * $correo->IsHTML(false);
     * $correo->Body = "Mi mensaje en Texto Plano";
     */
    $correo->MsgHTML(
        "<strong> Nombre Completo: </strong>".$name."<br/>
        <strong> Teléfono: </strong>".$tel."<br/>
        <strong> Correo Electronico: </strong>".$email."<br/><br/>
        <strong> Comentario: </strong>".$comentario
        );

    //Si deseamos agregar un archivo adjunto utilizamos AddAttachment
    //$correo->AddAttachment("images/phpmailer.gif");

    //Enviamos el correo
    if(!$correo->Send()) {
      // echo "Error al enviar: " . $correo->ErrorInfo;
      echo " <script type='text/javascript'>
                    alert('Error al Enviar Mensaje');
                    window.location='contacto.php';
                    </script> ";
    } else {
      echo " <script type='text/javascript'>
                    alert('Mensaje Enviado con Exito');
                    window.location='contacto.php';
                    </script> ";
    }

?>
