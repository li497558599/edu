<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><div class="sl9-ib-c pc1">
<div class="sl9-ib-ca"><span>常见问题</span><a href="/html/wuxiaoxinwen/">查看更多>></a></div>
<div class="sl9-ib-cb"><img src="/statics/edu/images/p08.jpg" /></div>
<ul>
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=bcf2a013892f403c63abe032dd05609b&action=hits&catid=11&num=6&order=views+DESC&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'11','order'=>'views DESC',)).'bcf2a013892f403c63abe032dd05609b');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'hits')) {$data = $content_tag->hits(array('catid'=>'11','order'=>'views DESC','limit'=>'6',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>     
<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>   
<li><a href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a><span><?php echo date('Y-m-d',$r[inputtime]);?></span></li>
<?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

</ul>
</div>