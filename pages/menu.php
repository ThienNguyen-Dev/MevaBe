<?php
include "connect.php";


?>

<style>
.giacu {
    text-decoration-line: line-through;
    font-size: 15px;
    color: #192a56;
}
.khuyenmai {
    color: red;
    /* padding-top: 138px; */
    font-size: 15px;
}
.soview {
    color: blue;
    font-size: 15px;
}
.giamacdinh {
    font-size: 15px;
    color: #5f9ea0;
}
	
.chitiet {
    width: auto;
    height: 126px;
}
.lienhe {
    color: red;
    background-color: #eeeeee;
    padding: 10px;
    font-size: 2rem;
    border-radius: 10px;
}
	.lienhe:hover{
		background-color: #c3c3c338;
	}
	h3 {
    margin: 10px;
    color: var(--black);
    font-size: 13px;
		height: 60px;
}
	
	.sub-heading {
    text-align: center;
    color: #ffffff;
	    margin-top: 5%;
		    border-radius: 10px;
    font-size: 3rem;
    background: #eb5b6ff5;
    padding-top: 1rem;
}

	.btn:hover{
    background: #ad4141;
    letter-spacing: .1rem;
}
.btnct:hover{
    background: #0606062b;
    letter-spacing: .1rem;
}
	.box1:hover{
	 background: #0606062b;
}
	.image {
    padding-top: 5px;
		
}
	.view {
    color: #27ae60;
    font-size: 15px;
}
	span.giamgiaphantram {
    color: #ffffff;
    background: #e5677d;
    border-radius: 10px;
}
	

</style>
<section class="menu" id="menu">
	
<!--	Bé -->
	 <?php

              $query1 = 'SELECT * FROM `danhmuc1`  where  visible1=1 and ID_danhmuc1=34; ';
              $result1 = mysqli_query( $conn, $query1 );
              foreach ( $result1 as $item1 ) {

                ?>

<h3 class="sub-heading"> <?= $item1['tendanhmuc1'] ?></h3>
	<?php
}
?>
<h1 class="heading"> </h1>
<?php


$query = 'SELECT DISTINCT  *
FROM `danhmuc1`
	, `sanpham`,danhmuc2
    WHERE `kiemduyet`=1 and visible1=1 and sanpham.ID_danhmuc1=danhmuc1.ID_danhmuc1 and danhmuc2.ID_danhmuc1=danhmuc1.ID_danhmuc1 and danhmuc2.ID_danhmuc2=sanpham.ID_danhmuc2 and sanpham.ID_danhmuc1=34		
	ORDER BY sanpham.ID_danhmuc1 DESC LIMIT 0,8;';
$result = mysqli_query( $conn, $query );
foreach ( $result as $item ) {

  ?>
<div class="box-container">
	<a href="detail_user_sanpham.php?ID_sanpham=<?= $item['ID_sanpham']?>&keyseo=<?= $item['keyseo'] ?>" class="btnct">
  <div class="box1">
    <div class="image"> <img width="150" height="150" src="MeBeHinh/<?= $item['hinhsanpham'] ?>" /> </div>
    <div class="content">
      <div class="stars"> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star-half-alt"></i> </div>
		<div class="view"><img src="MeBeHinh/eye.png" width="15" height="10" alt=""/>  <b><?= $item['solanxem'] ?></b></div>
      <div class="chitiet">
        <div class="chitiet">
          <h3>
            <?= $item['tensanpham'] ?>
            <?php if ($item['sanphammoi'] == '1') { echo "<img src='icon/new.png' width='20' height='20' />"; } ?>
          </h3>
          <span>
            <span class="giacu">
          <?php if ($item['giakm'] > '0') {echo 'Giá: ';  echo number_format($item ['gia'],0,',','.'); echo ' VNĐ';} ?>
          </span> <br>
			   <span class="giamgiaphantram"><b><?php if($item['giakm']>'0'){
	  					$giamgia = 100-round(($item['giakm']*100)/$item['gia']);
	  				if($giamgia>0){
						echo "- ".$giamgia."%";
					}	  
  }?></b></span><br>
          </span></div>
        <br>
      </div>
      <span class="khuyenmai"><b>
      <?php if ($item['giakm'] > '0') {echo 'Khuyến mãi: '; echo number_format($item['giakm'],0,',','.') ;echo ' VNĐ'; } ?>
      </b></span> <span class="giamacdinh" ><b>
      <?php if ($item['giakm'] <= '0') { echo 'Giá: ';  echo number_format($item ['gia'],0,',','.'); echo ' VNĐ';} ?>
      </b> </span> <br>
      <br>
<!--      <a href="#" class="btn">Thêm</a>-->
	 </div>
  </div></a>
</div>
<?php
}
?>
	
	
	<div class="load"><a name="xemthem" href="index_user_sanpham.php?keyseo=do-dung-cho-me"> Xem thêm</a></div>
	
	
</section>
<!-- --------------Mẹ------------------ -->
<section class="menu" id="menu">

		 <?php

              $query1 = 'SELECT * FROM `danhmuc1`  where ID_danhmuc1 =33 and visible1=1; ';
              $result1 = mysqli_query( $conn, $query1 );
              foreach ( $result1 as $item1 ) {

                ?>

<h3 class="sub-heading"> <?= $item1['tendanhmuc1'] ?></h3>
	<?php
}
?>
<h1 class="heading"> </h1>
<?php


$query2 = 'SELECT DISTINCT  *
FROM `danhmuc1`
	, `sanpham`,danhmuc2
    WHERE `kiemduyet`=1 and visible1=1 and sanpham.ID_danhmuc1=danhmuc1.ID_danhmuc1 and danhmuc2.ID_danhmuc1=danhmuc1.ID_danhmuc1 and danhmuc2.ID_danhmuc2=sanpham.ID_danhmuc2 and sanpham.ID_danhmuc1=33		
	ORDER BY sanpham.ID_danhmuc1 DESC LIMIT 0,8;';
$result2 = mysqli_query( $conn, $query2 );
foreach ( $result2 as $item2 ) {

  ?>
<div class="box-container">
	<a href="detail_user_sanpham.php?ID_sanpham=<?= $item2['ID_sanpham']?>&keyseo=<?= $item2['keyseo'] ?>" class="btnct">
  <div class="box1">
    <div class="image"> <img width="150" height="150" src="MeBeHinh/<?= $item2['hinhsanpham'] ?>" /> </div>
    <div class="content">
      <div class="stars"> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star-half-alt"></i> </div>
		<div class="view"><img src="MeBeHinh/eye.png" width="15" height="10" alt=""/>  <b><?= number_format($item2['solanxem'],0,',','.') ?></b></div>
      <div class="chitiet">
        <div class="chitiet">
          <h3>
            <?= $item2['tensanpham'] ?>
            <?php if ($item2['sanphammoi'] == '1') { echo "<img src='icon/new.png' width='20' height='20' />"; } ?>
          </h3>
          <span>
            <span class="giacu">
          <?php if ($item2['giakm'] > '0') {echo 'Giá: ';  echo number_format($item2 ['gia'],0,',','.'); echo ' VNĐ';} ?>
          </span> <br>
			   <span class="giamgiaphantram"><b><?php if($item2['giakm']>'0'){
	  					$giamgia = 100-round(($item2['giakm']*100)/$item2['gia']);
	  				if($giamgia>0){
						echo "- ".$giamgia."%";
					}	  
  }?></b></span><br>
          </span></div>
        <br>
      </div>
      <span class="khuyenmai"><b>
      <?php if ($item2['giakm'] > '0') {echo 'Khuyến mãi: '; echo number_format($item2['giakm'],0,',','.') ;echo ' VNĐ'; } ?>
      </b></span> <span class="giamacdinh" ><b>
      <?php if ($item2['giakm'] <= '0') { echo 'Giá: ';  echo number_format($item2 ['gia'],0,',','.'); echo ' VNĐ';} ?>
      </b> </span> <br>
      <br>
      
		 </div>
  </div></a>
</div>
<?php
}
?>
	<div class="load"><a name="xemthem" href="index_user_sanpham.php?keyseo=do-dung-cho-me"> Xem thêm</a></div>
</section>

<!-------------Mới--------------------->
<section class="menu" id="menu">

		
<h3 class="sub-heading"> Sản Phẩm mới</h3>

<h1 class="heading"> </h1>
<?php


$query2 = 'SELECT DISTINCT  *
FROM `danhmuc1`
	, `sanpham`,danhmuc2
    WHERE `kiemduyet`=1 and visible1=1 and sanpham.ID_danhmuc1=danhmuc1.ID_danhmuc1 and danhmuc2.ID_danhmuc1=danhmuc1.ID_danhmuc1 and danhmuc2.ID_danhmuc2=sanpham.ID_danhmuc2 and sanphammoi=1	
	ORDER BY sanpham.ID_danhmuc1 DESC LIMIT 0,8;';
$result2 = mysqli_query( $conn, $query2 );
foreach ( $result2 as $item2 ) {

  ?>
<div class="box-container">
	<a href="detail_user_sanpham.php?ID_sanpham=<?= $item2['ID_sanpham']?>&keyseo=<?= $item2['keyseo'] ?>" class="btnct">
  <div class="box1">
    <div class="image"> <img width="150" height="150" src="MeBeHinh/<?= $item2['hinhsanpham'] ?>" /> </div>
    <div class="content">
      <div class="stars"> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star-half-alt"></i> </div>
		<div class="view"><img src="MeBeHinh/eye.png" width="15" height="10" alt=""/>
			<b><?= number_format($item2['solanxem'],0,',','.') ?></b></div>
      <div class="chitiet">
        <div class="chitiet">
          <h3>
            <?= $item2['tensanpham'] ?>
            <?php if ($item2['sanphammoi'] == '1') { echo "<img src='icon/new.png' width='20' height='20' />"; } ?>
          </h3>
          <span>
            <span class="giacu">
          <?php if ($item2['giakm'] > '0') {echo 'Giá: ';  echo number_format($item2 ['gia'],0,',','.'); echo ' VNĐ';} ?>
          </span> <br>
			   <span class="giamgiaphantram"><b><?php if($item2['giakm']>'0'){
	  					$giamgia = 100-round(($item2['giakm']*100)/$item2['gia']);
	  				if($giamgia>0){
						echo "- ".$giamgia."%";
					}	  
  }?></b></span><br>
          </span></div>
        <br>
      </div>
      <span class="khuyenmai"><b>
      <?php if ($item2['giakm'] > '0') {echo 'Khuyến mãi: '; echo number_format($item2['giakm'],0,',','.') ;echo ' VNĐ'; } ?>
      </b></span> <span class="giamacdinh" ><b>
      <?php if ($item2['giakm'] <= '0') { echo 'Giá: ';  echo number_format($item2 ['gia'],0,',','.'); echo ' VNĐ';} ?>
      </b> </span> <br>
      <br>
      
		 </div>
  </div></a>
</div>
<?php
}
?>
	<div class="load"><a name="xemthem" href="index_user_sanpham.php?keyseo=do-dung-cho-me"> Xem thêm</a></div>
</section>
<!----------------------------------mới-------->
<!-------------Mới--------------------->
<section class="menu" id="menu">

 <?php


  $query = 'SELECT tendanhmuc1 FROM `danhmuc1` 	
    WHERE  `ID_danhmuc1`=36   
	';
  $result = mysqli_query( $conn, $query );
  foreach ( $result as $item ) {

    ?>
  <h3 class="sub-heading">
    <?= $item['tendanhmuc1'] ?>
  </h3>
  <h1 class="heading"> </h1>
  <?php
  }
  ?>

<h1 class="heading"> </h1>
<?php


$query2 = 'SELECT DISTINCT  *
FROM `danhmuc1`
	, `sanpham`,danhmuc2
    WHERE kiemduyet =1 and sanpham.ID_danhmuc1=danhmuc1.ID_danhmuc1 and danhmuc2.ID_danhmuc1=danhmuc1.ID_danhmuc1 and danhmuc2.ID_danhmuc2=sanpham.ID_danhmuc2 and gia = 0
	ORDER BY sanpham.ID_sanpham DESC ;';
$result2 = mysqli_query( $conn, $query2 );
foreach ( $result2 as $item2 ) {

  ?>
<div class="box-container">
	<a href="detail_user_sanpham.php?ID_sanpham=<?= $item2['ID_sanpham']?>&keyseo=<?= $item2['keyseo'] ?>" class="btnct">
  <div class="box1">
    <div class="image"> <img width="150" height="150" src="MeBeHinh/<?= $item2['hinhsanpham'] ?>" /> </div>
    <div class="content">
      <div class="stars"> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star-half-alt"></i> </div>
		<div class="view"><img src="MeBeHinh/eye.png" width="15" height="10" alt=""/>  <b><?= $item2['solanxem'] ?></b></div>
      <div class="chitiet">
        <div class="chitiet">
          <h3>
            <?= $item2['tensanpham'] ?>
            <?php if ($item2['sanphammoi'] == '1') { echo "<img src='icon/new.png' width='20' height='20' />"; } ?>
          </h3>
          <span>
            <span class="giacu">
          <?php if ($item2['giakm'] > '0') {echo 'Giá: ';  echo number_format($item2 ['gia'],0,',','.'); echo ' VNĐ';} ?>
          </span> <br>
			   <span class="giamgiaphantram"><b><?php if($item2['giakm']>'0'){
	  					$giamgia = 100-round(($item2['giakm']*100)/$item2['gia']);
	  				if($giamgia>0){
						echo "- ".$giamgia."%";
					}	  
  }?></b></span><br>
          </span></div>
        <br>
      </div>
      <span class="khuyenmai"><b>
		  <?php if ($item2['gia'] = '0') {echo '<b> <a class="lienhe" href="#">Liên hệ </a></b> ';} ?>
      </b>
      <?php if ($item2['giakm'] > '0') {echo 'Khuyến mãi: '; echo number_format($item2['giakm'],0,',','.') ;echo ' VNĐ'; } ?>
      </b></span> <span class="giamacdinh" ><b>
      <?php if ($item2['giakm'] <= '0' && $item2['gia'] == '0') {echo '<b> <a class="lienhe" href="#">Liên hệ </a></b> ';} ?>
      </b> </span> <br>
      <br>
      
		 </div>
  </div></a>
</div>

<?php
}
?> 

<div class="load"><a name="xemthem" href="index_user_dmsanpham.php"> Xem thêm</a></div>
</section>

