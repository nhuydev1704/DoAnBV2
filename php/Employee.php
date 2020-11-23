<?php 
    $tennv = $diachi = $gioitinh = $ngaysinh = $sodienthoai = "";
	require_once ('dbhelp.php');
	$id = $GET['manv'];
	echo $id;
    if (!empty($_POST)) {


    	if (isset($_POST['manv'])) {
    		$manv = $_POST['manv'];
    	}

    	if (isset($_POST['tennv'])) {
    		$tennv = $_POST['tennv'];

    	}

    	if (isset($_POST['diachi'])) {
    		$diachi = $_POST['diachi'];

    	}

    	if (isset($_POST['gioitinh'])) {
    		$gioitinh = $_POST['gioitinh'];

    	}
    	if (isset($_POST['date'])) {
    		$ngaysinh = $_POST['date'];

    	}
    	if (isset($_POST['sodienthoai'])) {
    		$sodienthoai = $_POST['sodienthoai'];

    	}
    	$manv = str_replace('\'','\\\'', $manv);
    	$tennv = str_replace('\'','\\\'', $tennv);
    	$diachi = str_replace('\'','\\\'', $diachi);
    	$gioitinh = str_replace('\'','\\\'', $gioitinh);
    	$ngaysinh = str_replace('\'','\\\'', $ngaysinh);
    	$sodienthoai = str_replace('\'','\\\'', $sodienthoai);
    	$sql = "INSERT INTO NhanVien(MaNV,TenNV,DiaChi,GioiTinh,NgaySinh,SoDT)
    			VALUES('$manv', '$tennv', '$diachi', '$gioitinh', '$ngaysinh', '$sodienthoai')";
    	execute($sql);
    	die();
    }
    $id = '';
    if (isset($GET['manv'])) {
    	$id = $_GET['manv'];
    	$sql = 'SELECT * FROM NhanVien WHERE MaNV = '. $id;
    	$employeeList = executeResult($sql);
    	if ($employeeList != null && count($employeeList) > 0) {
    		$epl = $employeeList[0];
    		$manv1 = $_POST['MaNV'];
    		$tennv1 = $_POST['TenNV'];
    		// $diachi1 = $_POST['DiaChi'];
    		// $gioitinh1 = $_POST['GioiTinh'];
    		// $ngaysinh1 = $_POST['NgaySinh'];
    		// $sodienthoai1 = $_POST['SoDT'];
    	} else {
    		$id = '';
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
</head>
<body>
	<div id = "" class=" animate"> 
            <div id="out-form2" class="grid grid__form" method="post" action="" >
                <div class="form-login">
                	<form method="post" action="">
	                    <div class="login">
	                        <span class="login-title login-title10">Cập nhập nhân viên</span>
	                        <div class="login-form_flex">
	                            <div class="login-form">
	                                <div class="login-makho "><span class = "label" >Mã NV:</span><input type="text" name="manv" id="manv" value="<?=$manv1?>">
	                                </div>
	                                <div class="login-tenkho login-all"><span class = "label" >Tên NV:</span><input type="text" name="tennv" id="tennv" value="<?=$tennv1?>">
	                                </div>
	                                <div class="login-tenkho "><span class = "label" >Địa chỉ:</span><input type="text" name="diachi" id="diachi">
	                                </div>
	                            </div>
	                            <div class="login-form">
	                                <div class="login-makho "><span class = "label" >Giới tính:</span><input type="text" name="gioitinh" id="gender">
	                                </div>
	                                <div class="login-tenkho login-all"><span class = "label" >Ngày sinh:</span>
	                                    <input type="text" name="date" id="date2">
	                                </div>
	                                <div class="login-tenkho "><span class = "label" >Số điện thoại:</span><input type="text" name="sodienthoai" id="phone">
	                                </div>
	                            </div>

	                        </div>
	                    </div>
	                    <div class="box-list box-list1">
	                         <ul class="form-list form-list1">
	                            <button class="form-item1">Tạo mới</button>
	                            <button class="form-item1" onclick="clickSave1()">Lưu</button>
	                            <li class="form-item1" onclick="out1()">Thoat</li>
	                        </ul>
	                    </div>
                    </form>
                    <div class="value">
                        <table>
                          <thead>
                            <tr>
                                <th>Ma NV</th>
                                <th>Tên NV</th>
                                <th>Địa chỉ</th>
                                <th>Giới tính</th>
                                <th>Ngày sinh</th>
                                <th>Số điện thoại</th>
                                <th></th>
                                <th></th>
                            </tr>
                          </thead>
                          <tbody  id="table2">
<?php 
    $sql = 'SELECT * FROM NhanVien';
    $employeeList = executeResult($sql);

    $index = 1;
    foreach ($employeeList as $epl) {
            echo '<tr>
                    <td>'.$epl['MaNV'].'</td>
                    <td>'.$epl['TenNV'].'</td>
                    <td>'.$epl['DiaChi'].'</td>
                    <td>'.$epl['GioiTinh'].'</td>
                    <td>'.$epl['NgaySinh'].'</td>
                    <td>'.$epl['SoDT'].'</td>
                    <td><button class="btn10" onclick=\'window.open("Employee.php?id ='.$epl['MaNV'].'","_self")\'>Edit</button></td>
                    <td><button class="btn10">Delete</button></td>
                </tr>';                          
    }
?>
                                
                           </tbody >
                          </table>
                    </div>
                </div>
                
            </div>
        </div>
<script src="../main.js"></script>
</body>
</html>