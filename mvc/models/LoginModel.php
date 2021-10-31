<?php	
	class LoginModel extends DB_business
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
            public function getOne($sql)
            {
                  return $this->selectQuery($sql);
            }
	}
?> 