<form action="/taikhoan/update/{{ $taikhoan->ID }}" method="post">
        @csrf
        <input type="hidden" name="ID" value="{{ $taikhoan->ID }}">
        <label for="Sdt">
        Số Điện Thoại
            <input type="text" name="Sdt" value="{{$taikhoan->Sdt}}">
        </label><br><br>
        <button type="submit">Cập Nhật</button>
    </form>