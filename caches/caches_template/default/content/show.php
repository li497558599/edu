<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header3"); ?>
<div class="sl9-i">
<!--left-->
<?php include template("content","left"); ?>
<!--left-->
<div class="sl9-ib">
<div class="sl9-ib-b">
<div class="modBoxA">
<h2><?php echo $title;?></h2>
<div class="artInfo">时间：<?php echo $inputtime;?>&nbsp;&nbsp; 点击：<span id="hits"><script language="JavaScript" src="<?php echo APP_PATH;?>api.php?op=count&id=<?php echo $id;?>&modelid=<?php echo $modelid;?>"></script> </span></div>
<div class="artCon" >
<?php echo $content;?>
</div>
</div>
<div class="article-turn">
            <ul>
                <li>上一篇：<a href="<?php echo $previous_page['url'];?>"><?php echo $previous_page['title'];?></a> </li>
                <li>下一篇：<a href="<?php echo $next_page['url'];?>"><?php echo $next_page['title'];?></a></li>
            </ul>
        </div>



</div>
<!--bottom-->
<?php include template("content","bottom"); ?>
<!--bottom-->
<div class="clear"></div>
</div>
<div class="clear"></div>
</div>
<!--bottom2-->
<?php include template("content","bottom2"); ?>
<!--bottom-->
<!--footer-->
<?php include template("content","footer"); ?>
</body>
</html>