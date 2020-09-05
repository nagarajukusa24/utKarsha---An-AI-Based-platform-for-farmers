<?php
	function ExecuteQuery ($SQL)
	{	
		$con=mysqli_connect("localhost", "root","","forum");
				
		$rows = mysqli_query($con,$SQL);
		
		mysqli_close ($con);
		
		return $rows;
	}
	
	function ExecuteNonQuery ($SQL)
	{
		$con=mysqli_connect ("localhost", "root","","forum");
		
		
		$result = mysqli_query ($con,$SQL);
		
		mysqli_close ($con);
		
		return $result;
	}
?>