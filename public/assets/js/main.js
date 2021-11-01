
$(document).ready(function () {
    
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
                $("#content").html(data);
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
                $("#content").html(data);
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
                $("#content").html(data);
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
                $("#content").html(data);
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



