
	<html>
	<link href="css/sjh.css" rel="stylesheet">

		<head><title>T A S</title>
	
	<img src="logo.png"alt="Mountain View" height="42" width="42">
	Tech Association of Space
	
	

</head>
<body>
	<div id = "menu">
			<a href = "index.php?v=1"  >prebuilt</a>&nbsp; 
			<a href = "index.php?v=2"  >custom</a>&nbsp; 
			<a href = "index.php?v=0"  >extra</a>&nbsp; 
			<a href = "index.php?v=4"  >server</a>&nbsp; 
			<a href = "index.php?v=3"  >price</a>&nbsp; 
			<hr />
		</div>

		<div id = "contents">
		<pre>
			<?php
			if (isset($_GET['v'])) {
				$thepost = $_GET['v']; // Default page
				} else {
					$thepost = -1;
				}
				
			if ($thepost == -1) {
				echo "welcome to the bid presentation";
			}
			if ($thepost == 0) {
				require "extra.txt";
			}
			if ($thepost == 1) {
				require "prebuilt.txt";
			}
			if ($thepost == 2) {
				require "custom.txt";
			}
			if ($thepost == 3) {
				require "price.txt";
			}
			if ($thepost == 4) {
				require "server.txt";
			}
			?>
		</pre>
		<hr />
	</div>


</body>
</html>


