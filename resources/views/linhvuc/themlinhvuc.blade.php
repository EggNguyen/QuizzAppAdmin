
<h2 align="center">Thêm Lĩnh Vực</h2>
<form method="POST" action="{{ route('themlinhvuc') }}" align="center">
    @csrf
    <div class="form-group">
        <label for="Ten">Tên lĩnh vực:</label>
        <input type="text" class="form-control" id="Ten" name="Ten">
    </div>

    <div class="form-group">
        <button style="cursor:pointer" type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
