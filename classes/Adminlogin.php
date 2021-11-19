<?php 
    include '../lib/Session.php';
    Session::checkLogin();
    include_once '../lib/Database.php';
    include_once '../helpers/format.php';


?>

<?php
    // Admin login Class
    class Adminlogin{
        private $db;
        private $fm;

        public function __construct(){
            $this->db = new Database();
            $this->fm = new format();
        }

        public function adminLogin($adminUser, $adminPass){
            $adminUser = $this->fm->validation($adminUser);
            $adminPass = $this->fm->validation($adminPass);

            $adminUser = mysqli_real_escape_string($this->db->link, $adminUser);
            $adminPass = mysqli_real_escape_string($this->db->link, $adminPass);

            if (empty($adminUser) || empty($adminPass)) {
                $loginmsg = "Username and Password Must not be empty";
                return $loginmsg; 
            }else {
                $query = "SELECT * FROM tbl_admin WHERE adminUser = '$adminUser' AND adminPass = '$adminPass'";
                $result = $this->db->select($query);

                if ($result != false) {
                   $value = $result->fetch_assoc();
                   Session::set("adminlogin", true);
                   Session::set("adminId", $value['adminId']);
                   Session::set("adminUser", $value['adminUser']);
                //    Session::set("adminName", $value['adminName']);
                //    Session::set("adminEmail", $value['adminEmail']);
                //    Session::set("adminPass", $value['adminPass']);
                   Session::set("adminImage", $value['adminImage']);
                   header("Location:index.php");
                }else{
                    $loginmsg = "Username and Password not match";
                    return $loginmsg;
                }
            }
        }
        public function adminUpdate($data, $file, $id){
            $userName = mysqli_real_escape_string($this->db->link, $data['userName']);
            $userUsername = mysqli_real_escape_string($this->db->link, $data['userUsername']);
            $userEmail = mysqli_real_escape_string($this->db->link, $data['userEmail']);
            $mobileno = mysqli_real_escape_string($this->db->link, $data['mobileno']);
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
                          userEmail = '$userEmail',
                          mobileNo = '$mobileno'
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
                          userEmail = '$userEmail',
                          mobileNo = '$mobileno'
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