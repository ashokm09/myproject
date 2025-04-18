<?php

require './class.phpmailer.php';
require './class.smtp.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['pdf'])) {
    echo "<pre>";
    print_r($_FILES['pdf']);
    echo "</pre>";

    if ($_FILES['pdf']['error'] === UPLOAD_ERR_OK) {
        $mail = new PHPMailer(true);

        try {
            // SMTP configuration
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'clemance.sitekit@gmail.com'; // Your Gmail address
            $mail->Password = 'uagt wsbl egig xzov'; // Replace with your Gmail App Password
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;


            // Enable debugging
            $mail->SMTPDebug = 4; // Enable detailed debug output
            $mail->Debugoutput = 'html'; // Output errors in HTML format

            // Disable SSL verification (if needed)
            $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );

            // Email settings
            $mail->setFrom('clemance.sitekit@gmail.com', 'CWS');
            $mail->addAddress('shyamsundar23301@gmail.com', 'cws');


            // Attach the PDF
            $mail->addAttachment($_FILES['pdf']['tmp_name'], $_FILES['pdf']['name']);

            $mail->isHTML(true);
            $mail->Subject = 'Form Submission PDF';
            $mail->Body = 'Please find the attached PDF of the form submission.';

            $mail->send();
            echo "✅ Email has been sent successfully!";
        } catch (Exception $e) {
            echo "❌ Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    } else {
        echo "❌ File upload error. Error code: " . $_FILES['pdf']['error'];
    }
} else {
    echo "❌ Invalid request or no file uploaded.";
}
