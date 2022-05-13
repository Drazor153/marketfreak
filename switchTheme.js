function changeTheme() {
    var check = document.getElementById("slider-theme")
    var state = check.checked
    if (state) {
        document.getElementById("css-theme").href = "styles/dark.css"
    }else{
        document.getElementById("css-theme").href = "styles/light.css"
    }
}