<?php
session_start();
include( "../connect.php" );
$ID= $_SESSION['ID'];
$oder_code= rand(0,9999);
if ( isset( $_POST[ 'dathang' ] ) ) {
	
	if ( isset( $_POST[ "hoten" ] ) ) {
    $hoten = $_POST[ 'hoten' ];
  }
	if ( isset( $_POST[ "email" ] ) ) {
    $email = $_POST[ 'email' ];
  }
	if ( isset( $_POST[ "sodienthoai" ] ) ) {
    $sodienthoai = $_POST[ 'sodienthoai' ];
  }
	if ( isset( $_POST[ "diachi" ] ) ) {
    $diachi = $_POST[ 'diachi' ];
  }
	 if ( !$hoten ||  !$email || !$sodienthoai || !$diachi ) {


    echo "<script>alert('Vui lòng nhập đầy đủ Thông tin. ');window.location='../donhang.php';</script>";
    exit;
  }
	
	
	
      $cart= ( isset( $_SESSION[ 'cart' ] ) ) ? $_SESSION[ 'cart' ] :[] ;
		  $tongtien=0;
        foreach ( $cart as $key => $value ) {
			$tongtien +=($value['gia']*$value['soluong']);
			$tensanpham= $value['tensanpham'];
          	$soluong= $value['soluong'];
			$giasanpham=$value['gia'];
			$ID_sanpham=$value['ID_sanpham'];
			$hinh=$value['hinhsanpham'];
			$thanhtien=$value['gia']*$value['soluong'];	
			
			
			
			
			$sqlchitiet = "insert into chitietdonhang(code_cart,tensanpham,gia,soluong,hinh,ID_thanhvien,ID_sanpham)
			values('$oder_code','$tensanpham','$thanhtien','$soluong','$hinh','$ID','$ID_sanpham')";
			$kqchitiet = mysqli_query( $conn, $sqlchitiet );
  			
		}
	if ( $tongtien =='0') {


				echo "<script>alert('Giỏ hàng chưa có hàng ');window.location='../index_user_dmsanpham.php';</script>";
				exit;
			}
	
	$sql = "insert into donhang(ID_thanhvien,firstname,email,address,tel,totalprice,code_card)
			values('$ID','$hoten','$email','$diachi','$sodienthoai','$tongtien',$oder_code)";
	
	$kq = mysqli_query( $conn, $sql );
	if ( !$kq && !$sqlchitiet ) {
    echo "<script>alert('Có lỗi ! Nhập lại!');</script>";
  } else {
		unset($_SESSION['cart']);
    echo "<script>alert(' Đã thanh toán ');window.location='../index.php';</script>";
    die();
  }
}
?>