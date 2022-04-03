<?php
include( "connect.php" );
$sql = 'SELECT * FROM danhmuc1';

$result = mysqli_query( $conn, $sql );
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>MOM & BABY</title>
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

<!-- font awesome cdn link  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

<!-- custom css file link  -->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/header.css">
<link rel="stylesheet" href="css/search.css">
<link rel="stylesheet" href="css/home.css">
<link rel="stylesheet" href="css/menu.css">
<link rel="stylesheet" href="css/footer.css">
<link rel="stylesheet" href="css/loader.css">
<style>
nav ul {
    list-style: none;
    position: sticky;
    display: inline-flex;
}
	header .navbar a {
    font-size: 1.5rem;
    border-radius: .5rem;
    padding: 15px;
		padding-left: 20px;
    color: white;
}
	label.session {
    color: white;
    font-size: 15px;
    margin-right: 20px;
}
</style>
</head>
<body>

<!-- header section starts      -->

<header> <a href="index.php" class="logo">MOM & BABY.</a> 
  

  
  <nav class="navbar" >
    <ul class="menu">
      <li><a href="index.php">Trang chủ</a> </li>
    </ul>
    <?php
    $query = 'SELECT * FROM `danhmuc1` where `visiblemenu1` = 1 ';
    $result = mysqli_query( $conn, $query );
    echo '<ul class="menu">';
    foreach ( $result as $item ) {
      echo '<li><a href="sanphamdanhmuclon/'.$item['keyword'].'" >' . $item[ 'tendanhmuc1' ] . '</a>';
      echo '<ul>';
      menucon( $item[ 'ID_danhmuc1' ] );
      echo '</ul>';
      echo '</li>';
    }
    echo '</ul>';
    ?>
	  
    <?php
    function menucon( $menuba ) {
      include( "connect.php" );
      $sql = 'SELECT * FROM danhmuc2 WHERE `visiblemenu2` = 1 and ID_danhmuc1 = ' . $menuba . '';
      $result = mysqli_query( $conn, $sql );
      while ( $row = mysqli_fetch_array( $result ) ) {
        echo '<li><a href="index_user_sanpham.php?keyseo='.$row['keyseo'].'" >' . $row[ 'tendanhmuc2' ] . '</a></li>';

      }
    }
    ?>
	  <a href="index_user_dmsanpham.php">Sản phẩm</a>
    <a href="#">Liên hệ</a>
	</nav>
	
	
	
	
  <div class="icons">
	  <?php 
                include "xulylogin.php";
                if (isset($_SESSION['thanhvien']) && $_SESSION['thanhvien']){
					
                    echo '  <label class="session">Xin chào: '.$_SESSION['thanhvien'].'</label> 
					
					 <a href="xylylogout.php" class="fas fa-sign-out-alt"></a>
					'; }
	  			else{ echo '<a href="dangnhap.php" class="fas fa-user"></a>';}?>
	  <i class="fas fa-bars" id="menu-bars"></i>
	  <i class="fas fa-search" id="search-icon"></i> 
	  
	   
	  <a href="index_user_giohang.php" class="fas fa-shopping-cart">
		  <?php
		  $cart= ( isset( $_SESSION[ 'cart' ] ) ) ? $_SESSION[ 'cart' ] :[] ;
		 $dem="";
        foreach ( $cart as $key => $value ) {
			if($value['soluong']>0){
				 $dem++;				
			}
		}
		  echo $dem;
		  ?></a> 
	</div>
	
</header>
