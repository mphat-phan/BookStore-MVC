<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>DataTables</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Quản lý User</li>
                    <li class="breadcrumb-item active">User</li>
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
                        <h3 class="card-title">User table</h3>

                        <button type="button" onclick="openModalUser('')" href="#"
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
                        <table id="usertable" class="table table-bordered table-striped">
                            <thead>
                                <tr>

                                    <th>Username</th>
                                    <th>Password</th>
                                    <th>#</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    //print_r($data['Author']);
                                    $UserRole='';
                                    foreach($data['User'] as $row){

                                    ?>
                                <tr>

                                    <td><?=$row['username']?></td>
                                    <td><?=$row['password']?></td>
                                    <td><a onclick='openModalUser(<?php echo json_encode($row)?>)' href="#"
                                            class="btn btn-warning btn-sm" role="button" data-toggle="modal"
                                            data-target="#UpdateModal">Update</a>
                                        <a onclick='openModalUser(<?php echo json_encode($row)?>)' href="#"
                                            class="btn btn-danger btn-sm" role="button" data-toggle="modal"
                                            data-target="#DeleteModal">Delete</a>
                                        <?php
                                            foreach($data['UserHasRole'] as $UserHasRole){
                                                if($UserHasRole['username']==$row['username']){
                                                    $UserRole = $UserHasRole;
                                                }
                                            }
                                            ?>
                                        <a onclick='openRoleModal(<?php echo json_encode($UserRole)?>)' href="#"
                                            class="btn btn-primary btn-sm" role="button" data-toggle="modal"
                                            data-target="#UpdateRoleModal">Role</a>
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
                            <label for="exampleInputEmail1">User Name</label>
                            <input name="txtUserName" type="text" class="form-control" id="txtName" placeholder="Enter ">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">User Password</label>
                            <input name='txtUserPassword' type="password" class="form-control" id="txtDetail" >
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
                            <label for="exampleInputEmail1">User Password</label>
                            <input name='txtUserPassword' value="" type="password" class="form-control formUpdateInput" placeholder="Enter ">
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
<div class="modal" id="UpdateRoleModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Update Role</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form id="formRoleUpdate" action="" method="POST">
                    
                    <div class="card-body">
                    <div class="form-group">
                            <label for="sel2">User Role</label>
                            <select class="form-control" name="roleSelect" id="roleSelect">
                                <?php
                                    foreach($data['Role'] as $row){
        
                                    ?>
                                    <option value="<?=$row['id']?>"><?=$row['name']?></option>
                                <?php
                                    }
                                ?>
                            </select>
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
    $("#usertable").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#usertable_wrapper .col-md-6:eq(0)');
</script>
<script src="http://localhost/Bookstore/public/assets/js/main.js">
</script>