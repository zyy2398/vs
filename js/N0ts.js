// 侧栏菜单
function MenuClick_Open() {
    var menu = document.getElementById("leftBar-Menu");
    menu.classList.add("leftBar-Menu-Click");
}

function MenuClick_Close() {
    var menu = document.getElementById("leftBar-Menu");
    menu.classList.remove("leftBar-Menu-Click");
}