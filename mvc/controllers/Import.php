<?php
error_reporting(0);
class Import extends Controller{
    
    function __construct(){
        $this->import = $this->model("ImportModel");
        $this->importdetail = $this->model("ImportDetailModel"); 
        $this->product = $this->model("ProductModel"); 
        $this->UserRole = $this->model("UserRoleModel");                                
    }    

    function index(){
        if($this->UserRole->checkRole("staff.import")!=1 && $this->UserRole->checkRole("admin")!=1)
        {
            $this->page500();
            exit();
        }
        $this->view("admin/layout2",array(
			"Page" => "import\index"    
		));        
    }
    function getAll(){
        $list = $this->import->getAll();
        echo $list;
    }
    function getByID($id){
        $list = $this->import->getID($id);
        echo $list;
    }
    function getLastID(){
        $list = $this->import->selectLast();
        echo $list;
    }
    function add(){
        if($this->UserRole->checkRole("admin")!=1 && $this->UserRole->checkPermission($_SESSION['username'],"staff.import.add","add")!=1 && $this->UserRole->checkPermission($_SESSION['username'],"staff.import","add")!=1)        
        {
            echo 2;
            return;
        }
        if(isset($_POST['importdetail'])){
            $date = $_POST['txtDate'];
            $total= $_POST['txtTotal'];
            $user= $_POST['txtUser'];
            $obj = json_decode($_POST['importdetail']);
            if($total==0){
                echo 0; 
                return;
            }

            if($this->import->add(array('date' => $date, "total" => $total , "employee_username" => $user))==1){
                $importID = $this->import->selectLast();
                for($i = 0 ; $i < count($obj) ; $i++){
                    
                    $array = array('importID' => $importID ,'productID' => $obj[$i]->productID, "quantity" => $obj[$i]->quantity , "price" => $obj[$i]->price);
                    if(empty($obj[$i]->productID)){
                        $arrayProduct = array('name'=>$obj[$i]->name,'quantity'=>$obj[$i]->quantity,'price'=>$obj[$i]->price,'status'=>0);
                    }
                    $arrayProduct = array('id'=>$obj[$i]->productID,'name'=>$obj[$i]->name,'quantity'=>$obj[$i]->quantity,'price'=>$obj[$i]->price,'status'=>0);
                    if($this->product->add($arrayProduct)==1){
                        $this->importdetail->add($array);
                    }
                    
                }
                echo 1;
                return;
            }
        }
        echo 0;
        
    }
    function addExcel(){
        
        // $target_dir = "./public/assets/images/";
        // $target_file = $target_dir.basename($_FILES["txtExcelImport"]["name"]);
        // move_uploaded_file($_FILES["txtExcelImport"]["tmp_name"], $target_file);
        if(isset($_FILES["txtExcelImport"]["tmp_name"])){
            //Đường dẫn file
            $file = './public/assets/images/'.basename($_FILES["txtExcelImport"]["name"]);
            //Tiến hành xác thực file
            $objFile = PHPExcel_IOFactory::identify($file);
            $objData = PHPExcel_IOFactory::createReader($objFile);
            
            //Chỉ đọc dữ liệu
            $objData->setReadDataOnly(true);

            // Load dữ liệu sang dạng đối tượng
            $objPHPExcel = $objData->load($file);

            //Lấy ra số trang sử dụng phương thức getSheetCount();
            // Lấy Ra tên trang sử dụng getSheetNames();

            //Chọn trang cần truy xuất
            $sheet = $objPHPExcel->setActiveSheetIndex(0);
            //Lấy ra số dòng cuối cùng
            $Totalrow = $sheet->getHighestRow();
            //Lấy ra tên cột cuối cùng
            $LastColumn = $sheet->getHighestColumn();
            //Chuyển đổi tên cột đó về vị trí thứ, VD: C là 3,D là 4
            $TotalCol = PHPExcel_Cell::columnIndexFromString($LastColumn);
            //Tạo mảng chứa dữ liệu
            $data = [];
            //Tiến hành lặp qua từng ô dữ liệu
            //----Lặp dòng, Vì dòng đầu là tiêu đề cột nên chúng ta sẽ lặp giá trị từ dòng 2
            for ($i = 2; $i <= $Totalrow; $i++) {
                //----Lặp cột
                for ($j = 0; $j < $TotalCol; $j++) {
                    // Tiến hành lấy giá trị của từng ô đổ vào mảng
                    $data[$i - 2][$j] = $sheet->getCellByColumnAndRow($j, $i)->getValue();;
                }
            }
            $total = 0;
    
            for($i = 0 ; $i < count($data) ; $i++){
                $total+=$data[$i][2]*$data[$i][3];
            }
            $user = $_SESSION['username'];

            date_default_timezone_set('Asia/Ho_Chi_Minh');
            $date = date('Y-m-d', time());

            if($this->import->add(array('date' => $date, "total" => $total , "employee_username" => $user))==1){
                $importID = $this->import->selectLast();
                for($i = 0 ; $i < count($data) ; $i++){
                    //import
                    $array = array('importID' => $importID ,'productID' => $data[$i][0], "quantity" => $data[$i][2] , "price" => $data[$i][3]);
                    //product
                    $arrayProduct = array('id'=>$data[$i][0],'name'=>$data[$i][1],'quantity'=>$data[$i][2],'price'=>$data[$i][3],'status'=>0);
                    if($this->product->add($arrayProduct)==1){
                        $this->importdetail->add($array);
                    }
                    
                }
                echo 1;
                return;
            }
            echo 0;
        }  
        echo 0;
    }
    function update(){
        if($this->UserRole->checkRole("admin")!=1 && $this->UserRole->checkPermission($_SESSION['username'],"staff.import.update","update")!=1 && $this->UserRole->checkPermission($_SESSION['username'],"staff.import","update")!=1)
        {
            echo 2;
            return;
        }
    }
    function delete(){
        if($this->UserRole->checkRole("admin")!=1 && $this->UserRole->checkPermission($_SESSION['username'],"staff.import.delete","delete")!=1 && $this->UserRole->checkPermission($_SESSION['username'],"staff.import","delete")!=1)
        {
            echo 2;
            return;
        }
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