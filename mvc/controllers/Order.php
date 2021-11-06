<?php
class Order extends Controller{
    
    function __construct(){
        $this->order = $this->model("OrderModel");
        $this->orderdetail = $this->model("OrderDetailModel");
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
    function getLastID(){
        $list = $this->order->selectLast();
        echo $list;
    }
    function add(){

        if(isset($_POST['orderdetail'])){
            $date = $_POST['txtDate'];
            $total= $_POST['txtTotal'];
            $EmployeeUser= $_POST['txtEmployeeUser'];
            $CustomerID = $_POST['txtCustomerID'];
            //$sale= $_POST['txtSale'];
            $obj = json_decode($_POST['orderdetail']);
            
            if($total==0){
                echo 0; 
                return;
            }

            if($this->order->add(array('date' => $date, "total" => $total , "employee_username" => $EmployeeUser, "customerID" => $CustomerID,"status" => "3"))==1){
                $orderID = $this->order->selectLast();
                for($i = 0 ; $i < count($obj) ; $i++){
                    
                    $array = array('orderID' => $orderID ,'productID' => $obj[$i]->productID, "quantity" => $obj[$i]->quantity , "price" => $obj[$i]->price);
                    $this->orderdetail->add($array);
                }
                echo 1;
                return;
            }
            
        }
        echo 0;
    }
    function update($id){
        if(isset($_POST['checkStatus'])){
            $status = 1;
            $array = array('status' => $status);
            if($this->order->updateByID($array,$id)==1){
                echo 1;
                return;
            }
        }
        echo 0;
    }
    function delete($id){
        if(isset($_POST['checkDelete'])){
            $status = -1;
            $array = array('status' => $status);
            if($this->order->updateByID($array,$id)==1){
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