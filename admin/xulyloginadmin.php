<?php

session_start();
include "../connect.php";
if (isset($_POST['dangnhapadmin'])) {		
	
	if(isset($_POST["username"])) { $username = $_POST['username']; }
	if(isset($_POST["password"])) { $password = $_POST['password']; }		

if (!$username || !$password) {
        
	echo '<script language="javascript">alert("Vui lòng nhập tài khoản và mật khẩu"); window.location="login.php";</script>';
        exit;
    }
	

	$sqltruyvan = "SELECT * FROM thanhvien WHERE username = '$username' and accesslevel= '0' ";
	$result = mysqli_query($conn, $sqltruyvan);
	
	
	
	
    if (mysqli_num_rows($result) == 0) {
       // echo "Tên đăng nhập này không tồn tại. Vui lòng kiểm tra lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
		
		echo '<script language="javascript">alert("Tên đăng nhập không tồn tại! Vui lòng nhập lại"); window.location="login.php";</script>';
        exit;
    }
$row = mysqli_fetch_array($result);

  if ($password != $row['password']) {
        echo '<script language="javascript">alert("Mật khẩu không hợp lệ"); window.location="login.php";</script>';
        exit;
    }
     
    //Lưu tên đăng nhập
    $_SESSION['admin'] = $username;
	
   // echo "Xin chào " . $tenthanhvien . ". Bạn đã đăng nhập thành công. <a href='/'>Về trang chủ</a>";
	echo "<script>window.location='index.php';</script>";
   
}
?>