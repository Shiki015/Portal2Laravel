<?php

namespace App\Services;


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;


class MailerService {
        public static function sendMail($email,$text,$title){
            $mail = new PHPMailer(true);

            try {
                //Server settings
                $mail->SMTPDebug = 0;                      // Enable verbose debug output
                $mail->isSMTP();                                            // Send using SMTP
                $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
                $mail->Username   = 'auditorne.php@gmail.com';                     // SMTP username
                $mail->Password   = 'Sifra123';                               // SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
                $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

                //Recipients
                $mail->setFrom('auditorne.php@gmail.com', $title);       //moj mail
                $mail->addAddress($email);     // Add a recipient
                $mail->addReplyTo($email, 'Information');




                // Content
                $mail->isHTML(true);                                  // Set email format to HTML
                $mail->Subject = 'Portal2';
                $mail->Body    = $text;

                $mail->send();

            } catch (Exception $e) {
                return $e->getMessage();
            }
        }
}
