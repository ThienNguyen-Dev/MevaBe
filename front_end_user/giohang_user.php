<?php
session_start();
?>
<?php
include "./connect.php";
 

?>

<div class="comment">
<style>
	.khung {
    margin-top: 80px;
    height: auto;
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
    font-size: 2.5rem;
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
    margin-top: 100px;
    margin-left: 27px;
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

	
	.btnct {
    margin-top: 1rem;
    background: #209791;
    border-radius: 0.5rem;
    cursor: pointer;
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
}
/*
	.btn {
    margin-top: 1rem;
    background: #e5677d;
    border-radius: 0.5rem;
    cursor: pointer;
    align-items: center;
    color: white;
    font-size: 2rem;
    padding: 13px;
     width: 591px; 
    padding: -0.75rem 10rem;
}
*/
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
	.tanggiam,.btn  , a#xoa {
    width: 90px;
    height: 30px;
    border-radius: 5px;
    background: #e5677d;
    color: white;
}
	 a#thanhtoan {
    width: 90px;
    height: 30px;
    border-radius: 5px;
    background: #438eab;
    color: white;
}
	
	

	input#quantity {
    width: 50px;
    font-size: 15px;
		border-radius: 10px;
    text-align: center;
    border: 1px solid #e77387;
}
	#tang:hover{
		background-color: #7a7a7a61;
	}
	a#xoa:hover{
		background-color: #7a7a7a61;
	}
	a#thanhtoan:hover{
		background-color: #7a7a7a61;
	}
	
	  .cm{
		  background-color: white;
		  border-radius: 20px;
	  }

	
	section:nth-child(even) {
    background: #ffcfcf26;
}
	td, th {
    border: 1px solid #e5677d;
    height: 40px;
    font-size: 15px;
    padding: 10px;
}
	a#xoa, a#thanhtoan {
    padding: 4px;
    font-size: 15px;
}
	
</style>
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<section class="khung" >
  <div class="menu">
    <div class="tieude">
      <h3 class="sub-heading">Giỏ hàng</h3>
    </div>
    <div class="danhmuctree">
      <h1 class="heading"></h1>
    </div>
    
    <table style="width: 100%; text-align: center; border-collapse: collapse;"border="1">
      <tr>
        <th>ID sản phẩm</th>
        <th>Tên sản phẩm</th>
        <th>Hình ảnh</th>
        <th>Số lượng</th>
        <th>Giá sản phẩmh</th>
        <th>thành tiền</th>
        <th>Thao tác</th>
      </tr>
      <?php
      $cart= ( isset( $_SESSION[ 'cart' ] ) ) ? $_SESSION[ 'cart' ] :[] ;
		  $tongtien=0;
        foreach ( $cart as $key => $value ) {
			$tongtien +=($value['gia']*$value['soluong']);
          ?>
      <tr>
        <td><?= $value['ID_sanpham']?></td>
        <td><?= $value['tensanpham']?></td>
        <td><img src="MeBeHinh/<?= $value['hinhsanpham']?>" width="100" height="100"></td>
        <td>			
		  
		  <form method="get" action="back_end_user/them_giohang.php">
		  <div class="khungmaxmin">
              <input type="hidden" name = "action" value="update"/>
			
              <input class="tang giam" id='quantity' min='1' max='10' name='quantity' type='number' value='<?= $value['soluong']?>' />
			<input  name='ID_sanpham' type='hidden' value="<?= $value['ID_sanpham']?>" />
			
              <button class="tanggiam" id="tang" 					 
					 type='submit'  >Cập nhật giá</button>
              </div>
		  </form>
		  
		  
		  </td>
        <td><?= number_format($value['gia'],0,',','.').' VNĐ'?></td>
		<td><b><?= number_format($value['gia']*$value['soluong'],0,',','.').' VNĐ'?></b></td>
		<td><a href="back_end_user/them_giohang.php?ID_sanpham=<?= $value['ID_sanpham']?>&action=xoa" id="xoa" class="btn btn-danger"> Xóa </a></td>
      </tr>
      <?php
      }
		  ?>
		<tr>
			
		<td colspan="7"><p style="float: left; ">Tổng tiền: <b><?php echo number_format($tongtien,0,',','.').' VNĐ'  ?></b> </p>
			<?php 
				
                if (isset($_SESSION['thanhvien']) && $_SESSION['thanhvien']){
					
					echo'<p style="float: right"><a href="index_user_dathang.php" id="thanhtoan" > Thanh toán </a></p>';}
					else{
						
						echo '<p style="float: right"><a href="dangnhap.php" id="thanhtoan" > Đăng nhập để mua hàng </a></p>' ;
					}
			?>
			
			
			<p style="float: right; margin-right: 10px;"><a href="back_end_user/them_giohang.php?xoatatca=1" id="xoa" >
				Xóa tất cả</a></p>
			</td>
			
			
		</tr>
		
<!--
      <tr>
        <td colspan="7"><p>Giỏ hàng trống</p></td>
      </tr>
-->
      
    </table>
  </div>
</section>
