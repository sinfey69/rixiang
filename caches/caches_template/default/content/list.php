<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<?php include template("content","banner"); ?>
<div class="sidebar inner">
  <?php include template("content","left"); ?>
    <div class="sb_box" >
	      	<div class="clear"></div>

        <div class="active" id="newslist">
			<ul class='list-none metlist'>
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=6401a2ce199d1b88bccfc45608b989cc&action=lists&catid=%24catid&num=15&order=id+DESC&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 15;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
			<?php $nn=1;$cnt=count($data);?>
			<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
			<li class='list <?php if($nn==1) { ?>top<?php } ?>'><span>[<?php echo date('Y-m-d',$r[inputtime]);?>]</span><a href='<?php echo $r['url'];?>' title='<?php echo $r['title'];?>' target='_self'><?php echo str_cut(strip_tags($r[title]),100);?></a><p><?php echo str_cut(strip_tags($r[description]),180,"...");?></p></li>
			<?php $nn++;?>
			<?php $n++;}unset($n); ?>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			</ul>
			<div id="pages" class="text-c"><?php echo $pages;?></div>
		</div>
    </div>
    <div class="clear"></div>
	<div id="pages" class="text-c"><?php echo $pages;?></div>
</div>
<?php include template("content","footer"); ?>