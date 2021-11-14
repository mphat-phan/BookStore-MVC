<?php
class Sell extends Controller{
    
    function __construct(){
        $this->order = $this->model("OrderModel");
        $this->orderdetail = $this->model("OrderDetailModel");
        $this->UserRole = $this->model("UserRoleModel");                                
    }

    function index(){
        if($this->UserRole->checkRole("staff.sell")!=1 && $this->UserRole->checkRole("admin")!=1)
        {
            $this->page500();
            exit();
        }
        $this->view("admin/layout2",array(
			"Page" => "sell\index"    
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