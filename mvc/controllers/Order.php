<?php
class Order extends Controller{
    
    function __construct(){
        $this->order = $this->model("OrderModel");
        $this->orderdetail = $this->model("OrderDetailModel");
        $this->saleorder = $this->model("SaleOrderModel");
        
        $this->UserRole = $this->model("UserRoleModel");                        
        if($this->UserRole->checkRole("staff.sell")!=1 && $this->UserRole->checkRole("admin")!=1)
        {
            $this->page500();
            exit();
        }
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
        if($this->UserRole->checkRole("admin")!=1 && $this->UserRole->checkPermission($_SESSION['username'],"staff.sell","add")!=1)        
        {
            echo 2;
            return;
        }
        $arr;
        if(isset($_POST['orderdetail'])){ 
            $date = $_POST['txtDate'];
           
            $subtotal= $_POST['txtSubTotal'];
            $shippingfee= $_POST['txtShippingfee'];
            $discount = $_POST['txtDiscount'];
            $total= $_POST['txtTotal'];
            $MoneyInput = $_POST['txtMoneyInput'];
            $MoneyOutput = $_POST['txtMoneyOutput'];
            $EmployeeUser= $_POST['txtEmployeeUser'];
            
            $obj = json_decode($_POST['orderdetail']);
            $saleList = json_decode($_POST['saleList']);
            
            if($total==0){
                echo 0; 
                return;
            }
            
            if(!empty($_POST['txtCustomerID'])){
                $CustomerID = $_POST['txtCustomerID'];
                $arr = array('date' => $date , "subtotal" => $subtotal , "shippingfee" => $shippingfee , "discount" => $discount , "total" => $total , "employee_username" => $EmployeeUser, "customerID" => $CustomerID, "status" => "4" , "moneyinput" => $MoneyInput, "moneyoutput" => $MoneyOutput);
            }
            else{
                $arr = array('date' => $date, "subtotal" => $subtotal , "shippingfee" => $shippingfee , "discount" => $discount , "total" => $total , "employee_username" => $EmployeeUser,"status" => "4", "moneyinput" => $MoneyInput, "moneyoutput" => $MoneyOutput);
            }

            if($this->order->add($arr)==1){
                $orderID = $this->order->selectLast();
                for($i = 0 ; $i < count($obj) ; $i++){
                    
                    $array = array('orderID' => $orderID ,'productID' => $obj[$i]->productID, "quantity" => $obj[$i]->quantity , "price" => $obj[$i]->price , "subtotal" => $obj[$i]->subtotal , "discount" => $obj[$i]->discount);
                    $this->orderdetail->add($array);
                }
                //nếu tồn tại mã sale thì add vào bảng sale order
                if(!empty($saleList)){

                    for($i = 0 ; $i < count($saleList) ; $i++){
                    
                        $array = array('orderID' => $orderID ,'saleID' => $saleList[$i]->saleID);
                        $this->saleorder->add($array);
                    }
                }
                echo $orderID;
                return;
            }

            
        }
        echo 0;
    }
    function update($id){
        if($this->UserRole->checkRole("admin")!=1 && $this->UserRole->checkPermission($_SESSION['username'],"staff.sell","update")!=1)        
        {
            echo 2;
            return;
        }
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
        if($this->UserRole->checkRole("admin")!=1 && $this->UserRole->checkPermission($_SESSION['username'],"staff.sell","delete")!=1)        
        {
            echo 2;
            return;
        }
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
    function printInvoice($id){
        $this->view("admin/layout2",array(
			"Page" => "printInvoice"
		));  
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