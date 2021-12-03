<?php	
	class OrderDetailModel extends DB_business
	{
            function __construct() 
            {
                  // Khai báo tên bảng
                  $this->_table_name = 'orderdetail';
                  
                  // Khai báo tên field id
                  $this->_key = 'orderID';
                  
                  // Gọi hàm khởi tạo cha
                  parent::__construct();
            }
            public function getAll()
            {   
                  return $this->selectAll('*');
            }
            public function getAllByUser()
            {  
                  $user = $_SESSION['username']; 
                  $sql ="select orderdetail.*,ordertb.id,product.name,product.image from `orderdetail`,`ordertb`,`product` where orderdetail.productID = product.id and ordertb.id = orderdetail.orderID and ordertb.customer_username = '$user' and ordertb.status=4";   
              
                  return $this->selectQueryJson($sql);
            }
            public function getID($id)
            {   
                  return $this->select_by_id('*',$id);
            }	
            public function getOrderDetailByOrderID($id){
                  return $this->select_by_id('*', $id);
            }
            public function add($data){
                  return $this->add_new($data);
            }
            public function updateByID($data,$id){
                  return $this->update_by_id($data, $id);
            }
            public function delete($id){
                  return $this->delete_by_id($id);

            }


	}
?> 