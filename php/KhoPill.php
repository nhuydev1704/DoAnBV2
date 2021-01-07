<?php 
    $id1 = $id2 = $makho = $tenkho = $makho2 = $tenkho2 = $makho1 = "";
    require_once ('dbhelp.php');
    if (!empty($_POST)) {
        if (isset($_POST['makho'])) {
            $makho = $_POST['makho'];
        }

        if (isset($_POST['tenkho'])) {
            $tenkho = $_POST['tenkho'];
        }
         if (isset($_POST['id'])) {
            $id1 = $_POST['id'];
        }
        if (isset($_POST['id2'])) {
            $id2 = $_POST['id2'];
        }
        $makho = str_replace('\'','\\\'', $makho);
        $tenkho = str_replace('\'','\\\'', $tenkho);

        if ($id1 != '') {
            //update 
            $sql = "UPDATE KhoThuoc SET MaKho = '$makho', TenKho ='$tenkho'WHERE id = " .$id1;
                echo "<script > alert('Sửa thành công!')</script>";

        }else if($makho != '') {
            //insert
            $sql = "INSERT INTO KhoThuoc(MaKho,TenKho)
                VALUES('$makho', '$tenkho')";
                echo "<script > alert('Thêm thành công!')</script>";

        }
        execute($sql);
}
$id3 = '';
    if (isset($_GET['id1'])) {
        $id3 = $_GET['id1'];
        
        $sql = 'SELECT * FROM KhoThuoc WHERE MaKho = '. $id3;
        $KhoPill = executeResult($sql);
        if ($KhoPill != null && count($KhoPill) > 0) {
            $pill = $KhoPill[0];
            $makho2 = $pill['MaKho'];
            $tenkho2 = $pill['TenKho'];
        } else {

        }
    }
    require_once('html.php');
 ?>
    <div id = "madalClick" class="modal"> 
            <form id="out-form" class="grid1 grid__form" method="post" action="">
                            <input type="number" name="id" value="<?=$id3?>" hidden>

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
                                <th></th>
                                <th></th>
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
                
                    <td><div class="btn11" onclick=\'window.open("KhoPill.php?id1='.$pill['id'].'","_self")\'>Edit</div></td>
                    <td><div class="btn11" onclick="deleteKhoPill('.$pill['id'].')">Delete</div></td>
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