<?php


include "../../connect.php";

if ( isset( $_POST[ 'Them' ] ) ) {

  if ( isset( $_POST[ "hienmenudanhmuc1" ] ) ) {
    $hienmenudanhmuc1 = $_POST[ 'hienmenudanhmuc1' ];
  }
  
  if ( isset( $_POST[ "hienthimenu" ] ) ) {
    $hienthimenu = $_POST[ 'hienthimenu' ];
  }
  if ( isset( $_POST[ "tendanhmuc2" ] ) ) {
    $tendanhmuc2 = $_POST[ 'tendanhmuc2' ];
  }
  if ( isset( $_POST[ "Keywork" ] ) ) {
    $Keywork = $_POST[ 'Keywork' ];
  }

  if ( !$hienmenudanhmuc1 ||  !$hienthimenu || !$tendanhmuc2 || !$Keywork ) {


    echo "<script>alert('Vui lòng nhập đầy đủ Thông tin. ');window.location='../them_main_danhmuc2.php';</script>";
    exit;
  }

	
	

  $sql = "insert into danhmuc2(ID_danhmuc1,tendanhmuc2,visiblemenu2,keyseo)
	values('$hienmenudanhmuc1','$tendanhmuc2','$hienthimenu','$Keywork')";
  $kq = mysqli_query( $conn, $sql );

  if ( !$kq ) {
    echo "<script>alert('Có lỗi ! Nhập lại!');</script>";
  } else {

    echo "<script>alert(' $tendanhmuc2 đã được thêm. ');window.location='../main_danhmuc2.php';</script>";
    die();
  }


}
?>