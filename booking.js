function checkSelection() {
    var elem = document.getElementById("daySelect").value;
    if (elem == "I have a different plan") {
        document.getElementById("totalnights").style.visibility = "visible";
        document.getElementById("dayLabel").style.visibility = "visible";
    }
    else {
        document.getElementById("totalnights").style.visibility = "hidden";
        document.getElementById("dayLabel").style.visibility = "hidden";
    }
}