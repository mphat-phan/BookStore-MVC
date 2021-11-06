<?php
error_reporting(0);
class Product extends Controller{
    
    function __construct(){
        $this->product = $this->model("ProductModel");
        $this->author = $this->model("AuthorModel");
        $this->publisher = $this->model("PublisherModel");
    }

    function index(){
        $this->view("admin/layout",array(
			"Page" => "product"
		));        
    }

    function getAll(){
        $product = json_decode($this->product->getAll());
        
        for($i=0 ; $i< count($product->data) ; $i++ ){
            $author = $product->data[$i]->authorID; // id author
            $publisher = $product->data[$i]->publisherID; // id publisher
            
            $authorobj = json_decode($this->author->getID($author));
            $publisherobj = json_decode($this->publisher->getID($publisher));
            
            $product->data[$i]->authorID = array("name" => $authorobj->data[0]->name);
            $product->data[$i]->publisherID = array("name" => $publisherobj->data[0]->name);
       
        }
        
        echo json_encode(["data" => $product->data],JSON_PRETTY_PRINT);
        

    }

    function getByID($id){
        $list = $this->product->getID($id);
        echo $list;
    }
    
     

    function add(){
       
        if(isset($_POST['txtName']) && $_POST['txtPrice']){
            $name = $_POST['txtName'];
            $description= $_POST['txtDescription'];
            $price= $_POST['txtPrice'];
            $pagenumber= $_POST['txtPagenumber'];
            
            $quantity= 0;
            $image= basename($_FILES["txtImage"]["name"]);
            $publisherID= $_POST['selectPublisher'];
            $authorID= $_POST['selectAuthor'];
            
            $array = array('name' => $name, 'description' => $description, 'quantity' => $quantity , 'price' => $price , 'pagenumber' => $pagenumber , 'image' => $image , 'authorID' => $authorID , 'publisherID' => $publisherID );
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
    function update($id){
        if(isset($_POST['txtName']) && $_POST['txtPrice']){
            $name = $_POST['txtName'];
            $description= $_POST['txtDescription'];
            $price= $_POST['txtPrice'];
            $pagenumber= $_POST['txtPagenumber'];
            
            $image= basename($_FILES["txtImage"]["name"]);
            $publisherID= $_POST['selectPublisher'];
            $authorID= $_POST['selectAuthor'];
            
            $array = array('name' => $name, 'description' => $description, 'price' => $price , 'pagenumber' => $pagenumber , 'image' => $image , 'authorID' => $authorID , 'publisherID' => $publisherID );
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
    
}
?>