<?php
class Employee extends Controller{
    
    function __construct(){
        $this->employee = $this->model("EmployeeModel");
        
    }

    function index(){
        $this->view("layout",array(
			"Page" => "employee",
            "employee" => $this->employee->getAll()            
		));        
    }
    function ajax(){
        $this->view("admin/pages/sell/sellAjax",array(
            "Author" => $this->author->getAll()
        ));
    }
    function add(){

    }
    function update(){

    }
    function delete(){

    }
    function pages() {
        $this->view("pages/404");
    }
}
?>