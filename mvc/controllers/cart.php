<?php
error_reporting(0);
class cart extends Controller{

    function __construct(){
                    
    }
    function index(){
        $this->view("layoutHome",array(
            "Page" => "cart"
        ));
    }
    function checkout(){
        $this->view("layoutHome",array(
            "Page" => "checkout"
        ));
    }
    function history(){
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
}