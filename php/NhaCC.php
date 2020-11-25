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
	<div id = "madalClick3" class="modal"> 
            <form id="out-form" class="grid grid__form" method="post" action="">
                <div class="form-login">
                    <div class="login login3">
                        <span class="login-title login-title3">Thông tin nhà cung cấp</span>
                        <div class="login-form login-form3">
                            <div class="login-makho login-ncc"><span class = "label label3" >Mã nhà cung cấp:</span><input type="text" name="mancc" id="" value="<?=$mancc2?>">
                            </div>
                            <div class="login-tenkho login-ncc"><span class = "label label3" >Tên nhà cung cấp:</span><input type="text" name="tenncc" id="" value="<?=$tenncc2?>">
                            </div>
                            <div class="login-makho login-ncc"><span class = "label label3" >Địa chỉ:</span><input type="text" name="diachi" id="" value="<?=$diachi2?>">
                            </div>
                            <div class="login-tenkho login-ncc"><span class = "label label3" >Số điện thoại:</span><input type="text" name="sodienthoai" id="" value="<?=$sodienthoai2?>">
                            </div>
                        </div>
                        <div class="box-list box-list3">
                            <ul class="form-list form-list3">
                                <div class="form-item3">
                                    <div class="form-item form-item_item3" onclick="New4()">Tạo mới</div>
                                     <button class="form-item form-item_item3">Lưu</button>
                                </div>
                                <li class="form-item" onclick="out()">Thoat</li>
                            </ul>
                        </div>
                    </div>
                    <div class="value">
                        <table class="">
                            <thead>
                                <tr>
                                  <th>Mã nhà cung cấp</th>
                                  <th>Tên nhà cung cấp</th>
                                  <th>Địa chỉ</th>
                                  <th>Số điện thoại</th>
                                </tr>
                            </thead>
                            
                            <tbody>
<?php 
if (isset($_GET['timkiem']) && $_GET['timkiem'] != '') {
    $sql = 'SELECT * FROM NhaCungCap WHERE TenNCC LIKE "%'.$_GET['timkiem'].'%"';
    }else {

    $sql = 'SELECT * FROM NhaCungCap';
}
    $nccList = executeResult($sql);

    foreach ($nccList as $ncc) {
            echo '<tr>
                    <td>'.$ncc['MaNCC'].'</td>
                    <td>'.$ncc['TenNCC'].'</td>
                    <td>'.$ncc['DiaChi'].'</td>
                    <td>'.$ncc['SoDT'].'</td>
                    <td><div class="btn11" onclick=\'window.open("NhaCC.php?mancc='.$ncc['MaNCC'].'","_self")\'>Edit</div></td>
                    <td><div class="btn11" onclick="deleteNhaCC('.$ncc['MaNCC'].')">Delete</div></td>
                </tr>';                          
    }
?>
                            </tbody>
                          </table>
                    </div>
                </div>
                
            </form>
            <form class="timkiem" action="" method="get" style="top:50%; left: 59%;">
                        <div class="login-tenkho "><input type="text" name="timkiem" placeholder="Ten nha cung cap" style="
    width: 77%;
">
                            <button>Tim</button></div>
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