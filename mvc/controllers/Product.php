<?php
error_reporting(0);
class Product extends Controller{
    
    function __construct(){
        $this->product = $this->model("ProductModel");
        $this->author = $this->model("AuthorModel");
        $this->publisher = $this->model("PublisherModel");
        $this->sale = $this->model("SaleModel");
        $this->UserRole = $this->model("UserRoleModel");
        $this->esrb = $this->model("EsrbModel");                                
    }

    function index(){
        if($this->UserRole->checkRole("staff.product")!=1 && $this->UserRole->checkRole("admin")!=1)
        {
            $this->page500();
            exit();
        } 
        $this->view("admin/layout",array(
			"Page" => "product"
		));        
    }
    
    function getAll($number=null){
        $product = json_decode($this->product->getAll());
        
        for($i=0 ; $i< count($product->data) ; $i++ ){

            $author = $product->data[$i]->authorID; // id author
            $publisher = $product->data[$i]->publisherID; // id publisher
            $sale = $product->data[$i]->saleID;
            $esrb = $product->data[$i]->esrbID;
            
            if(isset($author)){
                $authorobj = json_decode($this->author->getID($author));
                $product->data[$i]->authorID = array("name" => $authorobj->data[0]->name);
            }
            if(isset($publisher)){
                $publisherobj = json_decode($this->publisher->getID($publisher));
                $product->data[$i]->publisherID = array("name" => $publisherobj->data[0]->name);
            }
            if(isset($esrb)){
                $esrbobj = json_decode($this->esrb->getID($esrb));
                $product->data[$i]->esrbID = array("name" => $esrbobj->data[0]->name);
            }
            if(isset($sale)){
                $saleobj = json_decode($this->sale->getID($sale));
                $product->data[$i]->saleID = array("id" => $saleobj->data[0]->id , "name" => $saleobj->data[0]->name , "discount" => $saleobj->data[0]->discount , "startdate" => $saleobj->data[0]->startdate,"enddate" => $saleobj->data[0]->enddate);
            }
            else{
                $product->data[$i]->saleID = array("id" => "Null" , "name" => "Null" , "discount" => "0");
            }
        }
        
        echo json_encode(["data" => $product->data],JSON_PRETTY_PRINT);
        

    }

    function getByID($id){
        //$list = $this->product->getID($id);
        
        $product = json_decode($this->product->getID($id));
        $sale = $product->data[0]->saleID;
        $author = $product->data[0]->authorID; // id author
        $publisher = $product->data[0]->publisherID; // id publisher
        $esrb = $product->data[0]->esrbID;
        if(isset($author)){
            $authorobj = json_decode($this->author->getID($author));
            $product->data[0]->authorID = array("id" => $authorobj->data[0]->id,"name" => $authorobj->data[0]->name);
        }
        if(isset($publisher)){
            $publisherobj = json_decode($this->publisher->getID($publisher));
            $product->data[0]->publisherID = array("id" => $publisherobj->data[0]->id,"name" => $publisherobj->data[0]->name);
        }
        if(isset($esrb)){
            $esrbobj = json_decode($this->esrb->getID($esrb));
            $product->data[0]->esrbID = array("id" => $esrbobj->data[0]->id ,"name" => $esrbobj->data[0]->name);
        }
        if(isset($sale)){
            $saleobj = json_decode($this->sale->getID($sale));
            $product->data[0]->saleID = array("id" => $saleobj->data[0]->id , "name" => $saleobj->data[0]->name , "discount" => $saleobj->data[0]->discount, "startdate" => $saleobj->data[0]->startdate,"enddate" => $saleobj->data[0]->enddate);
        }
        else if(isset($product->data[0]->id)){
            $product->data[0]->saleID = array("id" => "Null" , "name" => "Null" , "discount" => "0");
        }
        
        echo json_encode(["data" => $product->data],JSON_PRETTY_PRINT);
    }
    
    function add(){
        if($this->UserRole->checkRole("admin")!=1 && $this->UserRole->checkPermission($_SESSION['username'],"staff.product.add","add")!=1 && $this->UserRole->checkPermission($_SESSION['username'],"staff.product","add")!=1)        
        {
            echo 2;
            return;
        }
        if(isset($_POST['txtName']) && $_POST['txtPrice']){
            $name = $_POST['txtName'];
            $description= $_POST['txtDescription'];
            $price= $_POST['txtPrice'];
            $pagenumber= $_POST['txtPagenumber'];
            
            $quantity= 0;

            
            $publishdate = $_POST['txtPublishdate'];
            $language = $_POST['txtLanguage'];
            $status = 0;

            
            $publisherID= $_POST['selectPublisher'];
            $authorID= $_POST['selectAuthor'];
            $saleID= $_POST['selectSale'];
            $esrbID = $_POST['selectRated'];

            $image= basename($_FILES["txtImage"]["name"]);
            $array = array('name' => $name, 'description' => $description, 'quantity' => $quantity , 'price' => $price , 'pagenumber' => $pagenumber , 'image' => $image , 'authorID' => $authorID , 'publisherID' => $publisherID, 'publishdate' => $publishdate, 'language' => $language, 'status' => $status, 'esrbID' => $esrbID);
            if(isset($saleID)){
                $array+=array('saleID' => $saleID);
            }

            
            if($this->product->add($array)==1){
                $target_dir = "./public/assets/images/";
                $target_file = $target_dir.basename($_FILES["txtImage"]["name"]);
                move_uploaded_file($_FILES["txtImage"]["tmp_name"], $target_file);
                echo 1;
                return;
            }
        }
        echo 0;
        
        
    }
    function updateStatus($id){
        if($this->UserRole->checkRole("admin")!=1 && $this->UserRole->checkPermission($_SESSION['username'],"staff.product","update")!=1)        
        {
            echo 2;
            return;
        }
        if(isset($_POST['txtStatus'])){
            $status = $_POST['txtStatus'];
            $array = array('status' => $status);
            if($this->product->updateByID($array,$id)==1){
                echo 1;
                return;
            }
        }
        echo 0;
    }
    function update($id){
        if($this->UserRole->checkRole("admin")!=1 && $this->UserRole->checkPermission($_SESSION['username'],"staff.product.update","update")!=1 && $this->UserRole->checkPermission($_SESSION['username'],"staff.product","update")!=1)
        {
            echo 2;
            return;
        }
        if(isset($_POST['txtName']) && $_POST['txtPrice']){
            $name = $_POST['txtName'];
            $description= $_POST['txtDescription'];
            $price= $_POST['txtPrice'];
            $pagenumber= $_POST['txtPagenumber'];
            
            
            $image= basename($_FILES["txtImage"]["name"]);

            $publishdate = $_POST['txtPublishdate'];
            $language = $_POST['txtLanguage'];
            $status = $_POST['txtStatus'];

            $publisherID= $_POST['selectPublisher'];
            $authorID= $_POST['selectAuthor'];
            $saleID= $_POST['selectSale'];
            $esrbID = $_POST['selectRated'];

            $array = array('name' => $name, 'description' => $description, 'price' => $price , 'pagenumber' => $pagenumber , 'authorID' => $authorID , 'publisherID' => $publisherID , 'publishdate' => $publishdate, 'language' => $language, 'status' => $status, 'esrbID' => $esrbID);
            if(isset($image)){
                $array += array('image' => $image);
            }
            if(isset($saleID)){
                $array+=array('saleID' => $saleID);
            }
            if($this->product->updateByID($array,$id)==1){
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
            
            if($this->product->delete($id)==1){
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