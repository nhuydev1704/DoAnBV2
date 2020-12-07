<?php 
    $sophieumua  = $ngaymua = $manv = $ncc = $sophieumuathuoc = $mathuoc = $soluong = $sophieumua2 = $id2 = $ngaymua2 = $manv2 = $ncc2 = $sophieumuathuoc2 = $mathuoc2 = $soluong2 = $sophieumua1 = $sophieumuathuoc1 ="";
    require_once ('dbhelp.php');
    $sophieumua1 = $_GET['sophieumua'];
    $sophieumuathuoc1 = $_GET['sophieumuathuoc'];
    if (!empty($_POST)) {
        if (isset($_POST['sophieumua'])) {
            $sophieumua = $_POST['sophieumua'];
        }

        if (isset($_POST['ngaymua'])) {
            $ngaymua = $_POST['ngaymua'];

        }

        if (isset($_POST['manv'])) {
            $manv = $_POST['manv'];

        }
        if (isset($_POST['ncc'])) {
            $ncc = $_POST['ncc'];

        }
        if (isset($_POST['sophieumuathuoc'])) {
            $sophieumuathuoc = $_POST['sophieumuathuoc'];

        }

        if (isset($_POST['mathuoc'])) {
            $mathuoc = $_POST['mathuoc'];

        }
        if (isset($_POST['soluong'])) {
            $soluong = $_POST['soluong'];

        }
        $sophieumua = str_replace('\'','\\\'', $sophieumua);
        $ngaymua = str_replace('\'','\\\'', $ngaymua);
        $manv = str_replace('\'','\\\'', $manv);
        $ncc = str_replace('\'','\\\'', $ncc);

        $sophieumuathuoc = str_replace('\'','\\\'', $sophieumuathuoc);
        $mathuoc = str_replace('\'','\\\'', $mathuoc);
        $soluong = str_replace('\'','\\\'', $soluong);

        if ($sophieumua != '' &&  $sophieumua == $sophieumua1) {
            //update 
            $sql = "UPDATE PhieuDatMua SET SoPhieuMua = '$sophieumua', NgayMua ='$ngaymua',  MaNV= '$manv', MaNCC='$ncc' WHERE SoPhieuMua = " .$sophieumua;
        }else if ($sophieumua != ''){
            //insert
            $sql = "INSERT INTO PhieuDatMua(SoPhieuMua,NgayMua,MaNV,MaNCC)
                VALUES('$sophieumua', '$ngaymua', '$manv','$ncc')";
        }
        execute($sql);

        //
        //
        if ($sophieumuathuoc != '' &&  $sophieumuathuoc == $sophieumuathuoc1) {
            //update 
            $sql1 = "UPDATE ThuocDatMua SET SoPhieuMua = '$sophieumuathuoc', MaThuoc ='$mathuoc',  SoLuong= '$soluong' WHERE  SoPhieuMua= " .$sophieumuathuoc;
        }else if($sophieumuathuoc != '') {
            //insert
            $sql1 = "INSERT INTO ThuocDatMua(SoPhieuMua,MaThuoc,SoLuong)
                VALUES('$sophieumuathuoc', '$mathuoc', '$soluong')";
        }
        execute($sql1);
}

    if (isset($_GET['sophieumua'])) {
        $id = $_GET['sophieumua'];
        $sql = 'SELECT * FROM PhieuDatMua WHERE SoPhieuMua = '. $id;
        $nccList = executeResult($sql);
        if ($nccList != null && count($nccList) > 0) {
            $ncc = $nccList[0];
            $sophieumua2 = $ncc['SoPhieuMua'];
            $ngaymua2 = $ncc['NgayMua'];
            $manv2 = $ncc['MaNV'];
            $ncc2 = $ncc['MaNCC'];
        } else {

        }
    }

    if (isset($_GET['sophieumuathuoc'])) {
        $id2 = $_GET['sophieumuathuoc'];
        
        $sql = 'SELECT * FROM ThuocDatMua WHERE SoPhieuMua = '. $id2;
        $nccList1 = executeResult($sql);
        if ($nccList1 != null && count($nccList1) > 0) {
            $ncc = $nccList1[0];
            $sophieumuathuoc2 = $ncc['SoPhieuMua'];
            $mathuoc2 = $ncc['MaThuoc'];
            $soluong2 = $ncc['SoLuong'];
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
            <div id="out-form" class="grid grid__form">
                <span class="login-title login-title3 login-title5">Thông tin phiếu đặt mua</span>
                <span class="login-title login-title3 login-title55">Thông tin thuốc đặt mua</span>
                <div class="manage" style="width: 90%;">
                    <div class="manage-top" style="padding: 14px 0 40px 0; ">
                        <form action="" method="post" style="width: 60%;">
                            <div class="manage-top_left" style="width: 90%;">
                                <div class="manage-top_left-form">
                                    <div class="login-form login-form5" >
                                        <div class="login-makho login-ncc"><span class = "label label5" >Số phiếu mua:</span><input type="text" name="sophieumua" id="" value="<?=$sophieumua2?>">
                                        </div>
                                        <div class="login-tenkho login-ncc"><span class = "label label5" >Ngày mua:</span>
                                            <input type="date" id="start" name="ngaymua"
                                           min="2010-01-01" max="2020-12-31" value="<?=$ngaymua2?>">
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
                                        <div class="login-tenkho login-ncc"><span class = "label label5" >Nhà cung cấp</span>
                                            <select name="ncc" id="cars" class="" >
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
                                <div class="box-list5">
                                    <ul class="form-list5" style="margin-top: 12px;">
                                        <li class="form-item5" onclick="New6()">Tạo mới</li>
                                        <button class="form-item5">Lưu</button>
                                        <li class="form-item5" onclick="out()">Thoat</li>
                                    </ul>
                                </div>

                             </div>
                        </form>
                        <div class="manage-top_right">
                            <div class="value">
                                <table class="table5">
                                    <thead>
                                        <tr>
                                              <th width="12%">Số phiếu mua</th>
                                              <th>Ngày mua</th> 
                                              <th width="12%">Mã nhân viên</th>
                                              <th width="15%">Mã nhà cung cấp</th>  
                                        </tr>
                                    </thead>
                                    <tbody>
    <?php 
if (isset($_GET['timkiem']) && $_GET['timkiem'] != '') {
    $sql = 'SELECT * FROM PhieuDatMua WHERE NgayMua LIKE "%'.$_GET['timkiem'].'%"';
    }else {

    $sql = 'SELECT * FROM PhieuDatMua';
}
    $datmuaList = executeResult($sql);

    foreach ($datmuaList as $mua) {
            echo '<tr>
                    <td>'.$mua['SoPhieuMua'].'</td>
                    <td>'.$mua['NgayMua'].'</td>
                    <td>'.$mua['MaNV'].'</td>
                    <td>'.$mua['MaNCC'].'</td>
                    <td><div class="btn11" onclick=\'window.open("QLDatMua.php?sophieumua='.$mua['SoPhieuMua'].'","_self")\'>Edit</div></td>
                    <td><div class="btn11" onclick="deleteDatMua('.$mua['SoPhieuMua'].')">Delete</div></td>
                </tr>';                          
    }
?>

                                    </tbody>
                                    
                                  </table>
                            </div>
                           
                        </div>
                        <form action="" method="get" class="timkiem" style="
    top: 22px;
    left: 59%;
">
                        
                        <div class="login-tenkho "><input type="text" name="timkiem" placeholder="Ngay mua yyyy-mm-dd">
                            <button>Tim</button></div>
                        </form>
                    </div>
                    <div class="manage-top manage-bottom">
                       <form action="" method="post" style="width: 60%;">
                            <div class="manage-top_left" style="width: 90%;">
                            
                            <div class="manage-top_left-form">
                                <div class="login-form login-form5" >
                                    <div class="login-makho login-ncc"><span class = "label label5" >Số phiếu mua:</span>
                                        <select name="sophieumuathuoc" id="cars" class="">
                                                <option value="<?=$sophieumuathuoc2?>"><?=$sophieumuathuoc2?></option>
                                                <?php 
                                                        $sql = 'SELECT SoPhieuMua FROM PhieuDatMua';
                                                    $employeeList = executeResult($sql);
                                                    foreach ($employeeList as $epl) {
                                                            echo '<option value= '.$epl['SoPhieuMua'].'>
                                                                    '.$epl['SoPhieuMua'].'
                                                                    </option>
                                                                    '  ;                        
                                                    }
                                                ?>
                                            </select>
                                    </div>
                                    <div class="login-tenkho login-ncc"><span class = "label label5" >Mã thuốc:</span>
                                        <select name="mathuoc" id="cars" >
                                                <option value="<?=$mathuoc2?>"><?=$mathuoc2?></option>
                                                <?php 
                                                        $sql = 'SELECT MaThuoc FROM Thuoc';
                                                    $thuocList = executeResult($sql);
                                                    foreach ($thuocList as $thuoc) {
                                                            echo '<option value= '.$thuoc['MaThuoc'].'>
                                                                    '.$thuoc['MaThuoc'].'
                                                                    </option>
                                                                    '  ;                        
                                                    }
                                                ?>
                                            </select>
                                    </div>
                                    <div class="login-makho login-ncc"><span class = "label label5" >Số lượng:</span>
                                        <input type="text" name="soluong" id="" value="<?=$soluong2?>">
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="box-list5">
                                <ul class="form-list5" style="margin-top: 12px;">
                                    <li class="form-item5" onclick="New6()">Tạo mới</li>
                                    <button class="form-item5">Lưu</button>
                                    <li class="form-item5" onclick="out()">Thoat</li>
                                </ul>
                            </div>
  
                        </div>
                       </form>
                    <div class="manage-top_right">
                        <div class="value">
                            <table class="table5">
                                <thead>
                                    <tr>
                                          <th>Số phiếu mua</th>
                                          <th>Mã thuốc</th> 
                                          <th>Số lượng</th>  
                                    </tr>
                                </thead>
                                <tbody>
<?php 
if (isset($_GET['timkiem2']) && $_GET['timkiem2'] != '') {
     $sql = 'SELECT * FROM ThuocDatMua WHERE MaThuoc LIKE "%'.$_GET['timkiem2'].'%"';
    }else {
    $sql = 'SELECT * FROM ThuocDatMua';
}
   
    $datmuaList = executeResult($sql);

    foreach ($datmuaList as $mua1) {
            echo '<tr>
                    <td>'.$mua1['SoPhieuMua'].'</td>
                    <td>'.$mua1['MaThuoc'].'</td>
                    <td>'.$mua1['SoLuong'].'</td>
                    <td><div class="btn11" onclick=\'window.open("QLDatMua.php?sophieumuathuoc='.$mua1['SoPhieuMua'].'","_self")\'>Edit</div></td>
                    <td><div class="btn11" onclick="deleteThuocDatMua('.$mua1['SoPhieuMua'].')">Delete</div></td>
                </tr>';                          
    }
?>
                                </tbody>
                                
                              </table>
                        </div>
                       
                    </div>
                    </div>
                    <form action="" method="get" class="timkiem" style="
    top: 52%;
    left: 59%;
">
                        
                        <div class="login-tenkho "><input type="text" name="timkiem2" placeholder="Ma thuoc">
                            <button>Tim</button></div>
                        </form>
                </div>
            </div>
        </div>
<script src="../main.js"></script>
    <script type="text/javascript">
        function deleteDatMua(id) {
            option = confirm('Ban co muon xoa khong?')
            if(!option) {
                return;
            }
            $.post('delete.php', {
                        'sophieumua': id
             }, function(data) {
                alert('da xoa thanh cong');
                location.reload();
            })
                }

        function deleteThuocDatMua(id) {
            option = confirm('Ban co muon xoa khong?')
            if(!option) {
                return;
            }
            $.post('delete.php', {
                        'id': id
             }, function(data) {
                alert('da xoa thanh cong');
                location.reload();
            })
                }
    </script>           
</body>
</html>