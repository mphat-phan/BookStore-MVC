<?php
class Company extends Controller{
    
    function __construct(){
        $this->company = $this->model("CompanyModel");
        
    }

    function index(){
        $this->view("layout",array(
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
                $this->view("admin/pages/company/companyAjax",array(
                    "Company" => $this->company->getAll(),
                    "msg" => "Add Successful",
                    "color" => "success"
                ));
                return; 
            }
        }
        $this->view("admin/pages/company/companyAjax",array(
            "Company" => $this->company->getAll(),
            "msg" => "Add Failed",
            "color" => "danger"
        ));
    }
    function update($id){
        if(isset($_POST['txtName']) && $_POST['txtEmail'] && $_POST['txtAddress']){

            $name = $_POST['txtName'];
            $email= $_POST['txtEmail'];
            $address= $_POST['txtAddress'];

            $array = array('name' => $name, "email" => $email,"address" =>$address);

            if($this->company->updateByID($array,$id)==1){
                $this->view("admin/pages/company/companyAjax",array(
                    "Company" => $this->company->getAll(),
                    "msg" => "Update Successful",
                    "color" => "success"
                ));
                return; 
            }
        }
        $this->view("admin/pages/company/companyAjax",array(
            "Company" => $this->company->getAll(),
            "msg" => "Add Failed",
            "color" => "danger"
        ));
    }
    function delete($id){
        if(isset($_POST['checkDelete'])){
            if($this->company->delete($id)==1){
                $this->view("admin/pages/company/companyAjax",array(
                    "Company" => $this->company->getAll(),
                    "msg" => "Delete Successful",
                    "color" => "success"
                ));
                return; 
            }
        }
        $this->view("admin/pages/company/companyAjax",array(
            "Company" => $this->company->getAll(),
            "msg" => "Delete Failed",
            "color" => "danger"
        ));
    }
    function pages() {
        $this->view("pages/404");
    }
}
?>