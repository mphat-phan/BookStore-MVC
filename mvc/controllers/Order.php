<?php
class Order extends Controller{
    
    function __construct(){
        $this->order = $this->model("OrderModel");
        $this->orderdetail = $this->model("OrderDetailModel");
    }

    function index(){
        $this->view("layout",array(
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
                $this->view("admin/pages/order/orderAjax",array(
                    "Order" => $this->order->getAll(),
                    "OrderDetail" => $this->orderdetail->getAll(),
                    "msg1" => "Delete Successful",
                    "color" => "success"
                ));
                return;
            }
        }
        $this->view("admin/pages/order/orderAjax",array(
            "Order" => $this->order->getAll(),
            "OrderDetail" => $this->orderdetail->getAll(),
            "msg1" => "Delete Failed",
            "color" => "danger"
        ));
    }
    function deleteOrderDetail($id){
        if(isset($_POST['checkDelete'])){
            
            if($this->orderdetail->delete($id)==1){
                $this->view("admin/pages/order/orderdetailAjax",array(
                    "OrderDetail" => $this->orderdetail->getAll(),
                    "msg2" => "Delete Successful",
                    "color" => "success"
                ));
                return;
            }
        }
        $this->view("admin/pages/order/orderdetailAjax",array(
            "OrderDetail" => $this->orderdetail->getAll(),
            "msg2" => "Delete Failed",
            "color" => "danger"
        ));
    }
    function pages() {
        $this->view("pages/404");
    }
    
}
?>