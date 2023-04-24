<?php

namespace Classes;

use PHPMailer\PHPMailer\PHPMailer;

class Email
{

    public $email;
    public $nombre;
    public $token;

    public function __construct($nombre, $email, $token)
    {
        $this->nombre = $nombre;
        $this->email = $email;
        $this->token = $token;
    }

    public function enviarConfirmacion()
    {

        // Crear el objeto de email

        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Port = 587;
        $mail->Username = 'bryangonca@gmail.com';
        $mail->Password = 'gzrttgfeseoplfvo';

        $mail->setFrom('bryangonca@gmail.com');
        $mail->addAddress($this->email);
        $mail->Subject = 'Confirma tu Cuenta';


        // Set HTML
        $mail->isHTML(TRUE);
        $mail->CharSet = 'UTF-8';


        $contenido = "<html>";
        $contenido .= "<p><strong>Hola " . $this->nombre . "</strong> Has creado tu cuenta
        en AppSalon, solo debes confirmarla presionando en el siguiente enlace </p>";
        $contenido .= "<p>Presiona aqui: <a href='https://barberia.alwaysdata.net/confirmar-cuenta?token="
            . $this->token . "'>Confirmar Cuenta</a> </p>";
        $contenido .= "<p>Si tu no solicitaste esta cuenta, puedes ignorar el mensaje</p>";
        $contenido .= "</html>";

        $mail->Body = $contenido;

        // Enviar el email

        $mail->send();
    }

    public function enviarInstrucciones()
    {
        // Crear el objeto de email

        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Port = 587;
        $mail->Username = 'bryangonca@gmail.com';
        $mail->Password = 'gzrttgfeseoplfvo';

        $mail->setFrom('bryangonca@gmail.com');
        $mail->addAddress($this->email);
        $mail->Subject = 'Reestablece tu password';


        // Set HTML
        $mail->isHTML(TRUE);
        $mail->CharSet = 'UTF-8';


        $contenido = "<html>";
        $contenido .= "<p><strong>Hola " . $this->nombre . "</strong> Has solicitado
        reestablecer tu password, sigue el siguiente enlace para hacerlo.</p>";
        $contenido .= "<p>Presiona aqui: <a href='https://barberia.alwaysdata.net/recuperar?token="
            . $this->token . "'>Reestablecer password</a> </p>";
        $contenido .= "<p>Si tu no solicitaste este cambio, puedes ignorar el mensaje</p>";
        $contenido .= "</html>";

        $mail->Body = $contenido;

        // Enviar el email

        $mail->send();
    }
}
