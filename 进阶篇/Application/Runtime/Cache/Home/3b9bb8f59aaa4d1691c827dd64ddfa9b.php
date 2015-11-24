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
  <link rel="alternate icon" type="image/png" href="/amazeUI/Public/Home/i/favicon.png">
  <link rel="stylesheet" href="/amazeUI/Public/Home/css/amazeui.min.css"/>
  <link rel="stylesheet" href="/amazeUI/Public/Home/css/app.css"/>
</head>
<body>
<!-- 手机版侧滑菜单 -->
<div id="navPush" class="am-offcanvas nav-push-content">
  <div class="am-offcanvas-bar">
    <div class="am-offcanvas-content ">
      <ul class="am-menu am-menu-offcanvas1  menu-main am-no-layout">
        <li><a href="<?php echo U('Index/index') ;?>" class="am-active">首页</a></li>
        <li><a href="<?php echo U('Products/index') ;?>">产品</a></li>
        <li><a href="<?php echo U('Case/index') ;?>">案例</a></li>
        <li><a href="<?php echo U('Signup/index') ;?>">合作</a></li>
        <li><a href="<?php echo U('Products/pricing') ;?>">定制</a></li>
        <li><a href="<?php echo U('About/index') ;?>">关于</a></li>
        <li><button class="am-btn am-btn-secondary am-topbar-btn am-btn-sm"><span class="am-icon-pencil"></span> 注册</button></li>
        <li><a href="<?php echo U('Admin/Public/login') ;?>"><button class="am-btn am-btn-primary am-topbar-btn am-btn-sm"><span class="am-icon-user"></span> 登录</button></a></li>
      </ul>
    </div>
  </div>
</div>

<!-- 电脑和平板 菜单-->
<header class="am-topbar am-topbar-fixed-top">
  <div class="am-container">
    <h1 class="am-topbar-brand">
      <a href="#"><img src="/amazeUI/Public/Home/images/logo.png" /></a>
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
          <a href="<?php echo U('Admin/Public/login') ;?>"><button class="am-btn am-btn-primary am-topbar-btn am-btn-sm"><span class="am-icon-user"></span> 登录</button></a>
        </div>
      </ul>
    </div>
  </div>
</header>


<!-- banner -->
<div class="other-banner-mod am-vertical-align">
    <div class="am-vertical-align-middle">
      <h1>One Web,Any Device</h1>
      <h2>万物互联，无缝体验</h2>
    </div>
</div>

<!-- 链接icon -->
<div class="about-menu-mod ">
  <div class="am-container">
    <ul class="about-menu am-avg-md-4 am-avg-sm-4">
      <li class="active">
        <a href="about.html"><i class="menu-icon"></i><span>关于我们</span></a>
      </li>
      <li>
        <a href="reports.html"><i class="menu-icon"></i><span>媒体报道</span></a>
      </li>
      <li>
        <a href="contacts.html"><i class="menu-icon"></i><span>联系方式</span></a>
      </li>
      <li>
        <a href="join.html"><i class="menu-icon"></i><span>加入我们</span></a>
      </li>
    </ul>
  </div>
</div>

<!-- 视频列表 -->
<div class="about-video-mod module-wrap">
  <div class="am-container">
    <h2>关于我们</h2>
    <div class="about-video-list">
      <div class="am-u-md-7 am-u-sm-12 about-video">
        <video src="/amazeUI/Public/Home/video/video1.mp4" width="100%"  controls="controls" poster="/amazeUI/Public/Home/images/about/video1.png" ></video>
      </div>
      <div class="am-u-md-5 am-u-sm-12 about-video-word">
        <p>云适配是由前微软美国总部IE浏览器核心研发团队成员及移动互联网行业专家陈本峰在美国西雅图创立。我们专注于为全球的企业提供领先的跨屏、跨终端网站移动化解决方案，帮助各类企业快速完成移动化战略。</p>   
        <p>对于企业用户，我们提供中国首个网页跨屏适配云平台——云适配IDE，基于国际专利及最前沿的HTML5技术，它能够帮助企业快速的实现网站移动化，解决不同屏幕上的网页适配问题，大幅度地节省跨屏网站的开发和维护成本。</p>   
        <p>对于开发者，我们提供一流的开发工具、平台和服务。云适配国内首个开源的HTML5跨屏前端框Amaze UI拥有丰富的本地化组件，能够帮助开发者高效的建立移动、跨屏网站。</p>
      </div>
    </div>
    <div class="about-video-list">
      <div class="am-u-md-7 am-u-sm-12 about-video">
        <video src="/amazeUI/Public/Home/video/video2.mp4" width="100%"  controls="controls" poster="/amazeUI/Public/Home/images/about/video2.png" ></video>
      </div>
      <div class="am-u-md-5 am-u-sm-12 about-video-word">
        <p>从2012年9月至今，我们的开发平台已经吸引了超过15万名的开发者加入；云适配技术也已经成功应用于超过60万家网站，包括微软、联想、海信等全球500企业，以及中国政府网等半数省级以上政府网站等。我们的使命是通过技术创新，打造极致的Web体验。</p>
        <p>我们的团队成员大多来自于微软、Google、百度、三星等知名互联网公司，具备多年的工作经验、优秀的技术实力和严谨的工作态度。我们将以强大的技术和优质的服务为您产品和企业的快速发展提供坚实保障。</p>
      </div>
    </div>
  </div>
</div>

<!-- 云适配荣誉 -->
<div class="about-honour-mod module-wrap no-borderb">
  <div class="am-container">
    <h2>云适配荣誉</h2>
    <ul class="am-avg-md-3 am-avg-sm-1 about-honour-list">
      <li><a href="javascript:;">红鲱鱼<span>2013年亚洲红鲱鱼创新百强</span></a></li>     
      <li><a href="javascript:;">CSDN<span>2013年中国“云创新企业TOP10”</span></a></li>
      <li><a href="javascript:;">36氪<span>2013年明日之星</span></a></li>
      <li><a href="javascript:;">易观之星<span>2013年移动互联最具投资价值奖</span></a></li>
      <li><a href="javascript:;">创业邦<span>2013年中国年度创新成长企业</span></a></li>
      <li><a href="javascript:;">香港ICT<span>2014最佳科技创新奖</span></a></li>
      <li><a href="javascript:;">品牌中国<span>2014年中国移动互联网创意体验奖</span></a></li>
      <li><a href="javascript:;">中国信息协会<span>2014年政府网站新技术应用优秀案例</span></a></li>
      <li><a href="javascript:;">新财富<span>最具潜力商业模式</span></a></li>
    </ul>
  </div>
</div>


<!-- footer -->
<footer>
  <div class="am-container">
    <div class="footer-logo">
      <img src="/amazeUI/Public/Home/images/logo-colorful.png" />
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
      <img src="/amazeUI/Public/Home/images/qrcode-weixin.jpg" alt="">
    </div>
    <div class="weixin-info">在微信上关注我们</div>
  </div>
</div>
</body>
<!--[if lt IE 9]>
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="/amazeUI/Public/Home/js/polyfill/rem.min.js"></script>
<script src="/amazeUI/Public/Home/js/polyfill/respond.min.js"></script>
<script src="/amazeUI/Public/Home/js/amazeui.legacy.js"></script>
<![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<script src="/amazeUI/Public/Home/js/jquery.min.js"></script>
<script src="/amazeUI/Public/Home/js/amazeui.min.js"></script>
<script src="/amazeUI/Public/Home/js/app.js"></script>
<!--<![endif]-->
</html>