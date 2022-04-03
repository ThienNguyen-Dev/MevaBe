<?php session_start(); 

if (isset($_SESSION['thanhvien']) && $_SESSION['thanhvien']){
    unset($_SESSION['thanhvien']);
	unset($_SESSION['cart']);
	echo '<script language="javascript">alert("Đã đăng xuất"); window.location="index.php";</script>';
	
exit;
}




?>
