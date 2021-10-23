<?php

// http://localhost/live/Home/Show/1/2

class Admin extends Controller{
   
    function dashboard(){
		//model
        //$liststaff = $this->model("admin");        		
		//views
		$this->view("layout", array(
			"Page" => "dashboard"	
		));
    }
}
?>