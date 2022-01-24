function ocultar_more_option() {
    var x = document.getElementById("more_option_div");

    

    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

function ocultar_lateral_menu() {
    var x = document.getElementById("lateral-general");

    

    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

function ocultar_add() {
    ocultar_more_option();
    ocultar_lateral_menu();
}