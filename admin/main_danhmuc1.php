<?php
include "../connect.php";

$sql = 'SELECT * FROM danhmuc1';

$result = mysqli_query( $conn, $sql );


?>
<style>
a#sua {
    color: white;
}</style>
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
                    Danh sách danh mục cấp 1
                </div>
                <div class="card-body">
					<form action="them_main_danhmuc1.php" method="post"  ><input type="submit" name="Them" class="btn btn-success" value="Thêm" id="them"/></form>
                    <table id="datatablesSimple">
						
                        <thead>
                            <tr>
                                <th>ID danh mục 1</th>
                                <th>Tên danh mục 1</th>
                                <th>Hiển thị Menu</th>
                                <th>Hển thị sản phẩm</th>
                                <th>Keywork</th>
                                <th>Xóa/Sửa</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                        <?php
                            foreach ( $result as $key => $value ) {
                        ?>
                            <tr>
								
                                <td style="text-align: center;"><?= $value['ID_danhmuc1'] ?></td>
                                <td><?= $value['tendanhmuc1'] ?></td>
                                <td style="text-align: center;"><?= $value['visiblemenu1']==1 ? "Hiển thị":"Ẩn"; ?></td>
                                <td style="text-align: center;"><?= $value['visible1']==1 ? "Hiển thị":"Ẩn"; ?></td>
                                <td><?= $value['keyword'] ?></td>
								 <!-- Button Sửa --> 
                                <td style="text-align: center;"><a  id="sua" href="sua_main_danhmuc1.php?ID_danhmuc1=<?php echo $value['ID_danhmuc1']; ?>"  onclick="openForm()" class="btn btn-primary"  >Sửa </a>
                                   
              
                                        <!-- Button Xóa --> 
                                    <a href="themxoasuaadmin/xoadanhmuc1.php?ID_danhmuc1=<?php echo $value['ID_danhmuc1']; ?>" id="xoa" class="btn btn-danger"> Xóa </a></td></td>
                            </tr>
                            <?php
                            }   ?>
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