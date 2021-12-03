<?php
class Category extends Controller{
    
    function __construct(){
        $this->category = $this->model("CategoryModel");
        $this->categoryproduct = $this->model("CategoryProductModel");
        $this->RolePermission = $this->model("RolePermissionModel");
        $this->UserRole = $this->model("UserRoleModel");                                
    }

    function index(){
        if($this->UserRole->checkRole("staff.product")!=1 && $this->UserRole->checkRole("admin")!=1)
        {
            $this->page500();
            exit();
        } 
        $this->view("admin/layout",array(
			"Page" => "category"        
		));        
    }
    function getAll(){
        $list = $this->category->getAll();
        echo $list;
    }
    function getCategoryProductAll() {
        $list = $this->categoryproduct->getAll();
        echo $list;
    }    
    function buildTree($elements, $parentId = NULL) {
        $branch = array();
        //echo $elements['data'][0]['parentID'];
        //echo count($elements['data']);
        for($i=0; $i < count($elements['data']); $i++) {
            if ($elements['data'][$i]['parentID'] == $parentId) {
                $children = $this->buildTree($elements, $elements['data'][$i]['id']);
                if ($children) {
                    $elements['data'][$i]['children'] = $children;
                }
                else
                {
                    $elements['data'][$i]['children'] = NULL;
                }
                $branch[] = $elements['data'][$i];
            }
        }

        return $branch;
        //print_r($elements);
    }
    function getbuildTree() {
        $category = json_decode($this->category->getAll(), true);
        // echo '<pre>';
        // print_r($category);        
        // echo '</pre>';        
        $tree = $this->buildTree($category);
        //echo '<pre>';
        //echo json_encode(["data" => $tree],JSON_PRETTY_PRINT);
        echo json_encode($tree,JSON_PRETTY_PRINT);

    }
    function getCategoryProduct($id) {
        $sql="SELECT * FROM `category_product` WHERE `productID`='$id'";
        $list = $this->categoryproduct->getProductID($sql);
        echo $list;
    }
    function getByID($id){
        $list = $this->category->getID($id);
        echo $list;
    }
    function add(){
        if($this->UserRole->checkRole("admin")!=1 && $this->UserRole->checkPermission($_SESSION['username'],"staff.product.add","add")!=1 && $this->UserRole->checkPermission($_SESSION['username'],"staff.product","add")!=1)        
        {
            echo 2;
            return;
        }
        if(isset($_POST['txtName']) && $_POST['txtDetail']){

            $name = $_POST['txtName'];
            $detail = $_POST['txtDetail'];
            $image= basename($_FILES["txtImage"]["name"]);

            $array = array('name' => $name, "detail" => $detail , "image" => $image);
            if($this->category->add($array)==1){
                $target_dir = "./public/assets/images/";
                $target_file = $target_dir.basename($_FILES["txtImage"]["name"]);
                move_uploaded_file($_FILES["txtImage"]["tmp_name"], $target_file);
                echo 1;
                return; 
            }
        }
        echo 0;
    }
    function updateParentID($id){
        if($this->UserRole->checkRole("admin")!=1 && $this->UserRole->checkPermission($_SESSION['username'],"staff.product.update","update")!=1 && $this->UserRole->checkPermission($_SESSION['username'],"staff.product","update")!=1)        
        {
            echo 2;
            return;
        }        
        $name = $_POST['selected'];        
        $fag = 0;                  
        if(isset($_POST['selected']) && !empty($_POST['selected']))
        {                   
            foreach($name as $value)
            {   
                if($value != 'NULL')                         
                {
                    $array = array('id' => $id, "parentID" => $value);
                    if($this->category->updateByID($array,$id)==1)
                    {
                        $fag = 1;
                    }
                    else
                    {
                        $fag = 0;
                    }                  
                }
                else
                {
                    $sql = "UPDATE `category` SET `parentID` = NULL WHERE `category`.`id` = $id";
                    if($this->category->updateSql($sql))
                    {
                        $fag = 1;
                    }                
                }
            }                        
        }        
        if($fag == 1)
        {
            echo 1;        
            return;
        }
        echo 0;
    }
    function addCategoryProduct($productID){
        if($this->UserRole->checkRole("admin")!=1 && $this->UserRole->checkPermission($_SESSION['username'],"staff.product.add","add")!=1 && $this->UserRole->checkPermission($_SESSION['username'],"staff.product","add")!=1)        
        {
            echo 2;
            return;
        }
        $category = $_POST['selected'];
        $fag = 0;                  
        $sql = "DELETE FROM `category_product` WHERE `category_product`.`productID` = '$productID'";
        if(isset($_POST['selected']) && !empty($_POST['selected']))
        {         
            
            $this->categoryproduct->deleteProductID($sql);   
            foreach($category as $value)
            {                
                $array = array('categoryID' => $value, "productID" => $productID);
                if($this->categoryproduct->add($array)==1)
                {
                    $fag = 1;
                }
                else
                {
                    $fag = 0;
                }                    
            }                        
        }
        else
        {
            $this->categoryproduct->deleteProductID($sql);
            $fag = 1;
        }
        
        if($fag == 1)
        {
            echo 1;        
            return;
        }
        echo 0;        
    }
    function update($id){
        if($this->UserRole->checkRole("admin")!=1 && $this->UserRole->checkPermission($_SESSION['username'],"staff.product.update","update")!=1 && $this->UserRole->checkPermission($_SESSION['username'],"staff.product","update")!=1)
        {
            echo 2;
            return;
        }
        if(isset($_POST['txtName']) && $_POST['txtDetail']){
            $name = $_POST['txtName'];
            $detail = $_POST['txtDetail'];
            $image= basename($_FILES["txtImage"]["name"]);

            $array = array('name' => $name, "detail" => $detail);
            if(isset($image)){
                $array += array('image' => $image);
            }
            if($this->category->updateByID($array,$id)==1){
                $target_dir = "./public/assets/images/";
                $target_file = $target_dir.basename($_FILES["txtImage"]["name"]);
                move_uploaded_file($_FILES["txtImage"]["tmp_name"], $target_file);
                echo 1;
                return;
            }
        }
        echo 0;
    }
    function delete($id){
        if($this->UserRole->checkRole("admin")!=1 && $this->UserRole->checkPermission($_SESSION['username'],"staff.product.delete","delete")!=1 && $this->UserRole->checkPermission($_SESSION['username'],"staff.product","delete")!=1)        
        {
            echo 2;
            return;
        }
        if(isset($_POST['checkDelete'])){
            
            if($this->category->delete($id)==1){
                echo 1;
                return;
            }
        }
        echo 0;
    }
    function pages() {
        $this->view("pages/404");
    }
    function page500() {
        $this->view("layout2",array(
            "Page" => "500"
        ));
    }
}
?>