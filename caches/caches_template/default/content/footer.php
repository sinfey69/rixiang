<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><footer>
	<div class="inner">
		


	  
	<div class="index-links">
		<h3 class="title">
			友情链接：
			<a href="" title="链接关键词" class="more"></a>
		</h3>
		<div class="active index-box">
			<div class="img"><ul class='list-none'>
</ul>
</div>
			<div class="txt"><ul class='list-none'>
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"link\" data=\"op=link&tag_md5=607999583e6f302cd3d7f621ba1b0dd7&action=lists&typeid=0&siteid=%24siteid&linktype=0&order=desc&num=12&return=dat\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$link_tag = pc_base::load_app_class("link_tag", "link");if (method_exists($link_tag, 'lists')) {$dat = $link_tag->lists(array('typeid'=>'0','siteid'=>$siteid,'linktype'=>'0','order'=>'desc','limit'=>'12',));}?>
			<?php $n=1;if(is_array($dat)) foreach($dat AS $v) { ?>
				<li><a href='<?php echo $v['url'];?>' target='_blank' title='<?php echo $v['name'];?>'><?php echo $v['name'];?></a></li>
		    <?php $n++;}unset($n); ?>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			</ul>
<div class="clear"></div></div>
		</div>
		<div class="clear"></div>
	</div>
	  
	  
	  


		<div class="foot-text">
			<p>深圳日翔科技福建总代理  www.rixiang-fj.com 版权所有  <script src="/statics/sf/js/metinfo.js"></script></p>
<p>Copyright 2013-2014 福建厦门日翔智能锁  All Rights Reserved.</p>
<p><div id="metinfo_91mb_Powered">服务热线：0757-12345678</div></p>


		</div>
        <div class="clear"></div>
	</div>
</footer>
<script src="templates/met104/images/js/fun.inc.js" type="text/javascript"></script>
<script src="templates/met104/images/js/indeximg.js" type="text/javascript"></script>


</body>
</html>