<?php
class Order extends Controller{
    
    function __construct(){
        $this->order = $this->model("OrderModel");
        $this->orderdetail = $this->model("OrderDetailModel");
        $this->saleorder = $this->model("SaleOrderModel");
        $this->sale = $this->model("SaleModel");
        $this->product = $this->model("ProductModel");
        $this->UserRole = $this->model("UserRoleModel");     
        $this->cartdetail = $this->model("CartDetailModel");  
    }
    function index(){
        if($this->UserRole->checkRole("staff.sell")!=1 && $this->UserRole->checkRole("admin")!=1)
        {
            $this->page500();
            exit();
        }
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
    function getByUser(){
        $list = $this->order->getUser();
        echo $list;
    }
    function getLastID(){
        $list = $this->order->selectLast();
        echo $list;
    }
    function getOrderByStatus($status) {
        $list = $this->order->selectstatus($status);
        echo $list;
    }
    
    function add(){
        if($this->UserRole->checkRole("admin")!=1 && $this->UserRole->checkPermission($_SESSION['username'],"staff.sell.add","add")!=1 && $this->UserRole->checkPermission($_SESSION['username'],"staff.sell","add")!=1)        
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
    function addOnline(){
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $today = date('Y-m-d', time());

        //order//
        $order = json_decode($_POST['order']);
        $user = $_SESSION['username'];
        $arr = array('date' => $today , "subtotal" => $order->subtotal , "shippingfee" => $order->shipping , "discount" => $order->discount , "total" => $order->total - $order->discount + $order->shipping  , "customer_username" => $user, "status" => "0");
        
        $this->order->add($arr);
        $orderID = $this->order->selectLast();

        //cart
        $cart = json_decode($this->cartdetail->getID());

        //order detail
        $productID = json_decode($_POST['productID']);
        $orderdetail = array();
        if(isset($productID) && !empty($productID)){
            for($i = 0 ; $i < count($productID) ; $i++){
                
                $product = json_decode($this->product->getID($productID[$i]));
                
                $id = $product->data[0]->id;
                $price = $product->data[0]->price;
                //sale
                $sale = json_decode($this->sale->getID($product->data[0]->saleID));
                $startdate = $sale->data[0]->startdate;
                $enddate = $sale->data[0]->enddate;
                $discount = $sale->data[0]->discount;

                if($startdate<$today && $today<$enddate){
                    $discountProduct =  $price - $price*$discount/100;       
                }
                
                for($e=0 ; $e < count($cart->data) ; $e++){
                    if($cart->data[$e]->productID==$id){
                        $quantity = $cart->data[$e]->quantity;
                    }
                }
                $subtotal = $quantity*$price;
                $arrayproduct = array('orderID' => $orderID ,'productID' => $id, "quantity" => $quantity , "price" => $price , "subtotal" => $subtotal , "discount" => $discount);
                $this->orderdetail->add($arrayproduct);
                $this->cartdetail->delete($id);
            }   
        }

        //Sale//
        $saleShipping = json_decode($_POST['saleShipping']);
        $saleEvent = json_decode($_POST['saleEvent']);
        $voucherList = json_decode($_POST['voucherList']);
        $saleList = array();
        if(!empty($saleShipping)){
            array_push($saleList, $saleShipping[0]);
        }
        if(!empty($saleEvent)){
            array_push($saleList, $saleEvent[0]);
        }
        if(!empty($voucherList)){
            for($i = 0 ; $i < count($voucherList) ; $i++){
                array_push($saleList, $voucherList[$i]);
            }   
        }
     
        if(!empty($saleList)){
            for($z = 0 ; $z < count($saleList) ; $z++){
                $arraySale = array('orderID' => $orderID ,'saleID' => $saleList[$z]);
                $this->saleorder->add($arraySale);
            }
        }
        
       
     
    }
    function update($id){
        if($this->UserRole->checkRole("admin")!=1 && $this->UserRole->checkPermission($_SESSION['username'],"staff.sell.update","update")!=1 && $this->UserRole->checkPermission($_SESSION['username'],"staff.sell","update")!=1)
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
        if($this->UserRole->checkRole("admin")!=1 && $this->UserRole->checkPermission($_SESSION['username'],"staff.sell.delete","delete")!=1 && $this->UserRole->checkPermission($_SESSION['username'],"staff.sell","delete")!=1)        
        {
            echo 2;
            return;
        }
        //if(isset($_POST['checkDelete'])){
            $status = -1;
            $array = array('status' => $status);
            if($this->order->updateByID($array,$id)==1){
                $orderdetail = json_decode($this->orderdetail->getID($id));
                for($i=0 ; $i< count($orderdetail->data) ; $i++ ){
                    $id = $orderdetail->data[$i]->productID;
                    $quantity = $orderdetail->data[$i]->quantity;
                    $this->product->resetQuantityByID($id,$quantity);
                    $this->product->resetSoldByID($id,$quantity);
                }
                echo 1;
                return;
            }
        //}
        echo 0;
    }
    function printInvoice($id){
        $this->view("admin/layout2",array(
			"Page" => "printInvoice\index"
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