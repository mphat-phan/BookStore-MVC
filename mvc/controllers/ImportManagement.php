<?php
class ImportManagement extends Controller{
    
    function __construct(){
        $this->importdetail = $this->model("ImportDetailModel");
  
    }
    function index(){
        $this->view("admin/layout",array(
			"Page" => "importmanagement"          
		));        
    }
}
?>