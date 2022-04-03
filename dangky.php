<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./main.css">
    <title>Đăng ký</title>

</head>

<body>
  <div class="main">

    <form action="" method="POST" class="form" id="form-1">
      <h3 class="heading">Thành viên đăng ký</h3>
      <p class="desc">Hãy đăng ký trước khi mua hàng nhé ❤️</p>

      <div class="spacer"></div>

      <div class="form-group">
        <label for="fullname" class="form-label">Tên đầy đủ</label>
        <input id="fullname" name="fullname" type="text" placeholder="VD: Nguyễn Văn A" class="form-control">
        <span class="form-message"></span>
      </div>

      <div class="form-group">
        <label for="email" class="form-label">Email</label>
        <input id="email" name="email" type="text" placeholder="VD: abcd@gmail.com" class="form-control">
        <span class="form-message"></span>
      </div>

      <div class="form-group">
        <label for="password" class="form-label">Mật khẩu</label>
        <input id="password" name="password" type="password" placeholder="Nhập mật khẩu" class="form-control">
        <span class="form-message"></span>
      </div>

      <div class="form-group">
        <label for="password_confirmation" class="form-label">Nhập lại mật khẩu</label>
        <input id="password_confirmation" name="password_confirmation" placeholder="Nhập lại mật khẩu" type="password" class="form-control">
        <span class="form-message"></span>
      </div>

      <button class="form-submit">Đăng ký</button>
    </form>



  </div>

  <script src="./validator.js"></script>
  
  <script>

    document.addEventListener('DOMContentLoaded', function () {
      // Mong muốn của chúng ta
      Validator({
        form: '#form-1',
        formGroupSelector: '.form-group',
        errorSelector: '.form-message',
        rules: [
          Validator.isRequired('#fullname', 'Vui lòng nhập tên đầy đủ của bạn'),
          Validator.isEmail('#email'),
          Validator.minLength('#password', 6),
          Validator.isRequired('#password_confirmation'),
          Validator.isConfirmed('#password_confirmation', function () {
            return document.querySelector('#form-1 #password').value;
          }, 'Mật khẩu nhập lại không chính xác')
        ],
        onSubmit: function (data) {
          // Call API
          console.log(data);
        }
      });
    });

  </script>
</body>
</html>