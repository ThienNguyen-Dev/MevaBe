<?php
include "../../connect.php";
if ( isset( $_GET[ 'ID_danhmuc2' ] ) ) {
  $ID_danhm2 = $_GET[ 'ID_danhmuc2' ];
	
	
	
	
	
  $sql = "DELETE FROM danhmuc2 WHERE ID_danhmuc2='$ID_danhm2'";
  if ( $conn->query( $sql ) === TRUE ) {
    echo "<script>window.location='../main_danhmuc2.php';</script>";
	 
               
    die();
  } else {
    echo "Lỗi " . $conn->error;
  }
  $conn->close();
}
?>