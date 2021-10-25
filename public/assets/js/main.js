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
        console.log(url);
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
        console.log(url);
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
        console.log(url);
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
        console.log(url);
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
        console.log(url);
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
        console.log(url);
        $.ajax({
            url: url,
            success: function(data)
            {
                $("#content").html(data);
            }
        });
       
    })

});
