<?php 

$username = "doanbenh_root"; // Khai báo username
        $password = "khanhandli";      // Khai báo password
        $server   = "localhost";   // Khai báo server
        $dbname   = "doanbenh_BenhVien1";      // Khai báo database
        // Kết nối database
        $connect = new mysqli($server, $username, $password, $dbname);
        //Nếu kết nối bị lỗi thì xuất báo lỗi và thoát.
        if ($connect->connect_error) {
        die("Không kết nối :" . $conn->connect_error);
        exit();} else {
         echo "string";
        }
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Document</title>
    </head>
    <body>
       dsadsadsadsadssa
    </body>
    </html>