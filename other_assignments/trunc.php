<?php
	function trunc($str)
	{
		for($i = 0; $i<strlen($str)-4;$i++)
		{
			echo substr($str, $i, 1);
		}
	}

	trunc('will this work for me');
?>