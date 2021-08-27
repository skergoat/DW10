var el = document.getElementById("navbar");
window.addEventListener("scroll", function() {
    var top =	 window.pageYOffset || document.documentElement.scrollTop;
    if (top == 0) {
        el.style.background = "rgba(255, 255, 255, 0.6)";
    } else {
        el.style.background = "white";
    }
});