<?php


include "../../connect.php";
if ( isset( $_POST[ 'Them' ] ) ) {

  if ( isset( $_POST[ "tendanhmuc1" ] ) ) {
    $tendanhmuc1 = $_POST[ 'tendanhmuc1' ];
  }
  
  if ( isset( $_POST[ "hienthimenu" ] ) ) {
    $visiblemenu1 = $_POST[ 'hienthimenu' ];
  }
  if ( isset( $_POST[ "Keywork" ] ) ) {
    $keyword = $_POST[ 'Keywork' ];
  }
  if ( isset( $_POST[ "hienthisanpham" ] ) ) {
    $visible1 = $_POST[ 'hienthisanpham' ];
  }

  if ( !$tendanhmuc1 ||  !$visiblemenu1 || !$keyword || !$visible1 ) {


    echo "<script>alert('Vui lòng nhập đầy đủ Thông tin. ');window.location='../them_main_danhmuc1.php';</script>";
    exit;
  }


  $sql = "insert into danhmuc1(tendanhmuc1,visiblemenu1,keyword,visible1)
	values('$tendanhmuc1','$visiblemenu1','$keyword','$visible1')";
  $kq = mysqli_query( $conn, $sql );

  if ( !$kq ) {
    echo "<script>alert('Có lỗi ! Nhập lại!');</script>";
  } else {

    echo "<script>alert(' $tendanhmuc1 đã được thêm. ');window.location='../main_danhmuc1.php';</script>";
    die();
  }


}
?>