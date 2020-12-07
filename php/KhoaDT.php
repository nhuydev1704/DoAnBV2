<?php 
    $makhoa = $tenkhoa = $makhoa2 = $tenkhoa2 = $makhoa1 = "";
    require_once ('dbhelp.php');
    $makhoa1 = $_GET['makhoa'];
    if (!empty($_POST)) {
        if (isset($_POST['makhoa'])) {
            $makhoa = $_POST['makhoa'];
        }

        if (isset($_POST['tenkhoa'])) {
            $tenkhoa = $_POST['tenkhoa'];

        }
        $makhoa = str_replace('\'','\\\'', $makhoa);
        $tenkhoa = str_replace('\'','\\\'', $tenkhoa);

        if ($makhoa != '' &&  $makhoa == $makhoa1) {
            //update 
            $sql = "UPDATE KhoaDT SET MaKhoa = '$makhoa', TenKhoa ='$tenkhoa'WHERE MaKhoa = " .$makhoa;
        }else {
            //insert
            $sql = "INSERT INTO KhoaDT(MaKhoa,TenKhoa)
                VALUES('$makhoa', '$tenkhoa')";
        }
        execute($sql);
}
    if (isset($_GET['makhoa'])) {
        $makhoa = $_GET['makhoa'];
        
        $sql = 'SELECT * FROM KhoaDT WHERE MaKhoa = '. $makhoa;
        $Khodt = executeResult($sql);
        if ($Khodt != null && count($Khodt) > 0) {
            $khoa = $Khodt[0];
            $makhoa2 = $khoa['MaKhoa'];
            $tenkhoa2 = $khoa['TenKhoa'];
        } else {
           
        }
    }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hệ thống quản lý quầy thuốc bệnh viện</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/fonts/fontawesome-free-5.14.0-web/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/base.css">
    <link rel="stylesheet" href="../assets/css/main.css">
    <script src="../assets/js/jquery.js"></script>

</head>
<body>
        <div id = "" class="modal"> 
            <form id="out-form" class="grid grid__form" method="post" action="">
                <div class="form-login">
                    <div class="login">
                        <span class="login-title">Thông tin khoa</span>
                        <div class="login-form">
                            <div class="login-makho"><span class = "label" >Mã khoa:</span><input type="text" name="makhoa" id="" value="<?=$makhoa2?>"></div>
                            <div class="login-tenkho"><span class = "label" >Tên khoa:</span><input type="text" name="tenkhoa" id="" value="<?=$tenkhoa2?>">
                            </div>
                        </div>
                    </div>
                    <div class="value">
                        <table>
                            <thead>
                                <tr>
                                  <th>Mã khoa</th>
                                  <th>Tên khoa</th>
                                </tr>
                            </thead>

                            <tbody>
<?php 
if (isset($_GET['timkiem']) && $_GET['timkiem'] != '') {
        $sql = 'SELECT * FROM KhoaDT WHERE TenKhoa LIKE "%'.$_GET['timkiem'].'%"';
    }else {

    $sql = 'SELECT * FROM KhoaDT';
}
    
    $khoaDTList = executeResult($sql);
    $index = 1;
    foreach ($khoaDTList as $khoadt) {
            echo '<tr>
                    <td>'.$khoadt['MaKhoa'].'</td>
                    <td>'.$khoadt['TenKhoa'].'</td>
                    <td><div class="btn11" onclick=\'window.open("KhoaDT.php?makhoa='.$khoadt['MaKhoa'].'","_self")\'>Edit</div></td>
                    <td><div class="btn11" onclick="deleteKhoaDT('.$khoadt['MaKhoa'].')">Delete</div></td>
                </tr>';                          
    }
?>

                            </tbody>
                          </table>
                    </div>
                </div>
                <div class="box-list">
                    <ul class="form-list">
                        <li class="form-item" onclick="New3()">Tạo mới</li>
                        <button class="form-item">Lưu</button>
                        <li class="form-item" onclick="out()">Thoat</li>
                    </ul>
                </div>
            </form>
            <form action="" method="get" class="timkiem">
                        
                        <div class="login-tenkho "><input type="text" name="timkiem" placeholder="Ten Khoa">
                            <button>Tim</button></div>
            </form>
        </div>
<script src="../main.js"></script>
<script type="text/javascript">

        function deleteKhoaDT(id) {
            var option = confirm('Ban co muon xoa khong?')
            if(!option) {
                return;
            }
            $.post('delete.php', {
                        'makhoa': id
             }, function(data) {
                alert('da xoa thanh cong');
                location.reload();
            })
                }
    </script>
</body>
</html>