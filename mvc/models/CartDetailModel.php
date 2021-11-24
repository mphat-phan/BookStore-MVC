<?php	
	class CartDetailModel extends DB_business
	{
            function __construct() 
            {
                  // Khai báo tên bảng
                  $this->_table_name = 'cartdetail';
                  
                  // Khai báo tên field id
                  $this->_key = 'productID';
                  
                  // Gọi hàm khởi tạo cha
                  parent::__construct();
            }	
            public function getID()
            {   
                  $this->_key = 'cartID';
                  $id = $_SESSION['cart'];
                  return $this->selectOrderBy('*',$id,'productID','DESC');
            }
            public function add($data){
                  return $this->add_new_advanced($data);
            }
            public function updateByID($quantity,$id){
                  $cartID = $_SESSION['cart'];
                  $sql ="UPDATE `cartdetail` set `quantity`='$quantity' where `cartID` ='$cartID' and `productID` = '$id'";                              
                  return $this->selectQuery($sql);
                           
            }
            public function delete($id){
                  $cartID = $_SESSION['cart'];
                  $sql ="DELETE from `cartdetail` where `cartID` ='$cartID' and `productID` = '$id'";                                
                  return $this->selectQuery($sql);
            }
	}
?> 