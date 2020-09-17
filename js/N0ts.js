// 侧栏菜单 && 打开模糊背景
function MenuClick(a) {

    if (a) {
        var a = document.getElementById("leftBar-Me");
        a.classList.add("leftBar-Me-Click");
        var b = document.getElementById("pages");
        b.classList.add("blur");
        var c = document.getElementById("menu");
        c.classList.add("blur");
        var d = document.getElementById("pages2");
        d.classList.add("blur");
        var e = document.getElementById("footer");
        e.classList.add("blur");
    } else {
        var a = document.getElementById("leftBar-Me");
        a.classList.remove("leftBar-Me-Click");
        var b = document.getElementById("pages");
        b.classList.remove("blur");
        var c = document.getElementById("menu");
        c.classList.remove("blur");
        var d = document.getElementById("pages2");
        d.classList.remove("blur");
        var e = document.getElementById("footer");
        e.classList.remove("blur");
    }
}

function titleMenuClick(a) {
    if (a) {
        var a = document.getElementById("titleMenu");
        a.classList.add("titleMenu-Click");
        var b = document.getElementById("pages");
        b.classList.add("blur");
        var c = document.getElementById("menu");
        c.classList.add("blur");
        var d = document.getElementById("pages2");
        d.classList.add("blur");
        var e = document.getElementById("footer");
        e.classList.add("blur");
    } else {
        var a = document.getElementById("titleMenu");
        a.classList.remove("titleMenu-Click");
        var b = document.getElementById("pages");
        b.classList.remove("blur");
        var c = document.getElementById("menu");
        c.classList.remove("blur");
        var d = document.getElementById("pages2");
        d.classList.remove("blur");
        var e = document.getElementById("footer");
        e.classList.remove("blur");
    }
}

// 页面切换
var pages_title_option = 1;

function pages_title_option_click(a, b) {
    if (a != pages_title_option) {
        var option1 = document.getElementById("pages-title-option" + a);
        option1.classList.add("pages-title-option-click");
        var option2 = document.getElementById("pages-title-option" + pages_title_option);
        option2.classList.remove("pages-title-option-click");

        var pages_text1 = document.getElementById("pages-text" + a);
        pages_text1.classList.add("pages-text-show");
        var pages_text2 = document.getElementById("pages-text" + pages_title_option);
        pages_text2.classList.remove("pages-text-show");
    } else {
        if (b) {
            var option1 = document.getElementById("pages-title-option1" + a);
            option1.classList.add("pages-title-option-click");
            var option2 = document.getElementById("pages-title-option1" + pages_title_option);
            option2.classList.remove("pages-title-option-click1");

            var pages_text1 = document.getElementById("pages-text1" + a);
            pages_text1.classList.add("pages-text-show1");
            var pages_text2 = document.getElementById("pages-text1" + pages_title_option);
            pages_text2.classList.remove("pages-text-show1");
        }
    }

    pages_title_option = a;
}

// 890宽度显示页面菜单 && 1180宽度显示顶部菜单
window.onresize = function () {
    var menuTitle = document.getElementById("menuPages");
    var menu = document.getElementById("menuUL");
    if (document.documentElement.clientWidth <= 890) {
        menuTitle.style.display = "block";
    } else {
        menuTitle.style.display = "none";
    }
    if (document.documentElement.clientWidth <= 1180) {
        menu.style.display = "none";
    } else {
        menu.style.display = "block";
    }
}