<?php
$arr = array();
if ($data['Product']->num_rows > 0) {
    $index = 0;
    while($row = $data['Product']->fetch_assoc()) {
        array_push($arr, $row);
    }
}
?>

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
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Product</label>
                                        <select class="form-control select2" id="selectProduct" style="width: 100%;">

                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">

                                    <div class="form-group">
                                        <label>Quantity</label>
                                        <input min=0 name="" type="number" class="form-control" id="inputQuantity"
                                            placeholder=" ">
                                    </div>
                                    <div class="form-group">
                                        <label>Price</label>
                                        <input min=0 name="" type="number" class="form-control" id="inputPrice"
                                            placeholder=" ">
                                    </div>

                                </div>

                            </div>
                            <div class="row">


                                <div class="col-12">
                                    <button type="button" onclick='save();openModal();' href="#"
                                        class="btn btn-primary btn-sm float-right "
                                        role="button" data-toggle="modal" data-target="#saveModel">Save</button>
                                    <button type="button" onclick='checkAdd()' href="#"
                                        class="btn btn-primary btn-sm float-left mr-1">Add</button>
                                        
                                    <button type="button" onclick="" href="#"
                                        class="btn btn-success btn-sm float-right mr-1" role="button"
                                        data-toggle="modal" data-target="#">Import</button>
                                </div>
                            </div>


                        </div>

                        <!-- /.card-header -->
                        <div class="card-body">
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
<div class="modal" id="saveModel">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Add</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                

                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Date</label>
                            <input name="txtName" type="date" class="form-control" id="txtdate" disabled>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Total</label>
                            <input name='txtDetail' type="number" class="form-control" id="txttotal"
                                 disabled>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">User</label>
                            <input name='txtDetail' type="text" class="form-control" id="txtuser"
                                 disabled>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <div id="submitAddGood" name="submit" type="submit" class="btn btn-primary">Submit</div>
                        </div>
                    </div>
                
            </div>

        </div>
    </div>
</div>
<script>
    $getCurrentUrl = 'http://localhost/Bookstore/<?=$data['Page']?>';
    document.getElementById("submitAddGood").addEventListener("click", function() {

        $.ajax({
            type: "POST",
            url: $getCurrentUrl+"/ajax",
            data: {
                "txtdate" : document.getElementById('txtdate').value,
                "txttotal" : document.getElementById('txttotal').value,
                "txtuser" : document.getElementById('txtuser').value,
                "obj" :  JSON.stringify(arrObj)
            },
            success: function(data)
            {
                $("#content").html(data);
            }
        });
    });
    
    function openModal(){
        
        //action
    
        $formAdd = document.querySelector("#formAdd");
        $formAdd.action =  $getCurrentUrl+"/add";
      

        }    
    
    //data value
    var product = JSON.parse('<?php echo json_encode($arr)?>');
    //select product
    var select = document.getElementById('selectProduct');
    var option = document.createElement("option");
    Object.keys(product).forEach(key => {

        select.options[key] = new Option(product[key].id+"-"+product[key].name, product[key].id);
    });
    //add row
    function checkAdd() {
        if ($("#inputQuantity").val() == 0 || $("#inputPrice").val() == 0 || checkDuplicate($("#selectProduct").val())==1) {

            return;
        }
        addRow();
    }
    function keyupCalculate(element){
        var row = element.parentNode.parentNode.rowIndex;
        var cell = element.parentNode.cellIndex;

        var c1 = document.getElementById("goodsreceivedtable").rows[row].cells.item(1);
        var c2 =document.getElementById("goodsreceivedtable").rows[row].cells.item(2);
        var c3 =document.getElementById("goodsreceivedtable").rows[row].cells.item(3);
        
        c3.childNodes[0].value=c1.childNodes[0].value+c2.childNodes[0].value;
        

        /*
            var table = document.getElementById("goodsreceivedtable");
            var rows = table.getElementsByTagName("tr");
            for (i = 0; i < rows.length; i++) {
                var currentRow = table.rows[i];
                var createClickHandler = function(row) {
                    return function() {
                        var cell = row.getElementsByTagName("td")[4];
                        var id = cell.innerHTML;
                        alert(id);
                        
                    };
                };
                currentRow.onclick = createClickHandler(currentRow);
        */
    } 
        
    
    function addRow() {

        var select = document.createElement('select');
        select.className = "form-control";
        var option = document.createElement("option");
        var empTab = document.getElementById('goodsreceivedtable');

        var rowCnt = empTab.rows.length; // table row count.
        var tr = empTab.insertRow(rowCnt); // the table row.
        //tr = empTab.insertRow(rowCnt);

        for (var c = 0; c < 5; c++) {
            var td = document.createElement('td'); // table definition.
            td = tr.insertCell(c);
            switch (c) {

                case 0:
                    var ele = document.createElement('input');
                    ele.className = "form-control";
                    ele.value=$("#selectProduct").val();
                    ele.text=$("#selectProduct option:selected").text();
                    ele.id = "bookid";
                    ele.setAttribute("disabled", true);
                    td.appendChild(ele);
                    
                    break;


                case 1:
                    var ele = document.createElement('input');
                
                    ele.setAttribute('type', 'number');
                    ele.setAttribute('value', '');
                    ele.className = "form-control";
                    ele.value = $("#inputQuantity").val();
                    ele.setAttribute("onkeyup","keyupCalculate(this);");
                    
                    td.appendChild(ele);
                   
                    break;
                case 2:
                    var ele = document.createElement('input');
                  
                    ele.setAttribute('type', 'number');
                    ele.setAttribute('value', '');
                    ele.className = "form-control ";;
                    ele.value = $("#inputPrice").val();
                    ele.setAttribute("onkeyup","keyupCalculate(this);");
                    td.appendChild(ele);
                    break;
                case 3:
                    var ele = document.createElement('input');
              
                    ele.setAttribute('type', 'number');
                    ele.setAttribute('value', '');
                    ele.className = "form-control ";
                    ele.id = "total";
                    ele.value = $("#inputQuantity").val() * $("#inputPrice").val();
                    ele.setAttribute("disabled", true);
                    //document.getElementById("total").disabled = false;
                    td.appendChild(ele);
                    break
                case 4:
                    var button = document.createElement('input');


                    // set input attributes.
                    button.setAttribute('type', 'button');
                    button.setAttribute('value', 'Remove');
                    button.className = "btn btn-primary btn-sm";
                    // add button's 'onclick' event.
                    button.setAttribute('onclick', 'removeRow(this)');

                    td.appendChild(button);
                    break;

            }


        }
        //set disabled total

   
        //$a = document.getElementsByClass('.form-control');
        //$a.value = 10

        //$a.addEventListener("keyup", function () {
        //    alert($a.value);
        //});


    }

    function removeRow(oButton) {
        var empTab = document.getElementById('goodsreceivedtable');
        empTab.deleteRow(oButton.parentNode.parentNode.rowIndex); // button -> td -> tr.
    }
    function Person(id, quantity, price, total) {
            this.id = id;
            this.quantity = quantity;
            this.price = price;
            this.total = total;
    }
    function checkDuplicate(id) {
      
        var table = document.getElementById('goodsreceivedtable');
        for (var r = 1, n = table.rows.length; r < n; r++) {
            
        
            for (var c = 0, m = table.rows[r].cells.length; c < 1; c++) {
                
                var element = table.rows.item(r).cells[c];
               

                if (element.childNodes[0].value==id){
                    
                    return 1;
                }
                 
            }
        }
    }
    var arrObj = new Array();
    function save() {
        
        
        var table = document.getElementById('goodsreceivedtable');
        for (var r = 1, n = table.rows.length; r < n; r++) {
            
            var arr = new Array();
            for (var c = 0, m = table.rows[r].cells.length; c < m-1; c++) {
                
                var element = table.rows.item(r).cells[c];
               
                if (element.nodeType == 1){
                 
                    arr.push(element.childNodes[0].value)
                }
               
            }
            var good = new Person(arr[0],arr[1],arr[2],arr[3])
            
            arrObj.push(good);
        }
        //tính tông
     
        var sum = arrObj.reduce(function (total, currentValue) {
            return total + currentValue.total;
        }, 0);

        document.getElementById('txttotal').value = parseInt(sum);
        
        document.getElementById("txtdate").value =getDate();
        document.getElementById("txtuser").value = "Helloo";

    }

    function getDate(){
        var today = new Date();
        return today.getFullYear() + '-' + ('0' + (today.getMonth() + 1)).slice(-2) + '-' + ('0' + today.getDate()).slice(-2);


    }

</script>