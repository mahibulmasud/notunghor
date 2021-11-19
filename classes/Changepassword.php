<?php
    $filepath = realpath(dirname(__FILE__));
    include_once ($filepath.'/../lib/Database.php');
    include_once ($filepath.'/../helpers/format.php');
?>
<?php
    class Changepassword{
        private $db;
        private $fm;

    public function __construct(){
        $this->db = new Database();
        $this->fm = new format();
    }
    public function ChangePassword($data,$adminId){
        $oldpass = mysqli_real_escape_string($this->db->link, md5($data['oldpass']));
        $newpass = mysqli_real_escape_string($this->db->link, $data['newpass']);


        $passquery = "SELECT * FROM tbl_admin WHERE adminPass = '$oldpass' AND adminId = '$adminId'";
        $passchk   = $this->db->select($passquery);

        if($passchk == false){
            $msg = "<p style='color:red;'>Old password isn't match. Please enter your correct old password</p>";
            return $msg; 
        }
        if(empty($newpass)){
                $msg = "<p style='color:red;'>Please Enter your new password</p>";
                return $msg;
                }
        // elseif($newpass){

        //     }
            else{
                $newpass = md5($newpass);
                $query = "UPDATE tbl_admin
                SET
                adminPass = '$newpass'
                WHERE adminId = '$adminId'";
                $inserted_row = $this->db->insert($query);
                if ($inserted_row) {
                    $msg = "<p style='color:green;'>Password Updated Successfully</p>";
                    return $msg;
                }else{
                    $msg = "<p style='color:red;'>User Data not Inserted</p>";
                    return $msg;
                }
            }
    }

}