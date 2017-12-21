<?php
/**
 *  index.php PHPCMS 入口
 *
 * @copyright			(C) 2005-2010 PHPCMS
 * @license				http://www.phpcms.cn/license/
 * @lastmodify			2010-6-1
 */
 //PHPCMS根目录
//获取UA信息
$ua = $_SERVER['HTTP_USER_AGENT'];
//将恶意USER_AGENT存入数组
$now_ua = array('FeedDemon ','BOT/0.1 (BOT for JCE)','CrawlDaddy ','Java','Feedly','UniversalFeedParser','ApacheBench','Swiftbot','ZmEu','Indy Library','oBot','jaunty','YandexBot','AhrefsBot','MJ12bot','WinHttp','EasouSpider','HttpClient','Microsoft URL Control','YYSpider','jaunty','Python-urllib','lightDeckReports Bot');
//禁止空USER_AGENT，dedecms等主流采集程序都是空USER_AGENT，部分sql注入工具也是空USER_AGENT
if(!$ua) {
    header("Content-type: text/html; charset=utf-8");
    die('请勿采集本站，因为采集的站长木有小JJ！');
}else{
    foreach($now_ua as $value )
//判断是否是数组中存在的UA
    if(eregi($value,$ua)) {
        header("Content-type: text/html; charset=utf-8");
        die('请勿采集本站，因为采集的站长木有小JJ！');
    }
}
define('PHPCMS_PATH', dirname(__FILE__).DIRECTORY_SEPARATOR);

include PHPCMS_PATH.'/phpcms/base.php';

pc_base::creat_app();

?>