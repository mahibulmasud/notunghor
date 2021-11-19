<?php
    $filepath = realpath(dirname(__FILE__));
    include_once ($filepath.'/../lib/Database.php');
    include_once ($filepath.'/../helpers/format.php');
?>
<?php
    class Contact{
        private $db;
        private $fm;

    public function __construct(){
        $this->db = new Database();
        $this->fm = new format();
    }

    public function contactInfo($data){
        //  $name = $this->fm->validation($name);
        //  $email = $this->fm->validation($email);
        //  $phone = $this->fm->validation($phone);
        //  $body = $this->fm->validation($body);

         $name = mysqli_real_escape_string($this->db->link, $data['name']);
         $email = mysqli_real_escape_string($this->db->link, $data['email']);
         $phone = mysqli_real_escape_string($this->db->link, $data['phone']);
         $body = mysqli_real_escape_string($this->db->link, $data['body']);

        //  $error = "";
         if (empty($name)) {
            $error = "<p style='color:red;text-align:center;'>Please Enter Your Name</p>";
            return $error; 
         }elseif (empty($email)) {
            $error = "<p style='color:red;text-align:center;'>Invalid Email Address</p>";
            return $error;
         }
         elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error = "<p style='color:red;text-align:center;'>Invalid Email Address</p>";
            return $error; 
         }elseif(empty($body)){
            $error = "<p style='color:red;text-align:center;'>Please Insert Your Message</p>";
            return $error; 
         }else{
             $query = "INSERT INTO tbl_contact(name,email,phone,body) VALUES('$name', '$email', '$phone', '$body')";
             $inserted_row = $this->db->insert($query);
             if ($inserted_row) {
                $msg = "<p style='color:green;text-align:center;'>Your Message was Sent Successfully.</p>";
                 return $msg;
             }else{
                 $msg = "<p style='color:red;text-align:center;'>There is error while sending Message</p>";
                 return $msg;
             } 
         }

        
    }
}
?>