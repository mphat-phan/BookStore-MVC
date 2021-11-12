<?php
class Sell extends Controller{
    
    function __construct(){
        $this->order = $this->model("OrderModel");
        $this->orderdetail = $this->model("OrderDetailModel");
    }

    function index(){
        $this->view("admin/layout2",array(
			"Page" => "sell"    
		));        
    }
    function pages() {
        $this->view("pages/404");
    }
}
?>