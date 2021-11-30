<?php
error_reporting(0);
class cart extends Controller{

    function __construct(){
        $this->cart = $this->model("CartModel");
    }
    function index(){
        if(!isset($_SESSION['username']))
        {
            header("Location: home/login");
        }
        $this->view("layoutHome",array(
            "Page" => "cart"
        ));
    }
    function checkout(){
        if(!isset($_SESSION['username']))
        {
            header("Location: ../home/login");
        }
        $this->view("layoutHome",array(
            "Page" => "checkout"
        ));
    }
    function history(){
        if(!isset($_SESSION['username']))
        {
            header("Location: ../home/login");
        }
        $this->view("layoutHome",array(
            "Page" => "carthistory"
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
    function add(){
        if(isset($_POST['username'])){
            $username = $_POST['username'];
            $array = array('username' => $username);
            if($this->author->add($array)==1){
                return 1;
            }
        }
        return 0;
    }  
  
}