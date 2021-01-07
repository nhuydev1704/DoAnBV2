<?php 
    $id1 = $id2 = $makhoa = $tenkhoa = $makhoa2 = $tenkhoa2 = $makhoa1 = "";
    require_once ('dbhelp.php');
    if (!empty($_POST)) {
        if (isset($_POST['makhoa'])) {
            $makhoa = $_POST['makhoa'];
        }

        if (isset($_POST['tenkhoa'])) {
            $tenkhoa = $_POST['tenkhoa'];

        }
         if (isset($_POST['id'])) {
            $id1 = $_POST['id'];
        }
        if (isset($_POST['id2'])) {
            $id2 = $_POST['id2'];
        }
        $makhoa = str_replace('\'','\\\'', $makhoa);
        $tenkhoa = str_replace('\'','\\\'', $tenkhoa);

        if ($id1 != '') {
            //update 
            $sql = "UPDATE KhoaDT SET MaKhoa = '$makhoa', TenKhoa ='$tenkhoa'WHERE id = " .$id1;
                echo "<script > alert('Sửa thành công!')</script>";

        }else if ($makhoa != ''){
            //insert
            $sql = "INSERT INTO KhoaDT(MaKhoa,TenKhoa)
                VALUES('$makhoa', '$tenkhoa')";
                echo "<script > alert('Thêm thành công!')</script>";

        }
        execute($sql);
}
$id3 = '';
    if (isset($_GET['id1'])) {
        $id3 = $_GET['id1'];
        
        $sql = 'SELECT * FROM KhoaDT WHERE id = '. $id3;
        $Khodt = executeResult($sql);
        if ($Khodt != null && count($Khodt) > 0) {
            $khoa = $Khodt[0];
            $makhoa2 = $khoa['MaKhoa'];
            $tenkhoa2 = $khoa['TenKhoa'];
        } else {
           
        }
    }
    require_once('html.php');
 ?>
        <div id = "" class="modal"> 
            <form id="out-form" class="grid1 grid__form" method="post" action="">
                            <input type="number" name="id" value="<?=$id3?>" hidden>

                <div class="form-login">
                    <div class="login">
                        <span class="login-title">Thông tin khoa</span>
                        <div class="login-form">
                            <div class="login-makho" style="margin-bottom: 4px;"><span class = "label" >Mã khoa:</span><input type="text" name="makhoa" id="" value="<?=$makhoa2?>"></div>
                            <div class="login-tenkho"><span class = "label" >Tên khoa:</span><input type="text" name="tenkhoa" id="" value="<?=$tenkhoa2?>">
                            </div>
                        </div>
                    </div>
                    <div class="value">
                        <table >
                            <thead>
                                <tr>
                                  <th>Mã khoa</th>
                                  <th>Tên khoa</th>
                                  <th></th>
                                  <th></th>
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
                    <td><div class="btn11" onclick=\'window.open("KhoaDT.php?id1='.$khoadt['id'].'","_self")\'>Edit</div></td>
                    <td><div class="btn11" onclick="deleteKhoaDT('.$khoadt['id'].')">Delete</div></td>
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