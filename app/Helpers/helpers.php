<?php 
	
	function seperator($depth)
	{
		$space = '';
		for ($i=2; $i < $depth; $i++) { 
			$space .= '*';
		}
		return $space;
	}

 ?>