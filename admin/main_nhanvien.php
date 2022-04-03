<?php
include "../connect.php";

$sql = 'SELECT * FROM `admin`';

$result = mysqli_query( $conn, $sql );


?>


<?php
require "layout/header.php";

require "layout/menu.php";
?>

<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid px-4">
      <div class="card mb-4">
        <div class="card-header">  Danh sách nhân viên </div>
        <div class="card-body">
          <form action="them_main_sanpham.php" method="post"  >
            <input type="submit" name="Them" class="btn btn-success" value="Thêm nhân viên" id="them" style="margin-bottom:20px;"/>
          </form>
          <table id="datatablesSimple">
            <thead>
              <tr>
                <th style="text-align: center;" width="50">ID nhân viên</th>
                <th style="text-align: center;" width="150">Username</th>
                <th style="text-align: center;" width="250">Họ tên</th>
                <th style="text-align: center;" width="150">Điện thoại</th>
                <th style="text-align: center;" width="150">Email</th>
                <th style="text-align: center;" width="150">Ngày tham gia</th>
                <th style="text-align: center;" width="150">Phân quyền</th>
				        <th style="text-align: center;" >Xóa/sửa</th>
              </tr>
            </thead>
            <tbody>
            <?php
                foreach ( $result as $key => $value ) {
            ?>
                <tr>
					
                    <td style="text-align: center;"><?= $value['id'] ?></td>
                    <td><?= $value['username'] ?></td>
                    <td><?= $value['hoten'] ?></td>
                    <td><?= $value['dienthoai'] ?></td>
                    <td><?= $value['email'] ?></td>
                    <td><?= $value['ngaythamgia'] ?></td>
                    <!-- Button Phân quyền -->
                    <td style="text-align: center;"><a  id="quyen" href="#"  onclick="openForm()" class="btn btn-success"  >Phân quyền </a></td>
                    
					 <!-- Button Sửa --> 
                    <td style="text-align: center;"><a  id="sua" href="#"  onclick="openForm()" class="btn btn-primary"  >Sửa </a>
                       
    
                            <!-- Button Xóa --> 
                        <a href="#" id="xoa" class="btn btn-danger"> Xóa </a></td></td>
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