<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
</head>

<body>
    <form action="{{route('admin_login')}}" method="post">
        @csrf
        <label>Tên tài khoản</label> <input type="text" name="TenTaiKhoan"><br>
        <label>Mật khẩu</label> <input type="password" name="MatKhau"><br>
        <input type="submit">

    </form>
</body>

</html>