<?php
    $filepath = realpath(dirname(__FILE__));
    include_once ($filepath.'/../lib/Database.php');
    include_once ($filepath.'/../helpers/format.php');
?>
<?php
    class User{
        private $db;
        private $fm;

    public function __construct(){
        $this->db = new Database();
        $this->fm = new format();
    }

    public function userRegistration($data){
        //$userName = $this->fm->validation($userName);
        //$userUsername = $this->fm->validation($userUsername);
        //$userEmail = $this->fm->validation($userEmail);
        //$userPass = $this->fm->validation($userPass);

        $userName = mysqli_real_escape_string($this->db->link, $data['userName']);
        $userUsername = mysqli_real_escape_string($this->db->link, $data['userUsername']);
        $userEmail = mysqli_real_escape_string($this->db->link, $data['userEmail']);
        $userPass = mysqli_real_escape_string($this->db->link, $data['userPass']);

        if (empty($userName) || empty($userUsername) || empty($userEmail) || empty($userPass)) {
            $msg = "<p style='color:red;'>All field Must not be empty</p>";
            return $msg; 
        }
        $mailquery = "SELECT * FROM tbl_user WHERE userEmail='$userEmail' LIMIT 1";
        $mailchk   = $this->db->select($mailquery);
        if($mailchk != false){
            $msg = "<p style='color:red;'>Email already exits </p>";
            return $msg; 
        }else {
            $query = "INSERT INTO tbl_user(userName,userUsername,userEmail,userPass) VALUES('$userName', '$userUsername', '$userEmail', '$userPass')";
            $inserted_row = $this->db->insert($query);
            if ($inserted_row) {
                $msg = "<p style='color:green;'>User Data Inserted Successfully</p>";
                return $msg;
            }else{
                $msg = "<p style='color:red;'>User Data not Inserted</p>";
                return $msg;
            }
        }
    }
}
?>