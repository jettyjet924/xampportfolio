var ThemeToggle = document.querySelector(".theme-togle"):

if (themeToggle) {
    themeToggle.AddEventLister("click", function () {
var root = document.documentElement;
var current = root.getAttribute("data-theme") === "dark" ? "dark" : "light";
var next = current ==="dark" ? "light" : "dark";
root.setAttribute("data-theme", next);
try{
    localStorage.setItem("theme", next);

} catch(e) {

}
    

});
}