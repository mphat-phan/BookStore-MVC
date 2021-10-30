<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>DataTables</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Quản lý khách hàng</li>

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
                        <h3 class="card-title">Customer table</h3>

                        <button type="button" onclick="openModalCustomer('')" href="#"
                            class="btn btn-primary btn-sm float-right" role="button" data-toggle="modal"
                            data-target="#AddModal">Add</button>

                        <button type="button" onclick="" href="#" class="btn btn-success btn-sm float-right mr-1"
                            role="button" data-toggle="modal" data-target="#">Import</button>
                    </div>
                    <?php
                        if(isset($data['msg'])){
                            echo '<div class="alert alert-'.$data['color'].'" role="alert">'.$data['msg'].'</div>';
                        }
                        ?>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="customertable" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>Email</th>
                                    <th>Birth</th>
                                    <th>#</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    //print_r($data['Author']);
                                    foreach($data['Customer'] as $row){
        
                                    ?>
                                <tr>
                                    <td><?=$row['id']?></td>
                                    <td><?=$row['name']?></td>
                                    <td><?=$row['phone']?></td>
                                    <td><?=$row['address']?></td>
                                    <td><?=$row['email']?></td>
                                    <td><?=$row['birth']?></td>
                                    <td><a onclick='openModalCustomer(<?php echo json_encode($row)?>)' href="#"
                                            class="btn btn-warning btn-sm" role="button" data-toggle="modal"
                                            data-target="#UpdateModal">Update</a>
                                        <a onclick='openModalCustomer(<?php echo json_encode($row)?>)' href="#"
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
                            <label for="exampleInputEmail1">Customer Name</label>
                            <input name="txtName" type="text" class="form-control" id="txtName" placeholder="Enter "
                                require>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Customer Phone</label>
                            <input name="txtPhone" type="text" class="form-control" id="txtName" placeholder="Enter "
                                require>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Customer Address</label>
                            <input name="txtAddress" type="text" class="form-control" id="txtName" placeholder="Enter "
                                require>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Customer Email</label>
                            <input name="txtEmail" type="email" class="form-control" id="txtName" placeholder="Enter "
                                require>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Customer Birth</label>
                            <input name="txtBirth" type="date" class="form-control" id="txtName" placeholder="Enter "
                                require>
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
<div class="modal" id="UpdateModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Update</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form id="formUpdate" action="" method="POST">

                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Customer Name</label>
                            <input name="txtName" type="text" class="form-control" id="txtName" placeholder="Enter ">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Customer Phone</label>
                            <input name="txtPhone" type="text" class="form-control" id="txtName" placeholder="Enter ">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Customer Address</label>
                            <input name="txtAddress" type="text" class="form-control" id="txtName" placeholder="Enter ">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Customer Email</label>
                            <input name="txtEmail" type="email" class="form-control" id="txtName" placeholder="Enter ">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Customer Birth</label>
                            <input name="txtBirth" type="date" class="form-control" id="txtName" placeholder="Enter ">
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
<script>
    el = document.querySelector('.modal-backdrop');
    el.classList.remove("modal-backdrop");
    el = document.querySelector('.modal-open');
    el.classList.remove("modal-open");
    $("#customertable").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#customertable_wrapper .col-md-6:eq(0)');
</script>
<script src="http://localhost/Bookstore/public/assets/js/main.js">
</script>