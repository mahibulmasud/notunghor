<?php
    include('lib/Session.php');
    Session::init();
    include('lib/Database.php'); 
 ?>
<?php
    $db = new Database();
?>
<?php
    if(!isset($_GET['deletepostid']) || $_GET['deletepostid'] == NULL){
        header("Location: 404.php");
    }else{
        $postid = $_GET['deletepostid'];
        $query = "SELECT * FROM tbl_post WHERE id ='$postid'";
        $getData = $db->select($query);

        if($getData){
            while ($delimg = $getData->fetch_assoc()) {
                $dellink = $delimg['image'];
                unlink($dellink);
            }
        }

        $delquery = "DELETE FROM tbl_post WHERE id = '$postid'";
        $delData = $db->delete( $delquery);
        if($delData){
            echo "<script>alert('Post Deleted Successfully')</script>";
            echo "<script>window.location = 'profile.php';</script>";
        }else {
            echo "<script>alert('Sorry Post not delted Successfully')</script>";
            echo "<script>window.location = 'profile.php';</script>";
        }
    }

    
?>