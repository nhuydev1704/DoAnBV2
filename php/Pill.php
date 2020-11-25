<?php 
    $mathuoc = $tenthuoc = $donvitinh = $dongia =$ngaysx = $hansd = $nhasx = $soluongton ="";
	require_once ('dbhelp.php');
	$mathuoc1 = $_GET['mathuoc'];
    if (!empty($_POST)) {
    	if (isset($_POST['mathuoc'])) {
    		$mathuoc = $_POST['mathuoc'];
    	}

    	if (isset($_POST['tenthuoc'])) {
    		$tenthuoc = $_POST['tenthuoc'];

    	}

    	if (isset($_POST['donvitinh'])) {
    		$donvitinh = $_POST['donvitinh'];

    	}
    	if (isset($_POST['dongia'])) {
    		$dongia = $_POST['dongia'];

    	}

        if (isset($_POST['ngaysx'])) {
            $ngaysx = $_POST['ngaysx'];
        }

        if (isset($_POST['hansd'])) {
            $hansd = $_POST['hansd'];

        }

        if (isset($_POST['nhasx'])) {
            $nhasx = $_POST['nhasx'];

        }
        if (isset($_POST['soluongton'])) {
            $soluongton = $_POST['soluongton'];

        }
    	$mathuoc = str_replace('\'','\\\'', $mathuoc);
    	$tenthuoc = str_replace('\'','\\\'', $tenthuoc);
    	$donvitinh = str_replace('\'','\\\'', $donvitinh);
    	$dongia = str_replace('\'','\\\'', $dongia);
        $ngaysx = str_replace('\'','\\\'', $ngaysx);
        $hansd = str_replace('\'','\\\'', $hansd);
        $nhasx = str_replace('\'','\\\'', $nhasx);
        $soluongton = str_replace('\'','\\\'', $soluongton);
    	if ($mathuoc != '' &&  $mathuoc == $mathuoc1) {
    		//update 
    		$sql = "UPDATE Thuoc SET MaThuoc = '$mathuoc', TenThuoc ='$tenthuoc',  DonViTinh= '$donvitinh', DonGia='$dongia',NgaySanXuat = '$ngaysx', HanSuDung ='$hansd',  NhaSanXuat= '$nhasx', SoLuongTon='$soluongton' WHERE MaThuoc = " .$mathuoc;
    	}else {
    		//insert
    		$sql = "INSERT INTO Thuoc(MaThuoc,TenThuoc,DonViTinh,DonGia,NgaySanXuat,HanSuDung,NhaSanXuat,SoLuongTon)
    			VALUES('$mathuoc', '$tenthuoc', '$donvitinh','$dongia','$ngaysx', '$hansd', '$nhasx','$soluongton')";
    	}
    	execute($sql);
}

    if (isset($_GET['mathuoc'])) {
    	$mathuoc = $_GET['mathuoc'];
    	
    	$sql = 'SELECT * FROM Thuoc WHERE MaThuoc = '. $mathuoc;
    	$thuocList = executeResult($sql);
    	if ($thuocList != null && count($thuocList) > 0) {
    		$thuoc = $thuocList[0];
    		$mathuoc2 = $thuoc['MaThuoc'];
    		$tenthuoc2 = $thuoc['TenThuoc'];
    		$donvitinh2 = $thuoc['DonViTinh'];
    		$dongia2 = $thuoc['DonGia'];
            $ngaysx2 = $thuoc['NgaySanXuat'];
            $hansd2 = $thuoc['HanSuDung'];
            $nhasx2 = $thuoc['NhaSanXuat'];
            $soluongton2 = $thuoc['SoLuongTon'];
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
	<div id = "madalClick4" class="modal animate"> 
            <form id="out-form" class="grid grid__form" method="post" action="">
                <div class="form-login">
                    <div class="login login3 login4">
                        <span class="login-title login-title3">Thông tin thuốc</span>
                        <div class="login-form login-form3 login-form4">
                            <div class="login-makho login-ncc"><span class = "label" >Mã thuốc:</span><input type="text" name="mathuoc" id="" value="<?=$mathuoc2?>">
                            </div>
                            <div class="login-tenkho login-ncc"><span class = "label" >Tên thuốc:</span><input type="text" name="tenthuoc" id="" value="<?=$tenthuoc2?>">
                            </div>
                            <div class="login-makho login-ncc"><span class = "label" >Đơn vị tính:</span><input type="text" name="donvitinh" id="" value="<?=$donvitinh2?>">
                            </div>
                            <div class="login-makho login-ncc"><span class = "label" >Đơn giá:</span><input type="text" name="dongia" id="" value="<?=$dongia2?>">
                            </div>
                        </div>
                        <div class="login-form login-form3 login-form4">
                            
                            <div class="login-tenkho login-ncc"><span class = "label" >Ngày sản xuất:</span>
                                <input type="date" id="start" name="ngaysx"
                                           value="2018-07-22"
                                           min="2010-01-01" max="2020-12-31" value="<?=$ngaysx2?>">
                            </div>
                            <div class="login-makho login-ncc"><span class = "label" >Hạn sử dụng:</span>
                                <input type="date" id="start" name="hansd"
                                           value="2018-07-22"
                                           min="2010-01-01" max="2020-12-31" value="<?=$hansd2?>">
                            </div>
                            <div class="login-tenkho login-ncc"><span class = "label" >Nhà sản xuất</span>
                                <input type="text" name="nhasx" id="" value="<?=$nhasx2?>">
                                <!-- <select name="cars" id="cars" class="">
                                    <option value="maianh">mai anh</option>
                                    <option value="saab">Saab</option>
                                    <option value="mercedes">Mercedes</option>
                                    <option value="audi">Audi</option>
                                </select> -->
                            </div>
                            <div class="login-tenkho login-ncc"><span class = "label" >Số lượng tồn:</span><input type="text" name="soluongton" id="" value="<?=$soluongton2?>">
                            </div>
                        </div>
                        <div class="box-list box-list3 box-list4">
                            <ul class="form-list form-list3 form-list4">
                                <div class="form-item3">
                                    <div class="form-item form-item_item3" onclick="New5()">Tạo mới</div>
                                     <button class="form-item form-item_item3">Lưu</button>
                                </div>
                                <li class="form-item" onclick="out()">Thoat</li>
                            </ul>
                        </div>
                    </div>
                    <div class="value">
                        <table class="table3" style="margin: 0; width: 82%;">
                           <thead>
                                <tr>
                                      <th>Mã thuốc</th>
                                      <th>Tên thuốc</th> 
                                      <th>Don vi tinh</th>
                                      <th>Đơn giá</th>
                                      <th>Ngày sản xuất</th>
                                      <th>Hạn sử dụng</th>
                                      <th>Nhà sản xuất</th>
                                      <th>Số lượng tồn</th>   
                                </tr>
                           </thead>

                            <tbody>
 <?php 
    $sql = 'SELECT * FROM Thuoc';
    $pillList = executeResult($sql);

    foreach ($pillList as $pill) {
            echo '<tr>
                    <td>'.$pill['MaThuoc'].'</td>
                    <td>'.$pill['TenThuoc'].'</td>
                    <td>'.$pill['DonViTinh'].'</td>
                    <td>'.$pill['DonGia'].'</td>
                    <td>'.$pill['NgaySanXuat'].'</td>
                    <td>'.$pill['HanSuDung'].'</td>
                    <td>'.$pill['NhaSanXuat'].'</td>
                    <td>'.$pill['SoLuongTon'].'</td>
                    <td><div class="btn11" onclick=\'window.open("Pill.php?mathuoc='.$pill['MaThuoc'].'","_self")\'>Edit</div></td>
                    <td><div class="btn11" onclick="deletePill('.$pill['MaThuoc'].')">Delete</div></td>
                </tr>';                          
    }
?>
                            </tbody>
                            
                          </table>
                    </div>
                </div>
                
            </form>
        </div>   
<script src="../main.js"></script>
	<script type="text/javascript">

		function deletePill(id) {
			option = confirm('Ban co muon xoa khong?')
			if(!option) {
				return;
			}
    		$.post('delete.php', {
        				'mathuoc': id
   			 }, function(data) {
        		alert('da xoa thanh cong');
        		location.reload();
    		})
				}
	</script>			
</body>
</html>