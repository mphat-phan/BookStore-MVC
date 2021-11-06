<?php
class Customer extends Controller{
    
    function __construct(){
        $this->customer = $this->model("CustomerModel");
        
    }

    function index(){
        $this->view("admin/layout",array(
			"Page" => "customer"  
		));        
    }
    function getAll(){
        $list = $this->customer->getAll();
        echo $list;
    }
    function getByID($id){
        $list = $this->customer->getID($id);
        echo $list;
    }
    function getByUsername($name){
        $list = $this->customer->getUsername($name);
        echo $list;
    }
    function add(){
        //if(isset($_POST['submit'])){
        if(isset($_POST['txtName']) && $_POST['txtPhone'] && $_POST['txtAddress'] && $_POST['txtEmail'] && $_POST['txtBirth']){

            $name = $_POST['txtName'];
            $phone= $_POST['txtPhone'];
            $email= $_POST['txtEmail'];
            $address= $_POST['txtAddress'];
            $birth= $_POST['txtBirth'];
            //neu co username add them usernam
            if(empty($_POST['txtUsername'])){
                $array = array('name' => $name, "phone" => $phone, 'address'=>$address, 'email'=>$email, 'birth'=>$birth);
                
            }
            else{
                $username = $_POST['txtUsername'] ;
                $array = array('name' => $name, "phone" => $phone, 'address'=>$address, 'email'=>$email, 'birth'=>$birth, 'username'=>$username);
            }
            if($this->customer->add($array)==1){
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
          
            if(empty($_POST['txtUsername'])){
                $array = array('name' => $name, "phone" => $phone, 'address'=>$address, 'email'=>$email, 'birth'=>$birth);
                
            }
            else{
                $username = $_POST['txtUsername'] ;
                $array = array('name' => $name, "phone" => $phone, 'address'=>$address, 'email'=>$email, 'birth'=>$birth, 'username'=>$username);
            }
            
            if($this->customer->updateByID($array,$id)==1){
                echo 1;
                return;
            }
        }
        echo 0;
    }
    function delete($id){
        if(isset($_POST['checkDelete'])){
            
            if($this->customer->delete($id)==1){
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