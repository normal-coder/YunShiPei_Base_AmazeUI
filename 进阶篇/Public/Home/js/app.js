(function($) {

  //当前导航高亮
  var aLi=[];
  if($(window).outerWidth()<=640){
    aLi=$('.nav-main').find('a');
  }
  else{
    aLi=$('.am-nav').find('a');
  }
  for(var i=0;i<aLi.length;i++) {
    var link_length= aLi[i].getAttribute("href").length;
    var links = aLi[i].getAttribute("href").substring(0,link_length-5);
    var currnLinks = document.location.href;
    if (currnLinks.indexOf(links) != -1) {
      aLi[0].className=""; //去掉默认的首页高亮
      aLi[i].className="am-active";
    }     
    else if(currnLinks.indexOf('reports') != -1 || currnLinks.indexOf('contact') != -1 || currnLinks.indexOf('join') != -1){
      aLi[0].className="";
      aLi[aLi.length-1].className="am-active";
    }
  }  

  //首页 banner 全屏
  var screen_height = $(window).outerHeight();
  $('.banner').height(screen_height);
  $('.banner .banner-word').css("margin-top",screen_height *0.15+"px");
  $('.banner .homepage-banner-img').css("margin-top",screen_height *0.1+"px");
  $('.banner .transform').css("margin-top",screen_height *0.05+"px");

  //手机版 其他页面banner全屏
  if($(window).outerWidth()<=640){
    $('.other-banner-mod').height(screen_height);
    $('.products-banner-mod').height(screen_height);
    
    $('#baiduMap').height('750px');
  }
 

  //footer 微信 点击弹出框
  var weixin_mod = $('.weixin-mod');
  $('#wechat').on('click', function(event) {
    event.preventDefault();
    $('<div class="popup-mask"></div>').appendTo($('body'));
    weixin_mod.fadeIn();
    console.log('message');
    $('.popup-mask').on('click', function() {
      weixin_mod.fadeOut('fast');
      $(this).remove();
    });
  });
  weixin_mod.find('.weixin-close').on('click', function(event) {
    event.preventDefault();
    weixin_mod.fadeOut('fast');
    $('.popup-mask').remove();
  });

  //回到顶部
  var ele_go2top,ele_btn;
  function showBtn(){
    if($(window).scrollTop()>=100){
      ele_btn.css({
        'display':'block'
      });
    } else {
      ele_btn.css({
        'display':'none'
      });
    }
  }
  if($(window).outerHeight()<$('body').outerHeight()){
    ele_go2top = $('<div>').addClass('go2top');
    ele_btn = $('<a href="#top" title="回到顶部">').append('<i class="am-icon-arrow-up">');
    ele_go2top.append(ele_btn).appendTo($('body'));
    showBtn();
    $(window).on('scroll',function(){
        showBtn();
    });
  }

  //设置case 页面slider 自动播放时间
  $('.case-slider .am-slider').flexslider({
    slideshowSpeed: 10000,
    smoothHeight: true    
  });

  //根据网址生成二维码
  $('.gallery-mask').each(function () {
    var url = $(this).attr('href');
    $(this).find(".qrcode-mod").qrcode({
      width: 105,
      height: 105,
      foreground: "#000",
      background: "transparent",
      text: url
    });
  });

  //case ggallery 点击查看更多
  if($(".gallery-more").length) {
    $(".gallery-more").on("click",function() {
      $(".case-gallery li").each(function() {
          $(this).css("display","block");
      });
      $(".gallery-more").css("display","none");
    })
  }

  //定制弹出框
  var $formulate = $('#formulate');
  $('#btn-formulate-btn').on('click', function() {
    $formulate.modal();
  });

  // 合作 弹出二维码
  var weixin_mod1 = $('.coo-weixin-mod');
  $('#manager-qrcode').on('click', function(event) {
    event.preventDefault();
    $('<div class="popup-mask"></div>').appendTo($('body'));
    weixin_mod1.fadeIn();
    $('.popup-mask').on('click', function() {
      weixin_mod1.fadeOut('fast');
      $(this).remove();
    });
  });
  weixin_mod1.find('.weixin-close').on('click', function(event) {
    event.preventDefault();
    weixin_mod1.fadeOut('fast');
    $('.popup-mask').remove();
  });

  //加入我们 职位简介   手机版侧滑tabs
  $('#class-nav').find('.class-nav-list').children('li').each(function(i){
    $(this).children('a').on('click',function(event){
      event.preventDefault();
      $('#class-nav').find('.class-nav-list').children('li').removeClass('am-active');
      $(this).parent().addClass('am-active');
      $('.job-tabs').children('ul').children('li').eq(i).find('a').trigger('click');
      $('#class-nav').trigger('click');
    })
  })

  //百度地图
  if($('#dituContent').length){
    //创建和初始化地图函数：
    function initMap(){
      createMap();//创建地图
      setMapEvent();//设置地图事件
      addMapControl();//向地图添加控件
      addMarker();//向地图中添加marker
    }

    //创建地图函数：
    function createMap(){
      var map = new BMap.Map("dituContent");//在百度地图容器中创建一个地图
      var point = new BMap.Point(15.336614,29.758323);//定义一个中心点坐标
      map.centerAndZoom(point,4);//设定地图的中心点和坐标并将地图显示在地图容器中
      window.map = map;//将map变量存储在全局
      if($(window).outerWidth()<=640){
        map.centerAndZoom(new BMap.Point(116.31604,39.989056),4);
      }
    }
    
    //地图事件设置函数：
    function setMapEvent(){
      map.enableDragging();//启用地图拖拽事件，默认启用(可不写)
      map.enableScrollWheelZoom();//启用地图滚轮放大缩小
      map.enableDoubleClickZoom();//启用鼠标双击放大，默认启用(可不写)
      map.enableKeyboard();//启用键盘上下左右键移动地图
    }
    
    //地图控件添加函数：
    function addMapControl(){
      //向地图中添加缩放控件
      var ctrl_nav = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_LARGE});
      map.addControl(ctrl_nav);
        //向地图中添加缩略图控件
      var ctrl_ove = new BMap.OverviewMapControl({anchor:BMAP_ANCHOR_BOTTOM_RIGHT,isOpen:1});
      map.addControl(ctrl_ove);
        //向地图中添加比例尺控件
      var ctrl_sca = new BMap.ScaleControl({anchor:BMAP_ANCHOR_BOTTOM_LEFT});
      map.addControl(ctrl_sca);
    }
    
    //标注点数组
    var markerArr = [{title:"中国北京（总部）",content:"北京市海淀区海淀大街27号亿景大厦三层西侧<br/>00&nbsp;069&nbsp;0309<br/>cn@allmobilize.com",point:"116.314032|39.988752",isOpen:0,icon:{w:23,h:25,l:46,t:21,x:9,lb:12}}
      ,{title:"天津分公司",content:"天津市武清开发区创业总部基地C04栋5层<br/>022-5990&nbsp;2233",point:"117.054478|39.415738",isOpen:0,icon:{w:23,h:25,l:46,t:21,x:9,lb:12}}
      ,{title:"香港特别行政区",content:"Cyberport&nbsp;Entrepreneurship&nbsp;Centre&nbsp;Unit&nbsp;518,&nbsp;Level&nbsp;5,&nbsp;Core&nbsp;F,&nbsp;Cyberport&nbsp;3&nbsp;100&nbsp;Cyberport&nbsp;Road,Hong&nbsp;Kong",point:"114.240482|22.525271",isOpen:0,icon:{w:23,h:25,l:46,t:21,x:9,lb:12}}
      ,{title:"美国西雅图",content:"8201&nbsp;164th&nbsp;Ave&nbsp;NE,&nbsp;Suite&nbsp;200&nbsp;Redmond,&nbsp;WA&nbsp;98052<br/>us@allmobilize.com",point:"-77.017816|39.012437",isOpen:0,icon:{w:23,h:25,l:46,t:21,x:9,lb:12}}
      ];
    //创建marker
    function addMarker(){
      for(var i=0;i<markerArr.length;i++){
        var json = markerArr[i];
        var p0 = json.point.split("|")[0];
        var p1 = json.point.split("|")[1];
        var point = new BMap.Point(p0,p1);
        var iconImg = createIcon(json.icon);
        var marker = new BMap.Marker(point,{icon:iconImg});
        var iw = createInfoWindow(i);
        var label = new BMap.Label(json.title,{"offset":new BMap.Size(json.icon.lb-json.icon.x+10,-20)});
        marker.setLabel(label);
        map.addOverlay(marker);
        label.setStyle({
          borderColor:"#808080",
          color:"#333",
          cursor:"pointer"
        });
            
        (function(){
          var index = i;
          var _iw = createInfoWindow(i);
          var _marker = marker;
          _marker.addEventListener("click",function(){
              this.openInfoWindow(_iw);
          });
          _iw.addEventListener("open",function(){
              _marker.getLabel().hide();
          })
          _iw.addEventListener("close",function(){
              _marker.getLabel().show();
          })
          label.addEventListener("click",function(){
              _marker.openInfoWindow(_iw);
          })
          if(!!json.isOpen){
            label.hide();
            _marker.openInfoWindow(_iw);
          }
        })()
      }
    }

    //创建InfoWindow
    function createInfoWindow(i){
        var json = markerArr[i];
        var iw = new BMap.InfoWindow("<b class='iw_poi_title' title='" + json.title + "'>" + json.title + "</b><div class='iw_poi_content'>"+json.content+"</div>");
        return iw;
    }
    
    //创建一个Icon
    function createIcon(json){
        var icon = new BMap.Icon("http://app.baidu.com/map/images/us_mk_icon.png", new BMap.Size(json.w,json.h),{imageOffset: new BMap.Size(-json.l,-json.t),infoWindowOffset:new BMap.Size(json.lb+5,1),offset:new BMap.Size(json.x,json.h)})
        return icon;
    }
      
    initMap();//创建和初始化地图
  }
})(jQuery);
