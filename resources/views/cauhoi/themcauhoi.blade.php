<h2 align="center">Thêm Câu Hỏi</h2>
<form method="POST" action="{{ route('themcauhoi') }}" align="center">
    @csrf
    <div class="form-group">
        <label for="NoiDung">Nội Dung:</label>
        <input type="text" class="form-control" id="NoiDung" name="NoiDung">
    </div>
    <div class="form-group">
    <select name="LinhVuc_ID" class="form-control" >
                                @foreach($linhvuc as $lv)
                                    <option value="{{$lv->ID}}" class="text-danger" >{{$lv->Ten}}</option>
                                @endforeach
                                </select>
    </div>
    <div class="form-group">
        <label for="A">A:</label>
        <input type="text" class="form-control" id="A" name="A">
    </div>
    <div class="form-group">
        <label for="B">B:</label>
        <input type="text" class="form-control" id="B" name="B">
    </div>
    <div class="form-group">
        <label for="C">C:</label>
        <input type="text" class="form-control" id="C" name="C">
    </div>
    <div class="form-group">
        <label for="D">D:</label>
        <input type="text" class="form-control" id="D" name="D">
    </div>
    <div class="form-group">
        <label for="DapAn">Đáp Án:</label>
        <input type="text" class="form-control" id="DapAn" name="DapAn">
    </div>
    <div class="form-group">
        <label for="Diem">Điểm:</label>
        <input type="text" class="form-control" id="Diem" name="Diem">
    </div>
    <div class="form-group">
        <button style="cursor:pointer" type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>