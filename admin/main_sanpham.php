<?php
include "../connect.php";



?>
<style>
a#sua {
    color: white;
}
	.giacu{
		text-decoration-line: line-through;
	}
	.khuyenmai{
		color: red;
	}
	.soview{
		color: blue;
	}
</style>
<?php
require "layout/header.php";

require "layout/menu.php";
?>
<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid px-4">
      <div class="card mb-4">
        <div class="card-header">  Danh sách sản phẩm</div>
        <div class="card-body">
          <form action="them_main_sanpham.php" method="post"  >
            <input type="submit" name="Them" class="btn btn-success" value="Thêm" id="them"/>
          </form>
          <table id="datatablesSimple">
            <thead>
              <tr>
                <th width="50">ID sản phẩm</th>
                <th width="100">Danh mục 1</th>
                <th width="100">Danh mục 2</th>
                <th width="270">Tên sản phẩm</th>
                <th>Hình</th>
                <th>Giá</th>
                <th>Ngày</th>
                <th>Duyệt</th>
				  <th>Xóa/sửa</th>
              </tr>
            </thead>
            <tbody>
              <?php

              $query = 'SELECT * FROM `sanpham` , `danhmuc2`, `danhmuc1` WHERE danhmuc1.ID_danhmuc1=danhmuc2.ID_danhmuc1 and
 sanpham.ID_danhmuc1=danhmuc1.ID_danhmuc1 and danhmuc2.ID_danhmuc2=sanpham.ID_danhmuc2 order by sanpham.ID_sanpham DESC';
              $result = mysqli_query( $conn, $query );
              foreach ( $result as $item ) {

                ?>
              <tr>
                <td style="text-align: center;"><?= $item['ID_sanpham'] ?></td>
                <td><?= $item['tendanhmuc1'] ?> 
				  </td>
                <td><?= $item['tendanhmuc2'] ?></td>
                <td><b>
                  <?= $item['tensanpham'] ?>
					<?php if ($item['sanphammoi'] == '1') { echo "<img src='../icon/new.png' width='30' height='30' />"; } ?>
					
					<br>
                  Lượt xem:
                  <span class="soview"><?= $item['solanxem'] ?><i class="fas fa-table me-1"></i></span></td>
                <td><img src="../MeBeHinh/<?= $item['hinhsanpham'] ?>" width="150" height="150" alt=""/></td>
				  
                <td>	
					
					<div class="giacu"><?php if ($item['giakm'] > '0') {echo 'Giá: ';  echo number_format($item ['gia'],0,',','.'); echo ' VNĐ';} ?> </div> 
					<div ><b><?php if ($item['giakm'] <= '0') { echo 'Giá: ';  echo number_format($item ['gia'],0,',','.'); echo ' VNĐ';} ?></b> </div> 
					
					
					
					<br>
                  <div class="khuyenmai"><b><?php if ($item['giakm'] > '0') {echo 'Khuyến mãi: '; echo number_format($item['giakm'],0,',','.') ;echo ' VNĐ'; } ?></b></div></td>
				  
                <td><?= date('\N\g\à\y j \T\h\á\n\g m \N\ă\m Y </br> g:i a',strtotime ($item['ngaycapnhat'])) ?></td>
                <td style="text-align: center;"><b><?= $item['kiemduyet']==1 ? "Hiển thị":"Ẩn"; ?></b></td>
                
                <!-- Button Sửa -->
                <td><a  id="sua" href="sua_main_sanpham.php?ID_sanpham=<?php echo $item['ID_sanpham']; ?>"  onclick="openForm()" class="btn btn-primary"  >Sửa </a> 
                  
                  <!-- Button Xóa --> 
                  <a href="themxoasuaadmin/xoasanpham.php?ID_sanpham=<?php echo $item['ID_sanpham']; ?>" id="xoa" class="btn btn-danger"> Xóa </a></td>
                </td>
              </tr>
              <?php
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </main>
</div>
<?php
require "layout/footer.php";
?>