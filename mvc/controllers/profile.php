<?php
class profile extends Controller{
    
    function __construct(){
                                                                      
    }

    function index(){       
        $this->view("layoutHome",array(
			"Page" => "profile"       
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