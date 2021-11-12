<?php
class ImportDetail extends Controller{
    
    function __construct(){
        $this->importdetail = $this->model("ImportDetailModel");
        $this->UserRole = $this->model("UserRoleModel");                        
        if($this->UserRole->checkRole("staff.import")!=1 && $this->UserRole->checkRole("admin")!=1)
        {
            $this->page500();
            exit();
        }
    }
    function getByID($id){
        $list = $this->importdetail->getID($id);
        echo $list;
    }
    function page500() {
        $this->view("layout2",array(
            "Page" => "500"
        ));
    }
}
?>