<link href="res/DPlayer.min.css" rel="stylesheet">
<script src="res/DPlayer.min.js"></script>
<?php
$url = $_GET["url"];
$dm = $_GET["dm"];
?>
<div id="dplayer"></div>
<script type="text/javascript">
const dp = new DPlayer({
container: document.getElementById('dplayer'),
volume: 1,
video: {url: '<?php echo($url) ?>'},
danmaku: {id:'<?php echo($dm) ?>',api: 'https://dplayer.alone88.cn/',unlimited: true,}, //弹幕库，网上随便找了一个，最好用uuid作为id
contextmenu: [{text: '苦力怕论坛',link: 'https://klpbbs.com'},],});  //右键菜单自定义添加项，其他需要到res中修改
</script>
