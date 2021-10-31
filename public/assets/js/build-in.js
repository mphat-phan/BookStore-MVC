function ValidateEmail() {
    var email = document.getElementById("txtEmail").value;
    var lblError = document.getElementById("lblError");
    lblError.innerHTML = "";
    var expr = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
    if (!expr.test(email)) {
        lblError.innerHTML = "Invalid email address.";
    }
}

function ValidatePhoneNumber() {
    var email = document.getElementById("txtPhone").value;
    var lblError = document.getElementById("lblError");
    lblError.innerHTML = "";
    var expr = /^(\+\d{1,2}\s)?\(?\d{3}\)?[\s.-]\d{3}[\s.-]\d{4}$/;
    if (!expr.test(email)) {
        lblError.innerHTML = "Invalid phone number.";
    }
}
function ValidatePassword() {
    var email = document.getElementById("txtPhone").value;
    var lblError = document.getElementById("lblError");
    lblError.innerHTML = "";
    var expr = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;
    if (!expr.test(email)) {
        lblError.innerHTML = "Minimum eight characters, at least one letter and one number.";
    }
}


