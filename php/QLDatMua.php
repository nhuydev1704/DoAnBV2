<?php 
    $mancc = $tenncc = $diachi = $sodienthoai = "";
    require_once ('dbhelp.php');
    $mancc1 = $_GET['mancc'];
    if (!empty($_POST)) {
        if (isset($_POST['mancc'])) {
            $mancc = $_POST['mancc'];
        }

        if (isset($_POST['tenncc'])) {
            $tenncc = $_POST['tenncc'];

        }

        if (isset($_POST['diachi'])) {
            $diachi = $_POST['diachi'];

        }
        if (isset($_POST['sodienthoai'])) {
            $sodienthoai = $_POST['sodienthoai'];

        }
        $mancc = str_replace('\'','\\\'', $mancc);
        $tenncc = str_replace('\'','\\\'', $tenncc);
        $diachi = str_replace('\'','\\\'', $diachi);
        $sodienthoai = str_replace('\'','\\\'', $sodienthoai);

        if ($mancc != '' &&  $mancc == $mancc1) {
            //update 
            $sql = "UPDATE NhaCungCap SET MaNCC = '$mancc', TenNCC ='$tenncc',  DiaChi= '$diachi', SoDT='$sodienthoai' WHERE MaNCC = " .$mancc;
        }else {
            //insert
            $sql = "INSERT INTO NhaCungCap(MaNCC,TenNCC,DiaChi,SoDT)
                VALUES('$mancc', '$tenncc', '$diachi','$sodienthoai')";
        }
        execute($sql);
}

    if (isset($_GET['mancc'])) {
        $mancc = $_GET['mancc'];
        
        $sql = 'SELECT * FROM NhaCungCap WHERE MaNCC = '. $mancc;
        $nccList = executeResult($sql);
        if ($nccList != null && count($nccList) > 0) {
            $ncc = $nccList[0];
            $mancc2 = $ncc['MaNCC'];
            $tenncc2 = $ncc['TenNCC'];
            $diachi2 = $ncc['DiaChi'];
            $sodienthoai2 = $ncc['SoDT'];
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
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>
<body>
   <div id = "" class="modal animate"> 
            <form id="out-form" class="grid grid__form" method="post" action="">
                <span class="login-title login-title3 login-title5">Thông tin phiếu đặt mua</span>
                <span class="login-title login-title3 login-title55">Thông tin thuốc đặt mua</span>
                <div class="manage" style="width: 90%;">
                    <div class="manage-top" style="padding-bottom: 56px; ">
                        <div class="manage-top_left">
                                <div class="manage-top_left-form">
                                    <div class="login-form login-form5" >
                                        <div class="login-makho login-ncc"><span class = "label label5" >Số phiếu mua:</span><input type="text" name="sophieumua" id="">
                                        </div>
                                        <div class="login-tenkho login-ncc"><span class = "label label5" >Ngày mua:</span>
                                            <input type="date" id="start" name="ngaymua"
                                           value="2018-07-22"
                                           min="2010-01-01" max="2020-12-31" value="<?=$ngaysx2?>">
                                        </div>
                                        <div class="login-tenkho login-ncc"><span class = "label label5" >Mã nhân viên:</span>
                                            <select name="manv" id="cars" class="">
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
                                            <select name="ncc" id="cars" class="">
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
                        <div class="manage-top_right">
                            <div class="value">
                                <table class="table5">
                                    <tr>
                                      <th width = "5%"></th>
                                      <th>Số phiếu mua</th>
                                      <th>Ngày mua</th> 
                                      <th>Mã nhân viên</th>
                                      <th>Mã nhà cung cấp</th>  
        
                                    </tr>
                                    <tr>
                                      <td></td>
                                      <td>1</td>
                                      <td>27/12/2000</td>
                                      <td>001</td>
                                      <td>01</td>

                                    </tr>
                                    
                                  </table>
                            </div>
                           
                        </div>
                    </div>
                    <div class="manage-top manage-bottom">
                        <div class="manage-top_left">
                            
                            <div class="manage-top_left-form">
                                <div class="login-form login-form5" >
                                    <div class="login-makho login-ncc"><span class = "label label5" >Số phiếu mua:</span><input type="text" name="mancc" id="">
                                    </div>
                                    <div class="login-tenkho login-ncc"><span class = "label label5" >Mã thuốc:</span>
                                        <select name="cars" id="cars" class="">
                                            <option value="maianh">11/28/2012</option>
                                            <option value="saab">Saab</option>
                                            <option value="mercedes">Mercedes</option>
                                            <option value="audi">Audi</option>
                                        </select>
                                    </div>
                                    <div class="login-makho login-ncc"><span class = "label label5" >Số lượng:</span>
                                        <input type="text" name="mancc" id="">
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
                    <div class="manage-top_right">
                        <div class="value">
                            <table class="table5">
                                <tr>
                                  <th width = "5%"></th>
                                  <th>Số phiếu mua</th>
                                  <th>Mã thuốc</th> 
                                  <th>Số lượng</th>  
    
                                </tr>
                                <tr>
                                  <td></td>
                                  <td>1</td>
                                  <td>27/12/2000</td>
                                  <td>001</td>
                                </tr>
                                
                              </table>
                        </div>
                       
                    </div>
                    </div>

                </div>
            </form>
        </div>
<script src="../main.js"></script>
    <script type="text/javascript">


        function deleteNhaCC(id) {
            option = confirm('Ban co muon xoa khong?')
            if(!option) {
                return;
            }
            $.post('delete.php', {
                        'mancc': id
             }, function(data) {
                alert('da xoa thanh cong');
                location.reload();
            })
                }
    </script>           
</body>
</html>