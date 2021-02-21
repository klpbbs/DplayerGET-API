<link href="res/DPlayer.min.css" rel="stylesheet">
<script src="res/DPlayer.min.js"></script>
<style type="text/css">
    body,html{width:100%;height:100%;background:#000;padding:0;margin:0;overflow-x:hidden;overflow-y:hidden}
    *{margin:0;border:0;padding:0;text-decoration:none}
    #stats{position:fixed;top:5px;left:10px;font-size:12px;color:#fdfdfd;z-index:2147483647;text-shadow:1px 1px 1px #000, 1px 1px 1px #000}
    #dplayer{position:inherit}
</style>
<?php
$url = $_GET["url"];
?>
<div id="dplayer"></div>
<script type="text/javascript">
const dp = new DPlayer({
container: document.getElementById('dplayer'),
volume: 1,
video: {url: '<?php echo($url) ?>'}, 
contextmenu: [{text: '苦力怕论坛',link: 'https://klpbbs.com'},],}); //右键菜单自定义添加项，其他需要到res中修改
</script>
