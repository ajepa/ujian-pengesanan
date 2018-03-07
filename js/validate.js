function validateForm() {
    var x = document.forms["registration"]["ev_name"].value;
    if (x==null || x=="") {
        alert("Oops...", "Something went wrong!", "error");
        return false;
    }
}
