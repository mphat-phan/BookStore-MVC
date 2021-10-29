<?php
class Product extends Controller{
    
    function __construct(){
        $this->product = $this->model("ProductModel");
        $this->category = $this->model("CategoryModel");
        $this->author = $this->model("AuthorModel");
        $this->company = $this->model("CompanyModel");
    }

    function index(){
        $this->view("layout",array(
			"Page" => "product",
            "Product" => $this->product->getAll(),
            "Category" => $this->category->getAll(),
            "Author" =>$this->author->getAll(),
            "Company" =>$this->company->getAll()
		));        
    }
    function ajax(){
        $this->view("admin/pages/product/productAjax",array(
            "Product" => $this->product->getAll(),
            "Category" => $this->category->getAll(),
            "Author" =>$this->author->getAll(),
            "Company" =>$this->company->getAll()
        ));
    }
    function add(){

        $target_dir = "http://localhost/Bookstore/public/assets/images/";
        //$target_file = $target_dir . basename($_FILES["ImageInput"]["name"]);
        if(isset($_POST['txtName']) && $_POST['categorySelect'] && $_POST['companySelect'] && $_POST['authorSelect'] && $_POST['txtDescription'] && $_POST['txtPrice'] && $_POST['txtPageNumber']){

            $name = $_POST['txtName'];
            $category= $_POST['categorySelect'];
            $company= $_POST['companySelect'];
            $author= $_POST['authorSelect'];
            $description= $_POST['txtDescription'];
            $quantity= 0;
            $price= $_POST['txtPrice'];
            $pagenumber= $_POST['txtPageNumber'];
            $image= "";//basename($_FILES["ImageInput"]["name"]);
            $array = array('name' => $name, 'category' => $category , 'company'=> $company,'author' => $author,'description'=> $description,
                            'quantity' => $quantity,'price'=> $price,'pagenumber' => $pagenumber,'image' => $image);
            if($this->product->add($array)==1){

                
                
                //move_uploaded_file($_FILES["ImageInput"]["tmp_name"], $target_file);

                $this->view("admin/pages/product/productAjax",array(
                    "Product" => $this->product->getAll(),
                    "Category" => $this->category->getAll(),
                    "Author" =>$this->author->getAll(),
                    "Company" =>$this->company->getAll(),
                    "msg" => "Add Successful",
                    "color" => "success"
                ));
                return;
            }
        }
        $this->view("admin/pages/product/productAjax",array(
            "Product" => $this->product->getAll(),
            "Category" => $this->category->getAll(),
            "Author" =>$this->author->getAll(),
            "Company" =>$this->company->getAll(),
            "msg" => "Add Failed",
            "color" => "danger"
        ));
    }
    function update($id){
        $target_dir = "public/assets/images/";
        //$target_file = $target_dir . basename($_FILES["ImageInput"]["name"]);

        if(isset($_POST['txtName']) && $_POST['categorySelect'] && $_POST['companySelect'] && $_POST['authorSelect'] && $_POST['txtDescription'] && $_POST['txtPrice'] && $_POST['txtPageNumber']){
            $name = $_POST['txtName'];
            $category= $_POST['categorySelect'];
            $company= $_POST['companySelect'];
            $author= $_POST['authorSelect'];
            $description= $_POST['txtDescription'];
            $quantity= $_POST['txtQuantity'];
            $price= $_POST['txtPrice'];
            $pagenumber= $_POST['txtPageNumber'];
            $image= "";//basename($_FILES["ImageInput"]["name"]);

            $array = array('name' => $name, 'category' => $category , 'company'=> $company,'author' => $author,'description'=> $description,
                            'quantity' => $quantity,'price'=> $price,'pagenumber' => $pagenumber,'image' => $image);
            
            if($this->product->updateByID($array,$id)==1){


                $this->view("admin/pages/product/productAjax",array(
                    "Product" => $this->product->getAll(),
                    "Category" => $this->category->getAll(),
                    "Author" =>$this->author->getAll(),
                    "Company" =>$this->company->getAll(),
                    "msg" => "Update Successful",
                    "color" => "success"
                ));
                return;
            }
        }

        $this->view("admin/pages/product/productAjax",array(
            "Product" => $this->product->getAll(),
            "Category" => $this->category->getAll(),
            "Author" =>$this->author->getAll(),
            "Company" =>$this->company->getAll(),
            "msg" => "update Failed",
            "color" => "danger"
        ));
    }
    function delete($id){
        if(isset($_POST['checkDelete'])){
            
            if($this->product->delete($id)==1){
                $this->view("admin/pages/product/productAjax",array(
                    "Product" => $this->product->getAll(),
                    "Category" => $this->category->getAll(),
                    "Author" =>$this->author->getAll(),
                    "Company" =>$this->company->getAll(),
                    "msg" => "Delete Successful",
                    "color" => "success"
                ));
                return;
            }
        }
        $this->view("admin/pages/product/productAjax",array(
            "Product" => $this->product->getAll(),
            "Category" => $this->category->getAll(),
            "Author" =>$this->author->getAll(),
            "Company" =>$this->company->getAll(),
            "msg" => "Delete Failed",
            "color" => "danger"
        ));
    }
    function pages() {
        $this->view("pages/404");
    }
}
?>