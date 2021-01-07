<?php 
 $upload_directory = __DIR__ . DIRECTORY_SEPARATOR . "photo/";
    $anh = $id2 = $id1 = $mathuoc = $tenthuoc = $donvitinh = $dongia =$ngaysx = $hansd = $nhasx = $soluongton = $mathuoc2 = $tenthuoc2 = $donvitinh2 = $dongia2 =$ngaysx2 = $hansd2 = $nhasx2 = $soluongton2 = $mathuoc1 ="";
	require_once ('dbhelp.php');
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
        if (isset($_POST['id'])) {
            $id1 = $_POST['id'];
        }
        if (isset($_POST['id2'])) {
            $id2 = $_POST['id2'];
        }
    	$mathuoc = str_replace('\'','\\\'', $mathuoc);
    	$tenthuoc = str_replace('\'','\\\'', $tenthuoc);
    	$donvitinh = str_replace('\'','\\\'', $donvitinh);
    	$dongia = str_replace('\'','\\\'', $dongia);
        $ngaysx = str_replace('\'','\\\'', $ngaysx);
        $hansd = str_replace('\'','\\\'', $hansd);
        $nhasx = str_replace('\'','\\\'', $nhasx);
        $soluongton = str_replace('\'','\\\'', $soluongton);

        $anh = $_FILES['anh']['name'];
                if($anh != null)
                {
                $path = "photo/";
                $tmp_name = $_FILES['anh']['tmp_name'];
                $anh = $_FILES['anh']['name'];

                move_uploaded_file($tmp_name,$path.$anh);
    	if ($id1 != '') {
    		//update 
    		$sql = "UPDATE Thuoc SET MaThuoc = '$mathuoc', TenThuoc ='$tenthuoc',  DonViTinh= '$donvitinh', DonGia='$dongia',Anh = '$anh',NgaySanXuat = '$ngaysx', HanSuDung ='$hansd',  NhaSanXuat= '$nhasx', SoLuongTon='$soluongton' WHERE id = " .$id1;
            $sql2 = "UPDATE GioHang SET MaThuoc = '$mathuoc', TenThuoc = '$tenthuoc',DonViTinh = '$donvitinh',Anh ='$anh', Gia = '$dongia',
             HanSuDung = '$hansd',NhaSanXuat='$nhasx' WHERE id = " .$id1;
                echo "<script > alert('Sửa thành công!')</script>";

    	}else if($mathuoc != ''){
    		//insert
    		$sql = "INSERT INTO Thuoc(MaThuoc,TenThuoc,DonViTinh,DonGia,Anh,NgaySanXuat,HanSuDung,NhaSanXuat,SoLuongTon)
    			VALUES('$mathuoc', '$tenthuoc', '$donvitinh','$dongia','$anh','$ngaysx', '$hansd', '$nhasx','$soluongton')";
                $sql2 = "INSERT INTO GioHang(MaThuoc,TenThuoc,DonViTinh,Anh, Gia,HanSuDung,NhaSanXuat)
             VALUES('$mathuoc','$tenthuoc', '$donvitinh','$anh','$dongia','$hansd', '$nhasx')";
                echo "<script > alert('Thêm thành công!')</script>";

    	}}
        execute($sql);
    	execute($sql2);
}
$id3 = '';
    if (isset($_GET['id1'])) {
    	$id3 = $_GET['id1'];
    	
    	$sql = 'SELECT * FROM Thuoc WHERE id = '. $id3;
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
    require_once('html.php');
 ?>
	<div id = "madalClick4" class="modal"> 
            <form id="out-form" class="grid1 grid__form" method="post" action="" enctype="multipart/form-data">
                            <input type="number" name="id" value="<?=$id3?>" hidden>

                <div class="form-login">
                    <div class="login login3 login4">
                        <span class="login-title login-title3" style="
    top: -16px;
    left: 132px;
">Thông tin thuốc</span>
                        <div class="login-form login-form3 login-form4">
                            <div class="login-makho login-ncc"><span class = "label" >Mã thuốc:</span><input type="text" name="mathuoc" id="" value="<?=$mathuoc2?>">
                            </div>
                            <div class="login-tenkho login-ncc"><span class = "label" >Tên thuốc:</span><input type="text" name="tenthuoc" id="" value="<?=$tenthuoc2?>">
                            </div>
                            <div class="login-makho login-ncc"><span class = "label" >Đơn vị tính:</span><input type="text" name="donvitinh" id="" value="<?=$donvitinh2?>">
                            </div>
                            <div class="login-makho login-ncc"><span class = "label" >Đơn giá:</span><input type="text" name="dongia" id="" value="<?=$dongia2?>">
                            </div>
                            <div class="login-makho login-ncc">
                                <label class="form-label" for="customFile">Tải ảnh:</label>
                                <input type="file" name="anh" class="form-file" id="customFile">
                            </div>
                        </div>
                        <div class="login-form login-form3 login-form4">
                            
                            <div class="login-tenkho login-ncc"><span class = "label" >Ngày sản xuất:</span>
                                <input type="date" id="start" name="ngaysx"
                                           min="2010-01-01" max="2020-12-31" value="<?=$ngaysx2?>">
                            </div>
                            <div class="login-makho login-ncc"><span class = "label" >Hạn sử dụng:</span>
                                <input type="date" id="start" name="hansd"
                                           min="2010-01-01" max="2030-12-31" value="<?=$hansd2?>">
                            </div>
                            <div class="login-tenkho login-ncc"><span class = "label" >Nội dung</span>
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
                        <table class="table3" style="width: 82%;">
                           <thead>
                                <tr>
                                      <th>Mã thuốc</th>
                                      <th>Tên thuốc</th> 
                                      <th>Don vi tinh</th>
                                      <th>Đơn giá</th>
                                      <th>Ngày sản xuất</th>
                                      <th>Hạn sử dụng</th>
                                      <th>Nội dung</th>
                                      <th>Số lượng tồn</th>  
                                      <th></th>
                                       <th></th> 
                                </tr>
                           </thead>

                            <tbody>
 <?php 
 if (isset($_GET['timkiem']) && $_GET['timkiem'] != '') {
        $sql = 'SELECT * FROM Thuoc WHERE TenThuoc LIKE "%'.$_GET['timkiem'].'%"';
    }else {
    $sql = 'SELECT * FROM Thuoc';
}

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
                    <td><div class="btn11" onclick=\'window.open("Pill.php?id1='.$pill['id'].'","_self")\'>Edit</div></td>
                    <td><div class="btn11" onclick="deletePill('.$pill['id'].')">Delete</div></td>
                </tr>';                          
    }
?>
                            </tbody>
                            
                          </table>
                    </div>
                </div>
                
            </form>
             <form class="timkiem" action="" method="get" style="top: 52.5%;left: 48%;">
                        <div class="login-tenkho "><input type="text" name="timkiem" placeholder="Ten Thuoc">
                            <button>Tim</button></div>
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