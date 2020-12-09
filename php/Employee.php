<?php 
    $manv = $tennv = $diachi = $gioitinh = $ngaysinh = $sodienthoai = $manv2 = $tennv2 = $diachi2 = $gioitinh2 = $ngaysinh2 = $sodienthoai2 = $manv1 = "";
	require_once ('dbhelp.php');
	$manv1 = $_GET['manv'];
    if (!empty($_POST)) {
    	if (isset($_POST['manv'])) {
    		$manv = $_POST['manv'];
    		echo $manv;
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

    	if ($manv != '' &&  $manv == $manv1) {
    		//update 
    		$sql = "UPDATE NhanVien SET MaNV = '$manv', TenNV ='$tennv',  DiaChi= '$diachi', GioiTinh='$gioitinh', NgaySinh='$ngaysinh', SoDT='$sodienthoai' WHERE MaNV = " .$manv;
    	}else if ($manv != ''){
    		//insert
    		$sql = "INSERT INTO NhanVien(MaNV,TenNV,DiaChi,GioiTinh,NgaySinh,SoDT)
    			VALUES('$manv', '$tennv', '$diachi', '$gioitinh', '$ngaysinh', '$sodienthoai')";
    	}
    	execute($sql);
}

    if (isset($_GET['manv'])) {
    	$manv = $_GET['manv'];
    	
    	$sql = 'SELECT * FROM NhanVien WHERE MaNV = '. $manv;
    	$employeeList = executeResult($sql);
    	if ($employeeList != null && count($employeeList) > 0) {
    		$epl = $employeeList[0];
    		$manv2 = $epl['MaNV'];
    		$tennv2 = $epl['TenNV'];
    		$diachi2 = $epl['DiaChi'];
    		$gioitinh2 = $epl['GioiTinh'];
    		$ngaysinh2= $epl['NgaySinh'];
    		$sodienthoai2 = $epl['SoDT'];
    	} else {

    	}
    }
    require_once('html.php');
 ?>

	<div id = "" class="modal "> 
            <div id="out-form2" class="grid grid__form" >
                <div class="form-login">
                	<form method="post" action="">
	                    <div class="login">
	                        <span class="login-title login-title10">Cập nhập nhân viên</span>
	                        <div class="login-form_flex">
	                            <div class="login-form">
	                                <div class="login-makho "><span class = "label" >Mã NV:</span><input type="text" name="manv" id="manv" value="<?=$manv2?>">
	                                </div>
	                                <div class="login-tenkho login-all"><span class = "label" >Tên NV:</span><input type="text" name="tennv" id="tennv" value="<?=$tennv2?>">
	                                </div>
	                                <div class="login-tenkho "><span class = "label" >Địa chỉ:</span><input type="text" name="diachi" id="diachi" value="<?=$diachi2?>">
	                                </div>
	                            </div>
	                            <div class="login-form">
	                                <div class="login-makho "><span class = "label" >Giới tính:</span><input type="text" name="gioitinh" id="gender" value="<?=$gioitinh2?>">
	                                </div>
	                                <div class="login-tenkho login-all"><span class = "label" >Ngày sinh:</span>
	                                    <input type="text" name="date" id="date2" value="<?=$ngaysinh2?>">
	                                </div>
	                                <div class="login-tenkho "><span class = "label" >Số điện thoại:</span><input type="text" name="sodienthoai" id="phone" value="<?=$sodienthoai2?>">
	                                </div>
	                            </div>

	                        </div>
	                    </div>
	                    <div class="box-list box-list1">
	                         <ul class="form-list form-list1">
	                            <li class="form-item1" onclick="New()">Tạo mới</li>
	                            <button class="form-item1">Lưu</button>
	                            <li class="form-item1" onclick="out()">Thoat</li>
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
                            </tr>
                          </thead>
                          <tbody  id="table2">
<?php 

	if (isset($_GET['timkiem']) && $_GET['timkiem'] != '') {
		$sql = 'SELECT * FROM NhanVien WHERE TenNV LIKE "%'.$_GET['timkiem'].'%"';
	}else {

    $sql = 'SELECT * FROM NhanVien';
}
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
                    <td><button class="btn11" onclick=\'window.open("Employee.php?manv='.$epl['MaNV'].'","_self")\'>Edit</button></td>
                    <td><button class="btn11" onclick="deleteNhanVien('.$epl['MaNV'].')">Delete</button></td>
                </tr>';                          
    }
?>
                                
                           </tbody >
                          </table>
                    </div>
                </div>
                
            </div>
            <form action="" method="get" class="timkiem">
                    	
                    	<div class="login-tenkho "><input type="text" name="timkiem" placeholder="Ho Ten Nhan Vien">
                    		<button>Tim</button></div>
            </form>
        </div>
<script src="../main.js"></script>
	<script type="text/javascript">


		function deleteNhanVien(id) {
			option = confirm('Ban co muon xoa khong?')
			if(!option) {
				return;
			}
    		$.post('delete.php', {
        				'manv': id
   			 }, function(data) {
        		alert('da xoa thanh cong');
        		location.reload();
    		})
				}
	</script>			
</body>
</html>