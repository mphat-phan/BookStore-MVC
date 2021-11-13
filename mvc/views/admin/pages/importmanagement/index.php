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
                        <li class="breadcrumb-item active">Quản lý nhập hàng</li>

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
                            <h3 class="card-title">Import table</h3>
                        </div>

                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="importtable" class="table table-bordered table-striped dt-responsive nowrap display">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Date</th>
                                        <th>Total</th>
                                        <th>Employee Username</th>
                                        <th>#</th>
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
                                        <th>#</th>
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

                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
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
    <div class="modal" id="InfoImport">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">

                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Info</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Import Detail table</h3>

                        </div>

                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="importdetailtable" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ImportID</th>
                                        <th>ProductID</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>ImportID</th>
                                        <th>ProductID</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                    </tr>

                                </tfoot>

                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<script src="<?php echo constant('URL') ?>public/assets/plugins/jquery/jquery.min.js"></script>
<script>
$(document).ready(function () {
        importtable = $('#importtable').DataTable({
            dom: 'Bfrtip',
            "scrollY": "300px",
           
            "ajax": "<?php echo constant('URL') ?>import/getall",
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
                    
                    "data" : null,
                    "render": function (data, type, full) {
                        var id = full.id;
                        
                        return (
                            "<button onclick='openDetail(this)' class='btn btn-primary btn-sm' role='button' data-toggle='modal' data-target='#InfoImport' data_id='" +
                            id + "'>" +
                            "Show Detail Import" +
                            "</button>"
                        );
                            
                    }
                }
            ],

        });
});

    function openModal(e){
        
        //$getCurrentUrl = '<?php echo constant('URL') ?>order';
        id=$(e).attr('data_id');

     
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
    }
    function openDetail(e){

        id=$(e).attr('data_id');
        importdetailtable = $('#importdetailtable').DataTable({
        dom: 'Bfrtip',
        "ajax": "<?php echo constant('URL') ?>importdetail/getbyid/"+id,
        "columns": [{
                    "data": "importID"
                    },
                    {
                    "data": "productID"
                                    
                    },
                    {
                    "data": "quantity"
                    },
                    {
                    "data": "price"
                    }
                            
                    ],

        });
        importdetailtable.destroy();
                  
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