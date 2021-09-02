function validateForm() {
    var name = document.forms["contact-me"]["contact-name"].value;
    var regex = /^[a-zA-Z ]*$/;
    if (name == "") {
        alert("Name must be filled out");
        return false;
    } else if (!regex.test(name)) {
        alert("Letters and spaces only allowed in name field");
        return false;
    }
}
