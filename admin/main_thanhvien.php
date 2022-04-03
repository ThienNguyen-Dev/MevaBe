<?php
include "../connect.php";

$sql = 'SELECT * FROM thanhvien';

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
        <div class="card-header">  Danh sách thành viên </div>
        <div class="card-body">
          <form action="them_main_sanpham.php" method="post"  >
            <!-- <input type="submit" name="Them" class="btn btn-success" value="Thêm" id="them" style="margin-bottom:20px;"/> -->
          </form>
          <table id="datatablesSimple">
            <thead>
              <tr>
                <th style="text-align: center;" width="50">ID thành viên</th>
                <th style="text-align: center;" width="100">Username</th>
                <th style="text-align: center;" width="100">Password</th>
                <th style="text-align: center;" width="250">Họ tên</th>
                <th style="text-align: center;" width="270">Địa chỉ</th>
                <th style="text-align: center;" width="150">Điện thoại</th>
                <th style="text-align: center;" width="150">Email</th>
                <th style="text-align: center;" width="150">Ngày đăng ký</th>
				        <th style="text-align: center;">Xóa</th>
              </tr>
            </thead>
            <tbody>
            <?php
                foreach ( $result as $key => $value ) {
            ?>
                <tr>
					
                    <td style="text-align: center;"><?= $value['ID_thanhvien'] ?></td>
                    <td><?= $value['username'] ?></td>
                    <td><?= $value['password'] ?></td>
                    <td><?= $value['hoten'] ?></td>
                    <td><?= $value['diachi'] ?></td>
                    <td><?= $value['dienthoai'] ?></td>
                    <td><?= $value['email'] ?></td>
                    <td><?= $value['ngaydangky'] ?></td>
					 <!-- Button Sửa --> 
                    <td style="text-align: center;">   
                      <!-- Button Xóa --> 
                      <a href="#" id="xoa" class="btn btn-danger"> Xóa </a></td>
                    </td>
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