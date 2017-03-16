<html>
My Webpage<br>
	<?php
		$user="Subi";
	?>
	<?php
		wtireMsg();
		$twitterMsg="My twitter message is not so long";
		$l=varLength($twitterMsg);
		echo $l;
		
		echo varLength($twitterMsg);
	?>
	<?php
		function writeMsg(){
			echo "Welcome back ".$user."!";			
		}
		function varLength(&a){
			$length=strlen($a);
			
			return $length;
		}
	?>
		
</html>