<?php 
	require_once('config.php');

	// insert, update, delete -> su dung function
	function execute($sql) {
		//tao connection toi database
		$conn = mysqli_connect(HOST,USERNAME,PASSWORD, DATABASE);
		//QUERY
		mysqli_query($conn, $sql);

		//dong database
		mysqli_close($conn);
	}


	//Su dung cho lenh select -> tra ve ket qua
	function executeResult($sql) {
		//tao connection toi database
		$conn = mysqli_connect(HOST,USERNAME,PASSWORD, DATABASE);
		//QUERY
		$resultset = mysqli_query($conn,$sql);
		$list = [];
		while ($row = mysqli_fetch_array($resultset, 1)) {
			$list[] = $row;
		}
		//dong database
		mysqli_close($conn);

		return $list;
	}
	function executeSingleResult($sql) {
	//save data into table
	// open connection to database
	$con = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
	//insert, update, delete
	$result = mysqli_query($con, $sql);
	$row    = mysqli_fetch_array($result, 1);

	//close connection
	mysqli_close($con);

	return $row;
}
 ?>