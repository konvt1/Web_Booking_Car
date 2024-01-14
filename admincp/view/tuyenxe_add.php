<form action="index.php?act=tuyenxe_add" method="POST">
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="tentuyen">Tên tuyến</label>
        <input type="text" name="tentuyen" id="tentuyen" placeholder="Tên tuyến" required>
      </div>
      <div class="form-group col-md-6">
        <label for="diemdau">Điểm đậu</label>
        <input type="text" name="diemdau" id="diemdau" placeholder="Điểm đậu" required>
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="thoigian">Thời gian</label>
        <input type="time" name="thoigian" id="thoigian" placeholder="Thời gian" required>
      </div>
      <div class="form-group col-md-6 text-right">
        <button type="submit" name="themmoi" value="Thêm mới" class="btn btn-primary">Thêm mới</button>
      </div>
    </div>
  </form>