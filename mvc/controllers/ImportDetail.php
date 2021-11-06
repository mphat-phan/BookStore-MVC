<?php
class ImportDetail extends Controller{
    
    function __construct(){
        $this->importdetail = $this->model("ImportDetailModel");
  
    }
    function getByID($id){
        $list = $this->importdetail->getID($id);
        echo $list;
    }
}
?>