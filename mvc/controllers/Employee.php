<?php
class Employee extends Controller{
    
    function __construct(){
        $this->employee = $this->model("EmployeeModel");
        
    }

    function index(){
        $this->view("layout",array(
			"Page" => "employee",
            "Employee" => $this->employee->getAll()            
		));        
    }
    function ajax(){
        $this->view("admin/pages/employee/employeeAjax",array(
            "Employee" => $this->employee->getAll()
        ));
    }
    function add(){
        //if(isset($_POST['submit'])){
        if(isset($_POST['txtName']) && $_POST['txtPhone'] && $_POST['txtAddress'] && $_POST['txtEmail'] && $_POST['txtBirth'] && $_POST['txtAuth'] && $_POST['txtJoindate']){

            $name = $_POST['txtName'];
            $phone= $_POST['txtPhone'];
            $address= $_POST['txtAddress'];
            $email= $_POST['txtEmail'];
            $birth= $_POST['txtBirth'];
            $auth= $_POST['txtAuth'];
            $joindate= $_POST['txtJoindate'];

            $array = array('name' => $name, "phone" => $phone, 'address'=>$address, 'email'=>$email, 'birth'=>$birth, 'auth'=>$auth, 'joindate'=>$joindate);
            if($this->employee->add($array)==1){
                $this->view("admin/pages/employee/employeeAjax",array(
                    "Employee" => $this->employee->getAll(),
                    "msg" => "Add Successful",
                    "color" => "success"
                ));
                return;
            }
        }
        $this->view("admin/pages/employee/employeeAjax",array(
            "Employee" => $this->employee->getAll(),
            "msg" => "Add Failed",
            "color" => "danger"
        ));

    }

    function update($id){
        
        if(isset($_POST['txtName']) && $_POST['txtPhone'] && $_POST['txtAddress'] && $_POST['txtEmail'] && $_POST['txtBirth'] && $_POST['txtAuth'] && $_POST['txtJoindate']){
            $name = $_POST['txtName'];
            $phone= $_POST['txtPhone'];
            $address= $_POST['txtAddress'];
            $email= $_POST['txtEmail'];
            $birth= $_POST['txtBirth'];
            $auth= $_POST['txtAuth'];
            $joindate= $_POST['txtJoindate'];
            $array = array('name' => $name, "phone" => $phone, 'address'=>$address, 'email'=>$email, 'birth'=>$birth, 'auth'=>$auth, 'joindate'=>$joindate);
            
            if($this->employee->updateByID($array,$id)==1){
                $this->view("admin/pages/employee/employeeAjax",array(
                    "Employee" => $this->employee->getAll(),
                    "msg" => "Update Successful",
                    "color" => "success"
                ));
                return;
            }
        }
        $this->view("admin/pages/employee/employeeAjax",array(
            "Employee" => $this->employee->getAll(),
            "msg" => "Update Failed",
            "color" => "danger"
        ));
    }
    function delete($id){
        if(isset($_POST['checkDelete'])){
            
            if($this->employee->delete($id)==1){
                $this->view("admin/pages/employee/employeeAjax",array(
                    "Employee" => $this->employee->getAll(),
                    "msg" => "Delete Successful",
                    "color" => "success"
                ));
                return;
            }
        }
        $this->view("admin/pages/employee/employeeAjax",array(
            "Employee" => $this->employee->getAll(),
            "msg" => "Delete Failed",
            "color" => "danger"
        ));
    }
    function pages() {
        $this->view("pages/404");
    }
}
?>