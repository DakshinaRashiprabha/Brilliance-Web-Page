 <?php 
class Contact{
    private $host="localhost";
    private $user="root";
    private $pass="";
    private $db="studio package";
    public $mysqli;

   

    public function __construct(){
     $this->mysqli=new mysqli($this->host,$this->user,$this->pass, $this->db);
     if ($this->mysqli->connect_error) {
        die("Connection failed: " . $this->mysqli->connect_error);
    }
}
   
    public function contact_us($data) {
         $fname=$data ['firstname'];
         $lname=$data ['lastname'];
         $nicnumb=$data ['nicnumber'];
         $pnumber=$data ['phone'];
         $email=$data ['email'];
         $message=$data ['mesage'];


         $q = "INSERT INTO contact_us (first_name, last_name, nic_number,phone_number, email_address, message) VALUES ('$fname', '$lname', '$nicnumb','$pnumber', '$email', '$message')";
         $result = $this->mysqli->query($q);
        
          if ($result) {
            $body="<p>One message received from Sasidu co ntact us. deails are below..</p><br>, $fname, $lname,$nicnumb, $pnumber, $email, $message";
            return $this->send_mail("sasirashmika25@gmail.com", "Message received from Sasidu", $body);
        } else {

            throw new Exception("Query failed: " . $this->mysqli->error);
        
        }

    }
    
    public function send_mail($to, $subject, $message) {
        $mailFromName = "Sasidu";
        $mailFrom = "sasirashmika25@gmail.com";
        
        // Mail Header
        $mailHeader = 'MIME-Verson: 1.0'."\r\n";
        $mailHeader .= "From: $mailFromName <$mailFrom>\r\n";
        $mailHeader .= "Return-path: $mailFrom\r\n";
        // ... rest of the header ...

   
    }
}
    ?>

