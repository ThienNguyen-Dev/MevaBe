<?php
include "./connect.php";


?>

<style>
.giacu {
    text-decoration-line: line-through;
    font-size: 13px;
    color: #192a56;
}
.khuyenmai {
    color: red;
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
    font-size: 2rem;
}
	
	.sub-heading {
    text-align: center;
    color: #ffffff;
	    margin-top: 5%;
    font-size: 3rem;
		border-radius: 10px;
    background: #eb5b6ff5;
    padding-top: 1rem;
}
div#phantrang a {
    font-size: 15px;
    margin-right: 20px;
    background: #e5677d;
    color: white;
    height: 20px;
    margin: 10px;
    padding: 7px;
    border-radius: 10px;
}
	div#phantrang a:hover {
    
    background: #e5677d61;
   
}
	
	.btn:hover{
    background: #ad4141;
/*    letter-spacing: .1rem;*/
}
.btnct:hover{
    background: #0606062b;
/*    letter-spacing: .1rem;*/
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
		h3 {
    margin: 10px;
    color: var(--black);
    font-size: 13px;
			height: 60px;
}
	span.giamgiaphantram {
    color: #ffffff;
    background: #e5677d;
    border-radius: 10px;
}
	
	
</style>
<section class="menu" id="menu">
	

	<?php
            if ( isset( $_GET[ 'keyseo' ] ) ) {
              $keyseo = $_GET[ 'keyseo' ];
              $query = 'SELECT * FROM danhmuc2 WHERE keyseo="' . $keyseo . '"';
              $result = mysqli_query( $conn, $query );
              foreach ( $result as $item ) {

                ?>
            <?php
            }
            }
            ?>

<h3 class="sub-heading"> <?= $item['tendanhmuc2'] ?></h3>

<h1 class="heading"> </h1>
<?php

$sotin1trang = 10; // khách hàng muốn

if( isset($_GET["trang"]) ){
	$trang = $_GET["trang"];
	settype($trang, "int");
}else{
	$trang = 1;	
}
if ( isset( $_GET[ 'keyseo' ] ) ) {
              $keyseo = $_GET[ 'keyseo' ];
			$from = ($trang -1 ) * $sotin1trang;
              $query = 'SELECT * FROM danhmuc2,sanpham WHERE danhmuc2.ID_danhmuc2=sanpham.ID_danhmuc2 and gia > 0 and kiemduyet = 1 and keyseo="' . $keyseo . '" limit '.$from.', '.$sotin1trang.'';
			
              $result = mysqli_query( $conn, $query );
			  
	
              foreach ( $result as $item ) {

  ?>
<div class="box-container">
	<a href="detail_user_sanpham.php?ID_sanpham=<?= $item['ID_sanpham']?>&keyseo=<?= $item['keyseo'] ?>" class="btnct">
  <div class="box1">
    <div class="image"> <img width="150" height="150" src="MeBeHinh/<?= $item['hinhsanpham'] ?>" /> </div>
    <div class="content">
      <div class="stars"> 
		  <i class="fas fa-star"></i> 
		  <i class="fas fa-star"></i> 
		  <i class="fas fa-star"></i> 
		  <i class="fas fa-star"></i> 
		  <i class="fas fa-star-half-alt"></i> 
		</div>
      <div class="view"><img src="MeBeHinh/eye.png" width="15" height="10" alt=""/>  
		  <b><?= number_format($item['solanxem'],0,',','.') ?></b></div>
<div class="chitiet">
  <div class="chitiet">
          <h3>
            <?= $item['tensanpham'] ?>
            <?php if ($item['sanphammoi'] == '1') { echo "<img src='icon/new.png' width='20' height='20' />"; } ?>
          </h3>
          <span>
            <span class="giacu">
          <?php if ($item['giakm'] > '0') {
	  				
	  
	  echo 'Giá: ';  echo number_format($item ['gia'],0,',','.'); echo ' VNĐ';} ?>
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
}
?>
<div id="phantrang">
<?php

// 2 dong quan trong nhat nha
$x = mysqli_query($conn,'SELECT * FROM danhmuc2,sanpham WHERE danhmuc2.ID_danhmuc2=sanpham.ID_danhmuc2 and gia > 0 and kiemduyet = 1 and keyseo="' . $keyseo . '"');
$tongsotin = mysqli_num_rows($x);
$sotrang = ceil($tongsotin / $sotin1trang);
for($t=1; $t<=$sotrang; $t++){
	echo "<a href='index_user_sanpham.php?keyseo=".$item['keyseo']."&trang=$t'>Trang $t</a>  ";
}
?>
</div>
	
</section>