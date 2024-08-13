// Custom JS to handle the sidebar toggle
document.getElementById("menu-toggle").addEventListener("click", function() {
    var sidebar = document.getElementById("sidebar");
    var content = document.getElementById("main-content");

    if (window.innerWidth > 768) {
        sidebar.classList.toggle("collapsed");
        if (sidebar.classList.contains("collapsed")) {
            content.style.marginLeft = "0";
        } else {
            content.style.marginLeft = "250px";
        }
    } else {
        sidebar.classList.toggle("collapsed");
        if (sidebar.classList.contains("collapsed")) {
            sidebar.style.marginLeft = "-100%";
        } else {
            sidebar.style.marginLeft = "0";
        }
    }
});
