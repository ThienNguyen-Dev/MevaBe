<?php
include "./connect.php";


?>
<div class="comment">
  
  <style>
	.khung {
    margin-top: 80px;
    height: 700px;
    background-color: white;
    border-radius: 10px;
		border: 5px solid #e5677d;
}
	.khunghinh{
		float: left;
	}
	.heading {
    text-align: left;
    color: var(--black);
    font-size: 2rem;
    padding-left: 10px;
    padding-bottom: 2rem;
    text-transform: uppercase;
}
	.danhmuctree {
    width: 400px;
    /* background-color: aqua; */
}
	.khungnoidung {
    /* width: 90px; */
    height: 400px;
    padding-left: 10px;
    
    padding-right: 10px;
    margin-left: 400px;
}
	.sub-heading {
    text-align: center;
    color: #ffffff;
    font-size: 2rem;
		border-radius: 10px;
    background: #e5677deb;
    padding-top: 1rem;
    border-radius: 10px;
}
	.hinh {
    text-align: center;
		font-size: 13px;
}
	.buttoon {
    /* float: right; */
    margin-top: 80px;
        margin-left: 30px;
}
	.chitiet {
    /* border: 1px solid; */
    height: 250px;
    text-align: revert;
    border-radius: 10px;
    margin-left: 20px;
    padding: 10px;
    
    color: white;
    background-color: #e5677d;
}
		.thongso {
    height: 135px;
    text-align: left;
			margin-left: 20px;
    border-radius: 10px;
    padding: 10px;
    color: white;
    background-color: #e5677d;
}
	span.chitietsanpham {
    
    font-family: sans-serif;
		
}
	span.thongsosanpham {
    font-size: 15px;
    font-family: sans-serif;
}
	.giaban {
    margin-top: 60px;
    margin-bottom: 40px;
    margin-left: -60px;
		width: 600px;
    float: right;
}
		
	span.giagoc {
    font-size: 30px;
    margin-right: 90px;
		 color: #232d58;
		
}
	span.giacu {
    font-size: 20px;
     
		text-decoration-line: line-through;
}
span.giakm {
    font-size: 20px;
    
    color: red;
}

	.menu {
    text-align: center;
}
	.btnct {
    margin-top: 1rem;
    background: #209791;
    border-radius: 0.5rem;
    cursor: pointer;
		width: 250px;
    align-items: center;
    color: white;
    font-size: 2rem;
    padding: 13px;
    /* width: 591px; */
    padding: -0.75rem 10rem;
}
	.lienhe {
    margin-top: 1rem;
    background: #eb4c4c;
    border-radius: 0.5rem;
    cursor: pointer;
    align-items: center;
    color: white;
    font-size: 2rem;
    padding: 13px;
    /* width: 591px; */
    padding: -0.75rem 10rem;
		margin-left: 80px;
}

	p.chitietsanpham {
    padding: 20px;
		    padding-top: 10px;
		font-size: 15px;
    /* margin-bottom: 80px; */
}
	.ttt {
		margin-top: 5px;
    height: 200px;
    padding-top: 5px;
    border-radius: 10px;
    background-color: #00000014;
}
	.tt {
    height: 185px;
    overflow: auto;
}
	.box2 {
    background: #fff;
    /* margin: 5px; */
    width: 200px;
    height: 320px;
    padding: 2px;
    /* border: .1rem solid rgba(0,0,0,.2); */
    border-radius: .5rem;
    box-shadow: var(--box-shadow);
}
	.menu .box-container{
		height: 324px;
	}
	a.card{
		height: 324px;
	}
	.box2:hover{
		background-color: #08080821;
	}
	.lienhe:hover{
    background: #356162;
    letter-spacing: .1rem;
		
}
	.tanggiam{
		width: 40px;
		height: 40px;
		background: #e5677d;
    color: white;
	}
	
	.khungmaxmin {
    margin-top: 30px;
}
	input#quantity {
    width: 50px;
    font-size: 15px;
}
	#tang:hover{
		background-color: #7a7a7a61;
	}
	#giam:hover{
		background-color: #7a7a7a61;
	}
	  .cm{
		  background-color: white;
		  border-radius: 20px;
	  }
	div#phantrang a {
    font-size: 15px;
    margin-right: 5px;
    background: #e5677d;
    color: white;
    height: 20px;
   margin-bottom: 10px;
    padding: 7px;
    border-radius: 10px;
}
	div#phantrang a:hover {
    
    background: #e5677d61;
   
}
	  div#phantrang {
    margin-bottom: 20px;
}

	
	
</style>
  <section >
  
  
  
  
  
  
  <section class="khung" >	
  <!--<h3 class="sub-heading"> adasdsa</h3>-->
	  <form method="get" action="back_end_user/them_giohang.php">
    <?php
            include "./connect.php";
	
            if ( isset( $_GET[ 'ID_sanpham' ] ) ) {
              $ID_sanpham = $_GET[ 'ID_sanpham' ];
				$keyseo = $_GET[ 'keyseo' ];
              $query = 'SELECT * FROM `sanpham` , `danhmuc2`, `danhmuc1` WHERE danhmuc1.ID_danhmuc1=danhmuc2.ID_danhmuc1 and
 sanpham.ID_danhmuc1=danhmuc1.ID_danhmuc1 and danhmuc2.ID_danhmuc2=sanpham.ID_danhmuc2 and ID_sanpham=' . $ID_sanpham . ' ';
              $result = mysqli_query( $conn, $query );
				 $update = 'UPDATE sanpham SET solanxem = solanxem+1  WHERE ID_sanpham=' . $ID_sanpham . '';
				$view = mysqli_query( $conn, $update );
				
              foreach ( $result as $item ) {
                ?>
    <?php
            }
            }
			
            ?>
      
    <div class="menu">
      <div class="tieude">
        <h3 class="sub-heading"><?= $item['tensanpham']?></h3>
        </div>
      <div class="danhmuctree">
          
        <h1 class="heading">Danh mục: <b><?= $item['tendanhmuc1']?> -> <?= $item['tendanhmuc2']?></b></h1>
        </div>
        
      <div class="khunghinh">
        <div class="hinh"><img src="../mevabe/MeBeHinh/<?= $item['hinhsanpham'] ?>" width="300" height="300" alt=""/> 
          <div class="stars"> 
            <i class="fas fa-star"></i> 
            <i class="fas fa-star"></i> 
            <i class="fas fa-star"></i> 
            <i class="fas fa-star"></i> 
            <i class="fas fa-star-half-alt"></i> 
            </div>
            <span>View: <?= $item['solanxem']?></span><br>
            <span>Ngày cập nhật: <b><?= date('\N\g\à\y j \T\h\á\n\g m \N\ă\m Y g:i a',strtotime ($item['ngaycapnhat'])) ?></b></span><br><div class="khungmaxmin">
              <input class="tanggiam" id="giam" 
					 onclick="var result = document.getElementById('quantity'); var qty = result.value; if( !isNaN(qty) &amp; qty > 1 ) result.value--;return false;" 
					 type='button' value='-' />
			
              <input class="tang giam" id='quantity' min='1' max='10' name='quantity' type='text' readonly="readonly" value="1" />
			<input  name='ID_sanpham' type='hidden' value="<?= $item['ID_sanpham']?>" />
			
              <input class="tanggiam" id="tang" 
					 onclick="var result = document.getElementById('quantity'); var qty = result.value; if( !isNaN(qty) &amp; qty<10) result.value++;return false;" 
					 type='button' value='+' />
              </div>
            
          </div>
        </div>
      <div class="khungnoidung">
        <div class="noidungchitiet">            
          <div class="chitiet">		  
            <span>
            <div class=""><h2>Nội dung chi tiết</h2></div>
              </span>        
            <div class="ttt" ><span>
              <div class="tt" >
				  <article class="chitietsanpham"><?= $item['chitietsanpham']?></article>
				  </div>
              <br>
              </span>
                </div>
              </div>
            
          <br>
        </div>
        <div class="noidungthongso">
            
            
          <div class="thongso">
            <span>
            <p class="thongsosanpham" style=”white-space: pre;><?= $item['thongsokythuat']?></p> <br></span>
          </div>
          <br>
        </div>
      </div>
        <div class="giaban">
          <span class="giacu"><?php if ($item['giakm'] > '0') {echo 'Giá: ';  echo number_format($item ['gia'],0,',','.'); echo ' VNĐ';} ?></span><br>
          <span class="giagoc"><b><?php if ($item['giakm'] <= '0') { echo 'Giá: ';  echo number_format($item ['gia'],0,',','.'); echo ' VNĐ';} ?></b></span>
          <span class="giakm"><b><?php if ($item['giakm'] > '0') {echo 'Khuyến mãi: '; echo number_format($item['giakm'],0,',','.') ;echo ' VNĐ'; } ?></b></span>
        </div>
        
  </div>
    <div class="buttoon">
        <?php if($item['gia'] > '0') {
           echo' <button type="submit"  class="btnct">Thêm giỏ hàng</button> <br>
		   ';
		   } else if ($item['gia'] <= '0') {
		  echo' <a href="#" class="lienhe">Liên hệ</a>';
		  }?>
        
       
        
    </div>
      
      </form>
    </section>
      
      
      
      
    <section class="menu" id="menu">
        
        
      <?php
            if ( isset( $_GET[ 'keyseo' ] ) ) {
              $keyseo = $_GET[ 'keyseo' ];
              $query = 'SELECT * FROM danhmuc2 WHERE keyseo="' .$keyseo. '"';
              $result = mysqli_query( $conn, $query );
              foreach ( $result as $item ) {

                ?>
        <?php
            }
            }
            ?>
        
  <h3 class="sub-heading"> Sản phẩm cùng loại</h3>
        
  <h1 class="heading">Danh mục: <?= $item['tendanhmuc2']?> </h1>
  <?php
$sotin1trang = 8; // khách hàng muốn

if( isset($_GET["trang"]) ){
	$trang = $_GET["trang"];
	settype($trang, "int");
}else{
	$trang = 1;	
}

if ( isset( $_GET[ 'keyseo' ] ) ) {
              $keyseo = $_GET[ 'keyseo' ];
	$from = ($trang -1 ) * $sotin1trang;
              $query = 'SELECT * FROM danhmuc2,sanpham WHERE danhmuc2.ID_danhmuc2=sanpham.ID_danhmuc2 and gia > 0 and kiemduyet = 1 and keyseo="' . $keyseo . '"limit '.$from.', '.$sotin1trang.'';
              $result = mysqli_query( $conn, $query );
              foreach ( $result as $item ) {

  ?>
  <div class="box-container">
    <a href="detail_user_sanpham.php?ID_sanpham=<?= $item['ID_sanpham']?>&keyseo=<?= $item['keyseo'] ?>" class="card">
      <div class="box2">
        <div class="image"> <img width="150" height="150" src="MeBeHinh/<?= $item['hinhsanpham'] ?>" /> </div>
        <div class="">
          <div class="stars"> 
            <i class="fas fa-star"></i> 
            <i class="fas fa-star"></i> 
            <i class="fas fa-star"></i> 
            <i class="fas fa-star"></i> 
            <i class="fas fa-star-half-alt"></i> 
            </div>
          <div class="view"><img src="MeBeHinh/eye.png" width="15" height="10" alt=""/>  <b><?= $item['solanxem'] ?></b></div>
          
          <div >
            <h3 style="margin: 10px;
    color: var(--black);
    font-size: 15px;">
              <?= $item['tensanpham'] ?>
              <?php if ($item['sanphammoi'] == '1') { echo "<img src='icon/new.png' width='20' height='20' />"; } ?>
              </h3>
            </div>
          
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
	echo "<a href='detail_user_sanpham.php?ID_sanpham=".$item['ID_sanpham']."&keyseo=".$item['keyseo']."&trang=$t'>$t</a>  ";
}
?>
</div>
  <div class="cm">
  <div id="fb-root"></div>
  <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v13.0" nonce="DyaX0IEu"></script>
    <div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-width="100%" data-numposts="5"></div>
  </div>
        
    </section>
  </section>
  
  
</div>
