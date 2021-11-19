<?php
    $filepath = realpath(dirname(__FILE__));
    include_once ($filepath.'/../lib/Database.php');
    include_once ($filepath.'/../helpers/format.php');
?>
<?php
    class Addpost{
        private $db;
        private $fm;

    public function __construct(){
        $this->db = new Database();
        $this->fm = new format();
    }
    public function submitPost($data, $file){
        $userid = mysqli_real_escape_string($this->db->link, $data['userid']);
        $title = mysqli_real_escape_string($this->db->link, $data['title']);
        $bedroom = mysqli_real_escape_string($this->db->link, $data['bedroom']);
        $bathroom = mysqli_real_escape_string($this->db->link, $data['bathroom']);
        $division = mysqli_real_escape_string($this->db->link, $data['division']);
        $district = mysqli_real_escape_string($this->db->link, $data['district']);
        $thana = mysqli_real_escape_string($this->db->link, $data['thana']);
        $sectorno = mysqli_real_escape_string($this->db->link, $data['sectorno']);
        $roadno = mysqli_real_escape_string($this->db->link, $data['roadno']);
        $houseno = mysqli_real_escape_string($this->db->link, $data['houseno']);
        $address = mysqli_real_escape_string($this->db->link, $data['address']);
        $price = mysqli_real_escape_string($this->db->link, $data['price']);
        $map = mysqli_real_escape_string($this->db->link, $data['map']);
        $description = mysqli_real_escape_string($this->db->link, $data['description']);


        $permited = array('jpg', 'jpeg', 'png', 'gif');
        $file_name = $file['image']['name'];
        $file_size = $file['image']['size'];
        $file_temp = $file['image']['tmp_name'];

        $div = explode('.', $file_name);
        $file_ext = strtolower(end($div));
        $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
        $uploaded_image = "uploads/".$unique_image;


        // if (empty($title) || empty($bathroom) || empty($bedroom) || empty($division) || empty($district) || empty($thana) || empty($address) || empty($price)) {
        //     $msg = "<p style='color:red;'>* field Must not be empty</p>";
        //     return $msg; 
        // }else{
            move_uploaded_file($file_temp, $uploaded_image);
            $query = "INSERT INTO tbl_post(userId,title,address,bedroom,bathroom,division,district,thana,sectorno,roadno,houseno,price,map,image,description) VALUES('$userid', '$title', '$address', '$bedroom','$bathroom', '$division', '$district', '$thana', '$sectorno', '$roadno', '$houseno', '$price', '$map', '$uploaded_image', '$description')";
            $inserted_row = $this->db->insert($query);
            if ($inserted_row) {
                $msg = "<p style='color:green; text-align:center;'>Post added Successfully</p>";
                return $msg;
            }else{
                $msg = "<p style='color:red; text-align:center;'>There is a problem occur on server while submiting post</p>";
                return $msg;
            }
        // }

       

    }
    public function postUpdate($data,$file,$id){
        $title = mysqli_real_escape_string($this->db->link, $data['title']);
        $bedroom = mysqli_real_escape_string($this->db->link, $data['bedroom']);
        $bathroom = mysqli_real_escape_string($this->db->link, $data['bathroom']);
        $division = mysqli_real_escape_string($this->db->link, $data['division']);
        $district = mysqli_real_escape_string($this->db->link, $data['district']);
        $thana = mysqli_real_escape_string($this->db->link, $data['thana']);
        $sectorno = mysqli_real_escape_string($this->db->link, $data['sectorno']);
        $roadno = mysqli_real_escape_string($this->db->link, $data['roadno']);
        $houseno = mysqli_real_escape_string($this->db->link, $data['houseno']);
        $address = mysqli_real_escape_string($this->db->link, $data['address']);
        $price = mysqli_real_escape_string($this->db->link, $data['price']);
        $map = mysqli_real_escape_string($this->db->link, $data['map']);
        $description = mysqli_real_escape_string($this->db->link, $data['description']);


        $division = ucwords( $division);
        $district = ucwords( $district);
        $thana = ucwords( $thana);

        $permited = array('jpg', 'jpeg', 'png', 'gif');
        $file_name = $file['image']['name'];
        $file_size = $file['image']['size'];
        $file_temp = $file['image']['tmp_name'];

        $div = explode('.', $file_name);
        $file_ext = strtolower(end($div));
        $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
        $uploaded_image = "uploads/".$unique_image;

        if (!empty($file_ext)) {
            move_uploaded_file($file_temp, $uploaded_image);
            $query = "UPDATE tbl_post
                      SET
                      title = '$title',
                      bedroom = '$bedroom',
                      bathroom = ' $bathroom',
                      division = '$division',
                      district = '$district',
                      thana = '$thana',
                      sectorno = '$sectorno',
                      roadno = '$roadno',
                      houseno = '$houseno',
                      address = '$address',
                      map = '$map',
                      image = '$uploaded_image',
                      description = '$description'
                      WHERE id = '$id'";
            $updated_row = $this->db->update($query);
            if ($updated_row) {
                $msg = "<p style='color:green;'>Data Updated Successfully</p>";
                return $msg;
            }else{
                $msg = "<p style='color:red;'>Data Updated Not Successfully</p>";
                return $msg;
            }
        }

        $query = "UPDATE tbl_post
                      SET
                      title = '$title',
                      bedroom = '$bedroom',
                      bathroom = ' $bathroom',
                      division = '$division',
                      district = '$district',
                      thana = '$thana',
                      sectorno = '$sectorno',
                      roadno = '$roadno',
                      houseno = '$houseno',
                      address = '$address',
                      map = '$map',
                      description = '$description'
                      WHERE id = '$id'";
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
?>