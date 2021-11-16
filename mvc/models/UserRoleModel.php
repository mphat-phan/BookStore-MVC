<?php	
	class UserRoleModel extends DB_business
	{
            function __construct() 
            {
                  // Khai báo tên bảng
                  $this->_table_name = 'userrole';
                  
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
            public function add($data){
                  return $this->add_new($data);
            }
            public function updateByID($data,$id){
                  return $this->update_by_id($data, $id);
            }
            public function delete($id){
                  return $this->delete_by_id2($id);

            }            
            public function checkRole($role){
                  if(!isset($_SESSION['username']))
                  {
                        header("Location: Admin/Login");
                  }
                  else
                  {
                        $user = $_SESSION['username'];
                        $sql = "SELECT * FROM `user` WHERE `user`.`username` = '$user' AND `user`.`status` = 1";
                        if(mysqli_num_rows($this->selectQuery($sql))==0)
                        {
                              header("Location: ./Admin/Login");
                        }
                  }
                  $username = $_SESSION['username'];
                  $sql ="SELECT * FROM `userrole` WHERE `userrole`.`username` = '$username' AND `userrole`.`rolename` LIKE '$role%'";                                  
                  if(mysqli_num_rows($this->selectQuery($sql))==1)
                  {
                        return 1;
                  }              
                  else
                  {
                        return 0;
                  }                       
            }
            public function checkPermission($username,$role,$permission){
                  $sql = "SELECT `userrole`.`rolename`,`permissionID`, `permission` 
                          FROM `role_permission`, `permission`,`userrole` 
                          WHERE `role_permission`.`permissionID` = `permission`.`id` and 
                                `userrole`.`rolename` = `role_permission`.`rolename` and 
                                `role_permission`.`rolename` = '$role' and 
                                `userrole`.`username` = '$username' and 
                                `permission`.`permission` = '$permission'";
                  if(mysqli_num_rows($this->selectQuery($sql))==1)
                  {
                        return 1;
                  }              
                  else
                  {
                        return 0;
                  }
            }          
	}
?> 