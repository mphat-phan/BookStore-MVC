<?php	
	class AuthorModel extends DB_business
	{
        function __construct() 
        {
        // Khai báo tên bảng
        $this->_table_name = 'customer';
         
        // Khai báo tên field id
        $this->_key = 'id';
         
        // Gọi hàm khởi tạo cha
        parent::__construct();
        }
		public function getAll()
		{
            
		}		
	}
?> 