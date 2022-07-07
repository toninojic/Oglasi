<?php

namespace Toni\ZavrsniProjekat\Services;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Email {


    public function sendEmail($data) {


        $fullname = $data['fullname'];
        $subject = $data['subject'];
        $message = $data['message'];

        $phpmailer = new PHPMailer();
        $phpmailer->isSMTP();
        $phpmailer->Host = 'smtp.mailtrap.io';
        $phpmailer->SMTPAuth = true;
        $phpmailer->Port = 2525;
        $phpmailer->Username = '82f1a8eeece984';
        $phpmailer->Password = '27cbd9b74058d6';


        $phpmailer->From = "noreply@noreply.com";
        $phpmailer->FromName = "$fullname";
        $phpmailer->addAddress("mali.oglasi@malioglasi.com", "mali.oglasi");
        $phpmailer->isHTML(false);
        $phpmailer->Subject = "$subject";
        $phpmailer->Body = "$message";

        $phpmailer->send();

    }
}