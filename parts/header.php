<?php
$sprites_ver = '20160315';
header("Content-Type: text/html; charset=utf-8");
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
header("Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0");
header("Pragma: no-cache");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Grigri Box</title>
<style>
html,body,div,span,p,pre,a,code,em,img,small,strong,ol,ul,li,form,label,table,tr,th,td{margin:0;padding:0;vertical-align:baseline;outline:none;font-size:100%;background:transparent;border:none;text-decoration:none}
html{overflow-y:scroll}body{padding:0;font:13px/16px Tahoma,Arial,sans-serif;color:#222;}
input,select,textarea,button{font-size:inherit;font-family:inherit}
a{color:#296ea3;text-decoration:none}a:hover{color:#b00}img{vertical-align:middle;border:none}
a img{border:none}span.gray{color:#777}small{font-size:11px;color:#999}p{margin-bottom:10px}
ul{margin-left:2em;margin-bottom:10px}ul{list-style-type:none;margin-left:0}ul li{padding:3px 0}
table{border-collapse:collapse;border-spacing:0;margin-bottom:10px;width:100%}
th,td{padding:4px 7px;text-align:left;vertical-align:top;border:1px solid #ddd;background:#fff;white-space:nowrap}
th,td.gray{background-color:#eee}td.gray span{color:#222}
tr:hover td{background-color:#f5f5f5}tr:hover td.gray{background-color:#eee}
code,pre{display:block;margin-bottom:10px;font:13px/16px Consolas,'Courier New',Courier,monospace;border:1px dashed #ccc;padding:5px;overflow:auto}
pre.with-hljs{padding:0}
pre.with-hljs code{margin:0;border:0;overflow:visible}
code.maxheight,pre.maxheight{max-height:512px}input[type="checkbox"]{margin:0;padding:0}
#wrapper{max-width:1000px;min-width:400px;margin:10px auto}
.path{padding:4px 7px;border:1px solid #ddd;background-color:#fff;margin-bottom:10px}
.right{text-align:right}.center{text-align:center}.float-right{float:right}
.message{padding:4px 7px;border:1px solid #ddd;background-color:#fff}
.message.ok{border-color:green;color:green}
.message.error{border-color:red;color:red}
.message.alert{border-color:orange;color:orange}
.btn{border:0;background:none;padding:0;margin:0;font-weight:bold;color:#296ea3;cursor:pointer}.btn:hover{color:#b00}
.preview-img{max-width:100%;background:url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAIAAACQkWg2AAAAKklEQVR42mL5//8/Azbw+PFjrOJMDCSCUQ3EABZc4S0rKzsaSvTTABBgAMyfCMsY4B9iAAAAAElFTkSuQmCC") repeat 0 0}
.preview-video{position:relative;max-width:100%;height:0;padding-bottom:62.5%;margin-bottom:10px}.preview-video video{position:absolute;width:100%;height:100%;left:0;top:0;background:#000}
[class*="icon-"]{display:inline-block;width:16px;height:16px;background:url("<?php echo FM_SELF_URL ?>?img=sprites&amp;t=<?php echo $sprites_ver ?>") no-repeat 0 0;vertical-align:bottom}
.icon-document{background-position:-16px 0}.icon-folder{background-position:-32px 0}
.icon-folder_add{background-position:-48px 0}.icon-upload{background-position:-64px 0}
.icon-arrow_up{background-position:-80px 0}.icon-home{background-position:-96px 0}
.icon-separator{background-position:-112px 0}.icon-cross{background-position:-128px 0}
.icon-copy{background-position:-144px 0}.icon-apply{background-position:-160px 0}
.icon-cancel{background-position:-176px 0}.icon-rename{background-position:-192px 0}
.icon-checkbox{background-position:-208px 0}.icon-checkbox_invert{background-position:-224px 0}
.icon-checkbox_uncheck{background-position:-240px 0}.icon-download{background-position:-256px 0}
.icon-goback{background-position:-272px 0}.icon-folder_open{background-position:-288px 0}
.icon-file_application{background-position:0 -16px}.icon-file_code{background-position:-16px -16px}
.icon-file_csv{background-position:-32px -16px}.icon-file_excel{background-position:-48px -16px}
.icon-file_film{background-position:-64px -16px}.icon-file_flash{background-position:-80px -16px}
.icon-file_font{background-position:-96px -16px}.icon-file_html{background-position:-112px -16px}
.icon-file_illustrator{background-position:-128px -16px}.icon-file_image{background-position:-144px -16px}
.icon-file_music{background-position:-160px -16px}.icon-file_outlook{background-position:-176px -16px}
.icon-file_pdf{background-position:-192px -16px}.icon-file_photoshop{background-position:-208px -16px}
.icon-file_php{background-position:-224px -16px}.icon-file_playlist{background-position:-240px -16px}
.icon-file_powerpoint{background-position:-256px -16px}.icon-file_swf{background-position:-272px -16px}
.icon-file_terminal{background-position:-288px -16px}.icon-file_text{background-position:-304px -16px}
.icon-file_word{background-position:-320px -16px}.icon-file_zip{background-position:-336px -16px}
.icon-logout{background-position:-304px 0}.icon-chain{background-position:-320px 0}
.icon-link_folder{background-position:-352px -16px}.icon-link_file{background-position:-368px -16px}
.compact-table{border:0;width:auto}.compact-table td,.compact-table th{width:100px;border:0;text-align:center}.compact-table tr:hover td{background-color:#fff}
.filename{max-width:420px;white-space:nowrap;overflow:hidden;text-overflow:ellipsis}
.break-word{word-wrap:break-word}
.logo-header{margin:0 auto;}
</style>
<link rel="icon" href="<?php echo FM_SELF_URL ?>?img=favicon" type="image/png">
<link rel="shortcut icon" href="<?php echo FM_SELF_URL ?>?img=favicon" type="image/png">
<?php if (isset($_GET['view']) && FM_USE_HIGHLIGHTJS): ?>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.2.0/styles/<?php echo FM_HIGHLIGHTJS_STYLE ?>.min.css">
<?php endif; ?>
</head>
<body>
<div id="wrapper">
  <p class="center"><img src="images/logo-grigri-web.png"></p>
<?php
