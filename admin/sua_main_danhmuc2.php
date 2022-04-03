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
  str = f.tendanhmuc2.value;
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
        <div class="card-header"> <i class="fas fa-table me-1"></i> Danh sách danh mục cấp 2 </div>
        <div class="card-body">
          <form  method="post" >
            <figure>Thông tin danh mục 2</figure>
            <label>Tên danh mục 1</label>
            <?php
            include "../connect.php";
            if ( isset( $_GET[ 'ID_danhmuc2' ] ) ) {
              $ID_danhmuc2 = $_GET[ 'ID_danhmuc2' ];
              $query = mysqli_query( $conn, 'SELECT *FROM `danhmuc1` LEFT JOIN `danhmuc2` ON `danhmuc2`.`ID_danhmuc1` = `danhmuc1`.`ID_danhmuc1`WHERE ID_danhmuc2=' . $ID_danhmuc2 );
              //				$result = mysqli_query( $conn, $query );
              $row = mysqli_fetch_array( $query );
              $check = mysqli_query( $conn, 'SELECT DISTINCT *FROM danhmuc1' );

              echo '<select name="hienmenudanhmuc1" id="combobox" class="danhmuc2">';
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
            <label>Hiển thị trên menu</label>
            <?php
            include "../connect.php";
            if ( isset( $_GET[ 'ID_danhmuc2' ] ) ) {
              $ID_danhmuc2 = $_GET[ 'ID_danhmuc2' ];
              $query = 'SELECT *FROM `danhmuc1` LEFT JOIN `danhmuc2` ON `danhmuc2`.`ID_danhmuc1` = `danhmuc1`.`ID_danhmuc1`
	WHERE ID_danhmuc2=' . $ID_danhmuc2 . '';
              $result = mysqli_query( $conn, $query );
              foreach ( $result as $item ) {
                ?>
            <?php
            }
            }
            ?>
            <select name="hienthimenu" id="combobox" class="danhmuc2">
              <option value="1" <?php if ($item['visiblemenu2'] == '1') { echo 'selected'; } ?>> Hiển thị</option>
              <option value="0" <?php if ($item['visiblemenu2'] == '0') { echo 'selected'; } ?>> Ẩn</option>
            </select>
            <br/>
            <label>Tên danh mục 2</label>
            <input type="text" name="tendanhmuc2" value="<?= $item['tendanhmuc2'] ?>" class="danhmuc2" />
            <br/>
            <label>Keywork</label>
            <input type="text" name="Keywork" id="key" class="danhmuc2"  value="<?= $item['keyseo'] ?>" onClick="FillBilling(this.form)" readonly="readonly"/>
            <br/>
            <input type="submit" name="Luu" class="btn btn-success" value="Lưu" id="Luu"/>
            <?php


            if ( isset( $_POST[ 'Luu' ] ) ) {

              if ( isset( $_GET[ 'ID_danhmuc2' ] ) ) {
                $ID_danhmuc2 = $_GET[ 'ID_danhmuc2' ];
              }

              if ( isset( $_POST[ "hienmenudanhmuc1" ] ) ) {
                $hienmenudanhmuc1 = $_POST[ 'hienmenudanhmuc1' ];

              }

              if ( isset( $_POST[ "hienthimenu" ] ) ) {
                $hienthimenu = $_POST[ 'hienthimenu' ];
              }
              if ( isset( $_POST[ "tendanhmuc2" ] ) ) {
                $tendanhmuc2 = $_POST[ 'tendanhmuc2' ];
              }
              if ( isset( $_POST[ "Keywork" ] ) ) {
                $Keywork = $_POST[ 'Keywork' ];
              }

              if ( !$hienmenudanhmuc1 || !$hienthimenu || !$tendanhmuc2 || !$Keywork ) {


                echo "<script>alert('Vui lòng nhập đầy đủ Thông tin. ');window.location='sua_main_danhmuc2.php?ID_danhmuc2= $ID_danhmuc2';</script>";
                exit;
              }


              $sql_sanpham = "UPDATE `danhmuc2` SET ID_danhmuc1='" . $hienmenudanhmuc1 . "', tendanhmuc2='" . $tendanhmuc2 . "', visiblemenu2='" . $hienthimenu . "',  keyseo='" . $Keywork . "' WHERE ID_danhmuc2='$_GET[ID_danhmuc2]' ";
              $kq_1 = mysqli_query( $conn, $sql_sanpham );
              $sql = "UPDATE `sanpham` SET ID_danhmuc1='" . $hienmenudanhmuc1 . "', ID_danhmuc2='" . $ID_danhmuc2 . "' WHERE ID_danhmuc2='$_GET[ID_danhmuc2]'  ";

              $kq = mysqli_query( $conn, $sql );

              if ( !$kq && !$kq_1 ) {
                echo "<script>alert('Có lỗi ! Nhập lại!');</script>";
              } else {

                echo "<script>alert(' $tendanhmuc2 đã được sửa vào danh mục . ');window.location='main_danhmuc2.php';</script>";
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