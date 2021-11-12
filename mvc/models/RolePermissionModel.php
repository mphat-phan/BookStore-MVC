<?php	
	class RolePermissionModel extends DB_business
	{
            function __construct() 
            {
                  // Khai báo tên bảng
                  $this->_table_name = 'role_permission';
                  
                  // Khai báo tên field id
                  $this->_key = 'rolename';
                  
                  // Gọi hàm khởi tạo cha
                  parent::__construct();
            }
            public function getAll()
            {   
                  return $this->selectAll('*');
            }	
            public function add($data){
                  return $this->add_new($data);
            }
            public function getID($id)
            {   
                  return $this->select_by_stringID('*',$id);
            }
            public function updateByID($data,$id){
                  return $this->update_by_id($data, $id);
            }
            public function delete($id){
                  return $this->delete_by_id2($id);
            }
            public function selectQuery($sql){
                  return $this->selectQueryJson($sql);
            }
            public function selectToCheckRole($sql){
                  return $this->selectQuery($sql);
            }
	}
?> 