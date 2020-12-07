<?php 
    $makho = $tenkho = $makho2 = $tenkho2 = $makho1 = "";
    require_once ('dbhelp.php');
    $makho1 = $_GET['makho'];
    if (!empty($_POST)) {
        if (isset($_POST['makho'])) {
            $makho = $_POST['makho'];
        }

        if (isset($_POST['tenkho'])) {
            $tenkho = $_POST['tenkho'];
        }
        $makho = str_replace('\'','\\\'', $makho);
        $tenkho = str_replace('\'','\\\'', $tenkho);

        if ($makho != '' &&  $makho == $makho1) {
            //update 
            $sql = "UPDATE KhoThuoc SET MaKho = '$makho', TenKho ='$tenkho'WHERE MaKho = " .$makho;
        }else {
            //insert
            $sql = "INSERT INTO KhoThuoc(MaKho,TenKho)
                VALUES('$makho', '$tenkho')";
        }
        execute($sql);
}
    if (isset($_GET['makho'])) {
        $makho = $_GET['makho'];
        
        $sql = 'SELECT * FROM KhoThuoc WHERE MaKho = '. $makho;
        $KhoPill = executeResult($sql);
        if ($KhoPill != null && count($KhoPill) > 0) {
            $pill = $KhoPill[0];
            $makho2 = $pill['MaKho'];
            $tenkho2 = $pill['TenKho'];
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
    <div id = "madalClick" class="modal"> 
            <form id="out-form" class="grid grid__form" method="post" action="">
                <div class="form-login">
                    <div class="login">
                        <span class="login-title">Thông tin kho thuốc</span>
                        <div class="login-form">
                            <div class="login-makho" style="margin-bottom: 16px;"><span class = "label" >Mã kho:</span><input type="text" name="makho" id="makho" value="<?=$makho2?>"></div>
                            <div class="login-tenkho"><span class = "label" >Tên kho:</span><input type="text" name="tenkho" id="tenkho" value="<?=$tenkho2?>">
                            </div>
                        </div>
                    </div>
                    <div class="value">
                        <table>
                           <thead>
                            <tr >
                                <th>Ma kho</th>
                                <th>Ten Kho</th>
                              </tr>
                           </thead>
                           <tbody  id="table">
<?php 
if (isset($_GET['timkiem']) && $_GET['timkiem'] != '') {
        $sql = 'SELECT * FROM KhoThuoc WHERE TenKho LIKE "%'.$_GET['timkiem'].'%"';
    }else {

    $sql = 'SELECT * FROM KhoThuoc';
}
    
    $KhoPill = executeResult($sql);

    $index = 1;
    foreach ($KhoPill as $pill) {
            echo '<tr>
                    <td>'.$pill['MaKho'].'</td>
                    <td>'.$pill['TenKho'].'</td>
                
                    <td><div class="btn11" onclick=\'window.open("KhoPill.php?makho='.$pill['MaKho'].'","_self")\'>Edit</div></td>
                    <td><div class="btn11" onclick="deleteKhoPill('.$pill['MaKho'].')">Delete</div></td>
                </tr>';                          
    }
?>
                           </tbody >
                          </table>
                    </div>
                </div>
                <div class="box-list">
                    <ul class="form-list">
                        <li class="form-item" onclick="New2()">Tạo mới</li>
                        <button id="save" class="form-item" onclick="clickSave()">Lưu</button>
                        <li class="form-item" onclick="out()">Thoat</li>
                    </ul>
                </div>
            </form>
            <form class="timkiem" action="" method="get">
                        
                        <div class="login-tenkho "><input type="text" name="timkiem" placeholder="Ten Kho">
                            <button>Tim</button></div>
            </form>
    </div>
<script src="../main.js"></script>
    <script type="text/javascript">

        function deleteKhoPill(id) {
            var option = confirm('Ban co muon xoa khong?')
            if(!option) {
                return;
            }
            $.post('delete.php', {
                        'makho': id
             }, function(data) {
                alert('da xoa thanh cong');
                location.reload();
            })
                }
    </script>
</body>
</html>