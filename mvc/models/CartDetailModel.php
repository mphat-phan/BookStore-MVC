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
            public function getAll()
            {   
                  return $this->selectAll('*');
            }	
            public function getID($id)
            {   
                  return $this->select_by_id('*',$id);
            }

            public function add($data){
                  return $this->add_new_advanced($data);
            }
            public function updateByID($data,$id){
                  return $this->update_by_id($data, $id);
            }
            public function delete($id){
                  return $this->delete_by_id($id);

            }
	}
?> 