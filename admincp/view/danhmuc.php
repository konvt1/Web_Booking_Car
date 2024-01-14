<div class="main">
  <h2>Tuyến xe</h2>
  <div class="d-flex justify-content-end">
                    <a href="index.php?act=tuyenxe_add" class="btn btn-primary mb-2">Thêm chuyến</a>
                </div>
  <!-- <form action="index.php?act=addtuyenxe" method="POST">
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
  </form> -->
  <br>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Mã tuyến</th>
        <th>Tên tuyến</th>
        <th>Điểm đậu</th>
        <th>Thời gian</th>
        <th>Hành động</th>
      </tr>
    </thead>
    <tbody>
      <?php
      if (isset($kq) && count($kq) > 0) {
        foreach ($kq as $dm) {
          echo '
          <tr>
            <td>' . $dm['matuyen'] . '</td>
            <td>' . $dm['tentuyen'] . '</td>
            <td>' . $dm['diemdau'] . '</td>
            <td>' . $dm['thoigian'] . '</td>
            <td>
              <a href="index.php?act=updateform&id=' . $dm['matuyen'] . '" class="btn btn-info">Sửa</a>
              <a href="index.php?act=deldm&id=' . $dm['matuyen'] . '" class="btn btn-danger">Xóa</a>
            </td>
          </tr>';
        }
      }
      ?>
    </tbody>
  </table>
</div>