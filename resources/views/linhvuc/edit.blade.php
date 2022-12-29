<form action="/linhvuc/update/{{ $linhvuc->ID }}" method="post" align="center">
        @csrf
        <label for="Ten">
        Tên Lĩnh Vực
            <input type="text" name="Ten" value="{{$linhvuc->Ten}}">
        </label><br><br>
        <button type="submit">Cập Nhật</button>
    </form>