
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
    } else if (data == 2) {
        Toast.fire({
            icon: 'warning',
            title: 'You do not have permission!'
        })
    } else if (data == 3) {
        Toast.fire({
            icon: 'warning',
            title: 'Please login!'
        })
    }
}

$(document).ready(function () {
    $.fn.dataTable.ext.errMode = 'throw';
    
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
        theme: 'bootstrap4'
    })

});
