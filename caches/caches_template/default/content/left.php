<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>    <div class="sb_nav">
		<?php
		$ttcatid = $arrparentid[count($arrparentid)-1];
		if(!$ttcatid)
		{
			if($top_parentid)
				$ttcatid = $top_parentid;	//单页面
			else
				$ttcatid = $catid;			//普通分类
		}
		?>
			<h3 class='title'><a href='<?php echo $CATEGORYS[$ttcatid]['url'];?>'><?php echo $CATEGORYS[$ttcatid]['catname'];?></a></h3>
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=dba4d2c4a0e9092c4d6d1abf57464725&action=category&catid=%24CATEGORYS%5B%24ttcatid%5D%5Bcatid%5D&num=6&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">缂栬緫</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$CATEGORYS[$ttcatid][catid],'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'6',));}?>
			<div class="active" id="sidebar" data-csnow="2" data-class3="0" data-jsok="1">
			<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
				<dl class="list-none navnow"><dt id='part2_10' <?php if($catid==$r[catid]) { ?>class="on"<?php } ?>><a href='<?php echo $r['url'];?>'  title='<?php echo $r['catname'];?>' class="zm"><span><?php echo $r['catname'];?></span></a></dt></dl>
			<?php $n++;}unset($n); ?>
			<div class="clear"></div>
			</div>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </div>