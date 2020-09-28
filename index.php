<?php
    // access_token
    // 申请方法：码云gitee - 个人设置 - 安全设置，私人令牌 - 权限给issues与个人信息获取
    $token = "0d4656bf06d57b8da4cee1fadba777e6";
    
    $UserInfo = file_get_contents("https://gitee.com/api/v5/users/nutssss/repos?access_token=" . $token . "&type=all&sort=full_name&page=1&per_page=20");
    $UserInfo = json_decode($UserInfo, true);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>这里是网站标题</title>
    <meta name="description" content="这里是网站介绍">
    <meta name="keywords" content="这里是网站关键词"> -->
    <title>N0ts | 一个热爱游戏的咸鱼</title>
    <meta name="description" content="即使前方的路看似绝境，也要有硬生生给自己开出一条路的勇气">
    <meta name="keywords" content="n0ts,nutssss,坚果,主页,博客,tqy,xhj">
    <link rel="icon" href="./favicon.ico">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/viewer.min.css">
    <link rel="stylesheet" href="./css/font-awesome.min.css">
    <script>
        window.onload = function () {
            document.getElementsByClassName("load")[0].style.display = "none";
            document.getElementsByClassName("Box")[0].classList.add("BoxLoad");
            resize();
        }
    </script>
</head>

<body>
    <div class="load">
        <p>加载中...</p>
        <div class="loadLove">
            <div class="loadLeft"></div>
            <div class="loadRight"></div>
        </div>
    </div>

    <div class="Box">
        <!-- ALL -->
        <div id="Indexbox">

            <!-- 顶部菜单 -->
            <div class="menu" id="menu">
                <img src="./favicon.ico" alt="favicon">
                <ul id="menuUL">
                    <li>
                        <a href="https://n0ts.cn/" target="_blank">首页(L)</a>
                    </li>
                    <li>
                        <a href="https://blog.n0ts.cn/me" target="_blank">关于我(O)</a>
                    </li>
                    <li>
                        <a href="https://blog.n0ts.cn/category/mywork" target="_blank">我的垃圾项目(V)</a>
                    </li>
                    <li>
                        <a href="https://lovexhj.cn/" target="_blank">我的爱人(E)</a>
                    </li>
                    <li>
                        <a href="https://note.n0ts.cn/" target="_blank">笔记(X)</a>
                    </li>
                    <li>
                        <a href="https://blog.n0ts.cn/" target="_blank">博客(H)</a>
                    </li>
                    <li>
                        <a href="https://blog.n0ts.cn/msg" target="_blank">留言(J)</a>
                    </li>
                </ul>
                <p>N0ts.html</p>
            </div>

            <!-- 左侧菜单按钮 -->
            <div class="leftBar">
                <div class="leftBar-ButtomMe" onclick="MeClick(true)"></div>
                <div class="leftBar-ButtomMenu" id="leftBar-ButtomMenu" onclick="MenuClick(true)">
                    <div class="div1"></div>
                    <div class="div2"></div>
                    <div class="div3"></div>
                </div>
                <div class="leftBar-ButtomPages" id="menuPages" onclick="PagesClick(true)"></div>
            </div>

            <!-- 左侧拉出菜单 我 -->
            <div class="leftBar-Me" id="leftBar-Me">
                <div class="leftBar-ButtomClose" onclick="MeClick(false)">
                    <div class="div1"></div>
                    <div class="div2"></div>
                </div>
                <div class="img">
                    <img src="https://q1.qlogo.cn/g?b=qq&nk=1656071287&s=640" alt="N0ts">
                </div>
                <div class="introduction">
                    <h1>N0ts</h1>
                    <p>大专的咸鱼，爱好计算机、旅行、篮球，以及我公主般的女朋友。</p>
                </div>
                <div class="icon">
                    <ul>
                        <li><a href="https://wpa.qq.com/msgrd?v=3&uin=1656071287&site=qq&menu=yes"><i class="fa fa-qq"
                                    aria-hidden="true"></i></a></li>
                        <li><a href="https://gitee.com/nutssss"><i class="fa fa-github fa-lg"
                                    aria-hidden="true"></i></a></li>
                        <li><a href="https://blog.n0ts.cn/"><i class="fa fa-wordpress" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <div class="connect">
                    <a href="https://blog.n0ts.cn/me">关于</a>
                    <a href="https://blog.n0ts.cn/msg">留言</a>
                </div>
            </div>

            <!-- 左侧拉出菜单 顶部菜单 -->
            <div class="leftBar-titleMenu" id="leftBar-titleMenu">
                <div class="leftBar-ButtomClose" onclick="MenuClick(false)">
                    <div class="div1"></div>
                    <div class="div2"></div>
                </div>
                <h1>导航</h1>
                <ul>
                    <li>
                        <a href="https://n0ts.cn/" target="_blank" onclick="MenuClick(false)">首页</a>
                    </li>
                    <li>
                        <a href="https://blog.n0ts.cn/me" target="_blank" onclick="MenuClick(false)">关于我</a>
                    </li>
                    <li>
                        <a href="https://blog.n0ts.cn/category/mywork" target="_blank"
                            onclick="MenuClick(false)">我的垃圾项目</a>
                    </li>
                    <li>
                        <a href="https://lovexhj.cn/" target="_blank" onclick="MenuClick(false)">我的爱人</a>
                    </li>
                    <li>
                        <a href="https://note.n0ts.cn/" target="_blank" onclick="MenuClick(false)">笔记</a>
                    </li>
                    <li>
                        <a href="https://blog.n0ts.cn/" target="_blank" onclick="MenuClick(false)">博客</a>
                    </li>
                    <li>
                        <a href="https://blog.n0ts.cn/msg" target="_blank" onclick="MenuClick(false)">留言</a>
                    </li>
                </ul>
            </div>

            <!-- 左侧拉出菜单 页面 -->
            <div class="leftBar-Pages" id="leftBar-Pages">
                <div class="leftBar-ButtomClose" onclick="PagesClick(false)">
                    <div class="div1"></div>
                    <div class="div2"></div>
                </div>
                <div class="leftBar-Pages-box">
                    <h1>页面</h1>
                    <div class="leftBar-Pages-optine" id="leftBar-Pages-optine1"
                        onclick="pages_title_option_click(1 ,false);PagesClick(false)">
                        <img src="./images/stuck_out_tongue.png" alt="stuck_out_tongue">
                        <p>hello world.md</p>
                    </div>
                    <div class="leftBar-Pages-optine" id="leftBar-Pages-optine2"
                        onclick="pages_title_option_click(2, false);PagesClick(false)">
                        <img src="./images/stuck_out_tongue_closed_eyes.png" alt="stuck_out_tongue_closed_eyes">
                        <p>Gitee Project.md</p>
                    </div>
                    <div class="leftBar-Pages-optine" id="leftBar-Pages-optine3"
                        onclick="pages_title_option_click(3 ,false);PagesClick(false)">
                        <img src="./images/stuck_out_tongue_winking_eye.png" alt="stuck_out_tongue_winking_eye">
                        <p>hello world.md</p>
                    </div>
                    <div class="leftBar-Pages-optine" id="leftBar-Pages-optine4"
                        onclick="pages_title_option_click(4 ,false);PagesClick(false)">
                        <img src="./images/yum.png" alt="yum">
                        <p>hello world.md</p>
                    </div>
                    <div class="leftBar-Pages-optine" id="leftBar-Pages-optine5"
                        onclick="pages_title_option_click(5 ,false);PagesClick(false)">
                        <img src="./images/icecream.png" alt="icecream">
                        <p>My Life.md</p>
                    </div>
                </div>
            </div>

            <!-- 页面版块1 -->
            <div class="pages" id="pages">

                <!-- 页面选项卡 -->
                <div class="pages-title">
                    <div class="pages-title-option pages-title-option-click" id="pages-title-option1"
                        onclick="pages_title_option_click(1, true)">
                        <img src="./images/stuck_out_tongue.png" alt="stuck_out_tongue">
                        <p>hello world.md</p>
                    </div>
                    <div class="pages-title-option" id="pages-title-option2"
                        onclick="pages_title_option_click(2, true)">
                        <img src="./images/stuck_out_tongue_closed_eyes.png" alt="stuck_out_tongue_closed_eyes">
                        <p>Gitee Project.md</p>
                    </div>
                    <div class="pages-title-option" id="pages-title-option3"
                        onclick="pages_title_option_click(3, true)">
                        <img src="./images/stuck_out_tongue_winking_eye.png" alt="stuck_out_tongue_winking_eye">
                        <p>hello world.md</p>
                    </div>
                    <div class="pages-title-option" id="pages-title-option4"
                        onclick="pages_title_option_click(4, true)">
                        <img src="./images/yum.png" alt="yum">
                        <p>hello world.md</p>
                    </div>
                    <div class="pages-title-option" id="pages-title-option5" onclick="pages_title_option_click(5, true)"
                        style="display: none;">
                        <img src="./images/icecream.png" alt="icecream">
                        <p>hello world.md</p>
                    </div>
                </div>

                <!-- 页面 -->
                <div class="pages-text pages-text-show" id="pages-text1">
                    <div class="pages-text-box" id="meMD">
                        <h1>你好，我是N0ts<br />热爱编程，旅游，运动。</h1>
                        <div class="pages-text-box-img">
                            <img src="./images/lovexhj.jpg" alt="lovexhj" class="n0ts-img">
                            <h6>❤我的小公主写的</h6>
                        </div>
                        <p>小时候总是不爱去旅行，但现在却相反；</p>
                        <p>很喜欢去外面旅行，欣赏风景。</p>
                        <div class="pages-text-box-img">
                            <img src="./images/me1.jpg" alt="me1" class="n0ts-img">
                            <h6>旅游被弟弟抓拍</h6>
                        </div>
                        <p>用照片记录下某一瞬间的美景，让开心的时刻得以永久保存。</p>
                        <p>也算是爱好摄影，想给自己留下一个个美好回忆。</p>
                        <div class="pages-text-box-img">
                            <img src="./images/fj1.jpg" alt="fj1" class="n0ts-img">
                            <h6>某次旅游途中随手抓拍</h6>
                        </div>
                        <p>当然，我也很爱打篮球。</p>
                        <p>技术不是很好，但是很热爱，</p>
                        <p>一个篮球，一群朋友。</p>
                        <div class="pages-text-box-img">
                            <img src="./images/me2.jpg" alt="me2" class="n0ts-img">
                            <h6>起飞！</h6>
                        </div>
                        <p>成绩不好的我只能放手一搏</p>
                        <p>以兴趣作为核心，继续向前奔跑</p>
                        <p>即使前方的路看似绝境，也要有硬生生给自己开出一条路的勇气</p>
                        <div class="pages-text-box-img">
                            <img src="./images/index1.png" alt="index1" class="n0ts-img">
                            <h6>这个垃圾主页</h6>
                        </div>
                    </div>
                </div>
                <div class="pages-text" id="pages-text2">
                    <div class="pages-text-box">
                        <h1>我的开源垃圾</h1>
                        <ul class="giteeBoxUL">
                            <?php for($i = 0; $i < count($UserInfo); $i++):?>
                            <li>
                                <p class="giteeBox-Title">
                                    <a target="_blank" href="<?php echo $UserInfo[$i]['namespace']['html_url'];?>" style="color: rgb(110, 110, 110);"><?php echo substr($UserInfo[$i]['human_name'], 0, strrpos($UserInfo[$i]['full_name'], '/'));?></a>
                                    /
                                    <a target="_blank" href="<?php echo substr($UserInfo[$i]['html_url'], 0, strrpos($UserInfo[$i]['html_url'], '.git'));?>"><?php echo substr($UserInfo[$i]['full_name'], strrpos($UserInfo[$i]['human_name'], '/') + 1);?></a>
                                </p>
                                <p class="giteeBox-Text"><?php echo $UserInfo[$i]['description'];?></p>
                                <p class="giteeBox-Time">最后更新：<?php echo substr($UserInfo[$i]['updated_at'], 0, strrpos($UserInfo[$i]['updated_at'], 'T'));?></p>
                                <a target="_blank" href="<?php echo substr($UserInfo[$i]['html_url'], 0, strrpos($UserInfo[$i]['html_url'], '.git'));?>" class="aClick show">查看</a>
                            </li>
                            <?php endfor;?>
                        </ul>
                    </div>
                </div>
                <div class="pages-text" id="pages-text3">
                    <div class="pages-text-box">
                        <h1>test3</h1>
                    </div>
                </div>
                <div class="pages-text" id="pages-text4">
                    <div class="pages-text-box">
                        <h1>test4</h1>
                    </div>
                </div>
                <div class="pages-text" id="pages-text5">
                    <div class="pages-text-box">
                        <h1>我与她</h1>
                        <p>2018-11-19</p>
                        <p>故事开始</p>
                        <div class="pages-text-box-img">
                            <img src="./images/love1.jpg" alt="love1" class="n0ts-img">
                            <h6>我们的第一张合影</h6>
                        </div>
                        <p>截止现在</p>
                        <p id="lovetime1">d</p>
                        <p>有你的每一天都如糖果一样甜</p>
                        <div class="pages-text-box-img">
                            <img src="./images/love2.jpg" alt="love2" class="n0ts-img">
                            <h6>看电影日常</h6>
                        </div>
                        <a href="https://lovexhj.cn" class="aClick" target="_blank">More?</a>
                    </div>
                </div>
            </div>

            <!-- 页面版块2 -->
            <div class="pages pages2" id="pages2">

                <!-- 页面选项卡 -->
                <div class="pages-title pages-title2">
                    <div class="pages-title-option pages-title-option-click">
                        <img src="./images/icecream.png" alt="icecream">
                        <p>My Life.md</p>
                    </div>
                </div>

                <!-- 页面 -->
                <div class="pages-text pages-text-show">
                    <div class="pages-text-box pages-text-box2">
                        <h1>我与她</h1>
                        <p>2018-11-19</p>
                        <p>故事开始</p>
                        <div class="pages-text-box-img">
                            <img src="./images/love1.jpg" alt="love1" class="n0ts-img">
                            <h6>我们的第一张合影</h6>
                        </div>
                        <p>截止现在</p>
                        <p id="lovetime2"></p>
                        <p>有你的每一天都如糖果一样甜</p>
                        <div class="pages-text-box-img">
                            <img src="./images/love2.jpg" alt="love2" class="n0ts-img">
                            <h6>看电影日常</h6>
                        </div>
                        <a href="https://lovexhj.cn" class="aClick" target="_blank">More?</a>
                    </div>
                </div>

            </div>

            <!-- 底部版权 -->
            <div class="footer" id="footer">
                <p class="left">&copy; 2020 N0ts | THEME MADE BY <a href="https://n0ts.cn">N0ts</a></p>
                <p class="right"><a href="http://beian.miit.gov.cn">湘ICP备20005603号-2</a></p>
            </div>

        </div>
    </div>

    <script src="https://cdn.bootcdn.net/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="./js/viewer.min.js"></script>
    <script src="./js/N0ts.js"></script>
</body>

</html>