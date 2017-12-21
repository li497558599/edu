<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<div class="sl9-i">
<!--left-->
<?php include template("content","left"); ?>
<!--left-->
<div class="sl9-ib">
  <h2><?php echo $catname;?></h2>
<div class="sl9-ib-b">

<div class="m_zxc">
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=6401a2ce199d1b88bccfc45608b989cc&action=lists&catid=%24catid&num=15&order=id+DESC&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 15;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
<dl>
                    <dt><a href="<?php echo $r['url'];?>" target="_blank" se_prerender_url="complete" title="<?php echo $r['title'];?>"><?php echo $r['title'];?></a></dt>
                    <dd><?php echo $r['description'];?></dd>
                </dl>
<?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
</div>

<div class="pages">

     
 <?php echo $pages;?>

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