<div class="main">
  <h2>Chuyến xe</h2>
  <div class="d-flex justify-content-end">
                    <a href="index.php?act=chuyenxe_add" class="btn btn-primary mb-2">Thêm chuyến</a>
                </div>
  <!-- <form action="index.php?act=sanpham_add" method="POST">
    <select name="matuyen" id="">
        <option value="0">Chọn danh mục</option>
        <?php
            if(isset($dsdm)){
                foreach ($dsdm as $dm) {
                    echo'<option value="'.$dm['matuyen'].'">'.$dm['tentuyen'].'</option>';
                }
            }
        ?>
    </select>
    <input type="text" name="tentuyen" id="tentuyen" placeholder="Tên tuyến" required>
    <div class="form-group">
      <div class="form-row">
        <div class="col-sm-2">
          <label for="ngaykhoihanh" class="col-form-label">Ngày khởi hành</label>
        </div>
        <div class="col-sm-10">
          <input type="date" name="ngaykhoihanh" id="ngaykhoihanh" placeholder="Ngày khởi hành" required>
        </div>
      </div>
    </div>
    <div class="form-group">
      <div class="form-row">
        <div class="col-sm-2">
          <label for="giokhoihanh" class="col-form-label">Giờ khởi hành</label>
        </div>
        <div class="col-sm-10">
          <input type="time" name="giokhoihanh" id="giokhoihanh" placeholder="Giờ khởi hành" required>
        </div>
      </div>
    </div>
    <div class="form-group">
      <div class="form-row">
        <div class="col-sm-2">
          <label for="diemdi" class="col-form-label">Điểm đi</label>
        </div>
        <div class="col-sm-10">
          <input type="text" name="diemdi" id="diemdi" placeholder="Điểm đi" required>
        </div>
      </div>
    </div>
    <div class="form-group">
      <div class="form-row">
        <div class="col-sm-2">
          <label for="diemden" class="col-form-label">Điểm đến</label>
        </div>
        <div class="col-sm-10">
          <input type="text" name="diemden" id="diemden" placeholder="Điểm đến" required>
        </div>
      </div>
    </div>
    <div class="form-group">
      <div class="form-row">
        <div class="col-sm-2">
          <label for="banggia" class="col-form-label">Bảng giá</label>
        </div>
        <div class="col-sm-10">
          <input type="number" name="banggia" id="banggia" placeholder="Bảng giá" required>
        </div>
      </div>
    </div>
    <div class="form-group text-center">
      <button type="submit" name="themmoi" value="Thêm mới" class="btn btn-primary">Thêm mới</button>
    </div>
  </form> -->
  <br>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Mã chuyến xe</th>
        <th>Mã tuyến</th>
        <th>Tên tuyến</th>
        <th>Ngày khởi hành</th>
        <th>Giờ khởi hành</th>
        <th>Điểm đi</th>
        <th>Điểm đến</th>
        <th>Bảng giá</th>
        <th>Hành động</th>
      </tr>
    </thead>
    <tbody>
      <?php
      if (isset($kq) && count($kq) > 0) {
        foreach ($kq as $dm) {
          echo '
          <tr>
            <td>' . $dm['machuyenxe'] . '</td>
            <td>' . $dm['matuyen'] . '</td>
            <td>' . $dm['tentuyen'] . '</td>
            <td>' . $dm['ngaykhoihanh'] . '</td>
            <td>' . $dm['giokhoihanh'] . '</td>
            <td>' . $dm['diemdi'] . '</td>
            <td>' . $dm['diemden'] . '</td>
            <td>' . $dm['banggia'] . '</td>
            <td>
              <a href="index.php?act=updateformsp&id=' . $dm['matuyen'] . '" class="btn btn-info">Sửa</a>
              <a href="index.php?act=delsp&id=' . $dm['machuyenxe'] . '" class="btn btn-danger">Xóa</a>
            </td>
          </tr>';
        }
      }
      ?>
    </tbody>
  </table>
</div>