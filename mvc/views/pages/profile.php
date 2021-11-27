<div class="col header">
    <!-- Widget: user widget style 1 -->
    <div class="card card-widget widget-user">
        <!-- Add the bg color to the header using any of the bg-* classes -->
        <div class="widget-user-header bg-info">
            <h3 class="widget-user-username">Alexander Pierce</h3>
            <h5 class="widget-user-desc">Founder & CEO</h5>
        </div>
        <div class="widget-user-image">
            <img class="img-circle elevation-2"
                src="<?php echo constant('URL') ?>public/assets/dist/img/user1-128x128.jpg" alt="User Avatar">
        </div>
        <div class="card-footer">
            <div class="row ">
                <ul class="nav nav-tabs">
                    <li class="nav-item col-sm-2">
                        <a class="nav-link active" data-toggle="tab" href="#confirm">
                            <div class="description-block">
                                <h5 class="description-header">3,200</h5>
                                <span class="description-text">Chờ xác nhận</span>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item col-sm-2">
                        <a class="nav-link" data-toggle="tab" href="#shipping">
                            <div class="description-block">
                                <h5 class="description-header">3,200</h5>
                                <span class="description-text">Đang giao</span>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item col-sm-2">
                        <a class="nav-link" data-toggle="tab" href="#rating">
                            <div class="description-block">
                                <h5 class="description-header">3,200</h5>
                                <span class="description-text">Đánh giá</span>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item col-sm-2">
                        <a class="nav-link" data-toggle="tab" href="#history">
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
            <table id="ordertable" class="table table-striped dt-responsive nowrap display">
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
        <div id="shipping" class=" tab-pane fade"><br>
            <table id="shippingTable">
                <thead>
                    <tr>Hello</tr>
                    <tr>Hello</tr>
                    <tr>Hello</tr>
                </thead>
                <tbody>
                    <tr>Hello</tr>
                    <tr>Hello</tr>
                    <tr>Hello</tr>
                </tbody>
            </table>
        </div>
        <div id="rating" class=" tab-pane fade"><br>
            <h3>Menu 2</h3>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam
                rem aperiam.</p>
        </div>
        <div id="history" class=" tab-pane fade"><br>
            <table id="historyTable">

            </table>
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
        var order =function () {
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
        ordertable = $('#ordertable').DataTable({
            "scrollY": "500px",
            "scrollCollapse": true,
            "ajax": function (d, cb) {
                // fetch('<?php echo constant('URL') ?>order/getbyuser')
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
                        console.log(data);
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
                        if (status >= 0 && status <= 2) {
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