<?php	
	class RatingModel extends DB_business
	{
            function __construct() 
            {
                  // Khai báo tên bảng
                  $this->_table_name = 'rating';
                  
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
            public function getByProduct($id)
            {   
                  $sql ="select rating.*,customer.name,user.image from `rating`,`ordertb`,`customer`,`user` where user.username = ordertb.customer_username and ordertb.customer_username=customer.username and rating.orderID = ordertb.id and rating.productID = '$id' order by rating.date desc";   
                  return $this->selectQueryJson($sql);
            }
            public function getByRating($rate)
            {   
                  $this->_key = 'rating';
                  return $this->select_by_id('*',$rate);
            }
            public function getByUser()
            {   
                  $username = $_SESSION['username'];
                  $sql ="select rating.*,product.name as productname,product.image,customer.name from `rating`,`ordertb`,`product`,`customer` where customer.username = ordertb.customer_username and rating.productID = product.id and rating.orderID = ordertb.id and ordertb.customer_username = '$username' order by rating.date desc";   
                  return $this->selectQueryJson($sql);
            }

            public function getByUserAndRating($rate)
            {   
                  $username = $_SESSION['username'];
                  $sql ="select * from `rating`,`ordertb` where rating.orderID = ordertb.id and ordertb.customer_username = '$username' and rating.rating = '$rate' ";   
                  return $this->selectQueryJson($sql);
            }
            public function add($data){
                  return $this->add_new($data);
            }
            public function updateStatus($data,$id){
                  
            }
            public function updateByID($data,$id){
                  return $this->update_by_id($data, $id);
            }
            public function delete($id){
                  return $this->delete_by_id($id);

            }
	}
?> 