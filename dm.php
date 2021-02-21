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
danmaku: {id:'<?php echo($dm) ?>',api: 'https://dplayer.alone88.cn/',unlimited: true,},
contextmenu: [{text: '苦力怕论坛',link: 'https://klpbbs.com'},],});
</script>