<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Load PHPMailer

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mail = new PHPMailer(true);
    
    try {
        // SMTP Configuration
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';  // Change if using another provider
        $mail->SMTPAuth = true;
        $mail->Username = 'mustafasalim799@gmail.com'; // Your Gmail address
        $mail->Password = 'qpcaonzjyenktjjf'; // Gmail App Password (Not your real password)
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Sender & Recipient
        $mail->setFrom('mustafasalim786@hotmail.com', 'Business Form');
        $mail->addAddress('mustafasalim786@hotmail.com'); // Change recipient email

        // Email Content
        $mail->isHTML(true);
        $mail->Subject = "New Business Setup Form Submission";
        $mail->Body = "
            <strong>Business Activity:</strong> {$_POST['business_activity']}<br>
            <strong>Visas Required:</strong> {$_POST['visas']}<br>
            <strong>Shareholders:</strong> {$_POST['shareholders']}<br>
            <strong>Office Space:</strong> {$_POST['office_space']}<br><br>
            <strong>First Name:</strong> {$_POST['first_name']}<br>
            <strong>Last Name:</strong> {$_POST['last_name']}<br>
            <strong>Phone:</strong> {$_POST['phone']}<br>
            <strong>Email:</strong> {$_POST['email']}<br>
            <strong>Nationality:</strong> {$_POST['nationality']}
        ";

        $mail->send();
        echo "<script>alert('Email sent successfully!'); window.location.href = 'contactform.html';</script>";
    } catch (Exception $e) {
        echo "<script>alert('Email could not be sent. Error: {$mail->ErrorInfo}'); window.location.href = 'contactform.html';</script>";
    }
}
?>
