
$(document).ready(function () {    
    //an thong bao 
    $("#success-alert").hide();
    //$('#authortable').destroy();
    $.fn.dataTable.ext.errMode = 'throw';
    //var editor;
    authortable = $('#authortable').DataTable( {
        dom: 'Bfrtip',
        "ajax": "http://localhost/Bookstore/author/getall",
        "columns": [
            { "data": "id" },
            { "data": "name" },
            { "data": "detail" },
            {   
                "data": "id",
                //"defaultContent": "<a onclick='openModal()' href='#' class='btn btn-warning btn-sm' role='button' data-toggle='modal' data-target='#UpdateModal'>Update</a>"
                "render": function ( data, type, row, meta ) {
                   
                        return (
                          "<button onclick='openModal(this)' class='btn btn-warning btn-sm mr-1' role='button' data-toggle='modal' data-target='#UpdateModal' data_id='"+data+"'>" +
                            "Update"+
                          "</button>"+
                          "<button onclick='openModal(this)' class='btn btn-danger btn-sm' role='button' data-toggle='modal' data-target='#DeleteModal' data_id='"+data+"'>" +
                          "Delete"+
                            "</button>"
                        );
              
                }
            }            
        ],
           
    });

    
    $("#formAdd").submit(function(e) {
        e.preventDefault();
        var form = $(this);
        var url = form.attr('action');
        $.ajax({
            type: "POST",
            url: url,
            data: form.serialize(), // serializes the form's elements.
            success: function(data)
            {
                authortable.ajax.reload();
            }
        });
       
    })

    $("#formRoleUpdate").submit(function(e) {
        e.preventDefault();
        var form = $(this);
        var url = form.attr('action');
        $.ajax({
            type: "POST",
            url: url,
            data: form.serialize(), // serializes the form's elements.
            success: function(data)
            {   
                authortable.ajax.reload();
            }
        });
       
    })
    $("#formUpdate").submit(function(e) {

        e.preventDefault();
        var form = $(this);
        var url = form.attr('action');
        $.ajax({
            type: "POST",
            url: url,
            data: form.serialize(), // serializes the form's elements.
            success: function(data)
            {
                authortable.ajax.reload();
            }
        });
       
    })
    $("#formDelete").submit(function(e) {
        e.preventDefault();
        var form = $(this);
        var url = form.attr('action');
         
        $.ajax({
            type: "POST",
            url: url,
            data: form.serialize(), // serializes the form's elements.
            success: function(data)
            {
                if(data==1){
                    $("#success-alert").fadeTo(2000, 500).slideUp(500, function() {
                        $("#success-alert").slideUp(500);
                    });
                }
                authortable.ajax.reload();
            }
        });
       
    })
    ///////////
    
    //////////////
    $("#user").click(function(e) {

        e.preventDefault();
        $.ajax({
            url: "http://localhost/Bookstore/User/ajax",
            success: function(data)
            {
                $("#content").html(data);
            }
        });
       
    })
    $("#quanlynhaphang").click(function(e) {

        e.preventDefault();
        $.ajax({
            url: "http://localhost:84/Bookstore/GoodsReceived/ajax",
            success: function(data)
            {
                $("#content").html(data);
            }
        });
       
    })
    
    $("#role").click(function(e) {

        e.preventDefault();
        $.ajax({
            url: "http://localhost:84/Bookstore/Role/ajax",
            success: function(data)
            {
                $("#content").html(data);
            }
        });
       
    })
    $("#dashboard").click(function(e) {

        e.preventDefault();
        $.ajax({
            url: "http://localhost:84/Bookstore/Dashboard/ajax",
            success: function(data)
            {
                $("#content").html(data);
            }
        });
       
    })
    $("#author").click(function(e) {

        e.preventDefault();
        $.ajax({
            url: "http://localhost:84/Bookstore/Author/ajax",
            success: function(data)
            {
                $("#content").html(data);
            }
        });
       
    })
    $("#category").click(function(e) {

        e.preventDefault();
        var url = "http://localhost:84/Bookstore/Category/ajax";
     
        $.ajax({
            url: url,
            success: function(data)
            {
                $("#content").html(data);
            }
        });
       
    })
    $("#customer").click(function(e) {

        e.preventDefault();
        var url = "http://localhost:84/Bookstore/Customer/ajax";
     
        $.ajax({
            url: url,
            success: function(data)
            {
                $("#content").html(data);
            }
        });
       
    })
    $("#product").click(function(e) {

        e.preventDefault();
        var url = "http://localhost:84/Bookstore/Product/ajax";
  
        $.ajax({
            url: url,
            success: function(data)
            {
                $("#content").html(data);
            }
        });
       
    })
    $("#producttype").click(function(e) {

        e.preventDefault();
        var url = "http://localhost:84/Bookstore/ProductType/ajax";
  
        $.ajax({
            url: url,
            success: function(data)
            {
                $("#content").html(data);
            }
        });
       
    })
    $("#order").click(function(e) {

        e.preventDefault();
        var url = "http://localhost:84/Bookstore/Order/ajax";

        $.ajax({
            url: url,
            success: function(data)
            {
                $("#content").html(data);
            }
        });
       
    })
    $("#goodsreceived").click(function(e) {

        e.preventDefault();
        var url = "http://localhost:84/Bookstore/GoodsReceived/ajax";

        $.ajax({
            url: url,
            success: function(data)
            {
                $("#content").html(data);
            }
        });
       
    })
    $("#employee").click(function(e) {

        e.preventDefault();
        var url = "http://localhost:84/Bookstore/Employee/ajax";
  
        $.ajax({
            url: url,
            success: function(data)
            {
                $("#content").html(data);
            }
        });
       
    })
    $("#sell").click(function(e) {

        e.preventDefault();
        var url = "http://localhost:84/Bookstore/Sell/ajax";
  
        $.ajax({
            url: url,
            success: function(data)
            {
                $("#content").html(data);
            }
        });
       
    })
    $("#company").click(function(e) {

        e.preventDefault();
        var url = "http://localhost:84/Bookstore/Company/ajax";
  
        $.ajax({
            url: url,
            success: function(data)
            {
                $("#content").html(data);
            }
        });
       
    })    
    
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

});

function openModal(e){
    $getCurrentUrl = 'http://localhost/Bookstore/Author';
    id=$(e).attr('data_id');
    const x = document.forms["formUpdate"];
    var name,detail;
    $.ajax({
        type: "POST",
        url: 'http://localhost/Bookstore/Author/getByID/'+id,
        dataType: 'json',
        success: function(data){
            console.log(data['data'][0].id);
            x.elements[0].value = data['data'][0].name;
            x.elements[1].value = data['data'][0].detail;
        }
    });
    $formUpdate = document.querySelector("#formUpdate");
    $formDelete = document.querySelector("#formDelete");
    $formAdd = document.querySelector("#formAdd");
    $formAdd.action =  $getCurrentUrl+"/add";
    $formUpdate.action = $getCurrentUrl+"/update/"+id;
    $formDelete.action = $getCurrentUrl+"/delete/"+id;
}
