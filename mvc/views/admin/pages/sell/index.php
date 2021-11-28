

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
                                        <input value = 1 min=0 name="" type="number" class="form-control" id="txtQuantity"
                                            placeholder="" >
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


<div class="modal" id="saveModel">
    <div class="modal-dialog modal-xl">
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
                                    <label for="exampleInputEmail1">Sub Total</label>
                                    <input name='txtSubtotal' type="number" class="form-control" id="txtSubTotal"
                                        disabled>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                    <label for="exampleInputEmail1">Sale</label>
                                    <input value=0 name='txtDiscount' type="number" class="form-control" id="txtDiscount"
                                        disabled>
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
                                            placeholder="">
                                        <span id="saleError" style="color: red">Không tìm thấy</span>
                                        <div id="acceptSale"></div>
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
<div class="modal fade" id="modal-success">

        <div class="modal-dialog">
          <div class="modal-content bg-success">
            <div class="modal-header">
              <h4 class="modal-title">Success</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <p>Thanh toán thành công&hellip;</p>
                <form action="" method="post" id="printbill" target="_blank">
                    <div class="card-body">
                        <div class="modal-footer justify-content-between">
                            <button name="submit" type="submit" rel="noopener" class="btn btn-default"><i class="fas fa-print"></i> Print</button>
                            <button id="reload" type="button" class="btn btn-outline-light">Trở về</button>
                        </div>
                    </div>
                </form>
              
              
            </div>
            
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
</div>
<script src="<?php echo constant('URL') ?>public/assets/plugins/jquery/jquery.min.js"></script>
<script>
    var orderdetail = []   ;
    var selectProduct = document.getElementById('selectProduct'); // selectProduct 
    var productNumberRealtime; //biến lưu số lượng sản phẩm realtime sau 2s
    
    var customerID=""; //biến lưu customer khi có số điện thoại
    var orderID; //biến lưu id hóa đơn dùng cho in hóa đơn
    var user = '<?php echo $_COOKIE['username'] ?>' // biến lưu username khi login 
    
    var saleList = [];

    var minorder; //biến lưu minorder sale
    var maxsale; //biến lưu maxorder sale
    var discount;
    var salediscount=0; //biến lưu discount sale
    var sum=0;
    var discount;
    function fetchProduct(id){
        $.ajax({
            url: '<?php echo constant('URL') ?>product/getByID/'+id,
            type: 'post',
            dataType: 'json',
            success: function(data){
                var product = data['data'];
                
                discount = product[0].saleID.discount;
                //console.log(product[0].quantity);
                $('#product_quantity').text("Số lượng sản phẩm : "+product[0].quantity);
                productNumberRealtime = product[0].quantity;
                $('#txtPrice').val(product[0].price);
            }
        });
    }
    $(document).ready(function() {
        
        setInterval(fetchProduct(selectProduct.value),2000); //set số lượng realtime trong 2s

        var txtQuantity = document.getElementById('txtQuantity');
        var txtPrice = document.getElementById('txtPrice');
        var product_quantity = document.getElementById('product_quantity');
        // select product
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
                    fetchProduct(selectProduct.value);

                }
        });
        //inbill
        $("#modal-success").submit(function (e) {
            e.preventDefault();
            
            var form = $(this);
            var url = form.attr('action');
            var win = window.open('<?php echo constant('URL') ?>order/printInvoice/'+parseInt(orderID), '_blank');
            if (win) {
                //Browser has allowed it to be opened
                win.focus();
            } else {
                //Browser has blocked it
                alert('Please allow popups for this website');
            }
            location.reload();
        })
        // select on change
        $('#selectProduct').on('change', function() {
            fetchProduct(selectProduct.value);
        });
        // event on change calculate sum 
        $('#txtMoneyInput').on('keyup', function() {
            $('#txtMoneyOutput').val($('#txtMoneyInput').val() - $('#txtTotal').val() );
        });

        // kiểm tra khi thêm sản phẩm
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
            fetchProduct(selectProduct.value);
            if(productNumberRealtime<parseInt($("#txtQuantity").val())){
                sweetAlertCRUD(0, "Số lượng nhập không quá số lượng hiện tại : ");
                return
            }

            productID = $("#selectProduct").val();
            quantity = $("#txtQuantity").val();
            price = $("#txtPrice").val();   
            subtotal = quantity*price;
            total = subtotal-subtotal*discount/100;
            console.log(total)
            if(checkDuplicate(productID)==1){
                sweetAlertCRUD(0, "Bị trùng mã sản phẩm : ");
                return;
            }
            sweetAlertCRUD(1, "Add");
            
            orderdetail.push({productID,quantity,price,subtotal,discount,total});
            
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
                            "<input onkeyup='keyupCalculate(this)' name='txtPriceDetail' type='number' class='form-control' value='"+data+"' disabled>"
                        )
                    }
                
                },
                { 
                    "title": "SubTotal", "data": "subtotal",
                    "render": function (data, type, full) {
                        
                        return(
                            "<input name='txtTotal' type='number' class='form-control' value='"+data+"' disabled >"
                        )

                    }
                
                },
                { 
                    "title": "Discount %", "data": "discount" ,
                    "render": function (data, type, row, meta) {
                        return(
                            "<input onkeyup='' name='txtDiscountProduct' type='number' class='form-control' value='"+data+"' disabled>"
                        )
                    }
                
                },
                { 
                    "title": "Total", "data": "total",
                    "render": function (data, type, full) {
                        
                        return(
                            "<input name='txtTotal' type='number' class='form-control' value='"+data+"' disabled >"
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
        //thêm mã sale id vào mảng
        $("#acceptSale").click(function(){
            if(checkDuplicateSale($("#txtSale").val())){
                sweetAlertCRUD(0, "Bị trùng mã sale : ");
                return;
            }
            var saleID = $("#txtSale").val();
            discountByID = parseInt(discount);
            saleList.push({saleID,discountByID,maxsale,minorder});
            sum=0;  
            for(let i=0;i<saleList.length;i++){
                salediscount = parseInt($('#txtSubTotal').val()*saleList[i]['discountByID']/100) ;

                if(salediscount>saleList[i]['maxsale']){
                    salediscount = parseInt(saleList[i]['maxsale']); 
                }
                
                sum+=salediscount;

                salediscount=0;
            }

            $('#txtDiscount').val(sum);

            //gán giá giảm vào input discount
            
            //tính tổng tiền hóa đơn
            $('#txtTotal').val( $('#txtSubTotal').val()-$('#txtDiscount').val() );

            $("#txtSale").val('');
            $('#acceptSale').html("");
            $('#saleError').html("Không tìm thấy");

        });
        // thanh toán
        $("#formAdd").submit(function (e) {
            e.preventDefault();
            if(document.getElementById('txtTotal').value==0){
                sweetAlertCRUD(0, "Không thể thanh toán hóa đơn rỗng : ");
                return;
            }

            if(parseInt($("#txtMoneyInput").val())<parseInt($("#txtTotal").val())){
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
                    "txtSubTotal" : $("#txtSubTotal").val(),
                    "txtDiscount" : $("#txtDiscount").val(),
                    "txtEmployeeUser" : $("#txtEmployeeUser").val(),
                    "txtCustomerID" : customerID,
                    "txtShippingfee" : 0,
                    "saleList" : JSON.stringify(saleList),
                    "orderdetail" : JSON.stringify(orderdetail),
                    "txtMoneyInput" : $("#txtMoneyInput").val(),
                    "txtMoneyOutput" :$("#txtMoneyOutput").val()
                }, // serializes the form's elements.
                success: function (data) {
                    if(data>0){
                        orderID = data;
                       sweetAlertCRUD(1, "Add"); 
                       $("#saveModel").modal('hide');
                       $("#modal-success").modal('show');
                       $("#printbill").attr('action',"<?php echo constant('URL') ?>order/printInvoice/"+parseInt(orderID));
                       
                    }
                    else{
                        sweetAlertCRUD(0, "Add"); 
                    }
                 
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
        //kiểm tra tồn tại mã sale
        $('#txtSale').on('keyup', function() {
            $.ajax({
                type: "POST",
                url: '<?php echo constant('URL') ?>sale/getall',
                dataType: 'json',
                success: function(data){
                    var sale = data['data'];
                    for(let i=0;i<sale.length;i++){
                        if(sale[i].id==$('#txtSale').val()){
                            minorder = sale[i].minorder;
                            maxsale = sale[i].maxsale;
                            discount = sale[i].discount;

                            startdate = sale[i].startdate;
                            enddate = sale[i].enddate;
                            today = getDate();
                            
                            var from = new Date(startdate.replace(/-/g,'/'));  
                            var to = new Date(enddate.replace(/-/g,'/'));  
                            var check = new Date(today.replace(/-/g,'/'));

                            ///hàm tính tính tiền sell
                            if(parseInt(minorder)>parseInt($("#txtSubTotal").val()))
                            {
                                $('#saleError').html("Đơn tối thiểu để áp dụng mã là "+minorder+" | "+"Giảm tối đa "+maxsale);
                               
                                return;
                            }
                            else if(check < from || check > to){
                                $('#saleError').html("Mã đã hết hạn");
                                return;
                            }
                            else{
                                $('#saleError').html("Giảm tối đa "+maxsale+" | "+"Mã giảm "+discount+"%");
                                $('#acceptSale').html("<div id='confirmSale' type='button' class='btn btn-outline-primary'>Áp dụng mã</div>");
                                return;
                            }
                            $('#saleError').html("");
                            
                            return;
                        }
                        
                    }
                    $('#saleError').html("Không tìm thấy");
                    $('#acceptSale').html("");
                }
            })
        });
      
    });
    //remove row
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
                            "<input onkeyup='keyupCalculate(this)' name='txtQuantityDetail' type='number' class='form-control' value='"+data+"'>"
                        )
                    }
                
                },
                { 
                    "title": "Price", "data": "price",
                    "render": function (data, type, row, meta) {
                        return(
                            "<input onkeyup='keyupCalculate(this)' name='txtPriceDetail' type='number' class='form-control' value='"+data+"' disabled>"
                        )
                    }
                
                },
                { 
                    "title": "SubTotal", "data": "subtotal",
                    "render": function (data, type, full) {
                        
                        return(
                            "<input name='txtTotal' type='number' class='form-control' value='"+data+"' disabled >"
                        )

                    }
                
                },
                { 
                    "title": "Discount %", "data": "discount" ,
                    "render": function (data, type, row, meta) {
                        return(
                            "<input onkeyup='' name='txtDiscountProduct' type='number' class='form-control' value='"+data+"' disabled>"
                        )
                    }
                
                },
                { 
                    "title": "Total", "data": "total",
                    "render": function (data, type, full) {
                        
                        return(
                            "<input name='txtTotal' type='number' class='form-control' value='"+data+"' disabled >"
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
    //kiêm tra trùng mã sản phẩm
    function checkDuplicate(id){
        for(let i=0;i<orderdetail.length;i++){
            if(orderdetail[i].productID==id){
                return 1;
            }
        }
        return 0;
    }

    function checkDuplicateSale(id){
        for(let i=0;i<saleList.length;i++){
            if(saleList[i].saleID==id){
                return 1;
            }
        }
        return 0;
    }
    //remove arr product
    function removeArr(id){

        for(let i=0;i<orderdetail.length;i++){
            if(orderdetail[i].productID==id){
                orderdetail.splice(i, 1);
                return 1;
            }
        }
        return 0;
    }
    //tính tổng = số lượng * giá
    function keyupCalculate(element){
       
        var row = element.parentNode.parentNode.rowIndex; // trả về hàng của table
       
        var c0 = document.getElementById("ordertable").rows[row].cells.item(0);
        id = c0.innerHTML;
        
        var c1 = document.getElementById("ordertable").rows[row].cells.item(1);
        var quantity = c1.childNodes[0].value;

        $.ajax({
            url: '<?php echo constant('URL') ?>product/getByID/'+id,
            type: 'post',
            dataType: 'json',
            success: function(data){
                var product = data['data'];
                if(parseInt(product[0].quantity)<parseInt(quantity)){
                    sweetAlertCRUD(0,"Nhập quá số lượng hiện có");
                    c1.childNodes[0].value=product[0].quantity;
                }
                else{
                    orderdetail[row-1].quantity = quantity;
                }
            
                
            }
        });

        
        var c2 = document.getElementById("ordertable").rows[row].cells.item(2);
        var price = c2.childNodes[0].value;
        orderdetail[row-1].price = price;

        var c3 =document.getElementById("ordertable").rows[row].cells.item(3);
        total = quantity*price;
        c3.childNodes[0].value=total;
        orderdetail[row-1].subtotal = total;

        
        var c4 = document.getElementById("ordertable").rows[row].cells.item(4);
        var discount = c4.childNodes[0].value;
        orderdetail[row-1].discount = discount;
        
        var c5 =document.getElementById("ordertable").rows[row].cells.item(5);
        total = quantity*price;
        c5.childNodes[0].value=total - total*discount/100;
        orderdetail[row-1].total = total - total*discount/100;

        
    }
    //tỉnh tổng hóa đơn
    function sumOrder(){
        var sum = 0
        for(let i=0;i<orderdetail.length;i++){
            sum+=orderdetail[i].total;
        }
        return sum;
    }
    //get today
    function getDate(){
        var today = new Date();
        return today.getFullYear() + '-' + ('0' + (today.getMonth() + 1)).slice(-2) + '-' + ('0' + today.getDate()).slice(-2);


    }
    //modal
    function openModal(){
            //action
        $getCurrentUrl = '<?php echo constant('URL') ?>order';
        $formAdd = document.querySelector("#formAdd");
        $formAdd.action =  $getCurrentUrl+"/add";
        const x = document.forms["formAdd"];
        x.elements[0].value = getDate();
        x.elements[1].value = sumOrder();
        x.elements[2].value = sum;
        x.elements[3].value = sumOrder()-sum;
        x.elements[4].value = user;

        
    } 
    
</script>
