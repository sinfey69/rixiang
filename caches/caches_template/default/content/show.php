<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<?php include template("content","banner"); ?>
<div class="sidebar inner">
	<?php include template("content","left"); ?>
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
			<div class="met_hits"><div class='metjiathis'><div class="jiathis_style"><span class="jiathis_txt">分享到：</span>
			<img src="http://v.t.qq.com/share/images/s/weiboicon16.png" style="padding-bottom:3px;" onclick="postToWb();" class="cu" title="分享到腾讯微博"/><script type="text/javascript">
				function postToWb(){
					var _t = encodeURI(document.title);
					var _url = encodeURIComponent(document.location);
					var _appkey = encodeURI("cba3558104094dbaa4148d8caa436a0b");
					var _pic = encodeURI('<?php echo $thumb;?>');
					var _site = '';
					var _u = 'http://v.t.qq.com/share/share.php?url='+_url+'&appkey='+_appkey+'&site='+_site+'&pic='+_pic+'&title='+_t;
					window.open( _u,'', 'width=700, height=680, top=0, left=0, toolbar=no, menubar=no, scrollbars=no, location=yes, resizable=no, status=no' );
				}
			</script>
          <script type="text/javascript">document.write('<a href="http://v.t.sina.com.cn/share/share.php?url='+encodeURIComponent(location.href)+'&appkey=3172366919&title='+encodeURIComponent('<?php echo new_addslashes($title);?>')+'" title="分享到新浪微博" class="t1" target="_blank">&nbsp;</a>');</script>
		  <script type="text/javascript">document.write('<a href="http://www.douban.com/recommend/?url='+encodeURIComponent(location.href)+'&title='+encodeURIComponent('<?php echo new_addslashes($title);?>')+'" title="分享到豆瓣" class="t2" target="_blank">&nbsp;</a>');</script>
		  <script type="text/javascript">document.write('<a href="http://share.renren.com/share/buttonshare.do?link='+encodeURIComponent(location.href)+'&title='+encodeURIComponent('<?php echo new_addslashes($title);?>')+'" title="分享到人人" class="t3" target="_blank">&nbsp;</a>');</script>
		  <script type="text/javascript">document.write('<a href="http://www.kaixin001.com/repaste/share.php?rtitle='+encodeURIComponent('<?php echo new_addslashes($title);?>')+'&rurl='+encodeURIComponent(location.href)+'&rcontent=" title="分享到开心网" class="t4" target="_blank">&nbsp;</a>');</script>
		  <script type="text/javascript">document.write('<a href="http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?url='+encodeURIComponent(location.href)+'" title="分享到QQ空间" class="t5" target="_blank">&nbsp;</a>');</script>
      
			</div>
			</div>点击次数：<span id="hits"></span>&nbsp;&nbsp;更新时间：<?php echo date('Y-m-d H:i:s',$r[updatetime]);?>&nbsp;&nbsp;【<a href="javascript:window.print()">打印此页</a>】&nbsp;&nbsp;【<a href="javascript:self.close()">关闭</a>】</div>
            <div class="met_page">&nbsp;&nbsp;下一条：<a href='<?php echo $next_page['url'];?>' ><?php echo $next_page['title'];?></a></div>
        </div>
	</div>	
    <div class="clear"></div>
</div>
<script language="JavaScript" src="<?php echo APP_PATH;?>api.php?op=count&id=<?php echo $id;?>&modelid=<?php echo $modelid;?>"></script>
<?php include template("content","footer"); ?>