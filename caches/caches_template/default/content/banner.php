<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><div class="inner met_flash"><div class="flash">
	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=e54e5fc13c68105fd3e10b7d9787e9b7&sql=SELECT+%2A+FROM+rx_picture_data+WHERE+id%3D5\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM rx_picture_data WHERE id=5 LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
		<?php $n=1;if(is_array($data)) foreach($data AS $val) { ?>
		<?php eval("\$pics = ".$val[pictureurls].";");?>
		<?php foreach($pics as $pic){?>
		<img src='<?php echo $pic['url'];?>' width='972' alt='' height='300'></div></div>
		<?php }?>
		<?php $n++;}unset($n); ?>
	<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

