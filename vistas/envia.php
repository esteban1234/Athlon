<?php  

include("../phpmailer/phpmailer/class.phpmailer.php");

class Correo
{

    public function __construct()
    {
        // $this->db = new Conexion();
        $mail = new PHPMailer;
        // $this->userMODEL = new Pedido();
        // $this->mpdf = new mPDF('C','','','',15,15,55,15,10,10);
        // $userMODEL = new Pedido();
    }

    public function sendMSJ(){
        $this->mail->charset = 'UTF-8';
        $this->mail->Encoding = 'quoted-printable';

        $this->mail->isSMTP();                                      // Set mailer to use SMTP
        // $this->mail->Host = 'p3plcpnl0173.prod.phx3.secureserver.net';  // Specify main and backup SMTP servers
        $this->mail->Host = 'smtp.exchangeadministrado.com';  // Specify main and backup SMTP servers
        $this->mail->SMTPAuth = true;                               // Enable SMTP authentication
        $this->mail->Username = 'desarrollo@dmt.com.mx';                 // SMTP username
        $this->mail->Password = '25dmt04';                           // SMTP password
        $this->mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $this->mail->Port = 587;                                    // TCP port to connect to

        $this->mail->setFrom('desarrollo@dmt.com.mx', 'Sergio Pacho');
        $this->mail->addAddress('sistemas.soporte@dmt.com.mx', '');     // Add a recipient
        // $this->mail->addAddress('ellen@example.com');               // Name is optional
        // $this->mail->addReplyTo('info@example.com', 'Information');
        // $this->mail->addCC('cc@example.com');
        $this->mail->addBCC('ballina.santiago@gmail.com');

        // $sqlid= $this->db->query("SELECT ID_ORP FROM orden_pedido ORDER BY ID_ORP DESC;");
        // $resid = $this->db->runs($sqlid);
        // $id = $resid['ID_ORP'];

        $pdf = $this->sendPDF();
        $this->mail->AddStringAttachment($pdf, 'pedido_'.date('d-m-Y').'.pdf', 'base64', 'application/pdf');         // Add attachments
        //$this->mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

        $this->mail->isHTML(true);                                  // Set email format to HTML
        $this->mail->Subject = 'Pedido de Toners';
        $this->mail->Body    = 'hola';
        // $this->mail->AltBody = 'jajjajajajajajajaja';

        if(!$this->mail->send()) {
            $msj = '<br><div class="alert alert-success">Error al enviar<br>';
            $msj .= 'Mailer Error: ' . $this->mail->ErrorInfo.'</div><br>';
        } else {
            $msj = '<br><div class="alert alert-success">Mensaje Enviado</div><br>';
        }
        return $msj;
    }


}
?>