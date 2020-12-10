<?php 
    $sophieu = $ngay = $manv = $makho = $makhoa = $mancc = $sophieu1 = $mathuoc = $id2 = $soluong =$soluong2 = $ngay2 = $manv2 = $makho2 = $makhoa2 = $ncc2 = $sophieu2 = $mathuoc2 = $sophieu3 = $sophieu4 = $sophieu5 = "";
    require_once ('dbhelp.php');
    $sophieu4 = $_GET['sophieu'];
    $sophieu5 = $_GET['sophieu1'];
    if (!empty($_POST)) {
        if (isset($_POST['sophieu'])) {
            $sophieu = $_POST['sophieu'];
        }

        if (isset($_POST['ngay'])) {
            $ngay = $_POST['ngay'];

        }

        if (isset($_POST['manv'])) {
            $manv = $_POST['manv'];

        }
        if (isset($_POST['makho'])) {
            $makho = $_POST['makho'];

        }
        if (isset($_POST['makhoa'])) {
            $makhoa = $_POST['makhoa'];

        }

        if (isset($_POST['mancc'])) {
            $mancc = $_POST['mancc'];

        }

        //bangr 2
        if (isset($_POST['sophieu1'])) {
            $sophieu1 = $_POST['sophieu1'];

        }
        if (isset($_POST['mathuoc'])) {
            $mathuoc = $_POST['mathuoc'];

        }
        if (isset($_POST['soluong'])) {
            $soluong = $_POST['soluong'];

        }
        $sophieu = str_replace('\'','\\\'', $sophieu);
        $ngay = str_replace('\'','\\\'', $ngay);
        $manv = str_replace('\'','\\\'', $manv);
        $mancc = str_replace('\'','\\\'', $mancc);

        $sophieu1 = str_replace('\'','\\\'', $sophieu1);
        $mathuoc = str_replace('\'','\\\'', $mathuoc);
        $soluong = str_replace('\'','\\\'', $soluong);

        if ($sophieu != '' &&  $sophieu == $sophieu4) {
            //update 
            $sql = "UPDATE PhieuNhap SET SoPhieuNhap = '$sophieu', NgayNhap ='$ngay',  MaNV= '$manv', MaKho='$makho', MaNCC='$mancc' WHERE SoPhieuNhap = " .$sophieu;
        }else if ($sophieu != ''){
            //insert
            $sql = "INSERT INTO PhieuNhap(SoPhieuNhap,NgayNhap,MaNV,MaKho,MaKhoa,MaNCC)
                VALUES('$sophieu', '$ngay', '$manv','$makho','$makhoa','$mancc')";
        }
        execute($sql);

        //
        //
        if ($sophieu1 != '' && $sophieu1 == $sophieu5) {
            //update 
            $sql1 = "UPDATE ThuocNhap SET SoPhieuNhap = '$sophieu1', MaThuoc ='$mathuoc',  SoLuong= '$soluong' WHERE SoPhieuNhap = " .$sophieu1;
        }else if ($sophieu1 != ''){
            //insert
            $sql1 = "INSERT INTO ThuocNhap(SoPhieuNhap,MaThuoc,SoLuong)
                VALUES('$sophieu1', '$mathuoc', '$soluong')";
        }
        execute($sql1);
}

    if (isset($_GET['sophieu'])) {
        $id = $_GET['sophieu'];
        
        $sql = 'SELECT * FROM PhieuNhap WHERE SoPhieuNhap = '. $id;
        $nccList = executeResult($sql);
        if ($nccList != null && count($nccList) > 0) {
            $ncc = $nccList[0];
            $sophieu2 = $ncc['SoPhieuNhap'];
            $ngay2 = $ncc['NgayNhap'];
            $manv2 = $ncc['MaNV'];
            $makho2 = $ncc['MaKho'];
            $makhoa2 = $ncc['MaKhoa'];
            $ncc2 = $ncc['MaNCC'];
        } else {

        }
    }

    if (isset($_GET['sophieu1'])) {
        $id1 = $_GET['sophieu1'];
        
        $sql = 'SELECT * FROM ThuocNhap WHERE SoPhieuNhap = '. $id1;
        $ncc1List = executeResult($sql);
        if ($ncc1List != null && count($ncc1List) > 0) {
            $ncc = $ncc1List[0];
            $sophieu3 = $ncc['SoPhieuNhap'];
            $mathuoc2 = $ncc['MaThuoc'];
            $soluong2 = $ncc['SoLuong'];
        } else {

        }
    }
    require_once('html.php');
 ?>
        <div id = "madalClick7" class="modal"> 
            <div id="out-form" class="grid grid__form">
                <span class="login-title login-title3 login-title6">Thông tin phiếu nhập</span>
                <span class="login-title login-title3 login-title56">Chi tiết thuốc</span>
                <div class="manage" style="
    width: 100%;
">
                    <div class="manage-top">
                        <form class="manage-top_left" method="post" action="" style="
    width: 45%;
">
                            
                                <div class="manage-top_left-form">
                                    <div class="login-form login-form5" >
                                        <div class="login-makho login-ncc"><span class = "label label5" >Số phiếu:</span><input type="text" name="sophieu" value="<?=$sophieu2?>" id="">
                                        </div>
                                        <div class="login-tenkho login-ncc">
                                               <span class = "label label5" >Ngày:</span>
                                                <input type="date" id="start" name="ngay"
                                               min="2010-01-01" max="2020-12-31" value="<?=$ngay2?>">
                                        </div>
                                        <div class="login-tenkho login-ncc"><span class = "label label5" >Mã nhân viên:</span>
                                           <select name="manv" id="cars" class="">
                                                <option value="<?=$manv2?>"><?=$manv2?></option>
                                                <?php 
                                                        $sql = 'SELECT MaNV FROM NhanVien';
                                                    $employeeList = executeResult($sql);
                                                    foreach ($employeeList as $epl) {
                                                            echo '<option value= '.$epl['MaNV'].'>
                                                                    '.$epl['MaNV'].'
                                                                    </option>
                                                                    '  ;                        
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="login-tenkho login-ncc"><span class = "label label5" >Mã kho:</span>
                                            <select name="makho" id="cars" class="">
                                                <option value="<?=$makho2?>"><?=$makho2?></option>
                                                <?php 
                                                        $sql = 'SELECT MaKho FROM KhoThuoc';
                                                    $employeeList = executeResult($sql);
                                                    foreach ($employeeList as $epl) {
                                                            echo '<option value= '.$epl['MaKho'].'>
                                                                    '.$epl['MaKho'].'
                                                                    </option>
                                                                    '  ;                        
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="login-tenkho login-ncc"><span class = "label label5" >Mã khoa:</span>
                                            <select name="makhoa" id="cars" class="">
                                                <option value="<?=$makhoa2?>"><?=$makhoa2?></option>
                                                <?php 
                                                        $sql = 'SELECT MaKhoa FROM KhoaDT';
                                                    $employeeList = executeResult($sql);
                                                    foreach ($employeeList as $epl) {
                                                            echo '<option value= '.$epl['MaKhoa'].'>
                                                                    '.$epl['MaKhoa'].'
                                                                    </option>
                                                                    '  ;                        
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="login-tenkho login-ncc"><span class = "label label5" >Mã nhà cung cấp:</span>
                                            <select name="mancc" id="cars" class="">
                                                <option value="<?=$ncc2?>"><?=$ncc2?></option>
                                                <?php 
                                                        $sql = 'SELECT MaNCC FROM NhaCungCap';
                                                    $employeeList = executeResult($sql);
                                                    foreach ($employeeList as $epl) {
                                                            echo '<option value= '.$epl['MaNCC'].'>
                                                                    '.$epl['MaNCC'].'
                                                                    </option>
                                                                    '  ;                        
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                       
                                    </div>
                                </div>
                                <div class="box-list5" style="margin-top: 12px;">
                                    <ul class="form-list5">
                                        <li class="form-item5" onclick="New9()">Tạo mới</li>
                                        <button class="form-item5">Lưu</button>
                                        <li class="form-item5" onclick="out()">Thoat</li>
                                    </ul>
                                </div>
                           
                             
                             
                        </form>
                        <div class="manage-top_right" style="">
                            <div class="value">
                                <table class="table5">
                                    <thead>
                                        <tr>
                                              <th>Số phiếu</th>
                                              <th>Ngày</th> 
                                              <th>Mã nhân viên</th>
                                              <th>Mã kho</th>
                                              <th>Mã khoa</th>
                                              <th>Mã nhà cung cấp</th>
                                        </tr>
                                    </thead>
                                    <tbody>
 <?php 
if (isset($_GET['timkiem']) && $_GET['timkiem'] != '') {
    $sql = 'SELECT * FROM PhieuNhap WHERE MaNV LIKE "%'.$_GET['timkiem'].'%"';
    }else {

    $sql = 'SELECT * FROM PhieuNhap';
}
    $datmuaList = executeResult($sql);

    foreach ($datmuaList as $mua) {
            echo '<tr>
                    <td>'.$mua['SoPhieuNhap'].'</td>
                    <td width="20%">'.$mua['NgayNhap'].'</td>
                    <td>'.$mua['MaNV'].'</td>
                    <td>'.$mua['MaKho'].'</td>
                    <td>'.$mua['MaKhoa'].'</td>
                    <td>'.$mua['MaNCC'].'</td>
                    <td><div class="btn11" onclick=\'window.open("QLNhapThuoc.php?sophieu='.$mua['SoPhieuNhap'].'","_self")\'>Edit</div></td>
                    <td><div class="btn11" onclick="deletePhieuNhap('.$mua['SoPhieuNhap'].')">Delete</div></td>
                </tr>';                          
    }
?>
                                    </tbody>
                                    
                                  </table>
                            </div>
                           
                        </div>
                        <form action="" method="get" class="timkiem" style="
    top: 10px;
    left: 59%;
">
                        
                        <div class="login-tenkho "><input type="text" name="timkiem" placeholder="Nhap manv">
                            <button>Tim</button></div>
                        </form>
                    </div>
                    <div class="manage-top manage-bottom">
                        <form class="manage-top_left" method="post" action="" style="
    width: 45%;
">
                            <div class="manage-top_left-form" >
                                <div class="login-form login-form5" >
                                    <div class="login-makho login-ncc"><span class = "label label5" >Số phiếu:</span>
                                        <select name="sophieu1" id="cars" class="" >
                                                <option value="<?=$sophieu3?>"><?=$sophieu3?></option>
                                                <?php 
                                                        $sql = 'SELECT SoPhieuNhap FROM PhieuNhap';
                                                    $employeeList = executeResult($sql);

                                                    foreach ($employeeList as $epl) {
                                                            echo '<option value= '.$epl['SoPhieuNhap'].'>
                                                                    '.$epl['SoPhieuNhap'].'
                                                                    </option>
                                                                    '  ;                        
                                                    }
                                                ?>
                                            </select>
                                    </div>
                                    <div class="login-tenkho login-ncc"><span class = "label label5" >Mã thuốc:</span>
                                        <select name="mathuoc" id="cars" class="" >
                                                <option value="<?=$mathuoc2?>"><?=$mathuoc2?></option>
                                                <?php 
                                                    $sql = 'SELECT MaThuoc FROM Thuoc';
                                                    $employeeList = executeResult($sql);

                                                    foreach ($employeeList as $epl) {
                                                            echo '<option value= '.$epl['MaThuoc'].'>
                                                                    '.$epl['MaThuoc'].'
                                                                    </option>
                                                                    '  ;                        
                                                    }
                                                ?>
                                            </select>
                                    </div>
                                    <div class="login-makho login-ncc"><span class = "label label5" >Số lượng:</span><input type="text" name="soluong" id="" value="<?=$soluong2?>">
                                    </div>
                                </div>
                            </div>
                            <div class="box-list5">
                                <ul class="form-list5" style="
    transform: translateY(17px);
">
                                    <li class="form-item5" onclick="New9()">Tạo mới</li>
                                    <button class="form-item5">Lưu</button>
                                    <li class="form-item5" onclick="out()">Thoat</li>
                                </ul>
                            </div>
                       
                         
                         
                    </form>
                    <div class="manage-top_right" style="transform: translateY(36px);
">
                        <div class="value">
                            <table class="table5">
                               <thead>
                                    <tr>
                                  <th>Số phiếu</th>
                                  <th>Mã thuốc</th> 
                                  <th>Số lượng</th>    
                                </tr>
                               </thead>
                               <tbody>
<?php 
if (isset($_GET['timkiem1']) && $_GET['timkiem1'] != '') {
    $sql = 'SELECT * FROM ThuocNhap WHERE MaThuoc LIKE "%'.$_GET['timkiem1'].'%"';
    }else {

    $sql = 'SELECT * FROM ThuocNhap';
}
    $datmuaList = executeResult($sql);

    foreach ($datmuaList as $mua) {
            echo '<tr>
                    <td>'.$mua['SoPhieuNhap'].'</td>
                    <td>'.$mua['MaThuoc'].'</td>
                    <td>'.$mua['SoLuong'].'</td>
                    <td><div class="btn11" onclick=\'window.open("QLNhapThuoc.php?sophieu1='.$mua['SoPhieuNhap'].'","_self")\'>Edit</div></td>
                    <td><div class="btn11" onclick="deleteThuocNhap('.$mua['SoPhieuNhap'].')">Delete</div></td>
                </tr>';                          
    }
?>  

                               </tbody>
                                
                              </table>
                        </div>
                       
                    </div>
                    </div>
                    <form action="" method="get" class="timkiem" style="
    top: 59%;
    left: 59%;
">
                        
                        <div class="login-tenkho "><input type="text" name="timkiem1" placeholder="Ma thuoc">
                            <button>Tim</button></div>
                        </form>
                </div>   
            </div>
        </div>
<script src="../main.js"></script>
    <script type="text/javascript">
        function deletePhieuNhap(id) {
            option = confirm('Ban co muon xoa khong?')
            if(!option) {
                return;
            }
            $.post('delete.php', {
                        'phieunhap': id
             }, function(data) {
                alert('da xoa thanh cong');
                location.reload();
            })
                }

        function deleteThuocNhap(id) {
            option = confirm('Ban co muon xoa khong?')
            if(!option) {
                return;
            }
            $.post('delete.php', {
                        'thuocnhap': id
             }, function(data) {
                alert('da xoa thanh cong');
                location.reload();
            })
                }
    </script>           
</body>
</html>