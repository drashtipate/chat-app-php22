
function myFunction() {
    var x = document.getElementById("myInput");
    if (x.type === "password") {
        x.type = "text";
        x.type = "email";
    } else {
        x.type = "password";
    }
};

function myFunction() {
    var x = document.getElementById("psw");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}


function submitForm() {
    let form = document.getElementById("signin");
    form.submit();
}

function submitForm() {
    let form = document.getElementById("signup");
    form.submit();
}

