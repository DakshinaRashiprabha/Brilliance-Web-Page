<?php
require 'path/to/PHPMailer/PHPMailerAutoload.php'; // Adjust the path

class Contact {
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $db = "studio";
    public $mysqli;

    public function __construct() {
        $this->mysqli = new mysqli($this->host, $this->user, $this->pass, $this->db);
        if ($this->mysqli->connect_error) {
            die("Connection failed: " . $this->mysqli->connect_error);
        }
    }

    public function contact_us($data) {
        // ... (same as before)

        $q = "INSERT INTO contact_us (first_name, last_name, phone_number, email_address, mesage) VALUES ('$fname', '$lname', '$pnumber', '$email', '$message')";
        $result = $this->mysqli->query($q);

        if ($result) {
            $mail = new PHPMailer;
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->Port = 587;
            $mail->SMTPSecure = 'tls';
            $mail->SMTPAuth = true;
            $mail->Username = 'sasirashmika25@gmail.com';
            $mail->Password = 'your-email-password';

            $mail->setFrom('sasirashmika25@gmail.com', 'Sasidu');
            $mail->addAddress($email, "$fname $lname");
            $mail->Subject = "Message received from Sasidu";
            $mail->Body = "Your email content here...";

            if ($mail->send()) {
                return true;
            } else {
                throw new Exception("Email sending failed: " . $mail->ErrorInfo);
            }
        } else {
            throw new Exception("Query failed: " . $this->mysqli->error);
        }
    }
    
    // Rest of your code...
}
?>
