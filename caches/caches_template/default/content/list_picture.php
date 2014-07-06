<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<?php include template("content","banner"); ?>
<div class="sidebar inner">
  	<?php include template("content","left"); ?>
    <div class="sb_box" >
	      	<div class="clear"></div>

        <div class="active" id="productlist">
			<ul class='list-none metlist'>
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=11e982198282a77f17ebf8d7a1dede5e&action=lists&catid=%24catid&num=10&order=id+DESC&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 10;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
			<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
			<li class='list' style='width:220px; margin-left:22px; margin-right:22px;'><a href='<?php echo $r['url'];?>' title='<?php echo $r['title'];?>' target='_self' class='img'><img src='<?php echo thumb($r[thumb],150,450);?>' alt='<?php echo $r['title'];?>' title='<?php echo $r['title'];?>' width='50' height='150' /></a><h3><a href='<?php echo $r['url'];?>' title='<?php echo $r['title'];?>' target='_self'><?php echo $r['title'];?></a></h3></li>
			<?php $n++;}unset($n); ?>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
		<div class="clear"></div>
		</div>
		<div id="pages" class="text-c"><?php echo $pages;?></div>
    </div>
    <div class="clear"></div>
</div>
<?php include template("content","footer"); ?>