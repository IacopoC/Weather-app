
function emptyField() {
    let field;
    field = document.getElementById("search-field").value;
    if (field == "") {
        document.getElementById("alert-message").innerHTML = "Compila il campo soprastante per effettuare una ricerca";
        return false;
    }};
