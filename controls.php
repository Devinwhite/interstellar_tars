<!doctype html>

<html lang="en">
	<head>
		<meta charset="utf-8">

		<title>Tars Control Panel - Basic</title>
	</head>

	<body>

		<button type="button" id="clickOn">ON</button><br>
		<button type="button" id="clickOff">OFF</button><br>

		<button type="button" id="clickBlink">BLINK TEST</button><br>
		<button type="button" id="clickAudio1">MP3 TEST 1</button><br>
		<button type="button" id="clickAudio2">MP3 TEST 2</button><br>
		
		<script src="//cdn.jsdelivr.net/npm/jquery@latest/dist/jquery.min.js"></script>

		<script>
			$(function() {
				$('#clickOn').on('click', function() {
					$.get( "led_on.php",{}, function(rd) {
						//alert("LED TURNED ON");
					}, "json");
				});	
				$('#clickOff').on('click', function() {
					$.get( "led_off.php",{}, function(rd) {
						//alert("LED TURNED OFF");
					}, "json");
				});	
				$('#clickBlink').on('click', function() {
					$.get( "blink.php",{}, function(rd) {
						//blink
					}, "json");
				});
				$('#clickAudio1').on('click', function() {
					$.get( "audio1.php",{}, function(rd) {
						//mp3
					}, "json");
				});
				$('#clickAudio2').on('click', function() {
					$.get( "blinkFast.php",{}, function(rd) {
						//blink fast
					}, "json");
					$.get( "audio2.php",{}, function(rd) {
						//mp3
					}, "json");
				});			
			});
		</script>
	</body>
</html>


<!-- <canvas id="canvas" height="300" width="600"></canvas>

<script>

var canvas = document.getElementById('canvas'),
    ctx = canvas.getContext('2d');

var bars = [
    { name: 'bar1', value: 567 },
    { name: 'bar2', value: 394 }
];

var delay = 0,
    speed = 10;

for(var i = 0; i < bars.length; ++i){
    for(var l = 0; l < bars[i].value; ++l) setTimeout(ctx.fillRect.bind(ctx,0,50 + 100 * i, l, 75),(i > 0 ? delay+(bars[i-1].value*speed) : 0) + delay+l*speed);
}

</script> -->