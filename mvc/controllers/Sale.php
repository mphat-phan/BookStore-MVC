<?php
class Sale extends Controller{
    
    function __construct(){
        $this->sale = $this->model("SaleModel");
        $this->UserRole = $this->model("UserRoleModel");     
        $this->SaleUser = $this->model("SaleUserModel");                           
    }

    function index(){
        if($this->UserRole->checkRole("staff.product")!=1 && $this->UserRole->checkRole("admin")!=1)
        {
            $this->page500();
            exit();
        }
        $this->view("admin/layout",array(
			"Page" => "sale"    
		));        
    }
    //Sale
    function getAll(){
        $list = $this->sale->getAll();
        echo $list;
    }
    function getByID($id){
        $list = $this->sale->getID($id);
        echo $list;
    } 
    function getSaleByType($id){
        $list = $this->sale->getType($id);
        echo $list;
    }
    //Sale User
    function getSaleUserByType($id){
        $list = $this->SaleUser->getType($id);
        echo $list;
    }
    function getSaleUser(){
        $list = $this->SaleUser->getAll();
        echo $list;
    }
    function getSaleUserByID($id){
        $list = $this->SaleUser->getID($id);
        echo $list;
    }
    function add(){
        
        if($this->UserRole->checkRole("admin")!=1 && $this->UserRole->checkPermission($_SESSION['username'],"staff.product.add","add")!=1 && $this->UserRole->checkPermission($_SESSION['username'],"staff.product","add")!=1)        
        {
            echo 2;
            return;
        }
        if(isset($_POST['txtName']) && $_POST['txtSaleID'] && $_POST['txtDiscount'] && $_POST['txtStartDate'] && $_POST['txtEndDate']){
            $id = $_POST['txtSaleID'];
            $name = $_POST['txtName'];
            $quantity= $_POST['txtQuantity'];
            $discount = $_POST['txtDiscount'];
            $startdate = $_POST['txtStartDate'];
            $enddate = $_POST['txtEndDate'];
            $minorder = $_POST['txtMinOrder'];
            $maxsale = $_POST['txtMaxSale'];


            $array = array('id' => $id ,'name' => $name, "quantity" => $quantity, "discount" => $discount, "startdate" => $startdate, "enddate" => $enddate , "minorder" => $minorder , "maxsale" => $maxsale);
            if($this->sale->add($array)==1){
                echo 1;
                return;
            }
        }
        echo 0;

    }
    function update($id){
 
        if($this->UserRole->checkRole("admin")!=1 && $this->UserRole->checkPermission($_SESSION['username'],"staff.product.update","update")!=1 && $this->UserRole->checkPermission($_SESSION['username'],"staff.product","update")!=1)
        {
            echo 2;
            return;
        }
        if(isset($_POST['txtName']) && $_POST['txtDiscount'] && $_POST['txtStartDate'] && $_POST['txtEndDate']){
            
            $name = $_POST['txtName'];
            $quantity= $_POST['txtQuantity'];
            $discount = $_POST['txtDiscount'];
            $startdate = $_POST['txtStartDate'];
            $enddate = $_POST['txtEndDate'];
            $minorder = $_POST['txtMinOrder'];
            $maxsale = $_POST['txtMaxSale'];

            $array = array('name' => $name, "quantity" => $quantity, "discount" => $discount, "startdate" => $startdate, "enddate" => $enddate, "minorder" => $minorder , "maxsale" => $maxsale);
            if($this->sale->updateByID($array,$id)==1){
                echo 1;
                return;
            }
        }
        echo 0;
        
    }
    function delete($id){
        if($this->UserRole->checkRole("admin")!=1 && $this->UserRole->checkPermission($_SESSION['username'],"staff.product.delete","delete")!=1 && $this->UserRole->checkPermission($_SESSION['username'],"staff.product","delete")!=1)        
        {
            echo 2;
            return;
        }
        if(isset($_POST['checkDelete'])){
            
            if($this->sale->delete($id)==1){
                echo 1;
                return;
            }
        }
        echo 0;
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