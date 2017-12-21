<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header_tuji"); ?>
<div class="sl9-i">
<!--left-->
<?php include template("content","left"); ?>
<!--left-->
<div class="sl9-ib">
<div class="sl9-ib-b">

  <div class="modBoxA">
            <h2><?php echo $title;?></h2>
            <div class="artInfo">时间：<?php echo $inputtime;?>&nbsp;&nbsp; 点击：<span id="hits"><script language="JavaScript" src="<?php echo APP_PATH;?>api.php?op=count&id=<?php echo $id;?>&modelid=<?php echo $modelid;?>"></script></span></div>
            <div id="MyContent">
              <div class="photo-channel">
                <div id="Article">
                  <div class="tool"> <a name="pic"></a> <a class="up" href="javascript:;" title="上一张" onclick="showpic('pre')"><span>上一张</span></a><a class="next" href="javascript:;" onclick="showpic('next')" title="下一张"><span>下一张</span></a><span class="stat" id="picnum"></span>
                    
                  </div>
                  <div class="big-pic" style="height:400px;">
                    <div id="big-pic"></div>
                    <div class="photo_prev"><a id="photoPrev" title="&lt;上一页" class="btn_pphoto" target="_self" hidefocus="true" href="javascript:;" onclick="showpic('pre');"></a></div>
                    <div class="photo_next"><a id="photoNext" title="下一页&gt;"class="btn_nphoto" target="_self" hidefocus="true" href="javascript:;" onclick="showpic('next')"></a></div>
                   
                    <div id="endSelect" style="display: none;">
                      <div id="endSelClose" onclick="$('#endSelect').hide();"></div>
                      <div class="bg"></div>
                      <div class="E_Cont">
                        <p>您已经浏览完所有图片</p>
                        <p><a id="rePlayBut" href="javascript:void(0)" onclick="showpic('next', 1);"></a><a id="nextPicsBut" href="<?php echo $next_page['url'];?>"></a></p>
                      </div>
                    </div>
                  </div>
                  <div class="list-pic"> <a href="javascript:;" onclick="showpic('pre')" class="pre-bnt"><span></span></a>
                    <div class="cont" style="position:relative">
                      <ul class="cont picbig" id="pictureurls"  style="position:absolute">
                        <?php $n=1; if(is_array($pictureurls)) foreach($pictureurls AS $pic_k => $r) { ?>
                        <li>
                          <div class="img-wrap"><a href="javascript:;" hidefocus="true"><img src="<?php echo thumb($r[url], 100, 137, 0);?>" alt="<?php echo $r['alt'];?>" rel="<?php echo $r['url'];?>"/></a></div>
                        </li>
                        <?php $n++;}unset($n); ?>
                      </ul>
                    </div>
                    <a href="javascript:;" onclick="showpic('next')" class="next-bnt"><span></span></a> </div>
                  <div class="content"> <?php echo $content;?> </div>
                </div>
                <div class="bk10"></div>
                
              </div>
            </div>
          </div>
         <script type="text/javascript" src="<?php echo JS_PATH;?>show_picture.js"></script>

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




<?php include template("content","footer_tuji"); ?>
</body>
</html>