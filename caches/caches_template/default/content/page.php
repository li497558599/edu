<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<div class="sl9-i">
<!--left-->
<?php include template("content","left"); ?>
<!--left-->
<div class="sl9-ib">
  <h2><?php echo $title;?></h2>
<div class="sl9-ib-b">
<div class="MyContent">
 <?php echo $content;?>
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