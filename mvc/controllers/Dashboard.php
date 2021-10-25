<?php
class Dashboard extends Controller{
    
    function __construct(){
        //$this->category = $this->model("CategoryModel");
        
    }

    function index(){
        $this->view("layout",array(
			"Page" => "dashboard",
		));        
    }
    function ajax(){
        $this->view("admin/pages/dashboard/dashboardAjax",array(
            "Author" => $this->author->getAll()
        ));
    }
    
}
?>