<?php 
	require_once('dbhelp.php');
	if (isset($_POST['manv'])) {
		$manv = $_POST['manv'];
		$sql = 'DELETE FROM NhanVien WHERE id = ' . $manv;
		execute($sql);

		echo "Đã xóa thành công!";
	}

	if (isset($_POST['makho'])) {
		$makho = $_POST['makho'];
		$sql = 'DELETE FROM KhoThuoc WHERE id = ' . $makho;
		execute($sql);
		echo "Đã xóa thành công!";

	}

	if (isset($_POST['makhoa'])) {
		$makhoa = $_POST['makhoa'];
		$sql = 'DELETE FROM KhoaDT WHERE id = ' . $makhoa;
		execute($sql);
		echo "Đã xóa thành công!";

	}

	if (isset($_POST['mancc'])) {
		$mancc = $_POST['mancc'];
		$sql = 'DELETE FROM NhaCungCap WHERE id = ' . $mancc;
		execute($sql);
		echo "Đã xóa thành công!";

	}

	if (isset($_POST['mathuoc'])) {
		$mathuoc = $_POST['mathuoc'];
		$sql = 'DELETE FROM Thuoc WHERE id = ' . $mathuoc;
		execute($sql);
		echo "Đã xóa thành công!";

	}

	if (isset($_POST['sophieumua'])) {
		$sophieumua = $_POST['sophieumua'];
		$sql = 'DELETE FROM PhieuDatMua WHERE id = ' . $sophieumua;
		execute($sql);
		echo "Đã xóa thành công!";

	}

	if (isset($_POST['id'])) {
		$id = $_POST['id'];
		$sql = 'DELETE FROM ThuocDatMua WHERE id = ' . $id;
		execute($sql);
		echo "Đã xóa thành công!";

	}

	if (isset($_POST['sophieubaogia'])) {
		$id = $_POST['sophieubaogia'];
		$sql = 'DELETE FROM BangBaoGia WHERE id = ' . $id;
		execute($sql);
		echo "Đã xóa thành công!";

	}

	if (isset($_POST['sophieubaogia2'])) {
		$id = $_POST['sophieubaogia2'];
		$sql = 'DELETE FROM ThuocBaoGia WHERE id = ' . $id;
		execute($sql);
		echo "Đã xóa thành công!";

	}

///
	if (isset($_POST['phieunhap'])) {
		$id = $_POST['phieunhap'];
		$sql = 'DELETE FROM PhieuNhap WHERE id = ' . $id;
		execute($sql);
		echo "Đã xóa thành công!";

	}


	if (isset($_POST['thuocnhap'])) {
		$id = $_POST['thuocnhap'];
		$sql = 'DELETE FROM ThuocNhap WHERE id = ' . $id;
		execute($sql);
		echo "Đã xóa thành công!";

	}

	///
	//////
	if (isset($_POST['phieuxuat'])) {
		$id = $_POST['phieuxuat'];
		$sql = 'DELETE FROM PhieuXuat WHERE id = ' . $id;
		execute($sql);
		echo "Đã xóa thành công!";

	}


	if (isset($_POST['thuocxuat'])) {
		$id = $_POST['thuocxuat'];
		$sql = 'DELETE FROM ThuocXuat WHERE id = ' . $id;
		execute($sql);
		echo "Đã xóa thành công!";

	}

	///
	//////
	if (isset($_POST['phieuhuy'])) {
		$id = $_POST['phieuhuy'];
		$sql = 'DELETE FROM BienBanHuy WHERE id = ' . $id;
		execute($sql);
		echo "Đã xóa thành công!";

	}


	if (isset($_POST['thuochuy'])) {
		$id = $_POST['thuochuy'];
		$sql = 'DELETE FROM ThuocHuy WHERE id = ' . $id;
		execute($sql);
		echo "Đã xóa thành công!";

	}

	///
 ?>

