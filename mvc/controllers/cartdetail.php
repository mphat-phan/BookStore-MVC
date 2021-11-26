<?php
error_reporting(0);
class cartdetail extends Controller{

    function __construct(){
        $this->cartdetail = $this->model("CartDetailModel"); 
    }
    function add(){
        if(isset($_POST['productID'])  && $_POST['quantity']){
            $cartID = $_SESSION['cart'];
            $productID = $_POST['productID'];
            $quantity = $_POST['quantity'];
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            $date = date('Y-m-d G:i:s', time());
            $array = array('cartID'=>$cartID,'productID'=>$productID,'quantity'=>$quantity,'date'=>$date);
            if($this->cartdetail->add($array)==1){
                echo 1;
                return;
            }
        }
        echo 0;
    }  
    function update($id){
        if(isset($_POST['quantity'])){
            $quantity = $_POST['quantity'];
            if($this->cartdetail->updateByID($quantity,$id)==1){
                echo 1;
                return;
            }
        }
        echo 0;
    }
    function delete($id){
        if(isset($_POST['checkDelete']) && $_POST['productID']){
            
            if($this->cartdetail->delete($id)==1){
                echo 1;
                return;
            }
        }
        echo 0;
    }  
    function getByID(){
        $list = $this->cartdetail->getID();
        echo $list;
        
    }
}