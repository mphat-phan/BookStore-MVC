
<section class="invoice">
  <!-- title row -->
  <div class="row">
    <div class="col-12">
      <h2 class="page-header">
        <i class="fas fa-globe"></i> Bookstore, Inc.
        <small id="txtDate" class="float-right">

        </small>
      </h2>
    </div>
    <!-- /.col -->
  </div>
  <!-- info row -->
  <div class="row invoice-info">
    <div class="col-sm-4 invoice-col">
      From
      <address>
        <strong>Bookstore, Inc.</strong><br>
        Address:Đại học Sài Gòn,TPHCM<br>
       
        Phone: 0123456789<br>
        Email: dzeamtechie@gmail.com
      </address>
    </div>
    <!-- /.col -->
    <div class="col-sm-4 invoice-col">
      To
      <address>
        Customer name:<strong id="txtCustomerName"></strong><br>
        Address:<b id="txtAddress"></b><br>
        Phone:<b id="txtPhone"></b><br>
        Email<b id="txtEmail"></b><br>
      </address>
    </div>
    <!-- /.col -->
    <div class="col-sm-4 invoice-col">
      Order ID:<b id="txtOrderID"></b><br>
      Payment Due:<b id="txtOrderDate"></b><br>
      Employee User:<b id="txtEmployee"></b><br>
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->

  <!-- Table row -->
  <div class="row">
    <div class="col-12 table-responsive">
      <table id="orderdetailtable" style="width:100%!important" class="table table-striped">
        <thead>
          <tr>
            <th>Product</th>
            <th>Qty</th>
            <th>Price</th>
            <th>Sub Total</th>
          </tr>
        </thead>
        <tbody>
        </tbody>
        <tfoot>
          <tr>
            <th>Product</th>
            <th>Qty</th>
            <th>Price</th>
            <th>Sub Total</th>
          </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->

  <div class="row">
    <!-- accepted payments column -->
    
    <!-- /.col -->
    <div class="col-6">
      <p class="lead">Amount Due 2/22/2014</p>

      <div class="table-responsive">
        <table class="table">
          <tr>
            <th style="width:50%">Subtotal</th>
            <td id="">$</td>
          </tr>
          <tr>
            <th>Tax (9.3%)</th>
            <td>$</td>
          </tr>
          <tr>
            <th>Shipping:</th>
            <td>$</td>
          </tr>
          <tr>
            <th>Sale:</th>
            <td>$</td>
          </tr>
          <tr>
            <th>Total:</th>
            <td id="txtTotal"></td>
          </tr>

          <tr>
            <th>Tiền khách đưa:</th>
            <td id="txtMoneyInput"></td>
          </tr>
          <tr>
            <th>Tiền thối:</th>
            <td id="txtMoneyOutput"></td>
          </tr>
        </table>
      </div>
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>

</div>

<!-- /.content -->

<!-- ./wrapper -->
<!-- Page specific script -->
<script src="<?php echo constant('URL') ?>public/assets/plugins/jquery/jquery.min.js"></script>
<script>
  var pageURL = window.location.href;
  var lastURLSegment = pageURL.substr(pageURL.lastIndexOf('/') + 1);
  var customerID;
  $(document).ready(function () {
    orderdetailtable = $('#orderdetailtable').DataTable({
      "ajax": "<?php echo constant('URL') ?>orderdetail/getbyid/"+lastURLSegment,
      "paging":   false,
      "searching": false,
      "scrollX" : false,
      "columns": [
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
          "data": null,
          "render": function (data, type, full) {
            var total = full.quantity*full.price;
            return (
              total

            );
          }
        }

      ],

    });
 
    $.ajax({
                type: "POST",
                url: '<?php echo constant('URL')?>order/getbyid/'+lastURLSegment,
                dataType: 'json',
                success: function(data){
                    var order = data['data'];
                  
                    $("#txtOrderID").html(order[0].id)
                    $("#txtOrderDate").html(order[0].date)
                    $("#txtTotal").html(order[0].total+" VND")
                    $("#txtMoneyInput").html(order[0].moneyinput+" VND")
                    $("#txtMoneyOutput").html(order[0].moneyoutput+" VND")
                    $("#txtEmployee").html(order[0].employee_username)
                    //txtPhonetxtEmailtxtOrderIDtxtOrderDate 
                    //txtTotaltxtMoneyInputtxtMoneyOutput
                }

    });
    $.ajax({
      type: "POST",
      url: '<?php echo constant('URL')?>customer/getbyid/14',
      dataType: 'json',
      success: function(data){
        var customer = data['data'];
        console.log(customer);
        $("#txtCustomerName").html(customer[0].name);
        $("#txtPhone").html(customer[0].phone);
        $("#txtEmail").html(customer[0].email);

      }
    });
    setTimeout(function(){ 
      window.addEventListener("load", window.print());
    }, 3000);

    
  });
  
</script>