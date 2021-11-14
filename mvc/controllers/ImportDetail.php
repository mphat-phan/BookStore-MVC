<?php
class ImportDetail extends Controller{
    
    function __construct(){
        $this->importdetail = $this->model("ImportDetailModel");        
    }
    function getByID($id){
        $list = $this->importdetail->getID($id);
        echo $list;
    }
    function page500() {
        $this->view("layout2",array(
            "Page" => "500"
        ));
    }
}
?>