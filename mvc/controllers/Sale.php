<?php
class Sale extends Controller{
    
    function __construct(){
        $this->sale = $this->model("SaleModel");
        
    }

    function index(){
        $this->view("admin/layout",array(
			"Page" => "sale"    
		));        
    }
    function getAll(){
        $list = $this->sale->getAll();
        echo $list;
    }
    function getByID($id){
        $list = $this->sale->getID($id);
        echo $list;
    }
    static function reverse($number)  
    {  
    /* writes number into string. */  
        $num = (string) $number;  
        /* Reverse the string. */  
        $revstr = strrev($num);  
        /* writes string into int. */  
        $reverse = (int) $revstr;   
        return $reverse;  
    }  
    function add(){
        
        if(isset($_POST['txtName']) && $_POST['txtQuantity'] && $_POST['txtDiscount'] && $_POST['txtStartDate'] && $_POST['txtEndDate'] && $_POST['txtMinOrder'] && $_POST['txtMaxSale']){
            $id= sale::reverse((int)time());
            

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
        if(isset($_POST['txtName']) && $_POST['txtQuantity'] && $_POST['txtDiscount'] && $_POST['txtStartDate'] && $_POST['txtEndDate'] && $_POST['txtMinOrder'] && $_POST['txtMaxSale']){
            
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
}
?>