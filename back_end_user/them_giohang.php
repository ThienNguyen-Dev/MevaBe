<?php

session_start();
//session_destroy();
include "../connect.php";
$action= (isset($_GET['action']))? $_GET['action'] : '';


//xóa tất cả sản phẩm
if(isset($_GET['xoatatca'])&&$_GET['xoatatca']==1){
	unset($_SESSION['cart']);
	header('location:../index_user_giohang.php');
}


//them san pham
if ( isset( $_GET['ID_sanpham'] ) ) {
	$ID_sanpham=$_GET['ID_sanpham'];	
	}
	$soluong= (isset($_GET['quantity']))? $_GET['quantity'] :1;
		
	
	$sql = 'SELECT * FROM sanpham WHERE ID_sanpham="'.$ID_sanpham.'"';
	$query = mysqli_query($conn,$sql);
		$row = mysqli_fetch_assoc($query);
	if($row){
		$new_product= ['tensanpham'=>$row['tensanpham'],
								  'ID_sanpham'=>$ID_sanpham, 
								  'soluong'=>$soluong,
								  'gia'=>($row['giakm']>0)? $row['giakm']: $row['gia'],
								  'hinhsanpham'=>$row['hinhsanpham']];
		
		// nếu giỏ hàng tồn tại
		
		if(isset($_SESSION['cart'][$ID_sanpham])){
			$_SESSION['cart'][$ID_sanpham]['soluong']+=$soluong;
		}else{
			$_SESSION['cart'][$ID_sanpham]=$new_product;
		}
		
		
		if($action =='update'){
			$_SESSION['cart'][$ID_sanpham]['soluong'] = $soluong;
		}
		//xóa 1 đơn
		if($action =='xoa'){
			
			unset($_SESSION['cart'][$ID_sanpham]);
		}


	}
	header('location:../index_user_giohang.php');
	


?>

  
 
      
      
      
      
   
  

