<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title>About Page | Amaze UI Example</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="format-detection" content="telephone=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp"/>
  <link rel="alternate icon" type="image/png" href="/yun/Public/Home/i/favicon.png">
  <link rel="stylesheet" href="/yun/Public/Home/css/amazeui.min.css"/>
  <link rel="stylesheet" href="/yun/Public/Home/css/app.css"/>
</head>
<body>
<!-- 手机版侧滑菜单 -->
<div id="navPush" class="am-offcanvas nav-push-content">
  <div class="am-offcanvas-bar">
    <div class="am-offcanvas-content ">
      <ul class="am-menu am-menu-offcanvas1  menu-main am-no-layout">
        <li><a href="<?php echo U('Index/index');?>" class="am-active">首页</a></li>
        <li><a href="<?php echo U('Products/index');?>">产品</a></li>
        <li><a href="<?php echo U('Case/index');?>">案例</a></li>
        <li><a href="<?php echo U('Signup/index');?>">合作</a></li>
        <li><a href="<?php echo U('Products/pricing');?>">定制</a></li>
        <li><a href="<?php echo U('About/index');?>">关于</a></li>
        <li><button class="am-btn am-btn-secondary am-topbar-btn am-btn-sm"><span class="am-icon-pencil"></span> 注册</button></li>
        <li><button class="am-btn am-btn-primary am-topbar-btn am-btn-sm"><span class="am-icon-user"></span> 登录</button></li>
      </ul>
    </div>
  </div>
</div>

<!-- 电脑和平板 菜单-->
<header class="am-topbar am-topbar-fixed-top">
  <div class="am-container">
    <h1 class="am-topbar-brand">
      <a href="#"><img src="/yun/Public/Home/images/logo.png" /></a>
    </h1>
    <button class="am-btn am-btn-primary am-show-sm-only nav-push-btn am-topbar-toggle " data-am-offcanvas="{target: '#navPush', effect: 'push'}">
      <span class="am-sr-only">导航切换</span> 
      <span class="am-icon-bars"></span>
    </button>
    <div class="am-collapse am-topbar-collapse" id="collapse-head">
      <ul class="am-nav am-nav-pills am-topbar-nav">
        <li><a href="<?php echo U('Index/index');?>" class="am-active">首页</a></li>
        <li><a href="<?php echo U('Products/index');?>">产品</a></li>
        <li><a href="<?php echo U('Case/index');?>">案例</a></li>
        <li><a href="<?php echo U('Signup/index');?>">合作</a></li>
        <li><a href="<?php echo U('Products/pricing');?>">定制</a></li>
        <li><a href="<?php echo U('About/index');?>">关于</a></li>
        <!-- 如果有二级菜单 以下是二级菜单代码 -->
        <!--<li class="am-dropdown" data-am-dropdown>
          <a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">
            案例 <span class="am-icon-caret-down"></span>
          </a>
          <ul class="am-dropdown-content">
            <li class="am-dropdown-header">标题</li>
            <li><a href="#">1. 默认样式</a></li>
            <li><a href="#">2. 基础设置</a></li>
            <li><a href="#">3. 文字排版</a></li>
            <li><a href="#">4. 网格系统</a></li>
          </ul>
        </li>-->
        <!-- 登录注册按钮 -->
        <div class="am-topbar-right">
          <button class="am-btn am-btn-secondary am-topbar-btn am-btn-sm"><span class="am-icon-pencil"></span> 注册</button>
        </div>
        <div class="am-topbar-right">
          <button class="am-btn am-btn-primary am-topbar-btn am-btn-sm"><span class="am-icon-user"></span> 登录</button>
        </div>
      </ul>
    </div>
  </div>
</header>


<!-- banner -->
<div class="banner">
  <div class="banner-word">
    <h2>PC网站移动化 如此简单</h2>
    <h3> 网页跨屏适配云平台</h3>
  </div>
  <div class="homepage-banner-img">
    <img src="/yun/Public/Home/images/banner_img.png" alt=""/>
  </div>
  <div class="transform am-container">
    <form class="am-form">
      <div class="am-form-group">
        <input type="url" class="transform-input" placeholder="输入网址，例如：www.yunshipei.com" required /> 
        <input type="submit" class="transform-submit" value="开启云适配"/>
      </div>
    </form>
  </div>
</div>

<!-- 四个图标 -->
<div class="properties-mod module-wrap">
  <div class="am-container">
    <ul class="properties-list am-avg-sm-2 am-avg-md-4">
      <li >
        <img src="/yun/Public/Home/images/properties-img1.jpg" />
        <p>只需插入一行代码</p>
      </li>
      <li >
        <img src="/yun/Public/Home/images/properties-img2.jpg" />
        <p>网址不变</p>
      </li>
      <li>
        <img src="/yun/Public/Home/images/properties-img3.jpg" />
        <p>内容同步更新</p>
      </li>
      <li>
        <img src="/yun/Public/Home/images/properties-img4.jpg" />
        <p>云端加速</p>
      </li>      
    </ul>
  </div>
</div>

<!-- 适配总数据 -->
<div class="data-mod module-wrap">
  <div class="am-container">
    <p class="data-totle">20,000,000,000+</p>
    <p class="data-desc">每一秒，全球5000多种移动设备都由云适配提供着网页适配服务</p> 
    <ul class="data-view-list am-avg-md-5 am-avg-sm-3">
      <li>
        <div class="info-data-mod">
          <div class="info-data"><span>80%</span></div>
          <div class="info-more"><span>节省 <br/><strong>80%</strong> <br/>流量</span></div>
        </div>
      </li>
      <li>
        <div class="info-data-mod">
          <div class="info-data"><span>99.9%</span></div>
          <div class="info-more"><span><strong>99.9%</strong> <br/>同步率</span></div>
        </div>
      </li>
      <li>
        <div class="info-data-mod"><div class="info-data"><span>95%</span></div>
          <div class="info-more"><span>节约 <br/><strong>95%</strong> <br/>成本</span></div>
        </div>
      </li>
      <li>
        <div class="info-data-mod">
          <div class="info-data"><span>20亿</span></div>
          <div class="info-more"><div class="info-data-mod"><span>已适配 <br/><strong>20亿</strong> <br/>网页</span></div>
        </div>
      </li>
      <li>
        <div class="info-data-mod">
          <div class="info-data"><span>6种</span></div>
          <div class="info-more"><span>打通 <br/><strong>6大</strong> <br/>营销入口</span></div>
        </div>
      </li>
    </ul>
  </div>
</div>

<!-- 介绍 -->
<div class="intro-mod module-wrap no-borderb">
  <div class="am-container">
    <div class="intro-title">
      <h1>云适配</h1>
      <span>激发强大生产力与创造力，始于前所未见的易用性</span>
    </div>
    <div class="intro-list am-g">
      <div class="am-u-md-6 am-u-sm-12 intro-img">
        <img src="/yun/Public/Home/images/intro-img1.png" />
      </div>
      <div class="am-u-md-6 am-u-sm-12am-u-md-6 am-u-sm-12am-u-md-6 am-u-sm-12 intro-text">
        <h3>一行代码，即刻创建移动跨屏网站</h3>
        <span>客户只需嵌入一行JS代码摒弃繁琐的传统建站模式，降低传统建站95%以上经济成本和相对应时间成本</span>
      </div>
    </div>
    <div class="intro-list am-g">
      <div class="am-u-md-6 am-u-sm-12 intro-img">
        <img src="/yun/Public/Home/images/intro-img2.png" />
      </div>
      <div class="am-u-md-6 am-u-sm-12am-u-md-6 am-u-sm-12 intro-text">
        <h3>所见即所用可视化工具</h3>
        <span>简单、易用、可视化，拖拖拽拽即可完成适配，提供从一键自动适配到代码级定制适配，手机、Pad同步预览的多层次、跨设备适配工具。</span>
      </div>
    </div>
    <div class="intro-list am-g">
      <div class="am-u-md-6 am-u-sm-12 intro-img">
        <img src="/yun/Public/Home/images/intro-img3.png" />
      </div>
      <div class="am-u-md-6 am-u-sm-12 intro-text">
        <h3>服务管理后台</h3>
        <span>可以实时的查看流量、营销统计数据，快速申请百度直达号，拥有原生APP，轻松对网站进行默认访问、图片加速设置</span>
      </div>
    </div>    
  </div>
</div>


<!-- footer -->
<footer>
  <div class="am-container">
    <div class="footer-logo">
      <img src="/yun/Public/Home/images/logo-colorful.png" />
    </div>
    <ul class="social-links-list">  
      <li>
        <a href="http://wpa.qq.com/msgrd?v=3&amp;uin=744071477&amp;site=qq&amp;menu=yes" target="_blank" title="qq">
          <i class="am-icon-qq am-icon-sm"></i>
        </a>
      </li>
      <li>
        <a href="" target="_blank" id="wechat" title="微信">
          <i class="am-icon-weixin am-icon-sm"></i>
        </a>
      </li>
      <li>
        <a href="http://weibo.com/allmobilize" target="_blank" title="新浪微博">
          <i class="am-icon-weibo am-icon-sm"></i>
        </a>
      </li> 
    </ul>
    <ul class="footer-nav">
      <li>
        <a href="/about.html">关于我们</a>
      </li>
      <li>
        <a href="/faq.html">常见问题</a>
      </li>
      <li>
        <a href="/build.html">移动建站白皮书</a>
      </li>
      <li>
        <a href="http://dev.yunshipei.com/">开发者中心</a>
      </li>
    </ul>
    <ul class="friend-links">
      <li>友情链接：</li>
      <li>
        <a href="http://segmentfault.com/" target="_blank" title="SegmentFault">SegmentFault</a>
      </li>
      <li>
        <a href="http://www.zjgsq.com/" target="_blank" title="Web前端">Web前端</a>
      </li>
      <li>
        <a href="http://apicloud.com/" target="_blank" title="APICloud">APICloud</a>
      </li>
      <li>
        <a href="http://www.w3cdream.com/" target="_blank" title="W3C梦想站">W3C梦想站</a>
      </li>
      <li>
        <a href="http://bbs.egret-labs.org/" target="_blank" title="Egret社区">Egret社区</a>
      </li>
      <li>
        <a href="https://meiqia.com/integrations" target="_blank" title="美洽客服">美洽客服</a>
      </li>
    </ul>
  </div>
</footer>

<!-- 微信弹出框 -->
<div class="weixin-mod">
  <div class="weixin-inner">
    <a class="weixin-close"><i class="am-icon-times-circle"></i></a>
    <div class="qrcode-weixin">
      <img src="/yun/Public/Home/images/qrcode-weixin.jpg" alt="">
    </div>
    <div class="weixin-info">在微信上关注我们</div>
  </div>
</div>
</body>
<!--[if lt IE 9]>
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="/yun/Public/Home/js/polyfill/rem.min.js"></script>
<script src="/yun/Public/Home/js/polyfill/respond.min.js"></script>
<script src="/yun/Public/Home/js/amazeui.legacy.js"></script>
<![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<script src="/yun/Public/Home/js/jquery.min.js"></script>
<script src="/yun/Public/Home/js/amazeui.min.js"></script>
<script src="/yun/Public/Home/js/app.js"></script>
<!--<![endif]-->
</html>