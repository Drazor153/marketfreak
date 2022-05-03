function changeTheme() {
    var check = document.getElementById("slider-theme")
    var state = check.checked
    if (state) {
        document.getElementById("css-theme").href = "darkstyle.css"
    }else{
        document.getElementById("css-theme").href = "lightstyle.css"

    }
}