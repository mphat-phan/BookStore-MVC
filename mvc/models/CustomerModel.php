<?php
class CustomerModel extends DB {
	public function getAllCus()
	{
		$sql = "SELECT * FROM customer";
		return mysqli_query($this->con, $sql);
	}
	public function getCus($id)
		{
			$sql = "SELECT * FROM customer WHERE idcustomer='$id'";
			return mysqli_query($this->con, $sql);
		}
}
?>