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
    $("#formDelete1").submit(function(e) {
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
    $("#formDelete2").submit(function(e) {
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
    //////////////
    $("#author").click(function(e) {

        e.preventDefault();
        $.ajax({
            url: "http://localhost/Bookstore/Author/ajax",
            success: function(data)
            {
                $("#content").html(data);
            }
        });
       
    })
    $("#category").click(function(e) {

        e.preventDefault();
        var url = "http://localhost/Bookstore/Category/ajax";
     
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
        var url = "http://localhost/Bookstore/Customer/ajax";
     
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
        var url = "http://localhost/Bookstore/Product/ajax";
  
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
        var url = "http://localhost/Bookstore/ProductType/ajax";
  
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
        var url = "http://localhost/Bookstore/Order/ajax";

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
        var url = "http://localhost/Bookstore/GoodsReceived/ajax";

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
        var url = "http://localhost/Bookstore/Employee/ajax";
  
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
        var url = "http://localhost/Bookstore/Sell/ajax";
  
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
        var url = "http://localhost/Bookstore/Company/ajax";
  
        $.ajax({
            url: url,
            success: function(data)
            {
                $("#content").html(data);
            }
        });
       
    })
    

});

