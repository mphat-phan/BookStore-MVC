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
                            <button type="button" onclick="" href="#" class="btn btn-success btn-sm float-right mr-1" role="button"
                                data-toggle="modal" data-target="#">Import</button>
                        </div>

                        <!-- /.card-header -->
                        <div  class="card-body">
                            <table id="usertable" class="table table-bordered table-striped dt-responsive nowrap display">
                                <thead>
                                    <tr>                                        
                                        <th>Username</th>
                                        <th>Password</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>#</th>                                        
                                    </tr>
                                </thead>
                                <tbody>                                    
                                </tbody>
                                <tfoot>
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th>Date</th>
                                    <th>Status</th>                                    
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
<div class="modal" id="AddUserModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Add User Account</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form id="formAddUser" action="" method="post">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Employee</label>
                            <select class="form-control" name="employee" data-placeholder="Select a State" data-dropdown-css-class="select2-blue" id="selectEmployee">                                
                            </select>                         
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
<div class="modal" id="AddModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Add Role</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form id="formAdd" action="" method="post">
                    
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Role</label>
                            <select class="form-control select2" name="selectRole[]" multiple="multiple" data-placeholder="Select a State" data-dropdown-css-class="select2-blue" id="selectRole" style="width: 100%;">                                                              
                            </select>                         
                        </div>                                               
                        <!-- /.card-body -->                        
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<div class="modal" id="LockModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Lock</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form id="formLock" action="" method="POST">
                    
                    <div class="card-body">
                        <div class="form-check">
                            <input name="checkLock" id="checkLock" type="checkbox" class="form-check-input" required>
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
<div class="modal" id="UnlockModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Unlock</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form id="formUnlock" action="" method="POST">
                    
                    <div class="card-body">
                        <div class="form-check">
                            <input name="checkUnlock" id="checkLock" type="checkbox" class="form-check-input" required>
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
                            <input name="checkDelete" id="checkDelete" type="checkbox" class="form-check-input" required>
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
                            <input name='txtUserPassword' value="" type="password" class="form-control formUpdateInput" placeholder="Enter " required>
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
<script src="<?php echo constant('URL') ?>public/assets/plugins/jquery/jquery.min.js"></script>
<script>
    
    $(document).ready(function () { 
               
        usertable = $('#usertable').DataTable({            
            dom: 'Bfrtip',
            "ajax": "<?php echo constant('URL') ?>user/getall",
            "columns": [{
                    "data": "username"
                },
                {
                    "data": "password",
                    "render": function (data, type, row, meta) {                        
                        return (                                                        
                            "**************"
                        );
                    }
                },
                {
                    "data": "date"
                },
                {
                    "data": null,
                    "render": function (data, type, full) {                        
                        var username = full.username;
                        var status = full.status;
                        if(status==1)
                        {
                            return (                                
                                "<button type='button' onclick='openModal(this)' href='#' class='btn btn-primary btn-sm mr-1' role='button'data-toggle='modal' data-target='#LockModal' data_id='"+ username +"'>Lock</button>"
                            );
                        }
                        else if (status==0)
                        {
                            return (
                                "<button type='button' onclick='openModal(this)' href='#' class='btn btn-primary btn-sm mr-1' role='button'data-toggle='modal' data-target='#UnlockModal' data_id='"+ username +"'>Unlock</button>"
                            );
                        }                        
                    }
                },                
                {                    
                    "data": "username",                    
                    //"defaultContent": "<a onclick='openModal()' href='#' class='btn btn-warning btn-sm' role='button' data-toggle='modal' data-target='#UpdateModal'>Update</a>"
                    "render": function (data, type, row, meta) {                        
                        return (                            
                            "<button onclick='openModal(this)' class='btn btn-info btn-sm mr-1' role='button' data-toggle='modal' data-target='#UpdateModal' data_id='" +
                            data + "'>" +
                            "Reset Password" +
                            "</button>" +
                            "<button onclick='openModal(this)' class='btn btn-danger btn-sm mr-1' role='button' data-toggle='modal' data-target='#DeleteModal' data_id='" +
                            data + "'>" +
                            "Delete" +
                            "</button>" +                            
                            "<button type='button' onclick='openModal(this)' href='#' class='btn btn-primary btn-sm' role='button'data-toggle='modal' data-target='#AddModal' data_id='" + data + "'>Role</button>"
                            
                        );
                    }
                }                
            ],

        });
                

        $("#formAdd").submit(function (e) {
            e.preventDefault();
            var form = $(this);
            console.log(form.serialize());
            var url = form.attr('action');
            $.ajax({
                type: "POST",
                url: url,
                data: form.serialize(), // serializes the form's elements.
                success: function (data) {
                    sweetAlertCRUD(data, "Add");
                    usertable.ajax.reload();
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
                    usertable.ajax.reload();
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
                    usertable.ajax.reload();

                }
            });

        })

        $("#formLock").submit(function (e) {
            e.preventDefault();
            var form = $(this);
            var url = form.attr('action');
            $.ajax({
                type: "POST",
                url: url,
                data: form.serialize(), // serializes the form's elements.
                success: function (data) {
                    sweetAlertCRUD(data, "Update");
                    usertable.ajax.reload();

                }
            });

        })

        $("#formUnlock").submit(function (e) {
            e.preventDefault();
            var form = $(this);
            var url = form.attr('action');
            $.ajax({
                type: "POST",
                url: url,
                data: form.serialize(), // serializes the form's elements.
                success: function (data) {
                    sweetAlertCRUD(data, "Update");
                    usertable.ajax.reload();

                }
            });

        })            
        $("#formAddUser").submit(function (e) {
            e.preventDefault();
            var form = $(this);
            var url = form.attr('action');
            $.ajax({
                type: "POST",
                url: url,
                data: form.serialize(), // serializes the form's elements.
                success: function (data) {
                    sweetAlertCRUD(data, "add");
                    usertable.ajax.reload();

                }
            });

        })        
    });          
    function openModal(e){
        $getCurrentUrl = '<?php echo constant('URL') ?>user';
        id=$(e).attr('data_id');
        const x = document.forms["formUpdate"];
        var username,password;
        $.ajax({
            type: "POST",
            url: '<?php echo constant('URL') ?>user/getByID/'+id,
            dataType: 'json',
            success: function(data){
                console.log(data['data'][0].id);
                x.elements[0].value = data['data'][0].username;
                x.elements[1].value = data['data'][0].password;
            }
        });
        $formUpdate = document.querySelector("#formUpdate");
        $formDelete = document.querySelector("#formDelete");
        $formAdd = document.querySelector("#formAdd");
        $formLock = document.querySelector("#formLock");
        $formUnlock = document.querySelector("#formUnlock");
        $formAddUser = document.querySelector("#formAddUser");

        $formAdd.action =  $getCurrentUrl+"/add/"+id;
        $formUpdate.action = $getCurrentUrl+"/update/"+id;
        $formDelete.action = $getCurrentUrl+"/delete/"+id;
        $formLock.action = $getCurrentUrl+"/updateStatus/"+id;
        $formUnlock.action = $getCurrentUrl+"/updateStatus/"+id;
        $formAddUser.action = $getCurrentUrl+"/updateUsername/"+id;

        var selectRole = document.getElementById('selectRole');
        var role;                         
            $.ajax({
                type: "POST",
                url: '<?php echo constant('URL') ?>Role/getAll/',
                dataType: 'json',
                success: function(data){                                        
                    role = data['data'];                    
                    Object.keys(role).forEach(key => {                                                                    
                        selectRole.options[key] = new Option(role[key].name, role[key].name)
                    });                            
                    $.ajax({
                        type: "POST",
                        url: '<?php echo constant('URL') ?>User/getUserRoleByID/'+id,
                        dataType: 'json',
                        success: function(data){                                    
                            var userrole = data['data'];                            
                            if(userrole !== undefined)
                            {
                                Object.keys(role).forEach(key1 => {                                
                                    Object.keys(userrole).forEach(key2 => {                                    
                                        if(role[key1].name == userrole[key2].rolename)
                                        {                                        
                                            role[key1]['selected'] = 'selected';
                                        }                                    
                                    })
                                    role['username'] = id;
                                });                                                                                        
                                Object.keys(role).forEach(key => {                                
                                    if(role[key]['selected'] == 'selected' && role['username'] == id)
                                    {
                                        selectRole.options[key] = new Option(role[key].name, role[key].name,false,true);
                                    }
                                    else if(role['username'] == id)
                                    {
                                        selectRole.options[key] = new Option(role[key].name, role[key].name,false,false);
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
                url: '<?php echo constant('URL') ?>user/add/'+id,
                data: {selected:selected}, // serializes the form's elements.
                success: function (data) {
                    sweetAlertCRUD(data, "Update");
                    roletable.ajax.reload();
                }
            });
        });       
    }
        
</script>





