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
<div class="products-banner-mod">
    <div class="products-banner-inner"></div>
</div>

<!-- products tabs -->
<div class="products-main-mod">
  <div data-am-widget="tabs" class="am-tabs am-tabs-default products-tabs">
    <ul class="am-tabs-nav am-cf">
      <li class="am-active">
        <a href="[data-tab-panel-0]">适配工具</a>
      </li>
      <li class="">
        <a href="[data-tab-panel-1]">适配服务</a>
      </li>
      <li class="">
        <a href="[data-tab-panel-2]">Amaze UI</a>
      </li>
    </ul>
    <div class="am-tabs-bd">
      <div data-tab-panel-0 class="am-tab-panel am-active">
        <div class="products-item-wrap">
          <div class="am-container products-item">
            <h2>所见即所得IDE工具，超强个性化订制</h2>
            <img src="/yun/Public/Home/images/products/manage_src_1.png" />
          </div>
        </div>
        <div class="products-item-wrap">
          <div class="am-container products-item">
            <div class="am-u-md-5 sm-u-sm-12 products-pic">
              <img src="/yun/Public/Home/images/products/product-1-1.png" alt=""/>
            </div>
            <div class="am-u-md-6 am-u-sm-12 products-text">
              <h5>简单、易用</h5>
              <p>只需要懂得初级的HTML/CSS/JQuery，就可以使用专门针对移动网站设计的Amaze UI框架，轻松设计打造符合移动设计体验的跨屏网站</p>
            </div>
          </div>
        </div>
        <div class="products-item-wrap">
          <div class="am-container products-item">
            <div class="am-u-md-5 sm-u-sm-12 products-pic">
              <img src="/yun/Public/Home/images/products/product-1-2.png" alt=""/>
            </div>
            <div class="am-u-md-6 am-u-sm-12 products-text">
              <h5>可视化操作</h5>
              <p>IDE提供所见即所得的模板设计工具，通过简单拖拽即可完成页面模板搭建</p>
            </div>
          </div>
        </div>
        <div class="products-item-wrap">
          <div class="am-container products-item">
            <div class="am-u-md-5 sm-u-sm-12 products-pic">
              <img src="/yun/Public/Home/images/products/product-1-3.png" alt=""/>
            </div>
            <div class="am-u-md-6 am-u-sm-12 products-text">
              <h5>多层级</h5>
              <p>拥有通用模版一键适配，并提供快速适配、深度定制两种模式，用户既可以通过点选、拖拽，即可实现个性化风格的移动网站页面模板搭建，也可以通过编写代码的方式轻松设计打造出界面高度个性化的、带有交互功能、符合移动设计体验的跨屏网站</p>
            </div>
          </div>
        </div>
        <div class="products-item-wrap">
          <div class="am-container products-item">
            <div class="am-u-md-5 sm-u-sm-12 products-pic">
              <img src="/yun/Public/Home/images/products/product-1-4.png" alt=""/>
            </div>
            <div class="am-u-md-6 am-u-sm-12 products-text">
              <h5>多设备同步编辑预览</h5>
              <p>云适配IDE支持多设备的模块、数据同步编辑，并通过简洁的预览界面，实现多平台、多设备预览</p>
            </div>
          </div>
        </div>
      </div>
      <div data-tab-panel-1 class="am-tab-panel ">
        <div class="products-item-wrap">
          <div class="am-container products-item">
            <h2>清晰、完善的服务管理后台</h2>
            <img src="/yun/Public/Home/images/products/manage_src_2.png" />
          </div>
        </div>
        <div class="products-item-wrap">
          <div class="am-container products-item">
            <div class="am-u-md-5 sm-u-sm-12 products-pic">
              <img src="/yun/Public/Home/images/products/product-2-1.png" alt=""/>
            </div>
            <div class="am-u-md-6 am-u-sm-12 products-text">
              <h5>统计服务</h5>
              <p>提供网站日均流量统计，并有移动/PC数据v对比；同时拥有移动营销数据统计，让你实时掌握网站营销动态，把握移动优化方向</p>
            </div>
          </div>
        </div>
        <div class="products-item-wrap">
          <div class="am-container products-item">
            <div class="am-u-md-5 sm-u-sm-12 products-pic">
              <img src="/yun/Public/Home/images/products/product-2-2.png" alt=""/>
            </div>
            <div class="am-u-md-6 am-u-sm-12 products-text">
              <h5>优先获取百度轻直达号</h5>
              <p>作为百度直达号全国核心战略合作伙伴，一站式完成百度轻应用定制和直达号申请，不仅享受到移动跨屏适配的服务，还有百度大流量支持，帮助企业实现最大范围进行产品营销</p>
            </div>
          </div>
        </div>
        <div class="products-item-wrap">
          <div class="am-container products-item">
            <div class="am-u-md-5 sm-u-sm-12 products-pic">
              <img src="/yun/Public/Home/images/products/product-2-3.png" alt=""/>
            </div>
            <div class="am-u-md-6 am-u-sm-12 products-text">
              <h5>云加速</h5>
              <p>全球独创的图片云端压缩技术，平均节省流量80%以上，下载速度提升5倍以上，多点CDN部署，使用户就近同步取得适配页面，加速网站响应，提高了用户访问体验和二次访问率</p>
            </div>
          </div>
        </div>
        <div class="products-item-wrap">
          <div class="am-container products-item">
            <div class="am-u-md-5 sm-u-sm-12 products-pic">
              <img src="/yun/Public/Home/images/products/product-2-4.png" alt=""/>
            </div>
            <div class="am-u-md-6 am-u-sm-12 products-text">
              h5>快速拥有原生APP</h5>
              <p>无需单独开发，仅需简单设置，云适配网站经技术封装成为APP产品，可在Market进行同步推广。 同时用户可将云适配网站随时以APP图标形式保存在手机桌面，方便多次浏览，提高信息的刺激强度，促进会员快速交易</p>
            </div>
          </div>
        </div>
      </div>
      <div data-tab-panel-2 class="am-tab-panel ">
        <div class="products-item-wrap">
          <div class="am-container products-item">
            <h2>Amaze UI中国首个开源HTML5跨屏前端框架</h2>
            <img src="/yun/Public/Home/images/products/manage_src_3.png" />
          </div>
        </div>
        <div class="products-item-wrap">
          <div class="am-container products-item">
            <div class="am-u-md-5 sm-u-sm-12 products-pic">
              <img src="/yun/Public/Home/images/products/product-3-1.png" alt=""/>
            </div>
            <div class="am-u-md-6 am-u-sm-12 products-text">
              <h5>国内首款跨屏框架</h5>
              <p>Amaze 是国内首款推出的可支持多设备、多平台的跨屏前端框架</p>
            </div>
          </div>
        </div>
        <div class="products-item-wrap">
          <div class="am-container products-item">
            <div class="am-u-md-5 sm-u-sm-12 products-pic">
              <img src="/yun/Public/Home/images/products/product-3-2.png" alt=""/>
            </div>
            <div class="am-u-md-6 am-u-sm-12 products-text">
              <h5>Mobile first  移动优先</h5>
              <p>Amaze始终保持其 Mobile first 的理念。专注于最重要的内容和交互，适应移动互联网潮流</p>
            </div>
          </div>
        </div>
        <div class="products-item-wrap">
          <div class="am-container products-item">
            <div class="am-u-md-5 sm-u-sm-12 products-pic">
              <img src="/yun/Public/Home/images/products/product-3-3.png" alt=""/>
            </div>
            <div class="am-u-md-6 am-u-sm-12 products-text">
              <h5>丰富的Web组件</h5>
              <p>Amaze中包含了丰富的Web组件，根据这些组件，可以快速的搭建一个界面出色、功能完备、体验优秀的跨屏网站</p>
            </div>
          </div>
        </div>
        <div class="products-item-wrap">
          <div class="am-container products-item">
            <div class="am-u-md-5 sm-u-sm-12 products-pic">
              <img src="/yun/Public/Home/images/products/product-3-4.png" alt=""/>
            </div>
            <div class="am-u-md-6 am-u-sm-12 products-text">
              <h5>定制自己的框架代码</h5>
              <p>Amaze UI因为可拓展的结构设计，用户可以轻松的对其中的HTML/CSS进行修改，依据自己的需求裁剪代码，从而定制属于自己的框架代码</p>
            </div>
          </div>
        </div>
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