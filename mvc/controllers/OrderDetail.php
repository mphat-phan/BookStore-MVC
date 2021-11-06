<?php
class OrderDetail extends Controller{
    
    function __construct(){
        $this->orderdetail = $this->model("OrderDetailModel");
        $this->order = $this->model("OrderModel");
        $this->product = $this->model("ProductModel");
    }
    function getAll(){
        $list = $this->orderdetail->getAll();
        echo $list;
    }
    function getByID($id){
        $list = json_decode($this->orderdetail->getID($id));
        
        for($i=0;$i<count($list->data);$i++){
            $product = $list->data[$i]->productID; // id product

            $productobj = json_decode($this->product->getID($product));

            $list->data[$i]->productID = array("name" => $productobj->data[0]->name);
            
        }
        echo json_encode(["data" => $list->data],JSON_PRETTY_PRINT);
        //echo $list;
    }
    function delete($id){
        if(isset($_POST['checkDeleteOrderDetail'])){
            if($this->orderdetail->delete($id)==1){
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