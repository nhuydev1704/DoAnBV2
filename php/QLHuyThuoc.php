
<?php 
    $sophieu = $id = $id1 = $ngay = $manv = $makho = $sophieu1 = $mathuoc = $id2 = $soluong =$soluong2 = $ngay2 = $manv2 = $makho2 = $sophieu2 = $mathuoc2 = $sophieu3 = "";
    require_once ('dbhelp.php');
    $sophieu3 = $_GET['sophieu'];
    $id = $_GET['id'];
    $id1 = $_GET['id1'];
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

        $sophieu1 = str_replace('\'','\\\'', $sophieu1);
        $mathuoc = str_replace('\'','\\\'', $mathuoc);
        $soluong = str_replace('\'','\\\'', $soluong);

        if ($sophieu != '' &&  $sophieu == $sophieu3) {
            //update 
            $sql = "UPDATE BienBanHuy SET SoPhieuBB = '$sophieu', NgayBB ='$ngay',  MaNV= '$manv', MaKho='$makho', WHERE id = " .$id;
        }else {
            //insert
            $sql = "INSERT INTO BienBanHuy(SoPhieuBB,NgayBB,MaNV,MaKho)
                VALUES('$sophieu', '$ngay', '$manv','$makho')";
        }
        execute($sql);

        //
        //
        if ($id1 != '') {
            //update 
            $sql1 = "UPDATE ThuocHuy SET SoPhieuHuy = '$sophieu1', MaThuoc ='$mathuoc',  SoLuong= '$soluong' WHERE id1 = " .$id1;
        }else {
            //insert
            $sql1 = "INSERT INTO ThuocHuy(SoPhieuHuy,MaThuoc,SoLuong)
                VALUES('$sophieu1', '$mathuoc', '$soluong')";
        }
        execute($sql1);
}

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        
        $sql = 'SELECT * FROM BienBanHuy WHERE id = '. $id;
        $nccList = executeResult($sql);
        if ($nccList != null && count($nccList) > 0) {
            $ncc = $nccList[0];
            $sophieu2 = $ncc['SoPhieuBB'];
            $ngay2 = $ncc['NgayBB'];
            $manv2 = $ncc['MaNV'];
            $makho2 = $ncc['MaKho'];
        } else {

        }
    }

    if (isset($_GET['id1'])) {
        $id1 = $_GET['id1'];
        
        $sql = 'SELECT * FROM ThuocHuy WHERE id1 = '. $id1;
        $ncc1List = executeResult($sql);
        if ($ncc1List != null && count($ncc1List) > 0) {
            $ncc = $ncc1List[0];
            $sophieu3 = $ncc['SoPhieuHuy'];
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




<div id = "madalClick9" class="modal"> 
               <div id="out-form" class="grid grid__form">
                    <span class="login-title login-title3 login-title6 login-title89">Thông tin thuốc hủy</span>
                    <span class="login-title login-title3 login-title56 login-title9">Chi tiết thuốc</span>
                    <div class="manage" style="
    width: 100%;
">
                        <div class="manage-top">
                            <form class="manage-top_left manage-top_left9" method="post" action="" style="width: 45%;">
                                
                                    <div class="manage-top_left-form">
                                        <div class="login-form login-form5" >
                                            <div class="login-makho login-ncc"><span class = "label label5" >Số phiếu BB:</span><input type="text" name="sophieu" id="" value="<?=$sophieu2?>">
                                            </div>
                                            <div class="login-tenkho login-ncc"><span class = "label label5" >Ngày BB:</span>
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
                                        </div>
                                    </div>
                                    <div class="box-list5">
                                        <ul class="form-list5" style="margin-top: 12px;">
                                            <li class="form-item5" onclick="New11()">Tạo mới</li>
                                            <button class="form-item5">Lưu</button>
                                            <li class="form-item5" onclick="out()">Thoat</li>
                                        </ul>
                                    </div>  
                            </form>
                            <div class="manage-top_right" style="
    width: 45%;
">
                                <div class="value">
                                    <table class="table5">
                                        <thead>
                                            <tr>
                                              <th>Số phiếu BB</th>
                                              <th>Ngày BB</th> 
                                              <th>Mã nhân viên</th>
                                              <th>Mã kho</th>
                                             </tr>
                                        </thead>
                                        <tbody>
<?php 
if (isset($_GET['timkiem']) && $_GET['timkiem'] != '') {
    $sql = 'SELECT * FROM BienBanHuy WHERE MaNV LIKE "%'.$_GET['timkiem'].'%"';
    }else {

    $sql = 'SELECT * FROM BienBanHuy';
}
    $datmuaList = executeResult($sql);

    foreach ($datmuaList as $mua) {
            echo '<tr>
                    <td>'.$mua['SoPhieuBB'].'</td>
                    <td width="20%">'.$mua['NgayBB'].'</td>
                    <td>'.$mua['MaNV'].'</td>
                    <td>'.$mua['MaKho'].'</td>
                    <td><div class="btn11" onclick=\'window.open("QLHuyThuoc.php?id='.$mua['id'].'","_self")\'>Edit</div></td>
                    <td><div class="btn11" onclick="deleteBienBanHuy('.$mua['id'].')">Delete</div></td>
                </tr>';                          
    }
?> 
                                        </tbody>
                                        
                                        
                                      </table>
                                </div>
                               
                            </div>
                            <form action="" method="get" class="timkiem" style="
    top: 32px;
    left: 59%;
">
                        
                        <div class="login-tenkho "><input type="text" name="timkiem" placeholder="Nhap manv">
                            <button>Tim</button></div>
                        </form>
                        </div>
                        <div class="manage-top manage-bottom">
                            <form class="manage-top_left manage-top_left9" method="post" action="" style="
    width: 45%;
">
                                
                                <div class="manage-top_left-form ">
                                    <div class="login-form login-form5" >
                                        <div class="login-makho login-ncc"><span class = "label label5" >Số phiếu BB:</span>
                                            <select name="sophieu1" id="cars" class="" >
                                                <option value="<?=$sophieu3?>"><?=$sophieu3?></option>
                                                <?php 
                                                        $sql = 'SELECT SoPhieuBB FROM BienBanHuy';
                                                    $employeeList = executeResult($sql);

                                                    foreach ($employeeList as $epl) {
                                                            echo '<option value= '.$epl['SoPhieuBB'].'>
                                                                    '.$epl['SoPhieuBB'].'
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
                                            <li class="form-item5" onclick="New11()">Tạo mới</li>
                                            <button class="form-item5">Lưu</button>
                                            <li class="form-item5" onclick="out()">Thoat</li>
                                    </ul>
                                </div>    
                        </form>
                        <div class="manage-top_right" style="
    width: 45%;transform: translateY(36px);
">
                            <div class="value">
                                <table class="table5">
                                    <thead>
                                        <tr>
                                              <th>Số phiếu BB</th>
                                              <th>Mã thuốc</th> 
                                              <th>Số lượng</th>    
                                        </tr>
                                    </thead>
                                    <tbody>
<?php 
if (isset($_GET['timkiem1']) && $_GET['timkiem1'] != '') {
    $sql = 'SELECT * FROM ThuocHuy WHERE MaThuoc LIKE "%'.$_GET['timkiem1'].'%"';
    }else {

    $sql = 'SELECT * FROM ThuocHuy';
}
    $datmuaList = executeResult($sql);

    foreach ($datmuaList as $mua) {
            echo '<tr>
                    <td>'.$mua['SoPhieuHuy'].'</td>
                    <td>'.$mua['MaThuoc'].'</td>
                    <td>'.$mua['SoLuong'].'</td>
                    <td><div class="btn11" onclick=\'window.open("QLHuyThuoc.php?id1='.$mua['id1'].'","_self")\'>Edit</div></td>
                    <td><div class="btn11" onclick="deleteThuocHuy('.$mua['id1'].')">Delete</div></td>
                </tr>';                          
    }
?>   
                                    </tbody>
                                    
                                  </table>
                            </div>
                           
                        </div>
                        </div>
                        <form action="" method="get" class="timkiem" style="
    top: 53%;
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
        function deleteBienBanHuy(id) {
            option = confirm('Ban co muon xoa khong?')
            if(!option) {
                return;
            }
            $.post('delete.php', {
                        'phieuhuy': id
             }, function(data) {
                alert('da xoa thanh cong');
                location.reload();
            })
                }

        function deleteThuocHuy(id) {
            option = confirm('Ban co muon xoa khong?')
            if(!option) {
                return;
            }
            $.post('delete.php', {
                        'thuochuy': id
             }, function(data) {
                alert('da xoa thanh cong');
                location.reload();
            })
                }
    </script>           
</body>
</html>







