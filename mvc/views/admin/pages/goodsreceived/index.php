<?php
$arr = array();
if ($data['Product']->num_rows > 0) {
    $index = 0;
    while($row = $data['Product']->fetch_assoc()) {
        array_push($arr, $row);
    }
}
?>
<form action="">
    <input type="text" name="text" id="text">
</form>
<div id="content" class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>DataTables</h1>
                </div>
            
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Quản lý sản phẩm</li>
                        <li class="breadcrumb-item active">Tác giả</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- /.card -->
                   
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Author table</h3>
                            
                            <button type="button" onclick='addRow()' href="#" class="btn btn-primary btn-sm float-right">Add</button>

                            <button type="button" onclick="" href="#" class="btn btn-success btn-sm float-right mr-1" role="button"
                                data-toggle="modal" data-target="#">Import</button>
                        </div>

                        <!-- /.card-header -->
                        <div  class="card-body">
                            <table id="goodsreceivedtable" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                      
                                        <th>Book</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                        <th>Total</th>
                                        <th>#</th>

                                    </tr>
                                </thead>
                                <tbody>
                                   
                                   
                                </tbody>
                                
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->

</div>
<div class="modal" id="AddModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Add</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form id="formAdd" action="" method="post">
                    
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Category Name</label>
                            <input name="txtName" type="text" class="form-control" id="txtName" placeholder="Enter ">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Category Detail</label>
                            <input name='txtDetail' type="text" class="form-control" id="txtDetail" placeholder="Enter ">
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button id='addbtn' name="submit" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<script>

function addRow() {
        
        var product = JSON.parse('<?php echo json_encode($arr)?>');
        console.log(product[0].name);
        var select = document.createElement('select');
        select.className="form-control";
        var option = document.createElement("option");
        var empTab = document.getElementById('goodsreceivedtable');

        var rowCnt = empTab.rows.length;   // table row count.
        var tr = empTab.insertRow(rowCnt); // the table row.
        //tr = empTab.insertRow(rowCnt);

        for (var c = 0; c < 5; c++) {
            var td = document.createElement('td'); // table definition.
            td = tr.insertCell(c);
            switch(c){
                
                case 0:
                    Object.keys(product).forEach(key =>{
                        
                        select.options[key]= new Option(product[key].name ,product[key].id);
                    });
                    
                    td.appendChild(select);
                    
                    break;
                case 1:
                    var ele = document.createElement('input');
                    var form = document.createElement('form');
                    ele.setAttribute('type', 'text');
                    ele.setAttribute('value', '');
                    ele.className = "form-control";
                    ele.id = "quantity";
                    ele.onkeyup="evtkeyup()";
                    ele.value = 0;
                    form.appendChild(ele)
                    td.appendChild(form);
                    break;
                case 2:
                    var ele = document.createElement('input');
                    var form = document.createElement('form');
                    ele.setAttribute('type', 'number');
                    ele.setAttribute('value', '');
                    ele.className = "form-control ";
                
                    ele.value = 0;
                    form.appendChild(ele)
                    td.appendChild(form);
                    break;
                case 3:
                    var ele = document.createElement('input');
                    var form = document.createElement('form');
                    ele.setAttribute('type', 'number');
                    ele.setAttribute('value', '');
                    ele.className = "form-control ";
                    ele.id = "total";
                    
                    form.appendChild(ele);
                    //document.getElementById("total").disabled = false;
                    td.appendChild(form);
                    break
                case 4:
                    var button = document.createElement('input');
                    

                    // set input attributes.
                    button.setAttribute('type', 'button');
                    button.setAttribute('value', 'Remove');
                    button.className= "btn btn-primary btn-sm";
                    // add button's 'onclick' event.
                    button.setAttribute('onclick', 'removeRow(this)');

                    td.appendChild(button);
                    break;
                
            }
            
            
        }
        document.getElementById("total").disabled = true;
        $a = document.getElementsByClass('.form-control');
        $a.value=10
        
        $a.addEventListener("keyup", function(){
            alert($a.value);
        });

        
}

function removeRow(oButton) {
        var empTab = document.getElementById('goodsreceivedtable');
        empTab.deleteRow(oButton.parentNode.parentNode.rowIndex); // button -> td -> tr.
}


</script>




