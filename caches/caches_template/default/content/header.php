<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8" />
<title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
<meta name="keywords" content="<?php echo $SEO['keyword'];?>">
<meta name="description" content="<?php echo $SEO['description'];?>">
<link href="favicon.ico" rel="shortcut icon" />
<link rel="stylesheet" type="text/css" href="/statics/sf/css/metinfo_ui.css" id="metuimodule" data-module ="10001" />
<link rel="stylesheet" type="text/css" href="/statics/sf/css/metinfo.css" />
<script src="/statics/sf/js/jQuery1.7.2.js" type="text/javascript"></script>
<script src="/statics/sf/js/metinfo_ui.js" type="text/javascript"></script>
<script src="/statics/sf/js/ch.js" type="text/javascript"></script>
<!--[if IE]>
<script src="/statics/sf/js/html5.js" type="text/javascript"></script>
<![endif]-->
</head>

<body>
  <header>
  <div>
    <div class="inner clear">
        <div class="logo">

	<a href="<?php echo siteurl($siteid);?>" title="网站名称" id="web_logo">
	<img src="/statics/sf/images/logo.png" alt="网站名称" title="网站名称" style="margin:25px 0px 0px 0px;" />
	</a> 


    </div>
    <div class="otr-nav">
        <div class="top-nav"><a href='#' onclick='SetHome(this,window.location,"非IE浏览器不支持此功能，请手动设置！");' style='cursor:pointer;' title='设为首页'  >设为首页</a><span>-</span><a href='#' onclick='addFavorite("非IE浏览器不支持此功能，请手动设置！");' style='cursor:pointer;' title='收藏本站'  >收藏本站</a></div> 
        <nav><ul class="list-none">
        <li id="nav_10001"  class='navdown'><a href='<?php echo siteurl($siteid);?>' title='网站首页' class='nav'><span>网站首页</span></a></li>
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=0abeb9912004474879e777dd9e6b6af6&action=category&catid=0&num=6&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'6',));}?>
        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
        <li class="line"></li><li id='nav_1'  ><a href='<?php echo $r['url'];?>'  title='<?php echo $r['catname'];?>' class='hover-none nav'><span><?php echo $r['catname'];?></span></a></li>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </ul></nav>           
    </div>
</div>
	

  </div>
  </header>
  <div class="headerbg"></div>