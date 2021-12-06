<?php
class DB_business extends DB_driver 
{
    // Tên Table
    protected $_table_name = '';
     
    // Tên Khóa Chính
    protected $_key = '';
     
    // Hàm Khởi Tạo
    function __construct() {
        parent::connect();
    }
     
    // Hàm ngắt kết nối
    function __destruct() {
        parent::dis_connect();
    }
     
    // Hàm thêm mới
    function add_new($data){
        return parent::insert($this->_table_name, $data);
    }
    function add_new_advanced($data){
        return parent::insertAdvanced($this->_table_name, $data);
    }
    function add_new_excel($data){
        return parent::insertExcel($this->_table_name, $data);
    }
    // Hàm xóa theo id
    function delete_by_id($id){
        return $this->remove($this->_table_name, $this->_key.'='.(int)$id);
    }
    function delete_by_id2($id){
        return $this->remove($this->_table_name, $this->_key.'='."'".$id."'");
    }
 
    // Hàm cập nhật theo id
    function update_by_id($data, $id){
        return $this->update($this->_table_name, $data, $this->_key."=".(int)$id);
    }
    function update_by_stringID($data, $id){
        return $this->update($this->_table_name, $data, $this->_key.'='."'".$id."'");
    }
 
    // hàm select theo id
    function select_by_id($select, $id){
        $sql = "select $select from ".$this->_table_name." where ".$this->_key." = ".(int)$id;        
        return $this->get_row($sql);
    }    
    function select_by_id2($select, $id){
        $sql = "select $select from ".$this->_table_name." where ".$this->_key." = ".(int)$id;
        return $this->get_row2($sql);
    }
    function select_by_stringID($select, $id){
        $sql = "select $select from ".$this->_table_name." where ".$this->_key.'='."'".$id."'";
        return $this->get_row($sql);
    }
    function selectOrderBy($select, $id, $columm, $dir){
        $sql = "select $select from ".$this->_table_name." where ".$this->_key." = ".(int)$id." order by ".$columm." $dir";
 
        return $this->get_row($sql);
    }
    function selectAll($select){
        $sql = "select $select from ".$this->_table_name;
        return $this->get_row($sql);
    }
    function selectQuery($sql){

        return $this->get_list($sql);
    }
    function selectQueryJson($sql){

        return $this->get_row($sql);
    }    
}

?>