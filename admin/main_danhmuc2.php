<?php
include "../connect.php";

$sql = 'SELECT * FROM danhmuc2';

$result = mysqli_query( $conn, $sql );


?>
<style>
a#sua {
    color: white;
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
        <div class="card-header"> <i class="fas fa-table me-1"></i> Danh sách danh mục cấp 2 </div>
        <div class="card-body">
          <form action="them_main_danhmuc2.php" method="post"  >
            <input type="submit" name="Them" class="btn btn-success" value="Thêm" id="them"/>
          </form>
          <table id="datatablesSimple">
            <thead>
              <tr>
                <th>ID danh mục 2</th>
                <th>Tên danh mục 1</th>
                <th>Tên danh mục 2</th>
                <th>Hiển thị trên menu</th>
                <th>Keyword</th>
                <th>Xóa/Sửa</th>
              </tr>
            </thead>
            <tbody>
              <?php

              $query = 'SELECT * FROM `danhmuc1` 
	LEFT JOIN `danhmuc2` ON `danhmuc2`.`ID_danhmuc1` = `danhmuc1`.`ID_danhmuc1` where ID_danhmuc2 > 0;';
              $result = mysqli_query( $conn, $query );
              foreach ( $result as $item ) {

                ?>
              <tr>
                <td style="text-align: center;"><?= $item['ID_danhmuc2'] ?></td>
                <td><?= $item['tendanhmuc1'] ?></td>
                <td><?= $item['tendanhmuc2'] ?></td>
                <td style="text-align: center;"><?= $item['visiblemenu2']==1 ? "Hiển thị":"Ẩn"; ?></td>
                <td><?= $item['keyseo'] ?></td>
                
                <!-- Button Sửa -->
                <td style="text-align: center;"><a  id="sua" href="sua_main_danhmuc2.php?ID_danhmuc2=<?php echo $item['ID_danhmuc2']; ?>"  onclick="openForm()" class="btn btn-primary"  >Sửa </a> 
                  
                  <!-- Button Xóa --> 
                  <a href="themxoasuaadmin/xoadanhmuc2.php?ID_danhmuc2=<?php echo $item['ID_danhmuc2']; ?>" id="xoa" class="btn btn-danger"> Xóa </a></td>
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