<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/push.js/1.0.5/push.min.js">
</script>

<script type="text/javascript">
	var conn = new WebSocket('ws://localhost:82');
	//var conn = new WebSocket('ws://172.17.0.1:82');
	conn.onopen = function(e) {
	    console.log("Connection established!");
	};

	conn.onmessage = function(e) {
	    Push.create(e.data);
	};
</script>

</html>