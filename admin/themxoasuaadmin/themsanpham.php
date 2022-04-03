<?php


include "../../connect.php";

if ( isset( $_POST[ 'them' ] ) ) {

  if ( isset( $_POST[ "hienmenudanhmuc1" ] ) ) {
    $hienmenudanhmuc1 = $_POST[ 'hienmenudanhmuc1' ];
  }
	if ( isset( $_POST[ "hienmenudanhmuc2" ] ) ) {
    $hienmenudanhmuc2 = $_POST[ 'hienmenudanhmuc2' ];
  }
  
  
  
    $hinhsanpham = $_POST[ 'hinhsanpham' ];
	  $hinhsanpham = $_FILES['hinhsanpham']['name'];
	  $hinhsanpham_tmp = $_FILES['hinhsanpham']['tmp_name'];
	  
	  $hinhsanpham = time().'_'.$hinhsanpham;
  
  if ( isset( $_POST[ "giasanpham" ] ) ) {
    $giasanpham = $_POST[ 'giasanpham' ];
  }
	 if ( isset( $_POST[ "giakhuyenmai" ] ) ) {
    $giakhuyenmai = $_POST[ 'giakhuyenmai' ];
  }
	 if ( isset( $_POST[ "chitietsanpham" ] ) ) {
    $chitietsanpham = $_POST[ 'chitietsanpham' ];
  }
	 if ( isset( $_POST[ "thongsokythuat" ] ) ) {
    $thongsokythuat = $_POST[ 'thongsokythuat' ];
  }
	 if ( isset( $_POST[ "sanphammoi" ] ) ) {
    $sanphammoi = $_POST[ 'sanphammoi' ];
  }
	 if ( isset( $_POST[ "ngay" ] ) ) {
    $ngay = $_POST[ 'ngay' ];
  }
	 if ( isset( $_POST[ "duyet" ] ) ) {
    $duyet = $_POST[ 'duyet' ];
  }

	if ( isset( $_POST[ "tensp" ] ) ) {
    $tensp = $_POST[ 'tensp' ];
  }

	if ( !$hienmenudanhmuc2 ||  !$tensp  || !$hinhsanpham ) {
//window.location='../them_main_sanpham.php';

    echo "<script>alert('Vui lòng nhập đầy đủ Thông tin. ');</script>";
    exit;
  }
	
move_uploaded_file($hinhsanpham_tmp,'../../MeBeHinh/'.$hinhsanpham);
  $sql = "insert into   sanpham (ID_danhmuc1,ID_danhmuc2,tensanpham,hinhsanpham,gia,giakm,chitietsanpham,thongsokythuat,sanphammoi,ngaycapnhat,kiemduyet)
	values('$hienmenudanhmuc1','$hienmenudanhmuc2','$tensp','$hinhsanpham','$giasanpham','$giakhuyenmai','$chitietsanpham',
	'$thongsokythuat','$sanphammoi','$ngay','$duyet')";
  $kq = mysqli_query( $conn, $sql );
	

  if ( !$kq ) {
    echo "<script>alert('Có lỗi ! Nhập lại!');</script>";
  } else {

    echo "<script>alert(' Sản phẩm [ $tensp ] đã được thêm. ');window.location='../main_sanpham.php';</script>";
    die();
  }


}
?>
