<link href="res/DPlayer.min.css" rel="stylesheet">
<script src="res/DPlayer.min.js"></script>
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
