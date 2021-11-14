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
                        <li class="breadcrumb-item active">Nhà xuất bản</li>
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
                            <h3 class="card-title">Role table</h3>

                            <button type="button" onclick="openModal('')" href="#"
                                class="btn btn-primary btn-sm float-right" role="button" data-toggle="modal"
                                data-target="#AddModal">Add</button>

                            <button type="button" onclick="" href="#" class="btn btn-success btn-sm float-right mr-1"
                                role="button" data-toggle="modal" data-target="#">Import</button>
                        </div>

                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="roletable" class="table table-striped table-bordered dt-responsive nowrap display">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Detail</th>
                                        <th>#</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                                <tfoot>
                                    <th>Name</th>
                                    <th>Detail</th>
                                    <th>#</th>
                                </tfoot>
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
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- /.card -->

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Permission</h3>

                            <button type="button" onclick="openModalPermission('')" href="#"
                                class="btn btn-primary btn-sm float-right" role="button" data-toggle="modal"
                                data-target="#AddPermissionModal">Add</button>                            
                        </div>

                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="permissiontable" class="table table-striped table-bordered dt-responsive nowrap display">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Permission</th>
                                        <th>#</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                                <tfoot>
                                    <th>ID</th>
                                    <th>Permission</th>
                                    <th>#</th>
                                </tfoot>
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

    <!-- Role -->
    <div class="modal"  id="AddModal">
        <div class="modal-dialog modal-lg">
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
                                <label for="exampleInputEmail1">Role Name</label>
                                <input name="txtName" type="text" class="form-control "
                                    placeholder="Enter ">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Role Detail</label>
                                <input name='txtDetail' type="text" class="form-control "
                                    placeholder="Enter ">
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
    <div class="modal"  id="AddRoleModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Add</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form id="formAddRolePermission" action="" method="post">

                        <div class="card-body">
                        <label for="exampleInputEmail1">Role Permission</label>
                            <select class="form-control select2" name="selectRole[]" multiple="multiple" data-placeholder="Select a State" data-dropdown-css-class="select2-blue" id="selectRole" style="width: 100%;">                                                              
                            </select>                             
                            <!-- /.card-body -->                            
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
        <div class="modal-dialog modal-lg">
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
                                <label for="exampleInputEmail1">Role Name</label>
                                <input name="txtName" type="text" class="form-control" id=""
                                    placeholder="Enter " disabled>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Role Detail</label>
                                <input name='txtDetail' type="text" class="form-control" id=""
                                    placeholder="Enter ">
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

    <!-- Permission -->
    <div class="modal"  id="AddPermissionModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Add</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form id="formAddPermission" action="" method="post">

                        <div class="card-body">                            
                            <div class="form-group">
                                <label for="exampleInputEmail1">Permission</label>
                                <input name='txtPermission' type="text" class="form-control "
                                    placeholder="Enter ">
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
    <div class="modal" id="DeletePermissionModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Delete</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form id="formDeletePermission" action="" method="POST">

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
    <div class="modal" id="UpdatePermissionModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Update</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form id="formUpdatePermission" action="" method="POST">

                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">ID</label>
                                <input name="txtID" type="text" class="form-control" id=""
                                    placeholder="Enter " disabled>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Permission</label>
                                <input name='txtPermission' type="text" class="form-control" id=""
                                    placeholder="Enter ">
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
</div>
<!-- jQuery -->
<script src="<?php echo constant('URL') ?>public/assets/plugins/jquery/jquery.min.js"></script>
<script>
    
    $(document).ready(function () {
        roletable = $('#roletable').DataTable({
            dom: 'Bfrtip',
            responsive : true,
            "ajax": "<?php echo constant('URL') ?>role/getall",
            "columns": [
                {
                    "data": "name"
                },
                {
                    "data": "detail"
                },
                {
                    "data": "name",
                    //"defaultContent": "<a onclick='openModal()' href='#' class='btn btn-warning btn-sm' role='button' data-toggle='modal' data-target='#UpdateModal'>Update</a>"
                    "render": function (data, type, row, meta) {

                        return (
                            "<button onclick='openModal(this)' class='btn btn-warning btn-sm mr-1' role='button' data-toggle='modal' data-target='#UpdateModal' data_id='" +
                            data + "'>" +
                            "Update" +
                            "</button>" +
                            "<button onclick='openModal(this)' class='btn btn-danger btn-sm mr-1' role='button' data-toggle='modal' data-target='#DeleteModal' data_id='" +
                            data + "'>" +
                            "Delete" +
                            "</button>" +
                            "<button onclick='openModal(this)' class='btn btn-primary btn-sm' role='button' data-toggle='modal' data-target='#AddRoleModal' data_id='" +
                            data + "'>" +
                            "Permission" +
                            "</button>"
                        );

                    }
                }
            ]

        });

        permissiontable = $('#permissiontable').DataTable({
            dom: 'Bfrtip',
            responsive : true,
            "ajax": "<?php echo constant('URL') ?>permission/getAll",
            "columns": [
                {
                    "data": "id"
                },
                {
                    "data": "permission"
                },
                {
                    "data": "id",
                    //"defaultContent": "<a onclick='openModal()' href='#' class='btn btn-warning btn-sm' role='button' data-toggle='modal' data-target='#UpdateModal'>Update</a>"
                    "render": function (data, type, row, meta) {

                        return (
                            "<button onclick='openModalPermission(this)' class='btn btn-warning btn-sm mr-1' role='button' data-toggle='modal' data-target='#UpdatePermissionModal' data_id='" +
                            data + "'>" +
                            "Update" +
                            "</button>" +
                            "<button onclick='openModalPermission(this)' class='btn btn-danger btn-sm' role='button' data-toggle='modal' data-target='#DeletePermissionModal' data_id='" +
                            data + "'>" +
                            "Delete" +
                            "</button>"
                        );

                    }
                }
            ]

        });

        $("#formAdd").submit(function (e) {
            e.preventDefault();
            var form = $(this);
            var url = form.attr('action');
            $.ajax({
                type: "POST",
                url: url,
                data: form.serialize(), // serializes the form's elements.
                success: function (data) {
                    sweetAlertCRUD(data, "Add");
                    roletable.ajax.reload();
                }
            });

        })
        $("#formAddRolePermission").submit(function (e) {
            e.preventDefault();
            var form = $(this);
            var url = form.attr('action');
            $.ajax({
                type: "POST",
                url: url,
                data: form.serialize(), // serializes the form's elements.
                success: function (data) {
                    sweetAlertCRUD(data, "Add");
                    roletable.ajax.reload();
                }
            });

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
                    roletable.ajax.reload();
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
                    roletable.ajax.reload();

                }
            });

        })
        
        $("#formAddPermission").submit(function (e) {
            e.preventDefault();
            var form = $(this);
            var url = form.attr('action');
            $.ajax({
                type: "POST",
                url: url,
                data: form.serialize(), // serializes the form's elements.
                success: function (data) {
                    sweetAlertCRUD(data, "Add");
                    permissiontable.ajax.reload();
                }
            });

        })
        $("#formUpdatePermission").submit(function (e) {

            e.preventDefault();
            var form = $(this);
            var url = form.attr('action');
            $.ajax({
                type: "POST",
                url: url,
                data: form.serialize(), // serializes the form's elements.
                success: function (data) {
                    sweetAlertCRUD(data, "Update");
                    permissiontable.ajax.reload();
                }
            });

        })
        $("#formDeletePermission").submit(function (e) {
            e.preventDefault();
            var form = $(this);
            var url = form.attr('action');

            $.ajax({
                type: "POST",
                url: url,
                data: form.serialize(), // serializes the form's elements.
                success: function (data) {
                    sweetAlertCRUD(data, "Delete");
                    permissiontable.ajax.reload();

                }
            });

        })
        
        
    });
    function openModal(e){
        $getCurrentUrl = '<?php echo constant('URL') ?>role';
        name=$(e).attr('data_id');
        const x = document.forms["formUpdate"];
        $.ajax({
            type: "POST",
            url: '<?php echo constant('URL') ?>role/getByID/'+name,
            dataType: 'json',
            success: function(data){
                x.elements[0].value = data['data'][0].name;
                x.elements[1].value = data['data'][0].detail;
            }
        });
        $formUpdate = document.querySelector("#formUpdate");
        $formDelete = document.querySelector("#formDelete");
        $formAdd = document.querySelector("#formAdd");
        $formAddRolePermission = document.querySelector("#formAddRolePermission");
        $formAdd.action =  $getCurrentUrl+"/add";
        $formAddRolePermission.action = "<?php echo constant('URL') ?>permission/addrolepermission/"+name;
        $formUpdate.action = $getCurrentUrl+"/update/"+name;
        $formDelete.action = $getCurrentUrl+"/delete/"+name;

        // var selectRole = document.getElementById('selectRole');                         
        //     $.ajax({
        //         type: "POST",
        //         url: '<?php //echo constant('URL') ?>permission/getAll/',
        //         dataType: 'json',
        //         success: function(data){
        //             var rolepermission = data['data'];
        //             Object.keys(rolepermission).forEach(key => {                                                                                            
        //                 selectRole.options[key] = new Option(rolepermission[key].permission, rolepermission[key].id,false,false);
        //                 $.ajax({
        //                     type: "POST",
        //                     url: '<?php //echo constant('URL') ?>permission/getByIDRolePermission/'+name,
        //                     dataType: 'json',
        //                     success: function(data){
        //                         var permission = data['data'];
        //                         Object.keys(permission).forEach(key => {                                            
        //                             selectRole.options[key] = new Option(permission[key].permission, permission[key].permissionID,false,true);
        //                         });
        //                     }                                                    
        //                 });
        //             });
        //         }                                                                    
        //     });
        var selectRole = document.getElementById('selectRole');
        var permission;                         
            $.ajax({
                type: "POST",
                url: '<?php echo constant('URL') ?>permission/getAll/',
                dataType: 'json',
                success: function(data){                                        
                    permission = data['data'];                    
                    Object.keys(permission).forEach(key => {                                                                    
                        selectRole.options[key] = new Option(permission[key].permission, permission[key].id)
                    });                            
                    $.ajax({
                        type: "POST",
                        url: '<?php echo constant('URL') ?>permission/getByIDRolePermission/'+name,
                        dataType: 'json',
                        success: function(data){                                    
                            var role_permission = data['data'];                            
                            if(role_permission !== undefined)
                            {
                                Object.keys(permission).forEach(key1 => {                                
                                    Object.keys(role_permission).forEach(key2 => {                                    
                                        if(permission[key1].id == role_permission[key2].permissionID)
                                        {                                        
                                            permission[key1]['selected'] = 'selected';
                                        }                                    
                                    })
                                    permission['rolename'] = name;
                                });                                                                                        
                                Object.keys(permission).forEach(key => {                                
                                    if(permission[key]['selected'] == 'selected' && permission['rolename'] == name)
                                    {
                                        selectRole.options[key] = new Option(permission[key].permission, permission[key].id,false,true);
                                    }
                                    else if(permission['rolename'] == name)
                                    {
                                        selectRole.options[key] = new Option(permission[key].permission, permission[key].id,false,false);
                                    }
                                });                                                                                                
                            }                                                        
                        }                                                    
                    });                    
                }                
            });
        $('#selectRole').change(function(e) {            
            var selected = $(e.target).val();            
            console.log(selected);
            $.ajax({
                type: "POST",
                url: '<?php echo constant('URL') ?>permission/addRolePermission/'+name,
                data: {selected:selected}, // serializes the form's elements.
                success: function (data) {
                    sweetAlertCRUD(data, "Update");                    
                }
            });
        });
    }
    function openModalPermission(e){
        $getCurrentUrl = '<?php echo constant('URL') ?>permission';
        id=$(e).attr('data_id');
        const x = document.forms["formUpdatePermission"];
        $.ajax({
            type: "POST",
            url: '<?php echo constant('URL') ?>permission/getByID/'+id,
            dataType: 'json',
            success: function(data){
                x.elements[0].value = data['data'][0].id;
                x.elements[1].value = data['data'][0].permission;
            }
        });
        $formUpdatePermission = document.querySelector("#formUpdatePermission");
        $formDeletePermission = document.querySelector("#formDeletePermission");
        $formAddPermission = document.querySelector("#formAddPermission");
        $formAddPermission.action =  $getCurrentUrl+"/add";
        $formUpdatePermission.action = $getCurrentUrl+"/update/"+id;
        $formDeletePermission.action = $getCurrentUrl+"/delete/"+id;
    }
</script>

