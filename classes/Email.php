<?php

namespace TGHC;

use PHPMailer\PHPMailer\PHPMailer;

class Email
{
    static public function sendAdminPasswordReset($userObject)
    {
        $newPassword = Utility::generateRandomString(10);
        $userObject->setPassword($newPassword);
        $mailer = new PHPMailer(true);
        $mailer->setFrom('noreply@transgender.healthcare', 'Transgender.Healthcare');
        $mailer->addAddress($userObject->email_address);
        $mailer->Subject = '[Transgender.Healthcare] Password Reset Request';
        $mailer->isHTML(true);
        $mailer->Body = "The password for the account <strong>{$userObject->id}</strong> has been reset to <strong>{$newPassword}</strong>";
        $mailer->send();
    }


}