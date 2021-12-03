<?php	
	class ProductModel extends DB_business
	{
            function __construct() 
            {
                  // Khai báo tên bảng
                  $this->_table_name = 'product';
                  
                  // Khai báo tên field id
                  $this->_key = 'id';
                  
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
            public function getStatus()
            {   
                  $this->_key = 'status';
                  return $this->select_by_id('*',1);
            }
            public function add($data){
                  return $this->add_new_advanced($data);
            }
            public function addExcel($data){
                  return $this->add_new_excel($data);
            }
            public function updateByID($data,$id){
                  return $this->update_by_id($data, $id);
            }
            public function resetQuantityByID($id,$quantity){
                  $sql ="UPDATE `product` set `quantity`=quantity + '$quantity' where `id` ='$id'";                              
                  return $this->selectQueryJson($sql);
            }
            public function resetSoldByID($id,$quantity){
                  $sql ="UPDATE `product` set `sold`= sold - '$quantity' where `id` ='$id'";                              
                  return $this->selectQueryJson($sql);
            }
            public function delete($id){
                  return $this->delete_by_id($id);

            }
            public function selectQuery($sql){
                  return $this->selectQueryJson($sql);
            }


	}
?> 