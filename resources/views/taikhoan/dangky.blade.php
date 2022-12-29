
<h2>Đăng Ký</h2>
<form method="POST" action="{{ route('dangky') }}">
    @csrf
    <div class="form-group">
        <label for="TenTaiKhoan">Tên tài khoản:</label>
        <input type="text" class="form-control" id="TenTaiKhoan" name="TenTaiKhoan">
    </div>

    <div class="form-group">
        <label for="Email">Email:</label>
        <input type="email" class="form-control" id="Email" name="Email">
    </div>

    <div class="form-group">
        <label for="MatKhau">Mật Khẩu:</label>
        <input type="password" class="form-control" id="MatKhau" name="MatKhau">
    </div>
    <div class="form-group">
        <label for="VaiTro">Vai Trò:</label>
        <select id="VaiTro" name="VaiTro">
            <option value="0">Admin</option>
            <option value="1">Người Chơi</option>
        </select>
    </div>
    <div class="form-group">
        <button style="cursor:pointer" type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
