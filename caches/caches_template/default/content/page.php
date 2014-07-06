<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<?php include template("content","banner"); ?>
<div class="sidebar inner">
	<div class="sb_nav">
			<h3 class='title'>福建日翔</h3>
			<div class="active" id="sidebar" data-csnow="2" data-class3="0" data-jsok="1">
				<dl class="list-none navnow"><dt id='part2_10' class="on"><?php echo $title;?></dt></dl>
			<div class="clear"></div>
			</div>
    </div>
    <div class="sb_box" >
	      	<div class="clear"></div>

        <div class="active" id="shownews">
            <h1 class="title"><?php echo $title;?></h1>
            <div class="editor">
            <div>
			<?php echo $content;?>
			<div id="metinfo_additional"></div>
			</div>
			<div class="clear"></div>
			</div>
        </div>
	</div>	
    <div class="clear"></div>
</div>
<script language="JavaScript" src="<?php echo APP_PATH;?>api.php?op=count&id=<?php echo $id;?>&modelid=<?php echo $modelid;?>"></script>
<?php include template("content","footer"); ?>