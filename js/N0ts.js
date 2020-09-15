// 侧栏菜单
function MenuClick_Open() {
    var menu = document.getElementById("leftBar-Menu");
    menu.classList.add("leftBar-Menu-Click");
    var pages = document.getElementById("pages");
    pages.classList.add("blur");
}

function MenuClick_Close() {
    var menu = document.getElementById("leftBar-Menu");
    menu.classList.remove("leftBar-Menu-Click");
    var pages = document.getElementById("pages");
    pages.classList.remove("blur");
}