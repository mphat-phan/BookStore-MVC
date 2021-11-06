<?php
class Order extends Controller{
    
    function __construct(){
        $this->order = $this->model("OrderModel");
    }
    function index(){
        $this->view("admin/layout",array(
			"Page" => "order"
		));        
    }
    function getAll(){
        $list = $this->order->getAll();
        echo $list;
    }
    function getByID($id){
        $list = $this->order->getID($id);
        echo $list;
    }
    function delete($id){
        if(isset($_POST['checkDelete'])){
            
            if($this->orderdetail->delete($id)==1 && $this->order->delete($id)==1){
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