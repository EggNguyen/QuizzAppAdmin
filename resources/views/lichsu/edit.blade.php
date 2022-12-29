<form action="/lichsu/update/{{ $lichsu->ID }}" method="post" align="center">
        @csrf
        <label for="SoCauDung">
        Số Câu Đúng
            <input type="number" name="SoCauDung" value="{{$lichsu->SoCauDung}}">
        </label><br><br>
        <label for="TongDiem">
        Tổng Điểm
            <input type="number" name="TongDiem" value="{{$lichsu->TongDiem}}">
        </label><br><br>
        <label for="NgayChoi">
        Ngày Chơi
            <input type="date" name="NgayChoi" value="{{$lichsu->NgayChoi}}">
        </label><br><br>
        <button type="submit">Cập Nhật</button>
    </form>