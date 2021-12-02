<?php
class rating extends Controller{
    
    function __construct(){
        $this->rating = $this->model("RatingModel");                                                             
    }
    function getAll(){
        $list = $this->rating->getAll();
        echo $list;
    }
    function getByID($id){
        $list = $this->rating->getID($id);
        echo $list;
    }
    function getByProduct($id){
        $list = $this->rating->getByProduct($id);
        echo $list;
    }
    function getByRating($rate){
        $list = $this->rating->getByRating($rate);
        echo $list;
    }
    function getByRatingAndProduct(){
        $list = $this->rating->getByRating($rate);
        echo $list;
    }
    function getByUser(){
        $list = $this->rating->getByUser();
        echo $list;
    }
    function getByUserAndRating($rate){
        $list = $this->rating->getByUserAndRating($rate);
        echo $list;
    }
    
    function add(){
        if(isset($_POST['txtRating']) && $_POST['txtComment'] && $_POST['txtOrderID'] && $_POST['txtProductID']){
            
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            $today = date('Y-m-d', time());

            $orderID = $_POST['txtOrderID'];
            $productID = $_POST['txtProductID'];
            $rating = $_POST['txtRating'];
            $comment = $_POST['txtComment'];

            $array = array('orderID' => $orderID, "productID" => $productID , "rating" => $rating,  "comment" => $comment , 
            "date" =>$today);
            
            if($this->rating->add($array)==1){
                echo 1;
                return;
            }
        }
        echo 0;                       
    }
    function update($id){
        if(isset($_POST['txtRating']) && $_POST['txtComment'] && $_POST['txtOrderID'] && $_POST['txtProductID']){
            
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            $today = date('Y-m-d', time());

            $orderID = $_POST['txtOrderID'];
            $productID = $_POST['txtProductID'];
            $rating = $_POST['txtRating'];
            $comment = $_POST['txtComment'];

            $array = array('orderID' => $orderID, "productID" => $productID , "rating" => $rating,  "comment" => $comment , 
            "date" =>$today);
            
            if($this->rating->update($array,$id)==1){
                echo 1;
                return;
            }
        }
        echo 0;                       
    }
    function updateStatus(){
                         
    }

    function delete($id){
        if(isset($_POST['checkDelete'])){
            
            if($this->rating->delete($id)==1){
                echo 1;
                return;
            }
        }
        echo 0;
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