<?php
error_reporting(0);
class cartdetail extends Controller{

    function __construct(){
        $this->cartdetail = $this->model("CartDetailModel"); 
    }
    function add(){
        if(isset($_POST['cartID']) && $_POST['productID'] && $_POST['quantity']){
            $cartID = $_POST['cartID'];
            $productID = $_POST['productID'];
            $quantity = $_POST['quantity'];
            $array = array('cartID'=>$cartID,'productID'=>$productID,'quantity'=>$quantity);
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
            $array = array('quantity'=>$quantity);
            if($this->cartdetail->update($array,$id)==1){
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
}