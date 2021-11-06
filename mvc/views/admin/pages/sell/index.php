
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
                        <li class="breadcrumb-item active">Sell</li>
                        
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
                                    <div class="form-group">
                                        <label>Quantity</label>
                                        <input value = 0 min=0 name="" type="number" class="form-control" id="txtQuantity"
                                            placeholder=" " >
                                    </div>
                                    <div class="form-group">
                                        <label>Price</label>
                                        <input min=0 name="" type="number" class="form-control" id="txtPrice"
                                            placeholder=" " disabled>
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Information</label>
                                        <div class="alert alert-warning">
                                            <a id="product_quantity" href="#" class="alert-link">Số lượng sản phẩm : 5</a>
                                        </div>
                                    </div>
                                    
                                </div>

                            </div>
                            <div class="row">


                                <div class="col-12">
                                    <button type="button" onclick='openModal()' href="#"
                                        class="btn btn-primary btn-sm float-right "
                                        role="button" data-toggle="modal" data-target="#saveModel">Save</button>
                                    <button type="button" onclick='' href="#" id = "addOrder"
                                        class="btn btn-primary btn-sm float-left mr-1">Add</button>
                                        
                                    <button type="button" onclick="" href="#"
                                        class="btn btn-success btn-sm float-right mr-1" role="button"
                                        data-toggle="modal" data-target="#">Import</button>
                                </div>
                            </div>


                        </div>

                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="ordertable" class="table table-bordered table-striped">
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
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Add</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form id="formAdd" action="" method="POST">
                    <div class="card-body ">
                            
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                    <label for="exampleInputEmail1">Date</label>
                                    <input name="txtDate" type="date" class="form-control" id="txtDate" disabled>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                    <label for="exampleInputEmail1">Total</label>
                                    <input name='txtTotal' type="number" class="form-control" id="txtTotal"
                                        disabled>
                                    </div>
                                </div>
                                <div class=col>
                                    <div class="form-group">
                                    <label for="exampleInputEmail1">Employee User</label>
                                    <input name='txtEmployeeUser' type="text" class="form-control" id="txtEmployeeUser"
                                        disabled>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label>Mã giảm giá(nếu có)</label>
                                        <input name="txtSale" type="text" class="form-control" id="txtSale"
                                            placeholder=" ">
                                        <span id="" style="color: red">Không tìm thấy</span>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Số điện thoại(nếu có)</label>
                                        <input name="txtPhone" type="text" class="form-control" id="txtPhone"
                                            placeholder=" ">
                                        <span id="lblError" style="color: red">Không tìm thấy</span>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label>Phương thức thanh toán</label>
                                        <div class="col">
                                            <div class="form-check">
                                            <input class="form-check-input" type="radio" name="cash" checked>
                                            <label class="form-check-label">Cash</label>
                                            </div>

                                        </div>
                                        <div class="col">
                                            <div class="form-check">
                                            <input class="form-check-input" type="radio" name="card" disabled>
                                            <label class="form-check-label">Card</label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check">
                                            <input class="form-check-input" type="radio" name="wallet" disabled>
                                            <label class="form-check-label">Wallet</label>
                                            </div>
                                        </div>
                                    </div>  
                                </div> 
                                <div class="col">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tiền khách đưa(bắt buộc)</label>
                                        <input name="txtMoneyInput" type="number" class="form-control" id="txtMoneyInput" >
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tiền thối</label>
                                        <input name="txtMoneyOutput" type="number" class="form-control" id="txtMoneyOutput" disabled>
                                    </div>
                                </div>  
                            </div>
                        
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                            </div>
                    </div>
                </form>
               
            </div>

        </div>
    </div>
</div>
<script src="<?php echo constant('URL') ?>public/assets/plugins/jquery/jquery.min.js"></script>
<script>
    var orderdetail = []   ;
    var selectProduct = document.getElementById('selectProduct');
    var productNumberRealtime;
    var customerID;
    function fetchProduct(){
        $.ajax({
            url: '<?php echo constant('URL') ?>product/getByID/'+selectProduct.value,
            type: 'post',
            dataType: 'json',
            success: function(data){
                var product = data['data'];
                //console.log(product[0].quantity);
                $('#product_quantity').text("Sô lượng sản phẩm : "+product[0].quantity);
                productNumberRealtime = product[0].quantity;
                $('#txtPrice').val(product[0].price);
            }
        });
    }

    $(document).ready(function() {
 
        setInterval(fetchProduct,2000); //set số lượng retime

        var txtQuantity = document.getElementById('txtQuantity');
        var txtPrice = document.getElementById('txtPrice');
        var product_quantity = document.getElementById('product_quantity');
        
        $.ajax({
                type: "POST",
                url: '<?php echo constant('URL') ?>product/getall',
                dataType: 'json',
                success: function(data){
                    var product = data['data'];
                    Object.keys(product).forEach(key => {
                        selectProduct.options[key] = new Option("ID:"+product[key].id+" - "+product[key].name, product[key].id);
                    });
                    txtPrice.value=product[0].price;
                    $('#product_quantity').text("Sô lượng sản phẩm : "+product[0].quantity);

                }

        });
        $('#selectProduct').on('change', function() {
            fetchProduct();
        });

        $('#txtMoneyInput').on('keyup', function() {
            $('#txtMoneyOutput').val($('#txtMoneyInput').val() - $('#txtTotal').val() );
        });

        $("#addOrder").click(function(){
            //kiem tra so luong san pham
            if(productNumberRealtime<=0){
                sweetAlertCRUD(0, "Sản phẩm hết hàng : ");
                return
            }

            if($("#txtQuantity").val()<=0){
                sweetAlertCRUD(0, "Nhập số lượng sản phẩm : ");
                return
            }
            fetchProduct();
            if(productNumberRealtime<parseInt($("#txtQuantity").val())){
                sweetAlertCRUD(0, "Số lượng nhập không quá số lượng hiện tại : ");
                return
            }

            productID = $("#selectProduct").val();
            quantity = $("#txtQuantity").val();
            price = $("#txtPrice").val();   
            total = quantity*price;
            console.log(productID);
            if(checkDuplicate(productID)==1){
                sweetAlertCRUD(0, "Bị trùng mã sản phẩm : ");
                return;
            }
            sweetAlertCRUD(1, "Add");
            orderdetail.push({productID,quantity,price,total});
     
            let ordertable=$('#ordertable').DataTable( {
            "data": orderdetail,
            //define the columns and set the data property for each column
            "columns": [
                { 
                    "title": "ProductID",  "data": "productID" 
                },
                { 
                    "title": "Quantity", "data": "quantity",
                    "render": function (data, type, row, meta) {
                        return(
                            "<input onkeyup='keyupCalculate(this)' name='txtQuantityDetail' type='number' class='form-control' value='"+data+"'>"
                        )
                    }
                
                },
                { 
                    "title": "Price", "data": "price",
                    "render": function (data, type, row, meta) {
                        return(
                            "<input onkeyup='keyupCalculate(this)' name='txtPriceDetail' type='number' class='form-control' value='"+data+"'>"
                        )
                    }
                
                },
                { 
                    "title": "Total", "data": null,
                    "render": function (data, type, full) {
                        var quantity = full.quantity;
                        var price = full.price;
                        var total = quantity*price;
                        return(
                            "<input name='txtTotal' type='number' class='form-control' value='"+total+"' disabled >"
                        )

                    }
                
                },
                { 
                    "title": "Remove", "data": null,
                    "render": function (data, type, full) {
                        var id = full.productID;
                        return(
                            "<button onclick='removeRow(this)' id='removeRow' class='btn btn-danger btn-sm' role='button'  data_id='" +
                            id + "'>" +
                            "Remove" +
                            "</button>"
                        )

                    }
                
                },
            ]
            } );
            ordertable.destroy();
        });
        
        $("#formAdd").submit(function (e) {
            e.preventDefault();
            if(document.getElementById('txtTotal').value==0){
                sweetAlertCRUD(0, "Không thể thanh toán hóa đơn rỗng : ");
                return;
            }

            if(document.getElementById('txtMoneyInput').value<document.getElementById('txtTotal').value){
                sweetAlertCRUD(0, "Vui lòng nhập đủ tiền hóa đơn :");
                return;
            }

            var form = $(this);
            var url = form.attr('action');
            $.ajax({
                type: "POST",
                url: url,
                data: {
                    "txtDate" : $("#txtDate").val(),
                    "txtTotal" : $("#txtTotal").val(),
                    "txtEmployeeUser" : $("#txtEmployeeUser").val(),
                    "txtCustomerID" : customerID,
                    "txtSale" : $("#txtSale").val(),
                    "orderdetail" : JSON.stringify(orderdetail)
                }, // serializes the form's elements.
                success: function (data) {
                    sweetAlertCRUD(data, "Add");
                    console.log(data);
                }
            });

        })
        //Kiểm tra tồn tại số điện thoại
        $('#txtPhone').on('keyup', function() {
            $.ajax({
                type: "POST",
                url: '<?php echo constant('URL') ?>customer/getall',
                dataType: 'json',
                success: function(data){
                    var customer = data['data'];
                    for(let i=0;i<customer.length;i++){
                        if(customer[i].phone==$('#txtPhone').val()){
                            customerID = customer[i].id;
                            $('#lblError').html("");
                            return;
                        }
                        
                    }
                    $('#lblError').html("Không tìm thấy");
                }
            })
        });
      
    });
    function removeRow(e){
        id=$(e).attr('data_id');
        if(removeArr(id)==1){
            sweetAlertCRUD(1, "Remove");
            let ordertable=$('#ordertable').DataTable( {
            "data": orderdetail,
            //define the columns and set the data property for each column
            "columns": [
                { 
                    "title": "ProductID",  "data": "productID" 
                },
                { 
                    "title": "Quantity", "data": "quantity",
                    "render": function (data, type, row, meta) {
                        return(
                            "<input name='txtQuantityDetail' type='number' class='form-control' value='"+data+"'>"
                        )
                    }
                
                },
                { 
                    "title": "Price", "data": "price",
                    "render": function (data, type, row, meta) {
                        return(
                            "<input name='txtPriceDetail' type='number' class='form-control' value='"+data+"'>"
                        )
                    }
                
                },
                { 
                    "title": "Total", "data": null,
                    "render": function (data, type, full) {
                        var quantity = full.quantity;
                        var price = full.price;
                        var total = quantity*price;
                        return(
                            total
                        )

                    }
                
                },
                { 
                    "title": "Remove", "data": null,
                    "render": function (data, type, full) {
                        var id = full.productID;
                        return(
                            "<button onclick='removeRow(this)' id='removeRow' class='btn btn-danger btn-sm' role='button'  data_id='" +
                            id + "'>" +
                            "Remove" +
                            "</button>"
                        )

                    }
                
                },
            ]
            } );
            ordertable.destroy();

        }
        
        
    }
    function checkDuplicate(id){
        for(let i=0;i<orderdetail.length;i++){
            if(orderdetail[i].productID==id){
                return 1;
            }
        }
        return 0;
    }
    function removeArr(id){

        for(let i=0;i<orderdetail.length;i++){
            if(orderdetail[i].productID==id){
                orderdetail.splice(i, 1);
                return 1;
            }
        }
        return 0;
    }
    function keyupCalculate(element){
    
        
        var row = element.parentNode.parentNode.rowIndex; // trả về hàng của table
       

        var c1 = document.getElementById("ordertable").rows[row].cells.item(1);
        var quantity = c1.childNodes[0].value;
        orderdetail[row-1].quantity = quantity;
        
        var c2 = document.getElementById("ordertable").rows[row].cells.item(2);
        var price = c2.childNodes[0].value;
        orderdetail[row-1].price = price;
        
        var c3 =document.getElementById("ordertable").rows[row].cells.item(3);
        c3.childNodes[0].value=quantity*price;
        orderdetail[row-1].total = quantity*price;

        
    }
    function sumOrder(){
        var sum = 0
        for(let i=0;i<orderdetail.length;i++){
            sum+=orderdetail[i].total;
        }
        return sum;
    }
    function getDate(){
        var today = new Date();
        return today.getFullYear() + '-' + ('0' + (today.getMonth() + 1)).slice(-2) + '-' + ('0' + today.getDate()).slice(-2);


    }
    function openModal(){
            //action
        $getCurrentUrl = '<?php echo constant('URL') ?>order';
        $formAdd = document.querySelector("#formAdd");
        $formAdd.action =  $getCurrentUrl+"/add";
        const x = document.forms["formAdd"];
        x.elements[0].value = getDate();
        x.elements[1].value = sumOrder();
        x.elements[2].value =  "minhphat";
        
    } 
    
</script>
