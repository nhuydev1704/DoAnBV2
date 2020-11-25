<?php 
	if (isset($_POST['DK'])) {
	        $email = "";
	        $password1 = "";
	        $password2 = "";
	        if ($_POST['email'] == NULL) {
	            echo "Email khong duoc de trong!";
	            echo "</br>";
	        } else {
	       		$email = $_POST['email'];
	            echo "</br>";}

	        if ($_POST['password1'] == NULL) {
	            echo "Password khong duoc de trong!";
	            echo "</br>";
	        } else {
	            $password1 = $_POST['password1'];
	            echo "</br>";
	        }
	        if ($_POST['password2'] == NULL) {
	            echo "Nhap lai Password khong duoc de trong!";
	            echo "</br>";
	        } else {
	            $password2 = $_POST['password2'];
	            echo "</br>";
	        }if($password1 !== $password2) {
	        	echo "Password nhap lai khong trung khop!";
	        } else {
        $username = "root"; // Khai báo username
        $password = "";      // Khai báo password
        $server   = "localhost";   // Khai báo server
        $dbname   = "users";      // Khai báo database
        // Kết nối database
        $connect = new mysqli($server, $username, $password, $dbname);
        //Nếu kết nối bị lỗi thì xuất báo lỗi và thoát.
        if ($connect->connect_error) {
        die("Không kết nối :" . $conn->connect_error);
        exit();}

        //them du lieu
        $sql = "INSERT INTO user(email, password)
        VALUES ('$email','$password1')";
        if ($connect->query($sql) === TRUE) {
        	$message = "Dang ky thanh cong! Chao mung ban den voi He Thong Cua Nhu Y";
                echo "<script type='text/javascript'>alert('$message');</script>";
        } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
        }
        //Đóng database
        $connect->close();
  		}}
 ?>