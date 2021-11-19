<?php
    $filepath = realpath(dirname(__FILE__));
    include_once ($filepath.'/../lib/Database.php');
    include_once ($filepath.'/../helpers/format.php');
?>
<?php
    class SiteSocial{
        private $db;
        private $fm;

    public function __construct(){
        $this->db = new Database();
        $this->fm = new format();
    }

    public function updateSocial($data){
        $facebook = mysqli_real_escape_string($this->db->link, $data['facebook']);
        $twitter = mysqli_real_escape_string($this->db->link, $data['twitter']);
        $instagram = mysqli_real_escape_string($this->db->link, $data['instagram']);

        $query = "UPDATE tbl_sitesocial
        SET
        facebook = '$facebook',
        twitter = '$twitter',
        instagram = '$instagram'
        WHERE id = 1";
        $updated_row = $this->db->update($query);
        if ($updated_row) {
                $msg = "<p style='color:green;'>Links is Updated Successfully</p>";
                return $msg;
        }else{
        $msg = "<p style='color:red;'>Sorry! Failed to update Social Media Link.</p>";
        return $msg;
        }

    }

}