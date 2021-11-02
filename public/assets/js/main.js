function sweetAlertCRUD(data, name) {
    var Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
    });
    if (data == 1) {
        Toast.fire({
            icon: 'success',
            title: name + ' Successful'
        })
    } else if (data == 0) {
        Toast.fire({
            icon: 'error',
            title: name + ' Failed'
        })
    }
}

$(document).ready(function () {
    $.fn.dataTable.ext.errMode = 'throw';



    $("#formRoleUpdate").submit(function (e) {
        e.preventDefault();
        var form = $(this);
        var url = form.attr('action');
        $.ajax({
            type: "POST",
            url: url,
            data: form.serialize(), // serializes the form's elements.
            success: function (data) {
                sweetAlertCRUD(data, "Update");
                authortable.ajax.reload();
            }
        });

    })
    //////////////
    $("#user").click(function (e) {

        e.preventDefault();
        $.ajax({
            url: "http://localhost/Bookstore/User/ajax",
            success: function (data) {
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
