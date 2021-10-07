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

    public function userRegistration($data, $file){
        //$userName = $this->fm->validation($userName);
        // $userUsername = $this->fm->validation($userUsername);
        // $userEmail = $this->fm->validation($userEmail);
        // $userPass = $this->fm->validation($userPass);

        $userName = mysqli_real_escape_string($this->db->link, $data['userName']);
        $userUsername = mysqli_real_escape_string($this->db->link, $data['userUsername']);
        $userEmail = mysqli_real_escape_string($this->db->link, $data['userEmail']);
        $userPass = mysqli_real_escape_string($this->db->link, md5($data['userPass']));

        $permited = array('jpg', 'jpeg', 'png', 'gif');
        $file_name = $file['image']['name'];
        $file_size = $file['image']['size'];
        $file_temp = $file['image']['tmp_name'];

        $div = explode('.', $file_name);
        $file_ext = strtolower(end($div));
        $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
        $uploaded_image = "uploads/userimage/".$unique_image;

        
        if (empty($userName) || empty($userUsername) || empty($userEmail) || empty($userPass)) {
            $msg = "<p style='color:red;'>All field Must not be empty</p>";
            return $msg; 
        }

        $mailquery = "SELECT * FROM tbl_user WHERE userEmail='$userEmail' LIMIT 1";
        $mailchk   = $this->db->select($mailquery);

        if($mailchk != false){
            $msg = "<p style='color:red;'>Email already exits </p>";
            return $msg; 
        }
        else {
            move_uploaded_file($file_temp, $uploaded_image);
            $query = "INSERT INTO tbl_user(userName,userUsername,userEmail,userImage,userPass) VALUES('$userName', '$userUsername', '$userEmail','$uploaded_image', '$userPass')";
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
    public function userLogin($data){
        $userEmail = mysqli_real_escape_string($this->db->link, $data['userEmail']);
        $userPass = mysqli_real_escape_string($this->db->link, md5($data['userPass']));

        if (empty($userEmail) || empty($userPass)) {
            $msg = "<p style='color:red;'>Email and Password Must not be empty</p>";
            return $msg; 
        }
        $query = "SELECT * FROM tbl_user WHERE userEmail = '$userEmail' AND userPass = '$userPass'";
        $result = $this->db->select($query);
        if ($result != false) {
            $value = $result->fetch_assoc();
            Session::set("userlogin", true);
            Session::set("uid", $value['userId']);
            Session::set("userName", $value['userName']);
            Session::set("userUsername", $value['userUsername']);
            Session::set("userEmail", $value['userEmail']);
            Session::set("userImage", $value['userImage']);
            header("Location:index.php");
        }else{
            $loginmsg = "<p style='color:red;'>Email and Password not match</p>";
            return $loginmsg; 
        }
    }
    public function getUserData($id){
        $query = "SELECT * FROM tbl_user WHERE userId = '$id'";
        $result = $this->db->select($query);
        return $result;
    }
    public function userUpdate($data, $file, $id){
        $userName = mysqli_real_escape_string($this->db->link, $data['userName']);
        $userUsername = mysqli_real_escape_string($this->db->link, $data['userUsername']);
        $userEmail = mysqli_real_escape_string($this->db->link, $data['userEmail']);
        // $userPass = mysqli_real_escape_string($this->db->link, md5($data['userPass']));

        $permited = array('jpg', 'jpeg', 'png', 'gif');
        $file_name = $file['image']['name'];
        $file_size = $file['image']['size'];
        $file_temp = $file['image']['tmp_name'];

        $div = explode('.', $file_name);
        $file_ext = strtolower(end($div));
        $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
        $uploaded_image = "uploads/userimage/".$unique_image;
        
        if (!empty($file_ext)) {
            move_uploaded_file($file_temp, $uploaded_image);
            $query = "UPDATE tbl_user
                      SET
                      userName = '$userName',
                      userUsername = '$userUsername',
                      userImage = ' $uploaded_image',
                      userEmail = '$userEmail'
                      WHERE userId = '$id'";
            $updated_row = $this->db->update($query);
            if ($updated_row) {
                $msg = "<p style='color:green;'>Data Updated Successfully</p>";
                return $msg;
            }else{
                $msg = "<p style='color:red;'>Data Updated Not Successfully</p>";
                return $msg;
            }
        }



        if (empty($userName) || empty($userUsername) || empty($userEmail)) {
            $msg = "<p style='color:red;'>All field Must not be empty</p>";
            return $msg; 
        }
        else {
            // move_uploaded_file($file_temp, $uploaded_image);
            $query = "UPDATE tbl_user
                      SET
                      userName = '$userName',
                      userUsername = '$userUsername',
                      userEmail = '$userEmail'
                      WHERE userId = '$id'";
            $updated_row = $this->db->update($query);
            if ($updated_row) {
                $msg = "<p style='color:green;'>Data Updated Successfully</p>";
                return $msg;
            }else{
                $msg = "<p style='color:red;'>Data Updated Not Successfully</p>";
                return $msg;
            }
        }
    }
}
?>