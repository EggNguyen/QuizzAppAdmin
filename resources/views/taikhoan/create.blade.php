
<form action="/taikhoan/create" method="post" align="center">
        @csrf
        <label for="TenTaiKhoan">
        Tên Tài Khoản
            <input type="text" name="TenTaiKhoan">
        </label><br><br>
        <label for="MatKhau">
        Mật Khẩu
            <input type="text" name="MatKhau">
        </label><br><br>
        <label for="Sdt">
        Số Điện Thoại
            <input type="text" name="Sdt">
        </label><br><br>
        <label for="VaiTro">
        Vai Trò
            <select name="VaiTro">
                <option value="0">Admin</option>
                <option value="1">Người Chơi</option>
            </select>
        </label><br><br>
        <button type="submit">Tạo Tài Khoản</button>
    </form>
