<?php
class Publisher extends Controller{
    
    function __construct(){
        $this->company = $this->model("PublisherModel");
        
    }

    function index(){
        $this->view("admin/layout",array(
			"Page" => "company",
            "Company" => $this->company->getAll()            
		));        
    }
    function ajax(){
        $this->view("admin/pages/company/companyAjax",array(
            "Company" => $this->company->getAll()
        ));
    }
    function add(){
        if(isset($_POST['txtName']) && $_POST['txtEmail'] && $_POST['txtAddress']){
            $name = $_POST['txtName'];
            $email= $_POST['txtEmail'];
            $address= $_POST['txtAddress'];

            $array = array('name' => $name, "email" => $email,"address" =>$address);
            if($this->company->add($array)==1){
                echo 1;
                return; 
            }
        }
        echo 0;
    }
    function update($id){
        if(isset($_POST['txtName']) && $_POST['txtEmail'] && $_POST['txtAddress']){

            $name = $_POST['txtName'];
            $email= $_POST['txtEmail'];
            $address= $_POST['txtAddress'];

            $array = array('name' => $name, "email" => $email,"address" =>$address);

            if($this->company->updateByID($array,$id)==1){
                echo 1;
                return; 
            }
        }
        echo 0;
    }
    function delete($id){
        if(isset($_POST['checkDelete'])){
            if($this->company->delete($id)==1){
                echo 1;
                return; 
            }
        }
        echo 0;
    }
    function pages() {
        $this->view("pages/404");
    }
}
?>