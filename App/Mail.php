<?php

namespace App;

use App\Config;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Mail
{
  public static function send($to, $subject, $text, $html)
  {
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = Config::SMTP_HOST;
    $mail->SMTPAuth = true;
    $mail->Username = Config::SMTP_USER;
    $mail->Password = Config::SMTP_PASS;
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;


    $mail->setFrom('your-sender@your-domain.com');
    $mail->addAddress($to);
    $mail->Subject = $subject;
    $mail->AltBody = $text;
    $mail->Body = $html;
    $mail->send();

  }
}
