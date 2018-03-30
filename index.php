<link href="css/sjh.css" rel="stylesheet">

	<html><head><title>T A S</title>
	
	<img src="logo.png" alt="Mountain View">
	
	
	<style>
		#menu {
			position: absolute;
			left: 50px;
			top: 0px;
		}
		#contents{
			position: absolute;
			left: 100px;
			top: 50px;
		}
	</style>

</head>
<body>
	<div id = "menu">
			<a href = "index.php?v=0"  >computer</a>&nbsp; 
			<a href = "index.php?v=1"  >computer parts</a>&nbsp; 
			<a href = "index.php?v=2"  >monitor details</a>&nbsp; 
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
				echo "html append broke";
			}
			if ($thepost == 0) {
				require "computer.txt";
			}
			if ($thepost == 1) {
				require "computerpart.txt";
			}
			if ($thepost == 2) {
				require "monitor_details.txt";
			}
			?>
		</pre>
		<hr />
	</div>


</body>
</html>


