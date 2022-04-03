<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./main.css">
    <title>Đăng nhập</title>
</head>
	<style>
	.link {
    float: right;
    font-size: 13px;
}
a {
    text-decoration: none;
	color: #3994b7;
}
	</style>
<body>
    <div class="main">
        <form action="xulylogin.php" method="POST" class="form" id="form-2">
            <h3 class="heading">Đăng nhập</h3>
            <p class="desc">Đăng nhập để mua hàng thôi nào❤️</p>
      
            <div class="spacer"></div>
      
            <div class="form-group">
              <label for="email" class="form-label">Tài khoản</label>
              <input id="email" name="username" type="text" placeholder="VD: abcd@gmail.com" class="form-control">
              <span class="form-message"></span>
            </div>
      
            <div class="form-group">
              <label for="password" class="form-label">Mật khẩu</label>
              <input id="password" name="password" type="password" placeholder="Nhập mật khẩu" class="form-control">
              <span class="form-message"></span>
            </div>
            <div class="link"><a href="dangky.php">Chưa có tài khoản?</a></div>
            <input type="submit" name="dangnhap" class="form-submit" value="Đăng nhập"/>
          </form>
    </div>

    
</body>
</html>