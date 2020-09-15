// 侧栏菜单
function MenuClick(a) {
    if (a) {
        var menu = document.getElementById("leftBar-Menu");
        menu.classList.add("leftBar-Menu-Click");
        var pages = document.getElementById("pages");
        pages.classList.add("blur");
        var menu1 = document.getElementById("menu");
        menu1.classList.add("blur");
    } else {
        var menu = document.getElementById("leftBar-Menu");
        menu.classList.remove("leftBar-Menu-Click");
        var pages = document.getElementById("pages");
        pages.classList.remove("blur");
        var menu1 = document.getElementById("menu");
        menu1.classList.remove("blur");
    }
}

// 页面切换
var pages_title_option = 1;
function pages_title_option_click(a) {
    if (a != pages_title_option) {
        var option1 = document.getElementById("pages-title-option" + a);
        option1.classList.add("pages-title-option-click");
        var option2 = document.getElementById("pages-title-option" + pages_title_option);
        option2.classList.remove("pages-title-option-click");

        var pages_text1 = document.getElementById("pages-text" + a);
        pages_text1.classList.add("pages-text-show");
        var pages_text2 = document.getElementById("pages-text" + pages_title_option);
        pages_text2.classList.remove("pages-text-show");
    }

    pages_title_option = a;
}