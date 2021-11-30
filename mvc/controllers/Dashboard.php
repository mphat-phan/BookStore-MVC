<?php
class Dashboard extends Controller{
    
    function __construct(){
        //$this->category = $this->model("CategoryModel");
        $this->UserRole = $this->model("UserRoleModel");        
        if($this->UserRole->checkRole("admin")!=1)
        {
            $this->page500();
            exit();
        }
    }

    function index(){
        $this->view("layout",array(
			"Page" => "dashboard",
		));        
    }
    function pages() {
        $this->view("pages/404");
    }
    function page500() {
        $this->view("layout2",array(
            "Page" => "500"
        ));
    }
    
}
?>