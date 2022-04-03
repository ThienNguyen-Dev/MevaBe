<?php
    require "layout/header.php";
   
    require "layout/menu.php";
?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Thông tin hệ thống</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Hệ thống</li>
            </ol>
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-primary text-white mb-4">
                        <div class="card-body">Khách hàng</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#">Hiển thị</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-warning text-white mb-4">
                        <div class="card-body">Đơn hàng</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#">Hiển thị</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-success text-white mb-4">
                        <div class="card-body">Phản hồi</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#">Hiển thị</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-danger text-white mb-4">
                        <div class="card-body">Doanh thu</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#">Hiển thị</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6">
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-chart-area me-1"></i>
                            Biểu đồ doanh thu tháng
                        </div>
                        <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-chart-bar me-1"></i>
                            Biểu đồ đơn hàng tuần
                        </div>
                        <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                    </div>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Quản lý nhân viên
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>Tên nhân viên</th>
                                <th>Email</th>
                                <th>Điện thoại</th>
                                <th>phân quyền</th>
                                <th>Sửa</th>
                                <th>Xóa</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Tên nhân viên</th>
                                <th>Email</th>
                                <th>Điện thoại</th>
                                <th>phân quyền</th>
                                <th>Sửa</th>
                                <th>Xóa</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr>
                                <td>Nguyễn Huỳnh Như</td>
                                <td>huynhnhu@gmail.com</td>
                                <td>0123456789</td>
                                <td><a href="#">Phân quyền</a></td>
                                <td><a href="#">Sửa</a></td>
                                <td><a href="#">Xóa</a></td>
                            </tr>
                            <tr>
                                <td>Nguyễn Ý</td>
                                <td>ynhu@gmail.com</td>
                                <td>0123456789</td>
                                <td><a href="#">Phân quyền</a></td>
                                <td><a href="#">Sửa</a></td>
                                <td><a href="#">Xóa</a></td>
                            </tr>
                            <tr>
                                <td>Nhi Trương</td>
                                <td>nhitruong@gmail.com</td>
                                <td>0123456789</td>
                                <td><a href="#">Phân quyền</a></td>
                                <td><a href="#">Sửa</a></td>
                                <td><a href="#">Xóa</a></td>
                            </tr>
                            <tr>
                                <td>Phan Tuyền</td>
                                <td>phantuyen@gmail.com</td>
                                <td>0123456789</td>
                                <td><a href="#">Phân quyền</a></td>
                                <td><a href="#">Sửa</a></td>
                                <td><a href="#">Xóa</a></td>
                            </tr>
                            <tr>
                                <td>Vũ Hông Thiên</td>
                                <td>vuhongthien@gmail.com</td>
                                <td>0123456789</td>
                                <td><a href="#">Phân quyền</a></td>
                                <td><a href="#">Sửa</a></td>
                                <td><a href="#">Xóa</a></td>
                            </tr>
                            <tr>
                                <td>Dev Thiên</td>
                                <td>devthien@gmail.com</td>
                                <td>0123456789</td>
                                <td><a href="#">Phân quyền</a></td>
                                <td><a href="#">Sửa</a></td>
                                <td><a href="#">Xóa</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
<?php
    require "layout/footer.php";
?>