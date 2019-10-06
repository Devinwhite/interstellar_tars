<!doctype html>

<html lang="en">
	<head>
		<meta charset="utf-8">

		<title>Tars Control Panel - Basic</title>
	</head>

	<body>

		<button type="button" id="clickOn">ON</button><br>
		<button type="button" id="clickOff">OFF</button><br>
		
		<script src="//cdn.jsdelivr.net/npm/jquery@latest/dist/jquery.min.js"></script>

		<script>
			$(function() {
				$('#clickOn').on('click', function() {
					$.get( "led_on.php",{}, function(rd) {
						alert("LED TURNED ON");
					}, "json");
				});	
				$('#clickOff').on('click', function() {
					$.get( "led_off.php",{}, function(rd) {
						alert("LED TURNED OFF");
					}, "json");
				});			
			});
		</script>
	</body>
</html>