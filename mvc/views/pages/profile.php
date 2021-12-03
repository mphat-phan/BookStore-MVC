<div class="col header">
    <!-- Widget: user widget style 1 -->
    <div class="card card-widget widget-user">
        <!-- Add the bg color to the header using any of the bg-* classes -->
        <div class="widget-user-header bg-info">
            <h3 class="widget-user-username"><span id="showusername"></span></h3>
            <h6 class="widget-user-desc">Welcome To Our Shop</h6>
        </div>
        <div class="widget-user-image" id="showavatar">            
        </div>
        <div class="card-footer">
            <div class="row ">
                <ul class="nav nav-tabs">
                    <li class="nav-item col-sm-2">
                        <a class="nav-link tabclick active" data-toggle="tab" data-name="confirm" href="#confirm">
                            <div class="description-block">
                                <h5 class="description-header">3,200</h5>
                                <span class="description-text">Chờ xác nhận</span>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item col-sm-2">
                        <a class="nav-link tabclick" data-toggle="tab" data-name="waiting" href="#waiting">
                            <div class="description-block">
                                <h5 class="description-header">3,200</h5>
                                <span class="description-text">Đang giao</span>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item col-sm-2">
                        <a class="nav-link tabclick" data-toggle="tab" href="#rating">
                            <div class="description-block">
                                <h5 class="description-header">3,200</h5>
                                <span class="description-text">Đánh giá</span>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item col-sm-2">
                        <a class="nav-link tabclick" data-toggle="tab" href="#allorder">
                            <div class="description-block">
                                <h5 class="description-header">3,200</h5>
                                <span class="description-text">Lịch sử đơn hàng</span>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item col-sm-2">
                        <a class="nav-link" data-toggle="tab" href="#setting">
                            <div class="description-block">
                                <h5 class="description-header"><i class="fas fa-cog"></i></h5>
                                <span class="description-text">Setting</span>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- /.row -->
        </div>
    </div>
    <div class="tab-content">
        <div id="confirm" class=" tab-pane active"><br>
            <table id="ordertableconfirm" class="table table-striped dt-responsive nowrap display">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Date</th>
                        <th>SubTotal</th>
                        <th>Shipping fee</th>
                        <th>Discount</th>
                        <th>Total</th>
                        <th>#</th>
                        <th>Detail</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
                <tfoot>
                    <tr>
                        <th>id</th>
                        <th>Date</th>
                        <th>SubTotal</th>
                        <th>Shipping fee</th>
                        <th>Discount</th>
                        <th>Total</th>
                        <th>#</th>
                        <th>Detail</th>
                    </tr>

                </tfoot>
            </table>
        </div>    
        <div id="waiting" class=" tab-pane fade"><br>
            <table id="ordertablewaiting" class="table table-striped dt-responsive nowrap display">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Date</th>
                        <th>SubTotal</th>
                        <th>Shipping fee</th>
                        <th>Discount</th>
                        <th>Total</th>
                        <th>#</th>
                        <th>Detail</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
                <tfoot>
                    <tr>
                        <th>id</th>
                        <th>Date</th>
                        <th>SubTotal</th>
                        <th>Shipping fee</th>
                        <th>Discount</th>
                        <th>Total</th>
                        <th>#</th>
                        <th>Detail</th>
                    </tr>

                </tfoot>

            </table>
        </div>
        <div id="rating" class=" tab-pane fade"><br>
            <p>Rating</p>
        </div>
        <div id="allorder" class=" tab-pane fade"><br>
            <table id="ordertable" class="table table-striped dt-responsive nowrap display">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Date</th>
                        <th>SubTotal</th>
                        <th>Shipping fee</th>
                        <th>Discount</th>
                        <th>Total</th>
                        <th>Status</th>
                        <th>#</th>
                        <th>Detail</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
                <tfoot>
                    <tr>
                        <th>id</th>
                        <th>Date</th>
                        <th>SubTotal</th>
                        <th>Shipping fee</th>
                        <th>Discount</th>
                        <th>Total</th>
                        <th>Status</th>
                        <th>#</th>
                        <th>Detail</th>
                    </tr>
                </tfoot>
            </table>
        </div>
        <div id="setting" class="tab-pane fade">
            
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
                            <input name="txtName" type="text" class="form-control " placeholder="Enter " disabled>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input name="txtName" type="text" class="form-control " placeholder="Enter " disabled>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Phone</label>
                            <input name="txtName" type="text" class="form-control " placeholder="Enter " disabled>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input name="txtName" type="text" class="form-control " placeholder="Enter " disabled>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Address</label>
                            <input name="txtName" type="text" class="form-control " placeholder="Enter " disabled>
                        </div>

                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<div class="modal" id="InfoOrder">
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
                        <h3 class="card-title">Order Detail table</h3>

                    </div>

                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="orderdetailtable" class="table table-striped dt-responsive nowrap display">
                            <thead>
                                <tr>
                                    <th>OrderID</th>
                                    <th>ProductID</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Subtotal</th>
                                    <th>Discount</th>
                                    <th>Total</th>
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
                                    <th>Subtotal</th>
                                    <th>Discount</th>
                                    <th>Total</th>
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

<script src="<?php echo constant('URL') ?>public/assets/plugins/jquery/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        var order = function () {
            var tmp = null;
            $.ajax({
                url: '<?php echo constant('URL') ?>order/getbyuser',
                type: 'post',
                async: false,
                global: false,
                dataType: 'json',
                success: function(data) {
                    tmp = data;
                }
            });
            return tmp;
	    };
        order = $('#ordertable').DataTable({
                "scrollY": "500px",
                "scrollCollapse": true,
                "ajax": function (d, cb) {
                    // fetch('<?php //echo constant('URL') ?>order/getbyuser')
                    //     .then(response => response.json())
                    //     .then(data => cb(data));
                    var data = null;
                    $.ajax({
                        url: '<?php echo constant('URL') ?>order/getbyuser',
                        type: 'post',
                        async: false,
                        global: false,
                        dataType: 'json',
                        success: function(data) {
                            //console.log(data);
                            cb(data) = data;                        
                        }
                    });
                },
                "columns": [{
                        "data": "id"
                    },
                    {
                        "data": "date"
                    },
                    {
                        "data": "subtotal"
                    },
                    {
                        "data": "shippingfee"
                    },
                    {
                        "data": "discount"
                    },
                    {
                        "data": "total"
                    },
                    {
                        "data": null,
                        "render": function (data, type, full) {
                            var id = full.id;
                            var status = full.status;
                            if (status == 0) {
                                return (
                                    "<button onclick='' class='btn btn-danger btn-sm' role='button' data-toggle='modal' data-target=''>" +
                                    "Chưa xác nhận" +
                                    "</button>"
                                );
                            }
                            else if (status == 1)
                            {
                                return (
                                    "<button onclick='' class='btn btn-primary btn-sm' role='button' data-toggle='modal' data-target=''>" +
                                    "Đã xác nhận" +
                                    "</button>"
                                );
                            }
                            else if (status == 2)
                            {
                                return (
                                    "<button onclick='' class='btn btn-primary btn-sm' role='button' data-toggle='modal' data-target=''>" +
                                    "Đã thanh toán" +
                                    "</button>"
                                );
                            }
                            else if (status == 3)
                            {
                                return (
                                    "<button onclick='' class='btn btn-warning btn-sm' role='button' data-toggle='modal' data-target=''>" +
                                    "Đang giao" +
                                    "</button>"
                                );
                            }
                            else if (status == 4)
                            {
                                return (
                                    "<button onclick='' class='btn btn-success btn-sm' role='button' data-toggle='modal' data-target=''>" +
                                    "Đã giao" +
                                    "</button>"
                                );
                            }
                            else
                            {
                                return (
                                "<button onclick='' class='btn btn-secondary btn-sm' role='button' data-toggle='modal' data-target='' data_id='" +
                                id + "'>" +
                                "Đã hủy" +
                                "</button>"
                                );    
                            }
                            return (
                                "<button onclick='' class='btn btn-secondary btn-sm' role='button' data-toggle='modal' data-target='' data_id='" +
                                id + "'>" +
                                "" +
                                "</button>"
                            );

                        }
                    },
                    {

                        "data": null,
                        "render": function (data, type, full) {
                            var id = full.id;
                            var status = full.status;
                            if (status == 0) {
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

                        "data": null,
                        "render": function (data, type, full) {
                            var id = full.id;

                            return (
                                "<button onclick='openDetail(this)' class='btn btn-primary btn-sm' role='button' data-toggle='modal' data-target='#InfoOrder' data_id='" +
                                id + "'>" +
                                "Show Detail Order" +
                                "</button>"
                            );

                        }
                    }
                ],

            });        
        function ordertable(action, status) {                    
            $('#ordertable'+action).DataTable({
                "scrollY": "500px",
                "scrollCollapse": true,
                "ajax": function (d, cb) {
                    // fetch('<?php //echo constant('URL') ?>order/getbyuser')
                    //     .then(response => response.json())
                    //     .then(data => cb(data));
                    var data = null;
                    $.ajax({
                        url: '<?php echo constant('URL') ?>order/getOrderByStatus/'+status,
                        type: 'post',
                        async: false,
                        global: false,
                        dataType: 'json',
                        success: function(data) {
                            //console.log(data);
                            cb(data) = data;                        
                        }
                    });
                },
                "columns": [{
                        "data": "id"
                    },
                    {
                        "data": "date"
                    },
                    {
                        "data": "subtotal"
                    },
                    {
                        "data": "shippingfee"
                    },
                    {
                        "data": "discount"
                    },
                    {
                        "data": "total"
                    },
                    {

                        "data": null,
                        "render": function (data, type, full) {
                            var id = full.id;
                            var status = full.status;
                            if (status == 0) {
                                return (
                                    "<button onclick='openModal(this)' class='btn btn-danger btn-sm' role='button' data-toggle='modal' data-target='#DeleteModal' data_id='" +
                                    id + "'>" +
                                    "Hủy đơn hàng" +
                                    "</button>"
                                );
                            }
                            else if (status == 3)
                            {
                                return (
                                    "<button onclick='' class='btn btn-secondary btn-sm' role='button' data-toggle='modal' data-target='' data_id='" +
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

                        "data": null,
                        "render": function (data, type, full) {
                            var id = full.id;

                            return (
                                "<button onclick='openDetail(this)' class='btn btn-primary btn-sm' role='button' data-toggle='modal' data-target='#InfoOrder' data_id='" +
                                id + "'>" +
                                "Show Detail Order" +
                                "</button>"
                            );

                        }
                    }
                ],

            });
        }                            
        ordertable('confirm',0);
        ordertable('waiting',3);
        // $(".tabclick").on("click", function() {
        //     var name = $(this).attr("data-name");
        //     if(name == 'confirm')
        //     {
        //         ordertable(name,0);
        //     }
        //     else if(name == 'waiting')
        //     {
        //         ordertable(name,3);
        //     }
        // }); 
        function settingprofile() {
            $.ajax({
                type: 'post',
                url: '<?php echo constant('URL') ?>home/getUser',
                data: {username:username},
                success: function (data) {
                    document.getElementById("setting").innerHTML = `<div class="container bootstrap snippet">
                                    <div class="row">
                                        <div class="col-sm-10 ml-4"><h1>`+ JSON.parse(data).data[0].username +`</h1></div>    
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3"><!--left col-->        
                                            <div class="text-center">
                                                <img src="<?php echo constant('URL') ?>public/assets/dist/img/`+ JSON.parse(data).data[0].image +`" class="avatar img-circle img-thumbnail" alt="avatar">                                                
                                                <input type="file" class="text-center center-block file-upload">                                                
                                            </div></hr><br>                         
                                        </div>
                                        <div class="col-sm-5">                                    
                                            <hr>
                                            <form class="form" action="" method="post" id="profilesetting">
                                                <div class="form-group">
                                                    <label for="Changepassword"><h2>Profile setting</h2></label>
                                                </div>                      
                                                <div class="form-group">                        
                                                    <div class="col-xs-3">
                                                        <label for="last_name"><h4>Full Name</h4></label>
                                                        <input type="text" class="form-control" name="fullname" id="fullname" placeholder="Full name" value="`+ JSON.parse(data).data[0].name +`" title="enter your name if any.">
                                                    </div>
                                                </div>          
                                                <div class="form-group">                          
                                                    <div class="col-xs-6">
                                                        <label for="phone"><h4>Phone</h4></label>
                                                        <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter phone" value="`+ JSON.parse(data).data[0].phone +`" title="enter your phone number if any.">
                                                        </div>
                                                </div>
                                                <div class="form-group">                          
                                                    <div class="col-xs-6">
                                                        <label for="date"><h4>Birth</h4></label>
                                                        <input type="date" class="form-control" name="birth" id="birth" placeholder="Enter birth" value="`+ JSON.parse(data).data[0].birth +`" title="enter your date">
                                                    </div>
                                                </div>                                
                                                <div class="form-group">                          
                                                    <div class="col-xs-6">
                                                        <label for="email"><h4>Email</h4></label>
                                                        <input type="email" class="form-control" name="email" id="email" placeholder="your@gmail.com" value="`+ JSON.parse(data).data[0].email +`" title="enter your email.">
                                                    </div>
                                                </div>
                                                <div class="form-group">                          
                                                    <div class="col-xs-6">
                                                        <label for="address"><h4>Location</h4></label>
                                                        <input type="address" class="form-control" name="address" id="location" placeholder="somewhere" value="`+ JSON.parse(data).data[0].address +`" title="enter a location">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-xs-12">
                                                            <br>
                                                            <button class="btn btn-lg btn-success" id="save" type="button"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>                               	
                                                        </div>
                                                </div>                      
                                            </form>
                                        
                                        <hr>
                                        
                                        </div><!--/tab-pane-->
                                        <div class="col-sm-4">                                    
                                            <hr>
                                            <form class="form" action="" method="post" id="accountsetting">                      
                                                <div class="form-group">
                                                    <label for="Changepassword"><h2>Change Password</h2></label>
                                                </div>
                                                <div id="message"></div>
                                                <div class="form-group">                          
                                                    <div class="col-xs-6">
                                                        <label for="password"><h4>Password</h4></label>
                                                        <input type="password" class="form-control" name="password" id="password" placeholder="password" title="enter your password.">
                                                    </div>
                                                </div>
                                                <div class="form-group">                          
                                                    <div class="col-xs-6">
                                                        <label for="password2"><h4>Retype Password</h4></label>
                                                        <input type="password" class="form-control" name="retypepassword" id="password2" placeholder="password2" title="enter your password2.">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-xs-12">
                                                            <br>
                                                            <button class="btn btn-lg btn-success" type="button" id="savepassword"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>                               	
                                                        </div>
                                                </div>
                                            </form>
                                        
                                        <hr>
                                        
                                        </div><!--/tab-pane-->                           
                                    </div><!--/col-9-->
                                </div><!--/row-->`
                }
            })
        }
        $(document).on('click','#save', function () {                    
            var form = $('#profilesetting');                        
            $.ajax({
                type: "POST",
                url: '<?php echo constant('URL') ?>home/updateprofile',
                data: form.serialize(), // serializes the form's elements.
                success: function (data) {
                    sweetAlertCRUD(data, "Update");                    
                }
            });
        });
        $(document).on('click','#savepassword', function () {                    
            var password = $('#password').val();
            var retypepassword = $('#password2').val();
            if(password == retypepassword && (password != '' || retypepassword != ''))
            {
                $.ajax({
                    type: "POST",
                    url: '<?php echo constant('URL') ?>home/UpdatePassword',
                    data: {password:password,retypepassword:retypepassword},
                    success: function (data) {
                        sweetAlertCRUD(data, "Update");                    
                    }
                });                
            }
            else if(password == '' || retypepassword == '')
            {
                $('#message').html('<p class="alert alert-danger"><strong>Please input</p>');
            }
            else
            {
                $('#message').html('<p class="alert alert-warning"><strong>Your password do not match</p>');
            }
            
        });
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
                    console.log(data);
                    sweetAlertCRUD(data, "Delete");
                    ordertable.ajax.reload();

                }
            });

        })
        

        var username = '<?php echo $username ?>';        
        if(username != '')
        {
            $.ajax({
                type: "POST",
                url: '<?php echo constant('URL')?>home/getUser',
                data: {username:username},
                success: function(data)
                {                                            
                    document.getElementById("showusername").innerHTML = JSON.parse(data).data[0].name; 
                    document.getElementById("showavatar").innerHTML =  '<img class="img-circle elevation-2" src="<?php echo constant('URL') ?>public/assets/dist/img/'+ JSON.parse(data).data[0].image +'" alt="User Avatar">';                   
                }
            });
        }
        settingprofile();
    })

    function openDetail(e) {
        id = $(e).attr('data_id');
        orderdetailtable = $('#orderdetailtable').DataTable({
            dom: 'Bfrtip',
            "scrollY": "500px",
            "scrollCollapse": true,
            "ajax": "<?php echo constant('URL') ?>orderdetail/getbyid/" + id,
            "columns": [{
                    "data": "orderID"
                },
                {
                    "data": "productID",
                    "render": function (data, type, row, meta) {
                        return (
                            data.name
                        );
                    }
                },
                {
                    "data": "quantity"
                },
                {
                    "data": "price"
                },
                {
                    "data": "subtotal"
                },
                {
                    "data": "discount"
                },
                {
                    "data": null,
                    "render": function (data, type, full) {
                        var subtotal = full.quantity * full.price;
                        var total = subtotal - subtotal * full.discount / 100;
                        return (
                            total
                        );
                    }
                }

            ],

        });
        orderdetailtable.destroy();

    }

    function openModal(e) {

        $getCurrentUrl = '<?php echo constant('URL') ?>order';
        id = $(e).attr('data_id');

        $formDelete = document.querySelector("#formDelete");
        $formUpdate = document.querySelector("#formUpdate");
        $formInfo = document.querySelector("#formInfo");
        const x = document.forms["formInfo"];


        $.ajax({
            type: "POST",
            url: '<?php echo constant('URL') ?>' + $(e).attr('data') + '/getByUsername/' + id,
            dataType: 'json',
            success: function (data) {
                x.elements[0].value = data['data'][0].id;
                x.elements[1].value = data['data'][0].name;
                x.elements[2].value = data['data'][0].phone;
                x.elements[3].value = data['data'][0].email;
                x.elements[4].value = data['data'][0].address;



            }
        });
        $formDelete.action = $getCurrentUrl + "/delete/" + id;
        $formUpdate.action = $getCurrentUrl + "/update/" + id;
    }


</script>