<!-- <form action="index.php?act=chuyenxe_add" method="POST">
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

  <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        form {
            max-width: 400px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input, select {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-top: 5px;
            font-size: 14px;
        }

        button {
            background-color: #007bff;
            color: #fff;
            padding: 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>

<form action="index.php?act=chuyenxe_add" method="POST">
    <div class="form-group">
        <label for="matuyen">Danh mục:</label>
        <select name="matuyen" id="matuyen" required>
            <option value="0">Chọn danh mục</option>
            <?php
                if(isset($dsdm)){
                    foreach ($dsdm as $dm) {
                        echo '<option value="'.$dm['matuyen'].'">'.$dm['tentuyen'].'</option>';
                    }
                }
            ?>
        </select>
    </div>

    <div class="form-group">
        <label for="tentuyen">Tên tuyến:</label>
        <input type="text" name="tentuyen" id="tentuyen" placeholder="Tên tuyến" required>
    </div>

    <div class="form-group">
        <label for="ngaykhoihanh">Ngày khởi hành:</label>
        <input type="date" name="ngaykhoihanh" id="ngaykhoihanh" required>
    </div>

    <div class="form-group">
        <label for="giokhoihanh">Giờ khởi hành:</label>
        <input type="time" name="giokhoihanh" id="giokhoihanh" required>
    </div>

    <div class="form-group">
        <label for="diemdi">Điểm đi:</label>
        <input type="text" name="diemdi" id="diemdi" placeholder="Điểm đi" required>
    </div>

    <div class="form-group">
        <label for="diemden">Điểm đến:</label>
        <input type="text" name="diemden" id="diemden" placeholder="Điểm đến" required>
    </div>

    <div class="form-group">
        <label for="banggia">Bảng giá:</label>
        <input type="number" name="banggia" id="banggia" placeholder="Bảng giá" required>
    </div>

    <div class="form-group text-center">
        <button type="submit" name="themmoi" value="Thêm mới">Thêm mới</button>
    </div>
</form>