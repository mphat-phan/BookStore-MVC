<?php

// http://localhost/live/Home/Show/1/2

class admin extends Controller{
   
    function dashboard(){
		//model
        //$liststaff = $this->model("admin");        		
		//views
		$this->view("admin/index", array(
			"Page" => "dashboard"	
		));
    }
	function account(){
		$list = $this->model("AccountModel");
		$listcus = $this->model("CustomerModel");		
		$this->view("admin/index", array(
			"Page" => "account",
			"Array" => $list->getAllAccount()			
		));
		
	}
	function show() {		
		$listcus = $this->model("CustomerModel");
		if(isset($_POST['id']))
		{	
			$id = $_POST['id'];
			$result = $listcus->getCus($id);
			$output = "";
			while($row = mysqli_fetch_array($result)) {
				$output .= '			  
								  <td>'.$row['lastname'].'</td>
								  <td>'.$row['firstname'].'</td>								  
								  <td>'.$row['email'].'</td>
								  <td>'.$row['phonenum'].'</td>								 
							';
			}
			echo $output;
		}
		
	}
	
}
?>