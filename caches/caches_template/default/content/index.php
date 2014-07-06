<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<div class="inner met_flash"><div class="flash">
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=54d45a0a8951f3671a5ae1ffb189c2e9&sql=SELECT+%2A+FROM+rx_picture_data+WHERE+id%3D4\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM rx_picture_data WHERE id=4 LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
<?php $n=1;if(is_array($data)) foreach($data AS $val) { ?>
<?php eval("\$pics = ".$val[pictureurls].";");?>
<?php foreach($pics as $pic){
	$ads[] = $pic[url];
}?>
<?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
<?php $ad_index_str = implode('|', $ads);?>
<script type="text/javascript">
var swf_width=972;
var swf_height=400;
var files='<?php echo $ad_index_str;?>';
var links='||';
var texts='';
var swfpath = '/statics/sf/flash02.swf';
var AutoPlayTime=6; //间隔时间：单位是秒
document.write('<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" width="'+ swf_width +'" height="'+ swf_height +'">');
document.write('<param name="movie" value='+swfpath+'><param name="quality" value="high">');
document.write('<param name="menu" value="false"><param name=wmode value="opaque">');
document.write('<param name="FlashVars" value="bcastr_file='+files+'&bcastr_link='+links+'&bcastr_title='+texts+'&AutoPlayTime='+AutoPlayTime+'">');
document.write('<embed src='+swfpath+' wmode="opaque" FlashVars="bcastr_file='+files+'&bcastr_link='+links+'&bcastr_title='+texts+'&AutoPlayTime='+AutoPlayTime+'" menu="false" quality="high" width="'+ swf_width +'" height="'+ swf_height +'" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />'); 
document.write('</object>'); 
</script>
</div></div>


<div class="indx-pro">

    <div class="con" >


    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=3e8c149e46fc1ecc90f576bca15ae5bd&sql=SELECT+%2A+FROM+rx_page+WHERE+catid%3D2\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM rx_page WHERE catid=2 LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
		<?php $n=1;if(is_array($data)) foreach($data AS $val) { ?>
	        <div class="left dg dg2 fl" style="width:295px; ">
                         <h3 class="title"><a class="index_tit" href="http://www.rixiang-fj.com/list-2-1.html" title="About Us">About Us</a><a href="http://www.rixiang-fj.com/list-2-1.html" title="About Us"><span>公司简介</span></a></h3>
                         <div class="editor" style="color:#666666"><img alt="" src="/statics/sf/images/aboutus.jpg" style="height: 90px; float: left; margin: 5px 8px; width: 144px;" />
                         <span style="font-size: 13px">&nbsp; &nbsp; </span>
                         <span style="color:#696969;"><span style="font-size: 13px">
                         <?php echo str_cut(strip_tags($val[content]),530,"");?>
                         </span></span><br />
</div>               
                         <div class="clear"></div>
		</div>
		<?php $n++;}unset($n); ?>
		<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
		

		<div class="mid dg dg2 fl" style="width:250px; border-right:1px solid #ededed; border-left:1px solid #ededed; padding-right:30px; padding-left:30px; margin:0 20px 0 30px;">
			<div class="indexborder">
              <h3 class="title"><a class="index_tit" href="http://www.rixiang-fj.com/list-27-1.html" title="Agent">Agent</a><a href="http://www.rixiang-fj.com/list-27-1.html" title="Agent"><span>招商代理</span></a></h3>
              <dl class="index_list 3">
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=2df50e289acbed2f613d39ec777231ef&action=lists&catid=27&num=2&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'27','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'2',));}?>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                 <dd class="list">
                  <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>">[<?php echo $r['title'];?>]</span>
                  <p class="memopp"><?php echo str_cut(strip_tags($r[description]),200,"");?>..</p>
				  </a>
                 </dd>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
              </dl>
			</div>
         	<div class="clear"></div>
		</div>
   
		
		<div class="right dg fl" style="width:306px;">
                         <h3 class="title"><a class="index_tit" href="http://www.rixiang-fj.com/list-8-1.html" title="Products">Products</a><a href="http://www.rixiang-fj.com/list-8-1.html" title="Products"><span>产品展示</span></a></h3>
                         <dl class="product">
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=8be54381a2b5c9889fa0399fc3ff0a05&action=lists&catid=8&num=3&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'8','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'3',));}?>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                                 <dd class="product_list">
                                         <a href="<?php echo $r['url'];?>" class="imgWidth" taget="_blank" title="<?php echo $r['title'];?>"><img src="<?php echo thumb($r[thumb],150,450);?>" width="50" height="60" alt="<?php echo $r['title'];?>" title="<?php echo $r['title'];?>"></img></a>
                                         <a href="<?php echo $r['url'];?>" class="aWidth" title="<?php echo $r['title'];?>"><?php echo str_cut($r[title],40);?></a>
                                 </dd>
 				<?php $n++;}unset($n); ?>
 				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                         </dl>               
                         <div class="clear"></div>
		</div>	
  		
		
    </div>
	
    
</div>
<?php include template("content","footer"); ?>