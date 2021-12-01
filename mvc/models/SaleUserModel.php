<?php	
	class SaleUserModel extends DB_business
	{
            function __construct() 
            {
                  // Khai báo tên bảng
                  $this->_table_name = 'sale_user';
                  
                  // Khai báo tên field id
                  $this->_key = 'username';
                  
                  // Gọi hàm khởi tạo cha
                  parent::__construct();
            }
            public function getAll()
            {   
                  return $this->selectAll('*');
            }	
            public function getID($id)
            {
                  return $this->select_by_stringID('*',$id);
            }
            public function getType($id){
                  $username = $_SESSION['username'];
                  $sql ="select * from `sale_user`,`sale` where sale_user.saleID = sale.id and sale_user.username = '$username' and sale.type = '$id'";   
                  
                  return $this->selectQueryJson($sql);
            }
            public function add($data){
                  return $this->add_new($data);
            }
            public function updateByID($data,$id){
                  return $this->update_by_stringID($data, $id);
            }
            public function delete($id){
                  return $this->delete_by_id2($id);
            }
            

	}
?> 