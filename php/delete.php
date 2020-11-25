<?php 
	require_once('dbhelp.php');
	if (isset($_POST['manv'])) {
		$manv = $_POST['manv'];
		$sql = 'DELETE FROM NhanVien WHERE MaNV = ' . $manv;
		execute($sql);

		echo "Xoa thanh cong";
	}

	if (isset($_POST['makho'])) {
		$makho = $_POST['makho'];
		$sql = 'DELETE FROM KhoThuoc WHERE MaKho = ' . $makho;
		execute($sql);
		echo "Xoa thanh cong";

	}

	if (isset($_POST['makhoa'])) {
		$makhoa = $_POST['makhoa'];
		$sql = 'DELETE FROM KhoaDT WHERE MaKhoa = ' . $makhoa;
		execute($sql);
		echo "Xoa thanh cong";

	}

	if (isset($_POST['mancc'])) {
		$mancc = $_POST['mancc'];
		$sql = 'DELETE FROM NhaCungCap WHERE MaNCC = ' . $mancc;
		execute($sql);
		echo "Xoa thanh cong";

	}

	if (isset($_POST['mathuoc'])) {
		$mathuoc = $_POST['mathuoc'];
		$sql = 'DELETE FROM Thuoc WHERE MaThuoc = ' . $mathuoc;
		execute($sql);
		echo "Xoa thanh cong";

	}
 ?>

