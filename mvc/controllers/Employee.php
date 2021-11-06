<?php
class Employee extends Controller{
    
    function __construct(){
        $this->employee = $this->model("EmployeeModel");
        
    }

    function index(){
        $this->view("admin/layout",array(
			"Page" => "employee"           
		));        
    }
    function getAll(){
        $list = $this->employee->getAll();
        echo $list;
    }
    function getByID($id){
        $list = $this->employee->getID($id);
        echo $list;
    }
    function getByUsername($name){
        $list = $this->employee->getUsername($name);
        echo $list;
    }
    function add(){
        //if(isset($_POST['submit'])){
        if(isset($_POST['txtName']) && $_POST['txtPhone'] && $_POST['txtAddress'] && $_POST['txtEmail'] && $_POST['txtBirth'] && $_POST['txtJoindate']){

            $name = $_POST['txtName'];
            $phone= $_POST['txtPhone'];
            $email= $_POST['txtEmail'];
            $address= $_POST['txtAddress'];
            $birth= $_POST['txtBirth'];
            $joindate= $_POST['txtJoindate'];
            //neu co username add them usernam
            if(empty($_POST['txtUsername'])){
                $array = array('name' => $name, "phone" => $phone, 'address'=>$address, 'email'=>$email, 'birth'=>$birth , 'joindate' => $joindate);
                
            }
            else{
                $username = $_POST['txtUsername'] ;
                $array = array('name' => $name, "phone" => $phone, 'address'=>$address, 'email'=>$email, 'birth'=>$birth, 'joindate' => $joindate, 'username'=>$username);
            }
            if($this->employee->add($array)==1){
                echo 1;
                return;
            }
        }
        echo 0;

    }

    function update($id){
        
        if(isset($_POST['txtName']) && $_POST['txtPhone'] && $_POST['txtAddress'] && $_POST['txtEmail'] && $_POST['txtBirth']){
            $name = $_POST['txtName'];
            $phone= $_POST['txtPhone'];
            $address= $_POST['txtAddress'];
            $email= $_POST['txtEmail'];
            $birth= $_POST['txtBirth'];
            $joindate= $_POST['txtJoindate'];
            if(empty($_POST['txtUsername'])){
                $array = array('name' => $name, "phone" => $phone, 'address'=>$address, 'email'=>$email, 'birth'=>$birth , 'joindate' => $joindate);
                
            }
            else{
                $username = $_POST['txtUsername'] ;
                $array = array('name' => $name, "phone" => $phone, 'address'=>$address, 'email'=>$email, 'birth'=>$birth, 'joindate' => $joindate, 'username'=>$username);
            }
            
            if($this->employee->updateByID($array,$id)==1){
                echo 1;
                return;
            }
        }
        echo 0;
    }
    function delete($id){
        if(isset($_POST['checkDelete'])){
            
            if($this->employee->delete($id)==1){
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