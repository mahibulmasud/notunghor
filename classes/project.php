<?php
    $filepath = realpath(dirname(__FILE__));
    include_once ($filepath.'/../lib/Database.php');
?>
<?php
    class Project{
        private $db;

    public function __construct(){
        $this->db = new Database();
    }


    public function autoRefresh($eimage){
        
    }
}