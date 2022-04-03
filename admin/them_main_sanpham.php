<?php
include "../connect.php";

$sql = 'SELECT * FROM danhmuc2';

$result = mysqli_query( $conn, $sql );


?>
<style>
a#sua {
    color: white;
}</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
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
                    Danh sách sản phẩm
                </div>
                <div class="card-body">
					
					<?php
					$country ='';
        $query = 'SELECT * FROM `danhmuc1`;';
        $result = mysqli_query( $conn, $query );
        while($row = mysqli_fetch_array($result))
		{
			$country .= '<option value="'.$row["ID_danhmuc1"].'">'.$row["tendanhmuc1"].'</option>';
        
        }
        ?>
					
 <form action="themxoasuaadmin/themsanpham.php" method="post" enctype="multipart/form-data" >
	 
      <figure>Thông tin sản phảm</figure>
      <label>Tên danh mục 1</label>
     <select name="hienmenudanhmuc1" id="danhmuc1" class="danhmuc2">
		  <option value="" selected>-- Chọn loại --</option>
    <?php 
			    			$query = "SELECT * FROM danhmuc1";
			    			$result = mysqli_query( $conn, $query );
			    			if (mysqli_num_rows($result) > 0) {
			    				while ($row = mysqli_fetch_assoc($result)) {
			    					echo "<option value='{$row["ID_danhmuc1"]}'>{$row['tendanhmuc1']}</option>";
			    				}
			    			}else{
			    				echo "<option value=''>Category not available</option>"; 
			    			}
			    		?>
      </select>
      <br/>
			<label>Tên danh mục 2</label>	  		
     <select name="hienmenudanhmuc2" id="danhmuc2" class="danhmuc2">
		 
	 
	 </select>
	 
      <br/>
      <label>Tên sản phẩm</label>
	 
      <input type="text" name="tensp"  class="danhmuc2" />
      <br/>
      <label>Hình sản phẩm</label>
      <input type="file" name="hinhsanpham"  class="danhmuc2" />
      <br/>
      <label>Giá sản phẩm</label>
		<input type="text" name="giasanpham"  class="danhmuc2" />
      <br/>
      <label>Giá khuyến mãi</label>
		<input type="text" name="giakhuyenmai"  class="danhmuc2" />
      <br/>
      <label>Chi tiết sản phẩm</label>
	<textarea name="chitietsanpham" rows="10" width="100%" style="resize: none"></textarea>
      <br/>
      <label>Thông số kỹ thuật</label>
	<textarea name="thongsokythuat" rows="10" width="100%" style="resize: none"></textarea>
      <br/>
      <label>sản phẩm mới</label>
	<input  type="checkbox" name="sanphammoi" value="1"  class="danhmuc2" />
      <br/>
      <label>Ngày</label>
	<input type="date" name="ngay" value=""  class="danhmuc2" />
      <br/>
      <label>Duyệt</label>
					   
					   <select name="duyet">
					   <option value="1">Kích hoạt</option>
		  <option value="0">Ẩn</option>
					   </select>
					   <br>
      <input type="submit" name="them" class="btn btn-success" value="Thêm" id="them"/>
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
    require "layout/footer.php";

		
			
			
?>