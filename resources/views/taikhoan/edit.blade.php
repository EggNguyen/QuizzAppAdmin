<form action="/taikhoan/update/{{ $taikhoan->ID }}" method="post" align="center">
        @csrf
        <label for="TenTaiKhoan">
        Tên Tài Khoản
            <input type="text" name="TenTaiKhoan" value="{{$taikhoan->TenTaiKhoan}}">
        </label><br><br>
        <label for="Email">
        Email
            <input type="text" name="Email" value="{{$taikhoan->Email}}">
        </label><br><br><label for="Credit">
        Credit
            <input type="text" name="Credit" value="{{$taikhoan->Credit}}">
        </label><br><br>
        Điểm
            <input type="text" name="Diem" value="{{$taikhoan->Diem}}">
        </label><br><br>
        <button type="submit">Cập Nhật</button>
    </form>