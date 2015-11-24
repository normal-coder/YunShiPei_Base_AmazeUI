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
<div class="other-banner-mod am-vertical-align">
    <div class="am-vertical-align-middle">
      <h1>云适配</h1>
      <h2>诚邀合作伙伴，领跑移动互联网</h2>
    </div>
</div>

<!-- 帮助 -->
<div class="coo-help-mod module-wrap">
  <div class="am-container">
    <h2>成为云适配代理商，您还可以获得以下帮助</h2>
    <div class="am-u-md-3 am-u-sm-12 coo-help-item">
      <img src="/yun/Public/Home/images/coo-help-1.png"/>
      <h5>跨平台适配专家</h5>
      <p>一行代码帮助企业快速创建跨屏网站，适配包括各种智能手机、平板电脑及多种移动终端设备，令企业的PC网站与移动端网站域名不变，内容实时同步更新，企业无任何维护成本。</p>
    </div>
    <div class="am-u-md-3 am-u-sm-12 coo-help-item">
      <img src="/yun/Public/Home/images/coo-help-2.png"/>
      <h5>助力企业移动营销</h5>
      <p>云适配为您的客户量身打造不同访问设备的适配解决方案，助力企业快速打通微信、微博、APP、二维码、短信等移动营销入口，更有一键拨叫、社区分享、地图导航、CDN加速、数据分析等增值功能供您选择。</p>
    </div>
    <div class="am-u-md-3 am-u-sm-12 coo-help-item">
      <img src="/yun/Public/Home/images/coo-help-3.png"/>
      <h5>强有力的渠道代理政策</h5>
      <p>每个城市我们选择有限数量的渠道代理商长期合作，成为云适配代理商，享受丰厚的代理商折扣和返利以及不断增加的增值服务，并长期享受利润分成，让您和云适配共同成长。</p>
    </div>
    <div class="am-u-md-3 am-u-sm-12 coo-help-item">
      <img src="/yun/Public/Home/images/coo-help-4.png"/>
      <h5>成熟的代理商支持体系</h5>
      <p>协助代理商建立自己的技术和销售团队，并给予代理商销售、技术、设计各方面的指导和帮助，以及大客户案例的实时更新，代理商大客户的协助销售计划、会销支持，以及代理商区域客户的分单支持。</p>
    </div>
  </div>
</div>

<!-- 合作咨询 -->
<div class="coo-contact-mod module-wrap">
  <div class="am-container">
    <h2>代理合作咨询，让云适配的营销专家为您答疑</h2>
    <div class="am-u-md-12 am-u-sm-12 coo-contact-con ">
      <a href="http://wpa.qq.com/msgrd?v=3&uin=1071413550&site=qq&menu=yes">
        <i class="am-icon-qq"></i>
        <span>点击咨询</span>
      </a>
      <div class="contact-manager-mod">
        <p>王经理：（全国）</p>
        <ul class="contact-info">
          <li>座机：010-5363 2515</li>
          <li>TEL: 13011137639</li>
          <li>QQ: 1071413550</li>
          <li><span>微信: Candywangno1</span><i id='manager-qrcode' class='am-icon-qrcode'></i></li>
        </ul>
      </div>
    </div>
    <div class="am-u-sm-12 am-u-md-12">
      <p class="agency-email">Email:<a href="mailto:partners@yunshipei.com">partners@yunshipei.com</a></p>
    </div>
  </div>
</div>

<!-- 成为代理商 申请表格 -->
<div class="coo-join-mod module-wrap no-borderb">
  <div class="am-container">
    <h2>即刻成为我们的代理商，开启移动营销的大门</h2>
    <form class="am-form">
      <div class="am-form-group am-u-md-5">
        <label for="name">姓名*</label>
        <input type="text" name="name" id="name" class="am-form-field" placeholder="您的姓名" required/>
      </div>
      <div class="am-form-group am-u-md-7">
        <label for="tel">电话*</label>
        <input type="text" name="tel" id="tel" class="am-form-field" placeholder="您的电话" required/>
      </div>
      <div class="am-form-group am-u-md-5">
        <label for="qq">QQ*</label>
        <input type="text" name="qq" id="qq" class="am-form-field" placeholder="您的QQ" required/>
      </div>
      <div class="am-form-group am-u-md-7">
        <label for="email">邮箱地址</label>
        <input type="email" name="email" id="email" class="am-form-field" placeholder="您的电子邮箱地址" />
      </div>
      <div class="am-form-group am-u-md-12">
        <label for="url">城市*</label>
        <input type="text" name="city" id="city" class="am-form-field" placeholder="您的城市" required />
      </div>
      <div class="am-form-group am-u-md-12">
        <label for="host">公司网址*</label>
        <input type="url" name="host" id="host" class="am-form-field" placeholder="您的公司"/>
      </div>
      <div class="am-form-group am-u-md-12">
        <label for="desc">公司简介及主营业务</label>
        <textarea class="company-intro" name="desc" id="desc" rows="5" placeholder="简单介绍一下您公司背景"></textarea>
      </div>
      <div class="am-form- am-u-md-12 coo-join-submit">
        <button type="submit" class=" submit-btn submit-btn-style">即刻加入</button>
      </div>
    </form>
  </div>
</div>

<!-- 合作咨询 弹出二维码 -->
<div class="coo-weixin-mod">
    <div class="weixin-inner">
        <a class="weixin-close"><i class="am-icon-times-circle"></i></a>
        <div class="qrcode-weixin">
            <img src="/yun/Public/Home/images/manager-qrcode.jpg" alt="">
        </div>
        <div class="weixin-info">扫描二维码，咨询云适配代理合作</div>
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