<?php
include "../connect.php";


?>

<style>
a#sua {
    color: white;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<?php
require "layout/header.php";

require "layout/menu.php";
?>
<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid px-4">
      <div class="card mb-4">
        <div class="card-header"> <i class="fas fa-table me-1"></i> Danh sách sản phẩm </div>
        <div class="card-body">
          <form action="" method="post" enctype="multipart/form-data" >
            <figure>Thông tin sản phảm</figure>
            <label>Tên danh mục 1</label>
            <?php
            include "../connect.php";
            if ( isset( $_GET[ 'ID_sanpham' ] ) ) {
              $ID_sanpham = $_GET[ 'ID_sanpham' ];
              $query = mysqli_query( $conn, 'SELECT *FROM `danhmuc1` LEFT JOIN `sanpham` ON `sanpham`.`ID_danhmuc1` = `danhmuc1`.`ID_danhmuc1`WHERE ID_sanpham=' . $ID_sanpham );
              //				$result = mysqli_query( $conn, $query );
              $row = mysqli_fetch_array( $query );
              $check = mysqli_query( $conn, 'SELECT DISTINCT *FROM danhmuc1' );

              echo '<select name="hienmenudanhmuc1" id="danhmuc1" ">';
              foreach ( $check as $rows ): ?>
            <option value="<?php echo $rows['ID_danhmuc1']; ?>"<?php if($row['ID_danhmuc1'] == $rows['ID_danhmuc1']) echo 'selected="selected"'; ?>><?php echo $rows['tendanhmuc1']; ?></option>
            <?php
            endforeach;
            ?>
            <?php
            }
            echo '</select>';

            ?>
            <br/>
            <label>Tên danh mục 2</label>
            <?php
            include "../connect.php";
            if ( isset( $_GET[ 'ID_sanpham' ] ) ) {
              $ID_sanpham = $_GET[ 'ID_sanpham' ];
              $query = mysqli_query( $conn, 'SELECT *FROM `danhmuc2` LEFT JOIN `sanpham` ON `sanpham`.`ID_danhmuc2` = `danhmuc2`.`ID_danhmuc2`WHERE ID_sanpham=' . $ID_sanpham );
              //				$result = mysqli_query( $conn, $query );
              $row = mysqli_fetch_array( $query );
              $check = mysqli_query( $conn, 'SELECT DISTINCT *FROM danhmuc2' );

              echo '<select name="hienmenudanhmuc2" id="danhmuc2" ">';
              foreach ( $check as $rows ): ?>
            <option value="<?php echo $rows['ID_danhmuc2']; ?>"<?php if($row['ID_danhmuc2'] == $rows['ID_danhmuc2']) echo 'selected="selected"'; ?>><?php echo $rows['tendanhmuc2']; ?></option>
            <?php
            endforeach;
            ?>
            <?php
            }
            echo '</select>';

            ?>
            <br/>
            <label>Tên sản phẩm</label>
            <?php
            include "../connect.php";
            if ( isset( $_GET[ 'ID_sanpham' ] ) ) {
              $ID_sanpham = $_GET[ 'ID_sanpham' ];
              $query = 'SELECT *FROM `sanpham`  WHERE ID_sanpham=' . $ID_sanpham . '';
              $result = mysqli_query( $conn, $query );
              foreach ( $result as $item ) {
                ?>
            <?php
            }
            }
            ?>
            <input type="text" name="tensp"  class="danhmuc2" value="<?= $item['tensanpham']?>" />
            <br/>
            <label>Hình sản phẩm</label>
            <input type="file" name="hinhsanpham"   class="danhmuc2" >
            <img src="../MeBeHinh/<?= $item['hinhsanpham'] ?>" width="200" height="200" alt=""/> <br/>
            <label>Giá sản phẩm</label>
            <input type="text" name="giasanpham" value="<?= $item['gia']?>" class="danhmuc2" />
            <br/>
            <label>Giá khuyến mãi</label>
            <input type="text" name="giakhuyenmai" value="<?= $item['giakm']?>" class="danhmuc2" />
            <br/>
            <label>Chi tiết sản phẩm</label>
            <textarea name="chitietsanpham" rows="10"  width="100%" style="resize: none"><?= $item['chitietsanpham']?></textarea>
            <br/>
            <label>Thông số kỹ thuật</label>
            <textarea name="thongsokythuat" rows="10"  width="100%" style="resize: none"><?= $item['thongsokythuat']?></textarea>
            <br/>
            <label>sản phẩm mới</label>
            <input  type="checkbox" name="sanphammoi" value="<?= $item['sanphammoi']?>" <?php if ($item['sanphammoi'] == '1') { echo 'checked'; } ?> class="danhmuc2" />
            <br/>
            <label>Ngày</label>
            <input type="text" name="ngay"  value="<?= ($item['ngaycapnhat']) ?>"  class="danhmuc2" readonly="readonly" />
            <br/>
            <label>Duyệt</label>
            <select name="duyet"  class="danhmuc2">
              <option value="1" <?php if ($item['kiemduyet'] == '1') { echo 'selected'; } ?>> Kích hoạt</option>
              <option value="0" <?php if ($item['kiemduyet'] != '1') { echo 'selected'; } ?>> Ẩn</option>
            </select>
            <br>
            <input type="submit" name="luusp" class="btn btn-success" value="Lưu" id="luu"/>
          </form>
        </div>
      </div>
    </div>
  </main>
</div>
<script type="text/javascript">
	$(document).on('change','#danhmuc1', function(){
      var ID_danhmuc1 = $(this).val();
      if(ID_danhmuc1){
          $.ajax({
              type:'POST',
              url:'action.php',
              data:{'ID_danhmuc1':ID_danhmuc1},
              success:function(result){
                  $('#danhmuc2').html(result);
                 
              }
          }); 
      }else{
          $('#danhmuc2').html('<option value="">không có gì trong này</option>');
          
      }
  });
   
</script>
<?php


if ( isset( $_POST[ 'luusp' ] ) ) {

  if ( isset( $_GET[ 'ID_sanpham' ] ) ) {
    $ID_sanpham = $_GET[ 'ID_sanpham' ];
  }

  if ( isset( $_POST[ "hienmenudanhmuc1" ] ) ) {
    $hienmenudanhmuc1 = $_POST[ 'hienmenudanhmuc1' ];
  }
	if ( isset( $_POST[ "hienmenudanhmuc2" ] ) ) {
    $hienmenudanhmuc2 = $_POST[ 'hienmenudanhmuc2' ];
  }
  
  
  
    $hinhsanpham = $_POST[ 'hinhsanpham' ];
	  $hinhsanpham = $_FILES['hinhsanpham']['name'];
	  $hinhsanpham_tmp = $_FILES['hinhsanpham']['tmp_name'];
	  
	  
  
  if ( isset( $_POST[ "giasanpham" ] ) ) {
    $giasanpham = $_POST[ 'giasanpham' ];
  }
	 if ( isset( $_POST[ "giakhuyenmai" ] ) ) {
    $giakhuyenmai = $_POST[ 'giakhuyenmai' ];
  }
	 if ( isset( $_POST[ "chitietsanpham" ] ) ) {
    $chitietsanpham = $_POST[ 'chitietsanpham' ];
  }
	 if ( isset( $_POST[ "thongsokythuat" ] ) ) {
    $thongsokythuat = $_POST[ 'thongsokythuat' ];
  }
	 if ( isset( $_POST[ "sanphammoi" ] ) ) {
    $sanphammoi = $_POST[ 'sanphammoi' ];
  }
	 if ( isset( $_POST[ "ngay" ] ) ) {
    $ngay = $_POST[ 'ngay' ];
  }
	 if ( isset( $_POST[ "duyet" ] ) ) {
    $duyet = $_POST[ 'duyet' ];
  }

	if ( isset( $_POST[ "tensp" ] ) ) {
    $tensp = $_POST[ 'tensp' ];
  }
  if ( !$tensp  ) {


    echo "<script>alert('Vui lòng nhập đầy đủ Thông tin. ');window.location='sua_main_sanpham.php?ID_sanpham= $ID_sanpham';</script>";
    exit;
  }
if ($hinhsanpham!=''){
	move_uploaded_file($hinhsanpham_tmp,'../MeBeHinh/'.$hinhsanpham);
  $sql = "UPDATE `sanpham` SET ID_sanpham='" . $ID_sanpham . "',
  ID_danhmuc1='" . $hienmenudanhmuc1 . "',
  ID_danhmuc2='" . $hienmenudanhmuc2 . "', 
  hinhsanpham='" . $hinhsanpham . "',  
  gia='" . $giasanpham . "',  
  giakm='" . $giakhuyenmai . "',  
  chitietsanpham='" . $chitietsanpham . "',  
  thongsokythuat='" . $thongsokythuat . "',  
  sanphammoi='" . $sanphammoi . "',  
  ngaycapnhat='" . $ngay . "',  
  kiemduyet='" . $duyet . "',  
  tensanpham='" . $tensp . "' 
  WHERE ID_sanpham='$_GET[ID_sanpham]' ";

}
   
  else{
	  $sql = "UPDATE `sanpham` SET ID_sanpham='" . $ID_sanpham . "',
  ID_danhmuc1='" . $hienmenudanhmuc1 . "',
  ID_danhmuc2='" . $hienmenudanhmuc2 . "', 
   
  gia='" . $giasanpham . "',  
  giakm='" . $giakhuyenmai . "',  
  chitietsanpham='" . $chitietsanpham . "',  
  thongsokythuat='" . $thongsokythuat . "',  
  sanphammoi='" . $sanphammoi . "',  
  ngaycapnhat='" . $ngay . "',  
  kiemduyet='" . $duyet . "',  
  tensanpham='" . $tensp . "' 
  WHERE ID_sanpham='$_GET[ID_sanpham]' ";


}


  $kq = mysqli_query( $conn, $sql );

  if ( !$kq ) {
    echo "<script>alert('Có lỗi ! Nhập lại!');</script>";
  } else {

    echo "<script>alert(' $tensp đã được sửa. ');window.location='main_sanpham.php';</script>";
    die();
  }


}

?>

<?php
require "layout/footer.php";


?>