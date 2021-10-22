<div class="content-wrapper">
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

                            <button type="button" onclick="" href="#" class="btn btn-primary btn-sm float-right" role="button"
                                data-toggle="modal" data-target="#AddModal">Add</button>

                            <button type="button" onclick="" href="#" class="btn btn-success btn-sm float-right mr-1" role="button"
                                data-toggle="modal" data-target="#">Import</button>
                        </div>

                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="authortable" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Rendering engine</th>
                                        <th>Browser</th>
                                        <th>Platform(s)</th>
                                        <th>Engine version</th>
                                        <th>CSS grade</th>
                                        <th>#</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Trident</td>
                                        <td>Internet
                                            Explorer 4.0
                                        </td>
                                        <td>Win 95+</td>
                                        <td> 4</td>
                                        <td>X</td>
                                        
                                        <td><a onclick="" href="#" class="btn btn-warning btn-sm" role="button"
                                                data-toggle="modal" data-target="#UpdateModal">Update</a>
                                            <a onclick="" href="#" class="btn btn-danger btn-sm" role="button"
                                                data-toggle="modal" data-target="#DeleteModal">Delete</a>
                                        </td>
                                        
                                    </tr>
                                    <tr>
                                        <td>Trident</td>
                                        <td>Internet
                                            Explorer 4.0
                                        </td>
                                        <td>Win 95+</td>
                                        <td> 4</td>
                                        <td>X</td>
                                        
                                        <td><a onclick="" href="#" class="btn btn-warning btn-sm" role="button"
                                                data-toggle="modal" data-target="#UpdateModal">Update</a>
                                            <a onclick="" href="#" class="btn btn-danger btn-sm" role="button"
                                                data-toggle="modal" data-target="#DeleteModal">Delete</a>
                                        </td>
                                        
                                    </tr>
                                    <tr>
                                        <td>Trident</td>
                                        <td>Internet
                                            Explorer 4.0
                                        </td>
                                        <td>Win 95+</td>
                                        <td> 4</td>
                                        <td>X</td>
                                        
                                        <td><a onclick="" href="#" class="btn btn-warning btn-sm" role="button"
                                                data-toggle="modal" data-target="#UpdateModal">Update</a>
                                            <a onclick="" href="#" class="btn btn-danger btn-sm" role="button"
                                                data-toggle="modal" data-target="#DeleteModal">Delete</a>
                                        </td>
                                        
                                    </tr>
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
                <form action="" method="POST">
                    
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Category Name</label>
                            <input name="txtName" type="text" class="form-control" id="" placeholder="Enter ">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Category Detail</label>
                            <input name='txtDetail' type="text" class="form-control" id="" placeholder="Enter ">
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
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
                <form action="admin/form/category/add" method="POST">
                    
                    <div class="card-body">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
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
                <form action="admin/form/category/add" method="POST">
                    
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Category Name</label>
                            <input name="txtName" type="text" class="form-control" id="" placeholder="Enter ">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Category Detail</label>
                            <input name='txtDetail' type="text" class="form-control" id="" placeholder="Enter ">
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>