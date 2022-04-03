<?php
include "../connect.php";

$sql = 'SELECT * FROM danhmuc2';

$result = mysqli_query( $conn, $sql );


?>
<style>
a#sua {
    color: white;
}</style>
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
                <div class="card-header">
					
                    <i class="fas fa-table me-1"></i>
                    Danh sách danh mục cấp 2
                </div>
                <div class="card-body">
					
                   <form action="themxoasuaadmin/themdanhmuc2.php" method="post" id="form_danhmuc1">
      <figure>Thông tin danh mục 2</figure>
      <label>Tên danh mục 1</label>
     <select name="hienmenudanhmuc1" id="combobox" class="danhmuc2">
		  <option value="" selected>-- Chọn loại --</option>
        <?php

        $query = 'SELECT * FROM `danhmuc1`;';
        $result = mysqli_query( $conn, $query );
        foreach ( $result as $item ) {

          ?>
        <option class="danhmuc2" value="<?php echo $item['ID_danhmuc1'] ?>"><?php echo $item['tendanhmuc1'] ?></option>
        <?php
        }
        ?>
      </select>
      <br/>
      <label>Hiển thị trên menu</label>
     <select name="hienthimenu" id="combobox" class="danhmuc2">
        <option class="anhien" class="danhmuc2" value="1">
        
        
        
        
        
        
        Hiển thị
        
        
        
        
        
        
        </option>
        <option class="anhien" class="danhmuc2" value="2">
        
        
        
        
        
        
        Ẩn
        
        
        
        
        
        
        </option>
      </select>
      <br/>
      <label>Tên danh mục 2</label>
      <input type="text" name="tendanhmuc2"  class="danhmuc2" />
      <br/>
      <label>Keywork</label>
      <input type="text" name="Keywork" id="key" class="danhmuc2" onClick="FillBilling(this.form)" readonly="readonly"/>
      <br/>
      <input type="submit" name="Them" class="btn btn-success" value="Thêm" id="them"/>
    </form>
                </div>
            </div>
        </div>
    </main>
</div>


<?php
    require "layout/footer.php";
?>