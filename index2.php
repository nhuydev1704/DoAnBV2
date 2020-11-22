<?php 
    if(isset($_POST['email'])){ 
        $a = $_POST['email'];
        $b = $_POST['password'];
        if($a == 'Nguyennhuy@gmail.com' && $b =='123'){
            if (!$loggedIn) {
                header("Location: http://localhost/%C4%90%E1%BB%93%20%C3%A1n%20b%E1%BB%87nh%20vi%E1%BB%87n/index1.php");
                die();
            }
        }else {
            echo 'Sai ten dang nhap hoac mat khau';
        }
    }

?>