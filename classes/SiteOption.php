<?php
    $filepath = realpath(dirname(__FILE__));
    include_once ($filepath.'/../lib/Database.php');
    include_once ($filepath.'/../helpers/format.php');
?>
<?php
    class SiteOption{
        private $db;
        private $fm;

    public function __construct(){
        $this->db = new Database();
        $this->fm = new format();
    }

    public function updateTitle($data){
        $sitetitle = mysqli_real_escape_string($this->db->link, $data['title']);
        $sitetitle = ucwords( $sitetitle);

        $query = "UPDATE tbl_siteoption
        SET
        title = '$sitetitle'
        WHERE id = 1";
        $updated_row = $this->db->update($query);
        if ($updated_row) {
        $msg = "<p style='color:green;'>Title Updated Successfully !</p>";
        return $msg;
        }else{
        $msg = "<p style='color:red;'>Sorry! Failed to update Title.</p>";
        return $msg;
        }

    }

    public function updateCopyRight($data){
        $copyright = mysqli_real_escape_string($this->db->link, $data['copyright']);

        $query = "UPDATE tbl_siteoption
        SET
        copyright = '$copyright'
        WHERE id = 1";
        $updated_row = $this->db->update($query);
        if ($updated_row) {
        $msg = "<p style='color:green;'>Copy Right Text Updated Successfully !</p>";
        return $msg;
        }else{
        $msg = "<p style='color:red;'>Sorry! Failed to update Copy Right Text.</p>";
        return $msg;
        }

    }

    public function updateLogo($file){

        $permited = array('jpg', 'jpeg', 'png', 'gif');
        $file_name = $file['logo']['name'];
        $file_size = $file['logo']['size'];
        $file_temp = $file['logo']['tmp_name'];

        $div = explode('.', $file_name);
        $file_ext = strtolower(end($div));
        $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
        $uploaded_image = "uploads/".$unique_image;


        if (!empty($file_ext)) {
            move_uploaded_file($file_temp, $uploaded_image);
            $query = "UPDATE tbl_siteoption
                      SET
                      logo = '$uploaded_image'
                      WHERE id = 1";
            $updated_row = $this->db->update($query);
            if ($updated_row) {
                $msg = "<p style='color:green;'>Your site Logo Updated Successfully!</p>";
                return $msg;
            }else{
                $msg = "<p style='color:red;'>Sorry! Failed to update site Logo.</p>";
                return $msg;
            }
        }

    }

    public function updateMobLogo($file){

        $permited = array('jpg', 'jpeg', 'png', 'gif');
        $file_name = $file['logo']['name'];
        $file_size = $file['logo']['size'];
        $file_temp = $file['logo']['tmp_name'];

        $div = explode('.', $file_name);
        $file_ext = strtolower(end($div));
        $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
        $uploaded_image = "uploads/".$unique_image;


        if (!empty($file_ext)) {
            move_uploaded_file($file_temp, $uploaded_image);
            $query = "UPDATE tbl_siteoption
                      SET
                      mobilelogo = '$uploaded_image'
                      WHERE id = 1";
            $updated_row = $this->db->update($query);
            if ($updated_row) {
                $msg = "<p style='color:green;'>Your Mobile Logo Updated Successfully!</p>";
                return $msg;
            }else{
                $msg = "<p style='color:red;'>Sorry! Failed to update site Logo.</p>";
                return $msg;
            }
        }

    }

  
    public function SendSubscribemail($data){
        $footeremail = mysqli_real_escape_string($this->db->link, $data['email']);

        if(empty($footeremail)){
            $msg = "<p style='color:red; text-align:center;'>You must enter your email </p>";
            return $msg;
        }else{
            $query = "INSERT INTO tbl_subscribe(email) VALUES('$footeremail')";
            $inserted_row = $this->db->insert($query);
            if ($inserted_row) {
                $msg = "<p style='color:green; text-align:center;'>Subscribed Successfully</p>";
                return $msg;
            }else{
                $msg = "<p style='color:red; text-align:center;'>There is a problem occur on server while Subscribing </p>";
                return $msg;
            }
        }
    }

    // public function SendSubscribemail($data){

}