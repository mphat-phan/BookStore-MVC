<?php
class Import extends Controller{
    
    function __construct(){
        $this->import = $this->model("ImportModel");
        $this->importdetail = $this->model("ImportDetailModel");        
        $this->UserRole = $this->model("UserRoleModel");                        
        if($this->UserRole->checkRole("staff.import")!=1 && $this->UserRole->checkRole("admin")!=1)
        {
            $this->page500();
            exit();
        }
    }

    function index(){
        $this->view("admin/layout",array(
			"Page" => "import"    
		));        
    }
    function getAll(){
        $list = $this->import->getAll();
        echo $list;
    }
    function getByID($id){
        $list = $this->import->getID($id);
        echo $list;
    }
    function getLastID(){
        $list = $this->import->selectLast();
        echo $list;
    }
    function add(){
        if($this->UserRole->checkRole("admin")!=1 && $this->UserRole->checkPermission($_SESSION['username'],"staff.import","add")!=1)        
        {
            echo 2;
            return;
        }
        if(isset($_POST['importdetail'])){
            $date = $_POST['txtDate'];
            $total= $_POST['txtTotal'];
            $user= $_POST['txtUser'];
            $obj = json_decode($_POST['importdetail']);
            
            if($total==0){
                echo 0; 
                return;
            }

            if($this->import->add(array('date' => $date, "total" => $total , "employee_username" => $user))==1){
                $importID = $this->import->selectLast();
                for($i = 0 ; $i < count($obj) ; $i++){
                    
                    $array = array('importID' => $importID ,'productID' => $obj[$i]->productID, "quantity" => $obj[$i]->quantity , "price" => $obj[$i]->price);
                    
                    $this->importdetail->add($array);
                }
                echo 1;
                return;
            }
        }
        echo 0;
        
    }
    function update(){
        if($this->UserRole->checkRole("admin")!=1 && $this->UserRole->checkPermission($_SESSION['username'],"staff.import","update")!=1)        
        {
            echo 2;
            return;
        }
    }
    function delete(){
        if($this->UserRole->checkRole("admin")!=1 && $this->UserRole->checkPermission($_SESSION['username'],"staff.import","delete")!=1)        
        {
            echo 2;
            return;
        }
    }
    function pages() {
        $this->view("pages/404");
    }
    function page500() {
        $this->view("layout2",array(
            "Page" => "500"
        ));
    }
}
?>