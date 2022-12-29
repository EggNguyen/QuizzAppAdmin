<form action="/cauhoi/update/{{ $cauhoi->ID }}" method="post" align="center">
        @csrf
        <label for="NoiDung">
        Tên Tài Khoản
            <input type="text" name="NoiDung" value="{{$cauhoi->NoiDung}}">
        </label><br><br>
        <select name="LinhVuc_ID"  class="form-control" >
                                @foreach($linhvuc as $lv)                
                                    <option value="{{$lv->ID}}" @if($lv->ID==old('linhvuc', $cauhoiall->LinhVuc_ID)) selected @endif class="text-danger" >{{$lv->Ten}}</option>
                                @endforeach
                                </select><br><br>
        <label for="A">
        A
            <input type="text" name="A" value="{{$cauhoi->A}}">
        </label><br><br><label for="B">
        B
            <input type="text" name="B" value="{{$cauhoi->B}}">
        </label><br><br>
        C
            <input type="text" name="C" value="{{$cauhoi->C}}">
        </label><br><br>
        D
            <input type="text" name="D" value="{{$cauhoi->D}}">
        </label><br><br>
        Đáp Án
            <input type="text" name="DapAn" value="{{$cauhoi->DapAn}}">
        </label><br><br>
        Điểm
            <input type="number" name="Diem" value="{{$cauhoi->Diem}}">
        </label><br><br>
        <button type="submit">Cập Nhật</button>
    </form>