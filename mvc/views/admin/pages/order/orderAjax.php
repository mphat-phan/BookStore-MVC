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

                        <button type="button" onclick="openModalOrder('')" href="#"
                            class="btn btn-primary btn-sm float-right" role="button" data-toggle="modal"
                            data-target="#AddModal">Add</button>

                        <button type="button" onclick="" href="#" class="btn btn-success btn-sm float-right mr-1"
                            role="button" data-toggle="modal" data-target="#">Import</button>
                    </div>

                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="ordertable" onclick="addRowHandlers()" class="table table-bordered  table-hover">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>CustomerID</th>
                                    <th>EmployeeID</th>
                                    <th>Date</th>
                                    <th>Total</th>
                                    <th>Status</th>
                                    <th>#</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    //print_r($data['Author']);
                                    foreach($data['Order'] as $row){
        
                                    ?>
                                <tr>
                                    <td><?=$row['id']?></td>
                                    <td><?=$row['customerID']?></td>
                                    <td><?=$row['employeeID']?></td>
                                    <td><?=$row['date']?></td>
                                    <td><?=$row['total']?></td>
                                    <td><?=$row['status']?></td>
                                    <td>
                                        <a onclick='openModalOrder(<?php echo json_encode($row)?>)' href="#"
                                            class="btn btn-danger btn-sm" role="button" data-toggle="modal"
                                            data-target="#DeleteModal">Delete</a>
                                    </td>

                                </tr>
                                <?php
                                    }
                                    ?>
                            </tbody>

                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <div class="col-12">
                <!-- /.card -->

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Order Detail table</h3>

                        <button type="button" onclick="openModalOrderDetail('')" href="#"
                            class="btn btn-primary btn-sm float-right" role="button" data-toggle="modal"
                            data-target="#AddModal">Add</button>

                        <button type="button" onclick="" href="#" class="btn btn-success btn-sm float-right mr-1"
                            role="button" data-toggle="modal" data-target="#">Import</button>
                    </div>

                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="orderdetailtable" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>OrderID</th>
                                    <th>BookID</th>
                                    <th>Price</th>
                                    <th>Quantity</th>

                                    <th>#</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    //print_r($data['Author']);
                                    foreach($data['OrderDetail'] as $row){
        
                                    ?>
                                <tr>
                                    <td><?=$row['orderID']?></td>
                                    <td><?=$row['bookID']?></td>
                                    <td><?=$row['price']?></td>
                                    <td><?=$row['quantity']?></td>
                                    <td>
                                        <a onclick='openModalOrderDetail(<?php echo json_encode($row)?>)' href="#"
                                            class="btn btn-danger btn-sm" role="button" data-toggle="modal"
                                            data-target="#DeleteModal">Delete</a>
                                    </td>

                                </tr>
                                <?php
                                    }
                                    ?>
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
<script>
    $("#ordertable").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#ordertable_wrapper .col-md-6:eq(0)');
    $("#orderdetailtable").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#orderdetailtable_wrapper .col-md-6:eq(0)');
</script>