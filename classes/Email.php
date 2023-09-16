<?php
namespace Classes;

use PHPMailer\PHPMailer\PHPMailer;

class Email{
    public $email;
    public $nombre;
    public $token;

    public function __construct($email, $nombre, $token)
    {
        $this->email = $email;
        $this->nombre = $nombre;
        $this->token = $token;
    }

    public function enviarConfirmacion(){
        //Crear el objeto de email
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = $_ENV['EMAIL_HOST'];
        $mail->SMTPAuth = true;
        $mail->Port = $_ENV['EMAIL_PORT'];
        $mail->Username = $_ENV['EMAIL_USER'];
        $mail->Password = $_ENV['EMAIL_PASS'];

        //Set HTML
        $mail->isHTML(true);
        $mail->CharSet = 'UTF-8';

        $mail->setFrom('bruno.angulo.perez@gmail.com');
        $mail->addAddress('bruno.angulo@gmail.com','AppSalon.com');
        $mail->Subject= 'Confirma tu cuenta';
        $contenido = "<html>
                        <head>
                            <title>Confirmación de cuenta</title>
                        </head>
                        <body>
                            <h1>" . $this->nombre . "Bienvenido a AppSalon.com</h1>
                            <p>¡Gracias por registrarte en nuestra plataforma! Por favor, confirma tu cuenta haciendo clic en el enlace de abajo:</p>
                            <a href='". $_ENV['APP_URL'] ."/confirmar-cuenta?token=". $this->token. "'>Confirmar mi cuenta</a>
                            <p>Si no te registraste en AppSalon.com, puedes ignorar este correo.</p>
                            <p>Atentamente,</p>
                            <p>El equipo de AppSalon.com</p>
                        </body>
                    </html>";
        $mail->Body = $contenido;
        
        //Enviar el email
        $mail->send();
    }

    public function enviarInstrucciones(){
                //Crear el objeto de email
                $mail = new PHPMailer();
                $mail->isSMTP();
                $mail->Host = $_ENV['EMAIL_HOST'];
                $mail->SMTPAuth = true;
                $mail->Port = $_ENV['EMAIL_PORT'];
                $mail->Username = $_ENV['EMAIL_USER'];
                $mail->Password = $_ENV['EMAIL_PASS'];
        
                //Set HTML
                $mail->isHTML(true);
                $mail->CharSet = 'UTF-8';
        
                $mail->setFrom('bruno.angulo.perez@gmail.com');
                $mail->addAddress('bruno.angulo@gmail.com','AppSalon.com');
                $mail->Subject= 'Confirma tu cuenta';
                $contenido = "<html>
                                <head>
                                    <title>Reestablecer tu password</title>
                                </head>
                                <body>
                                    <h1>" . $this->nombre . "Solicitaste Reestablecer tu password</h1>
                                    <p>¡Gracias por registrarte en nuestra plataforma! Por favor, confirma tu cuenta haciendo clic en el enlace de abajo:</p>
                                    <a href='". $_ENV['APP_URL'] ."/recuperar?token=". $this->token. "'>Recuperar</a>
                                    <p>Si no te registraste en AppSalon.com, puedes ignorar este correo.</p>
                                    <p>Atentamente,</p>
                                    <p>El equipo de AppSalon.com</p>
                                </body>
                            </html>";
                $mail->Body = $contenido;
                
                //Enviar el email
                $mail->send();
    }
}