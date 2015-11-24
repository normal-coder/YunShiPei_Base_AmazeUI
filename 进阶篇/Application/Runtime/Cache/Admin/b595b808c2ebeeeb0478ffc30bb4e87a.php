<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html class="no-js">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>云适配门户官网后台管理系统</title>
	<meta name="description" content="这是一个 index 页面">
	<meta name="keywords" content="index">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta name="renderer" content="webkit">
	<meta http-equiv="Cache-Control" content="no-siteapp" />
	<link rel="icon" type="image/png" href="/yunshipei/Public/Admin/i/favicon.png">
	<link rel="apple-touch-icon-precomposed" href="/yunshipei/Public/Admin/i/app-icon72x72@2x.png">
	<meta name="apple-mobile-web-app-title" content="Amaze UI" />
	<link rel="stylesheet" href="/yunshipei/Public/Admin/css/amazeui.min.css"/>
	<link rel="stylesheet" href="/yunshipei/Public/Admin/css/admin.css">
</head>
<body>
<!--[if lte IE 9]>
<p class="browsehappy">你正在使用<strong>过时</strong>的浏览器，Amaze UI 暂不支持。 请 <a href="http://browsehappy.com/" target="_blank">升级浏览器</a>
	以获得更好的体验！</p>
<![endif]-->
	

<header class="am-topbar admin-header">
	<div class="am-topbar-brand">
		<strong>云适配门户官网</strong> <small>后台管理系统</small>
	</div>

	<button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only" data-am-collapse="{target: '#topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>

	<div class="am-collapse am-topbar-collapse" id="topbar-collapse">

		<ul class="am-nav am-nav-pills am-topbar-nav am-topbar-right admin-header-list">
			<!-- <li><a href="javascript:;"><span class="am-icon-envelope-o"></span> 收件箱 <span class="am-badge am-badge-warning">5</span></a></li> -->
			<li class="am-dropdown" data-am-dropdown>
				<a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">
					<span class="am-icon-users"></span> 管理员 <span class="am-icon-caret-down"></span>
				</a>
				<ul class="am-dropdown-content">
					<li><a href="<?php echo U('Public/passwd') ;?>"><span class="am-icon-key"></span> 修改密码</a></li>
					<li><a href="<?php echo U('Public/logout') ;?>"><span class="am-icon-power-off"></span> 退出</a></li>
				</ul>
			</li>
			<li class="am-hide-sm-only"><a href="javascript:;" id="admin-fullscreen"><span class="am-icon-arrows-alt"></span> <span class="admin-fullText">开启全屏</span></a></li>
		</ul>
	</div>
</header>
<div class="am-cf admin-main">
	<!-- sidebar start -->
	<div class="admin-sidebar am-offcanvas" id="admin-offcanvas">
		<div class="am-offcanvas-bar admin-offcanvas-bar">
			<ul class="am-list admin-sidebar-list">
				<li>
					<a href="<?php echo U('Index/index');?>">
						<span class="am-icon-home"></span> 首页
					</a>
				</li>
				<li>
					<a href="<?php echo U('Agent/getlist');?>">
						<span class="am-icon-users"></span> 代理商管理
					</a>
				</li>
				<li class="admin-parent">
					<a class="am-cf" data-am-collapse="{target: '#collapse-nav'}">
						<span class="am-icon-users"></span> 客户案例管理
						<span class="am-icon-angle-right am-fr am-margin-right"></span>
					</a>
					<ul class="am-list am-collapse admin-sidebar-sub am-in" id="collapse-nav">
						<li>
							<a href="<?php echo U('CaseManager/add');?>" class="am-cf">
								<span class="am-icon-plus"></span> 新增案例
							</a>
						</li>
						<li>
							<a href="<?php echo U('CaseManager/getlist');?>" class="am-cf">
								<span class="am-icon-list"></span> 案例列表
							</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="<?php echo U('FriendLink/index');?>">
						<span class="am-icon-users"></span> 友情链接管理
					</a>
				</li>
				<li>
					<a href="<?php echo U('Site/config');?>">
						<span class="am-icon-cog"></span> 站点设置
					</a>
				</li>
			</ul>

			<div class="am-panel am-panel-default admin-sidebar-panel">
				<div class="am-panel-bd">
					<p><span class="am-icon-bookmark"></span> 当前系统时间</p>
					<p>
						<?php echo date('Y-m-d H:i:s', strtotime('now')); ?> <br/>
					</p>
				</div>
			</div>
			<!-- <div class="am-panel am-panel-default admin-sidebar-panel">
				<div class="am-panel-bd">
					<p><span class="am-icon-bookmark"></span> 公告</p>
					<p>时光静好，与君语；细水流年，与君同。—— Amaze UI</p>
				</div>
			</div> -->

		</div>
	</div>
	<!-- sidebar end -->

	<!-- content start -->
	<div class="admin-content">





    <div class="am-cf am-padding">
      <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">首页</strong> / <small>一些常用模块</small></div>
    </div>

    <ul class="am-avg-sm-1 am-avg-md-3 am-margin am-padding am-text-center admin-content-list ">
      <li><a href="#" class="am-text-success"><span class="am-icon-btn am-icon-home"></span><br/>系统首页<br/>　</a></li>
      <li><a href="#" class="am-text-warning"><span class="am-icon-btn am-icon-users"></span><br/>代理商管理<br/>　</a></li>
      <li><a href="#" class="am-text-secondary"><span class="am-icon-btn am-icon-cog"></span><br/>站点设置<br/>　</a></li>
    </ul>

    <ul class="am-avg-sm-1 am-avg-md-3 am-margin am-padding am-text-center admin-content-list ">
      <li><a href="#" class="am-text-danger"><span class="am-icon-btn am-icon-list"></span><br/>案例管理<br/>　</a></li>
      <li><a href="#" class="am-text-danger"><span class="am-icon-btn am-icon-users"></span><br/>友链管理<br/>　</a></li>
      <li><a href="#" class="am-text-danger"><span class="am-icon-btn am-icon-recycle"></span><br/>更多功能<br/>...</a></li>
    </ul>



  </div>
  <!-- content end -->

</div>

<a href="#" class="am-show-sm-only admin-menu" data-am-offcanvas="{target: '#admin-offcanvas'}">
  <span class="am-icon-btn am-icon-th-list"></span>
</a>

<footer>
  <hr>
  <p class="am-padding-left">© 2014 AllMobilize, Inc. Licensed under MIT license.</p>
</footer>

<!--[if lt IE 9]>
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="/yunshipei/Public/Admin/js/amazeui.ie8polyfill.min.js"></script>
<![endif]-->

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="/yunshipei/Public/Admin/js/jquery.min.js"></script>
<!--<![endif]-->
<script src="/yunshipei/Public/Admin/js/amazeui.min.js"></script>
<script src="/yunshipei/Public/Admin/js/app.js"></script>
</body>
</html>