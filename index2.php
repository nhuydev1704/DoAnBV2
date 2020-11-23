<?php 
    if(isset($_POST['email'])){ 
        $a = $_POST['email'];
        $b = $_POST['password'];
        if($a == 'Nguyennhuy@gmail.com' && $b =='123'){
            if (!$loggedIn) {
                header("Location: http://localhost:9000/index1.php");
                die();
            }
        }else {
            echo 'Sai ten dang nhap hoac mat khau';
        }
    }

?>