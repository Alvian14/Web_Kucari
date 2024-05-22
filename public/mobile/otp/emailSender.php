<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class EmailSender {
    private $smtpHost = 'smtp.gmail.com';
    private $smtpUsername = 'kucariapps@gmail.com';
    private $smtpPassword = 'kucariapps@gmail.com';
    private $smtpPort = 465;
    private $fromEmail = 'kucariapps@gmail.com';
    private $fromName = 'Kucari Development';
    

    public function generateOTP($length = 6) {
        $otp = '';
        $characters = '0123456789';
        $charactersLength = strlen($characters);
        for ($i = 0; $i < $length; $i++) {
            $otp .= $characters[rand(0, $charactersLength - 1)];
        }
        return $otp;
    }

    public function sendEmail($email, $type, $otp) {
        $mail = new PHPMailer(true);
        try {
            $mail->isSMTP();
            $mail->Host = $this->smtpHost;
            $mail->SMTPAuth = true;
            $mail->Username = $this->smtpUsername;
            $mail->Password = $this->smtpPassword;
            $mail->SMTPSecure = 'tls';
            $mail->Port = $this->smtpPort;

            $mail->setFrom($this->fromEmail, $this->fromName);
            $mail->addAddress('hakiahmad756@gmail.com');
            $mail->Subject = "$otp adalah Kode OTP Anda";

            $mail->Body = 'Gunakan kode otp berikut untuk memverifikasi akun anda: ' . $otp;

            // kirim email
            $mail->send();

            return true;
        } catch (Exception $e) {
            error_log($e->getMessage(), 0);
            return false;
        }
    }
}

?>