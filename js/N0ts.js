// 侧栏菜单 && 打开模糊背景
function MenuClick(a) {
    if (a) {
        var a = document.getElementById("leftBar-Menu");
        a.classList.add("leftBar-Menu-Click");
        var b = document.getElementById("pages");
        b.classList.add("blur");
        var c = document.getElementById("menu");
        c.classList.add("blur");
        var d = document.getElementById("pages2");
        d.classList.add("blur");
        var d = document.getElementById("footer");
        d.classList.add("blur");
    } else {
        var a = document.getElementById("leftBar-Menu");
        a.classList.remove("leftBar-Menu-Click");
        var b = document.getElementById("pages");
        b.classList.remove("blur");
        var c = document.getElementById("menu");
        c.classList.remove("blur");
        var d = document.getElementById("pages2");
        d.classList.remove("blur");
        var d = document.getElementById("footer");
        d.classList.remove("blur");
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