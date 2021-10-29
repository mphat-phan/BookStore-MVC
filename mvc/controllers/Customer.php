<?php
class Customer extends Controller{
    
    function __construct(){
        $this->customer = $this->model("CustomerModel");
        
    }

    function index(){
        $this->view("layout",array(
			"Page" => "customer",
            "Customer" => $this->customer->getAll()            
		));        
    }
    function ajax(){
        $this->view("admin/pages/customer/customerAjax",array(
            "Customer" => $this->customer->getAll()
        ));
    }
    function add(){
        //if(isset($_POST['submit'])){
        if(isset($_POST['txtName']) && $_POST['txtPhone'] && $_POST['txtAddress'] && $_POST['txtEmail'] && $_POST['txtBirth']){

            $name = $_POST['txtName'];
            $phone= $_POST['txtPhone'];
            $address= $_POST['txtAddress'];
            $email= $_POST['txtEmail'];
            $birth= $_POST['txtBirth'];

            $array = array('name' => $name, "phone" => $phone, 'address'=>$address, 'email'=>$email, 'birth'=>$birth);
            if($this->customer->add($array)==1){
                $this->view("admin/pages/customer/customerAjax",array(
                    "Customer" => $this->customer->getAll(),
                    "msg" => "Add Successful",
                    "color" => "success"
                ));
                return;
            }
        }
        $this->view("admin/pages/customer/customerAjax",array(
            "Customer" => $this->customer->getAll(),
            "msg" => "Add Failed",
            "color" => "danger"
        ));

    }

    function update($id){
        
        if(isset($_POST['txtName']) && $_POST['txtPhone'] && $_POST['txtAddress'] && $_POST['txtEmail'] && $_POST['txtBirth']){
            $name = $_POST['txtName'];
            $phone= $_POST['txtPhone'];
            $address= $_POST['txtAddress'];
            $email= $_POST['txtEmail'];
            $birth= $_POST['txtBirth'];
          
            $array = array('name' => $name, "phone" => $phone, 'address'=>$address, 'email'=>$email, 'birth'=>$birth);
            
            if($this->customer->updateByID($array,$id)==1){
                $this->view("admin/pages/customer/customerAjax",array(
                    "Customer" => $this->customer->getAll(),
                    "msg" => "Update Successful",
                    "color" => "success"
                ));
                return;
            }
        }
        $this->view("admin/pages/customer/customerAjax",array(
            "Customer" => $this->customer->getAll(),
            "msg" => "Update Failed",
            "color" => "danger"
        ));
    }
    function delete($id){
        if(isset($_POST['checkDelete'])){
            
            if($this->customer->delete($id)==1){
                $this->view("admin/pages/customer/customerAjax",array(
                    "Customer" => $this->customer->getAll(),
                    "msg" => "Delete Successful",
                    "color" => "success"
                ));
                return;
            }
        }
        $this->view("admin/pages/customer/customerAjax",array(
            "Customer" => $this->customer->getAll(),
            "msg" => "Delete Failed",
            "color" => "danger"
        ));
    }
    function pages() {
        $this->view("pages/404");
    }
}
?>