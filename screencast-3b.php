<html>
	<head>
		<title>RAT</title>
	</head>
	<body>
		<form id="age-frm" method="post"?>
			<div style="align-items: center; width: 30%; margin: auto; padding: 20px; border: 1px solid #B0C4DE;">
				<h1 style="font-size: 40px; text-decoration: underline; text-align: center;">RAT</h1>
				<span class="txt" style="font-size: 20px; color: blue;">Input your text:</span>
				<input type="text" id="text" name="txt">
				</br>
				<button name="submit" style="margin: 10px 0 10px 0;">SUBMIT</button>
				<br>
			</div>
		</form>
	</body>
</html>
<?php
	
	if(isset($_POST['submit'])){
		$txt = $_POST['txt'];
		
		$res = preg_replace("/[^a-zA-Z0-9]/", ", ", $txt);
		$res2 = preg_replace("/[^0-9]/", "", $res);
		echo $res;
		echo $res2;
	}

	function convertstring($txt){
		
	}
?>