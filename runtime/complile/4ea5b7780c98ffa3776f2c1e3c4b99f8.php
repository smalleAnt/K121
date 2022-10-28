<!doctype html>
<html>
<meta charset="UTF-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<head>
<title>{sort:title}</title>
<meta name="keywords" content="{sort:keywords}">
<meta name="description" content="{sort:description}">
<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1.0,user-scalable=no">
<link rel="stylesheet" href="{pboot:sitedomain}/style/css/amazeui.min.css">
<link rel="stylesheet" href="{pboot:sitedomain}/style/css/style.css">
<link rel="stylesheet" href="{pboot:sitedomain}/style/css/css.css">
<script src="{pboot:sitedomain}/style/js/jquery.min.js"></script>
<script src="{pboot:sitedomain}/style/js/amazeui.min.js"></script>
<script src="{pboot:sitedomain}/style/js/jquery.superslide.js"></script>
<script src="{pboot:sitedomain}/style/js/sidebar_contact.js"></script>
<style type="text/css">
.page_main img {
	width: 100%;
}
.iconfont {
	font-size: 30px !important;
}
.icon_contact .iconfont {
	font-size: 20px !important;
}
.am-navbar-default .am-navbar-nav .iconfont {
	font-size: 20px !important;
}
.am-navbar-nav a {
	line-height: 27px;
}
</style>
<link rel="stylesheet" href="//at.alicdn.com/t/font_1976070_oklai9ulpl8.css">
</head>
<body>
<header data-am-sticky>
  <div class="logo"><a href="{pboot:sitedomain}/" ><img src="{pboot:sitelogo}"></a></div>
  <div class="language">
    <ul>
      <li> <a href="{pboot:lgpath}&lg=en" title="English"> <img src="{pboot:sitedomain}/style/images/en.png" style="width: 32px;" alt=""> </a> </li>
    </ul>
  </div>
  <nav data-am-widget="menu" class="nav_m am-menu am-menu-offcanvas1" data-am-menu-offcanvas> <a href="javascript:void(0)" class="am-menu-toggle"><i class=" iconfont icon-mianbaoxie"></i></a>
    <div class="am-offcanvas">
      <div class="am-offcanvas-bar am-offcanvas-bar-flip">
        <ul>
          <li {pboot:if(0=='{sort:tcode}')} class="current" {/pboot:if}><a href="{pboot:sitedomain}/">首页</a></li>
          {pboot:nav}
          <li {pboot:if('[nav:scode]'=='{sort:tcode}')} class="current" {/pboot:if}><a href="[nav:link]" title="[nav:name]">[nav:name]</a></li>
          {/pboot:nav}
        </ul>
      </div>
    </div>
  </nav>
  <nav class="nav_pc">
    <ul>
      <li class="nLi {pboot:if(0=='{sort:tcode}')} active {/pboot:if}">
        <h3><a href="{pboot:sitedomain}/">首页</a></h3>
      </li>
      {pboot:nav}
      <li class="nLi {pboot:if('[nav:scode]'=='{sort:tcode}')} active {/pboot:if}">
        <h3><a href="[nav:link]" title="[nav:name]">[nav:name]</a></h3>
        {pboot:if([nav:soncount]>0)}
        <ul class="sub">
          {pboot:2nav parent=[nav:scode]}
          <li><a href="[2nav:link]" title="[2nav:name]">[2nav:name]</a></li>
          {/pboot:2nav}
        </ul>
        {/pboot:if} </li>
      {/pboot:nav}
    </ul>
  </nav>
  <script type="text/javascript">
				jQuery(".nav_pc").slide({
					type: "menu",
					titCell: ".nLi",
					targetCell: ".sub",
					effect: "slideDown",
					delayTime: 300,
					triggerTime: 0,
					returnDefault: true
				});
			</script> 
</header>
<script type="text/javascript">
			function NavDown(i) {
				$(".nav_pc > ul > li").eq(i).addClass("on");
			}
			NavDown(0);
		</script> 


<div class="banner banner_1"> {pboot:sort scode={sort:tcode}} <img src="[sort:pic]"> {/pboot:sort} </div>
<div class="main">
<div class="mli">
  <div class="category">
    <div class="catname"> {pboot:sort scode={sort:tcode}} <strong> [sort:name] </strong> {/pboot:sort} </div>
    <div class="subcat"> {pboot:nav parent={sort:tcode}}
      <dl {pboot:if('[nav:scode]'=='{sort:scode}')} class="current" {/pboot:if}>
        <dt><a href="[nav:link]" title="[nav:name]">[nav:name]</a></dt>
      </dl>
      {/pboot:nav} </div>
  </div>
  <style type="text/css">
					@media screen and (max-width: 767px){
						.xs-hidden{
							display: none;
						}
					}
				</style>
  <div class="category xs-hidden">
    <div class="catname"> <strong>联系我们</strong> </div>
    <div class="subcat">
      <dl>
        <dt><a href="javascript:;">联系人：{pboot:companycontact}</a></dt>
      </dl>
      <dl>
        <dt><a href="javascript:;">手机：{pboot:companymobile}</a></dt>
      </dl>
      <dl>
        <dt><a href="javascript:;">电话：{pboot:companyphone}</a></dt>
      </dl>
      <dl>
        <dt><a href="javascript:;">邮箱：{pboot:companyemail}</a></dt>
      </dl>
    </div>
  </div>
</div>
<div class="mri">
<div class="position">当前位置：{pboot:position indextext='首页' separator='>'}</div>
<div class="page_title"> {pboot:sort scode={sort:scode}} <strong>[sort:name]</strong> {/pboot:sort} </div>

<div class="page_main">
  <div class="list_product">
    <ul>
      {pboot:list num=8 order=sorting}
      <li>
        <figure> <a href="[list:link]" title="[list:title]"><img src="[list:ico]"
										 alt="[list:title]"></a>
          <figcaption><a href="[list:link]" title="[list:title]">[list:title]111</a></figcaption>
        </figure>
      </li>
      {/pboot:list}
    </ul>
  </div>
  {pboot:if({page:rows}>0)}
  <style type="text/css">
		.pages .page-num-current{
				background: #c2000e;
				color: #FFF;
		}
		.pages span{
			padding: 4px 10px;
				border: #d2d2d2 1px solid;
				background: #f2f2f2;
				font-size: 14px;
				font-family: "微软雅黑";
				color: #333;
				margin-right: 8px;
				text-decoration: none;
		}
	</style>
  <div class="pages">
    <div class="green-black"><a href="{page:pre}">上一页</a> {page:numbar} <a href="{page:next}">下一页</a> <a class="page-item page-link" href="javascript:;" title="当前页/总页数">{page:current}/{page:count}</a></div>
  </div>
  {/pboot:if} </div>
</div>
</div>
<footer>
  <div class="box_contact">
    <div class="qrcode"><img src="{pboot:companyweixin}" alt="" /></div>
    <div class="box_3 follow">
      <div class="bhead"><strong class="hidden-xs">微信公众号</strong></div>
      <div class="bbody">
        <ul>
          <li class="wechat"><a href="javascript:;" data-am-modal="{target: '#your-modal'}"><i class="iconfont icon-weixin"></i></a></li>
          <li class="weibo"><a href="{label:weibo}" target="_blank" rel="nofollow"><i class="iconfont icon-weibo"></i></a></li>
        </ul>
      </div>
    </div>
    <div class="box_3 contact">
      <div class="bhead"><strong>联系方式</strong></div>
      <div class="bbody">
        <ul>
          <li>邮箱：{pboot:companyemail}</li>
          <li>电话：{pboot:companyphone}</li>
          <li>地址：{pboot:companyaddress}</li>
          <li>手机：{pboot:companymobile}</li>
          <li>网址：{pboot:httpurl}</li>
        </ul>
      </div>
    </div>
  </div>
  <nav class="nav_footer"> {pboot:nav num=6}
    <dl>
      <dt><a href="[nav:link]" title="[nav:name]">[nav:name]</a></dt>
      {pboot:2nav parent=[nav:scode]}
      <dd><a href="[2nav:link]" title="[2nav:name]">[2nav:name]</a></dd>
      {/pboot:2nav}
    </dl>
    {/pboot:nav} </nav>
  <div class="footer_info">{pboot:sitecopyright} <a href="https://beian.miit.gov.cn/" target="_blank" rel="nofollow">{pboot:siteicp}</a> <a href="{pboot:sitedomain}/sitemap.xml" target="_blank">XML地图</a> <a target="_blank" href="https://www.adminbuy.cn/">网站模板</a> {pboot:sitestatistical}</div>
</footer>
<div id="open_im" class="icon_contact"><i class="iconfont icon-ziyuan"></i></div>
<div class="box_contact_sidebar" id="im_main">
  <div class="bhead"> <strong>联系我们</strong>
    <div id="close_im" class="close-im"><a href="javascript:void(0);" title="关闭"></a></div>
  </div>
  <div class="bbody">
    <dl>
      <dt>联系电话</dt>
      <dd>{pboot:companyphone}</dd>
    </dl>
    <dl>
      <dt>官方微信</dt>
      <dd><img src="{pboot:companyweixin}" alt="官方微信" /></dd>
    </dl>
  </div>
</div>
<div data-am-widget="gotop" class="am-gotop am-gotop-fixed"> <a href="#top" title="返回顶部"> <span class="am-gotop-title">返回顶部</span> <i class="iconfont icon-xiangshang"></i> </a> </div>
<div class="am-modal am-modal-no-btn" tabindex="-1" id="your-modal">
  <div class="am-modal-dialog" style="padding: 40px 0;"><img src="{pboot:companyweixin}" width="160" height="160"
				 alt="官方微信" /><br />
    扫描二维码</div>
</div>
<div data-am-widget="navbar" class="am-navbar am-cf am-navbar-default">
  <ul class="am-navbar-nav am-cf am-avg-sm-4">
    <li><a href="tel:{pboot:companyphone}"><span class="iconfont icon-dianhua"></span><span class="am-navbar-label">联系电话</span></a></li>
    <li data-am-navbar-share><a href="###" class=""><span class="iconfont icon-share"></span><span class="am-navbar-label">分享到</span></a></li>
    <li data-am-navbar-qrcode><a href="###" class=""><span class="iconfont icon-ico"></span><span class="am-navbar-label">扫码访问</span></a></li>
  </ul>
</div>
</body></html>
<?php return array (
  0 => '/www/K121/template/default/head.html',
  1 => '/www/K121/template/default/top.html',
  2 => '/www/K121/template/default/foot.html',
); ?>