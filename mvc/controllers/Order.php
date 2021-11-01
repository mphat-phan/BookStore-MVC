<?php
class Order extends Controller{
    
    function __construct(){
        $this->order = $this->model("OrderModel");
        $this->orderdetail = $this->model("OrderDetailModel");
    }

    function index(){
        $this->view("admin/layout",array(
			"Page" => "order",
            "Order" => $this->order->getAll(),
            "OrderDetail" => $this->orderdetail->getOrderDetailByOrderID(1)
		));        
    }
    function chitiethoadon($id){
        $this->view("admin/pages/order/orderdetailAjax",array(
            "OrderDetail" => $this->orderdetail->getOrderDetailByOrderID($id)
		));        
    }
    function ajax(){
        $this->view("admin/pages/order/orderAjax",array(
            "Order" => $this->order->getAll(),
            "OrderDetail" => $this->orderdetail->getOrderDetailByOrderID(1) 
        ));
    }
    function deleteOrder($id){
        if(isset($_POST['checkDelete'])){
            
            if($this->orderdetail->delete($id)==1 && $this->order->delete($id)==1){
                echo 1;
                return;
            }
        }
        echo 0;
    }
    function deleteOrderDetail($id){
        if(isset($_POST['checkDelete'])){
            
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