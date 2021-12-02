<?php	
	class UserModel extends DB_business
	{
            function __construct() 
            {
                  // Khai báo tên bảng
                  $this->_table_name = 'user';
                  
                  // Khai báo tên field id
                  $this->_key = 'username';
                  
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
            public function updateByID($data,$id){
                  return $this->update_by_id($data, $id);
            }
            public function delete($id){
                  return $this->delete_by_id2($id);
            }
            public function getToCheckLogin($sql){
                  return $this->selectQuery($sql);
            }
            public function getInfo($table,$username) {
                  $sql = "SELECT `user`.`username`,
                                 `user`.`image`,
                                 `$table`.`name`,
                                 `$table`.`phone`,
                                 `$table`.`email`,
                                 `$table`.`address`,
                                 `$table`.`birth`  FROM `user`, `$table` WHERE `user`.`username` = `$table`.`username` AND `user`.`username` = '$username'";
                  return $this->selectQueryJson($sql);
            }                                          
	}
?> 