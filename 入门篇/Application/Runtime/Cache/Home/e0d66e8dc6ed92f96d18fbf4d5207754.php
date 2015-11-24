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
      <h1>选择最适合你的云适配服务</h1>
      <h2>免费自助，付费定制</h2>
      <h3>400-069-0309</h3>
    </div>
</div>

<!-- 表格 -->
<div class="pricing-con module-wrap no-borderb">
  <div class="am-container">
    <div class="plans-free am-u-md-6 am-u-sm-12">
      <div class="free-title">
          <span>免 费</span>
      </div>
      <table>
        <tr>
          <td><p>自助使用工具</p></td>
        </tr>
        <tr>
          <td>适配工具使用</td>
        </tr>
        <tr>
          <td>社区支持</td>
        </tr>
        <tr>
          <td>后台基本功能</td>
        </tr>
        <tr>
          <td>云加速</td>
        </tr>
        <tr>
          <td>统计服务</td>
        </tr>
        <tr>
          <td>直达号申请</td>
        </tr> 
        <tr></tr>
        <tr>
          <td class="free-use"><a href="http://platform.yunshipei.com/signup#!/" target="_blank" class="plans-btn">立即使用</a></td>
        </tr>
      </table>
    </div>
    <div class="plans-pay am-u-md-6 am-u-sm-12">
      <div class="pay-title">
        <span>付费</span>
      </div>
      <table>
        <tr>
          <td>
            <p>由官方服务商提供定制服务</p>
            <span>400-069-0309</span>
          </td>
        </tr>
        <tr>
          <td>适配所有主流智能手机</td>
        </tr>
        <tr>
          <td>设计师定制设计</td>
        </tr>
        <tr>
          <td>云加速（图片压缩及CDN加速功能）</td>
        </tr>
        <tr>
          <td>统计服务（包含订阅服务）</td>
        </tr>
        <tr>
          <td>7×24小时服务支持</td>
        </tr>
        <tr>
          <td>百度直达号申请</td>
        </tr>
        <tr>
            <td>封装APP</td>
        </tr>
        <tr>
          <td class="pricing-cus"><a href="javascript: void(0)" id="btn-formulate-btn" data-reverse="0" class="plans-btn">我要定制</a></td>
        </tr>
      </table>
    </div>
    <!-- 定制弹出框 -->
    <div class="am-modal am-modal-no-btn" tabindex="-1" id="formulate">
      <div class="am-modal-dialog">
        <div class="am-modal-hd">
          填写您的定制需求
          <a href="javascript: void(0)" class="am-close am-close-spin" data-am-modal-close>&times;</a>
        </div>
          <div class="am-modal-bd">
            <form action="" id="priceFrom">
                <div class="input-row">
                    <label for="formulate-name">姓名(必填)</label>
                    <input type="text" name="formulate-name" id="formulate-name" placeholder="您的姓名" required/>
                </div>
                <div class="input-row">
                    <label for="formulate-phone">电话(必填)</label>
                    <input type="phone" name="formulate-phone" id="formulate-phone" placeholder="您的手机或座机号码（示例：023-56578990）" required/>
                </div>
                <div class="input-row">
                      <label for="formulate-url">网址（必填）</label>
                      <input type="url" name="formulate-url" id="formulate-url" placeholder="示例：http://www.abc.com" required/>
                </div>
                <div class="input-row">
                    <label for="formulate-area">地区（必填）</label>
                    <input type="text" name="formulate-area" id="formulate-area" placeholder="您所在的区域" required/>
                </div>
                <div class="input-row">
                      <label for="formulate-remark">备注（选填）</label>
                      <textarea class="formulate-remark" name="formulate-remark" id="formulate-remark" cols="30" rows="6"
                          placeholder="备注"></textarea>
                </div>
                <div class="price-form-ft">
                    <input type="submit" class="submit-btn submit-btn-style" value="提交"/>
                    <span class="phone"><i class="am-icon-phone"></i>400-069-0309</span>
                    <div class="ajax-tips"></div>
                </div>
            </form>
            <div class="submit-success-mod">
                <h2>提交成功！</h2>
                <p>我们的工作人员将尽快与您取得联系。</p>
            </div>
            <div class="submit-error-mod">
                <h2>提交失败！</h2>
                <p>请返回重新填写相关项目！</p>
                <a href="" class="return-btn submit-btn-style">返回</a>
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