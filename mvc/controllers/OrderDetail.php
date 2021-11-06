<?php
class OrderDetail extends Controller{
    
    function __construct(){
        $this->orderdetail = $this->model("OrderDetailModel");
    }
    function getAll(){
        $list = $this->orderdetail->getAll();
        echo $list;
    }
    function getByID($id){
        $list = $this->orderdetail->getID($id);
        echo $list;
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