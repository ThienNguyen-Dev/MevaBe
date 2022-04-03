<?php
include "../../connect.php";
if ( isset( $_GET[ 'ID_sanpham' ] ) ) {
  $ID_sanpham = $_GET[ 'ID_sanpham' ];
	
	
	
	
	
  $sql = "DELETE FROM sanpham WHERE ID_sanpham='$ID_sanpham'";
  if ( $conn->query( $sql ) === TRUE ) {
    echo "<script>window.location='../main_sanpham.php';</script>";
	 
               
    die();
  } else {
    echo "Lỗi " . $conn->error;
  }
  $conn->close();
}
?>