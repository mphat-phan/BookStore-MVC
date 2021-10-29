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
                    <li class="breadcrumb-item active">Thể loại</li>
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
                        <h3 class="card-title">Category table</h3>

                        <button type="button" onclick="openModal('')" href="#" class="btn btn-primary btn-sm float-right"
                            role="button" data-toggle="modal" data-target="#AddModal">Add</button>

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
                        <table id="categorytable" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Name</th>
                                    <th>Detail</th>
                                    <th>#</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    //print_r($data['Author']);
                                    foreach($data['Category'] as $row){
        
                                    ?>
                                <tr>
                                    <td><?=$row['id']?></td>
                                    <td><?=$row['name']?></td>
                                    <td><?=$row['detail']?></td>
                                    <td><a onclick='openModal(<?php echo json_encode($row)?>)' href="#"
                                            class="btn btn-warning btn-sm" role="button" data-toggle="modal"
                                            data-target="#UpdateModal">Update</a>
                                        <a onclick='openModal(<?php echo json_encode($row)?>)' href="#"
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
    $("#categorytable").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#categorytable_wrapper .col-md-6:eq(0)');
 
</script>