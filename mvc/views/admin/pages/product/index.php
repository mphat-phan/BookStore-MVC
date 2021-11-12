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
                        <li class="breadcrumb-item active">Sản phẩm</li>
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
                            <h3 class="card-title">Product table</h3>

                            <button type="button" onclick="openModal('')" href="#"
                                class="btn btn-primary btn-sm float-right" role="button" data-toggle="modal"
                                data-target="#AddModal">Add</button>

                            <button type="button" onclick="" href="#" class="btn btn-success btn-sm float-right mr-1"
                                role="button" data-toggle="modal" data-target="#">Import</button>
                        </div>


                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="producttable" class="table table-bordered table-striped dt-responsive nowrap display">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                        <th>PageNumber</th>
                                        <th>Image</th>
                                        <th>Category</th>
                                        <th>Author</th>
                                        <th>Publisher</th>
                                        <th>SaleID</th>
                                        <th>#</th>

                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>id</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                        <th>PageNumber</th>
                                        <th>Image</th>
                                        <th>Category</th>
                                        <th>Author</th>
                                        <th>Publisher</th>
                                        <th>SaleID</th>
                                        <th>#</th>
                                    </tr>
                                    
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
    <div class="modal"  id="AddModal">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">

                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Add</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form id="formAdd" action="" method="post" enctype="multipart/form-data">

                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Product Name</label>
                                <input name="txtName" type="text" class="form-control "
                                    placeholder="Enter " required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Product Description</label>
                                <input name="txtDescription" type="text" class="form-control "
                                    placeholder="Enter " required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Product Quantity</label>
                                <input name="txtQuantity" type="number" class="form-control "
                                    value="0" disabled>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Product Price</label>
                                <input name="txtPrice" type="number" class="form-control "
                                    placeholder="Enter " required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Product Page Number</label>
                                <input name="txtPagenumber" type="number" class="form-control "
                                    placeholder="Enter ">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Product Image</label>
                                <input name="txtImage" id="txtImage" type="file" accept="image/*" class="form-control "
                                    placeholder="Enter ">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Author</label>
                                <select name="selectAuthor" class="form-control select2" id="selectAuthor" style="width: 100%;">
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Publisher</label>
                                <select name="selectPublisher" class="form-control select2" id="selectPublisher" style="width: 100%;">
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">SaleID</label>
                                <select name="selectSale" class="form-control select2" id="selectSale" style="width: 100%;">
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
<div class="modal" id="AddCategoryModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Add Category</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form id="formAdd" action="" method="post">
                    
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Category</label>
                            <select class="form-control select2" name="selectCategory[]" multiple="multiple" data-placeholder="Select a State" data-dropdown-css-class="select2-blue" id="selectCategory" style="width: 100%;">                                                              
                            </select>                         
                        </div>                                               
                        <!-- /.card-body -->                        
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
    <div class="modal" id="UpdateModal">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">

                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Update</h3>
                    </div>
                    <!-- /.card-header --> 
                    <!-- form start -->
                    <form id="formUpdate" action="" method="POST" enctype="multipart/form-data">

                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Product Name</label>
                                <input name="txtName" type="text" class="form-control "
                                    placeholder="Enter " required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Product Description</label>
                                <input name="txtDescription" type="text" class="form-control "
                                    placeholder="Enter " required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Product Quantity</label>
                                <input name="txtQuantity" type="number" class="form-control "
                                    placeholder="Enter " disabled>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Product Price</label>
                                <input name="txtPrice" type="number" class="form-control "
                                    placeholder="Enter " required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Product Page Number</label>
                                <input name="txtPagenumber" type="number" class="form-control "
                                    placeholder="Enter " >
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Product Image</label>
                                <input id="txtImage" name="txtImage" type="file" accept="image/*" class="form-control "
                                    placeholder="Enter " >
                                <img id="imageProduct" class="img-fluid" src="" alt="">
                            </div>
                             
                            <div class="form-group">
                                <label for="exampleInputEmail1">Author</label>
                                <select name="selectAuthor" class="form-control select2" id="selectAuthorUpdate" style="width: 100%;">
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Publisher</label>
                                <select name="selectPublisher" class="form-control select2" id="selectPublisherUpdate" style="width: 100%;">
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">SaleID</label>
                                <select name="selectSale" class="form-control select2" id="selectSaleUpdate" style="width: 100%;">
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
</div>
<!-- jQuery -->
<script src="<?php echo constant('URL') ?>public/assets/plugins/jquery/jquery.min.js"></script>
<script>
    $(function () {
        $(document).on('click', '[data-toggle="lightbox"]', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox({
            alwaysShowClose: true
        });
    });
    })
    $(document).ready(function () {
    
      
            $('input[type="file"]').change(function(e) {
                
                $("#imageProduct").fadeIn("fast").attr('src',URL.createObjectURL(e.target.files[0]));
            
            });
   


    //select author
    var selectAuthor = document.getElementById('selectAuthor'); 
    //select publisher
    var selectPublisher = document.getElementById('selectPublisher'); 
    //select sale
    var selectSale = document.getElementById('selectSale'); 

    //select author update
    var selectAuthorUpdate = document.getElementById('selectAuthorUpdate'); 
    //select publisher update
    var selectPublisherUpdate = document.getElementById('selectPublisherUpdate'); 
    //select sale update
    var selectSaleUpdate = document.getElementById('selectSaleUpdate'); 
    
    var option = document.createElement("option");
        //select author
        $.ajax({
            type: "POST",
            url: '<?php echo constant('URL') ?>author/getall',
            dataType: 'json',
            success: function(data){
                var author = data['data'];
                Object.keys(author).forEach(key => {
                    selectAuthor.options[key] = new Option(author[key].id+"-"+author[key].name, author[key].id);
                });
                Object.keys(author).forEach(key => {
                    selectAuthorUpdate.options[key] = new Option(author[key].id+"-"+author[key].name, author[key].id);
                });

            }
        });
        //select publisher
        $.ajax({
            type: "POST",
            url: '<?php echo constant('URL') ?>publisher/getall',
            dataType: 'json',
            success: function(data){
                var publisher = data['data'];
                Object.keys(publisher).forEach(key => {
                    selectPublisher.options[key] = new Option(publisher[key].id+"-"+publisher[key].name, publisher[key].id);
                });
                Object.keys(publisher).forEach(key => {
                    selectPublisherUpdate.options[key] = new Option(publisher[key].id+"-"+publisher[key].name, publisher[key].id);
                });
            }
        });
        //select sale
        $.ajax({
            type: "POST",
            url: '<?php echo constant('URL') ?>sale/getall',
            dataType: 'json',
            success: function(data){
                var sale = data['data'];
                Object.keys(sale).forEach(key => {
                    selectSale.options[key] = new Option(sale[key].id+"-"+sale[key].name, sale[key].id);
                });
                Object.keys(sale).forEach(key => {
                    selectSaleUpdate.options[key] = new Option(sale[key].id+"-"+sale[key].name, sale[key].id);
                });
            }
        });
        //

        //datatable
        producttable = $('#producttable').DataTable({
            dom: 'Bfrtip',
            "scrollY":"500px",
           
            "ajax": "<?php echo constant('URL') ?>Product/getall",
            "columns": [{
                    "data": "id"
                },
                {
                    "data": "name"
                },
                {
                    "data": "description"
                },
                {
                    "data": "quantity"
                },
                {
                    "data": "price"
                },
                {
                    "data": "pagenumber"
                },
                {
                    "data": "image",
                    "render": function (data, type, row, meta) {
                        if(data){
                            return(
                            "<a href='<?php echo constant('URL') ?>/public/assets/images/"+data+"' data-toggle='lightbox' data-title='Image'>"+
                                "<img class='img-fluid' src='<?php echo constant('URL') ?>/public/assets/images/"+data+"' class='img-fluid mb-2' alt='white sample'/>"+
                            "</a>"
                            );
                        }
                        else{
                            return(
                                "Blank"
                            )
                        }
                        
                    }
                },
                {
                    "data": "id",
                    "render": function (data, type, row, meta) {
                        return(
                            "<button onclick='openModal(this)' class='btn btn-primary btn-sm' role='button' data-toggle='modal' data-target='#AddCategoryModal' data_id='" +
                            data + "'>" +
                            "Category" +
                            "</button>"

                        );
                    }
                },
                {
                    "data": "authorID",
                    "render": function (data, type, row, meta) {
                        return( 
                            data.name
                        );
                    }
                },
                {
                    "data": "publisherID",
                    "render": function (data, type, row, meta) {
                        return(
                            data.name
                        );
                    }
                },
                {
                    "data": "saleID",
                    "render": function (data, type, row, meta) {
                        return(
                            data.id
                        );
                    }
                },
                {
                    "data": "id",
                    //"defaultContent": "<a onclick='openModal()' href='#' class='btn btn-warning btn-sm' role='button' data-toggle='modal' data-target='#UpdateModal'>Update</a>"
                    "render": function (data, type, row, meta) {

                        return (
                            "<button onclick='openModal(this)' class='btn btn-warning btn-sm mr-1' role='button' data-toggle='modal' data-target='#UpdateModal' data_id='" +
                            data + "'>" +
                            "Update" +
                            "</button>" +
                            "<button onclick='openModal(this)' class='btn btn-danger btn-sm' role='button' data-toggle='modal' data-target='#DeleteModal' data_id='" +
                            data + "'>" +
                            "Delete" +
                            "</button>"
                        );

                    }
                }
            ],

        });

        $("#formAdd").submit(function (e) {
            
            e.preventDefault();
            var form = $(this);
            var url = form.attr('action');
            $.ajax({
                type: "POST",
                url: url,
                data:  new FormData(this),
                contentType: false,
                cache: false,
                processData:false,
                success: function (data) {
                    sweetAlertCRUD(data, "Add");
                    producttable.ajax.reload();
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
                data:  new FormData(this),
                contentType: false,
                cache: false,
                processData:false,
                success: function (data) {
                    sweetAlertCRUD(data, "Update");
                    producttable.ajax.reload();
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
                    producttable.ajax.reload();

                }
            });

        })
    });
    function openModal(e){
        $getCurrentUrl = '<?php echo constant('URL') ?>product';
        id=$(e).attr('data_id');
        const x = document.forms["formUpdate"];
        $.ajax({
            type: "POST",
            url: '<?php echo constant('URL') ?>product/getByID/'+id,
            dataType: 'json',
            success: function(data){
                x.elements[0].value = data['data'][0].name;
                x.elements[1].value = data['data'][0].description;
                x.elements[2].value = data['data'][0].quantity;
                x.elements[3].value = data['data'][0].price;
                x.elements[4].value = data['data'][0].pagenumber;
                $("#imageProduct").attr("src","<?php echo constant('URL') ?>public/assets/images/"+data['data'][0].image)
                $('#txtImage').val(data['data'][0].image);
                //x.elements[5].value = data['data'][0].image;
                //$('#selectAuthor').val(data['data'][0].authorID); 
                $('[name=selectAuthorUpdate]').val(data['data'][0].authorID);
                $("#selectAuthorUpdate").select2().select2("val", data['data'][0].authorID);

                $('[name=selectPublishUpdate]').val(data['data'][0].publisherID);
                $("#selectPublishUpdate").select2().select2("val", data['data'][0].publisherID);

                $('[name=selectSaleUpdate]').val(data['data'][0].saleID);
                $("#selectSaleUpdate").select2().select2("val", data['data'][0].saleID);
            }
        });
        $formUpdate = document.querySelector("#formUpdate");
        $formDelete = document.querySelector("#formDelete");
        $formAdd = document.querySelector("#formAdd");
        $formAdd.action =  $getCurrentUrl+"/add";
        $formUpdate.action = $getCurrentUrl+"/update/"+id;
        $formDelete.action = $getCurrentUrl+"/delete/"+id;

        var selectCategory = document.getElementById('selectCategory');
        var category;                         
            $.ajax({
                type: "POST",
                url: '<?php echo constant('URL') ?>category/getall',
                dataType: 'json',
                success: function(data){                                        
                    category = data['data'];                    
                    Object.keys(category).forEach(key => {                                                                    
                        selectCategory.options[key] = new Option("ID : " + category[key].id + " - " + category[key].name + " - " + category[key].detail, category[key].id)
                    });                            
                    $.ajax({
                        type: "POST",
                        url: '<?php echo constant('URL') ?>category/getCategoryProduct/'+id,
                        dataType: 'json',
                        success: function(data){                                    
                            var categoryproduct = data['data'];                            
                            if(categoryproduct !== undefined)
                            {
                                Object.keys(category).forEach(key1 => {                                
                                    Object.keys(categoryproduct).forEach(key2 => {                                    
                                        if(category[key1].id == categoryproduct[key2].categoryID)
                                        {                                        
                                            category[key1]['selected'] = 'selected';
                                        }                                    
                                    })
                                    category['product'] = id;
                                });                                                                                        
                                Object.keys(category).forEach(key => {                                
                                    if(category[key]['selected'] == 'selected' && category['product'] == id)
                                    {
                                        selectCategory.options[key] = new Option("ID : " + category[key].id + " - " + category[key].name + " - " + category[key].detail, category[key].id,false,true);
                                    }                                    
                                });                                                                                                
                            }                                                        
                        }                                                    
                    });                    
                }                
            });                                      
        $('#selectCategory').change(function(e) {            
            var selected = $(e.target).val();            
            console.log(selected);
            $.ajax({
                type: "POST",
                url: '<?php echo constant('URL') ?>category/addCategoryProduct/'+id,
                data: {selected:selected}, // serializes the form's elements.
                success: function (data) {
                    sweetAlertCRUD(data, "Update");                    
                }
            });
        });
    }
    
</script>


