<?php
include "../../connect.php";
if ( isset( $_GET[ 'ID_danhmuc1' ] ) ) {
  $ID_danhmuc1 = $_GET[ 'ID_danhmuc1' ];
	
	
	
	
	
  $sql = "DELETE FROM danhmuc1 WHERE ID_danhmuc1='$ID_danhmuc1'";
  if ( $conn->query( $sql ) === TRUE ) {
    echo "<script>window.location='../main_danhmuc1.php';</script>";
    die();
  } else {
    echo "Lỗi " . $conn->error;
  }
  $conn->close();
}
?>