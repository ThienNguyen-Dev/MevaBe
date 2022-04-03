<?php
include "../connect.php";

$sql = 'SELECT * FROM danhmuc1';

$result = mysqli_query( $conn, $sql );


?>
<style>
a#sua {
    color: white;
}
</style>
<script type="text/javascript">
<!--
function FillBilling(f) {
  //if(f.billingtoo.checked == true) {
  str = f.tendanhmuc1.value;
  str= str.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g,"a");  
  str= str.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g,"e");  
  str= str.replace(/ì|í|ị|ỉ|ĩ/g,"i");  
  str= str.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g,"o");  
  str= str.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g,"u");  
  str= str.replace(/ỳ|ý|ỵ|ỷ|ỹ/g,"y");  
  str= str.replace(/đ/g,"d"); 
  str= str.replace(/Đ/g,"D");
  str= str.replace(/Â/g,"A"); 
  str= str.replace(/!|@|%|\^|\*|\(|\)|\+|\=|\<|\>|\?|\/|,|\.|\:|\;|\'| |\"|\&|\#|\[|\]|~|$|_/g,"-"); 
/* tìm và thay thế các kí tự đặc biệt trong chuỗi sang kí tự - */ 
  str= str.replace(/-+-/g,"-"); //thay thế 2- thành 1- 
  str= str.replace(/^\-+|\-+$/g,"");
  
    f.Keywork.value = str;
    //f.keyword.value = f.tieudetin.value;
  //}
}
function FillBilling1(f) {
  //if(f.billingtoo.checked == true) {
  str = f.tieudetin_CN.value;
  str= str.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g,"a");  
  str= str.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g,"e");  
  str= str.replace(/ì|í|ị|ỉ|ĩ/g,"i");  
  str= str.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g,"o");  
  str= str.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g,"u");  
  str= str.replace(/ỳ|ý|ỵ|ỷ|ỹ/g,"y");  
  str= str.replace(/đ/g,"d");  
  str= str.replace(/!|@|%|\^|\*|\(|\)|\+|\=|\<|\>|\?|\/|,|\.|\:|\;|\'| |\"|\&|\#|\[|\]|~|$|_/g,"-"); 
/* tìm và thay thế các kí tự đặc biệt trong chuỗi sang kí tự - */ 
  str= str.replace(/-+-/g,"-"); //thay thế 2- thành 1- 
  str= str.replace(/^\-+|\-+$/g,"");
  
    f.keyword_CN.value = str;
    //f.keyword.value = f.tieudetin.value;
  //}
}
// -->
</script>
<?php
require "layout/header.php";

require "layout/menu.php";
?>

<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid px-4">
      <div class="card mb-4">
        <div class="card-header"> <i class="fas fa-table me-1"></i> Danh sách danh mục cấp 1 </div>
        <div class="card-body">
          <form  method="post" >
            <figure>Thông tin danh mục</figure>
            <label>Tên danh mục</label>
            <?php
            if ( isset( $_GET[ 'ID_danhmuc1' ] ) ) {
              $ID_danhmuc1 = $_GET[ 'ID_danhmuc1' ];
              $query = 'SELECT * FROM danhmuc1 WHERE ID_danhmuc1=' . $ID_danhmuc1 . '';
              $result = mysqli_query( $conn, $query );
              foreach ( $result as $item ) {

                ?>
            <?php
            }
            }
            ?>
            <input type="text" name="tendanhmuc1" class="danhmuc1" value="<?= $item['tendanhmuc1'] ?>"/>
            <br/>
            <label>Hiển thị trên menu</label>
            <select name="hienthimenu" id="combobox" class="danhmuc1">
				<option value="1" <?php if ($item['visiblemenu1'] == '1') { echo 'selected'; } ?>>
				  Hiển thị</option>
              <option value="0" <?php if ($item['visiblemenu1'] == '0') { echo 'selected'; } ?>		>Ẩn</option>
            </select>
            <br/>
            <label>Hiển thị dưới ô sản phẩm</label>
            <select name="hienthisanpham" id="combobox" class="danhmuc1">
            
				<option value="1" <?php if ($item['visible1'] == '1') { echo 'selected'; } ?>> Hiển thị</option>
              <option value="0" <?php if ($item['visible1'] == '0') { echo 'selected'; } ?>> Ẩn</option>
            </select>
            <br/>
            <label>Keywork</label>
            <input type="text" name="Keywork" id="key" class="danhmuc1" onClick="FillBilling(this.form)" value="<?= $item['keyword'] ?>" readonly="readonly"/>
            <br/>
            <input type="submit" name="Luu" class="btn btn-success" value="Lưu" id="Luu"/>
            <?php


            if ( isset( $_POST[ 'Luu' ] ) ) {

              if ( isset( $_GET[ 'ID_danhmuc1' ] ) ) {
                $ID_danhmuc1 = $_GET[ 'ID_danhmuc1' ];
              }

              if ( isset( $_POST[ "hienthimenu" ] ) ) {
                $hienthimenu = $_POST[ 'hienthimenu' ];
              }

              if ( isset( $_POST[ "hienthisanpham" ] ) ) {
                $hienthisanpham = $_POST[ 'hienthisanpham' ];
              }
              if ( isset( $_POST[ "Keywork" ] ) ) {
                $Keywork = $_POST[ 'Keywork' ];
              }
              if ( isset( $_POST[ "tendanhmuc1" ] ) ) {
                $tendanhmuc1 = $_POST[ 'tendanhmuc1' ];
              }

              if (  !$tendanhmuc1 || !$Keywork ) {


                echo "<script>alert('Vui lòng nhập đầy đủ Thông tin. ');window.location='sua_main_danhmuc1.php';</script>";
                exit;
              }


              $sql = "UPDATE `danhmuc1` SET ID_danhmuc1='" . $ID_danhmuc1 . "', tendanhmuc1='" . $tendanhmuc1 . "',visiblemenu1='" . $hienthimenu . "', visible1='" . $hienthisanpham . "',  keyword='" . $Keywork . "' WHERE ID_danhmuc1='$_GET[ID_danhmuc1]' ";


              $kq = mysqli_query( $conn, $sql );

              if ( !$kq ) {
                echo "<script>alert('Có lỗi ! Nhập lại!');</script>";
              } else {

                echo "<script>alert(' $tendanhmuc1 đã được sửa. ');window.location='main_danhmuc1.php';</script>";
                die();
              }


            }

            ?>
          </form>
        </div>
      </div>
    </div>
  </main>
</div>
<?php
require "layout/footer.php";
?>