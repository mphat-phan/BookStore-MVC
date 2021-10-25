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
      
});
