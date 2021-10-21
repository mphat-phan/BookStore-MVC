<?php	
	class accountModel extends DB
	{
		public function getAllAccount()
		{
			$sql = "SELECT * FROM useraccount";
        	return mysqli_query($this->con, $sql); 
		}		
	}
?> 