<?php
class ProductType extends Controller{
    
    function __construct(){
        $this->producttype = $this->model("ProductTypeModel");
        
    }

    function index(){
        $this->view("layout",array(
			"Page" => "producttype",
            "ProductType" => $this->producttype->getAll()            
		));        
    }
    function ajax(){
        $this->view("admin/pages/producttype/producttypeAjax",array(
            "ProductType" => $this->producttype->getAll()
        ));
    }
    function add(){
        //if(isset($_POST['submit'])){
        if(isset($_POST['txtName']) && $_POST['txtDetail']){

            $name = $_POST['txtName'];
            $detail= $_POST['txtDetail'];

            $array = array('name' => $_POST['txtName'], "detail" => $_POST['txtDetail']);
            if($this->producttype->add($array)==1){
                $this->view("admin/pages/producttype/producttypeAjax",array(
                    "ProductType" => $this->producttype->getAll(),
                    "msg" => "Add Successful",
                    "color" => "success"
                ));
                return;
            }
        }
        $this->view("admin/pages/producttype/producttypeAjax",array(
            "ProductType" => $this->producttype->getAll(),
            "msg" => "Add Failed",
            "color" => "danger"
        ));

    }

    function update($id){
        
        if(isset($_POST['txtName']) && $_POST['txtDetail']){
            $name = $_POST['txtName'];
            $detail= $_POST['txtDetail'];
            $array = array('name' => $_POST['txtName'], "detail" => $_POST['txtDetail']);
            
            if($this->producttype->updateByID($array,$id)==1){
                $this->view("admin/pages/producttype/producttypeAjax",array(
                    "ProductType" => $this->producttype->getAll(),
                    "msg" => "Update Successful",
                    "color" => "success"
                ));
                return;
            }
        }
        $this->view("admin/pages/producttype/producttypeAjax",array(
            "ProductType" => $this->producttype->getAll(),
            "msg" => "Update Failed",
            "color" => "danger"
        ));
    }
    function delete($id){
        if(isset($_POST['checkDelete'])){
            
            if($this->producttype->delete($id)==1){
                $this->view("admin/pages/producttype/producttypeAjax",array(
                    "ProductType" => $this->producttype->getAll(),
                    "msg" => "Delete Successful",
                    "color" => "success"
                ));
                return;
            }
        }
        $this->view("admin/pages/producttype/producttypeAjax",array(
            "ProductType" => $this->producttype->getAll(),
            "msg" => "Delete Failed",
            "color" => "danger"
        ));
    }
    function pages() {
        $this->view("pages/404");
    }
}
?>