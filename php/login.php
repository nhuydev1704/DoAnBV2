

<?php 

   // if(isset($_POST['email'])){ 
      //  $a = $_POST['email'];
      //  $b = $_POST['password'];
      //  if($a == 'Nguyennhuy@gmail.com' && $b =='123'){
          //  if (!$loggedIn) {
           //     header("Location: http://localhost:9000/index1.php");
         //       die();
           // }
       // }else {
          //  echo 'Sai ten dang nhap hoac mat khau';
     //   }
    //}
    //
    //
    //  <?php
// $username = "root"; // Khai báo username
// $password = "";      // Khai báo password
// $server   = "localhost";   // Khai báo server
// $dbname   = "thuvien";      // Khai báo database

// // Kết nối database
// $connect = new mysqli($server, $username, $password, $dbname);

// //Nếu kết nối bị lỗi thì xuất báo lỗi và thoát.
// if ($connect->connect_error) {
//     die("Không kết nối :" . $conn->connect_error);
//     exit();
// }

// //Khai báo giá trị ban đầu, nếu không có thì khi chưa submit câu lệnh insert sẽ báo lỗi
// $title = "";
// $date = "";
// $description = "";
// $content = "";

// //Lấy giá trị POST từ form vừa submit
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     if(isset($_POST["title"])) { $title = $_POST['title']; }
//     if(isset($_POST["date"])) { $date = $_POST['date']; }
//     if(isset($_POST["description"])) { $description = $_POST['description']; }
//     if(isset($_POST["content"])) { $content = $_POST['content']; }

//     //Code xử lý, insert dữ liệu vào table
//    //  $sql = "INSERT INTO tin_xahoi (title, date, description, content)
//    // VALUES ('$title', '$date', '$description', '$content')";

//     $sql = "INSERT INTO sach (id, ma,dates,mota,content)
//     VALUES ('2','$title','$date','$description','$content')";

//     if ($connect->query($sql) === TRUE) {
//         echo "Thêm dữ liệu thành công";
//     } else {
//         echo "Error: " . $sql . "<br>" . $connect->error;
//     }
// }
// //Đóng database
// $connect->close();

    if (isset($_POST['DN'])) {
        $email = "";
        $password1 = "";
        if ($_POST['email'] == NULL) {
            echo "Email khong duoc de trong!";
            echo "</br>";
        } else {
            $email = $_POST['email'];
            echo $user;
            echo "</br>";}

        if ($_POST['password1'] == NULL) {
            echo "Password khong duoc de trong!";
            echo "</br>";
        } else {
            $password1 = $_POST['password1'];
            echo "</br>";
        }
        if ($user == "" && $password1 == "") {
            echo "Khong duoc de trong";
            echo "</br>";

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
        // dang nhap
        $sql = "SELECT email,password FROM user";
        $result = mysqli_query($connect, $sql);

        if (mysqli_num_rows($result) > 0) {
          // output data of each row
          $email1;
          $password2;
          $a = 'tc';
          $b;
        if ($a == 'tc') {
          while($row = mysqli_fetch_assoc($result)) {
                $email1 = $row["email"];
                $password2 = $row["password"];
            if ($email1 == $email && $password2 == $password1) {
                if (!$loggedIn) {
                    header("Location: http://localhost:9000/index1.php");
                    die();
            }
                $b = 'a';
            } else{
                $a = 'tc2';
            }        
        }
        }
        if ($a == 'tc2' && $b !== 'a') {
            
                $message = "Sai mat khau hoac user";
                echo "<script type='text/javascript'>alert('$message');</script>";
        }
        } else {
          echo "saii";
        }
        $connect->close();
    }
    }
 ?>