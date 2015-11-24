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
        <h1>为企业提供多种定制化适配解决方案</h1>
        <h2>他们都在使用云适配实现网站移动化</h2>
    </div>
</div>

<!-- slider -->
<div class="case-slider">
  <div class="am-container">
    <div data-am-widget="slider" class="am-slider am-slider-default" data-am-slider='{&quot;controlNav&quot;:false}'>
      <ul class="am-slides">
        <li>
          <div class="case-item-mod">
              <div class="case-item-pic">
                  <img src="/amazeUI/Public/Home/images/case/case-sample1.png" alt=""/>
              </div>
              <div class="case-item-text">
                <h5 class="company-logo"><img src="/amazeUI/Public/Home/images/case/case-logo1.png" alt="Gov.cn" /></h5>
                <p>背景介绍：中国政府网是中华人民共和国国务院和国务院各部委，以及各省、自治区、直辖市人民政府在国际互联网上发布政府信息和提供在线服务的综合平台，是国家对国内外发布重要决定、决策的重要窗口。随着移动互联网的发展，移动端访问用户越来越多，为了普及中国政府网，并让人们更便利地获取国家政府最新、最权威的新闻动态，中国政府网选择选择了行业内唯一拥有跨屏多终端适配领先技术的云适配作为唯一移动端网站适配合作伙伴。</p>
                <p>技术要求：中国政府网的极高权威性，宽广的辐射面，因此对于网站展示效果和安全性有着极高的要求。另外，政府官方网站的用户不仅有政府机关，更辐射至普通百姓大众，因此需要考虑各类人群阅读的需要，特别是有视力障碍的人士。</p>
                <p>适配效果：云适配采用HTML5的技术和CSS渲染技术，将原官网的内容重新进行符合各种终端识别的布局设计，并为适配后的网站实现与原PC 网站同步稳定的内容更新。更为人性化的是为有视力障碍的人群定制出触摸发声的无障碍阅读版移动网站，一上线就迅速得到各类人士的支持。</p>
              </div>
          </div>
        </li>
        <li>
          <div class="case-item-mod">
            <div class="case-item-pic">
              <img src="/amazeUI/Public/Home/images/case/case-sample2.png" alt=""/>
            </div>
            <div class="case-item-text">
              <h5 class="company-logo"><img src="/amazeUI/Public/Home/images/case/case-logo2.png" alt="微软亚太研发集团" /></h5>
              <p>背景介绍：微软亚太研发集团成立于2006年1月18日，它的成立是微软在中国和亚太地区长期投入及发展的重要里程碑事件之一。微软作为IT界引领者，对各个IT公司以及整个互联网都有着极大的影响力和号召力。</p>
              <p>技术要求：微软亚太研发集团，要求其门户网站简洁、专业。同时最为对外展示的窗口，对用户的浏览体验有着极高的要求。</p>
              <p>适配效果：云适配独一无二的适配技术完完全全实现了域名不变，网址统一。页面清爽简洁，又不失大气，满足了用户在各种设备上的浏览体验。</p>
            </div>
          </div>
        </li>
        <li>
          <div class="case-item-mod">
            <div class="case-item-pic">
              <img src="/amazeUI/Public/Home/images/case/case-sample3.png" alt=""/>
            </div>
            <div class="case-item-text">
              <h5 class="company-logo"><img src="/amazeUI/Public/Home/images/case/case-logo3.png" alt="海信" /></h5>
              <p>背景介绍：作为中国最大的3C产业集团，2013年实现销售收入932亿元 ，海信产品远销欧洲、美洲、非洲、东南亚等地区的130多个国家，在南非、阿尔及利亚、埃及等地拥有生产基地，在美国、欧洲、澳洲、日本等地设有销售机构，海信网站在电商销售领域无疑拥有极大的影响力和品牌号召力。</p>
              <p>技术要求：海信网站作为电商网站，对产品及时更新，筛选，具体产品放大缩小处理，网站加载速度等均有较高的要求，尤其是从PC网站转向移动端中的事件处理支持。</p>
              <p>适配效果：海信官网云适配版的交互设计人性化、简洁、时尚。另外PC版和移动版内容同步更新，内容实现无缝对接，使海信的品牌价值在移动端和PC端得到融合，最大程度展现海信作为一线品牌的高尚品质。海信云适配版于2014年11月10日正式上线，日均IP和及日访问PV均呈3倍增长，天猫双11总成交额超过571亿，而无线端成交占比占总成交额42.6%，更进一步扩大了海信网站的电商影响力。</p>
            </div>
          </div>
        </li>
        <li>
          <div class="case-item-mod">
            <div class="case-item-pic">
              <img src="/amazeUI/Public/Home/images/case/case-sample4.png" alt=""/>
            </div>
            <div class="case-item-text">
              <h5 class="company-logo"><img src="/amazeUI/Public/Home/images/case/case-logo4.png" alt="光明网" /></h5>
              <p>背景介绍：光明网是国家重点新闻网站及传统媒体网站，也是国内唯一一家定位于思想理论领域的中央重点新闻网站。在舆论引导及正面宣传报道上具有无可比拟的权威性与品牌优势。</p>
              <p>技术要求：新闻媒体对选择多渠道发布新闻事件，实时性需要做到高度统一，同时作为对外的专业媒体窗口，文章呈现和用户的阅读体验要求极高。</p>
              <p>适配效果： 云适配独一无二的适配技术，真正做到了网址统一，流量聚合。光明网云适配版延续了光明网严肃专业的中央新闻报道风格，满足了用户在各种移动适配后网站上的热点栏目板块阅读与评论的舒适体验。 </p> 
            </div>
          </div>
        </li>
        <li>
          <div class="case-item-mod">
            <div class="case-item-pic">
              <img src="/amazeUI/Public/Home/images/case/case-sample5.png" alt=""/>
            </div>
            <div class="case-item-text">
              <h5 class="company-logo"><img src="/amazeUI/Public/Home/images/case/case-logo5.png" alt="罗莱家纺" /></h5>
              <p>背景介绍：罗莱家纺是一家专业经营家用纺织品的企业，是国内最早涉足家用纺织品行业，并形成自己独特风格的家纺企业。罗莱家纺作为家纺企业中的翘楚，是家纺企业中的风向杆，对其他家纺企业有着无与伦比的号召力。</p>
              <p>技术要求：罗莱家纺作为一家家纺企业，官网适配上要求拥有“家”     一般温馨的氛围同时，也需要优雅地体现出罗莱产品的文化沉淀及发展历程，因此在网站视觉和用户体验上均有较高的要求。对于技术上的开发成本有限，需要有专业、高效而又低成本的网站适配技术帮助他们实现网站移动化。</p>
              <p>适配效果：为了配合罗莱家纺本身定位和形象气质，适配网站延续了形象定位，突出了温馨的氛围，使得消费者对于罗莱家纺的认知视觉统一，加深印象。页面简洁大方，给用户以更好的视觉享受。云适配版上线后，罗莱家纺只是将原PC网站变换成手机版、保持了宣传时的域名的统一、更不需要数据迁移，而友好的交互、实时的信息更新、精准的定位。</p>
            </div>
          </div>
        </li>
        <li>
          <div class="case-item-mod">
            <div class="case-item-pic">
              <img src="/amazeUI/Public/Home/images/case/case-sample6.png" alt=""/>
            </div>
            <div class="case-item-text">
              <h5 class="company-logo"><img src="/amazeUI/Public/Home/images/case/case-logo6.png" alt="中国银泰" /></h5>
              <p>背景介绍：银泰集团是一家以商业零售、地产开发与经营、矿产资源、智能物流、投资与金融六大业务为主的多元化产业投资集团。拥有多家境内外上市公司和100多家全资或控股公司。在其旗下子公司和商业集团中有着极强的影响力。</p>
              <p>技术要求：中国银泰作为一家投资公司，对其门户网站布局精致专业不失企业特色，展现内容简洁明了，在用户体验和信息展现上均有较高的要求。</p>
              <p>适配效果：银泰官网云适配版延续了PC网站恢弘大气的特点，同时在细节的把握上，严谨、细腻、生动，更好的契合银泰的“精致专业、执着务实、洞察引领”的理念，同时云适配独家提供的图片压缩加速技术，给了用户极佳的视觉效果及浏览体验。</p> 
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</div>

<!-- 案例 gallery -->
<div class="case-gallery module-wrap no-borderb">
  <div class="am-container">
    <ul data-am-widget="gallery" class="am-gallery am-avg-sm-2 am-avg-md-3 am-avg-lg-3 am-gallery-default" data-am-gallery="{ pureview: true }">
    <?php if(is_array($castinfo)): $i = 0; $__LIST__ = $castinfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
        <div class="am-gallery-item">
          <a href="http://bellevuecn.com" target="_blank" class="gallery-mask" rel="nofollow">
              <p class="site-name"><?php echo $vo['sitename'];?></p>
              <div class="qrcode-mod"></div>
              <p class="site-url"><?php echo $vo['siteurl'];?></p>
          </a>
          <a href="<?php echo $vo['siteurl'];?>" target="_blank" class="gallery-mask-dark am-vertical-align-middle" rel="nofollow"><span><?php echo $vo['sitename'];?></span></a>
          <img src="/amazeUI/Public/Home/<?php echo $vo['siteimg'];?>" alt="<?php echo $vo['sitename'];?>"/>
        </div>
      </li><?php endforeach; endif; else: echo "" ;endif; ?>

    </ul>
    <div class="gallery-more"><a href="javascript:void(0)">查看更多</a></div>
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