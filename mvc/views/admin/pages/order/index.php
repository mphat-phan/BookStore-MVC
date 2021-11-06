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
                        <li class="breadcrumb-item active">Quản lý hóa đơn</li>

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
                            <h3 class="card-title">Order table</h3>


                        </div>

                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="ordertable" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Date</th>
                                        <th>Total</th>
                                        <th>Employee Username</th>
                                        <th>Customer Username</th>
                                        <th>CustomerID</th>
                                        <th>#</th>
                                        <th>Status</th>


                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>id</th>
                                        <th>Date</th>
                                        <th>Total</th>
                                        <th>Employee Username</th>
                                        <th>Customer Username</th>
                                        <th>CustomerID</th>
                                        <th>#</th>
                                        <th>Status</th>
                                    </tr>

                                </tfoot>

                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
                <div class="col-12">
                    <!-- /.card -->

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Order Detail table</h3>

                        </div>

                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="orderdetailtable" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>OrderID</th>
                                        <th>ProductID</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                      
                                    
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>OrderID</th>
                                        <th>ProductID</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                       
                                    </tr>

                                </tfoot>

                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    <div class="modal" id="DeleteModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Delete</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form id="formDelete" action="" method="POST">

                        <div class="card-body">
                            <div class="form-check">
                                <input name="checkDelete" id="checkDelete" type="checkbox" class="form-check-input">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
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
    <div class="modal" id="ConfirmStatus">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Status</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form id="formUpdate" action="" method="POST">

                        <div class="card-body">
                            <div class="form-check">
                                <input name="checkStatus" id="checkDelete" type="checkbox" class="form-check-input">
                                <label class="form-check-label" for="exampleCheck1">Xác nhận đơn hàng</label>
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
    <div class="modal" id="Info">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Info</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form id="formInfo" action="" method="POST">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">ID</label>
                                <input name="txtName" type="text" class="form-control "
                                    placeholder="Enter " disabled>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Name</label>
                                <input name="txtName" type="text" class="form-control "
                                    placeholder="Enter " disabled>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Phone</label>
                                <input name="txtName" type="text" class="form-control "
                                    placeholder="Enter " disabled>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input name="txtName" type="text" class="form-control "
                                    placeholder="Enter " disabled>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Address</label>
                                <input name="txtName" type="text" class="form-control "
                                    placeholder="Enter " disabled>
                            </div>
                            
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

</div>
<script src="<?php echo constant('URL') ?>public/assets/plugins/jquery/jquery.min.js"></script>
<script>
$(document).ready(function () {
        ordertable = $('#ordertable').DataTable({
            dom: 'Bfrtip',
            "scrollY":        "500px",
            "scrollCollapse": true,
            "ajax": "<?php echo constant('URL') ?>order/getall",
            "columns": [{
                    "data": "id"
                },
                {
                    "data": "date"
                },
                {
                    "data": "total"
                },
                {
                    "data": "employee_username",
                    "render": function (data, type, row, meta) {
                        return(
                            "<a class='nav-link' data='employee' data-toggle='modal' data-target='#Info' onclick='openModal(this)' data_id='"+data+"'>"+data+"</a>"
                        )

                    }
                },
                {
                    "data": "customer_username",
                    "render": function (data, type, row, meta) {
                        return(
                            "<a class='nav-link' data='customer' data-toggle='modal' data-target='#Info' onclick='openModal(this)' data_id='"+data+"'>"+data+"</a>"
                        )
                        
                    }
                },
                {
                    "data": "customerID"
                },
                {
                    
                    "data" : null,
                    "render": function (data, type, full) {
                        var id = full.id;
                        var status = full.status;
                        if(status>=0 && status<=2){
                            return (
                            "<button onclick='openModal(this)' class='btn btn-danger btn-sm' role='button' data-toggle='modal' data-target='#DeleteModal' data_id='" +
                            id + "'>" +
                            "Hủy đơn hàng" +
                            "</button>"
                            );
                        }
                        return (
                            "<button onclick='' class='btn btn-secondary btn-sm' role='button' data-toggle='modal' data-target='' data_id='" +
                            id + "'>" +
                            "Hủy đơn hàng" +
                            "</button>"
                        );
                            
                    }
                },
                {
                    "data" : null,
                    "render": function (data, type, full) {
                        var status=full.status;
                        var id = full.id;
                        if(status==1){
                            return (
                            "<button onclick='' class='btn btn-primary btn-sm' role='button' data-toggle='modal' data-target='' data_id=''>" +
                            "Đã xác nhận" +
                            "</button>"
                            );
                        }
                        else if(status==0){
                            return (
                                "<button onclick='openModal(this)' class='btn btn-danger btn-sm' role='button' data-toggle='modal' data-target='#ConfirmStatus' data_id='" +
                                id + "'>" +
                                "Chưa xác nhận" +
                                "</button>"
                            );
                        }
                        else if(status==-1){
                            return (
                                "<button onclick='' class='btn btn-secondary btn-sm' role='button' data-toggle='modal' data-target='' data_id='" +
                                id + "'>" +
                                "Đã hủy" +
                                "</button>"
                            );
                        }
                        else if(status==2){
                            return (
                                "<button onclick='' class='btn btn-info btn-sm' role='button' data-toggle='modal' data-target='' data_id='" +
                                id + "'>" +
                                "Đang giao" +
                                "</button>"
                            );
                        }
                        else if(status==3){
                            return (
                                "<button onclick='' class='btn btn-success btn-sm' role='button' data-toggle='modal' data-target='' data_id='" +
                                id + "'>" +
                                "Đã giao" +
                                "</button>"
                            );
                        }

                    }
                }
            ],

        });

        $('#ordertable').click(function(){
            var table = document.getElementById("ordertable");
            var rows = table.getElementsByTagName("tr");
            for (i = 0; i < rows.length; i++) {
                var currentRow = table.rows[i];
                var createClickHandler = function (row) {
                    return function () {
                        var cell = row.getElementsByTagName("td")[0];
                        var id = cell.innerHTML;

                            orderdetailtable = $('#orderdetailtable').DataTable({
                            dom: 'Bfrtip',
                            "ajax": "<?php echo constant('URL') ?>orderdetail/getbyid/"+id,
                            "columns": [{
                                    "data": "orderID"
                                },
                                {
                                    "data": "productID",
                                    "render": function (data, type, row, meta) {
                                        return(
                                            data.name
                                        );
                                    }
                                },
                                {
                                    "data": "quantity"
                                },
                                {
                                    "data": "price"
                                }
                            
                            ],

                            });
                        };
                        };
                    currentRow.onclick = createClickHandler(currentRow);
                    }
        })

     
        
        $("#formUpdate").submit(function (e) {

            e.preventDefault();
            var form = $(this);
            var url = form.attr('action');
            $.ajax({
                type: "POST",
                url: url,
                data: form.serialize(), // serializes the form's elements.
                success: function (data) {
                    sweetAlertCRUD(data, "Update");
                    ordertable.ajax.reload();
                }
            });

        })
        
        $("#formDelete").submit(function (e) {
            e.preventDefault();
            var form = $(this);
            var url = form.attr('action');

            $.ajax({
                type: "POST",
                url: url,
                data: form.serialize(), // serializes the form's elements.
                success: function (data) {
                    sweetAlertCRUD(data, "Delete");
                    ordertable.ajax.reload();

                }
            });

        })
    });

    function openModal(e){
        
        $getCurrentUrl = '<?php echo constant('URL') ?>order';
        id=$(e).attr('data_id');

        $formDelete = document.querySelector("#formDelete");
        $formUpdate = document.querySelector("#formUpdate");
        $formInfo = document.querySelector("#formInfo");
        const x = document.forms["formInfo"];
       
    
        $.ajax({
            type: "POST",
            url: '<?php echo constant('URL') ?>'+$(e).attr('data')+'/getByUsername/'+id,
            dataType: 'json',
            success: function(data){
                x.elements[0].value = data['data'][0].id;
                x.elements[1].value = data['data'][0].name;
                x.elements[2].value = data['data'][0].phone;
                x.elements[3].value = data['data'][0].email;
                x.elements[4].value = data['data'][0].address;
               

               
            }
        });
        $formDelete.action = $getCurrentUrl+"/delete/"+id;
        $formUpdate.action = $getCurrentUrl+"/update/"+id;
    }
    
</script>

<!--
<script>
    $getCurrentUrl = 'http://localhost/Bookstore/<?=$data['Page']?>';

    function openModalOrder(e) {
        //update model
        /*
        const x = document.forms["formUpdate"];
        x.elements[0].value= e.customerID;
        x.elements[1].value= e.employeeID;
        x.elements[2].value= e.date;
        x.elements[3].value= e.total;
        x.elements[4].value= e.status;
        */

        //action
        //$formUpdate = document.querySelector("#formUpdate");
        $formDelete = document.querySelector("#formDelete");
        //$formAdd = document.querySelector("#formAdd");
        //$formAdd.action =  $getCurrentUrl+"/add";
        //$formUpdate.action = $getCurrentUrl+"/update/"+e.id;
        $formDelete.action = $getCurrentUrl + "/deleteOrder/" + e.id;

    }

    function openModalOrderDetail(e) {

        //update model
        /*
        const x = document.forms["formUpdate"];
        x.elements[0].value= e.orderID;
        x.elements[0].value= e.bookID;
        x.elements[0].value= e.quantity;
        x.elements[0].value= e.price;
        */

        //action
        //$formUpdate = document.querySelector("#formUpdate");
        $formDelete = document.querySelector("#formDelete");
        //$formAdd = document.querySelector("#formAdd");
        //$formAdd.action =  $getCurrentUrl+"/add";
        //$formUpdate.action = $getCurrentUrl+"/update/"+e.id;
        $formDelete.action = $getCurrentUrl + "/deleteOrderDetail/" + e.orderID;

    }

    function addRowHandlers() {
        var table = document.getElementById("ordertable");
        var rows = table.getElementsByTagName("tr");
        for (i = 0; i < rows.length; i++) {
            var currentRow = table.rows[i];
            var createClickHandler = function (row) {
                return function () {
                    var cell = row.getElementsByTagName("td")[0];
                    var id = cell.innerHTML;
                    $.ajax({
                        type: "POST",
                        url: $getCurrentUrl + "/chitiethoadon/" + id,
                        success: function (data) {
                            $("#orderdetailtable").html(data);
                        }
                    });
                };
            };
            currentRow.onclick = createClickHandler(currentRow);
        }
    }
</script>
-->